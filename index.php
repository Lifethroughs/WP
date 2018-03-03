<?php get_header(); ?>

    <main class="container">
        <div class="row">
            <section class="col-md-8 blog-main">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('content'); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php __('No Posts Found'); ?></p>
                <?php endif; ?>

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary" href="#">Newer</a>
                </nav>

            </section> <!-- /.blog-main -->


    <aside class="col-md-4 blog-sidebar">
        <?php if (is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
    </aside> <!-- /.blog-sidebar -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
