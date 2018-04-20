<?php

/* C:\xampp\htdocs\liveoctober/plugins/rainlab/googleanalytics/components/tracker/default.htm */
class __TwigTemplate_ddf6a8b17bcea90ab49ca018d7f98828f2002dcb18fd7604779b2137a4c2ae48 extends Twig_Template
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
        echo "<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "trackingId", array()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "domainName", array()), "html", null, true);
        echo "');
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "forceSSL", array())) {
            echo "ga('set', 'forceSSL', true);";
        }
        // line 9
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "anonymizeIp", array())) {
            echo "ga('set', 'anonymizeIp', true);";
        }
        // line 10
        echo "    ga('send', 'pageview');
</script>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\liveoctober/plugins/rainlab/googleanalytics/components/tracker/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  37 => 9,  33 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '{{ __SELF__.trackingId }}', '{{ __SELF__.domainName }}');
    {% if __SELF__.forceSSL %}ga('set', 'forceSSL', true);{% endif %}
    {% if __SELF__.anonymizeIp %}ga('set', 'anonymizeIp', true);{% endif %}
    ga('send', 'pageview');
</script>
", "C:\\xampp\\htdocs\\liveoctober/plugins/rainlab/googleanalytics/components/tracker/default.htm", "");
    }
}
