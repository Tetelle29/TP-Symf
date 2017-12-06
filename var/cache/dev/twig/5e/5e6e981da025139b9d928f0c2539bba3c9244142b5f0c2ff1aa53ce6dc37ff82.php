<?php

/* MonDSBundle:Default:dstp22.html.twig */
class __TwigTemplate_06d15a3b531930b5f6589b66b250540de05724c4ee67806400078006cbd76ebb extends Twig_Template
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
        $__internal_6957a0e8b12d69f1d2ae879664258498b7dc6829a9e1f1e3bd05d7befab67c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6957a0e8b12d69f1d2ae879664258498b7dc6829a9e1f1e3bd05d7befab67c1d->enter($__internal_6957a0e8b12d69f1d2ae879664258498b7dc6829a9e1f1e3bd05d7befab67c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MonDSBundle:Default:dstp22.html.twig"));

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
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "        \" Cette page n'affiche pas de message complémentaire pour la question 2-2 \"
    </body>
</html>";
        
        $__internal_6957a0e8b12d69f1d2ae879664258498b7dc6829a9e1f1e3bd05d7befab67c1d->leave($__internal_6957a0e8b12d69f1d2ae879664258498b7dc6829a9e1f1e3bd05d7befab67c1d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_227b0a28bf6c8a2690896baaa97a47faca46aa1240d8efd031759a2f0541dffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227b0a28bf6c8a2690896baaa97a47faca46aa1240d8efd031759a2f0541dffc->enter($__internal_227b0a28bf6c8a2690896baaa97a47faca46aa1240d8efd031759a2f0541dffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_227b0a28bf6c8a2690896baaa97a47faca46aa1240d8efd031759a2f0541dffc->leave($__internal_227b0a28bf6c8a2690896baaa97a47faca46aa1240d8efd031759a2f0541dffc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_79496aa54e459ed86a1a1d1da405edd6a46ac3f15ceb80b49b105492e237af77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79496aa54e459ed86a1a1d1da405edd6a46ac3f15ceb80b49b105492e237af77->enter($__internal_79496aa54e459ed86a1a1d1da405edd6a46ac3f15ceb80b49b105492e237af77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_79496aa54e459ed86a1a1d1da405edd6a46ac3f15ceb80b49b105492e237af77->leave($__internal_79496aa54e459ed86a1a1d1da405edd6a46ac3f15ceb80b49b105492e237af77_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b505ddd454232c307fb6dabc026d993d81854e4cf4e86a4ed8deaff3d5a55a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b505ddd454232c307fb6dabc026d993d81854e4cf4e86a4ed8deaff3d5a55a1e->enter($__internal_b505ddd454232c307fb6dabc026d993d81854e4cf4e86a4ed8deaff3d5a55a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b505ddd454232c307fb6dabc026d993d81854e4cf4e86a4ed8deaff3d5a55a1e->leave($__internal_b505ddd454232c307fb6dabc026d993d81854e4cf4e86a4ed8deaff3d5a55a1e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6aeb37c9a94ba15d75c43f7a25af091a4e3d42a83ccee9f5887b305f61364574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aeb37c9a94ba15d75c43f7a25af091a4e3d42a83ccee9f5887b305f61364574->enter($__internal_6aeb37c9a94ba15d75c43f7a25af091a4e3d42a83ccee9f5887b305f61364574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6aeb37c9a94ba15d75c43f7a25af091a4e3d42a83ccee9f5887b305f61364574->leave($__internal_6aeb37c9a94ba15d75c43f7a25af091a4e3d42a83ccee9f5887b305f61364574_prof);

    }

    public function getTemplateName()
    {
        return "MonDSBundle:Default:dstp22.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        \" Cette page n'affiche pas de message complémentaire pour la question 2-2 \"
    </body>
</html>", "MonDSBundle:Default:dstp22.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/MonDSBundle/Resources/views/Default/dstp22.html.twig");
    }
}
