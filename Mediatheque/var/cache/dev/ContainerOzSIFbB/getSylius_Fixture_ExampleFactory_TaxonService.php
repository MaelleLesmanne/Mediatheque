<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.fixture.example_factory.taxon' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/ExampleFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/AbstractExampleFactory.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Fixture/Factory/TaxonExampleFactory.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Taxonomy/Generator/TaxonSlugGeneratorInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Taxonomy/Generator/TaxonSlugGenerator.php';

return $this->services['sylius.fixture.example_factory.taxon'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\TaxonExampleFactory(($this->services['Sylius\Component\Taxonomy\Factory\TaxonFactoryInterface'] ?? $this->load('getTaxonFactoryInterfaceService.php')), ($this->services['sylius.repository.taxon'] ?? $this->load('getSylius_Repository_TaxonService.php')), ($this->services['sylius.repository.locale'] ?? $this->getSylius_Repository_LocaleService()), ($this->services['sylius.generator.taxon_slug'] ?? ($this->services['sylius.generator.taxon_slug'] = new \Sylius\Component\Taxonomy\Generator\TaxonSlugGenerator())));