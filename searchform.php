        <form class="searchform" method="get" action="<?php bloginfo('home'); ?>/">
            <label>Search</label><br />
            <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
            <input class="button" type="submit" value="Go!"/>
        </form>