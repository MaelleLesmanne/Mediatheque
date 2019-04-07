<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.promotion_filter.price_range' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Filter/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Promotion/Filter/PriceRangeFilter.php';

return $this->services['sylius.promotion_filter.price_range'] = new \Sylius\Component\Core\Promotion\Filter\PriceRangeFilter(($this->services['sylius.calculator.product_variant_price'] ?? ($this->services['sylius.calculator.product_variant_price'] = new \Sylius\Component\Core\Calculator\ProductVariantPriceCalculator())));
