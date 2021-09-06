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

/* captcha_recaptcha.html */
class __TwigTemplate_c8af0694620dcfdf79cc6537f3b269b858caca60fd381297777b66b6e99febd1 extends \Twig\Template
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
        if (($context["S_RECAPTCHA_AVAILABLE"] ?? null)) {
            // line 2
            echo "\t<noscript>
\t\t<div>";
            // line 3
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_NOSCRIPT");
            echo "</div>
\t</noscript>
\t";
            // line 5
            $asset_file = ((($context["RECAPTCHA_SERVER"] ?? null) . ".js?onload=phpbbRecaptchaOnLoad&hl=") . $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_LANG"));
            $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->env->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
            }
            $this->env->get_assets_bag()->add_script($asset);            // line 6
            echo "\t";
            // line 7
            echo "\t<div class=\"g-recaptcha\" data-sitekey=\"";
            echo ($context["RECAPTCHA_PUBKEY"] ?? null);
            echo "\" data-callback=\"phpbbRecaptchaOnSubmit\" data-size=\"invisible\" data-tabindex=\"";
            if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "CAPTCHA_TAB_INDEX", [], "any", false, false, false, 7)) {
                echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "CAPTCHA_TAB_INDEX", [], "any", false, false, false, 7);
            } else {
                echo "10";
            }
            echo "\"></div>
";
        } else {
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("RECAPTCHA_NOT_AVAILABLE");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "captcha_recaptcha.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 9,  63 => 7,  61 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "captcha_recaptcha.html", "");
    }
}
