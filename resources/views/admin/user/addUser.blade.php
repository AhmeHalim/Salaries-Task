@extends('layouts.admin')

@section('content')


{!! Form::open(['route' => 'user.store', 'data-toggle'=>'validator', 'files'=>'true']) !!}

    <div class=" text-center"><h1>{{trans('home.add_user')}}</h1></div>

    <div class="form-group">
        <label for="name">{{trans('home.name')}} :</label>
        <input type="text" class="form-control" placeholder="{{trans('home.name')}}" name="name" required>
    </div>

    <div class="form-group">
        <label for="email">{{trans('home.email')}} :</label>
        <input type="email" class="form-control" name="email" placeholder="{{trans('home.email')}}" id="email" data-error="Please, enter a valid email" required>
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group">
        <label for="password">{{trans('home.password')}} :</label>
        <input type="password" class="form-control" name="password" placeholder="{{trans('home.password')}}" id="pwd" data-minlength="6" required>
        <div class="help-block">Your Password Must Be at Least 8 Characters</div>
    </div>

    <div class="form-group">
        <label for="image">{{trans('home.image')}} :</label>
        <input name="image" type="file" class="form-control ">
    </div>

    <div class="form-group">
        <label for="admin">{{trans('home.admin')}} :</label>
        <select class="form-control" name="admin" id="admin">
            <option value="1">{{trans('home.yes')}}</option>
            <option value="0">{{trans('home.no')}}</option>
        </select>
    </div>

  <div class="btns-bottom">
      <button type="submit" class="btn btn-primary">{{trans('home.submit')}}</button>
      <a href="{{ url('user') }}" id="back" class="btn btn-default">{{trans('home.back')}}</a>
  </div>
    {!! Form::close() !!}


@endsection

@section('script')
<script>

    $("#admin").select2({
        'placeholder':'{{trans('home.admin')}}'
    });

</script>
@endsection
