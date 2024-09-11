@extends('layouts.admin')

@section('content')

    <style>
        .card-container {
            display: flex;
            justify-content: center;
            padding-top: 65px;
            /* You can also use 'space-between' or 'space-evenly' for different spacing options */
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 250px; /* Reduced the width of the individual cards */
            text-align: center;
            margin: 5px; /* Added a margin to create space between cards */
        }

        .card h2 {
            font-size: 24px;
        }

        .card p {
            font-size: 18px;
        }
    </style>

    <div class="card-container">
        <div class="card">
            <h2>Total Registrations</h2>
            <p id="totalCount">{{$tot_reg}}</p>
        </div>

        <div class="card">
            <h2>Total Payment</h2>
            <p id="totalPayment">₹ {{$tot_payment}}</p>
        </div>
    </div>

@endsection

@section('style')
@stop
@section('script')
@stop
