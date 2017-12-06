<?php

/* BackBundle:Default:url_values.html.twig */
class __TwigTemplate_b642395f481a1826c4b8423c5a42b00244a44d24c960a954153665a132df6762 extends Twig_Template
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
        $__internal_445da6c3218efbf4325d924c1a71b4cc2f43b8ab392b80d1ce313b70054f5934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445da6c3218efbf4325d924c1a71b4cc2f43b8ab392b80d1ce313b70054f5934->enter($__internal_445da6c3218efbf4325d924c1a71b4cc2f43b8ab392b80d1ce313b70054f5934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:url_values.html.twig"));

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
        echo twig_escape_filter($this->env, ($context["url_value"] ?? $this->getContext($context, "url_value")), "html", null, true);
        echo "
        Libelle : ";
        // line 13
        echo twig_escape_filter($this->env, ($context["url_libelle"] ?? $this->getContext($context, "url_libelle")), "html", null, true);
        echo "
        Nb : ";
        // line 14
        echo twig_escape_filter($this->env, ($context["url_nb"] ?? $this->getContext($context, "url_nb")), "html", null, true);
        echo "
       
    </body>
</html>";
        
        $__internal_445da6c3218efbf4325d924c1a71b4cc2f43b8ab392b80d1ce313b70054f5934->leave($__internal_445da6c3218efbf4325d924c1a71b4cc2f43b8ab392b80d1ce313b70054f5934_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10d5f8df9bb9a495afad79aacf7a290be6ac432a1c6f83aab443de238d4febdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d5f8df9bb9a495afad79aacf7a290be6ac432a1c6f83aab443de238d4febdc->enter($__internal_10d5f8df9bb9a495afad79aacf7a290be6ac432a1c6f83aab443de238d4febdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_10d5f8df9bb9a495afad79aacf7a290be6ac432a1c6f83aab443de238d4febdc->leave($__internal_10d5f8df9bb9a495afad79aacf7a290be6ac432a1c6f83aab443de238d4febdc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d9473de7ed98b38fe9d8f52e84b11339a7534999a95a3940bab2e211d19781f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9473de7ed98b38fe9d8f52e84b11339a7534999a95a3940bab2e211d19781f->enter($__internal_2d9473de7ed98b38fe9d8f52e84b11339a7534999a95a3940bab2e211d19781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2d9473de7ed98b38fe9d8f52e84b11339a7534999a95a3940bab2e211d19781f->leave($__internal_2d9473de7ed98b38fe9d8f52e84b11339a7534999a95a3940bab2e211d19781f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_94bb907ca8512846dcf25141db8c31a9dd2d32a79b0779a08dae18441abebc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bb907ca8512846dcf25141db8c31a9dd2d32a79b0779a08dae18441abebc3a->enter($__internal_94bb907ca8512846dcf25141db8c31a9dd2d32a79b0779a08dae18441abebc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_94bb907ca8512846dcf25141db8c31a9dd2d32a79b0779a08dae18441abebc3a->leave($__internal_94bb907ca8512846dcf25141db8c31a9dd2d32a79b0779a08dae18441abebc3a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01816ef837f7f389bcc748a92a43b54cbe7a8c279ae54e324d623f4f536288b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01816ef837f7f389bcc748a92a43b54cbe7a8c279ae54e324d623f4f536288b0->enter($__internal_01816ef837f7f389bcc748a92a43b54cbe7a8c279ae54e324d623f4f536288b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_01816ef837f7f389bcc748a92a43b54cbe7a8c279ae54e324d623f4f536288b0->leave($__internal_01816ef837f7f389bcc748a92a43b54cbe7a8c279ae54e324d623f4f536288b0_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:url_values.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 11,  93 => 10,  82 => 6,  70 => 5,  59 => 14,  55 => 13,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        Value : {{url_value}}
        Libelle : {{url_libelle}}
        Nb : {{url_nb}}
       
    </body>
</html>", "BackBundle:Default:url_values.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/BackBundle/Resources/views/Default/url_values.html.twig");
    }
}
