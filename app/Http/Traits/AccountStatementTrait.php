<?php

namespace App\Http\Traits;

use App\Models\AccountStatement;
 
trait AccountStatementTrait {

   
    private function LogAccountStatement($mony,$to,$from_id = null,$tayp,$code,$project_id = null)
    {
        AccountStatement::create([
            'pris'=>$mony,
            'to'=>$to,
            'from_user'=>$from_id,
            'tayp'=>$tayp,
            'code'=>$code,
            'creted_by_user'=>auth()->user()->name,
            'project_code'=>$project_id, 
        ]);
    }

 
}