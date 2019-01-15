<?php

/* public/content/values.html.twig */
class __TwigTemplate_3d9f90bafade42fba3fa7ed7bd487e9584648434d93ef5c2597c769c7b575f72 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("/public/main_nav.html.twig", "public/content/values.html.twig", 3);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    Hello  ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "name"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "name"), "method"), "CodeReviewVideos")) : ("CodeReviewVideos")), "html", null, true);
        echo "!
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, (((isset($context["nameForTwig"]) || array_key_exists("nameForTwig", $context))) ? (_twig_default_filter(($context["nameForTwig"] ?? null), "NO value received - lets take  a lovely default value")) : ("NO value received - lets take  a lovely default value")), "html", null, true);
        echo "
            </li>

            <li>
                ";
        // line 26
        echo twig_escape_filter($this->env, (((isset($context["someotherkey"]) || array_key_exists("someotherkey", $context))) ? (_twig_default_filter(($context["someotherkey"] ?? null), "NO value received - lets take  a  another lovely default value")) : ("NO value received - lets take  a  another lovely default value")), "html", null, true);
        echo "
            </li>


        </ul>
        ";
        // line 32
        echo "        ";
    }

    public function getTemplateName()
    {
        return "public/content/values.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  65 => 26,  58 => 22,  54 => 20,  46 => 13,  43 => 12,  36 => 7,  33 => 6,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/content/values.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/public/content/values.html.twig");
    }
}
