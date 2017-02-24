<?php

/* :post:new.html.twig */
class __TwigTemplate_41026eac1eb938aa7975c2956021d0ac484b07ad69bd19eda922001e028ffff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:new.html.twig", 1);
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
        $__internal_2ba7c5d8596ec33b1561751c9771a71fba9e87757e48753774eb28dc710d97ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba7c5d8596ec33b1561751c9771a71fba9e87757e48753774eb28dc710d97ce->enter($__internal_2ba7c5d8596ec33b1561751c9771a71fba9e87757e48753774eb28dc710d97ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ba7c5d8596ec33b1561751c9771a71fba9e87757e48753774eb28dc710d97ce->leave($__internal_2ba7c5d8596ec33b1561751c9771a71fba9e87757e48753774eb28dc710d97ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13f74be77387a68ef72f3f6da00de462041152a90e41ef3b1cdd6f2dd37d8e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f74be77387a68ef72f3f6da00de462041152a90e41ef3b1cdd6f2dd37d8e4c->enter($__internal_13f74be77387a68ef72f3f6da00de462041152a90e41ef3b1cdd6f2dd37d8e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13f74be77387a68ef72f3f6da00de462041152a90e41ef3b1cdd6f2dd37d8e4c->leave($__internal_13f74be77387a68ef72f3f6da00de462041152a90e41ef3b1cdd6f2dd37d8e4c_prof);

    }

    public function getTemplateName()
    {
        return ":post:new.html.twig";
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
", ":post:new.html.twig", "/home/binoux/Documents/symfony3/app/Resources/views/post/new.html.twig");
    }
}
