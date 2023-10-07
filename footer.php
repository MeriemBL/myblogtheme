<!-- footer sectoin -->
<footer>
    <div class="footer-container">
        <div class="first-column">
            <h3>About Us</h3>
            <?php get_sidebar('abfooter')?>
        </div>
        <div class="second-column">
            <div class="second-col-container">
                <div class="postes">
                    <h3>Latest Post</h3>
                    <div class="post-entry-sidebar">
                        <?php $recent_posts = wp_get_recent_posts(array('numberposts' => 3)); ?>
                        <?php foreach ($recent_posts as $post) { 
                            $post_date = strtotime($post['post_date']);
                            $formatted_date = date('Y-m-d', $post_date);
                            ?>
                        <ul>
                            <li><a href="<?php echo get_permalink($post['ID'])?>"> 
                                    <?php echo get_the_post_thumbnail($post['ID'], array(100, 100)); ?>
                                    <div class="text">
                                        <h4><?php echo $post['post_title'] ?></h4>
                                        <div class="post-meta">
                                            <p class="date"><?php echo $formatted_date ?></p> 
                                            <p class="commentes"><span class="fa fa-comments"></span> <?php comments_number(); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="third-column">
            <div class="third-col-container">
                <div class="footer-nav">
                    <h3>Quick Links</h3>
                    <?php wp_nav_menu(array('blogtheme_footer_menu' => 'Footer Menu'))?>
                </div>
                <div class="footer-social">
                    <h3>Social</h3>
                    <?php get_sidebar('footersocial')?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div>
            <p><?php echo get_theme_mod('set_copyright', 'Copyright X - All Rights Reserved') ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>