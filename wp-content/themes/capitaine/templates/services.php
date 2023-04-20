<?php
//commentaire qui permet à WordPress de détecter cette page comme un template (rangée dans le dossier templates)
//!pas d'espace après :
/*
  Template Name: Services
*/
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
	<h1><?php the_title(); ?></h1>
    <div class="content">
    	<?php the_content(); ?>
    </div>
<?php
	endwhile; endif;
	get_footer();
?>