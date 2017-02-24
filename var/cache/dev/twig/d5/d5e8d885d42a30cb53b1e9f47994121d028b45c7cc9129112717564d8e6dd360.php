<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_189c3de9bced45af8ede27a4b43df259ab491a48a246b2fd9834ca7fa5018113 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_955bfd1fe28197971ad2e57823a85472863b2622ef47aa86bfed6a3cbfdba581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955bfd1fe28197971ad2e57823a85472863b2622ef47aa86bfed6a3cbfdba581->enter($__internal_955bfd1fe28197971ad2e57823a85472863b2622ef47aa86bfed6a3cbfdba581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_955bfd1fe28197971ad2e57823a85472863b2622ef47aa86bfed6a3cbfdba581->leave($__internal_955bfd1fe28197971ad2e57823a85472863b2622ef47aa86bfed6a3cbfdba581_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_485140c7b9bef69e87377eb14120195e4f859085d8b3bc1bd18d8731a4a10470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485140c7b9bef69e87377eb14120195e4f859085d8b3bc1bd18d8731a4a10470->enter($__internal_485140c7b9bef69e87377eb14120195e4f859085d8b3bc1bd18d8731a4a10470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_485140c7b9bef69e87377eb14120195e4f859085d8b3bc1bd18d8731a4a10470->leave($__internal_485140c7b9bef69e87377eb14120195e4f859085d8b3bc1bd18d8731a4a10470_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
