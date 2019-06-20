<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

<?php get_header(); ?>
			
<div id="content">
		
	<div id="inner-content" class="row">
	  <div id="pg-news-container">
	   <div class="row">
	    <header class="large-12 columns">

		    <h1 class="page-title large-8 columns">
		    <span><?php _e("Articles Categorized:", "jointstheme"); ?></span> <?php single_cat_title(); ?>
		    </h1>

			<?php get_sidebar('news'); ?>
   
		</header>
	   </div>
	  </div>

	    <div id="pg-grid-feed">
	     <div class="row">
		  <div class="large-12 columns">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		 
				<!-- To see additional archive styles, visit the /parts directory -->
				<?php get_template_part( 'parts/loop', 'archive-grid-news' ); ?>
			    
			<?php endwhile; ?>	

				<?php joints_page_navi(); ?>
				
			<?php else : ?>
										
				<?php get_template_part( 'parts/content', 'missing' ); ?>
					
			<?php endif; ?>
			
		  </div>
	     </div>
	    </div>

	    
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>