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
                  <h1> Track V </h1>
                  <h5>Analytics and Informatics </h5>
                  <div  class="theme_cnt_list abt__thm">
                     <h4> About the Track </h4>
                     <p> Analytics involves the use of various techniques and tools to discover patterns, trends, correlations, and meaningful information within large datasets. Analytics can be applied in a wide range of fields and industries, including business, healthcare, finance, sports, and more. Informatics encompasses science, information science, and data analytics. Analytics and Informatics involve creating energy-efficient and carbon-free computing systems that process and analyse large amounts of data. This includes energy-efficient hardware, software optimization, and renewable energy for data centres. Analytics plays a crucial role in measuring and tracking progress towards achieving the Sustainable Development Goals (SDGs). Analytics and informatics must be integrated to create sustainable technology solutions that can address complex environmental issues. </p>
                  </div>
                  <div class="theme_cnt_list theme_tpc__bg">
                     <a name="click" id="topics"></a>
                     <h4> Sub-Theme Topics </h4>
                     <p> The Sub-themes include and are not restricted to: </p>
                     <ul class="theme_tpc">
                        <li>   Smart Cities/Urban Resources </li>
                        <li>   Healthcare </li>
                        <li>   Business/Organisations/Culture </li>
                        <li>   Security/Risk and Governance </li>
                        <li>   Ethics and Social Responsibility/ Sustainability </li>
                        <li>   Innovation/Education/ Emerging Technologies </li>
                     </ul>

                  </div>
                  <div class="theme_cnt_list">
                     <a name="click" id="brochure"></a>
                     <h4> Brochure </h4>
                     <div class="calalouge">
                        <img src="{{ asset('themes/home/images/svg/pdf.svg') }}">
                        <h6> Download Brochure </h6>
                        <a href="{{ asset('themes/home/images/brochure/track-5-analytics-and-informatics.pdf') }}" download=""  target="_blank"><button class="btn  main_btn  "> Download </button></a>
                     </div>
                  </div>
                  <div class="theme_cnt_list">
                     <a name="click" id="committeememebers"></a>
                     <h4> Committee Members </h4>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3 class="btpnn">  Advisory Committee </h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 
                                
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/bindiya.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Bindiya M Varghese</h6>
                                    <p>   Dean, Dept. of Computer Science
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Angela Susan Mathew </h6>
                                    <p>    Dean, Business Studies
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/neethu.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Prof. Neethu Mohanan </h6>
                                    <p>   Head, Dept. of Library and Information Science
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3> Coordinator </h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Sabeen Govind </h6>
                                    <p> Assistant Professor , RCSS <br>
                                      

                                       <a class="acmdn_link" href="mailto:sabeengovind@rajagiri.edu">  sabeengovind@rajagiri.edu </a>
                                    </p>
                                   


                                 </div>
                              </div>

                           </div>
                        </div>

                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3> Organizing Committee</h3>

                             
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>   Dr. B. Elango</h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>  Dr. Sinimole </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr. Shiju Thomas </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>  Mr. Dev Anand K </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>  Dr. Sreejith R </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>  Dr.  Ann Baby </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr. Keerthy A S</h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>  Mrs. Sunu Mary Abraham </h6>
                           </div>
                        </div>
 

                           </div>
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