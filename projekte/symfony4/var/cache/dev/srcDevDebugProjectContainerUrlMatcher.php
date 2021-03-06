<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/articles' => array(array('_route' => 'public_article_list', '_controller' => 'App\\Controller\\ArticleController::listArticlesPublic'), null, null, null),
                    '/admin' => array(array('_route' => 'admin_welcome', '_controller' => 'App\\Controller\\ArticleController::indexOfAdmin'), null, null, null),
                    '/admin/articles' => array(array('_route' => 'admin_article_list', '_controller' => 'App\\Controller\\ArticleController::listArticlesAsAdmin'), null, null, null),
                    '/admin/article/new' => array(array('_route' => 'admin_new_article', '_controller' => 'App\\Controller\\ArticleController::new'), null, null, null),
                    '/admin/benutzerverwaltung' => array(array('_route' => 'benutzerverwaltung', '_controller' => 'App\\Controller\\BenutzerverwaltungController::index'), null, null, null),
                    '/contact/basic' => array(array('_route' => 'contactbasic', '_controller' => 'App\\Controller\\ContactController::contactBasic'), null, null, null),
                    '/contact' => array(array('_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contactValidation'), null, null, null),
                    '/produkte' => array(array('_route' => 'produkte', '_controller' => 'App\\Controller\\ProductController::index'), null, null, null),
                    '/login' => array(array('_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null),
                    '/logout' => array(array('_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null),
                    '/' => array(array('_route' => 'welcome', '_controller' => 'App\\Controller\\ValueController::index'), null, null, null),
                    '/values' => array(array('_route' => 'values', '_controller' => 'App\\Controller\\ValueController::values'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/admin/article(?'
                        .'|s/([^/]++)(*:34)'
                        .'|/(?'
                            .'|delete/([^/]++)(*:60)'
                            .'|edit/([^/]++)(*:80)'
                        .')'
                    .')'
                    .'|/persons(?:/([A-Za-z]+))?(*:114)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:153)'
                        .'|wdt/([^/]++)(*:173)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:219)'
                                .'|router(*:233)'
                                .'|exception(?'
                                    .'|(*:253)'
                                    .'|\\.css(*:266)'
                                .')'
                            .')'
                            .'|(*:276)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            34 => array(array('_route' => 'admin_article_show', '_controller' => 'App\\Controller\\ArticleController::show'), array('id'), null, null),
                            60 => array(array('_route' => 'app_article_loescheartikel', '_controller' => 'App\\Controller\\ArticleController::loescheArtikel'), array('id'), null, null),
                            80 => array(array('_route' => 'admin_edit_article', '_controller' => 'App\\Controller\\ArticleController::edit'), array('id'), null, null),
                            114 => array(array('_route' => 'persons', 'name' => 'default value - testbert', '_controller' => 'App\\Controller\\ValueController::persons'), array('name'), null, null),
                            153 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            173 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            219 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            233 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            253 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            266 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            276 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (276 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
