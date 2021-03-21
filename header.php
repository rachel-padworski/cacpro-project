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
<header class="site-header" role="banner">
	<div class="container">

		<div class="site-menu">
			<a href="http://managed-it-solutions.local/" class="logo">
				<img src="http://managed-it-solutions.local/wp-content/uploads/2021/03/logo.png" alt="logo" class="logo">
			</a>
			<i class="logo"><?php  ?></i>
			<nav class="mobile-navigation">
				<ul>
					<li><a href="#services">OUR SERVICES</a></li>
					<li><a href="#contractvsnoncontract">CONTRACT VS NON-CONTRACT</a></li>
					<li><a href="#whymanagedit">WHY MANAGED IT?</a></li>
					<li><a href="#contact">CONTACT US</a></li>
				</ul>
			</nav>
			<div class="remote-support-btn">
				<button id="remote-support-btn">Remote Support</button>
			</div>
		</div>

		<h1 class="headline">Empower your business, and IT.</h1>
		<h3 class="sub-headline">Computer IT services for commercial and residential clients in the greater Indianapolis area.</h3>
		<button class="banner-btn">Contact Us</button>
	
	</div>

</header>
