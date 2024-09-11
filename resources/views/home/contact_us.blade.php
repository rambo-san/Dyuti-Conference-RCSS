@extends('layouts.home')
@section("content")

<style>
    .contactus_details img{

    border-radius:0px;
}
</style>
<section>


<div class="container inner__bg contactus_details_bg ">



    <div class="row">
       

        <div class="col-md-12 col-lg-5 contactus_details">
          <h6> Contact Us  </h6>
          <ul>
            <img src="{{ asset('themes/home/images/icds2.png') }}" class="img-fluid" alt="logo" style="border:none;">
             <li>  <span>  24th ICSD Biennial Conference 2025 </span> <br>
                <span> Rajagiri College of Social Sciences (Autonomous) </span> <br>
Rajagiri P. O, Kalamassery,<br>
Cochin - 683104, Kerala, India.
<br>

</li>
             <li class="contactus_call"> <a href="tel: +91 - 7356472239 "> <i class="bi bi-telephone-inbound"></i>    +91 - 7356472239  </a>, <a href="mailto:icsd2025@rajagiri.edu"> <i class="bi bi-envelope"></i> icsd2025@rajagiri.edu</a>  </li>
          </ul>
       </div>



        <div class="col-lg-7 col-md-12 contactus_details_txt">
           <h3> Get in Touch </h3>
           <form action="{{ route('contact_save') }}" method="POST">
            @csrf
              <div class="row">
                <div class="col-lg-6 col-md-12 reg__frm">
                    <label>  Name  </label> 
                    <div class="input-group">  <input type="text" class="form-control" name="name"> </div>
                 </div>
                 <div class="col-lg-6 col-md-12 reg__frm">
                    <label>  Phone Number  </label> 
                    <div class="input-group">  <input type="text" class="form-control" name="phone"> </div>
                 </div>
                 <div class="col-md-12 reg__frm">
                    <label>  Email  </label> 
                    <div class="input-group">  <input type="email" class="form-control" name="email"> </div>
                 </div>
                 <div class="col-md-12  cnt_fm cf_txt_area">
                    <label>  Your Message  </label> 
                    <div class="input-group"> 
                       <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                    </div>
                 </div>
                 <a href="#"> <button class=" btn main_btn btn_sk"> Send  </button> </a>
              </div>
           </form>
        </div>


        
     </div>



     
<!-- <div class="container map_in">
<h3>  Hill Campus  </h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.5585721144753!2d76.3155973!3d10.053237099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080dd2c4bfaed9%3A0x616d1c1cb927fe62!2sRajagiri%20College%20of%20Social%20Sciences%20(Autonomous)!5e0!3m2!1sen!2sin!4v1697701187243!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div> -->



<div class="container map_in">
<h3>Valley Campus </h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.2825772902456!2d76.35588109999999!3d9.993500899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080db98f31ea6d%3A0xe0458794b319c877!2sRajagiri%20Centre%20for%20Business%20Studies%5BRCBS%5D!5e0!3m2!1sen!2sin!4v1697701267129!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
   

</div>



</section>
@endsection
@section('script')

      @endsection