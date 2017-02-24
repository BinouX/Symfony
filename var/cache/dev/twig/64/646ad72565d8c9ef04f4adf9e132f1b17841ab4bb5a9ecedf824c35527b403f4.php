<?php

/* IKNSABlogBundle:post:edit.html.twig */
class __TwigTemplate_7d6ccfde1804cd8dd715fd7ef3517b83a893a63f77a2398045f606e1c10432a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IKNSABlogBundle:post:edit.html.twig", 1);
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
        $__internal_18de8055330bdde7997eae18c3c9ed5c85c7c18c792c0dfe9323fb0c19e6d5d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18de8055330bdde7997eae18c3c9ed5c85c7c18c792c0dfe9323fb0c19e6d5d1->enter($__internal_18de8055330bdde7997eae18c3c9ed5c85c7c18c792c0dfe9323fb0c19e6d5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18de8055330bdde7997eae18c3c9ed5c85c7c18c792c0dfe9323fb0c19e6d5d1->leave($__internal_18de8055330bdde7997eae18c3c9ed5c85c7c18c792c0dfe9323fb0c19e6d5d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_868539f2ec7dba8f454936fb6cd232b1c462e18cd243c0e6d3bbffaab7af5003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868539f2ec7dba8f454936fb6cd232b1c462e18cd243c0e6d3bbffaab7af5003->enter($__internal_868539f2ec7dba8f454936fb6cd232b1c462e18cd243c0e6d3bbffaab7af5003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_868539f2ec7dba8f454936fb6cd232b1c462e18cd243c0e6d3bbffaab7af5003->leave($__internal_868539f2ec7dba8f454936fb6cd232b1c462e18cd243c0e6d3bbffaab7af5003_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Post edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "IKNSABlogBundle:post:edit.html.twig", "/home/binoux/Documents/symfony3/src/IKNSA/BlogBundle/Resources/views/post/edit.html.twig");
    }
}
