        <p class="more newer"><?php previous_posts_link('« Newer Entries', 0) ?></p>
        
        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>
        <h3>Posts filed in <?php single_cat_title(); ?></h3>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h3>Posts tagged ‘<?php single_tag_title(); ?>’</h3>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h3>Archive for <?php the_time('F jS, Y'); ?></h3>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h3>Archive for <?php the_time('F, Y'); ?></h3>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h3>Archive for <?php the_time('Y'); ?></h3>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h3>Author Archive</h3>
        <?php } ?>

	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post">
            <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_content(__('(more...)')); ?></p>

            <?php if ( 'post' == get_post_type() ) : ?>
                <h4 class="meta">Posted on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> | Filed in <?php the_category(', '); ?> | <a href="<?php echo get_permalink(); ?>"><?php comments_number('No comments', '1 comment', '% comments'); ?></a></h4>
            <?php endif; // End if categories ?>
            </div>
            
        <?php endwhile; else: ?>

            <div class="post">
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            </div>

        <?php endif; ?>

        <p class="more older"><?php next_posts_link('Older Entries »', 0); ?></p>