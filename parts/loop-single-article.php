<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php /*get_template_part( 'parts/content', 'byline-news' );*/ ?>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->
																						
</article> <!-- end article -->


<!--  <?php previous_post_link( '%link', 'Previous %title', TRUE, ' ', 'product_cat' ); ?>

 <?php next_post_link( '%link', 'Next %title', TRUE, ' ', 'product_cat' ); ?> -->

<div class="row">
	<div id="article-pagination" class="large-6 medium-6 small-6 columns">
		<?php previous_post_link(); ?> 
	</div>
	<div id="article-pagination" class="large-6 medium-6 small-6 columns">
		<?php next_post_link(); ?>  
	</div>
 </div>