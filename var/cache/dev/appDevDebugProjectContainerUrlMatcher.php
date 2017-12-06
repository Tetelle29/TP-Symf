<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
