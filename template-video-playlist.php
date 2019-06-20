<?php
/*
Template Name: Video Playlist
*/
?>

<?php get_header(); ?>

<div id="content" class="pg-video-content">

	<!-- Title Banner of Page with Big Image -->
	<div id="pg-about-banner-container">
		<div id="pg-about-banner"></div>
	</div>

	<div id="inner-content">
		<div id="title-banner" class="large-centered">
			<h1 class="text-center"><?php the_field('video_page_title'); ?></h1>							
		</div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Playlist 1 Section -->	
		<div id="pg-playlist-section-one">
			<div class="grid-container">
				<div class="grid-x grid-margin-x">
					<div id="playlist-title" class="small-12 large-12 cell">
						<h2><?php the_field('playlist_title_one'); ?></h2>
					</div>
					<div class="small-12 medium-6 large-3 end cell" style="margin: 2rem auto;">
						<?php echo do_shortcode('[mx_youtuber type="video" id="V9WxMftpglU" display="title" size="medium"]'); ?>
					</div>
					<div class="small-12 medium-6 large-3 end cell" style="margin: 2rem auto;">
						<?php echo do_shortcode('[mx_youtuber type="video" id="TWTyeTPS1kc" display="title" size="medium"]'); ?>
					</div>
					<div class="small-12 medium-6 large-3 end cell" style="margin: 2rem auto;">
						<?php echo do_shortcode('[mx_youtuber type="video" id="mVYuGY4s-n8" display="title" size="medium"]'); ?>
					</div>
					<div class="small-12 medium-6 large-3 end cell" style="margin: 2rem auto;">
						<?php echo do_shortcode('[mx_youtuber type="video" id="9PKSg75G7dw" display="title" size="medium"]'); ?>
					</div>
					<div class="small-12 medium-6 large-3 end cell" style="margin: 2rem auto;">
						<?php echo do_shortcode('[mx_youtuber type="video" id="JVOYwYTXvms" display="title" size="medium"]'); ?>
					</div>
					<div class="small-12 medium-6 large-3 end cell" style="margin: 2rem auto;">
						<?php echo do_shortcode('[mx_youtuber type="video" id="zKA27pkJIx4" display="title" size="medium"]'); ?>
					</div>
					<div class="small-12 medium-6 large-3 end cell" style="margin: 2rem auto;">
						<?php echo do_shortcode('[mx_youtuber type="video" id="MqVI1eMZifs" display="title" size="medium"]'); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Playlist 2 Section -->	
		<div id="pg-playlist-section-two" class="alt-background-light-blue">
			<div class="grid-container">
				<div class="grid-x">
					<div id="playlist-title" class="small-12 large-12 cell">
						<h2><?php the_field('playlist_title_two'); ?></h2>
					</div>
					<div class="small-12 medium-12 large-12 cell">
						<?php echo do_shortcode('[mx_youtuber type="playlist" id="PLIMy7O9A0PjQmx_ye_xt0DWAPaJQ0_rn1" display="title,description" cols="4" rows="1" load_more_text="Más videos..."]'); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Playlist 3 Section -->	
		<div id="pg-playlist-section-three">
			<div class="grid-container">
				<div class="grid-x">
					<div id="playlist-title" class="small-12 large-12 cell">
						<h2><?php the_field('playlist_title_three'); ?></h2>
					</div>
					<div class="small-12 medium-12 large-12 cell">
						<?php echo do_shortcode('[mx_youtuber type="playlist" id="PLIMy7O9A0PjR83TOyqZBmG-YuZMI4TQ9L" display="title,description"]'); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Playlist 4 Section -->	
		<div id="pg-playlist-section-four" class="alt-background-light-blue">
			<div class="grid-container">
				<div class="grid-x">
					<div id="playlist-title" class="small-12 large-12 cell">
						<h2><?php the_field('playlist_title_four'); ?></h2>
					</div>
					<div class="small-12 medium-12 large-12 cell">
						<?php echo do_shortcode('[mx_youtuber type="playlist" id="PLIMy7O9A0PjTpk_zUfRJ9CF9gAkbrOzmv" display="title,description" cols="4" rows="1" load_more_text="Más videos..."]'); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Playlist 5 Section -->	
		<div id="pg-playlist-section-four" class="alt-background-light-blue">
			<div class="grid-container">
				<div class="grid-x">
					<div id="playlist-title" class="small-12 large-12 cell">
						<h2><?php the_field('playlist_title_five'); ?></h2>
					</div>
					<div class="small-12 medium-12 large-12 cell">
						<?php echo do_shortcode('[mx_youtuber type="playlist" id="PLIMy7O9A0PjSbLUdf85KhtOawST1ge3Lf" display="title,description" cols="4" rows="1" load_more_text="Más videos..."]'); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Playlist 6 Section -->	
		<div id="pg-playlist-section-four" class="alt-background-light-blue">
			<div class="grid-container">
				<div class="grid-x">
					<div id="playlist-title" class="small-12 large-12 cell">
						<h2><?php the_field('playlist_title_six'); ?></h2>
					</div>
					<div class="small-12 medium-12 large-12 cell">
						<?php echo do_shortcode('[mx_youtuber type="playlist" id="PLIMy7O9A0PjTbQpP2CNc7wrAWMZBUI1mq" display="title,description" cols="4" rows="1"]'); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Playlist 7 Section -->	
		<div id="pg-playlist-section-four" class="alt-background-light-blue">
			<div class="grid-container">
				<div class="grid-x">
					<div id="playlist-title" class="small-12 large-12 cell">
						<h2><?php the_field('playlist_title_seven'); ?></h2>
					</div>
					<div class="small-12 medium-12 large-12 cell">
						<?php echo do_shortcode('[mx_youtuber type="playlist" id="PLIMy7O9A0PjQYwSs_i1vDdYxJzf-Gbre_" display="title,description" cols="4" rows="1" load_more_text="Más videos..."]'); ?>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; endif; ?>	

</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>