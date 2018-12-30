<?php

/* cv/index.html.twig */
class __TwigTemplate_18b41bcd6756106442d97e0c75a6dd21936f686b2fda095fc9f6e9b629f745cb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("tmp.html.twig", "cv/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cv/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cv/index.html.twig"));

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

        echo "Cv index";
        
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
        echo "    <!-- banner -->
    <div class=\"banner_top\" id=\"home\">
        <div class=\"wrapper_top_w3layouts\">

            ";
        // line 10
        $this->loadTemplate("menu.html.twig", "cv/index.html.twig", 10)->display($context);
        // line 11
        echo "            <!-- /slider -->
            <div class=\"slider\">
                <div class=\"callbacks_container\">
                    <ul class=\"rslides callbacks callbacks1\" id=\"slider4\">

                        <li>
                            <div class=\"banner-top2\">
                                <div class=\"banner-info-wthree\">
                                    <h3>Nike</h3>
                                    <p>See how good they feel.</p>

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class=\"banner-top3\">
                                <div class=\"banner-info-wthree\">
                                    <h3>Heels</h3>
                                    <p>For All Walks of Life.</p>

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class=\"banner-top\">
                                <div class=\"banner-info-wthree\">
                                    <h3>Sneakers</h3>
                                    <p>See how good they feel.</p>

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class=\"banner-top1\">
                                <div class=\"banner-info-wthree\">
                                    <h3>Adidas</h3>
                                    <p>For All Walks of Life.</p>

                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <!-- //slider -->
            <ul class=\"top_icons\">
                <li><a href=\"#\"><span class=\"fa fa-facebook\" aria-hidden=\"true\"></span></a></li>
                <li><a href=\"#\"><span class=\"fa fa-twitter\" aria-hidden=\"true\"></span></a></li>
                <li><a href=\"#\"><span class=\"fa fa-linkedin\" aria-hidden=\"true\"></span></a></li>
                <li><a href=\"#\"><span class=\"fa fa-google-plus\" aria-hidden=\"true\"></span></a></li>

            </ul>
        </div>
    </div>
    <!-- //banner -->
    <!-- /girds_bottom-->
    <div class=\"grids_bottom\">
        <div class=\"style-grids\">
            <div class=\"col-md-6 style-grid style-grid-1\">
                <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/b1.jpg"), "html", null, true);
        echo "\" alt=\"shoe\">
            </div>
        </div>
        <div class=\"col-md-6 style-grid style-grid-2\">
            <div class=\"style-image-1_info\">
                <div class=\"style-grid-2-text_info\">
                    <h3>Nike DOWNSHIFTER</h3>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
                        tempora incidunt ut labore et dolore .</p>
                    <div class=\"shop-button\">
                        <a href=\"shop.html\">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class=\"style-image-2\">
                <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/b2.jpg"), "html", null, true);
        echo "\" alt=\"shoe\">
                <div class=\"style-grid-2-text\">
                    <h3>Air force</h3>
                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    </div>
    <!-- //grids_bottom-->
    <!-- /girds_bottom2-->
    <div class=\"grids_sec_2\">
        <div class=\"style-grids_main\">
            <div class=\"col-md-6 grids_sec_2_left\">
                <div class=\"grid_sec_info\">
                    <div class=\"style-grid-2-text_info\">
                        <h3>Sneakers</h3>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
                            tempora incidunt ut labore .</p>
                        <div class=\"shop-button\">
                            <a href=\"shop.html\">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"style-image-2\">
                    <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/b4.jpg"), "html", null, true);
        echo "\" alt=\"shoe\">
                    <div class=\"style-grid-2-text\">
                        <h3>Air force</h3>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 grids_sec_2_left\">

                <div class=\"style-image-2\">
                    <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/b3.jpg"), "html", null, true);
        echo "\" alt=\"shoe\">
                    <div class=\"style-grid-2-text\">
                        <h3>Air force</h3>
                    </div>
                </div>
                <div class=\"grid_sec_info last\">
                    <div class=\"style-grid-2-text_info\">
                        <h3>Sneakers</h3>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
                            tempora incidunt ut labore .</p>
                        <div class=\"shop-button two\">
                            <a href=\"shop.html\">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
    <!-- //grids_bottom2-->
    <!-- /Properties -->
    <div class=\"mid_slider_w3lsagile\">
        <div class=\"col-md-3 mid_slider_text\">
            <h5>Some More Shoes</h5>
        </div>
        <div class=\"col-md-9 mid_slider_info\">
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"3\" class=\"\"></li>
                </ol>
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g1.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g2.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g3.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g4.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g5.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g6.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g2.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g1.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g1.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g2.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g3.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g4.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g1.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g2.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g3.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/g4.jpg"), "html", null, true);
        echo "\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                    <span class=\"fa fa-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                    <span class=\"fa fa-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
                <!-- The Modal -->

            </div>
        </div>

        <div class=\"clearfix\"> </div>
    </div>
    <!--//banner -->

    <!-- /newsletter-->
    <div class=\"newsletter_w3layouts_agile\">
        <div class=\"col-sm-6 newsleft\">
            <h3>Sign up for Newsletter !</h3>
        </div>
        <div class=\"col-sm-6 newsright\">
            <form action=\"#\" method=\"post\">
                <input type=\"email\" placeholder=\"Enter your email...\" name=\"email\" required=\"\">
                <input type=\"submit\" value=\"Submit\">
            </form>
        </div>

        <div class=\"clearfix\"></div>
    </div>
    <!-- //newsletter-->
    <!-- footer -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cv/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 219,  341 => 216,  335 => 213,  329 => 210,  319 => 203,  313 => 200,  307 => 197,  301 => 194,  291 => 187,  285 => 184,  279 => 181,  273 => 178,  263 => 171,  257 => 168,  251 => 165,  245 => 162,  204 => 124,  192 => 115,  164 => 90,  146 => 75,  80 => 11,  78 => 10,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'tmp.html.twig' %}

