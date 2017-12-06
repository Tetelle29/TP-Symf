<?php

/* BackBundle:Default:index.html.twig */
class __TwigTemplate_7b36da4485edacef5f6ad110e252204386575ce7dc17e7874fd98ecc8ab736a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f82e02de120bf0c3f5b455608724f131ba04f33730a1329977134aadde47ced5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82e02de120bf0c3f5b455608724f131ba04f33730a1329977134aadde47ced5->enter($__internal_f82e02de120bf0c3f5b455608724f131ba04f33730a1329977134aadde47ced5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_f82e02de120bf0c3f5b455608724f131ba04f33730a1329977134aadde47ced5->leave($__internal_f82e02de120bf0c3f5b455608724f131ba04f33730a1329977134aadde47ced5_prof);

    }

    public function getTemplateName()
    {
        return "BackBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "BackBundle:Default:index.html.twig", "/home/tetelle/symfony/tp/cir3-TP-symf/src/BackBundle/Resources/views/Default/index.html.twig");
    }
}
