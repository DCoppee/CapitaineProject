<!--personnaliser le champ de recherche-->
<form action="<?php echo home_url( '/' ); ?>" method="get">
    <div class="search-div">
        <input class="search-bar" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Recherche" />
        <input class="search-img" type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/img/search.png" />
    </div>
</form>