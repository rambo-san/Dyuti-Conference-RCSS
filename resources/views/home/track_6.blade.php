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
                  <h1> Track VI </h1>
                  <h5>Finance and Economics (RCEF’24)</h5>
                  <div class="theme_cnt_list abt__thm">
                     <h4> About the Track </h4>
                     <h6>  “Sustainable Finance: The Role of Green and Transition Finance” </h6>
                     <p> The 5th Rajagiri Conference on Economics and Finance (RCEF’24) under the theme “Sustainable Finance: The Role of Green and Transition Finance,” organized by Rajagiri College of Social Sciences (RCSS) and Rajagiri Business School (RBS) invites submissions on a broad range of topics in economics and finance. </p>
                     <p>Sustainable finance involves considering environmental, social, and governance (ESG) factors when making investment choices within the financial sector. This approach encourages long-term investments in economically sustainable activities and projects. It encompasses two main components: Green Finance, which focuses on financing environmentally-friendly initiatives, and Transition Finance, which supports investments that aim to reduce greenhouse gas emissions and other environmental impacts while transitioning to a climate-neutral and sustainable economy. The role of sustainable finance is crucial in achieving climate and sustainability goals set by nations. It accomplishes this by directing private investments towards a climate-neutral, climate-resilient, resource-efficient, and equitable economy, working alongside public funding. </p>
                     <p>The purpose of this conference is to bring together both national and international scholars working in the field of economics and finance in the broadest sense of words, with a special focus on Sustainable Finance. The conference is structured around several thematically-focused sessions. Extended abstracts followed by full research articles in economics and finance are invited from academicians, researchers, doctoral students, and practitioners. Presented full-length papers will be evaluated for publishing in reputed journals. </p>
                  </div>
                  <div class="theme_cnt_list theme_tpc__bg">
                     <a name="click" id="topics"></a>
                     <h4> Sub-Theme Topics </h4>
                     <p> The Sub-themes include and are not restricted to: </p>
                     <ul class="theme_tpc">
                        <!-- <li>  Finance </li>
                        <li>  Economics </li> -->
                        <li>  Sustainable Finance and investments </li>
                        <li>  Green taxation, accounting, reporting, ESG </li>
                        <li>  Green Finance/ Green Investments/ Green Bonds </li>
                        <li>  Innovative economic strategies and Sustainable trade </li>
                        <li>  Environmental impact, climate change and green taxation </li>
                        <li>  Economic growth and energy consumption </li>
                     </ul>
                  </div>
                  <div  class="theme_cnt_list">
                     <a name="click" id="brochure"></a>
                     <h4> Brochure </h4>
                     <div class="calalouge">
                        <img src="{{ asset('themes/home/images/svg/pdf.svg') }}">
                        <h6> Download Brochure </h6>
                        <a href="{{ asset('themes/home/images/brochure/track-6-finance-and-economics-rcef24.pdf') }}" download=""  target="_blank"><button class="btn  main_btn  "> Download </button></a>
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
                                    <h6> Dr. Ann Mary Jose </h6>
                                    <p>    Assistant Professor – Finance and Economics<br>
                                       Rajagiri Business School
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3> Organising Committee  </h3>
                              <p class="text-center"> (Faculty of Finance and Economics, RBS & RCSS) </p>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>    Dr. Abraham Babu  </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>  CA Abraham Joseph </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr. Ancy Sara Philip</h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr. Brahmadev Panda</h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> CA Dipti Lunawat </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr. Garima Sisodia  </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>  Dr. Jaedong Kang  </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>  Dr. Jains P Chacko </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr. Krishnan Chandramohan </h6>
                           </div>
                        </div>
                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>  Dr. Lakshmi Jayaprakash </h6>
                           </div>
                        </div>

                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>  Dr. Rintu Antony </h6>
                           </div>
                        </div>

                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6> Dr. Ronny Thomas  </h6>
                           </div>
                        </div>

                        <div class="col-md-4 cm_tm_photo_bg">
                           <div class="cm_tm_photo">
                              <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name">
                              <h6>  Prof. Sairam Moturi </h6>
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