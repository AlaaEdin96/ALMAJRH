<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maleh extends Model
{
    
    use HasFactory;
    protected  $table = 'malehs';
    protected $fillable = [
        'tem_id',
        'creted_by_user_id',
        'mony',
        'description'  , 
     ];

     public function team()
     {
        return $this->belongsTo(Team::class,'tem_id','id');
     }
     
     public function creted_by()
     {
         return $this->belongsTo(User::class,'creted_by_user_id','id');
     }
}
