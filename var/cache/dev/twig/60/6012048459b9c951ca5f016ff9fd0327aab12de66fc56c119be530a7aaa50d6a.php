<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_1440d079e58e690f62f8e05a84fb33fd268ca30f21ace308d88c322d130fee43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_9f1999e24b6cd9178222630abbf5e14dec06cb447b11e6bedb1657846567fcb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1999e24b6cd9178222630abbf5e14dec06cb447b11e6bedb1657846567fcb7->enter($__internal_9f1999e24b6cd9178222630abbf5e14dec06cb447b11e6bedb1657846567fcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f1999e24b6cd9178222630abbf5e14dec06cb447b11e6bedb1657846567fcb7->leave($__internal_9f1999e24b6cd9178222630abbf5e14dec06cb447b11e6bedb1657846567fcb7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e50ac0e333f5e5a66b07b9c21a1ce4a8b9485f976d1189771c38baebf16a539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e50ac0e333f5e5a66b07b9c21a1ce4a8b9485f976d1189771c38baebf16a539->enter($__internal_1e50ac0e333f5e5a66b07b9c21a1ce4a8b9485f976d1189771c38baebf16a539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_1e50ac0e333f5e5a66b07b9c21a1ce4a8b9485f976d1189771c38baebf16a539->leave($__internal_1e50ac0e333f5e5a66b07b9c21a1ce4a8b9485f976d1189771c38baebf16a539_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
