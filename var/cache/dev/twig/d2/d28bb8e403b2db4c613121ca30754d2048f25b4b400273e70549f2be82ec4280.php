<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_6a266cff9d13d1638c1ad79ed20e09209d138a2cd0c06d19e073bb641433d9b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_99ef2659c22c3ca8906503efcde4cf3d2259ce8dcf5ac0105446b3b90a551483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ef2659c22c3ca8906503efcde4cf3d2259ce8dcf5ac0105446b3b90a551483->enter($__internal_99ef2659c22c3ca8906503efcde4cf3d2259ce8dcf5ac0105446b3b90a551483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99ef2659c22c3ca8906503efcde4cf3d2259ce8dcf5ac0105446b3b90a551483->leave($__internal_99ef2659c22c3ca8906503efcde4cf3d2259ce8dcf5ac0105446b3b90a551483_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdb7ef87afda52e1bc04532755e9be47500a0c1c54b305f0acab3e190fae65f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb7ef87afda52e1bc04532755e9be47500a0c1c54b305f0acab3e190fae65f4->enter($__internal_bdb7ef87afda52e1bc04532755e9be47500a0c1c54b305f0acab3e190fae65f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_bdb7ef87afda52e1bc04532755e9be47500a0c1c54b305f0acab3e190fae65f4->leave($__internal_bdb7ef87afda52e1bc04532755e9be47500a0c1c54b305f0acab3e190fae65f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/binoux/Documents/symfony3/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
