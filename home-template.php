<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>
<?php  get_template_part( 'parts/hero-content', get_post_format() );?>
<main>
    <h2>Latest Posts</h2>
    <div class="main-container">
            <?php
            /* USING PAGE INSTEAD OF PAGED BECAUSE WE ARE ON FRONTPAGE */
                $post_per_page = get_theme_mod('set_per_page', 6);
                $paged = get_query_var( 'page', 1 );
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $post_per_page,
                    'paged' => $paged
                );
                $post_list = new WP_Query($args);
                ?>
                <div class="posts">
                    <div class="card-container">
                        <?php if ( $post_list->have_posts() ) : while ( $post_list->have_posts() ) : $post_list->the_post();
                            get_template_part( 'parts/content', get_post_format() );
                        endwhile; 
                        else:
                            echo 'Sorry No posts here :(';
                        wp_reset_postdata(); 
                        endif; ?>
                    </div>
                </div>
        <?php get_sidebar();?>
    </div>
    <div class="navigation pagination">
        <?php 
            echo paginate_links(
                array(
                    'total' => $post_list->max_num_pages,
                    'current' => 'page',
                )
            )
        ?>
    </div>
</main>
<?php get_footer(); ?>