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
// echo '<pre>';
// print_r(get_field('background_image'));
// echo'</pre>';
// die();

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
<link rel="stylesheet" href="css/style.css">
<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
<?php wp_head(); ?>
</head>
<body id="preload" <?php body_class(); ?>>

	<div class="wrap">

	<!-- begin header -->
	<header 
	class="site-header" 
	role="banner">
		<div class="site-header__background" style="background-image: url('http://managed-it-solutions.local/wp-content/uploads/2021/03/rectangle-1.png')">	
		</div>

		<div class="menu-container">
			<div class="menu-container__logo">
				<a href="<?php echo site_url(); ?>">
					<?php $logo = get_field( 'logo' ); ?>
					<?php if ( $logo ) : ?>
						<img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
					<?php endif; ?>
				</a>
			</div>

			<!-- <div class="menu-bars">
				<i class="bars">
					<?php the_field( 'menu_button' ); ?>
				</i>
			</div> -->

			<!-- if screen is bigger than ...? then only display the Remote Support Button. pixel width -->
			<div class="menu-container__btn">
				<?php $support_button = get_field( 'support_button' ); ?>
				<?php if ( $support_button ) : ?>
					<a href="<?php echo esc_url( $support_button['url'] ); ?>" target="<?php echo esc_attr( $support_button['target'] ); ?>"><?php echo esc_html( $support_button['title'] ); ?></a>
				<?php endif; ?>
			</div>

			<!-- <ul> -->
				<!-- else display the hambuger and the full menu with the Remote Support Button -->
				<!-- <div class="mobile-menu">
					<li class="services"><a href="#services">OUR SERVICES</a></li>
					<li class="contract"><a href="#contractvsnoncontract">CONTRACT VS NON-CONTRACT</a></li>
					<li class="why-mit"><a href="#whymanagedit">WHY MANAGED IT?</a></li>
					<li class="contact"><a href="#contact">CONTACT US</a></li>
					<li>
						<?php $support_button = get_field( 'support_button' ); ?>
						<?php if ( $support_button ) : ?>
							<a class="menu-container__support-btn" href="<?php echo esc_url( $support_button['url'] ); ?>" target="<?php echo esc_attr( $support_button['target'] ); ?>"><?php echo esc_html( $support_button['title'] ); ?></a>
						<?php endif; ?>
					</li>
				</div> -->
			<!-- </ul> -->
		</div>
		
		<div class="site-header__content">
			<div class="title">
				<h1><?php echo get_field('title'); ?></h1>
			</div>
			<div class="subtitle">
				<h3><?php echo get_field('subtitle'); ?></h3>
			</div>

			<div class="contact-btn">
			<?php $contact_button = get_field( 'contact-button' ); ?>
			<?php if ( $contact_button ) : ?>
				<a href="<?php echo esc_url( $contact_button['url'] ); ?>" target="<?php echo esc_attr( $contact_button['target'] ); ?>"><?php echo esc_html( $contact_button['title'] ); ?></a>
			<?php endif; ?>
			</div>
			
			<div class="banner-img">
			<?php $image = get_field( 'image' ); ?>
			<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
			<?php endif; ?>
			</div>
		</div>

		<!-- <div class="mobile-navigation">
			<nav class="site-menu">
				<ul>
					<li><a href="#services">OUR SERVICES</a></li>
					<li><a href="#contractvsnoncontract">CONTRACT VS NON-CONTRACT</a></li>
					<li><a href="#whymanagedit">WHY MANAGED IT?</a></li>
					<li><a href="#contact">CONTACT US</a></li>
				</ul>
			</nav>
		</div> -->

	

	

</header>
