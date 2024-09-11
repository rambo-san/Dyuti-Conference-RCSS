<section>
         <div class="inner-top-img-clr">
            <div class="inner-top-img  contactus_bg_bcm ">
               <div class="inner-top-img-text">
                  <h3> {{ $page ?? '' }} </h3>
                  <ul>
                     <a href="{{ route('home') }}">
                        <li>Home</li>
                     </a>
                     <li> <i class="bi bi-chevron-right"></i> {{ $page ?? '' }} </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>