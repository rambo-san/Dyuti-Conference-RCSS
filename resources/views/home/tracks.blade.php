@extends('layouts.home')
@section("content")
<style>
    /*.inner-top-img-text h3{*/
    /*    display:none;*/
    /*}*/
    /*  .inner-top-img-text ul{*/
    /*    display:none;*/
    /*}*/
</style>
<section class=" ">
         <div class="container inner__bg ">

            <div class="row">

              
                          <div class="col-md-4 prodcuts_bg">
                             <div class="prodcuts_in_hm"> 
                                <div> 
                                <img src="{{ asset('themes/home/images/social_work.jpg') }}" class="img-fluid" alt="Rajagiri">
                               
                            </div>
                             </div>
                             <div class="prodcuts_in_hm_text" style="height:300px;">
                                <h5> Sub-theme I </h5>
                                <h3>Community Empowerment and Participation
                                </h3>
                                <p style="overflow:visible;">•	Grassroots initiatives and community-driven development projects.<br>
•	Participatory approaches in research, planning, and decision-making.<br>

                                          </p>
                                <!--<p>SDGS reaffirm the social work profession's character to liaise with other professions and partners to deepen a holistic, interdisciplinary and multisectoral approach to service delivery. With a strong focus on enhancing social and economic functioning at various levels, SDGs are aligned with the profession to promote well-being of the individuals, families, organisations and communities. Social work professionals work with specific target groups mentioned in SDGs such as women, children, youths, persons with disabilities, older persons, indigenous peoples, internally displaced people, migrants and refugees. The global agenda of SDGs offers social work professionals to redefine their role in ensuring human rights and social justice among the target population.-->


                                </p>
                               <!--<a href="{{ route('track_1') }}"> <button class="btn  main_btn btn_bl_bdr"> View More </button> </a> -->
                             </div>
                          </div>
              
                          <div class="col-md-4 prodcuts_bg">
                            <div class="prodcuts_in_hm"> 
                                <div> 
                                <img src="{{ asset('themes/home/images/informatics.jpg') }}" class="img-fluid" alt="Rajagiri">
                             
                             </div></div>
                             <div class="prodcuts_in_hm_text" style="height:300px;">
                                <h5> Sub-theme II </h5>
                                <h3>	Technology and Digital Solutions
                                </h3>
                                 <p style="overflow:visible;"> 
•	Mobile apps, online platforms, and digital tools for social impact.<br>
•	Innovative uses of technology in service delivery and communication.

                                          </p>
                                <!--<p> Integrating the Sustainable Development Goals (SDGs) into business practices It is crucial for promoting social and environmental sustainability while driving economic growth. This conference will promote research papers that are focused on business strategies that align with the SDGs. -->
                                </p>

                                <!--<a href="{{ route('track_2') }}"> <button class="btn  main_btn btn_bl_bdr"> View More </button> </a> -->
                             </div>
                          </div>
                
                          <div class="col-md-4 prodcuts_bg">
                            <div class="prodcuts_in_hm"> 
                                <div> 
                                <img src="{{ asset('themes/home/images/THEME.3.png') }}" class="img-fluid" alt="Rajagiri">
                             
                             </div></div>
                             <div class="prodcuts_in_hm_text"style="height:300px;">
                                <h5> Sub-theme III </h5>
                                <h3> Financial Inclusion and Economic Empowerment
                                </h3>
                                 <p style="overflow:visible;"> •	Microfinance, microenterprise development, and savings-led initiatives.<br>
•	Social impact investing and alternative financing models.
</p>
                                <!--<p> The last decade has shaken the fabric of society with the COVID-19 pandemic, climate change patterns, and economic & political upheavals. The Behavioural Science sessions address some of the changes that occurred in various spheres in the field of Psychology. </p>-->
                                <!--<a href="{{ route('track_3') }}"> <button class="btn  main_btn btn_bl_bdr"> View More </button> </a> -->
                             </div>
                          </div>

                          <div class="col-md-4 prodcuts_bg">
                            <div class="prodcuts_in_hm"> 
                                <div> 
                                <img src="{{ asset('themes/home/images/life_science.jpg') }}" class="img-fluid" alt="Rajagiri">
                             
                             </div></div>
                             <div class="prodcuts_in_hm_text" style="height:300px;">
                                <h5> Sub-theme IV </h5>
                                <h3>Health and Well-being
                                </h3>
                                  <p style="overflow:visible;">
                                             •	Trauma-informed care and trauma-informed practices.<br>
