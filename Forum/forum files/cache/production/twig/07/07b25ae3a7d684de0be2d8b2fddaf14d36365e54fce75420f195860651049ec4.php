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

/* @cleantalk_antispam/sfw_die_page.html */
class __TwigTemplate_73aa3180b564b7baf739add65690468a14ad9c54a2475168302a670903b1f5ca extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "@cleantalk_antispam/sfw_die_page.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        $asset_file = "@cleantalk_antispam/sfw_page_style.css";
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
        $this->env->get_assets_bag()->add_stylesheet($asset);        // line 3
        echo "<div class='container'>
    <h1 class='main'>";
        // line 4
        echo ($context["SFW_DIE_NOTICE_IP"] ?? null);
        echo " <a href='https://cleantalk.org/blacklists/";
        echo ($context["REMOTE_ADDRESS"] ?? null);
        echo "' target='_blank'>";
        echo ($context["REMOTE_ADDRESS"] ?? null);
        echo "</a></h1>
    
    <div id='js_info'><br />";
        // line 6
        echo ($context["SFW_DIE_MAKE_SURE_JS_ENABLED"] ?? null);
        echo "</div>
    
    <div id='js_passed'>
    <h3>";
        // line 9
        echo ($context["SFW_DIE_CLICK_TO_PASS"] ?? null);
        echo "</h3>
    <br/>
    <center><a href='";
        // line 11
        echo ($context["REQUEST_URI"] ?? null);
        echo "'><script>document.write(window.location.href)</script></a></center>
    <br /><br />
    <center><p class='js_notice'>";
        // line 13
        echo ($context["SFW_DIE_YOU_WILL_BE_REDIRECTED"] ?? null);
        echo "</p></center>
    </div>
</div>
<script type='text/javascript'>
    var reload_timeout = 3000;
    function set_spamFireWallCookie(cookie_name, cookie_value) {
        var date = new Date;
        date.setDate(date.getDate() + 30);
        document.cookie = cookie_name + \"=\" + escape(cookie_value) + \"; path=/;expires=\" + date.toUTCString() + \";";
        // line 21
        echo twig_escape_filter($this->env, ($context["COOKIE_DOMAIN"] ?? null), "js");
        echo "\";
        return null;
    }
    document.getElementById('js_info').style.display = 'none';
    document.getElementById('js_passed').style.display = 'block';
    setTimeout(function(){
        set_spamFireWallCookie(\"";
        // line 27
        echo ($context["COOKIE_PREFIX"] ?? null);
        echo "ct_sfw_pass_key\",\"";
        echo twig_escape_filter($this->env, ($context["SFW_COOKIE"] ?? null), "js");
        echo "\");
        set_spamFireWallCookie(\"";
        // line 28
        echo ($context["COOKIE_PREFIX"] ?? null);
        echo "ct_sfw_passed\",\"1\");
    }, 50);
    setTimeout(function(){
        window.location.href = window.location.href + (window.location.search === '' ? '?sfw=pass' : '&sfw=pass');
    }, reload_timeout);
</script>
";
        // line 34
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "@cleantalk_antispam/sfw_die_page.html", 34)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "@cleantalk_antispam/sfw_die_page.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 34,  117 => 28,  111 => 27,  102 => 21,  91 => 13,  86 => 11,  81 => 9,  75 => 6,  66 => 4,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@cleantalk_antispam/sfw_die_page.html", "");
    }
}
