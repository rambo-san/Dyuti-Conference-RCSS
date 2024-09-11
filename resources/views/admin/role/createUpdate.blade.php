@extends('layouts.admin')

@section("page_title")
@if($result->id == 0) Add Role @else Update Role @endif
@stop


@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Product</h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('role.index')}}">Role</a></li>
        <li><i class="fa fa-angle-right"></i>@if($result->id == 0) Add Role @else Update Role @endif</li>
      </ol>
    </div>

@stop



    @section("content")



<div class="content">
    <div class="card">
        <div class="card-body">
         
             

            <form action="{{ route('role.update') }}" method="POST" id="form" class="form-group" >
                <input type="hidden" name="id" value="{{$result->id}}">
                        
                        @csrf
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-12 mb-3">

                                    <label for="name">Name</label>
                                    <input type="text" class="form-control " id="name" name="name" required
                                    value="{{ old('name', $result->name) }}"  @if($result->id != 0) readonly  @endif/>
                                </div>

                                <div class="table-responsive m-t-15">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Module Permission</th>
                                         <th class="text-center">View</th>
                                        <th class="text-center">Create</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($permission_grouped as $key => $permission_dt)
                               
                                        <tr>
                                            <td>{{ preg_replace('/(?<=\\w)(?=[A-Z])/'," $1", ucfirst($key)) }} </td>
                                                <td class="text-center">
                                                @if(!empty($permission_dt['view']))
                                                    <input
                                                     @if($result->id != 0 && $result->hasPermission($permission_dt['view']['name'])) checked @endif
                                                    type="checkbox" name="permissions[]" id="permission_{{ $permission_dt['view']['id'] }}"
                                                    value="{{ $permission_dt['view']['id'] }}" class="" @if($key =='dashboard') onclick="return false" checked @endif>
                                                     
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if(!empty($permission_dt['add']))
                                                    <input  
                                                    @if($result->id != 0 && $result->hasPermission($permission_dt['add']['name'])) checked @endif 

                                                    type="checkbox" name="permissions[]" id="permission_{{ $permission_dt['add']['id'] }}"
                                                    value="{{ $permission_dt['add']['id'] }}" class="">
                                                     
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                @if(!empty($permission_dt['edit']))
                                                    <input 
                                                     @if($result->id != 0 && $result->hasPermission($permission_dt['edit']['name'])) checked @endif
                                                    type="checkbox" name="permissions[]" id="permission_{{ $permission_dt['edit']['id'] }}"
                                                    value="{{ $permission_dt['edit']['id'] }}" class="">
                                                     
                                                @endif
                                            </td>
                                            
                                            <td class="text-center">
                                                @if(!empty($permission_dt['delete']))
                                                    <input 
                                                     @if($result->id != 0 && $result->hasPermission($permission_dt['delete']['name'])) checked @endif
                                                    type="checkbox" name="permissions[]" id="permission_{{ $permission_dt['delete']['id'] }}"
                                                    value="{{ $permission_dt['delete']['id'] }}" class="">
                                                     
                                                @endif
                                            </td>
                                            

                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                            </div>
                        </div>

                        


                        <div class="text-end">
                            <button class="btn btn-primary" type="submit"> @if($result->id == 0) Add Role @else Update Role
                            @endif</button>
                        </div>
                    </form>     

        
        </div>
    </div>

</div>



    @stop

    @section("style")

    @stop

    @section("script")
    
    @stop
