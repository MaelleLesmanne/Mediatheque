<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.core.model.adapter.chain' shared service.

@trigger_error('The "sonata.core.model.adapter.chain" service is deprecated in favor of service "sonata.doctrine.model.adapter.chain" since 3.12.0 and will be removed in 4.0.', E_USER_DEPRECATED);

$this->services['sonata.core.model.adapter.chain'] = $instance = new \Sonata\CoreBundle\Model\Adapter\AdapterChain();

$instance->addAdapter($this->load('getSonata_Core_Model_Adapter_DoctrineOrmService.php'));

return $instance;
