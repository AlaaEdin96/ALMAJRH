<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Laravelista\Comments\Commentable;

class Mission extends Model
{
    // الموديل مخصص لستبقال بيانات انجاز العمال
    use HasFactory;

    protected  $table = 'missions';
    protected $fillable = [
 
        'taitel',
        'date',
        'user_id',
        'task_id',
        
     ];
     public function task()
     {
         return $this->belongsTo(Task::class,'task_id');
     }

     public function user()
     {
         return $this->belongsTo(User::class);
     }

     public function images() {
        return $this->morphMany(Images::class, 'parentable');
      }

}
