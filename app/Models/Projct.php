<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
//use Laravelista\Comments\Commentable;
class Projct extends Model
{
    use HasFactory;
   // use HasRelationships,Commentable;


    protected  $table = 'projects';
    protected $fillable = [
        'name',
        'code',
        'data',
        'user_id',
        'compane_id',
     ];

     public function maham()
     {
         return $this->hasManyDeep(Muhima::class, [Bodytasks::class],
        
        
         [
            'hed_task_id', // Foreign key on the "users" table.
            'body_task_id'     // Foreign key on the "comments" table.
         ],
         [
           'id', // Local key on the "countries" table.
           'id', // Local key on the "users" table.
          ]
        
        );
     }

 
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function taskes()
    {
        return $this->hasMany(Task::class,'project_id');
    }
     
 
}
