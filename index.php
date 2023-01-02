<?php
// By: Musa A S
// sheriffmusa42@gmail.com
// 2023-01-01
// 10:29:00

require_once __DIR__.'/Api/PhoneVerify.php';

// Provide your API key here

$phoneVerify = new PhoneVerify();


// Validate a number

$numberCheck = $phoneVerify->validateNumber("omo is here");

echo $numberCheck;


 /*$numberDetails = json_decode($numberCheck, true);

 foreach ($numberDetails as $key => $value) {
     echo $key  . ' : ' . $value . ':'.'<br>';

 }
*/




// List of countries

//$countries = $phoneVerify->listCountries();

/*
$countries = json_decode($countries, true);





foreach ($countries as $key => $value) {
  echo $key . ' : ' . $value['country_name'] . ' : ' . $value['dialling_code'] . '<br>';
  
}

*/










 

   

