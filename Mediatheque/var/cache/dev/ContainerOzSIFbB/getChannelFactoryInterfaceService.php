<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sylius\Component\Channel\Factory\ChannelFactoryInterface' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Channel/Factory/ChannelFactoryInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Channel/Factory/ChannelFactory.php';

return $this->services['Sylius\Component\Channel\Factory\ChannelFactoryInterface'] = new \Sylius\Component\Channel\Factory\ChannelFactory(new \Sylius\Component\Resource\Factory\Factory('App\\Entity\\Channel\\Channel'));
