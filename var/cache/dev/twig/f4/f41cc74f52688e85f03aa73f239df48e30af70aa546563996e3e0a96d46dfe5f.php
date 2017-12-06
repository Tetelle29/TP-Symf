<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6caf1c396c4166730f56a1306784f3dc84e086d1144856da42bf1a7849bd954b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6caf1c396c4166730f56a1306784f3dc84e086d1144856da42bf1a7849bd954b->enter($__internal_6caf1c396c4166730f56a1306784f3dc84e086d1144856da42bf1a7849bd954b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6caf1c396c4166730f56a1306784f3dc84e086d1144856da42bf1a7849bd954b->leave($__internal_6caf1c396c4166730f56a1306784f3dc84e086d1144856da42bf1a7849bd954b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d8f9f2e39884833e026f73e457fb69bac3ec1e1fc050ce154798dbef6c2bba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8f9f2e39884833e026f73e457fb69bac3ec1e1fc050ce154798dbef6c2bba9->enter($__internal_4d8f9f2e39884833e026f73e457fb69bac3ec1e1fc050ce154798dbef6c2bba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4d8f9f2e39884833e026f73e457fb69bac3ec1e1fc050ce154798dbef6c2bba9->leave($__internal_4d8f9f2e39884833e026f73e457fb69bac3ec1e1fc050ce154798dbef6c2bba9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d56b0fe759dc059c9587fa4ea2a6b0162a87dafa3ddcf20af9f43e6c8d6e6b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56b0fe759dc059c9587fa4ea2a6b0162a87dafa3ddcf20af9f43e6c8d6e6b9f->enter($__internal_d56b0fe759dc059c9587fa4ea2a6b0162a87dafa3ddcf20af9f43e6c8d6e6b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d56b0fe759dc059c9587fa4ea2a6b0162a87dafa3ddcf20af9f43e6c8d6e6b9f->leave($__internal_d56b0fe759dc059c9587fa4ea2a6b0162a87dafa3ddcf20af9f43e6c8d6e6b9f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ddcdd6083e57c3913970e5f81138715fe4dddc00878e908342fbcfbd6d56f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ddcdd6083e57c3913970e5f81138715fe4dddc00878e908342fbcfbd6d56f74->enter($__internal_4ddcdd6083e57c3913970e5f81138715fe4dddc00878e908342fbcfbd6d56f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4ddcdd6083e57c3913970e5f81138715fe4dddc00878e908342fbcfbd6d56f74->leave($__internal_4ddcdd6083e57c3913970e5f81138715fe4dddc00878e908342fbcfbd6d56f74_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
