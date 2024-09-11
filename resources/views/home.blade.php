@extends('layouts.home')
@section("content")
      <!--Main Slider section-->
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
      <section>
         <div class="container-fluid main_slider_top sldr_pd_50">
            <div id="main" class="owl-carousel owl-theme ">

               
                  <div class="item ">
                      <img src="{{asset('themes/home/images/abanner.jpg') }}" class="img-fluid mn_slider_dp mb_hide" alt="slider" style="padding-top:30px;">
                    <img src="{{asset('themes/home/images/mob2.jpg') }}" class="img-fluid mn_slider_dp dtp_hide" alt="slider">
                     <!-- <div class="slider_text">
                        <h3>  International Conference. </h3>
                        <h5> Multidisciplinary approaches to SDGs &  International partners meet</h5>
                        <a href="{{ route('tracks') }}"> <button class="btn border_btn main_btn btn_line"> View More </button>  </a>
                     </div> -->
                  </div>
               
   
              
                  <div class="item ">
                     <img src="{{asset('themes/home/images/DSC01894.JPG') }}" class="img-fluid mn_slider_dp mb_hide" alt="slider">
                     <img src="{{asset('themes/home/images/mob.jpg') }}" class="img-fluid mn_slider_dp dtp_hide" alt="slider">
                     <div class="slider_text">
                        <h3>  24th ICSD Biennial Conference – 2025 </h3>
                        <h5></h5>
                        <a href="{{ route('tracks') }}"> <button class="btn border_btn main_btn btn_line"> View More </button>  </a>
                     </div>
                  </div> 
                  <div class="item ">
                     <img src="{{asset('themes/home/images/banner3.jpg') }}" class="img-fluid mn_slider_dp mb_hide" alt="slider">
                     <img src="{{asset('themes/home/images/banner3_mbl.jpg') }}" class="img-fluid mn_slider_dp dtp_hide" alt="slider">
                     <div class="slider_text">
                        <h3>  24th ICSD Biennial Conference – 2025 </h3>
                        <h5> </h5>
                        <a href="{{ route('tracks') }}"> <button class="btn border_btn main_btn btn_line"> View More </button>  </a>
                     </div>
                  </div>
             

            </div>
         </div>
      </section>




     
      


<section class="vision__hm">

  <div class="container-fluid "> 

      <div class="row">



         <div class="col-lg-7 col-md-12  abt_cfrnc ">
       

            <div class="vision__hm_t pt-0"> 

               <h3> About Conference </h3>
      
                  <p> 
                     
                     <!-- The SDGs were formulated in 2015 by the United Nations General Assembly (UNGA) as part of the Post-2015 Development Agenda, which sought to create a future global development framework to be achieved by 2030. There are cross-cutting areas and synergies.. -->
                   Development has been a focus of humankind since ancient times. It involves creating social conditions that sustainably and equitably foster individual and collective well-being. However, the path to development has undergone various debates and changes across different periods, involving shifts in concepts, theories, and practical approaches. The idea of social development emerged when it was felt that true development could not be achieved solely through economic advancement. Its proponents advocated a holistic and multi-level approach, instead. Social development is a broad concept that involves significant changes in politics, economics, and culture, all aimed at transforming society through deliberate efforts, characterised by increased capacity within the social system, social structure, institutions, services, and policies to effectively utilise resources and generate positive changes in the standard of living. 
      
                  </p>
                  <p>The ICSD 24th Biennial International Conference aims to provide an opportunity to critically reflect on the multiple ways in which social work and social development professionals have advanced innovative solutions to unite and improve outcomes for individuals, families and communities, locally and globally. The conference will also celebrate ICSD’s golden jubilee; showcasing its commendable contribution to the field of social work and social development across the world.</p>
      
               </div>
                 
                        
                        <!--<span>-->

                        <!--   <h6>  Vision</h6>-->
                        <!--   <p> To enable the institution to strengthen the Global network and -->
                        <!--      identify the possibility of developing consortiums in SDGs for -->
                        <!--      joint action </p>-->

                        <!--      <i class="material-symbols-outlined">-->
                        <!--         emoji_objects-->
                        <!--      </i>-->

                        <!--</span>-->

                        <!--<span>-->

                     <!--<h6> Objectives </h6>-->

                     <!--<ul>-->

                     <!--   <li> Provide a platform to engage and present the innovations and  initiatives from academia and industry </li>-->
                     <!--   <li>Identify the interdisciplinary and intercultural courses of action -->
                     <!--      in teaching, practice and research  </li>-->
                     <!--   <li> Explore the ways and means to collaborate with various -->
                     <!--      organisations  (Corporates/NGOs) to advance SDGs </li>-->

                     <!--</ul>-->




                     <!--         <i class="material-symbols-outlined abt_cfrnc2">-->
                     <!--            target-->
                     <!--         </i>-->

                     <!--      </span>-->

                      <a href="{{ route('aboutus') }}">     <button class="btn border_btn main_btn btn_line"> View More </button>  </a> 

                        </div>

                      

                     

                     <div class="col-lg-5 col-md-12 abt_cfrnc__img p0">

                        <img src="{{asset('themes/home/images/ab_cnf2.png') }}" class="img-fluid" alt="Rajagiri">
                        
                        
                                 </div>
                        
   

   
      </div>
      
   </div>

