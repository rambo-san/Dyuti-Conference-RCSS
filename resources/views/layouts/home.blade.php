<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>ICSD 2025</title>
      <meta name="google-site-verification" content="RAv8Cn5oOzy_sWrkZaoGM7uL1Kxy14TsWSCogp-DPh0" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--     <link rel="icon" type="image/png" sizes="32x32" href="/images/fav-icon/i.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/images/fav-icon/i2.png"> -->
      <meta name="description" content=" <meta name="description" content="ICSD 2025 - the International Conference on Sustainable Development. Register now!">
      <meta name="keywords" content="icsd 2025,icsd,ICSD2025">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css">
      <link  rel="stylesheet" href="{{asset('themes/home/css/rajagiri.css') }}">
      <link  rel="stylesheet" href="{{asset('themes/home/css/owl.carousel.css') }}">
      <link  rel="stylesheet" href="{{asset('themes/home/css/owl.theme.css') }}" >
      <link  rel="stylesheet" href="{{asset('themes/home/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/admin/toastr/toastr.css') }}">

      <link rel="shortcut icon" href="{{asset('themes/home/images/i.png') }}" type="image/x-icon"/>
      <link rel="shortcut icon" href="{{asset('themes/home/images/i2.png') }}" type="image/x-icon"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   </head>
   <body>
      <section>
         <header class="cbp-af-header ">
            <div class="container-fluid top_bar p0">
               <div class="container">
                  <div class="tob__bar__in">
                     <div class="top__contact">
                        <a href="{{ route('home') }}"> <img src="{{ asset('themes/home/images/icds2.png') }}" class="img-fluid" style="padding-top:1px;"a>
                        
                     </div><marquee><p style="font-size:10px;font-weight:bolder;line-height: 1;margin:16px;color:red;">The deadline for abstract submission has been extended until September 15, 2024</p></marquee>
                     <div class="top__contact_right">
                        <div class="top__contact_right__in"> 
                           <a href="tel: +91 - 7356472239"><i class="fa-brands fa-whatsapp"></i> +91 - 7356472239	</a>
                        </div>
                        
                        <ul class="top_menu mb_hide_oy">
                            
                           <li>  <a href="{{ route('accommodation') }}">  Accommodation	 </a> </li>
                           <li>  <a href="{{ route('tourist_attraction') }}">  Tourist Attractions	 </a> </li>
                           <li>  <a href="{{ route('organizing_committee') }}">  Advisory committee 	</a> </li>
                           <li> <a href="{{ route('brochure') }}">   Brochure 	</a> </li>
                           <!-- <li> <a href="{{ route('registration_open') }}">   LOGIN	 </a> </li> -->
                           </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 top_bar_in ">
                  <div class="container top_bar_in_x">
                     <div class="header col-lg-12">
                        <nav id="navigation3" class="navigation navigation-landscape">
                           <div class="nav-header">
                              <div class="nav-toggle"></div>
                           </div>
                           <div class="nav-menus-wrapper" style="transition-property: none;">
                              <span class="nav-menus-wrapper-close-button"></span>
                              <ul class="nav-menu align-to-right">
                                 <li>  <a class="m__menu_active" href="{{ route('home') }}">  
                                    <i class="bi bi-house-fill"></i>	</a> 
                                 </li>
                                 <li>  <a href="{{ route('aboutus') }}">  About Us	</a> </li>
                                 <li>  <a href="{{ route('tracks') }}">  Sub-Themes	</a> </li>
                                 <!-- <li> <a href="{{ route('speakers') }}">   Speakers	</a> </li> -->
                                 <li> <a href="{{ route('call_for_papers') }}"> Call for Papers/Proposals 	</a> </li>
                                 <li> <a href="{{ route('important_dates') }}"> Important Dates	</a> </li>
                                 <li> <a href="{{ route('registration_open') }}"> Registration </a>	 </li>
                                 <!--<li> <a href="{{ route('brochure') }}">   Brochure </a>	 </li>-->
                                 <li> <a href="{{ route('contact_us') }}">  Contact Us</a></li>

                                 </ul>
                           </div>
                           <div class="nav-overlay-panel"></div>
                           <div class="nav-overlay-panel"></div>
                        </nav>
                     </div>
                     <a class="rs_nmbr_v" href="tel:+91 - 7356472239	"> <i class="bi bi-telephone-inbound"></i> +91 - 7356472239 ( 8AM - 6PM )</a>
                  </div>
                  <a href="{{ route('contact_us') }}#valley_campus"><i class="bi bi-geo-alt-fill location-icon bounce "></i></a>
               </div>
            </div>
         </header>
      </section>
      <!--Main Slider section-->
      <!--  -->
      @if($active != 'home')
     @include('layouts.menu.breadcrumb')
     @endif
      @yield('content')

      <!--Footer -->
      <footer>
         <div class="container footer_content ">
            <div class="row abt_wvd p0">
               <div class="col-lg-3 footer_frt">
                  <ul>
                     <li> <a href="{{ route('home') }}"> <img src="{{asset('themes/home/images/footer-logo.png') }}" class="img-fluid " alt="footer_logo"></a></li>
                     <p>24th ICSD Biennial Conference 2025<br>
                        Rajagiri College of Social Sciences (Autonomous)<br>
                        Rajagiri P. O, Kalamassery,<br>
                        Cochin - 683104, Kerala, India.

                     </p>
                  </ul>
               </div>
               <div class="col-lg-3 footer_menu">
                  <h3> Quick Links </h3>
                  <ul>
                     <li> <a href="{{ route('home') }}"> Home </a></li>
                     <li> <a href="{{ route('aboutus') }}"> About Us </a></li>
                     <li> <a href="{{ route('tracks') }}"> Sub-Themes </a></li>
                     <!-- <li> <a href="{{ route('speakers') }}"> Speakers </a></li> -->
                     <li> <a href="{{ route('call_for_papers') }}"> Call for Papers/Proposals  </a></li>
                     <li> <a href="{{ route('important_dates') }}"> Important Dates </a></li>
                     <li> <a href="{{ route('registration_open') }}"> Registration </a></li>
                     <li> <a href="{{ route('contact_us') }}"> Contact Us </a></li>
                  </ul>
               </div>
               <div class="col-lg-3 footer_menu">
                  <h3> Others </h3>
                  <ul>
                     <li> <a href="{{ route('accommodation') }}"> Accommodation </a>
                     <li> <a href="{{ route('tourist_attraction') }}"> Tourist Attractions   </a>
                     <li> <a href="{{ route('organizing_committee') }}"> Organising Committee  </a>
                  </ul>
                  <!-- <h3 class="f_m_l__s"> More Links </h3>
                  <ul>
                     <li> <a href="{{ route('registration_open') }}"> Login </a>
                     <li> <a href="{{ route('registration_open') }}"> SignUp  </a>
                  </ul> -->
               </div>
               <div class="col-lg-3 footer_menu">
                  <h3> Contact </h3>
                  <ul>
                     <li>
                        <a class="mail_f" href="mailto:icsd2025@rajagiri.edu"> icsd2025@rajagiri.edu </a> 
                     </li>
                     <li> <i class="fa-brands fa-whatsapp"></i>
                        <a class="" href="tel: +91 - 7356472239">  +91 - 7356472239 </a>  
                     </li>
                    
                  </ul>
                  <div class="social_media footer_mediaz">
                     <ul>
                     <li>   <a href="https://www.facebook.com/p/Rajagiri-College-of-Social-Sciences-Autonomous-100067140653830/" target="_blank"> <i class="bi bi-facebook"></i> </a> </li>
                        <li>  <a href="https://www.instagram.com/rcss.live/?hl=en" target="_blank">  <i class="bi bi-instagram"></i>  </a> </li>
                        <li> <a href="https://in.linkedin.com/school/rajagiri-college-of-social-sciences-autonomous/?original_referer=https%3A%2F%2Fwww.google.com%2F" target="_blank"> <i class="bi bi-linkedin"></i>  </a> </li>
                        <li>  <a href="https://x.com/DyutiRajagiri?s=09" target="_blank">  <i class="bi bi-twitter-x"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                           <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                         </svg></i> </a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid footer_btm ">
            <a href="#">  <i class="bi bi-arrow-up"></i> </a>  
            <p>
               © 2023 Rajagiri . All Rights Reserved
               <br> <a target="blank" href="https://www.phitany.com/"> <br>  I 
               Powered By Phitany Web Designing Company Kerala </a>
            </p>
         </div>
      </footer>
      <div class="modal fade pt-5 " id="action" tabindex="-1" role="dialog"
                                aria-labelledby="action" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="addNew_popup ml-4 mr-4 py-5 text-center">
                                                <p class=" mt-3 mb-5" id="actionMessage"></p>

                                                <button type="button" id="act" class="btn btn-secondary"
                                                    data-dismiss="modal">No</button>

                                                <a href="#" id="actionURL" class="btn btn-info">Yes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js "></script>
      <!-- All js-->
      <script src="{{asset('themes/home/js/all.js') }}"></script>
      <!-- Owl Carousel js-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
      <script src="{{asset('themes/home/js/lightgallery.js') }}"></script> 
