<?php

namespace App\Models;

use Stephenjude\Wallet\Interfaces\Wallet;
use Stephenjude\Wallet\Traits\HasWallet;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements Wallet
{
    use HasWallet; 

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'compane_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function scopeRole($query,$tayps)
    {
        $tayp =[
            'admin'=>$query->where('role','admin')->get()->isNotEmpty(),
            'user'=>$query->where('role','user')->get()->isNotEmpty(),
            'gost'=>$query->where('role','gost')->get()->isNotEmpty(),
         ];

         dd($tayp[$tayps]);
        if ($tayp['admin']) {
            dd('is admin');
        }else {
            dd("is not admin");
        }
     dd ('kk',$query->where('role','admin')->get());


    
     return $query->where('role','admin');
    }


    public function Teams()
    {
        return $this->hasMany(Team::class,'team_id','id');
    }

    public function compane()
    {
        return $this->belongsTo(Compane::class,'compane_id','id');
    }

    public function images() {
        return $this->morphMany(Images::class, 'parentable');
      }
    
}
