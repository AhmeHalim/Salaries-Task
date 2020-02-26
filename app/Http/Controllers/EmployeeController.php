<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
      $employees = Employee::all();
      return view('admin.employee.employee',compact('employees'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      $departments = Department::get();
      return view('admin.employee.addEmployee',compact('departments'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
      $add = new Employee();
      $add->name = $request->name;
      $add->position = $request->position;
      $add->department_id = $request->department_id;
      $add->fixed_salary = $request->fixed_salary;
      $add->bonous_percent	 = $request->bonous_percent	;
      $add->save();

      return redirect('employee');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
      $employee = Employee::find($id);
      $departments = Department::get();
      return view('admin.employee.editEmployee',compact('employee','departments'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
      $update = Employee::find($id);
      $update->name = $request->name;
      $update->position = $request->position;
      $update->department_id = $request->department_id;
      $update->fixed_salary = $request->fixed_salary;
      $update->bonous_percent	 = $request->bonous_percent	;
      $update->save();

      return redirect('employee');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($ids)
  {
      //
      $ids = explode(',', $ids);
      if ($ids[0] == 'on') {
          unset($ids[0]);
      }
      foreach ($ids as $id) {
          $employee = Employee::findOrFail($id);
          $employee->delete();
      }
  }
}
