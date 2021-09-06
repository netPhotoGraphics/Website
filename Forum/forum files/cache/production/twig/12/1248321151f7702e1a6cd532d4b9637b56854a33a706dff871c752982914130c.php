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

/* posting_editor.html */
class __TwigTemplate_d4a6b100675283f0f9ee0c4c368e054771c48ced3d23aa9003229f2a87fe4d65 extends \Twig\Template
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
        echo "<fieldset class=\"fields1\">
\t";
        // line 2
        if (($context["ERROR"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR"] ?? null);
            echo "</p>";
        }
        // line 3
        echo "
\t";
        // line 4
        // line 5
        echo "
\t";
        // line 6
        if ((($context["S_SHOW_TOPIC_ICONS"] ?? null) || ($context["S_SHOW_PM_ICONS"] ?? null))) {
            // line 7
            echo "\t<dl>
\t\t<dt><label for=\"icon\">";
            // line 8
            echo $this->extensions['phpbb\template\twig\extension']->lang("ICON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t";
            // line 10
            // line 11
            echo "
\t\t\t<label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\" /> ";
            // line 12
            if (($context["S_SHOW_TOPIC_ICONS"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_TOPIC_ICON");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_PM_ICON");
            }
            echo "</label>
\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topic_icon", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<label for=\"icon-";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ID", [], "any", false, false, false, 13);
                echo "\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ID", [], "any", false, false, false, 13);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ID", [], "any", false, false, false, 13);
                echo "\" ";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "S_ICON_CHECKED", [], "any", false, false, false, 13);
                echo " tabindex=\"1\" /><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_IMG", [], "any", false, false, false, 13);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_WIDTH", [], "any", false, false, false, 13);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_HEIGHT", [], "any", false, false, false, 13);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ALT", [], "any", false, false, false, 13);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["topic_icon"], "ICON_ALT", [], "any", false, false, false, 13);
                echo "\" /></label> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
\t\t\t";
            // line 15
            // line 16
            echo "\t\t</dd>
\t</dl>
\t";
        }
        // line 19
        echo "
\t";
        // line 20
        // line 21
        echo "
\t";
        // line 22
        if (( !($context["S_PRIVMSGS"] ?? null) && ($context["S_DISPLAY_USERNAME"] ?? null))) {
            // line 23
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"username\">";
            // line 24
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
            // line 25
            echo ($context["USERNAME"] ?? null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
        }
        // line 28
        echo "
\t";
        // line 29
        // line 30
        echo "
\t";
        // line 31
        if (((($context["S_POST_ACTION"] ?? null) || ($context["S_PRIVMSGS"] ?? null)) || ($context["S_EDIT_DRAFT"] ?? null))) {
            // line 32
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"subject\">";
            // line 33
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBJECT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t";
            // line 35
            // line 36
            echo "\t\t\t<input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"";
            if (($context["S_NEW_MESSAGE"] ?? null)) {
                echo "120";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo ($context["SUBJECT"] ?? null);
            echo ($context["DRAFT_SUBJECT"] ?? null);
            echo "\" class=\"inputbox autowidth\" />
\t\t\t";
            // line 37
            // line 38
            echo "\t\t</dd>
\t</dl>
\t";
            // line 40
            if ((($context["CAPTCHA_TEMPLATE"] ?? null) && ($context["S_CONFIRM_CODE"] ?? null))) {
                // line 41
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 42
                echo "\t\t";
                $location = (("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . ($context["CAPTCHA_TEMPLATE"] ?? null)) . ""), "posting_editor.html", 42)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 43
                echo "\t";
            }
            // line 44
            echo "\t";
        }
        // line 45
        echo "
\t";
        // line 46
        // line 47
        echo "
\t";
        // line 48
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 48)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 49
        echo "
\t<div id=\"smiley-box\" class=\"smiley-box\">
\t\t";
        // line 51
        // line 52
        echo "\t\t";
        if ((($context["S_SMILIES_ALLOWED"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 52)))) {
            // line 53
            echo "\t\t\t<strong>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SMILIES");
            echo "</strong><br />
\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 55
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "A_SMILEY_CODE", [], "any", false, false, false, 55);
                echo "', true); return false;\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_IMG", [], "any", false, false, false, 55);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_WIDTH", [], "any", false, false, false, 55);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_HEIGHT", [], "any", false, false, false, 55);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_CODE", [], "any", false, false, false, 55);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["smiley"], "SMILEY_DESC", [], "any", false, false, false, 55);
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t";
        }
        // line 58
        echo "\t\t";
        if ((($context["S_SHOW_SMILEY_LINK"] ?? null) && ($context["S_SMILIES_ALLOWED"] ?? null))) {
            // line 59
            echo "\t\t\t<br /><a href=\"";
            echo ($context["U_MORE_SMILIES"] ?? null);
            echo "\" onclick=\"popup(this.href, 750, 350, '_phpbbsmilies'); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MORE_SMILIES");
            echo "</a>
