<footer class="footer">
    <div class="container container--modifier">
        <h2>follow me</h2>
        <div class="footer__nav d-flex">
            <?php
                wp_nav_menu(array(
                    'menu_class' => 'nav',
                    'theme_location' => 'social-media',
                    'walker' => new algotheme_Walker_Nav_Primary()
                ));
            ?>
        </div>
        <div class="text-center" style="margin-top: 2rem">
            <p style="color: gray;">&copy; made by <a target="_blank" style="color:#81a5f8;" href="https://twitter.com/algorizmie">Zakaria</a></p>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
