<?php

/* public/content/persons.html.twig */
class __TwigTemplate_2504d7c930e58d772c1ea4ef0ad7b4819b214cf355e60a3d94852066b13bd774 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("/public/main_nav.html.twig", "public/content/persons.html.twig", 3);
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
        echo "Persons";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "        <div>
            <h1>Persons</h1>
            <p class=\"lead\"> Some Persons are listed here:
            </p>
        </div>     

        ";
        // line 19
        echo "        <ul>
            
            <li>
                ";
        // line 22
        echo twig_escape_filter($this->env, ($context["person_name"] ?? null), "html", null, true);
        echo "
            </li>

        </ul>

        ";
        // line 28
        echo "        ";
    }

    public function getTemplateName()
    {
        return "public/content/persons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 28,  55 => 22,  50 => 19,  42 => 12,  39 => 11,  33 => 6,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/content/persons.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/public/content/persons.html.twig");
    }
}
