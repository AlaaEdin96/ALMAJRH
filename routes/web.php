<?php

use App\Events\testevint;
use App\Http\Controllers\Controller;
use App\Models\Compane;
use App\Models\test;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/test', function () {
 dd( Compane::with('users')->find(1));
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/users', function () {
    return view('users');
});

Route::group([],function(){

/********************Auht******************* */
Route::get('/register', function () { return view('register');})->middleware('guest')->name('register');
//Route::get('/login', function () { return view('login');})->middleware('guest')->name('login');




/****************************************** */


Route::get('/companes', function () {
    return view('companesindex');
})->name('companes');

/***-------------------INVOKES-------------------***/
Route::get('/invokes', function () {
    return view('invokes.invoke');
})->name('invokes.invoke');


Route::get('/invokes/worker', function () {
    return view('invokes.worker');
})->name('invokes.worker');


Route::get('/invokes/sponser', function () {
    return view('invokes.daemen');
})->name('invokes.daemen');


/***---------------------- END INVOKE----------------------** */

Route::get('/testliver', function(){

    return view('testliver');
});

Route::get('/project/create', function () {
    return view('livewire.project.create');
})->name('project.create');

Route::get('/project', function () {
    return view('livewire.project.index');
})->name('project');

Route::get('/project/show', function () {
    return view('livewire.project.show');
})->name('project.show');



   Route::get('/logout', function () {
    return "logout";
})->name('logout');









    Route::get('User', function () {
        return view('livewire.user.index');
    })->name('User.index');


    Route::get('User/create', function () {
        return view('livewire.user.create');
    })->name('User.store');
      

    Route::get('User/show', function () {
        return view('livewire.user.show');
    })->name('User.show');

    Route::get('test2', function () {
        return view('test2');
    });
    
        /*---------------------------*/  
        
            Route::get('/Task/{id}', function ($id) {
                return view('Task',[
                    'slag'=>$id,
                ]);
            })->name('Task');

            Route::get('/moheed/{id}', function ($id) {
                return User::where('id','=',"'or 1=1 --")->toSql();
            });

            Route::get('/companeprofile/{id}', function ($id) {
                return view('companeprofile',[
                    'slag'=>$id,
                ]);
            })->name('companeprofile');
        
            Route::get('/invoke/{id}', function($id){
                return view("invoke",[
                    'slag'=>$id,
                ]);
            })->name('invoke');




        /*---------------------------*/  
                
            Route::get('/company', function () {
                return view('company');
            })->name('company.index');




            Route::get('/accounting', function () {
                return view('accounting-sponsers');
            })->name('accounting');


        /*---------------------------*/




});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';


Route::get('/home', function(){
    return view("home");
})->middleware(['auth'])->name('home');

