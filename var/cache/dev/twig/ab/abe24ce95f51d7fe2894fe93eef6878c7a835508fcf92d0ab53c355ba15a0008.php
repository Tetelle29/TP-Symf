<?php

/* :default:test.html.twig */
class __TwigTemplate_6e03158a31753373ed922d02580e348c17c6b4c309f124ce41682dea86d58024 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d4029d0842e5e90a754e60fe40ff380e9e4ef31d3e787a1d6a86824b4c77f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4029d0842e5e90a754e60fe40ff380e9e4ef31d3e787a1d6a86824b4c77f40->enter($__internal_5d4029d0842e5e90a754e60fe40ff380e9e4ef31d3e787a1d6a86824b4c77f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:test.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <p> Coucou </p>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>";
        
        $__internal_5d4029d0842e5e90a754e60fe40ff380e9e4ef31d3e787a1d6a86824b4c77f40->leave($__internal_5d4029d0842e5e90a754e60fe40ff380e9e4ef31d3e787a1d6a86824b4c77f40_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bdcda38c1e15fa336a3b51f0be3f9f919a35be2c0d54c899c3ea8586ae524b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdcda38c1e15fa336a3b51f0be3f9f919a35be2c0d54c899c3ea8586ae524b6->enter($__internal_4bdcda38c1e15fa336a3b51f0be3f9f919a35be2c0d54c899c3ea8586ae524b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4bdcda38c1e15fa336a3b51f0be3f9f919a35be2c0d54c899c3ea8586ae524b6->leave($__internal_4bdcda38c1e15fa336a3b51f0be3f9f919a35be2c0d54c899c3ea8586ae524b6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea301920674d57f048103cb2fca54801ffc0ae031cc3281455932e72998bd3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea301920674d57f048103cb2fca54801ffc0ae031cc3281455932e72998bd3a3->enter($__internal_ea301920674d57f048103cb2fca54801ffc0ae031cc3281455932e72998bd3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ea301920674d57f048103cb2fca54801ffc0ae031cc3281455932e72998bd3a3->leave($__internal_ea301920674d57f048103cb2fca54801ffc0ae031cc3281455932e72998bd3a3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dde7db8e979b5439b953f081f5b97b21a946d0b582032363b0e35a4b379c795f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde7db8e979b5439b953f081f5b97b21a946d0b582032363b0e35a4b379c795f->enter($__internal_dde7db8e979b5439b953f081f5b97b21a946d0b582032363b0e35a4b379c795f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dde7db8e979b5439b953f081f5b97b21a946d0b582032363b0e35a4b379c795f->leave($__internal_dde7db8e979b5439b953f081f5b97b21a946d0b582032363b0e35a4b379c795f_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b72c267b9a72bb39db01854e00e0c8506854becc6c129cf008eefab2aedb5ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72c267b9a72bb39db01854e00e0c8506854becc6c129cf008eefab2aedb5ff4->enter($__internal_b72c267b9a72bb39db01854e00e0c8506854becc6c129cf008eefab2aedb5ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b72c267b9a72bb39db01854e00e0c8506854becc6c129cf008eefab2aedb5ff4->leave($__internal_b72c267b9a72bb39db01854e00e0c8506854becc6c129cf008eefab2aedb5ff4_prof);

    }

    public function getTemplateName()
    {
        return ":default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 12,  82 => 11,  71 => 6,  59 => 5,  51 => 13,  48 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <p> Coucou </p>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>", ":default:test.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/app/Resources/views/default/test.html.twig");
    }
}
