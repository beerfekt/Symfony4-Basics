<?php

/* /public/articles/index.html.twig */
class __TwigTemplate_fab9dfdf45ba88a20fe1b78b8454bb2dcae868ad21d36e2670c29108b1a833e5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("/public/main_nav.html.twig", "/public/articles/index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/public/main_nav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/public/articles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/public/articles/index.html.twig"));

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
        echo "   Datenbank: Artikel speichern !
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
";
        // line 24
        echo "    <h1>Blog  </h1>
    <p>Hier werden Daten vom -  ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new Twig_Error_Runtime('Variable "controller_name" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " -  in <strong>Datenbank</strong> gespeichert und als Blog ausgegeben: </p>
    ";
        // line 27
        echo "    ";
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "










        <table id=\"articles\" class=\"table table-striped\">

            ";
            // line 42
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 43
                echo "            <thead>
            <tr>
                <th>

                </th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h4> ";
                // line 54
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["article"], "title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["article"], "title", array()), "NO article received ")) : ("NO article received ")), "html", null, true);
                echo " </h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p> ";
                // line 59
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["article"], "body", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["article"], "body", array()), "NO article received ")) : ("NO article received ")), "html", null, true);
                echo " </p>
                    </td>
                </tr>
                <hr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
            </tbody>
        </table>
    ";
        } else {
            // line 68
            echo "        <p> No data available! </p>
    ";
        }
        // line 70
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.slim.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 77
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 79
        echo "
        <!-- <script src=";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-test.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script> -->
        <script src=";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/public/articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 81,  183 => 80,  180 => 79,  175 => 77,  170 => 75,  161 => 74,  150 => 70,  146 => 68,  140 => 64,  129 => 59,  121 => 54,  108 => 43,  103 => 42,  88 => 28,  85 => 27,  81 => 25,  78 => 24,  75 => 19,  66 => 18,  55 => 7,  46 => 6,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# base.html ist übergeordnetes template #}
{% extends '/public/main_nav.html.twig' %}

{# Title wird je Seite überschrieben #}
{% block title %}
   Datenbank: Artikel speichern !
{% endblock  %}







{# body definition ist  teil von base.html.twig, erbt sozusagen #}
{# body definition wird in ....#}
{% block body %}

{#
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
#}
    <h1>Blog  </h1>
    <p>Hier werden Daten vom -  {{  controller_name }} -  in <strong>Datenbank</strong> gespeichert und als Blog ausgegeben: </p>
    {# if there are articles delivered from the admin zone... #}
    {% if articles %}











        <table id=\"articles\" class=\"table table-striped\">

            {# loop through the \$articles (in ArticleController.php) and show them #}
            {%  for article in articles %}
            <thead>
            <tr>
                <th>

                </th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h4> {{ article.title  | default('NO article received ') }} </h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p> {{ article.body  | default('NO article received ') }} </p>
                    </td>
                </tr>
                <hr>
            {% endfor %}

            </tbody>
        </table>
    {% else %}
        <p> No data available! </p>
    {% endif %}

{% endblock  %}


    {% block javascripts %}
        <script src={{ asset ('node_modules/jquery/dist/jquery.slim.min.js') }} type=\"text/javascript\" ></script>
        {# Bootstrap Latest compiled and minified JavaScript #}
        <script src={{ asset ('node_modules/bootstrap/dist/js/bootstrap.min.js') }} type=\"text/javascript\" ></script>
        {# JQuery test #}

        <!-- <script src={{ asset ('js/jquery-test.js') }} type=\"text/javascript\" ></script> -->
        <script src={{ asset('js/main.js') }}></script>
    {% endblock %}
", "/public/articles/index.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/public/articles/index.html.twig");
    }
}
