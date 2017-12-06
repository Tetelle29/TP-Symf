<?php

/* MonDSBundle:Default:dstp23.html.twig */
class __TwigTemplate_b81f9fc87dab5dad64e939da14ad3730a979d4638d79899042e7d62954e28a3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MonDSBundle:Default:base.html.twig", "MonDSBundle:Default:dstp23.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MonDSBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc35aa20a078555d83fa9c76db58730b0136b50c6d6a7383363ba911975667ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc35aa20a078555d83fa9c76db58730b0136b50c6d6a7383363ba911975667ee->enter($__internal_fc35aa20a078555d83fa9c76db58730b0136b50c6d6a7383363ba911975667ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MonDSBundle:Default:dstp23.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc35aa20a078555d83fa9c76db58730b0136b50c6d6a7383363ba911975667ee->leave($__internal_fc35aa20a078555d83fa9c76db58730b0136b50c6d6a7383363ba911975667ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d93bfdf280498bf9eeaebfc7d59e7531706ce3a5ec64c5f85ad12be8a32c1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d93bfdf280498bf9eeaebfc7d59e7531706ce3a5ec64c5f85ad12be8a32c1ae->enter($__internal_4d93bfdf280498bf9eeaebfc7d59e7531706ce3a5ec64c5f85ad12be8a32c1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h2> Bonjour </h2>
    <p> Cette page affiche le nombre aléatoire ";
        // line 6
        echo twig_escape_filter($this->env, ($context["nombrealeatoire"] ?? $this->getContext($context, "nombrealeatoire")), "html", null, true);
        echo " pour la question 2-3 </p>
    
    

";
        
        $__internal_4d93bfdf280498bf9eeaebfc7d59e7531706ce3a5ec64c5f85ad12be8a32c1ae->leave($__internal_4d93bfdf280498bf9eeaebfc7d59e7531706ce3a5ec64c5f85ad12be8a32c1ae_prof);

    }

    public function getTemplateName()
    {
        return "MonDSBundle:Default:dstp23.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MonDSBundle:Default:base.html.twig' %}

{% block body %}
    
    <h2> Bonjour </h2>
    <p> Cette page affiche le nombre aléatoire {{nombrealeatoire}} pour la question 2-3 </p>
    
    

{% endblock %}



", "MonDSBundle:Default:dstp23.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/MonDSBundle/Resources/views/Default/dstp23.html.twig");
    }
}
