@extends('layouts.admin')

@section('content')


{!! Form::open(['route' => 'employee.store', 'data-toggle'=>'validator', 'files'=>'true']) !!}

    <div class=" text-center"><h1>{{trans('home.add_employee')}}</h1></div>

    <div class="form-group">
        <label for="name">{{trans('home.name')}} :</label>
        <input type="text" class="form-control" placeholder="{{trans('home.name')}}" name="name" required>
    </div>

    <div class="form-group">
        <label for="position">{{trans('home.position')}} :</label>
        <input type="text" class="form-control" name="position" placeholder="{{trans('home.position')}}" required>
    </div>

    <div class="form-group">
        <label for="fixed_salary">{{trans('home.fixed_salary')}} :</label>
        <input type="number" min="0" class="form-control" name="fixed_salary" placeholder="{{trans('home.fixed_salary')}}" required>
    </div>

    <div class="form-group">
        <label for="bonous_percent">{{trans('home.bonous_percent')}} :</label>
        <input type="number" min="0" class="form-control" name="fixed_salary" placeholder="{{trans('home.bonous_percent')}}"  required>
    </div>

    <div class="form-group">
        <label for="admin">{{trans('home.department')}} :</label>
        <select class="form-control" name="department_id" id="department" required>
            <option></option>
            @foreach($departments as $department)
                <option value="{{$department->id}}">{{$department->title}}</option>
            @endforeach
        </select>
    </div>

  <div class="btns-bottom">
      <button type="submit" class="btn btn-primary">{{trans('home.submit')}}</button>
      <a href="{{ url('employee') }}" id="back" class="btn btn-default">{{trans('home.back')}}</a>
  </div>
    {!! Form::close() !!}


@endsection

@section('script')
<script>

    $("#department").select2({
        'placeholder':'{{trans('home.department')}}'
    });

</script>
@endsection
