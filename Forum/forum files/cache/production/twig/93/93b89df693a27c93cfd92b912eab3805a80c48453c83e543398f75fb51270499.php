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

/* acp_database.html */
class __TwigTemplate_5ab5a166601a68ce1e0ecc6cfc6cb4db65b1d783f0fe60a5ba6f54998cd724d1 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_database.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((($context["MODE"] ?? null) == "restore")) {
            // line 6
            echo "\t<h1>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_RESTORE");
            echo "</h1>

\t<p>";
            // line 8
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_RESTORE_EXPLAIN");
            echo "</p>

\t";
            // line 10
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "files", [], "any", false, false, false, 10))) {
                // line 11
                echo "\t<form id=\"acp_backup\" method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\">

\t<fieldset>
\t\t<legend>";
                // line 14
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_OPTIONS");
                echo "</legend>
\t<dl>
\t\t<dt><label for=\"file\">";
                // line 16
                echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_FILE");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label></dt>
\t\t<dd><select id=\"file\" name=\"file\" size=\"10\">";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "files", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["files"]) {
                    echo "<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["files"], "FILE", [], "any", false, false, false, 17);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, $context["files"], "S_FIRST_ROW", [], "any", false, false, false, 17)) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["files"], "NAME", [], "any", false, false, false, 17);
                    echo "</option>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['files'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</select></dd>
\t</dl>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 21
                echo $this->extensions['phpbb\template\twig\extension']->lang("START_RESTORE");
                echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"submit\" id=\"delete\" name=\"delete\" value=\"";
                // line 22
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_BACKUP");
                echo "\" />&nbsp;
\t</p>
\t";
                // line 24
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t</fieldset>
\t</form>
\t";
            } else {
                // line 28
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 29
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_NO_ITEMS");
                echo "</p>
\t\t</div>
\t";
            }
            // line 32
            echo "
";
        } else {
            // line 34
            echo "\t<h1>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_BACKUP");
            echo "</h1>

\t<p>";
            // line 36
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_BACKUP_EXPLAIN");
            echo "</p>

\t<script>
\t// <![CDATA[

\t\tfunction selector(bool)
\t\t{
\t\t\tvar table = document.getElementById('table');

\t\t\tfor (var i = 0; i < table.options.length; i++)
\t\t\t{
\t\t\t\ttable.options[i].selected = bool;
\t\t\t}
\t\t}

\t// ]]>
\t</script>

\t<form id=\"acp_backup\" method=\"post\" action=\"";
            // line 54
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 57
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACKUP_OPTIONS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"type\">";
            // line 59
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACKUP_TYPE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"type\" value=\"full\" id=\"type\" checked=\"checked\" /> ";
            // line 60
            echo $this->extensions['phpbb\template\twig\extension']->lang("FULL_BACKUP");
            echo "</label>
\t\t\t<label><input type=\"radio\" name=\"type\" class=\"radio\" value=\"structure\" /> ";
            // line 61
            echo $this->extensions['phpbb\template\twig\extension']->lang("STRUCTURE_ONLY");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"type\" value=\"data\" /> ";
            // line 62
            echo $this->extensions['phpbb\template\twig\extension']->lang("DATA_ONLY");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"method\">";
            // line 65
            echo $this->extensions['phpbb\template\twig\extension']->lang("FILE_TYPE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd>";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "methods", [], "any", false, false, false, 66));
            foreach ($context['_seq'] as $context["_key"] => $context["methods"]) {
                // line 67
                echo "\t\t<label><input name=\"method\"";
                if (twig_get_attribute($this->env, $this->source, $context["methods"], "S_FIRST_ROW", [], "any", false, false, false, 67)) {
                    echo " id=\"method\" checked=\"checked\"";
                }
                echo " type=\"radio\" class=\"radio\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["methods"], "TYPE", [], "any", false, false, false, 67);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["methods"], "TYPE", [], "any", false, false, false, 67);
                echo "</label>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"table\">";
            // line 71
            echo $this->extensions['phpbb\template\twig\extension']->lang("TABLE_SELECT");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"table\" name=\"table[]\" size=\"10\" multiple=\"multiple\">
\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "tables", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["tables"]) {
                // line 74
                echo "\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tables"], "TABLE", [], "any", false, false, false, 74);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tables"], "TABLE", [], "any", false, false, false, 74);
                echo "</option>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tables'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t</select></dd>
\t\t<dd><a href=\"#\" onclick=\"selector(true); return false;\">";
            // line 77
            echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_ALL");
            echo "</a> :: <a href=\"#\" onclick=\"selector(false); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("DESELECT_ALL");
            echo "</a></dd>
\t</dl>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 82
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SUBMIT_CHANGES");
            echo "</legend>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 84
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 85
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" />
\t\t</p>
\t\t";
            // line 87
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 92
        echo "
";
        // line 93
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_database.html", 93)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_database.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 93,  279 => 92,  271 => 87,  266 => 85,  262 => 84,  257 => 82,  247 => 77,  244 => 76,  233 => 74,  229 => 73,  223 => 71,  218 => 68,  203 => 67,  199 => 66,  194 => 65,  188 => 62,  184 => 61,  180 => 60,  175 => 59,  170 => 57,  164 => 54,  143 => 36,  137 => 34,  133 => 32,  127 => 29,  124 => 28,  117 => 24,  112 => 22,  108 => 21,  86 => 17,  81 => 16,  76 => 14,  69 => 11,  67 => 10,  62 => 8,  56 => 6,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_database.html", "");
    }
}
