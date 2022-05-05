<?php
//require 'countriesList.php';
//require 'validator.php';



class Form{

    private $data;
    public $surround = 'p';
    public $surroundH3 = 'h3';
    private $gender = ['Female', 'Male', 'Other'];
    private $vehicules = ['Bike', 'Boat', 'Skateboard', 'Car', 'Spaceship'];
    private $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica",
        "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
        "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina",
        "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso",
        "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China",
        "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands",
        "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica",
        "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia",
        "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan",
        "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany",
        "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau",
        "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary",
        "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica",
        "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of",
        "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia",
        "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of",
        "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");


    public function __construct($data){
        $this->data = $data;
    }

    private function surround($html){
        return "<$this->surroundH3>$html</$this->surroundH3>";
    }

    //function which will show the value of $data in the form
    private function getValue($index){
        //        return isset($this->data[$index]) ? $this->data[$index] : null; can also be written like below
        return $this->data[$index] ?? null;
    }


    public function input($name){
       return $this->surround( $name .'<input type ="text" name=" ' . $name .'s'
           . ' " value="' .$this->getValue($name) .'"> ');
    }

    public function select($name){
      echo $this->surround($name .'<select name="' .$name .'">
        <option value="">Select..</option>');

        foreach ($this->countries as $value) {
           echo  "<option value='$value'> $value</option>";

        }
        echo '</select>';
    }

    public function textarea($text){
        return $this->surround('<label for="textarea">Leave your feedback</label>
        <textarea name="textarea" rows="4" cols="50"></textarea>
        <br>');

    }

    public function radioInput($label){
        echo "<p> Select your gender</p>";

        foreach ($this->gender as $value) {
            echo $this->surround( "<input type='radio' name='gender' value='$value'>
            <label for='$value'> $value </label>");
        }
        echo '</select>';
    }

    public function checkbox ($check) {
        echo "<h3> Select your vehicule </h3>";

        foreach ($this->vehicules as $value) {
           echo  "<input type='checkbox' name='vehicule' value='$value'>
           <label for='$value'> I have a $value</label><br>";
        }
    }

    public function submit()
    {
        return $this->surround('<button type ="submit" value="submit" name="submit"> Send</button>');
    }

}



