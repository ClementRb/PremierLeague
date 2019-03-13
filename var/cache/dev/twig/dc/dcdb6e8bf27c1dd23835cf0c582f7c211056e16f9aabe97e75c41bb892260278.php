<?php

/* addPlayer.html.twig */
class __TwigTemplate_6427b6d3d4ac894926c3b2cb7b5afdd3d7c7189d3f4aacc8cde9502de8c4c34f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "addPlayer.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "addPlayer.html.twig"));

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
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["method" => "post", "attr" => ["novalidate" => "novalidate"]]);
        echo "
    <h2 class=\"text-center mt-5\">Add a new Player</h2>

    <div class=\"form-group\">
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "name", []), 'label');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "name", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "team", []), 'label');
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "team", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "year", []), 'label');
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "year", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "nationality", []), 'label');
        echo "
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "nationality", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "role", []), 'label');
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "role", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
        </div>
        <div>
            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "save", []), 'label');
        echo "
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "save", []), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
        </div>
    </div>


    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "addPlayer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  119 => 41,  115 => 40,  108 => 36,  104 => 35,  96 => 30,  92 => 29,  84 => 24,  80 => 23,  72 => 18,  68 => 17,  60 => 12,  56 => 11,  47 => 5,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('base.html.twig') %}

{% block body %}

    {{ form_start(form, { 'method' : 'post', 'attr': {'novalidate': 'novalidate'}}) }}
    <h2 class=\"text-center mt-5\">Add a new Player</h2>

    <div class=\"form-group\">
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                {{ form_label(form.name) }}
                {{ form_widget(form.name, {'attr' : {'class' : 'form-control'}}) }}
            </div>
        </div>
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                {{ form_label(form.team) }}
                {{ form_widget(form.team, {'attr' : {'class' : 'form-control'}}) }}
            </div>
        </div>
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                {{ form_label(form.year) }}
                {{ form_widget(form.year, {'attr' : {'class' : 'form-control'}}) }}
            </div>
        </div>
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                {{ form_label(form.nationality) }}
                {{ form_widget(form.nationality, {'attr' : {'class' : 'form-control'}}) }}
            </div>
        </div>
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                {{ form_label(form.role) }}
                {{ form_widget(form.role, {'attr' : {'class' : 'form-control'}}) }}
            </div>
        </div>
        <div>
            {{ form_label(form.save) }}
            {{ form_widget(form.save, {'attr' : {'class' : 'btn btn-primary'}}) }}
        </div>
    </div>


    {{ form_end(form) }}

{% endblock %}", "addPlayer.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\addPlayer.html.twig");
    }
}
