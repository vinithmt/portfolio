<?php

/* C:\xampp\htdocs\liveoctober/themes/jacoweb-freelance/partials/about.htm */
class __TwigTemplate_3a14848eb05fbd7546ce80ebee1875790790b94769c8690ccd802fde62413c84 extends Twig_Template
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
            <h2>About</h2>
            <hr class=\"star-light\">
        </div>
    </div>
    <div class=\"row\" >
        <div class=\"col-lg-8 col-lg-offset-2\">
            <p style=\"text-align:justify; font-size:15px\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["experience"] ?? null), "html", null, true);
        echo " years of experience and good hands on web technologies such as PHP, mySQL, HTML5, CSS, JQUERY, & JS etc. Love to learn new technology and take the challenge to do remarkable application. A good self learner, expertise in various PHP frameworks such as Zend, Codeignitor, CakePHP, Yii frameworks.Good hands on customizing open source application like Joomla, Wordpress, Magento, SugarCRM etc. Good hands on solving webs and server side application technical issues.</p>
         
            <p style=\"text-align:justify; font-size:15px\">Have experience in handling onsite and offshore team and ability to handle more team members.Good experience using project management and methodology tools like Jira and Scrum etc. Experience in reporting to the Top Management Members. Good hands on unit testing.</p>
        </div>
        <div class=\"col-lg-8 col-lg-offset-2 text-center\">
            <a href=\"https://docs.google.com/document/d/1YDyNS2srJ26RfaRiyuY2I_PYm9_C2hCHQFDw9BVVt7Y/edit?usp=sharing\" target=\"_blank\" class=\"btn btn-lg btn-outline\">
                <i class=\"fa fa-download\"></i> Download Resume
            </a>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            <h2>About</h2>
            <hr class=\"star-light\">
        </div>
    </div>
    <div class=\"row\" >
        <div class=\"col-lg-8 col-lg-offset-2\">
            <p style=\"text-align:justify; font-size:15px\">{{ experience }} years of experience and good hands on web technologies such as PHP, mySQL, HTML5, CSS, JQUERY, & JS etc. Love to learn new technology and take the challenge to do remarkable application. A good self learner, expertise in various PHP frameworks such as Zend, Codeignitor, CakePHP, Yii frameworks.Good hands on customizing open source application like Joomla, Wordpress, Magento, SugarCRM etc. Good hands on solving webs and server side application technical issues.</p>
         
            <p style=\"text-align:justify; font-size:15px\">Have experience in handling onsite and offshore team and ability to handle more team members.Good experience using project management and methodology tools like Jira and Scrum etc. Experience in reporting to the Top Management Members. Good hands on unit testing.</p>
        </div>
        <div class=\"col-lg-8 col-lg-offset-2 text-center\">
            <a href=\"https://docs.google.com/document/d/1YDyNS2srJ26RfaRiyuY2I_PYm9_C2hCHQFDw9BVVt7Y/edit?usp=sharing\" target=\"_blank\" class=\"btn btn-lg btn-outline\">
                <i class=\"fa fa-download\"></i> Download Resume
            </a>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\liveoctober/themes/jacoweb-freelance/partials/about.htm", "");
    }
}
