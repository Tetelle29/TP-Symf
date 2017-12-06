<?php

/* BackBundle:Default:test3.html.twig */
class __TwigTemplate_45d01d730dfd738ecf80e981446b077f602b2081671566d8f277a4dc4d9081d2 extends Twig_Template
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
        $__internal_07b2616c9f8e5f3fde7560a72b1d5a75b636972beeadbe86e4c40688d8f91f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b2616c9f8e5f3fde7560a72b1d5a75b636972beeadbe86e4c40688d8f91f4c->enter($__internal_07b2616c9f8e5f3fde7560a72b1d5a75b636972beeadbe86e4c40688d8f91f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:test3.html.twig"));

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
        echo "        Dump : ";
        echo twig_escape_filter($this->env, ($context["dump"] ?? $this->getContext($context, "dump")), "html", null, true);
        echo "
       
    </body>
</html>
";
        
        $__internal_07b2616c9f8e5f3fde7560a72b1d5a75b636972beeadbe86e4c40688d8f91f4c->leave($__internal_07b2616c9f8e5f3fde7560a72b1d5a75b636972beeadbe86e4c40688d8f91f4c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6df4332deb991d2761368716e3fc1e350a074cde8016c6238f62cab91db3b2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df4332deb991d2761368716e3fc1e350a074cde8016c6238f62cab91db3b2a2->enter($__internal_6df4332deb991d2761368716e3fc1e350a074cde8016c6238f62cab91db3b2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6df4332deb991d2761368716e3fc1e350a074cde8016c6238f62cab91db3b2a2->leave($__internal_6df4332deb991d2761368716e3fc1e350a074cde8016c6238f62cab91db3b2a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1b483f2d182a5bce8191c8cd11441232cfb25ae205a120586b4d3953ccf0a420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b483f2d182a5bce8191c8cd11441232cfb25ae205a120586b4d3953ccf0a420->enter($__internal_1b483f2d182a5bce8191c8cd11441232cfb25ae205a120586b4d3953ccf0a420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1b483f2d182a5bce8191c8cd11441232cfb25ae205a120586b4d3953ccf0a420->leave($__internal_1b483f2d182a5bce8191c8cd11441232cfb25ae205a120586b4d3953ccf0a420_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_24f618c054e5e10fde35b71b6a7fb347925e54ca73dfaf25729f0c3fae6154eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f618c054e5e10fde35b71b6a7fb347925e54ca73dfaf25729f0c3fae6154eb->enter($__internal_24f618c054e5e10fde35b71b6a7fb347925e54ca73dfaf25729f0c3fae6154eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_24f618c054e5e10fde35b71b6a7fb347925e54ca73dfaf25729f0c3fae6154eb->leave($__internal_24f618c054e5e10fde35b71b6a7fb347925e54ca73dfaf25729f0c3fae6154eb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e4ac24ab59d7041387f18a94446c7c7fc1b60dc633ad9b87cb0230c7994d8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4ac24ab59d7041387f18a94446c7c7fc1b60dc633ad9b87cb0230c7994d8e0->enter($__internal_7e4ac24ab59d7041387f18a94446c7c7fc1b60dc633ad9b87cb0230c7994d8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7e4ac24ab59d7041387f18a94446c7c7fc1b60dc633ad9b87cb0230c7994d8e0->leave($__internal_7e4ac24ab59d7041387f18a94446c7c7fc1b60dc633ad9b87cb0230c7994d8e0_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:test3.html.twig";
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
        Dump : {{dump}}
       
    </body>
</html>
", "BackBundle:Default:test3.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/BackBundle/Resources/views/Default/test3.html.twig");
    }
}
