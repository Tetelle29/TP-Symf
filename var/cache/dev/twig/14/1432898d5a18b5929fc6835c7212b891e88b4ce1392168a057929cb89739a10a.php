<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c6f06d42be8bf90389e58359ef7b6d90c87b52f4126969fecd20e7ec7bc4287d extends Twig_Template
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
        $__internal_34186eba5db904199cd34f068471b6b83c7b10242b50a564351f97fd629f9f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34186eba5db904199cd34f068471b6b83c7b10242b50a564351f97fd629f9f7a->enter($__internal_34186eba5db904199cd34f068471b6b83c7b10242b50a564351f97fd629f9f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_34186eba5db904199cd34f068471b6b83c7b10242b50a564351f97fd629f9f7a->leave($__internal_34186eba5db904199cd34f068471b6b83c7b10242b50a564351f97fd629f9f7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
