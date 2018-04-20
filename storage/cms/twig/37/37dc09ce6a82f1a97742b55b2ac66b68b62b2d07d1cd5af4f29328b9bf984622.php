<?php

/* C:\xampp\htdocs\liveoctober/plugins/individuart/work/components/worklist/default.htm */
class __TwigTemplate_6251063f30d52721586970cec2c00a8364b0deea9a8ed5ab003eefabf5675df2 extends Twig_Template
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
                echo "    

<div class=\"portfolio-modal modal fade\" id=\"portfolioModal";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "id", array()), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <h2>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "name", array()), "html", null, true);
                echo " Project";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "works", array())) > 0)) {
                    echo "s";
                }
                echo "</h2>
                        <hr class=\"star-primary\">

                        <div class=\"container-fluid\">
                            <div style=\"margin-bottom:10px;\" class=\"row\">
                                <div class=\" col-sm-8 col-md-9 col-lg-12 col-xl-7\">
                                    <div class=\"panel-group widget\" id=\"accordion-";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "id", array()), "html", null, true);
                echo "\" style=\"margin-top:0\">

                                        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "works", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
                    // line 29
                    echo "                                        <div class=\"panel panel-default projectaccordion\">
                                            <div class=\"panel-heading accordion-toggle\" style=\"border-bottom:1px #C1C1C1 solid\">
                                                <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" class=\"accordion-toggle\" data-parent=\"#accordion-";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "id", array()), "html", null, true);
                    echo "\" href=\"#collapse";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "id", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "id", array()), "html", null, true);
                    echo "\"style=\" color:#666\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "name", array()), "html", null, true);
                    echo "</a>
                        </h4>
                                            </div>
                                            <div id=\"collapse";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "id", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["cat"], "id", array()), "html", null, true);
                    echo "\" class=\"panel-collapse collapse \">
                                                <div class=\"panel-body\">
                                                    <div class=\"description\">
                                                        ";
                    // line 38
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "description", array());
                    echo "
                                                    </div>
                                                    <div class=\"long_description\">
                                                        ";
                    // line 41
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "long_description", array());
                    echo "
                                                    </div>
                                                    <div class=\"env\">
                                                        ";
                    // line 44
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "content", array());
                    echo "
                                                    </div>
                                                      ";
                    // line 46
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "url", array())) {
                        // line 47
                        echo "                                                     <div class=\"url\">
                                                        Url: <a href=\"";
                        // line 48
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "url", array()), "html", null, true);
                        echo "\" target=\"_blank\">www.";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["work"], "name", array()), "html", null, true);
                        echo "</a>
                                                    </div>
                                                     ";
                    }
                    // line 50
                    echo " 
                                                </div>
                                            </div>
                                        </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 69
        echo " 
 ";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\liveoctober/plugins/individuart/work/components/worklist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 69,  139 => 55,  129 => 50,  121 => 48,  118 => 47,  116 => 46,  111 => 44,  105 => 41,  99 => 38,  91 => 35,  79 => 32,  74 => 29,  70 => 28,  65 => 26,  52 => 20,  37 => 8,  33 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categories = __SELF__.categories %}
{% set works = __SELF__.works %}

{% if categories is not empty %}
    {% for cat in categories %}
    

<div class=\"portfolio-modal modal fade\" id=\"portfolioModal{{cat.id}}\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-content\">
        <div class=\"close-modal\" data-dismiss=\"modal\">
            <div class=\"lr\">
                <div class=\"rl\">
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2\">
                    <div class=\"modal-body\">
                        <h2>{{ cat.name}} Project{% if cat.works|length > 0 %}s{% endif %}</h2>
                        <hr class=\"star-primary\">

                        <div class=\"container-fluid\">
                            <div style=\"margin-bottom:10px;\" class=\"row\">
                                <div class=\" col-sm-8 col-md-9 col-lg-12 col-xl-7\">
                                    <div class=\"panel-group widget\" id=\"accordion-{{cat.id}}\" style=\"margin-top:0\">

                                        {% for work in cat.works %}
                                        <div class=\"panel panel-default projectaccordion\">
                                            <div class=\"panel-heading accordion-toggle\" style=\"border-bottom:1px #C1C1C1 solid\">
                                                <h4 class=\"panel-title\">
                            <a data-toggle=\"collapse\" class=\"accordion-toggle\" data-parent=\"#accordion-{{cat.id}}\" href=\"#collapse{{ work.id}}-{{cat.id}}\"style=\" color:#666\">{{ work.name}}</a>
                        </h4>
                                            </div>
                                            <div id=\"collapse{{ work.id}}-{{cat.id}}\" class=\"panel-collapse collapse \">
                                                <div class=\"panel-body\">
                                                    <div class=\"description\">
                                                        {{work.description | raw}}
                                                    </div>
                                                    <div class=\"long_description\">
                                                        {{work.long_description | raw}}
                                                    </div>
                                                    <div class=\"env\">
                                                        {{work.content | raw}}
                                                    </div>
                                                      {% if work.url %}
                                                     <div class=\"url\">
                                                        Url: <a href=\"{{work.url}}\" target=\"_blank\">www.{{ work.name}}</a>
                                                    </div>
                                                     {% endif %} 
                                                </div>
                                            </div>
                                        </div>
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
{% endfor %}
{% endif %} 
 ", "C:\\xampp\\htdocs\\liveoctober/plugins/individuart/work/components/worklist/default.htm", "");
    }
}
