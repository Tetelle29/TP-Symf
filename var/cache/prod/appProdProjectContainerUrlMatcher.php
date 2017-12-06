<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/monds')) {
            // monds_index
            if (rtrim($pathinfo, '/') === '/monds') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'monds_index');
                }

                return array (  '_controller' => 'MonDSBundle\\Controller\\DefaultController::indexAction',  '_route' => 'monds_index',);
            }

            if (0 === strpos($pathinfo, '/monds/dstp2')) {
                // monds_dstp21
                if ($pathinfo === '/monds/dstp21') {
                    return array (  '_controller' => 'MonDSBundle\\Controller\\DefaultController::dstp21Action',  '_route' => 'monds_dstp21',);
                }

                if (0 === strpos($pathinfo, '/monds/dstp22')) {
                    // monds_dstp22
                    if ($pathinfo === '/monds/dstp22') {
                        return array (  '_controller' => 'MonDSBundle\\Controller\\Dstp22Controller::dstp22Action',  '_route' => 'monds_dstp22',);
                    }

                    // monds_message22
                    if (preg_match('#^/monds/dstp22/(?P<message22>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'monds_message22')), array (  '_controller' => 'MonDSBundle\\Controller\\Dstp22Controller::message22Action',));
                    }

                }

                // monds_dstp23
                if ($pathinfo === '/monds/dstp23') {
                    return array (  '_controller' => 'MonDSBundle\\Controller\\Dstp22Controller::dstp23Action',  '_route' => 'monds_dstp23',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // back_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'back_index');
                }

                return array (  '_controller' => 'BackBundle\\Controller\\DefaultController::indexAction',  '_route' => 'back_index',);
            }

            // back_ip
            if ($pathinfo === '/admin/ip') {
                return array (  '_controller' => 'BackBundle\\Controller\\DefaultController::ipAction',  '_route' => 'back_ip',);
            }

            if (0 === strpos($pathinfo, '/admin/test')) {
                // back_test
                if ($pathinfo === '/admin/test3') {
                    return array (  '_controller' => 'BackBundle\\Controller\\TestController::test3Action',  '_route' => 'back_test',);
                }

                // back_test4
                if ($pathinfo === '/admin/test4') {
                    return array (  '_controller' => 'BackBundle\\Controller\\TestController::test4Action',  '_route' => 'back_test4',);
                }

                // back_table
                if ($pathinfo === '/admin/test5/vallibel/value/valvalue/nb/valnb') {
                    return array (  '_controller' => 'BackBundle\\Controller\\TestController::tableAction',  '_route' => 'back_table',);
                }

            }

            // back_list
            if ($pathinfo === '/admin/list') {
                return array (  '_controller' => 'BackBundle\\Controller\\InternauteController::listAction',  '_route' => 'back_list',);
            }

        }

        if (0 === strpos($pathinfo, '/fob')) {
            // front_index
            if (rtrim($pathinfo, '/') === '/fob') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'front_index');
                }

                return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_index',);
            }

            // front_url_message
            if (0 === strpos($pathinfo, '/fob/message') && preg_match('#^/fob/message/(?P<message_url>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_url_message')), array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::urlMessageAction',));
            }

            if (0 === strpos($pathinfo, '/fob/test')) {
                // front_numero
                if (0 === strpos($pathinfo, '/fob/test1') && preg_match('#^/fob/test1/(?P<numero>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_numero')), array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::numeroAction',));
                }

                // front_texte
                if (0 === strpos($pathinfo, '/fob/test2') && preg_match('#^/fob/test2/(?P<texte>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_texte')), array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::texteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/fob/dstp1')) {
                // front_dstp12
                if ($pathinfo === '/fob/dstp12') {
                    return array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'front_dstp12',);
                }

                // front_dstp13
                if (0 === strpos($pathinfo, '/fob/dstp13') && preg_match('#^/fob/dstp13/(?P<mavariable>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_dstp13')), array (  '_controller' => 'FrontBundle\\Controller\\DefaultController::mavariableAction',));
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // date
        if ($pathinfo === '/date') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::dateAction',  '_route' => 'date',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
