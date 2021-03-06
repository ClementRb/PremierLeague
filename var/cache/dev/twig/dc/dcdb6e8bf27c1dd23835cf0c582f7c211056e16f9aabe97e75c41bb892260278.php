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
    <div class=\"row\">
        <div class=\"col\">

        </div>
        <div class=\"col-6\" style=\"margin-top: 150px;\">
            ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["method" => "post", "attr" => ["novalidate" => "novalidate"]]);
        echo "
            <h2 class=\"text-center mt-5\">Ajouter un nouveau joueur</h2>

            <div class=\"form-group\">
                <div class=\"row mb-4\">
                    <div class=\"col-md-12 col-sm-12\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "name", []), 'label');
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "name", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-md-12 col-sm-12\">
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "team", []), 'label');
        echo "
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "team", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-md-12 col-sm-12\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "year", []), 'label');
        echo "
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "year", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-md-12 col-sm-12\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "nationality", []), 'label');
        echo "
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "nationality", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div class=\"row mb-4\">
                    <div class=\"col-md-12 col-sm-12\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "role", []), 'label');
        echo "
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "role", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    </div>
                </div>
                <div>
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "save", []), 'label');
        echo "
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "save", []), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
        echo "
                </div>
            </div>


            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "

        </div>
        <div class=\"col\">

        </div>
    </div>

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
        return array (  132 => 51,  124 => 46,  120 => 45,  113 => 41,  109 => 40,  101 => 35,  97 => 34,  89 => 29,  85 => 28,  77 => 23,  73 => 22,  65 => 17,  61 => 16,  52 => 10,  44 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends ('base.html.twig') %}

{% block body %}

    <div class=\"row\">
        <div class=\"col\">

        </div>
        <div class=\"col-6\" style=\"margin-top: 150px;\">
            {{ form_start(form, { 'method' : 'post', 'attr': {'novalidate': 'novalidate'}}) }}
            <h2 class=\"text-center mt-5\">Ajouter un nouveau joueur</h2>

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

        </div>
        <div class=\"col\">

        </div>
    </div>

{% endblock %}", "addPlayer.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\addPlayer.html.twig");
    }
}
