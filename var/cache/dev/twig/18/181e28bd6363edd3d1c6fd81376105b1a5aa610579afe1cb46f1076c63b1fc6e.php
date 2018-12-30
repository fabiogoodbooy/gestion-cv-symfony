<?php

/* admin/allCv.html.twig */
class __TwigTemplate_21a6d8d24920c32135128154f50a27f27726f73487783f52b5e032f9471eec5f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/allCv.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/allCv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/allCv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
<script type=\"text/javascript\">
    \$(document).ready(function() {
        //alert(\"cc\");
        // Setup - add a text input to each footer cell
        \$('#example tfoot th').each( function () {
            var title = \$(this).text();
            \$(this).html( '<input type=\"text\" placeholder=\"Chercher '+title+'\" />' );
        } );

        // DataTable
        var table = \$('#example').DataTable();

        // Apply the search
        table.columns().every( function () {
            var that = this;

            \$( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    } );
</script>
<table id=\"example\" class=\"display\" style=\"width:100%\">
    <thead>
    <tr>
        <th>id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>E-mail</th>
        <th>specialite</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["condidat"]) || array_key_exists("condidat", $context) ? $context["condidat"] : (function () { throw new Twig_Error_Runtime('Variable "condidat" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["con"]) {
            // line 43
            echo "
    <tr>

        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["con"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["con"], "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["con"], "prenom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["con"], "email", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["con"], "specialite", array()), "titre", array()), "html", null, true);
            echo "</td>
        <td>  <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv", array("id" => twig_get_attribute($this->env, $this->source, $context["con"], "id", array()))), "html", null, true);
            echo "\">Afficher cv</a></td>
    </tr>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['con'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
    </tbody>
    <tfoot>
    <tr>
        <th>id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>E-mail</th>
        <th>duree</th>
        <th>action</th>
    </tr>
    </tfoot>
</table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/allCv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 55,  123 => 51,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  98 => 43,  94 => 42,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
<script type=\"text/javascript\">
    \$(document).ready(function() {
        //alert(\"cc\");
        // Setup - add a text input to each footer cell
        \$('#example tfoot th').each( function () {
            var title = \$(this).text();
            \$(this).html( '<input type=\"text\" placeholder=\"Chercher '+title+'\" />' );
        } );

        // DataTable
        var table = \$('#example').DataTable();

        // Apply the search
        table.columns().every( function () {
            var that = this;

            \$( 'input', this.footer() ).on( 'keyup change', function () {
                if ( that.search() !== this.value ) {
                    that
                        .search( this.value )
                        .draw();
                }
            } );
        } );
    } );
</script>
<table id=\"example\" class=\"display\" style=\"width:100%\">
    <thead>
    <tr>
        <th>id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>E-mail</th>
        <th>specialite</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>
    {% for con in condidat %}

    <tr>

        <td>{{con.id}}</td>
        <td>{{con.nom}}</td>
        <td>{{con.prenom}}</td>
        <td>{{con.email}}</td>
        <td>{{con.specialite.titre}}</td>
        <td>  <a href=\"{{ path('cv', {'id' : con.id }) }}\">Afficher cv</a></td>
    </tr>

  {% endfor %}

    </tbody>
    <tfoot>
    <tr>
        <th>id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>E-mail</th>
        <th>duree</th>
        <th>action</th>
    </tr>
    </tfoot>
</table>
    </div>
{% endblock %}", "admin/allCv.html.twig", "/home/fabio/Desktop/gestion-cv-symfony/templates/admin/allCv.html.twig");
    }
}
