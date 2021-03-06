<?php

/* IKNSABlogBundle:post:show.html.twig */
class __TwigTemplate_2552aa4d1c860cf7ca02f1e7dd7361a5bbfe3dbd94a678250dd1244be146cf21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "IKNSABlogBundle:post:show.html.twig", 1);
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
        $__internal_4b4517c1429f5aea4646ff32765fcfe816bbeea0d7e002a8ab5fd7da4bb0e653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4517c1429f5aea4646ff32765fcfe816bbeea0d7e002a8ab5fd7da4bb0e653->enter($__internal_4b4517c1429f5aea4646ff32765fcfe816bbeea0d7e002a8ab5fd7da4bb0e653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b4517c1429f5aea4646ff32765fcfe816bbeea0d7e002a8ab5fd7da4bb0e653->leave($__internal_4b4517c1429f5aea4646ff32765fcfe816bbeea0d7e002a8ab5fd7da4bb0e653_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cab53fbd36c44ddd0052294973d34951129c2c8a4d96a4f4fc9c8a6e654d9495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab53fbd36c44ddd0052294973d34951129c2c8a4d96a4f4fc9c8a6e654d9495->enter($__internal_cab53fbd36c44ddd0052294973d34951129c2c8a4d96a4f4fc9c8a6e654d9495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                    ";
        // line 14
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getImage", array())) {
            // line 15
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/pictures/" . $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getImage", array()))), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 17
            echo "                        <p>No image was set for this post</p>
                    ";
        }
        // line 19
        echo "                </td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Summary</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "summary", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 35
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>
                    ";
        // line 40
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array())) {
            // line 41
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "user", array()), "username", array()), "html", null, true);
            echo "
                    ";
        } else {
            // line 43
            echo "                        <i>Annonymous</i>
                    ";
        }
        // line 45
        echo "                </td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 58
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 60
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_cab53fbd36c44ddd0052294973d34951129c2c8a4d96a4f4fc9c8a6e654d9495->leave($__internal_cab53fbd36c44ddd0052294973d34951129c2c8a4d96a4f4fc9c8a6e654d9495_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 60,  137 => 58,  131 => 55,  125 => 52,  116 => 45,  112 => 43,  106 => 41,  104 => 40,  94 => 35,  87 => 31,  80 => 27,  73 => 23,  67 => 19,  63 => 17,  57 => 15,  55 => 14,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Post</h1>
    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ post.id }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                    {% if post.getImage %}
                        <img src=\"{{ asset('uploads/pictures/' ~ post.getImage) }}\">
                    {% else %}
                        <p>No image was set for this post</p>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ post.title }}</td>
            </tr>
            <tr>
                <th>Summary</th>
                <td>{{ post.summary }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ post.content }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if post.createdAt %}{{ post.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Author</th>
                <td>
                    {% if post.user %}
                        {{ post.user.username }}
                    {% else %}
                        <i>Annonymous</i>
                    {% endif %}
                </td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "IKNSABlogBundle:post:show.html.twig", "/home/binoux/Documents/symfony3/src/IKNSA/BlogBundle/Resources/views/post/show.html.twig");
    }
}