</div>




</section>


<section class="twenty-five">

<div class="container aboutus___hm__bg">

<div class="row align-items-center">


   <div class="col-md-12 col-lg-5 text-center">

   <img src="{{asset('themes/home/images/25logo.svg') }}" class="img-fluid" alt="Rajagiri">
   
</div>

<div class="col-md-12 col-lg-7 aboutus___hm">

<h2> 25 Years of Internationalization </h2>
 <p> 
   'Internationalisation' has been a catchword for Rajagiri since its inception and we have completed 25 years of official International collaborations. Currently, Rajagiri has official agreements with 60+ International Universities across 30 countries. Establishing vibrant academic tie-ups with leading universities all over the world has not only helped the students to get international exposure, but also facilitated in sharing of resources for faculty training, curriculum development, research, and consultancy. 


 </p>
   

 <p> 
   Our students from PG and UG programmes regularly do short-term study programmes in our Partner Universities with a duration ranging from 1 month to 6 months. We host International students in our regular programmes as full-time students which is also supported by the Study in India (SII) Programme from the Govt of India. The various programmes offered by Rajagiri also have twinning, dual degree arrangements with world-class International Universities across the globe.

 </p>


   

 <a href="{{ route('aboutus') }}"><button class="btn  main_btn "> View More </button> </a>

</div>


       
</div>

</div>
</section>
  
      <section class="sub__themes__hd_bg">
         <div class="container">
            <div class="sub__themes__hd">

            <h3 class="hd__r"> Sub-themes </h3>
           <!-- <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it and a search </p> -->

            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12 products_mbg_text__in">
                  <div class="featured_categories_bg ftrd_ctgry_hide_mbl ">
                     <div class="row p0">
                        <div id="products" class="owl-carousel owl-theme min_slider_img">
                           <div class="products_emr_bg" style="height:550px;">
                              <div class="col-md-12 ">
                                 <a href="#" >
                                    <div class="prodcuts_bg">
                                       <div class="prodcuts_in_hm"> 
                                          <div> 
                                          <img src="{{asset('themes/home/images/social_work.jpg') }}" class="img-fluid" alt="Rajagiri">
                                        
                                       </div> </div>
                                       <div class="prodcuts_in_hm_text" style="height:300px;">
                                          <h5> Sub-theme I </h5>
                                          <h3> Community Empowerment and Participation:
                                          </h3>
                                          <p style="overflow:visible;">•	Grassroots initiatives and community-driven development projects.<br>