<script src="{{ asset('themes/admin/toastr/toastr.js') }}" type="text/javascript"></script>

      <script>
         lightGallery(document.getElementById('lightgallery'));
     
      $(document).ready(function () {
                  

 $(".form-validate").validate({
          /* @validation  states + elements
          ------------------------------------------- */
          errorClass: "v-error text-danger w-100",
          validClass: "v-success text-success",
          errorElement: "div",
          highlight: function (element, errorClass, validClass) {
            $(element).closest('.form-control').addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).closest('.form-control').removeClass(errorClass).addClass(validClass);
        },
        errorPlacement: function (error, element) {
            if (element.is(":radio") || element.is(":checkbox")) {
                element.closest('.option-group').after(error);
            }
            else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });


                });
function isNumberKey(evt){
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      function allowOnlyLetters(e, t)   
{    
   if (window.event)    
   {    
      var charCode = window.event.keyCode;    
      
   }    
   else if (e)   
   {    
      var charCode = e.which;    
   }    
   else { return true; }    
   if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32) )    
       return true;    
   else  
   {    
     // alert("Please enter only alphabets");    
      return false;    
   }           
} 


@if(Session::has('success'))
  displaySuccessMsg("{!!Session::get('success')!!}");

  @endif

  @if(Session::has('error'))
  displayFailMsg("{!!Session::get('error')!!}");

  @endif

  @if(Session::has('success_with_error'))
  displayFailWithSuccessMsg("{!!Session::get('success_with_error')!!}");

  @endif

  @if($errors->any())
  displayFailMsg("{!! implode('',$errors->all('<li>:message</li>')); !!}");

  @endif


  function displayInfoMsg(msg) {

    toastr.clear();
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "timeOut": "10000",
      "extendedTimeOut": "10000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
  }
  toastr.warning(msg, 'Info');
}

function displaySuccessMsg(msg) {

    toastr.clear();
    toastr.options = {
      "closeButton": "true",
      "progressBar": "false",
      "debug": "false",
      "positionClass": "toast-top-right",
      "showDuration": "330",
      "hideDuration": "330",
      "timeOut":  "10000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "swing",
      "showMethod": "slideDown",
      "hideMethod": "slideUp",
      "onclick": null
  }
  toastr.success(msg, 'Success');
}

function displayFailMsg(msg) {

    toastr.clear();
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "timeOut": "10000",
      "extendedTimeOut": "10000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
  }
  toastr.error(msg, 'Error');
}

               </script>
      @yield('script')

      </body>
</html>