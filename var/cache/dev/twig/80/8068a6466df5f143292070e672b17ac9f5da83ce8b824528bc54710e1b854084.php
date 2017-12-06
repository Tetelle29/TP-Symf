<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5fd121e80e12d5458730f22e4cd3dc69a00d43e808883e6bf4c9508b8f091993 extends Twig_Template
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
        $__internal_14805e37048cb7fd15c2be681df2e75bdbaa39556964465ee4067ee6923fd7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14805e37048cb7fd15c2be681df2e75bdbaa39556964465ee4067ee6923fd7c7->enter($__internal_14805e37048cb7fd15c2be681df2e75bdbaa39556964465ee4067ee6923fd7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14805e37048cb7fd15c2be681df2e75bdbaa39556964465ee4067ee6923fd7c7->leave($__internal_14805e37048cb7fd15c2be681df2e75bdbaa39556964465ee4067ee6923fd7c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_675e16525191d1466447447713e410e66653c12a0f1c028f59a2da8e6f894cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675e16525191d1466447447713e410e66653c12a0f1c028f59a2da8e6f894cf5->enter($__internal_675e16525191d1466447447713e410e66653c12a0f1c028f59a2da8e6f894cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_675e16525191d1466447447713e410e66653c12a0f1c028f59a2da8e6f894cf5->leave($__internal_675e16525191d1466447447713e410e66653c12a0f1c028f59a2da8e6f894cf5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f1c25b2bc4626fff88e8b5a0ec8250c4ff917f55a0cf37dcb4dd2fd9b64bbbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1c25b2bc4626fff88e8b5a0ec8250c4ff917f55a0cf37dcb4dd2fd9b64bbbb->enter($__internal_9f1c25b2bc4626fff88e8b5a0ec8250c4ff917f55a0cf37dcb4dd2fd9b64bbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f1c25b2bc4626fff88e8b5a0ec8250c4ff917f55a0cf37dcb4dd2fd9b64bbbb->leave($__internal_9f1c25b2bc4626fff88e8b5a0ec8250c4ff917f55a0cf37dcb4dd2fd9b64bbbb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59bce2307b4c82f3448867a53cbb07d46a6d6065b658228a7aca4194f6f4027c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bce2307b4c82f3448867a53cbb07d46a6d6065b658228a7aca4194f6f4027c->enter($__internal_59bce2307b4c82f3448867a53cbb07d46a6d6065b658228a7aca4194f6f4027c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_59bce2307b4c82f3448867a53cbb07d46a6d6065b658228a7aca4194f6f4027c->leave($__internal_59bce2307b4c82f3448867a53cbb07d46a6d6065b658228a7aca4194f6f4027c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/tetelle/symfony/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
