<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
//use App\Models\hr;

class hrController extends Controller
{
    function hrlogin(Request $req)
    {
        $hr = User::where(['email' => $req->email])->first(); //can check the data what he received from the form
        if (!$hr || !Hash::check($req->password, $hr->password)) {
            return "Incorrect password";
        } else {
            $req->session()->put('user', $hr);
            return redirect('/');
        }
    }
}