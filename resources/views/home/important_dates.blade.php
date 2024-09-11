@extends('layouts.home')

@section("content")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <style>
              .important__dates {
    
        background-color: #ffffff;
       
    }
    .temp-container{
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:2rem;
    }
    .event-date{
        height:100%;
    }
    @media (max-width: 1025px){
    .col-md-6 {
     
        width: 100%;
    }
        
    }
    @media (max-width: 768px){
    .temp-container{
        display:grid;
        grid-template-columns:1fr;
        gap:1rem;
    }
    }

      </style>

<section class="container" style="margin-top:30px; margin-bottom:30px;">
    <h3 class="hd__r" style="text-align:center;padding-bottom:20px;"> Important Dates </h3>
    <div class="temp-container">
        <div class="">
            <div class="event-date shadow p-4 rounded" style="background-color:#a6aadf33;">
                <h5>March 20 - September 15, 2024</h5>
                <h3>Call for Abstracts</h3>
                <div class="text-right">
                    <a href="https://cmt3.research.microsoft.com/ICSD2025/Submission/Index" class="btn btn-primary btn-sm">SUBMIT NOW</a>
                </div>
            </div>
        </div>
        <div class="">
            <div class="event-date shadow p-4 rounded" style="background-color:#a6aadf33;">
                <h5>September 20, 2024</h5>
                <h3>Notification on Approval of Abstracts</h3>
                <div class="text-right">
                    <a href="https://cmt3.research.microsoft.com/ICSD2025/Submission/Index" class="btn btn-primary btn-sm">CHECK NOW</a>
                </div>
            </div>
        </div>
        
        <div class="">
            <div class="event-date shadow p-4 rounded" style="background-color:#a6aadf33;">
                <h5>May 1 - September 30, 2024</h5>
                <h3>Early Bird Registration</h3>
                <div class="text-right">
                    <a href="{{ route('registration_open') }}" class="btn btn-primary btn-sm">REGISTER NOW</a>
                </div>
            </div>
        </div>
        <div class="">
            <div class="event-date shadow p-4 rounded" style="background-color:#a6aadf33;">
                <h5>October 1 - October 31, 2024</h5>
                <h3>Regular Registration</h3>
                <div class="text-right">
                    <a href="{{ route('registration_open') }}" class="btn btn-primary btn-sm">REGISTER NOW</a>
                </div>
            </div>
        </div>
        <div class="">
            <div class="event-date shadow p-3 rounded" style="background-color:#a6aadf33;">
                <h5>October 15, 2024</h5>
                <h3>Submission of Full Paper</h3>
                <div class="text-right">
                    <a href="https://cmt3.research.microsoft.com/ICSD2025/Submission/Index" class="btn btn-primary btn-sm">SUBMIT NOW</a>
                </div>            
            </div>
        </div>
        <div class="">
            <div class="event-date shadow p-4 rounded" style="background-color:#a6aadf33;">
                <h5>January 8 - January 10, 2025</h5>
                <h3>Conference Dates</h3>
                <!-- You can add registration link here if needed -->
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')

@endsection
