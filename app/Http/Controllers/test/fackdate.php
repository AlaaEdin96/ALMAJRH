<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
 
use App\Models\Compane;
use App\Models\Projct;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class fackdate extends Controller
{
    public $password='12345678';
    public $user='user';
    public $companes='companes';
    public $sponsers='sponsers';
    public $admin='admin';
     

   public function date()
   {
   
    $adem = User::create([
        'name' => 'ادم',
        'email' => 'adem@adem.adem',
        'password' => Hash::make($this->password),
        'creted_by_user_id'=> 0,
        'role'=>$this->admin  
    ]);



    
   
    $mtuah = User::create([
        'name' => 'مطاوع',
        'email' => 'm@m.m',
        'password' => Hash::make($this->password),
        'creted_by_user_id'=>1,
        'role'=>$this->user  
    ]);


    $osamah = User::create([
        'name' => 'اسامه',
        'email' => 'o@o.o',
        'password' => Hash::make($this->password),
        'creted_by_user_id'=>1,
        'role'=>$this->user  
    ]);

    $emad = User::create([
        'name' => 'عماد',
        'email' => 'e@e.e',
        'password' => Hash::make($this->password),
        'creted_by_user_id'=>1,
        'role'=>$this->sponsers ,
    ]);


   $almdar= Compane::create( [
        'name' => 'المدار',
        'logo' =>  0,
        'user_id' =>  1,
        'code_register'=>str()->random(rand(20,30))]);

        $libyana=   Compane::create( [
            'name' => 'ليبيانا',
            'logo' =>  0,
            'user_id' =>  1,
            'code_register'=>str()->random(rand(20,30))]);

            $ht= Compane::create( [
                'name' => 'H T GROP',
                'logo' =>  0,
                'user_id' =>  1,
                'code_register'=>str()->random(rand(20,30))]);  

                $fathe = User::create([
                    'name' => 'فتحي',
                    'email' => 'f@f.f',
                    'password' => Hash::make($this->password),
                    'creted_by_user_id'=>1,
                    'role'=>$this->companes ,
                    'compane_id'=> $almdar->id
                ]);



              $T01=  Projct::create([
                    'name' =>'برج 01',
                    'code' =>  "T01",
                    'compane_id' =>  $almdar->id,
                    'user_id' =>  1
                ]);

                $LY22=  Projct::create([
                    'name' =>'LyHome',
                    'code' =>  "LY22",
                    'compane_id' =>  $almdar->id,
                    'user_id' =>  1
                ]);

return '200';

   }
}
