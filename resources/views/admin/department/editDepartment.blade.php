@extends('layouts.admin')

@section('content')


{!! Form::open(['method'=>'PATCH','url' => 'department/'.$department->id,'files'=>'true']) !!}

    <div class=" text-center"><h1>{{trans('home.edit_department')}}</h1></div>
    <div class="form-group">
        <label for="title">{{trans('home.title')}} :</label>
        <input type="text" class="form-control" placeholder="{{trans('home.title')}}" name="title" value="{{$department->title}}" required>
    </div>

    <div class="btns-bottom">
      <button type="submit" class="btn btn-primary">{{trans('home.submit')}}</button>
      <a href="{{ url('department') }}" id="back" class="btn btn-default">{{trans('home.back')}}</a>
    </div>
{!! Form::close() !!}


@endsection
