<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cf98befa34d6fd83c86761236c260b9a9d3e7c2c68dd45d3cce13b4178408a30 extends Twig_Template
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
        $__internal_50ced6d895670c93d148aa237bea0242337df1265a0e9c8f72d8f03f89a2ca8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ced6d895670c93d148aa237bea0242337df1265a0e9c8f72d8f03f89a2ca8d->enter($__internal_50ced6d895670c93d148aa237bea0242337df1265a0e9c8f72d8f03f89a2ca8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_50ced6d895670c93d148aa237bea0242337df1265a0e9c8f72d8f03f89a2ca8d->leave($__internal_50ced6d895670c93d148aa237bea0242337df1265a0e9c8f72d8f03f89a2ca8d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
