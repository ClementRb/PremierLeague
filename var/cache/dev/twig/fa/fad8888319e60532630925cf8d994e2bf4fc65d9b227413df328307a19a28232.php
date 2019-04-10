<?php

/* OneTeam.html.twig */
class __TwigTemplate_3b8522b3f771da3819fadee0fbaf6a715c36e79e45ff6abcda456d4be80f7963 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "OneTeam.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'fos_user_content' => [$this, 'block_fos_user_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OneTeam.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col\">

        </div>
        <div class=\"col-6\" style=\"margin-top: 150px\">
            <div>
                <h2 class=\"display-4\" >";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 11, $this->source); })()), "name", []), "html", null, true);
        echo "</h2>
                <p >";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 12, $this->source); })()), "year", []), "html", null, true);
        echo "</p>
                <p >";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 13, $this->source); })()), "stadium", []), "html", null, true);
        echo "</p>
                <p >";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 14, $this->source); })()), "numberOfTitles", []), "html", null, true);
        echo "</p>
            </div>
            <table class=\"table table-hover\" id=\"example\" >
                <thead>
                <tr>
                    <th >Player</th>
                    <th >Position</th>
                    <th >Nationality</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 25, $this->source); })()), "players", []));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 26
            echo "                    <tr>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "role", []), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "nationality", []), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </tbody>
            </table>
        </div>
        <div class=\"col\">

        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 42
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 43
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "OneTeam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  119 => 42,  104 => 32,  95 => 29,  91 => 28,  87 => 27,  84 => 26,  80 => 25,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  45 => 4,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
        <div class=\"col\">

        </div>
        <div class=\"col-6\" style=\"margin-top: 150px\">
            <div>
                <h2 class=\"display-4\" >{{ team.name }}</h2>
                <p >{{ team.year }}</p>
                <p >{{ team.stadium }}</p>
                <p >{{ team.numberOfTitles }}</p>
            </div>
            <table class=\"table table-hover\" id=\"example\" >
                <thead>
                <tr>
                    <th >Player</th>
                    <th >Position</th>
                    <th >Nationality</th>
                </tr>
                </thead>
                <tbody>
                {% for player in team.players %}
                    <tr>
                        <td>{{ player.name }}</td>
                        <td>{{ player.role }}</td>
                        <td>{{ player.nationality }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"col\">

        </div>
    </div>

{% endblock %}

{% block fos_user_content %}

{% endblock %}

", "OneTeam.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\OneTeam.html.twig");
    }
}
