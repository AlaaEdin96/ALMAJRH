<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
//المودل خاص بالاموال الي عاطينها الداعيمين لتمويل المشاريع

    use HasFactory;

    protected  $table = 'malehs';
    protected $fillable = [
        'tem_id',
        'creted_by_user_id',
        'mony',
        'description',
        'tayp'
     ];

  

     public function team()
     {
        return $this->belongsTo(Team::class,'tem_id','id');
     }
     
     public function creted_by()
     {
         return $this->belongsTo(User::class,'creted_by_user_id','id');
     }


     public function getTotalAttribute() 
{
    return    $this->ohda - $this->mablg  ;
}


public function getOhdaAttribute() 
{
    return  $this->where('tayp','عهدة')->sum('mony');
}

public function getMablgAttribute() 
{
    return   $this->where('tayp','مبلغ')->sum('mony');
}
}
