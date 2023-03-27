<?php

namespace App\Http\Controllers;


use App\Models\designation;
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

}
