<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_5a7470321a85733a39c489ff813d96824eda326fc393b4349cc5790430d271e8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "

";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
<h2 class=\"text-center mt-5\">Register</h2>

";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(        // line 8
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register mt-5"]]);
        // line 14
        echo "
<div class=\"form-group\">
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "email", []), 'label');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "username", []), 'label');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "username", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-6 col-sm-12\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "plainPassword", []), "first", []), 'label');
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"col-md-6 col-sm-12\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "plainPassword", []), "second", []), 'label');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
    </div>
</div>


<div>
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>

";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 45,  93 => 42,  83 => 35,  79 => 34,  73 => 31,  69 => 30,  61 => 25,  57 => 24,  49 => 19,  45 => 18,  39 => 14,  37 => 8,  36 => 7,  30 => 4,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}


{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
<h2 class=\"text-center mt-5\">Register</h2>

{{ form_start(
    form,
    {
        'method': 'post',
        'action': path('fos_user_registration_register'),
        'attr': {'class': 'fos_user_registration_register mt-5'}
    })
}}
<div class=\"form-group\">
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            {{ form_label(form.email) }}
            {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-12 col-sm-12\">
            {{ form_label(form.username) }}
            {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-6 col-sm-12\">
            {{ form_label(form.plainPassword.first) }}
            {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}
        </div>
        <div class=\"col-md-6 col-sm-12\">
            {{ form_label(form.plainPassword.second) }}
            {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
        </div>
    </div>
</div>


<div>
    <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
</div>

{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\bundles\\FOSUserBundle\\Registration\\register_content.html.twig");
    }
}
