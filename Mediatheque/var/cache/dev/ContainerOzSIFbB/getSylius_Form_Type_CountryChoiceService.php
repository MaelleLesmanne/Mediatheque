<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.country_choice' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/AddressingBundle/Form/Type/CountryChoiceType.php';

return $this->services['sylius.form.type.country_choice'] = new \Sylius\Bundle\AddressingBundle\Form\Type\CountryChoiceType(($this->services['sylius.repository.country'] ?? $this->load('getSylius_Repository_CountryService.php')));