<?php

/* IKNSABlogBundle:Blog:index.html.twig */
class __TwigTemplate_102ffe784cdfcd1f23182fab05ba2072074e0a9b48c7051d869dd2881e7c0fe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IKNSABlogBundle::layout.html.twig", "IKNSABlogBundle:Blog:index.html.twig", 1);
        $this->blocks = array(
            'blogContent' => array($this, 'block_blogContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IKNSABlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_895b74a809ec545359def714411769d521479998cfadbc0e643f499f98df9f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895b74a809ec545359def714411769d521479998cfadbc0e643f499f98df9f74->enter($__internal_895b74a809ec545359def714411769d521479998cfadbc0e643f499f98df9f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IKNSABlogBundle:Blog:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_895b74a809ec545359def714411769d521479998cfadbc0e643f499f98df9f74->leave($__internal_895b74a809ec545359def714411769d521479998cfadbc0e643f499f98df9f74_prof);

    }

    // line 3
    public function block_blogContent($context, array $blocks = array())
    {
        $__internal_0de5ab34a3e8670a3299dc05d5ea6dae915ce353bca2aebcaeb9323b31d9a152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de5ab34a3e8670a3299dc05d5ea6dae915ce353bca2aebcaeb9323b31d9a152->enter($__internal_0de5ab34a3e8670a3299dc05d5ea6dae915ce353bca2aebcaeb9323b31d9a152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blogContent"));

        // line 4
        echo "<div class=\"row\">
    <!-- Carousel Slideshow -->
    <div id=\"carousel-example\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Carousel Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"clearfix\"></div>
        <!-- End Carousel Indicators -->
        <!-- Carousel Images -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/slideshow/slide1.jpg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/slideshow/slide2.jpg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/slideshow/slide3.jpg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"item\">
                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/slideshow/slide4.jpg"), "html", null, true);
        echo "\">
            </div>
        </div>
        <!-- End Carousel Images -->
        <!-- Carousel Controls -->
        <a class=\"left carousel-control\" href=\"#carousel-example\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel-example\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
        </a>
        <!-- End Carousel Controls -->
    </div>
    <!-- End Carousel Slideshow -->
</div>
</div>
<div class=\"container background-gray-lighter\">
<div class=\"row\">
    <h2 class=\"animate fadeIn text-center margin-top-50\">Welcome to Enlighten</h2>
    <hr class=\"margin-top-15\">
    <p class=\"animate fadeIn text-center\">Enlighten offers you the canvas to turn your imagination in to a reality
        <br>giving you the perfect framework for your project!</p>
    <p class=\"text-center animate fadeInUp margin-bottom-50\">
        <button type=\"button\" class=\"btn btn-lg btn-primary\">View Details</button>
    </p>
</div>
</div>
<div class=\"container\">
<div class=\"row margin-vert-30\">
    <!-- Main Text -->
    <div class=\"col-md-9\">
        <h2>Lorem ipsum dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
            lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
            delenit augue duis dolore te feugait nulla facilisi. Cras non sem sem, at eleifend mi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Curabitur
            eget nisl a risus.</p>
        <img class=\"visible-lg animate fadeInUp\" style=\"bottom: -50px; position: relative; left: 85px; margin-top: -20px;\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/frontpage/responsive_homepage.png"), "html", null, true);
        echo "\" alt=\"\">
    </div>
    <!-- End Main Text -->
    <!-- Side Column -->
    <div class=\"col-md-3\">
        <h3 class=\"title\">Opening hours</h3>
        <h6 style=\"margin: 0;\">Mon - Wed</h6>
        <h4 style=\"margin: 0;\">7:00 am - 1:30 pm</h4>
        <p>
            <small>* Lorem ipsum dolor sit amet</small>
        </p>
        <hr>
        <h6 style=\"margin: 0;\">Thursday</h6>
        <h4 style=\"margin: 0;\">7:00 am - 1:30 pm</h4>
        <p>
            <small>* Lorem ipsum dolor sit amet</small>
        </p>
        <hr>
        <h6 style=\"margin: 0;\">Fri-Sat</h6>
        <h4 style=\"margin: 0;\">7:00 am - 1:30 pm</h4>
        <p>
            <small>* Lorem ipsum dolor sit amet</small>
        </p>
        <hr>
        <h6 style=\"margin: 0;\">Suday</h6>
        <h4 style=\"margin: 0;\">CLOSED</h4>
        <p>
            <small>* Lorem ipsum dolor sit amet</small>
        </p>
        <hr>
    </div>
    <!-- End Side Column -->
</div>
</div>
<div class=\"container background-gray-lighter\">
<div class=\"row row-no-margin\">
    <!-- Portfolio -->
    <ul class=\"portfolio-group\">
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image1\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/frontpage/image1.png"), "html", null, true);
        echo "\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image2\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/frontpage/image2.png"), "html", null, true);
        echo "\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image3\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/frontpage/image3.png"), "html", null, true);
        echo "\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image4\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static/assets/img/frontpage/image4.png"), "html", null, true);
        echo "\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
    </ul>
    <!-- End Portfolio -->
            </div>
