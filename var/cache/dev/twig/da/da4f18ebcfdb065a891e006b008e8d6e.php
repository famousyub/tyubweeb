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

/* homepage/index.html.twig */
class __TwigTemplate_0eb58716b0cab6bd462638acf07cd081 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage/index.html.twig", 1);
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

        echo "Symfony Web CMS and APP";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["homepages"]) || array_key_exists("homepages", $context) ? $context["homepages"] : (function () { throw new RuntimeError('Variable "homepages" does not exist.', 4, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["homepage"]) {
            // line 5
            echo "<div class=\"col-12 p-3 p-md-5\">
<img class=\"img-fluid\" alt=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "title", [], "any", false, false, false, 6), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "cover", [], "any", false, false, false, 6), "html", null, true);
            echo "\"/>
<h1 class=\"text-center\"><strong><a href=\"/\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "title", [], "any", false, false, false, 7), "html", null, true);
            echo "</a></strong></h1>
<h2 class=\"text-center\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "decription", [], "any", false, false, false, 8), "html", null, true);
            echo "</h2>
<img width=\"100%\" class=\"img-fluid rounded shadow\" alt=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "section1title", [], "any", false, false, false, 9), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "section1cover", [], "any", false, false, false, 9), "html", null, true);
            echo "\"/>
<h3 class=\"p-1\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "section1title", [], "any", false, false, false, 10), "html", null, true);
            echo "</h3>
<p>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "section1content", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
</div>
<div class=\"row text-white\" style=\"background-color:black;\">
<div class=\"col-md-4 p-3\">
<h3>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "section2title", [], "any", false, false, false, 15), "html", null, true);
            echo "</h3>
<img width=\"100%\" class=\"img-fluid rounded shadow\" alt=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "section2title", [], "any", false, false, false, 16), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "section2cover", [], "any", false, false, false, 16), "html", null, true);
            echo "\"/></div>
<div class=\"col-md-8 p-3 p-md-5\">
<p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "section2content", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
</div>
</div>
<img width=\"100%\" class=\"img-fluid\" alt=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "section2title", [], "any", false, false, false, 21), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "footercover", [], "any", false, false, false, 21), "html", null, true);
            echo "\"/>
<div class=\"col-12 p-3 p-md-5\">
<h4>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "footer", [], "any", false, false, false, 23), "html", null, true);
            echo "</h4>
<p>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["homepage"], "footercontent", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
</div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['homepage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 24,  151 => 23,  144 => 21,  138 => 18,  131 => 16,  127 => 15,  120 => 11,  116 => 10,  110 => 9,  106 => 8,  102 => 7,  96 => 6,  93 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Symfony Web CMS and APP{% endblock %}
{% block body %}
{% for homepage in homepages %}
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
{% else %}
{% endfor %}
{% endblock %}
", "homepage/index.html.twig", "/home/user/Bureau/atmproject/symsocial/blogcms/templates/homepage/index.html.twig");
    }
}
