<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.listener.admin_user_delete' shared service.

include_once $this->targetDirs[3].'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/EventListener/UserDeleteListener.php';

return $this->privates['sylius.listener.admin_user_delete'] = new \Sylius\Bundle\UserBundle\EventListener\UserDeleteListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->services['session'] ?? $this->getSessionService()));
