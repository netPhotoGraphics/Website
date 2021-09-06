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

/* acp_ext_details.html */
class __TwigTemplate_24e1c932da11d6301dca053b4bc5d8ddcd6fca6c7a4562310c7ad7261fb6dae1 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_ext_details.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

\t<a href=\"";
        // line 5
        echo ($context["U_BACK"] ?? null);
        echo "\" style=\"float: ";
        echo ($context["S_CONTENT_FLOW_END"] ?? null);
        echo ";\">&laquo; ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
        echo "</a>

\t<h1>";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXTENSIONS_ADMIN");
        echo "</h1>

\t";
        // line 9
        if (($context["S_VERSIONCHECK"] ?? null)) {
            // line 10
            echo "\t\t";
            if (($context["S_VERSIONCHECK_FAIL"] ?? null)) {
                // line 11
                echo "\t\t<div class=\"errorbox notice\">
\t\t\t<p>";
                // line 12
                echo $this->extensions['phpbb\template\twig\extension']->lang("VERSIONCHECK_FAIL");
                echo "</p>
\t\t\t<p>";
                // line 13
                echo ($context["VERSIONCHECK_FAIL_REASON"] ?? null);
                echo "</p>
\t\t\t<p><a href=\"";
                // line 14
                echo ($context["U_VERSIONCHECK_FORCE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a></p>
\t\t</div>
\t\t";
            } else {
                // line 17
                echo "\t\t<div class=\"";
                if (($context["S_UP_TO_DATE"] ?? null)) {
                    echo "successbox";
                } else {
                    echo "errorbox";
                }
                echo "\">
\t\t\t<p>";
                // line 18
                echo ($context["UP_TO_DATE_MSG"] ?? null);
                echo " - <a href=\"";
                echo ($context["U_VERSIONCHECK_FORCE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VERSIONCHECK_FORCE_UPDATE");
                echo "</a></p>
\t\t</div>
\t\t";
            }
            // line 21
            echo "\t";
        }
        // line 22
        // line 23
        echo "
\t<fieldset>
\t\t<legend>";
        // line 25
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXT_DETAILS");
        echo "</legend>
\t\t";
        // line 26
        if (($context["META_DISPLAY_NAME"] ?? null)) {
            // line 27
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 28
            echo $this->extensions['phpbb\template\twig\extension']->lang("DISPLAY_NAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><strong id=\"meta_display_name\">";
            // line 29
            echo ($context["META_DISPLAY_NAME"] ?? null);
            echo "</strong></dd>
\t\t</dl>
\t\t";
        }
        // line 32
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("CLEAN_NAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><strong id=\"meta_name\">";
        // line 34
        echo ($context["META_NAME"] ?? null);
        echo "</strong></dd>
\t\t</dl>
\t\t";
        // line 36
        if (($context["META_DESCRIPTION"] ?? null)) {
            // line 37
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 38
            echo $this->extensions['phpbb\template\twig\extension']->lang("DESCRIPTION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><span id=\"meta_description\">";
            // line 39
            echo ($context["META_DESCRIPTION"] ?? null);
            echo "</span></dd>
\t\t</dl>
\t\t";
        }
        // line 42
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 43
        echo $this->extensions['phpbb\template\twig\extension']->lang("VERSION");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><span id=\"meta_version\">";
        // line 44
        echo ($context["META_VERSION"] ?? null);
        echo "</span></dd>
\t\t</dl>
\t\t";
        // line 46
        if (($context["META_HOMEPAGE"] ?? null)) {
            // line 47
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 48
            echo $this->extensions['phpbb\template\twig\extension']->lang("HOMEPAGE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><strong id=\"meta_homepage\"><a href=\"";
            // line 49
            echo ($context["META_HOMEPAGE"] ?? null);
            echo "\">";
            echo ($context["META_HOMEPAGE"] ?? null);
            echo "</a></strong></dd>
\t\t</dl>
\t\t";
        }
        // line 52
        echo "\t\t";
        if (($context["META_TIME"] ?? null)) {
            // line 53
            echo "\t\t<dl>
\t\t\t<dt><label>";
            // line 54
            echo $this->extensions['phpbb\template\twig\extension']->lang("TIME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><span id=\"meta_time\">";
            // line 55
            echo ($context["META_TIME"] ?? null);
            echo "</span></dd>
\t\t</dl>
\t\t";
        }
        // line 58
        echo "\t\t<dl>
\t\t\t<dt><label>";
        // line 59
        echo $this->extensions['phpbb\template\twig\extension']->lang("LICENSE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><span id=\"meta_license\">";
        // line 60
        echo ($context["META_LICENSE"] ?? null);
        echo "</span></dd>
\t\t</dl>
\t</fieldset>

\t";
        // line 64
        if ((($context["S_VERSIONCHECK"] ?? null) &&  !($context["S_UP_TO_DATE"] ?? null))) {
            // line 65
            echo "\t<fieldset>
\t\t<legend>";
            // line 66
            echo $this->extensions['phpbb\template\twig\extension']->lang("LATEST_VERSION");
            echo "</legend>
\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "updates_available", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["updates_available"]) {
                // line 68
                echo "\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 70
                echo $this->extensions['phpbb\template\twig\extension']->lang("VERSION");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong>";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["updates_available"], "current", [], "any", false, false, false, 71);
                echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
                // line 73
                if (twig_get_attribute($this->env, $this->source, $context["updates_available"], "download", [], "any", false, false, false, 73)) {
                    // line 74
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 75
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD_LATEST");
                    echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["updates_available"], "download", [], "any", false, false, false, 76);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD");
                    echo " ";
                    echo ($context["META_NAME"] ?? null);
                    echo " ";
                    echo ($context["LATEST_VERSION"] ?? null);
                    echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 79
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["updates_available"], "announcement", [], "any", false, false, false, 79)) {
                    // line 80
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 81
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ANNOUNCEMENT_TOPIC");
                    echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["updates_available"], "announcement", [], "any", false, false, false, 82);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("RELEASE_ANNOUNCEMENT");
                    echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 85
                echo "\t\t</fieldset>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['updates_available'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t</fieldset>
\t";
        }
        // line 89
        echo "
\t";
        // line 90
        if ((($context["META_REQUIRE_PHPBB"] ?? null) || ($context["META_REQUIRE_PHP"] ?? null))) {
            // line 91
            echo "\t<fieldset>
\t\t<legend>";
            // line 92
            echo $this->extensions['phpbb\template\twig\extension']->lang("REQUIREMENTS");
            echo "</legend>
\t\t";
            // line 93
            if (($context["META_REQUIRE_PHPBB"] ?? null)) {
                // line 94
                echo "\t\t<dl";
                if (($context["META_REQUIRE_PHPBB_FAIL"] ?? null)) {
                    echo " class=\"requirements_not_met\"";
                }
                echo ">
\t\t\t<dt><label>";
                // line 95
                echo $this->extensions['phpbb\template\twig\extension']->lang("PHPBB_VERSION");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><span id=\"require_phpbb\">";
                // line 96
                echo ($context["META_REQUIRE_PHPBB"] ?? null);
                echo "</span></dd>
\t\t</dl>
\t\t";
            }
            // line 99
            echo "\t\t";
            if (($context["META_REQUIRE_PHP"] ?? null)) {
                // line 100
                echo "\t\t<dl";
                if (($context["META_REQUIRE_PHP_FAIL"] ?? null)) {
                    echo " class=\"requirements_not_met\"";
                }
                echo ">
\t\t\t<dt><label>";
                // line 101
                echo $this->extensions['phpbb\template\twig\extension']->lang("PHP_VERSION");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><span id=\"require_php\">";
                // line 102
                echo ($context["META_REQUIRE_PHP"] ?? null);
                echo "</span></dd>
\t\t</dl>
\t\t";
            }
            // line 105
            echo "\t</fieldset>
\t";
        }
        // line 107
        echo "
\t<fieldset>
\t\t<legend>";
        // line 109
        echo $this->extensions['phpbb\template\twig\extension']->lang("AUTHOR_INFORMATION");
        echo "</legend>
\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "meta_authors", [], "any", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["meta_authors"]) {
            // line 111
            echo "\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 113
            echo $this->extensions['phpbb\template\twig\extension']->lang("AUTHOR_NAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["meta_authors"], "AUTHOR_NAME", [], "any", false, false, false, 114);
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            // line 116
            if (twig_get_attribute($this->env, $this->source, $context["meta_authors"], "AUTHOR_EMAIL", [], "any", false, false, false, 116)) {
                // line 117
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 118
                echo $this->extensions['phpbb\template\twig\extension']->lang("AUTHOR_EMAIL");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"mailto:";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["meta_authors"], "AUTHOR_EMAIL", [], "any", false, false, false, 119);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["meta_authors"], "AUTHOR_EMAIL", [], "any", false, false, false, 119);
                echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 122
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["meta_authors"], "AUTHOR_HOMEPAGE", [], "any", false, false, false, 122)) {
                // line 123
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 124
                echo $this->extensions['phpbb\template\twig\extension']->lang("AUTHOR_HOMEPAGE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong><a href=\"";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["meta_authors"], "AUTHOR_HOMEPAGE", [], "any", false, false, false, 125);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["meta_authors"], "AUTHOR_HOMEPAGE", [], "any", false, false, false, 125);
                echo "</a></strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 128
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["meta_authors"], "AUTHOR_ROLE", [], "any", false, false, false, 128)) {
                // line 129
                echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 130
                echo $this->extensions['phpbb\template\twig\extension']->lang("AUTHOR_ROLE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><strong>";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["meta_authors"], "AUTHOR_ROLE", [], "any", false, false, false, 131);
                echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 134
            echo "\t\t</fieldset>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta_authors'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "\t</fieldset>

\t";
        // line 138
        // line 139
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ext_details.html", 139)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ext_details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  457 => 139,  456 => 138,  452 => 136,  445 => 134,  439 => 131,  434 => 130,  431 => 129,  428 => 128,  420 => 125,  415 => 124,  412 => 123,  409 => 122,  401 => 119,  396 => 118,  393 => 117,  391 => 116,  386 => 114,  381 => 113,  377 => 111,  373 => 110,  369 => 109,  365 => 107,  361 => 105,  355 => 102,  350 => 101,  343 => 100,  340 => 99,  334 => 96,  329 => 95,  322 => 94,  320 => 93,  316 => 92,  313 => 91,  311 => 90,  308 => 89,  304 => 87,  297 => 85,  289 => 82,  285 => 81,  282 => 80,  279 => 79,  267 => 76,  263 => 75,  260 => 74,  258 => 73,  253 => 71,  248 => 70,  244 => 68,  240 => 67,  236 => 66,  233 => 65,  231 => 64,  224 => 60,  219 => 59,  216 => 58,  210 => 55,  205 => 54,  202 => 53,  199 => 52,  191 => 49,  186 => 48,  183 => 47,  181 => 46,  176 => 44,  171 => 43,  168 => 42,  162 => 39,  157 => 38,  154 => 37,  152 => 36,  147 => 34,  142 => 33,  139 => 32,  133 => 29,  128 => 28,  125 => 27,  123 => 26,  119 => 25,  115 => 23,  114 => 22,  111 => 21,  101 => 18,  92 => 17,  84 => 14,  80 => 13,  76 => 12,  73 => 11,  70 => 10,  68 => 9,  63 => 7,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_ext_details.html", "");
    }
}
