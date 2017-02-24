<?php

/* IKNSAAppBundle::layout.html.twig */
class __TwigTemplate_482bcfb8a36cfb2f8a33cfdf660719c0b73fcf3129f3c9c95afe9d612fe717ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_175407ed1e6b6c9f1065c7d8b0a65c65d405d649ed179be40cf03ed25a367a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175407ed1e6b6c9f1065c7d8b0a65c65d405d649ed179be40cf03ed25a367a3f->enter($__internal_175407ed1e6b6c9f1065c7d8b0a65c65d405d649ed179be40cf03ed25a367a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSAAppBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Layout Testing</title>
</head>
<body>
    ";
        // line 7
        $this->displayBlock('header', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('navigation', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "
</body>
</html>";
        
        $__internal_175407ed1e6b6c9f1065c7d8b0a65c65d405d649ed179be40cf03ed25a367a3f->leave($__internal_175407ed1e6b6c9f1065c7d8b0a65c65d405d649ed179be40cf03ed25a367a3f_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_802d7ffd1b8148b70c45ee5f701a088d04bb52f31d931bd97aa22403893cd778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802d7ffd1b8148b70c45ee5f701a088d04bb52f31d931bd97aa22403893cd778->enter($__internal_802d7ffd1b8148b70c45ee5f701a088d04bb52f31d931bd97aa22403893cd778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "        <h1>Header</h1>
        <hr>
    ";
        
        $__internal_802d7ffd1b8148b70c45ee5f701a088d04bb52f31d931bd97aa22403893cd778->leave($__internal_802d7ffd1b8148b70c45ee5f701a088d04bb52f31d931bd97aa22403893cd778_prof);

    }

    // line 12
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4a0ebce392ca4479dae3eba6bba48aacc0fcc8282c02dc561e8cb4c0c2d9af9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0ebce392ca4479dae3eba6bba48aacc0fcc8282c02dc561e8cb4c0c2d9af9a->enter($__internal_4a0ebce392ca4479dae3eba6bba48aacc0fcc8282c02dc561e8cb4c0c2d9af9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 13
        echo "        <h3>navigation</h3>
        ";
        // line 14
        $this->loadTemplate("IKNSAAppBundle:Default:navigation.html.twig", "IKNSAAppBundle::layout.html.twig", 14)->display($context);
        // line 15
        echo "
        <hr>
    ";
        
        $__internal_4a0ebce392ca4479dae3eba6bba48aacc0fcc8282c02dc561e8cb4c0c2d9af9a->leave($__internal_4a0ebce392ca4479dae3eba6bba48aacc0fcc8282c02dc561e8cb4c0c2d9af9a_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_11742f53086d76cac949f5d462cd62024056b3009e8bc13f2516d9f219e0becb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11742f53086d76cac949f5d462cd62024056b3009e8bc13f2516d9f219e0becb->enter($__internal_11742f53086d76cac949f5d462cd62024056b3009e8bc13f2516d9f219e0becb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_11742f53086d76cac949f5d462cd62024056b3009e8bc13f2516d9f219e0becb->leave($__internal_11742f53086d76cac949f5d462cd62024056b3009e8bc13f2516d9f219e0becb_prof);

    }

    public function getTemplateName()
    {
        return "IKNSAAppBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 19,  80 => 15,  78 => 14,  75 => 13,  69 => 12,  60 => 8,  54 => 7,  45 => 20,  43 => 19,  40 => 18,  38 => 12,  35 => 11,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>Layout Testing</title>
</head>
<body>
    {% block header %}
        <h1>Header</h1>
        <hr>
    {% endblock %}

    {% block navigation %}
        <h3>navigation</h3>
        {% include 'IKNSAAppBundle:Default:navigation.html.twig' %}

        <hr>
    {% endblock %}

    {% block body %}{% endblock %}

</body>
</html>", "IKNSAAppBundle::layout.html.twig", "/home/binoux/Documents/symfony3/src/IKNSA/AppBundle/Resources/views/layout.html.twig");
    }
}
