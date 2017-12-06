<?php

/* FrontBundle:Default:numero.html.twig */
class __TwigTemplate_2091ea7a239381e7748d0077d8f58279bdfe10f2faebae2b66135f7682fbb188 extends Twig_Template
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
        $__internal_3c209ab369a330b795a130505c932662e236aba0cb8a145d915cec74142f090e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c209ab369a330b795a130505c932662e236aba0cb8a145d915cec74142f090e->enter($__internal_3c209ab369a330b795a130505c932662e236aba0cb8a145d915cec74142f090e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Default:numero.html.twig"));

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
        echo "        Numéro url : ";
        echo twig_escape_filter($this->env, ($context["numero"] ?? $this->getContext($context, "numero")), "html", null, true);
        echo "
    </body>
</html>
";
        
        $__internal_3c209ab369a330b795a130505c932662e236aba0cb8a145d915cec74142f090e->leave($__internal_3c209ab369a330b795a130505c932662e236aba0cb8a145d915cec74142f090e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_37186132f92d0faa904a9512406d66d756cbfc9248cfde20f5ca78fa57656e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37186132f92d0faa904a9512406d66d756cbfc9248cfde20f5ca78fa57656e53->enter($__internal_37186132f92d0faa904a9512406d66d756cbfc9248cfde20f5ca78fa57656e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_37186132f92d0faa904a9512406d66d756cbfc9248cfde20f5ca78fa57656e53->leave($__internal_37186132f92d0faa904a9512406d66d756cbfc9248cfde20f5ca78fa57656e53_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b33310a3430c85800548cac44908e65a387a51f576c78d6691324f3b8a6f406a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33310a3430c85800548cac44908e65a387a51f576c78d6691324f3b8a6f406a->enter($__internal_b33310a3430c85800548cac44908e65a387a51f576c78d6691324f3b8a6f406a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b33310a3430c85800548cac44908e65a387a51f576c78d6691324f3b8a6f406a->leave($__internal_b33310a3430c85800548cac44908e65a387a51f576c78d6691324f3b8a6f406a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f516b8916f0ab4cb6db43bfb6ff32fe340653e4f61cfbad67f843ac8225a0f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f516b8916f0ab4cb6db43bfb6ff32fe340653e4f61cfbad67f843ac8225a0f85->enter($__internal_f516b8916f0ab4cb6db43bfb6ff32fe340653e4f61cfbad67f843ac8225a0f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f516b8916f0ab4cb6db43bfb6ff32fe340653e4f61cfbad67f843ac8225a0f85->leave($__internal_f516b8916f0ab4cb6db43bfb6ff32fe340653e4f61cfbad67f843ac8225a0f85_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35aeb58710168b091ef99980a798c516950c24add02e35b0e3a024b78c09c8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35aeb58710168b091ef99980a798c516950c24add02e35b0e3a024b78c09c8f9->enter($__internal_35aeb58710168b091ef99980a798c516950c24add02e35b0e3a024b78c09c8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_35aeb58710168b091ef99980a798c516950c24add02e35b0e3a024b78c09c8f9->leave($__internal_35aeb58710168b091ef99980a798c516950c24add02e35b0e3a024b78c09c8f9_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:numero.html.twig";
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
        Numéro url : {{numero}}
    </body>
</html>
", "FrontBundle:Default:numero.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/FrontBundle/Resources/views/Default/numero.html.twig");
    }
}
