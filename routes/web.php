<?php

use App\Http\Controllers\test\fackdate;
use Illuminate\Support\Facades\Route;

/**** 
-------------------INVOKES-------------------
Route::get('/invokes', function () {
    return view('invokes.invoke');
})->name('invokes.invoke');


Route::get('/invokes/worker', function () {
    return view('invokes.worker');
})->name('invokes.worker');


Route::get('/invokes/sponser', function () {
    return view('invokes.daemen');
})->name('invokes.daemen');




 ---------------------- END INVOKE----------------------

   Route::get('/invoke/{id}', function($id){
                return view("invoke",[
                    'slag'=>$id,
                ]);
            })->name('invoke');

***/
require __DIR__.'/auth.php';

 Route::group([],function(){
    // jenral route
    Route::get('/register', function () { return view('register');})->middleware('guest')->name('register');
    Route::get('/login', function () { return view('login');})->middleware('guest')->name('login');
    Route::get('/', function () { return view('welcome');});
    Route::get('/404', function(){return view("404");})->name('404');

 });
 
 
Route::middleware(['auth'])->group(function(){

      Route::middleware(['isadmin'])->group(function(){
           Route::get('/users', function () {return view('users');});
           Route::get('/companes', function () {return view('companesindex');})->name('companes');
           Route::get('/profile/{id}', function ($id) {return view('profile',['slag'=>$id,]);})->name('profileuser');
       });

    Route::get('/home', function(){return view("home");})->middleware(['auth'])->name('home');
    Route::get('/profile', function () { return view('profile',['slag'=>'my profile',]);})->name('profile');
    Route::middleware(['hasproject'])->get('/Task/{id}', function ($id) {return view('Task',['slag'=>$id,]);})->name('Task');
    Route::middleware(['hasinvoke'])->get('/invoke/{id}', function($id){ return view("invoke",['slag'=>$id,]);})->name('invoke');
});

Route::get('/test', function(){return view("tabel")    ;});

Route::get('/date', [fackdate::class,'date']);


Route::get('/countt', function(){return view("count")    ;});

 
Route::get('/test/env', function () {
    dd('DB_DATABASE' . env('DB_DATABASE'),
    env('name' . 'DB_USERNAME'),
    env('DB_PASSWORR' .'DB_PASSWORR')); // Dump 'db' variable value one by one
});
