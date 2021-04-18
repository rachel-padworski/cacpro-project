<?php
/**
 * @
 * @ - Front Page
 * @version:		1.0
 *
 * @author: 		Rachel Padworski
 *
 */

get_header(); ?>


<!-- begin content -->
<div id="content" role="main" <?php post_class(); ?>>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    				
		<?php the_content(); ?>
    <?php endwhile; else:?>
	<?php endif; ?>					
</div> 

<!-- hero section -->
<section class="hero">
	<div class="hero__container">
		<div class="hero__image">
			<?php $background_image = get_field( 'background_image' ); ?>
			<?php if ( $background_image ) : ?>
				<img src="<?php echo esc_url( $background_image['url'] ); ?>" alt="<?php echo esc_attr( $background_image['alt'] ); ?>" />
			<?php endif; ?>
		</div>
		<div class="animatedParent">
			<div class="hero__img2 animated fadeInRight">
				<?php $image = get_field( 'image' ); ?>
				<?php if ( $image ) : ?>
					<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
		</div>

		<div class="hero__text flex">
			<h1><?php echo get_field('title'); ?></h1>
			<h3><?php echo get_field('subtitle'); ?></h3>
			<?php $contact_button = get_field( 'contact-button' ); ?>
			<?php if ( $contact_button ) : ?>
				<a href="<?php echo esc_url( $contact_button['url'] ); ?>" class="hero__btn animsition-link" target="<?php echo esc_attr( $contact_button['target'] ); ?>"><?php echo esc_html( $contact_button['title'] ); ?></a>
			<?php endif; ?>
		</div>
	</div>
</section>

<!-- Our Partners -->
<section class="partners" id="partners-section">
	<span class="partners__span">
		<?php if ( have_rows( 'partners_section' ) ) : ?>
			<?php while ( have_rows( 'partners_section' ) ) : the_row(); ?>
			<div class="partners__title">
				<h4 class="title" id="partners-section-title"><?php the_sub_field( 'partners_section_title' ); ?></h4>
			</div>	
			<div class="partners__logos">
				<?php if ( have_rows( 'partners' ) ) : ?>
					<?php while ( have_rows( 'partners' ) ) : the_row(); ?>
						<?php $dell = get_sub_field( 'dell' ); ?>
						<?php if ( $dell ) : ?>
							<a href="https://www.dell.com/en-us"><img class="dell" id="dell-logo" src="<?php echo esc_url( $dell['url'] ); ?>" alt="<?php echo esc_attr( $dell['alt'] ); ?>" /></a>
						<?php endif; ?>
						<?php $lenovo = get_sub_field( 'lenovo' ); ?>
						<?php if ( $lenovo ) : ?>
							<a href="https://www.lenovo.com/us/en/"><img class="lenovo" id="lenovo-logo" src="<?php echo esc_url( $lenovo['url'] ); ?>" alt="<?php echo esc_attr( $lenovo['alt'] ); ?>" /></a>
						<?php endif; ?>
						<?php $sonic_wall = get_sub_field( 'sonic_wall' ); ?>
						<?php if ( $sonic_wall ) : ?>
							<a href="https://www.sonicwall.com/"><img class="sonic-wall" id="sonic-wall-logo" src="<?php echo esc_url( $sonic_wall['url'] ); ?>" alt="<?php echo esc_attr( $sonic_wall['alt'] ); ?>" /></a>
						<?php endif; ?>
						<?php $datto = get_sub_field( 'datto' ); ?>
						<?php if ( $datto ) : ?>
							<a href="https://www.datto.com/"><img class="datto" id="datto-logo" src="<?php echo esc_url( $datto['url'] ); ?>" alt="<?php echo esc_attr( $datto['alt'] ); ?>" /></a>
						<?php endif; ?>
						<?php $apc = get_sub_field( 'apc' ); ?>
						<?php if ( $apc ) : ?>
							<a href="https://www.apc.com/us/en/"><img class="apc" id="apc-logo" src="<?php echo esc_url( $apc['url'] ); ?>" alt="<?php echo esc_attr( $apc['alt'] ); ?>" /></a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
			</div>	
			<?php endwhile; ?>

		<?php endif; ?>
	</span>
</section>


