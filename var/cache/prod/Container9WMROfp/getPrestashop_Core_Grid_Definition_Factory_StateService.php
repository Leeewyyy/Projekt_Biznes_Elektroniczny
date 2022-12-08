<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.state' shared service.

$this->services['prestashop.core.grid.definition.factory.state'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\StateGridDefinitionFactory(($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php'))->generate("admin_common_reset_search", ["controller" => "state", "action" => "index"]), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php'))->generate("admin_states_index"));

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;