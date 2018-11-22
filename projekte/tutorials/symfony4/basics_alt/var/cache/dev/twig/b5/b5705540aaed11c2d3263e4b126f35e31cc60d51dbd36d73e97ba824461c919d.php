<?php

/* articles/index.html.twig */
class __TwigTemplate_e367d3552441016765e53fe67fe37f1ef841f9976db164c7b6b8e2068859dbdf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

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

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
";
        // line 20
        echo "    <h1>Blog  </h1>
    <p>Hier werden Daten vom -  ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new Twig_Error_Runtime('Variable "controller_name" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " -  in <strong>Datenbank</strong> gespeichert und als Blog ausgegeben: </p>
    ";
        // line 23
        echo "    ";
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "        <table id=\"articles\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Article Title</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 33
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 34
                echo "                <tr>
                    <td>

                        ";
                // line 37
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["article"], "title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["article"], "title", array()), "NO value received ")) : ("NO value received ")), "html", null, true);
                echo "
                    </td>
                    <td>
                        <a  href=\"/articles/";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-dark\">Show Article</a>
                        <a  href=\"/article/edit/";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
                echo "\" class = \"btn btn-light\" >Edit</a>
                        ";
                // line 47
                echo "                        <a  href=\"#\" class = \"btn btn-danger delete-article\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
                echo "\"  >Delete</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
            </tbody>
        </table>
    ";
        } else {
            // line 55
            echo "        <p> No data available! </p>
    ";
        }
        // line 57
        echo "
    <a class = \"btn btn-primary\" href= \"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_article");
        echo "\"  >New</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.slim.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 65
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 67
        echo "
        <!-- <script src=";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-test.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script> -->
        <script src=";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 69,  180 => 68,  177 => 67,  172 => 65,  167 => 63,  158 => 62,  146 => 58,  143 => 57,  139 => 55,  133 => 51,  122 => 47,  118 => 41,  114 => 40,  108 => 37,  103 => 34,  98 => 33,  88 => 24,  85 => 23,  81 => 21,  78 => 20,  75 => 15,  66 => 14,  55 => 7,  46 => 6,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{# base.html ist übergeordnetes template #}
{% extends 'base.html.twig' %}

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
            <thead>
            <tr>
                <th>Article Title</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            {# loop through the \$articles (in ArticleController.php) and show them #}
            {%  for article in articles %}
                <tr>
                    <td>

                        {{ article.title  | default('NO value received ') }}
                    </td>
                    <td>
                        <a  href=\"/articles/{{ article.id }}\" class=\"btn btn-dark\">Show Article</a>
                        <a  href=\"/article/edit/{{ article.id }}\" class = \"btn btn-light\" >Edit</a>
                        {#
                           class=\"delete-article\" weil:       ,
                           data-id=\"arcticle-id\" um entsprechenden artikel js zugänglich zu machen
                           die js-datei wird in public/js erstellt
                         #}
                        <a  href=\"#\" class = \"btn btn-danger delete-article\" data-id=\"{{ article.id }}\"  >Delete</a>
                    </td>
                </tr>
            {% endfor %}

            </tbody>
        </table>
    {% else %}
        <p> No data available! </p>
    {% endif %}

    <a class = \"btn btn-primary\" href= \"{{ path('new_article') }}\"  >New</a>
{% endblock  %}


    {% block javascripts %}
        <script src={{ asset ('node_modules/jquery/dist/jquery.slim.min.js') }} type=\"text/javascript\" ></script>
        {# Bootstrap Latest compiled and minified JavaScript #}
        <script src={{ asset ('node_modules/bootstrap/dist/js/bootstrap.min.js') }} type=\"text/javascript\" ></script>
        {# JQuery test #}

        <!-- <script src={{ asset ('js/jquery-test.js') }} type=\"text/javascript\" ></script> -->
        <script src={{ asset('js/main.js') }}></script>
    {% endblock %}
", "articles/index.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/articles/index.html.twig");
    }
}
