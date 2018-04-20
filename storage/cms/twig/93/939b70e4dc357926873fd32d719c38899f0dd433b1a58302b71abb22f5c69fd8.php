<?php

/* C:\xampp\htdocs\liveoctober/themes/jacoweb-freelance/partials/portfolio.htm */
class __TwigTemplate_03ce9951f6c7484b5d6bec6d604a5f6dbe46a64eae8de6c4b76e017e4c4e67ca extends Twig_Template
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
                <div class=\"col-lg-12 text-center\">
                    <h2>Portfolio</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            <div class=\"row\">
                       ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Categorylist"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "      
            </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/partials/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Portfolio</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
            <div class=\"row\">
                       {% component 'Categorylist' %}      
            </div>
</div>", "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/partials/portfolio.htm", "");
    }
}
