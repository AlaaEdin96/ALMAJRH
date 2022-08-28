<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moneys extends Model
{
    use HasFactory;
    protected  $table = 'moneys';
    protected $fillable = [
        'creted_by_user_id',
        'user_money_id', //الشخص الي بياخد الفلوس سواء مهندس ام عامل
        'task_id', 
        'supporters_has_taskes_id',
        'pris',
        'status',
        'created_at	',
         
     ];
    
     public function user()
{
    return $this->belongsTo(User::class);
}


public function task()
{
    return $this->belongsTo(Hedtask::class);
}

public function supporters_has_taskes()
{
    return $this->belongsTo(SupportersHasTaskes::class);
}

}
 
 
