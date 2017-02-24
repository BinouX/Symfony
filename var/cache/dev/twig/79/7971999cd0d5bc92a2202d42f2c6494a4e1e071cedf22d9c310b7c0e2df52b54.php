<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_bfc282b9ca3d542b98f9bc584dd01e9bba6ec1e5d156bc181cdfd393e8af68a8 extends Twig_Template
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
        $__internal_956d2d0218bf235169438ae3104a451ec5690a868187b12740db0c33b8eaa806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956d2d0218bf235169438ae3104a451ec5690a868187b12740db0c33b8eaa806->enter($__internal_956d2d0218bf235169438ae3104a451ec5690a868187b12740db0c33b8eaa806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_956d2d0218bf235169438ae3104a451ec5690a868187b12740db0c33b8eaa806->leave($__internal_956d2d0218bf235169438ae3104a451ec5690a868187b12740db0c33b8eaa806_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_59136ec9d95a8de16c9bf8c403666c0e0bf32fac0ab9923f7bfe59713a4eb9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59136ec9d95a8de16c9bf8c403666c0e0bf32fac0ab9923f7bfe59713a4eb9d4->enter($__internal_59136ec9d95a8de16c9bf8c403666c0e0bf32fac0ab9923f7bfe59713a4eb9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_59136ec9d95a8de16c9bf8c403666c0e0bf32fac0ab9923f7bfe59713a4eb9d4->leave($__internal_59136ec9d95a8de16c9bf8c403666c0e0bf32fac0ab9923f7bfe59713a4eb9d4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_518945dbe7399414e7f1f64f6b556e1ed42e55d6dd066760d0c7ccff7064b44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518945dbe7399414e7f1f64f6b556e1ed42e55d6dd066760d0c7ccff7064b44c->enter($__internal_518945dbe7399414e7f1f64f6b556e1ed42e55d6dd066760d0c7ccff7064b44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_518945dbe7399414e7f1f64f6b556e1ed42e55d6dd066760d0c7ccff7064b44c->leave($__internal_518945dbe7399414e7f1f64f6b556e1ed42e55d6dd066760d0c7ccff7064b44c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_edfc94cd92d5377ef4a88acec0faf15e7cf7ed40eb6f4df3fbd1bc94a45576cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfc94cd92d5377ef4a88acec0faf15e7cf7ed40eb6f4df3fbd1bc94a45576cc->enter($__internal_edfc94cd92d5377ef4a88acec0faf15e7cf7ed40eb6f4df3fbd1bc94a45576cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_edfc94cd92d5377ef4a88acec0faf15e7cf7ed40eb6f4df3fbd1bc94a45576cc->leave($__internal_edfc94cd92d5377ef4a88acec0faf15e7cf7ed40eb6f4df3fbd1bc94a45576cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
