<?php

//************************************************************************
//
// Event Contact Email or Default to Site Admin Email (info@)
//
//************************************************************************

function gfdv_committee_email($value) {
	global $post;

	if (get_field('members', $post->ID)) {
		$members = get_field('members');
		$email = get_field('email', $members[0]->ID);
		return $email;
	} else {

		return get_option('admin_email');
	}
}

add_filter('gform_field_value_committee_email', 'gfdv_committee_email');



//************************************************************************
//
// Event Name from the_title() so we know what event
//
//************************************************************************

function gfdv_event_name($value) {
	global $post;

	return $post->post_title;
}

add_filter('gform_field_value_event_name', 'gfdv_event_name');