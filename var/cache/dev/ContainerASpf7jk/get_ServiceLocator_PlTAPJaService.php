<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.PlTAPJa' shared service.

return $this->privates['.service_locator.PlTAPJa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'teamRepo' => array('privates', 'App\\Repository\\TeamRepository', NULL, 'Cannot autowire service "App\\Repository\\TeamRepository": argument "$class" of method "Doctrine\\ORM\\EntityRepository::__construct()" references class "Doctrine\\ORM\\Mapping\\ClassMetadata" but no such service exists.'),
));
