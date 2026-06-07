    <div id="footer">
        <div class="logo">
            <img src="<?php bloginfo('template_directory'); ?>/images/mann-art-logo_140x120.gif" alt="Mann Logo" width="140" />
        </div>

        <div class="footercolumn">
            <h4>Greenville County Schools</h4>
            <ul>
            <li><a href="http://www.greenville.k12.sc.us/">Greenville County Schools</a></li>
            <li><a href="http://www.greenville.k12.sc.us/gcsd/portal.asp">GCSD Portal</a></li>
            <li><a href="https://email.greenville.k12.sc.us/">Email</a></li>
            </ul>
        </div>

        <div class="footercolumn">
            <h4>J.L. Mann</h4>
            <ul>
            <li><a href="http://www.greenville.k12.sc.us/jlmann">J.L. Mann High School</a></li>
            <li><a href="http://www.jlmannsports.com/">J.L. Mann Sports</a></li>
            <li><a href="http://www.schsl.tv/jlmann">Patriot T.V.</a></li>
            <!--<li><a href="http://www.themannuscript.org">The Mannuscript</a></li>-->
            </ul>
        </div>

        <div class="footercolumn">
            <?php $user_info = get_userdata(1); ?>
            <h4>Contact <?php echo $user_info->nickname; ?></h4>
            <ul>
            <li><?php echo $user_info->user_email; ?></li>
            <li><?php echo $user_info->phone; ?></li>
            </ul>

            <h4>Admin</h4>
            <ul>
            <li><?php if ( is_user_logged_in() ) { ?> <a href="<?php echo get_admin_url(); ?>">Dashboard</a><?php } ?></li>
            <li><?php wp_loginout(); ?></li>
            </ul>
        </div>
    </div>

</div>

<div id="credits">Mannly theme by <a href="http://jccooper.blog.greenville.k12.sc.us/mannly/">Jon Cooper</a> | Powered by <a href="http://wordpress.org">WordPress</a></div>

<?php wp_footer(); ?>

</body>
</html>
