<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;


// read----------------------- create a route to call view (route-->controller function call)---------------------------------
Route::get('/',[usercontroller::class,'showeruser'])->name('view');
// read--------------------- vjhi Link (route{view.user} with data --> controller function call{personaluser})----------------------------------------
Route::get('/user/{id}',[usercontroller::class,'personaluser'])->name('view.user');


// insert ----------------vjhi link (route{open}--> view call {insertuser})---------------------
Route::view('addview','/insertuser')->name('open');
// insert----------------- vjhi Link (route{insert.user}  with data --> controller function call{insertuser}) --------------------------------------
Route::post('/add',[usercontroller::class,'insertuser'])->name('insert.user');


// delete-----------------vjhi link (route{delete.user} with data--> controller function call {deleteuser})
Route::get('/delete/{id}',[usercontroller::class,'deleteuser'])->name('delete.user');


// update --------------------vjhi link (route{update.user} with data --> controller function call{updateuser})--------------
Route::get('/update/{id}',[usercontroller::class,'updateuser'])->name('update.user');
// update ---------------------updateuser link (route{openupdate} with data --> controller function call {update})-------------
Route::post('/open/{id}',[usercontroller::class,'update'])->name('openupdate');
