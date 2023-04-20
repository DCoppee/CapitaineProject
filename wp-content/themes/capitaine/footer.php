<footer class="site__footer">
    <!--afficher le contenu du menu selon son slug, éviter d'avoir une div autour, ajouter une classe personnalisée-->
	<?php wp_nav_menu( array(   'theme_location' => 'footer',
                                'container' => 'ul',
                                'menu_class' => 'footer-menu')); ?>
</footer>
<?php wp_footer(); ?> <!--afficher des scripts (et styles) en bas de page-->
</body>
</html>