•	Participatory approaches in research, planning, and decision-making.<br>

                                          </p>
                                          <!--<a href="{{ route('track_1') }}">  <button class="btn  main_btn btn_bl_bdr"> View More </button> </a>-->
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="products_emr_bg">
                              <div class="col-md-12 ">
                                 <a href="#" >
                                    <div class="prodcuts_bg">
                                       <div class="prodcuts_in_hm"> 
                                          <div> 
                                          <img src="{{asset('themes/home/images/informatics.jpg') }}" class="img-fluid" alt="Rajagiri">
                                      
                                       </div></div>
                                       <div class="prodcuts_in_hm_text" style="height:300px;">
                                          <h5> Sub-theme II </h5>
                                          <h3> Technology and Digital Solutions:
                                          </h3>
                                          <p style="overflow:visible;"> 
•	Mobile apps, online platforms, and digital tools for social impact.<br>
•	Innovative uses of technology in service delivery and communication.

                                          </p>

                                         <!--<a href="{{ route('track_2') }}">  <button class="btn  main_btn btn_bl_bdr"> View More </button> </a>-->
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="products_emr_bg" >
                              <div class="col-md-12 ">
                                 <a href="#" >
                                    <div class="prodcuts_bg">
                                       <div class="prodcuts_in_hm"> 
                                          <div> 
                                          <img src="{{asset('themes/home/images/THEME.3.png') }}" class="img-fluid" alt="Rajagiri">
                                        
                                       </div></div>
                                       <div class="prodcuts_in_hm_text" style="height:300px;">
                                          <h5> Sub-theme III </h5>
                                          <h3> Financial Inclusion and Economic Empowerment:
                                          </h3>
                                          <p style="overflow:visible;"> •	Microfinance, microenterprise development, and savings-led initiatives.<br>
•	Social impact investing and alternative financing models.
</p>
                                          <!--<a href="{{ route('track_3') }}">  <button class="btn  main_btn btn_bl_bdr"> View More </button> </a>-->
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="products_emr_bg" >
                              <div class="col-md-12 ">
                                 <a href="#" >
                                    <div class="prodcuts_bg">
                                       <div class="prodcuts_in_hm"> 
                                          <div> 
                                          <img src="{{asset('themes/home/images/life_science.jpg') }}" class="img-fluid" alt="Rajagiri">
                                       
                                       </div></div>
                                       <div class="prodcuts_in_hm_text" style="height:300px;">
                                          <h5> Sub-theme IV </h5>
                                          <h3>Health and Well-being:
                                          </h3>
                                          <p style="overflow:visible;">
                                             •	Trauma-informed care and trauma-informed practices.<br>
•	Integrating mental health support into social services.<br>
•	Social prescribing and holistic approaches to healthcare.
 
                                          </p>
                                          <!--<a href="{{ route('track_4') }}">  <button class="btn  main_btn btn_bl_bdr"> View More </button> </a>-->
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="products_emr_bg">
                              <div class="col-md-12 ">
                                 <a href="#" >
                                    <div class="prodcuts_bg">
                                       <div class="prodcuts_in_hm"> 
                                          <div> 
                                          <img src="{{asset('themes/home/images/b_operations.jpg') }}" class="img-fluid" alt="Rajagiri">
                                         
                                       </div></div>
                                       <div class="prodcuts_in_hm_text" style="height:300px;">
                                          <h5> Sub-theme V </h5>
                                          <h3> Justice and Restorative Practices:
                                          </h3>
                                          <p style="overflow:visible;"> 
                                         •	Restorative justice programs and conflict resolution models.<br>
