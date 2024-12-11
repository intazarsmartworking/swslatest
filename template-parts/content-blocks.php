<?php
   /**
    * Template part for displaying posts
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package innago
    */
   
   ?>
<!-- home banner start -->
<div class=" w-full relative">
  <!-- <img class="bg-img absolute w-[100%] right-[-35%] z-0 top-[-5%]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt=""> -->
  <!-- <img class="bg-img absolute w-[100%] right-[0] z-0 top-[66%]" src="<?php echo get_template_directory_uri();?>/images/bg-left.svg" alt=""> -->
  <!-- <img class="bg-img absolute w-[800px] left-[-300px] z-0 top-[0px] opacity-[0.3]" src="<?php echo get_template_directory_uri();?>/images/home-circule-bg.svg" alt=""> -->
  <div class=" w-full relative z-10  py-16">

	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'home_header') : ?>
	<div class="container mx-auto">
		<div class="w-full">
			<div class="heding-box">
				<div class="block mb-8">
					<h1 class="words-wrapper text-[48px] font-[600] text-[rgba(255,255,255,0.70)]">
						Hire Dedicated Senior
						<span class="words">
							<span class="current" data-color="#f34d05">Software</span>
							<span class="next" data-color="#f34d05">Fullstack</span>
							<span data-color="#f34d05">Frontend</span>
							<span data-color="#f34d05">Backend</span>
							<span data-color="#f34d05">Android</span>
						</span>
					</h1>
					<!-- <h1 class=" text-[48px] font-[600] text-[rgba(255,255,255,0.70)] text-center mb-5">Hire Dedicated Senior
						<span class="words">
							<span class="current" data-bg-color="#ffc703" data-color="#000">React</span>
							<span class="next" data-bg-color="#004e98" data-color="#fff">TypeScript</span>
							<span data-bg-color="#8cb369" data-color="#000">Python</span>
							<span data-bg-color="#104911" data-color="#fff">PrestaShop</span>
							<span data-bg-color="#b8c0ff" data-color="#000">Ruby</span>
							<span data-bg-color="#e71d36" data-color="#fff">Angular</span>
							<span data-bg-color="#e2c044" data-color="#000">WordPress</span>
							<span data-bg-color="#065a82" data-color="#fff">Node</span>
						</span>
					</h1> -->
					<h1 class=" text-[48px] font-[600] text-[rgba(255,255,255,0.70)] text-center mb-5">Developers from £20/hr</h1>
					<p class=" text-[20px] text-[rgba(255,255,255,0.80)] text-center">Flexible terms. Fully vetted. Remote hiring made safe.</p>
				</div>
				<div class="block text-center mb-8">
					<!-- <button class="blob-btn">
						Hire Top Talent &#129122;
						<span class="blob-btn__inner">
						<span class="blob-btn__blobs">
							<span class="blob-btn__blob"></span>
							<span class="blob-btn__blob"></span>
							<span class="blob-btn__blob"></span>
							<span class="blob-btn__blob"></span>
						</span>
						</span>
					</button> -->
					<a class="button_slide slide_right" href="">
						Hire Top Talent &#129122;
					</a>
				</div>
				<div class="w-full text-center">
					<div class=" inline-block px-6 py-1 border border-[rgba(255,255,255,0.20)] rounded-[10px]">
						<img class="w-[100px] h-[70px]" src="<?php echo get_template_directory_uri();?>/images/trustpilot.svg" alt="">
					</div>
					<div class=" inline-block px-6 py-1 border border-[rgba(255,255,255,0.20)] rounded-[10px]">
						<img class="w-[100px] h-[70px]" src="<?php echo get_template_directory_uri();?>/images/glassdooe.svg" alt="">
					</div>
					<div class=" inline-block px-6 py-1 border border-[rgba(255,255,255,0.20)] rounded-[10px]">
						<img class="w-[70px] h-[70px]" src="<?php echo get_template_directory_uri();?>/images/ISO_9001_2015.svg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="w-full relative">
		<!-- Hero Slider -->
		 <div class="gradint-left"></div>
		 <div class="gradint-right"></div>
		<div class="hero-slider-box mt-10">
			<div class="hero-slider">
				<div class="hero-slider-item">
					<div class="hero-card">
						<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/01.png" alt="">
						<div class="hero-card-overlay">
							<div class="hero-card-details">
								<p class="hero-name">Kiran C.</p>
								<p class="hero-profile">Frontend Developer • 4+ Years</p>
								<div class="hero-skills">
									<div class="item">Nord JS</div>
									<div class="item">React</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hero-slider-item">
					<div class="hero-card">
						<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/02.png" alt="">
						<div class="hero-card-overlay">
							<div class="hero-card-details">
								<p class="hero-name">Rahul M.</p>
								<p class="hero-profile">Machine Learning Engineer • 6+ Years</p>
								<div class="hero-skills">
									<div class="item">Data Engineering</div>
									<div class="item">Python</div>
									<div class="item">AWS</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hero-slider-item">
					<div class="hero-card">
						<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/03.png" alt="">
						<div class="hero-card-overlay">
							<div class="hero-card-details">
								<p class="hero-name">Maria S.</p>
								<p class="hero-profile">Senior React Developer • 4+ Years</p>
								<div class="hero-skills">
									<div class="item">React Native</div>
									<div class="item">Javascript</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hero-slider-item">
					<div class="hero-card">
						<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/04.png" alt="">
						<div class="hero-card-overlay">
							<div class="hero-card-details">
								<p class="hero-name">Isha I.</p>
								<p class="hero-profile">Fullstack Developer • 5+ Years</p>
								<div class="hero-skills">
									<div class="item">Javascript</div>
									<div class="item">.Net Core</div>
									<div class="item">Laravel</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hero-slider-item">
					<div class="hero-card">
						<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/05.png" alt="">
						<div class="hero-card-overlay">
							<div class="hero-card-details">
								<p class="hero-name">George H.</p>
								<p class="hero-profile">Game Developer • 6+ Years</p>
								<div class="hero-skills">
									<div class="item">3D</div>
									<div class="item">Unreal Engine</div>
									<div class="item">AR/VR</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hero-slider-item">
					<div class="hero-card">
						<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/06.png" alt="">
						<div class="hero-card-overlay">
							<div class="hero-card-details">
								<p class="hero-name">Aditi D.</p>
								<p class="hero-profile">Android Developer • 4+ Years</p>
								<div class="hero-skills">
									<div class="item">Flutter</div>
									<div class="item">React Native</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hero-slider-item">
					<div class="hero-card">
						<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/05.png" alt="">
						<div class="hero-card-overlay">
							<div class="hero-card-details">
								<p class="hero-name">George H.</p>
								<p class="hero-profile">Game Developer • 6+ Years</p>
								<div class="hero-skills">
									<div class="item">3D</div>
									<div class="item">Unreal Engine</div>
									<div class="item">AR/VR</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="w-full bg-[rgba(30,30,30,0.40)] p-3 mt-7">
		<div class="container mx-auto">
			<div class="grid grid-cols-2 lg:grid-cols-12 gap-3 lg:gap-5 xl:gap-14">
				<div class="col-span-1 lg:col-span-3">
					<div class="hero-feature">
						<img class="absolute w-[22px] h-[22px] left-[0] top-[12px]" src="<?php echo get_template_directory_uri();?>/images/tick-circle.svg" alt="">
						Meet our vetted talent within <span>7 working days</span>
					</div>
				</div>
				<div class="col-span-1 lg:col-span-3">
					<div class="hero-feature">
						<img class="absolute w-[22px] h-[22px] left-[0] top-[12px]" src="<?php echo get_template_directory_uri();?>/images/tick-circle.svg" alt="">
						<span>6,000+ vetted developers,</span> with only 4% of applicants progressed
					</div>
				</div>
				<div class="col-span-1 lg:col-span-3">
					<div class="hero-feature">
						<img class="absolute w-[22px] h-[22px] left-[0] top-[12px]" src="<?php echo get_template_directory_uri();?>/images/tick-circle.svg" alt="">
						All our developers are <span>screened and compliance checked</span>
					</div>
				</div>
				<div class="col-span-1 lg:col-span-3">
					<div class="hero-feature">
						<img class="absolute w-[22px] h-[22px] left-[0] top-[12px]" src="<?php echo get_template_directory_uri();?>/images/tick-circle.svg" alt="">
						<span>Time zone aligned,</span> working your hours and in permanent communication
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<!-- home banner close -->
	<!-- Future Remote -->
	<?php if (get_row_layout() == 'future_hiring') : ?>
	<div class="w-full relative  grid items-center py-16" >
	<div class="px-0 md:px-10">
	    <?php if(get_sub_field('main_heading')): ?>
		<h2 class="flex flex-col items-center justify-center text-center md:leading-tight mb-20"> <span class="text-2xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium  text-white"> <?php echo get_sub_field('main_heading'); ?> </span> </h2>
		<?php endif; ?>
		<div class="container mx-auto p-4">
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
			<?php if(have_rows('block_part')): ?>
			<?php while(have_rows('block_part')): the_row(); ?>
				<div class="p-4">
				<p class="text-4xl font-bold text-dark-orange" data-target="<?php echo get_sub_field('data_target'); ?>"><?php echo get_sub_field('heading'); ?></p>
				<hr class="my-4 borderdown">
				<p class="text-2xl font-medium text-white"><?php echo get_sub_field('second_heading'); ?></p>
				</div>
			<?php endwhile; ?>	
			<?php endif; ?> 	
			</div>
		</div>
	</div>
	</div>
	<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>	
	
	<!-- Europe Leading Section  -->
	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'europe_leading_box') : ?>
	<div class="w-full relative grid items-center py-16">
	<div class="container mx-auto md:px-0 px-10">
		<?php if(get_sub_field('short_title')): ?>
		<h4 class="text-center small-intro"> <?php echo get_sub_field('short_title'); ?> </h4>
		<?php endif; ?> 
		<?php if(get_sub_field('main_heading')): ?>	
		<h2 class=" text-2xl text-white sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium flex flex-col text-center px-0 md:leading-tight"> <?php echo get_sub_field('main_heading'); ?>  </h2>
		<?php endif; ?>
		<p class="text-center text-[14px] lg:text-[25px]  pt-[10px] text-white">£20/hour: Average rate for a developer with 6+ yrs experience</p>
		<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-5 md:mt-28">
			<?php if(have_rows('box_item')): ?>
			<?php while(have_rows('box_item')): the_row(); ?>
			<?php 
				$title_name = get_sub_field('title'); 
				$subtitle_name = get_sub_field('short_description'); 
				?>
			<div class="europe-box rounded-3xl mb-5 min-h-[250px]">
				<div class="flex">
				<div class="w-[100%] max-w-[60%] lg:max-w-[60%] xl::max-w-[70%] px-6 py-6">
					<div class="icons-box">
						<svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
							<rect rx="8" ry="8" class="line" height="100%" width="100%" stroke-linejoin="round"/>
						</svg>
						<img src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['url']; ?>" class="mb-12 icons-img">
					</div>
					<div class="mt-12">
						<h5 class="text-white text-xl font-bold leading-tight mb-3"> <?php echo $title_name;?> </h5>
						<p class="text-white text-base"> <?php echo $subtitle_name;?> </p>
					</div>
				</div>
				<div class="ml-auto absolute right-0 bottom-0 ">
					<img class="w-[120px] lg:w-auto  h-[120px] lg:h-[240px]" src="<?php echo get_sub_field('main_image')['url']; ?>" alt="<?php echo get_sub_field('main_image')['url']; ?>">
				</div>
				</div>
			</div>
			<?php endwhile; ?>	
			<?php endif; ?> 
		</div>
	</div>
	</div>
	<?php endif; ?>
	
	<!-- How It Works Section -->
	 <div class=" w-full relative">
		<div class="w-full relative z-10">
			<?php get_template_part( 'template-parts/client-how-it-works' );?>
		</div>
	 </div>
		
	<?php endwhile; ?>
	<?php endif; ?>
	<!-- Curios Section  -->
	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'curious_section') : ?>
	<section class="calculator-box relative w-[100%] py-16">
		<img class=" absolute right-0 z-0 top-[80px] w-[350px] h-[350px]" src="<?php echo get_template_directory_uri();?>/images/squr-roted.png" alt="">
		<div class="block mb-5 text-center">
			<?php if(get_sub_field('small_title')): ?>
				<span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " ><?php echo get_sub_field('small_title'); ?></span>
			<?php endif; ?>
		</div>
		<div class="block mb-5 text-center">
			<?php if(get_sub_field('main_heading')): ?>	
			<h3 class="text-[26px] lg:text-[36px] text-[#ffff] lg:leading-[45px] font-medium mb-4"><?php echo get_sub_field('main_heading'); ?></h3>
			<?php endif; ?>
			<p class="text-white text-[15px] mb-[30px] lg:text-[24px] font-medium"><?php echo get_sub_field('subheading'); ?></p>
		</div>
		<div class="inner-box relative z-10 rounded-[60px] max-w-[90%] min-h-[350px] mx-auto p-4 md:p-[50px]">
			<div class="grid grid-cols-1 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-3 content-center">
				<div class="grid-item md:col-span-12 lg:col-span-2 xl:col-span-4 content-center">
					<div class="w-[100%] xl:max-w-[400px]">
						<h5 class="text-[25px] font-bold text-[#fff] mb-8">What are you looking for?</h5>
						<div class="block mb-8">
							<label for="select_skill" class="block mb-2 text-sm font-medium text-white dark:text-white">Select Skill:</label>
							<select id="select_skill" class=" bg-black border h-[50px] border-black text-white text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-black dark:border-black dark:placeholder-gray-400 dark:text-white dark:focus:ring-black dark:focus:border-black">
								<option selected>Choose a Skill</option>
								<?php 
								$args_skills = array(
									'post_type' => 'skills',
									'posts_per_page' => -1,
									'order' => 'ASC',
									'orderby' => 'title',
								);
								$query_skills = new WP_Query($args_skills);
								while ($query_skills->have_posts()) : $query_skills->the_post();
								$mid_level_dollar_price = get_field('mid_level_dollar_price');
								$senior_level_dollar_price = get_field('senior_level_dollar_price');
								$mid_level_pound_price = get_field('mid_level_pound_price');
								$senior_level_pound_price = get_field('senior_level_pound_price');
								$skill_image_id = get_post_thumbnail_id();
								$skill_image_src = wp_get_attachment_image_src($skill_image_id, 'full');

								?>
								<option value='{"midLevel":<?php echo $mid_level_pound_price;?>,"senior":<?php echo $senior_level_pound_price;?>,"name":"<?php the_title(); ?>"}'><?php the_title(); ?></option>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?> 
							</select>
						</div>
						<div class="block mb-8">
							<label for="countriesList" class="block mb-2 text-sm font-medium text-white dark:text-white">I'm based in:</label>
							<select id="countriesList" class=" bg-black border h-[50px] border-black text-white text-sm rounded-lg focus:ring-black focus:border-black block w-full p-2.5 dark:bg-black dark:border-black dark:placeholder-gray-400 dark:text-white dark:focus:ring-black dark:focus:border-black">
								<!-- <option selected>Choose a country</option> -->
								<option value="US">United States</option>
								<option value="UK" selected>United Kingdom</option>
								<!-- <option value="FR">France</option>
								<option value="DE">Germany</option> -->
							</select>
						</div>
						<div class="block mb-8">
							<label for="quantity-input" class="block mb-2 text-sm font-medium text-white dark:text-white">Number of developers:</label>
							<div class="relative flex items-center w-[100%]">
								<button type="button" id="decrement-button" class="bg-[#ff4d04] dark:bg-[#ff4d04] dark:hover:bg-[#ff4d04] dark:border-[#ff4d04] hover:bg-[#ff4d04] border border-[#ff4d04] rounded-s-lg py-4 px-8 h-[50px] focus:ring-[#ff4d04] dark:focus:ring-[#ff4d04] focus:ring-2 focus:outline-none">
									<svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
									</svg>
								</button>
								<input type="number" id="quantity-input" min="1" value="1" class="bg-black border-x-0 min-w-[100px] border-black h-[50px] text-center text-white text-sm focus:ring-black focus:border-black block w-full py-2.5 dark:bg-black dark:border-black dark:placeholder-black dark:text-white dark:focus:ring-black dark:focus:border-black" />
								<button type="button" id="increment-button" class="bg-[#ff4d04] dark:bg-[#ff4d04] dark:hover:bg-[#ff4d04] dark:border-[#ff4d04] hover:bg-[#ff4d04] border border-[#ff4d04] rounded-e-lg py-4 px-8 h-[50px] focus:ring-[#ff4d04] dark:focus:ring-[#ff4d04] focus:ring-2 focus:outline-none">
									<svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
										<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
									</svg>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="grid-item md:col-span-6 lg:col-span-5 xl:col-span-4 content-center">
					<div class=" w-[100%] xl:max-w-[450px] min-h-[400px] bg-[#ff4d04] p-[15px] md:p-[30px] pb-[120px] rounded-[16px] lg:rounded-[40px] relative overflow-hidden ml-auto">
						<p class="text-[25px] lg:text-[30px] font-semibold text-[#fff]"> Hiring with SmartWorking</p>
						<p class="text-[35px] lg:text-[50px] font-bold text-[#fff]"><span class="currency-symbols">£</span><span class="smartFromPrice">0</span></p>
						<p class="text-[35px] lg:text-[50px] font-bold text-[#fff] leading-[40px]"><span class="text-[20px] inline-block align-bottom leading-[25px]">to &nbsp;</span> <span class="currency-symbols">£</span><span class="smartToPrice">0</span>  <span class="text-[20px] inline-block align-bottom leading-[25px]"> /month</span></p>
						<p class="text-[18px] lg:text-[20px] text-[#fff] mt-[20px]">Equivalent to <span class="currency-symbols">£</span><span class="currency-start">0</span>-<span class="currency-end">0</span>/hour</p>
						<div class="w-[100%] absolute h-[110px] bg-[rgba(255,255,255,0.4)] left-0 bottom-0 p-[20px] md:px-[30px]">
							<p class="text-[16px] lg:text-[16px] text-[#fff]">Enjoy annual savings of up to <span class="currency-symbols">£</span><span class="save-amount">0</span>/year with complete transparency.</p>
						</div>
					</div>
				</div>
				<div class="grid-item md:col-span-6 lg:col-span-5 xl:col-span-4 content-center">
					<div class=" w-[100%] xl:max-w-[450px] min-h-[400px] bg-[#fff] p-[15px] md:p-[30px] pb-[120px] rounded-[16px] lg:rounded-[40px] relative overflow-hidden ml-auto">
						<p class="text-[25px] lg:text-[30px] font-semibold text-[#000]">Hiring in <span class="select-country">United Kingdom</span></p>
						<p class="text-[35px] lg:text-[50px] font-bold text-[#000]"><span class="currency-symbols">£</span><span class="otherFromPrice">0</span></p>
						<p class="text-[35px] lg:text-[50px] font-bold text-[#000] leading-[40px]"><span class="text-[20px] inline-block align-bottom leading-[25px]">to &nbsp;</span> <span class="currency-symbols">£</span><span class="otherToPrice">0</span> <span class="text-[20px] inline-block align-bottom leading-[25px]"> /month </span></p>
						<p class="text-[18px] lg:text-[20px] text-[#000] mt-[20px]">Equivalent to <span class="currency-symbols">£</span><span class="currency-start-other">0</span>-<span class="currency-end-other">0</span>/hour</p>
						<div class="w-[100%] absolute h-[110px] bg-[#f4f5f7] left-0 bottom-0 p-[20px] md:px-[30px]">
							<p class="text-[16px] lg:text-[16px] text-[#000]">54% Higher annual cost Based on salary benchmarks including region-specific employment costs</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>	
	<?php get_template_part( 'template-parts/client-testimonial' );?>
	<?php endwhile; ?>
	<?php endif; ?>
	<div class=" w-full relative">
		<div class="w-full relative z-10">
			<img class=" absolute right-0 z-0 top-[120px] w-[350px] h-[350px]" src="<?php echo get_template_directory_uri();?>/images/circule-bg.png" alt="">
			<?php get_template_part( 'template-parts/ai-vetted-profile' );?>
		</div>
	 </div>
	
	<?php get_template_part( 'template-parts/assemble-team' );?>
	<?php get_template_part( 'template-parts/trustpilot-review' );?>
	<?php get_template_part( 'template-parts/home-blog' );?>
	<!-- FAQ Section  -->
	<div class="w-full relative grid items-center z-10 py-16">
	<div class="container relative mx-auto md:px-0 px-10 ">
		<img class=" absolute left-0 z-0 top-[0px] w-[350px] h-[350px]" src="<?php echo get_template_directory_uri();?>/images/circule-bg.png" alt="">
	<div class="w-full relative z-10">
		<?php if (have_rows('block')) : ?>
		<?php while (have_rows('block')) : the_row(); ?>
		<?php if (get_row_layout() == 'home_faq_heading') : ?>
			
		<?php if(get_sub_field('small_heading')): ?>		
			<h4 class="text-center small-intro"> <?php echo get_sub_field('small_heading'); ?> </h4>
		<?php endif; ?>	

		<?php if(get_sub_field('main_heading')): ?>		
			<h2 class="text-[30px] sm:text-3xl lg:text-[56px] mb-10 font-medium text-white text-center px-0  md:leading-tight"><?php echo get_sub_field('main_heading'); ?><br><span class="text-dark-orange"><?php echo get_sub_field('orange_heading'); ?> </span></h2>
		<?php endif; ?>

		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?> 	
			<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
				<?php 
					$faq_argument = array( 'post_type' => 'faq');
					$faq_query	= new WP_Query($faq_argument);
					?>
				<?php while ($faq_query->have_posts()) : $faq_query->the_post();?>
				<?php $post_id = get_the_ID(); ?>
				<div>
					<div class="accordian-sec-bg mb-5">
					<button class="w-full text-left py-1 px-4  focus:outline-none flex justify-between items-center" onclick="toggleAccordion(<?php echo $post_id; ?>)">
						<span id="accordion-label-<?php echo $post_id; ?>" class="text-[18px] md:text-xl pt-6 pb-6 font-medium text-white"><?php the_title();?></span>
						<svg id="arrow-down-<?php echo $post_id; ?>" class="h-4 w-4 text-gray-500 rounded-full" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M6 9l4 4 4-4"></path>
						</svg>
						<svg id="arrow-up-<?php echo $post_id; ?>" class="h-4 w-4 hidden text-gray-500 rounded-full" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M6 9l4-4 4 4"></path>
						</svg>
					</button>
					<div id="accordion-section-<?php echo $post_id; ?>" class="overflow-hidden transition-max-height duration-300 rounded-xl" style="max-height:0;">
						<p class="p-4 text-base text-white"><?php echo get_the_excerpt();?></p>
					</div>
					</div>
				</div>
				<?php endwhile; wp_reset_postdata();?>
			</div>
	</div>
	</div>
	</div>
	

	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'hire_developer_section') : ?>
		<section class="w-full py-24">
			<div class=" w-[100%] container !p-0 mx-auto">
				<div class=" block relative rounded-[24px] vetting-bg">
					<img class="absolute h-[100%] w-[50%] right-[0px] top-[0px] z-1" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png">
					<div class="grid grid-cols-1 lg:grid-cols-12 content-center gap-4 relative z-10 h-[100%]">
						<div class="grid-item col-span-1 lg:col-span-5 content-center min-h-[500px] py-[32px] pl-[30px] lg:pl-[150px]">
						<p><img class="h-[25px] w-[260px] ml-[-5px] mb-5" src="<?php echo get_template_directory_uri();?>/images/white-black-logo.svg" alt=""></p>
						
						<?php if(get_sub_field('main_title')): ?>
							<h2 class=" text-white font-bold text-[32px] lg:text-[40px] lg:leading-[45px]"><?php echo get_sub_field('main_title'); ?></h2>
						<?php endif; ?>	
						<?php if(get_sub_field('subheading')): ?>	
							<p class=" text-white text-[16px] mt-[30px] mb-[30px]"> <?php echo get_sub_field('subheading'); ?> </p>
						<?php endif; ?>	
							<div class="block text-left mt-10">
								<span class=" inline-block relative align-middle">
									<span class=" text-[14px] text-[#fff] block text-start font-bold">Excellent</span>
								</span>
								<span class=" inline-block relative align-middle ml-[5px]">
									<svg role="img" viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 25px;">
										<title id="starRating-aab4m6af90i" lang="en-US">4.6 out of 5 star rating on Trustpilot</title>
										<g class="tp-star">
											<path class="tp-star-full" fill="#dcdce6" d="M0 46.330002h46.375586V0H0z"></path>
											<path class="tp-star__shape" d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z" fill="#FFF"></path>
										</g>
										<g class="tp-star">
											<path class="tp-star-full" fill="#dcdce6" d="M51.24816 46.330002h46.375587V0H51.248161z"></path>
											<path class="tp-star__shape" d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z" fill="#FFF"></path>
										</g>
										<g class="tp-star">
											<path class="tp-star-full" fill="#dcdce6" d="M102.532209 46.330002h46.375586V0h-46.375586z"></path>
											<path class="tp-star__shape" d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z" fill="#FFF"></path>
										</g>
										<g class="tp-star">
											<path class="tp-star-full" fill="#dcdce6" d="M153.815458 46.330002h46.375586V0h-46.375586z"></path>
											<path class="tp-star__shape" d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
										</g>
										<g class="tp-star">
											<path fill="#dcdce6" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
											<path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
											<path class="tp-star__shape" d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
										</g>
									</svg>
								</span>
								<span class=" inline-block relative align-middle ml-[5px]">
									<svg role="img" viewBox="0 0 126 31" xmlns="http://www.w3.org/2000/svg" fill="#fff" style="height: 20px; width: auto;">
											<title id="trustpilotLogo-r4vc8wem16l">Trustpilot</title>
											<path fill="#ffffff" class="tp-logo__text" d="M33.074774 11.07005H45.81806v2.364196h-5.010656v13.290316h-2.755306V13.434246h-4.988435V11.07005h.01111zm12.198892 4.319629h2.355341v2.187433h.04444c.077771-.309334.222203-.60762.433295-.894859.211092-.287239.466624-.56343.766597-.79543.299972-.243048.633276-.430858.999909-.585525.366633-.14362.744377-.220953 1.12212-.220953.288863 0 .499955.011047.611056.022095.1111.011048.222202.033143.344413.04419v2.408387c-.177762-.033143-.355523-.055238-.544395-.077333-.188872-.022096-.366633-.033143-.544395-.033143-.422184 0-.822148.08838-1.199891.254096-.377744.165714-.699936.41981-.977689.740192-.277753.331429-.499955.729144-.666606 1.21524-.166652.486097-.244422 1.03848-.244422 1.668195v5.39125h-2.510883V15.38968h.01111zm18.220567 11.334883H61.02779v-1.579813h-.04444c-.311083.574477-.766597 1.02743-1.377653 1.369908-.611055.342477-1.233221.51924-1.866497.51924-1.499864 0-2.588654-.364573-3.25526-1.104765-.666606-.740193-.999909-1.856005-.999909-3.347437V15.38968h2.510883v6.948968c0 .994288.188872 1.701337.577725 2.1101.377744.408763.922139.618668 1.610965.618668.533285 0 .96658-.077333 1.322102-.243048.355524-.165714.644386-.37562.855478-.65181.222202-.265144.377744-.596574.477735-.972194.09999-.37562.144431-.784382.144431-1.226288v-6.573349h2.510883v11.323836zm4.27739-3.634675c.07777.729144.355522 1.237336.833257 1.535623.488844.287238 1.06657.441905 1.744286.441905.233312 0 .499954-.022095.799927-.055238.299973-.033143.588836-.110476.844368-.209905.266642-.099429.477734-.254096.655496-.452954.166652-.198857.244422-.452953.233312-.773335-.01111-.320381-.133321-.585525-.355523-.784382-.222202-.209906-.499955-.364573-.844368-.497144-.344413-.121525-.733267-.232-1.17767-.320382-.444405-.088381-.888809-.18781-1.344323-.287239-.466624-.099429-.922138-.232-1.355432-.37562-.433294-.14362-.822148-.342477-1.166561-.596573-.344413-.243048-.622166-.56343-.822148-.950097-.211092-.386668-.311083-.861716-.311083-1.436194 0-.618668.155542-1.12686.455515-1.54667.299972-.41981.688826-.75124 1.14434-1.005336.466624-.254095.97769-.430858 1.544304-.541334.566615-.099429 1.11101-.154667 1.622075-.154667.588836 0 1.15545.066286 1.688736.18781.533285.121524 1.02213.320381 1.455423.60762.433294.276191.788817.640764 1.07768 1.08267.288863.441905.466624.98324.544395 1.612955h-2.621984c-.122211-.596572-.388854-1.005335-.822148-1.204193-.433294-.209905-.933248-.309334-1.488753-.309334-.177762 0-.388854.011048-.633276.04419-.244422.033144-.466624.088382-.688826.165715-.211092.077334-.388854.198858-.544395.353525-.144432.154667-.222203.353525-.222203.60762 0 .309335.111101.552383.322193.740193.211092.18781.488845.342477.833258.475048.344413.121524.733267.232 1.177671.320382.444404.088381.899918.18781 1.366542.287239.455515.099429.899919.232 1.344323.37562.444404.14362.833257.342477 1.17767.596573.344414.254095.622166.56343.833258.93905.211092.37562.322193.850668.322193 1.40305 0 .673906-.155541 1.237336-.466624 1.712385-.311083.464001-.711047.850669-1.199891 1.137907-.488845.28724-1.04435.508192-1.644295.640764-.599946.132572-1.199891.198857-1.788727.198857-.722156 0-1.388762-.077333-1.999818-.243048-.611056-.165714-1.14434-.408763-1.588745-.729144-.444404-.33143-.799927-.740192-1.05546-1.226289-.255532-.486096-.388853-1.071621-.411073-1.745528h2.533103v-.022095zm8.288135-7.700208h1.899828v-3.402675h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155542.486096.07777.132572.199981.232.366633.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.13332-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222zm8.454788 0h2.377562V16.9253h.04444c.355523-.662858.844368-1.12686 1.477644-1.414098.633276-.287239 1.310992-.430858 2.055369-.430858.899918 0 1.677625.154667 2.344231.475048.666606.309335 1.222111.740193 1.666515 1.292575.444405.552382.766597 1.193145.9888 1.92229.222202.729145.333303 1.513527.333303 2.3421 0 .762288-.099991 1.50248-.299973 2.20953-.199982.718096-.499955 1.347812-.899918 1.900194-.399964.552383-.911029.98324-1.533194 1.31467-.622166.33143-1.344323.497144-2.18869.497144-.366634 0-.733267-.033143-1.0999-.099429-.366634-.066286-.722157-.176762-1.05546-.320381-.333303-.14362-.655496-.33143-.933249-.56343-.288863-.232-.522175-.497144-.722157-.79543h-.04444v5.656393h-2.510883V15.38968zm8.77698 5.67849c0-.508193-.06666-1.005337-.199981-1.491433-.133321-.486096-.333303-.905907-.599946-1.281527-.266642-.37562-.599945-.673906-.988799-.894859-.399963-.220953-.855478-.342477-1.366542-.342477-1.05546 0-1.855387.364572-2.388672 1.093717-.533285.729144-.799928 1.701337-.799928 2.916578 0 .574478.066661 1.104764.211092 1.59086.144432.486097.344414.905908.633276 1.259432.277753.353525.611056.629716.99991.828574.388853.209905.844367.309334 1.355432.309334.577725 0 1.05546-.121524 1.455423-.353525.399964-.232.722157-.541335.97769-.905907.255531-.37562.444403-.79543.555504-1.270479.099991-.475049.155542-.961145.155542-1.458289zm4.432931-9.99812h2.510883v2.364197h-2.510883V11.07005zm0 4.31963h2.510883v11.334883h-2.510883V15.389679zm4.755124-4.31963h2.510883v15.654513h-2.510883V11.07005zm10.210184 15.963847c-.911029 0-1.722066-.154667-2.433113-.452953-.711046-.298287-1.310992-.718097-1.810946-1.237337-.488845-.530287-.866588-1.160002-1.12212-1.889147-.255533-.729144-.388854-1.535622-.388854-2.408386 0-.861716.133321-1.657147.388853-2.386291.255533-.729145.633276-1.35886 1.12212-1.889148.488845-.530287 1.0999-.93905 1.810947-1.237336.711047-.298286 1.522084-.452953 2.433113-.452953.911028 0 1.722066.154667 2.433112.452953.711047.298287 1.310992.718097 1.810947 1.237336.488844.530287.866588 1.160003 1.12212 1.889148.255532.729144.388854 1.524575.388854 2.38629 0 .872765-.133322 1.679243-.388854 2.408387-.255532.729145-.633276 1.35886-1.12212 1.889147-.488845.530287-1.0999.93905-1.810947 1.237337-.711046.298286-1.522084.452953-2.433112.452953zm0-1.977528c.555505 0 1.04435-.121524 1.455423-.353525.411074-.232.744377-.541335 1.01102-.916954.266642-.37562.455513-.806478.588835-1.281527.12221-.475049.188872-.961145.188872-1.45829 0-.486096-.066661-.961144-.188872-1.44724-.122211-.486097-.322193-.905907-.588836-1.281527-.266642-.37562-.599945-.673907-1.011019-.905907-.411074-.232-.899918-.353525-1.455423-.353525-.555505 0-1.04435.121524-1.455424.353525-.411073.232-.744376.541334-1.011019.905907-.266642.37562-.455514.79543-.588835 1.281526-.122211.486097-.188872.961145-.188872 1.447242 0 .497144.06666.98324.188872 1.458289.12221.475049.322193.905907.588835 1.281527.266643.37562.599946.684954 1.01102.916954.411073.243048.899918.353525 1.455423.353525zm6.4883-9.66669h1.899827v-3.402674h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155541.486096.077771.132572.199982.232.366634.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.133321-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222z"></path>
											<path class="tp-logo__star" fill="#00B67A" d="M30.141707 11.07005H18.63164L15.076408.177071l-3.566342 10.892977L0 11.059002l9.321376 6.739063-3.566343 10.88193 9.321375-6.728016 9.310266 6.728016-3.555233-10.88193 9.310266-6.728016z"></path>
											<path class="tp-logo__star-notch" fill="#005128" d="M21.631369 20.26169l-.799928-2.463625-5.755033 4.153914z"></path>
										</svg>
								</span>
							</div>	
						
						</div>
						<div class="grid-item col-span-1 lg:col-span-7 content-center relative">
							<div class="relative lg:absolute right-0 top-[-120px] w-[100%] min-h-[500px] overflow-hidden rounded-[24px]">
								<!-- Calendly inline widget begin -->
								<div class="calendly-inline-widget" data-url="https://calendly.com/smart-working/30min?hide_event_type_details=1&hide_gdpr_banner=1&background_color=1a1a1a&text_color=ffffff&primary_color=ff4d04" style="width:100%;height:700px;"></div>
								<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
								<!-- Calendly inline widget end -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php endif; ?>		
	<?php endwhile; ?>
	<?php endif; ?>	




	</div>
</div>



<script type="text/javascript">
   jQuery(window).bind("load", function() {
   	homePageAnimation()
	//afetrLoadScrollBox()
   });
</script>