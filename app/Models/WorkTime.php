<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkTime extends Model
{
    use HasFactory;
    protected  $table = 'works';
    protected $fillable = [
        'user_id',
        'hed_task_id',
        'lociton',
        'imag',
        'work_end',
        'status', 
     ];

     protected  $attributes = [
        'status' => 0, 
       
    ];

     // Carbon instance fields
protected $dates = ['created_at', 'updated_at', 'work_end'];

public function hed_task()
{
    return $this->belongsTo(Hedtask::class);
}
}


 