•	Alternatives to incarceration and community-based rehabilitation.<br>
•	Addressing systemic inequalities within justice systems.


                                          </p>

                                          <!--<a href="{{ route('track_5') }}">  <button class="btn  main_btn btn_bl_bdr"> View More </button> </a>-->
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <div class="products_emr_bg" >
                              <div class="col-md-12 ">
                                 <a href="#" >
                                    <div class="prodcuts_bg">
                                       <div class="prodcuts_in_hm"> 
                                          <div> 
                                          <img src="{{asset('themes/home/images/THEME 6.jpg') }}" class="img-fluid" alt="Rajagiri">
                                        
                                       </div></div>
                                       <div class="prodcuts_in_hm_text" style="height:300px;">
                                          <h5> Sub-theme VI </h5>
                                          <h3> Education and Lifelong Learning:
                                          </h3>
                                          <p style="overflow:visible;">
                                            •	Innovative educational approaches and inclusive schooling.<br>
•	Lifelong learning opportunities for marginalized communities.<br>
•	Technology-enhanced learning and distance education initiatives.


                                          </p>
                                          <!--<a href="{{ route('track_6') }}">  <button class="btn  main_btn btn_bl_bdr"> View More </button> </a>-->
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>

                           <div class="products_emr_bg" >
                              <div class="col-md-12 ">
                                 <a href="#" >
                                    <div class="prodcuts_bg">
                                       <div class="prodcuts_in_hm"> 
                                          <div> 
                                          <img src="{{asset('themes/home/images/b_environment.jpg') }}" class="img-fluid" alt="Rajagiri">
                                        
                                       </div></div>
                                       <div class="prodcuts_in_hm_text" style="height:300px;">
                                          <h5> Sub-theme VII </h5>
                                          <h3>Environmental Sustainability and Resilience:  </h3>
                                          <p style="overflow:visible;">
                                            •	Community-based environmental conservation projects.<br>
•	Climate resilience and disaster risk reduction strategies.<br>
•	Promoting sustainable livelihoods and resource management.
 

                                          </p>
                                          <!--<a href="{{ route('track_7') }}">  <button class="btn  main_btn btn_bl_bdr"> View More </button> </a>-->
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>


                           <div class="products_emr_bg" >
                              <div class="col-md-12 ">
                                 <a href="#" >
                                    <div class="prodcuts_bg">
                                       <div class="prodcuts_in_hm"> 
                                          <div> 
                                          <img src="{{asset('themes/home/images/b_science.jpg') }}" class="img-fluid" alt="Rajagiri">
                                        
                                       </div></div>
                                       <div class="prodcuts_in_hm_text" style="height:300px;">
                                          <h5> Sub-theme VIII </h5>
                                          <h3> Policy Advocacy and Social Change:
                                          </h3>
                                          <p style="overflow:visible;">
                                            
                                            •	Advocacy campaigns and grassroots movements for policy reform.<br>
•	Human rights-based approaches to social development.<br>
•	Mobilizing communities for collective action and social justice.

                                          </p>
                                          <!--<a href="{{ route('track_8') }}">  <button class="btn  main_btn btn_bl_bdr"> View More </button> </a>-->
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>

                           <div class="products_emr_bg">
                              <div class="col-md-12 ">
                                 <a href="#" >
                                    <div class="prodcuts_bg">
                                       <div class="prodcuts_in_hm"> 
                                          <div> 
                                          <img src="{{asset('themes/home/images/THEME.9.png') }}" class="img-fluid" alt="Rajagiri">
                                     
                                       </div></div>
                                       <div class="prodcuts_in_hm_text"style="height:300px;">
                                          <h5> Sub-theme IX </h5>
                                          <h3>  Cross-Cultural Exchange and Global Collaboration:
                                          </h3>
                                          <p style="overflow:visible;">
                                           
                                             •	International partnerships and knowledge-sharing networks.<br>
