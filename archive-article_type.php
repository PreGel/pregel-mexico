<?php get_header(); ?>

<div id="content">
	<div id="pg-featured-article-banner" class="large-12">
		<?php
		$args = array(
			'post_type' => 'article_type',
			'article_cat'=> 'Featured Article News Page');

		$my_query = new WP_Query( $args );
		if( $my_query->have_posts() ) {
			while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="grid-container">
				<div class="grid-x">
					<article class="">
						<!-- custom thumbnail size 600px wide -->
						<div class="cell" id="featured-article-title-container">
							<div class="large-10 large-centered cell" id="fatured-article-title-inner-container">	
								<div id="featured-image-banner-container">
									<section id="featured-image-banner" itemprop="articleBody">
										<?php the_post_thumbnail('full'); ?>
									</section>
								</div>
								<h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
								<h5 class="alt"><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
								<?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?>
								<a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Leer más</a>
							</div>
						</div>
					</article>
					<?php endwhile;
					wp_reset_query(); 
				}
					/*else {
						 get_sidebar();
						}*/
						?>
					</div>
				</div> <!-- end container -->
			</div> <!-- end banner -->

			<div id="pg-news-container" class="grid-container">
					<div class="grid-x">

						<div class="large-10 small-12 cell">
							<p style="margin: 0 1rem;">
								Desde los más recientes sucesos en PreGel hasta las noticias y tendencias actuales, y más, nuestra sección de noticias está dedicada a proporcionar acceso fácil a la información para nuestros clientes y socios. Creemos con fuerza que el conocimiento es una de las claves para el éxito y nuestra meta es proporcionar, continuamente, contenido educativo para ayudarlo a alcanzar el dominio de todos los aspectos de nuestro negocio. Nuestra sección de noticias también ofrece una sala de prensa con nuestros comunicados más recientes para la prensa y un equipo mediático para todos los contactos con los medios de comunicación. ¿Preguntas? Por favor, no duden en ponerse en contacto con nuestro Departamento de Mercadotecnia enviando un correo electrónico a <a href="mailto:servicioclientes@pregelmexico.com.mx">servicioclientes@pregelmexico.com.mx</a>.
							</p>
						</div>

						<!-- <div class="sidebar large-4 medium-5 small-12 cell end" role="complementary">
							<div id="sidebar-news" class="large-12 medium-12 small-12 cell">
								<h2 class="text-center" id="event-bar-title">Buscar por categoría</h2> 
								<?php $terms = get_terms('article_cat');
								echo '<ul id="event-cat-sidebar" class="text-center">';
								foreach ($terms as $term) {
									echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
								}
								echo '</ul>';
								?>
							</div>

						</div> -->

					</div>
				</div> <!-- end container -->


			<div class="grid-container">		
				<div id="news-grid-feed" class="grid-x grid-margin-x">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-grid-news' ); ?>
				<?php endwhile; ?>	
				<?php joints_page_navi(); ?>
			<?php else : ?>
			<?php get_template_part( 'parts/content', 'missing' ); ?>
		<?php endif; ?>
	</div> <!-- end #news-grid-feed -->
</div><!-- end grid-container -->

</div> <!-- end #content-->

<?php get_footer(); ?>