<?php

/* team.html.twig */
class __TwigTemplate_cb6f996c798153bd252f3cb450bc5004d60904bde432fed909b58b32050873b9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "team.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "team.html.twig"));

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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addTeams");
            echo "\" role=\"button\" style=\"margin-top: 50px\">Add a Team </a>
    ";
        }
        // line 8
        echo "
        <div class=\"card-columns\" style=\"margin-top: 100px\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new Twig_Error_Runtime('Variable "teams" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 11
            echo "            <div class=\"card text-center\" style=\"height: 220px\">
                <img src=\"\" class=\"card-img-top\" alt=\"\">
                <div class=\"card-body\" >
                    <h5 class=\"card-title\" >";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "name", []), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["team"], "stadium", []), "html", null, true);
            echo "</p>
                    <a class=\"btn btn-primary\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("TeamProfile", ["id" => twig_get_attribute($this->env, $this->source, $context["team"], "id", [])]), "html", null, true);
            echo "\"> Club Profile</a>
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
        return array (  84 => 20,  74 => 16,  70 => 15,  66 => 14,  61 => 11,  57 => 10,  53 => 8,  47 => 6,  44 => 5,  38 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{%  block body %}
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
    <a class=\"btn btn-outline-primary\" href=\"{{ path('addTeams') }}\" role=\"button\" style=\"margin-top: 50px\">Add a Team </a>
    {% endif %}

        <div class=\"card-columns\" style=\"margin-top: 100px\">
            {% for team in teams %}
            <div class=\"card text-center\" style=\"height: 220px\">
                <img src=\"\" class=\"card-img-top\" alt=\"\">
                <div class=\"card-body\" >
                    <h5 class=\"card-title\" >{{ team.name }}</h5>
                    <p class=\"card-text\">{{ team.stadium }}</p>
                    <a class=\"btn btn-primary\" href=\"{{ path('TeamProfile',{'id':team.id} ) }}\"> Club Profile</a>
                </div>
            </div>
           {% endfor %}
        </div>


{% endblock %}", "team.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\team.html.twig");
    }
}
