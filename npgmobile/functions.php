<?php
//	Required plugins:
require_once(PLUGIN_SERVERPATH . 'image_album_statistics.php');
require_once(PLUGIN_SERVERPATH . 'print_album_menu.php');
require_once(PLUGIN_SERVERPATH . 'menu_manager.php');

/**
 * Prints the scripts needed for the header
 */
function jqm_loadScripts() {
	loadJqueryMobile();
	?>
	<script type = "text/javascript" >
		window.addEventListener('load', function () {
			$("#admin_tb_data a, a.downloadlist_link").attr('data-ajax', 'false');
		}, false);
	</script>
	<?php
	printZDSearchToggleJS();
}

/**
 * Prints the rss links for use in the sidebar/bottom nav
 */
function jqm_printRSSlinks() {
	global $_gallery_page, $_themeroot;
	if (class_exists('RSS')) {
		?>
		<h3><?php echo gettext('RSS'); ?></h3>
		<ul>
			<?php
			// these links must change to ones with rel="external" so they are actually loaded via jquerymobile!
			if (class_exists('CMS') && hasNews()) {
				?>
				<li class="rsslink"><a href="<?php echo html_encode(getRSSLink('News')); ?>" rel="external" data-ajax="false"><?php echo NEWS_LABEL; ?></a></li>
				<?php
			}
			?>
		</ul>
		<?php
	}
}

function getPagesLink() {
	return npgFilters::apply('getLink', rewrite_path(_PAGES_ . '/', "/index.php?p=pages"), 'pages.php', NULL);
}

/**
 * Prints the image/subalbum count for the album loop
 */
function jqm_printMainHeaderNav() {
	global $_gallery_page, $_current_album, $_themeroot;
	?>
	<div data-role="header" data-position="inline" data-theme="b">
		<h1><?php printGalleryTitle(); ?></h1>
		<a href="<?php echo WEBPATH; ?>/" data-icon="home" data-iconpos="notext"><?php echo gettext('Home'); ?></a>
		<?php if (getOption('Allow_search') && $_gallery_page != 'search.php') { ?>
			<a href="<?php echo getCustomPageURL('search'); ?>" data-icon="search" data-iconpos="notext"><?php echo gettext('Search'); ?></a>
		<?php } ?>
		<div data-role="navbar">
			<ul>
				<?php
				if (class_exists('CMS') && hasNews()) {
					?>
					<li><a href="<?php echo getNewsIndexURL(); ?>"><?php echo NEWS_LABEL; ?></a></li>
					<?php
				}
				if (class_exists('CMS') && hasPages()) {
					?>
					<li><a href="<?php echo getCustomPageURL('pagelist'); ?>"><?php echo gettext('Pages'); ?></a></li>
					<?php
				}
				?>
			</ul>
		</div><!-- /navbar -->
	</div><!-- /header -->
	<?php
}

/**
 * Prints the footer
 */
function jqm_printFooterNav() {
	global $_gallery_page, $_current_album;
	?>
	<div id="footer" data-role="footer">
		<?php
		if (function_exists('printLanguageSelector'))
			printLanguageSelector();
		?>
		<ul id="footerlist">
			<li><?php print_SW_Link(); ?> and <a href="http://jquerymobile.com">jQueryMobile</a></li>
		</ul>
		<?php
		$adminlink = '';
		$favoriteslink = '';
		if (npg_loggedin()) {
			$adminlink = '<li><a rel="external" href="' . getAdminLink('admin.php') . '">' . gettext('Admin') . '</a></li>';
		} else {
			if ($_gallery_page != 'register.php' && function_exists('printRegisterURL')) {
				$_linktext = get_language_string(getOption('register_user_page_link'));
				$adminlink = '<li><a rel="external" href="' . html_encode(register_user::getLink()) . '">' . $_linktext . '</a></li>';
			}
		}
		if (function_exists('printFavoritesURL')) {
			$favoriteslink = '<li><a rel="external" href="' . html_encode(getFavoritesURL()) . '">' . gettext('Favorites') . '</a></li>';
		}
		if ($adminlink || $favoriteslink) {
			?>
			<div data-role="navbar">
				<ul id="footernav">
					<?php
					echo $adminlink . $favoriteslink;
					if (function_exists("printUserLogin_out")) {
						echo "<li>";
						printUserLogin_out("", "", 0);
						echo "</li>";
					}
					?>
				</ul>
			</div>
			<!-- /navbar -->
		<?php } ?>
	</div><!-- footer -->
	<?php
}

/**
 * Prints the categories of current article as a unordered html list WITHOUT links
 *
 * @param string $separator A separator to be shown between the category names if you choose to style the list inline
 */
