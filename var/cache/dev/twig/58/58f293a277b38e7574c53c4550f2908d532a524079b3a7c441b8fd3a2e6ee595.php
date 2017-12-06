<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4fec285a027477d85fe447f808b37d7e1fdf599e4d84213861594bdaff139a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_ee20a4d5b04f91f8f1da1d64e3880c943e43d18c79963572db9909c97ae30565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee20a4d5b04f91f8f1da1d64e3880c943e43d18c79963572db9909c97ae30565->enter($__internal_ee20a4d5b04f91f8f1da1d64e3880c943e43d18c79963572db9909c97ae30565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee20a4d5b04f91f8f1da1d64e3880c943e43d18c79963572db9909c97ae30565->leave($__internal_ee20a4d5b04f91f8f1da1d64e3880c943e43d18c79963572db9909c97ae30565_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_496f4d9cce35ce1b76776acae5063e962779466be13fbdcb4fc36c78722e6d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496f4d9cce35ce1b76776acae5063e962779466be13fbdcb4fc36c78722e6d88->enter($__internal_496f4d9cce35ce1b76776acae5063e962779466be13fbdcb4fc36c78722e6d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_496f4d9cce35ce1b76776acae5063e962779466be13fbdcb4fc36c78722e6d88->leave($__internal_496f4d9cce35ce1b76776acae5063e962779466be13fbdcb4fc36c78722e6d88_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_682bdcee68f2c8081a95478e82f21b5a64aa39109a2683ad07d0be422956ac7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682bdcee68f2c8081a95478e82f21b5a64aa39109a2683ad07d0be422956ac7c->enter($__internal_682bdcee68f2c8081a95478e82f21b5a64aa39109a2683ad07d0be422956ac7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_682bdcee68f2c8081a95478e82f21b5a64aa39109a2683ad07d0be422956ac7c->leave($__internal_682bdcee68f2c8081a95478e82f21b5a64aa39109a2683ad07d0be422956ac7c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_776463856a7dc37ef82cebc815ad7dac7b0f6f4cdbd4a7fa46a104061d990bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776463856a7dc37ef82cebc815ad7dac7b0f6f4cdbd4a7fa46a104061d990bc4->enter($__internal_776463856a7dc37ef82cebc815ad7dac7b0f6f4cdbd4a7fa46a104061d990bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_776463856a7dc37ef82cebc815ad7dac7b0f6f4cdbd4a7fa46a104061d990bc4->leave($__internal_776463856a7dc37ef82cebc815ad7dac7b0f6f4cdbd4a7fa46a104061d990bc4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
