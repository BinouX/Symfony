<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1e9b46e764fc24c876a99b4f2a22be4a63eb5eb123522df33483cb6237bd629c extends Twig_Template
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
        $__internal_f62841a85f30e458d666f1d4de3f59bd9035644f14bd109b1b08c6b621752c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62841a85f30e458d666f1d4de3f59bd9035644f14bd109b1b08c6b621752c74->enter($__internal_f62841a85f30e458d666f1d4de3f59bd9035644f14bd109b1b08c6b621752c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_f62841a85f30e458d666f1d4de3f59bd9035644f14bd109b1b08c6b621752c74->leave($__internal_f62841a85f30e458d666f1d4de3f59bd9035644f14bd109b1b08c6b621752c74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/binoux/Documents/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
