<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a3b7eb4bfb950f5aa53b5550b8ea2f30b9fbc91b1755810c3226c6098178193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77d848b7a239f78ad67981e10527bb3e74a92840f0c803d21426b21131cbb71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d848b7a239f78ad67981e10527bb3e74a92840f0c803d21426b21131cbb71d->enter($__internal_77d848b7a239f78ad67981e10527bb3e74a92840f0c803d21426b21131cbb71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_77d848b7a239f78ad67981e10527bb3e74a92840f0c803d21426b21131cbb71d->leave($__internal_77d848b7a239f78ad67981e10527bb3e74a92840f0c803d21426b21131cbb71d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/binoux/Documents/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
