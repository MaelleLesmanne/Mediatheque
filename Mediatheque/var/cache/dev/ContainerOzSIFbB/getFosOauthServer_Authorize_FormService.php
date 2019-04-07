<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.authorize.form' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/ClearableErrorsInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/Form.php';

return ($this->services['form.factory'] ?? $this->getForm_FactoryService())->createNamed('fos_oauth_server_authorize_form', 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType', NULL, ['validation_groups' => $this->parameters['fos_oauth_server.authorize.form.validation_groups']]);
