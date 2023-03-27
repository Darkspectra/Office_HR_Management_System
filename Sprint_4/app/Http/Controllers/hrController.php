<?php

namespace App\Http\Controllers;

use App\Models\designation;
use App\Models\employee;
use App\Models\project;
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
        // return view('assign');
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
                employee::create($data);
            }
            return 'Done';
        }
        return 'wrong file uploaded';
    }


    function pdf(){
        //$data = employee::count();
        $membrane= employee::all();
        $pdf = PDF::loadView('list', compact('membrane'));
        return $pdf->download('Employee_Number.pdf');
    }

    function cou(){
        $data = employee::count();
        return view('count', compact('data'));
    }


}