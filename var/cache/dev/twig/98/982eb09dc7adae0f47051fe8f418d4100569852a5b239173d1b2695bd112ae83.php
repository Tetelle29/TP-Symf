<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_eb940068653bac6487cca483ae9bb6ade866129e851c90df7abfac6985156ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee42f622bdf225447e0ff4080d204b4bf26dba96963a51e48fc02d3f5d8c2156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee42f622bdf225447e0ff4080d204b4bf26dba96963a51e48fc02d3f5d8c2156->enter($__internal_ee42f622bdf225447e0ff4080d204b4bf26dba96963a51e48fc02d3f5d8c2156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ee42f622bdf225447e0ff4080d204b4bf26dba96963a51e48fc02d3f5d8c2156->leave($__internal_ee42f622bdf225447e0ff4080d204b4bf26dba96963a51e48fc02d3f5d8c2156_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "FrontBundle:Default:index.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/FrontBundle/Resources/views/Default/index.html.twig");
    }
}
