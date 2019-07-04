<?php

// force UTF-8 Ø
if (getOption('gallery_index')) {
	if ($zenpage = extensionEnabled('zenpage')) {
		$imagereduction = 1 / 2;
	} else {
		$imagereduction = 1;
	}
	Controller::load_zenpage_pages('npgHome.htm');
	require('pages.php');
} else {
	require('gallery.php');
}
?>