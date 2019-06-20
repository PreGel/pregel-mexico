<div id="search-container">
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
		<header class="article-header">
		  <h3>
		  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		  <?php the_title(); ?></a>
		  </h3>
			
		</header> <!-- end article header -->
						
		<section class="entry-content" itemprop="articleBody">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
			<?php the_content('<button class="tiny">Read more...</button>'); ?>
		</section> <!-- end article section -->
							
		<footer class="article-footer">
	    	
		</footer> <!-- end article footer -->				    						
	</article> <!-- end article -->
</div>