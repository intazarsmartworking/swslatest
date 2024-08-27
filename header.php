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
<!-- background-image: url('<?php echo get_template_directory_uri();?>/images/Homepage.png'); -->
<body  <?php body_class(); ?> style="">
<?php wp_body_open(); ?>

<header class="main-header w-[100%]">
  <div class="mobile-menu">
    <div class="grid grid-cols-10 content-center h-[100%] header-box relative">
      <div class="col-span-7 content-center">
        <?php if(get_field('header_logo', 'options')): ?>
          <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
            <img class="h-[25px]" src="<?php echo get_field('header_logo', 'options')['url']; ?>" alt="<?php bloginfo('name'); ?>">
          </a>
        <?php endif; ?>
      </div>
      <div class="col-span-3 content-center text-right">
        <button id="mobile-menu-show" class="button inline-block button-small rounded-md p-[8px] border-little-orange border-2 text-[16px] text-white radial-gradient-login">
          <img class="w-[22px]" src="<?php echo get_template_directory_uri();?>/images/menu-icons.svg">
        </button>
      </div>
    </div>
  </div>

  <div class="container mx-auto !p-0 relative desk-top-menu" id="mobile-show-menu">
    <div class="grid grid-cols-1 md:grid-cols-10 lg:gap-4 content-center h-[100%] header-box relative">
      <div class="col-span-2 content-center hide-mobile">
        <?php if(get_field('header_logo', 'options')): ?>
          <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
            <img class="h-[28px]" src="<?php echo get_field('header_logo', 'options')['url']; ?>" alt="<?php bloginfo('name'); ?>">
          </a>
        <?php endif; ?>
      </div>
      <div class="col-span-5 content-center relative">
        <ul class="header-menu">
          <li><a href="/about/">About</a></li>
          <li><a href="/vetting-process/">Vetting Process</a></li>
          <li>
            <a data-mainmenu="hireDevId">
            Hire Developer
              <img class="w-[22px] caret-down" src="<?php echo get_template_directory_uri();?>/images/caret-down.png">
              <img class="w-[22px] caret-up" src="<?php echo get_template_directory_uri();?>/images/caret-up.png">
            </a>
          </li>
          <li><a href="/pricing/">Pricing</a></li>
		  <li><a href="/blog/">Insights</a></li>
        </ul>
      </div>
      <div class="col-span-3 content-center text-end">
        <a href="/find-a-developer/" class="button inline-block button-small rounded-md px-[20px] py-[10px] border-little-orange border-2 text-[16px] text-white radial-gradient-login mr-[20px]" target="">Find a Developer</a>
        <a href="/contact-us/" class="button inline-block button-small rounded-md px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange " target="">Contact Us</a>
      </div>
    </div> 
    <div class="mega-menu-box">
      
      <div class="show-main-menu" id="hireDevId">
          <div class="grid grid-cols-1 md:grid-cols-9 h-[100%]">
            <div class="col-span-3">
              <ul class="mega-menu-left">
                <li class="active" data-menu="frontEndDev">
                  <a>
                    <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/front-end-development.svg">
                    <span class="menu-title">Front-End Development</span>
                    <span class="menu-sub-title">Front-End Development</span>
                  </a>
                </li>
                <li data-menu="backEndDev">
                  <a>
                    <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/back-end-development.svg">
                    <span class="menu-title">Back-End Development</span>
                    <span class="menu-sub-title">Front-End Development</span>
                  </a>
                </li>
                <li data-menu="fullStackDev">
                  <a>
                  <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/full-stack-development.svg">
                    <span class="menu-title">Full Stack Development</span>
                    <span class="menu-sub-title">Front-End Development</span>
                  </a>
                </li>
                <li data-menu="mobileDev">
                  <a>
                  <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/mobile-development.svg">
                    <span class="menu-title">Mobile Development</span>
                    <span class="menu-sub-title">Front-End Development</span>
                  </a>
                </li>
                <li data-menu="webDev">
                  <a>
                    <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/web-development.svg">
                    <span class="menu-title">Web Development</span>
                    <span class="menu-sub-title">Front-End Development</span>
                  </a>
                </li>
                <li data-menu="gameDev">
                  <a>
                    <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/game-gevelopment.svg">
                    <span class="menu-title">Game & Systems Development</span>
                    <span class="menu-sub-title">Front-End Development</span>
                  </a>
                </li>
                <li data-menu="specializedDev">
                  <a>
                    <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/specialized-development.svg">
                    <span class="menu-title">Specialized Development</span>
                    <span class="menu-sub-title">Front-End Development</span>
                  </a>
                </li>
                
              </ul>
            </div>
            <div class="col-span-3 py-[12px]">
              <div class="w-[100%] bg-[#231008] h-[100%] rounded-[10px] p-5">
                  <div class="show-more-menu show-more" id="frontEndDev">
                    <ul class="mega-menu-center">
                      <li><a href="#">AngularJs Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">Front End Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">JavaScript Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">ReactJs Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">VueJs Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
                  <div class="show-more-menu" id="backEndDev">
                    <ul class="mega-menu-center">
                      <li><a href="#">.Net Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">Back End Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">C# Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">Django Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">Laravel Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">Node.js Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">PHP Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">Python Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">Ruby on Rails Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">SQL Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
                  <div class="show-more-menu" id="fullStackDev">
                    <ul class="mega-menu-center">
                      <li><a href="#">Full Stack Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
                  <div class="show-more-menu" id="mobileDev">
                    <ul class="mega-menu-center">
                      <li><a href="#">Android Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">iOS Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">App Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
                  <div class="show-more-menu" id="webDev">
                    <ul class="mega-menu-center">
                      <li><a href="#">Web Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">Web3 Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">WordPress Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">Magento Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">Shopify Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
                  <div class="show-more-menu" id="gameDev">
                    <ul class="mega-menu-center">
                      <li><a href="#">C & C++ Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">JavaScript Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">React Developers <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
                  <div class="show-more-menu" id="specializedDev">
                    <ul class="mega-menu-center">
                      <li><a href="#">Data Scientist <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="#">Data Analyst <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
            <div class="col-span-3 p-4">
             <img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/menu-img.svg">
            </div>
          </div>
      </div>

      <div class="show-main-menu" id="insightsId">
        <div class="grid grid-cols-1 md:grid-cols-9 h-[100%]">
            <div class="col-span-3">
              <ul class="mega-menu-left">
                <li>
                  <a href="#">
                    <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/front-end-development.svg">
                    <span class="menu-title">Blogs</span>
                    <span class="menu-sub-title">Learn from the experts</span>
                  </a>
                </li>
                
              </ul>
            </div>
            <div class="col-span-3 py-[12px]"></div>
            <div class="col-span-3 p-4">
              <img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/menu-img.svg">
            </div>
          </div>
      </div>


    </div>

  </div>
</header>


		


<header class="site-header hidden">
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
	

  </div>
</header>

