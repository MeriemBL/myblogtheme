<aside class="sidebar">
    <?php get_search_form(); ?>
    <div class="about-author">
        <img src="http://localhost/websitear/wp-content/uploads/2023/09/person_1.jpg" alt="Circular Image">
        <h3>About</h3>
        <p><?php the_author_meta( 'description' ); ?></p>
        <a href="<?php get_the_author_posts_link() ?>">Author's Posts</a>
    </div>
    <div class="archive">
        <h4>Archives</h4>
        <ul>
            <?php wp_get_archives( 'type=monthly' ); ?>
        </ul>
    </div>
    <div class="categories">
        <h4>Categories</h4>
        <ul>
            <?php wp_list_categories(array(
            'taxonomy' => 'category', 
            'title_li' => '', 
            'orderby' => 'name',
            'show_count'  => true,
        )) ?>
        </ul>
    </div>
</aside>