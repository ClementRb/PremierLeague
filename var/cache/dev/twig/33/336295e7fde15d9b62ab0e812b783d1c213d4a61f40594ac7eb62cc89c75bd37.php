<?php

/* base.html.twig */
class __TwigTemplate_a80e915e39499466de5edd091174b9d5a282f997de9b860e10edabf52cb98b95 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>Premier League</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Sublime project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "</head>



    <body>


    <div class=\"super_container\">
        <header class=\"header\">
            <div class=\"header_container\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"header_content d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"logo\"><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Premier League</a></div>
                                <nav class=\"main_nav\">
                                    <ul>
                                        <li class=\"\">
                                            <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil</a>
                                        </li>
                                        <li class=\"\">
                                            <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getTeams");
        echo "\">Equipes</a>
                                        </li>
                                        <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getPlayers");
        echo "\">Joueurs</a></li>
                                        ";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 44
            echo "                                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>
                                        ";
        } else {
            // line 46
            echo "                                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Se connecter</a></li>
                                        <li><a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a></li>
                                        ";
        }
        // line 49
        echo "                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
                ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "
                 <div class=\"footer_overlay\"></div>
                <footer class=\"footer\">
                    <div class=\"footer_background\" style=\"background-image:url(";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/premier_league_pattern.gif"), "html", null, true);
        echo ")\"></div>
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div
                                        class=\"footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center\">
                                    <div class=\"footer_logo\"><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" style=\"color: white;\">Premier League</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
        </div>


                ";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "    </body>
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/greensock/TweenMax.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/greensock/TimelineMax.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/scrollmagic/ScrollMagic.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/greensock/animation.gsap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/greensock/ScrollToPlugin.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/main_styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/responsive.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 80,  254 => 79,  246 => 58,  240 => 57,  230 => 16,  226 => 15,  222 => 14,  218 => 13,  214 => 12,  210 => 11,  205 => 10,  199 => 9,  189 => 95,  185 => 94,  181 => 93,  177 => 92,  173 => 91,  169 => 90,  165 => 89,  161 => 88,  157 => 87,  153 => 86,  149 => 85,  145 => 84,  141 => 83,  138 => 82,  136 => 79,  123 => 69,  114 => 63,  109 => 60,  107 => 57,  97 => 49,  92 => 47,  87 => 46,  81 => 44,  79 => 43,  75 => 42,  70 => 40,  64 => 37,  57 => 33,  41 => 19,  39 => 9,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>Premier League</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Sublime project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/bootstrap4/bootstrap.min.css') }}\">
    <link href=\"{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/main_styles.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/responsive.css') }}\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css\">
    {% endblock %}
</head>



    <body>


    <div class=\"super_container\">
        <header class=\"header\">
            <div class=\"header_container\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"header_content d-flex flex-row align-items-center justify-content-start\">
                                <div class=\"logo\"><a href=\"{{ path('index') }}\">Premier League</a></div>
                                <nav class=\"main_nav\">
                                    <ul>
                                        <li class=\"\">
                                            <a href=\"{{ path('index') }}\">Accueil</a>
                                        </li>
                                        <li class=\"\">
                                            <a href=\"{{ path('getTeams') }}\">Equipes</a>
                                        </li>
                                        <li><a href=\"{{ path('getPlayers') }}\">Joueurs</a></li>
                                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                        <li><a href=\"{{ path('fos_user_security_logout') }}\">Se déconnecter</a></li>
                                        {% else %}
                                        <li><a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a></li>
                                        <li><a href=\"{{ path('fos_user_registration_register') }}\">S'enregistrer</a></li>
                                        {% endif %}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
                {% block body %}

                {% endblock %}

                 <div class=\"footer_overlay\"></div>
                <footer class=\"footer\">
                    <div class=\"footer_background\" style=\"background-image:url({{ asset('images/premier_league_pattern.gif') }})\"></div>
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div
                                        class=\"footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center\">
                                    <div class=\"footer_logo\"><a href=\"{{ path('index') }}\" style=\"color: white;\">Premier League</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
        </div>


                {% block javascripts %}

        {% endblock %}
    </body>
        <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
        <script src=\"{{ asset('styles/bootstrap4/popper.js') }}\"></script>
        <script src=\"{{ asset('styles/bootstrap4/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/greensock/TweenMax.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/greensock/TimelineMax.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/scrollmagic/ScrollMagic.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/greensock/animation.gsap.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/greensock/ScrollToPlugin.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
        <script src=\"{{ asset('plugins/Isotope/isotope.pkgd.min.js') }}\"></script>
        <script src=\"{{ asset('plugins/easing/easing.js') }}\"></script>
        <script src=\"{{ asset('plugins/parallax-js-master/parallax.min.js') }}\"></script>
        <script src=\"{{ asset('js/custom.js') }}\"></script>
</html>
", "base.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\base.html.twig");
    }
}
