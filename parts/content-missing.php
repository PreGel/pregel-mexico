<div id="post-not-found" class="hentry">
	
	<?php if ( is_search() ) : ?>
		
		<header class="article-header">
			<h1><?php _e("Lo sentimos, no tenemos resultados. ", "jointswp");?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e("Intente otra vez.", "jointswp");?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		<!-- <footer class="article-footer">
			<p><?php //_e("Este es el mensaje de error en la plantilla parts"); ?></p>
		</footer>   -->
		
	<?php else: ?>
	
		<header class="article-header">
			<h1><?php _e("¡Uy, Página no encontrada!", "jointstheme"); ?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e("UH oh. Faltan algunas cosas, revise y vuelva a intentar.", "jointstheme"); ?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		<!-- <footer class="article-footer">
		  <p><?php //_e("Este es el mensaje de error en la plantilla parts"); ?></p>
		</footer> -->
			
	<?php endif; ?>
	
</div>
