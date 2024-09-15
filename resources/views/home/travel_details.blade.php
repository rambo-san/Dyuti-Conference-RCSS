@extends('layouts.home')

   @section("content")


<section>
   <div class="container inner__bg call__for__papers ">
            
      <div class="row" >
          

         <div class="col-md-12" >



            
<h2 style="color:#0b0b8b;font-weight:bold;">REACH THE VENUE </h2>
<div class="position-relative overflow-hidden">
   <a href="https://maps.app.goo.gl/mPecfQVHrdVtD68A6" target="_blank">
     <img src="{{ asset('themes/home/images/rbs.webp') }}" class="img-fluid rounded transition-effect" alt="Rajagiri Business School" style="width:100%">
   </a>
   <h2 class="position-absolute bottom-0 start-50 translate-middle-x text-center text-white bg-dark bg-opacity-50 w-100 py-2">
     <a href="https://maps.app.goo.gl/mPecfQVHrdVtD68A6" target="_blank" class="text-white text-decoration-none">Rajagiri Business School</a>
   </h2>
 </div>
 
 
              
         </div>
      </div>
      {{-- airport --}}
         <div class="col-md-7 mt-4" style="background-color:#eeeeee;width:100%;padding: 2rem; border-radius: 1.5rem;">  
         
         <h2 style="color:#0b0b8b;font-weight:bold;">Airport : <a href="https://www.google.com/maps/dir/Cochin+International+Airport/Rajagiri+Valley/@10.0768444,76.3584226,12z/data=!4m14!4m13!1m5!1m1!1s0x3b080882748f4a6f:0x30b2ebe45d968458!2m2!1d76.3933204!2d10.1532129!1m5!1m1!1s0x3b080ca3d5bc6813:0x7bb296080cb92e09!2m2!1d76.3572165!2d9.9948535!3e0?entry=ttu&g_ep=EgoyMDI0MDkxMS4wIKXMDSoASAFQAw%3D%3D" target="blank">International Airport</a></h2>
         <p>Distance: <strong>28km</strong> </p>
         <p>Time: <strong>1 hour</strong></p>
         <h3><a href="https://www.google.com/maps/dir/Cochin+International+Airport/Rajagiri+Valley/@10.0768444,76.3584226,12z/data=!4m14!4m13!1m5!1m1!1s0x3b080882748f4a6f:0x30b2ebe45d968458!2m2!1d76.3933204!2d10.1532129!1m5!1m1!1s0x3b080ca3d5bc6813:0x7bb296080cb92e09!2m2!1d76.3572165!2d9.9948535!3e0?entry=ttu&g_ep=EgoyMDI0MDkxMS4wIKXMDSoASAFQAw%3D%3D" target="blank">From Airport to Venue</a></h3>
         <ul class="cfp"> 
            <li><a href="https://www.uber.com/in/en/r/cities/taxi/kochi-kerala-in/" target="blank">Uber</a></li>
            <li><a href="https://www.cial.aero/Our-Facilities/Transportation/Prepaid-Taxi/" target="blank">Prepaid Taxi</a></li>
            </ul>      

<h3> By Taxi/Car:</h3> 
<p>Direct Pickup from Kochi Airport: You can book a taxi or car directly (UBER and Airport Taxis are available) from the airport. The driver will pick you up from the arrival terminal and take you directly to Rajagiri Business School. </p>

<h3> By Public Bus:</h3> 
<p>Bus Stop at Kochi Airport: KSRTC (Kerala State Road Transport Corporation) buses are available from the airport. You can board a bus from the airport bus stop, located just outside the arrival terminal. 
</p><p>Aluva Bus Stand: If you miss a direct bus from the airport, you can take a bus or taxi to Aluva Bus Stand, which is a major bus hub. From Aluva, you can get buses towards Kakkanad or Rajagiri Valley.
</p>

<h3> By Metro and Bus:</h3> 
<p>Aluva Metro Station: Take a taxi or a bus to Aluva Metro Station (around 12 km from the airport). From Aluva, you can take the Kochi Metro towards the last stop (Palarivattom) and then a bus or auto-rickshaw to Rajagiri Business School. </p>

<h3> By Train and Bus:</h3> 
<p>Aluva Railway Station: You can take a taxi or bus from the airport to Aluva Railway Station (around 12 km). From Aluva, take a local train to Ernakulam South (Ernakulam Junction) or Ernakulam North (Ernakulam Town), and then a bus or taxi to Rajagiri Business School. 
</p><p>Rajagiri Business School is located in Rajagiri Valley, Kakkanad, so you might need to ask for buses or taxis that are heading towards Infopark, Kakkanad.</p>

