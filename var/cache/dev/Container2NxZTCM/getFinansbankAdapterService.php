<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Adapter\FinansbankAdapter' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Repository/ICurrency.php';
include_once $this->targetDirs[3].'/src/Adapter/FinansbankAdapter.php';

$this->services['App\\Adapter\\FinansbankAdapter'] = $instance = new \App\Adapter\FinansbankAdapter();

$instance->setContainer(($this->privates['.service_locator.KTVqfp6'] ?? $this->load('get_ServiceLocator_KTVqfp6Service.php'))->withContext('App\\Adapter\\FinansbankAdapter', $this));

return $instance;
