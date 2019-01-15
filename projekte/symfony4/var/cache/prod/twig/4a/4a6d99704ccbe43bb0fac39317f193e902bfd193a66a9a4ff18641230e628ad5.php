<?php

/* public/contact/index.html.twig */
class __TwigTemplate_c0944f2e4a2f898b78864a43e3119c143a07e46bc8b8f8b3e3dd9ded34ce021a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/public/main_nav.html.twig", "public/contact/index.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Contact: Hello ";
        echo twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true);
        echo " !";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">

      <h1>Kontakt</h1>
";
        // line 24
        echo "   ";
        // line 25
        echo "
\t";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["our_form"] ?? null), 'form_start');
        echo "
\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["our_form"] ?? null), 'widget');
        echo "
\t";
        // line 33
        echo "\t<div class=\"form-group row\">
    \t<div class=\"col-sm-2\"></div>
    \t<div class=\"col-sm-10\">
        \t<input type=\"submit\" value=\"Send\" class=\"btn btn-success\" />
    \t</div>
\t</div>
\t
\t";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["our_form"] ?? null), 'form_end');
        echo "


</div>
";
    }

    public function getTemplateName()
    {
        return "public/contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 40,  67 => 33,  63 => 27,  59 => 26,  56 => 25,  54 => 24,  44 => 6,  41 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/contact/index.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/public/contact/index.html.twig");
    }
}
