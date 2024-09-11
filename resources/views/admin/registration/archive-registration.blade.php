@extends('layouts.admin')

@section("page_title")
    Registrations 
@stop

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Registrations </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i>Registrations </li>
      </ol>
    </div>

@stop

@section('content')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
  
  

  <div class="panel panel-default">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="panel-body">
                    <table id="reg" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Theme</th>
                            <th>Date</th>
                            <th>Nationality</th>
                            <th>Food</th>

                            <!-- //////////////////////////////////////////////////////////// -->
                            <th>Designation</th>    
                            <th>Gender</th> 
                            <th>Organisation</th>   
                            <th>Passport Number</th>    
                            <th>Discipline</th> 
                            <th>Address</th>    
                            <th>Phone</th>  
                            <th>Email</th>  
                            <th>Presenting Paper</th>   
                            <th>Country Type</th>   
                            <th>User Type</th>  
                            <th>Number of Days</th> 
                            <th>Accommodation</th>  
                            <th>Receipt</th>    
                            <th>Amount</th> 
                            <th>Currency</th>   
                            <th>View</th>
                            <th>Restore</th>
                            <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $dat)
                            
                            <tr>
                                <td>{{$dat->name}}</td>
                                <td>
                                    @if(isset($dat->conference_theme))
                                        @php
                                            $themeIds = explode(',', $dat->conference_theme);
                                        @endphp

                                        @foreach($themeIds as $themeId)
                                            @if(isset(config('constant.conference_theme')[$themeId]))
                                                {{ config('constant.conference_theme')[$themeId]['title'] }} {{ config('constant.conference_theme')[$themeId]['date'] }}<br>
                                            @endif
                                        @endforeach
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>@php 
                                $displayValues = [];
                                @endphp
                                @if(isset($dat->participation_date))
                                    @php
                                        $participationDateValues = explode(',', $dat->participation_date);
                                        
                                    @endphp

                                    @foreach($participationDateValues as $value)
                                        @switch($value)
                                            @case('10')
                                                @php $displayValues[] = '10/01/24'; @endphp
                                                @break
                                            @case('10M')
                                                @php $displayValues[] = '10th Morning'; @endphp
                                                @break
                                            @case('10A')
                                                @php $displayValues[] = '10th Afternoon'; @endphp
                                                @break
                                            @case('11')
                                                @php $displayValues[] = '11/01/24'; @endphp
                                                @break
                                            @case('11M')
                                                @php $displayValues[] = '11th Morning'; @endphp
                                                @break
                                            @case('11A')
                                                @php $displayValues[] = '11th Afternoon'; @endphp
                                                @break
                                            @case('12')
                                                @php $displayValues[] = '12/01/24'; @endphp
                                                @break
                                            @case('12M')
                                                @php $displayValues[] = '12th Morning'; @endphp
                                                @break
                                            @case('12A')
                                                @php $displayValues[] = '12th Afternoon'; @endphp
                                                @break
                                            @case('13')
                                                @php $displayValues[] = '13/01/24'; @endphp
                                                @break
                                            @case('13M')
                                                @php $displayValues[] = '13th Morning'; @endphp
                                                @break
                                            @case('13A')
                                                @php $displayValues[] = '13th Afternoon'; @endphp
                                                @break
                                        @endswitch
                                    @endforeach
                                @endif

                                {{ implode(', ', $displayValues) }}</td>
                                <td>{{$dat->nationality ?? '' }}</td>
                                <td>{{($dat->food==0)?"Veg":"Non-Veg"}}</td>

                                <!-- //////////////////////////////////////////////////// -->
                                <td>{{config('constant.designation')[$dat->designation] ?? ''}}</td>
                                <td>{{($dat->gender=='f')?"Female":"Male"}}</td>
                                <td>{{$dat->organization ?? '' }}</td>
                                <td>{{$dat->passport_no ?? '' }}</td>
                                <td>{{$dat->discipline ?? '' }}</td>
                                <td>{{$dat->address ?? '' }}</td>
                                <td>{{$dat->phone ?? '' }}</td>
                                <td>{{$dat->email ?? '' }}</td>
                                <td>{{($dat->presenting_paper==1)?"Yes":"No"}}</td>
                                <td>{{$dat->country_type ?? '' }}</td>
                                <td>{{$dat->user_type ?? '' }}</td>
                                <td>{{$dat->no_of_days ?? ''}}</td>
                                <td>{{($dat->accomodation==1)?"Yes":"No"}}</td>
                                <td>@if($dat->reciept) <a href="{{ Storage::url($dat->reciept) }}" target="_blank">View Reciept</a> @else -- @endif </td>
                                <td>{{$dat->amount ?? '' }}</td>
                                <td>{{$dat->currency ?? '' }}</td>
                                <!-- <td>{{$dat->created_at ?? '' }}</td> -->

                                <!-- /////////////////////////////////////////////////// -->
                                
                                <td><a href="{{ route('registration.archive-view', ['id' => $dat->id]) }}"><i class="fa fa-eye"></i></a></td>
                                
                                <!-- <td><a href="{{ route('registration.error') }}"><i class="fa fa-eye"></i></a></td> -->
                                
                                <td>
                                    <a href="{{ route('registration.restore', ['id' => $dat->id]) }}">
                                        <i class="fa fa-check-square-o"></i>
                                    </a>
                                </td>

                                <td>
                                    <form action="{{ route('registration.force-delete', ['id' => $dat->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to permanently delete this record?')">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            
                        @endforeach
    </tbody>
  </table>
  </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
  
  
  








  <script>
  $(function(){
    var table = $("#reg").DataTable({
        dom: 'Bfrtip',
        "columnDefs": [
            {
                "targets": [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20], 
                "visible": false,
                "searchable": false
            }
        ],
        buttons: [
            'copy', 'csv', 'excel', 'print'
        ]
    });
  })
  </script>
@stop