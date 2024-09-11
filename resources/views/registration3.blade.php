@extends('layouts.home')

   @section("content")
      <section class="registration_1_bg reg_wmn">
         <div class="container inner__bg registration_1">
            <h3><span > Registration </span>  for the International Conference <br> and Partners Meet 2024 </h3>
            
            <!-- <h4> Heading Text </h4> -->

            <form action="{{ route('registration3.store-reg3') }}" method="POST" id="form" class="form-group form-validate" enctype="multipart/form-data">
           @csrf
               <div class="row">
                  <div class="col-md-6 reg__frm">
                     <label>  You belong to: <span class=""> * </span> </label> 
                     <select class="form-select" aria-label="Default select example" name="nationality" id="nationality" required>
                        <option value="">-- select one --</option>
                        <option value="Indian">Indian</option>
                        <option value="Developing Countries"> Developing Countries </option>
                        <option value="Developed Countries">Developed Countries</option>
                     </select>
                  </div>
                  <div class="col-md-6 reg__frm">
                     <label>  Designation: <span class=""> * </span> </label> 
                     <select class="form-select" aria-label="Default select example" name="user_type" required>
                        <option value="">-- select one --</option>
                        <option value="Professional">Professional/Academician</option>
                        <option value="Student">Student/PhD Scholar</option>
                     </select>
                     </select>
                  </div>
                  
                    <div class="col-md-6 reg__frm" id="icsd-div">
                     <label>Are you an ICSD member/from an ICSD partner institution?<span class=""> * </span> </label> 
                     <select class="form-select" aria-label="Default select example" name="icsd" id="icsd" required>
                        <option value="">-- select one --</option>
                        <option value="1">Yes</option>
                        <option value="0"> No </option>
                     </select>
                  </div>
                  
               <!--    <form action="{{ route('registration4.store-reg4') }}" method="POST" id="form" class="form-group form-validate" enctype="multipart/form-data">-->
               <!--@csrf-->
               <div class="col-lg-12 upldrcp"> 
                  <h5> Upload proof if you are an ICSD member </h5>
   
                  <!-- <div class="file-upload-wrapper" data-text="Select your file!"> -->
                  <div class="udp_bg" data-text="Select your file!">
                     <input name="proof" type="file" class="file-upload-field form-control" value="">
                  </div>
                  <p> PDF, JPG, JPEG, PNG - Max 100 MB  </p>
                  
               </div>
               <div id="image-preview"></div><br/>
               <!--<a href="registration5.html"> <button class="btn  main_btn btn__nxt "> Next </button> </a>-->
            <!--</form>-->
                  <!--<div class="col-md-6 reg__frm">-->
                  <!--   <label>  Under which theme Conference are you participating? <span class=""> * </span> </label> -->
                  <!--   <select class="form-select multiple_select" multiple aria-label="Default select example" name="conference_theme[]" required>-->
                  <!--      <option value="">-- select one --</option>-->
                  <!--      @foreach(conf('conference_theme') as $key => $conference_theme)-->
                  <!--         <option value="{{ $key }}">{{ $conference_theme['title'] }}</option>-->
                  <!--      @endforeach-->
                  <!--   </select>-->
                  <!--</div>-->
                  <!--<div class="col-md-6 reg__frm">-->
                  <!--   <label> No. of days of Participation  <span class=""> * </span> </label> -->
                  <!--   <select class="form-select" aria-label="Default select example" name="no_of_days" id="no_of_days" required onchange="return chnage_dates()">-->
                  <!--      <option value="">-- select one --</option>-->
                  <!--      <option value="Full">Full days </option>-->
                  <!--      <option value="1"> 1 Day </option>-->
                  <!--      <option value="2"> 2 Days </option>-->
                  <!--      <option value="3">  3 Days </option>-->
                  <!--      <option value="Half">  Half Day </option>-->
                  <!--   </select>-->
                  <!--</div>-->

                  <!--<div class="col-md-6 reg__frm">-->
                  <!--   <label> Select date of Participation  <span class=""> * </span> </label> -->
                  <!--   <select class="form-select multiple_select" multiple aria-label="Default select example" name="participation_date[]" required>-->
                  <!--      <option value="">-- select one --</option>-->
                  <!--      <option value="10"> 10/01/24 </option>-->
                  <!--      <option value="10M"> 10th Morning </option>-->
                  <!--      <option value="10A"> 10th After noon</option>-->
                  <!--      <option value="11"> 11/01/24 </option>-->
                  <!--      <option value="11M"> 11th Morning </option>-->
                  <!--      <option value="11A"> 11th After noon</option>-->
                  <!--      <option value="12">  12/01/24 </option>-->
                  <!--      <option value="12M"> 12th Morning </option>-->
                  <!--      <option value="12A"> 12th After noon</option>-->
                  <!--      <option value="13">  13/01/24 </option>-->
                  <!--      <option value="13M"> 13th Morning </option>0-->
                  <!--      <option value="13A"> 13th After noon</option>-->
                  <!--   </select> -->
                  <!--   <small>*Press backspace to revert selection</small>        -->
                  <!--</div>-->
                  <!--<div class="col-md-6 reg__frm" id="accomodation-div">-->
                  <!--   <label>   Do you require Accommodation? <span class=""> * </span> </label> -->
                  <!--   <select class="form-select" aria-label="Default select example" name="accomodation" id="accomodation" required>-->
                  <!--      <option value="">-- select one --</option>-->
                  <!--      <option value="1">Yes</option>-->
                  <!--      <option value="0"> No </option>-->
                  <!--   </select>-->
                  <!--</div>-->
                  <div class="col-md-6 reg__frm">
                     <label>  Food Preference <span class=""> * </span> </label> 
                     <select class="form-select" aria-label="Default select example" name="food" required>
                        <option value="">-- select one --</option>
                        <option value="0">Vegetarian</option>
                        <option value="1"> Non-vegetarian </option>
                     </select>
                  </div>
               </div>
            <div class="col-md-12"> 


                <!-- Starts  Readmore -->
                <!--<a href="#" class="readmore btn  main_btn mb_rm_bt "> View Rate Slab </a>-->

                <div class="more">
         
                  <p>  
                     
                     <h5 class="aph5"> Appendix </h5> 
                     <h6 class="aph6">  National Participants </h6>
                     
                      <table class="table">
                         <thead>
                           <tr>
                             <th scope="col"> Category </th>
                             <th scope="col"> No. of conference Days </th>
                             <th scope="col"> Early Bird  Registration (Ended)</th>
                             <th scope="col"> Late/Spot  </th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <th scope="row"> Indian Professionals/ Academicians </th>
                             <td> <p> 4 Days </p>  <p> 3 Days </p>   <p> 2 Days </p>   <p> 1 Day </p>   <p> Half-Day </p>   </td>
                             <td> <p> Rs. 4000*  </p>  <p> Rs. 3000* </p>   <p> Rs. 2000* </p> <p>Rs. 1000**  </p>  <p> Rs. 600** </p>    </td>
                             <td> <p> Rs. 4500 </p>  <p> Rs. 3500 </p>   <p> Rs. 2500 </p>   <p> Rs. 1500 </p>   <p> Rs. 900 </p>  </td>
                           </tr>
                           <tr>
                             <th scope="row"> Indian Research Scholars/ Students </th>
                             <td> <p> 4 Days </p>  <p> 3 Days </p>   <p> 2 Days </p>    </td>
                             <td> <p> Rs. 3500* </p>  <p> Rs. 2500* </p>   <p> Rs. 1500* </p> </td>
                             <td>  <p> Rs. 4000 </p>  <p> Rs. 3000 </p>   <p> Rs. 2000 </p> </td>
                           </tr>
                           <tr>
                             <th scope="row"> </th>
                             <td> <p> 1 Day </p>  <p> Half-Day </p>   </td>
                             <td>   <p> Rs. 750** </p> <p> Rs. 500**  </p> </td>
                             <td>  <p>  Rs. 1250 </p> <p> Rs. 800 </p> </td>
                           </tr>
                         </tbody>
                       </table>
                       <p> *Registration fee includes breakfast, lunch, tea, dinner and conference kit. </p>
                      <p> **Conference kit won't be provided. Tea, lunch/dinner will be provided as applicable.
                      </p>
          
          
          
          
          
          
                      <h6 class="aph6">  International Participants </h6>
                        
                      <table class="table table-responsive">
                         <thead>
                           <tr>
                             <th scope="col"> Category </th>
                             <th scope="col"> Early Bird  Registration (Ended)</th>
                             <th scope="col"> Late/Spot  </th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <th scope="row"> Foreign Professionals/   Academicians </th>
                             <td> <p> $ 350 </p>       </td>
                             <td> <p> $ 400 </p>       </td>
                           </tr>
                           <tr>
                             <th scope="row">Foreign Research Scholars/ Students</th>
                             <td> <p> $ 250 </p>    </td>
                             <td>  <p> $ 300</p> </td>
                           </tr>
                           <tr>
                             <th scope="row"> SAARC Countries'  professional/ Academicians</th>
                             <td> <p> Rs. 10000 </p> </td>
                             <td> <p> Rs. 10500 </p>  </td>
                           </tr>
                           <tr>
                             <th scope="row"> SAARC Countries Research Scholars/ Students</th>
                             <td>   <p> Rs. 8000 </p>  </td>
                             <td> <p> Rs. 8500 </p>    </td>
                           </tr>
                         </tbody>
                       </table>
                       <p> Registration fee includes accommodation (during conference days), breakfast, lunch, tea,
                         dinner and conference kit.</p>
          
          
                  </p>
         
                </div>
                <!-- Ends Readmore -->


               </div>
               <input type="hidden" id="amount" name="amount" value="">
               <input type="hidden" id="currency" name="currency" value="INR">
               <input type="submit" class="btn  main_btn btn__nxt " value="Next">
         </form>

         </div>
      </section>

      <img src="{{ asset('themes/home/images/croud.jpg') }}" class="img-fluid">
