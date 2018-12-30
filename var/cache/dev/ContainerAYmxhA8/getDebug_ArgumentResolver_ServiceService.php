<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'App\\Controller\\CondidatController::editProfile' => array('privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true),
    'App\\Controller\\CvController::delete' => array('privates', '.service_locator.ZHe.ZaR', 'get_ServiceLocator_ZHe_ZaRService.php', true),
    'App\\Controller\\CvController::edit' => array('privates', '.service_locator.ZHe.ZaR', 'get_ServiceLocator_ZHe_ZaRService.php', true),
    'App\\Controller\\CvController::index' => array('privates', '.service_locator.GtitT4t', 'get_ServiceLocator_GtitT4tService.php', true),
    'App\\Controller\\CvController::show' => array('privates', '.service_locator.ZHe.ZaR', 'get_ServiceLocator_ZHe_ZaRService.php', true),
    'App\\Controller\\ExperienceController::delete' => array('privates', '.service_locator.zBOqTb5', 'get_ServiceLocator_ZBOqTb5Service.php', true),
    'App\\Controller\\ExperienceController::edit' => array('privates', '.service_locator.zBOqTb5', 'get_ServiceLocator_ZBOqTb5Service.php', true),
    'App\\Controller\\ExperienceController::index' => array('privates', '.service_locator.4eW7lcb', 'get_ServiceLocator_4eW7lcbService.php', true),
    'App\\Controller\\ExperienceController::show' => array('privates', '.service_locator.zBOqTb5', 'get_ServiceLocator_ZBOqTb5Service.php', true),
    'App\\Controller\\FormationController::delete' => array('privates', '.service_locator.nC7OEZ.', 'get_ServiceLocator_NC7OEZ_Service.php', true),
    'App\\Controller\\FormationController::edit' => array('privates', '.service_locator.nC7OEZ.', 'get_ServiceLocator_NC7OEZ_Service.php', true),
    'App\\Controller\\FormationController::index' => array('privates', '.service_locator.jbZn_fJ', 'get_ServiceLocator_JbZnFJService.php', true),
    'App\\Controller\\FormationController::show' => array('privates', '.service_locator.nC7OEZ.', 'get_ServiceLocator_NC7OEZ_Service.php', true),
    'App\\Controller\\LangueController::delete' => array('privates', '.service_locator.opAr.iH', 'get_ServiceLocator_OpAr_IHService.php', true),
    'App\\Controller\\LangueController::edit' => array('privates', '.service_locator.opAr.iH', 'get_ServiceLocator_OpAr_IHService.php', true),
    'App\\Controller\\LangueController::index' => array('privates', '.service_locator.hkFXrRu', 'get_ServiceLocator_HkFXrRuService.php', true),
    'App\\Controller\\LangueController::show' => array('privates', '.service_locator.opAr.iH', 'get_ServiceLocator_OpAr_IHService.php', true),
    'App\\Controller\\SecurityController::registration' => array('privates', '.service_locator.czKK4py', 'get_ServiceLocator_CzKK4pyService.php', true),
    'App\\Controller\\UserController::delete' => array('privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true),
    'App\\Controller\\UserController::editProfil' => array('privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true),
    'App\\Controller\\UserController::index' => array('privates', '.service_locator.JkextnA', 'get_ServiceLocator_JkextnAService.php', true),
    'App\\Controller\\UserController::show' => array('privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true),
    'App\\Controller\\CondidatController:editProfile' => array('privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true),
    'App\\Controller\\CvController:delete' => array('privates', '.service_locator.ZHe.ZaR', 'get_ServiceLocator_ZHe_ZaRService.php', true),
    'App\\Controller\\CvController:edit' => array('privates', '.service_locator.ZHe.ZaR', 'get_ServiceLocator_ZHe_ZaRService.php', true),
    'App\\Controller\\CvController:index' => array('privates', '.service_locator.GtitT4t', 'get_ServiceLocator_GtitT4tService.php', true),
    'App\\Controller\\CvController:show' => array('privates', '.service_locator.ZHe.ZaR', 'get_ServiceLocator_ZHe_ZaRService.php', true),
    'App\\Controller\\ExperienceController:delete' => array('privates', '.service_locator.zBOqTb5', 'get_ServiceLocator_ZBOqTb5Service.php', true),
    'App\\Controller\\ExperienceController:edit' => array('privates', '.service_locator.zBOqTb5', 'get_ServiceLocator_ZBOqTb5Service.php', true),
    'App\\Controller\\ExperienceController:index' => array('privates', '.service_locator.4eW7lcb', 'get_ServiceLocator_4eW7lcbService.php', true),
    'App\\Controller\\ExperienceController:show' => array('privates', '.service_locator.zBOqTb5', 'get_ServiceLocator_ZBOqTb5Service.php', true),
    'App\\Controller\\FormationController:delete' => array('privates', '.service_locator.nC7OEZ.', 'get_ServiceLocator_NC7OEZ_Service.php', true),
    'App\\Controller\\FormationController:edit' => array('privates', '.service_locator.nC7OEZ.', 'get_ServiceLocator_NC7OEZ_Service.php', true),
    'App\\Controller\\FormationController:index' => array('privates', '.service_locator.jbZn_fJ', 'get_ServiceLocator_JbZnFJService.php', true),
    'App\\Controller\\FormationController:show' => array('privates', '.service_locator.nC7OEZ.', 'get_ServiceLocator_NC7OEZ_Service.php', true),
    'App\\Controller\\LangueController:delete' => array('privates', '.service_locator.opAr.iH', 'get_ServiceLocator_OpAr_IHService.php', true),
    'App\\Controller\\LangueController:edit' => array('privates', '.service_locator.opAr.iH', 'get_ServiceLocator_OpAr_IHService.php', true),
    'App\\Controller\\LangueController:index' => array('privates', '.service_locator.hkFXrRu', 'get_ServiceLocator_HkFXrRuService.php', true),
    'App\\Controller\\LangueController:show' => array('privates', '.service_locator.opAr.iH', 'get_ServiceLocator_OpAr_IHService.php', true),
    'App\\Controller\\SecurityController:registration' => array('privates', '.service_locator.czKK4py', 'get_ServiceLocator_CzKK4pyService.php', true),
    'App\\Controller\\UserController:delete' => array('privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true),
    'App\\Controller\\UserController:editProfil' => array('privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true),
    'App\\Controller\\UserController:index' => array('privates', '.service_locator.JkextnA', 'get_ServiceLocator_JkextnAService.php', true),
    'App\\Controller\\UserController:show' => array('privates', '.service_locator.wypGnUQ', 'get_ServiceLocator_WypGnUQService.php', true),
))), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
