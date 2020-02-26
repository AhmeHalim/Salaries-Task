
@extends('layouts.app')
@section('content')
<section id="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h1 class="wow fadeInDown">company Salaries</h1>
                    <p class="wow fadeInDown" data-wow-delay="0.3s">company is handling their sales payroll</p>
                    <div class="wow fadeInDown" data-wow-delay="0.3s">
                      @guest
                        <a class="btn btn-default btn-home" href="{{url('/login')}}" role="button">Admin Login</a>
                      @endguest

                      @auth
                    	  <a class="btn btn-default btn-home" href="{{url('/admin')}}" role="button">Admin Panel</a>
                      @endauth
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection
