<?php

/* BackBundle:Default:ip.html.twig */
class __TwigTemplate_2e89e88d779fa0308a4200ed562fc1c74a937919486289e42d69b7ebd61a0a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecd423c6b097b1390bca46ca74c231de5904ae48eabd27a5d44a2f0bd464d3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd423c6b097b1390bca46ca74c231de5904ae48eabd27a5d44a2f0bd464d3ab->enter($__internal_ecd423c6b097b1390bca46ca74c231de5904ae48eabd27a5d44a2f0bd464d3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:ip.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "        Adresse ip : ";
        echo twig_escape_filter($this->env, ($context["ip"] ?? $this->getContext($context, "ip")), "html", null, true);
        echo "
    </body>
</html>

";
        
        $__internal_ecd423c6b097b1390bca46ca74c231de5904ae48eabd27a5d44a2f0bd464d3ab->leave($__internal_ecd423c6b097b1390bca46ca74c231de5904ae48eabd27a5d44a2f0bd464d3ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_047a4952be7e0a846199aa42b48cdcfbb3fda4950c8466b3981fe392b5666e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047a4952be7e0a846199aa42b48cdcfbb3fda4950c8466b3981fe392b5666e28->enter($__internal_047a4952be7e0a846199aa42b48cdcfbb3fda4950c8466b3981fe392b5666e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_047a4952be7e0a846199aa42b48cdcfbb3fda4950c8466b3981fe392b5666e28->leave($__internal_047a4952be7e0a846199aa42b48cdcfbb3fda4950c8466b3981fe392b5666e28_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0a4da1444e0122e7e8e020a405f426dc801b169dd29e424ec1df7b10f32f02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a4da1444e0122e7e8e020a405f426dc801b169dd29e424ec1df7b10f32f02a->enter($__internal_d0a4da1444e0122e7e8e020a405f426dc801b169dd29e424ec1df7b10f32f02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d0a4da1444e0122e7e8e020a405f426dc801b169dd29e424ec1df7b10f32f02a->leave($__internal_d0a4da1444e0122e7e8e020a405f426dc801b169dd29e424ec1df7b10f32f02a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0edc42deb29fc15f021720a900fc93ccb64a27c5b300c803462fc357b28b1297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0edc42deb29fc15f021720a900fc93ccb64a27c5b300c803462fc357b28b1297->enter($__internal_0edc42deb29fc15f021720a900fc93ccb64a27c5b300c803462fc357b28b1297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0edc42deb29fc15f021720a900fc93ccb64a27c5b300c803462fc357b28b1297->leave($__internal_0edc42deb29fc15f021720a900fc93ccb64a27c5b300c803462fc357b28b1297_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1226595a4dbb3c34cfa2399037cfcdda447db4f474474e78d1114b61b19bf3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1226595a4dbb3c34cfa2399037cfcdda447db4f474474e78d1114b61b19bf3c0->enter($__internal_1226595a4dbb3c34cfa2399037cfcdda447db4f474474e78d1114b61b19bf3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1226595a4dbb3c34cfa2399037cfcdda447db4f474474e78d1114b61b19bf3c0->leave($__internal_1226595a4dbb3c34cfa2399037cfcdda447db4f474474e78d1114b61b19bf3c0_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:ip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 11,  86 => 10,  75 => 6,  63 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        Adresse ip : {{ip}}
    </body>
</html>

", "BackBundle:Default:ip.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/BackBundle/Resources/views/Default/ip.html.twig");
    }
}
