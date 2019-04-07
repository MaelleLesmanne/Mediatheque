<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.fixture.similar_product_association' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Fixture/FixtureInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/fixtures-bundle/src/Fixture/AbstractFixture.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/SimilarProductAssociationFixture.php';

return $this->services['sylius.fixture.similar_product_association'] = new \Sylius\Bundle\CoreBundle\Fixture\SimilarProductAssociationFixture(($this->services['sylius.fixture.product_association_type'] ?? $this->load('getSylius_Fixture_ProductAssociationTypeService.php')), ($this->services['sylius.fixture.product_association'] ?? $this->load('getSylius_Fixture_ProductAssociationService.php')), ($this->services['sylius.repository.product'] ?? $this->load('getSylius_Repository_ProductService.php')));
