<?php

/* BackBundle:Default:index.html.twig */
class __TwigTemplate_3095cbe7bc49c8c2a1a4078a4e4a8a438f3c5d155e4cedf3d6a1b9e11de81d4d extends Twig_Template
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
        $__internal_40491a9843f1bf1581ac3b9f34d1ea2dc7ca1ac2da814385d709208903a3c605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40491a9843f1bf1581ac3b9f34d1ea2dc7ca1ac2da814385d709208903a3c605->enter($__internal_40491a9843f1bf1581ac3b9f34d1ea2dc7ca1ac2da814385d709208903a3c605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_40491a9843f1bf1581ac3b9f34d1ea2dc7ca1ac2da814385d709208903a3c605->leave($__internal_40491a9843f1bf1581ac3b9f34d1ea2dc7ca1ac2da814385d709208903a3c605_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:index.html.twig";
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
", "BackBundle:Default:index.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/BackBundle/Resources/views/Default/index.html.twig");
    }
}
