<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visitor;

class visitorPage extends Controller
{
    function register(){
        return view('visitor');
    }

}
