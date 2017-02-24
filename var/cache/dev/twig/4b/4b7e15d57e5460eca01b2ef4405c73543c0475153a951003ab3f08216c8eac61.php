<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c0393b1b7287cf1620ac412d8d0faeff4fde74a4f77df9815778d0a9c16065e3 extends Twig_Template
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
        $__internal_dbfe191bca20bfba83162ccfd1dccd864b478204c10d5e1a7cb92e8da0e0a5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfe191bca20bfba83162ccfd1dccd864b478204c10d5e1a7cb92e8da0e0a5d8->enter($__internal_dbfe191bca20bfba83162ccfd1dccd864b478204c10d5e1a7cb92e8da0e0a5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_dbfe191bca20bfba83162ccfd1dccd864b478204c10d5e1a7cb92e8da0e0a5d8->leave($__internal_dbfe191bca20bfba83162ccfd1dccd864b478204c10d5e1a7cb92e8da0e0a5d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/binoux/Documents/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
