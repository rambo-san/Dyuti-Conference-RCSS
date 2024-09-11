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
                  <h1> Track I </h1>
                  <h5> Social Work (DYUTI 2024) </h5>
                  <div class="theme_cnt_list abt__thm">
                     <h4> About the Track </h4>
                     <p>  SDGS reaffirm the social work profession's character to liaise with other professions and partners to deepen a holistic, interdisciplinary and multisectoral approach to service delivery. With a strong focus on enhancing social and economic functioning at various levels, SDGs are aligned with the profession to promote well-being of the individuals, families, organisations and communities. Social work professionals work with specific target groups mentioned in SDGs such as women, children, youths, persons with disabilities, older persons, indigenous peoples, internally displaced people, migrants and refugees. The global agenda of SDGs offers social work professionals to redefine their role in ensuring human rights and social justice among the target population. </p>
                  </div>
                  <div id="topics" class="theme_cnt_list theme_tpc__bg">
                     <h4> Sub-Theme Topics </h4>
                     <p> The Sub-themes include and are not restricted to: </p>
                     <ul class="theme_tpc">
                        <li> Inclusive Societies </li>
                        <li> Safe, resilient and sustainable habitations  </li>
                        <li>  Enhancing Healthy Lives and Promoting Well-Being </li>
                        <li> 	Reducing Inequalities Among Specific Groups </li>
                        <li> 	Partnership Models in SDG Initiatives </li>
                     </ul>
                  </div>
                  <div class="theme_cnt_list">
                     <a name="click" id="brochure"></a>
                     <h4> Brochure </h4>
                     <div class="calalouge">
                        <img src="{{ asset('themes/home/images/svg/pdf.svg') }}">
                        <h6> Download Brochure </h6>
                        <a href="{{ asset('themes/home/images/brochure/track-1-social-work-dyuti-2024.pdf') }}" download=""  target="_blank"><button class="btn  main_btn  "> Download </button></a>
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
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/saju.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Fr. (Dr.) Saju M D CMI </h6>
                                    <p>  Principal, Rajagiri College of Social Sciences
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/binoy.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Binoy Joseph </h6>
                                    <p>  Associate Director, Rajagiri College of Social Sciences
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/shinto.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Fr. (Dr.) Shinto Joseph CMI </h6>
                                    <p>  Assistant Director, Valley Campus
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. George Palattiyil </h6>
                                    <p>  Head of Social Work &; Senior Lecturer ,  School of Social and Political Science, The University of Edinburgh
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3>  Conference Convenor </h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <!-- <img src="{{ asset('themes/home/images/organising-committee/kiran.jpg') }}" class="img-fluid" alt="name">  -->
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Kiran Thampi </h6>
                                    <p> Head, Department of Social Work
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3>  Conference Coordinators </h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6> Dr. Rajeev S P </h6>
                                    <p>  Assistant Professor, Department of Social Work
                                    </p>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Giji George </h6>
                                    <p>  Assistant Professor, Department of Social Work
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
                                    <h6> Dr. Anish K R </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Sr. (Dr.) Sunirose I P </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Nycil Romis Thomas </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Anil John </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Mr. Mathew T John </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Deepa Rasheed </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Mini K P </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Sr. Shyba Babu </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Ms. Renitta Manuel </h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Mrs. Shiji N</h6>
                                 </div>
                              </div>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Ms. Ann Kurian </h6>
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