<!-- Services -->
<section class="services container" id="services-section">

		<h4>
		<?php if ( have_rows( 'services_section' ) ) : ?>
		<?php while ( have_rows( 'services_section' ) ) : the_row(); ?>
			<?php the_sub_field( 'services_section_title' ); ?>
		</h4>


		<div class="services__cards">
			<?php if ( have_rows( 'services' ) ) : ?>
				<?php while ( have_rows( 'services' ) ) : the_row(); ?>
						<div class="services__card">
							<?php if ( have_rows( 'servers' ) ) : ?>
								<?php while ( have_rows( 'servers' ) ) : the_row(); ?>
									<i class="fa <?php the_sub_field( 'icon' ); ?>"></i>
									<h3>
										<?php the_sub_field( 'title' ); ?>
									</h3>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>	
						<div class="services__card">
							<?php if ( have_rows( 'data_backup_recovery' ) ) : ?>
								<?php while ( have_rows( 'data_backup_recovery' ) ) : the_row(); ?>
									<i class="fa <?php the_sub_field( 'icon' ); ?>"></i>

									<h3>
										<?php the_sub_field( 'title' ); ?>
									</h3>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>	
						<div class="services__card">
							<?php if ( have_rows( 'workstations' ) ) : ?>
								<?php while ( have_rows( 'workstations' ) ) : the_row(); ?>
									<i class="fa <?php the_sub_field( 'icon' ); ?>"></i>

									<h3>
										<?php the_sub_field( 'title' ); ?>
									</h3>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>	
						<div class="services__card">
							<?php if ( have_rows( 'networking' ) ) : ?>
								<?php while ( have_rows( 'networking' ) ) : the_row(); ?>
									<i class="fa <?php the_sub_field( 'icon' ); ?>"></i>
									<h3>
										<?php the_sub_field( 'title' ); ?>
									</h3>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>	
						<div class="services__card">
							<?php if ( have_rows( 'microsoft_office_solutions' ) ) : ?>
								<?php while ( have_rows( 'microsoft_office_solutions' ) ) : the_row(); ?>
									<i class="fa <?php the_sub_field( 'icon' ); ?>"></i>
									<h3>
										<?php the_sub_field( 'title' ); ?>
									</h3>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>	
						<div class="services__card">
							<?php if ( have_rows( 'cloud_solutions' ) ) : ?>
								<?php while ( have_rows( 'cloud_solutions' ) ) : the_row(); ?>
									<i class="fa <?php the_sub_field( 'icon' ); ?>"></i>

									<h3>
										<?php the_sub_field( 'title' ); ?>
									</h3>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>	
						<div class="services__card">
							<?php if ( have_rows( 'voip_phone_systems' ) ) : ?>
								<?php while ( have_rows( 'voip_phone_systems' ) ) : the_row(); ?>
									<i class="fa <?php the_sub_field( 'icon' ); ?>"></i>

									<h3>
										<?php the_sub_field( 'title' ); ?>
									</h3>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>	
						<div class="services__card">
							<?php if ( have_rows( 'video_surveillance_systems' ) ) : ?>
								<?php while ( have_rows( 'video_surveillance_systems' ) ) : the_row(); ?>
									<i class="fa <?php the_sub_field( 'icon' ); ?>"></i>
									<h3>
										<?php the_sub_field( 'title' ); ?>
									</h3>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>	
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	
</section>


