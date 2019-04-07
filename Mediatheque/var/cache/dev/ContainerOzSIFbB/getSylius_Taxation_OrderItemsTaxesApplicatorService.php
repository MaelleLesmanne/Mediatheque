<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.taxation.order_items_taxes_applicator' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Taxation/Applicator/OrderTaxesApplicatorInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Taxation/Applicator/OrderItemsTaxesApplicator.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Distributor/IntegerDistributorInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Distributor/IntegerDistributor.php';

return $this->services['sylius.taxation.order_items_taxes_applicator'] = new \Sylius\Component\Core\Taxation\Applicator\OrderItemsTaxesApplicator(($this->services['sylius.tax_calculator'] ?? $this->load('getSylius_TaxCalculatorService.php')), ($this->services['Sylius\Component\Order\Factory\AdjustmentFactoryInterface'] ?? $this->load('getAdjustmentFactoryInterfaceService.php')), ($this->services['sylius.integer_distributor'] ?? ($this->services['sylius.integer_distributor'] = new \Sylius\Component\Core\Distributor\IntegerDistributor())), ($this->services['sylius.tax_rate_resolver'] ?? $this->load('getSylius_TaxRateResolverService.php')));
