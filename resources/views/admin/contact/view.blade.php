@extends('layouts.admin')

@section("page_title")
View {{Ucfirst($active)}}
@stop

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>{{Ucfirst($active)}}</h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i>{{Ucfirst($active)}} </li>
      </ol>
    </div>
@stop


@section("content")


<div class="col-md-12 mb-3">
    
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">View {{Ucfirst($active)}}</h5>
        </div>
            <div class="card-body col-md-12">
                <div class="row">
                @if($result->name)
                <div class="col-md-12">
                <dt>Name<dt>
                <dd>{{ $result->name ?? '--' }}</dd></div>
                @endif
                @if($result->phone)
                <div class="col-md-12">
                <dt>Phone<dt>
                <dd>{{ $result->phone ?? '--' }}</dd></div>
                @endif
                @if($result->email)
                <div class="col-md-12">
                <dt>Email<dt>
                <dd>{{ $result->email ?? '--' }}</dd></div>
                @endif
                @if($result->description)
                <div class="col-md-12">
                <dt>Description<dt>
                <dd>{!! $result->description ?? '--' !!}</dd></div>
                @endif
</div>
            </div>

        </div>
</div>





    @stop

    @section("style")
    @stop

    @section("script")  
    @stop
