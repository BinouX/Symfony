<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5e6b822dcf653dc32d1f628302cd7375ae71d61cdad4d6fee327d2e4895ecf18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f73dd4e63efdd81198b56c770973b1ee91cea3dcf36708e8cf3699b798420ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73dd4e63efdd81198b56c770973b1ee91cea3dcf36708e8cf3699b798420ac9->enter($__internal_f73dd4e63efdd81198b56c770973b1ee91cea3dcf36708e8cf3699b798420ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f73dd4e63efdd81198b56c770973b1ee91cea3dcf36708e8cf3699b798420ac9->leave($__internal_f73dd4e63efdd81198b56c770973b1ee91cea3dcf36708e8cf3699b798420ac9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9036c069b06c12b1bc9bb06bd796a065d53bf0fe64dd55bb99d575482513f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9036c069b06c12b1bc9bb06bd796a065d53bf0fe64dd55bb99d575482513f26->enter($__internal_e9036c069b06c12b1bc9bb06bd796a065d53bf0fe64dd55bb99d575482513f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e9036c069b06c12b1bc9bb06bd796a065d53bf0fe64dd55bb99d575482513f26->leave($__internal_e9036c069b06c12b1bc9bb06bd796a065d53bf0fe64dd55bb99d575482513f26_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
