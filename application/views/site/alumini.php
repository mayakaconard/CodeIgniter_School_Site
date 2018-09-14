

    <div class="clearfix"></div>
     <div class="page-section equal">
    <div class="container">

        <div class="page-section-heading">
        <h2 class="text-display-1"> ALUMINI REGISTRATION </h2>
    </div>
    </div>
     </div>

<div class="page-section">
    <div class="container">
             <?php
                                 if(isset($_SESSION['success'])){
                                     echo  $_SESSION['success'];

                                }
                                 elseif(isset($_SESSION['error'])){
                                    echo $_SESSION['error'];
                                 }

                            ?>
    <div class="panel panel-default">

        <div class="panel-body">
        <div class="row">
        <form action="<?php echo base_url('Site/Alumini_registration');?>" method="post">
        <div class="col-md-4">
          <div class="form-group">
                <label for="course Level">Salutation: &nbsp;<span class="required">*</span></label>
                  <select class="form-control"  data-toggle="select2" required="required" name="salutation">
                    <option value ="">--Select Salutation--</option>
                           	<option value="Prof.">Prof.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Ms.">Ms.</option>
                            <option value="Miss">Miss</option>
                      </select>
              </div>
          <div class="form-group">
              <label for="">First Name: <i><span class="required">*</span></i></label>
            <input name = "fname" type="text" required="required" class="form-control" placeholder="First Name">

          </div>
          <div class="form-group">
               <label for="">Middle Name: </label>
            <input name="mname" type="text" class="form-control" placeholder="Middle Name">

          </div>
           <div class="form-group">
               <label for="">Last Name: <i><span class="required">*</span></i></label>
            <input name="lname" type="text" required="required" class="form-control" placeholder="Last Name">

          </div>

      </div>

          <div class="col-md-4">
              <div class="form-group">
                <label for="course Level">Gender: &nbsp;<span class="required">*</span></label>
                  <select class="form-control"  data-toggle="select2" required="required" name="gender">
                    <option value ="">--Select Gender--</option>
                           	<option value="Male">MALE</option>
                            <option value="Female">FEMALE</option>
                      </select>
              </div>

          <div class="form-group">
                <label for="course Level">ID/Passport No: &nbsp;<span class="required">*</span></label>
                <input name = "idnumber" type="text" required="required" class="form-control" placeholder="ID / Passport Number" maxlength="8">

              </div>
          <div class="form-group">
              <label for="">Email Address: <i><span class="required">*</span></i></label>
            <input name = "email" type="email" required="required" class="form-control" placeholder="Email Address">

          </div>
          <div class="form-group">
               <label for="">Mobile Number: <i><span class="required">*</span></i> </label>
            <input name="mobile" type="text"  required="required" class="form-control" placeholder="+code0000000000" maxlength="20">

          </div>

      </div>


          <div class="col-md-4">
               <div class="form-group">
               <label for="">Alternative Phone Number:</label>
            <input name="phone" type="text" class="form-control" placeholder="+code0000000000" maxlength="13">

          </div>

          <div class="form-group">
                <label for="course Level">Postal Address: &nbsp;<span class="required">*</span></label>
                <input name = "postal" type="text" required="required" class="form-control" placeholder="P.O BOX 000, 00000, TOWN">

              </div>

          <div class="form-group">
                <label for="course Level">Education Level: &nbsp;<span class="required">*</span></label>
                  <select class="form-control"  data-toggle="select2" required="required" name="edulevel">
                    <option value ="">--Select Level--</option>
                           <option value="University">University</option>
                           <option value="College">College</option>
                           <option value="Other">Other</option>
                      </select>
              </div>
               <div class="form-group">
                <label for="course Level">Country: &nbsp;<span class="required">*</span></label>
                  <select class="form-control"  data-toggle="select2" required="required" name="country">
                    <option value ="">--Select Country--</option>
                           <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antartica">Antartica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Ashmore and Cartier Island">Ashmore and Cartier Island</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Virgin Islands">British Virgin Islands</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burma">Burma</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Clipperton Island">Clipperton Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                             <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                            <option value="Croatia">Croatia</option>
                             <option value="Cuba">Cuba</option>
                              <option value="Cyprus">Cyprus</option>
                               <option value="Czeck Republic">Czeck Republic</option>
                                <option value="Denmark">Denmark</option>
                                 <option value="Djibouti">Djibouti</option>
                                  <option value="Dominica">Dominica</option>
                                   <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                     <option value="Egypt">Egypt</option>
                                      <option value="El Salvador">El Salvador</option>
                                       <option value="Equatorial Guinea">Equatorial Guinea</option>
                             <option value="Eritrea">Eritrea</option>
                              <option value="Estonia">Estonia</option>
                               <option value="Ethiopia">Ethiopia</option>
                                <option value="Europa Island">Europa Island</option>
                             <option value="Falkland Islands">Falkland Islands</option>
                              <option value="Faroe Islands">Faroe Islands</option>
                               <option value="Fiji">Fiji</option>
                               <option value="Finland">Finland</option>
                               <option value="France">France</option>
                               <option value="French Guiana">French Guiana</option>
                               <option value="French Polynesia">French Polynesia</option>
                               <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
                               <option value="Gabon">Gabon</option>
                               <option value="Gambia">Gambia</option>
                               <option value="Georgia">Georgia</option>
                               <option value="Germany">Germany</option>
                               <option value="Ghana">Ghana</option>
                               <option value="Gibraltar">Gibraltar</option>
                               <option value="Glorioso Islands">Glorioso Islands</option>
                               <option value="Greece">Greece</option>
                               <option value="Greenland">Greenland</option>
                               <option value="Grenada">Grenada</option>
                               <option value="Guadeloupe">Guadeloupe</option>
                               <option value=""></option>
                               <option value="Guam">Guam</option>
                               <option value="Guatemala">Guatemala</option>
                               <option value="Guernsey">Guernsey</option>
                               <option value="Guinea">Guinea</option>
                               <option value="Guinea-Bissau">Guinea-Bissau</option>
                               <option value="Guyana">Guyana</option>
                               <option value="Guyana">Guyana</option>
                               <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                               <option value="Holy See">Holy See (Vatican City)</option>
                               <option value="Honduras">Honduras</option>
                               <option value="Hong Kong">Hong Kong</option>
                               <option value="Howland Island">Howland Island</option>
                               <option value="Hungary">Hungary</option>
                               <option value="Iceland">Iceland</option>
                               <option value="India">India</option>
                               <option value="Indonesia">Indonesia</option>
                               <option value="Iran">Iran</option>
                               <option value="Iraq">Iraq</option>
                               <option value="Ireland">Ireland</option>
                               <option value="Israel">Israel</option>
                               <option value="Italy">Italy</option>
                               <option value="Jamaica">Jamaica</option>
                               <option value="Jan Mayen">Jan Mayen</option>
                               <option value="Japan">Japan</option>
                               <option value="Jarvis Island">Jarvis Island</option>
                               <option value="Jersey">Jersey</option>
                               <option value="Johnston Atoll">Johnston Atoll</option>
                               <option value="Jordan">Jordan</option>
                               <option value="Juan de Nova Island">Juan de Nova Island</option>
                               <option value="Kazakhstan">Kazakhstan</option>
                               <option value="Kenya">Kenya</option>
                               <option value="Kiribati">Kiribati</option>
                               <option value="Korea">Korea</option>
                               <option value="Kuwait">Kuwait</option>
                               <option value="Kyrgyzstan">Kyrgyzstan</option>
                               <option value="Laos">Laos</option>
                               <option value="Latvia">Latvia</option>
                               <option value="Lebanon">Lebanon</option>
                               <option value="Lesotho">Lesotho</option>
                               <option value="Liberia">Liberia</option>
                               <option value="Libya">Libya</option>
                               <option value="Liechtenstein">Liechtenstein</option>
                               <option value="Lithuania">Lithuania</option>
                               <option value="Luxembourg">Luxembourg</option>
                               <option value="Macau">Macau</option>
                               <option value="Macedonia">Macedonia</option>
                               <option value="Madagascar">Madagascar</option>
                               <option value="Malawi">Malawi</option>
                               <option value="Malaysia">Malaysia</option>
                               <option value="Maldives">Maldives</option>
                               <option value="Mali">Mali</option>
                               <option value="Malta">Malta</option>
                               <option value="Marshall Islands">Marshall Islands</option>
                               <option value="Martinique">Martinique</option>
                               <option value="Mauritania">Mauritania</option>
                               <option value="Mauritius">Mauritius</option>
                               <option value="Mayotte">Mayotte</option>
                               <option value="Mexico">Mexico</option>
                               <option value="Micronesia">Micronesia</option>
                               <option value="Midway Islands">Midway Islands</option>
                               <option value="Moldova">Moldova</option>
                               <option value="Monaco">Monaco</option>
                               <option value="Mongolia">Mongolia</option>
                               <option value="Montserrat">Montserrat</option>
                               <option value="Morocco">Morocco</option>
                               <option value="Mozambique">Mozambique</option>
                               <option value="Namibia">Namibia</option>
                               <option value="Nauru">Nauru</option>
                               <option value="Nepal">Nepal</option>
                               <option value="Netherlands">Netherlands</option>
                               <option value="Netherlands Antilles">Netherlands Antilles</option>
                               <option value="New Caledonia">New Caledonia</option>
                               <option value="New Zealand">New Zealand</option>
                               <option value="Nicaragua">Nicaragua</option>
                               <option value="Niger">Niger</option>
                               <option value="Nigeria">Nigeria</option>
                               <option value="Niue">Niue</option>
                               <option value="Norfolk Island">Norfolk Island</option>
                               <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                               <option value="Norway">Norway</option>
                               <option value="Oman">Oman</option>
                               <option value="Pakistan">Pakistan</option>
                               <option value="Palau">Palau</option>
                               <option value="Panama">Panama</option>
                               <option value="Papua New Guinea">Papua New Guinea</option>
                               <option value="Paraguay">Paraguay</option>
                               <option value="Peru">Peru</option>
                               <option value="Philippines">Philippines</option>
                               <option value="Pitcaim Islands">Pitcaim Islands</option>
                               <option value="Poland">Poland</option>
                               <option value="Portugal">Portugal</option>
                               <option value="Puerto Rico">Puerto Rico</option>
                               <option value="Qatar">Qatar</option>
                               <option value="Reunion">Reunion</option>
                               <option value="Romainia">Romainia</option>
                               <option value="Russia">Russia</option>
                               <option value="Rwanda">Rwanda</option>
                               <option value="Saint Helena">Saint Helena</option>
                               <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                               <option value="Saint Lucia">Saint Lucia</option>
                               <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                               <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                               <option value="Samoa">Samoa</option>
                               <option value="San Marino">San Marino</option>
                               <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                               <option value="Saudi Arabia">Saudi Arabia</option>
                               <option value="Scotland">Scotland</option>
                               <option value="Senegal">Senegal</option>
                               <option value="Seychelles">Seychelles</option>
                               <option value="Sierra Leone">Sierra Leone</option>
                               <option value="Singapore">Singapore</option>
                               <option value="Slovakia">Slovakia</option>
                               <option value="Slovenia">Slovenia</option>
                               <option value="Solomon Islands">Solomon Islands</option>
                               <option value="Somalia">Somalia</option>
                               <option value="South Africa">South Africa</option>
                               <option value="South Georgia">South Georgia</option>
                               <option value="Spain">Spain</option>
                               <option value="Spratly Islands">Spratly Islands</option>
                               <option value="Sri Lanka">Sri Lanka</option>
                               <option value="Sudan">Sudan</option>
                               <option value="Suriname">Suriname</option>
                               <option value="Svalbard">Svalbard</option>
                               <option value="Swaziland">Swaziland</option>
                               <option value="Sweden">Sweden</option>
                               <option value="Switzerland">Switzerland</option>
                               <option value="Syria">Syria</option>
                               <option value="Taiwan">Taiwan</option>
                               <option value="Tajikistan">Tajikistan</option>
                               <option value="Tanzania">Tanzania</option>
                               <option value="Thailand">Thailand</option>
                               <option value="Tobago">Tobago</option>
                               <option value="Togo">Togo</option>
                               <option value="Tokelau">Tokelau</option>
                               <option value="Tonga">Tonga</option>
                               <option value="Trinidad">Trinidad</option>
                               <option value="Tunisia">Tunisia</option>
                               <option value="Turkey">Turkey</option>
                               <option value="Turkmenistan">Turkmenistan</option>
                               <option value="Tuvalu">Tuvalu</option>
                               <option value="Uganda">Uganda</option>
                               <option value="Ukraine">Ukraine</option>
                               <option value="United Arab Emirates">United Arab Emirates</option>
                               <option value="United Kingdom">United Kingdom</option>
                               <option value="Uruguay">Uruguay</option>
                               <option value="USA">USA</option>
                               <option value="Uzbekistan">Uzbekistan</option>
                               <option value="Vanuatu">Vanuatu</option>
                               <option value="Venezuela">Venezuela</option>
                               <option value="Vietnam">Vietnam</option>
                               <option value="Virgin Islands">Virgin Islands</option>
                               <option value="Wales">Wales</option>
                               <option value="Wallis and Futuna">Wallis and Futuna</option>
                               <option value="West Bank">West Bank</option>
                               <option value="Western Sahara">Western Sahara</option>
                               <option value="Yemen">Yemen</option>
                               <option value="Yugoslavia">Yugoslavia</option>
                               <option value="Zambia">Zambia</option>
                               <option value="Zimbabwe">Zimbabwe</option>
                      </select>
              </div>

      </div>

           <div class="row">
            <div class="col-md-4">
              <button type="submit" name="register" class="btn btn-primary">Register</button>
              <button type="reset" name="cancel" class="btn btn-danger">Cancel</button>
            </div><!-- /.col -->
          </div>
         </form>
      </div>


                    </div>


                </div>












    </div>
</div>
<br/>