<?php

/* admin/benutzerverwaltung/index.html.twig */
class __TwigTemplate_99daf1c970270bbe6807f0e5e231405e77fe9d56e2e1f758a75965bd1f176677 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/main_nav.html.twig", "admin/benutzerverwaltung/index.html.twig", 1);
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

    <h1>Benutzer bearbeiten:  </h1>
    <p>Gelistete Benutzer bearbeiten </p>
    ";
        // line 18
        echo "    ";
        if (($context["users"] ?? null)) {
            // line 19
            echo "        <table id=\"users\" class=\"table table-striped\">
            <thead>
            <tr>
                <th>Benutzername:</th>
                <th>Rolle:</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 29
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 30
                echo "                <tr>
                    <td>
                        ";
                // line 32
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "NO username received ")) : ("NO username received ")), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 35
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "role", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["user"], "role", array()), "NO role received ")) : ("NO role received ")), "html", null, true);
                echo "
                    </td>
                    <td>
                        <a  href=\"/admin/benutzerverwaltung/";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-dark\">Details</a>
                        <a  href=\"/admin/benutzerverwaltung/edit/";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                echo "\" class = \"btn btn-light\" >Editieren</a>
                        ";
                // line 45
                echo "                        <a  href=\"#\" class = \"btn btn-danger delete-article\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
                echo "\"  >Delete</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
            </tbody>
        </table>
    ";
        } else {
            // line 53
            echo "        <p> No data available! </p>
    ";
        }
        // line 55
        echo "
    ";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/jquery/dist/jquery.slim.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 63
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("node_modules/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script>
        ";
        // line 65
        echo "        <!-- <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-test.js"), "html", null, true);
        echo " type=\"text/javascript\" ></script> -->
        <script src=";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "></script>
    ";
    }

    public function getTemplateName()
    {
        return "admin/benutzerverwaltung/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 66,  133 => 65,  128 => 63,  123 => 61,  120 => 60,  115 => 55,  111 => 53,  105 => 49,  94 => 45,  90 => 39,  86 => 38,  80 => 35,  74 => 32,  70 => 30,  65 => 29,  54 => 19,  51 => 18,  45 => 13,  42 => 12,  37 => 5,  34 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/benutzerverwaltung/index.html.twig", "/home/vagrant/projekte/tutorials/symfony4/basics/templates/admin/benutzerverwaltung/index.html.twig");
    }
}
