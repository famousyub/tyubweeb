<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_e0085a5ae8ca9ef1a7e3b6bb645da903 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<form method=\"post\">
\t\t";
        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "messageKey", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "messageData", [], "any", false, false, false, 6), "security"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 8
        echo "
\t
\t\t<div class=\"row\">
\t\t<div class=\"col-md-4\"></div>
\t\t<div class=\"col-md-4 p-3\">
\t\t<div class=\"text-center\">
\t\t<img width=\"220\" src=\"https://blogger.googleusercontent.com/img/a/AVvXsEiFAxpplDB_CELMgsYvHbwGXCp6_kj7D6KxhGeqMlHsptb97sEdYt4j3eeQaYI-jXj05Av5KXfAoIj6CF32oJST0aX4gUAShhuLFjAe2GQB4gQ-P6G9e8PnFNH6AW_d6dH3DQ2ihcEo66ZNwq6HIJDojEfmEP_7lS9WevowJEk7BcZMt64L1YpXptc3-Q=s1280\" alt=\"symfony web app source code\"/>
\t\t\t<h2>WebApp</h2>
\t\t\t<p>A project present by axcora technology</p>
\t\t\t</div>
\t\t\t<br>
\t\t\t<label for=\"inputUsername\">UserName</label>
\t\t\t<input type=\"text\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" class=\"form-control\" required autofocus>
\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

\t\t\t<input
\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t";
        // line 37
        echo "\t\t\t<br>
\t\t\t<button class=\"btn btn-lg col-12 btn-dark\" type=\"submit\">
\t\t\t\tLogin
\t\t\t</button>
\t\t</form>
\t\t   </div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 37,  101 => 25,  93 => 20,  79 => 8,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<form method=\"post\">
\t\t{% if error %}
\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t{% endif %}

\t
\t\t<div class=\"row\">
\t\t<div class=\"col-md-4\"></div>
\t\t<div class=\"col-md-4 p-3\">
\t\t<div class=\"text-center\">
\t\t<img width=\"220\" src=\"https://blogger.googleusercontent.com/img/a/AVvXsEiFAxpplDB_CELMgsYvHbwGXCp6_kj7D6KxhGeqMlHsptb97sEdYt4j3eeQaYI-jXj05Av5KXfAoIj6CF32oJST0aX4gUAShhuLFjAe2GQB4gQ-P6G9e8PnFNH6AW_d6dH3DQ2ihcEo66ZNwq6HIJDojEfmEP_7lS9WevowJEk7BcZMt64L1YpXptc3-Q=s1280\" alt=\"symfony web app source code\"/>
\t\t\t<h2>WebApp</h2>
\t\t\t<p>A project present by axcora technology</p>
\t\t\t</div>
\t\t\t<br>
\t\t\t<label for=\"inputUsername\">UserName</label>
\t\t\t<input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"form-control\" required autofocus>
\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

\t\t\t<input
\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t{#
\t\t\t        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t\t\t        See https://symfony.com/doc/current/security/remember_me.html
\t\t\t
\t\t\t        <div class=\"checkbox mb-3\">
\t\t\t            <label>
\t\t\t                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t\t\t            </label>
\t\t\t        </div>
\t\t\t    #}
\t\t\t<br>
\t\t\t<button class=\"btn btn-lg col-12 btn-dark\" type=\"submit\">
\t\t\t\tLogin
\t\t\t</button>
\t\t</form>
\t\t   </div>
\t</div>
{% endblock %}
", "security/login.html.twig", "/home/user/Bureau/atmproject/symsocial/blogcms/templates/security/login.html.twig");
    }
}
