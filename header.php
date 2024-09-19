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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
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
            <img class="h-[23px]" src="<?php echo get_field('header_logo', 'options')['url']; ?>" alt="<?php bloginfo('name'); ?>">
          </a>
        <?php endif; ?>
      </div>
      <div class="col-span-5 content-center relative">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header_menu',
            'menu_class'     => 'header-menu',
            'container'      => false,
            'walker'         => new Hire_Custom_Walker_Nav_Menu()
        ));
        ?>
      </div>
      <div class="col-span-3 content-center text-start md:text-end">
        <a href="/find-a-developer/" class="button mobile-m-0 inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-little-orange border-2 text-[16px] text-white radial-gradient-login mr-0 lg:mr-[20px] hover:bg-dark-orange" target="">Find a Developer</a>
        <a href="/contact-us/" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange " target="">Contact Us</a>
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
                    <span class="menu-title">Front-End Developer</span>
                  </a>
                </li>
                <li data-menu="backEndDev">
                  <a>
                    <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/back-end-development.svg">
                    <span class="menu-title">Back-End Developer</span>
                  </a>
                </li>
                <li data-menu="fullStackDev">
                  <a>
                  <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/full-stack-development.svg">
                    <span class="menu-title">Full Stack Developer</span>
                  </a>
                </li>
                <li data-menu="webDev">
                  <a>
                  <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/mobile-development.svg">
                    <span class="menu-title">Web Developer</span>
                  </a>
                </li>
                <li data-menu="cloudDev">
                  <a>
                    <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/web-development.svg">
                    <span class="menu-title">Cloud Developer</span>
                  </a>
                </li>
                
                <li data-menu="mobileDev">
                  <a>
                    <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/specialized-development.svg">
                    <span class="menu-title">Mobile App Developer</span>
                  </a>
                </li>
				
				<li data-menu="specializedDev">
                  <a>
                    <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/specialized-development.svg">
                    <span class="menu-title">Software Developer</span>
                  </a>
                </li>
				
				<li data-menu="trendingDev">
                  <a>
                    <img class="w-[24px] menu-icons" src="<?php echo get_template_directory_uri();?>/images/game-gevelopment.svg">
                    <span class="menu-title">Trending Developer</span>
                  </a>
                </li>
                
              </ul>
            </div>
            <div class="col-span-3 py-[12px]">
              <div class="w-[100%] bg-[#231008] h-[100%] rounded-[10px] p-5">
                  <div class="show-more-menu show-more" id="frontEndDev">
                    <ul class="mega-menu-center">
                      <li><a href="/hire/react-developer/">React Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/angular-developer/">Angular Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/javascript-developer/">JavaScript Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/blockchain-developer/">Blockchain Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/qa-tester/">QA Engineer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
                  <div class="show-more-menu" id="backEndDev">
                    <ul class="mega-menu-center">
                      <li><a href="/hire/blockchain-developer/">Blockchain Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/php-developer/">PHP Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/laravel-developer/">Laravel Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/java-developer/">Java Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/python/">Python Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/ruby-on-rails-developer/">Ruby on Rails Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/dot-net-developer/">.Net Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/node-js-developer/">Node.js Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/django-developer/">Django Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/qa-tester/">QA Engineer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
                  <div class="show-more-menu" id="fullStackDev">
                    <ul class="mega-menu-center">
                      <li><a href="/hire/blockchain-developer/">Blockchain Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/laravel-developer/">Laravel Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/react-developer/">React Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/angular-developer/">Angular Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/node-js-developer/">Node.js  Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/qa-tester/">QA Engineer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
				  <div class="show-more-menu" id="webDev">
                    <ul class="mega-menu-center">
                      <li><a href="/hire/laravel-developer/">Laravel Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/woocommerce-developer/">WooCommerce Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/wordpress-developer/">WordPress Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/magento-developer/">Magento Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/shopify-developer/">Shopify Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/react-developer/">React Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/angular-developer/">Angular Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/javascript-developer/">JavaScript Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/node-js-developer/">Node.js Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/qa-tester/">QA Engineer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
				  <div class="show-more-menu" id="cloudDev">
                    <ul class="mega-menu-center">
                      <li><a href="/hire/devops-developer/">DevOps Engineer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/aws-developer/">AWS Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/azure-developer/">Azure Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
				  
                  <div class="show-more-menu" id="mobileDev">
                    <ul class="mega-menu-center">
                      <li><a href="/hire/android-developer/">Android Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/ios-developer/">iOS Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/flutter-developer/">Flutter Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/react-native-developer/">React Native Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
                  
                  
                  <div class="show-more-menu" id="specializedDev">
                    <ul class="mega-menu-center">
                      <li><a href="/hire/java-developer/">Java Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/python/">Python Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="hire/dot-net-developer/">.NET Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/flutter-developer/">Flutter Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/docker-developer/">Docker Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/kubernetes-developer/">Kubernetes Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/javascript-developer/">JavaScript Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/php-developer/">PHP Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
				  
				  <div class="show-more-menu" id="trendingDev">
                    <ul class="mega-menu-center">
                      <li><a href="/hire/unity-developer/">Unity Developer <span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/game-developer/">Game Developer<span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/ai-developer/">AI Developer<span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/salesforce-developer/">Salesforce Developer<span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                      <li><a href="/hire/mongodb-developer/">MongoDB Developer<span><img class="w-[20px]" src="<?php echo get_template_directory_uri();?>/images/right-arrow.png" /></span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
            <div class="col-span-3 p-4">
              <div class="max-w-md relative z-10 rounded-[12px] min-h-[250px] bg-white overflow-hidden shadow-lg mx-auto">
                <div class="px-6 py-4">
                  <div class="block">
                    <p class="text-[14px] text-[#64748b]">Hourly rate</p>
                  </div>
                  <div class="block">
                    <p class="text-[32px] font-[500] ">£20/hr</p>
                  </div>
                  <div class="block w-100 mt-3 h-[90px] border-b border-gray-400">
                    <div class="sliderwrap">
                      <input class="home-range-slider header-range" type="range" max="100" value="0">
                    </div>
                  </div>
                  <div class="block pt-5">
                    <div class="flex">
                      <div class="grow">
                        <span class="text-[11px] font-[400] text-gray-500 ">Amount save</span>
                      </div>
                      <div class="grow text-end">
                        <span class="text-[15px] price-value font-[500] text-black">£ </span>
                      </div>
                      
                    </div>
                  </div>

                
                </div>
              </div>
              <p class="text-[18px] text-[#FF4E03] mt-8">Curious About Cost?</p>
              <p class="text-[12px] text-[#fff] mt-3">Find out the price of your next remote hire here.</p>
              <a href="/pricing/"> <button class="block py-2 w-[100%] mt-4 rounded-lg text-center px-8 bg-[#FF4E03] text-[16px] text-[#fff]">Click to calculate now</button> </a>
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
            <div class="max-w-md relative z-10 rounded-3xl min-h-[250px] bg-white overflow-hidden shadow-lg mx-auto">
                <div class="px-6 py-4">
                  <div class="block">
                    <p class="text-[14px] text-[#64748b]">Hourly rate</p>
                  </div>
                  <div class="block">
                    <p class="text-[32px] font-[500] ">£20/hr</p>
                  </div>
                  <div class="block w-100 mt-3 h-[90px] border-b border-gray-400">
                    <div class="sliderwrap">
                      <input class="home-range-slider header-range" type="range" max="100" value="0">
                    </div>
                  </div>
                  <div class="block pt-5">
                    <div class="flex">
                      <div class="grow">
                        <span class="text-[11px] font-[400] text-gray-500 ">Amount save</span>
                      </div>
                      <div class="grow text-end">
                        <span class="text-[15px] price-value font-[500] text-black">£ </span>
                      </div>
                      
                    </div>
                  </div>

                
                </div>
              </div>
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