•	Integrating mental health support into social services.<br>
•	Social prescribing and holistic approaches to healthcare.
 
                                          </p>
                                <p>
                                  
                                   <!--Life Sciences subjects such as biology, medicine, and public health are essential for understanding and treating diseases and promoting healthy behaviours and lifestyles (SDG 3) -->
                                </p>
                                <!--<a href="{{ route('track_4') }}"> <button class="btn  main_btn btn_bl_bdr"> View More </button> </a> -->
                             </div>
                          </div>
                
                          <div class="col-md-4 prodcuts_bg">
                            <div class="prodcuts_in_hm"> 
                                <div> 
                                <img src="{{ asset('themes/home/images/b_operations.jpg') }}" class="img-fluid" alt="Rajagiri">
                              
                             </div></div>
                             <div class="prodcuts_in_hm_text" style="height:300px;">
                                <h5> Sub-theme V </h5>
                                <h3> Justice and Restorative Practices
                                </h3>
                                <p style="overflow:visible;"> 
                                •	Restorative justice programs and conflict resolution models.<br>
•	Alternatives to incarceration and community-based rehabilitation.<br>
•	Addressing systemic inequalities within justice systems.


                                          </p>
                                   <!--Analytics involves the use of various techniques and tools to discover patterns, trends, correlations, and meaningful information within large datasets. Analytics can be applied in a wide range of fields and industries,-->

                                </p>

                                <!--<a href="{{ route('track_5') }}"> <button class="btn  main_btn btn_bl_bdr"> View More </button> </a> -->
                             </div>
                          </div>
                
                          <div class="col-md-4 prodcuts_bg">
                            <div class="prodcuts_in_hm"> 
                                <div> 
                                <img src="{{ asset('themes/home/images/THEME 6.jpg') }}" class="img-fluid" alt="Rajagiri">
                              
                             </div></div>
                             <div class="prodcuts_in_hm_text" style="height:300px;">
                                <h5> Sub-theme VI </h5>
                                <h3> Education and Lifelong Learning
                                </h3>
                                <p style="overflow:visible;">
                                            •	Innovative educational approaches and inclusive schooling.<br>
•	Lifelong learning opportunities for marginalized communities.<br>
•	Technology-enhanced learning and distance education initiatives.


                                          </p>
                                <p>
                                     
                                  <!-- “Sustainable Finance: The Role of Green and Transition Finance”-->
                                  <!--The 5th Rajagiri Conference on Economics and Finance (RCEF’24) under the theme “Sustainable Finance: The Role of Green and Transition Finance,” organized by Rajagiri College of Social Sciences (RCSS) and Rajagiri Business School (RBS) invites submissions on a broad range of topics in economics and finance.-->

                                </p>
                                <!--<a href="{{ route('track_6') }}"> <button class="btn  main_btn btn_bl_bdr"> View More </button> </a>  -->
                             </div>
                          </div>

                          <div class="col-md-4 prodcuts_bg">
                            <div class="prodcuts_in_hm"> 
                                <div> 
                                 <img src="{{ asset('themes/home/images/b_environment.jpg') }}" class="img-fluid" alt="Rajagiri">
                               
                             </div></div>
                             <div class="prodcuts_in_hm_text" style="height:300px;">
                                <h5> Sub-theme VII </h5>
                                <h3> Environmental Sustainability and Resilience
                                  
                                </h3>
                                 <p style="overflow:visible;">
                                            •	Community-based environmental conservation projects.<br>
