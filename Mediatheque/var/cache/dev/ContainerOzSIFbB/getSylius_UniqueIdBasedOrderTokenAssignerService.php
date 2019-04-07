<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.unique_id_based_order_token_assigner' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/TokenAssigner/OrderTokenAssignerInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/TokenAssigner/UniqueIdBasedOrderTokenAssigner.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Resource/Generator/RandomnessGeneratorInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Resource/Generator/RandomnessGenerator.php';

return $this->services['sylius.unique_id_based_order_token_assigner'] = new \Sylius\Component\Core\TokenAssigner\UniqueIdBasedOrderTokenAssigner(($this->services['sylius.random_generator'] ?? ($this->services['sylius.random_generator'] = new \Sylius\Component\Resource\Generator\RandomnessGenerator())));
