<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a3a4e325a79834b01e3bc3f22db29d8f2a3c9da12a1385a21d31f5a612604e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_690c50d4582a40769604a1d02ca193bcd269446f27e7e4106db4a6b940135829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690c50d4582a40769604a1d02ca193bcd269446f27e7e4106db4a6b940135829->enter($__internal_690c50d4582a40769604a1d02ca193bcd269446f27e7e4106db4a6b940135829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_690c50d4582a40769604a1d02ca193bcd269446f27e7e4106db4a6b940135829->leave($__internal_690c50d4582a40769604a1d02ca193bcd269446f27e7e4106db4a6b940135829_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52de14b3cefed4ff07672923854d6128a0d548990bc51fec3e81768ff6afb6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52de14b3cefed4ff07672923854d6128a0d548990bc51fec3e81768ff6afb6b3->enter($__internal_52de14b3cefed4ff07672923854d6128a0d548990bc51fec3e81768ff6afb6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_52de14b3cefed4ff07672923854d6128a0d548990bc51fec3e81768ff6afb6b3->leave($__internal_52de14b3cefed4ff07672923854d6128a0d548990bc51fec3e81768ff6afb6b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
