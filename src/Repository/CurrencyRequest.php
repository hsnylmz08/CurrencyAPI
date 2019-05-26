<?php

namespace App\Repository;

class CurrencyRequest{
    
    public $url;
    public $currencyCodes = array();
    public function __construct($url){
        $this->url = $url;

        // $currencyCodes = [
        //     'USD' => ['USD','usd','dolar','USDTRY'],
        //     'EURO' => ['EURO','euro','avro','EURTRY'],
        //     'GBP' => ['STERLIN','sterlin','İNGİLİZ STERLİNİ','GBPTRY'],
        // ];
    }

    public function request(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    

}