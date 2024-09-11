@extends('layouts.home')
@section("content")
<section class=" ">
   <div class="container inner__bg ">
      <div class="row">
         <div class="col-lg-3 col-md-12 themes_dtls ">
            <div class="p_sticky">
               <ul>
                  <a href="#abouttheme">
                     <li> About the Track </li>
                  </a>
                  <a href="#topics">
                     <li> Sub-Theme Topics </li>
                  </a>
                  <a href="#brochure">
                     <li> Brochure </li>
                  </a>
                  <a href="#committeememebers">
                     <li> Committee Members </li>
                  </a>
               </ul>
            </div>
         </div>
         <div class="col-md-9 themes_dtls_cntn">
            <a name="click" id="abouttheme"></a>
            <h1> Track IV </h1>
            <h5> Life Sciences </h5>
            <div class="theme_cnt_list abt__thm">
               <h4> About the Track </h4>
               <p> Life Sciences subjects such as biology, medicine, and public health are essential for understanding and treating diseases and promoting healthy behaviours and lifestyles (SDG 3). Agriculture and food science are important Life Sciences subjects that can sustainably produce foods ensuring food security (SDG 2). Other Life Sciences, such as ecology and conservation biology, are essential for understanding and preserving the world's biodiversity (SDG 15). Life Sciences subjects are also essential for promoting sustainable development by studying and developing renewable energy sources (SDG 7). By developing new technologies and infrastructure to promote economic growth and Innovation (SDG 9). Promoting sustainable consumption and production to reduce waste and minimize environmental impact (SDG 12). And by protecting our oceans and marine life to promote sustainable use of ocean resources (SDG 14). </p>
            </div>
            <div id="topics" class="theme_cnt_list theme_tpc__bg">
               <h4> Sub-Theme Topics </h4>
               <p> The Sub-themes include and are not restricted to: </p>
               <ul class="theme_tpc">
                  <li> Food, Nutrition and Human Health </li>
                  <li> Sustainable Agriculture and Food Systems </li>
                  <li> Biodiversity Conservation and Management </li>
                  <li> Renewable Energy and Clean Technologies </li>
                  <li> Climate Change Adaptation and Mitigation </li>
               </ul>
            </div>
            <div class="theme_cnt_list">
               <a name="click" id="brochure"></a>
               <h4> Brochure </h4>
               <div class="calalouge">
                  <img src="{{ asset('themes/home/images/svg/pdf.svg') }}">
                  <h6> Download Brochure </h6>
                  <a href="{{ asset('themes/home/images/brochure/track-4-life-sciences.pdf') }}" download="" target="_blank"><button class="btn  main_btn  "> Download </button></a>
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
                              <!-- <img src="{{ asset('themes/home/images/organising-committee/saju.jpg') }}" class="img-fluid" alt="name">  -->
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Prof. Sabu Thomas </h6>
                              <p> Former VC and Professor,<br> MG University, Kottayam
                              </p>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <!-- <img src="{{ asset('themes/home/images/organising-committee/binoy.jpg') }}" class="img-fluid" alt="name">  -->
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Fr. Dr. S. Ignacimuthu </h6>
                              <p> Former VC of Madras and Bharathiar University
                                 Director, Xavier Research Foundation,
                                 St. Xavier’s College, Palayamkottai, India
                              </p>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <!-- <img src="{{ asset('themes/home/images/organising-committee/shinto.jpg') }}" class="img-fluid" alt="name">  -->
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Prof. Sarita G Bhat </h6>
                              <p> Professor, Department of Biotechnology
                                 Cochin University of Science And Technology
                              </p>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <!-- <img src="{{ asset('themes/home/images/organising-committee/antony.jpg') }}" class="img-fluid" alt="name">  -->
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr S Antony Ceasar </h6>
                              <p>
                                 Head and Senior Scientist
                                 Department of Biosciences
                                 Rajagiri College of Social Sciences
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="row justify-content-center">
                        <h3> Conference Coordinator</h3>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr. Jiya Jose </h6>
                              <p> Scientist D <br>
                                 Rajagiri College of Social Sciences
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
                              <h6> Dr NM Krishnakumar </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr. Rajiv Gandhi Gopalsamy </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr S Prabhu </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr T. Maharajan </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr Ajeesh Krishna </h6>
                           </div>
                        </div>




                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr. Amal Raj</h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Mrs Gincy Devasia </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Mr Edwin Hillary </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Mrs Shareena P M</h6>
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