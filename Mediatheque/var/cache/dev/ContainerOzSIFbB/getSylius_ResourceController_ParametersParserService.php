<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.resource_controller.parameters_parser' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/ParametersParserInterface.php';
include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/ResourceBundle/Controller/ParametersParser.php';

return $this->privates['sylius.resource_controller.parameters_parser'] = new \Sylius\Bundle\ResourceBundle\Controller\ParametersParser($this, ($this->privates['sylius.expression_language'] ?? ($this->privates['sylius.expression_language'] = new \Sylius\Bundle\ResourceBundle\ExpressionLanguage\ExpressionLanguage())));
