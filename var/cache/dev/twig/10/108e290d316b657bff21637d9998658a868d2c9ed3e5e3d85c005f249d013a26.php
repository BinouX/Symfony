<?php

/* :post:index.html.twig */
class __TwigTemplate_72eb2303297465cbc938c2437031b2888f4907d74886ecd298a456ec0f4707e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:index.html.twig", 1);
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
        $__internal_e2e544359a6adac42d21bc875d501bcb02a9e79ccb2e44d081d4cf803ac25d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e544359a6adac42d21bc875d501bcb02a9e79ccb2e44d081d4cf803ac25d60->enter($__internal_e2e544359a6adac42d21bc875d501bcb02a9e79ccb2e44d081d4cf803ac25d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2e544359a6adac42d21bc875d501bcb02a9e79ccb2e44d081d4cf803ac25d60->leave($__internal_e2e544359a6adac42d21bc875d501bcb02a9e79ccb2e44d081d4cf803ac25d60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19fad8dde1f0be010a33860f3307aed2b50b649af4222b48d49a0493e520ae7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19fad8dde1f0be010a33860f3307aed2b50b649af4222b48d49a0493e520ae7f->enter($__internal_19fad8dde1f0be010a33860f3307aed2b50b649af4222b48d49a0493e520ae7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Resume</th>
                <th>Contenu</th>
                <th>Date</th>
                <th>Auteur</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "resume", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "contenu", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["post"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "auteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "image", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">Create a new post</a>
        </li>
    </ul>
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 50
            echo "    <div id=\"notice\" class=\"notice alert alert-notice\">
        ";
            // line 51
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_19fad8dde1f0be010a33860f3307aed2b50b649af4222b48d49a0493e520ae7f->leave($__internal_19fad8dde1f0be010a33860f3307aed2b50b649af4222b48d49a0493e520ae7f_prof);

    }

    public function getTemplateName()
    {
        return ":post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 51,  135 => 50,  131 => 49,  125 => 46,  118 => 41,  106 => 35,  100 => 32,  93 => 28,  89 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Resume</th>
                <th>Contenu</th>
                <th>Date</th>
                <th>Auteur</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                <td>{{ post.titre }}</td>
                <td>{{ post.resume }}</td>
                <td>{{ post.contenu }}</td>
                <td>{% if post.date %}{{ post.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ post.auteur }}</td>
                <td>{{ post.image }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('post_show', { 'id': post.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_new') }}\">Create a new post</a>
        </li>
    </ul>
    {% for flash in app.session.flashBag.get('notice') %}
    <div id=\"notice\" class=\"notice alert alert-notice\">
        {{ flash }}
    </div>
    {% endfor %}
{% endblock %}
", ":post:index.html.twig", "/home/binoux/Documents/symfony3/app/Resources/views/post/index.html.twig");
    }
}
