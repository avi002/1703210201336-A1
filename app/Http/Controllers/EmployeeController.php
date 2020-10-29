<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Employee;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function regForm(){
        return view('register');
    }

    public function insert(Request $req){
        $name = $req->name;
        $email = $req->email;
        $dob = $req->dob;
        $salary = $req->dob;
        $gender = $req->gender;
        $status = $req->status;

        $obj = new Employee();
        $obj->name = $name;
        $obj->email = $email;
        $obj->salary = $salery;
        $obj->gender = $gender;
        $obj->status = $status;
        $obj->dob = $dob;
        $obj->save();

    }
}
