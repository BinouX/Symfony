<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_8fbe2ee0a1a36f5fc6c535a554d0290977c9974f964678199e9cf11c53d9b4a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_34656cbf3241efb5590b36d400f2825f5f58c78e188bcbc7ab3eed211394428f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34656cbf3241efb5590b36d400f2825f5f58c78e188bcbc7ab3eed211394428f->enter($__internal_34656cbf3241efb5590b36d400f2825f5f58c78e188bcbc7ab3eed211394428f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34656cbf3241efb5590b36d400f2825f5f58c78e188bcbc7ab3eed211394428f->leave($__internal_34656cbf3241efb5590b36d400f2825f5f58c78e188bcbc7ab3eed211394428f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1099dbeb3fdf6d533f9119896e78f25eb1bc94be7d611c879b81dfd5d4d50bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1099dbeb3fdf6d533f9119896e78f25eb1bc94be7d611c879b81dfd5d4d50bbd->enter($__internal_1099dbeb3fdf6d533f9119896e78f25eb1bc94be7d611c879b81dfd5d4d50bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1099dbeb3fdf6d533f9119896e78f25eb1bc94be7d611c879b81dfd5d4d50bbd->leave($__internal_1099dbeb3fdf6d533f9119896e78f25eb1bc94be7d611c879b81dfd5d4d50bbd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
