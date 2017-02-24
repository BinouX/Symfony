<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8ca35c741c53deb2eae986d130ebef13d180170fefaeac5e70ae1d771f7e09e3 extends Twig_Template
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
        $__internal_1a2d1a64a7850b5d990762974f7e6dc0686a0776e0a77da1f39857b9d7bd0e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2d1a64a7850b5d990762974f7e6dc0686a0776e0a77da1f39857b9d7bd0e80->enter($__internal_1a2d1a64a7850b5d990762974f7e6dc0686a0776e0a77da1f39857b9d7bd0e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_1a2d1a64a7850b5d990762974f7e6dc0686a0776e0a77da1f39857b9d7bd0e80->leave($__internal_1a2d1a64a7850b5d990762974f7e6dc0686a0776e0a77da1f39857b9d7bd0e80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/binoux/Documents/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
