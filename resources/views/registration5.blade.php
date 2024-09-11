@extends('layouts.home')

   @section("content")



      <section class="registration_1_bg reg_wmn">


         <div class="container inner__bg registration_1 cnfrmpg">


            <div class="row align-items-center">


               <div class="col-md-6">

                  <h3> Your application has been <span> Submitted </span> .   </h3>
                  <h5>  Waiting for confirmation. </h5> 
                  <h5>   When we confirm, Your registration is successful. </h5> 
                  
                   
       
   
               </div>


               <div class="col-md-6">

<img src="{{ asset('themes/home/images/form.jpg') }}" class="img-fluid" alt="image">
   
               </div>


            </div>

          
      

         </div>


         
      </section>
      <img src="{{ asset('themes/home/images/croud.jpg') }}" class="img-fluid">
      @endsection
      @section("script")  
      
      <script>
         $(document).ready(function() {
         
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