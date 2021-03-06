<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1c37874738953529b4457236dc462d0685884944bd2295fa25ed56b669b5ee00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47434c34a3c23c0b584167914e777771f006a93eb712a676d5697777f8d0946b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47434c34a3c23c0b584167914e777771f006a93eb712a676d5697777f8d0946b->enter($__internal_47434c34a3c23c0b584167914e777771f006a93eb712a676d5697777f8d0946b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47434c34a3c23c0b584167914e777771f006a93eb712a676d5697777f8d0946b->leave($__internal_47434c34a3c23c0b584167914e777771f006a93eb712a676d5697777f8d0946b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_44f247c0819088b7e60b94aa6b0dc7fe7e153fa9d901b1b34deea6c93b4faadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f247c0819088b7e60b94aa6b0dc7fe7e153fa9d901b1b34deea6c93b4faadc->enter($__internal_44f247c0819088b7e60b94aa6b0dc7fe7e153fa9d901b1b34deea6c93b4faadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_44f247c0819088b7e60b94aa6b0dc7fe7e153fa9d901b1b34deea6c93b4faadc->leave($__internal_44f247c0819088b7e60b94aa6b0dc7fe7e153fa9d901b1b34deea6c93b4faadc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc7fd46bd860ff3b1ed389d60a108735d8a99735a610065b270059b87f24ad64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7fd46bd860ff3b1ed389d60a108735d8a99735a610065b270059b87f24ad64->enter($__internal_bc7fd46bd860ff3b1ed389d60a108735d8a99735a610065b270059b87f24ad64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bc7fd46bd860ff3b1ed389d60a108735d8a99735a610065b270059b87f24ad64->leave($__internal_bc7fd46bd860ff3b1ed389d60a108735d8a99735a610065b270059b87f24ad64_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_97153a374a7837ad133031d4df9e283a2bb9c00633513b30fab624ae064853fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97153a374a7837ad133031d4df9e283a2bb9c00633513b30fab624ae064853fd->enter($__internal_97153a374a7837ad133031d4df9e283a2bb9c00633513b30fab624ae064853fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_97153a374a7837ad133031d4df9e283a2bb9c00633513b30fab624ae064853fd->leave($__internal_97153a374a7837ad133031d4df9e283a2bb9c00633513b30fab624ae064853fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/binoux/Documents/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
