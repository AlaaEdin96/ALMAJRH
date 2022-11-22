<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected  $table = 'tasks';
    protected $fillable = [
        'taitl',
        'order',
        'user_id',
        'project_id',
     ];

     public function fatorh()
     {
         return $this->hasMany(fatorh::class,'supporters_has_taskes_id','id');
     }
     public function mission()
     {
         return $this->hasMany(Mission::class,'body_task_id','id');
     }
 
}
