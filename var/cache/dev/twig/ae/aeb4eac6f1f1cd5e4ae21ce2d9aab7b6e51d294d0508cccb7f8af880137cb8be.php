<?php

/* FrontBundle:Default:url_message.html.twig */
class __TwigTemplate_b42a8cb920c4e6f206b1a7050349f94070ddaa22beb9aa295070e56c75573047 extends Twig_Template
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
        $__internal_2c93c870e0431479327c38106f27e8844dcc67ab0a6147c8c0be6a6d29f98707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c93c870e0431479327c38106f27e8844dcc67ab0a6147c8c0be6a6d29f98707->enter($__internal_2c93c870e0431479327c38106f27e8844dcc67ab0a6147c8c0be6a6d29f98707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:url_message.html.twig"));

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
        echo "        Message url : ";
        echo twig_escape_filter($this->env, ($context["message_url"] ?? $this->getContext($context, "message_url")), "html", null, true);
        echo "
    </body>
</html>

";
        
        $__internal_2c93c870e0431479327c38106f27e8844dcc67ab0a6147c8c0be6a6d29f98707->leave($__internal_2c93c870e0431479327c38106f27e8844dcc67ab0a6147c8c0be6a6d29f98707_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_617baaa0e4307ebb6d7fe325b13d0bbf2f0c35e6050645e76de6580e4c022b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617baaa0e4307ebb6d7fe325b13d0bbf2f0c35e6050645e76de6580e4c022b7e->enter($__internal_617baaa0e4307ebb6d7fe325b13d0bbf2f0c35e6050645e76de6580e4c022b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_617baaa0e4307ebb6d7fe325b13d0bbf2f0c35e6050645e76de6580e4c022b7e->leave($__internal_617baaa0e4307ebb6d7fe325b13d0bbf2f0c35e6050645e76de6580e4c022b7e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f2b9ec0284748182711031694ec5914a855198c22fd823fa49c657a66c01d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2b9ec0284748182711031694ec5914a855198c22fd823fa49c657a66c01d8f->enter($__internal_1f2b9ec0284748182711031694ec5914a855198c22fd823fa49c657a66c01d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1f2b9ec0284748182711031694ec5914a855198c22fd823fa49c657a66c01d8f->leave($__internal_1f2b9ec0284748182711031694ec5914a855198c22fd823fa49c657a66c01d8f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_33e7d6094018dad214bb25671e82cc3e75cc99673b450e41544fa8607964e57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e7d6094018dad214bb25671e82cc3e75cc99673b450e41544fa8607964e57b->enter($__internal_33e7d6094018dad214bb25671e82cc3e75cc99673b450e41544fa8607964e57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_33e7d6094018dad214bb25671e82cc3e75cc99673b450e41544fa8607964e57b->leave($__internal_33e7d6094018dad214bb25671e82cc3e75cc99673b450e41544fa8607964e57b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4279c1c0ca4d0e9d2860ba09e50390d9d306c2663a5f73b54450aa2a2462e1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4279c1c0ca4d0e9d2860ba09e50390d9d306c2663a5f73b54450aa2a2462e1cf->enter($__internal_4279c1c0ca4d0e9d2860ba09e50390d9d306c2663a5f73b54450aa2a2462e1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4279c1c0ca4d0e9d2860ba09e50390d9d306c2663a5f73b54450aa2a2462e1cf->leave($__internal_4279c1c0ca4d0e9d2860ba09e50390d9d306c2663a5f73b54450aa2a2462e1cf_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:url_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 11,  86 => 10,  75 => 6,  63 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        Message url : {{message_url}}
    </body>
</html>

", "FrontBundle:Default:url_message.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/FrontBundle/Resources/views/Default/url_message.html.twig");
    }
}
