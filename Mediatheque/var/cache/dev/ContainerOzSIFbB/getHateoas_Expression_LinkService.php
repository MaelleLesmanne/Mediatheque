<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hateoas.expression.link' shared service.

include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Expression/ExpressionFunctionInterface.php';
include_once $this->targetDirs[3].'/vendor/willdurand/hateoas/src/Hateoas/Expression/LinkExpressionFunction.php';

return $this->services['hateoas.expression.link'] = new \Hateoas\Expression\LinkExpressionFunction(($this->services['hateoas.helper.link'] ?? $this->getHateoas_Helper_LinkService()));
