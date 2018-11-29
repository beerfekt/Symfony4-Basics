<?php

/* admin/articles/index.html.twig */
class __TwigTemplate_fdd1f1e3cc14454f1de86f2e93155a58b4f508e0917603ec037e73af5efbd63c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/main_nav.html.twig", "admin/articles/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/articles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/articles/index.html.twig"));

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

    <h1>Artikel bearbeiten:  </h1>
    <p>Gelistete Artikel bearbeiten </p>
    ";
        // line 18
        echo "    ";
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "        <table id=\"articles\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Article Title</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 28
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 29
                echo "                <tr>
                    <td>

                        ";
                // line 32
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["article"], "title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["article"], "title", array()), "NO value received ")) : ("NO value received ")), "html", null, true);
                echo "
                    </td>
                    ";
                // line 34
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 35
                    echo "                    <td>
                        <a  href=\"/admin/articles/";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
                    echo "\" class=\"btn btn-dark\">Show Article</a>
                        <a  href=\"/admin/article/edit/";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
                    echo "\" class = \"btn btn-light\" >Edit</a>
                        ";
                    // line 43
                    echo "                        ";
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                        // line 44
                        echo "                            <a  href=\"#\" class = \"btn btn-danger delete-article\" data-id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
                        echo "\"  >Delete</a>
                        ";
                    }
                    // line 46
                    echo "                    </td>
                    ";
                }
                // line 48
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
            </tbody>
        </table>
    ";
        } else {
            // line 54
            echo "        <p> No data available! </p>
    ";
        }
        // line 56
        echo "
    <a class = \"btn btn-primary\" href= \"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_new_article");
        echo "\"  >New</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.slim.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 64
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 66
        echo "        <!-- <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-test.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script> -->
        <script src=";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 67,  186 => 66,  181 => 64,  176 => 62,  167 => 61,  155 => 57,  152 => 56,  148 => 54,  142 => 50,  135 => 48,  131 => 46,  125 => 44,  122 => 43,  118 => 37,  114 => 36,  111 => 35,  109 => 34,  104 => 32,  99 => 29,  94 => 28,  84 => 19,  81 => 18,  75 => 13,  66 => 12,  55 => 5,  46 => 4,  15 => 1,);
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


    <h1>Artikel bearbeiten:  </h1>
    <p>Gelistete Artikel bearbeiten </p>
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
                    {% if is_granted('ROLE_ADMIN')  %}
                    <td>
                        <a  href=\"/admin/articles/{{ article.id }}\" class=\"btn btn-dark\">Show Article</a>
                        <a  href=\"/admin/article/edit/{{ article.id }}\" class = \"btn btn-light\" >Edit</a>
                        {#
                           class=\"delete-article\" weil:       ,
                           data-id=\"arcticle-id\" um entsprechenden artikel js zugänglich zu machen
                           die js-datei wird in public/js erstellt
                         #}
                        {% if is_granted('ROLE_SUPER_ADMIN')  %}
                            <a  href=\"#\" class = \"btn btn-danger delete-article\" data-id=\"{{ article.id }}\"  >Delete</a>
                        {% endif %}
                    </td>
                    {% endif %}
                </tr>
            {% endfor %}

            </tbody>
        </table>
    {% else %}
        <p> No data available! </p>
    {% endif %}

    <a class = \"btn btn-primary\" href= \"{{ path('admin_new_article') }}\"  >New</a>
{% endblock  %}


    {% block javascripts %}
        <script src={{ asset ('node_modules/jquery/dist/jquery.slim.min.js') }} type=\"text/javascript\" ></script>
        {# Bootstrap Latest compiled and minified JavaScript #}
        <script src={{ asset ('node_modules/bootstrap/dist/js/bootstrap.min.js') }} type=\"text/javascript\" ></script>
        {# JQuery test #}
        <!-- <script src={{ asset ('js/jquery-test.js') }} type=\"text/javascript\" ></script> -->
        <script src={{ asset('js/main.js') }}></script>
    {% endblock %}
", "admin/articles/index.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/admin/articles/index.html.twig");
    }
}
