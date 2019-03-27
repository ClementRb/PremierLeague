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
            '/login' => array(array(array('_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/login_check' => array(array(array('_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'), null, array('POST' => 0), null, false, false, null)),
            '/logout' => array(array(array('_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/profile' => array(array(array('_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'), null, array('GET' => 0), null, true, false, null)),
            '/profile/edit' => array(array(array('_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/register' => array(array(array('_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'), null, array('GET' => 0, 'POST' => 1), null, true, false, null)),
            '/register/check-email' => array(array(array('_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'), null, array('GET' => 0), null, false, false, null)),
            '/register/confirmed' => array(array(array('_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'), null, array('GET' => 0), null, false, false, null)),
            '/resetting/request' => array(array(array('_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'), null, array('GET' => 0), null, false, false, null)),
            '/resetting/send-email' => array(array(array('_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'), null, array('POST' => 0), null, false, false, null)),
            '/resetting/check-email' => array(array(array('_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'), null, array('GET' => 0), null, false, false, null)),
            '/profile/change-password' => array(array(array('_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'), null, array('GET' => 0, 'POST' => 1), null, false, false, null)),
            '/' => array(array(array('_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'), null, null, null, false, false, null)),
            '/teams' => array(array(array('_route' => 'getTeams', '_controller' => 'App\\Controller\\TeamController::getTeams'), null, null, null, false, false, null)),
            '/teams/add' => array(array(array('_route' => 'addTeams', '_controller' => 'App\\Controller\\TeamController::addTeams'), null, null, null, false, false, null)),
            '/players' => array(array(array('_route' => 'getPlayers', '_controller' => 'App\\Controller\\PlayerController::getPlayers'), null, null, null, false, false, null)),
            '/players/add' => array(array(array('_route' => 'addPlayers', '_controller' => 'App\\Controller\\PlayerController::addPlayers'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/re(?'
                        .'|gister/confirm/([^/]++)(*:36)'
                        .'|setting/reset/([^/]++)(*:65)'
                    .')'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:101)'
                    .'|/teams/([^/]++)(*:124)'
                    .'|/players/([^/]++)/(?'
                        .'|delete(*:159)'
                        .'|edit(*:171)'
                    .')'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            36 => array(array(array('_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'), array('token'), array('GET' => 0), null, false, true, null)),
            65 => array(array(array('_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null, false, true, null)),
            101 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
            124 => array(array(array('_route' => 'TeamProfile', '_controller' => 'App\\Controller\\TeamController::getOneTeam'), array('id'), null, null, false, true, null)),
            159 => array(array(array('_route' => 'DeletePlayer', '_controller' => 'App\\Controller\\PlayerController::deletePlayer'), array('id'), null, null, false, false, null)),
            171 => array(array(array('_route' => 'EditPlayer', '_controller' => 'App\\Controller\\PlayerController::editPlayer'), array('id'), null, null, false, false, null)),
        );
    }
}
