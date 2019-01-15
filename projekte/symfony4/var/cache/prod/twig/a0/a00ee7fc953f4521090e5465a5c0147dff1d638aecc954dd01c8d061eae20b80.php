<?php

/* public/welcome/index.html.twig */
class __TwigTemplate_11c601f997d167b7b619ac1166dca77fcde74345fd174b65426f6da1c4b5af23 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("/public/main_nav.html.twig", "public/welcome/index.html.twig", 2);
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
            <h1>Welcome !</h1>
            <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum sapien mauris, venenatis
                facilisis neque tincidunt vel. Maecenas vel felis vel turpis scelerisque eleifend. Fusce nec purus egestas,
                efficitur nisi ac, ultrices nulla. Pellentesque eu mollis tortor, in mollis nisl. Maecenas rhoncus quam non
                lacinia mollis.</p>


        <ul>
            
            <li>";
        // line 20
        echo twig_escape_filter($this->env, (((isset($context["somekey"]) || array_key_exists("somekey", $context))) ? (_twig_default_filter(($context["somekey"] ?? null), "NO value received - lets take  a lovely default value")) : ("NO value received - lets take  a lovely default value")), "html", null, true);
        echo "
            </li>

            <li>
            ";
        // line 24
        echo twig_escape_filter($this->env, (((isset($context["someotherkey"]) || array_key_exists("someotherkey", $context))) ? (_twig_default_filter(($context["someotherkey"] ?? null), "NO value received - lets take  a  another lovely default value")) : ("NO value received - lets take  a  another lovely default value")), "html", null, true);
        echo "
            </li>
        </ul>
                
        </div>        
";
    }

    public function getTemplateName()
    {
        return "public/welcome/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  54 => 20,  42 => 10,  39 => 9,  33 => 5,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/welcome/index.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/public/welcome/index.html.twig");
    }
}
