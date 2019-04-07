<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.fixture.shipping_method' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/AbstractResourceFixture.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/ShippingMethodFixture.php';

return $this->services['sylius.fixture.shipping_method'] = new \Sylius\Bundle\CoreBundle\Fixture\ShippingMethodFixture(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['sylius.fixture.example_factory.shipping_method'] ?? $this->load('getSylius_Fixture_ExampleFactory_ShippingMethodService.php')));
