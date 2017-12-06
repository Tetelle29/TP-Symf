<?php

/* FrontBundle:Default:texte.html.twig */
class __TwigTemplate_792ab3383242c5b1e9bbb4737f3b1b5267920c7e8ca0bfe7978e00275aa2d53e extends Twig_Template
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
        $__internal_e83e10c77793ead30142a5a524a17811a4e23df4fb44243ae24c72171d8b439a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83e10c77793ead30142a5a524a17811a4e23df4fb44243ae24c72171d8b439a->enter($__internal_e83e10c77793ead30142a5a524a17811a4e23df4fb44243ae24c72171d8b439a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:texte.html.twig"));

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
        echo "        Texte url : ";
        echo twig_escape_filter($this->env, ($context["texte"] ?? $this->getContext($context, "texte")), "html", null, true);
        echo "
    </body>
</html>
";
        
        $__internal_e83e10c77793ead30142a5a524a17811a4e23df4fb44243ae24c72171d8b439a->leave($__internal_e83e10c77793ead30142a5a524a17811a4e23df4fb44243ae24c72171d8b439a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f8d050ee2a7e9ef26dd17d197a2c8013ae4c288d06598a86160ee5229ef8517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8d050ee2a7e9ef26dd17d197a2c8013ae4c288d06598a86160ee5229ef8517->enter($__internal_4f8d050ee2a7e9ef26dd17d197a2c8013ae4c288d06598a86160ee5229ef8517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4f8d050ee2a7e9ef26dd17d197a2c8013ae4c288d06598a86160ee5229ef8517->leave($__internal_4f8d050ee2a7e9ef26dd17d197a2c8013ae4c288d06598a86160ee5229ef8517_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17f5708da2bd5dffa67bfc48398d1983a703a1fbb928da0cd763d45e4023c122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f5708da2bd5dffa67bfc48398d1983a703a1fbb928da0cd763d45e4023c122->enter($__internal_17f5708da2bd5dffa67bfc48398d1983a703a1fbb928da0cd763d45e4023c122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_17f5708da2bd5dffa67bfc48398d1983a703a1fbb928da0cd763d45e4023c122->leave($__internal_17f5708da2bd5dffa67bfc48398d1983a703a1fbb928da0cd763d45e4023c122_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_deffc097732502610c5d3d684b0698bcd72ed0c302a80f361bdbc2361a730793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deffc097732502610c5d3d684b0698bcd72ed0c302a80f361bdbc2361a730793->enter($__internal_deffc097732502610c5d3d684b0698bcd72ed0c302a80f361bdbc2361a730793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_deffc097732502610c5d3d684b0698bcd72ed0c302a80f361bdbc2361a730793->leave($__internal_deffc097732502610c5d3d684b0698bcd72ed0c302a80f361bdbc2361a730793_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b231d18525b8bc3c21087ce817b8f7660579a203b2942ca5efc34b76901f54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b231d18525b8bc3c21087ce817b8f7660579a203b2942ca5efc34b76901f54f->enter($__internal_2b231d18525b8bc3c21087ce817b8f7660579a203b2942ca5efc34b76901f54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2b231d18525b8bc3c21087ce817b8f7660579a203b2942ca5efc34b76901f54f->leave($__internal_2b231d18525b8bc3c21087ce817b8f7660579a203b2942ca5efc34b76901f54f_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:texte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 11,  85 => 10,  74 => 6,  62 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        Texte url : {{texte}}
    </body>
</html>
", "FrontBundle:Default:texte.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/FrontBundle/Resources/views/Default/texte.html.twig");
    }
}
