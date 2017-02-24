<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_80e59d28943ac93f2f459c95ec4f79e81bddc3b3ae600d8111fa7f80314bfcfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59bc2f7147bb55ca24e7f927d578bacca01dc36199fcf745c68388824bedb2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bc2f7147bb55ca24e7f927d578bacca01dc36199fcf745c68388824bedb2f6->enter($__internal_59bc2f7147bb55ca24e7f927d578bacca01dc36199fcf745c68388824bedb2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_59bc2f7147bb55ca24e7f927d578bacca01dc36199fcf745c68388824bedb2f6->leave($__internal_59bc2f7147bb55ca24e7f927d578bacca01dc36199fcf745c68388824bedb2f6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_86d20167fd685ad57ff9c15cb4a5fb6fb56260cee75061c4f9c2f39c06fbcb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d20167fd685ad57ff9c15cb4a5fb6fb56260cee75061c4f9c2f39c06fbcb88->enter($__internal_86d20167fd685ad57ff9c15cb4a5fb6fb56260cee75061c4f9c2f39c06fbcb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_86d20167fd685ad57ff9c15cb4a5fb6fb56260cee75061c4f9c2f39c06fbcb88->leave($__internal_86d20167fd685ad57ff9c15cb4a5fb6fb56260cee75061c4f9c2f39c06fbcb88_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bd32fdc3eb65ec7d8923f3f75025addce8b8e2776428c9b7037f41647c956ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd32fdc3eb65ec7d8923f3f75025addce8b8e2776428c9b7037f41647c956ba3->enter($__internal_bd32fdc3eb65ec7d8923f3f75025addce8b8e2776428c9b7037f41647c956ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bd32fdc3eb65ec7d8923f3f75025addce8b8e2776428c9b7037f41647c956ba3->leave($__internal_bd32fdc3eb65ec7d8923f3f75025addce8b8e2776428c9b7037f41647c956ba3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_09e1d0a1bd7b52cc5b4d475bcae78ee4cc1dc2e0ffe821017945fb99156ade74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e1d0a1bd7b52cc5b4d475bcae78ee4cc1dc2e0ffe821017945fb99156ade74->enter($__internal_09e1d0a1bd7b52cc5b4d475bcae78ee4cc1dc2e0ffe821017945fb99156ade74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_09e1d0a1bd7b52cc5b4d475bcae78ee4cc1dc2e0ffe821017945fb99156ade74->leave($__internal_09e1d0a1bd7b52cc5b4d475bcae78ee4cc1dc2e0ffe821017945fb99156ade74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
