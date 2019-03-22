<?php

/* menu.html.twig */
class __TwigTemplate_d12656062eaa1de14d9de51617fc0310598ac2cde5f22e0e723e9c2dc128a6aa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<div class=\"header_agileits\">

\t\t\t\t<div class=\"overlay overlay-contentpush\">
\t\t\t\t\t<button type=\"button\" class=\"overlay-close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>

\t\t\t\t\t<nav>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "user", array()), "email", array()) != "admin@admin.fr")) {
            // line 9
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" class=\"active\">Home</a></li>
                                                        
\t\t\t\t\t\t\t<li><a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("condidat", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
            echo "\">Votre Cv</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\">Votre profile</a></li>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">

\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">logout</a></li>

\t\t\t\t\t\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allCv");
            echo "\" class=\"active\">Tous les CV</a></li>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">logout</a></li>
\t\t\t\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"mobile-nav-button\">
\t\t\t\t\t<button id=\"trigger-overlay\" type=\"button\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></button>
\t\t\t\t</div>


\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  68 => 20,  62 => 18,  56 => 15,  50 => 12,  46 => 11,  40 => 9,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"header_agileits\">

\t\t\t\t<div class=\"overlay overlay-contentpush\">
\t\t\t\t\t<button type=\"button\" class=\"overlay-close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button>

\t\t\t\t\t<nav>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% if app.user.email != \"admin@admin.fr\" %}
\t\t\t\t\t\t\t<li><a href=\"{{ path('home') }}\" class=\"active\">Home</a></li>
                                                        
\t\t\t\t\t\t\t<li><a href=\"{{ path('condidat', {'id' : app.user.id }) }}\">Votre Cv</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('profile')}}\">Votre profile</a></li>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">

\t\t\t\t\t\t\t\t<li><a href=\"{{ path('security_logout')}}\">logout</a></li>

\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('allCv') }}\" class=\"active\">Tous les CV</a></li>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('security_logout')}}\">logout</a></li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t\t<div class=\"mobile-nav-button\">
\t\t\t\t\t<button id=\"trigger-overlay\" type=\"button\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></button>
\t\t\t\t</div>


\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>", "menu.html.twig", "/home/fabio/Desktop/gestion-cv-symfony/templates/menu.html.twig");
    }
}
