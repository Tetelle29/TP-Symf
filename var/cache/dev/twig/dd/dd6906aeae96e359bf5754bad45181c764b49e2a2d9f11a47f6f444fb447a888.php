<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9553fa96834c0ab4dcb8de3e70f72131636b26386dd26bde3b020531765d74b9 extends Twig_Template
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
        $__internal_001f9a4de2a0880a51f4b68af9a54b3c1b3d83ba53eb59ad670de04d83959fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001f9a4de2a0880a51f4b68af9a54b3c1b3d83ba53eb59ad670de04d83959fdd->enter($__internal_001f9a4de2a0880a51f4b68af9a54b3c1b3d83ba53eb59ad670de04d83959fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_001f9a4de2a0880a51f4b68af9a54b3c1b3d83ba53eb59ad670de04d83959fdd->leave($__internal_001f9a4de2a0880a51f4b68af9a54b3c1b3d83ba53eb59ad670de04d83959fdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
