<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ac726820293249da78cea7c982774f27f5f1d3163fa84b2b6c7cec3db2a0ae15 extends Twig_Template
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
        $__internal_ebf3c8f9a87dae29c17c2ada84ac2cf3e16c4136b386629199c52380d4c6dba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf3c8f9a87dae29c17c2ada84ac2cf3e16c4136b386629199c52380d4c6dba9->enter($__internal_ebf3c8f9a87dae29c17c2ada84ac2cf3e16c4136b386629199c52380d4c6dba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ebf3c8f9a87dae29c17c2ada84ac2cf3e16c4136b386629199c52380d4c6dba9->leave($__internal_ebf3c8f9a87dae29c17c2ada84ac2cf3e16c4136b386629199c52380d4c6dba9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/binoux/Documents/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
