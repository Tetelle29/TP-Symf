<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d9ffae65641b2646830901a5f86c06bf780d0129aa15524b0693f8abf9d9bfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5db00be9e148a73740645a05184f28708a225c001ed716610a45ee9b1efeed0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db00be9e148a73740645a05184f28708a225c001ed716610a45ee9b1efeed0b->enter($__internal_5db00be9e148a73740645a05184f28708a225c001ed716610a45ee9b1efeed0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db00be9e148a73740645a05184f28708a225c001ed716610a45ee9b1efeed0b->leave($__internal_5db00be9e148a73740645a05184f28708a225c001ed716610a45ee9b1efeed0b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b007fdc7a78e067e7613067d7549ed9b5bf47291e01ba8c756301f4ec5fd5a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b007fdc7a78e067e7613067d7549ed9b5bf47291e01ba8c756301f4ec5fd5a2a->enter($__internal_b007fdc7a78e067e7613067d7549ed9b5bf47291e01ba8c756301f4ec5fd5a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b007fdc7a78e067e7613067d7549ed9b5bf47291e01ba8c756301f4ec5fd5a2a->leave($__internal_b007fdc7a78e067e7613067d7549ed9b5bf47291e01ba8c756301f4ec5fd5a2a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2cf1f7b125191ce673849e41fd0b15151ed799e831adb7e2aff737baecf5e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2cf1f7b125191ce673849e41fd0b15151ed799e831adb7e2aff737baecf5e88->enter($__internal_c2cf1f7b125191ce673849e41fd0b15151ed799e831adb7e2aff737baecf5e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c2cf1f7b125191ce673849e41fd0b15151ed799e831adb7e2aff737baecf5e88->leave($__internal_c2cf1f7b125191ce673849e41fd0b15151ed799e831adb7e2aff737baecf5e88_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
