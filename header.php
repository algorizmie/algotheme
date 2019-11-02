<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header fixed-top" id="header">
        <div class="container container--modifier">
            <nav class="header__nav d-flex justify-content-between align-items-center">
                <div class="header__brand">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php if(has_custom_logo()):
                                $logo_id = get_theme_mod('custom_logo');
                                $src = wp_get_attachment_image_src($logo_id, 'full');
                        ?>
                        <img src="<?php echo $src[0]; ?>" alt="logo" class="header__logo">
                        <?php endif; ?>
                        <?php bloginfo($name); ?>
                    </a>
                </div>
                <nav class="header__navbar">
                    <?php 
                        wp_nav_menu(array(
                            'menu_class' => 'nav',
                            'theme_location' => 'primary',
                            'walker' => new algotheme_Walker_Nav_Primary()
                        )); 
                    ?>
                </nav>
            </nav>
        </div>
    </header>