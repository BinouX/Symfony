<?php

/* :friend:show.html.twig */
class __TwigTemplate_4fd17d5c0aec864d17604efeed00da0cfd7b4dc124019bb0d5d2beb7bda0a0aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":friend:show.html.twig", 1);
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
        $__internal_3da35647c30359cd0f29a02f8edca20f98c478b68e7b23c0d5508b49568af8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da35647c30359cd0f29a02f8edca20f98c478b68e7b23c0d5508b49568af8fa->enter($__internal_3da35647c30359cd0f29a02f8edca20f98c478b68e7b23c0d5508b49568af8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3da35647c30359cd0f29a02f8edca20f98c478b68e7b23c0d5508b49568af8fa->leave($__internal_3da35647c30359cd0f29a02f8edca20f98c478b68e7b23c0d5508b49568af8fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e3cad3417e0183b48984ff90cdf11af8d5be8568d5375329ecfb4a1731c2c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3cad3417e0183b48984ff90cdf11af8d5be8568d5375329ecfb4a1731c2c3f->enter($__internal_1e3cad3417e0183b48984ff90cdf11af8d5be8568d5375329ecfb4a1731c2c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Friend</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>tel</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_edit", array("id" => $this->getAttribute((isset($context["friend"]) ? $context["friend"] : $this->getContext($context, "friend")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1e3cad3417e0183b48984ff90cdf11af8d5be8568d5375329ecfb4a1731c2c3f->leave($__internal_1e3cad3417e0183b48984ff90cdf11af8d5be8568d5375329ecfb4a1731c2c3f_prof);

    }

    public function getTemplateName()
    {
        return ":friend:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Friend</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ friend.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ friend.name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ friend.email }}</td>
            </tr>
            <tr>
                <th>tel</th>
                <td>{{ friend.tel }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('friend_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('friend_edit', { 'id': friend.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":friend:show.html.twig", "/home/binoux/Documents/symfony3/app/Resources/views/friend/show.html.twig");
    }
}
