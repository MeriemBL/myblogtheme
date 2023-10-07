<?php get_header(); ?>
<img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
<main>
    <div class="main-container">
        <div class="post">
                <?php while ( have_posts() ) : the_post();
                get_template_part( 'parts/post-content', get_post_format() );
                ?>
                <div class="pagination">
                    <div class="pages new">
                        <?php next_post_link('&laquo; %link')?>
                    </div>
                    <div class="pages old">
                        <?php previous_post_link('%link &raquo;')?>
                    </div>
                </div>
                <?php
                if(comments_open() || get_comments_number()){
                    comments_template();
                }
                endwhile;
                ?>  
        </div>
        <aside class="sidebar">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</main>
<?php 
?>
<div class="other-posts-container">
    <h2>Other Posts</h2>
    <?php
    wp_reset_postdata(); 
    $args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    );
    $post_list = new WP_Query($args);
    ?>

    <div class="other-posts">
        <?php 	if ( $post_list->have_posts() ) : while ( $post_list->have_posts() ) : $post_list->the_post();
    get_template_part( 'parts/content', get_post_format() );
    endwhile; 
    wp_reset_postdata(); 
    endif; ?>
    </div>
</div>
 
<?php get_footer(); ?>