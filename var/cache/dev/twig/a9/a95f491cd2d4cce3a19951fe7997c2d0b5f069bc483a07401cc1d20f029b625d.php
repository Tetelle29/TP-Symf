<?php

/* MonDSBundle:Default:base.html.twig */
class __TwigTemplate_fc4a67ee4548cf3709a66f270d809079eb8915588e7fa5d902aec5ce7daa7ed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7449f59a81222b099f0b254e31a63ca6e3e32e459be002f3e3c4afbaa88ce09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7449f59a81222b099f0b254e31a63ca6e3e32e459be002f3e3c4afbaa88ce09->enter($__internal_c7449f59a81222b099f0b254e31a63ca6e3e32e459be002f3e3c4afbaa88ce09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MonDSBundle:Default:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>

        <div id=\"content\">
            ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        </div>
   

  
     <footer>
        <p> Template pied </p>
     </footer>

      </body>
  
</html>";
        
        $__internal_c7449f59a81222b099f0b254e31a63ca6e3e32e459be002f3e3c4afbaa88ce09->leave($__internal_c7449f59a81222b099f0b254e31a63ca6e3e32e459be002f3e3c4afbaa88ce09_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ed059775c9a9fc2791bee2513043122bf928770666f1191d08ab9f4df56c81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed059775c9a9fc2791bee2513043122bf928770666f1191d08ab9f4df56c81a->enter($__internal_4ed059775c9a9fc2791bee2513043122bf928770666f1191d08ab9f4df56c81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon template";
        
        $__internal_4ed059775c9a9fc2791bee2513043122bf928770666f1191d08ab9f4df56c81a->leave($__internal_4ed059775c9a9fc2791bee2513043122bf928770666f1191d08ab9f4df56c81a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8530a30547d808c4896b3c8ce58631e6cffbfbcd346535023ec798764f6a01e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8530a30547d808c4896b3c8ce58631e6cffbfbcd346535023ec798764f6a01e5->enter($__internal_8530a30547d808c4896b3c8ce58631e6cffbfbcd346535023ec798764f6a01e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8530a30547d808c4896b3c8ce58631e6cffbfbcd346535023ec798764f6a01e5->leave($__internal_8530a30547d808c4896b3c8ce58631e6cffbfbcd346535023ec798764f6a01e5_prof);

    }

    public function getTemplateName()
    {
        return "MonDSBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  57 => 5,  40 => 11,  38 => 10,  30 => 5,  24 => 1,);
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
        <meta charset=\"UTF-8\">
        <title>{% block title %}Mon template{% endblock %}</title>
    </head>
    <body>

        <div id=\"content\">
            {% block body %}{% endblock %}
        </div>
   

  
     <footer>
        <p> Template pied </p>
     </footer>

      </body>
  
</html>", "MonDSBundle:Default:base.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/MonDSBundle/Resources/views/Default/base.html.twig");
    }
}
