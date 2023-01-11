@extends('layouts.login')
@section('content')


<section id="mu-hero">
<div class="container-fluid">
		  <div class="navbar-header">

            <div class="container">
                
            <nav class="navbar navbar-default mu-navbar">
                <div class="col-md-6 col-sm-10 col-sm-push-8">
                  <div class="mu-hero-right">
                  <img src="{{asset('fn/images/vec.png')}}" alt="vec.png">
                  </div>
                  
                </div>

                
                <div class="col-md-5 col-sm-1 col-sm-pull-2">
                  <div class="mu-hero-center">
                  <div class="col-md-12">
                    <h1 >{{ __('Login') }} </h1><br>
                    @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning">{{ $error }}</div>
                    @endforeach
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-warning">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label><br>
                            <input type="text" name="email" id="email" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required class="form-control">
                        </div>
                        <div class="form-group"><br>
                            <button type="submit" class="btn btn-primary mb-4">Login</button>
                            <br></br>
                            <p>Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none"><b>Sign up</b></a></p>
                        </div>
                    </form>
                   
                   
                  </div>
                  </div>
                </div>	
            </nav>
              </div>
		        </div>


    </div>

 </div>
</section>

@endsection