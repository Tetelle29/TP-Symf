<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0798e37c38d513bea7b709472f00287adf735e9290f5e482edd74f4ecf2ed013 extends Twig_Template
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
        $__internal_1833f8df1dd36a73d02861e9cf274fbe48340080bc02d4b2c9b5bf84f7597bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1833f8df1dd36a73d02861e9cf274fbe48340080bc02d4b2c9b5bf84f7597bef->enter($__internal_1833f8df1dd36a73d02861e9cf274fbe48340080bc02d4b2c9b5bf84f7597bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_1833f8df1dd36a73d02861e9cf274fbe48340080bc02d4b2c9b5bf84f7597bef->leave($__internal_1833f8df1dd36a73d02861e9cf274fbe48340080bc02d4b2c9b5bf84f7597bef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
