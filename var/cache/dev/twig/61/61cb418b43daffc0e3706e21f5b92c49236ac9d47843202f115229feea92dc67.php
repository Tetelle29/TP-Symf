<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e7b2ad9bc23e077cfa76ac741ec7c9ae611721d8012d301195af7c456719235c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_dc442a7248a77af2b3a8eb5fcab35be4d567412721f3f5d8506de4fdc48eb995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc442a7248a77af2b3a8eb5fcab35be4d567412721f3f5d8506de4fdc48eb995->enter($__internal_dc442a7248a77af2b3a8eb5fcab35be4d567412721f3f5d8506de4fdc48eb995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc442a7248a77af2b3a8eb5fcab35be4d567412721f3f5d8506de4fdc48eb995->leave($__internal_dc442a7248a77af2b3a8eb5fcab35be4d567412721f3f5d8506de4fdc48eb995_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bfeded910c84c4b76dcf86de71480f781bcf5c75dad30fa2b4cbdc91516aafd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfeded910c84c4b76dcf86de71480f781bcf5c75dad30fa2b4cbdc91516aafd3->enter($__internal_bfeded910c84c4b76dcf86de71480f781bcf5c75dad30fa2b4cbdc91516aafd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bfeded910c84c4b76dcf86de71480f781bcf5c75dad30fa2b4cbdc91516aafd3->leave($__internal_bfeded910c84c4b76dcf86de71480f781bcf5c75dad30fa2b4cbdc91516aafd3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_20cb1dd9d24d2f9488e92f57011d4fe5d27540c473984063924c47044e62cf12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cb1dd9d24d2f9488e92f57011d4fe5d27540c473984063924c47044e62cf12->enter($__internal_20cb1dd9d24d2f9488e92f57011d4fe5d27540c473984063924c47044e62cf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_20cb1dd9d24d2f9488e92f57011d4fe5d27540c473984063924c47044e62cf12->leave($__internal_20cb1dd9d24d2f9488e92f57011d4fe5d27540c473984063924c47044e62cf12_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd66d3044756034e93fd080963aa5214db9c893c9b5288318188e337de77faa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd66d3044756034e93fd080963aa5214db9c893c9b5288318188e337de77faa1->enter($__internal_fd66d3044756034e93fd080963aa5214db9c893c9b5288318188e337de77faa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fd66d3044756034e93fd080963aa5214db9c893c9b5288318188e337de77faa1->leave($__internal_fd66d3044756034e93fd080963aa5214db9c893c9b5288318188e337de77faa1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
