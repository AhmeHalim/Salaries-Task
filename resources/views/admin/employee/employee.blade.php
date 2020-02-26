@extends('layouts.admin')

@section('content')

  <div class="btns-top">
  <a class="btn btn-primary" href="{{ URL::to('employee/create') }}" >{{trans('home.add')}}</a>
  <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{trans('home.delete')}}</button>
  </div>

  <div class=" text-center"><h1>{{trans('home.employees')}}</h1></div>

  <table  class="table table-striped table-bordered table-hover" id="datatable">
    <thead>
      <th><input type="checkbox" id="checkAll"/></th>
      <th>{{trans('home.id')}}</th>
      <th>{{trans('home.name')}}</th>
      <th>{{trans('home.position')}}</th>
      <th>{{trans('home.salary')}}</th>
      <th>{{trans('home.department')}}</th>
    </thead>
    <tbody>
      @foreach ($employees as $employee)
          <tr id="{{$employee->id}}">
            <td><input type="checkbox" name="checkbox"  value="{{$employee->id}}" /> </td>
            <td> <a href="{{ route('employee.edit', $employee->id) }}">{{ $employee->id }}</a></td>
            <td> <a href="{{ route('employee.edit', $employee->id) }}">{!! $employee->name !!}</a></td>
            <td> <a href="{{ route('employee.edit', $employee->id) }}">{!! $employee->position !!}</a></td>
            <td> <a href="{{ route('employee.edit', $employee->id) }}">{{ $employee->fixed_salary }}</a></td>
            <td> @if($employee->department)<a href="{{ route('employee.edit', $employee->id) }}">{{ $employee->department->title }}</a> @endif</td>
          </tr>
      @endforeach
    </tbody>
  </table>

@endsection
