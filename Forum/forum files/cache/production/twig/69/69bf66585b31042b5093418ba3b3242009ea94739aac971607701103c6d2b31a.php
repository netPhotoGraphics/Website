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

/* posting_topic_review.html */
class __TwigTemplate_baa1cde993ba6f3ccf4fdd8b1a905777254a1f175f00bd54451721c8ab40591d extends \Twig\Template
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
        echo "
<h3 id=\"review\" class=\"review\">
\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data == '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW"), "js");
        echo "'};\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXPAND_VIEW");
        echo "</a></span>
\t";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REVIEW");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " ";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "
</h3>

<div id=\"topicreview\" class=\"topicreview\">
<script>
\tbbcodeEnabled = ";
        // line 9
        echo ($context["S_BBCODE_ALLOWED"] ?? null);
        echo ";
</script>
\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topic_review_row", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["topic_review_row"]) {
            // line 12
            echo "
\t";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "S_IGNORE_POST", [], "any", false, false, false, 13)) {
                // line 14
                echo "\t<div class=\"post bg3 post-ignore\">
\t\t<div class=\"inner\">
\t\t\t";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "L_IGNORE_POST", [], "any", false, false, false, 16);
                echo "
\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 17
$context["topic_review_row"], "S_POST_DELETED", [], "any", false, false, false, 17)) {
                // line 18
                echo "\t<div class=\"post bg3 post-ignore\">
\t\t<div class=\"inner\">
\t\t\t";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "L_DELETE_POST", [], "any", false, false, false, 20);
                echo "
\t";
            } else {
                // line 22
                echo "\t<div class=\"post ";
                if ((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "S_ROW_COUNT", [], "any", false, false, false, 22) % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if ((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 22) == ($context["REPORTED_POST_ID"] ?? null))) {
                    echo " reported";
                }
                echo "\">
\t\t<div class=\"inner\">
\t";
            }
            // line 25
            echo "
\t\t<div class=\"postbody\" id=\"pr";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 26);
            echo "\">
\t\t\t<h3><a href=\"";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MINI_POST", [], "any", false, false, false, 27);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_SUBJECT", [], "any", false, false, false, 27);
            echo "</a></h3>

\t\t\t";
            // line 29
            if (((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POSTER_QUOTE", [], "any", false, false, false, 29) && twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "DECODED_MESSAGE", [], "any", false, false, false, 29)) || twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MCP_DETAILS", [], "any", false, false, false, 29))) {
                // line 30
                echo "\t\t\t<ul class=\"post-buttons\">
\t\t\t";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MCP_DETAILS", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MCP_DETAILS", [], "any", false, false, false, 33);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DETAILS");
                    echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 34
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DETAILS");
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t<li>
\t\t\t";
                }
                // line 38
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POSTER_QUOTE", [], "any", false, false, false, 38) && twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "DECODED_MESSAGE", [], "any", false, false, false, 38))) {
                    // line 39
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#postingbox\" onclick=\"addquote(";
                    // line 40
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 40);
                    echo ", '";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POSTER_QUOTE", [], "any", false, false, false, 40);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("WROTE"), "js");
                    echo "', {post_id:";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 40);
                    echo ",time:";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_TIME", [], "any", false, false, false, 40);
                    echo ",user_id:";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "USER_ID", [], "any", false, false, false, 40);
                    echo "});\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("QUOTE");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_AUTHOR", [], "any", false, false, false, 40);
                    echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 41
                    echo $this->extensions['phpbb\template\twig\extension']->lang("QUOTE");
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_AUTHOR", [], "any", false, false, false, 41);
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
                }
                // line 45
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 47
            echo "
\t\t\t";
            // line 48
            // line 49
            echo "\t\t\t<p class=\"author\">
\t\t\t\t";
            // line 50
            if (($context["S_IS_BOT"] ?? null)) {
                // line 51
                echo "\t\t\t\t\t<span><i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "MINI_POST", [], "any", false, false, false, 51);
                echo "</span></span>
\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "U_MINI_POST", [], "any", false, false, false, 53);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "MINI_POST", [], "any", false, false, false, 53);
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "MINI_POST", [], "any", false, false, false, 54);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo "<strong>";
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_AUTHOR_FULL", [], "any", false, false, false, 57);
            echo "</strong>";
            echo " &raquo; ";
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_DATE", [], "any", false, false, false, 57);
            echo "
\t\t\t</p>
\t\t\t";
            // line 59
            // line 60
            echo "
\t\t\t<div class=\"content\">";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "MESSAGE", [], "any", false, false, false, 61);
            echo "</div>

\t\t\t";
            // line 63
            // line 64
            echo "
\t\t\t";
            // line 65
            if (twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "S_HAS_ATTACHMENTS", [], "any", false, false, false, 65)) {
                // line 66
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>";
                // line 67
                echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "attachment", [], "any", false, false, false, 68));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 69
                    echo "\t\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 69);
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 73
            echo "
\t\t\t";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POSTER_QUOTE", [], "any", false, false, false, 74) && twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "DECODED_MESSAGE", [], "any", false, false, false, 74))) {
                // line 75
                echo "\t\t\t\t<div id=\"message_";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "POST_ID", [], "any", false, false, false, 75);
                echo "\" style=\"display: none;\">";
                echo twig_get_attribute($this->env, $this->source, $context["topic_review_row"], "DECODED_MESSAGE", [], "any", false, false, false, 75);
                echo "</div>
\t\t\t";
            }
            // line 77
            echo "\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</div>

<hr />

<p>
\t<a href=\"";
        // line 86
        if (($context["S_MCP_REPORT"] ?? null)) {
            echo "#report";
        } else {
            echo "#postingbox";
        }
        echo "\" class=\"top\">
\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
        // line 87
        echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
        echo "</span>
\t</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "posting_topic_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 87,  293 => 86,  286 => 81,  277 => 77,  269 => 75,  267 => 74,  264 => 73,  260 => 71,  251 => 69,  247 => 68,  243 => 67,  240 => 66,  238 => 65,  235 => 64,  234 => 63,  229 => 61,  226 => 60,  225 => 59,  213 => 57,  207 => 54,  200 => 53,  194 => 51,  192 => 50,  189 => 49,  188 => 48,  185 => 47,  181 => 45,  172 => 41,  154 => 40,  151 => 39,  148 => 38,  141 => 34,  135 => 33,  132 => 32,  130 => 31,  127 => 30,  125 => 29,  118 => 27,  114 => 26,  111 => 25,  97 => 22,  92 => 20,  88 => 18,  86 => 17,  82 => 16,  78 => 14,  76 => 13,  73 => 12,  69 => 11,  64 => 9,  53 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_topic_review.html", "");
    }
}
