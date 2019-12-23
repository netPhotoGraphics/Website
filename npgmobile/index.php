<?php
// force UTF-8 Ø
if (!defined('WEBPATH'))
	die();
?>
<!DOCTYPE html>
<html<?php i18n::htmlLanguageCode(); ?>>
	<head>
		<?php npgFilters::apply('theme_head'); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php
		scriptLoader($_themeroot . '/style.css');
		jqm_loadScripts();
		?>
	</head>

	<body>
		<?php npgFilters::apply('theme_body_open'); ?>

		<div data-role="page" id="mainpage">

			<?php jqm_printMainHeaderNav(); ?>

			<div class="ui-content" role="main">

				<div class="content-primary">
					<img src="<?php echo $_gallery->getSiteLogo(); ?>" />
					<br />
					<?php echo gettext('A multi-media oriented Content Management System'); ?>

					<?php printGalleryDesc(); ?>

				</div>
				<br class="clearall">
				<br />
				<?php if (function_exists('next_news')) { ?>
					<ul data-role="listview" data-inset="true" data-theme="a" class="ui-listview ui-group-theme-a">
						<li data-role="list-divider"><h2><?php echo NEWS_LABEL; ?></h2></li>
						<?php while (next_news()): ?>
							<li>
								<a href="<?php echo html_encode(jqm_getLink()); ?>" title="<?php printBareNewsTitle(); ?>">
									<?php printNewsTitle(); ?> <small>(<?php printNewsDate(); ?>)</small>
								</a>
							</li>
							<?php
						endwhile;
						?>
					</ul>
					<?php
				}
				?>

			</div>
			<div class="content-secondary">
				<?php jqm_printMenusLinks(); ?>
			</div>
		</div><!-- /content -->
		<?php jqm_printBacktoTopLink(); ?>
		<?php jqm_printFooterNav(); ?>

	</div><!-- /page -->

	<?php npgFilters::apply('theme_body_close'); ?>

</body>
</html>
