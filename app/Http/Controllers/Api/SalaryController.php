<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;
use App\Http\Resources\SalaryResource;
use App\Salary;
use DB;
class SalaryController extends Controller
{
    //

    public function monthSlaries(){
        $month = date('M');
        $year=  date('Y');
        $salaries = new SalaryResource(Salary::select(DB::raw('SUM(salary) as Salaries_total , SUM(bonous) as Bonus_total , payment_day , bonous_payment_day,month,year'))
                          ->where('month',$month)
                          ->where('year',$year)->groupBy('month')->first());
        if($salaries){
          return response()->json(['salaries'=>$salaries,'message'=>"this is ".$month." ".$year." Salaries",'status'=>200]);
        }

        return response()->json(['salaries'=>NuLL,'message'=>"Salaries Not Calculated Yet !",'status'=>200]);

    }

    public function customMonthSalaries(Request $request){
        $month = $request->month;
        $year=  $request->year;

        $salaries = new SalaryResource(Salary::select(DB::raw('SUM(salary) as Salaries_total , SUM(bonous) as Bonus_total , payment_day , bonous_payment_day,month,year'))
            ->where('month',$month)
            ->where('year',$year)->groupBy('month')->first());
        if($salaries){
            return response()->json(['salaries'=>$salaries,'message'=>"this is ".$month." ".$year." Salaries",'status'=>200]);
        }

        return response()->json(['salaries'=>NuLL,'message'=>"Salaries Not Calculated Yet !",'status'=>200]);

    }


}
