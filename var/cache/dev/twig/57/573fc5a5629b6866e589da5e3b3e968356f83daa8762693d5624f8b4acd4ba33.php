<?php

/* tmp.html.twig */
class __TwigTemplate_d35e7ec614d1b9cde271aa3b18d854b40f2281f5d2d9542d39208d8825fefaba extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tmp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tmp.html.twig"));

        // line 1
        echo "<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang=\"zxx\">

<head>

    <!-- custom-theme -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Epi Sousse\" />
    <script type=\"application/x-javascript\">
        addEventListener(\"load\", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //custom-theme -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/shop.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" property=\"\" />
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style7.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/contact.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

    <!-- font-awesome-icons -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- //font-awesome-icons -->
    <link href=\"//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800\"
          rel=\"stylesheet\">
    <link href=\"//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800\" rel=\"stylesheet\">
    ";
        // line 38
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "</head>

<body id=\"home\">
";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "


<!-- js -->
<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<!-- //js -->
<!-- /nav -->
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/classie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/demo1.js"), "html", null, true);
        echo "\"></script>
<!-- //nav -->
<!-- cart-js -->
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/minicart.js"), "html", null, true);
        echo "\"></script>
<script>
    shoe.render();

    shoe.cart.on('shoe_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<!--search-bar-->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/search.js"), "html", null, true);
        echo "\"></script>
<!--//search-bar-->
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(function () {
        \$(\"#slider4\").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 1000,
            namespace: \"callbacks\",
            before: function () {
                \$('.events').append(\"<li>before event fired.</li>\");
            },
            after: function () {
                \$('.events').append(\"<li>after event fired.</li>\");
            }
        });
    });
</script>
<!-- js for portfolio lightbox -->
<!-- start-smoth-scrolling -->

<script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/easing.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function (\$) {
        \$(\".scroll\").click(function (event) {
            event.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smoth-scrolling -->

<script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-3.1.1.min.js"), "html", null, true);
        echo "\"></script>


</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tmp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 42,  207 => 38,  191 => 109,  175 => 96,  171 => 95,  147 => 74,  142 => 72,  123 => 56,  117 => 53,  113 => 52,  109 => 51,  103 => 48,  97 => 44,  95 => 42,  90 => 39,  88 => 38,  80 => 33,  74 => 30,  70 => 29,  66 => 28,  62 => 27,  58 => 26,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang=\"zxx\">

<head>

    <!-- custom-theme -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"keywords\" content=\"Epi Sousse\" />
    <script type=\"application/x-javascript\">
        addEventListener(\"load\", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //custom-theme -->
    <link href=\"{{asset('assets/css/bootstrap.css')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"{{asset('assets/css/shop.css')}}\" type=\"text/css\" media=\"screen\" property=\"\" />
    <link href=\"{{asset('assets/css/style7.css')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/contact.css')}}\">
    <link href=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

    <!-- font-awesome-icons -->
    <link href=\"{{asset('assets/css/font-awesome.css')}}\" rel=\"stylesheet\">
    <!-- //font-awesome-icons -->
    <link href=\"//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800\"
          rel=\"stylesheet\">
    <link href=\"//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800\" rel=\"stylesheet\">
    {% block stylesheets %}{%endblock%}
</head>

<body id=\"home\">
{%block body %}
{%endblock%}



<!-- js -->
<script type=\"text/javascript\" src=\"{{asset('assets/js/jquery-2.1.4.min.js')}}\"></script>
<!-- //js -->
<!-- /nav -->
<script src=\"{{asset('assets/js/modernizr-2.6.2.min.js')}}\"></script>
<script src=\"{{asset('assets/js/classie.js')}}\"></script>
<script src=\"{{asset('assets/js/demo1.js')}}\"></script>
<!-- //nav -->
<!-- cart-js -->
<script src=\"{{asset('assets/js/minicart.js')}}\"></script>
<script>
    shoe.render();

    shoe.cart.on('shoe_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<!--search-bar-->
<script src=\"{{asset('assets/js/search.js')}}\"></script>
<!--//search-bar-->
<script src=\"{{asset('assets/js/responsiveslides.min.js')}}\"></script>
<script>
    \$(function () {
        \$(\"#slider4\").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 1000,
            namespace: \"callbacks\",
            before: function () {
                \$('.events').append(\"<li>before event fired.</li>\");
            },
            after: function () {
                \$('.events').append(\"<li>after event fired.</li>\");
            }
        });
    });
</script>
<!-- js for portfolio lightbox -->
<!-- start-smoth-scrolling -->

<script type=\"text/javascript\" src=\"{{asset('assets/js/move-top.js')}}\"></script>
<script type=\"text/javascript\" src=\"{{asset('assets/js/easing.js')}}\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function (\$) {
        \$(\".scroll\").click(function (event) {
            event.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smoth-scrolling -->

<script type=\"text/javascript\" src=\"{{asset('assets/js/bootstrap-3.1.1.min.js')}}\"></script>


</body>

</html>", "tmp.html.twig", "/home/fabio/Desktop/gestion-cv-symfony/templates/tmp.html.twig");
    }
}
