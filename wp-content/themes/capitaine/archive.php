<?php get_header(); ?>
 	<h1>Blog</h1>

	<div class="site__blog">
    	<main class="site__content">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
				<article class="post">
					<h2><?php the_title(); ?></h2>
			
					<img class="post-img"><?php the_post_thumbnail(); ?></img>
					
					<p class="post__meta">
						Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
						par <?php the_author(); ?> • <?php comments_number(); ?>
					</p>
					
					<?php the_excerpt(); ?>
					
					<p>
						<a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
					</p>
				</article>

			<?php endwhile; endif; ?>

			<!--navigation vers les anciens articles; pas de fonction nécessaire dans functions.php-->
			<?php posts_nav_link(); //à placer après la boucle! ?>

			<div class="site__navigation">
				<div class="site__navigation__prev">
					<img href="/img/prev.svg" class="prev-icon"
					<?php previous_posts_link( 'Page Précédente' ); ?>
					>
				</div>
				<div class="site__navigation__next">
					<img href="/img/next.svg" class="next-icon"
					<?php next_posts_link( 'Page Suivante' ); ?> 
					>
				</div>
			</div>
		</main>

		<!--Afficher la sidebar-->
        <aside class="site__sidebar">
        	<ul>
            	<?php dynamic_sidebar( 'blog-sidebar' ); ?>
				
            </ul>
        </aside>
	</div> 

<?php get_footer(); ?>