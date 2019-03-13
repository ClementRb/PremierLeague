<?php

/* addPlayer.html.twig */
class __TwigTemplate_15976b8a4f8cf3d7edd42efb3edd6e4fa41e9390589ab6b48ade1dfb02fa02a0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "addPlayer.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "addPlayer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', array("method" => "post", "attr" => array("novalidate" => "novalidate")));
        echo "
    <h2 class=\"text-center mt-5\">Add a new Team</h2>

    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(        // line 9
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), 'widget', array("method" => "post"));
        // line 13
        echo "
<div class=\"form-group\">
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "name", array()), 'label');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "year", array()), 'label');
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "year", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "stadium", array()), 'label');
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "stadium", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "number_of_titles", array()), 'label');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "number_of_titles", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "logo", array()), 'label');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "logo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "points", array()), 'label');
        echo "
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "points", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "win", array()), 'label');
        echo "
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "win", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "loses", array()), 'label');
        echo "
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "loses", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "draws", array()), 'label');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "draws", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>






</div>


    ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
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
        return array (  177 => 78,  162 => 66,  158 => 65,  150 => 60,  146 => 59,  138 => 54,  134 => 53,  126 => 48,  122 => 47,  114 => 42,  110 => 41,  102 => 36,  98 => 35,  90 => 30,  86 => 29,  78 => 24,  74 => 23,  66 => 18,  62 => 17,  56 => 13,  54 => 9,  53 => 8,  47 => 5,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('base.html.twig') %}

{% block body %}

    {{ form_start(form, { 'method' : 'post'    ,'attr': {'novalidate': 'novalidate'}}) }}
    <h2 class=\"text-center mt-5\">Add a new Team</h2>

    {{ form_widget(
        form,
        {
            'method' : 'post'
        })
    }}
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






</div>


    {{ form_end(form) }}

{% endblock %}", "addPlayer.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\addPlayer.html.twig");
    }
}
