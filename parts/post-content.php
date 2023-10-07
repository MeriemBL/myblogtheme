<article id="post-<?php the_ID();?>" <?php post_class();?>>
                <h2><?php the_title(); ?></h2>
                <div class="post-content">
                    <?php  the_content(); ?>
                    <?php wp_link_pages() ?>
                </div>
</article>