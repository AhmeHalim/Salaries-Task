<?php

namespace App\Http\Controllers;

use App\Salary;
use App\Employee;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    //

    public function admin()
    {
        $month= date('M');
        $year= date('Y');

        $salaries = Salary::where('month',$month)->where('year',$year)->get();
        return view('admin.index',compact('salaries','month','year'));
    }

    public function calcSalries(){

        $lastMonthDay=$day=date('Y-m-t');  /////// get the last day in the month/////
        ///////// check the date is weekend//////
        if(date('l', strtotime($lastMonthDay)) == 'Friday' || date('l', strtotime($lastMonthDay)) == 'Saturday'){
            if(date('l', strtotime($lastMonthDay)) == 'Friday'){
                $Salaries_payment_day = date('Y-m-d', strtotime('-1 day', strtotime($lastMonthDay)));
            }elseif(date('l', strtotime($lastMonthDay)) == 'Saturday'){
                $Salaries_payment_day = date('Y-m-d', strtotime('-2 day', strtotime($lastMonthDay)));
            }
        } else {
            $Salaries_payment_day = $lastMonthDay;
        }
        $month= date('M'); /////////////// currnt month///////////////
        $year= date('Y'); /////////////// currnt year///////////////
        $nextMonth = date('m', strtotime('+1 months')); /////// next month///////////
        $bounsDay = date("Y-m-d", mktime(0,0,0,$nextMonth,15)); //////15th of every month////

        if(date('l', strtotime($bounsDay)) == 'Friday' || date('l', strtotime($bounsDay)) == 'Saturday'){
            if(date('l', strtotime($bounsDay)) == 'Friday'){
                $bonus_payment_day = date('Y-m-d', strtotime('+6 day', strtotime($bounsDay)));
            }elseif(date('l', strtotime($bounsDay)) == 'Saturday'){
                $bonus_payment_day = date('Y-m-d', strtotime('+5 day', strtotime($bounsDay)));
            }
        } else {
            $bonus_payment_day = $bounsDay;
        }

        $employees = Employee::get();

        foreach($employees as $employee){
            $prevMontSalary = Salary::where('employee_id',$employee->id)->latest()->first();

            $salary = new Salary();
            $salary -> employee_id = $employee->id;
            $salary -> salary = $employee->fixed_salary;
            $salary -> payment_day = $Salaries_payment_day;
            if($prevMontSalary){
                $salary -> bonous = ($employee->fixed_salary * $employee->bonous_percent)/100;
                $salary -> bonous_payment_day = $bonus_payment_day;
            }else{
                $salary -> bonous = 0;
            }
            $salary -> month = $month;
            $salary -> year = $year;
            $salary->save();
        }

        $salaries = Salary::where('month',$month)->where('year',$year)->get();
        return response()->json(['html' => view('admin.salries_table', compact('salaries'))->render()]);

    }


    public function setlang($lang)
    {
        $langs = ['en', 'ar'];
        if (in_array($lang, $langs)) {
            session(['lang' => $lang]);
            return redirect()->back();
        }
    }

}
