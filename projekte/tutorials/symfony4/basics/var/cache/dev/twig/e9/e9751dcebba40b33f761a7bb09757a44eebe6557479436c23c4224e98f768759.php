<?php

/* admin/welcome/index.html.twig */
class __TwigTemplate_6a0162d0d8f1a052ac994950cca94f131e4e8d743e82e34b7811807bcab2faef extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("/admin/main_nav.html.twig", "admin/welcome/index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/admin/main_nav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/welcome/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/welcome/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "        <div>
            <h1>Welcome ";
        // line 11
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "(kein name gefunden)")) : ("(kein name gefunden)")), "html", null, true);
        echo "</h1>
            <p class=\"lead\">Sie befinden sich im Admin-Bereich</p>
        <ul>
            
            <li>";
        // line 15
        echo twig_escape_filter($this->env, (((isset($context["somekey"]) || array_key_exists("somekey", $context))) ? (_twig_default_filter((isset($context["somekey"]) || array_key_exists("somekey", $context) ? $context["somekey"] : (function () { throw new Twig_Error_Runtime('Variable "somekey" does not exist.', 15, $this->source); })()), "NO value received - lets take  a lovely default value")) : ("NO value received - lets take  a lovely default value")), "html", null, true);
        echo "
            </li>

            <li>
            ";
        // line 19
        echo twig_escape_filter($this->env, (((isset($context["someotherkey"]) || array_key_exists("someotherkey", $context))) ? (_twig_default_filter((isset($context["someotherkey"]) || array_key_exists("someotherkey", $context) ? $context["someotherkey"] : (function () { throw new Twig_Error_Runtime('Variable "someotherkey" does not exist.', 19, $this->source); })()), "NO value received - lets take  a  another lovely default value")) : ("NO value received - lets take  a  another lovely default value")), "html", null, true);
        echo "
            </li>
        </ul>




        </div>        
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/welcome/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  82 => 15,  75 => 11,  72 => 10,  63 => 9,  45 => 5,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# base.html ist übergeordnetes template #}
{% extends '/admin/main_nav.html.twig' %}

{# den Titel austauschen #}
{% block title %}Welcome{% endblock title %}

{# body definition ist  teil von base.html.twig, erbt sozusagen #}
{# body definition wird in ....#}
{% block body %}
        <div>
            <h1>Welcome {{ user.username | default('(kein name gefunden)') }}</h1>
            <p class=\"lead\">Sie befinden sich im Admin-Bereich</p>
        <ul>
            
            <li>{{ somekey | default('NO value received - lets take  a lovely default value') }}
            </li>

            <li>
            {{ someotherkey | default('NO value received - lets take  a  another lovely default value') }}
            </li>
        </ul>




        </div>        
{% endblock %}


", "admin/welcome/index.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/admin/welcome/index.html.twig");
    }
}
