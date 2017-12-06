<?php

/* base.html.twig */
class __TwigTemplate_e7de50a57c41331f2629aacb95226fa819407d85d79760cfaada63a26a62e5ca extends Twig_Template
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
        $__internal_3f9718fbcc775a5cf23f70e4a0ff00fa533301fc8322c09c8ccd553aedd57026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9718fbcc775a5cf23f70e4a0ff00fa533301fc8322c09c8ccd553aedd57026->enter($__internal_3f9718fbcc775a5cf23f70e4a0ff00fa533301fc8322c09c8ccd553aedd57026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3f9718fbcc775a5cf23f70e4a0ff00fa533301fc8322c09c8ccd553aedd57026->leave($__internal_3f9718fbcc775a5cf23f70e4a0ff00fa533301fc8322c09c8ccd553aedd57026_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4e0cd3ba4c59eba6a4b8fd546aa719b3edc80117c85b108eeb90fb662f1bafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e0cd3ba4c59eba6a4b8fd546aa719b3edc80117c85b108eeb90fb662f1bafb->enter($__internal_c4e0cd3ba4c59eba6a4b8fd546aa719b3edc80117c85b108eeb90fb662f1bafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c4e0cd3ba4c59eba6a4b8fd546aa719b3edc80117c85b108eeb90fb662f1bafb->leave($__internal_c4e0cd3ba4c59eba6a4b8fd546aa719b3edc80117c85b108eeb90fb662f1bafb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec3183e3ff2d07a819b2e64010c71adbe9120d2fc9fbe963d1107bd680e1943d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3183e3ff2d07a819b2e64010c71adbe9120d2fc9fbe963d1107bd680e1943d->enter($__internal_ec3183e3ff2d07a819b2e64010c71adbe9120d2fc9fbe963d1107bd680e1943d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ec3183e3ff2d07a819b2e64010c71adbe9120d2fc9fbe963d1107bd680e1943d->leave($__internal_ec3183e3ff2d07a819b2e64010c71adbe9120d2fc9fbe963d1107bd680e1943d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e5e14b89f56a5740f2e3dc95626eb24d26a8c198267590dfd197df9a1c5a7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5e14b89f56a5740f2e3dc95626eb24d26a8c198267590dfd197df9a1c5a7d7->enter($__internal_2e5e14b89f56a5740f2e3dc95626eb24d26a8c198267590dfd197df9a1c5a7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2e5e14b89f56a5740f2e3dc95626eb24d26a8c198267590dfd197df9a1c5a7d7->leave($__internal_2e5e14b89f56a5740f2e3dc95626eb24d26a8c198267590dfd197df9a1c5a7d7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_771592d37dff754695dcb6740bd0de3b6483ca66ba43e6e68875e0e7aca03c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771592d37dff754695dcb6740bd0de3b6483ca66ba43e6e68875e0e7aca03c86->enter($__internal_771592d37dff754695dcb6740bd0de3b6483ca66ba43e6e68875e0e7aca03c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_771592d37dff754695dcb6740bd0de3b6483ca66ba43e6e68875e0e7aca03c86->leave($__internal_771592d37dff754695dcb6740bd0de3b6483ca66ba43e6e68875e0e7aca03c86_prof);

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
", "base.html.twig", "/home/tetelle/symfony/cir3-TP-symf/app/Resources/views/base.html.twig");
    }
}
