<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<main class="main">
    <div class="container container--modifier">
        <div class="main__page">
            <div class="main__page-title">
                <h1><?php the_title(); ?></h1>
            </div>
            
            <div class="main__page-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>