@extends('layouts.admin')

@section('content')

  <div class="btns-top">
  <a class="btn btn-primary" href="{{ URL::to('department/create') }}" >{{trans('home.add')}}</a>
  <button type="button" name="btn_delete" id="btn_delete" class="btn btn-danger">{{trans('home.delete')}}</button>
  </div>

  <div class=" text-center"><h1>{{trans('home.departments')}}</h1></div>

  <table  class="table table-striped table-bordered table-hover" id="datatable">
    <thead>
      <th><input type="checkbox" id="checkAll"/></th>
      <th>{{trans('home.id')}}</th>
      <th>{{trans('home.title')}}</th>
    </thead>
    <tbody>
      @foreach ($departments as $department)
          <tr id="{{$department->id}}">
            <td><input type="checkbox" name="checkbox"  value="{{$department->id}}" /> </td>
            <td> {{ $department->id }}</td>
            <td> <a href="{{ route('department.edit', $department->id) }}">{!! $department->title !!}</a></td>
          </tr>
      @endforeach
    </tbody>
  </table>

@endsection
