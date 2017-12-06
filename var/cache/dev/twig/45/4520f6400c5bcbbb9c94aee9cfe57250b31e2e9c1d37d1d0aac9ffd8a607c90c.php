<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c68e8f3556d491c6a7920c412510dd2829b44d6b0957808f7a1412d0e2a0a883 extends Twig_Template
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
        $__internal_5607641722c64f1e1dca96781e9c5ab35078ed4ac81d98dba47e6b9f83e3bafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5607641722c64f1e1dca96781e9c5ab35078ed4ac81d98dba47e6b9f83e3bafc->enter($__internal_5607641722c64f1e1dca96781e9c5ab35078ed4ac81d98dba47e6b9f83e3bafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5607641722c64f1e1dca96781e9c5ab35078ed4ac81d98dba47e6b9f83e3bafc->leave($__internal_5607641722c64f1e1dca96781e9c5ab35078ed4ac81d98dba47e6b9f83e3bafc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/tetelle/symfony/tp/cir3-TP-symf/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
