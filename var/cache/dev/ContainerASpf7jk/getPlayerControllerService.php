<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\PlayerController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Controller\\PlayerController.php';

$this->services['App\Controller\PlayerController'] = $instance = new \App\Controller\PlayerController();

$instance->setContainer(($this->privates['.service_locator.KTVqfp6'] ?? $this->load('get_ServiceLocator_KTVqfp6Service.php'))->withContext('App\\Controller\\PlayerController', $this));

return $instance;
