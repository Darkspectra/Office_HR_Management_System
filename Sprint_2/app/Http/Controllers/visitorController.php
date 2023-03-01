<?php

namespace App\Http\Controllers;


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

}
