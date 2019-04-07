<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.data_transformer.taxons_to_codes' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/DataTransformerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/DataTransformer/TaxonsToCodesTransformer.php';

return $this->services['sylius.form.type.data_transformer.taxons_to_codes'] = new \Sylius\Bundle\CoreBundle\Form\DataTransformer\TaxonsToCodesTransformer(($this->services['sylius.repository.taxon'] ?? $this->load('getSylius_Repository_TaxonService.php')));
