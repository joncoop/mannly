<?php

// show admin toolbar
if (!current_user_can('manage_options')) {
	add_filter('show_admin_bar', '__return_false');
}


// register sidebar for widgets
if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));


// modify user profile fields
function modify_contact_methods( $fields )
{
    unset($fields['aim']);
    unset($fields['yim']);
    unset($fields['jabber']);

    $fields['phone'] = 'Phone';
    return $fields;
}

add_filter('user_contactmethods','modify_contact_methods',10,1);

?>