<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.promotion_action.filter.taxon' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Form/Type/Promotion/Filter/TaxonFilterConfigurationType.php';

return $this->services['sylius.form.type.promotion_action.filter.taxon'] = new \Sylius\Bundle\CoreBundle\Form\Type\Promotion\Filter\TaxonFilterConfigurationType(($this->services['sylius.form.type.data_transformer.taxons_to_codes'] ?? $this->load('getSylius_Form_Type_DataTransformer_TaxonsToCodesService.php')));
