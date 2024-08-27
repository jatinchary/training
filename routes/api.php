<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
// use App\Http\Controllers\MembersControle;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
    
//dummy api 
Route::get('/data', [dummyAPI::class, 'getdata']); 
//get data from employees table
Route::get('users/{EmpId?}',[dummyAPI::class, 'getEmployees']);

//post toute to inssert data in employees table
Route::post('add',[dummyAPI::class, 'add']);

//put toute to update data in employees table
Route::put('update/{EmpId?}',[dummyAPI::class, 'update']);

// delete in employee table
Route::delete('delete/{EmpId?}',[dummyAPI::class, 'delete']);