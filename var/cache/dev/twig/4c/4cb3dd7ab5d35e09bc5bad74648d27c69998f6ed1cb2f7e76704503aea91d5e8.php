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
<div class=\"row\">
    <div class=\"col\">

    </div>
    <div class=\"col-6\" style=\"margin-top: 150px;\">
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
        <h2 class=\"text-center mt-5\">Register</h2>

        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(        // line 12
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register mt-5"]]);
        // line 18
        echo "
        <div class=\"form-group\">
            <div class=\"row mb-4\">
                <div class=\"col-md-12 col-sm-12\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "email", []), 'label');
        echo "
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"row mb-4\">
                <div class=\"col-md-12 col-sm-12\">
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "username", []), 'label');
        echo "
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "username", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"row mb-4\">
                <div class=\"col-md-6 col-sm-12\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "plainPassword", []), "first", []), 'label');
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"col-md-6 col-sm-12\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "plainPassword", []), "second", []), 'label');
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
        </div>


        <div>
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
        </div>

        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
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
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 49,  97 => 46,  87 => 39,  83 => 38,  77 => 35,  73 => 34,  65 => 29,  61 => 28,  53 => 23,  49 => 22,  43 => 18,  41 => 12,  40 => 11,  34 => 8,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"row\">
    <div class=\"col\">

    </div>
    <div class=\"col-6\" style=\"margin-top: 150px;\">
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

    </div>
    <div class=\"col\">

    </div>
</div>

", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\bundles\\FOSUserBundle\\Registration\\register_content.html.twig");
    }
}
