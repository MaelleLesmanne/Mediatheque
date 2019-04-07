<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.product' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Form/Type/AbstractResourceType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ProductBundle/Form/Type/ProductType.php';

return $this->services['sylius.form.type.product'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductType('App\\Entity\\Product\\Product', $this->parameters['sylius.form.type.product.validation_groups'], ($this->services['sylius.product_variant_resolver.default'] ?? ($this->services['sylius.product_variant_resolver.default'] = new \Sylius\Component\Product\Resolver\DefaultProductVariantResolver())), ($this->services['sylius.factory.product_attribute_value'] ?? ($this->services['sylius.factory.product_attribute_value'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Product\\ProductAttributeValue'))), ($this->services['sylius.translation_locale_provider.admin'] ?? $this->getSylius_TranslationLocaleProvider_AdminService()));