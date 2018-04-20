<?php

/* C:\xampp\htdocs\liveoctober/plugins/octo/timeline/components/entries/default.htm */
class __TwigTemplate_72baf889cce82356d0e71f5bee26a18ada79c78300531fe5811f61085e20d5fb extends Twig_Template
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
        // line 2
        $context["temp_date"] = "";
        // line 3
        echo "

<div class=\"container\">
   <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Work Timeline</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
    <div id=\"timeline\">
    <div class=\"row timeline-movement timeline-movement-top\">
    <div class=\"timeline-badge timeline-future-movement\">
        <a href=\"javascript:void(0);\">
            <span class=\"glyphicon glyphicon-plus\"></span>
        </a>
    </div>
    <div class=\"timeline-badge timeline-filter-movement\">
        <a href=\"javascript:void(0);\">
            <span class=\"glyphicon glyphicon-time\"></span>
        </a>
    </div>

</div> 
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            echo " 
<div class=\"row timeline-movement\">
";
            // line 28
            $context["this_date"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "Y-m-d");
            // line 29
            echo "    <div class=\"timeline-badge\">
        <span class=\"timeline-balloon-date-day\"> ";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "m"), "html", null, true);
            echo " 
        </span>
        <span class=\"timeline-balloon-date-month\"> ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "Y"), "html", null, true);
            echo " 
        </span>
    </div>
           

    <div class=\"";
            // line 37
            if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) % 2)) {
                echo "col-sm-offset-6 col-sm-6  ";
            } else {
                echo "col-sm-6 ";
            }
            echo "  timeline-item\">
        <div class=\"row\">
            <div class=\"";
            // line 39
            if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) % 2)) {
                echo "col-sm-offset-1 col-sm-11";
            } else {
                echo "col-sm-11";
            }
            echo "\">
                <div class=\"timeline-panel ";
            // line 40
            if ((0 == twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) % 2)) {
                echo "debits";
            } else {
                echo "credits";
            }
            echo "\">
                    <ul class=\"timeline-panel-ul\">
                        <li><span class=\"importo\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "title", array()), "html", null, true);
            echo "</span></li>
                        <li><span class=\"causale\"> ";
            // line 43
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "text", array());
            echo " </span> </li> 
                    </ul>
                </div>

            </div>
        </div>
    </div>
 

    
    

</div> 
  

  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\liveoctober/plugins/octo/timeline/components/entries/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 59,  114 => 43,  110 => 42,  101 => 40,  93 => 39,  84 => 37,  76 => 32,  71 => 30,  68 => 29,  66 => 28,  46 => 26,  21 => 3,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Timeline variable #}
{% set temp_date = '' %}


<div class=\"container\">
   <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2>Work Timeline</h2>
                    <hr class=\"star-primary\">
                </div>
            </div>
    <div id=\"timeline\">
    <div class=\"row timeline-movement timeline-movement-top\">
    <div class=\"timeline-badge timeline-future-movement\">
        <a href=\"javascript:void(0);\">
            <span class=\"glyphicon glyphicon-plus\"></span>
        </a>
    </div>
    <div class=\"timeline-badge timeline-filter-movement\">
        <a href=\"javascript:void(0);\">
            <span class=\"glyphicon glyphicon-time\"></span>
        </a>
    </div>

</div> 
{% for entry in entries %} 
<div class=\"row timeline-movement\">
{% set this_date = entry.date|date(\"Y-m-d\") %}
    <div class=\"timeline-badge\">
        <span class=\"timeline-balloon-date-day\"> {{ entry.date|date('m') }} 
        </span>
        <span class=\"timeline-balloon-date-month\"> {{ entry.date|date('Y') }} 
        </span>
    </div>
           

    <div class=\"{% if loop.index is divisible by(2) %}col-sm-offset-6 col-sm-6  {% else %}col-sm-6 {% endif %}  timeline-item\">
        <div class=\"row\">
            <div class=\"{% if loop.index is divisible by(2) %}col-sm-offset-1 col-sm-11{% else %}col-sm-11{% endif %}\">
                <div class=\"timeline-panel {% if loop.index is divisible by(2) %}debits{% else %}credits{% endif %}\">
                    <ul class=\"timeline-panel-ul\">
                        <li><span class=\"importo\">{{ entry.title }}</span></li>
                        <li><span class=\"causale\"> {{ entry.text|raw }} </span> </li> 
                    </ul>
                </div>

            </div>
        </div>
    </div>
 

    
    

</div> 
  

  {% endfor %}

</div>
</div>
</div>", "C:\\xampp\\htdocs\\liveoctober/plugins/octo/timeline/components/entries/default.htm", "");
    }
}
