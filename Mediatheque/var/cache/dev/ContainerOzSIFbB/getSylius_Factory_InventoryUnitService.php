<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.factory.inventory_unit' shared service.

return $this->services['sylius.factory.inventory_unit'] = new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Order\\OrderItemUnit');