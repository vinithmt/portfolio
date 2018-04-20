<?php

/* C:\xampp\htdocs\liveoctober/themes/jacoweb-freelance/partials/footer.htm */
class __TwigTemplate_a6f645bcb079f6a550e1875afd4afa2e660509da0f27f0f2e7f25edf6d84a816 extends Twig_Template
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
        echo "<div class=\"footer-above\">
    <div class=\"container\">
        <div class=\"row\">
             <div class=\"footer-col col-md-4\">
                <h3>Currently Located</h3>
                <p>Dallas, Tx</p>
            </div> 
            <div class=\"footer-col col-md-4\">
                <h3>Around the Web</h3>
                <ul class=\"list-inline\"> 
                    <li>
                        <a href=\"https://plus.google.com/u/0/104178831738450967323\"  target=\"_blank\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-google-plus\"></i></a>
                    </li>
                   
                    <li>
                        <a href=\"https://www.linkedin.com/in/vinith-thaithara-0a16ba18/\"   target=\"_blank\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-linkedin\"></i></a>
                    </li>
                    
                </ul>
            </div>
             <div class=\"footer-col col-md-4\">
                <h3>Recommendations</h3>
               ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("work_review"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "            </div> 
        </div>
    </div>
</div>
<div class=\"footer-below\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                Copyright &copy; vinithmt.gq ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 32,  47 => 24,  43 => 23,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-above\">
    <div class=\"container\">
        <div class=\"row\">
             <div class=\"footer-col col-md-4\">
                <h3>Currently Located</h3>
                <p>Dallas, Tx</p>
            </div> 
            <div class=\"footer-col col-md-4\">
                <h3>Around the Web</h3>
                <ul class=\"list-inline\"> 
                    <li>
                        <a href=\"https://plus.google.com/u/0/104178831738450967323\"  target=\"_blank\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-google-plus\"></i></a>
                    </li>
                   
                    <li>
                        <a href=\"https://www.linkedin.com/in/vinith-thaithara-0a16ba18/\"   target=\"_blank\" class=\"btn-social btn-outline\"><i class=\"fa fa-fw fa-linkedin\"></i></a>
                    </li>
                    
                </ul>
            </div>
             <div class=\"footer-col col-md-4\">
                <h3>Recommendations</h3>
               {% partial \"work_review\" %}
            </div> 
        </div>
    </div>
</div>
<div class=\"footer-below\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                Copyright &copy; vinithmt.gq {{ \"now\"|date(\"Y\") }}
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/partials/footer.htm", "");
    }
}
