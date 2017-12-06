<?php

/* :default:index.html.twig */
class __TwigTemplate_383b68435a2dbe425c8bc1b2510f9183d08b712ee4083989d746cb1e708ba59b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1f5625f7ea4b5203d56ce9560aff8dfa13d7e4865cd768e3e56901788ab1fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f5625f7ea4b5203d56ce9560aff8dfa13d7e4865cd768e3e56901788ab1fa2->enter($__internal_e1f5625f7ea4b5203d56ce9560aff8dfa13d7e4865cd768e3e56901788ab1fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1f5625f7ea4b5203d56ce9560aff8dfa13d7e4865cd768e3e56901788ab1fa2->leave($__internal_e1f5625f7ea4b5203d56ce9560aff8dfa13d7e4865cd768e3e56901788ab1fa2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41e24df27c3dd4452c07cbd916c50583aa85256201cb90848406c343197e1895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e24df27c3dd4452c07cbd916c50583aa85256201cb90848406c343197e1895->enter($__internal_41e24df27c3dd4452c07cbd916c50583aa85256201cb90848406c343197e1895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to</span> Symfony ";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "</h1>
            </div>

            <div id=\"next\">
                <h2>What's time?</h2>
                <p>
                     Il est ";
        // line 13
        echo twig_escape_filter($this->env, ($context["heure"] ?? $this->getContext($context, "heure")), "html", null, true);
        echo " et on est le ";
        echo twig_escape_filter($this->env, ($context["date"] ?? $this->getContext($context, "date")), "html", null, true);
        echo "
                </p>
            </div>

        </div>
    </div>
";
        
        $__internal_41e24df27c3dd4452c07cbd916c50583aa85256201cb90848406c343197e1895->leave($__internal_41e24df27c3dd4452c07cbd916c50583aa85256201cb90848406c343197e1895_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54ec58972e94a0af282d591eb7b84a9b5a0ffde03620103a30ae325f72661610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ec58972e94a0af282d591eb7b84a9b5a0ffde03620103a30ae325f72661610->enter($__internal_54ec58972e94a0af282d591eb7b84a9b5a0ffde03620103a30ae325f72661610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_54ec58972e94a0af282d591eb7b84a9b5a0ffde03620103a30ae325f72661610->leave($__internal_54ec58972e94a0af282d591eb7b84a9b5a0ffde03620103a30ae325f72661610_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  71 => 21,  55 => 13,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to</span> Symfony {{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}</h1>
            </div>

            <div id=\"next\">
                <h2>What's time?</h2>
                <p>
                     Il est {{heure}} et on est le {{date}}
                </p>
            </div>

        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", ":default:index.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/app/Resources/views/default/index.html.twig");
    }
}
