@extends('layouts.app')

@section('content')




<div class="login-box">
  <div class="login-box-body">
    <h3 class="login-box-msg">Sign In</h3>
    <form method="POST" action="{{ route('login.post') }}" id="form">
        @csrf
        <div class="form-group has-feedback">
            <input type="email" class="form-control sty1" placeholder="Email" name="username" required>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control sty1" placeholder="Password" name="password" id="password" required>
            <i class="fa fa-eye" id="togglePassword" style="cursor: pointer;">View Password</i>
          </div>
        <!-- <input type="checkbox" onclick="viewPassword()">Show Password -->
        
        <div>
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember">
              Remember Me </label>
              <a href="{{route('password.request')}}" class="pull-right"><i class="fa fa-lock"></i> Forgot pwd?</a> </div>
          </div>

          <!-- /.col -->
          <div class="col-xs-4 m-t-1">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>

          <div class="col-md-12 m-t-1">
            @include('layouts.message')
              </div><!-- row -->
          <!-- /.col --> 
      </div>
  </form>
  
  </div>
  <!-- /.login-box-body --> 
</div>
<!-- /.login-box --> 

@endsection
