<?php

/* admin/benutzerverwaltung/index.html.twig */
class __TwigTemplate_7014e9be1dd2f3e02e5365dc9a9014e9f7eaaf37777ea4ad3fc20610c9b3e1d0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/main_nav.html.twig", "admin/benutzerverwaltung/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/main_nav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/benutzerverwaltung/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/benutzerverwaltung/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "   Datenbank: Artikel speichern !
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
        echo "

    <h1>Benutzer bearbeiten:  </h1>
    <p>Gelistete Benutzer bearbeiten </p>
    ";
        // line 18
        echo "    ";
        if ((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "        <table id=\"users\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Benutzername:</th>
                <th>Rolle:</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new Twig_Error_Runtime('Variable "users" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 30
                echo "                <tr>
                    <td>
                        ";
                // line 32
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "NO username received ")) : ("NO username received ")), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 35
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "role", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["user"], "role", array()), "NO role received ")) : ("NO role received ")), "html", null, true);
                echo "
                    </td>
                    <td>
                        <a  href=\"/admin/benutzerverwaltung/";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-dark\">Details</a>
                        <a  href=\"/admin/benutzerverwaltung/edit/";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                echo "\" class = \"btn btn-light\" >Editieren</a>
                        ";
                // line 45
                echo "                        <a  href=\"#\" class = \"btn btn-danger delete-article\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                echo "\"  >Delete</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
            </tbody>
        </table>
    ";
        } else {
            // line 53
            echo "        <p> No data available! </p>
    ";
        }
        // line 55
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.slim.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 63
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 65
        echo "        <!-- <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-test.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script> -->
        <script src=";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/benutzerverwaltung/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 66,  175 => 65,  170 => 63,  165 => 61,  156 => 60,  145 => 55,  141 => 53,  135 => 49,  124 => 45,  120 => 39,  116 => 38,  110 => 35,  104 => 32,  100 => 30,  95 => 29,  84 => 19,  81 => 18,  75 => 13,  66 => 12,  55 => 5,  46 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/main_nav.html.twig' %}

{# Title wird je Seite überschrieben #}
{% block title %}
   Datenbank: Artikel speichern !
{% endblock  %}



{# body definition ist  teil von base.html.twig, erbt sozusagen #}
{# body definition wird in ....#}
{% block body %}


    <h1>Benutzer bearbeiten:  </h1>
    <p>Gelistete Benutzer bearbeiten </p>
    {# if there are articles delivered from the admin zone... #}
    {% if users %}
        <table id=\"users\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Benutzername:</th>
                <th>Rolle:</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            {# loop through the \$articles (in ArticleController.php) and show them #}
            {%  for user in users %}
                <tr>
                    <td>
                        {{ user.username  | default('NO username received ') }}
                    </td>
                    <td>
                        {{ user.role  | default('NO role received ') }}
                    </td>
                    <td>
                        <a  href=\"/admin/benutzerverwaltung/{{ user.id }}\" class=\"btn btn-dark\">Details</a>
                        <a  href=\"/admin/benutzerverwaltung/edit/{{ user.id }}\" class = \"btn btn-light\" >Editieren</a>
                        {#
                           class=\"delete-article\" weil:       ,
                           data-id=\"arcticle-id\" um entsprechenden artikel js zugänglich zu machen
                           die js-datei wird in public/js erstellt
                         #}
                        <a  href=\"#\" class = \"btn btn-danger delete-article\" data-id=\"{{ user.id }}\"  >Delete</a>
                    </td>
                </tr>
            {% endfor %}

            </tbody>
        </table>
    {% else %}
        <p> No data available! </p>
    {% endif %}

    {# <a class = \"btn btn-primary\" href= \"{{ path('new_user') }}\"  >New</a> #}
{% endblock  %}


    {% block javascripts %}
        <script src={{ asset ('node_modules/jquery/dist/jquery.slim.min.js') }} type=\"text/javascript\" ></script>
        {# Bootstrap Latest compiled and minified JavaScript #}
        <script src={{ asset ('node_modules/bootstrap/dist/js/bootstrap.min.js') }} type=\"text/javascript\" ></script>
        {# JQuery test #}
        <!-- <script src={{ asset ('js/jquery-test.js') }} type=\"text/javascript\" ></script> -->
        <script src={{ asset('js/main.js') }}></script>
    {% endblock %}
", "admin/benutzerverwaltung/index.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/admin/benutzerverwaltung/index.html.twig");
    }
}
