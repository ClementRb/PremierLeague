<?php

/* player.html.twig */
class __TwigTemplate_7d80ce31c23b5ccb86b171ca1e99c0befb2bb5c5eca3ab21f33d0d790e3e0d58 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "player.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "player.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "    <a class=\"btn btn-outline-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPlayers");
            echo "\" role=\"button\" style=\"margin-top: 50px\" >Add a Player </a>
    ";
        }
        // line 8
        echo "
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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) || array_key_exists("players", $context) ? $context["players"] : (function () { throw new Twig_Error_Runtime('Variable "players" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 19
            echo "        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "name", []), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "role", []), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "nationality", []), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "    <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>
    <script type=\"text/javascript\">

    \$(document).ready(function() {
    \$('#example').DataTable({
        paging : false,

    });
    } );

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "player.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 33,  101 => 32,  90 => 25,  81 => 22,  77 => 21,  73 => 20,  70 => 19,  66 => 18,  54 => 8,  48 => 6,  45 => 5,  39 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{%  block body %}
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    <a class=\"btn btn-outline-primary\" href=\"{{ path('addPlayers') }}\" role=\"button\" style=\"margin-top: 50px\" >Add a Player </a>
    {% endif %}

    <table class=\"table table-hover\" id=\"example\" >
        <thead>
        <tr>
            <th >Player</th>
            <th >Position</th>
            <th >Nationality</th>
        </tr>
        </thead>
        <tbody>
        {% for player in players %}
        <tr>
            <td>{{ player.name }}</td>
            <td>{{ player.role }}</td>
            <td>{{ player.nationality }}</td>
        </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}


{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.3.1.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js\"></script>
    <script type=\"text/javascript\">

    \$(document).ready(function() {
    \$('#example').DataTable({
        paging : false,

    });
    } );

    </script>

{% endblock %}", "player.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\player.html.twig");
    }
}
