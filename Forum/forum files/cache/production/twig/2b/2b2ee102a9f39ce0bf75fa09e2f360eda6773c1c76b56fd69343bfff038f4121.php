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

/* @hifikabin_obscurecontactus/event/overall_footer_teamlink_after.html */
class __TwigTemplate_29d377c6d384cd18e709799c74157ad083f67ff5e472e3548107d81c5b3fb3d4 extends \Twig\Template
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
        if ( !($context["U_CONTACT_US"] ?? null)) {
            // line 2
            echo "<li class=\"rightside\" data-last-responsive=\"true\">
\t<script>
\t\tvar prefix='mailto';
\t\tvar name='";
            // line 5
            echo twig_escape_filter($this->env, ($context["OBSCURECONTACTUS_PREFIX"] ?? null), "js");
            echo "';
\t\tvar url='";
            // line 6
            echo twig_escape_filter($this->env, ($context["OBSCURECONTACTUS_SUFFIX"] ?? null), "js");
            echo "';
\t\tvar subject = '";
            // line 7
            echo twig_escape_filter($this->env, ($context["OBSCURECONTACTUS_SUBJECT"] ?? null), "js");
            echo "';
\t\tvar icon = '<i class=\"icon fa-envelope fa-fw\" aria-hidden=\"true\"></i>'
\t\t\tdocument.write( '<a href=\"' + prefix + ':' + name + '@' + url +
\t\t\t'?subject=' +subject+
\t\t\t'\"TITLE=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["OBSCURECONTACTUS_MOUSEOVER"] ?? null), "js");
            echo "\" role=\"menuitem\">' + icon + 
\t\t\t'";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_US"), "js");
            echo "' + '</a>');
\t</script>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "@hifikabin_obscurecontactus/event/overall_footer_teamlink_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  59 => 11,  52 => 7,  48 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@hifikabin_obscurecontactus/event/overall_footer_teamlink_after.html", "");
    }
}