•	Climate resilience and disaster risk reduction strategies.<br>
•	Promoting sustainable livelihoods and resource management.
 

                                          </p>
                                <p>
                                    
                                  <!-- “Global Sustainable Practices, Indian Innovations: A Confluence of Operational Excellence”-->
                                  <!--The Rajagiri Conference on Operations Management (RCOM’24) under the theme “Global Sustainable Practices Indian Innovations: A Confluence of Operational Excellence.” Organized by a collaboration between the Rajagiri College of Social Sciences (RCSS) and Rajagiri Business School -->

                                </p>
                                <!--<a href="{{ route('track_7') }}"> <button class="btn  main_btn btn_bl_bdr"> View More </button> </a> -->
                             </div>
                          </div>


                          <div class="col-md-4 prodcuts_bg">
                            <div class="prodcuts_in_hm"> 
                                <div> 
                                <img src="{{ asset('themes/home/images/b_science.jpg') }}" class="img-fluid" alt="Rajagiri">
                               
                             </div></div>
                             <div class="prodcuts_in_hm_text" style="height:300px;">
                                <h5> Sub-theme VIII </h5>
                                <h3> Policy Advocacy and Social Change
                                </h3>
                                 <p style="overflow:visible;">
                                            
                                            •	Advocacy campaigns and grassroots movements for policy reform.<br>
•	Human rights-based approaches to social development.<br>
•	Mobilizing communities for collective action and social justice.

                                          </p>
                                <p>
                                  
                                  <!-- “Responsible Consumption for a Sustainable World”-->
                                  <!--Making informed decisions about the items we purchase by taking into account their benefits to the environment, society, and the economy is known as responsible consumption. An incentive for businesses to include social responsibility issues in-->
                                </p>
                                <!--<a href="{{ route('track_8') }}"> <button class="btn  main_btn btn_bl_bdr"> View More </button> </a> -->
                             </div>
                          </div>
                      

               
                          <div class="col-md-4 prodcuts_bg">
                            <div class="prodcuts_in_hm"> 
                                <div> 
                                <img src="{{ asset('themes/home/images/THEME.9.png') }}" class="img-fluid" alt="Rajagiri">
                             </div></div>
                             <div class="prodcuts_in_hm_text" style="height:300px;">
                                
                                <h5> Sub-theme IX </h5>

                                <h3>  Cross-Cultural Exchange and Global Collaboration
                                </h3>
                                  <p style="overflow:visible;">
                                           
                                             •	International partnerships and knowledge-sharing networks.<br>
•	Cultural exchange programs and cross-cultural understanding initiatives.<br>
•	Learning from diverse social work and development practices worldwide.


                                          </p>
                                <p>
                                 
                                   <!--SDG/ESG Practices in HR Aegis-->
                                   <!--SDG/ESG Practices in HR Aegis, organized by Rajagiri College of Social Sciences (RCSS) and Rajagiri Business School (RBS) invites submissions on a broad range of topics in HR. SDG/ESG practices in HR Aegis involve a number of the listed goals of sustainable development,-->

                                </p>
                                <!--<a href="{{ route('track_9') }}"> <button class="btn  main_btn btn_bl_bdr"> View More </button> </a> -->
                             </div>
                          </div>
                          
                              <div class="col-md-4 prodcuts_bg">
                            <div class="prodcuts_in_hm"> 
                                <div> 
                                <img src="{{ asset('themes/home/images/tc_marketing.jpg') }}" class="img-fluid" alt="Rajagiri">
                             </div></div>
                             <div class="prodcuts_in_hm_text" style="height:300px;">
                                
                                <h5> Sub-theme X </h5>

                                <h3>  Ethical Practice and Professional Development
                                </h3>
                                <p style="overflow:visible;">
                                  •	Ethical considerations in social work and development work.<br>
•	Continuing education and professional development opportunities.<br>
•	Supporting the well-being of social workers and development practitioners.</p>
                                <p>
                                 
                                   <!--SDG/ESG Practices in HR Aegis-->
                                   <!--SDG/ESG Practices in HR Aegis, organized by Rajagiri College of Social Sciences (RCSS) and Rajagiri Business School (RBS) invites submissions on a broad range of topics in HR. SDG/ESG practices in HR Aegis involve a number of the listed goals of sustainable development,-->

                                </p>
                                <!--<a href="{{ route('track_9') }}"> <button class="btn  main_btn btn_bl_bdr"> View More </button> </a> -->
                             </div>
                          </div>

          </div>

         </div>
      </section>
@endsection
@section('script')
@endsection