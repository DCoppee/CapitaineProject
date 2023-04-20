<?php get_header(); ?>
	
	<!--contrôler qu'il y a bien qqchose à afficher; boucle pour itérer sur le contenu; préparer les données de l'article pour les afficher via les template tags-->
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	
		<!--template tag pour afficher le titre-->
			<h1 class="h1-post"><?php the_title(); ?></h1>
			
			<!--afficher le contenu-->
			<p><?php the_content(); ?></p>

	<?php endwhile; endif; ?>

<!--Custom Fields natifs de WP-->
	<?php the_content(); ?>
<div class="custom-accueil">
	<div class="quote-accueil"> 
    <?php echo get_post_meta( get_the_ID(), 'Quote', true ); ?>
	</div>

	<div class="author-accueil"> 
		<?php echo get_post_meta( get_the_ID(), 'Author', true ); ?>
	</div>
</div>

<?php get_footer(); ?>