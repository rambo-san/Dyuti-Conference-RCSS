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
            @if($data->reciept=='')
                <div class="alert alert-danger">
                    <strong>Incomplete Registration!</strong> User has registered but did not complete the registration process.
                </div>
            @endif
                <div class="panel-body">
                    <table border="1" width="100%" cellpadding="10px">
                        <tr><th width="40%">Title</th><td>{{config('constant.title')[$data->title] ?? ''}}</td></tr>
                        <tr><th>Name</th><td>{{$data->name ?? '' }}</td></tr>
                        <tr><th>Designation</th> <td>{{config('constant.designation')[$data->designation] ?? ''}}</td></tr>
                        <tr><th>Gender</th><td>{{($data->gender=='f')?"Female":"Male"}}</td></tr>
                        <tr><th>Organisation</th><td>{{$data->organization ?? '' }}</td></tr>
                        <tr><th>Nationality</th><td>{{$data->nationality ?? '' }}</td></tr>
                        <tr><th>Passport Number</th><td>{{$data->passport_no ?? '' }}</td></tr>
                        <tr><th>Discipline</th><td>{{$data->discipline ?? '' }}</td></tr>
                        <tr><th>Address</th><td>{{$data->address ?? '' }}</td></tr>
                        <tr><th>Phone</th><td>{{$data->phone ?? '' }}</td></tr>
                        <tr><th>Email</th><td>{{$data->email ?? '' }}</td></tr>
                        <tr><th>Presenting Paper</th><td>{{($data->presenting_paper==1)?"Yes":"No"}}</td></tr>
                        <tr><th>Country Type</th><td>{{$data->country_type ?? '' }}</td></tr>
                        <tr><th>User Type</th><td>{{$data->user_type ?? '' }}</td></tr>
                        <tr><th>Conference Theme</th><td>
                            @if(isset($data->conference_theme))
                                @php
                                    $themeIds = explode(',', $data->conference_theme);
                                @endphp

                                @foreach($themeIds as $themeId)
                                    @if(isset(config('constant.conference_theme')[$themeId]))
                                        {{ config('constant.conference_theme')[$themeId]['title'] }} {{ config('constant.conference_theme')[$themeId]['date'] }}<br>
                                    @endif
                                @endforeach
                            @else
                                N/A
                            @endif
                        </td></tr>
                        <tr><th>Number of Days</th><td>{{$data->no_of_days ?? ''}}</td></tr>
                        <tr>
                            <th>Participation Date</th>
                            <td>
                                @php 
                                $displayValues = [];
                                @endphp
                                @if(isset($data->participation_date))
                                    @php
                                        $participationDateValues = explode(',', $data->participation_date);
                                        
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

                                {{ implode(', ', $displayValues) }}
                            </td>
                        </tr>

                        <tr><th>Accommodation</th><td>{{($data->accomodation==1)?"Yes":"No"}}</td></tr>
                        <tr><th>Food</th><td>{{($data->food==0)?"Veg":"Non-Veg"}}</td></tr>
                        <tr><th>Receipt</th><td>@if($data->reciept) <a href="https://conference.rajagiri.edu/icsd//storage/{{$data->reciept}}" target="_blank">View Reciept</a> @else -- @endif </td></tr>
                        <tr><th>Amount</th><td>{{$data->amount ?? '' }}</td></tr>
                        <tr><th>Currency</th><td>{{$data->currency ?? '' }}</td></tr>
                        <tr><th>Created At</th><td>{{$data->created_at ?? '' }}</td></tr>
                        <!-- <tr><th>Updated At</th><td>{{$data->updated_at}}</td></tr> -->
                    </table>
                </div>
                <a href="{{route('archived-registration')}}"><button class="form-control btn-success" style="width: 100px;">Back</button></a>
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
