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

/* @cleantalk_antispam/event/overall_footer_content_after.html */
class __TwigTemplate_59751f96b950073b4d0d0832da1478b79d594590685d803ea9823eb83ab40eff extends \Twig\Template
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
        $asset_file = "@cleantalk_antispam/cleantalk.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 2
        echo "<!-- Cleantalk -->
<script type=\"text/javascript\">
\t\t\tvar ct_cookie_name = \"ct_checkjs\",
\t\t\t\tct_cookie_value = \"";
        // line 5
        echo twig_escape_filter($this->env, ($context["CT_JS_VALUE"] ?? null), "js");
        echo "\";
</script>
<!--/Cleantalk -->";
    }

    public function getTemplateName()
    {
        return "@cleantalk_antispam/event/overall_footer_content_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  51 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@cleantalk_antispam/event/overall_footer_content_after.html", "");
    }
}
