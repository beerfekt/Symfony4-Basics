<?php

/* public/main_nav.html.twig */
class __TwigTemplate_0f53df6cca8c5807a4f2a8c350dcc6eecb575b998df91ce105f53e72331c1492 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "public/main_nav.html.twig", 1);
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
        echo "\">Home</a>

            <div class=\"collapse navbar-collapse\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        ";
        // line 14
        echo "                        <a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("values");
        echo "\"  >Values</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("persons");
        echo "\"  >Persons</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"  >Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_article_list");
        echo "\"  >Articles</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "public/main_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  61 => 20,  55 => 17,  48 => 14,  39 => 8,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/main_nav.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/public/main_nav.html.twig");
    }
}
