<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.taxation.order_item_units_based_strategy' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Taxation/Strategy/TaxCalculationStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Taxation/Strategy/TaxCalculationStrategy.php';

return $this->services['sylius.taxation.order_item_units_based_strategy'] = new \Sylius\Bundle\CoreBundle\Taxation\Strategy\TaxCalculationStrategy('order_item_units_based', [0 => ($this->services['sylius.taxation.order_item_units_taxes_applicator'] ?? $this->load('getSylius_Taxation_OrderItemUnitsTaxesApplicatorService.php')), 1 => ($this->services['sylius.taxation.order_shipment_taxes_applicator'] ?? $this->load('getSylius_Taxation_OrderShipmentTaxesApplicatorService.php'))]);
