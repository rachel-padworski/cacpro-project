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

<link rel="index" title="<?php bloginfo( 'name' ); ?>" href="<?php echo get_option('home'); ?>/" />
<?php wp_head(); ?>
</head>
<body id="preload" <?php body_class(); ?>>

<div class="wrap">

<!-- begin header -->
<header 
class="site-header" 
role="banner"
style="background-image: url('<?php echo get_field('background_image')['url']; ?>')">
	<div class="container">

		<a class="logo" href="http://managed-it-solutions.local/home/?preview=true">
			<?php $logo = get_field( 'logo' ); ?>
			<?php if ( $logo ) : ?>
				<img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
			<?php endif; ?>
		</a>

		<?php $support_button = get_field( 'support_button' ); ?>
		<?php if ( $support_button ) : ?>
			<a class="support-btn" href="<?php echo esc_url( $support_button['url'] ); ?>" target="<?php echo esc_attr( $support_button['target'] ); ?>"><?php echo esc_html( $support_button['title'] ); ?></a>
		<?php endif; ?>

		<h1 class="title"><?php echo get_field('title'); ?></h1>
		<h3 class="subtitle"><?php echo get_field('subtitle'); ?></h3>

		<?php $contact_button = get_field( 'contact-button' ); ?>
		<?php if ( $contact_button ) : ?>
			<a class="contact-btn" href="<?php echo esc_url( $contact_button['url'] ); ?>" target="<?php echo esc_attr( $contact_button['target'] ); ?>"><?php echo esc_html( $contact_button['title'] ); ?></a>
		<?php endif; ?>

		<?php $image = get_field( 'image' ); ?>
		<?php if ( $image ) : ?>
			<img class="banner-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
		<?php endif; ?>


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

	
	</div>

</header>
