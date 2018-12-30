<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'condidat' => array(array('id'), array('_controller' => 'App\\Controller\\CondidatController::index'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/condidat')), array(), array()),
        'profile' => array(array(), array('_controller' => 'App\\Controller\\CondidatController::showProfile'), array(), array(array('text', '/profile')), array(), array()),
        'editProfile' => array(array('id'), array('_controller' => 'App\\Controller\\CondidatController::editProfile'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/profile/edit')), array(), array()),
        'supprimerFormation' => array(array('id', 'id_user'), array('_controller' => 'App\\Controller\\CondidatController::supprimerinformation'), array(), array(array('variable', '/', '[^/]++', 'id_user', true), array('variable', '/', '[^/]++', 'id', true), array('text', '/supprimeformation')), array(), array()),
        'allCv' => array(array(), array('_controller' => 'App\\Controller\\CondidatController::allCv'), array(), array(array('text', '/allCv')), array(), array()),
        'supprimerlangue' => array(array('id', 'id_user'), array('_controller' => 'App\\Controller\\CondidatController::supprimerlangue'), array(), array(array('variable', '/', '[^/]++', 'id_user', true), array('variable', '/', '[^/]++', 'id', true), array('text', '/supprimelangue')), array(), array()),
        'supprimerexperionce' => array(array('id', 'id_user'), array('_controller' => 'App\\Controller\\CondidatController::supprimerexperionce'), array(), array(array('variable', '/', '[^/]++', 'id_user', true), array('variable', '/', '[^/]++', 'id', true), array('text', '/supprimerexperionce')), array(), array()),
        'cv' => array(array('id'), array('_controller' => 'App\\Controller\\CondidatController::cv'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/cv')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\CondidatController::home'), array(), array(array('text', '/')), array(), array()),
        'cv_index' => array(array(), array('_controller' => 'App\\Controller\\CvController::index'), array(), array(array('text', '/cv/')), array(), array()),
        'cv_new' => array(array(), array('_controller' => 'App\\Controller\\CvController::new'), array(), array(array('text', '/cv/new')), array(), array()),
        'cv_show' => array(array('id'), array('_controller' => 'App\\Controller\\CvController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/cv')), array(), array()),
        'cv_edit' => array(array('id'), array('_controller' => 'App\\Controller\\CvController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/cv')), array(), array()),
        'cv_delete' => array(array('id'), array('_controller' => 'App\\Controller\\CvController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/cv')), array(), array()),
        'experience_index' => array(array(), array('_controller' => 'App\\Controller\\ExperienceController::index'), array(), array(array('text', '/experience/')), array(), array()),
        'experience_new' => array(array('id'), array('_controller' => 'App\\Controller\\ExperienceController::newExp'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/experience/newExperience')), array(), array()),
        'experience_show' => array(array('id'), array('_controller' => 'App\\Controller\\ExperienceController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/experience')), array(), array()),
        'experience_edit' => array(array('id'), array('_controller' => 'App\\Controller\\ExperienceController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/experience')), array(), array()),
        'experience_delete' => array(array('id'), array('_controller' => 'App\\Controller\\ExperienceController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/experience')), array(), array()),
        'formation_index' => array(array(), array('_controller' => 'App\\Controller\\FormationController::index'), array(), array(array('text', '/formation/')), array(), array()),
        'formation_new' => array(array('id'), array('_controller' => 'App\\Controller\\FormationController::newform'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/formation/newform')), array(), array()),
        'formation_show' => array(array('id'), array('_controller' => 'App\\Controller\\FormationController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/formation')), array(), array()),
        'formation_edit' => array(array('id'), array('_controller' => 'App\\Controller\\FormationController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/formation')), array(), array()),
        'formation_delete' => array(array('id'), array('_controller' => 'App\\Controller\\FormationController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/formation')), array(), array()),
        'langue_index' => array(array(), array('_controller' => 'App\\Controller\\LangueController::index'), array(), array(array('text', '/langue/')), array(), array()),
        'langue_new' => array(array('id'), array('_controller' => 'App\\Controller\\LangueController::newLangue'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/langue/newLangue')), array(), array()),
        'langue_show' => array(array('id'), array('_controller' => 'App\\Controller\\LangueController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/langue')), array(), array()),
        'langue_edit' => array(array('id'), array('_controller' => 'App\\Controller\\LangueController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/langue')), array(), array()),
        'langue_delete' => array(array('id'), array('_controller' => 'App\\Controller\\LangueController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/langue')), array(), array()),
        'security_registration' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::registration'), array(), array(array('text', '/inscription')), array(), array()),
        'security_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/connexion')), array(), array()),
        'security_logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logout'), array(), array(array('text', '/\\deconnexion')), array(), array()),
        'user_index' => array(array(), array('_controller' => 'App\\Controller\\UserController::index'), array(), array(array('text', '/user/')), array(), array()),
        'user_new' => array(array(), array('_controller' => 'App\\Controller\\UserController::new'), array(), array(array('text', '/user/new')), array(), array()),
        'user_show' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/user')), array(), array()),
        'user_edit' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::editProfil'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/useredit')), array(), array()),
        'user_delete' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/user')), array(), array()),
        'updateAvatar' => array(array('id'), array('_controller' => 'App\\Controller\\UserController::updateAvatr'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/user/updateAvatar')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
