<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/profile' => array(array(array('_route' => 'profile', '_controller' => 'App\\Controller\\CondidatController::showProfile'), null, null, null, false, null)),
            '/allCv' => array(array(array('_route' => 'allCv', '_controller' => 'App\\Controller\\CondidatController::allCv'), null, null, null, false, null)),
            '/' => array(array(array('_route' => 'home', '_controller' => 'App\\Controller\\CondidatController::home'), null, null, null, false, null)),
            '/cv' => array(array(array('_route' => 'cv_index', '_controller' => 'App\\Controller\\CvController::index'), null, array('GET' => 0), null, true, null)),
            '/experience' => array(array(array('_route' => 'experience_index', '_controller' => 'App\\Controller\\ExperienceController::index'), null, array('GET' => 0), null, true, null)),
            '/formation' => array(array(array('_route' => 'formation_index', '_controller' => 'App\\Controller\\FormationController::index'), null, array('GET' => 0), null, true, null)),
            '/langue' => array(array(array('_route' => 'langue_index', '_controller' => 'App\\Controller\\LangueController::index'), null, array('GET' => 0), null, true, null)),
            '/inscription' => array(array(array('_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'), null, null, null, false, null)),
            '/connexion' => array(array(array('_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null, false, null)),
            '/\\deconnexion' => array(array(array('_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null, false, null)),
            '/user' => array(array(array('_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'), null, array('GET' => 0), null, true, null)),
            '/user/new' => array(array(array('_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/c(?'
                        .'|ondidat/([^/]++)(*:28)'
                        .'|v/(?'
                            .'|([^/]++)(*:48)'
                            .'|new(*:58)'
                            .'|([^/]++)(?'
                                .'|(*:76)'
                                .'|/edit(*:88)'
                                .'|(*:95)'
                            .')'
                        .')'
                    .')'
                    .'|/profile/edit/([^/]++)(*:127)'
                    .'|/supprime(?'
                        .'|formation/([^/]++)/([^/]++)(*:174)'
                        .'|langue/([^/]++)/([^/]++)(*:206)'
                        .'|rexperionce/([^/]++)/([^/]++)(*:243)'
                    .')'
                    .'|/experience/(?'
                        .'|newExperience/([^/]++)(*:289)'
                        .'|([^/]++)(?'
                            .'|(*:308)'
                            .'|/edit(*:321)'
                            .'|(*:329)'
                        .')'
                    .')'
                    .'|/formation/(?'
                        .'|newform/([^/]++)(*:369)'
                        .'|([^/]++)(?'
                            .'|(*:388)'
                            .'|/edit(*:401)'
                            .'|(*:409)'
                        .')'
                    .')'
                    .'|/langue/(?'
                        .'|newLangue/([^/]++)(*:448)'
                        .'|([^/]++)(?'
                            .'|(*:467)'
                            .'|/edit(*:480)'
                            .'|(*:488)'
                        .')'
                    .')'
                    .'|/user(?'
                        .'|/(?'
                            .'|([^/]++)(?'
                                .'|(*:521)'
                            .')'
                            .'|updateAvatar/([^/]++)(*:551)'
                        .')'
                        .'|edit/([^/]++)(*:573)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:613)'
                        .'|wdt/([^/]++)(*:633)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:679)'
                                .'|router(*:693)'
                                .'|exception(?'
                                    .'|(*:713)'
                                    .'|\\.css(*:726)'
                                .')'
                            .')'
                            .'|(*:736)'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            28 => array(array(array('_route' => 'condidat', '_controller' => 'App\\Controller\\CondidatController::index'), array('id'), null, null, false, null)),
            48 => array(array(array('_route' => 'cv', '_controller' => 'App\\Controller\\CondidatController::cv'), array('id'), null, null, false, null)),
            58 => array(array(array('_route' => 'cv_new', '_controller' => 'App\\Controller\\CvController::new'), array(), array('GET' => 0, 'POST' => 1), null, false, null)),
            76 => array(array(array('_route' => 'cv_show', '_controller' => 'App\\Controller\\CvController::show'), array('id'), array('GET' => 0), null, false, null)),
            88 => array(array(array('_route' => 'cv_edit', '_controller' => 'App\\Controller\\CvController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            95 => array(array(array('_route' => 'cv_delete', '_controller' => 'App\\Controller\\CvController::delete'), array('id'), array('DELETE' => 0), null, false, null)),
            127 => array(array(array('_route' => 'editProfile', '_controller' => 'App\\Controller\\CondidatController::editProfile'), array('id'), null, null, false, null)),
            174 => array(array(array('_route' => 'supprimerFormation', '_controller' => 'App\\Controller\\CondidatController::supprimerinformation'), array('id', 'id_user'), null, null, false, null)),
            206 => array(array(array('_route' => 'supprimerlangue', '_controller' => 'App\\Controller\\CondidatController::supprimerlangue'), array('id', 'id_user'), null, null, false, null)),
            243 => array(array(array('_route' => 'supprimerexperionce', '_controller' => 'App\\Controller\\CondidatController::supprimerexperionce'), array('id', 'id_user'), null, null, false, null)),
            289 => array(array(array('_route' => 'experience_new', '_controller' => 'App\\Controller\\ExperienceController::newExp'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            308 => array(array(array('_route' => 'experience_show', '_controller' => 'App\\Controller\\ExperienceController::show'), array('id'), array('GET' => 0), null, false, null)),
            321 => array(array(array('_route' => 'experience_edit', '_controller' => 'App\\Controller\\ExperienceController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            329 => array(array(array('_route' => 'experience_delete', '_controller' => 'App\\Controller\\ExperienceController::delete'), array('id'), array('DELETE' => 0), null, false, null)),
            369 => array(array(array('_route' => 'formation_new', '_controller' => 'App\\Controller\\FormationController::newform'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            388 => array(array(array('_route' => 'formation_show', '_controller' => 'App\\Controller\\FormationController::show'), array('id'), array('GET' => 0), null, false, null)),
            401 => array(array(array('_route' => 'formation_edit', '_controller' => 'App\\Controller\\FormationController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            409 => array(array(array('_route' => 'formation_delete', '_controller' => 'App\\Controller\\FormationController::delete'), array('id'), array('DELETE' => 0), null, false, null)),
            448 => array(array(array('_route' => 'langue_new', '_controller' => 'App\\Controller\\LangueController::newLangue'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            467 => array(array(array('_route' => 'langue_show', '_controller' => 'App\\Controller\\LangueController::show'), array('id'), array('GET' => 0), null, false, null)),
            480 => array(array(array('_route' => 'langue_edit', '_controller' => 'App\\Controller\\LangueController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            488 => array(array(array('_route' => 'langue_delete', '_controller' => 'App\\Controller\\LangueController::delete'), array('id'), array('DELETE' => 0), null, false, null)),
            521 => array(
                array(array('_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'), array('id'), array('GET' => 0), null, false, null),
                array(array('_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'), array('id'), array('DELETE' => 0), null, false, null),
            ),
            551 => array(array(array('_route' => 'updateAvatar', '_controller' => 'App\\Controller\\UserController::updateAvatr'), array('id'), null, null, false, null)),
            573 => array(array(array('_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::editProfil'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            613 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            633 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            679 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            693 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            713 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            726 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            736 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
        );
    }
}
