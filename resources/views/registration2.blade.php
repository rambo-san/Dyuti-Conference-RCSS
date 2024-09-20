@extends('layouts.home')

   @section("content")
      <section class="registration_1_bg reg_wmn">
         <div class="container inner__bg registration_1">
            <h3><span > Registration </span> for the 24th Biennial ICSD Conference 2025</h3>
           <!-- <h4> Heading Text </h4> -->
           
           <form action="{{ route('registration2.store-reg2') }}" method="POST" id="form" class="form-group form-validate" >
           @csrf
            <div class="row">
               <div class="col-md-6 reg__frm">
                  <label>  Title <span class=""> * </span> </label> 
                  <select class="form-select" name="title" aria-label="Default select example" required>
                     <option value="">-- select one --</option>
                     @foreach(conf('title') as $key => $title)
                        <option {{ old('title') == $key ? 'selected' : '' }} value="{{ $key }}">{{ $title }}</option>
                     @endforeach
                  </select>
               </div>
               <div class="col-md-6">
                  <div class="col-md-12 reg__frm">
                     <label>  Name <span class="tsml"> ( As you want to be appeared in the Conference certificate and other documents )  </span> <span class=""> * </span> </label> 
                     <div class="input-group">  <input type="text" class="form-control" name="name" required maxlength="255" value="{{ old('name') ?? '' }}" onkeypress="return allowOnlyLetters(event,this);"> </div>
                  </div>
               </div>
               <div class="col-md-6 reg__frm">
                  <label>  Designation <span class=""> * </span> </label> 
                  <select class="form-select" name="designation" aria-label="Default select example" required>
                     <option value="">-- select one --</option>
                     @foreach(conf('designation') as $key => $designation)
                        <option {{ old('designation') == $key ? 'selected' : '' }}  value="{{ $key }}">{{ $designation }}</option>
                     @endforeach
                  </select>
               </div>
               <div class="col-md-6 reg__frm">
                  <label>  Gender <span class=""> * </span> </label> 
                  <select class="form-select" aria-label="Default select example" name="gender" required>
                  <option value="">-- select one --</option>
                     <option value="m" {{ old('gender') == 'm' ? 'selected' : '' }}>Male</option>
                     <option value="f" {{ old('gender') == 'm' ? 'selected' : '' }}>Female </option>
                     <option value="t" {{ old('gender') == 'f' ? 'selected' : '' }}>Transgender </option>
                  </select>
               </div>
               <div class="col-md-6">
                  <div class="col-md-12 reg__frm">
                     <label>  Name of representing Organization/College/Institution/Independent <span class=""> * </span> </label> 
                     <div class="input-group">  <input type="text" value="{{ old('organization') ?? '' }}" class="form-control" name="organization" required maxlength="255"> </div>
                  </div>
               </div>
               <div class="col-md-6 reg__frm">
                  <label>  Nationality <span class=""> * </span> </label> 
                  <select class="form-select" aria-label="Default select example" id="nationality" name="nationality" required>
                     <option value="">-- select one --</option>
                     <option {{ old('nationality') == 'afghan' ? 'selected' : '' }} value="afghan">Afghan</option>
                     <option {{ old('nationality') == 'albanian' ? 'selected' : '' }} value="albanian">Albanian</option>
                     <option {{ old('nationality') == 'algerian' ? 'selected' : '' }} value="algerian">Algerian</option>
                     <option {{ old('nationality') == 'american' ? 'selected' : '' }} value="american">American</option>
                     <option {{ old('nationality') == 'andorran' ? 'selected' : '' }} value="andorran">Andorran</option>
                     <option {{ old('nationality') == 'angolan' ? 'selected' : '' }} value="angolan">Angolan</option>
                     <option {{ old('nationality') == 'antiguans' ? 'selected' : '' }} value="antiguans">Antiguans</option>
                     <option {{ old('nationality') == 'argentinean' ? 'selected' : '' }} value="argentinean">Argentinean</option>
                     <option {{ old('nationality') == 'armenian' ? 'selected' : '' }} value="armenian">Armenian</option>
                     <option {{ old('nationality') == 'australian' ? 'selected' : '' }} value="australian">Australian</option>
                     <option {{ old('nationality') == 'austrian' ? 'selected' : '' }} value="austrian">Austrian</option>
                     <option {{ old('nationality') == 'azerbaijani' ? 'selected' : '' }} value="azerbaijani">Azerbaijani</option>
                     <option {{ old('nationality') == 'bahamian' ? 'selected' : '' }} value="bahamian">Bahamian</option>
                     <option {{ old('nationality') == 'bahraini' ? 'selected' : '' }} value="bahraini">Bahraini</option>
                     <option {{ old('nationality') == 'bangladeshi' ? 'selected' : '' }} value="bangladeshi">Bangladeshi</option>
                     <option {{ old('nationality') == 'barbadian' ? 'selected' : '' }} value="barbadian">Barbadian</option>
                     <option {{ old('nationality') == 'barbudans' ? 'selected' : '' }} value="barbudans">Barbudans</option>
                     <option {{ old('nationality') == 'batswana' ? 'selected' : '' }} value="batswana">Batswana</option>
                     <option {{ old('nationality') == 'belarusian' ? 'selected' : '' }} value="belarusian">Belarusian</option>
                     <option {{ old('nationality') == 'belgian' ? 'selected' : '' }} value="belgian">Belgian</option>
                     <option {{ old('nationality') == 'belizean' ? 'selected' : '' }} value="belizean">Belizean</option>
                     <option {{ old('nationality') == 'beninese' ? 'selected' : '' }} value="beninese">Beninese</option>
                     <option {{ old('nationality') == 'bhutanese' ? 'selected' : '' }} value="bhutanese">Bhutanese</option>
                     <option {{ old('nationality') == 'bolivian' ? 'selected' : '' }} value="bolivian">Bolivian</option>
                     <option {{ old('nationality') == 'bosnian' ? 'selected' : '' }} value="bosnian">Bosnian</option>
                     <option {{ old('nationality') == 'brazilian' ? 'selected' : '' }} value="brazilian">Brazilian</option>
                     <option {{ old('nationality') == 'british' ? 'selected' : '' }} value="british">British</option>
                     <option {{ old('nationality') == 'bruneian' ? 'selected' : '' }} value="bruneian">Bruneian</option>
                     <option {{ old('nationality') == 'bulgarian' ? 'selected' : '' }} value="bulgarian">Bulgarian</option>
                     <option {{ old('nationality') == 'burkinabe' ? 'selected' : '' }} value="burkinabe">Burkinabe</option>
                     <option {{ old('nationality') == 'burmese' ? 'selected' : '' }} value="burmese">Burmese</option>
                     <option {{ old('nationality') == 'burundian' ? 'selected' : '' }} value="burundian">Burundian</option>
                     <option {{ old('nationality') == 'cambodian' ? 'selected' : '' }} value="cambodian">Cambodian</option>
                     <option {{ old('nationality') == 'cameroonian' ? 'selected' : '' }} value="cameroonian">Cameroonian</option>
                     <option {{ old('nationality') == 'canadian' ? 'selected' : '' }} value="canadian">Canadian</option>
                     <option {{ old('nationality') == 'cape_verdean' ? 'selected' : '' }} value="cape_verdean">Cape Verdean</option>
                     <option {{ old('nationality') == 'central_african' ? 'selected' : '' }} value="central_african">Central African</option>
                     <option {{ old('nationality') == 'chadian' ? 'selected' : '' }} value="chadian">Chadian</option>
                     <option {{ old('nationality') == 'chilean' ? 'selected' : '' }} value="chilean">Chilean</option>
                     <option {{ old('nationality') == 'chinese' ? 'selected' : '' }} value="chinese">Chinese</option>
                     <option {{ old('nationality') == 'colombian' ? 'selected' : '' }} value="colombian">Colombian</option>
                     <option {{ old('nationality') == 'comoran' ? 'selected' : '' }} value="comoran">Comoran</option>
                     <option {{ old('nationality') == 'congolese' ? 'selected' : '' }} value="congolese">Congolese</option>
                     <option {{ old('nationality') == 'costa_rican' ? 'selected' : '' }} value="costa_rican">Costa Rican</option>
                     <option {{ old('nationality') == 'croatian' ? 'selected' : '' }} value="croatian">Croatian</option>
                     <option {{ old('nationality') == 'cuban' ? 'selected' : '' }} value="cuban">Cuban</option>
                     <option {{ old('nationality') == 'cypriot' ? 'selected' : '' }} value="cypriot">Cypriot</option>
                     <option {{ old('nationality') == 'czech' ? 'selected' : '' }} value="czech">Czech</option>
                     <option {{ old('nationality') == 'danish' ? 'selected' : '' }} value="danish">Danish</option>
                     <option {{ old('nationality') == 'djibouti' ? 'selected' : '' }} value="djibouti">Djibouti</option>
                     <option {{ old('nationality') == 'dominican' ? 'selected' : '' }} value="dominican">Dominican</option>
                     <option {{ old('nationality') == 'dutch' ? 'selected' : '' }} value="dutch">Dutch</option>
                     <option {{ old('nationality') == 'east_timorese' ? 'selected' : '' }} value="east_timorese">East Timorese</option>
                     <option {{ old('nationality') == 'ecuadorean' ? 'selected' : '' }} value="ecuadorean">Ecuadorean</option>
                     <option {{ old('nationality') == 'egyptian' ? 'selected' : '' }} value="egyptian">Egyptian</option>
                     <option {{ old('nationality') == 'emirian' ? 'selected' : '' }} value="emirian">Emirian</option>
                     <option {{ old('nationality') == 'equatorial_guinean' ? 'selected' : '' }} value="equatorial_guinean">Equatorial Guinean</option>
                     <option {{ old('nationality') == 'eritrean' ? 'selected' : '' }} value="eritrean">Eritrean</option>
                     <option {{ old('nationality') == 'estonian' ? 'selected' : '' }} value="estonian">Estonian</option>
                     <option {{ old('nationality') == 'ethiopian' ? 'selected' : '' }} value="ethiopian">Ethiopian</option>
                     <option {{ old('nationality') == 'fijian' ? 'selected' : '' }} value="fijian">Fijian</option>
                     <option {{ old('nationality') == 'filipino' ? 'selected' : '' }} value="filipino">Filipino</option>
                     <option {{ old('nationality') == 'finnish' ? 'selected' : '' }} value="finnish">Finnish</option>
                     <option {{ old('nationality') == 'french' ? 'selected' : '' }} value="french">French</option>
                     <option {{ old('nationality') == 'gabonese' ? 'selected' : '' }} value="gabonese">Gabonese</option>
                     <option {{ old('nationality') == 'gambian' ? 'selected' : '' }} value="gambian">Gambian</option>
                     <option {{ old('nationality') == 'georgian' ? 'selected' : '' }} value="georgian">Georgian</option>
                     <option {{ old('nationality') == 'german' ? 'selected' : '' }} value="german">German</option>
                     <option {{ old('nationality') == 'ghanaian' ? 'selected' : '' }} value="ghanaian">Ghanaian</option>
                     <option {{ old('nationality') == 'greek' ? 'selected' : '' }} value="greek">Greek</option>
                     <option {{ old('nationality') == 'grenadian' ? 'selected' : '' }} value="grenadian">Grenadian</option>
                     <option {{ old('nationality') == 'guatemalan' ? 'selected' : '' }} value="guatemalan">Guatemalan</option>
                     <option {{ old('nationality') == 'guinea_bissauan' ? 'selected' : '' }} value="guinea_bissauan">Guinea-Bissauan</option>
                     <option {{ old('nationality') == 'guinean' ? 'selected' : '' }} value="guinean">Guinean</option>
                     <option {{ old('nationality') == 'guyanese' ? 'selected' : '' }} value="guyanese">Guyanese</option>
                     <option {{ old('nationality') == 'haitian' ? 'selected' : '' }} value="haitian">Haitian</option>
                     <option {{ old('nationality') == 'herzegovinian' ? 'selected' : '' }} value="herzegovinian">Herzegovinian</option>
                     <option {{ old('nationality') == 'honduran' ? 'selected' : '' }} value="honduran">Honduran</option>
                     <option {{ old('nationality') == 'hungarian' ? 'selected' : '' }} value="hungarian">Hungarian</option>
                     <option {{ old('nationality') == 'icelander' ? 'selected' : '' }} value="icelander">Icelander</option>
                     <option {{ old('nationality') == 'indian' ? 'selected' : '' }} value="indian">Indian</option>
                     <option {{ old('nationality') == 'indonesian' ? 'selected' : '' }} value="indonesian">Indonesian</option>
                     <option {{ old('nationality') == 'iranian' ? 'selected' : '' }} value="iranian">Iranian</option>
                     <option {{ old('nationality') == 'iraqi' ? 'selected' : '' }} value="iraqi">Iraqi</option>
                     <option {{ old('nationality') == 'irish' ? 'selected' : '' }} value="irish">Irish</option>
                     <option {{ old('nationality') == 'israeli' ? 'selected' : '' }} value="israeli">Israeli</option>
                     <option {{ old('nationality') == 'italian' ? 'selected' : '' }} value="italian">Italian</option>
                     <option {{ old('nationality') == 'ivorian' ? 'selected' : '' }} value="ivorian">Ivorian</option>
                     <option {{ old('nationality') == 'jamaican' ? 'selected' : '' }} value="jamaican">Jamaican</option>
                     <option {{ old('nationality') == 'japanese' ? 'selected' : '' }} value="japanese">Japanese</option>
                     <option {{ old('nationality') == 'jordanian' ? 'selected' : '' }} value="jordanian">Jordanian</option>
                     <option {{ old('nationality') == 'kazakhstani' ? 'selected' : '' }} value="kazakhstani">Kazakhstani</option>
                     <option {{ old('nationality') == 'kenyan' ? 'selected' : '' }} value="kenyan">Kenyan</option>
                     <option {{ old('nationality') == 'kittian_and_nevisian' ? 'selected' : '' }} value="kittian_and_nevisian">Kittian and Nevisian</option>
                     <option {{ old('nationality') == 'kuwaiti' ? 'selected' : '' }} value="kuwaiti">Kuwaiti</option>
                     <option {{ old('nationality') == 'kyrgyz' ? 'selected' : '' }} value="kyrgyz">Kyrgyz</option>
                     <option {{ old('nationality') == 'laotian' ? 'selected' : '' }} value="laotian">Laotian</option>
                     <option {{ old('nationality') == 'latvian' ? 'selected' : '' }} value="latvian">Latvian</option>
                     <option {{ old('nationality') == 'lebanese' ? 'selected' : '' }} value="lebanese">Lebanese</option>
                     <option {{ old('nationality') == 'liberian' ? 'selected' : '' }} value="liberian">Liberian</option>
                     <option {{ old('nationality') == 'libyan' ? 'selected' : '' }} value="libyan">Libyan</option>
                     <option {{ old('nationality') == 'liechtensteiner' ? 'selected' : '' }} value="liechtensteiner">Liechtensteiner</option>
                     <option {{ old('nationality') == 'lithuanian' ? 'selected' : '' }} value="lithuanian">Lithuanian</option>
                     <option {{ old('nationality') == 'luxembourger' ? 'selected' : '' }} value="luxembourger">Luxembourger</option>
                     <option {{ old('nationality') == 'macedonian' ? 'selected' : '' }} value="macedonian">Macedonian</option>
                     <option {{ old('nationality') == 'malagasy' ? 'selected' : '' }} value="malagasy">Malagasy</option>
                     <option {{ old('nationality') == 'malawian' ? 'selected' : '' }} value="malawian">Malawian</option>
                     <option {{ old('nationality') == 'malaysian' ? 'selected' : '' }} value="malaysian">Malaysian</option>
                     <option {{ old('nationality') == 'maldivan' ? 'selected' : '' }} value="maldivan">Maldivan</option>
                     <option {{ old('nationality') == 'malian' ? 'selected' : '' }} value="malian">Malian</option>
                     <option {{ old('nationality') == 'maltese' ? 'selected' : '' }} value="maltese">Maltese</option>
                     <option {{ old('nationality') == 'marshallese' ? 'selected' : '' }} value="marshallese">Marshallese</option>
                     <option {{ old('nationality') == 'mauritanian' ? 'selected' : '' }} value="mauritanian">Mauritanian</option>
                     <option {{ old('nationality') == 'mauritian' ? 'selected' : '' }} value="mauritian">Mauritian</option>
                     <option {{ old('nationality') == 'mexican' ? 'selected' : '' }} value="mexican">Mexican</option>
                     <option {{ old('nationality') == 'micronesian' ? 'selected' : '' }} value="micronesian">Micronesian</option>
                     <option {{ old('nationality') == 'moldovan' ? 'selected' : '' }} value="moldovan">Moldovan</option>
                     <option {{ old('nationality') == 'monacan' ? 'selected' : '' }} value="monacan">Monacan</option>
                     <option {{ old('nationality') == 'mongolian' ? 'selected' : '' }} value="mongolian">Mongolian</option>
                     <option {{ old('nationality') == 'moroccan' ? 'selected' : '' }} value="moroccan">Moroccan</option>
                     <option {{ old('nationality') == 'mosotho' ? 'selected' : '' }} value="mosotho">Mosotho</option>
                     <option {{ old('nationality') == 'motswana' ? 'selected' : '' }} value="motswana">Motswana</option>
                     <option {{ old('nationality') == 'mozambican' ? 'selected' : '' }} value="mozambican">Mozambican</option>
                     <option {{ old('nationality') == 'namibian' ? 'selected' : '' }} value="namibian">Namibian</option>
                     <option {{ old('nationality') == 'nauruan' ? 'selected' : '' }} value="nauruan">Nauruan</option>
                     <option {{ old('nationality') == 'nepalese' ? 'selected' : '' }} value="nepalese">Nepalese</option>
                     <option {{ old('nationality') == 'new_zealander' ? 'selected' : '' }} value="new_zealander">New Zealander</option>
                     <option {{ old('nationality') == 'ni_vanuatu' ? 'selected' : '' }} value="ni_vanuatu">Ni-Vanuatu</option>
                     <option {{ old('nationality') == 'nicaraguan' ? 'selected' : '' }} value="nicaraguan">Nicaraguan</option>
                     <option {{ old('nationality') == 'nigerien' ? 'selected' : '' }} value="nigerien">Nigerien</option>
                     <option {{ old('nationality') == 'north_korean' ? 'selected' : '' }} value="north_korean">North Korean</option>
                     <option {{ old('nationality') == 'northern_irish' ? 'selected' : '' }} value="northern_irish">Northern Irish</option>
                     <option {{ old('nationality') == 'norwegian' ? 'selected' : '' }} value="norwegian">Norwegian</option>
                     <option {{ old('nationality') == 'omani' ? 'selected' : '' }} value="omani">Omani</option>
                     <option {{ old('nationality') == 'pakistani' ? 'selected' : '' }} value="pakistani">Pakistani</option>
                     <option {{ old('nationality') == 'palauan' ? 'selected' : '' }} value="palauan">Palauan</option>
                     <option {{ old('nationality') == 'panamanian' ? 'selected' : '' }} value="panamanian">Panamanian</option>
                     <option {{ old('nationality') == 'papua_new_guinean' ? 'selected' : '' }} value="papua_new_guinean">Papua New Guinean</option>
                     <option {{ old('nationality') == 'paraguayan' ? 'selected' : '' }} value="paraguayan">Paraguayan</option>
                     <option {{ old('nationality') == 'peruvian' ? 'selected' : '' }} value="peruvian">Peruvian</option>
                     <option {{ old('nationality') == 'polish' ? 'selected' : '' }} value="polish">Polish</option>
                     <option {{ old('nationality') == 'portuguese' ? 'selected' : '' }} value="portuguese">Portuguese</option>
                     <option {{ old('nationality') == 'qatari' ? 'selected' : '' }} value="qatari">Qatari</option>
                     <option {{ old('nationality') == 'romanian' ? 'selected' : '' }} value="romanian">Romanian</option>
                     <option {{ old('nationality') == 'russian' ? 'selected' : '' }} value="russian">Russian</option>
                     <option {{ old('nationality') == 'rwandan' ? 'selected' : '' }} value="rwandan">Rwandan</option>
                     <option {{ old('nationality') == 'saint_lucian' ? 'selected' : '' }} value="saint_lucian">Saint Lucian</option>
                     <option {{ old('nationality') == 'salvadoran' ? 'selected' : '' }} value="salvadoran">Salvadoran</option>
                     <option {{ old('nationality') == 'samoan' ? 'selected' : '' }} value="samoan">Samoan</option>
                     <option {{ old('nationality') == 'san_marinese' ? 'selected' : '' }} value="san_marinese">San Marinese</option>
                     <option {{ old('nationality') == 'sao_tomean' ? 'selected' : '' }} value="sao_tomean">Sao Tomean</option>
                     <option {{ old('nationality') == 'saudi' ? 'selected' : '' }} value="saudi">Saudi</option>
                     <option {{ old('nationality') == 'scottish' ? 'selected' : '' }} value="scottish">Scottish</option>
                     <option {{ old('nationality') == 'senegalese' ? 'selected' : '' }} value="senegalese">Senegalese</option>
                     <option {{ old('nationality') == 'serbian' ? 'selected' : '' }} value="serbian">Serbian</option>
                     <option {{ old('nationality') == 'seychellois' ? 'selected' : '' }} value="seychellois">Seychellois</option>
                     <option {{ old('nationality') == 'sierra_leonean' ? 'selected' : '' }} value="sierra_leonean">Sierra Leonean</option>
                     <option {{ old('nationality') == 'singaporean' ? 'selected' : '' }} value="singaporean">Singaporean</option>
                     <option {{ old('nationality') == 'slovakian' ? 'selected' : '' }} value="slovakian">Slovakian</option>
                     <option {{ old('nationality') == 'slovenian' ? 'selected' : '' }} value="slovenian">Slovenian</option>
                     <option {{ old('nationality') == 'solomon_islander' ? 'selected' : '' }} value="solomon_islander">Solomon Islander</option>
                     <option {{ old('nationality') == 'somali' ? 'selected' : '' }} value="somali">Somali</option>
                     <option {{ old('nationality') == 'south_african' ? 'selected' : '' }} value="south_african">South African</option>
                     <option {{ old('nationality') == 'south_korean' ? 'selected' : '' }} value="south_korean">South Korean</option>
                     <option {{ old('nationality') == 'spanish' ? 'selected' : '' }} value="spanish">Spanish</option>
                     <option {{ old('nationality') == 'sri_lankan' ? 'selected' : '' }} value="sri_lankan">Sri Lankan</option>
                     <option {{ old('nationality') == 'sudanese' ? 'selected' : '' }} value="sudanese">Sudanese</option>
                     <option {{ old('nationality') == 'surinamer' ? 'selected' : '' }} value="surinamer">Surinamer</option>
                     <option {{ old('nationality') == 'swazi' ? 'selected' : '' }} value="swazi">Swazi</option>
                     <option {{ old('nationality') == 'swedish' ? 'selected' : '' }} value="swedish">Swedish</option>
                     <option {{ old('nationality') == 'swiss' ? 'selected' : '' }} value="swiss">Swiss</option>
                     <option {{ old('nationality') == 'syrian' ? 'selected' : '' }} value="syrian">Syrian</option>
                     <option {{ old('nationality') == 'taiwanese' ? 'selected' : '' }} value="taiwanese">Taiwanese</option>
                     <option {{ old('nationality') == 'tajik' ? 'selected' : '' }} value="tajik">Tajik</option>
                     <option {{ old('nationality') == 'tanzanian' ? 'selected' : '' }} value="tanzanian">Tanzanian</option>
                     <option {{ old('nationality') == 'thai' ? 'selected' : '' }} value="thai">Thai</option>
                     <option {{ old('nationality') == 'togolese' ? 'selected' : '' }} value="togolese">Togolese</option>
                     <option {{ old('nationality') == 'tongan' ? 'selected' : '' }} value="tongan">Tongan</option>
                     <option {{ old('nationality') == 'trinidadian_or_tobagonian' ? 'selected' : '' }} value="trinidadian_or_tobagonian">Trinidadian or Tobagonian</option>
                     <option {{ old('nationality') == 'tunisian' ? 'selected' : '' }} value="tunisian">Tunisian</option>
                     <option {{ old('nationality') == 'turkish' ? 'selected' : '' }} value="turkish">Turkish</option>
                     <option {{ old('nationality') == 'tuvaluan' ? 'selected' : '' }} value="tuvaluan">Tuvaluan</option>
                     <option {{ old('nationality') == 'ugandan' ? 'selected' : '' }} value="ugandan">Ugandan</option>
                     <option {{ old('nationality') == 'ukrainian' ? 'selected' : '' }} value="ukrainian">Ukrainian</option>
                     <option {{ old('nationality') == 'uruguayan' ? 'selected' : '' }} value="uruguayan">Uruguayan</option>
                     <option {{ old('nationality') == 'uzbekistani' ? 'selected' : '' }} value="uzbekistani">Uzbekistani</option>
                     <option {{ old('nationality') == 'venezuelan' ? 'selected' : '' }} value="venezuelan">Venezuelan</option>
                     <option {{ old('nationality') == 'vietnamese' ? 'selected' : '' }} value="vietnamese">Vietnamese</option>
                     <option {{ old('nationality') == 'welsh' ? 'selected' : '' }} value="welsh">Welsh</option>
                     <option {{ old('nationality') == 'yemenite' ? 'selected' : '' }} value="yemenite">Yemenite</option>
                     <option {{ old('nationality') == 'zambian' ? 'selected' : '' }} value="zambian">Zambian</option>
                     <option {{ old('nationality') == 'zimbabwean' ? 'selected' : '' }} value="zimbabwean">Zimbabwean</option>
                  </select>
               </div>
               <div class="col-md-6">
                  <div class="col-md-12 reg__frm">
                     <label>  Passport Number</label> 
                     <div class="input-group">  <input onpaste="return false;" ondrop="return false;" type="text" class="form-control" id="passport_no" name="passport_no" maxlength="10" minlength="8" value="{{ old('passport_no') ?? '' }}"> </div>
                  </div>
               </div>
               <!--<div class="col-md-6">-->
               <!--   <div class="col-md-12 reg__frm">-->
               <!--      <label>  Discipline  </label> -->
               <!--      <div class="input-group">  <input type="text" class="form-control" name="discipline" maxlength="255" value="{{ old('discipline') ?? '' }}"> </div>-->
               <!--   </div>-->
               <!--</div>-->
               <div class="col-md-6">
                  <div class="col-md-12 reg__frm">
                     <label>  Address for communication <span class=""> * </span> </label> 
                     <div class="input-group">  <input type="text" class="form-control" name="address" value="{{ old('address') ?? '' }}" required> </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="col-md-12 reg__frm">
                     <label>  Contact Number <span class=""> * </span> </label> 
                     <div class="input-group">  <input type="text" class="form-control" name="phone" onpaste="return false;" ondrop="return false;" required maxlength="13" minlength="10" onkeypress="return isNumberKey(event)" value="{{ old('phone') ?? '' }}"> </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="col-md-12 reg__frm">
                     <label>  Email <span class="tsml"> ( Put the same email also in the payment page )  </span> <span class=""> * </span> </label> 
                     <div class="input-group">  <input type="email" id="email" class="form-control" name="email" required value="{{ old('email') ?? '' }}"> </div>
                  </div>
               </div>
               <div class="col-md-6 reg__frm">
                  <label>  Are you presenting a paper at the conference? <span class=""> * </span> </label> 
                  <select class="form-select" name="presenting_paper" aria-label="Default select example" required>
                  <option value="">-- select one --</option>
                     <option value="1" {{ old('presenting_paper') == '1' ? 'selected' : '' }}> Yes </option>
                     <option value="0" {{ old('presenting_paper') == '0' ? 'selected' : '' }}> No </option>
                  </select>
               </div>
            </div>
            <button type="button" class="btn  main_btn btn__nxt " id="main_btn">Next</button>
