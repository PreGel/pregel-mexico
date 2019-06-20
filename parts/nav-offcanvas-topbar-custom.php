<div data-sticky-container class="show-for-large">
	<div class="top-bar sticky" id="top-bar-menu" data-sticky data-sticky-on="large" data-anchor="content" data-margin-top="0">
		<div class="grid-container">
			<div class="grid-x">
				<div class="cell">
					<div class="top-bar-left">
						<div class="nav-table">
							<div class="nav-table-row">
								<ul id="menu-main-left-1" class="dropdown menu float-left" data-dropdown-menu="">
									<li>
										<a href="/">Inicio</a>
									</li>
									<?php echo m2i_get_block_html( 'topnavwp' ); ?>
									<li>
										<a href="https://mexico.pregel-itc.com/training">Capacitación</a>
										<!-- have to add these manual for the moment -->
										<ul class="menu arrow-box submenu is-dropdown-submenu first-sub vertical" data-submenu="" aria-hidden="true" role="menu">
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://mexico.pregel-itc.com/training/schedule-registration/">Calendario e Inscripción</a></li>
											<!-- <li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://mexico.pregel-itc.com/training/calendar/">Calendario</a></li> -->
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://mexico.pregel-itc.com/training/curriculums/">Currículos</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://mexico.pregel-itc.com/training/classes/">Cursos</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://mexico.pregel-itc.com/training/locations/">Ubicaciones</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://mexico.pregel-itc.com/training/training-center-instructors-staff/">Instructores</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://mexico.pregel-itc.com/training/general-information-policies/">Información General y Políticas</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://mexico.pregel-itc.com/training/faq/">Preguntas</a></li>
											<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://mexico.pregel-itc.com/training/my-bookings/">Mis Inscripciones</a></li>
											<!-- <li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://mexico.pregel-itc.com/training/five-star-ambassadors/">Sponsors</a></li> -->
											<!-- <li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://mexico.pregel-itc.com/training/5-star-ambassadors-program/">5-Star Ambassador Program</a></li> -->
										</ul>
									</li>
								</ul>
								<?php joints_top_nav_right(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="grid-container">
	<div class="grid-x hide-for-large">	
		<div class="m-menu-icon"><button class="menu-icon" type="button" data-toggle="off-canvas"></button></div>	
		<div class="cell text-center mobile-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pregel-logo.png" alt="PreGel"></div>	
	</div>
</div>