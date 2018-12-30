<?php

/* home.html.twig */
class __TwigTemplate_a0e4111eb45dd62beda14df1736c7525e0c673ae0b47118cffd39a2cb5eae1de extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("tmp.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "tmp.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "user", array())) {
            // line 6
            echo "<!-- banner -->
<div class=\"banner_top\" id=\"home\">
    <div class=\"wrapper_top_w3layouts\">

";
            // line 10
            $this->loadTemplate("menu.html.twig", "home.html.twig", 10)->display($context);
            // line 11
            echo "        <!-- /girds_bottom-->
        <div class=\"grids_bottom\">
            <div class=\"style-grids\">
                <div class=\"col-md-6 style-grid style-grid-1\">
                    <img src=\"https://myepi.episousse.com.tn/img/epi.png\" alt=\"shoe\">
                </div>
            </div>
            <div class=\"col-md-6 style-grid style-grid-2\">
                <div class=\"style-image-1_info\">
                    <div class=\"style-grid-2-text_info\">
                        <h3>EPI crée votre CV</h3>
                        <p>ILe logiciel de gestion de CV s’impose comme un outil de recrutement indispensable. En 2018, le recrutement est un enjeu majeur pour les entreprises.
                            Ces dernières se retrouvent face à une problématique difficile à résoudre : le EPI a crée une platfrome de GESTION CV pour facilite la creation de cv et
                            eviter l'utilisation des papiers .</p>
                        <div class=\"shop-button\">
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("condidat", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
            echo "\">Commencez Maintenant</a>
                        </div>
                    </div>
                </div>
                <div class=\"style-image-2\">
                    <img src=\"https://scontent.ftun1-1.fna.fbcdn.net/v/t1.0-9/44747927_2154860784764084_3070694247029014528_n.jpg?_nc_cat=106&_nc_ht=scontent.ftun1-1.fna&oh=291315154e198dcd4d4e8118e155c647&oe=5C8FBDB7\" alt=\"shoe\">
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
    <!-- //grids_bottom-->
    ";
        } else {
            // line 39
            echo "    <div class=\"alert alert-danger\" role=\"alert\">

        Vous besoin de connecter avant !!
    </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 39,  81 => 26,  64 => 11,  62 => 10,  56 => 6,  53 => 5,  44 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'tmp.html.twig' %}


{% block body %}
    {% if app.user %}
<!-- banner -->
<div class=\"banner_top\" id=\"home\">
    <div class=\"wrapper_top_w3layouts\">

{%include \"menu.html.twig\" %}
        <!-- /girds_bottom-->
        <div class=\"grids_bottom\">
            <div class=\"style-grids\">
                <div class=\"col-md-6 style-grid style-grid-1\">
                    <img src=\"https://myepi.episousse.com.tn/img/epi.png\" alt=\"shoe\">
                </div>
            </div>
            <div class=\"col-md-6 style-grid style-grid-2\">
                <div class=\"style-image-1_info\">
                    <div class=\"style-grid-2-text_info\">
                        <h3>EPI crée votre CV</h3>
                        <p>ILe logiciel de gestion de CV s’impose comme un outil de recrutement indispensable. En 2018, le recrutement est un enjeu majeur pour les entreprises.
                            Ces dernières se retrouvent face à une problématique difficile à résoudre : le EPI a crée une platfrome de GESTION CV pour facilite la creation de cv et
                            eviter l'utilisation des papiers .</p>
                        <div class=\"shop-button\">
                            <a href=\"{{ path('condidat', {'id' : app.user.id }) }}\">Commencez Maintenant</a>
                        </div>
                    </div>
                </div>
                <div class=\"style-image-2\">
                    <img src=\"https://scontent.ftun1-1.fna.fbcdn.net/v/t1.0-9/44747927_2154860784764084_3070694247029014528_n.jpg?_nc_cat=106&_nc_ht=scontent.ftun1-1.fna&oh=291315154e198dcd4d4e8118e155c647&oe=5C8FBDB7\" alt=\"shoe\">
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
    <!-- //grids_bottom-->
    {% else %}
    <div class=\"alert alert-danger\" role=\"alert\">

        Vous besoin de connecter avant !!
    </div>
    {% endif %}
{% endblock %}", "home.html.twig", "/home/fabio/Desktop/gestion-cv-symfony/templates/home.html.twig");
    }
}
