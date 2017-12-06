<?php

/* base.html.twig */
class __TwigTemplate_e996ce7a5b3e31b4867d299a8595227b3f21fc4f0e311742c7aba5d9d4af4c75 extends Twig_Template
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
        $__internal_4fbd98babb9ad5908248f4af0e1da5308408051187bea14779104e18681b4f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbd98babb9ad5908248f4af0e1da5308408051187bea14779104e18681b4f1c->enter($__internal_4fbd98babb9ad5908248f4af0e1da5308408051187bea14779104e18681b4f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4fbd98babb9ad5908248f4af0e1da5308408051187bea14779104e18681b4f1c->leave($__internal_4fbd98babb9ad5908248f4af0e1da5308408051187bea14779104e18681b4f1c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_68d7c4f23cc2237ef6fc0df54d918b355a51db07628443ca66e64092e0e2dfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d7c4f23cc2237ef6fc0df54d918b355a51db07628443ca66e64092e0e2dfc4->enter($__internal_68d7c4f23cc2237ef6fc0df54d918b355a51db07628443ca66e64092e0e2dfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_68d7c4f23cc2237ef6fc0df54d918b355a51db07628443ca66e64092e0e2dfc4->leave($__internal_68d7c4f23cc2237ef6fc0df54d918b355a51db07628443ca66e64092e0e2dfc4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65d9403fc885c3c0269a410755e9d61b146dec5ac6eea1d91182c897c04cf84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d9403fc885c3c0269a410755e9d61b146dec5ac6eea1d91182c897c04cf84e->enter($__internal_65d9403fc885c3c0269a410755e9d61b146dec5ac6eea1d91182c897c04cf84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_65d9403fc885c3c0269a410755e9d61b146dec5ac6eea1d91182c897c04cf84e->leave($__internal_65d9403fc885c3c0269a410755e9d61b146dec5ac6eea1d91182c897c04cf84e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_68bfb3b85932e511aff7b535fbbb4486a6298ad4cc1c3508469afdc345171514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68bfb3b85932e511aff7b535fbbb4486a6298ad4cc1c3508469afdc345171514->enter($__internal_68bfb3b85932e511aff7b535fbbb4486a6298ad4cc1c3508469afdc345171514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_68bfb3b85932e511aff7b535fbbb4486a6298ad4cc1c3508469afdc345171514->leave($__internal_68bfb3b85932e511aff7b535fbbb4486a6298ad4cc1c3508469afdc345171514_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_542cbebfcce5e21f629806bdc75b93fd1017d349b8ee654626efbf121d3b8b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542cbebfcce5e21f629806bdc75b93fd1017d349b8ee654626efbf121d3b8b14->enter($__internal_542cbebfcce5e21f629806bdc75b93fd1017d349b8ee654626efbf121d3b8b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_542cbebfcce5e21f629806bdc75b93fd1017d349b8ee654626efbf121d3b8b14->leave($__internal_542cbebfcce5e21f629806bdc75b93fd1017d349b8ee654626efbf121d3b8b14_prof);

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
