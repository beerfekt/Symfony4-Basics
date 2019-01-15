<?php

/* base.html.twig */
class __TwigTemplate_116d0b9e34e83d66e790aac779a0d368c890b53ce1c4ee82aa51d178cf86c9cd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'main_nav' => array($this, 'block_main_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>
       Symfony 4 - ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    </title>
    <!-- Bootstrap -->
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    ";
        // line 21
        echo "

</head>


<body>
    <header>
        ";
        // line 28
        $this->displayBlock('main_nav', $context, $blocks);
        // line 29
        echo "    </header>

    <main role=\"main\" class=\"container main\">
        ";
        // line 33
        echo "        ";
        $this->loadTemplate("flash_messages.html.twig", "base.html.twig", 33)->display($context);
        // line 34
        echo "        ";
        // line 35
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "    </main>

   ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "
 </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Let's Explore Symfony 4";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        <!-- core CSS -->
        <!-- Bootstrap core  -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <!-- eigenes CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/custom-styles.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 28
    public function block_main_nav($context, array $blocks = array())
    {
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "       <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.slim.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
       ";
        // line 41
        echo "       <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
       ";
        // line 43
        echo "
       <!-- <script src=";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-test.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script> -->
   ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 44,  133 => 43,  128 => 41,  123 => 39,  120 => 38,  115 => 35,  110 => 28,  104 => 18,  99 => 16,  95 => 14,  92 => 13,  86 => 10,  79 => 46,  77 => 38,  73 => 36,  70 => 35,  68 => 34,  65 => 33,  60 => 29,  58 => 28,  49 => 21,  47 => 20,  45 => 13,  41 => 11,  39 => 10,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/base.html.twig");
    }
}
