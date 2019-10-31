<?php /* Template Name: Articles page */ ?>
<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<main class="main">
    <div class="container container--modifier">
        <article class="main__articles text-right">
            <h2><?php the_title(); ?></h2>
            <div class="main__posts">
                <?php 
                $args = array(
                    'post_type' => 'post'
                );
                $p = new WP_Query($args);
                ?>
                <?php if($p->have_posts()): while($p->have_posts()): $p->the_post(); ?>
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
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </article>
    </div>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>