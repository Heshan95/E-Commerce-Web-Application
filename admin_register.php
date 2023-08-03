<?php
include './showErros.php';
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>R E G I S T E R</title>
        
        <link type="text/css" href="admin_login.css" rel="stylesheet">
        <link rel="shortcut icon" href="img/unauthorized-person.png">
    </head>
    <body>
        <section class="login-page" style="color: black;">
            <form action="admin_register_user.php" method="POST">
                <div class="box" >
                    <div class="form-head">
                        <h2>Register</h2>
                        <?php if(isset($_GET['msg'])){ ?>
            <p style="color: red;"><?php echo $_GET['msg'];?></p>
            <?php }?>

                    </div>
                    <div class="form-body">
                        <input type="text" placeholder="First Name" name="fname" id="fname">
                        <input type="text" placeholder="Last Name" name="lname" id="lname">
                        <input type="email" placeholder="Email Id" name="email" id="email">
                    </div>
                    <select name="country" id="country" style="display: flex;
                            flex-direction: column; 
                            height: 40px; margin-bottom: 20px;
                            padding-top: 3%;
                            border: none;width: 100%;background-color: transparent;color: #ffffff;
                            border-radius: 20px;text-align: center;border: solid;                                
                            transition: box-shadow 0.5s ease;">
                        <option style="color: black;" value="  " selected>Select a country</option>
                        <option style="color: black;" value="AF">Afghanistan</option>
                        <option style="color: black;" value="AL">Albania</option>
                        <option style="color: black;" value="DZ">Algeria</option>
                        <option style="color: black;" value="AS">American Samoa</option>
                        <option style="color: black;" value="AD">Andorra</option>
                        <option style="color: black;" value="AO">Angola</option>
                        <option style="color: black;" value="AI">Anguilla</option>
                        <option style="color: black;" value="AQ">Antarctica</option>
                        <option style="color: black;" value="AG">Antigua and Barbuda</option>
                        <option style="color: black;" value="AR">Argentina</option>
                        <option style="color: black;" value="AM">Armenia</option>
                        <option style="color: black;" value="AW">Aruba</option>
                        <option style="color: black;" value="AU">Australia</option>
                        <option style="color: black;" value="AT">Austria</option>
                        <option style="color: black;" value="AZ">Azerbaijan</option>
                        <option style="color: black;" value="BS">Bahamas</option>
                        <option style="color: black;" value="BH">Bahrain</option>
                        <option style="color: black;" value="BD">Bangladesh</option>
                        <option style="color: black;" value="BB">Barbados</option>
                        <option style="color: black;" value="BY">Belarus</option>
                        <option style="color: black;" value="BE">Belgium</option>
                        <option style="color: black;" value="BZ">Belize</option>
                        <option style="color: black;" value="BJ">Benin</option>
                        <option style="color: black;" value="BM">Bermuda</option>
                        <option style="color: black;" value="BT">Bhutan</option>
                        <option style="color: black;" value="BO">Bolivia</option>
                        <option style="color: black;" value="BA">Bosnia and Herzegowina</option>
                        <option style="color: black;" value="BW">Botswana</option>
                        <option style="color: black;" value="BV">Bouvet Island</option>
                        <option style="color: black;" value="BR">Brazil</option>
                        <option style="color: black;" value="IO">British Indian Ocean Territory</option>
                        <option style="color: black;" value="BN">Brunei Darussalam</option>
                        <option style="color: black;" value="BG">Bulgaria</option>
                        <option style="color: black;" value="BF">Burkina Faso</option>
                        <option style="color: black;" value="BI">Burundi</option>
                        <option style="color: black;" value="KH">Cambodia</option>
                        <option style="color: black;" value="CM">Cameroon</option>
                        <option style="color: black;" value="CA">Canada</option>
                        <option style="color: black;" value="CV">Cape Verde</option>
                        <option style="color: black;" value="KY">Cayman Islands</option>
                        <option style="color: black;" value="CF">Central African Republic</option>
                        <option style="color: black;" value="TD">Chad</option>
                        <option style="color: black;" value="CL">Chile</option>
                        <option style="color: black;" value="CN">China</option>
                        <option style="color: black;" value="CX">Christmas Island</option>
                        <option style="color: black;" value="CC">Cocos (Keeling) Islands</option>
                        <option style="color: black;" value="CO">Colombia</option>
                        <option style="color: black;" value="KM">Comoros</option>
                        <option style="color: black;" value="CG">Congo</option>
                        <option style="color: black;" value="CD">Congo, the Democratic Republic of the</option>
                        <option style="color: black;" value="CK">Cook Islands</option>
                        <option style="color: black;" value="CR">Costa Rica</option>
                        <option style="color: black;" value="CI">Cote d'Ivoire</option>
                        <option style="color: black;" value="HR">Croatia (Hrvatska)</option>
                        <option style="color: black;" value="CU">Cuba</option>
                        <option style="color: black;" value="CY">Cyprus</option>
                        <option style="color: black;" value="CZ">Czech Republic</option>
                        <option style="color: black;" value="DK">Denmark</option>
                        <option style="color: black;" value="DJ">Djibouti</option>
                        <option style="color: black;" value="DM">Dominica</option>
                        <option style="color: black;" value="DO">Dominican Republic</option>
                        <option style="color: black;" value="TP">East Timor</option>
                        <option style="color: black;" value="EC">Ecuador</option>
                        <option style="color: black;" value="EG">Egypt</option>
                        <option style="color: black;" value="SV">El Salvador</option>
                        <option style="color: black;" value="GQ">Equatorial Guinea</option>
                        <option style="color: black;" value="ER">Eritrea</option>
                        <option style="color: black;" value="EE">Estonia</option>
                        <option style="color: black;" value="ET">Ethiopia</option>
                        <option style="color: black;" value="FK">Falkland Islands (Malvinas)</option>
                        <option style="color: black;" value="FO">Faroe Islands</option>
                        <option style="color: black;" value="FJ">Fiji</option>
                        <option style="color: black;" value="FI">Finland</option>
                        <option style="color: black;" value="FR">France</option>
                        <option style="color: black;" value="FX">France, Metropolitan</option>
                        <option style="color: black;" value="GF">French Guiana</option>
                        <option style="color: black;" value="PF">French Polynesia</option>
                        <option style="color: black;" value="TF">French Southern Territories</option>
                        <option style="color: black;" value="GA">Gabon</option>
                        <option style="color: black;" value="GM">Gambia</option>
                        <option style="color: black;" value="GE">Georgia</option>
                        <option style="color: black;" value="DE">Germany</option>
                        <option style="color: black;" value="GH">Ghana</option>
                        <option style="color: black;" value="GI">Gibraltar</option>
                        <option style="color: black;" value="GR">Greece</option>
                        <option style="color: black;" value="GL">Greenland</option>
                        <option style="color: black;" value="GD">Grenada</option>
                        <option style="color: black;" value="GP">Guadeloupe</option>
                        <option style="color: black;" value="GU">Guam</option>
                        <option style="color: black;" value="GT">Guatemala</option>
                        <option style="color: black;" value="GN">Guinea</option>
                        <option style="color: black;" value="GW">Guinea-Bissau</option>
                        <option style="color: black;" value="GY">Guyana</option>
                        <option style="color: black;" value="HT">Haiti</option>
                        <option style="color: black;" value="HM">Heard and Mc Donald Islands</option>
                        <option style="color: black;" value="VA">Holy See (Vatican City State)</option>
                        <option style="color: black;" value="HN">Honduras</option>
                        <option style="color: black;" value="HK">Hong Kong</option>
                        <option style="color: black;" value="HU">Hungary</option>
                        <option style="color: black;" value="IS">Iceland</option>
                        <option style="color: black;" value="IN">India</option>
                        <option style="color: black;" value="ID">Indonesia</option>
                        <option style="color: black;" value="IR">Iran (Islamic Republic of)</option>
                        <option style="color: black;" value="IQ">Iraq</option>
                        <option style="color: black;" value="IE">Ireland</option>
                        <option style="color: black;" value="IL">Israel</option>
                        <option style="color: black;" value="IT">Italy</option>
                        <option style="color: black;" value="JM">Jamaica</option>
                        <option style="color: black;" value="JP">Japan</option>
                        <option style="color: black;" value="JO">Jordan</option>
                        <option style="color: black;" value="KZ">Kazakhstan</option>
                        <option style="color: black;" value="KE">Kenya</option>
                        <option style="color: black;" value="KI">Kiribati</option>
                        <option style="color: black;" value="KP">Korea, Democratic People's Republic of</option>
                        <option style="color: black;" value="KR">Korea, Republic of</option>
                        <option style="color: black;" value="KW">Kuwait</option>
                        <option style="color: black;" value="KG">Kyrgyzstan</option>
                        <option style="color: black;" value="LA">Lao People's Democratic Republic</option>
                        <option style="color: black;" value="LV">Latvia</option>
                        <option style="color: black;" value="LB">Lebanon</option>
                        <option style="color: black;" value="LS">Lesotho</option>
                        <option style="color: black;" value="LR">Liberia</option>
                        <option style="color: black;" value="LY">Libyan Arab Jamahiriya</option>
                        <option style="color: black;" value="LI">Liechtenstein</option>
                        <option style="color: black;" value="LT">Lithuania</option>
                        <option style="color: black;" value="LU">Luxembourg</option>
                        <option style="color: black;" value="MO">Macau</option>
                        <option style="color: black;" value="MK">Macedonia, The Former Yugoslav Republic of</option>
                        <option style="color: black;" value="MG">Madagascar</option>
                        <option style="color: black;" value="MW">Malawi</option>
                        <option style="color: black;" value="MY">Malaysia</option>
                        <option style="color: black;" value="MV">Maldives</option>
                        <option style="color: black;" value="ML">Mali</option>
                        <option style="color: black;" value="MT">Malta</option>
                        <option style="color: black;" value="MH">Marshall Islands</option>
                        <option style="color: black;" value="MQ">Martinique</option>
                        <option style="color: black;" value="MR">Mauritania</option>
                        <option style="color: black;" value="MU">Mauritius</option>
                        <option style="color: black;" value="YT">Mayotte</option>
                        <option style="color: black;" value="MX">Mexico</option>
                        <option style="color: black;" value="FM">Micronesia, Federated States of</option>
                        <option style="color: black;" value="MD">Moldova, Republic of</option>
                        <option style="color: black;" value="MC">Monaco</option>
                        <option style="color: black;" value="MN">Mongolia</option>
                        <option style="color: black;" value="MS">Montserrat</option>
                        <option style="color: black;" value="MA">Morocco</option>
                        <option style="color: black;" value="MZ">Mozambique</option>
                        <option style="color: black;" value="MM">Myanmar</option>
                        <option style="color: black;" value="NA">Namibia</option>
                        <option style="color: black;" value="NR">Nauru</option>
                        <option style="color: black;" value="NP">Nepal</option>
                        <option style="color: black;" value="NL">Netherlands</option>
                        <option style="color: black;" value="AN">Netherlands Antilles</option>
                        <option style="color: black;" value="NC">New Caledonia</option>
                        <option style="color: black;" value="NZ">New Zealand</option>
                        <option style="color: black;" value="NI">Nicaragua</option>
                        <option style="color: black;" value="NE">Niger</option>
                        <option style="color: black;" value="NG">Nigeria</option>
                        <option style="color: black;" value="NU">Niue</option>
                        <option style="color: black;" value="NF">Norfolk Island</option>
                        <option style="color: black;" value="MP">Northern Mariana Islands</option>
                        <option style="color: black;" value="NO">Norway</option>
                        <option style="color: black;" value="OM">Oman</option>
                        <option style="color: black;" value="PK">Pakistan</option>
                        <option style="color: black;" value="PW">Palau</option>
                        <option style="color: black;" value="PA">Panama</option>
                        <option style="color: black;" value="PG">Papua New Guinea</option>
                        <option style="color: black;" value="PY">Paraguay</option>
                        <option style="color: black;" value="PE">Peru</option>
                        <option style="color: black;" value="PH">Philippines</option>
                        <option style="color: black;" value="PN">Pitcairn</option>
                        <option style="color: black;" value="PL">Poland</option>
                        <option style="color: black;" value="PT">Portugal</option>
                        <option style="color: black;" value="PR">Puerto Rico</option>
                        <option style="color: black;" value="QA">Qatar</option>
                        <option style="color: black;" value="RE">Reunion</option>
                        <option style="color: black;" value="RO">Romania</option>
                        <option style="color: black;" value="RU">Russian Federation</option>
                        <option style="color: black;" value="RW">Rwanda</option>
                        <option style="color: black;" value="KN">Saint Kitts and Nevis</option> 
                        <option style="color: black;" value="LC">Saint LUCIA</option>
                        <option style="color: black;" value="VC">Saint Vincent and the Grenadines</option>
                        <option style="color: black;" value="WS">Samoa</option>
                        <option style="color: black;" value="SM">San Marino</option>
                        <option style="color: black;" value="ST">Sao Tome and Principe</option> 
                        <option style="color: black;" value="SA">Saudi Arabia</option>
                        <option style="color: black;" value="SN">Senegal</option>
                        <option style="color: black;" value="SC">Seychelles</option>
                        <option style="color: black;" value="SL">Sierra Leone</option>
                        <option style="color: black;" value="SG">Singapore</option>
                        <option style="color: black;" value="SK">Slovakia (Slovak Republic)</option>
                        <option style="color: black;" value="SI">Slovenia</option>
                        <option style="color: black;" value="SB">Solomon Islands</option>
                        <option style="color: black;" value="SO">Somalia</option>
                        <option style="color: black;" value="ZA">South Africa</option>
                        <option style="color: black;" value="GS">South Georgia and the South Sandwich Islands</option>
                        <option style="color: black;" value="ES">Spain</option>
                        <option style="color: black;" value="LK">Sri Lanka</option>
                        <option style="color: black;" value="SH">St. Helena</option>
                        <option style="color: black;" value="PM">St. Pierre and Miquelon</option>
                        <option style="color: black;" value="SD">Sudan</option>
                        <option style="color: black;" value="SR">Suriname</option>
                        <option style="color: black;" value="SJ">Svalbard and Jan Mayen Islands</option>
                        <option style="color: black;" value="SZ">Swaziland</option>
                        <option style="color: black;" value="SE">Sweden</option>
                        <option style="color: black;" value="CH">Switzerland</option>
                        <option style="color: black;" value="SY">Syrian Arab Republic</option>
                        <option style="color: black;" value="TW">Taiwan, Province of China</option>
                        <option style="color: black;" value="TJ">Tajikistan</option>
                        <option style="color: black;" value="TZ">Tanzania, United Republic of</option>
                        <option style="color: black;" value="TH">Thailand</option>
                        <option style="color: black;" value="TG">Togo</option>
                        <option style="color: black;" value="TK">Tokelau</option>
                        <option style="color: black;" value="TO">Tonga</option>
                        <option style="color: black;" value="TT">Trinidad and Tobago</option>
                        <option style="color: black;" value="TN">Tunisia</option>
                        <option style="color: black;" value="TR">Turkey</option>
                        <option style="color: black;" value="TM">Turkmenistan</option>
                        <option style="color: black;" value="TC">Turks and Caicos Islands</option>
                        <option style="color: black;" value="TV">Tuvalu</option>
                        <option style="color: black;" value="UG">Uganda</option>
                        <option style="color: black;" value="UA">Ukraine</option>
                        <option style="color: black;" value="AE">United Arab Emirates</option>
                        <option style="color: black;" value="GB">United Kingdom</option>
                        <option style="color: black;" value="US">United States</option>
                        <option style="color: black;" value="UM">United States Minor Outlying Islands</option>
                        <option style="color: black;" value="UY">Uruguay</option>
                        <option style="color: black;" value="UZ">Uzbekistan</option>
                        <option style="color: black;" value="VU">Vanuatu</option>
                        <option style="color: black;" value="VE">Venezuela</option>
                        <option style="color: black;" value="VN">Viet Nam</option>
                        <option style="color: black;" value="VG">Virgin Islands (British)</option>
                        <option style="color: black;" value="VI">Virgin Islands (U.S.)</option>
                        <option style="color: black;" value="WF">Wallis and Futuna Islands</option>
                        <option style="color: black;" value="EH">Western Sahara</option>
                        <option style="color: black;" value="YE">Yemen</option>
                        <option style="color: black;" value="YU">Yugoslavia</option>
                        <option style="color: black;" value="ZM">Zambia</option>
                        <option style="color: black;" value="ZW">Zimbabwe</option>
                    </select>
                    <div class="form-body">
                        <input style="color: white;" type="number" placeholder="Phone Number" name="number" id="number">
                        <input style="color: white;" type="text" placeholder="Address" name="address" id="address">
                        <input style="color: white;" type="text" placeholder="City" name="city" id="city">
                        <input style="color: white;" type="number" placeholder="Zip Code" name="zip" id="zip">
                        <input style="color: white;" type="text" placeholder="User Name" name="username" id="username">
                        <input style="color: white;" type="password" placeholder="Password" name="password" id="password">
                    </div>
                    <div>
                        <h3  style="color: white; font-size: 1em; font-style: italic; text-align: center; font-weight: 300; margin-top: 0;" > <input type="checkbox" name="tick" value="ON" checked="checked" /> I agree to the term and condition</h3>                        
                    </div> 
                    <div class="form-footer">
                        <button type="submit" href="admin_home.php"> Register </button> 
                    </div>
                    <div class="register">
                        <h4 class="register">Back to |<span type="submit"><a href="admin_login.php" style="text-decoration: none;">Login Page</a></span> </h4>
                    </div>
                </div>
            </form>
        </section>

        <?php
        // put your code here
        ?>
    </body>
</html>