\t\t";
        }
        // line 61
        echo "\t\t";
        // line 62
        echo "\t\t";
        if (($context["BBCODE_STATUS"] ?? null)) {
            // line 63
            echo "\t\t<div class=\"bbcode-status\">
\t\t\t";
            // line 64
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "smiley", [], "any", false, false, false, 64))) {
                echo "<hr />";
            }
            // line 65
            echo "\t\t\t";
            echo ($context["BBCODE_STATUS"] ?? null);
            echo "<br />
\t\t\t";
            // line 66
            if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                // line 67
                echo "\t\t\t\t";
                echo ($context["IMG_STATUS"] ?? null);
                echo "<br />
\t\t\t\t";
                // line 68
                echo ($context["FLASH_STATUS"] ?? null);
                echo "<br />
\t\t\t\t";
                // line 69
                echo ($context["URL_STATUS"] ?? null);
                echo "<br />
\t\t\t";
            }
            // line 71
            echo "\t\t\t";
            echo ($context["SMILIES_STATUS"] ?? null);
            echo "
\t\t</div>
\t\t";
        }
        // line 74
        echo "\t\t";
        // line 75
        echo "\t\t";
        if ((($context["S_EDIT_DRAFT"] ?? null) || ($context["S_DISPLAY_REVIEW"] ?? null))) {
            // line 76
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<hr />";
            }
            // line 77
            echo "\t\t\t";
            if (($context["S_EDIT_DRAFT"] ?? null)) {
                echo "<strong><a href=\"";
                echo ($context["S_UCP_ACTION"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 78
            echo "\t\t\t";
            if (($context["S_DISPLAY_REVIEW"] ?? null)) {
                echo "<strong><a href=\"#review\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 79
            echo "\t\t";
        }
        // line 80
        echo "\t</div>

\t";
        // line 82
        // line 83
        echo "
\t<div id=\"message-box\" class=\"message-box\">
\t\t<textarea ";
        // line 85
        if (((($context["S_UCP_ACTION"] ?? null) &&  !($context["S_PRIVMSGS"] ?? null)) &&  !($context["S_EDIT_DRAFT"] ?? null))) {
            echo "name=\"signature\" id=\"signature\" style=\"height: 9em;\"";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " rows=\"15\" cols=\"76\" tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" class=\"inputbox\">";
        echo ($context["MESSAGE"] ?? null);
        echo ($context["DRAFT_MESSAGE"] ?? null);
        echo ($context["SIGNATURE"] ?? null);
        echo "</textarea>
\t</div>

\t";
        // line 88
        // line 89
        echo "\t</fieldset>

";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "EXTRA_POSTING_OPTIONS", [], "any", false, false, false, 91) == 1)) {
            // line 92
            echo "
\t";
            // line 93
            if ( !($context["S_SHOW_DRAFTS"] ?? null)) {
                // line 94
                echo "\t\t</div>
\t</div>
\t";
            }
            // line 97
            echo "
\t";
            // line 98
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 98) == 1))) {
                // line 99
                echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
                // line 102
                echo ($context["S_HIDDEN_ADDRESS_FIELD"] ?? null);
                echo "
\t\t\t";
                // line 103
                echo ($context["S_HIDDEN_FIELDS"] ?? null);
                echo "
\t\t\t";
                // line 104
                // line 105
                echo "\t\t\t";
                if (($context["S_HAS_DRAFTS"] ?? null)) {
                    echo "<input type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOAD_DRAFT");
                    echo "\" class=\"button2\" onclick=\"load_draft = true;\" />&nbsp; ";
                }
                // line 106
                echo "\t\t\t";
                if (($context["S_SAVE_ALLOWED"] ?? null)) {
                    echo "<input type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SAVE_DRAFT");
                    echo "\" class=\"button2\" />&nbsp; ";
                }
                // line 107
                echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
                echo "\" class=\"button1\"";
                if ( !($context["S_PRIVMSGS"] ?? null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " />&nbsp;
\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                // line 108
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" class=\"button1 default-submit-action\" />&nbsp;

\t\t</fieldset>

\t\t</div>
\t</div>
\t";
            }
            // line 115
            echo "
\t";
            // line 116
            if ((( !($context["S_PRIVMSGS"] ?? null) &&  !($context["S_SHOW_DRAFTS"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 116) == 1))) {
                // line 117
                echo "\t\t<div id=\"tabs\" class=\"tabs sub-panels\" data-show-panel=\"";
                if (($context["SHOW_PANEL"] ?? null)) {
                    echo ($context["SHOW_PANEL"] ?? null);
                } else {
                    echo "options-panel";
                }
                echo "\" role=\"tablist\">
\t\t\t<ul>
\t\t\t\t<li id=\"options-panel-tab\" class=\"tab activetab\"><a href=\"#tabs\" data-subpanel=\"options-panel\" role=\"tab\" aria-controls=\"options-panel\"><span>";
                // line 119
                echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
                echo "</span></a></li>
\t\t\t\t";
                // line 120
                if ((($context["S_SHOW_ATTACH_BOX"] ?? null) && ($context["FILTERS"] ?? null))) {
                    // line 121
                    echo "\t\t\t\t\t<li id=\"attach-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"attach-panel\" role=\"tab\" aria-controls=\"attach-panel\">
\t\t\t\t\t\t\t";
                    // line 123
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                    echo " <strong id=\"file-total-progress\" class=\"file-total-progress\"><strong id=\"file-total-progress-bar\" class=\"file-total-progress-bar\"></strong></strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 127
                echo "\t\t\t\t";
                if ((($context["S_SHOW_POLL_BOX"] ?? null) || ($context["S_POLL_DELETE"] ?? null))) {
                    // line 128
                    echo "\t\t\t\t\t<li id=\"poll-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"poll-panel\" role=\"tab\" aria-controls=\"poll-panel\">";
                    // line 129
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_POLL");
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 132
                echo "\t\t\t\t";
                // line 133
                echo "\t\t\t</ul>
\t\t</div>
\t";
            }
            // line 136
            echo "
\t";
            // line 137
            if (( !($context["S_SHOW_DRAFTS"] ?? null) && ( !twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SIG_EDIT", [], "any", false, false, false, 137) == 1))) {
                // line 138
                echo "\t<div class=\"panel bg3\" id=\"options-panel\">
\t\t<div class=\"inner\">

\t\t<fieldset class=\"fields1\">
\t\t\t";
                // line 142
                // line 143
                echo "\t\t\t";
                if (($context["S_BBCODE_ALLOWED"] ?? null)) {
                    // line 144
                    echo "\t\t\t\t<div><label for=\"disable_bbcode\"><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    echo ($context["S_BBCODE_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_BBCODE");
                    echo "</label></div>
\t\t\t";
                }
                // line 146
                echo "\t\t\t";
                if (($context["S_SMILIES_ALLOWED"] ?? null)) {
                    // line 147
                    echo "\t\t\t\t<div><label for=\"disable_smilies\"><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    echo ($context["S_SMILIES_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_SMILIES");
                    echo "</label></div>
\t\t\t";
                }
                // line 149
                echo "\t\t\t";
                if (($context["S_LINKS_ALLOWED"] ?? null)) {
                    // line 150
                    echo "\t\t\t\t<div><label for=\"disable_magic_url\"><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    echo ($context["S_MAGIC_URL_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLE_MAGIC_URL");
                    echo "</label></div>
\t\t\t";
                }
                // line 152
                echo "\t\t\t";
                if (($context["S_SIG_ALLOWED"] ?? null)) {
                    // line 153
                    echo "\t\t\t\t<div><label for=\"attach_sig\"><input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    echo ($context["S_SIGNATURE_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACH_SIG");
                    echo "</label></div>
\t\t\t";
                }
                // line 155
                echo "\t\t\t";
                if (($context["S_NOTIFY_ALLOWED"] ?? null)) {
                    // line 156
                    echo "\t\t\t\t<div><label for=\"notify\"><input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    echo ($context["S_NOTIFY_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFY_REPLY");
                    echo "</label></div>
\t\t\t";
                }
                // line 158
                echo "\t\t\t";
                if (($context["S_LOCK_TOPIC_ALLOWED"] ?? null)) {
                    // line 159
                    echo "\t\t\t\t<div><label for=\"lock_topic\"><input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    echo ($context["S_LOCK_TOPIC_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_TOPIC");
                    echo "</label></div>
\t\t\t";
                }
                // line 161
                echo "\t\t\t";
                if (($context["S_LOCK_POST_ALLOWED"] ?? null)) {
                    // line 162
                    echo "\t\t\t\t<div><label for=\"lock_post\"><input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    echo ($context["S_LOCK_POST_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST");
                    echo " [";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LOCK_POST_EXPLAIN");
                    echo "]</label></div>
\t\t\t";
                }
                // line 164
                echo "
\t\t\t";
                // line 165
                if (((($context["S_TYPE_TOGGLE"] ?? null) || ($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null)) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 166
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 168
                echo "
\t\t\t";
                // line 169
                if (($context["S_TYPE_TOGGLE"] ?? null)) {
                    // line 170
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_type-0\">";
                    // line 171
                    if (($context["S_EDIT_POST"] ?? null)) {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_TOPIC_AS");
                    }
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>";
                    // line 172
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "topic_type", [], "any", false, false, false, 172));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        echo "<label for=\"topic_type-";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "VALUE", [], "any", false, false, false, 172);
                        echo "\"><input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "VALUE", [], "any", false, false, false, 172);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "VALUE", [], "any", false, false, false, 172);
                        echo "\"";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "S_CHECKED", [], "any", false, false, false, 172);
                        echo " />";
                        echo twig_get_attribute($this->env, $this->source, $context["topic_type"], "L_TOPIC_TYPE", [], "any", false, false, false, 172);
                        echo "</label> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 175
                echo "
\t\t\t";
                // line 176
                if ((($context["S_TOPIC_TYPE_ANNOUNCE"] ?? null) || ($context["S_TOPIC_TYPE_STICKY"] ?? null))) {
                    // line 177
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_time_limit\">";
                    // line 178
                    echo $this->extensions['phpbb\template\twig\extension']->lang("STICK_TOPIC_FOR");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><label for=\"topic_time_limit\"><input type=\"number\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" value=\"";
                    // line 179
                    echo ($context["TOPIC_TIME_LIMIT"] ?? null);
                    echo "\" class=\"inputbox autowidth\" /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DAYS");
                    echo "</label></dd>
\t\t\t\t<dd>";
                    // line 180
                    echo $this->extensions['phpbb\template\twig\extension']->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 183
                echo "
\t\t\t";
                // line 184
                if ((($context["S_SOFTDELETE_ALLOWED"] ?? null) || ($context["S_DELETE_ALLOWED"] ?? null))) {
                    // line 185
                    echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete\">";
                    // line 187
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd><label for=\"delete\"><input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    // line 188
                    echo ($context["S_SOFTDELETE_CHECKED"] ?? null);
                    echo " /> ";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST_WARN");
                    echo "</label></dd>
\t\t\t\t\t";
                    // line 189
                    if ((($context["S_DELETE_ALLOWED"] ?? null) && ($context["S_SOFTDELETE_ALLOWED"] ?? null))) {
                        // line 190
                        echo "\t\t\t\t\t\t<dd><label for=\"delete_permanent\"><input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\" /> ";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST_PERMANENTLY");
                        echo "</label></dd>
\t\t\t\t\t";
                    }
                    // line 192
                    echo "\t\t\t\t</dl>
\t\t\t";
                }
                // line 194
                echo "
\t\t\t";
                // line 195
                if (($context["S_EDIT_REASON"] ?? null)) {
                    // line 196
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"edit_reason\">";
                    // line 197
                    echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    // line 198
                    echo ($context["EDIT_REASON"] ?? null);
                    echo "\" class=\"inputbox\" /></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 201
                echo "\t\t</fieldset>
\t\t";
            }
            // line 203
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  697 => 203,  693 => 201,  687 => 198,  682 => 197,  679 => 196,  677 => 195,  674 => 194,  670 => 192,  664 => 190,  662 => 189,  656 => 188,  651 => 187,  647 => 185,  645 => 184,  642 => 183,  636 => 180,  630 => 179,  625 => 178,  622 => 177,  620 => 176,  617 => 175,  594 => 172,  585 => 171,  582 => 170,  580 => 169,  577 => 168,  573 => 166,  571 => 165,  568 => 164,  558 => 162,  555 => 161,  547 => 159,  544 => 158,  536 => 156,  533 => 155,  525 => 153,  522 => 152,  514 => 150,  511 => 149,  503 => 147,  500 => 146,  492 => 144,  489 => 143,  488 => 142,  482 => 138,  480 => 137,  477 => 136,  472 => 133,  470 => 132,  464 => 129,  461 => 128,  458 => 127,  451 => 123,  447 => 121,  445 => 120,  441 => 119,  431 => 117,  429 => 116,  426 => 115,  416 => 108,  407 => 107,  400 => 106,  393 => 105,  392 => 104,  388 => 103,  384 => 102,  379 => 99,  377 => 98,  374 => 97,  369 => 94,  367 => 93,  364 => 92,  362 => 91,  358 => 89,  357 => 88,  343 => 85,  339 => 83,  338 => 82,  334 => 80,  331 => 79,  324 => 78,  315 => 77,  310 => 76,  307 => 75,  305 => 74,  298 => 71,  293 => 69,  289 => 68,  284 => 67,  282 => 66,  277 => 65,  273 => 64,  270 => 63,  267 => 62,  265 => 61,  257 => 59,  254 => 58,  251 => 57,  232 => 55,  228 => 54,  223 => 53,  220 => 52,  219 => 51,  215 => 49,  203 => 48,  200 => 47,  199 => 46,  196 => 45,  193 => 44,  190 => 43,  177 => 42,  173 => 41,  171 => 40,  167 => 38,  166 => 37,  154 => 36,  153 => 35,  147 => 33,  144 => 32,  142 => 31,  139 => 30,  138 => 29,  135 => 28,  129 => 25,  124 => 24,  121 => 23,  119 => 22,  116 => 21,  115 => 20,  112 => 19,  107 => 16,  106 => 15,  103 => 14,  76 => 13,  68 => 12,  65 => 11,  64 => 10,  58 => 8,  55 => 7,  53 => 6,  50 => 5,  49 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_editor.html", "");
    }
}
