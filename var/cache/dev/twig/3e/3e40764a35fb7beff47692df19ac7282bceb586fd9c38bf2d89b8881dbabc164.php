<?php

/* IKNSABlogBundle:post:new.html.twig */
class __TwigTemplate_959c1d74e131a5804d1166c12a7028972141f6830647441c32206ebd3e2cf87a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IKNSABlogBundle:post:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_940c9da02fb0fb55bc1903f5767ee0ac405af89f93b65efd8f1df1fcc74ad901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940c9da02fb0fb55bc1903f5767ee0ac405af89f93b65efd8f1df1fcc74ad901->enter($__internal_940c9da02fb0fb55bc1903f5767ee0ac405af89f93b65efd8f1df1fcc74ad901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_940c9da02fb0fb55bc1903f5767ee0ac405af89f93b65efd8f1df1fcc74ad901->leave($__internal_940c9da02fb0fb55bc1903f5767ee0ac405af89f93b65efd8f1df1fcc74ad901_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23f9841114638722c0bd9f96a5541cf097ca0e8a74e2621567dadc6817dc24a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f9841114638722c0bd9f96a5541cf097ca0e8a74e2621567dadc6817dc24a4->enter($__internal_23f9841114638722c0bd9f96a5541cf097ca0e8a74e2621567dadc6817dc24a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_23f9841114638722c0bd9f96a5541cf097ca0e8a74e2621567dadc6817dc24a4->leave($__internal_23f9841114638722c0bd9f96a5541cf097ca0e8a74e2621567dadc6817dc24a4_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "IKNSABlogBundle:post:new.html.twig", "/home/binoux/Documents/symfony3/src/IKNSA/BlogBundle/Resources/views/post/new.html.twig");
    }
}
