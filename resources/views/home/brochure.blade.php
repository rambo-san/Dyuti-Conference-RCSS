@extends('layouts.home')
@section("content")
<section>
        <div class="container inner__bg  ">
            <div class="row  justify-content-center">
                <div class="col-md-4 mb-4 ">
                    <div class="calalouge">
                        <img src="{{ asset('themes/home/images/svg/pdf.svg') }}">
                        <h4> Brochure </h4>
                        <a href="{{ asset('themes/home/images/brochure/ICSD.pdf') }}" download="" target="_blank"><button class="btn  main_btn  ">Download Brochure</button></a>
                    </div>
                </div>

                <!--<div class="col-md-4 mb-4 ">-->
                <!--    <div class="calalouge">-->
                <!--        <img src="{{ asset('themes/home/images/svg/pdf.svg') }}">-->
                <!--        <h4> International </h4>-->
                <!--        <a href="{{ asset('themes/home/images/brochure/international.pdf') }}" download=""  target="_blank"><button class="btn  main_btn  ">Download Brochure</button></a>-->
                <!--    </div>-->
                <!--</div>-->

        </div>
                     </div>

    </section>
@endsection
@section('script')

      @endsection