<?php if('post' == get_post_type()):?>
<div class="search-result">
        <div class="img">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img']); ?>
        </div> 
        <div class="post-meta">
            <span class="date"><?php echo get_the_date(); ?></span> &bullet;
            <span class="commentes"><span class="fa fa-comments"></span> <?php comments_number(); ?></span>
        </div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p><?php the_excerpt(); ?></p>
</div>
<?php endif; ?>