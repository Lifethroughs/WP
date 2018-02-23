<?php get_header(); ?>

    <main class="container">
        <div class="row">
            <article class="col-md-8 blog-main">
                <?php if (have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <div class="blog-post">
                            <h2 class="blog-post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <time class="blog-post-meta">
                                <p>
                                    <?php the_time('F j, Y g:i a'); ?>
                                    by
                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                        <?php the_author(); ?>
                                    </a>
                                </p>
                            </time>
                            <div class="post-thumbnail">
                                <?php if(has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php endif ?>
                            </div>
                            <?php the_excerpt(); ?>
                        </div>

                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php __('No Posts Found'); ?></p>
                <?php endif; ?>
            </article> <!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
        <?php if(is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
    </aside> <!-- /.blog-sidebar -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
