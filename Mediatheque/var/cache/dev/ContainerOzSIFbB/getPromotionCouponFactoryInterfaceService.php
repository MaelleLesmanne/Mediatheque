<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Component\Promotion\Factory\PromotionCouponFactoryInterface' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Factory/PromotionCouponFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Factory/PromotionCouponFactory.php';

return $this->services['Sylius\Component\Promotion\Factory\PromotionCouponFactoryInterface'] = new \Sylius\Component\Promotion\Factory\PromotionCouponFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Promotion\\PromotionCoupon'));
