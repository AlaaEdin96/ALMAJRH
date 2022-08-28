<?php

namespace App\Http\Traits;

use Carbon\Carbon;

trait DateTimeImageTrait {

    public function MonthName()
    {  
        $todayDate = Carbon::now()->format('m/d/Y');;
       
        $date = Carbon::createFromFormat('m/d/Y', $todayDate);
        $monthName = $date->format('F');
        $monthName = $monthName.$date->format('Y');
        return $monthName; 
    }

    public function NewFolder($Dat )
    {
        //////////
        
        $path = public_path().'\storage\compane\\'.$Dat;
        if (!file_exists($path)) {
           dd($path);
           $file_path = storage_path($path);

        }

        return $path;
         
    }

 
}