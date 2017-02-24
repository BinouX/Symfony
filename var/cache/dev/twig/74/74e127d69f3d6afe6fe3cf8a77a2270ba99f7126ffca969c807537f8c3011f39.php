<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f032ca10893d3d2453ba1f3cd7598481f940f7fd5137d010f38b14ad1b6a30d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9db833f9b2ea78102e003cc335f3f6873a3767e67cbaf3cd0d493cdbef969ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db833f9b2ea78102e003cc335f3f6873a3767e67cbaf3cd0d493cdbef969ca1->enter($__internal_9db833f9b2ea78102e003cc335f3f6873a3767e67cbaf3cd0d493cdbef969ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9db833f9b2ea78102e003cc335f3f6873a3767e67cbaf3cd0d493cdbef969ca1->leave($__internal_9db833f9b2ea78102e003cc335f3f6873a3767e67cbaf3cd0d493cdbef969ca1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e62241b6468eaded0a45ac69829cd6f57e99b4ba7c156f15edbb538e39aaf8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62241b6468eaded0a45ac69829cd6f57e99b4ba7c156f15edbb538e39aaf8d8->enter($__internal_e62241b6468eaded0a45ac69829cd6f57e99b4ba7c156f15edbb538e39aaf8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e62241b6468eaded0a45ac69829cd6f57e99b4ba7c156f15edbb538e39aaf8d8->leave($__internal_e62241b6468eaded0a45ac69829cd6f57e99b4ba7c156f15edbb538e39aaf8d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc37857be4e1545b2f686fdac287563f46583c762cd0c04f443501f44dc5b3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc37857be4e1545b2f686fdac287563f46583c762cd0c04f443501f44dc5b3db->enter($__internal_fc37857be4e1545b2f686fdac287563f46583c762cd0c04f443501f44dc5b3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc37857be4e1545b2f686fdac287563f46583c762cd0c04f443501f44dc5b3db->leave($__internal_fc37857be4e1545b2f686fdac287563f46583c762cd0c04f443501f44dc5b3db_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fea567f7d3c447a30e20cd563806d8de5da7255e0bb41e8b7d7bb9c8d52810c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea567f7d3c447a30e20cd563806d8de5da7255e0bb41e8b7d7bb9c8d52810c5->enter($__internal_fea567f7d3c447a30e20cd563806d8de5da7255e0bb41e8b7d7bb9c8d52810c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fea567f7d3c447a30e20cd563806d8de5da7255e0bb41e8b7d7bb9c8d52810c5->leave($__internal_fea567f7d3c447a30e20cd563806d8de5da7255e0bb41e8b7d7bb9c8d52810c5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/binoux/Documents/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
