<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Component\Product\Factory\ProductVariantFactoryInterface' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Product/Factory/ProductVariantFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Product/Factory/ProductVariantFactory.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Resource/Factory/TranslatableFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Resource/Factory/TranslatableFactory.php';

return $this->services['Sylius\Component\Product\Factory\ProductVariantFactoryInterface'] = new \Sylius\Component\Product\Factory\ProductVariantFactory(new \Sylius\Component\Resource\Factory\TranslatableFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Product\\ProductVariant'), ($this->services['sylius.translation_locale_provider.admin'] ?? $this->getSylius_TranslationLocaleProvider_AdminService())));
