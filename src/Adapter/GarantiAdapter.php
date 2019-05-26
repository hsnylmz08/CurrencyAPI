<?php

namespace App\Adapter;

use App\Repository\ICurrency;
use App\Entity\Garanti;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;
use App\Repository\CurrencyRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class GarantiAdapter extends AbstractController implements ICurrency{

    private $restURL;
    private $CurrencyRequest; 
    private $Garanti;
    public function __construct(){
        $this->restURL = "http://www.mocky.io/v2/5a74524e2d0000430bfe0fa3";
        $this->Garanti = new Garanti();
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
        $data = $currencies;
        $currency = new Garanti();
        $currencyArray = [
            "USDTRY" => "usd","EURTRY" => "euro","GBPTRY" => "gbp"
        ];
        $entityManager = $this->getDoctrine()->getManager();

        foreach($data as $cur){
            
                $prefix = "set" . ucfirst($cur->kod);
                $currency->$prefix($cur->oran);

            
        }
        $entityManager->persist($currency);
        $entityManager->flush();

        return true;
    }

}