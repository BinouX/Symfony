<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4d26adbebfa14c42ec61beddd94044f150afbd9bcec9763aa3cf51695163961a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70b397ce5ab292bc50396825ca97a8ca30627f39f3408fee472edb46379d59e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b397ce5ab292bc50396825ca97a8ca30627f39f3408fee472edb46379d59e2->enter($__internal_70b397ce5ab292bc50396825ca97a8ca30627f39f3408fee472edb46379d59e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b397ce5ab292bc50396825ca97a8ca30627f39f3408fee472edb46379d59e2->leave($__internal_70b397ce5ab292bc50396825ca97a8ca30627f39f3408fee472edb46379d59e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9440e3eefcf627442b26beb715bbf11c151d19b2db4d0f7af13d180894e081ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9440e3eefcf627442b26beb715bbf11c151d19b2db4d0f7af13d180894e081ea->enter($__internal_9440e3eefcf627442b26beb715bbf11c151d19b2db4d0f7af13d180894e081ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9440e3eefcf627442b26beb715bbf11c151d19b2db4d0f7af13d180894e081ea->leave($__internal_9440e3eefcf627442b26beb715bbf11c151d19b2db4d0f7af13d180894e081ea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_23e47bda8d9a85cf4c907041eefd0c8946b0405616ddc98717f184bcaf59dbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e47bda8d9a85cf4c907041eefd0c8946b0405616ddc98717f184bcaf59dbdf->enter($__internal_23e47bda8d9a85cf4c907041eefd0c8946b0405616ddc98717f184bcaf59dbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_23e47bda8d9a85cf4c907041eefd0c8946b0405616ddc98717f184bcaf59dbdf->leave($__internal_23e47bda8d9a85cf4c907041eefd0c8946b0405616ddc98717f184bcaf59dbdf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/binoux/Documents/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
