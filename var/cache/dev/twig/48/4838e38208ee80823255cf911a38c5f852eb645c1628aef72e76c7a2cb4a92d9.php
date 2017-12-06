<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8a72aa64d0b831e00b010149ab4ce976eb1e3850427d11304701fa2c6628539c extends Twig_Template
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
        $__internal_d49dfa3734b825b2ab881ac71182c5c36e7c2815036d8e8c8c21460d9aa4d250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49dfa3734b825b2ab881ac71182c5c36e7c2815036d8e8c8c21460d9aa4d250->enter($__internal_d49dfa3734b825b2ab881ac71182c5c36e7c2815036d8e8c8c21460d9aa4d250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_d49dfa3734b825b2ab881ac71182c5c36e7c2815036d8e8c8c21460d9aa4d250->leave($__internal_d49dfa3734b825b2ab881ac71182c5c36e7c2815036d8e8c8c21460d9aa4d250_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
