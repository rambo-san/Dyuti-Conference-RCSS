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
                  <h1> Track II </h1>
                  <h5> General management (RCNPM’24)</h5>
                  <div  class="theme_cnt_list abt__thm">
                     <h4> About the Track </h4>
                     <p>  Integrating the Sustainable Development Goals (SDGs) into business practices
                        It is crucial for promoting social and environmental sustainability while driving economic growth. This conference will promote research papers that are focused on business strategies that align with the SDGs. It would make a positive contribution to create an impact on the current business environment. The current research theme makes a more focused engagement with all stakeholders to understand their perspectives on sustainability issues and the SDGs. This engagement can help shape sustainable strategy and foster support for various initiatives. The measurable and time-bound goals that contribute to the achievement of these targets can be discussed in detail in the research papers. Embedding the selected SDGs into the overall business strategy and integrating sustainability considerations into decision-making processes, innovation efforts, product development, and business model design to extend the impact of sustainability efforts across the entire value chain. It will encourage practitioners and managers to adopt sustainable practices and align with SDG principles. The conference throws light on addressing the pressing global challenges through technological advancements and creative solutions and establishes mechanisms to track and measure progress toward your SDG-related goals. Integrating the SDGs into your business practices will not only contribute to a more sustainable world but also enhance your brand reputation, attract conscious consumers, and mitigate risks associated with environmental and social issues. 
                     </p>
                  </div>
                  <div  class="theme_cnt_list theme_tpc__bg">
                     <a name="click" id="topics"></a>
                     <h4> Sub-Theme Topics </h4>
                     <p> The Sub-themes include and are not restricted to: </p>
                     <ul class="theme_tpc">
                        <li> Sustainable Business Environment   </li>
                        <li> Sustainable Business Innovations   </li>
                        <li> Sustainable Business Strategies   </li>
                        <li> Sustainable Entrepreneurship   </li>
                     </ul>
                  </div>
                  <div  class="theme_cnt_list">
                     <a name="click" id="brochure"></a>
                     <h4> Brochure </h4>
                     <div class="calalouge">
                        <img src="{{ asset('themes/home/images/svg/pdf.svg') }}">
                        <h6> Download Brochure </h6>
                        <a href="{{ asset('themes/home/images/brochure/track-2-general-management-rcnpm_24.pdf') }}" download=""  target="_blank"><button class="btn  main_btn  "> Download </button></a>
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
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/mkjoseph.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>    Fr. (Dr.) M.K. Joseph,  </h6>
                                    <p>   Dean, Department of Commerce and Professional Studies, RCSS
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/ctfrancis.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. C.T. Francis </h6>
                                    <p>    Head of the Department (HOD), Commerce, RCSS
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/ayana.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr. Ayana Johny </h6>
                                    <p>    Head of the Department (HOD), Department of Management & Professional Studies, RCSS
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/gowri.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr. Gowri Vijayan </h6>
                                    <p>  Area Chair, General Management, RBS
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3>  Coordinator  </h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr. Vimal Krishnan R </h6>
                                    <p>  Assistant Professor, General Management, 
                                       Rajagiri Business School <br>
                                      
                                       <a class="acmdn_link" href="mailto: vimal@rajagiri.edu"> vimal@rajagiri.edu </a> 
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                      
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3>  Organising Committee </h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>   Dr. Sanjeev Ganguly </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>    Prof. Pramodh U Korula </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>     Dr. Susan Mathew </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>   Dr. Subhadarshini Khatua</h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>    Dr.Bharathi Rajan </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>   Prof. Revathi Radhakrishnan </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>   Prof. Ebina Justin M A </h6>
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