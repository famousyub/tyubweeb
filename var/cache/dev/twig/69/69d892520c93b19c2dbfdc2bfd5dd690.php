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

/* homepage/show.html.twig */
class __TwigTemplate_c8bb3ccc5a0b36e26b68a3453a041bb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'fbtitle' => [$this, 'block_fbtitle'],
            'twtitle' => [$this, 'block_twtitle'],
            'ogtitle' => [$this, 'block_ogtitle'],
            'description' => [$this, 'block_description'],
            'fbdescription' => [$this, 'block_fbdescription'],
            'twdescription' => [$this, 'block_twdescription'],
            'ogdescription' => [$this, 'block_ogdescription'],
            'fbimage' => [$this, 'block_fbimage'],
            'twimage' => [$this, 'block_twimage'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_fbtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fbtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fbtitle"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_twtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_ogtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 6, $this->source); })()), "decription", [], "any", false, false, false, 6), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_fbdescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fbdescription"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fbdescription"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 7, $this->source); })()), "decription", [], "any", false, false, false, 7), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_twdescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twdescription"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twdescription"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 8, $this->source); })()), "decription", [], "any", false, false, false, 8), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_ogdescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogdescription"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogdescription"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 9, $this->source); })()), "decription", [], "any", false, false, false, 9), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_fbimage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fbimage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fbimage"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 10, $this->source); })()), "cover", [], "any", false, false, false, 10), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_twimage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twimage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twimage"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 11, $this->source); })()), "cover", [], "any", false, false, false, 11), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div class=\"col-12 p-3 p-md-5\">
<img class=\"img-fluid\" alt=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 14, $this->source); })()), "cover", [], "any", false, false, false, 14), "html", null, true);
        echo "\"/>
<h1 class=\"text-center\"><strong><a href=\"/\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "</a></strong></h1>
<h2 class=\"text-center\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 16, $this->source); })()), "decription", [], "any", false, false, false, 16), "html", null, true);
        echo "</h2>
<img width=\"100%\" class=\"img-fluid rounded shadow\" alt=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 17, $this->source); })()), "section1title", [], "any", false, false, false, 17), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 17, $this->source); })()), "section1cover", [], "any", false, false, false, 17), "html", null, true);
        echo "\"/>
<h3 class=\"p-1\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 18, $this->source); })()), "section1title", [], "any", false, false, false, 18), "html", null, true);
        echo "</h3>
<p>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 19, $this->source); })()), "section1content", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
</div>
<div class=\"row text-white\" style=\"background-color:black;\">
<div class=\"col-md-4 p-3\">
<h3>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 23, $this->source); })()), "section2title", [], "any", false, false, false, 23), "html", null, true);
        echo "</h3>
<img width=\"100%\" class=\"img-fluid rounded shadow\" alt=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 24, $this->source); })()), "section2title", [], "any", false, false, false, 24), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 24, $this->source); })()), "section2cover", [], "any", false, false, false, 24), "html", null, true);
        echo "\"/></div>
<div class=\"col-md-8 p-3 p-md-5\">
<p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 26, $this->source); })()), "section2content", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
</div>
</div>
<img width=\"100%\" class=\"img-fluid\" alt=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 29, $this->source); })()), "section2title", [], "any", false, false, false, 29), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 29, $this->source); })()), "footercover", [], "any", false, false, false, 29), "html", null, true);
        echo "\"/>
<div class=\"col-12 p-3 p-md-5\">
<h4>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 31, $this->source); })()), "footer", [], "any", false, false, false, 31), "html", null, true);
        echo "</h4>
<p>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homepage"]) || array_key_exists("homepage", $context) ? $context["homepage"] : (function () { throw new RuntimeError('Variable "homepage" does not exist.', 32, $this->source); })()), "footercontent", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "homepage/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 32,  326 => 31,  319 => 29,  313 => 26,  306 => 24,  302 => 23,  295 => 19,  291 => 18,  285 => 17,  281 => 16,  277 => 15,  271 => 14,  268 => 13,  258 => 12,  239 => 11,  220 => 10,  201 => 9,  182 => 8,  163 => 7,  144 => 6,  125 => 5,  106 => 4,  87 => 3,  68 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{ homepage.title }}{% endblock %}
{% block fbtitle %}{{ homepage.title }}{% endblock %}
{% block twtitle %}{{ homepage.title }}{% endblock %}
{% block ogtitle %}{{ homepage.title }}{% endblock %}
{% block description %}{{ homepage.decription }}{% endblock %}
{% block fbdescription %}{{ homepage.decription }}{% endblock %}
{% block twdescription %}{{ homepage.decription }}{% endblock %}
{% block ogdescription %}{{ homepage.decription }}{% endblock %}
{% block fbimage%}{{ homepage.cover}}{% endblock %}
{% block twimage%}{{ homepage.cover}}{% endblock %}
{% block body %}
<div class=\"col-12 p-3 p-md-5\">
<img class=\"img-fluid\" alt=\"{{ homepage.title }}\" src=\"{{ homepage.cover }}\"/>
<h1 class=\"text-center\"><strong><a href=\"/\">{{ homepage.title }}</a></strong></h1>
<h2 class=\"text-center\">{{ homepage.decription }}</h2>
<img width=\"100%\" class=\"img-fluid rounded shadow\" alt=\"{{ homepage.section1title }}\" src=\"{{ homepage.section1cover }}\"/>
<h3 class=\"p-1\">{{ homepage.section1title }}</h3>
<p>{{ homepage.section1content }}</p>
</div>
<div class=\"row text-white\" style=\"background-color:black;\">
<div class=\"col-md-4 p-3\">
<h3>{{ homepage.section2title }}</h3>
<img width=\"100%\" class=\"img-fluid rounded shadow\" alt=\"{{ homepage.section2title }}\" src=\"{{ homepage.section2cover }}\"/></div>
<div class=\"col-md-8 p-3 p-md-5\">
<p>{{ homepage.section2content }}</p>
</div>
</div>
<img width=\"100%\" class=\"img-fluid\" alt=\"{{ homepage.section2title }}\" src=\"{{ homepage.footercover }}\"/>
<div class=\"col-12 p-3 p-md-5\">
<h4>{{ homepage.footer }}</h4>
<p>{{ homepage.footercontent }}</p>
</div>
{% endblock %}
", "homepage/show.html.twig", "/home/user/Bureau/atmproject/symsocial/blogcms/templates/homepage/show.html.twig");
    }
}
