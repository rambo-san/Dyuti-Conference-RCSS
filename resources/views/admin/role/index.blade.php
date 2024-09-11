@extends('layouts.admin')

@section("page_title")
Role
@stop

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Role</h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i>Role</li>
      </ol>
    </div>

@stop



@section("content")

<div class="row">
        <div class="col-sm-12">
            <div class="card tab-style1 ">
                <div class="card-header">
                    <div class="float-right">
                        @can('product add')
                            <a href="{{route('role.create')}}" class="btn btn-primary" ><i class="fa fa-plus"></i> Add Role</a>
                        @endcan

                    </div>
                </div>


              




                <div class="card-body">
                
                    <div class="">
                        <table class=" table table-stripped mb-0" id="datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



            @stop

            @section("style")

            @stop

            @section("script")
            <script type="text/javascript">
                jQuery(document).ready(function () {
                    $('#datatable').DataTable({
                        responsive: true,
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route( 'role.list' ) }}",
                        columns: [
                        {data: 'id', name: 'id'},
                        {data: 'name', name: 'name'},
                        {data: 'edit', name: 'edit', orderable: false, searchable: false},
                        {data: 'delete', name: 'delete', orderable: false, searchable: false},
                        ],
                        "order": [[ 0, "asc" ]],
                        "iDisplayLength": 10,
                    });




                });



        // Status Confirm
        function confirm(id, status) {
            $("#actionLabel").html("Confirmation");
            if(status == 0)
                $("#actionMessage").html("Are you sure you want to disable?");
            else if(status == 1)
                $("#actionMessage").html("Are you sure you want to enable?");
            else
                $("#actionMessage").html("Are you sure you want to delete?");

            $("#actionURL").attr("onclick", "return confirmAjax(" + id + "," + status + ")");
            $("#action").modal('show');

            return false;
        }

        // Status Confirm Ajax
        function confirmAjax(id, status) {
            if(status == 2) {
                var url = "{{ route( 'role.destroy', ["ID"] ) }}";
                var new_url = url.replace(/ID/g, id);

            }
            else {

                var url = "{{ route( 'role.action', [ "ROLE_ID", "STATUS"] ) }}";
                var new_url = url.replace(/ROLE_ID/g, id);
                new_url = new_url.replace(/STATUS/g, status);
               
            }

            $("#loaderModal").show();

            $.ajax({
                url: new_url,
                type: 'GET',
                cache: false,
                success: function (data) {
                    $("#action").modal("hide");

                    if(data.response == "success")
                        displaySuccessMsg(data.message);
                    else
                        displayFailMsg(data.message);

                    $('#datatable').DataTable().draw(false);
                    $("#loaderModal").hide();
                }
            });

            return false;
        }
    </script>
    @stop
