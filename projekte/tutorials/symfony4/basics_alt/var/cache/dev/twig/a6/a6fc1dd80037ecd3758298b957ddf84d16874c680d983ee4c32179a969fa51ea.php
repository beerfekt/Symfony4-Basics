<?php

/* main_nav.html.twig */
class __TwigTemplate_a71d02ae8955bab340c22fab3f602fd42ac8a201da1693ccd3782dad189fda48 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'main_nav' => array($this, 'block_main_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main_nav.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('main_nav', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_main_nav($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_nav"));

        // line 3
        echo "    <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\">
        <div class=\"container\">
            ";
        // line 6
        echo "            <a class=\"navbar-brand\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
        echo "\">Home</a>

            <div class=\"collapse navbar-collapse\">
                <ul class=\"navbar-nav mr-auto\">

                    <li class=\"nav-item\">
                        ";
        // line 13
        echo "                        <a class=\"nav-link\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("values");
        echo "\"  >Values</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("persons");
        echo "\"  >Persons</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"  >Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_article_list");
        echo "\"  >Articles</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\" >Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main_nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  84 => 22,  78 => 19,  72 => 16,  65 => 13,  55 => 6,  51 => 3,  33 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block main_nav %}
    <nav class=\"navbar navbar-expand-sm navbar-dark bg-dark\">
        <div class=\"container\">
            {# path() -> name des controllers (hier welcome) #}
            <a class=\"navbar-brand\" href=\"{{ path('welcome') }}\">Home</a>

            <div class=\"collapse navbar-collapse\">
                <ul class=\"navbar-nav mr-auto\">

                    <li class=\"nav-item\">
                        {# href=\"/hello\" entspricht: {{path('hello_page')}}   #}
                        <a class=\"nav-link\" href=\"{{path('values')}}\"  >Values</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('persons')}}\"  >Persons</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('contact')}}\"  >Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{path('public_article_list')}}\"  >Articles</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('logout') }}\" >Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
{% endblock %}", "main_nav.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/main_nav.html.twig");
    }
}
