<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.product_option_value_translation' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Form/Type/ProductOptionValueTranslationType.php';

return $this->services['sylius.form.type.product_option_value_translation'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductOptionValueTranslationType('App\\Entity\\Product\\ProductOptionValueTranslation', $this->parameters['sylius.form.type.product_option_value_translation.validation_groups']);
