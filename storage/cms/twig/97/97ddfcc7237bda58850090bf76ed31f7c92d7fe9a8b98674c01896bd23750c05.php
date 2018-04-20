<?php

/* C:\xampp\htdocs\liveoctober/themes/jacoweb-freelance/partials/header.htm */
class __TwigTemplate_dc3878d89ab99d4c40433e2bfc88694103a7ef16c9911487cc3b2567066226f4 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <img class=\"img-responsive\" src=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/profile.png");
        echo "\" alt=\"\">
            <div class=\"intro-text\">
                <!-- <span class=\"name\">Vinith Thaithara</span> -->
                <hr class=\"star-light\">
                <div class=\"certifcate_thumbnails\"> 
                     <a href=\"https://u.magento.com/certification/directory/dev/162393/\" target=\"_blank\" >
\t\t\t\t\t <img   src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/magento_dev_logo.jpg");
        echo "\"/> 
                    </a>
                     <a href=\"http://www.zend.com/en/yellow-pages/ZEND021725\" target=\"_blank\" >
\t\t\t\t\t <img id=\"cert_php_logo\"  class=\"img-responsive\" src=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/zce-php5-3-logo.gif");
        echo "\"   /></a>
\t\t\t\t\t <img id=\"cert_mcp_logo\"  class=\"img-responsive\" src=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/mcp.png");
        echo "\"   /> 
\t\t\t\t</div>
                <span class=\"skills\">PHP programmer - An open source enthusiast</span>
            </div> 
            <div class=\"counter col-lg-10 col-lg-offset-3\">
                    <div >
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"employees\">
                                    <p class=\"counter-count\">";
        // line 23
        echo twig_escape_filter($this->env, ($context["projects"] ?? null), "html", null, true);
        echo "</p>
                                    <p class=\"employee-p\">Projects</p>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"customer\">
                                    <p class=\"counter-count\">";
        // line 30
        echo twig_escape_filter($this->env, ($context["experience"] ?? null), "html", null, true);
        echo "</p>
                                    <p class=\"customer-p\">Experience(in Yrs)</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 30,  55 => 23,  43 => 14,  39 => 13,  33 => 10,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <img class=\"img-responsive\" src=\"{{ 'assets/images/profile.png'|theme }}\" alt=\"\">
            <div class=\"intro-text\">
                <!-- <span class=\"name\">Vinith Thaithara</span> -->
                <hr class=\"star-light\">
                <div class=\"certifcate_thumbnails\"> 
                     <a href=\"https://u.magento.com/certification/directory/dev/162393/\" target=\"_blank\" >
\t\t\t\t\t <img   src=\"{{ 'assets/images/magento_dev_logo.jpg'|theme }}\"/> 
                    </a>
                     <a href=\"http://www.zend.com/en/yellow-pages/ZEND021725\" target=\"_blank\" >
\t\t\t\t\t <img id=\"cert_php_logo\"  class=\"img-responsive\" src=\"{{ 'assets/images/zce-php5-3-logo.gif'|theme }}\"   /></a>
\t\t\t\t\t <img id=\"cert_mcp_logo\"  class=\"img-responsive\" src=\"{{ 'assets/images/mcp.png'|theme }}\"   /> 
\t\t\t\t</div>
                <span class=\"skills\">PHP programmer - An open source enthusiast</span>
            </div> 
            <div class=\"counter col-lg-10 col-lg-offset-3\">
                    <div >
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"employees\">
                                    <p class=\"counter-count\">{{ projects }}</p>
                                    <p class=\"employee-p\">Projects</p>
                                </div>
                            </div>

                            <div class=\"col-lg-4 col-md-3 col-sm-3 col-xs-12\">
                                <div class=\"customer\">
                                    <p class=\"counter-count\">{{ experience }}</p>
                                    <p class=\"customer-p\">Experience(in Yrs)</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/partials/header.htm", "");
    }
}
