<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_83123fab43de04f1b54a28dc99af0339bd02dc11647760031fd7bc2a43b053c2 extends Twig_Template
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
        $__internal_0e0e47b4ec709c6ce2c15a4636cabe30855985b2c772d353d823ec756ae8ad48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0e47b4ec709c6ce2c15a4636cabe30855985b2c772d353d823ec756ae8ad48->enter($__internal_0e0e47b4ec709c6ce2c15a4636cabe30855985b2c772d353d823ec756ae8ad48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0e0e47b4ec709c6ce2c15a4636cabe30855985b2c772d353d823ec756ae8ad48->leave($__internal_0e0e47b4ec709c6ce2c15a4636cabe30855985b2c772d353d823ec756ae8ad48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/binoux/Documents/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
