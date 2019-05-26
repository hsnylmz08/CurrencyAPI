<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Repository\Finansbank;

class CurrencyController extends Controller
{
    /**
     * @Route("/")
     */
    public function finans()
    {
        $finansBank = new Finansbank();
        $v = $finansBank->restEndPointCheck();
        return new Response(
            '<html><body>Lucky number: '.$v.'</body></html>'
        );
    }
}