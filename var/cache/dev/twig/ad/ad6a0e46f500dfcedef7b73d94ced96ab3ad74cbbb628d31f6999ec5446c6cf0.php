<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9180ece55a1d6e178d05e18ba2cbbc42d59183df6c1aa11037f0ec8ef46ede2c extends Twig_Template
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
        $__internal_0c51ec04355879cf7e0fdd1ea4e504ad7895f65ac9632a6b1bd9f23b51dc1d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c51ec04355879cf7e0fdd1ea4e504ad7895f65ac9632a6b1bd9f23b51dc1d2e->enter($__internal_0c51ec04355879cf7e0fdd1ea4e504ad7895f65ac9632a6b1bd9f23b51dc1d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0c51ec04355879cf7e0fdd1ea4e504ad7895f65ac9632a6b1bd9f23b51dc1d2e->leave($__internal_0c51ec04355879cf7e0fdd1ea4e504ad7895f65ac9632a6b1bd9f23b51dc1d2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
