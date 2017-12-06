<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46ab2bc272c3178a750b5ed1cc9e1a3105eee226033db342f11453c2ef641716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ab2bc272c3178a750b5ed1cc9e1a3105eee226033db342f11453c2ef641716->enter($__internal_46ab2bc272c3178a750b5ed1cc9e1a3105eee226033db342f11453c2ef641716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46ab2bc272c3178a750b5ed1cc9e1a3105eee226033db342f11453c2ef641716->leave($__internal_46ab2bc272c3178a750b5ed1cc9e1a3105eee226033db342f11453c2ef641716_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d4fc389d01b7ea79bf3ce9b408056517fbee36bc3335a7e21407da554a8bb829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fc389d01b7ea79bf3ce9b408056517fbee36bc3335a7e21407da554a8bb829->enter($__internal_d4fc389d01b7ea79bf3ce9b408056517fbee36bc3335a7e21407da554a8bb829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d4fc389d01b7ea79bf3ce9b408056517fbee36bc3335a7e21407da554a8bb829->leave($__internal_d4fc389d01b7ea79bf3ce9b408056517fbee36bc3335a7e21407da554a8bb829_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80b81217a0dcd074e2c1e50b4c8195ec4ee90315a2236f93d24e9378095b885d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b81217a0dcd074e2c1e50b4c8195ec4ee90315a2236f93d24e9378095b885d->enter($__internal_80b81217a0dcd074e2c1e50b4c8195ec4ee90315a2236f93d24e9378095b885d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80b81217a0dcd074e2c1e50b4c8195ec4ee90315a2236f93d24e9378095b885d->leave($__internal_80b81217a0dcd074e2c1e50b4c8195ec4ee90315a2236f93d24e9378095b885d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7fdccbc7e50cca01896ecffdc35fe1f6ff3cb25aa168eb218d815716c53259a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fdccbc7e50cca01896ecffdc35fe1f6ff3cb25aa168eb218d815716c53259a->enter($__internal_d7fdccbc7e50cca01896ecffdc35fe1f6ff3cb25aa168eb218d815716c53259a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d7fdccbc7e50cca01896ecffdc35fe1f6ff3cb25aa168eb218d815716c53259a->leave($__internal_d7fdccbc7e50cca01896ecffdc35fe1f6ff3cb25aa168eb218d815716c53259a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
