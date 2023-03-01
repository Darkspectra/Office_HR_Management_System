<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class employeeController extends Controller
{
    function emlogin(Request $req)
    {
        $employee = new Employee;
        $employee->Name = $req->Name;
        $employee->Designation = $req->Designation;
        $employee->Email = $req->Email;
        $employee->Password = $req->Password;
        $employee->save();
    }
}
