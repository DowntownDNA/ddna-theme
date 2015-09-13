<?php

// Quick shortcut to get the right module.

function get_module_by_slug($page_slug) {
	$module = get_page_by_path($page_slug, OBJECT, 'module');
	if ($module) {
		return $module;
	} else {
		return null;
	}
}

function get_districts() {
    $args = array (
		'posts_per_page' => -1,
		'post_type'     => 'district',
		'orderby'     => 'title',
		'order'       => 'DESC'
	);

	$all_districts = new WP_Query($args);

	return $all_districts;
}