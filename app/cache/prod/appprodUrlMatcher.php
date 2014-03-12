<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // login_login_homepage
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::indexAction',  '_route' => 'login_login_homepage',);
        }

        // login_login_signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::signupAction',  '_route' => 'login_login_signup',);
        }

        // login_login_logout
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::homeAction',  '_route' => 'login_login_logout',);
        }

        // login_login_uos
        if ($pathinfo === '/uos') {
            return array (  '_controller' => 'Login\\LoginBundle\\Controller\\DefaultController::uosAction',  '_route' => 'login_login_uos',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
