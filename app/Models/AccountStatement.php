<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountStatement extends Model
{
    use HasFactory;
    protected  $table = 'account_statements';
    protected $fillable = [
        'pris',
        'to',
        'from_user',
        'tayp',
        'code',
        'creted_by_user',
        'project_code',    
    ];
 
}
