<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.setup.channel' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Setup/ChannelSetupInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Installer/Setup/ChannelSetup.php';

return $this->services['sylius.setup.channel'] = new \Sylius\Bundle\CoreBundle\Installer\Setup\ChannelSetup(($this->services['sylius.repository.channel'] ?? $this->getSylius_Repository_ChannelService()), ($this->services['Sylius\Component\Channel\Factory\ChannelFactoryInterface'] ?? $this->load('getChannelFactoryInterfaceService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));
