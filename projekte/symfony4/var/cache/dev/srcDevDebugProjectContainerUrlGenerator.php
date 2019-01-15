<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'public_article_list' => array(array(), array('_controller' => 'App\\Controller\\ArticleController::listArticlesPublic'), array(), array(array('text', '/articles')), array(), array()),
        'admin_welcome' => array(array(), array('_controller' => 'App\\Controller\\ArticleController::indexOfAdmin'), array(), array(array('text', '/admin')), array(), array()),
        'admin_article_list' => array(array(), array('_controller' => 'App\\Controller\\ArticleController::listArticlesAsAdmin'), array(), array(array('text', '/admin/articles')), array(), array()),
        'admin_article_show' => array(array('id'), array('_controller' => 'App\\Controller\\ArticleController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/articles')), array(), array()),
        'app_article_loescheartikel' => array(array('id'), array('_controller' => 'App\\Controller\\ArticleController::loescheArtikel'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/article/delete')), array(), array()),
        'admin_new_article' => array(array(), array('_controller' => 'App\\Controller\\ArticleController::new'), array(), array(array('text', '/admin/article/new')), array(), array()),
        'admin_edit_article' => array(array('id'), array('_controller' => 'App\\Controller\\ArticleController::edit'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/article/edit')), array(), array()),
        'benutzerverwaltung' => array(array(), array('_controller' => 'App\\Controller\\BenutzerverwaltungController::index'), array(), array(array('text', '/admin/benutzerverwaltung')), array(), array()),
        'contactbasic' => array(array(), array('_controller' => 'App\\Controller\\ContactController::contactBasic'), array(), array(array('text', '/contact/basic')), array(), array()),
        'contact' => array(array(), array('_controller' => 'App\\Controller\\ContactController::contactValidation'), array(), array(array('text', '/contact')), array(), array()),
        'produkte' => array(array(), array('_controller' => 'App\\Controller\\ProductController::index'), array(), array(array('text', '/produkte')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logout'), array(), array(array('text', '/logout')), array(), array()),
        'welcome' => array(array(), array('_controller' => 'App\\Controller\\ValueController::index'), array(), array(array('text', '/')), array(), array()),
        'values' => array(array(), array('_controller' => 'App\\Controller\\ValueController::values'), array(), array(array('text', '/values')), array(), array()),
        'persons' => array(array('name'), array('name' => 'default value - testbert', '_controller' => 'App\\Controller\\ValueController::persons'), array('name' => '[A-Za-z]+'), array(array('variable', '/', '[A-Za-z]+', 'name'), array('text', '/persons')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}