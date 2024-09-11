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
                  <h1> Track IX </h1>
                  <h5> Human Resource </h5>
                  <div class="theme_cnt_list abt__thm">
                     <h4> About the Track </h4>
                     <h6>  SDG/ESG Practices in HR Aegis</h6>
                     <p> SDG/ESG Practices in HR Aegis, organized by Rajagiri College of Social Sciences (RCSS) and Rajagiri Business School (RBS) invites submissions on a broad range of topics in HR. SDG/ESG practices in HR Aegis involve a number of the listed goals of sustainable development, such as no poverty, zero hunger, quality education, gender equity, clean water and sanitation, decent work and economic growth, innovation, inequalities, peace, and justice. It also encompasses the recent developments in sustainable HR practices, such as the Labor Codes and ESG Initiatives by corporations. </p>
                     <p>This conference aims to bring together national and international industrial practitioners, research scholars, and working professionals in human resource management/development, with a special focus on SDG/ESG-friendly HR. The conference is structured around several theme-focused sessions. Extended abstracts, followed by full research articles, and practitioners’ perspectives and ideas in the field of HRM/D are invited from practitioners, academicians, researchers, and doctoral students. The presented full-length papers will be evaluated for publication in reputed journals.</p>
                  </div>
                  <!-- <div  class="theme_cnt_list theme_tpc__bg">
                     <a name="click" id="topics"></a>
                     <h4> Sub-Theme Topics </h4>
                     <p> The Sub-themes include and are not restricted to: </p>
                     <ul class="theme_tpc">
                        <li>  Your Text Here </li>
                     </ul>
                  </div> -->
                  <div class="theme_cnt_list">
                     <a name="click" id="brochure"></a>
                     <h4> Brochure </h4>
                     <div class="calalouge">
                        <img src="{{ asset('themes/home/images/svg/pdf.svg') }}">
                        <h6> Download Brochure </h6>
                        <a href="{{ asset('themes/home/images/brochure/track-9-human-resource.pdf') }}" download=""  target="_blank"><button class="btn  main_btn  "> Download </button></a>
                     </div>
                  </div>
                  <div class="theme_cnt_list">
                     <a name="click" id="committeememebers"></a>
                     <h4> Committee Members </h4>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3 class="btpnn"> Coordinator </h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Shelly Jose  </h6>
                                    <p>    
                                       Professor <br>
                                       Dept. of Human Resource Management ,
                                       Rajagiri College of Social Sciences 
                                    </p>
                                    
                                 </div>
                                 </div>
                           </div>
                        </div>









                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3> Organising Committee  </h3>
                             
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Jayasree Indiran </h6>
                                 </div>
                                 </div>
                                 <div class="col-md-4 cm_tm_photo_bg">
                                    <div class="cm_tm_photo">
                                       <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                       <h6> Dr. Bala Subrahmanian </h6>
                                    </div>
                                    </div>
                                    <div class="col-md-4 cm_tm_photo_bg">
                                       <div class="cm_tm_photo">
                                          <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                          <h6> Dr. Simon Jacob </h6>
                                       </div>
                                       </div>
                                    <div class="col-md-4 cm_tm_photo_bg">
                                       <div class="cm_tm_photo">
                                          <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                          <h6> Dr. Siby Jose </h6>
                                       </div>
                                       </div>
                                       <div class="col-md-4 cm_tm_photo_bg">
                                          <div class="cm_tm_photo">
                                             <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                             <h6>  Dr. Santhosh Kumar Sharma</h6>
                                          </div>
                                          </div>
                                          <div class="col-md-4 cm_tm_photo_bg">
                                             <div class="cm_tm_photo">
                                                <!-- <img src="{{ asset('themes/home/images/organising-committee/reginold.jpg') }}" class="img-fluid" alt="name">  -->
                                                <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                                <h6>  Fr. Reginold, CMI
                                                   </h6>
                                             </div>
                                             </div>
                                             <div class="col-md-4 cm_tm_photo_bg">
                                                <div class="cm_tm_photo">
                                                   <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                                   <h6> Saji George  </h6>
                                                </div>
                                                </div>
                           </div>
                        </div>





                        
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3> Members </h3>
                             
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/binoy.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Binoy Joseph </h6>
                                 </div>
                                 </div>

                                 <div class="col-md-4 cm_tm_photo_bg">
                                    <div class="cm_tm_photo">
                                       <!-- <img src="{{ asset('themes/home/images/organising-committee/manoj.jpg') }}" class="img-fluid" alt="name">  -->
                                       <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                       <h6>  Dr. Manoj Menon </h6>
                                    </div>
                                    </div>

                                    <div class="col-md-4 cm_tm_photo_bg">
                                       <div class="cm_tm_photo">
                                          <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                          <h6>  Dr. Manoj Mathew </h6>
                                       </div>
                                       </div>

                                       <div class="col-md-4 cm_tm_photo_bg">
                                          <div class="cm_tm_photo">
                                             <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                             <h6>  Dr. Imran Khan </h6>
                                          </div>
                                          </div>
                                 
                           </div>
                        </div>



                        <div class="row justify-content-center">
                           <h3> Contact </h3>
                           <div class="col-md-4 cm_tm_photo_bg">
                              <div class="cm_tm_photo">
                                 <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                 <h6>  Dr. Rohini Pillai </h6>

                                 <p> 
                                    <a class="acmdn_link" href="mailto:rohini@rajagiri.edu ">  rohini@rajagiri.edu  </a>
                                    </p>

                                    <p> 
                                      
                                    <a class="acmdn_link" href="tell:7907173886"> 7907173886  </a>
      
                                          
                                       </p>
                                


                              </div>
                           </div>

                           <div class="col-md-4 cm_tm_photo_bg">
                              <div class="cm_tm_photo">
                                 <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                 <h6>  Dr. Rohini Pillai </h6>

                                 <p> 
                                    <a class="acmdn_link" href="mailto:vineethaprakash@rajagiri.edu "> vineethaprakash@rajagiri.edu  </a>
                                    </p>

                                    <p> 
                                      
                                    <a class="acmdn_link" href="tell:9497052288"> 9497052288  </a>
      
                                          
                                       </p>


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