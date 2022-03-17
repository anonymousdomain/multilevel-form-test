<div class="tab-content">
    <div class="tab-pane active" id="about">
        <div class="row">
            <h4 class="info-text"> Let's start with the basic information</h4>
            <div class="col-sm-3">
                <div class="picture-container">
                    <div class="picture">

                        <img src="images/avatar.png" class="picture-src" id="wizardPicturePreview" title="">
                        <input type="file" id="wizard-picture" name="coverImage">
                    </div>
                    <h6>Choose Picture</h6>
                </div>
            </div>
           
            <div class="col-sm-3">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <div class="form-group label-floating">
                        <label class="control-label">First Name
                            <small>(required)</small></label>
                        <input name="firstname" type="text" class="form-control valid" minlength="2" maxlength="20" value="Desiree Rosario" aria-required="true">
                    <span class="material-input"></span></div>
                </div>
                <div class="input-group ">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <div class="form-group label-floating">
                        <label class="control-label">Last Name
                            <small>(required)</small></label>
                        <input name="lastname" type="text" class="form-control valid" minlength="2" maxlength="20" value="Margaret Schneider" aria-required="true" aria-invalid="false">
                    <span class="material-input"></span></div>
                </div>
               <!--  <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <div class="form-group label-floating">
                        <label class="control-label">Middle Name
                            <small>(optional)</small></label>
                        <input name="mname" type="text" class="form-control"
                            value="">
                    </div>
                </div> -->

            </div>
            <div class="col-sm-3">
               <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">Email
                                <small>(required)</small></label>
                            <input type="email" class="form-control valid" name="email" maxlength="25" value="nakad@mailinator.com" aria-required="true">
                        <span class="material-input"></span></div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-phone-square"></i>
                        </span>
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Fax
                                <small>(optional)</small></label>
                            <input type="text" class="form-control valid" name="fax" maxlength="13" value="">
                        <span class="material-input"></span></div>
                    </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">Phone Number <small> (required)
                                </small></label>
                            <input type="text" class="form-control valid" name="phone" minlength="10" maxlength="13" value="0915455567" aria-invalid="false">
                        <span class="material-input"></span></div>
                    </div> 
                    <div class="input-group col-sm-offset-1">
                    <small>
                        <div class="form-group">
                           <button class="btn btn-info btn-sm" id="addEmergencyBtn" data-toggle="tooltip" title="" data-original-title="View or Add Emergency Contact">Emergency
                            Contact<div class="ripple-container"></div></button> 
                        </div>
                     </small>
                </div>
            </div>
            <div class="col-sm-12 col-sm-offset-3">
                <div class="col-sm-3 ">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-info-circle"></i>
                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">Sex
                                <small>(required)</small></label>
                            <select name="sex" class="form-control valid" required="true" aria-required="true">

                                                                                                <option value="M" selected=""> Male </option>
                                                                                                <option value="F"> Female </option>
                                
                            </select>
                        <span class="material-input"></span></div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-calendar-check-o"></i>
                        </span>
                        <div class="form-group label-floating">
                            <label class="control-label">Birth Date</label>
                                                                                        <input type="text" class="form-control valid" value="01/01/1997" name="birth_date" id="inputBirthDate" aria-invalid="false">
                        <span class="material-input"></span></div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <p><strong>Marital Status</strong></p>
                        <label class="radio-inline"><input type="radio" name="maritalStatus" value="single">Single</label>
                        <label class="radio-inline"><input type="radio" name="maritalStatus" value="married">Married</label>
                    </div>
                </div>
            </div>
           
            <div class="col-sm-12 col-sm-offset-3">
                <div class="col-sm-12">
                                                                        <label class="checkbox-inline"><input type="checkbox" value="" id="isStudentBox" name="isStudent">Are You Student?</label>

                                                                        <ul style="list-style: none;">

                        <div id="studentDiv" style="display: none;">
                            <p><strong>For Student Only</strong></p>
                            <li>
                                <p>Are you presently attending school? </p>
                                                                                                <label class="radio-inline"><input type="radio" name="attending" value="1">Yes</label>

                                                                                                <label class="radio-inline"><input type="radio" name="attending" checked="" value="0">NO</label>

                                                                                            </li>
                            <li>
                                <p>Did you receive academic credit for your
                                    volunteer/intern work? </p>
                                                                                                <label class="radio-inline"><input type="radio" name="receive" value="1">Yes</label>

                                                                                                <label class="radio-inline"><input type="radio" name="receive" checked="" value="0">No</label>

                                
                            </li>
                        </div>




                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="address">
        <div class="row">

            <div class="col-sm-10 col-sm-offset-1">
                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Nationality </label>
                        <select name="nationality" class="form-control" id="inputNationality">
                            <option disabled="" selected=""></option>
                                                                                        <option value="Afghan">Afghan                                                            </option>
                                                                                        <option value="Albanian">Albanian                                                            </option>
                                                                                        <option value="Algerian">Algerian                                                            </option>
                                                                                        <option value="American">American                                                            </option>
                                                                                        <option value="Andorran">Andorran                                                            </option>
                                                                                        <option value="Angolan">Angolan                                                            </option>
                                                                                        <option value="Antiguans">Antiguans                                                            </option>
                                                                                        <option value="Argentinean">Argentinean                                                            </option>
                                                                                        <option value="Armenian">Armenian                                                            </option>
                                                                                        <option value="Australian">Australian                                                            </option>
                                                                                        <option value="Austrian">Austrian                                                            </option>
                                                                                        <option value="Azerbaijani">Azerbaijani                                                            </option>
                                                                                        <option value="Bahamian">Bahamian                                                            </option>
                                                                                        <option value="Bahraini">Bahraini                                                            </option>
                                                                                        <option value="Bangladeshi">Bangladeshi                                                            </option>
                                                                                        <option value="Barbadian">Barbadian                                                            </option>
                                                                                        <option value="Barbudans">Barbudans                                                            </option>
                                                                                        <option value="Batswana">Batswana                                                            </option>
                                                                                        <option value="Belarusian">Belarusian                                                            </option>
                                                                                        <option value="Belgian">Belgian                                                            </option>
                                                                                        <option value="Belizean">Belizean                                                            </option>
                                                                                        <option value="Beninese">Beninese                                                            </option>
                                                                                        <option value="Bhutanese">Bhutanese                                                            </option>
                                                                                        <option value="Bolivian">Bolivian                                                            </option>
                                                                                        <option value="Bosnian">Bosnian                                                            </option>
                                                                                        <option value="Brazilian">Brazilian                                                            </option>
                                                                                        <option value="British">British                                                            </option>
                                                                                        <option value="Bruneian">Bruneian                                                            </option>
                                                                                        <option value="Bulgarian">Bulgarian                                                            </option>
                                                                                        <option value="Burkinabe">Burkinabe                                                            </option>
                                                                                        <option value="Burmese">Burmese                                                            </option>
                                                                                        <option value="Burundian">Burundian                                                            </option>
                                                                                        <option value="Cambodian">Cambodian                                                            </option>
                                                                                        <option value="Cameroonian">Cameroonian                                                            </option>
                                                                                        <option value="Canadian">Canadian                                                            </option>
                                                                                        <option value="Cape Verdean">Cape Verdean                                                            </option>
                                                                                        <option value="Central African">Central African                                                            </option>
                                                                                        <option value="Chadian">Chadian                                                            </option>
                                                                                        <option value="Chilean">Chilean                                                            </option>
                                                                                        <option value="Chinese">Chinese                                                            </option>
                                                                                        <option value="Colombian">Colombian                                                            </option>
                                                                                        <option value="Comoran">Comoran                                                            </option>
                                                                                        <option value="Congolese">Congolese                                                            </option>
                                                                                        <option value="Costa Rican">Costa Rican                                                            </option>
                                                                                        <option value="Croatian">Croatian                                                            </option>
                                                                                        <option value="Cuban">Cuban                                                            </option>
                                                                                        <option value="Cypriot">Cypriot                                                            </option>
                                                                                        <option value="Czech">Czech                                                            </option>
                                                                                        <option value="Danish">Danish                                                            </option>
                                                                                        <option value="Djibouti">Djibouti                                                            </option>
                                                                                        <option value="Dominican">Dominican                                                            </option>
                                                                                        <option value="Dutch">Dutch                                                            </option>
                                                                                        <option value="East Timorese">East Timorese                                                            </option>
                                                                                        <option value="Ecuadorean">Ecuadorean                                                            </option>
                                                                                        <option value="Egyptian">Egyptian                                                            </option>
                                                                                        <option value="Emirian">Emirian                                                            </option>
                                                                                        <option value="Equatorial Guinean">Equatorial Guinean                                                            </option>
                                                                                        <option value="Eritrean">Eritrean                                                            </option>
                                                                                        <option value="Estonian">Estonian                                                            </option>
                                                                                        <option value="Ethiopian">Ethiopian                                                            </option>
                                                                                        <option value="Fijian">Fijian                                                            </option>
                                                                                        <option value="Filipino">Filipino                                                            </option>
                                                                                        <option value="Finnish">Finnish                                                            </option>
                                                                                        <option value="French">French                                                            </option>
                                                                                        <option value="Gabonese">Gabonese                                                            </option>
                                                                                        <option value="Gambian">Gambian                                                            </option>
                                                                                        <option value="Georgian">Georgian                                                            </option>
                                                                                        <option value="German">German                                                            </option>
                                                                                        <option value="Ghanaian">Ghanaian                                                            </option>
                                                                                        <option value="Greek">Greek                                                            </option>
                                                                                        <option value="Grenadian">Grenadian                                                            </option>
                                                                                        <option value="Guatemalan">Guatemalan                                                            </option>
                                                                                        <option value="Guinea-Bissauan">Guinea-Bissauan                                                            </option>
                                                                                        <option value="Guinean">Guinean                                                            </option>
                                                                                        <option value="Guyanese">Guyanese                                                            </option>
                                                                                        <option value="Haitian">Haitian                                                            </option>
                                                                                        <option value="Herzegovinian">Herzegovinian                                                            </option>
                                                                                        <option value="Honduran">Honduran                                                            </option>
                                                                                        <option value="Hungarian">Hungarian                                                            </option>
                                                                                        <option value="I-Kiribati">I-Kiribati                                                            </option>
                                                                                        <option value="Icelander">Icelander                                                            </option>
                                                                                        <option value="Indian">Indian                                                            </option>
                                                                                        <option value="Indonesian">Indonesian                                                            </option>
                                                                                        <option value="Iranian">Iranian                                                            </option>
                                                                                        <option value="Iraqi">Iraqi                                                            </option>
                                                                                        <option value="Irish">Irish                                                            </option>
                                                                                        <option value="Israeli">Israeli                                                            </option>
                                                                                        <option value="Italian">Italian                                                            </option>
                                                                                        <option value="Ivorian">Ivorian                                                            </option>
                                                                                        <option value="Jamaican">Jamaican                                                            </option>
                                                                                        <option value="Japanese">Japanese                                                            </option>
                                                                                        <option value="Jordanian">Jordanian                                                            </option>
                                                                                        <option value="Kazakhstani">Kazakhstani                                                            </option>
                                                                                        <option value="Kenyan">Kenyan                                                            </option>
                                                                                        <option value="Kittian and Nevisian">Kittian and Nevisian                                                            </option>
                                                                                        <option value="Kuwaiti">Kuwaiti                                                            </option>
                                                                                        <option value="Kyrgyz">Kyrgyz                                                            </option>
                                                                                        <option value="Laotian">Laotian                                                            </option>
                                                                                        <option value="Latvian">Latvian                                                            </option>
                                                                                        <option value="Lebanese">Lebanese                                                            </option>
                                                                                        <option value="Liberian">Liberian                                                            </option>
                                                                                        <option value="Libyan">Libyan                                                            </option>
                                                                                        <option value="Liechtensteiner">Liechtensteiner                                                            </option>
                                                                                        <option value="Lithuanian">Lithuanian                                                            </option>
                                                                                        <option value="Luxembourger">Luxembourger                                                            </option>
                                                                                        <option value="Macedonian">Macedonian                                                            </option>
                                                                                        <option value="Malagasy">Malagasy                                                            </option>
                                                                                        <option value="Malawian">Malawian                                                            </option>
                                                                                        <option value="Malaysian">Malaysian                                                            </option>
                                                                                        <option value="Maldivan">Maldivan                                                            </option>
                                                                                        <option value="Malian">Malian                                                            </option>
                                                                                        <option value="Maltese">Maltese                                                            </option>
                                                                                        <option value="Marshallese">Marshallese                                                            </option>
                                                                                        <option value="Mauritanian">Mauritanian                                                            </option>
                                                                                        <option value="Mauritian">Mauritian                                                            </option>
                                                                                        <option value="Mexican">Mexican                                                            </option>
                                                                                        <option value="Micronesian">Micronesian                                                            </option>
                                                                                        <option value="Moldovan">Moldovan                                                            </option>
                                                                                        <option value="Monacan">Monacan                                                            </option>
                                                                                        <option value="Mongolian">Mongolian                                                            </option>
                                                                                        <option value="Moroccan">Moroccan                                                            </option>
                                                                                        <option value="Mosotho">Mosotho                                                            </option>
                                                                                        <option value="Motswana">Motswana                                                            </option>
                                                                                        <option value="Mozambican">Mozambican                                                            </option>
                                                                                        <option value="Namibian">Namibian                                                            </option>
                                                                                        <option value="Nauruan">Nauruan                                                            </option>
                                                                                        <option value="Nepalese">Nepalese                                                            </option>
                                                                                        <option value="New Zealander">New Zealander                                                            </option>
                                                                                        <option value="Nicaraguan">Nicaraguan                                                            </option>
                                                                                        <option value="Nigerian">Nigerian                                                            </option>
                                                                                        <option value="Nigerien">Nigerien                                                            </option>
                                                                                        <option value="North Korean">North Korean                                                            </option>
                                                                                        <option value="Northern Irish">Northern Irish                                                            </option>
                                                                                        <option value="Norwegian">Norwegian                                                            </option>
                                                                                        <option value="Omani">Omani                                                            </option>
                                                                                        <option value="Pakistani">Pakistani                                                            </option>
                                                                                        <option value="Palauan">Palauan                                                            </option>
                                                                                        <option value="Panamanian">Panamanian                                                            </option>
                                                                                        <option value="Papua New Guinean">Papua New Guinean                                                            </option>
                                                                                        <option value="Paraguayan">Paraguayan                                                            </option>
                                                                                        <option value="Peruvian">Peruvian                                                            </option>
                                                                                        <option value="Polish">Polish                                                            </option>
                                                                                        <option value="Portuguese">Portuguese                                                            </option>
                                                                                        <option value="Qatari">Qatari                                                            </option>
                                                                                        <option value="Romanian">Romanian                                                            </option>
                                                                                        <option value="Russian">Russian                                                            </option>
                                                                                        <option value="Rwandan">Rwandan                                                            </option>
                                                                                        <option value="Saint Lucian">Saint Lucian                                                            </option>
                                                                                        <option value="Salvadoran">Salvadoran                                                            </option>
                                                                                        <option value="Samoan">Samoan                                                            </option>
                                                                                        <option value="San Marinese">San Marinese                                                            </option>
                                                                                        <option value="Sao Tomean">Sao Tomean                                                            </option>
                                                                                        <option value="Saudi">Saudi                                                            </option>
                                                                                        <option value="Scottish">Scottish                                                            </option>
                                                                                        <option value="Senegalese">Senegalese                                                            </option>
                                                                                        <option value="Serbian">Serbian                                                            </option>
                                                                                        <option value="Seychellois">Seychellois                                                            </option>
                                                                                        <option value="Sierra Leonean">Sierra Leonean                                                            </option>
                                                                                        <option value="Singaporean">Singaporean                                                            </option>
                                                                                        <option value="Slovakian">Slovakian                                                            </option>
                                                                                        <option value="Slovenian">Slovenian                                                            </option>
                                                                                        <option value="Solomon Islander">Solomon Islander                                                            </option>
                                                                                        <option value="Somali">Somali                                                            </option>
                                                                                        <option value="South African">South African                                                            </option>
                                                                                        <option value="South Korean">South Korean                                                            </option>
                                                                                        <option value="Spanish">Spanish                                                            </option>
                                                                                        <option value="Sri Lankan">Sri Lankan                                                            </option>
                                                                                        <option value="Sudanese">Sudanese                                                            </option>
                                                                                        <option value="Surinamer">Surinamer                                                            </option>
                                                                                        <option value="Swazi">Swazi                                                            </option>
                                                                                        <option value="Swedish">Swedish                                                            </option>
                                                                                        <option value="Swiss">Swiss                                                            </option>
                                                                                        <option value="Syrian">Syrian                                                            </option>
                                                                                        <option value="Taiwanese">Taiwanese                                                            </option>
                                                                                        <option value="Tajik">Tajik                                                            </option>
                                                                                        <option value="Tanzanian">Tanzanian                                                            </option>
                                                                                        <option value="Thai">Thai                                                            </option>
                                                                                        <option value="Togolese">Togolese                                                            </option>
                                                                                        <option value="Tongan">Tongan                                                            </option>
                                                                                        <option value="Trinidadian/Tobagonian">Trinidadian/Tobagonian                                                            </option>
                                                                                        <option value="Tunisian">Tunisian                                                            </option>
                                                                                        <option value="Turkish">Turkish                                                            </option>
                                                                                        <option value="Tuvaluan">Tuvaluan                                                            </option>
                                                                                        <option value="Ugandan">Ugandan                                                            </option>
                                                                                        <option value="Ukrainian">Ukrainian                                                            </option>
                                                                                        <option value="Uruguayan">Uruguayan                                                            </option>
                                                                                        <option value="Uzbekistani">Uzbekistani                                                            </option>
                                                                                        <option value="Venezuelan">Venezuelan                                                            </option>
                                                                                        <option value="Vietnamese">Vietnamese                                                            </option>
                                                                                        <option value="Welsh">Welsh                                                            </option>
                                                                                        <option value="Yemenite">Yemenite                                                            </option>
                                                                                        <option value="Zambian">Zambian                                                            </option>
                                                                                        <option value="Zimbabwean">Zimbabwean                                                            </option>
                                                                                    </select>
                    <span class="material-input"></span></div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group label-floating">
                        <label class="control-label">Country </label>
                        <select name="country" class="form-control" id="inputCountry">
                            <option disabled="" selected=""></option>
                                                                                        <option value="Afghanistan">Afghanistan                                                            </option>
                                                                                        <option value="Albania">Albania                                                            </option>
                                                                                        <option value="Algeria">Algeria                                                            </option>
                                                                                        <option value="Andorra">Andorra                                                            </option>
                                                                                        <option value="Angola">Angola                                                            </option>
                                                                                        <option value="Antigua and Barbuda">Antigua and Barbuda                                                            </option>
                                                                                        <option value="Argentina">Argentina                                                            </option>
                                                                                        <option value="Armenia">Armenia                                                            </option>
                                                                                        <option value="Australia">Australia                                                            </option>
                                                                                        <option value="Austria">Austria                                                            </option>
                                                                                        <option value="Azerbaijan">Azerbaijan                                                            </option>
                                                                                        <option value="Bahamas">Bahamas                                                            </option>
                                                                                        <option value="Bahrain">Bahrain                                                            </option>
                                                                                        <option value="Bangladesh">Bangladesh                                                            </option>
                                                                                        <option value="Barbados">Barbados                                                            </option>
                                                                                        <option value="Belarus">Belarus                                                            </option>
                                                                                        <option value="Belgium">Belgium                                                            </option>
                                                                                        <option value="Belize">Belize                                                            </option>
                                                                                        <option value="Benin">Benin                                                            </option>
                                                                                        <option value="Bhutan">Bhutan                                                            </option>
                                                                                        <option value="Bolivia">Bolivia                                                            </option>
                                                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina                                                            </option>
                                                                                        <option value="Botswana">Botswana                                                            </option>
                                                                                        <option value="Brazil">Brazil                                                            </option>
                                                                                        <option value="Brunei">Brunei                                                            </option>
                                                                                        <option value="Bulgaria">Bulgaria                                                            </option>
                                                                                        <option value="Burkina Faso">Burkina Faso                                                            </option>
                                                                                        <option value="Burundi">Burundi                                                            </option>
                                                                                        <option value="Cambodia">Cambodia                                                            </option>
                                                                                        <option value="Cameroon">Cameroon                                                            </option>
                                                                                        <option value="Canada">Canada                                                            </option>
                                                                                        <option value="Cape Verde">Cape Verde                                                            </option>
                                                                                        <option value="Central African Republic">Central African Republic                                                            </option>
                                                                                        <option value="Chad">Chad                                                            </option>
                                                                                        <option value="Chile">Chile                                                            </option>
                                                                                        <option value="China">China                                                            </option>
                                                                                        <option value="Colombi">Colombi                                                            </option>
                                                                                        <option value="Comoros">Comoros                                                            </option>
                                                                                        <option value="Congo (Brazzaville)">Congo (Brazzaville)                                                            </option>
                                                                                        <option value="Congo">Congo                                                            </option>
                                                                                        <option value="Costa Rica">Costa Rica                                                            </option>
                                                                                        <option value="Cote d'Ivoire">Cote d'Ivoire                                                            </option>
                                                                                        <option value="Croatia">Croatia                                                            </option>
                                                                                        <option value="Cuba">Cuba                                                            </option>
                                                                                        <option value="Cyprus">Cyprus                                                            </option>
                                                                                        <option value="Czech Republic">Czech Republic                                                            </option>
                                                                                        <option value="Denmark">Denmark                                                            </option>
                                                                                        <option value="Djibouti">Djibouti                                                            </option>
                                                                                        <option value="Dominica">Dominica                                                            </option>
                                                                                        <option value="Dominican Republic">Dominican Republic                                                            </option>
                                                                                        <option value="East Timor (Timor Timur)">East Timor (Timor Timur)                                                            </option>
                                                                                        <option value="Ecuador">Ecuador                                                            </option>
                                                                                        <option value="Egypt">Egypt                                                            </option>
                                                                                        <option value="El Salvador">El Salvador                                                            </option>
                                                                                        <option value="Equatorial Guinea">Equatorial Guinea                                                            </option>
                                                                                        <option value="Eritrea">Eritrea                                                            </option>
                                                                                        <option value="Estonia">Estonia                                                            </option>
                                                                                        <option value="Ethiopia" selected="true">
                                Ethiopia</option>
                                                                                        <option value="Fiji">Fiji                                                            </option>
                                                                                        <option value="Finland">Finland                                                            </option>
                                                                                        <option value="France">France                                                            </option>
                                                                                        <option value="Gabon">Gabon                                                            </option>
                                                                                        <option value="Gambia, The">Gambia, The                                                            </option>
                                                                                        <option value="Georgia">Georgia                                                            </option>
                                                                                        <option value="Germany">Germany                                                            </option>
                                                                                        <option value="Ghana">Ghana                                                            </option>
                                                                                        <option value="Greece">Greece                                                            </option>
                                                                                        <option value="Grenada">Grenada                                                            </option>
                                                                                        <option value="Guatemala">Guatemala                                                            </option>
                                                                                        <option value="Guinea">Guinea                                                            </option>
                                                                                        <option value="Guinea-Bissau">Guinea-Bissau                                                            </option>
                                                                                        <option value="Guyana">Guyana                                                            </option>
                                                                                        <option value="Haiti">Haiti                                                            </option>
                                                                                        <option value="Honduras">Honduras                                                            </option>
                                                                                        <option value="Hungary">Hungary                                                            </option>
                                                                                        <option value="Iceland">Iceland                                                            </option>
                                                                                        <option value="India">India                                                            </option>
                                                                                        <option value="Indonesia">Indonesia                                                            </option>
                                                                                        <option value="Iran">Iran                                                            </option>
                                                                                        <option value="Iraq">Iraq                                                            </option>
                                                                                        <option value="Ireland">Ireland                                                            </option>
                                                                                        <option value="Israel">Israel                                                            </option>
                                                                                        <option value="Italy">Italy                                                            </option>
                                                                                        <option value="Jamaica">Jamaica                                                            </option>
                                                                                        <option value="Japan">Japan                                                            </option>
                                                                                        <option value="Jordan">Jordan                                                            </option>
                                                                                        <option value="Kazakhstan">Kazakhstan                                                            </option>
                                                                                        <option value="Kenya">Kenya                                                            </option>
                                                                                        <option value="Kiribati">Kiribati                                                            </option>
                                                                                        <option value="Korea, North">Korea, North                                                            </option>
                                                                                        <option value="Korea, South">Korea, South                                                            </option>
                                                                                        <option value="Kuwait">Kuwait                                                            </option>
                                                                                        <option value="Kyrgyzstan">Kyrgyzstan                                                            </option>
                                                                                        <option value="Laos">Laos                                                            </option>
                                                                                        <option value="Latvia">Latvia                                                            </option>
                                                                                        <option value="Lebanon">Lebanon                                                            </option>
                                                                                        <option value="Lesotho">Lesotho                                                            </option>
                                                                                        <option value="Liberia">Liberia                                                            </option>
                                                                                        <option value="Libya">Libya                                                            </option>
                                                                                        <option value="Liechtenstein">Liechtenstein                                                            </option>
                                                                                        <option value="Lithuania">Lithuania                                                            </option>
                                                                                        <option value="Luxembourg">Luxembourg                                                            </option>
                                                                                        <option value="Macedonia">Macedonia                                                            </option>
                                                                                        <option value="Madagascar">Madagascar                                                            </option>
                                                                                        <option value="Malawi">Malawi                                                            </option>
                                                                                        <option value="Malaysia">Malaysia                                                            </option>
                                                                                        <option value="Maldives">Maldives                                                            </option>
                                                                                        <option value="Mali">Mali                                                            </option>
                                                                                        <option value="Malta">Malta                                                            </option>
                                                                                        <option value="Marshall Islands">Marshall Islands                                                            </option>
                                                                                        <option value="Mauritania">Mauritania                                                            </option>
                                                                                        <option value="Mauritius">Mauritius                                                            </option>
                                                                                        <option value="Mexico">Mexico                                                            </option>
                                                                                        <option value="Micronesia">Micronesia                                                            </option>
                                                                                        <option value="Moldova">Moldova                                                            </option>
                                                                                        <option value="Monaco">Monaco                                                            </option>
                                                                                        <option value="Mongolia">Mongolia                                                            </option>
                                                                                        <option value="Morocco">Morocco                                                            </option>
                                                                                        <option value="Mozambique">Mozambique                                                            </option>
                                                                                        <option value="Myanmar">Myanmar                                                            </option>
                                                                                        <option value="Namibia">Namibia                                                            </option>
                                                                                        <option value="Nauru">Nauru                                                            </option>
                                                                                        <option value="Nepal">Nepal                                                            </option>
                                                                                        <option value="Netherlands">Netherlands                                                            </option>
                                                                                        <option value="New Zealand">New Zealand                                                            </option>
                                                                                        <option value="Nicaragua">Nicaragua                                                            </option>
                                                                                        <option value="Niger">Niger                                                            </option>
                                                                                        <option value="Nigeria">Nigeria                                                            </option>
                                                                                        <option value="Norway">Norway                                                            </option>
                                                                                        <option value="Oman">Oman                                                            </option>
                                                                                        <option value="Pakistan">Pakistan                                                            </option>
                                                                                        <option value="Palau">Palau                                                            </option>
                                                                                        <option value="Panama">Panama                                                            </option>
                                                                                        <option value="Papua New Guinea">Papua New Guinea                                                            </option>
                                                                                        <option value="Paraguay">Paraguay                                                            </option>
                                                                                        <option value="Peru">Peru                                                            </option>
                                                                                        <option value="Philippines">Philippines                                                            </option>
                                                                                        <option value="Poland">Poland                                                            </option>
                                                                                        <option value="Portugal">Portugal                                                            </option>
                                                                                        <option value="Qatar">Qatar                                                            </option>
                                                                                        <option value="Romania">Romania                                                            </option>
                                                                                        <option value="Russia">Russia                                                            </option>
                                                                                        <option value="Rwanda">Rwanda                                                            </option>
                                                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis                                                            </option>
                                                                                        <option value="Saint Lucia">Saint Lucia                                                            </option>
                                                                                        <option value="Saint Vincent">Saint Vincent                                                            </option>
                                                                                        <option value="Samoa">Samoa                                                            </option>
                                                                                        <option value="San Marino">San Marino                                                            </option>
                                                                                        <option value="Sao Tome and Principe">Sao Tome and Principe                                                            </option>
                                                                                        <option value="Saudi Arabia">Saudi Arabia                                                            </option>
                                                                                        <option value="Senegal">Senegal                                                            </option>
                                                                                        <option value="Serbia and Montenegro">Serbia and Montenegro                                                            </option>
                                                                                        <option value="Seychelles">Seychelles                                                            </option>
                                                                                        <option value="Sierra Leone">Sierra Leone                                                            </option>
                                                                                        <option value="Singapore">Singapore                                                            </option>
                                                                                        <option value="Slovakia">Slovakia                                                            </option>
                                                                                        <option value="Slovenia">Slovenia                                                            </option>
                                                                                        <option value="Solomon Islands">Solomon Islands                                                            </option>
                                                                                        <option value="Somalia">Somalia                                                            </option>
                                                                                        <option value="South Africa">South Africa                                                            </option>
                                                                                        <option value="Spain">Spain                                                            </option>
                                                                                        <option value="Sri Lanka">Sri Lanka                                                            </option>
                                                                                        <option value="Sudan">Sudan                                                            </option>
                                                                                        <option value="Suriname">Suriname                                                            </option>
                                                                                        <option value="Swaziland">Swaziland                                                            </option>
                                                                                        <option value="Sweden">Sweden                                                            </option>
                                                                                        <option value="Switzerland">Switzerland                                                            </option>
                                                                                        <option value="Syria">Syria                                                            </option>
                                                                                        <option value="Taiwan">Taiwan                                                            </option>
                                                                                        <option value="Tajikistan">Tajikistan                                                            </option>
                                                                                        <option value="Tanzania">Tanzania                                                            </option>
                                                                                        <option value="Thailand">Thailand                                                            </option>
                                                                                        <option value="Togo">Togo                                                            </option>
                                                                                        <option value="Tonga">Tonga                                                            </option>
                                                                                        <option value="Trinidad and Tobago">Trinidad and Tobago                                                            </option>
                                                                                        <option value="Tunisia">Tunisia                                                            </option>
                                                                                        <option value="Turkey">Turkey                                                            </option>
                                                                                        <option value="Turkmenistan">Turkmenistan                                                            </option>
                                                                                        <option value="Tuvalu">Tuvalu                                                            </option>
                                                                                        <option value="Uganda">Uganda                                                            </option>
                                                                                        <option value="Ukraine">Ukraine                                                            </option>
                                                                                        <option value="United Arab Emirates">United Arab Emirates                                                            </option>
                                                                                        <option value="United Kingdom">United Kingdom                                                            </option>
                                                                                        <option value="United States">United States                                                            </option>
                                                                                        <option value="Uruguay">Uruguay                                                            </option>
                                                                                        <option value="Uzbekistan">Uzbekistan                                                            </option>
                                                                                        <option value="Vanuatu">Vanuatu                                                            </option>
                                                                                        <option value="Vatican City">Vatican City                                                            </option>
                                                                                        <option value="Venezuela">Venezuela                                                            </option>
                                                                                        <option value="Vietnam">Vietnam                                                            </option>
                                                                                        <option value="Yemen">Yemen                                                            </option>
                                                                                        <option value="Zambia">Zambia                                                            </option>
                                                                                        <option value="Zimbabwe">Zimbabwe                                                            </option>
                                                                                    </select>
                    <span class="material-input"></span></div>
                </div>
            </div>



            <div class="" id="customAdd">
                <div class="col-sm-5 col-sm-offset-1" id="div1">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Region</label>
                        <select name="region" class="form-control" id="inputRegion">
                            <option disabled="" selected=""></option>
                                                                                        <option value="1">
                                Addis Ababa</option>
                                                                                        <option value="2">
                                Amhara</option>
                                                                                        <option value="3">
                                Oromia</option>
                                                                                        <option value="4">
                                SSPN</option>
                                                                                        <option value="8">
                                Gambella</option>
                                                                                        <option value="9">
                                Dire Dawa</option>
                                                                                        <option value="10">
                                Afar</option>
                                                                                        <option value="11">
                                Somalia</option>
                                                                                        <option value="12">
                                Tigriy</option>
                                                                                        <option value="13">
                                Binshangugumz</option>
                                                                                        <option value="15">
                                Harere</option>
                                                                                        <option value="16">
                                Sidama</option>
                                                                                    </select>
                    <span class="material-input"></span></div>
                </div>
                <div class="col-sm-5" id="div2">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">City</label>

                        <input type="text" name="city" class="form-control" id="inputCity" list="cityList" value="">

                    <span class="material-input"></span></div>
                </div>
                <datalist id="cityList"><option value="Ziway"></option><option value="Yirga ‘Alem"></option><option value="Yabēlo"></option><option value="Werota"></option><option value="Wenjī"></option><option value="Tippi"></option><option value="Shashemenē"></option><option value="Shambu"></option><option value="Shakīso"></option><option value="Sebeta"></option><option value="Robīt"></option><option value="Nejo"></option><option value="Nazrēt"></option><option value="Mojo"></option><option value="Metu"></option><option value="Metahāra"></option><option value="Mendī"></option><option value="Mekele"></option><option value="Maych’ew"></option><option value="Korem"></option><option value="K’olīto"></option><option value="Kibre Mengist"></option><option value="Kemisē"></option><option value="Kombolcha"></option><option value="Jinka"></option><option value="Jīma"></option><option value="Jijiga"></option><option value="Inda Silasē"></option><option value="Harar"></option><option value="Hāgere Hiywet"></option><option value="Gondar"></option><option value="Goba"></option><option value="Waliso"></option><option value="Ginir"></option><option value="Gimbi"></option><option value="Genet"></option><option value="Gelemso"></option><option value="Gebre Guracha"></option><option value="Gambēla"></option><option value="Finote Selam"></option><option value="Fichē"></option><option value="Felege Neway"></option><option value="Dubti"></option><option value="Dodola"></option><option value="Dire Dawa"></option><option value="Dīla"></option><option value="Desē"></option><option value="Dembī Dolo"></option><option value="Bishoftu"></option><option value="Debre Tabor"></option><option value="Debre Mark’os"></option><option value="Debre Birhan"></option><option value="Debark’"></option><option value="Butajīra"></option><option value="Burē"></option><option value="Bonga"></option><option value="Bodītī"></option><option value="Bichena"></option><option value="Bedēsa"></option><option value="Bedelē"></option><option value="Batī"></option><option value="Bako"></option><option value="Bahir Dar"></option><option value="Hawassa"></option><option value="Āsosa"></option><option value="Āsbe Teferī"></option><option value="Asaita"></option><option value="Āsasa"></option><option value="Āreka"></option><option value="Ārba Minch’"></option><option value="Axum"></option><option value="Hagere Maryam"></option><option value="Āgaro"></option><option value="Ādīs Zemen"></option><option value="Addis Ababa"></option><option value="Ādīgrat"></option><option value="Addiet Canna"></option><option value="Abomsa"></option></datalist>
                <div class="col-sm-5 col-sm-offset-1" id="div3">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Sub City/ Zone</label>
                        <select name="zone" class="form-control" id="inputZone">
                            <option disabled="" selected=""></option>
                                                                                    </select>
                    <span class="material-input"></span></div>
                </div>
                <div class="col-sm-5" id="div4">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Woreda</label>
                        <select name="woreda" class="form-control" id="inputWoreda">
                            <option disabled="" selected=""></option>
                                                                                    </select>
                    <span class="material-input"></span></div>
                </div>
                <div class="col-sm-3" id="div6" style="display: none;">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">St. Number
                            <small>(Optional)</small></label>
                        <input type="text" name="stNumber" class="form-control" id="inputStNumber" value="">

                    <span class="material-input"></span></div>
                </div>
                <div class="col-sm-3 col-sm-offset-1" id="div7">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">House Number
                            <small>(Optional)</small></label>
                        <input type="text" name="houseNumber" class="form-control" id="inputHouseNumber" value="">

                    <span class="material-input"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="background">
        <div class="row">

            <div class="col-sm-11 col-sm-offset-1">
                <p style="margin-bottom: 0px;"><strong>Educational Background:
                    </strong><button class="btn btn-info btn-sm" id="addEducationBtn"><span class="fa fa-plus-circle"></span>
                        Add</button>

                    </p><div id="educationList" style="margin-top: 0px;"></div>

            </div>





            <div class="col-sm-11 col-sm-offset-1">
                <p style="margin-bottom: 0px;"><strong>Personal Achievements:
                    </strong><button class="btn btn-info btn-sm" id="addAchievementBtn"><span class="fa fa-plus-circle"></span>
                        Add</button>

                    </p><div id="achievementList" style="margin-top: 0px;">
                    </div>

                    <div class="form-group is-empty">
                        <label for="paidInput">Please describe any paid or volunteer
                            work experience you have had so far that might relate to
                            your interest in volunteering at <strong>Serve
                                Global.Inc</strong>:</label>
                        <textarea class="form-control" name="paidVolunteer" rows="2" id="paidInput" style="width: 100%; border: 2px solid;border-radius: 4px; padding: 12px 20px;"></textarea>
                    <span class="material-input"></span></div>
                    <div class="form-group is-empty" style="margin-top: 0px;">
                        <label for="trainingInput">What training or formal education
                            have you had that might help you volunteer/intern with us?
                        </label>
                        <textarea class="form-control" rows="2" id="trainingInput" name="training" style="width: 100%; border: 2px solid;border-radius: 4px; padding: 12px 20px;"></textarea>
                    <span class="material-input"></span></div>
            </div>

        </div>
    </div>

    <div class="tab-pane" id="support">
        <div class="row">
            <div class="col-sm-11 col-sm-offset-1">

                <div class="form-group is-empty">
                    <label for="reasonInput">Let us know why you are interested to
                        participate voluntary activities under <strong>Serve
                            Global.Inc</strong>:</label>
                    <textarea class="form-control" rows="2" name="reason" id="reasonInput" style="width: 100%; border: 2px solid;border-radius: 4px; padding: 12px 20px;"></textarea>
                <span class="material-input"></span></div>
                <h4 class="info-text"> How can you support us? </h4>


                <div class="col-sm-6">
                    <small><span class="fa fa-info-circle"></span> <button class="btn btn-info btn-sm" id="addPhysicalConditionBtn" data-toggle="tooltip" title="" data-original-title="Do You Have Any Physical Condition that May Limit Your Activities?  If Yes Clich here">Do
                            You Have Any Physical Condition that May Limit Your
                            Activities? </button></small>
                </div>
                <div class="col-sm-6">
                    <small><span class="fa fa-info-circle"></span> <button class="btn btn-info btn-sm" id="addCriminalHistoryBtn" data-toggle="tooltip" title="" data-original-title="Have you ever been convicted of a crime? If Yes, Please Specify">Add
                            Criminal History</button></small>
                </div>
            </div>
            <div class="col-sm-11 col-sm-offset-1">
                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Humanitarian Service</label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice2" style="width: 100%;" data-placeholder="Humanitarian Service" title="Humanitarian Service" data-select2-id="choice2" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="5">
                                Blood Donation</option>

                                                                                        <option value="18">
                                House repairing of Elders and poor people</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Humanitarian Service" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Humanitarian Service" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Social Service</label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice3" style="width: 100%;" data-placeholder="Social Service" title="Social Service" data-select2-id="choice3" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="9">
                                Tutorial class for students</option>

                                                                                        <option value="19">
                                School feeding </option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Social Service" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Social Service" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Care and Support</label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice4" style="width: 100%;" data-placeholder="Care and Support" title="Care and Support" data-select2-id="choice4" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="20">
                                Care &amp; Support for People living with HIV/AIDS</option>

                                                                                        <option value="21">
                                Care &amp; Support for Orphans </option>

                                                                                        <option value="22">
                                Care &amp; Support for older people</option>

                                                                                        <option value="23">
                                Care &amp; Support for People with Disability</option>

                                                                                        <option value="24">
                                Care &amp; Support for Street children </option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Care and Support" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Care and Support" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Charity</label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice5" style="width: 100%;" data-placeholder="Charity" title="Charity" data-select2-id="choice5" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="25">
                                Donation of cloths </option>

                                                                                        <option value="26">
                                Donation of school materials</option>

                                                                                        <option value="27">
                                Donation of books / including out of school setting </option>

                                                                                        <option value="28">
                                Donation of medical equipment</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="4" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Charity" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Charity" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Professional Volunteer Service</label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice6" style="width: 100%;" data-placeholder="Professional Volunteer Service" title="Professional Volunteer Service" data-select2-id="choice6" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="29">
                                Long or short term professional training </option>

                                                                                        <option value="30">
                                Computer training </option>

                                                                                        <option value="31">
                                Art training</option>

                                                                                        <option value="32">
                                Different Sport training</option>

                                                                                        <option value="33">
                                Different Technical training</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Professional Volunteer Service" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Professional Volunteer Service" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Emergency Volunteering Service</label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice7" style="width: 100%;" data-placeholder="Emergency Volunteering Service" title="Emergency Volunteering Service" data-select2-id="choice7" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="34">
                                Emergency situation volunteering service</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="6" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Emergency Volunteering Service" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Emergency Volunteering Service" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Environment protection </label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice8" style="width: 100%;" data-placeholder="Environment protection " title="Environment protection " data-select2-id="choice8" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="35">
                                Forestation </option>

                                                                                        <option value="36">
                                City cleaning</option>

                                                                                        <option value="37">
                                Gardening  </option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Environment protection " tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Environment protection " style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Road trafficking</label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice9" style="width: 100%;" data-placeholder="Road trafficking" title="Road trafficking" data-select2-id="choice9" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="38">
                                Voluntary road traffic </option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Road trafficking" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Road trafficking" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                

            </div>
        </div>
        <h5 class="info-text"> Additional volunteer activities </h5>
        <div class="row">
            <div class="col-sm-11 col-sm-offset-1">
                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Recreation</label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice10" style="width: 100%;" data-placeholder="Recreation" title="Recreation" data-select2-id="choice10" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="39">
                                Outdoors</option>

                                                                                        <option value="40">
                                Workout</option>

                                                                                        <option value="41">
                                Swimming</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="9" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Recreation" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Recreation" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Entertainment</label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice11" style="width: 100%;" data-placeholder="Entertainment" title="Entertainment" data-select2-id="choice11" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="42">
                                Movies</option>

                                                                                        <option value="43">
                                Plays</option>

                                                                                        <option value="44">
                                Sports</option>

                                                                                        <option value="45">
                                Music</option>

                                                                                        <option value="46">
                                Cards/Games</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="10" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Entertainment" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Entertainment" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Arts &amp; Crafts</label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice12" style="width: 100%;" data-placeholder="Arts &amp; Crafts" title="Arts &amp; Crafts" data-select2-id="choice12" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="47">
                                Sewing/Quilting</option>

                                                                                        <option value="48">
                                Jewelry Making</option>

                                                                                        <option value="49">
                                Photography</option>

                                                                                        <option value="50">
                                Drawing/Painting</option>

                                                                                        <option value="51">
                                Card Making</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Arts &amp; Crafts" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Arts &amp; Crafts" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label"> Organizing parties </label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice13" style="width: 100%;" data-placeholder=" Organizing parties " title=" Organizing parties " data-select2-id="choice13" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="53">
                                Meetings</option>

                                                                                        <option value="54">
                                Worship</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="12" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title=" Organizing parties " tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder=" Organizing parties " style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Administrative </label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice14" style="width: 100%;" data-placeholder="Administrative " title="Administrative " data-select2-id="choice14" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="55">
                                Budgeting</option>

                                                                                        <option value="56">
                                Financial Planning</option>

                                                                                        <option value="57">
                                Grant Writing/Fundraising</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Administrative " tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Administrative " style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Outreach/Advocacy </label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice15" style="width: 100%;" data-placeholder="Outreach/Advocacy " title="Outreach/Advocacy " data-select2-id="choice15" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="58">
                                Legislative Issues</option>

                                                                                        <option value="59">
                                Community Organizing</option>

                                                                                        <option value="69">
                                Youth Empowerment</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="14" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Outreach/Advocacy " tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Outreach/Advocacy " style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Public Relations</label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice16" style="width: 100%;" data-placeholder="Public Relations" title="Public Relations" data-select2-id="choice16" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="60">
                                Graphic Design</option>

                                                                                        <option value="61">
                                Public Speaking</option>

                                                                                        <option value="62">
                                Marketing</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="15" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Public Relations" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Public Relations" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Technical Skills </label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice17" style="width: 100%;" data-placeholder="Technical Skills " title="Technical Skills " data-select2-id="choice17" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="63">
                                Computer Programming</option>

                                                                                        <option value="64">
                                Computer Instruction</option>

                                                                                        <option value="65">
                                Videography</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="16" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Technical Skills " tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Technical Skills " style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Office/Clerical</label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice18" style="width: 100%;" data-placeholder="Office/Clerical" title="Office/Clerical" data-select2-id="choice18" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="66">
                                Data Entry</option>

                                                                                        <option value="67">
                                Filing</option>

                                                                                        <option value="68">
                                Answering Phones</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="17" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Office/Clerical" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Office/Clerical" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                                                                <div class="col-sm-6">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Volunteerism </label>
                        <select name="support[]" class="form-control select2 select2-hidden-accessible" multiple="" id="choice19" style="width: 100%;" data-placeholder="Volunteerism " title="Volunteerism " data-select2-id="choice19" tabindex="-1" aria-hidden="true">
                            <option disabled=""></option>
                                                                                        <option value="70">
                                Volunteersim</option>

                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="18" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Volunteerism " tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Volunteerism " style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <span class="material-input"></span></div>
                </div>

                

            </div>
        </div>
        <div class="row">
            <h5 class="info-text"> Time Availability and Volunteer Assignment
                Preferences </h5>
            <div class="col-sm-11 col-sm-offset-1">
                

                <div class="form-group label-floating is-empty">
                    <label class="control-label">I am Available</label>
                    <select name="schedule[]" class="form-control select2 select2-hidden-accessible" multiple="" id="selectSchedule" style="width: 100%;" data-placeholder="Please Check All That You Are Applicable" title="Please Check All That You Are Applicable" data-select2-id="selectSchedule" tabindex="-1" aria-hidden="true">
                        <option disabled=""></option>
                                                                                <option value="">
                            </option>

                                                                                <option value="Mornings (Mon-Fri)">
                            Mornings (Mon-Fri)</option>

                                                                                <option value="Afternoons (Mon-Fri)">
                            Afternoons (Mon-Fri)</option>

                                                                                <option value="Evenings (Mon-Fri)">
                            Evenings (Mon-Fri)</option>

                                                                                <option value="Weekends">
                            Weekends</option>

                                                                                <option value="Once A Week">
                            Once A Week</option>

                                                                                <option value=" More than Once A Week">
                             More than Once A Week</option>

                                                                                <option value="One Time Only">
                            One Time Only</option>

                                                                                <option value="As Needed">
                            As Needed</option>

                                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="19" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" title="Please Check All That You Are Applicable" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Please Check All That You Are Applicable" style="width: 100px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                <span class="material-input"></span></div>
            </div>
            <div class="col-sm-11 col-sm-offset-1">
                <p>How would you like your efforts to be recognized?</p>
                                                                <div class="col-sm-6">
                    <div class="checkbox">
                        <label><input type="checkbox" value="Personal thank-you" name="recognition[]"><span class="checkbox-material"><span class="check"></span></span>Personal thank-you</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="Private Recognition" name="recognition[]"><span class="checkbox-material"><span class="check"></span></span>Private Recognition</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="Public Recognition" name="recognition[]"><span class="checkbox-material"><span class="check"></span></span>Public Recognition</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="SG Newsletter and Annual Report" name="recognition[]"><span class="checkbox-material"><span class="check"></span></span>SG Newsletter and Annual Report</label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="checkbox">
                        <label><input type="checkbox" value="Hand-written thank you" name="recognition[]"><span class="checkbox-material"><span class="check"></span></span>Hand-written thank you</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="Small tokens of appreciation" name="recognition[]"><span class="checkbox-material"><span class="check"></span></span>Small tokens of appreciation</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="Plaque" name="recognition[]"><span class="checkbox-material"><span class="check"></span></span>Plaque</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="Certificate" name="recognition[]"><span class="checkbox-material"><span class="check"></span></span>Certificate</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-11 col-sm-offset-1">
                <button id="addReferenceBtn" class="btn btn-info btn-sm">Add Personal or
                    Professional References</button>
            </div>
        </div>
    </div>
    <div class="wizard-footer">
        <div class="pull-right">
            <input type="button" class="btn btn-next btn-fill btn-success btn-wd" name="next" value="Next" style="">
            <input type="submit" class="btn btn-finish btn-fill btn-success btn-wd" name="finish" value="Finish" style="display: none;">
        </div>

        <div class="pull-left">
            <input type="button" class="btn btn-previous btn-fill btn-default btn-wd disabled" name="previous" value="Previous">
        </div>
        <div class="clearfix"></div>
    </div>

</div>