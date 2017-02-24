<?php

/* :Layouts:blog.html.twig */
class __TwigTemplate_f3f7078a8da72494c8c62468a786d22ce2a315c03b8da9303434e3dd16c79256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'blog' => array($this, 'block_blog'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee8873dd0986c1c5011973bd49f3fafab528976114bdc321311f6c46772419e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8873dd0986c1c5011973bd49f3fafab528976114bdc321311f6c46772419e2->enter($__internal_ee8873dd0986c1c5011973bd49f3fafab528976114bdc321311f6c46772419e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Layouts:blog.html.twig"));

        // line 1
        $this->displayBlock('blog', $context, $blocks);
        
        $__internal_ee8873dd0986c1c5011973bd49f3fafab528976114bdc321311f6c46772419e2->leave($__internal_ee8873dd0986c1c5011973bd49f3fafab528976114bdc321311f6c46772419e2_prof);

    }

    public function block_blog($context, array $blocks = array())
    {
        $__internal_b352e70b9a9fc4bbf3d34c2b3e6e813dc665841e1d5fe8e22a3d5201225dc932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b352e70b9a9fc4bbf3d34c2b3e6e813dc665841e1d5fe8e22a3d5201225dc932->enter($__internal_b352e70b9a9fc4bbf3d34c2b3e6e813dc665841e1d5fe8e22a3d5201225dc932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog"));

        // line 2
        echo "\t";
        $this->loadTemplate("@web/static/index.html", ":Layouts:blog.html.twig", 2)->display($context);
        
        $__internal_b352e70b9a9fc4bbf3d34c2b3e6e813dc665841e1d5fe8e22a3d5201225dc932->leave($__internal_b352e70b9a9fc4bbf3d34c2b3e6e813dc665841e1d5fe8e22a3d5201225dc932_prof);

    }

    public function getTemplateName()
    {
        return ":Layouts:blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block blog %}
\t{% include '@web/static/index.html' %}
{% endblock %}", ":Layouts:blog.html.twig", "/home/binoux/Documents/symfony3/app/Resources/views/Layouts/blog.html.twig");
    }
}
