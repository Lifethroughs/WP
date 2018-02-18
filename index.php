<?php get_header(); ?>


<?php if (have_posts()):?>
    <?php while(have_posts()) : the_post(); ?>
        <div class="blog-post">
            <h2 class="blog-post-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p ="blog-post-meta">
                <?php the_time('F j, Y g:i a'); ?>
                by
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?php the_author(); ?>
                </a>
            </p>
            <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php the_excerpt(); ?>
        </div>

    <?php endwhile; ?>
<?php else : ?>
    <p><?php __('No Posts Found'); ?></p>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
