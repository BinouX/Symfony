<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_c62e0e585e69cbfb3b7f20d1ee19310ae5159a5d6bbabb1f7e9816e6090ce6ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_4f47527100d9e5fb6517d34573f8b7d6187b6ccc0007707784c943b7fde3c1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f47527100d9e5fb6517d34573f8b7d6187b6ccc0007707784c943b7fde3c1c9->enter($__internal_4f47527100d9e5fb6517d34573f8b7d6187b6ccc0007707784c943b7fde3c1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f47527100d9e5fb6517d34573f8b7d6187b6ccc0007707784c943b7fde3c1c9->leave($__internal_4f47527100d9e5fb6517d34573f8b7d6187b6ccc0007707784c943b7fde3c1c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_594e61c16cde1667a554416f429e31d947f0066b776d763aec1076262154a92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594e61c16cde1667a554416f429e31d947f0066b776d763aec1076262154a92a->enter($__internal_594e61c16cde1667a554416f429e31d947f0066b776d763aec1076262154a92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_594e61c16cde1667a554416f429e31d947f0066b776d763aec1076262154a92a->leave($__internal_594e61c16cde1667a554416f429e31d947f0066b776d763aec1076262154a92a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
