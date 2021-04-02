<?php
/**
 * @
 * @ - Header
 * @version:		1.0
 *
 * @author: 		John Starr
 * @website:		cacpro.com
 *
*/


// get_header();
?>

<!DOCTYPE html>
<head>
	<?php
		if(is_front_page())
		{
	?>
			<title><?php echo get_bloginfo('name'); ?></title>
	<?php
		} 
		else
		{
	?>
			<title><?php wp_title('', true, 'right'); echo ' | ' . get_bloginfo('name'); ?></title>
	<?php
		}
	?>
	<meta name="MobileOptimized" content="width" />
	<meta name="HandheldFriendly" content="True"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
	<!-- font -->
	<link href="//cloud.typenetwork.com/projects/5441/fontface.css/" rel="stylesheet" type="text/css">
	<!-- end font -->
	<!-- <link rel="stylesheet" href="./scss/style.scss"> -->
	<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
	<?php wp_head(); ?>
</head>
<body id="preload" <?php body_class(); ?>>

	<!-- begin header -->
	<header class="site-header" role="banner">
		<div class="overlay has-fade"></div>

		<!-- begin navbar -->
		<nav class="container flex flex-jc-sb flex-ai-c">
			<a href="<?php echo site_url(); ?>" class="site-header__logo">
				<?php $logo = get_field( 'logo' ); ?>
				<?php if ( $logo ) : ?>
					<img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
				<?php endif; ?>
			</a>
				
			<a href="#" id="btnHamburger" class="site-header__toggle hide-for-desktop">
				<span></span>
				<span></span>
				<span></span>
			</a>
				
			<?php $support_button = get_field( 'support_button' ); ?>
			<?php if ( $support_button ) : ?>
				<a href="<?php echo esc_url( $support_button['url'] ); ?>" class="button site-header__btn hide-for-mobile" target="<?php echo esc_attr( $support_button['target'] ); ?>"><?php echo esc_html( $support_button['title'] ); ?></a>
			<?php endif; ?>

						
		</nav>
		<!-- end navbar -->
		<!-- begin menu overlay -->
		<div class="site-header__menu hide-for-desktop has-fade">	
		
			<a href="#services">OUR SERVICES</a>
			<a href="#contractvsnoncontract">CONTRACT VS NON-CONTRACT</a>
			<a href="#whymanagedit">WHY MANAGED IT?</a>
			<a href="#contact">CONTACT US</a>
			
			<?php $support_button = get_field( 'support_button' ); ?>
			<?php if ( $support_button ) : ?>
				<a href="<?php echo esc_url( $support_button['url'] ); ?>" class="button site-header__btn hide-for-desktop" target="<?php echo esc_attr( $support_button['target'] ); ?>"><?php echo esc_html( $support_button['title'] ); ?></a>
			<?php endif; ?>
		</div>
		<!--end menu overlay  -->
					
		
	

</header>
