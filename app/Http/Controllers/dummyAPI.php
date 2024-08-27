<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class dummyAPI extends Controller
{
    //
    function getdata(){
        return ["name" => "jatin chary"];
    }

    function getEmployees($EmpId=null){
        return $EmpId?Employee::find($EmpId):Employee::all();
    }

    function add(Request $req){

        $employee = new Employee();
        // $employee->EmpId = $req->EmpId;
        $employee->FirstName = $req->FirstName;
        $employee->LastName = $req->LastName;
        $employee->Email = $req->Email;
        $employee->PhoneNo = $req->PhoneNo;
        $employee->RoleId = $req->RoleId;
       $result = $employee->save();
       if ($result){
        return ["result" => "done"];
    }else{
         return ["result" => $result."error"];
    }
       
    }


    function update(Request $req){

        $employee = Employee::find($req->EmpId);
        // $employee->EmpId = $req->EmpId;
        $employee->FirstName = $req->FirstName;
        $employee->LastName = $req->LastName;
        $employee->Email = $req->Email;
        $employee->PhoneNo = $req->PhoneNo;
        $employee->RoleId = $req->RoleId;
       $result = $employee->save();
       if ($result){
        return ["result" => "done"];
        }else{
         return ["result" => $result."error"];
    

    }
} 
  function delete($EmpId){
    $employee = Employee::find($EmpId);
    $result = $employee->delete();
    if ($result){
        return ["result" => "done"];
        } else{
         return ["result" => $result."error"];
    }
  }

}