";
        
        $__internal_0de5ab34a3e8670a3299dc05d5ea6dae915ce353bca2aebcaeb9323b31d9a152->leave($__internal_0de5ab34a3e8670a3299dc05d5ea6dae915ce353bca2aebcaeb9323b31d9a152_prof);

    }

    public function getTemplateName()
    {
        return "IKNSABlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 146,  192 => 133,  176 => 120,  160 => 107,  114 => 64,  74 => 27,  68 => 24,  62 => 21,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'IKNSABlogBundle::layout.html.twig' %}

{% block blogContent %}
<div class=\"row\">
    <!-- Carousel Slideshow -->
    <div id=\"carousel-example\" class=\"carousel slide\" data-ride=\"carousel\">
        <!-- Carousel Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"clearfix\"></div>
        <!-- End Carousel Indicators -->
        <!-- Carousel Images -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"{{ asset('static/assets/img/slideshow/slide1.jpg') }}\">
            </div>
            <div class=\"item\">
                <img src=\"{{ asset('static/assets/img/slideshow/slide2.jpg') }}\">
            </div>
            <div class=\"item\">
                <img src=\"{{ asset('static/assets/img/slideshow/slide3.jpg') }}\">
            </div>
            <div class=\"item\">
                <img src=\"{{ asset('static/assets/img/slideshow/slide4.jpg') }}\">
            </div>
        </div>
        <!-- End Carousel Images -->
        <!-- Carousel Controls -->
        <a class=\"left carousel-control\" href=\"#carousel-example\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#carousel-example\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
        </a>
        <!-- End Carousel Controls -->
    </div>
    <!-- End Carousel Slideshow -->
</div>
</div>
<div class=\"container background-gray-lighter\">
<div class=\"row\">
    <h2 class=\"animate fadeIn text-center margin-top-50\">Welcome to Enlighten</h2>
    <hr class=\"margin-top-15\">
    <p class=\"animate fadeIn text-center\">Enlighten offers you the canvas to turn your imagination in to a reality
        <br>giving you the perfect framework for your project!</p>
    <p class=\"text-center animate fadeInUp margin-bottom-50\">
        <button type=\"button\" class=\"btn btn-lg btn-primary\">View Details</button>
    </p>
</div>
</div>
<div class=\"container\">
<div class=\"row margin-vert-30\">
    <!-- Main Text -->
    <div class=\"col-md-9\">
        <h2>Lorem ipsum dolor</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
            lobortis nisl ut aliquip ex ea commodo consequat.</p>
        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril
            delenit augue duis dolore te feugait nulla facilisi. Cras non sem sem, at eleifend mi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Curabitur
            eget nisl a risus.</p>
        <img class=\"visible-lg animate fadeInUp\" style=\"bottom: -50px; position: relative; left: 85px; margin-top: -20px;\" src=\"{{ asset('static/assets/img/frontpage/responsive_homepage.png') }}\" alt=\"\">
    </div>
    <!-- End Main Text -->
    <!-- Side Column -->
    <div class=\"col-md-3\">
        <h3 class=\"title\">Opening hours</h3>
        <h6 style=\"margin: 0;\">Mon - Wed</h6>
        <h4 style=\"margin: 0;\">7:00 am - 1:30 pm</h4>
        <p>
            <small>* Lorem ipsum dolor sit amet</small>
        </p>
        <hr>
        <h6 style=\"margin: 0;\">Thursday</h6>
        <h4 style=\"margin: 0;\">7:00 am - 1:30 pm</h4>
        <p>
            <small>* Lorem ipsum dolor sit amet</small>
        </p>
        <hr>
        <h6 style=\"margin: 0;\">Fri-Sat</h6>
        <h4 style=\"margin: 0;\">7:00 am - 1:30 pm</h4>
        <p>
            <small>* Lorem ipsum dolor sit amet</small>
        </p>
        <hr>
        <h6 style=\"margin: 0;\">Suday</h6>
        <h4 style=\"margin: 0;\">CLOSED</h4>
        <p>
            <small>* Lorem ipsum dolor sit amet</small>
        </p>
        <hr>
    </div>
    <!-- End Side Column -->
</div>
</div>
<div class=\"container background-gray-lighter\">
<div class=\"row row-no-margin\">
    <!-- Portfolio -->
    <ul class=\"portfolio-group\">
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image1\" src=\"{{ asset('static/assets/img/frontpage/image1.png') }}\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image2\" src=\"{{ asset('static/assets/img/frontpage/image2.png') }}\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image3\" src=\"{{ asset('static/assets/img/frontpage/image3.png') }}\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
        <!-- Portfolio Item -->
        <li class=\"portfolio-item col-sm-3 col-xs-6 no-padding\">
            <a href=\"#\">
                <h3>Placerat facer possim</h3>
                <figure class=\"animate fadeInLeft animated\">
                    <img alt=\"image4\" src=\"{{ asset('static/assets/img/frontpage/image4.png') }}\">
                    <figcaption>
                        <span style=\"color:#212121; \">Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                    </figcaption>
                </figure>
            </a>
        </li>
        <!-- //Portfolio Item// -->
    </ul>
    <!-- End Portfolio -->
            </div>
{% endblock %}
", "IKNSABlogBundle:Blog:index.html.twig", "/home/binoux/Documents/symfony3/src/IKNSA/BlogBundle/Resources/views/Blog/index.html.twig");
    }
}
