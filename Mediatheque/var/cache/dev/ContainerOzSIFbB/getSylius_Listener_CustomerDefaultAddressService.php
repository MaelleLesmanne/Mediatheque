<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.listener.customer_default_address' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/EventListener/CustomerDefaultAddressListener.php';

return $this->services['sylius.listener.customer_default_address'] = new \Sylius\Bundle\CoreBundle\EventListener\CustomerDefaultAddressListener();
