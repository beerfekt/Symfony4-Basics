<?php

/* /public/content/values.html.twig */
class __TwigTemplate_cc87f72ab8a4976fc560ba96c90f3b6d54939a462a6f82b27db5a9576377f6e2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("/public/main_nav.html.twig", "/public/content/values.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/public/main_nav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/public/content/values.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/public/content/values.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "    Hello  ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "name"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "name"), "method"), "CodeReviewVideos")) : ("CodeReviewVideos")), "html", null, true);
        echo "!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        <div>
            <h1>Receive Values </h1>
            <p class=\"lead\"> Receive Values from the Controller in Symfony 4
            </p>
        </div>     

        ";
        // line 20
        echo "        <ul>            
            <li>
                ";
        // line 22
        echo twig_escape_filter($this->env, (((isset($context["nameForTwig"]) || array_key_exists("nameForTwig", $context))) ? (_twig_default_filter((isset($context["nameForTwig"]) || array_key_exists("nameForTwig", $context) ? $context["nameForTwig"] : (function () { throw new Twig_Error_Runtime('Variable "nameForTwig" does not exist.', 22, $this->source); })()), "NO value received - lets take  a lovely default value")) : ("NO value received - lets take  a lovely default value")), "html", null, true);
        echo "
            </li>

            <li>
                ";
        // line 26
        echo twig_escape_filter($this->env, (((isset($context["someotherkey"]) || array_key_exists("someotherkey", $context))) ? (_twig_default_filter((isset($context["someotherkey"]) || array_key_exists("someotherkey", $context) ? $context["someotherkey"] : (function () { throw new Twig_Error_Runtime('Variable "someotherkey" does not exist.', 26, $this->source); })()), "NO value received - lets take  a  another lovely default value")) : ("NO value received - lets take  a  another lovely default value")), "html", null, true);
        echo "
            </li>


        </ul>
        ";
        // line 32
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/public/content/values.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  95 => 26,  88 => 22,  84 => 20,  76 => 13,  67 => 12,  54 => 7,  45 => 6,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# base.html ist übergeordnetes template #}
{% extends '/public/main_nav.html.twig' %}

{# Title wird je Seite überschrieben #}
{% block title %}
    Hello  {{ app.request.query.get('name') | default('CodeReviewVideos') }}!
{% endblock title %}

{# body definition ist  teil von base.html.twig, erbt sozusagen #}
{# body definition wird in ....#}
{% block body %}
        <div>
            <h1>Receive Values </h1>
            <p class=\"lead\"> Receive Values from the Controller in Symfony 4
            </p>
        </div>     

        {# wenn kein somekey aus controller dann default #}
        <ul>            
            <li>
                {{ nameForTwig | default('NO value received - lets take  a lovely default value') }}
            </li>

            <li>
                {{ someotherkey | default('NO value received - lets take  a  another lovely default value') }}
            </li>


        </ul>
        {# alle eingehenden Werte auslesen#}
        {#
            {{ dump() }}
        #}
{% endblock %}", "/public/content/values.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/public/content/values.html.twig");
    }
}
