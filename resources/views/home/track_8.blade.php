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
                  <h1> Track VIII </h1>
                  <h5> Marketing (RICIM) </h5>
                  <div class="theme_cnt_list abt__thm">
                     <h4> About the Track </h4>
                     <h6>   “Responsible Consumption for a Sustainable World” </h6>
                     <p> Making informed decisions about the items we purchase by taking into account their benefits to the environment, society, and the economy is known as responsible consumption. An incentive for businesses to include social responsibility issues in their product offers is the growing social consciousness of consumers while making purchasing decisions (Prendergast and Tsang 2019). Consumers are becoming more socially conscious while making purchases, which is encouraging businesses to include social responsibility considerations in their product offers (Fisk 1973). Hence, researchers as well as corporate managers need to understand and evaluate the ecological ramifications of marketing actions. </p>
                     <p>In this regard, an International Conference on Insights in Marketing (ICIM’24) is being organized by the Rajagiri College of Social Sciences (RCSS), and Rajagiri Business School (RBS). The goal of ICIM’24, which has "Responsible Consumption for a Sustainable World" as its theme, is to foster a critical knowledge of marketing theory and practice with an emphasis on significant debates and cutting-edge research that defies conventional wisdom. The platform for the conference will feature discussions on the development of marketing theory and practice, as well as the role of marketing in markets, organizations, and society. To shed light on how marketing theory and practice can be further improved, the conference will also enlighten the theoretical, managerial, social, economic, and political components of marketing. The conference will serve as a premier venue for academics and industry professionals to showcase recent developments and research findings in the domains of marketing. Academics and practitioners are invited to contribute their research on current trends in marketing theory and practice at ICIM’24.</p>
                  </div>
                  <div  class="theme_cnt_list theme_tpc__bg">
                     <a name="click" id="topics"></a>
                     <h4> Sub-Theme Topics </h4>
                     <p> The Sub-themes include and are not restricted to: </p>
                     <ul class="theme_tpc">
                        <li>  Consuming Sustainably  </li>
                        <li>  	Green Marketing  </li>
                        <li>  Demarketing for a Better World  </li>
                        <li>  Sustainable Marketing  </li>
                        <li>  Carbon Footprint Marketing  </li>
                        <li>  Retail Marketing Innovations  </li>
                        <li>  Possessions, Consumption, and Meanings  </li>
                        <li>  Responsible Tourism Marketing  </li>
                        <li>  Marketing to Reduce Food Waste  </li>
                        <li>  Recycling and Reusing  </li>
                        <li>  Sustainable Practices in Marketing   </li>

                     </ul>
                  </div>
                  <div class="theme_cnt_list">
                     <a name="click" id="brochure"></a>
                     <h4> Brochure </h4>
                     <div class="calalouge">
                        <img src="{{ asset('themes/home/images/svg/pdf.svg') }}">
                        <h6> Download Brochure </h6>
                        <a href="{{ asset('themes/home/images/brochure/track-8-marketing-ricim.pdf') }}" download=""  target="_blank"><button class="btn  main_btn  "> Download </button></a>
                     </div>
                  </div>
                  <div class="theme_cnt_list">
                     <a name="click" id="committeememebers"></a>
                     <h4> Committee Members </h4>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3 class="btpnn"> Coordinators </h3>
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Aby Abraham  </h6>
                                    <p>    
                                       Associate Professor, Rajagiri College of Social Sciences
                                    </p>
                                 </div>
                                 </div>
                                 <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Jegan Jaypal  </h6>
                                    <p>    
                                       Assistant Professor, Rajagiri Business School
                                    </p>
                                 </div>
                                 </div>
                           </div>
                        </div>


                        <div class="col-md-12">
                           <div class="row justify-content-center">
                              <h3> Members </h3>
                             
                              <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Balakrishna Menon  </h6>
                                    <p>   
                                       Associate Professor, RCSS 
                                    </p>
                                 </div>
                                 </div>
                                 <div class="col-md-4 cm_tm_photo_bg">
                                 <div class="cm_tm_photo">
                                    <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                    <h6>  Dr. Muhammad Ahsan Sadiq  </h6>
                                    <p>   Assistant Professor, RBS
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
                                    <h6>  Prof. Kishore Pillai </h6>
                                 </div>
                                 </div>
                                 <div class="col-md-4 cm_tm_photo_bg">
                                    <div class="cm_tm_photo">
                                       <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                       <h6>  Dr. Bejoy John Thomas </h6>
                                    </div>
                                    </div>
                                    <div class="col-md-4 cm_tm_photo_bg">
                                       <div class="cm_tm_photo">
                                          <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                          <h6>  Dr. Joji Alex  </h6>
                                       </div>
                                       </div>
                                       <div class="col-md-4 cm_tm_photo_bg">
                                          <div class="cm_tm_photo">
                                             <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                             <h6>  Dr. Smitha Siji </h6>
                                          </div>
                                          </div>
                                          <div class="col-md-4 cm_tm_photo_bg">
                                             <div class="cm_tm_photo">
                                                <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                                <h6>  Prof. Harish B </h6>
                                             </div>
                                             </div>
                                             <div class="col-md-4 cm_tm_photo_bg">
                                                <div class="cm_tm_photo">
                                                   <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                                   <h6> Dr. Padmanabhan N S </h6>
                                                </div>
                                                </div>
                                                <div class="col-md-4 cm_tm_photo_bg">
                                                   <div class="cm_tm_photo">
                                                      <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                                      <h6>  Dr. Somesh Kumar Sinha </h6>
                                                   </div>
                                                   </div>
                                                   <div class="col-md-4 cm_tm_photo_bg">
                                                      <div class="cm_tm_photo">
                                                         <img src="{{ asset('themes/home/images/organising-committee/avatar.jpg') }}" class="img-fluid" alt="name"> 
                                                         <h6> Dr. Swetarupa Chatterjee </h6>
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