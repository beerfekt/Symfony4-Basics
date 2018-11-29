<?php

/* admin/articles/index.html.twig */
class __TwigTemplate_67a8b209ae20992f66a1be19e0c97d0a6b3f0a95a5ca001f7f9ad0d542c7aa72 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "   Datenbank: Artikel speichern !
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "

    <h1>Artikel bearbeiten:  </h1>
    <p>Gelistete Artikel bearbeiten </p>
    ";
        // line 18
        echo "    ";
        if (($context["articles"] ?? null)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
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
                    echo "                        <a  href=\"#\" class = \"btn btn-danger delete-article\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", array()), "html", null, true);
                    echo "\"  >Delete</a>
                    </td>
                    ";
                }
                // line 46
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
            </tbody>
        </table>
    ";
        } else {
            // line 52
            echo "        <p> No data available! </p>
    ";
        }
        // line 54
        echo "
    <a class = \"btn btn-primary\" href= \"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_new_article");
        echo "\"  >New</a>
";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        // line 60
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.slim.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 62
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 64
        echo "        <!-- <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-test.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script> -->
        <script src=";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "></script>
    ";
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
        return array (  143 => 65,  138 => 64,  133 => 62,  128 => 60,  125 => 59,  119 => 55,  116 => 54,  112 => 52,  106 => 48,  99 => 46,  92 => 43,  88 => 37,  84 => 36,  81 => 35,  79 => 34,  74 => 32,  69 => 29,  64 => 28,  54 => 19,  51 => 18,  45 => 13,  42 => 12,  37 => 5,  34 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/articles/index.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/admin/articles/index.html.twig");
    }
}
