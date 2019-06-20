<?php get_header(); ?>
			
	<div id="content">
		<div class="grid-container">

		<div id="inner-content" class="grid-x">
	
			<main id="main" class="large-8 medium-8 cell first" role="main">
				<header>
					<h1 class="archive-title"><?php _e('Resultados de la búsqueda:', 'jointstheme'); ?> <?php echo esc_attr(get_search_query()); ?></h1>
				</header>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
				
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
			    <?php endif; ?>
	
		    </main> <!-- end #main -->
		
		    <?php get_sidebar('help'); ?>
		
		</div> <!-- end #inner-content -->

	</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>
