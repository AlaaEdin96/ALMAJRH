<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    use HasFactory;
  
    protected  $table = 'user_wallets';
    protected $fillable = [
        'creted_by_user_id',
        'user_id',
        'mony',
        'description',
     ];


     public function user()
     {
         return $this->belongsTo(User::class,'user_id','id');
     }
 
     public function creted()
     {
         return $this->belongsTo(User::class,'creted_by_user_id','id');
     }
}
