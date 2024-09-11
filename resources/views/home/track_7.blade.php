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
               <div class="col-md-9 'themes_dtls_cntn">
                  <a name="click" id="abouttheme"></a>
                  <h1> Track VII </h1>
                  <h5> Operations (RCOM’24) </h5>
                  <div class="theme_cnt_list abt__thm">
                     <h4> About the Track </h4>
                     <h6>  “Global Sustainable Practices, Indian Innovations: A Confluence of Operational Excellence” </h6>
                     <p> The Rajagiri Conference on Operations Management (RCOM’24) under the theme “Global Sustainable Practices Indian Innovations: A Confluence of Operational Excellence.” Organized by a collaboration between the Rajagiri College of Social Sciences (RCSS) and Rajagiri Business School (RBS), this conference will provide an unparalleled platform for thought leaders, practitioners, and academics to explore and celebrate the synergy between operational excellence, sustainability, and innovative practices. </p>
                     <p>The RCOM’24 conference will serve as a platform to explore how Indian businesses are innovatively integrating sustainable practices into their operational models. These initiatives reflect a recognition of the interconnectedness between operational efficiency and social responsibility towards the environment. By fostering dialogues around Indian innovations, RCOM'24 seeks to inspire new paradigms that can serve as exemplars for the larger business community. The motive of RCOM'24 is to beckon, professionals, researchers, and thought leaders across operations management and related fields to invite and encourage them to participate actively. By sharing insights, experiences, and perspectives, attendees will collectively contribute to the ongoing conversation about operational excellence, sustainability, and innovation.</p>
                  </div>
                  <div  class="theme_cnt_list theme_tpc__bg">
                     <a name="click" id="topics"></a>
                     <h4> Sub-Theme Topics </h4>
                     <p> The Sub-'themes include and are not restricted to: </p>
                     <ul class="theme_tpc">
                        <li>  	ESG Integration in value chain: navigating SEBI’s guidelines   </li>
                        <li>  	Circular economy and waste management.   </li>
                        <li>  Green Supply chain Management.   </li>
                        <li>  Adoption of lean practices for sustainable operations.   </li>
                        <li>  Integration of Renewable energy.   </li>
                        <li>  Socially responsible operations.   </li>
                        <li>  Sustainable supplier selection.   </li>
                        <li>  Sustainable and ethical procurement.   </li>
                        <li>  	Sustainable transportation and logistics.   </li>
                        <li>  Technology adoption in waste reduction.   </li>
                        <li>  Data driven decision making in sustainability.    </li>
                     </ul>

                  </div>
                  <div class="theme_cnt_list">
                     <a name="click" id="brochure"></a>
                     <h4> Brochure </h4>
                     <div class="calalouge">
                        <img src="{{ asset('themes/home/images/svg/pdf.svg') }}">
                        <h6> Download Brochure </h6>
                        <a href="{{ asset('themes/home/images/brochure/track-7-operations-rcom24.pdf') }}" download=""  target="_blank"><button class="btn  main_btn  "> Download </button></a>
                     </div>
                  </div>
                  <div class="theme_cnt_list">
                     <a name="click" id="committeememebers"></a>
                     <h4> Committee Members </h4>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3 class="btpnn"> Advisory Committee </h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr. Arun A Elias </h6>
                                    <p>     Director & Dean<br>
                                      
                                       Rajagiri Business School.
                                    </p>
                                 </div>
                                 </div>
                                 <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/saju.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> 
                                       Fr. (Dr.) Saju M D CMI</h6>
                                       <p> Principal, Rajagiri College of Social Sciences <br>
                                       Executive Director, Rajagiri Business School.
                                    </p>
                                 </div>
                                 </div>
                                 <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/binoy.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> 
                                      Dr. Binoy Joseph</h6>
                                       <p> Associate Director, Rajagiri College of Social Sciences.
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Fr. (Dr.) Francis Manavalan CMI</h6>
                                       <p> 
                                          Assistant Director, Valley Campus.  </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3> Coordinator  </h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Nausheen Hashmi </h6>
                                    <p> Assistant Professor-Operations <br>
                                       Rajagiri Business School, Kochi.
                                    </p>
                                 </div>
                              </div>

                           </div>
                        </div>

                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3> Members  </h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Prof. Deepak Babu </h6>
                                    <p> Area Chair- Operations, RBS
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr. George Joseph </h6>
                                    <p> Assistant Professor- Operations, RBS
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     
                        
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3> Contact  </h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>   Dr. Anto Joseph </h6>
                                    <p> Assistant Professor, RCSS<br>
                                       SDG conference Coordinator, Valley campus<br>
                                       <a class="acmdn_link" href="mailto:anto@rajagiri.edu">  anto@rajagiri.edu</a>
                                    </p>
                                  
                                 
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Nausheen Hashmi </h6>
                                    <p> Assistant Professor, RBS <br>
                                       <a class="acmdn_link" href="mailto:nausheen@rajagiri.edu">    nausheen@rajagiri.edu</a>
                                    </p>
                                  
                                 
                                 </div>
                              </div>
                           </div>
                        </div>

                       
                        
                      
                       
                   
                        
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3> Organizing Committee   </h3>
                              <p class="text-center"> (Faculty of Operations, RBS &amp; RCSS): </p>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Prof. Mani P Sam </h6>
                                 </div>
                              </div>

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Prof. Shirley Rita Luiz </h6>
                                 </div>
                              </div>

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>   Dr. Viva Mathew </h6>
                                 </div>
                              </div>

                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>   Dr. Arun George </h6>
                                 </div>
                              </div>


                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>        Dr. Karthick Swaminathan  </h6>
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