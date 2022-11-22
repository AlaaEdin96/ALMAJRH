<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stephenjude\Wallet\Interfaces\Wallet;
use Stephenjude\Wallet\Traits\HasWallet;

class Team extends Model implements Wallet
{
    use HasFactory;
    use HasWallet; 

    protected  $table = 'teams';
 
    protected  $gg;
    protected $fillable = [
        'team_id',
        'project_id',
        'creted_by_user_id',
        'tayp', //eng workwr sup
        'discounts_balance',
        'wallet_balance',
        'status'
     ];


    

    public function creted()
    {
        return $this->belongsTo(User::class,'creted_by_user_id','id');
    }


    public function scopMyproject($query,$id)
    {
        return $query->where('team_id',$id);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'team_id','id');
    }


    
    public function projects()
    {
        return $this->belongsTo(Projct::class,'project_id','id');
    }

    public function getProjectTimeAttribute()
{

    return $this->projects->code .'/'. $this->user->name;
}

    public function getAmountAttribute()
{

    return $this->wallet_balance - $this->discounts_balance;
}


public function Fatorhs($val=null)
    {
        
        if ($val =='sponsers') { 
            
            return $this->hasMany(Fatorh::class,'sponser_id');
        }
        // dd($this->gg);
            return $this->hasMany(Fatorh::class,'tem_id');
    }


    public function Finances()
    {
        return $this->hasMany(Finance::class,'tem_id');
    }

    public function getTotalAttribute() 
{
    return $this->finances->sum('mony');
}

public function getTotalFatorhAttribute() 
{
    //الفواتير الي تأكد منهم الادمن
 
       return $this->fatorhs($this->tayp)->whereNotNull('check_user_id')->sum('mony');
}

public function getFatorhPendingAttribute() 
{
    //الفواتير الي قاعد متأكدش منهم الادمن
    return $this->fatorhs($this->tayp)->whereNull('check_user_id')->sum('mony');
}

}
