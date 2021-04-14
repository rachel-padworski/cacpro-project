			
		</div> <!-- end .wrap -->

<!-- begin footer -->

		<footer class="site-footer">
			<div class="site-footer__container">
				<?php if ( have_rows( 'footer' ) ) : ?>
					<?php while ( have_rows( 'footer' ) ) : the_row(); ?>
				<div class="site-footer__col-one">
					<div class="site-footer__copyright">
						<?php if ( have_rows( 'copyright' ) ) : ?>
							<?php while ( have_rows( 'copyright' ) ) : the_row(); ?>
								<?php the_sub_field( 'managed_it_solutions' ); ?>
								<?php $facebook_icon = get_sub_field( 'facebook_icon' ); ?>
								<?php if ( $facebook_icon ) : ?>
									<img src="<?php echo esc_url( $facebook_icon['url'] ); ?>" alt="<?php echo esc_attr( $facebook_icon['alt'] ); ?>" />
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="site-footer__cacpro">
						<?php if ( have_rows( 'cross_and_crown' ) ) : ?>
							<?php while ( have_rows( 'cross_and_crown' ) ) : the_row(); ?>
								<?php the_sub_field( 'handcrafted_by' ); ?>
								<?php $logo = get_sub_field( 'logo' ); ?>
								<?php if ( $logo ) : ?>
									<img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
								<?php endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</footer>
		<?php wp_footer(); ?>
		<!-- <script src="/js/script.js"></script> -->
		<!-- <script
		type="text/javascript"
		src="https://use.fontawesome.com/releases/v5.15.3/js/conflict-detection.js">
		</script> -->
		<!-- <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
	</body>
</html>
