<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @phpbb_googleanalytics/event/overall_header_stylesheets_after.html */
class __TwigTemplate_65c899d168ca4e56d21abd017dd0d0c3b8bd84d2f8d8d157ddcb07278b8a9cef extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["GOOGLEANALYTICS_ID"] ?? null)) {
            // line 2
            echo "\t";
            // line 3
            echo "\t";
            // line 4
            echo "\t";
            if ((($context["GOOGLEANALYTICS_TAG"] ?? null) == 1)) {
                // line 5
                echo "\t\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=";
                // line 6
                echo ($context["GOOGLEANALYTICS_ID"] ?? null);
                echo "\"></script>
\t\t<script>
\t\t\twindow.dataLayer = window.dataLayer || [];
\t\t\tfunction gtag(){dataLayer.push(arguments);}
\t\t\tgtag('js', new Date());

\t\t\tgtag('config', '";
                // line 12
                echo ($context["GOOGLEANALYTICS_ID"] ?? null);
                echo "', {";
                // line 13
                // line 14
                if (($context["S_REGISTERED_USER"] ?? null)) {
                    echo "'user_id': '";
                    echo ($context["GOOGLEANALYTICS_USER_ID"] ?? null);
                    echo "',";
                }
                // line 15
                if (($context["S_ANONYMIZE_IP"] ?? null)) {
                    echo "'anonymize_ip': true,";
                }
                // line 16
                echo "});
\t\t</script>
\t";
            } else {
                // line 19
                echo "\t\t<script>
\t\t\t(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t\t})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

\t\t\tga('create', '";
                // line 25
                echo ($context["GOOGLEANALYTICS_ID"] ?? null);
                echo "', 'auto');
\t\t\t";
                // line 26
                if (($context["S_REGISTERED_USER"] ?? null)) {
                    echo "ga('set', 'userId', ";
                    echo ($context["GOOGLEANALYTICS_USER_ID"] ?? null);
                    echo ");";
                }
                // line 27
                echo "\t\t\t";
                if (($context["S_ANONYMIZE_IP"] ?? null)) {
                    echo "ga('set', 'anonymizeIp', true);";
                }
                // line 28
                echo "\t\t\t";
                // line 29
                echo "ga('send', 'pageview');
\t\t</script>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@phpbb_googleanalytics/event/overall_header_stylesheets_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  100 => 28,  95 => 27,  89 => 26,  85 => 25,  77 => 19,  72 => 16,  68 => 15,  62 => 14,  61 => 13,  58 => 12,  49 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@phpbb_googleanalytics/event/overall_header_stylesheets_after.html", "");
    }
}
