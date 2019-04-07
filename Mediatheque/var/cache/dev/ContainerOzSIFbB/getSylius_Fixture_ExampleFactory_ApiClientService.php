<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.fixture.example_factory.api_client' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AdminApiBundle/Fixture/Factory/ApiClientExampleFactory.php';

return $this->services['sylius.fixture.example_factory.api_client'] = new \Sylius\Bundle\AdminApiBundle\Fixture\Factory\ApiClientExampleFactory(($this->privates['fos_oauth_server.client_manager.default'] ?? $this->load('getFosOauthServer_ClientManager_DefaultService.php')));
