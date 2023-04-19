<?php get_header(); ?>
	
	<!--contrôler qu'il y a bien qqchose à afficher; boucle pour itérer sur le contenu; préparer les données de l'article pour les afficher via les template tags-->
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	
		<!--template tag pour afficher le titre-->
			<h1 class="h1-post"><?php the_title(); ?></h1>
			
			<!--afficher le contenu-->
			<p><?php the_content(); ?></p>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>