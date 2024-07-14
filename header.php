<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sws
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
  <?php
		$site_icon_url = get_site_icon_url();
		if ($site_icon_url) {
			echo '<link rel="icon" href="' . esc_url($site_icon_url) . '" sizes="32x32" />';
		}
	?>
	<?php wp_head(); ?>
</head>

<body class="bg-black" <?php body_class(); ?> style="background-image: url('<?php echo get_template_directory_uri();?>/images/Homepage.png');">
<?php wp_body_open(); ?>

<header class="bg-light-black text-white p-4 flex justify-between items-center md:hidden">
	<div class="flex items-center">
    <?php if(get_field('header_logo', 'options')): ?>
		<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
		   <img class="max-h-5" src="<?php echo get_field('header_logo', 'options')['url']; ?>" alt="<?php bloginfo('name'); ?>">
		</a>
    <?php endif; ?>
	</div>
	<button id="menuToggle" class="focus:outline-none md:hidden">
		<img src="<?php echo get_template_directory_uri();?>/images/hamber.png" alt="Menu">
	</button>
</header>
		
<div id="mobileMenuModal" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-900 text-white p-4 hidden">
	<div class="absolute inset-0 bg-black opacity-50"></div>
		<div class="bg-white w-1/2 h-full p-4">
			<ul id="mobileMenu" class="flex flex-col">
				<li class="pb-5"><a href="#" class="text-xl font-regular text-dark-black">What We Do?</</a></li>
				<li class="pb-5"><a href="#" class="text-xl font-regular text-dark-black">Resources</a></li>
				<li class="pb-5"><a href="#" class="text-xl font-regular text-dark-black">For Developers</a></li>
				<li class="pb-5"><a href="#" class="text-xl font-regular text-dark-black">About us</a></li>
				<li class="pb-5"><a href="#" class="text-xl font-regular text-dark-black">Services</a></li>
				<li class="pb-5"><a href="#" class="text-xl font-regular text-dark-black">Contact us</a></li>
			</ul>
		</div>	
</div>

<header class="site-header | w-full   md:flex">
  <div class="container mx-auto mt-5">
    <div class="header-wrap menu-hide-mobile | min-h-[85px] flex justify-between items-center relative z-10 header-menu-section mt-0 md:mt-8 px-10">
      <div class="logo w-1/6">
        <?php if(get_field('header_logo', 'options')): ?>
        <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
          <img class="max-h-5" src="<?php echo get_field('header_logo', 'options')['url']; ?>" alt="<?php bloginfo('name'); ?>">
        </a>
        <?php endif; ?>
      </div>
      <div id="navLinks" class="flex w-1/2 gap-7 hidden md:block">
        <nav class="hidden xl:block">
          <ul class="parent | text-text-color flex items-center space-x-7">
            <li class="group relative">
              <a href="https://smartworking.io/" class="flex items-center text-white hover:text-orange-400 gap-2 text-sm font-normal">What We Do</a>
            </li>
            <li class="group relative">
              <a href="https://smartworking.io/services/" class="flex items-center text-white hover:text-orange-400 text-sm font-normal">Resources</a>
            </li>
            <li class="group relative">
              <a href="https://smartworking.io/about-us/" class="flex items-center text-white  hover:text-orange-400 gap-2  text-sm font-normal">For Developers</a>
            </li>
            <li class="group relative dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle flex items-center text-white hover:text-orange-400 gap-2 text-sm font-normal">
              About us <span class="caret">▼</span>
            </a>
            <ul class="dropdown-menu absolute left-0 hidden mt-8 w-60 bg-dark-black text-white shadow-lg hidden rounded-xl px-3 py-3">
              <li><a href="https://smartworking.io/team/" class="block px-4 py-2 hover:bg-orange-400">Our Team</a></li>
              <li><a href="https://smartworking.io/mission/" class="block px-4 py-2 hover:bg-orange-400">Our Mission</a></li>
              <li><a href="https://smartworking.io/mission/" class="block px-4 py-2 hover:bg-orange-400">Our Vision</a></li>
              <li><a href="https://smartworking.io/mission/" class="block px-4 py-2 hover:bg-orange-400">Career</a></li>
            </ul>
            </li>
            <li class="group relative">
              <a href="https://smartworking.io/testimonials/" class="flex items-center text-white hover:text-orange-400 gap-2  text-sm font-normal">Services</a>
            </li>
            <li class="group relative">
              <a href="https://smartworking.io/testimonials/" class="flex items-center text-white hover:text-orange-400 gap-2  text-sm font-normal">Contact us</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="flex w-1/5  gap-7">
        <div class="header-buttons">
          <a href="https://smartworking.io/" class="button button-small px-4 py-2  rounded-md border-little-orange border-2 text-white font-medium radial-gradient-login text-base" target="">Login</a>
        </div>
        <div class="header-buttons">
          <a href="https://smartworking.io/" class="button button-small rounded-md px-4 py-2 bg-dark-orange text-white hover:text-orange-400 font-bold text-base" target="">Get Started</a>
        </div>
      </div>
    </div>
	
	<!-- home banner start -->
<?php if (have_rows('block')) : ?>
  <?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'home_header') : ?>	
	<div class="grid lg:flex lg:justify-between gap-10 lg:gap-15 items-center mt-9 mb-0 md:mb-24">
      <div class="w-full">
        <div class="grid gap-8 relative pr-5">
		
		  <?php if(get_sub_field('title')): ?>
          <h1 class="text-3xl sm:text-4xl lg:text-7xl 3xl:text-58 font-medium text-white lg:leading-tight"> <?php echo get_sub_field('title'); ?> </h1>
		  <?php endif; ?>
		  
		  <?php if(get_sub_field('description')): ?>
          <p class="flex text-white font-normal text-xl"><?php echo get_sub_field('description'); ?></p>
		  <?php endif; ?>
		  
		  <?php if(get_sub_field('button_name')): ?>
		  <?php $home_banner_url =  get_sub_field('button_url'); ?>
          <div class="header-buttons mt-6">
            <a href="<?php echo esc_url( $home_banner_url ); ?>" class="button button-small  px-8 py-4 font-bold rounded-xl text-white text-lg get-started-banner-home"><?php echo get_sub_field('button_name'); ?></a>
          </div>
		  <?php endif; ?>
		  
		  <?php if(get_sub_field('app_star_icon')): ?>
		  <div class="get-app mt-8">
           <img src="<?php echo get_sub_field('app_star_icon')['url']; ?>" alt="<?php echo get_sub_field('app_star_icon')['alt']; ?>">
          </div>
		  <?php endif; ?>	
		  
        </div>
      </div>
	  <?php if(get_sub_field('image')): ?>
      <div class="w-full relative">
        <img class="w-full my-12" src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
      </div>
	  <?php endif; ?>
    </div>
	<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>	
<!-- home banner close -->
  </div>
</header>

