<?php

/* /public/content/produkte.html.twig */
class __TwigTemplate_83afdd63f7b871285d099bcf3e3cd4469fc53eee83238f6679414ae895767157 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/public/main_nav.html.twig", "/public/content/produkte.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/public/content/produkte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/public/content/produkte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Produkte  ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "name"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "name"), "method"), "CodeReviewVideos")) : ("CodeReviewVideos")), "html", null, true);
        echo "!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "        <div>
            <h1>Produkte: </h1>
            <p class=\"lead\">1(Kategorie):n(Produkt) Beziehung </p>Alle <i>(Produkte -> zugeordnete Kategorien)</i>
        </div>     


        <ul>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produkte"]) || array_key_exists("produkte", $context) ? $context["produkte"] : (function () { throw new Twig_Error_Runtime('Variable "produkte" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produkt"]) {
            // line 16
            echo "            <li>
                <strong>";
            // line 17
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["produkt"], "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["produkt"], "name", array()), "NO Produktname set")) : ("NO Produktname set")), "html", null, true);
            echo " </strong> [
                ";
            // line 18
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produkt"], "category", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produkt"], "category", array(), "any", false, true), "name", array()), "NO category set")) : ("NO category set")), "html", null, true);
            echo " ]
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produkt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul>


    Holz:<i>(Categorie -> zugeordneten Produkten)</i>

    <ul>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["holzprodukte"]) || array_key_exists("holzprodukte", $context) ? $context["holzprodukte"] : (function () { throw new Twig_Error_Runtime('Variable "holzprodukte" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["holzprodukt"]) {
            // line 28
            echo "            <li>
                <strong>";
            // line 29
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["holzprodukt"], "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["holzprodukt"], "name", array()), "NO Produktname set")) : ("NO Produktname set")), "html", null, true);
            echo " </strong> [
                ";
            // line 30
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["holzprodukt"], "category", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["holzprodukt"], "category", array(), "any", false, true), "name", array()), "NO category set")) : ("NO category set")), "html", null, true);
            echo " ]
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['holzprodukt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </ul>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/public/content/produkte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 33,  124 => 30,  120 => 29,  117 => 28,  113 => 27,  105 => 21,  96 => 18,  92 => 17,  89 => 16,  85 => 15,  76 => 8,  67 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/public/main_nav.html.twig' %}

{% block title %}
    Produkte  {{ app.request.query.get('name') | default('CodeReviewVideos') }}!
{% endblock title %}

{% block body %}
        <div>
            <h1>Produkte: </h1>
            <p class=\"lead\">1(Kategorie):n(Produkt) Beziehung </p>Alle <i>(Produkte -> zugeordnete Kategorien)</i>
        </div>     


        <ul>
            {%  for produkt in produkte %}
            <li>
                <strong>{{ produkt.name | default('NO Produktname set') }} </strong> [
                {{ produkt.category.name | default('NO category set') }} ]
            </li>
            {% endfor %}
        </ul>


    Holz:<i>(Categorie -> zugeordneten Produkten)</i>

    <ul>
        {%  for holzprodukt in holzprodukte %}
            <li>
                <strong>{{ holzprodukt.name | default('NO Produktname set') }} </strong> [
                {{ holzprodukt.category.name | default('NO category set') }} ]
            </li>
        {% endfor %}
    </ul>





{% endblock %}", "/public/content/produkte.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/public/content/produkte.html.twig");
    }
}
