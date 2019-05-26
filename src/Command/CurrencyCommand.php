<?php

namespace App\Command;
use App\Adapter\FinansbankAdapter;
use App\Adapter\GarantiAdapter;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class CurrencyCommand extends Command
{
    protected function configure()
    {
        $this->setName('currency-install')
            ->setDescription('Get data from rest')
            ->setHelp('Get Data From Rest')
            ->addArgument('bank', InputArgument::REQUIRED, 'name the bank.');;
    }
 
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $adapter = ucfirst($input->getArgument('bank')) . "Adapter";
        $currencyInstaller = new FinansbankAdapter();
        $currencyInstaller->saveCurrencies();
    }
}