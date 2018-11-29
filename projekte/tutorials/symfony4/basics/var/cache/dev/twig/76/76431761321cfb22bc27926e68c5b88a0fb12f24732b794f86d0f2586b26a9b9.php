<?php

/* admin/security/login.html.twig */
class __TwigTemplate_b14046f41bb157e9c7a343065817854b679bb77da4ddc176c0f55cd34ef6ef36 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/security/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/security/login.html.twig"));

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

        echo "Login Page ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em 400px; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .error {color:darkred}
</style>


                        ";
        // line 14
        echo "


";
        // line 28
        echo "







                            ";
        // line 37
        echo "

    <!-- Bootstrap Loginpage -->


    <div class=\"container loginbox\" id=\"testest\">

        <div class=\"row\" id=\"pwd-container\">
            <div class=\"col-md-4\"></div>

            <div class=\"col-md-4\">
                <section class=\"login-form\">
                    <form method=\"post\" action=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" role=\"login\">
                        <img src=\"http://i.imgur.com/RcmcLv4.png\" class=\"img-responsive\" alt=\"\" />
                        <input type=\"text\" name=\"_username\" placeholder=\"Username here ..\" required class=\"form-control input-lg\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\" />

                        <input type=\"password\" name=\"_password\"  class=\"form-control input-lg\" id=\"password\" placeholder=\"Password\" required=\"\" />


                        <div class=\"pwstrength_viewport_progress\"></div>


                        <button type=\"submit\"  class=\"btn btn-lg btn-primary btn-block\">Log in</button>
                        <div>
                            <a href=\"#\">Create account</a> or <a href=\"#\">reset password</a>
                        </div>

                    </form>
";
        // line 70
        echo "                </section>
            </div>

            <div class=\"col-md-4\"></div>


        </div>
";
        // line 85
        echo "
    </div>




    ";
        // line 92
        echo "
    ";
        // line 100
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 100,  149 => 92,  141 => 85,  132 => 70,  115 => 51,  110 => 49,  96 => 37,  86 => 28,  81 => 14,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Login Page {% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em 400px; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .error {color:darkred}
</style>


                        {# login - minimalised #}



{#
<div class=\"example-wrapper\">
    <h1>Login Page ✅</h1>

    <form action=\"{{ path('login') }}\" method=\"POST\" >
        <input type=\"text\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"Username here ..\" >
        <input type=\"password\" name=\"_password\"   >
        <button type=\"submit\">Login</button>
    </form>
</div>
#}








                            {# login - fancy #}


    <!-- Bootstrap Loginpage -->


    <div class=\"container loginbox\" id=\"testest\">

        <div class=\"row\" id=\"pwd-container\">
            <div class=\"col-md-4\"></div>

            <div class=\"col-md-4\">
                <section class=\"login-form\">
                    <form method=\"post\" action=\"{{ path('login') }}\" role=\"login\">
                        <img src=\"http://i.imgur.com/RcmcLv4.png\" class=\"img-responsive\" alt=\"\" />
                        <input type=\"text\" name=\"_username\" placeholder=\"Username here ..\" required class=\"form-control input-lg\" value=\"{{ last_username }}\" />

                        <input type=\"password\" name=\"_password\"  class=\"form-control input-lg\" id=\"password\" placeholder=\"Password\" required=\"\" />


                        <div class=\"pwstrength_viewport_progress\"></div>


                        <button type=\"submit\"  class=\"btn btn-lg btn-primary btn-block\">Log in</button>
                        <div>
                            <a href=\"#\">Create account</a> or <a href=\"#\">reset password</a>
                        </div>

                    </form>
{#
                    <div class=\"form-links\">
                        <a href=\"#\">www.website.com</a>
                    </div>
#}
                </section>
            </div>

            <div class=\"col-md-4\"></div>


        </div>
{#
        <p>
            <a href=\"http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FW00op\" target=\"_blank\"><small>HTML</small><sup>5</sup></a>
            <br>
            <br>

        </p>
#}

    </div>




    {# error display - falls im return der controllermethode das attribut 'error'=> \$error angegeben wurde #}

    {#

    {% if error %}
        <span class=\"error\">{{ error.messageKey }}</span>
    {% endif %}

    #}


{% endblock %}
", "admin/security/login.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/admin/security/login.html.twig");
    }
}
