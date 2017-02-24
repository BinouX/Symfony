<?php

/* :friend:new.html.twig */
class __TwigTemplate_548d14a1ea67a5e29103b822615b932f08f8d2b17365b8cf9150f609da3f2101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":friend:new.html.twig", 1);
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
        $__internal_b0392180fc04871b406213457cf1bf60f4db94d9f60009a558452421b4cd1fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0392180fc04871b406213457cf1bf60f4db94d9f60009a558452421b4cd1fe1->enter($__internal_b0392180fc04871b406213457cf1bf60f4db94d9f60009a558452421b4cd1fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0392180fc04871b406213457cf1bf60f4db94d9f60009a558452421b4cd1fe1->leave($__internal_b0392180fc04871b406213457cf1bf60f4db94d9f60009a558452421b4cd1fe1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03433950c787d2d0306a7a15b3ac29dd529ba13b08e9874383696711fb8dab76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03433950c787d2d0306a7a15b3ac29dd529ba13b08e9874383696711fb8dab76->enter($__internal_03433950c787d2d0306a7a15b3ac29dd529ba13b08e9874383696711fb8dab76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Friend creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_03433950c787d2d0306a7a15b3ac29dd529ba13b08e9874383696711fb8dab76->leave($__internal_03433950c787d2d0306a7a15b3ac29dd529ba13b08e9874383696711fb8dab76_prof);

    }

    public function getTemplateName()
    {
        return ":friend:new.html.twig";
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
    <h1>Friend creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('friend_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":friend:new.html.twig", "/home/binoux/Documents/symfony3/app/Resources/views/friend/new.html.twig");
    }
}