</form>




         </div>
      </section>
      <img src="{{ asset('themes/home/images/croud.jpg') }}" class="img-fluid">

      
   @stop
   @section("script")   
      
   <script>
      $(function () {
         $('#nationality').on('change',function(){
            if($(this).val() == 'indian'){
               $('#passport_no').attr('required',false);
            }else{
               $('#passport_no').attr('required',true);
            }
            
         });
         $("#passport_no").on("keyup",function(e)
             {               
                var keyCode = e.keyCode || e.which;
                var regex =/^[A-Za-z0-9]*$/;
                var isValid = regex.test(String.fromCharCode(keyCode));
                $(this).val($(this).val().toUpperCase());
                return isValid;
            });
});

      $(document).ready(function() {


         document.addEventListener("DOMContentLoaded", function () {
    var conferenceThemeSelect = document.getElementById("conferenceThemeSelect");
    var daysOfParticipationSelect = document.getElementById("daysOfParticipation");
    var dateOfParticipationSelect = document.getElementById("dateOfParticipation");

    // Define the options for the "No. of days of Participation" and "Select date of Participation" select boxes.
    var optionsByTheme = {
        "-- select one --": {
            days: ["Full days"],
            dates: [],
        },
        "General Management (RCNPM’24) (12/01/2024-13/01/2024)": {
            days: ["Full days", "1 Day", "Half Day"],
            dates: ["12/01/24", "13/01/24"],
        },
        "Life Sciences (10/01/2024-11/01/2024)": {
            days: ["Full days", "1 Day", "Half Day"],
            dates: ["10/01/24", "11/01/24"],
        },
        "Finance and Economics (RCEF'24) (10/01/24-11/01/24)": {
            days: ["Full days", "1 Day", "Half Day"],
            dates: ["10/01/24", "11/01/24"],
        },
        // Add other theme options and date ranges here.
    };

    // Function to update the options based on the selected theme.
    function updateOptions() {
        var selectedTheme = conferenceThemeSelect.value;
        var options = optionsByTheme[selectedTheme] || { days: [], dates: [] };

        // Clear existing options.
        daysOfParticipationSelect.innerHTML = "";
        dateOfParticipationSelect.innerHTML = "";

        // Add new options to the "No. of days of Participation" select box.
        options.days.forEach(function (option) {
            var optionElement = document.createElement("option");
            optionElement.value = option;
            optionElement.textContent = option;
            daysOfParticipationSelect.appendChild(optionElement);
        });

        // Add new options to the "Select date of Participation" select box.
        options.dates.forEach(function (option) {
            var optionElement = document.createElement("option");
            optionElement.value = option;
            optionElement.textContent = option;
            dateOfParticipationSelect.appendChild(optionElement);
        });
    }

    // Initial options update.
    updateOptions();

    // Add an event listener to the "Under which theme Conference are you participating?" select box.
    conferenceThemeSelect.addEventListener("change", updateOptions);
});
      
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
         
      
         $("#testimonials_lt").owlCarousel({
      
            // autoPlay: 4000,
            navigation: true,
            items:2,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsDesktopSmall: [991, 1],
            itemsTablet: [767,1], // 2 items between 600 and 480
            slideSpeed: 1000,
            paginationSpeed: 1000,
            transitionStyle: "fade"
      
      
         });
      
            
         $("#latest-jobs").owlCarousel({
      
            // autoPlay: 4000,
            navigation: true,
            items:3,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 2],
            itemsDesktopSmall: [768, 2],
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
   <!--paralax--> 
   <script>
      (function(){
      var parallax = document.querySelectorAll(".parallax"),
      speed = 0.5;
      window.onscroll = function(){
      [].slice.call(parallax).forEach(function(el,i){
      var windowYOffset = window.pageYOffset,
      elBackgrounPos = "0 " + (windowYOffset * speed) + "px";
      el.style.backgroundPosition = elBackgrounPos;
      });
      };
      })();
   </script> 
   <!--end--paralax--> 
   <!--Count--> 
   <script>
      $('.count').each(function () {
      $(this).prop('Counter',0).animate({
      Counter: $(this).text()
      }, {
      duration: 4000,
      easing: 'swing',
      step: function (now) {
         $(this).text(Math.ceil(now));
      }
      });
      });
$('document').ready(function(){
   $('#email').focusout(function(){
      var email = $(this).val();
      if(email){
         $.ajax({
            url: "{{ route('email.registration') }}",
            type: "POST",
            data: {'email':email,'_token':'{{ csrf_token() }}' },
            cache: false,
            success: function (data) {
               if(data){
                  confirm(data);
               }
            }
         });
      }
   });
   $('#main_btn').on('click',function(){
      var email = $('#email').val();
      if(email){
         $.ajax({
            url: "{{ route('email.registration') }}",
            type: "POST",
            data: {'email':email,'_token':'{{ csrf_token() }}' },
            cache: false,
            success: function (data) {
               if(data){
                  confirm(data);
                  return false
               }
               $('#form').submit();
            }
         });
      }
   });
});
function confirm(id) {
            $("#actionLabel").html("Confirmation");
                $("#actionMessage").html("We found someone registered with this email. Use another email or Continue your last registration by Verifying Now. ");
                $('#actionURL').text('Verifying Now');
               //  $('#act').text('Continue');
               //  $("#act").attr("onclick", "return confirmDelete(" + id + ")");
               $('#act').hide();

            $("#actionURL").attr("onclick", "return confirmAjax(" + id + ")");
            $("#action").modal('show');

            return false;
        }
        function confirmAjax(id) {
            var url = "{{ route( 'email.send-registration-link', [ "ROLE_ID"] ) }}";
            var new_url = url.replace(/ROLE_ID/g, id);
           // new_url = new_url.replace(/STATUS/g, status);

            $.ajax({
                url: new_url,
                type: "GET",
                cache: false,
                success: function (data) {
                    $("#action").modal("hide");

                    if(data.response == "success")
                        displaySuccessMsg(data.message);
                    else
                        displayFailMsg(data.message);

                    $('#datatable').DataTable().draw(false);
                    $("#newscategoryModel").hide();
                }
            });

            return false;
        }
        function confirmDelete(id) {
            var url = "{{ route( 'email.delete-previous', [ "ROLE_ID"] ) }}";
            var new_url = url.replace(/ROLE_ID/g, id);
           // new_url = new_url.replace(/STATUS/g, status);

            $.ajax({
                url: new_url,
                type: "GET",
                cache: false,
                success: function (data) {
                    $("#action").modal("hide");

                    return true;
                        //displayFailMsg(data.message);

                    $('#datatable').DataTable().draw(false);
                    $("#newscategoryModel").hide();
                }
            });

            return false;
        }
</script>
   @stop
   