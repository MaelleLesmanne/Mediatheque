<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'knp_gaufrette.command.filesystem_keys' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[3].'/vendor/knplabs/knp-gaufrette-bundle/Command/FilesystemKeysCommand.php';

$this->privates['knp_gaufrette.command.filesystem_keys'] = $instance = new \Knp\Bundle\GaufretteBundle\Command\FilesystemKeysCommand();

$instance->setName('gaufrette:filesystem:keys');

return $instance;
