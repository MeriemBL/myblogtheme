<?php get_header(); ?>
<img alt="" class="header-img" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>"
    height="<?php echo absint( get_custom_header()->height ); ?>">
<main>
    <h2>Latest Posts</h2>
    <div class="main-container">
        <div class="posts">
            <div class="card-container">
            <?php 	if ( have_posts() ) : while ( have_posts() ) : the_post();
                    get_template_part( 'parts/content', get_post_format() );
                endwhile; endif; ?>
            </div>
        </div>
        <?php get_sidebar();?>
    </div>
    <div class="pagination">
    <div class="nav-next">
            <?php previous_posts_link( '<< Previous' ); ?>
        </div>
        <div class="nav-previous">
            <?php next_posts_link( 'next >>' ); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>