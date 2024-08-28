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
        $requiredFields = [ 'FirstName', 'LastName', 'Email', 'PhoneNo', 'RoleId'];
        foreach ($requiredFields as $field) {
            if (!$req->has($field)) {
                return ["result" => "$field not entered"];
            }
        }
    
        $employee =new Employee();
        
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


    function update(Request $req , $EmpId=null){

        if ($EmpId === null) {
            return ["result" => "Please provide an employee ID"];
        }
        $requiredFields = ['FirstName', 'LastName', 'Email', 'PhoneNo', 'RoleId'];
        foreach ($requiredFields as $field) {
            if (!$req->has($field)) {
                return ["result" => "$field not entered"];
            }
        }
    
        $employee = Employee::find($EmpId);
        if (!$employee) {
            return ["result" => "Employee not found"];
        }
        $employee->FirstName = $req->FirstName;
        $employee->LastName = $req->LastName;
        $employee->Email = $req->Email;
        $employee->PhoneNo = $req->PhoneNo;
        $employee->RoleId = $req->RoleId;
        $result = $employee->save();
        if ($result){
            return ["result" => "done"];
        } else {
            return ["result" => "error"]; 
        }
    }
    
public function delete($EmpId = null) {
    // Check if EmpId is null or not provided
    if ($EmpId === null) {
        return ["result" => "Please provide an employee ID"];
    }
    $employee = Employee::find($EmpId);
    if (!$employee) {
        return ["result" => "Employee not found"];
    }
    $result = $employee->delete();
    if ($result) {
        return ["result" => "done"];
    } else {
        return ["result" => "error deleting data"];
    }
}
}


