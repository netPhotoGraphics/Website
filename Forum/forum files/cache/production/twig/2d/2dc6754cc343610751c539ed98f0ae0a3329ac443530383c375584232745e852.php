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

/* acp_users_overview.html */
class __TwigTemplate_de4f7cd9bafc56abc48590ab3f622c6ee5824340309809c64503df5e9dcc99a2 extends \Twig\Template
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
        echo "<form id=\"user_overview\" method=\"post\" action=\"";
        echo ($context["U_ACTION"] ?? null);
        echo "\">

<fieldset>
\t<legend>";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_USER_OVERVIEW");
        echo "</legend>
<dl>
\t<dt><label for=\"user\">";
        // line 6
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NAME_CHARS_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"text\" id=\"user\" name=\"user\" value=\"";
        // line 7
        echo ($context["USER"] ?? null);
        echo "\" /></dd>
\t";
        // line 8
        if (($context["U_SWITCH_PERMISSIONS"] ?? null)) {
            echo "<dd>[ <a href=\"";
            echo ($context["U_SWITCH_PERMISSIONS"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USE_PERMISSIONS");
            echo "</a> ]</dd>";
        }
        // line 9
        echo "</dl>
";
        // line 10
        if (($context["S_USER_INACTIVE"] ?? null)) {
            // line 11
            echo "<dl>
\t<dt><label>";
            // line 12
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_IS_INACTIVE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t<dd><strong>";
            // line 13
            echo ($context["USER_INACTIVE_REASON"] ?? null);
            echo "</strong></dd>
</dl>
";
        }
        // line 16
        echo "<dl>
\t<dt><label>";
        // line 17
        echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTERED");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><strong>";
        // line 18
        echo ($context["USER_REGISTERED"] ?? null);
        echo "</strong></dd>
</dl>
";
        // line 20
        if (($context["S_USER_IP"] ?? null)) {
            // line 21
            echo "<dl>
\t<dt><label>";
            // line 22
            echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTERED_IP");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t<dd><a href=\"";
            // line 23
            echo ($context["U_SHOW_IP"] ?? null);
            echo "\">";
            echo ($context["REGISTERED_IP"] ?? null);
            echo "</a></dd>
\t<dd>[ <a href=\"";
            // line 24
            echo ($context["U_WHOIS"] ?? null);
            echo "\" onclick=\"popup(this.href, 700, 500, '_whois'); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WHOIS");
            echo "</a> ]</dd>
</dl>
";
        }
        // line 27
        echo "<dl>
\t<dt><label>";
        // line 28
        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><strong>";
        // line 29
        echo ($context["USER_LASTACTIVE"] ?? null);
        echo "</strong></dd>
</dl>
<dl>
\t<dt><label>";
        // line 32
        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd>
\t\t<strong>
\t\t\t";
        // line 35
        if ((($context["USER_HAS_POSTS"] ?? null) && ($context["U_SEARCH_USER"] ?? null))) {
            // line 36
            echo "\t\t\t\t<a href=\"";
            echo ($context["U_SEARCH_USER"] ?? null);
            echo "\">";
            echo ($context["USER_POSTS"] ?? null);
            echo "</a>
\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t";
            echo ($context["USER_POSTS"] ?? null);
            echo "
\t\t\t";
        }
        // line 40
        echo "\t\t</strong>
\t\t";
        // line 41
        if ((($context["POSTS_IN_QUEUE"] ?? null) && ($context["U_MCP_QUEUE"] ?? null))) {
            // line 42
            echo "\t\t\t(<a href=\"";
            echo ($context["U_MCP_QUEUE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_IN_QUEUE");
            echo "</a>)
\t\t";
        } elseif (        // line 43
($context["POSTS_IN_QUEUE"] ?? null)) {
            // line 44
            echo "\t\t\t(";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_IN_QUEUE");
            echo ")
\t\t";
        }
        // line 46
        echo "\t</dd>
</dl>
<dl>
\t<dt><label>";
        // line 49
        echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><strong>";
        // line 50
        echo ($context["USER_WARNINGS"] ?? null);
        echo "</strong></dd>
</dl>
<dl>
\t<dt><label for=\"user_founder\">";
        // line 53
        echo $this->extensions['phpbb\template\twig\extension']->lang("FOUNDER");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FOUNDER_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" name=\"user_founder\" value=\"1\"";
        // line 54
        if (($context["S_USER_FOUNDER"] ?? null)) {
            echo " id=\"user_founder\" checked=\"checked\"";
        }
        if ( !($context["S_FOUNDER"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"user_founder\" value=\"0\"";
        // line 55
        if ( !($context["S_USER_FOUNDER"] ?? null)) {
            echo " id=\"user_founder\" checked=\"checked\"";
        }
        if ( !($context["S_FOUNDER"] ?? null)) {
            echo " disabled=\"disabled\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"user_email\">";
        // line 58
        echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><input class=\"text medium\" type=\"email\" id=\"user_email\" name=\"user_email\" value=\"";
        // line 59
        echo ($context["USER_EMAIL"] ?? null);
        echo "\" autocomplete=\"off\" /></dd>
</dl>
<dl>
\t<dt><label for=\"new_password\">";
        // line 62
        echo $this->extensions['phpbb\template\twig\extension']->lang("NEW_PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CHANGE_PASSWORD_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"password\" id=\"new_password\" name=\"new_password\" value=\"\" autocomplete=\"off\" /></dd>
</dl>
<dl>
\t<dt><label for=\"password_confirm\">";
        // line 66
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_PASSWORD");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM_PASSWORD_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"password\" id=\"password_confirm\" name=\"password_confirm\" value=\"\" autocomplete=\"off\" /></dd>
</dl>
";
        // line 69
        // line 70
        echo "
<p class=\"quick\">
\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
        // line 72
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />
\t<input type=\"hidden\" name=\"action\" value=\"\" />
\t";
        // line 74
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</p>

</fieldset>
</form>

";
        // line 80
        if (( !($context["S_USER_FOUNDER"] ?? null) || ($context["S_FOUNDER"] ?? null))) {
            // line 81
            echo "
\t<script>
\t// <![CDATA[

\t\tfunction display_reason(option)
\t\t{
\t\t\tif (option != 'banuser' && option != 'banemail' && option != 'banip')
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('reasons', -1);
\t\t\t\treturn;
\t\t\t}

\t\t\tphpbb.toggleDisplay('reasons', 1);

\t\t\telement = document.getElementById('user_quick_tools').ban_reason;

\t\t\tif (element.value && element.value != '";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("USER_ADMIN_BAN_NAME_REASON"), "js");
            echo "' && element.value != '";
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("USER_ADMIN_BAN_EMAIL_REASON"), "js");
            echo "' && element.value != '";
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("USER_ADMIN_BAN_IP_REASON"), "js");
            echo "')
\t\t\t{
\t\t\t\treturn;
\t\t\t}

\t\t\tif (option == 'banuser')
\t\t\t{
\t\t\t\telement.value = '";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("USER_ADMIN_BAN_NAME_REASON"), "js");
            echo "';
\t\t\t}
\t\t\telse if (option == 'banemail')
\t\t\t{
\t\t\t\telement.value = '";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("USER_ADMIN_BAN_EMAIL_REASON"), "js");
            echo "';
\t\t\t}
\t\t\telse if (option == 'banip')
\t\t\t{
\t\t\t\telement.value = '";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("USER_ADMIN_BAN_IP_REASON"), "js");
            echo "';
\t\t\t}
\t\t}

\t// ]]>
\t</script>

\t<form id=\"user_quick_tools\" method=\"post\" action=\"";
            // line 119
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 122
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_TOOLS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"quicktools\">";
            // line 124
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_TOOLS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"quicktools\" name=\"action\" onchange=\"display_reason(this.options[this.selectedIndex].value);\">";
            // line 125
            echo ($context["S_ACTION_OPTIONS"] ?? null);
            echo "</select></dd>
\t</dl>
\t<div style=\"display: none;\" id=\"reasons\">
\t\t<dl>
\t\t\t<dt><label for=\"ban_reason\">";
            // line 129
            echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_REASON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input name=\"ban_reason\" type=\"text\" class=\"text medium\" maxlength=\"3000\" id=\"ban_reason\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"ban_give_reason\">";
            // line 133
            echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_GIVE_REASON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input name=\"ban_give_reason\" type=\"text\" class=\"text medium\" maxlength=\"3000\" id=\"ban_give_reason\" /></dd>
\t\t</dl>
\t</div>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
            // line 139
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t\t";
            // line 140
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</p>

\t</fieldset>

\t</form>

\t";
            // line 147
            if ( !($context["S_OWN_ACCOUNT"] ?? null)) {
                // line 148
                echo "\t\t<form id=\"user_delete\" method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 150
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_USER");
                echo "</legend>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete_type\">";
                // line 152
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_USER");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label><br /><span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_USER_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t";
                // line 154
                if (($context["USER_HAS_POSTS"] ?? null)) {
                    // line 155
                    echo "\t\t\t\t\t\t<select id=\"delete_type\" name=\"delete_type\"><option class=\"sep\" value=\"\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_OPTION");
                    echo "</option><option value=\"retain\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("RETAIN_POSTS");
                    echo "</option><option value=\"remove\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POSTS");
                    echo "</option></select>
\t\t\t\t\t";
                } else {
                    // line 157
                    echo "\t\t\t\t\t\t";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("USER_NO_POSTS_TO_DELETE");
                    echo "<input type=\"hidden\" id=\"delete_type\" name=\"delete_type\" value=\"retain\" />
\t\t\t\t\t";
                }
                // line 159
                echo "\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<p class=\"quick\">
\t\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
                // line 162
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
                echo "\" />
\t\t\t\t\t<input type=\"hidden\" name=\"delete\" value=\"1\" />
\t\t\t\t\t";
                // line 164
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</fieldset>
\t\t</form>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "acp_users_overview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 164,  434 => 162,  429 => 159,  423 => 157,  413 => 155,  411 => 154,  403 => 152,  398 => 150,  392 => 148,  390 => 147,  380 => 140,  376 => 139,  366 => 133,  358 => 129,  351 => 125,  346 => 124,  341 => 122,  335 => 119,  325 => 112,  318 => 108,  311 => 104,  297 => 97,  279 => 81,  277 => 80,  268 => 74,  263 => 72,  259 => 70,  258 => 69,  249 => 66,  239 => 62,  233 => 59,  228 => 58,  215 => 55,  204 => 54,  197 => 53,  191 => 50,  186 => 49,  181 => 46,  175 => 44,  173 => 43,  166 => 42,  164 => 41,  161 => 40,  155 => 38,  147 => 36,  145 => 35,  138 => 32,  132 => 29,  127 => 28,  124 => 27,  116 => 24,  110 => 23,  105 => 22,  102 => 21,  100 => 20,  95 => 18,  90 => 17,  87 => 16,  81 => 13,  76 => 12,  73 => 11,  71 => 10,  68 => 9,  60 => 8,  56 => 7,  49 => 6,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_users_overview.html", "");
    }
}
