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
	<meta name="msvalidate.01" content="9DA4AD6AB0D69A6651922EA18FF9BBAD" />
	<meta name="yandex-verification" content="5e9e5bddb8a965ad" />
	<?php
}

npgFilters::register('theme_head', 'putAnalytics');
?>
