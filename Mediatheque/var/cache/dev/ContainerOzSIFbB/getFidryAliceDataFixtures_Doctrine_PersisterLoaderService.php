<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fidry_alice_data_fixtures.doctrine.persister_loader' shared service.

include_once $this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/LoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/Persistence/PersisterAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/nelmio/alice/src/IsAServiceTrait.php';
include_once $this->targetDirs[3].'/vendor/theofidry/alice-data-fixtures/src/Loader/PersisterLoader.php';

if ($lazyLoad) {
    return $this->privates['fidry_alice_data_fixtures.doctrine.persister_loader'] = $this->createProxy('PersisterLoader_c8a8e24', function () {
        return \PersisterLoader_c8a8e24::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getFidryAliceDataFixtures_Doctrine_PersisterLoaderService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Fidry\AliceDataFixtures\Loader\PersisterLoader(($this->privates['fidry_alice_data_fixtures.loader.simple'] ?? $this->load('getFidryAliceDataFixtures_Loader_SimpleService.php')), ($this->services['fidry_alice_data_fixtures.persistence.persister.doctrine'] ?? $this->load('getFidryAliceDataFixtures_Persistence_Persister_DoctrineService.php')), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), []);
