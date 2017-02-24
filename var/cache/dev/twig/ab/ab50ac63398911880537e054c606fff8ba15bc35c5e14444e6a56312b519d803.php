<?php

/* base.html.twig */
class __TwigTemplate_16a23e782c877cef47f574aedb0825f8bdb2fcf5aed0bf15a527a227eee5d38c extends Twig_Template
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
        $__internal_e59a84fe6d98a517410564b9958bb6ceccd8fd026e035a685231687323d642ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59a84fe6d98a517410564b9958bb6ceccd8fd026e035a685231687323d642ad->enter($__internal_e59a84fe6d98a517410564b9958bb6ceccd8fd026e035a685231687323d642ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e59a84fe6d98a517410564b9958bb6ceccd8fd026e035a685231687323d642ad->leave($__internal_e59a84fe6d98a517410564b9958bb6ceccd8fd026e035a685231687323d642ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ad5fc416e9c959e3a7534e506bfaab8f4967ad86615fc332757d94f2330ed49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad5fc416e9c959e3a7534e506bfaab8f4967ad86615fc332757d94f2330ed49->enter($__internal_0ad5fc416e9c959e3a7534e506bfaab8f4967ad86615fc332757d94f2330ed49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0ad5fc416e9c959e3a7534e506bfaab8f4967ad86615fc332757d94f2330ed49->leave($__internal_0ad5fc416e9c959e3a7534e506bfaab8f4967ad86615fc332757d94f2330ed49_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61bf90300fd99eadc1dc4bc1566494c0bed4de7af4e62545ccd79d4d02adcad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bf90300fd99eadc1dc4bc1566494c0bed4de7af4e62545ccd79d4d02adcad8->enter($__internal_61bf90300fd99eadc1dc4bc1566494c0bed4de7af4e62545ccd79d4d02adcad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_61bf90300fd99eadc1dc4bc1566494c0bed4de7af4e62545ccd79d4d02adcad8->leave($__internal_61bf90300fd99eadc1dc4bc1566494c0bed4de7af4e62545ccd79d4d02adcad8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_845f7679503c9bcf002c7ba37b81f5155e0a4aa6edeb511e560efff3db2530d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845f7679503c9bcf002c7ba37b81f5155e0a4aa6edeb511e560efff3db2530d3->enter($__internal_845f7679503c9bcf002c7ba37b81f5155e0a4aa6edeb511e560efff3db2530d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_845f7679503c9bcf002c7ba37b81f5155e0a4aa6edeb511e560efff3db2530d3->leave($__internal_845f7679503c9bcf002c7ba37b81f5155e0a4aa6edeb511e560efff3db2530d3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d6c8016223cf7bdf437198bc013cbf06e0405d32ca4ff6e8dfb3d132c5cadcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6c8016223cf7bdf437198bc013cbf06e0405d32ca4ff6e8dfb3d132c5cadcd->enter($__internal_7d6c8016223cf7bdf437198bc013cbf06e0405d32ca4ff6e8dfb3d132c5cadcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d6c8016223cf7bdf437198bc013cbf06e0405d32ca4ff6e8dfb3d132c5cadcd->leave($__internal_7d6c8016223cf7bdf437198bc013cbf06e0405d32ca4ff6e8dfb3d132c5cadcd_prof);

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