<style>
.selectize-input {
    border: 0px !important;
    box-shadow: none !important;
    padding: 10px 0 !important;
}
.form-select.multiple_select{
   height:auto !important;
}
   </style>
      @stop
      @section("script")   
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
      <script>
      
         
         $(document).ready(function() {


            $('input[name="reciept"]').on('change', function() {
               var input = this;
               if (input.files && input.files[0]) {
                     var reader     = new FileReader();
                     var file       = input.files[0];
                     reader.onload  = function (e) {
                       
                        if (file.type.startsWith('image/')) 
                        {
                           preview = '<img src="' + e.target.result + '" style="max-width:450px;width:100%"/>';
                        } 
                        else if (file.type === 'application/pdf') 
                        {
                           preview = '<a href="' + e.target.result + '" target="_blank"><b>PDF Uploded. Click to view.</b></a>';
                        } 
                        else 
                        {
                           preview = 'File type not supported for preview.';
                        }

                        $('#image-preview').html(preview);
                     };
                     reader.readAsDataURL(input.files[0]);
               }
            });
            
         $(document).ready(function() {
         
            $('.multiple_select').selectize();
         ////////////////////////////////////////////////////////////////////////////////
         function calculateAmount() 
         {
            var nationality            = document.querySelector('select[name="nationality"]').value;
            var user_type              = document.querySelector('select[name="user_type"]').value;
            var noOfDays               = document.querySelector('select[name="no_of_days"]').value;
            var amount                 = 0;
            var earlyBirdRegistration  = false;
    
            if (nationality === 'Indian') 
            {document.querySelector('input[name="currency"]').value = 'INR';
               if (user_type === 'Professional') 
               {
                  switch (noOfDays) {
                     case 'Full':
                        amount = earlyBirdRegistration ? 4000 : 4500;
                        break;
                     case '1':
                        amount = earlyBirdRegistration ? 1000 : 1500;
                        break;
                     case '2':
                        amount = earlyBirdRegistration ? 2000 : 2500;
                        break;
                     case '3':
                        amount = earlyBirdRegistration ? 3000 : 3500;
                        break;
                     case 'Half':
                        amount = earlyBirdRegistration ? 600 : 900;
                        break;
                  }
               } 
               else if (user_type === 'Student') 
               {
                  switch (noOfDays) {
                     case 'Full':
                        amount = earlyBirdRegistration ? 3500 : 4000;
                        break;
                     case '3':
                        amount = earlyBirdRegistration ? 2500 : 3000;
                        break;
                     case '2':
                        amount = earlyBirdRegistration ? 1500 : 2000;
                        break;
                     case '1':
                        amount = earlyBirdRegistration ? 750 : 1250;
                     break;
                     case 'Half':
                        amount = earlyBirdRegistration ? 500 : 800;
                        break;
                  }
               }
            } 
            else if (nationality === 'SAARC') 
            {
               document.querySelector('input[name="currency"]').value = 'INR';
               if (user_type === 'Professional') 
               {
                  switch (noOfDays) {
                        case 'Full':
                           amount = earlyBirdRegistration ? 10000 : 10500;
                           break;
                        
                  }
               } 
               else if (user_type === 'Student') {
                  switch (noOfDays) {
                        case 'Full':
                           amount = earlyBirdRegistration ? 8000 : 8500;
                           break;
                        
                  }
               }
            } 
            else if (nationality === 'Others') {
               document.querySelector('input[name="currency"]').value = 'USD';
               if (user_type === 'Professional') 
               {
                  switch (noOfDays) {
                        case 'Full':
                           amount = earlyBirdRegistration ? 350 : 400;
                           break;
                        
                  }
               } 
               else if (user_type === 'Student') {
                  switch (noOfDays) {
                        case 'Full':
                           amount = earlyBirdRegistration ? 250 : 300;
                           break;
                        
                  }
               }
            }

        // alert(amount);
        
         document.querySelector('input[name="amount"]').value = amount;
      }
      
      
      document.querySelector('select[name="nationality"]').addEventListener('change', calculateAmount);
      document.querySelector('select[name="user_type"]').addEventListener('change', calculateAmount);
      document.querySelector('select[name="no_of_days"]').addEventListener('change', calculateAmount);

     
      document.querySelector('form').addEventListener('submit', function (event) {
         
         calculateAmount();

      
         if (document.querySelector('input[name="amount"]').value === "") {
            
            event.preventDefault();
            
         }
      });




            ////////////////////////////////////////////////////////////////////////////////////
            $("#main").owlCarousel({
         
         autoPlay: 4000,
         navigation: true,
         slideSpeed: 1000,
         paginationSpeed: 1000,
         singleItem: true,
         transitionStyle: "fade"
         
         });
         
         $("#main2").owlCarousel({
         
         autoPlay: 4000,
         navigation: true,
         slideSpeed: 1000,
         paginationSpeed: 1000,
         singleItem: true,
         transitionStyle: "fade"
         
         });
         
         $("#products").owlCarousel({
         
          autoPlay: 4000,
         navigation: true,
         items:3,
         itemsDesktop: [1199, 2],
         itemsDesktopSmall: [979, 2],
         itemsDesktopSmall: [991, 1],
         itemsTablet: [767,1], // 2 items between 600 and 480
         slideSpeed: 1000,
         paginationSpeed: 1000,
         transitionStyle: "fade"
         
         
             });
         
         
         $("#clients").owlCarousel({
         
         autoPlay: 4000,
         navigation: true,
         items: 5,
         itemsDesktop : [1100,5], 
         itemsDesktopSmall : [1366,4], 
         itemsTablet: [767,3], 
         itemsMobile : [575,3], 
         navigation: true,
         lazyLoad: true,
         pagination: false,
         scrollPerPage : true
         
         });
         
         });
         
         
         
      </script>

          <!-- Readmore -->
  <script>
   jQuery(function($) {
       $('.more').hide();
       $('.readmore').each(function() {
           $(this).show(0).on('click', function(e) {
               e.preventDefault();
   
               $(this).next('.more').slideToggle('fast');
               if ($(this).html() != "Show less") {
                   $(this).html("Show less");
   
               } else {
                   $(this).html("View Rate Slab");
   
               }
   
           });
       });
   });
$(document).ready(function(){
   $('#nationality').on('change',function(){
      if($(this).val() == 'Indian'){
         $('#no_of_days').attr('disabled',false);
         $('select[name="accomodation"]').val("0");
         $("#accomodation-div").hide();
         dateSelect.clearOptions();
      }else{
         $('#no_of_days').val('Full').attr('disabled',true);
         $("#accomodation-div").show();

         var dateSelect = $("select[name='participation_date[]']")[0].selectize;

         dateSelect.clearOptions();
         dateSelect.addOption([
               { value: "10", text: "10/01/24" },
               { value: "10M", text: "10th Morning" },
               { value: "10A", text: "10th Afternoon" },
               { value: "11", text: "11/01/24" },
               { value: "11M", text: "11th Morning" },
               { value: "11A", text: "11th Afternoon" },
               { value: "12", text: "12/01/24" },
               { value: "12M", text: "12th Morning" },
               { value: "12A", text: "12th Afternoon" },
               { value: "13", text: "13/01/24" },
               { value: "13M", text: "13th Morning" },
               { value: "13A", text: "13th Afternoon" }
         ]);
         dateSelect.setValue(["10", "11", "12", "13"]);

      }
   });

   $("#no_of_days").change(function() {
    var selectedOption = $(this).val();
    var dateSelect = $("select[name='participation_date[]']")[0].selectize;

    if (selectedOption === "Full") 
    {
        
        dateSelect.clearOptions();
        dateSelect.addOption([
            { value: "10", text: "10/01/24" },
            { value: "10M", text: "10th Morning" },
            { value: "10A", text: "10th Afternoon" },
            { value: "11", text: "11/01/24" },
            { value: "11M", text: "11th Morning" },
            { value: "11A", text: "11th Afternoon" },
            { value: "12", text: "12/01/24" },
            { value: "12M", text: "12th Morning" },
            { value: "12A", text: "12th Afternoon" },
            { value: "13", text: "13/01/24" },
            { value: "13M", text: "13th Morning" },
            { value: "13A", text: "13th Afternoon" }
        ]);
        dateSelect.setValue(["10", "11", "12", "13"]);
    } 
    else if (selectedOption === "Half") 
    {
        
        dateSelect.clearOptions();
        dateSelect.addOption({ value: "10M", text: "10th Morning" });
        dateSelect.addOption({ value: "10A", text: "10th Afternoon" });
        dateSelect.addOption({ value: "11M", text: "11th Morning" });
        dateSelect.addOption({ value: "11A", text: "11th Afternoon" });
        dateSelect.addOption({ value: "12M", text: "12th Morning" });
        dateSelect.addOption({ value: "12A", text: "12th Afternoon" });
        dateSelect.addOption({ value: "13M", text: "13th Morning" });
        dateSelect.addOption({ value: "13A", text: "13th Afternoon" });
        dateSelect.setValue("10M"); // Pre-select one of the 'Half Day' options
    } 
    else 
    {
       
        dateSelect.clearOptions();
        dateSelect.addOption([
            { value: "10", text: "10/01/24" },
            { value: "10M", text: "10th Morning" },
            { value: "10A", text: "10th Afternoon" },
            { value: "11", text: "11/01/24" },
            { value: "11M", text: "11th Morning" },
            { value: "11A", text: "11th Afternoon" },
            { value: "12", text: "12/01/24" },
            { value: "12M", text: "12th Morning" },
            { value: "12A", text: "12th Afternoon" },
            { value: "13", text: "13/01/24" },
            { value: "13M", text: "13th Morning" },
            { value: "13A", text: "13th Afternoon" }
        ]);
        dateSelect.clear();
    }
});


   // $("#no_of_days").change(function() {
   //      var selectedOption = $(this).val();
   //      var dateSelect = $("select[name='participation_date[]']")[0].selectize;
        
   //      if (selectedOption === "Full") {
           
   //          dateSelect.setValue(["10", "11", "12", "13"]);
   //      } else {
           
   //          dateSelect.clear();
   //      }
   //  });

   
   
});
function chnage_dates(){
   var key = $('#no_of_days').val();
   var dates = "{{ json_encode(conf('conference_theme')) }}";
}
</script>
@stop