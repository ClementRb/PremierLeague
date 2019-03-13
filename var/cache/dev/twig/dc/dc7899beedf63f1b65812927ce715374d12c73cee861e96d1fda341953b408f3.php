<?php

/* addTeam.html.twig */
class __TwigTemplate_097ec6faed2c49254c00da65b1c286e840de3d6fbc60f3575da1692720c372d7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "addTeam.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "addTeam.html.twig"));

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
    <h2 class=\"text-center mt-5\">Add a new Team</h2>

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "year", []), 'label');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "year", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "stadium", []), 'label');
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "stadium", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "number_of_titles", []), 'label');
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "number_of_titles", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "logo", []), 'label');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "logo", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "points", []), 'label');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "points", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "win", []), 'label');
        echo "
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "win", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "loses", []), 'label');
        echo "
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "loses", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "draws", []), 'label');
        echo "
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "draws", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div>
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "save", []), 'label');
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "save", []), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
    </div>
</div>


    ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "addTeam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 70,  167 => 65,  163 => 64,  156 => 60,  152 => 59,  144 => 54,  140 => 53,  132 => 48,  128 => 47,  120 => 42,  116 => 41,  108 => 36,  104 => 35,  96 => 30,  92 => 29,  84 => 24,  80 => 23,  72 => 18,  68 => 17,  60 => 12,  56 => 11,  47 => 5,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('base.html.twig') %}

{% block body %}

    {{ form_start(form, { 'method' : 'post', 'attr': {'novalidate': 'novalidate'}}) }}
    <h2 class=\"text-center mt-5\">Add a new Team</h2>

<div class=\"form-group\">
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            {{ form_label(form.name) }}
            {{ form_widget(form.name, {'attr' : {'class' : 'form-control'}}) }}
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
            {{ form_label(form.stadium) }}
            {{ form_widget(form.stadium, {'attr' : {'class' : 'form-control'}}) }}
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            {{ form_label(form.number_of_titles) }}
            {{ form_widget(form.number_of_titles, {'attr' : {'class' : 'form-control'}}) }}
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            {{ form_label(form.logo) }}
            {{ form_widget(form.logo, {'attr' : {'class' : 'form-control'}}) }}
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            {{ form_label(form.points) }}
            {{ form_widget(form.points, {'attr' : {'class' : 'form-control'}}) }}
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            {{ form_label(form.win) }}
            {{ form_widget(form.win, {'attr' : {'class' : 'form-control'}}) }}
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            {{ form_label(form.loses) }}
            {{ form_widget(form.loses, {'attr' : {'class' : 'form-control'}}) }}
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            {{ form_label(form.draws) }}
            {{ form_widget(form.draws, {'attr' : {'class' : 'form-control'}}) }}
        </div>
    </div>
    <div>
            {{ form_label(form.save) }}
            {{ form_widget(form.save, {'attr' : {'class' : 'btn btn-primary'}}) }}
    </div>
</div>


    {{ form_end(form) }}

{% endblock %}", "addTeam.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\addTeam.html.twig");
    }
}
