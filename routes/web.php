<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersControle;
use App\Http\Controllers\AddEmpController;
// Route for the home page
Route::get('/', function () {
    return view('welcome');
});


// Route with an optional parameter
Route::get('/jatin/{id?}', function (?string $id = null) {
    return view('jatinpage');
});

// Route group with middleware for authenticated and verified users
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
/////curd operators

//display the employe list
Route::get('list',  [MembersControle::class, 'displayData' ]); 

//add emp to db
Route::post('addemp',  [MembersControle::class, 'addEmp']);
Route::view('addemp', 'addEmployee');
// delete items from emp table 
Route::get('delete/{EmpId}', [MembersControle::class, 'deleteEmp']);
//display data in the table of the employees list
Route::get('edit/{EmpId}', [MembersControle::class, 'showData']);
//update data in the table
Route::post('edit', [MembersControle::class, 'updateData']);
