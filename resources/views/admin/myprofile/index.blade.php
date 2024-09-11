@extends('layouts.admin')

@section("page_title")
    My Profile 
@stop

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>My Profile </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i>My Profile </li>
      </ol>
    </div>

@stop

@section('content')
    <div class="panel panel-default">
   
<div class="card card-primary card-outline">
    <div class="card-body">

        <div class="panel-body">

                <form action="{{ route('myprofile.update') }}" method="POST" id="form" class="form-validate" enctype="multipart/form-data" >
                   
                    @csrf
                    <div class="row">


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{old('name',Auth::user()->name)}}" name="name" required id="banner" >
                            </div>
                        </div>

                         <div class="col-lg-12">
                            <div class="form-group">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{Auth::user()->email}}" readonly   >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password"  id="password" autocomplete="new-password">
                                <i class="fa fa-eye" id="togglePassword" style="cursor: pointer;">View Password</i>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" equalTo="#password"  id="confirm-psw" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                 <input class="btn btn-primary" type="submit" value="Update">
                            </div>
                        </div>
                    </div>
            </form>


        </div>
    </div>
    </div>
    </div>
  
@endsection


@section('js')
    <script type="text/javascript">
     
      </script>
@stop