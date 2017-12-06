<?php

/* MonDSBundle:Default:dstp21.html.twig */
class __TwigTemplate_29baf6f72309141004319e212795351bcfdce230adab873df7e22ff4b278f7d6 extends Twig_Template
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
        $__internal_9fbf3aff3447030a51323cdef4f11803316f038421161474afece87a6063b9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fbf3aff3447030a51323cdef4f11803316f038421161474afece87a6063b9ed->enter($__internal_9fbf3aff3447030a51323cdef4f11803316f038421161474afece87a6063b9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MonDSBundle:Default:dstp21.html.twig"));

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
        echo "        \" Texte pour la question 2-1 \"
    </body>
</html>
";
        
        $__internal_9fbf3aff3447030a51323cdef4f11803316f038421161474afece87a6063b9ed->leave($__internal_9fbf3aff3447030a51323cdef4f11803316f038421161474afece87a6063b9ed_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc5304e7921b9c5cd210340fbd57507922ea679ab598be73a94bd10f9349847e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5304e7921b9c5cd210340fbd57507922ea679ab598be73a94bd10f9349847e->enter($__internal_cc5304e7921b9c5cd210340fbd57507922ea679ab598be73a94bd10f9349847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cc5304e7921b9c5cd210340fbd57507922ea679ab598be73a94bd10f9349847e->leave($__internal_cc5304e7921b9c5cd210340fbd57507922ea679ab598be73a94bd10f9349847e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5d6dd162bfb9b66193e5ac69c5fc66069b43e8f4a077a2ce61b15aa8d93ffb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d6dd162bfb9b66193e5ac69c5fc66069b43e8f4a077a2ce61b15aa8d93ffb7->enter($__internal_b5d6dd162bfb9b66193e5ac69c5fc66069b43e8f4a077a2ce61b15aa8d93ffb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b5d6dd162bfb9b66193e5ac69c5fc66069b43e8f4a077a2ce61b15aa8d93ffb7->leave($__internal_b5d6dd162bfb9b66193e5ac69c5fc66069b43e8f4a077a2ce61b15aa8d93ffb7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_136bcf74361ec47d6c49c3cada7c2225acf51b0d88ae30fd7dd893131d55238b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136bcf74361ec47d6c49c3cada7c2225acf51b0d88ae30fd7dd893131d55238b->enter($__internal_136bcf74361ec47d6c49c3cada7c2225acf51b0d88ae30fd7dd893131d55238b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_136bcf74361ec47d6c49c3cada7c2225acf51b0d88ae30fd7dd893131d55238b->leave($__internal_136bcf74361ec47d6c49c3cada7c2225acf51b0d88ae30fd7dd893131d55238b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad428a71be0b98e2a454b5fa48cc4e0954fb3d390f2f3949d263a702c5f2eb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad428a71be0b98e2a454b5fa48cc4e0954fb3d390f2f3949d263a702c5f2eb4e->enter($__internal_ad428a71be0b98e2a454b5fa48cc4e0954fb3d390f2f3949d263a702c5f2eb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ad428a71be0b98e2a454b5fa48cc4e0954fb3d390f2f3949d263a702c5f2eb4e->leave($__internal_ad428a71be0b98e2a454b5fa48cc4e0954fb3d390f2f3949d263a702c5f2eb4e_prof);

    }

    public function getTemplateName()
    {
        return "MonDSBundle:Default:dstp21.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  83 => 10,  72 => 6,  60 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        \" Texte pour la question 2-1 \"
    </body>
</html>
", "MonDSBundle:Default:dstp21.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/MonDSBundle/Resources/views/Default/dstp21.html.twig");
    }
}
