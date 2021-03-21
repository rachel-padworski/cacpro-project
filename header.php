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

		<h1 class="title"><?php the_field('title'); ?></h1>
		<h3 class="subtitle"><?php the_field('subtitle'); ?></h3>

		<?php 
			$contact_button = get_field('contact_button');
			$support_button = get_field('support_button');
		?>

		<a href="http://managed-it-solutions.local/" class="logo">
			<img src="<?php echo the_field('logo')['url']; ?>" alt="logo" class="logo">
		</a>
		
		<a class="support-btn" role="button"
		href="<?php echo $support_button['url']; ?>"
		target="<?php echo $support_button['target']; ?>">
		<?php echo $support_button['title']; ?>
		</a>

		<a class="contact-btn" role="button"
		href="<?php echo $contact_button['url']; ?>"
		target="<?php echo $contact_button['target']; ?>">
		<?php echo $contact_button['title']; ?>
		</a>
		
		<img src="<?php echo the_field('image')['url']; ?>" alt="image" class="banner-img">

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
