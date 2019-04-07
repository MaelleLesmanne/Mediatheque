<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.order_processing.order_prices_recalculator' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Order/Processor/OrderProcessorInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/OrderProcessing/OrderPricesRecalculator.php';

return $this->services['sylius.order_processing.order_prices_recalculator'] = new \Sylius\Component\Core\OrderProcessing\OrderPricesRecalculator(($this->services['sylius.calculator.product_variant_price'] ?? ($this->services['sylius.calculator.product_variant_price'] = new \Sylius\Component\Core\Calculator\ProductVariantPriceCalculator())));
