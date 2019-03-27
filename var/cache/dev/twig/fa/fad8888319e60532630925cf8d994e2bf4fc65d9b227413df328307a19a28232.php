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
    <div style=\"margin-top: 100px\">
        <h2 class=\"display-4\" >";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 6, $this->source); })()), "name", []), "html", null, true);
        echo "</h2>
        <p >";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 7, $this->source); })()), "year", []), "html", null, true);
        echo "</p>
        <p >";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 8, $this->source); })()), "stadium", []), "html", null, true);
        echo "</p>
        <p >";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 9, $this->source); })()), "numberOfTitles", []), "html", null, true);
        echo "</p>
    </div>
    <table class=\"table table-hover\" id=\"example\" style=\"margin-top: 100px;\" >
        <thead>
        <tr>
            <th >Player</th>
            <th >Position</th>
            <th >Nationality</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new Twig_Error_Runtime('Variable "team" does not exist.', 20, $this->source); })()), "players", []));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", []), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "role", []), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "nationality", []), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
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
        return array (  114 => 32,  108 => 31,  99 => 27,  90 => 24,  86 => 23,  82 => 22,  79 => 21,  75 => 20,  61 => 9,  57 => 8,  53 => 7,  49 => 6,  45 => 4,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div style=\"margin-top: 100px\">
        <h2 class=\"display-4\" >{{ team.name }}</h2>
        <p >{{ team.year }}</p>
        <p >{{ team.stadium }}</p>
        <p >{{ team.numberOfTitles }}</p>
    </div>
    <table class=\"table table-hover\" id=\"example\" style=\"margin-top: 100px;\" >
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
{% endblock %}

{% block fos_user_content %}

{% endblock %}

", "OneTeam.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\OneTeam.html.twig");
    }
}
