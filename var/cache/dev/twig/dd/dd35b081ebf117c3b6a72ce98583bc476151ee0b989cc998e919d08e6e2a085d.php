<?php

/* condidat/index.html.twig */
class __TwigTemplate_12e3c5773e020fb5288b3e3e0ad7b4b61ca791d3b53b29e9db57b0543f1e0158 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "condidat/index.html.twig", 3);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "condidat/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "condidat/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "user", array())) {
            // line 10
            echo "

<div class=\"page\">
    <div class=\"infophoto\">
        <div class=\"info\">

            <p><strong>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "user", array()), "nom", array()), "html", null, true);
            echo " &nbsp; ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "user", array()), "prenom", array()), "html", null, true);
            echo "</strong></p>
            <p>Date de naissance :";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->source); })()), "user", array()), "datenaissance", array()), "d/m/Y"), "html", null, true);
            echo "</p>
            <p>Adresse : ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->source); })()), "user", array()), "adresse", array()), "html", null, true);
            echo "</p>
            <p>Tel : +216 ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 19, $this->source); })()), "user", array()), "tel", array()), "html", null, true);
            echo "</p>
            <p>E-mail : ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "user", array()), "email", array()), "html", null, true);
            echo "</p>
            <p>Nationlité : ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->source); })()), "user", array()), "nationalite", array()), "html", null, true);
            echo "</p>
            <p>Specialité : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->source); })()), "user", array()), "specialite", array()), "titre", array()), "html", null, true);
            echo "</p>
        </div>
        <div class=\"photo\">

            <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "user", array()), "avatar", array())), "html", null, true);
            echo "\" style=\"width:150px; height: 150px;border-radius: 50%;margin-right: 25px; \">

        </div>
    </div>
    <!-- Formation -->
    <div class=\"section\">
        <h2>Formation  <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_new", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 32, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                          style=\"
    float: right;
\">+</a></h2>





            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listformation"]) || array_key_exists("listformation", $context) ? $context["listformation"] : (function () { throw new Twig_Error_Runtime('Variable "listformation" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ls"]) {
                // line 42
                echo "            <div class=\"row\">
                <div class=\"col-md-4\"> ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ls"], "titre", array()), "html", null, true);
                echo " <br>
                ";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ls"], "anneescoler", array()), "d/m/Y"), "html", null, true);
                echo " -
                    ";
                // line 45
                if ( !twig_get_attribute($this->env, $this->source, $context["ls"], "anneeterminal", array())) {
                    // line 46
                    echo "                    jusqu'à aujourd'hui
                    ";
                } else {
                    // line 48
                    echo "                    ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ls"], "anneeterminal", array()), "d/m/Y"), "html", null, true);
                    echo " </div>
                        ";
                }
                // line 50
                echo "
                <div class=\"col-md-8\"><span class=\"titre\"> &nbsp;</span>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ls"], "diplome", array()), "html", null, true);
                echo " &nbsp;avec  Mention &nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ls"], "mention", array()), "html", null, true);
                echo "

                <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerFormation", array("id" => twig_get_attribute($this->env, $this->source, $context["ls"], "id", array()), "id_user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger delete-article\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ls"], "id", array()), "html", null, true);
                echo "\"
                   style=\"
    float: right;
\">-</a>
                    <br>
                    <hr>
                </div>

            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "

    </div>
    <!-- experience professionneles -->
    <div class=\"section\">
        <h2>Expérience Professionneles  <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_new", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 68, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                                           style=\"
    float: right;
\">+</a> </h2>



            <div class=\"row\">
            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new Twig_Error_Runtime('Variable "experience" does not exist.', 76, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ex"]) {
                // line 77
                echo "                <div class=\"col-md-4\"> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ex"], "datedebut", array()), "d/m/Y"), "html", null, true);
                echo " <span class=\"duree\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ex"], "duree", array()), "html", null, true);
                echo " </span>
                </div>

                <div class=\"col-md-8\"><span class=\"titre\">";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ex"], "type", array()), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ex"], "lieu", array()), "html", null, true);
                echo "
                <br>
                    ";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ex"], "description", array()), "html", null, true);
                echo "
                    <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerexperionce", array("id" => twig_get_attribute($this->env, $this->source, $context["ex"], "id", array()), "id_user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 83, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger delete-article\" style=\"
    float: right;
\">-</a>
                    <br>
                    <hr>
                </div>


            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </div>


    </div>
    <!-- langue -->
    <div class=\"section\">
        <h2> Langues   <a class=\"btn btn-primary btn-sm\" href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("langue_new", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 98, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
            echo "\"
                          style=\"
    float: right;
\">+</a> </h2>


        <div class=\"row\">
        ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new Twig_Error_Runtime('Variable "langue" does not exist.', 105, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
                // line 106
                echo "        <div class=\"col-md-4\">   ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lg"], "titre", array()), "html", null, true);
                echo "</div>
            <div class=\"col-md-8\"> ";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lg"], "niveau", array()), "html", null, true);
                echo "
            <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerlangue", array("id" => twig_get_attribute($this->env, $this->source, $context["lg"], "id", array()), "id_user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 108, $this->source); })()), "user", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger delete-article\"
               style=\"
    float: right;
