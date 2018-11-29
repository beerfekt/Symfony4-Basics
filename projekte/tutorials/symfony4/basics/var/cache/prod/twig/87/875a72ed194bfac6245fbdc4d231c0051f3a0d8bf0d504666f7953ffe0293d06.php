<?php

/* admin/welcome/index.html.twig */
class __TwigTemplate_00d57c02bc3724f454968c0b14da20330001e1b85b8b96380cf29d70f2f9444e extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, (((isset($context["somekey"]) || array_key_exists("somekey", $context))) ? (_twig_default_filter(($context["somekey"] ?? null), "NO value received - lets take  a lovely default value")) : ("NO value received - lets take  a lovely default value")), "html", null, true);
        echo "
            </li>

            <li>
            ";
        // line 19
        echo twig_escape_filter($this->env, (((isset($context["someotherkey"]) || array_key_exists("someotherkey", $context))) ? (_twig_default_filter(($context["someotherkey"] ?? null), "NO value received - lets take  a  another lovely default value")) : ("NO value received - lets take  a  another lovely default value")), "html", null, true);
        echo "
            </li>
        </ul>




        </div>        
";
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
        return array (  59 => 19,  52 => 15,  45 => 11,  42 => 10,  39 => 9,  33 => 5,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/welcome/index.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/admin/welcome/index.html.twig");
    }
}
