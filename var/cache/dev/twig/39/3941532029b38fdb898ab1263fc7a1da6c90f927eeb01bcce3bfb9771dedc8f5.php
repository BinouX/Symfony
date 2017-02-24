<?php

/* IKNSABlogBundle:post:index.html.twig */
class __TwigTemplate_dbe2f9ba2f489f3673a98b6ba335c316bc186eac468afd0c52ebfdc2431e50f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IKNSABlogBundle:post:index.html.twig", 1);
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
        $__internal_997f3cf6765685bb8545b3d7a689144f72aac39731475ba1785b3bdba08c81a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997f3cf6765685bb8545b3d7a689144f72aac39731475ba1785b3bdba08c81a9->enter($__internal_997f3cf6765685bb8545b3d7a689144f72aac39731475ba1785b3bdba08c81a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_997f3cf6765685bb8545b3d7a689144f72aac39731475ba1785b3bdba08c81a9->leave($__internal_997f3cf6765685bb8545b3d7a689144f72aac39731475ba1785b3bdba08c81a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3da8b9105bf4a383ec67b003ff4266f4124e0aa33b7e8bb49646ff5c817e5809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da8b9105bf4a383ec67b003ff4266f4124e0aa33b7e8bb49646ff5c817e5809->enter($__internal_3da8b9105bf4a383ec67b003ff4266f4124e0aa33b7e8bb49646ff5c817e5809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 5
            echo "        <div id=\"notice\" class=\"notice alert alert-notice\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    <h1>Post list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Summary</th>
                <th>Content</th>
                <th>Createdat</th>
                <th>Author</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "summary", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["post"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 33
            if ($this->getAttribute($context["post"], "user", array())) {
                // line 34
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "user", array()), "username", array()), "html", null, true);
                echo "
                    ";
            } else {
                // line 36
                echo "                        <i>Annonymous</i>
                    ";
            }
            // line 38
            echo "                </td>
                <td>
                    ";
            // line 40
            if ($this->getAttribute($context["post"], "getImage", array())) {
                // line 41
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/pictures/" . $this->getAttribute($context["post"], "getImage", array()))), "html", null, true);
                echo "\" style=\"width:75px;max-height:75px;\">
                    ";
            } else {
                // line 43
                echo "                        <i>null</i>
                    ";
            }
            // line 45
            echo "                </td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 52
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
        // line 58
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_3da8b9105bf4a383ec67b003ff4266f4124e0aa33b7e8bb49646ff5c817e5809->leave($__internal_3da8b9105bf4a383ec67b003ff4266f4124e0aa33b7e8bb49646ff5c817e5809_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 63,  159 => 58,  147 => 52,  141 => 49,  135 => 45,  131 => 43,  125 => 41,  123 => 40,  119 => 38,  115 => 36,  109 => 34,  107 => 33,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  82 => 27,  79 => 26,  75 => 25,  57 => 9,  48 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
    {% for flash in app.session.flashBag.get('notice') %}
        <div id=\"notice\" class=\"notice alert alert-notice\">
            {{ flash }}
        </div>
    {% endfor %}
    <h1>Post list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Summary</th>
                <th>Content</th>
                <th>Createdat</th>
                <th>Author</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td><a href=\"{{ path('post_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                <td>{{ post.title }}</td>
                <td>{{ post.summary }}</td>
                <td>{{ post.content }}</td>
                <td>{% if post.createdAt %}{{ post.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    {% if post.user %}
                        {{ post.user.username }}
                    {% else %}
                        <i>Annonymous</i>
                    {% endif %}
                </td>
                <td>
                    {% if post.getImage %}
                        <img src=\"{{ asset('uploads/pictures/' ~ post.getImage) }}\" style=\"width:75px;max-height:75px;\">
                    {% else %}
                        <i>null</i>
                    {% endif %}
                </td>
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
            <a href=\"{{ path('post_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
", "IKNSABlogBundle:post:index.html.twig", "/home/binoux/Documents/symfony3/src/IKNSA/BlogBundle/Resources/views/post/index.html.twig");
    }
}
