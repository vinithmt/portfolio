<?php

/* C:\xampp\htdocs\liveoctober/themes/jacoweb-freelance/layouts/default.htm */
class __TwigTemplate_bfa520740e9cfe46e61cd12b30e9fe7a90886d03596d83818b7b8a028c1adba4 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Vinith Thaithara - Sr. PHP developer - An open source enthusiast\">
    <meta name=\"keyword\" content=\"Vinith Thaithara,Sr.PHP developer, An open source enthusiast, web developer, magento certified developer, PHP developer, zend certified engineer. zce, mcp, mircosoft certified professional\">
    <meta name=\"author\" content=\"Vinith Thaithara\">

    <title>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    
        ";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "environment", array()) == "dev")) {
            // line 17
            echo "    <link href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
            echo "\" rel=\"stylesheet\">
    <link href=\"";
            // line 18
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.min.css");
            echo "\" rel=\"stylesheet\">
    <link href=\"";
            // line 19
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/timeline.css");
            echo "\" rel=\"stylesheet\">
    <link href=\"";
            // line 20
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/professional.css");
            echo "\" rel=\"stylesheet\">
    <link href=\"";
            // line 21
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/ticker.css");
            echo "\" rel=\"stylesheet\">
    <link href=\"";
            // line 22
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/counter.css");
            echo "\" rel=\"stylesheet\">


";
        } else {
            // line 26
            echo "    <link href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/theme.min.css", 2 => "assets/css/timeline.css", 3 => "assets/css/professional.css", 4 => "assets/css/ticker.css", 5 => "assets/css/counter.css"));
            // line 33
            echo "\" rel=\"stylesheet\">
";
        }
        // line 35
        echo "     <!-- Scripts -->
    <script src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery.min.js", 1 => "assets/javascript/jquery.bootstrap.newsbox.min.js", 2 => "assets/javascript/ticker.js"));
        // line 41
        echo "\"></script>


    ";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 45
        echo "  
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\" class=\"index\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#page-top\">Vinith Thaithara</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#portfolio\">Portfolio</a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#about\">About</a>
                    </li>
                       <li class=\"page-scroll\">
                        <a href=\"#professional-skill\">Skill Sets</a>
                    </li>
                   
                      <li class=\"page-scroll\">
                        <a href=\"#workhistory\">Work Timeline</a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#contact\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        ";
        // line 104
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 105
        echo "    </header>

    <!-- Portfolio Grid Section -->
    <section id=\"portfolio\">
        ";
        // line 109
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("portfolio"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 110
        echo "    </section>

    <!-- About Section -->
    <section class=\"success\" id=\"about\">
        ";
        // line 114
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 115
        echo "    </section>
    <section id=\"professional-skill\">
        ";
        // line 117
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("professional"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 118
        echo "    </section>
     <section   id=\"workhistory\">
        ";
        // line 120
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("company"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 121
        echo "    </section>

    <!-- Contact Section -->
    <section id=\"contact\">
        ";
        // line 125
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 126
        echo "    </section>

    <!-- Footer -->
    <footer class=\"text-center\">
        ";
        // line 130
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 131
        echo "    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class=\"scroll-top page-scroll visible-xs visble-sm\">
        <a class=\"btn btn-primary\" href=\"#page-top\">
            <i class=\"fa fa-chevron-up\"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    ";
        // line 141
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("modals"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
<script src=\"";
        // line 142
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/app.js", 1 => "assets/javascript/classie.js", 2 => "assets/javascript/cbpAnimatedHeader.js", 3 => "assets/javascript/jqBootstrapValidation.js", 4 => "assets/javascript/professional.js", 5 => "assets/javascript/counter.js"));
        // line 149
        echo "\"></script>

    ";
        // line 151
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 152
        echo "      <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
      ";
        // line 153
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 154
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("googleTracker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 155
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 155,  245 => 154,  243 => 153,  240 => 152,  237 => 151,  233 => 149,  231 => 142,  225 => 141,  213 => 131,  209 => 130,  203 => 126,  199 => 125,  193 => 121,  189 => 120,  185 => 118,  181 => 117,  177 => 115,  173 => 114,  167 => 110,  163 => 109,  157 => 105,  153 => 104,  92 => 45,  89 => 44,  84 => 41,  82 => 36,  79 => 35,  75 => 33,  72 => 26,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  44 => 17,  41 => 16,  38 => 15,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Vinith Thaithara - Sr. PHP developer - An open source enthusiast\">
    <meta name=\"keyword\" content=\"Vinith Thaithara,Sr.PHP developer, An open source enthusiast, web developer, magento certified developer, PHP developer, zend certified engineer. zce, mcp, mircosoft certified professional\">
    <meta name=\"author\" content=\"Vinith Thaithara\">

    <title>{{ this.page.title }}</title>
    
        {% styles %}
    {% if this.environment == 'dev' %}
    <link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{'assets/css/theme.min.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{'assets/css/timeline.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{'assets/css/professional.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{'assets/css/ticker.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{'assets/css/counter.css'|theme }}\" rel=\"stylesheet\">


{% else %}
    <link href=\"{{ [
        'assets/css/bootstrap.min.css',
        'assets/css/theme.min.css',
        'assets/css/timeline.css',
        'assets/css/professional.css',
        'assets/css/ticker.css',
        'assets/css/counter.css'
    ]|theme }}\" rel=\"stylesheet\">
{% endif %}
     <!-- Scripts -->
    <script src=\"{{ [
        'assets/javascript/jquery.min.js', 
        'assets/javascript/jquery.bootstrap.newsbox.min.js',
        'assets/javascript/ticker.js'

    ]|theme }}\"></script>


    {% scripts %}
  
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body id=\"page-top\" class=\"index\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#page-top\">Vinith Thaithara</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"hidden\">
                        <a href=\"#page-top\"></a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#portfolio\">Portfolio</a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#about\">About</a>
                    </li>
                       <li class=\"page-scroll\">
                        <a href=\"#professional-skill\">Skill Sets</a>
                    </li>
                   
                      <li class=\"page-scroll\">
                        <a href=\"#workhistory\">Work Timeline</a>
                    </li>
                    <li class=\"page-scroll\">
                        <a href=\"#contact\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        {% partial \"header\" %}
    </header>

    <!-- Portfolio Grid Section -->
    <section id=\"portfolio\">
        {% partial \"portfolio\" %}
    </section>

    <!-- About Section -->
    <section class=\"success\" id=\"about\">
        {% partial \"about\" %}
    </section>
    <section id=\"professional-skill\">
        {% partial \"professional\" %}
    </section>
     <section   id=\"workhistory\">
        {% partial \"company\" %}
    </section>

    <!-- Contact Section -->
    <section id=\"contact\">
        {% partial \"contact\" %}
    </section>

    <!-- Footer -->
    <footer class=\"text-center\">
        {% partial \"footer\" %}
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class=\"scroll-top page-scroll visible-xs visble-sm\">
        <a class=\"btn btn-primary\" href=\"#page-top\">
            <i class=\"fa fa-chevron-up\"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    {% partial \"modals\" %} 
<script src=\"{{ [
  'assets/javascript/app.js',
        'assets/javascript/classie.js',
        'assets/javascript/cbpAnimatedHeader.js',
        'assets/javascript/jqBootstrapValidation.js',
        'assets/javascript/professional.js',
         'assets/javascript/counter.js',
          ]|theme }}\"></script>

    {% scripts %}
      <script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script>
      {% page %}
{% component 'googleTracker' %}
</body>

</html>", "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/layouts/default.htm", "");
    }
}