•	Cultural exchange programs and cross-cultural understanding initiatives.<br>
•	Learning from diverse social work and development practices worldwide.


                                          </p>
                                          <!--<a href="{{ route('track_9') }}">  <button class="btn  main_btn btn_bl_bdr"> View More </button> </a>-->
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
  <div class="products_emr_bg">
                              <div class="col-md-12 " >
                                 <a href="#" >
                                    <div class="prodcuts_bg">
                                       <div class="prodcuts_in_hm"> 
                                          <div> 
                                          <img src="{{asset('themes/home/images/tc_marketing.jpg') }}" class="img-fluid" alt="Rajagiri">
                                        
                                       </div></div>
                                       <div class="prodcuts_in_hm_text" style="height:300px;">
                                          <h5> Sub-theme X </h5>
                                          <h3>Ethical Practice and Professional Development:
                                          </h3>
                                          <p style="overflow:visible;">
                                            
                                            •	Ethical considerations in social work and development work.<br>
•	Continuing education and professional development opportunities.<br>
•	Supporting the well-being of social workers and development practitioners.


                                          </p>
                                          <!--<a href="{{ route('track_8') }}">  <button class="btn  main_btn btn_bl_bdr"> View More </button> </a>-->
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                       
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="text-center mt___20">


            <a href="{{ route('tracks') }}">   <button class="btn  main_btn "> View All Sub-themes </button>  </a> 
               
               
               
               </div>


         </div>
      </section>









<section class="container" style="margin-top:30px;">
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
            <div class="event-date shadow p-4 rounded" style="background-color:#a6aadf33;">
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

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .event-date {
        margin-bottom: 30px;
       
    }

    .event-date h5 {
        font-size: 24px;
        color: #333;
        font-weight:bolder;
    }

    .event-date h3 {
        font-size: 28px;
        margin-bottom: 20px;
        color: #007bff;
    }

    .btn {
        padding: 5px 15px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>
@endsection






      <!--Start Clients-->
      <section>
         <div class="container  partners_slider_z">
            <div class="title_hdz">
               <h4 class="lj"> Our International Partners </h4>
               <a href="{{ route('partners') }}">
                  <h6> VIEW All </h6>
               </a>
            </div>
            <div id="clients" class="owl-carousel owl-theme product_slider ">
               <div class="col-lg-12  clients_slide">
                  <img src="{{asset('themes/home/images/clients/1.jpg') }}" class="img-fluid">
               </div>
               <div class="col-lg-12  clients_slide">
                  <img src="{{asset('themes/home/images/clients/2.jpg') }}" class="img-fluid">
               </div>
               <div class="col-lg-12  clients_slide">
                  <img src="{{asset('themes/home/images/clients/3.jpg') }}" class="img-fluid">
               </div>
               <div class="col-lg-12 clients_slide">
                  <img src="{{asset('themes/home/images/clients/4.jpg') }}" class="img-fluid">
               </div>
               <div class="col-lg-12  clients_slide">
                  <img src="{{asset('themes/home/images/clients/5.jpg') }}" class="img-fluid">
               </div>
               <div class="col-lg-12  clients_slide">
                  <img src="{{asset('themes/home/images/clients/6.jpg') }}" class="img-fluid">
               </div>
               <div class="col-lg-12  clients_slide">
                  <img src="{{asset('themes/home/images/clients/7.jpg') }}" class="img-fluid">
               </div>
               <div class="col-lg-12  clients_slide">
                  <img src="{{asset('themes/home/images/clients/1.jpg') }}" class="img-fluid">
               </div>
               <div class="col-lg-12  clients_slide">
                  <img src="{{asset('themes/home/images/clients/2.jpg') }}" class="img-fluid">
               </div>
               <div class="col-lg-12  clients_slide">
                  <img src="{{asset('themes/home/images/clients/3.jpg') }}" class="img-fluid">
               </div>
               <div class="col-lg-12  clients_slide">
                  <img src="{{asset('themes/home/images/clients/4.jpg') }}" class="img-fluid">
               </div>
            </div>
         </div>
         </div>
      </section>

<!-- End Clients -->

@endsection
@section('script')
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
      @endsection