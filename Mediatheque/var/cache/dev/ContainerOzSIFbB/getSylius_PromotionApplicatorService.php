<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.promotion_applicator' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Action/PromotionApplicatorInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Promotion/Action/PromotionApplicator.php';

return $this->services['sylius.promotion_applicator'] = new \Sylius\Component\Promotion\Action\PromotionApplicator(($this->services['sylius.registry_promotion_action'] ?? $this->load('getSylius_RegistryPromotionActionService.php')));