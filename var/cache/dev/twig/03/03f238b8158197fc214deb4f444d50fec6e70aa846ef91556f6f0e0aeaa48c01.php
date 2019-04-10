<?php

/* index.html.twig */
class __TwigTemplate_8e2c7ec260edb275cc32e78d0babbcc50f314faf32af26f89ac30493dad8619d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"home\">
        <div class=\"home_slider_container\">


            <div class=\"owl-carousel owl-theme home_slider\">


                <div class=\"owl-item home_slider_item\">
                    <div class=\"home_slider_background\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/premierleague_theme.jpg"), "html", null, true);
        echo ")\"></div>
                    <div class=\"home_slider_content_container\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"home_slider_content\"  data-animation-in=\"fadeIn\" data-animation-out=\"animate-out fadeOut\">
                                        <div class=\"home_slider_title\">L'univers de la Premier League.</div>
                                        <div class=\"home_slider_subtitle\">Retrouvez l'univers de la Barclays Premier League avec tous les joueurs de la ligue ainsi que toutes les equipes.</div>
                                        <div class=\"button button_light home_button\"><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getTeams");
        echo "\">Voir les equipes</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"owl-item home_slider_item\">
                    <div class=\"home_slider_background\" style=\"background-image:url(";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/players2.jpg"), "html", null, true);
        echo ")\"></div>
                    <div class=\"home_slider_content_container\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"home_slider_content\"  data-animation-in=\"fadeIn\" data-animation-out=\"animate-out fadeOut\">
                                        <div class=\"home_slider_title\">Les joueurs</div>
                                        <div class=\"home_slider_subtitle\">Retrouvez l'univers de la Barclays Premier League avec tous les joueurs de la ligue ainsi que toutes les equipes.</div>
                                        <div class=\"button button_light home_button\"><a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("getPlayers");
        echo "\">Voir les joueurs</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"home_slider_dots_container\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"home_slider_dots\">
                                <ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
                                    <li class=\"home_slider_custom_dot active\">01.</li>
                                    <li class=\"home_slider_custom_dot\">02.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  78 => 30,  65 => 20,  54 => 12,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"home\">
        <div class=\"home_slider_container\">


            <div class=\"owl-carousel owl-theme home_slider\">


                <div class=\"owl-item home_slider_item\">
                    <div class=\"home_slider_background\" style=\"background-image:url({{ asset('images/premierleague_theme.jpg') }})\"></div>
                    <div class=\"home_slider_content_container\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"home_slider_content\"  data-animation-in=\"fadeIn\" data-animation-out=\"animate-out fadeOut\">
                                        <div class=\"home_slider_title\">L'univers de la Premier League.</div>
                                        <div class=\"home_slider_subtitle\">Retrouvez l'univers de la Barclays Premier League avec tous les joueurs de la ligue ainsi que toutes les equipes.</div>
                                        <div class=\"button button_light home_button\"><a href=\"{{ path('getTeams') }}\">Voir les equipes</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"owl-item home_slider_item\">
                    <div class=\"home_slider_background\" style=\"background-image:url({{ asset('images/players2.jpg') }})\"></div>
                    <div class=\"home_slider_content_container\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"home_slider_content\"  data-animation-in=\"fadeIn\" data-animation-out=\"animate-out fadeOut\">
                                        <div class=\"home_slider_title\">Les joueurs</div>
                                        <div class=\"home_slider_subtitle\">Retrouvez l'univers de la Barclays Premier League avec tous les joueurs de la ligue ainsi que toutes les equipes.</div>
                                        <div class=\"button button_light home_button\"><a href=\"{{ path('getPlayers') }}\">Voir les joueurs</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class=\"home_slider_dots_container\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"home_slider_dots\">
                                <ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
                                    <li class=\"home_slider_custom_dot active\">01.</li>
                                    <li class=\"home_slider_custom_dot\">02.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

{% endblock %}", "index.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\index.html.twig");
    }
}
