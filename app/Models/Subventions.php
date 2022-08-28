<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subventions extends Model
{
//المودل خاص بالاموال الي عاطينها الداعيمين لتمويل المشاريع

    use HasFactory;

    protected  $table = 'malehs';
    protected $fillable = [
        'tem_id',
        'creted_by_user_id',
        'mony',
        'sponser_id'
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
