<?php

/* C:\xampp\htdocs\liveoctober/themes/jacoweb-freelance/partials/modals.htm */
class __TwigTemplate_57ff54e5eaff1b87e6f746d08352f0742506a4baf2f5ac859535150015c3f69c extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("Worklist"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/partials/modals.htm";
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
        return new Twig_Source("{% component 'Worklist' %}", "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/partials/modals.htm", "");
    }
}
