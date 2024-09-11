@extends('layouts.admin')

@section("page_title")
    Registration view 
@stop

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Registrations </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i>Registration view</li>
      </ol>
    </div>

@stop

@section('content')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <div class="panel panel-default">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="panel-body">
                    <table border="1" width="100%" cellpadding="10px">
                        <tr><th>Name</th><td>{{$data->name ?? '' }}</td></tr>
                        <tr><th>Address</th><td>{{$data->address ?? '' }}</td></tr>
                        <tr><th>Phone</th><td>{{$data->phone ?? '' }}</td></tr>
                        <tr><th>Email</th><td>{{$data->email ?? '' }}</td></tr>
                        <tr><th>Created At</th><td>{{$data->created_at ?? '' }}</td></tr>
                    </table>
                </div>
                <div style="display: flex;">
                    <a href="{{ route('approval', ['id' => $data->id]) }}">
                        <button class="form-control btn-success" style="width: 100px;">Approve</button>
                    </a>
                    <a href="{{ route('registration') }}" style="padding-left: 3px;">
                        <button class="form-control btn-info" style="width: 100px;">Back</button>
                    </a>
                </div>


            </div>
        </div>
    </div>
@endsection
  
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
$(function(){
    $("#example").dataTable();
})
</script>
