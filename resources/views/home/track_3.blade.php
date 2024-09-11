@extends('layouts.home')
@section("content")
<section class=" ">
         <div class="container inner__bg ">
            <div class="row">
               <div class="col-lg-3 col-md-12 themes_dtls ">
                  <div class="p_sticky">
                     <ul>
                        <a href="#abouttheme">
                           <li>   About the Track </li>
                        </a>
                        <a href="#topics">
                           <li>  Sub-Theme Topics  </li>
                        </a>
                        <a href="#brochure">
                           <li>   Brochure  </li>
                        </a>
                        <a href="#committeememebers">
                           <li>   Committee Members   </li>
                        </a>
                     </ul>
                  </div>
               </div>
               <div class="col-md-9 themes_dtls_cntn">
                  <a name="click" id="abouttheme"></a>
                  <h1> Track III </h1>
                  <h5> Behavioural sciences </h5>
                  <div  class="theme_cnt_list abt__thm">
                     <h4> About the Track </h4>
                     <p> The last decade has shaken the fabric of society with the COVID-19 pandemic, climate change patterns, and economic & political upheavals. The Behavioural Science sessions address some of the changes that occurred in various spheres in the field of Psychology.</p>
                  </div>
                  <div class="theme_cnt_list theme_tpc__bg">
                     <a name="click" id="topics"></a>
                     <h4> Sub-Theme Topics </h4>
                     <p> The Sub-themes include and are not restricted to: </p>
                     <ul class="theme_tpc">
                        <!-- <li>   Overarching Theme </li> -->
                        <li>   Sustainability & Reverse Migration </li>
                        <li>   Sustainability & Ethnicity </li>
                        <li>Relationships over the Life Span </li>
                        <li>	Psychology of Addiction  </li>
                        <li> Environmental Psychology  </li>
                        <li>	Forensic Psychology  </li>
                        <li>	Mindfulness based Therapies </li>
                        <li>  Art Therapy  </li>
                     </ul>
                    
                  </div>
                  <div  class="theme_cnt_list">
                     <a name="click" id="brochure"></a>
                     <h4> Brochure </h4>
                     <div class="calalouge">
                        <img src="{{ asset('themes/home/images/svg/pdf.svg') }}">
                        <h6> Download Brochure </h6>
                        <a href="{{ asset('themes/home/images/brochure/track-3-behavioural-science.pdf') }}" download=""  target="_blank"><button class="btn  main_btn  "> Download </button></a>
                     </div>
                  </div>
                  <div class="theme_cnt_list">
                     <a name="click" id="committeememebers"></a>
                     <h4> Committee Members </h4>
                     <div class="row">

 
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3 class="btpnn"> Chief Coordinator</h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/varghese.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>   Dr. Fr. Varghese K. Varghese </h6>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3>  Coordinator</h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr. Palayoor Benyne Jos </h6>
                                 </div>
                              </div>
                           </div>
                        </div>

                        
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3>    Contact Person</h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Asst. Prof. Anju S </h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                        



                           
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3>  Committee Members</h3>
                              

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr. Achamma Alex </h6>
                                 </div>
                              </div>

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr. Anita Rajah </h6>
                                 </div>
                              </div>

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr. Jessy Fenn </h6>
                                 </div>
                              </div>

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr Lijo K J </h6>
                                 </div>
                              </div>


                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr Kusum Mary George</h6>
                                 </div>
                              </div>


                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr Devi NP</h6>
                                 </div>
                              </div>

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Prof. Gokul M Nair</h6>
                                 </div>
                              </div>

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr Amal Tom Jose</h6>
                                 </div>
                              </div>

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr Jacob Alias</h6>
                                 </div>
                              </div>

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr Jeena Shaji</h6>
                                 </div>
                              </div>

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr Bibin Sebastian</h6>
                                 </div>
                              </div>

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Prof. Fabeeha Sameer</h6>
                                 </div>
                              </div>

                     </div>
               </div>
            </div>
         </div>
      </section>
@endsection
@section('script')
@endsection