<?php

/* admin/main_nav.html.twig */
class __TwigTemplate_02e9e8928dc4e1343f507a72c1de11dc8c4d823a6bac8da910304266ea537fe4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/main_nav.html.twig", 1);
        $this->blocks = array(
            'main_nav' => array($this, 'block_main_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main_nav($context, array $blocks = array())
    {
        // line 5
        echo "    <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\">
        <div class=\"container\">
            ";
        // line 8
        echo "            <a class=\"navbar-brand\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
        echo "\">Public Bereich</a>

            <div class=\"collapse navbar-collapse\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_article_list");
        echo "\"  >Articles</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("benutzerverwaltung");
        echo "\">Benutzerverwaltung</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" >Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "admin/main_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 16,  48 => 13,  39 => 8,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/main_nav.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/admin/main_nav.html.twig");
    }
}