<!--Contract vs Non-Contract -->
<section class="contract" id="contract-section">
  	<div class="contract__title">
		<?php if ( have_rows( 'contract_section' ) ) : ?>
			<?php while ( have_rows( 'contract_section' ) ) : the_row(); ?>
			<?php the_sub_field( 'contract_vs_non-contract_title' ); ?>
		</div>
		<div class="contract__lists">
			<div class="contract__items">
			<?php if ( have_rows( 'contract_items' ) ) : ?>
				<?php while ( have_rows( 'contract_items' ) ) : the_row(); ?>
				<ul>
					<li>
						<div class="contract__li-content">
							<?php if ( have_rows( 'contract_item_1' ) ) : ?>
								<?php while ( have_rows( 'contract_item_1' ) ) : the_row(); ?>
									<span><?php the_sub_field( 'title' ); ?></span>
									<span><?php the_sub_field( 'icon' ); ?></span>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</li>
					<li>
						<div class="contract__li-content">
							<?php if ( have_rows( 'contract_item_2' ) ) : ?>
								<?php while ( have_rows( 'contract_item_2' ) ) : the_row(); ?>
									<span><?php the_sub_field( 'title' ); ?></span>
									<span><?php the_sub_field( 'icon' ); ?></span>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</li>
					<li>
						<div class="contract__li-content">
							<?php if ( have_rows( 'contract_item_3' ) ) : ?>
								<?php while ( have_rows( 'contract_item_3' ) ) : the_row(); ?>
									<span><?php the_sub_field( 'title' ); ?></span>
									<span><?php the_sub_field( 'icon' ); ?></span>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</li>
					<li>
						<div class="contract__li-content">
							<?php if ( have_rows( 'contract_item_4' ) ) : ?>
								<?php while ( have_rows( 'contract_item_4' ) ) : the_row(); ?>
									<span><?php the_sub_field( 'title' ); ?></span>
									<span><?php the_sub_field( 'icon' ); ?></span>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</li>
					<li>
						<div class="contract__li-content">
							<?php if ( have_rows( 'contract_item_5' ) ) : ?>
								<?php while ( have_rows( 'contract_item_5' ) ) : the_row(); ?>
									<span><?php the_sub_field( 'title' ); ?></span>
									<span><?php the_sub_field( 'icon' ); ?></span>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</li>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
				</ul>
			</div>
			<div class="contract__nonitems">
			<?php if ( have_rows( 'non-contract_items' ) ) : ?>
				<?php while ( have_rows( 'non-contract_items' ) ) : the_row(); ?>
				<ul>
					<li>
						<div class="contract__li-content">
							<?php if ( have_rows( 'non-contract_item_1' ) ) : ?>
								<?php while ( have_rows( 'non-contract_item_1' ) ) : the_row(); ?>
									<span><?php the_sub_field( 'title' ); ?></span>
									<span><?php the_sub_field( 'icon' ); ?></span>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</li>
					<li>
						<div class="contract__li-content">
							<?php if ( have_rows( 'non-contract_item_2' ) ) : ?>
								<?php while ( have_rows( 'non-contract_item_2' ) ) : the_row(); ?>
									<span><?php the_sub_field( 'title' ); ?></span>
									<span><?php the_sub_field( 'icon' ); ?></span>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</li>
					<li>
						<div class="contract__li-content">
							<?php if ( have_rows( 'non-contract_item_3' ) ) : ?>
								<?php while ( have_rows( 'non-contract_item_3' ) ) : the_row(); ?>
									<span><?php the_sub_field( 'title' ); ?></span>
									<span><?php the_sub_field( 'icon' ); ?></span>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</li>
					<li>
						<div class="contract__li-content">
							<?php if ( have_rows( 'non-contract_item_4' ) ) : ?>
								<?php while ( have_rows( 'non-contract_item_4' ) ) : the_row(); ?>
									<span><?php the_sub_field( 'title' ); ?></span>
									<span><?php the_sub_field( 'icon' ); ?></span>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</li>
					<li>
						<div class="contract__li-content">
							<?php if ( have_rows( 'non-contract_item_5' ) ) : ?>
								<?php while ( have_rows( 'non-contract_item_5' ) ) : the_row(); ?>
									<span><?php the_sub_field( 'title' ); ?></span>
									<span><?php the_sub_field( 'icon' ); ?></span>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</li>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
			</ul>
			</div>
		<!-- <div class="contract__bkgimage">
			<?php $background_image = get_sub_field( 'background_image' ); ?>
			<?php if ( $background_image ) : ?>
				<img src="<?php echo esc_url( $background_image['url'] ); ?>" alt="<?php echo esc_attr( $background_image['alt'] ); ?>" />
			<?php endif; ?>
		</div> -->
		<?php endwhile; ?>
	<?php endif; ?>
</section>


	<!--Why Managed IT?-->
