<?php
function alternate_rows($i) {
    if($i % 2) { echo ' class="alt"'; }  
}
?>

<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  
<?php endif; ?>  
  
<?php if(!empty($post->post_password)) : ?>  
<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>  
<?php endif; ?>  
<?php endif; ?>  


<?php if($comments) : ?>

        <h4><?php comments_number('No comments yet', 'One comment', '% comments'); ?></h4>

        <ol>  
        <?php foreach($comments as $comment) : ?>  
            <?php $i++; ?>  
            <li<?php alternate_rows($i); ?> id="comment-<?php comment_ID(); ?>">
                <?php if ($comment->comment_approved == '0') : ?>  
                <p>Your comment is awaiting approval</p>  
            <?php endif; ?>

            <?php comment_text(); ?>  
            <h5 class="meta">by <?php comment_author_link(); ?> on <?php comment_date(); ?> at <?php comment_time(); ?></h5>  
            </li>  
        <?php endforeach; ?>  
        </ol>

    <?php else : ?>  
        <h4>No comments yet</h4>

<?php endif; ?>  



<?php if(comments_open()) : ?>

    <?php $num_comments = get_comments_number(); ?> 
    
    <?php if($num_comments > 0 ) : ?>
        <h4>Leave a comment</h4>
    <?php endif; ?>

    <?php if(get_option('comment_registration') && !$user_ID) : ?>  
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>  
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">  
            <?php if($user_ID) : ?>  
                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>  
            <?php else : ?>  
                <p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />  
                <label for="author">Name <?php if($req) echo "(required)"; ?></label></p>  
                <p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />  
                <label for="email">Mail (<?php if($req) echo "required, will not be published)"; ?></label></p>  
                <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />  
                <label for="url">Website</label></p>  
            <?php endif; ?>  
            <p><textarea name="comment" id="comment" rows="10" tabindex="4"></textarea></p>  
            <p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />  
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>  
            <?php do_action('comment_form', $post->ID); ?>  
        </form>  
    <?php endif; ?>  
<?php else : ?>  
    <p>The comments are closed.</p>  
<?php endif; ?>  