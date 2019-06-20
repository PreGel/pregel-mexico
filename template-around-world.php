<?php 
/*
Template Name: Around the World 
*/
?>

<?php get_header(); ?>

<div id="content" class="pg-locations-content" >
	<!-- Title Banner of Page with Big Image -->
	<!-- <div id="pg-about-banner-container">
    <div class="grid-x">
	 <div id="pg-about-banner"></div>
    </div> 
    </div> -->
<div id="title-banner" class="large-centered cell">
	<h1 class="text-center"><?php the_field('title_banner_text'); ?></h1>							
</div>
<!-- interactive map -->
<div class="grid-container">
	<div class="grid-x">
		<div class="cell">
		
	</div>
	</div>
</div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- North America section -->
	<div id="pg-locations-section">
		<div class="grid-container">
		<div class="grid-x" id="pg-about-content-row">
			<div id="region-title" class="small-12 large-12 cell">
				<h2 class="text-left" ><?php the_field('north_america_section'); ?></h2>
			</div>
			<div id="location-links" class="small-12 medium-12 large-12 cell">
				<div class="grid-x">
					<div class="large-6 medium-6 text-left cell">
						<h4><a href="https://www.pregelamerica.com" target="_blank">PreGel America</a></h4>
					</div>
					<div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.facebook.com/PreGelAMERICA/" target="_blank">
									<i class="fi-social-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/pregelamerica" target="_blank">
									<i class="fi-social-twitter"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/482070" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/PreGelAMERICA" target="_blank">
									<i class="fi-social-youtube"></i>
								</a>
							</li>
							<li>
								<a href="https://www.pinterest.com/pregelamerica/" target="_blank">
									<i class="fi-social-pinterest"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/pregelamerica/" target="_blank">
									<i class="fi-social-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="location-links" class="small-12 medium-12 large-12 cell">
				<div class="grid-x">
					<div class="large-6 medium-6 text-left cell">
						<h4><a href="https://www.pregelcanada.com/" target="_blank">PreGel Canada</a></h4>
					</div>
					<div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.facebook.com/pregelcanada" target="_blank">
									<i class="fi-social-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/PreGelCANADA" target="_blank">
									<i class="fi-social-twitter"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/482070" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.pinterest.com/pregelamerica/pregel-canada/" target="_blank">
									<i class="fi-social-pinterest"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/pregelcanada/" target="_blank">
									<i class="fi-social-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="location-links" class="small-12 medium-12 large-12 cell">
				<div class="grid-x">
					<div class="large-6 medium-6 text-left cell">
						<h4><a href="https://www.pregelmexico.com" target="_blank">PreGel Mexico</a></h4>
					</div>
					<div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.facebook.com/pregelmexico/" target="_blank">
									<i class="fi-social-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/482070" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.pinterest.com/pregelamerica/pregel-mexico/" target="_blank">
									<i class="fi-social-pinterest"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/pregelmexico/" target="_blank">
									<i class="fi-social-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!-- South America section -->
	<div id="pg-locations-section" class="alt-background-light-blue">
		<div class="grid-container">
		<div class="grid-x" id="pg-about-content-row">
			<div id="region-title" class="small-12 large-12 cell">
				<h2 class="text-left" ><?php the_field('south_america_section'); ?></h2>
			</div>
			<div id="location-links" class="small-12 medium-12 large-12 cell">
				<div class="grid-x">
					<div class="large-6 medium-6 text-left cell">
						<h4><a href="https://www.pregelbrasil.com/" target="_blank">PreGel Brasil</a></h4>
					</div>
					<div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.facebook.com/PREGELBRAZIL/" target="_blank">
									<i class="fi-social-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/482070" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.pinterest.com/pregelamerica/pregel-brasil/" target="_blank">
									<i class="fi-social-pinterest"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/pregelbrasil/" target="_blank">
									<i class="fi-social-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="location-links" class="small-12 medium-12 large-12 cell">
				<div class="grid-x">
					<div class="large-6 medium-6 text-left cell">
						<h4><a href="https://www.pregelcolombia.com/" target="_blank">PreGel Colombia</a></h4>
					</div>
					<div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.facebook.com/pregelcolombia/" target="_blank">
									<i class="fi-social-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/482070" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.pinterest.com/pregelamerica/pregel-colombia/" target="_blank">
									<i class="fi-social-pinterest"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/pregelcolombia/" target="_blank">
									<i class="fi-social-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>	
			<div id="location-links" class="small-12 medium-12 large-12 cell">
				<div class="grid-x">
					<div class="large-6 medium-6 text-left cell">
						<h4><a href="https://www.pregelecuador.com/" target="_blank">PreGel Ecuador</a></h4>
					</div>
					<div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.facebook.com/PreGel-Ecuador-656193004514777/" target="_blank">
									<i class="fi-social-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/482070" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.pinterest.com/pregelamerica/pregel-ecuador/" target="_blank">
									<i class="fi-social-pinterest"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/pregelecuador/" target="_blank">
									<i class="fi-social-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="location-links" class="small-12 medium-12 large-12 cell">
				<div class="grid-x">
					<div class="large-6 medium-6 text-left cell">
						<h4><a href="https://pregelperu.com/" target="_blank">PreGel Peru</a></h4>
					</div>
					<div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.facebook.com/pregelperu/" target="_blank">
									<i class="fi-social-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
									<i class="fi-social-youtube"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="location-links" class="small-12 medium-12 large-12 cell">
				<div class="grid-x">
					<div class="large-6 medium-6 text-left cell">
						<h4><a href="https://pregelchile.com" target="_blank">PreGel Chile</a></h4>
					</div>
					<div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
									<i class="fi-social-youtube"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="location-links" class="small-12 medium-12 large-12 cell">
					 <div class="grid-x">
					  <div class="large-6 medium-6 text-left cell">
						<h4><a href="https://pregelargentina.com.ar/" target="_blank">PreGel Argentina</a></h4>
					  </div>
					  <div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
									<i class="fi-social-youtube"></i>
								</a>
							</li>
						</ul>
					   </div>
					 </div>
					</div>
					<div id="location-links" class="small-12 medium-12 large-12 cell">
					 <div class="grid-x">
					  <div class="large-6 medium-6 text-left cell">
						<h4><a href="https://pregelamericalatina.com" target="_blank">PreGel Latin America</a></h4>
					  </div>
					  <div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
									<i class="fi-social-youtube"></i>
								</a>
							</li>
						</ul>
					   </div>
					 </div>
					</div>
		</div>
	</div>
	</div>
	<!-- Europe section -->
	<div id="pg-locations-section">
		<div class="grid-container">
		<div class="grid-x" id="pg-about-content-row">
			<div id="region-title" class="small-12 large-12 cell">
				<h2 class="text-left" ><?php the_field('europe_section'); ?></h2>
			</div>
			<div id="location-links" class="small-12 medium-12 large-12 cell">
				<div class="grid-x">
					<div class="large-6 medium-6 text-left cell">
						<h4><a href="https://www.pregel.com" target="_blank">PreGel Headquarters</a></h4>
					</div>
					<div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.facebook.com/pregelspa?fref=ts" target="_blank">
									<i class="fi-social-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://plus.google.com/u/0/+Pregel/posts" target="_blank">
									<i class="fi-social-google-plus"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
									<i class="fi-social-youtube"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="location-links" class="small-12 medium-12 large-12 cell">
				<div class="grid-x">
					<div class="large-6 medium-6 text-left cell">
						<h4><a href="hhttps://www.pregel.com/about-us/pregel-around-the-world/" target="_blank">PreGel Austria</a></h4>
					</div>
					<div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.facebook.com/pregelspa?fref=ts" target="_blank">
									<i class="fi-social-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://plus.google.com/u/0/+Pregel/posts" target="_blank">
									<i class="fi-social-google-plus"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
									<i class="fi-social-youtube"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="location-links" class="small-12 medium-12 large-12 cell">
				<div class="grid-x">
					<div class="large-6 medium-6 text-left cell">
						<h4><a href="https://www.pregel.nl/" target="_blank">PreGel Benelux</a></h4>
					</div>
					<div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.facebook.com/pregelspa?fref=ts" target="_blank">
									<i class="fi-social-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://plus.google.com/u/0/+Pregel/posts" target="_blank">
									<i class="fi-social-google-plus"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
									<i class="fi-social-youtube"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="location-links" class="small-12 medium-12 large-12 cell">
				<div class="grid-x">
					<div class="large-6 medium-6 text-left cell">
						<h4><a href="https://www.pregel.com/about-us/pregel-around-the-world/" target="_blank">PreGel Germany</a></h4>
					</div>
					<div class="large-6 medium-6 text-left cell">
						<ul class="locations-social">
							<li>
								<a href="https://www.facebook.com/pregelspa?fref=ts" target="_blank">
									<i class="fi-social-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://plus.google.com/u/0/+Pregel/posts" target="_blank">
									<i class="fi-social-google-plus"></i>
								</a>
							</li>
							<li>
								<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
									<i class="fi-social-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
									<i class="fi-social-youtube"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		          <div id="location-links" class="small-12 medium-12 large-12 cell">
		          	<div class="grid-x">
		          		<div class="large-6 medium-6 text-left cell">
		          			<h4><a href="https://www.pregel.com/about-us/pregel-around-the-world/" target="_blank">PreGel Switerland</a></h4>
		          		</div>
		          		<div class="large-6 medium-6 text-left cell">
		          			<ul class="locations-social">
		          				<li>
		          					<a href="https://www.facebook.com/pregelspa?fref=ts" target="_blank">
		          						<i class="fi-social-facebook"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://plus.google.com/u/0/+Pregel/posts" target="_blank">
		          						<i class="fi-social-google-plus"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
		          						<i class="fi-social-linkedin"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
		          						<i class="fi-social-youtube"></i>
		          					</a>
		          				</li>
		          			</ul>
		          		</div>
		          	</div>
		          </div>
		          <div id="location-links" class="small-12 medium-12 large-12 cell">
		          	<div class="grid-x">
		          		<div class="large-6 medium-6 text-left cell">
		          			<h4><a href="https://www.pregel.com.es/" target="_blank">PreGel Spain</a></h4>
		          		</div>
		          		<div class="large-6 medium-6 text-left cell">
		          			<ul class="locations-social">
		          				<li>
		          					<a href="https://www.facebook.com/pregelspa?fref=ts" target="_blank">
		          						<i class="fi-social-facebook"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://plus.google.com/u/0/+Pregel/posts" target="_blank">
		          						<i class="fi-social-google-plus"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
		          						<i class="fi-social-linkedin"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
		          						<i class="fi-social-youtube"></i>
		          					</a>
		          				</li>
		          			</ul>
		          		</div>
		          	</div>
		          </div>
		          <div id="location-links" class="small-12 medium-12 large-12 cell">
		          	<div class="grid-x">
		          		<div class="large-6 medium-6 text-left cell">
		          			<h4><a href="https://www.pregel.pl/" target="_blank">PreGel Poland</a></h4>
		          		</div>
		          		<div class="large-6 medium-6 text-left cell">
		          			<ul class="locations-social">
		          				<li>
		          					<a href="https://www.facebook.com/pregelspa?fref=ts" target="_blank">
		          						<i class="fi-social-facebook"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://plus.google.com/u/0/+Pregel/posts" target="_blank">
		          						<i class="fi-social-google-plus"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
		          						<i class="fi-social-linkedin"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
		          						<i class="fi-social-youtube"></i>
		          					</a>
		          				</li>
		          			</ul>
		          		</div>
		          	</div>
		          </div> 
		          <div id="location-links" class="small-12 medium-12 large-12 cell">
		          	<div class="grid-x">
		          		<div class="large-6 medium-6 text-left cell">
		          			<h4><a href="https://pregelhungary.com/" target="_blank">PreGel Hungary</a></h4>
		          		</div>
		          		<div class="large-6 medium-6 text-left cell">
		          			<ul class="locations-social">
		          				<li>
		          					<a href="https://www.facebook.com/pregelspa?fref=ts" target="_blank">
		          						<i class="fi-social-facebook"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://plus.google.com/u/0/+Pregel/posts" target="_blank">
		          						<i class="fi-social-google-plus"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
		          						<i class="fi-social-linkedin"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
		          						<i class="fi-social-youtube"></i>
		          					</a>
		          				</li>
		          			</ul>
		          		</div>
		          	</div>
		          </div> 
		          <div id="location-links" class="small-12 medium-12 large-12 cell">
		          	<div class="grid-x">
		          		<div class="large-6 medium-6 text-left cell">
		          			<h4><a href="https://pregelgreece.com" target="_blank">PreGel Greece ΕΠΕ</a></h4>
		          		</div>
		          		<div class="large-6 medium-6 text-left cell">
		          			<ul class="locations-social">
		          				<li>
		          					<a href="https://www.facebook.com/pregelspa?fref=ts" target="_blank">
		          						<i class="fi-social-facebook"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://plus.google.com/u/0/+Pregel/posts" target="_blank">
		          						<i class="fi-social-google-plus"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
		          						<i class="fi-social-linkedin"></i>
		          					</a>
		          				</li>
		          				<li>
		          					<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
		          						<i class="fi-social-youtube"></i>
		          					</a>
		          				</li>
		          			</ul>
		          		</div>
		          	</div>
		          </div>  
		      </div>
		  </div>
		  </div>
		  <!-- Asia section -->
		  <div id="pg-locations-section" class="alt-background-light-blue">
		  	<div class="grid-container">
		  	<div class="grid-x" id="pg-about-content-row">
		  		<div id="region-title" class="small-12 large-12 cell">
		  			<h2 class="text-left" ><?php the_field('asia_section'); ?></h2>
		  		</div>
		  		<div id="location-links" class="small-12 medium-12 large-12 cell">
		  			<div class="grid-x">
		  				<div class="large-6 medium-6 text-left cell">
		  					<h4><a href="https://www.pregel.com.au/" target="_blank">PreGel Australia</a></h4>
		  				</div>
		  				<div class="large-6 medium-6 text-left cell">
		  					<ul class="locations-social">
		  						<li>
		  							<a href="https://www.facebook.com/pregelspa?fref=ts" target="_blank">
		  								<i class="fi-social-facebook"></i>
		  							</a>
		  						</li>
		  						<li>
		  							<a href="https://plus.google.com/u/0/+Pregel/posts" target="_blank">
		  								<i class="fi-social-google-plus"></i>
		  							</a>
		  						</li>
		  						<li>
		  							<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
		  								<i class="fi-social-linkedin"></i>
		  							</a>
		  						</li>
		  						<li>
		  							<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
		  								<i class="fi-social-youtube"></i>
		  							</a>
		  						</li>
		  					</ul>
		  				</div>
		  			</div>
		  		</div>
		  		<div id="location-links" class="small-12 medium-12 large-12 cell">
		  			<div class="grid-x">
		  				<div class="large-6 medium-6 text-left cell">
		  					<h4><a href="hhttps://pregel-asia.com/" target="_blank">PreGel Asia</a></h4>
		  				</div>
		  				<div class="large-6 medium-6 text-left cell">
		  					<ul class="locations-social">
		  						<li>
		  							<a href="https://www.facebook.com/pregelspa?fref=ts" target="_blank">
		  								<i class="fi-social-facebook"></i>
		  							</a>
		  						</li>
		  						<li>
		  							<a href="https://plus.google.com/u/0/+Pregel/posts" target="_blank">
		  								<i class="fi-social-google-plus"></i>
		  							</a>
		  						</li>
		  						<li>
		  							<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
		  								<i class="fi-social-linkedin"></i>
		  							</a>
		  						</li>
		  						<li>
		  							<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
		  								<i class="fi-social-youtube"></i>
		  							</a>
		  						</li>
		  					</ul>
		  				</div>
		  			</div>
		  		</div> 
						<!-- <div id="location-links" class="small-12 medium-12 large-12 cell">
						 <div class="grid-x">
						  <div class="large-6 medium-6 text-left cell">
							<h4><a href="http://www.pregel.com/contact-us/" target="_blank">PreGel MIDDLE EAST</a></h4>
						  </div>
						  <div class="large-6 medium-6 text-left cell">
							<ul class="locations-social">
								<li>
									<a href="https://www.facebook.com/pregelspa?fref=ts" target="_blank">
										<i class="fi-social-facebook"></i>
									</a>
								</li>
								<li>
									<a href="https://plus.google.com/u/0/+Pregel/posts" target="_blank">
										<i class="fi-social-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="https://www.linkedin.com/company/pregel-spa" target="_blank">
										<i class="fi-social-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="https://www.youtube.com/user/PregelSPA" target="_blank">
										<i class="fi-social-youtube"></i>
									</a>
								</li>
							</ul>
						   </div>
						 </div>
						</div> -->
					</div>
				</div>
				</div>
				<!-- Test section -->

			<?php endwhile; endif; ?>
		</div>
		</div><!-- end #pg-locations-content -->

		<?php get_footer(); ?>