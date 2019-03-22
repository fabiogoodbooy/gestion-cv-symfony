<?php

/* user/edit.html.twig */
class __TwigTemplate_e55a93ce5409c547677c47c3810fa688707d9f96595a8ddacebc3a45779f2151 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit User";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->source); })()), "user", array())) {
            // line 7
            echo "<div class=\"page\">
    <h1>Modifier photo de profile </h1>
<br>
        <br>
        <br>
        <form action=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateAvatar", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
            echo "\"   method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"row\">
                <div class=\"col\">

            <input  class=\"form-control\" type=\"file\" name=\"img[]\" multiple />
                </div>
                <div class=\"col\">
            <input type=\"submit\" class=\"btn btn-danger\" value=\"Update\">
                </div>
            </div>

        </form>
        <br>
        <br>

        <hr>
        <hr>
        <br>

        <h1>Modifier les information</h1>
        <br>

        ";
            // line 34
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), 'form_start');
            echo "
<div class=\"row\">
    <div class=\"col\">
        ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "nom", array()), 'row', array("label" => "Nom ", "attr" => array("placeholder" => "Nom")));
            echo "
    </div>
    <div class=\"col\">
        ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "prenom", array()), 'row', array("label" => "Prenom ", "attr" => array("placeholder" => "Prenom", "class" => "tst")));
            echo "
    </div>
</div>
        <div class=\"row\">
    <div class=\"col\">
        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "email", array()), 'row', array("label" => "Email ", "attr" => array("placeholder" => "Email")));
            echo "
    </div>
    <div class=\"col\">
        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "username", array()), 'row', array("label" => "username ", "attr" => array("placeholder" => "Username")));
            echo "
    </div>
        </div>
        <div class=\"row\">
    <div class=\"col\">
        ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "datenaissance", array()), 'row', array("label" => "Date de naissance "));
            echo "
    </div>
    <div class=\"col\">
        ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "nationalite", array()), 'row', array("label" => "nationalite", "attr" => array("placeholder" => "Nationalite")));
            echo "
    </div>
        </div>
        <div class=\"row\">
    <div class=\"col\">
        ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "adresse", array()), 'row', array("label" => "adresse", "attr" => array("placeholder" => "Adresse")));
            echo "
    </div>
    <div class=\"col\">
        ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "tel", array()), 'row', array("label" => "tel", "attr" => array("placeholder" => "tel")));
            echo "
    </div>

    </div>

        <button class=\"btn btn-lg btn-danger btn-block\" type=\"submit\">Update</button>
        ";
            // line 70
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
            echo "


    ";
        } else {
            // line 74
            echo "        <div class=\"alert alert-danger\" role=\"alert\">

            Vous besoin de connecter avant !!
        </div>
        </div>
    ";
        }
        // line 80
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 80,  177 => 74,  170 => 70,  161 => 64,  155 => 61,  147 => 56,  141 => 53,  133 => 48,  127 => 45,  119 => 40,  113 => 37,  107 => 34,  82 => 12,  75 => 7,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Edit User{% endblock %}

{% block body %}
    {% if app.user %}
<div class=\"page\">
    <h1>Modifier photo de profile </h1>
<br>
        <br>
        <br>
        <form action=\"{{  path('updateAvatar',{'id':app.user.id})}}\"   method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"row\">
                <div class=\"col\">

            <input  class=\"form-control\" type=\"file\" name=\"img[]\" multiple />
                </div>
                <div class=\"col\">
            <input type=\"submit\" class=\"btn btn-danger\" value=\"Update\">
                </div>
            </div>

        </form>
        <br>
        <br>

        <hr>
        <hr>
        <br>

        <h1>Modifier les information</h1>
        <br>

        {{ form_start(form)}}
<div class=\"row\">
    <div class=\"col\">
        {{form_row(form.nom,{'label':'Nom ','attr':{'placeholder':'Nom'}})}}
    </div>
    <div class=\"col\">
        {{form_row(form.prenom,{'label':'Prenom ','attr':{'placeholder':'Prenom','class': 'tst'}})}}
    </div>
</div>
        <div class=\"row\">
    <div class=\"col\">
        {{form_row(form.email,{'label':'Email ','attr':{'placeholder':'Email'}})}}
    </div>
    <div class=\"col\">
        {{form_row(form.username,{'label':'username ','attr':{'placeholder':'Username'}})}}
    </div>
        </div>
        <div class=\"row\">
    <div class=\"col\">
        {{form_row(form.datenaissance,{'label':'Date de naissance '})}}
    </div>
    <div class=\"col\">
        {{form_row(form.nationalite,{'label':'nationalite','attr':{'placeholder':'Nationalite'}})}}
    </div>
        </div>
        <div class=\"row\">
    <div class=\"col\">
        {{form_row(form.adresse,{'label':'adresse','attr':{'placeholder':'Adresse'}})}}
    </div>
    <div class=\"col\">
        {{form_row(form.tel,{'label':'tel','attr':{'placeholder':'tel'}})}}
    </div>

    </div>

        <button class=\"btn btn-lg btn-danger btn-block\" type=\"submit\">Update</button>
        {{ form_end(form)}}


    {% else %}
        <div class=\"alert alert-danger\" role=\"alert\">

            Vous besoin de connecter avant !!
        </div>
        </div>
    {% endif %}

{% endblock %}
", "user/edit.html.twig", "/home/fabio/Desktop/gestion-cv-symfony/templates/user/edit.html.twig");
    }
}
