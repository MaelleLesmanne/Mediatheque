<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.shipping_method_resolver.default' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Shipping/Resolver/DefaultShippingMethodResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Resolver/EligibleDefaultShippingMethodResolver.php';

return $this->services['sylius.shipping_method_resolver.default'] = new \Sylius\Component\Core\Resolver\EligibleDefaultShippingMethodResolver(($this->services['sylius.repository.shipping_method'] ?? $this->getSylius_Repository_ShippingMethodService()), ($this->services['sylius.shipping_eligibility_checker'] ?? ($this->services['sylius.shipping_eligibility_checker'] = new \Sylius\Component\Shipping\Checker\ShippingMethodEligibilityChecker())), ($this->services['sylius.zone_matcher'] ?? $this->getSylius_ZoneMatcherService()));
