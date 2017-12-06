<?php

/* FrontBundle:Default:dstp13.html.twig */
class __TwigTemplate_f478b7060ffece059454a9524123c7a5f7ee8630155e728c69016f078bb607cc extends Twig_Template
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
        $__internal_99f4503dee1df27831f81d34d09be4a3eac855f0dc546b9584223ffb39e6ceee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f4503dee1df27831f81d34d09be4a3eac855f0dc546b9584223ffb39e6ceee->enter($__internal_99f4503dee1df27831f81d34d09be4a3eac855f0dc546b9584223ffb39e6ceee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:dstp13.html.twig"));

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
        echo "        Texte en majuscule : ";
        echo twig_escape_filter($this->env, ($context["mavariable"] ?? $this->getContext($context, "mavariable")), "html", null, true);
        echo "
    </body>
</html>
";
        
        $__internal_99f4503dee1df27831f81d34d09be4a3eac855f0dc546b9584223ffb39e6ceee->leave($__internal_99f4503dee1df27831f81d34d09be4a3eac855f0dc546b9584223ffb39e6ceee_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc588469504e7ab2c34fb9860bcb73b98e7bfee8a11d6adb62922e9b814e1b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc588469504e7ab2c34fb9860bcb73b98e7bfee8a11d6adb62922e9b814e1b89->enter($__internal_bc588469504e7ab2c34fb9860bcb73b98e7bfee8a11d6adb62922e9b814e1b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bc588469504e7ab2c34fb9860bcb73b98e7bfee8a11d6adb62922e9b814e1b89->leave($__internal_bc588469504e7ab2c34fb9860bcb73b98e7bfee8a11d6adb62922e9b814e1b89_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08bed944a2f750c81844f4671298e039303f3ab5ec0d96093b07023e407620d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bed944a2f750c81844f4671298e039303f3ab5ec0d96093b07023e407620d8->enter($__internal_08bed944a2f750c81844f4671298e039303f3ab5ec0d96093b07023e407620d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_08bed944a2f750c81844f4671298e039303f3ab5ec0d96093b07023e407620d8->leave($__internal_08bed944a2f750c81844f4671298e039303f3ab5ec0d96093b07023e407620d8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b15997f339cd5795b075f68689fbaf41fde1649431d6a7025241b803d9b2f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b15997f339cd5795b075f68689fbaf41fde1649431d6a7025241b803d9b2f30->enter($__internal_4b15997f339cd5795b075f68689fbaf41fde1649431d6a7025241b803d9b2f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4b15997f339cd5795b075f68689fbaf41fde1649431d6a7025241b803d9b2f30->leave($__internal_4b15997f339cd5795b075f68689fbaf41fde1649431d6a7025241b803d9b2f30_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ffacaa4698b40af06264ae38497c3c896870aec28a89b2b7b9cf1bfc2fe06589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffacaa4698b40af06264ae38497c3c896870aec28a89b2b7b9cf1bfc2fe06589->enter($__internal_ffacaa4698b40af06264ae38497c3c896870aec28a89b2b7b9cf1bfc2fe06589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ffacaa4698b40af06264ae38497c3c896870aec28a89b2b7b9cf1bfc2fe06589->leave($__internal_ffacaa4698b40af06264ae38497c3c896870aec28a89b2b7b9cf1bfc2fe06589_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:dstp13.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 11,  85 => 10,  74 => 6,  62 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        Texte en majuscule : {{mavariable}}
    </body>
</html>
", "FrontBundle:Default:dstp13.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/FrontBundle/Resources/views/Default/dstp13.html.twig");
    }
}
