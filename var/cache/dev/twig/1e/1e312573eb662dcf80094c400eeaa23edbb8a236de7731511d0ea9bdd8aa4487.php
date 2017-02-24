<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e47e9e5c81b9c6e510f9b000c89e6e85e600408d81b43181b31a83e6cdae37f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_15bad77b04240778dbca8017456ef22bcb22ea9f001b6af775ce70bedefebfe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bad77b04240778dbca8017456ef22bcb22ea9f001b6af775ce70bedefebfe1->enter($__internal_15bad77b04240778dbca8017456ef22bcb22ea9f001b6af775ce70bedefebfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15bad77b04240778dbca8017456ef22bcb22ea9f001b6af775ce70bedefebfe1->leave($__internal_15bad77b04240778dbca8017456ef22bcb22ea9f001b6af775ce70bedefebfe1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d1954a1097420007c558e73368a760d2d3f3140184b0cbedd77063478de4eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1954a1097420007c558e73368a760d2d3f3140184b0cbedd77063478de4eb4->enter($__internal_6d1954a1097420007c558e73368a760d2d3f3140184b0cbedd77063478de4eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6d1954a1097420007c558e73368a760d2d3f3140184b0cbedd77063478de4eb4->leave($__internal_6d1954a1097420007c558e73368a760d2d3f3140184b0cbedd77063478de4eb4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
