<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Component\Order\Factory\AdjustmentFactoryInterface' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Order/Factory/AdjustmentFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Order/Factory/AdjustmentFactory.php';

return $this->services['Sylius\Component\Order\Factory\AdjustmentFactoryInterface'] = new \Sylius\Component\Order\Factory\AdjustmentFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Order\\Adjustment'));
