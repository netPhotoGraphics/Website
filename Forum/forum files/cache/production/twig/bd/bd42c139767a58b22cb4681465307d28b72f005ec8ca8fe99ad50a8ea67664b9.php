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

/* @vse_scrollpage/event/overall_footer_after.html */
class __TwigTemplate_8a1a6a31b4ce9c81e271426749665c6817370884685711cefb9cf46d4bfc7b1c extends \Twig\Template
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
        echo "<div class=\"scroll-page\">
\t<i class=\"scroll-up\"></i>
\t<i class=\"scroll-down\"></i>
</div>

<script>

(function(\$) { // Avoid conflicts with other libraries

'use strict';

\$(function() {
\tvar settings = {
\t\t\tmin: 150,
\t\t\tscrollSpeed: 400
\t\t},
\t\tbutton = \$('.scroll-page'),
\t\tbuttonHidden = true;

\t\$(window).scroll(function() {
\t\tvar pos = \$(this).scrollTop();
\t\tif (pos > settings.min && buttonHidden) {
\t\t\tbutton.stop(true, true).fadeIn();
\t\t\tbuttonHidden = false;
\t\t} else if(pos <= settings.min && !buttonHidden) {
\t\t\tbutton.stop(true, true).fadeOut();
\t\t\tbuttonHidden = true;
\t\t}
\t});

\tvar scrollPage = function() {
\t\t\$('html, body').animate({
\t\t\tscrollTop: (\$(this).hasClass('scroll-up')) ? 0 : \$(document).height()
\t\t}, settings.scrollSpeed);
\t};

\t\$('.scroll-page > i').on('click touchstart', scrollPage);
});

})(jQuery);

</script>
";
    }

    public function getTemplateName()
    {
        return "@vse_scrollpage/event/overall_footer_after.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@vse_scrollpage/event/overall_footer_after.html", "");
    }
}
