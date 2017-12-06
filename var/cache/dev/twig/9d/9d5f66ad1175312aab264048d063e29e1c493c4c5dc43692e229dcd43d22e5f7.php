<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
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
        $__internal_55edceeecbe8913661035795fe7501dee35b098513871ffba1617f354eb0ce99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55edceeecbe8913661035795fe7501dee35b098513871ffba1617f354eb0ce99->enter($__internal_55edceeecbe8913661035795fe7501dee35b098513871ffba1617f354eb0ce99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "    </body>
</html>
";
        
        $__internal_55edceeecbe8913661035795fe7501dee35b098513871ffba1617f354eb0ce99->leave($__internal_55edceeecbe8913661035795fe7501dee35b098513871ffba1617f354eb0ce99_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1729a17257a4d9067c79c0fa25f31a35441d99ca015835819931ba8246353205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1729a17257a4d9067c79c0fa25f31a35441d99ca015835819931ba8246353205->enter($__internal_1729a17257a4d9067c79c0fa25f31a35441d99ca015835819931ba8246353205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1729a17257a4d9067c79c0fa25f31a35441d99ca015835819931ba8246353205->leave($__internal_1729a17257a4d9067c79c0fa25f31a35441d99ca015835819931ba8246353205_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf9e838244ea4fd244df87009a8098b96fcd0cee9a9ccdb371b6ba1eba9d4966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9e838244ea4fd244df87009a8098b96fcd0cee9a9ccdb371b6ba1eba9d4966->enter($__internal_bf9e838244ea4fd244df87009a8098b96fcd0cee9a9ccdb371b6ba1eba9d4966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bf9e838244ea4fd244df87009a8098b96fcd0cee9a9ccdb371b6ba1eba9d4966->leave($__internal_bf9e838244ea4fd244df87009a8098b96fcd0cee9a9ccdb371b6ba1eba9d4966_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c6a1a1a023092528bb70975fef9b72ca4c8ee67a61f6feb694bac05b96c0f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6a1a1a023092528bb70975fef9b72ca4c8ee67a61f6feb694bac05b96c0f42->enter($__internal_6c6a1a1a023092528bb70975fef9b72ca4c8ee67a61f6feb694bac05b96c0f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6c6a1a1a023092528bb70975fef9b72ca4c8ee67a61f6feb694bac05b96c0f42->leave($__internal_6c6a1a1a023092528bb70975fef9b72ca4c8ee67a61f6feb694bac05b96c0f42_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a186f70ec40c34f880216e5481ba28779a26870652127fbc7b6091e1e8abcdc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a186f70ec40c34f880216e5481ba28779a26870652127fbc7b6091e1e8abcdc5->enter($__internal_a186f70ec40c34f880216e5481ba28779a26870652127fbc7b6091e1e8abcdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a186f70ec40c34f880216e5481ba28779a26870652127fbc7b6091e1e8abcdc5->leave($__internal_a186f70ec40c34f880216e5481ba28779a26870652127fbc7b6091e1e8abcdc5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
    </body>
</html>
", "base.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/app/Resources/views/base.html.twig");
    }
}
