<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e8f5ed2bae2b38e17d71e3c3b3de88ae792658dc487776e540ae968cdbf2690c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_24b201f4e8de51b34ea0ae64e7b0f893122dcfb17d21eedfd2f00e7ab76df850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b201f4e8de51b34ea0ae64e7b0f893122dcfb17d21eedfd2f00e7ab76df850->enter($__internal_24b201f4e8de51b34ea0ae64e7b0f893122dcfb17d21eedfd2f00e7ab76df850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24b201f4e8de51b34ea0ae64e7b0f893122dcfb17d21eedfd2f00e7ab76df850->leave($__internal_24b201f4e8de51b34ea0ae64e7b0f893122dcfb17d21eedfd2f00e7ab76df850_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce87edaa6b3837413be26189faac3a543aecf1793a6f1b8385315a08df4c8e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce87edaa6b3837413be26189faac3a543aecf1793a6f1b8385315a08df4c8e42->enter($__internal_ce87edaa6b3837413be26189faac3a543aecf1793a6f1b8385315a08df4c8e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ce87edaa6b3837413be26189faac3a543aecf1793a6f1b8385315a08df4c8e42->leave($__internal_ce87edaa6b3837413be26189faac3a543aecf1793a6f1b8385315a08df4c8e42_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