\">-</a>
                <br>
                <hr>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "
        </div>

    </div>

</div>
    ";
        } else {
            // line 123
            echo "        <div class=\"alert alert-danger\" role=\"alert\">

            Vous besoin de connecter avant !!
        </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "condidat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 123,  277 => 116,  263 => 108,  259 => 107,  254 => 106,  250 => 105,  240 => 98,  232 => 92,  217 => 83,  213 => 82,  206 => 80,  197 => 77,  193 => 76,  182 => 68,  175 => 63,  157 => 53,  150 => 51,  147 => 50,  141 => 48,  137 => 46,  135 => 45,  131 => 44,  127 => 43,  124 => 42,  120 => 41,  108 => 32,  99 => 26,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  66 => 16,  58 => 10,  56 => 9,  53 => 8,  44 => 7,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends 'base.html.twig' %}



{% block body %}

    {% if app.user %}


<div class=\"page\">
    <div class=\"infophoto\">
        <div class=\"info\">

            <p><strong>{{app.user.nom}} &nbsp; {{app.user.prenom}}</strong></p>
            <p>Date de naissance :{{ app.user.datenaissance |date('d/m/Y')}}</p>
            <p>Adresse : {{app.user.adresse}}</p>
            <p>Tel : +216 {{app.user.tel}}</p>
            <p>E-mail : {{app.user.email}}</p>
            <p>Nationlité : {{app.user.nationalite}}</p>
            <p>Specialité : {{ app.user.specialite.titre }}</p>
        </div>
        <div class=\"photo\">

            <img src=\"{{asset (app.user.avatar)}}\" style=\"width:150px; height: 150px;border-radius: 50%;margin-right: 25px; \">

        </div>
    </div>
    <!-- Formation -->
    <div class=\"section\">
        <h2>Formation  <a class=\"btn btn-primary btn-sm\" href=\"{{ path('formation_new', {'id' : app.user.id }) }}\"
                          style=\"
    float: right;
\">+</a></h2>





            {% for ls in listformation %}
            <div class=\"row\">
                <div class=\"col-md-4\"> {{ ls.titre }} <br>
                {{  ls.anneescoler |date('d/m/Y') }} -
                    {% if not ls.anneeterminal%}
                    jusqu'à aujourd'hui
                    {% else %}
                    {{ ls.anneeterminal |date('d/m/Y')}} </div>
                        {% endif %}

                <div class=\"col-md-8\"><span class=\"titre\"> &nbsp;</span>{{ ls.diplome }} &nbsp;avec  Mention &nbsp;{{ ls.mention }}

                <a href=\"{{ path('supprimerFormation', {'id' : ls.id ,'id_user': app.user.id}) }}\" class=\"btn btn-danger delete-article\" data-id=\"{{ ls.id }}\"
                   style=\"
    float: right;
\">-</a>
                    <br>
                    <hr>
                </div>

            </div>
            {% endfor %}


    </div>
    <!-- experience professionneles -->
    <div class=\"section\">
        <h2>Expérience Professionneles  <a class=\"btn btn-primary btn-sm\" href=\"{{ path('experience_new', {'id' : app.user.id }) }}\"
                                           style=\"
    float: right;
\">+</a> </h2>



            <div class=\"row\">
            {% for ex in experience %}
                <div class=\"col-md-4\"> {{ ex.datedebut |date('d/m/Y')}} <span class=\"duree\"> {{ ex.duree }} </span>
                </div>

                <div class=\"col-md-8\"><span class=\"titre\">{{ex.type}}</span> {{ex.lieu}}
                <br>
                    {{ ex.description }}
                    <a href=\"{{ path('supprimerexperionce', {'id' : ex.id ,'id_user': app.user.id}) }}\" class=\"btn btn-danger delete-article\" style=\"
    float: right;
\">-</a>
                    <br>
                    <hr>
                </div>


            {% endfor %}
            </div>


    </div>
    <!-- langue -->
    <div class=\"section\">
        <h2> Langues   <a class=\"btn btn-primary btn-sm\" href=\"{{ path('langue_new', {'id' : app.user.id }) }}\"
                          style=\"
    float: right;
\">+</a> </h2>


        <div class=\"row\">
        {% for lg in langue %}
        <div class=\"col-md-4\">   {{ lg.titre }}</div>
            <div class=\"col-md-8\"> {{ lg.niveau }}
            <a href=\"{{ path('supprimerlangue', {'id' : lg.id ,'id_user': app.user.id}) }}\" class=\"btn btn-danger delete-article\"
               style=\"
    float: right;
\">-</a>
                <br>
                <hr>
            </div>
        {% endfor %}

        </div>

    </div>

</div>
    {% else %}
        <div class=\"alert alert-danger\" role=\"alert\">

            Vous besoin de connecter avant !!
        </div>
{% endif %}
{% endblock %}


", "condidat/index.html.twig", "/home/fabio/Desktop/gestion-cv-symfony/templates/condidat/index.html.twig");
    }
}
