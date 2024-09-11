@extends('layouts.home')

   @section("content")
   <section class="registration_1_bg">
      <div class="container inner__bg registration_1">
         <h3><span > Registration </span> for the 24th Biennial ICSD Conference 2025 </h3>
         <ul class="reg1">

            <li> Please provide us with accurate information so as to make the necessary arrangements for your comfortable participation in the conference.</li>
            <li>  You can find the registration fee details by <a class="click_link" href="{{ route('fee_details') }}" target="_blank">clicking here</a>.  </li> 
            <li>Currently, you are eligible for <strong class="color_green">Early-Bird Registration.</strong></li>
            <li><strong class="color_red">National participants</strong> can transfer registration free in the below-given Bank details:<br><br>
                        Account name: Rajagiri College of Social Sciences, Kalamassery <br>
                        Account No. :0224053000005056 <br>
                        Bank: South Indian Bank <br>
                        IFSC/NEFT Code: SIBL0000224

            </li>
            <li>Before going further, <strong class="color_red">National participants</strong> make sure that you have made the payment. Please keep ready the image of the receipts (DD/CHEQUE/BANK TRANSFER RECEIPT/INTERNET BANKING RECEIPT) of the conference fee you have remitted as you need to provide the details and upload the image of the same to confirm your registration.</li>
            <li><strong class="color_red">International participants</strong> can make the payment through the payment gateway provided by the end of the registration form.</li>

         </ul>
    
         <p class="rg1p"> I have read the instructions provided above and I would like to fill out the registration form Kindly confirm with "YES" and click on "NEXT" to proceed to the registration form. </p>

         <button class="btn grn_btn" type="submit" value="Submit"> 
            <span class="material-symbols-outlined">
            check_circle
            </span> Yes  </button> 
         <a href="{{url('registration2')}}"> <button class="btn  main_btn btn__nxt "> Next </button> </a> 
      </div>
   </section>

   <img src="{{asset('themes/home/images/croud.jpg') }}" class="img-fluid">

   @stop
   @section("script")  
<style>
   .click_link{
   color:#35c26b;
   font-weight:600;
}
.color_green{
   color: #0e572a
}
.color_red{
   color:red;
}
</style>
      <script>
         $(document).ready(function() {
            
            $(".btn__nxt").hide();
            $(".grn_btn").on("click", function(){
               $(".btn__nxt").show();
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
         
    
      // paralax 
      
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
      
      <!--end--paralax--> 
      <!--Count--> 
      
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
@stop