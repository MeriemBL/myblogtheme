<?php get_header(); ?>
    <main>
        <h2>Search Results:</h2>
        <div class="main-container">
            <div class="results">
                    <?php 	if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'parts/search-content', get_post_format() );
                    endwhile; endif; ?>
            </div>
            <aside class="sidebar">
                <?php get_sidebar(); ?>
            </aside>
        </div>
        <?php the_posts_pagination() ?>
    </main>

<?php get_footer(); ?>