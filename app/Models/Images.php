<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected  $table = 'images';
    protected $fillable = [
        'url',
        'image_type',
        'parentable_id',
        'parentable_type',
      
     ];

    public function parentable() {
        return $this->morphTo();
      }
}
