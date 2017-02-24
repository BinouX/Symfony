<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_0cce501e44c6fc6c4eff632a7b7970da8dee1ccf8466b46bdb0b1368dc8b13c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_4fa50d747d414756dee423a5d56fbb003e8a4cf8bd6172782c900f00de2af96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa50d747d414756dee423a5d56fbb003e8a4cf8bd6172782c900f00de2af96d->enter($__internal_4fa50d747d414756dee423a5d56fbb003e8a4cf8bd6172782c900f00de2af96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fa50d747d414756dee423a5d56fbb003e8a4cf8bd6172782c900f00de2af96d->leave($__internal_4fa50d747d414756dee423a5d56fbb003e8a4cf8bd6172782c900f00de2af96d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0b20d103f86977bc6792a19ed73248d29c0d290a0b3608ab117df9009efc8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b20d103f86977bc6792a19ed73248d29c0d290a0b3608ab117df9009efc8e0->enter($__internal_b0b20d103f86977bc6792a19ed73248d29c0d290a0b3608ab117df9009efc8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_b0b20d103f86977bc6792a19ed73248d29c0d290a0b3608ab117df9009efc8e0->leave($__internal_b0b20d103f86977bc6792a19ed73248d29c0d290a0b3608ab117df9009efc8e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
