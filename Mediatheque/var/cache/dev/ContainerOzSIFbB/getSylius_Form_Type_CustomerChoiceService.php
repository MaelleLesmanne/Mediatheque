<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.customer_choice' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CustomerBundle/Form/Type/CustomerChoiceType.php';

return $this->services['sylius.form.type.customer_choice'] = new \Sylius\Bundle\CustomerBundle\Form\Type\CustomerChoiceType(($this->services['sylius.repository.customer'] ?? $this->load('getSylius_Repository_CustomerService.php')));