function jqm_printNewsCategories($separator = '', $class = '') {
	$categories = getNewsCategories();
	$catcount = count($categories);
	if ($catcount != 0) {
		echo "<ul class=\"$class\">\n";
		$count = 0;
		foreach ($categories as $cat) {
			$count++;
			$catobj = new Category($cat['titlelink']);
			if ($count >= $catcount) {
				$separator = "";
			}
			echo "<li>" . $catobj->getTitle() . "</li>\n";
		}
		echo "</ul>\n";
	}
}

/**
 * Prints the foldout (sidebar/bottom) menu links
 */
function jqm_printMenusLinks() {
	global $_gallery_page;
	?>
	<div id="collapsible-lists" data-collapsed="false" class="menu">
		<?php
		printCustomMenu('netPhotoGraphics', 'list', '', "menu-active", "submenu", "menu-active", 2);
		?>


	</div>
	<?php
}

function jqm_printBacktoTopLink() {
	return ''; // disabled for now as the jquerymobile cache somehow always link this to the previous page...
	?>
	<a href="#mainpage" data-ajax="false" rel="external" data-role="button" data-icon="arrow-u" data-iconpos="left" data-mini="true" data-inline="true"><?php echo gettext('Back to top'); ?></a>
	<?php
}

/**
 * Prints the link to an news entry
 */
function jqm_getLink() {
	$link = getNewsURL();
	return $link;
}

/**
 * Prints the image/subalbum count for the album loop
 */
function jqm_printImageAlbumCount() {
	$numalb = getNumAlbums();
	$numimg = getNumImages();
	if ($numalb != 0) {
		printf(ngettext("%d album", "%d albums", $numalb), $numalb);
	}
	if ($numalb != 0 && $numimg != 0)
		echo ' / ';
	if ($numimg != 0) {
		printf(ngettext("%d image", "%d images", $numimg), $numimg);
	}
}

/**
 * Prints jQuery JS to enable the toggling of search results of CMS  items
 *
 */
function printZDSearchToggleJS() {
	?>
	<script>
		// <!-- <![CDATA[
		function toggleExtraElements(category, show) {
			if (show) {
				jQuery('.' + category + '_showless').show();
				jQuery('.' + category + '_showmore').hide();
				jQuery('.' + category + '_extrashow').show();
			} else {
				jQuery('.' + category + '_showless').hide();
				jQuery('.' + category + '_showmore').show();
				jQuery('.' + category + '_extrashow').hide();
			}
		}
		// ]]> -->
	</script>
	<?php
}

/**
 * Prints the "Show more results link" for search results for CMS items
 *
 * @param string $option "news" or "pages"
 * @param int $number_to_show how many search results should be shown initially
 */
function printZDSearchShowMoreLink($option, $number_to_show) {
	$option = strtolower($option);
	switch ($option) {
		case "news":
			$num = getNumNews();
			break;
		case "pages":
			$num = getNumPages();
			break;
	}
	if ($num > $number_to_show) {
		?>
		<a class="<?php echo $option; ?>_showmore"href="javascript:toggleExtraElements('<?php echo $option; ?>',true);"><?php echo gettext('Show more results'); ?></a>
		<a class="<?php echo $option; ?>_showless" style="display: none;"	href="javascript:toggleExtraElements('<?php echo $option; ?>',false);"><?php echo gettext('Show fewer results'); ?></a>
		<?php
	}
}

/**
 * Adds the css class necessary for toggling of CMS items search results
 *
 * @param string $option "news" or "pages"
 * @param string $c After which result item the toggling should begin. Here to be passed from the results loop.
 */
function printZDToggleClass($option, $c, $number_to_show) {
	$option = strtolower($option);
	$c = sanitize_numeric($c);
	if ($c > $number_to_show) {
		echo ' class="' . $option . '_extrashow" style="display:none;"';
	}
}

function my_checkPageValidity($request, $gallery_page, $page) {
	switch ($gallery_page) {
		case 'gallery.php':
			$gallery_page = 'index.php'; //	same as an album gallery index
			break;
		case 'news.php':
		case 'album.php':
		case 'search.php':
			break;
		default:
			if ($page != 1) {
				return false;
			}
	}
	return checkPageValidity($request, $gallery_page, $page);
}

function printNPGgitHubLink($link, $title) {
	$title = get_language_string($title);
	?>
	<a href="https://<?php echo GITHUB . '/' . $link; ?>" title="<?php echo gettext($title); ?>"><?php echo gettext($title); ?></a>
	<?php
}

$_current_page_check = 'my_checkPageValidity';
if (!getOption('jQuery_Migrate_theme')) { //	until such time as jquery.mobile works with jQuery 3.3
	setOption('jQuery_Migrate_theme', 1, false);
}