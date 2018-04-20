<?php

/* C:\xampp\htdocs\liveoctober/plugins/individuart/work/components/categorylist/default.htm */
class __TwigTemplate_292a2b5ad03af8b993588eb36416d1fdf5a7c2b17d978f0108ed819de36950db extends Twig_Template
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
        $context["categories"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "categories", array());
        // line 2
        $context["works"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "works", array());
        // line 3
        echo "
";
        // line 4
        if ( !twig_test_empty(($context["categories"] ?? null))) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 6
                echo "    <div class=\"col-sm-4 portfolio-item\">
        <a href=\"#portfolioModal";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "id", array()), "html", null, true);
                echo "\" class=\"portfolio-link\" data-toggle=\"modal\">
            <div class=\"caption\">
                <div class=\"caption-content\">
                    <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
            </div>
             <img   id=\"cat-";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "id", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "featured_image", array()), "path", array()), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "name", array()), "html", null, true);
                echo "\"> 
        </a>
    </div> 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 17
        echo " ";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\liveoctober/plugins/individuart/work/components/categorylist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  45 => 13,  36 => 7,  33 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categories = __SELF__.categories %}
{% set works = __SELF__.works %}

{% if categories is not empty %}
    {% for cat in categories %}
    <div class=\"col-sm-4 portfolio-item\">
        <a href=\"#portfolioModal{{cat.id}}\" class=\"portfolio-link\" data-toggle=\"modal\">
            <div class=\"caption\">
                <div class=\"caption-content\">
                    <i class=\"fa fa-search-plus fa-3x\"></i>
                </div>
            </div>
             <img   id=\"cat-{{cat.id}}\" src=\"{{cat.featured_image.path}}\" class=\"img-responsive\" alt=\"{{cat.name}}\"> 
        </a>
    </div> 
    {% endfor %}
{% endif %} ", "C:\\xampp\\htdocs\\liveoctober/plugins/individuart/work/components/categorylist/default.htm", "");
    }
}
