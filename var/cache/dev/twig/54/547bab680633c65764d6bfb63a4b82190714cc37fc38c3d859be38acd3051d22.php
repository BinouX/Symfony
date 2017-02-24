<?php

/* IKNSABlogBundle::layout.html.twig */
class __TwigTemplate_4f20a276129148652f2593a3a1aaa3744013a0725f09ed7399201f7d0dccb676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/blog.html.twig", "IKNSABlogBundle::layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/blog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8ee3103f40485bd2c9f3ed3a27825c202b7ec0d349f443e7522a000b4556a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ee3103f40485bd2c9f3ed3a27825c202b7ec0d349f443e7522a000b4556a2e->enter($__internal_d8ee3103f40485bd2c9f3ed3a27825c202b7ec0d349f443e7522a000b4556a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ee3103f40485bd2c9f3ed3a27825c202b7ec0d349f443e7522a000b4556a2e->leave($__internal_d8ee3103f40485bd2c9f3ed3a27825c202b7ec0d349f443e7522a000b4556a2e_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layouts/blog.html.twig' %}", "IKNSABlogBundle::layout.html.twig", "/home/binoux/Documents/symfony3/src/IKNSA/BlogBundle/Resources/views/layout.html.twig");
    }
}
