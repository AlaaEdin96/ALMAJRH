<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;


    protected  $table = 'teams';

    protected $fillable = [
        'team_id',
        'project_id',
        'creted_by_user_id',
        'tayp', //eng workwr sup
     ];


     public function user()
    {
        return $this->belongsTo(User::class,'team_id','id');
    }

    public function creted()
    {
        return $this->belongsTo(User::class,'creted_by_user_id','id');
    }

    public function projects()
    {
        return $this->belongsTo(Projct::class,'project_id','id');
    }

    public function scopMyproject($query,$id)
    {
        return $query->where('team_id',$id);
    }



}
