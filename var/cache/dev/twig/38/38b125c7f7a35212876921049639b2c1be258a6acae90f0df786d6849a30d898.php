<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_e78def2eec1dc358dfeb1fde2957637d159e6f2c1c8b2f0e32f97aeb0ac5694f extends Twig_Template
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
        $__internal_4b57010593a9e3fb8d3bc10bb9bf8465064d8c34e02831cfe845374ec7e8ce3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b57010593a9e3fb8d3bc10bb9bf8465064d8c34e02831cfe845374ec7e8ce3e->enter($__internal_4b57010593a9e3fb8d3bc10bb9bf8465064d8c34e02831cfe845374ec7e8ce3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_4b57010593a9e3fb8d3bc10bb9bf8465064d8c34e02831cfe845374ec7e8ce3e->leave($__internal_4b57010593a9e3fb8d3bc10bb9bf8465064d8c34e02831cfe845374ec7e8ce3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/binoux/Documents/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
