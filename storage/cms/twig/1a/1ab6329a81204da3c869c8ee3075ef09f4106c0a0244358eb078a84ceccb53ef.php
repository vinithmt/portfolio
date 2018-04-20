<?php

/* C:\xampp\htdocs\liveoctober/themes/jacoweb-freelance/partials/company.htm */
class __TwigTemplate_89a0072a29639016187bbf29d9b6d79621848eea08f02dfcda50fac138cdb9b1 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("entries"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/partials/company.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'entries' %}", "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/partials/company.htm", "");
    }
}
