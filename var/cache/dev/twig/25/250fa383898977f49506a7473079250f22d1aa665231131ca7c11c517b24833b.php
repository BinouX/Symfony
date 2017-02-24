<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c9360aaad1f455fa4cb44daa26758ed9d0f59c059fa73ef709d1eae14c956fdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68b40316b9d0b975cec45585c5aeda1989e4d10ba36e2f1e415105ac003fe25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b40316b9d0b975cec45585c5aeda1989e4d10ba36e2f1e415105ac003fe25d->enter($__internal_68b40316b9d0b975cec45585c5aeda1989e4d10ba36e2f1e415105ac003fe25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68b40316b9d0b975cec45585c5aeda1989e4d10ba36e2f1e415105ac003fe25d->leave($__internal_68b40316b9d0b975cec45585c5aeda1989e4d10ba36e2f1e415105ac003fe25d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4dbfee480d8db152a791c39ea201600f4b7603d3c99451122fdcaffa41c9ffc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbfee480d8db152a791c39ea201600f4b7603d3c99451122fdcaffa41c9ffc2->enter($__internal_4dbfee480d8db152a791c39ea201600f4b7603d3c99451122fdcaffa41c9ffc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4dbfee480d8db152a791c39ea201600f4b7603d3c99451122fdcaffa41c9ffc2->leave($__internal_4dbfee480d8db152a791c39ea201600f4b7603d3c99451122fdcaffa41c9ffc2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
