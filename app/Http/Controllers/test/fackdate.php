<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
 
use App\Models\Compane;
use App\Models\Fatorh;
use App\Models\Projct;
use App\Models\Task;
use App\Models\Team;
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
   

//     for ($i=0 ; $i < 30 ; $i++) { 
//       Fatorh::create(
// [
//     'tem_id' => 3,
//     'taitel' => str()->random(10),
//     'creted_by_user_id' => 1,
//     'mony' => rand(100,500),
//     'task_id'=> 3,
// ]
//       );
//     }
// return;

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


    $ali = User::create([
        'name' => 'ali',
        'email' => 'ali@ali.ali',
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

              $task1=  Task::create( [
                    'taitl' => 'معاينة المكان',
                    'order' =>  0,
                    'project_id' =>  $LY22->id,
                    'user_id' =>  1
                ]);

              $ali_team=  Team::create( [

                    'team_id' =>$ali->id,
                    'project_id' =>$LY22->id,
                    'creted_by_user_id' =>1,
                    'tayp' => 'worker',
                ]);


               for ($i=0; $i < 7; $i++) { 
                $Fatorh=  Fatorh::create([
                    'tem_id'=>$ali_team->id,
                    'taitel'=>'عنوان عنوان',
                    'creted_by_user_id'=>1,
                    'mony'=>rand(50,1200),
                    'task_id'=>$task1->id,
                    'project_id'=>$LY22->id
                    ]);
               }

return '200';

   }
}
