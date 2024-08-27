<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class MembersControle extends Controller
{
    //
    function displayData(){
        $data = Employee::all(); 
        return view('list' ,['employees'=>$data] );
    }

    function addEmp(Request $req){
        // dd('qwdfg');
      $employee = new Employee();
      $employee->EmpId = $req->EmpId;
      $employee->FirstName = $req->FirstName;
      $employee->LastName = $req->LastName;
      $employee->Email = $req->Email;
      $employee->PhoneNo = $req->PhoneNo;
      $employee->RoleId = $req->RoleId;

    //   dd('aws');
     $employee->save();
     return redirect('addemp');
    }


    function deleteEmp($EmpId){
        $employee = Employee::find($EmpId);
        $employee->delete();
        return redirect('list');
    }

    function showData($EmpId){
        $employee =Employee::find($EmpId);
        return view('edit', ['employee' => $employee]);
    }

    function updateData(Request $req){
        // dd('aws');
        $employee = Employee::find($req->EmpId);
        $employee->FirstName = $req->FirstName;
        $employee->LastName = $req->LastName;
        $employee->Email = $req->Email;
        $employee->PhoneNo = $req->PhoneNo;
        $employee->RoleId = $req->RoleId;
        $employee->save();
        
        return redirect('list');
        
    }
}
