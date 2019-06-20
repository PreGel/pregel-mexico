<?php
/*
Template Name: Career Opportunities 
*/
?>

<?php get_header(); ?>

<div id="content" class="pg-career-content" >

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Title Banner of Page with Big Image -->
		   <div id="pg-about-banner-container">
			 <div id="pg-about-banner"></div>
		   </div>
		   <div id="title-banner">
				<h1 class="text-center"><?php the_field('jobs_banner_text'); ?></h1>							
		   </div>
	    <!-- Content section 1 -->
			<div id="pg-jobs-section-one">
				<div class="grid-container">
				<div class="grid-x grid-margin-x" id="pg-about-content-row">
				    <div class="small-12 large-4 cell">
						<h2><?php the_field('jobs_section_one_title'); ?></h2>
					</div>
					<div class="small-12 large-8 cell">
						<?php the_field('jobs_section_one_text'); ?>
					</div>
				</div>
			</div>
			</div>
		<!-- Available Jobs sectin  -->
			<div id="pg-jobs-post-section" class="alt-background-light-blue">
				<div class="grid-container">
					<div class="grid-x grid-margin-x">
			 <div class="large-12">
		          <h1 class="text-center"><?php the_field('jobs_body_banner_text'); ?></h1>
			 </div>	
				<!-- <div id="pg-job-content-row"> -->
					<?php
					 
					$query = new WP_Query( array( 'post_type' => 'job_posting' ) );
					 
					if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>	
							<div id="job-post-container" class="small-9 medium-9 large-9 cell">
							 <div id="job-post-title-container" class="small-12 medium-12 large-12 cell">
								<h3 id="job-post-title" class="">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?>
								</a>
								</h3>
							 </div>
							</div>

						<?php endwhile; wp_reset_postdata(); ?>
						<!-- show pagination here -->
					<?php else : ?>
						<h2>No hay vacantes disponibles por el momento.</h2>
					<?php endif; ?>
				<!-- </div>   -->  
		    <!-- </div> -->
<?php endwhile; endif; ?>	
</div>
</div>
						
</div> <!-- end #pg-about-content -->

<?php get_footer(); ?>
