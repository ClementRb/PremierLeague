<?php

/* team.html.twig */
class __TwigTemplate_5e68a02e4f74ee7f26851860b1cfef8e391714e9b5648b006870ebd725fc0184 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "team.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "team.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <a class=\"btn btn-outline-primary\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addTeams");
        echo "\" role=\"button\" >Add a Team </a>

        <div class=\"card-columns\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new Twig_Error_Runtime('Variable "teams" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 9
            echo "            <div class=\"card\" style=\"height: 200px;\">
                <img src=\"\" class=\"card-img-top\" alt=\"\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" style=\"text-align: center\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", array()), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "stadium", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"card-footer\">
                    <small class=\"text-muted\">View more about</small>
                </div>
            </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  64 => 13,  60 => 12,  55 => 9,  51 => 8,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{%  block body %}
    <a class=\"btn btn-outline-primary\" href=\"{{ path('addTeams') }}\" role=\"button\" >Add a Team </a>

        <div class=\"card-columns\">
            {% for team in teams %}
            <div class=\"card\" style=\"height: 200px;\">
                <img src=\"\" class=\"card-img-top\" alt=\"\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\" style=\"text-align: center\">{{ team.name }}</h5>
                    <p class=\"card-text\">{{ team.stadium }}</p>
                </div>
                <div class=\"card-footer\">
                    <small class=\"text-muted\">View more about</small>
                </div>
            </div>
           {% endfor %}
        </div>


{% endblock %}", "team.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\team.html.twig");
    }
}
