<?php
/**
 * @
 * @ - Front Page
 * @version:		1.0
 *
 * @author: 		John Starr
 *
*/

get_header(); ?>

<!-- begin content -->

<div id="content" role="main">
	<div class="container-fluid">
		<div class="partners-container">
			<!-- Our Partners -->
			<?php if ( have_rows( 'partners_section' ) ) : ?>
				<?php while ( have_rows( 'partners_section' ) ) : the_row(); ?>
					<h4 class="partners-section-title"><?php the_sub_field( 'partners_section_title' ); ?></h4>
					<?php if ( have_rows( 'partners' ) ) : ?>
						<?php while ( have_rows( 'partners' ) ) : the_row(); ?>
							<?php $dell = get_sub_field( 'dell' ); ?>
							<?php if ( $dell ) : ?>
								<img class="dell-logo" src="<?php echo esc_url( $dell['url'] ); ?>" alt="<?php echo esc_attr( $dell['alt'] ); ?>" />
							<?php endif; ?>
							<?php $lenovo = get_sub_field( 'lenovo' ); ?>
							<?php if ( $lenovo ) : ?>
								<img class="lenovo-logo" src="<?php echo esc_url( $lenovo['url'] ); ?>" alt="<?php echo esc_attr( $lenovo['alt'] ); ?>" />
							<?php endif; ?>
							<?php $sonic_wall = get_sub_field( 'sonic_wall' ); ?>
							<?php if ( $sonic_wall ) : ?>
								<img class="sonic-wall-logo" src="<?php echo esc_url( $sonic_wall['url'] ); ?>" alt="<?php echo esc_attr( $sonic_wall['alt'] ); ?>" />
							<?php endif; ?>
							<?php $datto = get_sub_field( 'datto' ); ?>
							<?php if ( $datto ) : ?>
								<img class="datto-logo" src="<?php echo esc_url( $datto['url'] ); ?>" alt="<?php echo esc_attr( $datto['alt'] ); ?>" />
							<?php endif; ?>
							<?php $apc = get_sub_field( 'apc' ); ?>
							<?php if ( $apc ) : ?>
								<img class="apc-logo" src="<?php echo esc_url( $apc['url'] ); ?>" alt="<?php echo esc_attr( $apc['alt'] ); ?>" />
							<?php endif; ?>
						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div> <!-- end #content -->

<?php get_footer(); ?>