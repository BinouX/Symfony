<?php

/* :friend:index.html.twig */
class __TwigTemplate_1818f3c006d161f303d98fe4dc97b5b01b19788a149eb16fc34c9098b09975e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":friend:index.html.twig", 1);
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
        $__internal_2b074858524f659d62b2bee52671a59a5be3f9cfcba98e6d0c63698fdbe8918d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b074858524f659d62b2bee52671a59a5be3f9cfcba98e6d0c63698fdbe8918d->enter($__internal_2b074858524f659d62b2bee52671a59a5be3f9cfcba98e6d0c63698fdbe8918d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":friend:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b074858524f659d62b2bee52671a59a5be3f9cfcba98e6d0c63698fdbe8918d->leave($__internal_2b074858524f659d62b2bee52671a59a5be3f9cfcba98e6d0c63698fdbe8918d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c79186fb028ee7195f0d520c5d7a23acc65366eed08dbdf501307c68231c15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c79186fb028ee7195f0d520c5d7a23acc65366eed08dbdf501307c68231c15b->enter($__internal_9c79186fb028ee7195f0d520c5d7a23acc65366eed08dbdf501307c68231c15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Friends list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_show", array("id" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "tel", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_show", array("id" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_edit", array("id" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("friend_new");
        echo "\">Create a new friend</a>
        </li>
    </ul>
";
        
        $__internal_9c79186fb028ee7195f0d520c5d7a23acc65366eed08dbdf501307c68231c15b->leave($__internal_9c79186fb028ee7195f0d520c5d7a23acc65366eed08dbdf501307c68231c15b_prof);

    }

    public function getTemplateName()
    {
        return ":friend:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Friends list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for friend in friends %}
            <tr>
                <td><a href=\"{{ path('friend_show', { 'id': friend.id }) }}\">{{ friend.id }}</a></td>
                <td>{{ friend.name }}</td>
                <td>{{ friend.email }}</td>
                <td>{{ friend.tel }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('friend_show', { 'id': friend.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('friend_edit', { 'id': friend.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('friend_new') }}\">Create a new friend</a>
        </li>
    </ul>
{% endblock %}
", ":friend:index.html.twig", "/home/binoux/Documents/symfony3/app/Resources/views/friend/index.html.twig");
    }
}
