<?php

namespace App\Http\Controllers;
use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
      $departments = Department::all();
      return view('admin.department.department',compact('departments'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('admin.department.addDepartment');
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
      $add = new Department();
      $add->title = $request->title;
      $add->save();

      return redirect('department');
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
      $department = Department::find($id);
      return view('admin.department.editDepartment',compact('department'));
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
      $update = Department::find($id);
      $update->title = $request->title;
      $update->save();
      return redirect('department');
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
          $department = Department::findOrFail($id);
          $department->delete();
      }
  }
}
