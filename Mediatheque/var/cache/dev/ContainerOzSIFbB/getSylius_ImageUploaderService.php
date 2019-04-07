<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.image_uploader' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Uploader/ImageUploaderInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Component/Core/Uploader/ImageUploader.php';
include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/FilesystemInterface.php';
include_once $this->targetDirs[3].'/vendor/knplabs/gaufrette/src/Gaufrette/Filesystem.php';

return $this->services['sylius.image_uploader'] = new \Sylius\Component\Core\Uploader\ImageUploader(($this->services['knp_gaufrette.filesystem_map'] ?? $this->load('getKnpGaufrette_FilesystemMapService.php'))->get('sylius_image'));
