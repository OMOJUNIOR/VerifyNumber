<?php
// By: Musa A S
// sheriffmusa42@gmail.com
// 2023-01-01
// 10:29:00

class PhoneVerify
{
    private $apiKey = 'API_KEY';

    private $apiUrl = 'https://api.apilayer.com/';

    public function __construct()
    {
        $this->apiKey = $this->apiKey;
        $this->apiUrl = $this->apiUrl;
    }

  

    public function listCountries()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->apiUrl."number_verification/countries",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "apikey: $this->apiKey",
                "content-type: application/json"

            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }

    }

    public function  validateNumber($number)
    {
        if(is_numeric($number))
        {
            $number = $number;
        }
        else
        {
            return "Please enter a number";

        }


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->apiUrl . "number_verification" ."/validate?number={$number}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "apikey: $this->apiKey",
                "content-type: text/plain"

            ),

        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
            
    }


}

