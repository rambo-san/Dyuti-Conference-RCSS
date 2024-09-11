@extends('layouts.home')
@section("content")
      <section class="registration_1_bg reg_wmn">
         <div class="container inner__bg registration_1">
           
            <h3><span > Registration </span>  for the International Conference <br> and Partners Meet 2024 </h3>
            <!-- <h4> Heading Text </h4> -->
            <!-- <h6 class="charge_1_bg"> The amount to be remitted is <span class="charge_1"> {{$data->amount}} </span>  {{$data->currency}} for SAARC and National Participants. Dollars  for Foreign Participants (refer appendix for charges) </h6> -->
            
            
            <!--<h6 class="charge_1_bg"> The amount to be remitted is <span class="charge_1"> {{$data->amount}} </span>  {{$data->currency}}</h6>-->
            
            <h6 class="charge_1_bg"><a class="click_link" href="{{ route('fee_details') }}" target="_blank">You can find the registration fee details by clicking here</a>.</h6>


            <div class="col-lg-12 bnkdtl"> 
               <h5> Bank Details </h5>
               <ul> 
                  <li> Account name: Rajagiri College of Social Sciences, Kalamassery  </li>
                  <li>    Account No. :0224053000005056  </li>
                  <li>    Bank: South Indian Bank  </li>
                  <li>      IFSC/NEFT Code: SIBL0000224  </li>
               </ul>
            </div>
            <form action="{{ route('registration4.store-reg4') }}" method="POST" id="form" class="form-group form-validate" enctype="multipart/form-data">
               @csrf
               <div class="col-lg-12 upldrcp"> 
                  <h5> Upload Receipt </h5>
   
                  <!-- <div class="file-upload-wrapper" data-text="Select your file!"> -->
                  <div class="udp_bg" data-text="Select your file!">
                     <input name="reciept" type="file" class="file-upload-field form-control" value="">
                  </div>
                  <p> PDF, JPG, JPEG, PNG - Max 100 MB   (If you are a student/scholar/academician of Rajagiri, please upload your ID card)</p>
                  
               </div>
               <div id="image-preview"></div><br/>
               <a href="registration5.html"> <button class="btn  main_btn btn__nxt "> Next </button> </a>
            </form>
         </div>
         </div>
      </section>
      <img src="{{ asset('themes/home/images/croud.jpg') }}" class="img-fluid">
     
      @endsection
      @section("script")  
    
      <script>
         $(document).ready(function() {


            $('input[name="reciept"]').on('change', function() {
               var input = this;
               if (input.files && input.files[0]) {
                     var reader     = new FileReader();
                     var file       = input.files[0];
                     reader.onload  = function (e) {
                       
                        if (file.type.startsWith('image/')) 
                        {
                           preview = '<img src="' + e.target.result + '" style="max-width:450px;width:100%"/>';
                        } 
                        else if (file.type === 'application/pdf') 
                        {
                           preview = '<a href="' + e.target.result + '" target="_blank"><b>PDF Uploded. Click to view.</b></a>';
                        } 
                        else 
                        {
                           preview = 'File type not supported for preview.';
                        }

                        $('#image-preview').html(preview);
                     };
                     reader.readAsDataURL(input.files[0]);
               }
            });
    
         
            $("#main").owlCarousel({
         
               autoPlay: 4000,
               navigation: true,
               slideSpeed: 1000,
               paginationSpeed: 1000,
               singleItem: true,
               transitionStyle: "fade"
               
            });
         
         $("#main2").owlCarousel({
         
            autoPlay: 4000,
            navigation: true,
            slideSpeed: 1000,
            paginationSpeed: 1000,
            singleItem: true,
            transitionStyle: "fade"
            
         });
         
         $("#products").owlCarousel({
         
            autoPlay: 4000,
            navigation: true,
            items:3,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsDesktopSmall: [991, 1],
            itemsTablet: [767,1], // 2 items between 600 and 480
            slideSpeed: 1000,
            paginationSpeed: 1000,
            transitionStyle: "fade"
         
         
         });
         
         
         $("#testimonials_lt").owlCarousel({
         
            // autoPlay: 4000,
            navigation: true,
            items:2,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsDesktopSmall: [991, 1],
            itemsTablet: [767,1], // 2 items between 600 and 480
            slideSpeed: 1000,
            paginationSpeed: 1000,
            transitionStyle: "fade"
            
         
         });
         
             
         $("#latest-jobs").owlCarousel({
         
            // autoPlay: 4000,
            navigation: true,
            items:3,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsDesktopSmall: [768, 2],
            itemsTablet: [767,1], // 2 items between 600 and 480
            slideSpeed: 1000,
            paginationSpeed: 1000,
            transitionStyle: "fade"
         
         });
         
         
         
         $("#clients").owlCarousel({
         
            autoPlay: 4000,
            navigation: true,
            items: 5,
            itemsDesktop : [1100,5], 
            itemsDesktopSmall : [1366,4], 
            itemsTablet: [767,3], 
            itemsMobile : [575,3], 
            navigation: true,
            lazyLoad: true,
            pagination: false,
            scrollPerPage : true
            
         });
         
         });
         
         
         
      </script>
      <!--paralax--> 
      <script>
         (function(){
         var parallax = document.querySelectorAll(".parallax"),
         speed = 0.5;
         window.onscroll = function(){
         [].slice.call(parallax).forEach(function(el,i){
         var windowYOffset = window.pageYOffset,
         elBackgrounPos = "0 " + (windowYOffset * speed) + "px";
         el.style.backgroundPosition = elBackgrounPos;
         });
         };
         })();
      </script> 
      <!--end--paralax--> 
      <!--Count--> 
      <script>
         $('.count').each(function () {
         $(this).prop('Counter',0).animate({
         Counter: $(this).text()
         }, {
         duration: 4000,
         easing: 'swing',
         step: function (now) {
            $(this).text(Math.ceil(now));
         }
         });
         });
      </script>
      <!--Count--> 
   @endsection