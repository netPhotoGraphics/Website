<?php
/**
 *
 * @author Stephen Billard (sbillard)
 *
 * @package plugins/npgAnalytics
 * @pluginCategory netphotographics
 */
$plugin_is_filter = 9 | THEME_PLUGIN;
$plugin_description = gettext('Outputs a script to invoke Google Analytics.');

function putAnalytics() {
	?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109862535-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-109862535-3');
	</script>
	<?php
}

npgFilters::register('theme_head', 'putAnalytics');
?>
