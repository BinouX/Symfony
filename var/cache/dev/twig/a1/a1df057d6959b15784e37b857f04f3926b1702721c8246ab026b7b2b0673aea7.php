<?php

/* base.html.twig */
class __TwigTemplate_54bc7a4c22fd21db820daf5c7139c703fb71bbae5cf94ab963d1559e57a6a023 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d0c45d1ebb691e47c28adf563c1ef8702fa3115135587aa6ff1836136bc9114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0c45d1ebb691e47c28adf563c1ef8702fa3115135587aa6ff1836136bc9114->enter($__internal_0d0c45d1ebb691e47c28adf563c1ef8702fa3115135587aa6ff1836136bc9114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0d0c45d1ebb691e47c28adf563c1ef8702fa3115135587aa6ff1836136bc9114->leave($__internal_0d0c45d1ebb691e47c28adf563c1ef8702fa3115135587aa6ff1836136bc9114_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5dc89e2c6f16192cc9c191e137f909fc4589494cd62e84727a4e599c1e2cb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5dc89e2c6f16192cc9c191e137f909fc4589494cd62e84727a4e599c1e2cb07->enter($__internal_c5dc89e2c6f16192cc9c191e137f909fc4589494cd62e84727a4e599c1e2cb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c5dc89e2c6f16192cc9c191e137f909fc4589494cd62e84727a4e599c1e2cb07->leave($__internal_c5dc89e2c6f16192cc9c191e137f909fc4589494cd62e84727a4e599c1e2cb07_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_741db23e8d47259bb2dff9956c3488f35226fe419aadb266437870b7d27f9199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741db23e8d47259bb2dff9956c3488f35226fe419aadb266437870b7d27f9199->enter($__internal_741db23e8d47259bb2dff9956c3488f35226fe419aadb266437870b7d27f9199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_741db23e8d47259bb2dff9956c3488f35226fe419aadb266437870b7d27f9199->leave($__internal_741db23e8d47259bb2dff9956c3488f35226fe419aadb266437870b7d27f9199_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b16e518395011e193577653177012dabf602b7bd5fb42b383b899c6287894aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16e518395011e193577653177012dabf602b7bd5fb42b383b899c6287894aa2->enter($__internal_b16e518395011e193577653177012dabf602b7bd5fb42b383b899c6287894aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b16e518395011e193577653177012dabf602b7bd5fb42b383b899c6287894aa2->leave($__internal_b16e518395011e193577653177012dabf602b7bd5fb42b383b899c6287894aa2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5105e24e531dbc1d0b141a0b4724629ac41850c55447d3e3ec3ce714c8775bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5105e24e531dbc1d0b141a0b4724629ac41850c55447d3e3ec3ce714c8775bab->enter($__internal_5105e24e531dbc1d0b141a0b4724629ac41850c55447d3e3ec3ce714c8775bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5105e24e531dbc1d0b141a0b4724629ac41850c55447d3e3ec3ce714c8775bab->leave($__internal_5105e24e531dbc1d0b141a0b4724629ac41850c55447d3e3ec3ce714c8775bab_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/binoux/Documents/symfony3/app/Resources/views/base.html.twig");
    }
}
