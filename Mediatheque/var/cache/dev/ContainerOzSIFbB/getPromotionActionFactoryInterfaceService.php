<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Component\Core\Factory\PromotionActionFactoryInterface' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Factory/PromotionActionFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Factory/PromotionActionFactory.php';

return $this->services['Sylius\Component\Core\Factory\PromotionActionFactoryInterface'] = new \Sylius\Component\Core\Factory\PromotionActionFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Promotion\\PromotionAction'));
