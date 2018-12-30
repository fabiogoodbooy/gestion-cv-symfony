<?php

/* admin/showCv.html.twig */
class __TwigTemplate_6bc5139a4bb80934452e516c54f9b5abd95b340d74b5a685c55c43c21de38044 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "admin/showCv.html.twig", 3);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/showCv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/showCv.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "user", array())) {
        }
        // line 3
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



        <div class=\"page\">
            <div class=\"infophoto\">
                <div class=\"info\">

                    <p><strong>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->source); })()), "nom", array()), "html", null, true);
        echo " &nbsp; ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->source); })()), "prenom", array()), "html", null, true);
        echo "</strong></p>
                    <p>Date de naissance :";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->source); })()), "user", array()), "datenaissance", array()), "d/m/Y"), "html", null, true);
        echo "</p>
                    <p>Adresse : ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 18, $this->source); })()), "adresse", array()), "html", null, true);
        echo "</p>
                    <p>Tel : +216 ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->source); })()), "tel", array()), "html", null, true);
        echo "</p>
                    <p>E-mail : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 20, $this->source); })()), "email", array()), "html", null, true);
        echo "</p>
                    <p>Nationlité : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->source); })()), "nationalite", array()), "html", null, true);
        echo "</p>
                    <p>Specialité : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->source); })()), "specialite", array()), "titre", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"photo\">

                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->source); })()), "avatar", array())), "html", null, true);
        echo "\" style=\"width:150px; height: 150px;border-radius: 50%;margin-right: 25px; \">

                </div>
            </div>
            <!-- Formation -->
            <div class=\"section\">
                <h2>Formation </h2>





                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listformation"]) || array_key_exists("listformation", $context) ? $context["listformation"] : (function () { throw new Twig_Error_Runtime('Variable "listformation" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ls"]) {
            // line 39
            echo "                    <div class=\"row\">
                        <div class=\"col-md-4\"> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ls"], "titre", array()), "html", null, true);
            echo " <br>
                            ";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ls"], "anneescoler", array()), "d/m/Y"), "html", null, true);
            echo " -
                            ";
            // line 42
            if ( !twig_get_attribute($this->env, $this->source, $context["ls"], "anneeterminal", array())) {
                // line 43
                echo "                            jusqu'à aujourd'hui
                            ";
            } else {
                // line 45
                echo "                            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ls"], "anneeterminal", array()), "d/m/Y"), "html", null, true);
                echo " </div>
                        ";
            }
            // line 47
            echo "
                        <div class=\"col-md-8\"><span class=\"titre\"> &nbsp;</span>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ls"], "diplome", array()), "html", null, true);
            echo " &nbsp;avec  Mention &nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ls"], "mention", array()), "html", null, true);
            echo "

                            <br>
                            <hr>
                        </div>

                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ls'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "

            </div>
            <!-- experience professionneles -->
            <div class=\"section\">
                <h2>Expérience Professionneles</h2>



                <div class=\"row\">
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experience"]) || array_key_exists("experience", $context) ? $context["experience"] : (function () { throw new Twig_Error_Runtime('Variable "experience" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ex"]) {
            // line 67
            echo "                        <div class=\"col-md-4\"> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ex"], "datedebut", array()), "d/m/Y"), "html", null, true);
            echo " <span class=\"duree\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ex"], "duree", array()), "html", null, true);
            echo " </span>
                        </div>

                        <div class=\"col-md-8\"><span class=\"titre\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ex"], "type", array()), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ex"], "lieu", array()), "html", null, true);
            echo "
                            <br>
                            ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ex"], "description", array()), "html", null, true);
            echo "

                            <br>
                            <hr>
                        </div>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                </div>


            </div>
            <!-- langue -->
            <div class=\"section\">
                <h2> Langues   </h2>


                <div class=\"row\">
                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langue"]) || array_key_exists("langue", $context) ? $context["langue"] : (function () { throw new Twig_Error_Runtime('Variable "langue" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lg"]) {
            // line 91
            echo "                        <div class=\"col-md-4\">   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lg"], "titre", array()), "html", null, true);
            echo "</div>
                        <div class=\"col-md-8\"> ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lg"], "niveau", array()), "html", null, true);
            echo "
                            <br>
                            <hr>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
                </div>

            </div>

        </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/showCv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 97,  228 => 92,  223 => 91,  219 => 90,  207 => 80,  193 => 72,  186 => 70,  177 => 67,  173 => 66,  161 => 56,  145 => 48,  142 => 47,  136 => 45,  132 => 43,  130 => 42,  126 => 41,  122 => 40,  119 => 39,  115 => 38,  100 => 26,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  67 => 16,  57 => 8,  48 => 7,  38 => 3,  35 => 1,  15 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user %}

    {% extends 'base.html.twig' %}



    {% block body %}




        <div class=\"page\">
            <div class=\"infophoto\">
                <div class=\"info\">

                    <p><strong>{{user.nom}} &nbsp; {{user.prenom}}</strong></p>
                    <p>Date de naissance :{{ app.user.datenaissance |date('d/m/Y')}}</p>
                    <p>Adresse : {{user.adresse}}</p>
                    <p>Tel : +216 {{user.tel}}</p>
                    <p>E-mail : {{user.email}}</p>
                    <p>Nationlité : {{user.nationalite}}</p>
                    <p>Specialité : {{ user.specialite.titre }}</p>
                </div>
                <div class=\"photo\">

                    <img src=\"{{asset (user.avatar)}}\" style=\"width:150px; height: 150px;border-radius: 50%;margin-right: 25px; \">

                </div>
            </div>
            <!-- Formation -->
            <div class=\"section\">
                <h2>Formation </h2>





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

                            <br>
                            <hr>
                        </div>

                    </div>
                {% endfor %}


            </div>
            <!-- experience professionneles -->
            <div class=\"section\">
                <h2>Expérience Professionneles</h2>



                <div class=\"row\">
                    {% for ex in experience %}
                        <div class=\"col-md-4\"> {{ ex.datedebut |date('d/m/Y')}} <span class=\"duree\"> {{ ex.duree }} </span>
                        </div>

                        <div class=\"col-md-8\"><span class=\"titre\">{{ex.type}}</span> {{ex.lieu}}
                            <br>
                            {{ ex.description }}

                            <br>
                            <hr>
                        </div>


                    {% endfor %}
                </div>


            </div>
            <!-- langue -->
            <div class=\"section\">
                <h2> Langues   </h2>


                <div class=\"row\">
                    {% for lg in langue %}
                        <div class=\"col-md-4\">   {{ lg.titre }}</div>
                        <div class=\"col-md-8\"> {{ lg.niveau }}
                            <br>
                            <hr>
                        </div>
                    {% endfor %}

                </div>

            </div>

        </div>

    {% endblock %}

{% endif %}
", "admin/showCv.html.twig", "/home/fabio/Desktop/gestion-cv-symfony/templates/admin/showCv.html.twig");
    }
}
