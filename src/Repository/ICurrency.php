<?php

namespace App\Repository;

interface ICurrency{
    

    public function restEndPointCheck() : bool;

    public function getCurrencies();

    public function saveCurrencies() : bool;

    

}