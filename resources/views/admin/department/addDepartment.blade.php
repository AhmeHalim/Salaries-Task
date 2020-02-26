@extends('layouts.admin')

@section('content')


{!! Form::open(['route' => 'department.store', 'data-toggle'=>'validator', 'files'=>'true']) !!}

    <div class=" text-center"><h1>{{trans('home.add_department')}}</h1></div>

    <div class="form-group">
        <label for="title">{{trans('home.title')}} :</label>
        <input type="text" class="form-control" placeholder="{{trans('home.title')}}" name="title" required>
    </div>

    <div class="btns-bottom">
        <button type="submit" class="btn btn-primary">{{trans('home.submit')}}</button>
        <a href="{{ url('department') }}" id="back" class="btn btn-default">{{trans('home.back')}}</a>
    </div>
    {!! Form::close() !!}

@endsection
