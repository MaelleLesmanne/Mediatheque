<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.email_sender.adapter.swiftmailer' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Mailer/Sender/Adapter/AdapterInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Mailer/Sender/Adapter/AbstractAdapter.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/MailerBundle/Sender/Adapter/SwiftMailerAdapter.php';

$this->services['sylius.email_sender.adapter.swiftmailer'] = $instance = new \Sylius\Bundle\MailerBundle\Sender\Adapter\SwiftMailerAdapter(($this->services['swiftmailer.mailer.default'] ?? $this->load('getSwiftmailer_Mailer_DefaultService.php')));

$instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

return $instance;