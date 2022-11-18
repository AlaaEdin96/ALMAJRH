<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fatorh extends Model
{
    use HasFactory;

    protected  $table = 'fatorhs';
    protected $fillable = [
        'tem_id',
        'taitel',
        'creted_by_user_id',
        'mony',
        'task_id',
        'sponser_id',
        'check_user_id', 
        'project_id'         
    ];
    protected  $attributes = [
       // 'status' => 0, 
       
    ];


   
    public function user()
    {
        return $this->belongsTo(User::class,'creted_by_user_id');
    }
    public function project()
    {
        return $this->belongsTo(Projct::class,'project_id');
    }

    public function team()
     {
        return $this->belongsTo(Team::class,'tem_id','team_id');
     }

     public function sponser()
     {
        return $this->belongsTo(Team::class,'sponser_id','id');
     }
     
     public function creted_by()
     {
         return $this->belongsTo(User::class,'creted_by_user_id','id');
     }

     public function mission()
     {
         return $this->belongsTo(Task::class,'task_id','id');
     }
     
     public function images() {
        return $this->morphMany(Images::class, 'parentable');
      }
    
}
