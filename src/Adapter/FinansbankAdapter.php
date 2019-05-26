<?php

namespace App\Adapter;

use App\Repository\ICurrency;
use App\Entity\Finansbank;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;
use App\Repository\CurrencyRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FinansbankAdapter extends AbstractController implements ICurrency{

    private $restURL;
    private $CurrencyRequest; 
    private $Finansbank;
    public function __construct(){
        $this->restURL = "http://www.mocky.io/v2/5a74519d2d0000430bfe0fa0";
        $this->Finansbank = new Finansbank();
        $this->CurrencyRequest = new CurrencyRequest($this->restURL);
    }

    public function restEndPointCheck(): bool{
        
        $response = get_headers($this->restURL);
        if(!is_null($response)){
            if(strpos($response[0],"200") !== false){
                return true;
            }
        }
        return false;
    }

    public function getCurrencies(){
        
        $response = $this->CurrencyRequest->request();
        $currencies = json_decode($response);

        return $currencies;
    }

    public function saveCurrencies() : bool{
        $currencies = $this->getCurrencies();
        $data = $currencies->result;
        $currency = new Finansbank();
        $currencyArray = [
            "USDTRY" => "usd","EURTRY" => "euro","GBPTRY" => "gbp"
        ];
        $entityManager = $this->getDoctrine()->getManager();

        foreach($data as $cur){
            foreach($cur as $singleCur){
                $prefix = "set" . ucfirst($singleCur->symbol);
                $currency->$prefix($singleCur->amount);

            }
        }
        $entityManager->persist($currency);
        $entityManager->flush();

        return true;
    }

}