{% block title %}Cv index{% endblock %}

{% block body %}
    <!-- banner -->
    <div class=\"banner_top\" id=\"home\">
        <div class=\"wrapper_top_w3layouts\">

            {%include \"menu.html.twig\" %}
            <!-- /slider -->
            <div class=\"slider\">
                <div class=\"callbacks_container\">
                    <ul class=\"rslides callbacks callbacks1\" id=\"slider4\">

                        <li>
                            <div class=\"banner-top2\">
                                <div class=\"banner-info-wthree\">
                                    <h3>Nike</h3>
                                    <p>See how good they feel.</p>

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class=\"banner-top3\">
                                <div class=\"banner-info-wthree\">
                                    <h3>Heels</h3>
                                    <p>For All Walks of Life.</p>

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class=\"banner-top\">
                                <div class=\"banner-info-wthree\">
                                    <h3>Sneakers</h3>
                                    <p>See how good they feel.</p>

                                </div>

                            </div>
                        </li>
                        <li>
                            <div class=\"banner-top1\">
                                <div class=\"banner-info-wthree\">
                                    <h3>Adidas</h3>
                                    <p>For All Walks of Life.</p>

                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <!-- //slider -->
            <ul class=\"top_icons\">
                <li><a href=\"#\"><span class=\"fa fa-facebook\" aria-hidden=\"true\"></span></a></li>
                <li><a href=\"#\"><span class=\"fa fa-twitter\" aria-hidden=\"true\"></span></a></li>
                <li><a href=\"#\"><span class=\"fa fa-linkedin\" aria-hidden=\"true\"></span></a></li>
                <li><a href=\"#\"><span class=\"fa fa-google-plus\" aria-hidden=\"true\"></span></a></li>

            </ul>
        </div>
    </div>
    <!-- //banner -->
    <!-- /girds_bottom-->
    <div class=\"grids_bottom\">
        <div class=\"style-grids\">
            <div class=\"col-md-6 style-grid style-grid-1\">
                <img src=\"{{asset('assets/images/b1.jpg')}}\" alt=\"shoe\">
            </div>
        </div>
        <div class=\"col-md-6 style-grid style-grid-2\">
            <div class=\"style-image-1_info\">
                <div class=\"style-grid-2-text_info\">
                    <h3>Nike DOWNSHIFTER</h3>
                    <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
                        tempora incidunt ut labore et dolore .</p>
                    <div class=\"shop-button\">
                        <a href=\"shop.html\">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class=\"style-image-2\">
                <img src=\"{{asset('assets/images/b2.jpg')}}\" alt=\"shoe\">
                <div class=\"style-grid-2-text\">
                    <h3>Air force</h3>
                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    </div>
    <!-- //grids_bottom-->
    <!-- /girds_bottom2-->
    <div class=\"grids_sec_2\">
        <div class=\"style-grids_main\">
            <div class=\"col-md-6 grids_sec_2_left\">
                <div class=\"grid_sec_info\">
                    <div class=\"style-grid-2-text_info\">
                        <h3>Sneakers</h3>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
                            tempora incidunt ut labore .</p>
                        <div class=\"shop-button\">
                            <a href=\"shop.html\">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"style-image-2\">
                    <img src=\"{{asset('assets/images/b4.jpg')}}\" alt=\"shoe\">
                    <div class=\"style-grid-2-text\">
                        <h3>Air force</h3>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 grids_sec_2_left\">

                <div class=\"style-image-2\">
                    <img src=\"{{asset('assets/images/b3.jpg')}}\" alt=\"shoe\">
                    <div class=\"style-grid-2-text\">
                        <h3>Air force</h3>
                    </div>
                </div>
                <div class=\"grid_sec_info last\">
                    <div class=\"style-grid-2-text_info\">
                        <h3>Sneakers</h3>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur.sed quia non numquam eius modi
                            tempora incidunt ut labore .</p>
                        <div class=\"shop-button two\">
                            <a href=\"shop.html\">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
        </div>
    </div>
    <!-- //grids_bottom2-->
    <!-- /Properties -->
    <div class=\"mid_slider_w3lsagile\">
        <div class=\"col-md-3 mid_slider_text\">
            <h5>Some More Shoes</h5>
        </div>
        <div class=\"col-md-9 mid_slider_info\">
            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"3\" class=\"\"></li>
                </ol>
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g1.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g2.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g3.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g4.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g5.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g6.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g2.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g1.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g1.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g2.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g3.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g4.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g1.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g2.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g3.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                            <div class=\"col-md-3 col-sm-3 col-xs-3 slidering\">
                                <div class=\"thumbnail\"><img src=\"{{asset('assets/images/g4.jpg')}}\" alt=\"Image\" style=\"max-width:100%;\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                    <span class=\"fa fa-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                    <span class=\"fa fa-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
                <!-- The Modal -->

            </div>
        </div>

        <div class=\"clearfix\"> </div>
    </div>
    <!--//banner -->

    <!-- /newsletter-->
    <div class=\"newsletter_w3layouts_agile\">
        <div class=\"col-sm-6 newsleft\">
            <h3>Sign up for Newsletter !</h3>
        </div>
        <div class=\"col-sm-6 newsright\">
            <form action=\"#\" method=\"post\">
                <input type=\"email\" placeholder=\"Enter your email...\" name=\"email\" required=\"\">
                <input type=\"submit\" value=\"Submit\">
            </form>
        </div>

        <div class=\"clearfix\"></div>
    </div>
    <!-- //newsletter-->
    <!-- footer -->
{% endblock %}
", "cv/index.html.twig", "/home/fabio/Desktop/gestion-cv-symfony/templates/cv/index.html.twig");
    }
}
