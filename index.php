<?php get_header(); ?>
<main class="main">
    <div class="container container--modifier">
        <div class="main__hero">
            <h1>Hi there!</h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
        <div class="main__articles text-right">
            <h2>مقالاتي</h2>
            <div class="main__posts">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="main-post d-flex flex-row-reverse align-items-center justify-content-between">
                    <div class="main-post__img">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        } ?>
                    </div>
                    <div class="main-post__title p-2 w-100">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </a>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>