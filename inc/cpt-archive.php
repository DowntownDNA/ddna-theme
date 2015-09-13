<?php

//************************************************************************
//
// These are for modifying the queries on the archive pages. These have
// to be done before the page template loads, hence why they are being
// called in from functions.php
//
// Resource: https://codex.wordpress.org/Plugin_API/Action_Reference/pre_get_posts
//
//************************************************************************



// Speaker Archive

function cpt_archive_building($query) {
	if ($query->is_main_query() && $query->is_post_type_archive('building') && !is_admin()) {
		// $query->set('post_type', 'district');
		// $query->set('meta_key', 'building');
		// $query->set('orderby', 'meta_value_num');
		// $query->set('order', 'DESC');
		$query->set('posts_per_page', -1);
	}
}
 
add_action('pre_get_posts', 'cpt_archive_building');