<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_501c1a02caa83d7f0900219ad574629f2a99bdc9e98ea5bdee315077aaf0c1cb extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->source); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->source); })()), "messageKey", []), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->source); })()), "messageData", []), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<h2 class=\"text-center mt-5\">Login</h2>

<form action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 10
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 13
        echo "
    <div class=\"form-group\">
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                <label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" />
            </div>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                <label for=\"password\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
            </div>
        </div>
    </div>
    <div class=\"form-group form-check\">
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label class=\"form-check-label\" for=\"remember_me\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>
        </div>
    </div>
    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 38,  86 => 34,  74 => 25,  64 => 18,  60 => 17,  54 => 13,  48 => 11,  46 => 10,  42 => 9,  37 => 6,  31 => 4,  29 => 3,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<h2 class=\"text-center mt-5\">Login</h2>

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <div class=\"form-group\">
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" />
            </div>
        </div>
    </div>
    <div class=\"form-group\">
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\" />
            </div>
        </div>
    </div>
    <div class=\"form-group form-check\">
        <div class=\"row mb-4\">
            <div class=\"col-md-12 col-sm-12\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label class=\"form-check-label\" for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
            </div>
        </div>
    </div>
    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
</form>

", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\PremierLeague\\templates\\bundles\\FOSUserBundle\\Security\\login_content.html.twig");
    }
}
