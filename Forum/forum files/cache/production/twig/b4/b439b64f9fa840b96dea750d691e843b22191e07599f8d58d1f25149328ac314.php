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

/* acp_authforurl.html */
class __TwigTemplate_e1248cb1f347fbe6c92eb2c46118fdf6e057b56d4d2752a3ed3957ea972c0e8e extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_authforurl.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h1>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("AFU_ACP_TITLE");
        echo "</h1>

";
        // line 5
        if (($context["ERRORS"] ?? null)) {
            // line 6
            echo "\t<div class=\"errorbox\"><h3>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 7
            echo ($context["ERRORS"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 10
        echo "
<form id=\"acp_afu\" method=\"post\" action=\"";
        // line 11
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 13
        echo $this->extensions['phpbb\template\twig\extension']->lang("AFU_CONFIG");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label id=\"authforurl_img_bbcode\" for=\"authforurl_img_bbcode\">";
        // line 15
        echo $this->extensions['phpbb\template\twig\extension']->lang("AFU_IMAGE_BBCODE");
        echo "</label><br>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AFU_IMAGE_BBCODE_EXPLAIN");
        echo "</dt>
\t\t\t<dd><input type=\"radio\" class=\"radio\" name=\"authforurl_img_bbcode\" value=\"1\" ";
        // line 16
        if (($context["AFU_BBCODE"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo " &nbsp;
\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"authforurl_img_bbcode\" value=\"0\" ";
        // line 17
        if ( !($context["AFU_BBCODE"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label id=\"authforurl_email\" for=\"authforurl_email\">";
        // line 20
        echo $this->extensions['phpbb\template\twig\extension']->lang("AFU_EMAIL");
        echo "</label><br>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AFU_EMAIL_EXPLAIN");
        echo "</dt>
\t\t\t<dd><input type=\"radio\" class=\"radio\" name=\"authforurl_email\" value=\"1\" ";
        // line 21
        if (($context["AFU_EMAIL"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo " &nbsp;
\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"authforurl_email\" value=\"0\" ";
        // line 22
        if ( !($context["AFU_EMAIL"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label id=\"authforurl_deny_post\" for=\"authforurl_deny_post\">";
        // line 25
        echo $this->extensions['phpbb\template\twig\extension']->lang("AFU_DENY_POST");
        echo "</label><br>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AFU_DENY_POST_EXPLAIN");
        echo "</dt>
\t\t\t<dd><input type=\"radio\" class=\"radio\" name=\"authforurl_deny_post\" value=\"1\" ";
        // line 26
        if (($context["AFU_DENY_POST"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo "/> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo " &nbsp;
\t\t\t\t<input type=\"radio\" class=\"radio\" name=\"authforurl_deny_post\" value=\"0\" ";
        // line 27
        if ( !($context["AFU_DENY_POST"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</dd>
\t\t</dl>\t\t
\t\t<dl>
\t\t\t<dt><label for=\"authforurl_tlds\">";
        // line 30
        echo $this->extensions['phpbb\template\twig\extension']->lang("AFU_TLDS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("AFU_TLDS_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><textarea name=\"authforurl_tlds\" rows=\"10\" cols=\"60\" style=\"width: 95%;\">";
        // line 31
        echo ($context["AFU_TLDS"] ?? null);
        echo "</textarea></dd>
\t\t</dl>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 34
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 35
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" />
\t\t";
        // line 36
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t\t</p>
\t</fieldset>
</form>
";
        // line 40
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_authforurl.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_authforurl.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 40,  176 => 36,  172 => 35,  168 => 34,  162 => 31,  155 => 30,  145 => 27,  137 => 26,  131 => 25,  121 => 22,  113 => 21,  107 => 20,  97 => 17,  89 => 16,  83 => 15,  78 => 13,  73 => 11,  70 => 10,  64 => 7,  59 => 6,  57 => 5,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_authforurl.html", "");
    }
}
