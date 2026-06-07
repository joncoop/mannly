<!DOCTYPE html>

<html>
<head>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );

    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head()
?>
</head>

<body>


<div id="masthead">
    <div id="mh_content">
        <?php get_template_part('searchform'); ?>

        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
    </div>
</div>

<div id="frame">

    <div id="pages">
        <ul>
        <?php $args = array(
            'sort_column' => 'menu_order, post_title',
            'menu_class'  => 'menu',
            'include'     => '',
            'exclude'     => '',
            'echo'        => true,
            'show_home'   => true,
            'link_before' => '',
            'link_after'  => '' );
        
            wp_page_menu( $args );
        ?> 
        </ul>
    </div>
