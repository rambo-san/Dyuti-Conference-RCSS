@extends('layouts.admin')

@section("page_title")
    {{Ucfirst($active)}} 
@stop

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1> {{Ucfirst($active)}}  </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i> {{Ucfirst($active)}}  </li>
      </ol>
    </div>

@stop



@section("content")

    <div class="row">
        <div class="col-sm-12">
            <div class="card mb-0">
                 <div class="card-header">
                    <div class="float-right">
                         

                    </div>
                </div>
               
                <div class="card-body">
                    <div class="">
                        <table class=" table table-stripped mb-0" id="datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    
                                    <th>Email</th>
                                     <th>Phone</th>
                                     <th>Date</th>
                                     <th>View</th>
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
                    ajax: "{{ route( 'contact.list') }}",
                    columns: [
                    {data: 'id', name: 'id', visible : false,searchable: false},
                    {data: 'name', name: 'name'},
                   
                    {data: 'email', name: 'email', orderable: false, searchable: true},

                    {data: 'phone', name: 'phone', orderable: false, searchable: true},
                    {
                        data: 'created_at',
                        name: 'created_at',
                        orderable: false,
                        searchable: true,
                        render: function (data) 
                        {
                            var date = new Date(data);
                            var formattedDate = date.toISOString().slice(0, 19).replace('T', ' ');
                            return formattedDate;
                        }
                    },
                    
                    {data: 'view', name: 'view', orderable: false, searchable: false},
                    ],
                    "order": [[ 0, "DESC" ]],
                    "iDisplayLength": 10,
                    //stateSave: true 
                });




            });


    </script>
@stop
