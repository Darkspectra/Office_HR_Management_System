<?php

namespace App\Http\Controllers;

use App\Models\designation;
use App\Models\employee;
use App\Models\csvemployee;
use App\Models\hr;
use App\Models\project;
use App\Models\clientInfo;
use App\Models\visitor;
use App\Models\vreply;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PDF;
//use App\Models\hr;

class hrController extends Controller
{
    function hrlogin(Request $req2)
    {
        $hr = User::where(['email' => $req2->email])->first(); //can check the data what he received from the form
        
        if (!$hr || !Hash::check($req2->password, $hr->password)) {
            return "Incorrect password";
        } else {
            $req2->session()->put('user', $hr);
            return redirect('/');
        }
    }

    function show()
    {
        $data= employee::all();
        return view('list', ['membrane'=>$data]);
    }

    function delete($id)
    {
        $data= employee::find($id);
        $data->delete();
        return redirect('list');
    }

    function showData($id)
    {
        $data= employee::find($id);
        return view('update',['data'=>$data]);
    }
    function update(Request $req)
    {
        $data= employee::find($req->id);
        $data->Name=$req->name;
        $data->Designation=$req->designation;
        $data->Email=$req->email;
        $data->save();
        return redirect('list');
    }
//===============================================

    function showA()
    {
        $data= employee::all();
        return view('assign', ['members'=>$data]);
    }

    function showData2($id)
    {
        $data= employee::find($id);
        return view('projectList',['data'=>$data]);
    }

    function projectUpdate(Request $req)
    {
        $pro = new Project;
        $pro->ProjectName = $req->pro;
        $pro->ProjectID = $req->idna;
        $pro->Duration = $req->dura;
        $pro->Name = $req->name;
        $pro->Email = $req->email;
        $pro->save();
        // return redirect('assign');
    }

    function showPro()
    {
        $data= project::all();
        return view('show_project', ['members'=>$data]);
    }

    function deletePro($id)
    {
        $data= project::find($id);
        $data->delete();
        return redirect('show_project');
    }
//===============================================
    function showD()
    {
        $data= designation::all();
        return view('designation', ['members'=>$data]);
    }

    function showUpdateD($id)
    {
        $data= designation::find($id);
        return view('updateD',['data'=>$data]);
    }

    function updateD(Request $req)
    {
        $data= designation::find($req->id);
        $data->designation=$req->Designation;
        $data->seat=$req->Seat;
        $data->benefits=$req->Benefits;
        $data->save();
        return redirect('designation');
    }

//============================================

    public function index(){
        return view('list');


    }


    public function store(){
        if (request()->has('mycsv')){
            $data = array_map('str_getcsv', file(request()->mycsv));
            $header = $data[0];
            unset($data[0]);
    
            foreach ($data as $value){
                $data = array_combine($header, $value);
                csvemployee::create($data);
            }
            return redirect('list');
        }
        return 'wrong file uploaded';
    }


    function pdf(Request $req){
        //$data = employee::count();
        $membrane= employee::all();
        $search = $req['search'] ?? "";
        $co = employee::count();
        $pdf = PDF::loadView('list', compact('membrane', 'search','co'));
        return $pdf->download('Employee_Number.pdf');
    }


//////////////////////////////////////////////
    public function sea(Request $req){
        $search = $req['search'] ?? "";
        if ($search != ""){
            $membrane = employee::where('Name', 'LIKE', "%$search%")->get();
        } else {
            $membrane = employee::all();
        }
        $co = employee::count();
        $data = compact('membrane', 'search', 'co');
        return view('list')->with($data);
    }

///////////////////LoGIN HR////////////////////////////


    function Hlogin(Request $req){
         $hl = User::where(['email' => $req->Email])->first();
         //return $hl->Password;
         if (!$hl || ($req->password != $hl->ID_no)) {
            return "Incorrect password";
        } else {
            $req->session()->put('hl', $hl);
            return redirect('/list');
        }
    }


    function Hcred(Request $req){
        $hl = User::where(['email' => $req->Email])->first();
        if (!$hl || !Hash::check($req->password, $hl->Password)) {
           return "Incorrect password";
       } else {
           $req->session()->put('hl', $hl);
           return redirect('/forgetPass/1');
       }
   }

///////////////////LoGIN EM////////////////////////////

    function Elogin(Request $req){
        $hl = employee::where(['email' => $req->Email])->first();
        //return $hl->Name;
        if (!$hl || ($req->password != $hl->Password)) {
            return "Incorrect password";
        } else {
            $req->session()->put('hl', $hl);
            return redirect('/viewProject');
        }
    }

/////////////////ForGET PASS//////////////////////////

    function showHR()
        {
            $data= hr::all();
            return view('forgetpassList', ['members'=>$data]);
        }


    function showHRin($id)
        {
            $data= hr::find($id);
            return view('forgetPass',['data'=>$data]);
        }

    function forgetPass(Request $req)
        {
            $data= hr::find($req->id);
            $data->ID_no=$req->ID_no;
            $data->Email=$req->Email;
            $data->Password=$req->Password;
            $data->save();
            return redirect('Hlogin');
        }

////////////////////ViewDesiG////////////////////////

    function showDesig()
        {
            $data= designation::all();
            return view('viewDesignation', ['members'=>$data]);
        }

//////////////////ViewProject///////////////////////

    function showP()
            {
                $data= project::all();
                return view('viewProject', ['members'=>$data]);
            }

/////////////////SearchPro//////////////////////////

    public function seaP(Request $req){
        $search = $req['search'] ?? "";
        if ($search != ""){
            $membrane = project::where('Name', 'LIKE', "%$search%")->get();
        } else {
            $membrane = project::all();
        }
        $data = compact('membrane', 'search');
        return view('viewProject')->with($data);
    }

///////////////////////////////////////////////////

    function showCinfo()
    {
        $data= clientInfo::all();
        return view('showCinfo', ['membrane'=>$data]);
    }

/////////////////////Reply////////////////////
    function Re($id)
        {
            $data= visitor::find($id);
            return view('showReply',['data'=>$data]);
        }

        function repUpdate(Request $req)
        {
            $pro = new vreply;
            $pro->Name = $req->name;
            $pro->Question = $req->ques;
            $pro->Answer = $req->reply;
            $pro->save();
            return redirect('showV');
        }

        function showAns()
        {
            $data= vreply::all();
            return view('showAnswer', ['members'=>$data]);
        }

////////////////Search Reply//////////////

    public function seaA(Request $req){
        $search = $req['search'] ?? "";
        if ($search != ""){
            $members = vreply::where('Name', 'LIKE', "%$search%")->get();
        } else {
            $members = vreply::all();
        }
        $data = compact('members', 'search');
        return view('showAnswer')->with($data);
    }



}