<section class="why-mit" id="why-mit-section">
	<div class="why-mit__grid">
		<?php if ( have_rows( 'why_mit_section' ) ) : ?>
			<?php while ( have_rows( 'why_mit_section' ) ) : the_row(); ?>
			<?php $why_mit_image = get_sub_field( 'why_mit_image' ); ?>
			<?php if ( $why_mit_image ) : ?>
				<img class="why-mit__img" src="<?php echo esc_url( $why_mit_image['url'] ); ?>" alt="<?php echo esc_attr( $why_mit_image['alt'] ); ?>" />
				<!-- <div class="why-mit__img" style="background-image: url('<?php echo esc_url( $why_mit_image['url'] ); ?>')"></div> -->
			<?php endif; ?>
		
			<div class="why-mit__text">
				<div class="why-mit__title">
					<?php the_sub_field( 'why_mit_section_title' ); ?>
				</div>
				<div class="why-mit__list">
					<?php if ( have_rows( 'why_mit_list' ) ) : ?>
						<?php while ( have_rows( 'why_mit_list' ) ) : the_row(); ?>
						<ul>
							<li class="box-a">
								<?php if ( have_rows( 'budget_conscious' ) ) : ?>
									<?php while ( have_rows( 'budget_conscious' ) ) : the_row(); ?>
										<i class="fa <?php the_sub_field( 'icon' ); ?>"></i>
										<h3><?php the_sub_field( 'title' ); ?></h3>
										<p><?php the_sub_field( 'paragraph' ); ?></p>
									<?php endwhile; ?>
								<?php endif; ?>
							</li>
							<li class="box-b">
								<?php if ( have_rows( 'personal_approach' ) ) : ?>
									<?php while ( have_rows( 'personal_approach' ) ) : the_row(); ?>
										<i class="fa <?php the_sub_field( 'icon' ); ?>"></i>
										<h3><?php the_sub_field( 'title' ); ?></h3>
										<p><?php the_sub_field( 'paragraph' ); ?></p>
									<?php endwhile; ?>
								<?php endif; ?>
							</li>
							<li class="box-c">
								<?php if ( have_rows( 'stellar_service' ) ) : ?>
									<?php while ( have_rows( 'stellar_service' ) ) : the_row(); ?>
										<i class="fa <?php the_sub_field( 'icon' ); ?>"></i>
										<h3><?php the_sub_field( 'title' ); ?></h3>
										<p><?php the_sub_field( 'paragraph' ); ?></p>
									<?php endwhile; ?>
								<?php endif; ?>
							</li>
							<li class="box-d">
								<?php if ( have_rows( '247_support' ) ) : ?>
									<?php while ( have_rows( '247_support' ) ) : the_row(); ?>
										<i class="fa <?php the_sub_field( 'icon' ); ?>"></i>
										<h3><?php the_sub_field( 'title' ); ?></h3>
										<p><?php the_sub_field( 'paragraph' ); ?></p>
									<?php endwhile; ?>
								<?php endif; ?>
							</li>
						</ul>
						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
				</div>
				<div class="why-mit__btn">
					<?php $why_mit_button = get_sub_field( 'why_mit_button' ); ?>
					<?php if ( $why_mit_button ) : ?>
						<a href="<?php echo esc_url( $why_mit_button['url'] ); ?>" target="<?php echo esc_attr( $why_mit_button['target'] ); ?>"><?php echo esc_html( $why_mit_button['title'] ); ?></a>
						<?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>



<!-- Testimonials -->
<div class="swiper">
	<!-- Slider main container -->
	<div class="swiper-container">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
			<?php if ( have_rows( 'testimonials' ) ) : ?>
				<?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
					<div class="swiper-slide"><?php if ( have_rows( 'testimonial_1' ) ) : ?>
						<?php while ( have_rows( 'testimonial_1' ) ) : the_row(); ?>
							<span class="icon"><?php the_sub_field( 'icon' ); ?></span>
							<span class="text"><?php the_sub_field( 'text' ); ?></span>
							<?php $logo = get_sub_field( 'logo' ); ?>
							<?php if ( $logo ) : ?>
								<span><img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" /></span>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
					<div class="swiper-slide"><?php if ( have_rows( 'testimonial_1' ) ) : ?>
						<?php while ( have_rows( 'testimonial_2' ) ) : the_row(); ?>
							<span class="icon"><?php the_sub_field( 'icon' ); ?></span>
							<span class="text"><?php the_sub_field( 'text' ); ?></span>
							<?php $logo = get_sub_field( 'logo' ); ?>
							<?php if ( $logo ) : ?>
								<span><img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" /></span>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>
		</div>
	</div>
	
	<!-- navigation buttons -->
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
</div>

<!-- Contact Form -->
<section class="contact" id="contact-us">
	<?php $contact_us = get_field( 'contact_us' ); ?>
	<?php if ( $contact_us ) : ?>
		<?php gravity_form( $contact_us['id'] ); ?>
	<?php endif; ?>
</section>


<!-- end #content -->


<?php get_footer(); ?>