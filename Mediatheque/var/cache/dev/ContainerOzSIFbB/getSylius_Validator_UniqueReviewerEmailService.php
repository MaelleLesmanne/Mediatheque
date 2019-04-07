<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.validator.unique_reviewer_email' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/validator/ConstraintValidator.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/CoreBundle/Validator/Constraints/UniqueReviewerEmailValidator.php';

return $this->services['sylius.validator.unique_reviewer_email'] = new \Sylius\Bundle\CoreBundle\Validator\Constraints\UniqueReviewerEmailValidator(($this->services['sylius.repository.shop_user'] ?? $this->load('getSylius_Repository_ShopUserService.php')), ($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
