<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<main class="main">
    <div class="container container--modifier">
        <article class="main__single">
            <div class="main__single-header d-flex align-items-center justify-content-between">
                <div class="main__single-img">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?>
                </div>
                <div class="main__single-title p-2 w-100 text-right">
                    <h1><?php the_title(); ?></h1>
                    <span class="date"><?php the_date(); ?></span>
                </div>
            </div>
            <div class="main__content text-right">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
        if (comments_open())
            comments_template(); 
        ?>
    </div>
</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>