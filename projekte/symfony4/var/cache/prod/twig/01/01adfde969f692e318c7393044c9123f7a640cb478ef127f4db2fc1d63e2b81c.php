<?php

/* public/articles/index.html.twig */
class __TwigTemplate_1855a1fcec373731a3d08d3a4d2fd37868912433c8c004c3f2b321ad76d145f7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("/public/main_nav.html.twig", "public/articles/index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "   Datenbank: Artikel speichern !
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "
";
        // line 24
        echo "    <h1>Blog  </h1>
    <p>Hier werden Daten vom -  ";
        // line 25
        echo twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true);
        echo " -  in <strong>Datenbank</strong> gespeichert und als Blog ausgegeben: </p>
    ";
        // line 27
        echo "    ";
        if (($context["articles"] ?? null)) {
            // line 28
            echo "










        <table id=\"articles\" class=\"table table-striped\">

            ";
            // line 42
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 43
                echo "            <thead>
            <tr>
                <th>

                </th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h4> ";
                // line 54
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["article"], "title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["article"], "title", array()), "NO article received ")) : ("NO article received ")), "html", null, true);
                echo " </h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p> ";
                // line 59
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["article"], "body", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["article"], "body", array()), "NO article received ")) : ("NO article received ")), "html", null, true);
                echo " </p>
                    </td>
                </tr>
                <hr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
            </tbody>
        </table>
    ";
        } else {
            // line 68
            echo "        <p> No data available! </p>
    ";
        }
        // line 70
        echo "
";
    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        // line 75
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.slim.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 77
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 79
        echo "
        <!-- <script src=";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-test.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script> -->
        <script src=";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "></script>
    ";
    }

    public function getTemplateName()
    {
        return "public/articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 81,  141 => 80,  138 => 79,  133 => 77,  128 => 75,  125 => 74,  120 => 70,  116 => 68,  110 => 64,  99 => 59,  91 => 54,  78 => 43,  73 => 42,  58 => 28,  55 => 27,  51 => 25,  48 => 24,  45 => 19,  42 => 18,  37 => 7,  34 => 6,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "public/articles/index.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/public/articles/index.html.twig");
    }
}
