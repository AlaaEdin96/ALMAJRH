<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compane extends Model
{



    use HasFactory;
    protected  $table = 'companes';
    protected $fillable = [
        'name',
        'logo',
        'data',
        'user_id',
        'code_register'
      
     ];




     public function users()
     {
         return $this->hasMany(User::class,'compane_id','id');
     }
    
}
 
