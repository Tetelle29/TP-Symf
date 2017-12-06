<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3778406ef85a6637d2a2a0be9d378272396e22464ec59695638d364213c2a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b2541ee1e9d8f462f81c855cb24f778146806a75a6e7567f500a0fa58e631e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2541ee1e9d8f462f81c855cb24f778146806a75a6e7567f500a0fa58e631e0->enter($__internal_9b2541ee1e9d8f462f81c855cb24f778146806a75a6e7567f500a0fa58e631e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9b2541ee1e9d8f462f81c855cb24f778146806a75a6e7567f500a0fa58e631e0->leave($__internal_9b2541ee1e9d8f462f81c855cb24f778146806a75a6e7567f500a0fa58e631e0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2171a0b4b1946cde9fce5075f90e5f09aa6b8870a830ca77d46fad2dd357925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2171a0b4b1946cde9fce5075f90e5f09aa6b8870a830ca77d46fad2dd357925->enter($__internal_b2171a0b4b1946cde9fce5075f90e5f09aa6b8870a830ca77d46fad2dd357925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b2171a0b4b1946cde9fce5075f90e5f09aa6b8870a830ca77d46fad2dd357925->leave($__internal_b2171a0b4b1946cde9fce5075f90e5f09aa6b8870a830ca77d46fad2dd357925_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