<h3 class="text-info"> Kochi metro Bus service from Airport :</h3> 
<p>KMRL feeder Bus service is available from Kochi airport to aluva metro station. <a class="click_link" href="{{ route('fee_details') }}" target="_blank">Click here</a>.</p>       
         </div>

         {{-- Railway station --}}

         <div class="col-md-7 mt-4" style="background-color:#eeeeee;width:100%;padding: 2rem; border-radius: 1.5rem;">  
         
            <h2 style="color:#0b0b8b;font-weight:bold;">Railway station : <a href="https://www.google.com/maps/dir/ERNAKULAM+SOUTH+RAILWAY+STATION/Rajagiri+Valley/@9.9761067,76.3231611,12z/data=!4m15!4m14!1m5!1m1!1s0x3b08730db3a5bb1d:0xd75994675ce7d175!2m2!1d76.2909867!2d9.9692376!1m5!1m1!1s0x3b080ca3d5bc6813:0x7bb296080cb92e09!2m2!1d76.3572165!2d9.9948535!3e0!5i1?entry=ttu&g_ep=EgoyMDI0MDkxMS4wIKXMDSoASAFQAw%3D%3D" target="blank">Ernakulam Junction (South)</a></h2>
            <p>Distance: <strong>12km</strong> </p>
            <p>Time: <strong>40 mins</strong></p>
            <h3><a href="https://www.google.com/maps/dir/ERNAKULAM+SOUTH+RAILWAY+STATION/Rajagiri+Valley/@9.9761067,76.3231611,12z/data=!4m15!4m14!1m5!1m1!1s0x3b08730db3a5bb1d:0xd75994675ce7d175!2m2!1d76.2909867!2d9.9692376!1m5!1m1!1s0x3b080ca3d5bc6813:0x7bb296080cb92e09!2m2!1d76.3572165!2d9.9948535!3e0!5i1?entry=ttu&g_ep=EgoyMDI0MDkxMS4wIKXMDSoASAFQAw%3D%3D" target="blank">From Railway Station to Venue</a></h3>
            <ul class="cfp"> 
               <li>	<a href="https://www.uber.com/in/en/r/cities/taxi/kochi-kerala-in/" target="blank">Uber</a></li>
               <li>Auto</li>
               <li>Taxi</li>
               </ul>   
            <p>To reach RajagiriBusiness School (RBS)from Ernakulam South Railway Station (Ernakulam Junction), you have the following options:</p>   
   
   <h3> By Taxi/Auto-Rickshaw:</h3> 
   <p><strong>Taxi:</strong> The easiest and most convenient way is to take a taxi directly from the railway station. The distance is about 12-15 km and the ride will take approximately 30-45 minutes depending on traffic. 
   </p><p><strong>Auto-Rickshaw:</strong> If you're looking for a more economical option, you can take an auto rickshaw. It will take a similar time, though costs will be lower than a taxi.</p>
   
   <h3> By Bus:</h3> 
   <p>Walk to the nearest bus stop (1 km from the railway station) or take an auto-rickshaw to the Ernakulam South bus stop. Board a bus going towards Kakkanad or Rajagiri Valley. You may have to ask the conductor to confirm if the bus goes towards Infopark/Kakkanad/Rajagiri. Get off at the Rajagiri Valley stop, which is close to Rajagiri Business School.</p>
   
   <h3> By Metro and Bus:</h3> 
   <p>Walk or take an auto from Ernakulam South Railway Station to the nearest metro station at Maharaja’s College Metro Station (about 1 km). Take the Kochi Metro towards Aluva and get down at Palarivattom Metro Station. From Palarivattom, take a bus or auto to Rajagiri Business School in Kakkanad. This journey could take 45 minutes to an hour, depending on traffic and availability of transport.</p>
   </div>

   {{-- Bus stand --}}
   <div class="col-md-7 mt-4" style="background-color:#eeeeee;width:100%;padding: 2rem; border-radius: 1.5rem;">  
         
      <h2 style="color:#0b0b8b;font-weight:bold;">Bus Stand : <a href="https://www.google.com/maps/dir/KSRTC+Bus+Stand/Rajagiri+Valley/data=!4m14!4m13!1m5!1m4!1s0x3b080ddfa84e2403:0x4127d42e7563541c!8m2!3d9.977959!4d76.2886481!1m5!1m4!1s0x3b080ca3d5bc6813:0x7bb296080cb92e09!8m2!3d9.9948535!4d76.35721649999999!3e0?g_ep=CAESCjExLjEzMy4xMDIYACCRQSpaLDk0MjEyNDk2LDk0MjA3Mzk0LDk0MjA3NTA2LDk0MjA4NTA2LDk0MjE3NTIzLDk0MjE4NjUzLDk0MjI5ODM5LDQ3MDg3MTE4LDQ3MDg0MzkzLDk0MjEzMjAwQgJJTg%3D%3D" target="blank">Ernakulam Bus Stand </a></h2>
      <p>Distance: <strong>12km</strong> </p>
      <p>Time: <strong>35 mins</strong></p>
      <h3><a href="https://www.google.com/maps/dir/KSRTC+Bus+Stand/Rajagiri+Valley/data=!4m14!4m13!1m5!1m4!1s0x3b080ddfa84e2403:0x4127d42e7563541c!8m2!3d9.977959!4d76.2886481!1m5!1m4!1s0x3b080ca3d5bc6813:0x7bb296080cb92e09!8m2!3d9.9948535!4d76.35721649999999!3e0?g_ep=CAESCjExLjEzMy4xMDIYACCRQSpaLDk0MjEyNDk2LDk0MjA3Mzk0LDk0MjA3NTA2LDk0MjA4NTA2LDk0MjE3NTIzLDk0MjE4NjUzLDk0MjI5ODM5LDQ3MDg3MTE4LDQ3MDg0MzkzLDk0MjEzMjAwQgJJTg%3D%3D" target="blank">From Bus Stand to Venue</a></h3>
      <ul class="cfp"> 
         <li><a href="https://www.uber.com/in/en/r/cities/taxi/kochi-kerala-in/" target="blank">Uber</a></li>
         <li>Auto</li>
         <li>Bus</li>
         </ul>   
      <p><strong>Ernakulam Bus stand to Rajagiri valley Bus stop</strong> </p>  

</div>
</div>  
      </section>
      <img src="{{ asset('themes/home/images/croud.jpg') }}" class="img-fluid" style="width: 100%">
      @endsection