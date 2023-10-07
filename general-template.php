<?php /* Template Name: General Template */ ?>
<?php get_header(); ?>
<img alt="" class="header-img" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>"
    height="<?php echo absint( get_custom_header()->height ); ?>">
<main>
    <div class="main-container">
        <div class="posts">
            <div class="card-container">
                <?php 	if ( have_posts() ) : while ( have_posts() ) : the_post();
                            if(is_page('about')):
                                get_template_part( 'parts/about-content', get_post_format());
                            elseif(is_page('contact')):
                                get_template_part( 'parts/contact-content', get_post_format());
                            endif;
                    endwhile; 
                    endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>