<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.theme.form.type.theme_choice' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/theme-bundle/src/Form/Type/ThemeChoiceType.php';

return $this->privates['sylius.theme.form.type.theme_choice'] = new \Sylius\Bundle\ThemeBundle\Form\Type\ThemeChoiceType(($this->services['sylius.repository.theme'] ?? $this->getSylius_Repository_ThemeService()));
