<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c696b9552286b857f8e85620c8d7118e7594c7a885948abc3189462fa317d64f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_7a3691e772eaa608bc130f0337646093596012a38f7d42678aa40c2af5a07f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3691e772eaa608bc130f0337646093596012a38f7d42678aa40c2af5a07f23->enter($__internal_7a3691e772eaa608bc130f0337646093596012a38f7d42678aa40c2af5a07f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a3691e772eaa608bc130f0337646093596012a38f7d42678aa40c2af5a07f23->leave($__internal_7a3691e772eaa608bc130f0337646093596012a38f7d42678aa40c2af5a07f23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99fb39fc95fe27e6f618baff94b048017670eebd3af6ce32f3ea9a74bbc24e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fb39fc95fe27e6f618baff94b048017670eebd3af6ce32f3ea9a74bbc24e92->enter($__internal_99fb39fc95fe27e6f618baff94b048017670eebd3af6ce32f3ea9a74bbc24e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_99fb39fc95fe27e6f618baff94b048017670eebd3af6ce32f3ea9a74bbc24e92->leave($__internal_99fb39fc95fe27e6f618baff94b048017670eebd3af6ce32f3ea9a74bbc24e92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
