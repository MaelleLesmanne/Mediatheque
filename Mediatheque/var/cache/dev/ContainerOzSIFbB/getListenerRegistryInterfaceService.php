<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Bundle\FixturesBundle\Listener\ListenerRegistryInterface' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Listener/ListenerRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Listener/ListenerRegistry.php';
include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Listener/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Listener/AbstractListener.php';
include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Listener/BeforeSuiteListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Listener/ORMPurgerListener.php';
include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Listener/BeforeFixtureListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Listener/LoggerListener.php';

$this->services['Sylius\Bundle\FixturesBundle\Listener\ListenerRegistryInterface'] = $instance = new \Sylius\Bundle\FixturesBundle\Listener\ListenerRegistry();

$instance->addListener(new \Sylius\Bundle\FixturesBundle\Listener\ORMPurgerListener(($this->services['doctrine'] ?? $this->getDoctrineService())));
$instance->addListener(new \Sylius\Bundle\FixturesBundle\Listener\LoggerListener(($this->services['sylius_fixtures.logger'] ?? $this->load('getSyliusFixtures_LoggerService.php'))));

return $instance;
