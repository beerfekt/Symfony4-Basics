<?php

/* admin/security/login.html.twig */
class __TwigTemplate_3224f4f9d4e38f60fd9820ea55b209133322afabbae6e3a2dd44baf3825f2efc extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Login Page ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  122 => 100,  119 => 92,  111 => 85,  102 => 70,  85 => 51,  80 => 49,  66 => 37,  56 => 28,  51 => 14,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/security/login.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/admin/security/login.html.twig");
    }
}
