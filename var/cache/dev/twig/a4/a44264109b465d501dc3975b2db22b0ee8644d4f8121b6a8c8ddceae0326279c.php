<?php

/* BackBundle:Default:test4.html.twig */
class __TwigTemplate_d66fb9b384c7fa4ab5e2882da33ef33313bf040dd1bdb30b0bb8fbe3c55aaa85 extends Twig_Template
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
        $__internal_ab10317487937278f8558e05d0638e7a2ddb39b77c526e3773c48e14803b049d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab10317487937278f8558e05d0638e7a2ddb39b77c526e3773c48e14803b049d->enter($__internal_ab10317487937278f8558e05d0638e7a2ddb39b77c526e3773c48e14803b049d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:test4.html.twig"));

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
        echo "        Value : ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
        Libelle : ";
        // line 13
        echo twig_escape_filter($this->env, ($context["libelle"] ?? $this->getContext($context, "libelle")), "html", null, true);
        echo "
        Nb : ";
        // line 14
        echo twig_escape_filter($this->env, ($context["nb"] ?? $this->getContext($context, "nb")), "html", null, true);
        echo "
       
    </body>
</html>
";
        
        $__internal_ab10317487937278f8558e05d0638e7a2ddb39b77c526e3773c48e14803b049d->leave($__internal_ab10317487937278f8558e05d0638e7a2ddb39b77c526e3773c48e14803b049d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_093c0a7cfff0ddb1b5ee81f7f7072939e59e3b78fce30765a11e0c5da8ace181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093c0a7cfff0ddb1b5ee81f7f7072939e59e3b78fce30765a11e0c5da8ace181->enter($__internal_093c0a7cfff0ddb1b5ee81f7f7072939e59e3b78fce30765a11e0c5da8ace181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_093c0a7cfff0ddb1b5ee81f7f7072939e59e3b78fce30765a11e0c5da8ace181->leave($__internal_093c0a7cfff0ddb1b5ee81f7f7072939e59e3b78fce30765a11e0c5da8ace181_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d881e4190cfc696f86340e3ce03e8476fb0e07e16bd7ce93dc1f8ed906e42b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d881e4190cfc696f86340e3ce03e8476fb0e07e16bd7ce93dc1f8ed906e42b2->enter($__internal_1d881e4190cfc696f86340e3ce03e8476fb0e07e16bd7ce93dc1f8ed906e42b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1d881e4190cfc696f86340e3ce03e8476fb0e07e16bd7ce93dc1f8ed906e42b2->leave($__internal_1d881e4190cfc696f86340e3ce03e8476fb0e07e16bd7ce93dc1f8ed906e42b2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0b9d058294654554641a5f2bef03422d6fdd884a9b16049e1fbdf137a07c322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b9d058294654554641a5f2bef03422d6fdd884a9b16049e1fbdf137a07c322->enter($__internal_e0b9d058294654554641a5f2bef03422d6fdd884a9b16049e1fbdf137a07c322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0b9d058294654554641a5f2bef03422d6fdd884a9b16049e1fbdf137a07c322->leave($__internal_e0b9d058294654554641a5f2bef03422d6fdd884a9b16049e1fbdf137a07c322_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94a84104bd6d79476937f0f3be250fde2653075ec159007828fd624ac06c6657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a84104bd6d79476937f0f3be250fde2653075ec159007828fd624ac06c6657->enter($__internal_94a84104bd6d79476937f0f3be250fde2653075ec159007828fd624ac06c6657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_94a84104bd6d79476937f0f3be250fde2653075ec159007828fd624ac06c6657->leave($__internal_94a84104bd6d79476937f0f3be250fde2653075ec159007828fd624ac06c6657_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:test4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 11,  94 => 10,  83 => 6,  71 => 5,  59 => 14,  55 => 13,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        Value : {{value}}
        Libelle : {{libelle}}
        Nb : {{nb}}
       
    </body>
</html>
", "BackBundle:Default:test4.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/BackBundle/Resources/views/Default/test4.html.twig");
    }
}
