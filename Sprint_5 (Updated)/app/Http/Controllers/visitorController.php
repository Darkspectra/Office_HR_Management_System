<?php

namespace App\Http\Controllers;


use App\Models\designation;
use App\Models\clientInfo;
use Illuminate\Http\Request;
use App\Models\visitor;

class visitorController extends Controller
{

    function vlogin(Request $req)
    {
        $visitor = new Visitor;
        $visitor->name = $req->name;
        $visitor->email = $req->email;
        $visitor->number = $req->number;
        $visitor->quaries = $req->quaries;
        $visitor->save();
        return redirect('showAnswer');
    }

    function insertD(Request $req)
    {
        $des = new designation;
        $des->designation = $req->designation;
        $des->seat = $req->seat;
        $des->benefits = $req->benefits;
        $des->save();
        return redirect('designation');
    }

    function showV()
        {
            $data= visitor::all();
            return view('viewVisitorQ', ['members'=>$data]);
        }

    function clientInfo(Request $req){
        $client = new clientInfo;
        $client->Name = $req->name;
        $client->Address = $req->address;
        $client->Education = $req->education;
        $client->Skills = $req->skills;
        $client->save();
        return redirect('clientInfo');
    }

}
