<?php

/* MonDSBundle:Default:message22.html.twig */
class __TwigTemplate_a641aeb306435e75e490d9e505717ebaf7471a4c13e58254d3fa0ac2a2d34103 extends Twig_Template
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
        $__internal_1bbf4831992cc09d2bd6849f7566350b7b3f716c1a8d57a040e9b47d859f93fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbf4831992cc09d2bd6849f7566350b7b3f716c1a8d57a040e9b47d859f93fa->enter($__internal_1bbf4831992cc09d2bd6849f7566350b7b3f716c1a8d57a040e9b47d859f93fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MonDSBundle:Default:message22.html.twig"));

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
        echo "        \" Cette page affiche le message complémentaire ' ";
        echo twig_escape_filter($this->env, ($context["message22"] ?? $this->getContext($context, "message22")), "html", null, true);
        echo " ' pour la question 2-2 \"
    </body>
</html>";
        
        $__internal_1bbf4831992cc09d2bd6849f7566350b7b3f716c1a8d57a040e9b47d859f93fa->leave($__internal_1bbf4831992cc09d2bd6849f7566350b7b3f716c1a8d57a040e9b47d859f93fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c32e1028e1f7e88b35b3230af3d6f8d457dcc4b0956bc76d9fcca6b3e4cfb488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32e1028e1f7e88b35b3230af3d6f8d457dcc4b0956bc76d9fcca6b3e4cfb488->enter($__internal_c32e1028e1f7e88b35b3230af3d6f8d457dcc4b0956bc76d9fcca6b3e4cfb488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c32e1028e1f7e88b35b3230af3d6f8d457dcc4b0956bc76d9fcca6b3e4cfb488->leave($__internal_c32e1028e1f7e88b35b3230af3d6f8d457dcc4b0956bc76d9fcca6b3e4cfb488_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53657832dc780898118d5267fdefbbd15496435234e79f7feee38d2fb7cf63a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53657832dc780898118d5267fdefbbd15496435234e79f7feee38d2fb7cf63a6->enter($__internal_53657832dc780898118d5267fdefbbd15496435234e79f7feee38d2fb7cf63a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_53657832dc780898118d5267fdefbbd15496435234e79f7feee38d2fb7cf63a6->leave($__internal_53657832dc780898118d5267fdefbbd15496435234e79f7feee38d2fb7cf63a6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_92a0acf4bb8e57d9f273f01f0aa1b4df79afbe16b7ef1cb795d92d548f18cf8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a0acf4bb8e57d9f273f01f0aa1b4df79afbe16b7ef1cb795d92d548f18cf8a->enter($__internal_92a0acf4bb8e57d9f273f01f0aa1b4df79afbe16b7ef1cb795d92d548f18cf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_92a0acf4bb8e57d9f273f01f0aa1b4df79afbe16b7ef1cb795d92d548f18cf8a->leave($__internal_92a0acf4bb8e57d9f273f01f0aa1b4df79afbe16b7ef1cb795d92d548f18cf8a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_290123e2fa11487d3a0703ffef9471eef479b5cd22d0845570a0c83f547504e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290123e2fa11487d3a0703ffef9471eef479b5cd22d0845570a0c83f547504e5->enter($__internal_290123e2fa11487d3a0703ffef9471eef479b5cd22d0845570a0c83f547504e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_290123e2fa11487d3a0703ffef9471eef479b5cd22d0845570a0c83f547504e5->leave($__internal_290123e2fa11487d3a0703ffef9471eef479b5cd22d0845570a0c83f547504e5_prof);

    }

    public function getTemplateName()
    {
        return "MonDSBundle:Default:message22.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 11,  84 => 10,  73 => 6,  61 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        \" Cette page affiche le message complémentaire ' {{message22}} ' pour la question 2-2 \"
    </body>
</html>", "MonDSBundle:Default:message22.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/MonDSBundle/Resources/views/Default/message22.html.twig");
    }
}
