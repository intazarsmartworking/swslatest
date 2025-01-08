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
  <div class=" w-full relative">
	<div class="w-full bg-[#1E1E1E] relative z-10 pt-[2.5rem]">
		<?php if (have_rows('block')) : ?>
		<?php while (have_rows('block')) : the_row(); ?>
		<?php if (get_row_layout() == 'home_header') : ?>
		<div class="container mx-auto">
			<div class="w-full">
				<div class="heding-box">
					<div class="block mb-5">
					<?php if(get_sub_field('title')): ?>
						<h1 class="words-wrapper text-[2.25rem] font-[700] text-[#fff]">
							<?php echo get_sub_field('title'); ?>
							<span class="words">
								<span class="current" data-color="#f34d05">Software</span>
								<span class="next" data-color="#f34d05">Fullstack</span>
								<span data-color="#f34d05">Frontend</span>
								<span data-color="#f34d05">Backend</span>
								<span data-color="#f34d05">Android</span>
							</span>
							<strong class="text-dark-orange">Developers</strong>
						</h1>
					<?php endif; ?>
					<!-- <?php if(get_sub_field('short_description')): ?>
						<h1 class=" text-[2.25rem] font-[700] text-[rgba(255,255,255,0.70)] text-center mb-[0.5rem]"><?php echo get_sub_field('short_description'); ?></h1>
					<?php endif; ?>	 -->
					
					<?php if(get_sub_field('small_paragraph')): ?>
						<p class=" text-[1rem] text-[#E8E8E8] text-center"><?php echo get_sub_field('small_paragraph'); ?></p>
					<?php endif; ?>
					</div>
					<?php if(get_sub_field('button_name')): ?>
					<div class="block text-center mb-8">
						
						<a class="button_slide slide_right" href="<?php echo get_sub_field('button_url'); ?>">
							<?php echo get_sub_field('button_name'); ?> &#129122;
						</a>
					</div>
					<?php endif; ?>
					<div class="w-full text-center">
					<?php if(get_sub_field('logo_1')): ?>
						<div class=" inline-block px-6 py-1 border border-[rgba(255,255,255,0.20)] rounded-[10px]">
							<img class="w-[100px] h-[70px]" src="<?php echo get_sub_field('logo_1')['url']; ?>" alt="">
						</div>
					<?php endif; ?>	
					<?php if(get_sub_field('logo_2')): ?>	
						<div class=" inline-block px-6 py-1 border border-[rgba(255,255,255,0.20)] rounded-[10px]">
							<img class="w-[100px] h-[70px]" src="<?php echo get_sub_field('logo_2')['url']; ?>" alt="">
						</div>
					<?php endif; ?>	
					<?php if(get_sub_field('logo_3')): ?>	
						<div class=" inline-block px-6 py-1 border border-[rgba(255,255,255,0.20)] rounded-[10px]">
							<img class="w-[70px] h-[70px]" src="<?php echo get_sub_field('logo_3')['url']; ?>" alt="">
						</div>
					<?php endif; ?>	
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
				<?php if(have_rows('banner_card_section')): ?>
				<?php while(have_rows('banner_card_section')): the_row(); ?>
				<?php 
					$name = get_sub_field('name'); 
					$role_exp = get_sub_field('role_exp'); 
				?>
					<div class="hero-slider-item">
						<div class="hero-card">
							<img class="w-[100%] h-[100%]" src="<?php echo get_sub_field('profile_pic')['url']; ?>" alt="">
							<div class="hero-card-overlay">
								<div class="hero-card-details">
									<p class="hero-name"><?php echo $name;?></p>
									<p class="hero-profile"><?php echo $role_exp;?></p>
									<div class="hero-skills">
									<?php if(have_rows('skills')): ?>
									<?php while(have_rows('skills')): the_row(); ?>
									<?php 
										$skill_name = get_sub_field('skill_name'); 
									?>
										<div class="item"><?php echo $skill_name;?></div>
									<?php endwhile; ?>	
									<?php endif; ?> 
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>	
				<?php endif; ?> 	
					
				</div>
			</div>
		</div>
		<div class="w-full relative five-item-box bg-[rgba(30,30,30,0.40)] mt-9 pt-3">
			<img class="absolute left-0 top-0 h-[0.125rem] w-[100%]" src="<?php echo get_template_directory_uri();?>/images/bar-bg.png" alt="">
			<div class="container px-4 py-3">
				<div class="grid grid-cols-10 gap-3 lg:gap-5 xl:gap-14">
				<?php if(have_rows('after_banner_card_section')): ?>
				<?php while(have_rows('after_banner_card_section')): the_row(); ?>
				<?php 
					$small_text = get_sub_field('small_text'); 
				?>
					<div class="col-span-10 sm:col-span-5 md:col-span-[4] lg:col-span-2">
						<div class="hero-feature">
							<img class="absolute w-[22px] h-[22px] left-[0] top-[12px]" src="<?php echo get_sub_field('icon')['url']; ?>" alt="">
							<?php echo $small_text;?>
						</div>
					</div>
				<?php endwhile; ?>	
				<?php endif; ?>	
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>

	<!-- home banner close -->
	<!-- Future Remote -->
	<?php if (get_row_layout() == 'future_hiring') : ?>
	<div class="w-full relative py-[3.75rem]" >
		<div class="container relative bg-[#1E1E1E] px-[0px] sm:px-[1rem] md:px-[5rem] py-[2.125rem]  rounded-[1.25rem] min-h-[290px]">
			<img class="bg-img absolute h-[100%] w-auto right-[-0] z-0 top-[0px]" src="<?php echo get_template_directory_uri();?>/images/future-bg.svg" alt="">
			<div class="relative z-10 block">
				<?php if(get_sub_field('main_heading')): ?>
					<h2 class="text-[2.25rem] font-[600] text-center text-[#E8E8E8] mb-[2.5rem]"><?php echo get_sub_field('main_heading'); ?></h2>
				<?php endif; ?>
				<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 gap-4">
					<?php if(have_rows('block_part')): ?>
					<?php while(have_rows('block_part')): the_row(); ?>
						<div class="col-span-12 sm:col-span-4 lg:col-span-4 text-center border-box-bar">
							<p class="text-[#E8E8E8] text-[2.5rem] font-[500] "><?php echo get_sub_field('data_target'); ?></p>
							<p class="text-[#E8E8E8] text-[1rem] font-[400] "><?php echo get_sub_field('second_heading'); ?></p>
						</div>
					<?php endwhile; ?>	
					<?php endif; ?> 	
				</div>
				<div class="block text-center mt-4">
					<p class="text-[#A5A5A5] text-[0.75rem] font-[400]">*96% of placed engineers are with the same company 12 months later</p>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>	
	
	
	<div class="w-full relative">
		<div class="container">
			<div class="block">
				<h2 class="text-[2.25rem] font-[600] text-center text-[#E8E8E8] mb-[1.5rem]">Case <span class="text-dark-orange">Studies</span></h2>
			</div>
			<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12">
				<div class="col-span-4 lg:col-span-4 content-center case-tab active" data-id="tab-1">
					Seamless and quick hiring process
					<!-- <img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/keyloop-logo.svg" alt=""> -->
				</div>
				<div class="col-span-4 lg:col-span-4 content-center case-tab" data-id="tab-2">
					Reliable and impressive quality
					<!-- <img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/stickey-logo.svg" alt=""> -->
				</div>
				<div class="col-span-4 lg:col-span-4 content-center case-tab" data-id="tab-3">
					Consistent and remarkable quality
					<!-- <img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/tiller-logo.svg" alt=""> -->
				</div>
			</div>
			<div class="tab-container">
				<div class="tab-content active" id="tab-1" style="background-image: url('<?php echo get_template_directory_uri();?>/images/tab-bg-1.jpg');">
					<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 min-h-[32rem] p-3 gap-4">
						<div class="col-span-12 sm:col-span-7 md:col-span-7 lg:col-span-7 content-end">
							<div class="block max-w-[47rem]">
								<p class=" text-[2rem] text-[#F34D05] font-[600] mb-[1rem]">
									<img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/keyloop-logo.svg" alt="">
								</p>
								<p><img class="h-[2rem] w-[1.05rem] inline-block align-text-bottom" src="<?php echo get_template_directory_uri();?>/images/quat-symble.svg" alt=""> </p>
								<p class=" text-[1rem] text-[#E8E8E8] mb-[2rem]">The developers at Smart Working have provided work the same hours as our team, attend all meetings, and are always available for communication. Their seamless integration into our workflows has made them feel like a natural extension of our in-house team, without any of the challenges we expected from remote hiring.</p>
								<p class=" text-[1rem] text-[#fff] font-[500]">- Cameron Wade &#9679; <span class="text-[#F2F2F2] text-[0.875rem]">Cameron Wade</span></p>
							</div>
						</div>
						<div class="col-span-12 sm:col-span-5 md:col-span-5 lg:col-span-5 content-end">
							<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[rgba(255,255,255,0.12)] backdrop-blur-[10px] ml-auto mb-[1.5rem]">
								<p class="text-[1rem] text-[#E8E8E8]">Build the team to</p>
								<div class="flex">
									<div><p class="text-[#fff] text-[3.25rem] font-[600] leading-[3rem]">6</p></div>
									<div class="pl-2"><p class="text-[1rem] text-[#E8E8E8]">developers<br>within 12 months</p></div>
								</div>
							</div>
							<div class="flex space-x-4">
								<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[rgba(255,255,255,0.12)] backdrop-blur-[10px] ml-auto">
									<p class="text-[1rem] text-[#E8E8E8]">The first developer was onboarded in just</p>
									<div class="flex">
										<div><p class="text-[#fff] text-[3.25rem] font-[600] leading-[3rem]">6</p></div>
										<div class="pl-2"><p class="text-[1rem] text-[#E8E8E8]">days</p></div>
									</div>
								</div>
								<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[#E8E8E8] backdrop-blur-[10px] ml-auto">
									<p class="text-[#171717] text-[3.25rem] font-[600] leading-[3rem]">100%</p>
									<p class="text-[1rem] text-[#171717]">of the developers still with the client after 1 year</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content" id="tab-2" style="background-image: url('<?php echo get_template_directory_uri();?>/images/tab-bg-2.jpg');">
					<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 min-h-[32rem] p-3 gap-4">
						<div class="col-span-12 sm:col-span-7 md:col-span-7 lg:col-span-7 content-end">
							<div class="block max-w-[47rem]">
								<p class=" text-[2rem] text-[#F34D05] font-[600] mb-[1rem]">
									<img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/keyloop-logo.svg" alt="">
								</p>
								<p><img class="h-[2rem] w-[1.05rem] inline-block align-text-bottom" src="<?php echo get_template_directory_uri();?>/images/quat-symble.svg" alt=""> </p>
								<p class=" text-[1rem] text-[#E8E8E8] mb-[2rem]">The developers at Smart Working have provided work the same hours as our team, attend all meetings, and are always available for communication. Their seamless integration into our workflows has made them feel like a natural extension of our in-house team, without any of the challenges we expected from remote hiring.</p>
								<p class=" text-[1rem] text-[#fff] font-[500]">- Cameron Wade &#9679; <span class="text-[#F2F2F2] text-[0.875rem]">Cameron Wade</span></p>
							</div>
						</div>
						<div class="col-span-12 sm:col-span-5 md:col-span-5 lg:col-span-5 content-end">
							<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[rgba(255,255,255,0.12)] backdrop-blur-[10px] ml-auto mb-[1.5rem]">
								<p class="text-[1rem] text-[#E8E8E8]">Build the team to</p>
								<div class="flex">
									<div><p class="text-[#fff] text-[3.25rem] font-[600] leading-[3rem]">6</p></div>
									<div class="pl-2"><p class="text-[1rem] text-[#E8E8E8]">developers<br>within 12 months</p></div>
								</div>
							</div>
							<div class="flex space-x-4">
								<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[rgba(255,255,255,0.12)] backdrop-blur-[10px] ml-auto">
									<p class="text-[1rem] text-[#E8E8E8]">The first developer was onboarded in just</p>
									<div class="flex">
										<div><p class="text-[#fff] text-[3.25rem] font-[600] leading-[3rem]">6</p></div>
										<div class="pl-2"><p class="text-[1rem] text-[#E8E8E8]">days</p></div>
									</div>
								</div>
								<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[#E8E8E8] backdrop-blur-[10px] ml-auto">
									<p class="text-[#171717] text-[3.25rem] font-[600] leading-[3rem]">100%</p>
									<p class="text-[1rem] text-[#171717]">of the developers still with the client after 1 year</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content" id="tab-3" style="background-image: url('<?php echo get_template_directory_uri();?>/images/tab-bg-3.jpg');">
					<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 min-h-[32rem] p-3 gap-4">
						<div class="col-span-12 sm:col-span-7 md:col-span-7 lg:col-span-7 content-end">
							<div class="block max-w-[47rem]">
								<p class=" text-[2rem] text-[#F34D05] font-[600] mb-[1rem]">
									<img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/keyloop-logo.svg" alt="">
								</p>
								<p><img class="h-[2rem] w-[1.05rem] inline-block align-text-bottom" src="<?php echo get_template_directory_uri();?>/images/quat-symble.svg" alt=""> </p>
								<p class=" text-[1rem] text-[#E8E8E8] mb-[2rem]">The developers at Smart Working have provided work the same hours as our team, attend all meetings, and are always available for communication. Their seamless integration into our workflows has made them feel like a natural extension of our in-house team, without any of the challenges we expected from remote hiring.</p>
								<p class=" text-[1rem] text-[#fff] font-[500]">- Cameron Wade &#9679; <span class="text-[#F2F2F2] text-[0.875rem]">Cameron Wade</span></p>
							</div>
						</div>
						<div class="col-span-12 sm:col-span-5 md:col-span-5 lg:col-span-5 content-end">
							<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[rgba(255,255,255,0.12)] backdrop-blur-[10px] ml-auto mb-[1.5rem]">
								<p class="text-[1rem] text-[#E8E8E8]">Build the team to</p>
								<div class="flex">
									<div><p class="text-[#fff] text-[3.25rem] font-[600] leading-[3rem]">6</p></div>
									<div class="pl-2"><p class="text-[1rem] text-[#E8E8E8]">developers<br>within 12 months</p></div>
								</div>
							</div>
							<div class="flex space-x-4">
								<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[rgba(255,255,255,0.12)] backdrop-blur-[10px] ml-auto">
									<p class="text-[1rem] text-[#E8E8E8]">The first developer was onboarded in just</p>
									<div class="flex">
										<div><p class="text-[#fff] text-[3.25rem] font-[600] leading-[3rem]">6</p></div>
										<div class="pl-2"><p class="text-[1rem] text-[#E8E8E8]">days</p></div>
									</div>
								</div>
								<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[#E8E8E8] backdrop-blur-[10px] ml-auto">
									<p class="text-[#171717] text-[3.25rem] font-[600] leading-[3rem]">100%</p>
									<p class="text-[1rem] text-[#171717]">of the developers still with the client after 1 year</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	


    <?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	   <?php if (get_row_layout() == 'how_it_works') : ?>
			<div class=" w-full relative bg-white p-[1rem] lg:pt-[7.5rem] lg:pb-[2.5rem]">
				<div class="w-full relative z-10">
					<div class="container">
					<?php if(get_sub_field('small_title')): ?>
						<div class="block mb-[2.5rem]">
							<h2 class="text-[2.25rem] font-[600] text-center text-[#1E1E1E] mb-[0.5rem]"><?php echo get_sub_field('small_title'); ?> <span class="text-dark-orange"><?php echo get_sub_field('second_title'); ?></span></h2>
						</div>
					<?php endif; ?>	
						<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 lg:gap-16">
							<div class="col-span-12 sm:col-span-6 lg:col-span-6">
								<div class="progressBarContainer">
								<?php if(have_rows('box_content')): ?>
								<?php while(have_rows('box_content')): the_row(); ?>
								<?php 
									$title = get_sub_field('title'); 
									$row_index = get_row_index(); 
								?>
									<div class="item how-its-work-items">
										<div class="how-its-work-title"><?php echo $title;?></div>
										<div class="how-its-work-dicription mt-4">
											<ul class="list-disc">
											<?php if(have_rows('main_points')): ?>
											<?php while(have_rows('main_points')): the_row(); ?>
												<li> <?php echo get_sub_field('points'); ?> </li>
											<?php endwhile; ?>	
											<?php endif; ?>		
											</ul>
										</div>
										<span data-slick-index="<?php echo $row_index; ?>" class="sliderProgressBar"></span>
									</div>
								<?php endwhile; ?>	
								<?php endif; ?>
									
									
								</div>
								
							</div>
							<div class="col-span-12 sm:col-span-6 lg:col-span-6">
								<div class="slider-hiw single-item">
								<?php if(have_rows('box_content')): ?>
								<?php while(have_rows('box_content')): the_row(); ?>
									<div><img class="w-[100%] max-w-[600px] h-auto" src="<?php echo get_sub_field('images')['url']; ?>" alt="<?php echo get_sub_field('images')['url']; ?>"></div>
								<?php endwhile; ?>	
								<?php endif; ?>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>

<!-- Vetted New Design Start -->
	<div class=" w-full relative bg-white p-[1rem] lg:pt-[2.5rem] lg:pb-[3.5rem]">
		<div class="container">
			<?php get_template_part( 'template-parts/ai-vetted-profile-new-design' );?>	
		</div>
	</div>
<!-- Vetted New Design End -->

<!-- Why Hire SmartWorking Start -->
<div class=" w-full relative p-[1rem] lg:py-[3.75rem]">
	<div class="container">
		<?php get_template_part( 'template-parts/why-hire-smartworking' );?>
	</div>
</div>
<!-- Why Hire SmartWorking End -->


	<!-- Calculator Section  -->
	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'curious_section') : ?>
	<section class=" w-full relative p-[1rem] lg:py-[3.75rem]">
		<div class="container">
			<div class="block text-center mb-[4rem]">
				<?php if(get_sub_field('main_heading')): ?>	
				<p class="text-[2.25rem] font-[600] text-center text-[#E8E8E8] mb-[0.5rem]"><?php echo get_sub_field('main_heading'); ?></p>
				<?php endif; ?>
				<p class="text-[1.25rem] opacity-80 font-[400] text-center text-[#E8E8E8] mb-[0.5rem]"><?php echo get_sub_field('subheading'); ?></p>
			</div>
			<div class="relative min-h-[350px]">
				<div class="grid grid-cols-1 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 xl:gap-7 2xl:gap-10">
					<div class="grid-item md:col-span-12 lg:col-span-2 xl:col-span-4 content-center">
						<div class="w-[100%] xl:max-w-[500px]">
							<p class="text-[1.5rem] font-[600] text-[#fff] mb-16">Start building your team today</p>

							<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 gap-8">
								<div class="col-span-12 sm:col-span-6 lg:col-span-6">
									<p class="block mb-2 text-sm font-medium text-white dark:text-white">Experience</p>
									<div class="relative select-input">
										<img class="absolute h-[1.5rem] w-[1.5rem]" src="<?php echo get_template_directory_uri();?>/images/fullstak.svg" alt="">
										<select id="select_skill" class=" bg-[#1f1f1f] border h-[2.5rem] rounded-[0.5rem] border-[#414141] text-[#fff] text-[0.875rem] focus:ring-[#1f1f1f] focus:border-[#414141] block w-full dark:bg-[#1f1f1f] dark:border-[#414141] dark:placeholder-gray-400 dark:text-[#000] dark:focus:ring-[#1f1f1f] dark:focus:border-[#414141]">
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
								</div>
								<div class="col-span-12 sm:col-span-6 lg:col-span-6">
									<p class="block mb-2 text-sm font-medium text-white dark:text-white">Roles</p>
									<div class="relative select-input">
										<img class="absolute h-[1.5rem] w-[1.5rem]" src="<?php echo get_template_directory_uri();?>/images/exprience-dev.svg" alt="">
										<select id="experienceDev" class=" bg-[#1f1f1f] border h-[2.5rem] rounded-[0.5rem] border-[#414141] text-[#fff] text-[0.875rem] focus:ring-[#1f1f1f] focus:border-[#414141] block w-full dark:bg-[#1f1f1f] dark:border-[#414141] dark:placeholder-gray-400 dark:text-[#000] dark:focus:ring-[#1f1f1f] dark:focus:border-[#414141]">
											<option value="midLevel">Mid level (4-6 years)</option>
											<option value="senior" selected>Senior level (6+ years)</option>
										</select>
									</div>
								</div>
								
								<div class="col-span-12 sm:col-span-6 lg:col-span-6">
									<p class="block mb-2 text-sm font-medium text-white dark:text-white">I'm based in</p>
									<div class="relative select-input">
										<img class="absolute h-[1.5rem] w-[1.5rem] countryImage" src="<?php echo get_template_directory_uri();?>/images/flag-uk.svg" alt="">
										<select id="countriesList" class=" bg-[#1f1f1f] border h-[2.5rem] rounded-[0.5rem] border-[#414141] text-[#fff] text-[0.875rem] focus:ring-[#1f1f1f] focus:border-[#414141] block w-full dark:bg-[#1f1f1f] dark:border-[#414141] dark:placeholder-gray-400 dark:text-[#000] dark:focus:ring-[#1f1f1f] dark:focus:border-[#414141]">
											<option value="us">United States</option>
											<option value="uk" selected>United Kingdom</option>
										</select>
									</div>
								</div>
								
								<div class="col-span-12 sm:col-span-6 lg:col-span-6">
									<p class="block mb-2 text-sm font-medium text-white dark:text-white">Number of developers</p>
									<div class="relative select-input md:max-w-[7.75rem]">
										<button type="button" class="btn-count left-2" id="decrement-button">
											<svg class="w-3 h-3 inline text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
												<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16"/>
											</svg>
										</button>
										<input type="number" id="quantity-input" min="1" value="1" class=" bg-[#1f1f1f] text-center border h-[2.5rem] rounded-[0.5rem] border-[#414141] text-[#fff] text-[0.875rem] focus:ring-[#1f1f1f] focus:border-[#414141] block w-full py-[0.3rem] px-[2rem] dark:bg-[#1f1f1f] dark:border-[#414141] dark:placeholder-gray-400 dark:text-[#000] dark:focus:ring-[#1f1f1f] dark:focus:border-[#414141]" />
										<button type="button" class="btn-count right-2" id="increment-button" >
											<svg class="w-3 h-3 inline text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
												<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
											</svg>
										</button>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="grid-item md:col-span-6 lg:col-span-5 xl:col-span-4 content-center">
						<div class="w-[100%] min-h-[26.25rem] bg-[#FFF] p-[1.5rem] rounded-[2rem] relative overflow-hidden ml-auto">
							<img class=" absolute right-0 bottom-[110px]" src="<?php echo get_template_directory_uri();?>/images/logo-icons.svg" alt="">
							<div class="relative h-[100%] text-center">
								<p class="text-[1.5rem] font-[600] text-[#1E1E1E] mt-4"> Hiring with <span class="text-dark-orange">Us</span></p>
								<p class="text-[3rem] font-[700] text-[#1E1E1E] my-6"><span class="currency-symbols">£</span><span class="smartHourPrice">0</span>/hour</p>
								<!-- <p class="text-[3rem] font-[700] text-[#1E1E1E] leading-[40px]"><span class="text-[20px] inline-block align-bottom leading-[25px]">to &nbsp;</span> <span class="currency-symbols">£</span><span class="smartToPrice">0</span>  <span class="text-[20px] inline-block align-bottom leading-[25px]"> /month</span></p> -->
								<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-3">Equivalent to</p>
								<p class="text-[1rem] font-[400] text-[#1E1E1E]"><span class="smartMonthPrice text-[1.5rem] font-[700]">0</span> <span class="currency-symbols">£</span>/month</p>
								
							</div>
							<div class="w-[100%] absolute h-[110px] bg-[#FCFCFC] border-t border-[#EEE] left-0 bottom-0 p-[20px]">
								<p class="text-[0.875rem] font-[500] text-center text-[#1E1E1E]">Take advantage of our vetted talent, with savings of up to 50%</p>
							</div>
						</div>
					</div>
					<div class="grid-item md:col-span-6 lg:col-span-5 xl:col-span-4 content-center">
						<div class="w-[100%] min-h-[26.25rem] bg-[rgba(255,255,255,0.08)] border border-[rgba(238,238,238,0.40)] p-[1.5rem] rounded-[2rem] relative overflow-hidden ml-auto">
							<img class="absolute countryImage w-[24rem] h-[24rem] opacity-[0.08] right-[-65px] bottom-[15px]" src="<?php echo get_template_directory_uri();?>/images/flag-uk.svg" alt="">
							<div class="relative h-[100%] text-center">
								<p class="text-[1.5rem] font-[400] text-[#FFF] mt-4">Hiring in <span class="select-country">United Kingdom</span></p>
								<p class="text-[3rem] font-[700] text-[#FFF] my-6"><span class="currency-symbols">£</span><span class="otherHourPrice">0</span>/hour</p>
								<!-- <p class="text-[3rem] font-[700] text-[#FFF] leading-[40px]"><span class="text-[20px] inline-block align-bottom leading-[25px]">to &nbsp;</span> <span class="currency-symbols">£</span><span class="otherToPrice">0</span> <span class="text-[20px] inline-block align-bottom leading-[25px]"> /month </span></p> -->
								<p class="text-[1rem] font-[400] text-[#FFF] mb-3">Equivalent to</p>
								<p class="text-[1rem] font-[400] text-[#FFF]"><span class="otherMonthPrice text-[1.5rem] font-[700]">0</span> <span class="currency-symbols">£</span>/month</p>
							</div>
							<div class="w-[100%] absolute h-[110px] bg-[#202020] border-t border-[#000]  left-0 bottom-0 p-[20px] md:px-[30px]">
								<p class="text-[0.875rem] font-[500] text-center text-[#FFF]">54% Higher annual cost Based on salary benchmarks including region-specific employment costs*</p>
							</div>
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
	<!-- Calculator Section End  -->
	
	<!-- 
	<div class=" w-full relative">
		<div class="w-full relative z-10">
			<img class=" absolute right-0 z-0 top-[120px] w-[350px] h-[350px]" src="<?php echo get_template_directory_uri();?>/images/circule-bg.png" alt="">
			<?php get_template_part( 'template-parts/ai-vetted-profile' );?>
		</div>
	</div> 
	-->
	
	<?php ///get_template_part( 'template-parts/assemble-team' );?>
	<?php //get_template_part( 'template-parts/trustpilot-review' );?>
	<?php get_template_part( 'template-parts/home-blog' );?>
	<!-- FAQ Section  -->

	<div class="w-full p-[1rem] lg:p-[3.75rem]">
		<div class="container">
			<?php if (have_rows('block')) : ?>
			<?php while (have_rows('block')) : the_row(); ?>
			<?php if (get_row_layout() == 'home_faq_heading') : ?>
				<div class=" block">
					<?php if(get_sub_field('main_heading')): ?>		
						<h2 class="text-[2.25rem] font-[600] text-center text-[#E8E8E8] mb-[0.5rem]"><?php echo get_sub_field('main_heading'); ?></h2>
					<?php endif; ?>
					<?php if(get_sub_field('orange_heading')): ?>		
						<p class="text-[1.25rem] opacity-80 font-[400] text-center text-[#E8E8E8] mb-[2.5rem]"><?php echo get_sub_field('orange_heading'); ?></p>
					<?php endif; ?>
				</div>
			

			<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?> 	
				<div class="grid grid-cols-12 gap-4 md:gap-8 lg:gap-10 2xl:gap-16">
				<?php if (have_rows('block')) : ?>
				<?php while (have_rows('block')) : the_row(); ?>
				<?php if (get_row_layout() == 'home_faq_heading') : ?>
					<div class="grid-item col-span-12 md:col-span-12 lg:col-span-6">
						<div class="w-[100%] relative max-w-[100%] px-[15%]">
							<div class=" bg-white w-[100%] z-10 absolute left-0 top-[40%] max-w-[15rem] inline-block rounded-[0.5rem] p-[0.65rem]">
							<?php if(get_sub_field('left_box_title_1')): ?>	
								<p class="text-[1rem] font-[600] text-left text-[#FF4D04] mb-[0.5rem]"><img class="w-[1.5rem] inline-block h-[1.5rem]" src="<?php echo get_template_directory_uri();?>/images/messages.svg" alt=""> <?php echo get_sub_field('left_box_title_1'); ?></p>
							<?php endif; ?>
							
							<?php if(get_sub_field('left_box_paragraph_1')): ?>
								<p class="text-[0.85rem] font-[400] text-left text-[#1E1E1E]"><?php echo get_sub_field('left_box_paragraph_1'); ?></p>
							<?php endif; ?>
							</div>
							<div class=" bg-white w-[100%] z-10 absolute right-0 top-[10%] max-w-[15rem] inline-block rounded-[0.5rem] p-[0.65rem]">
							<?php if(get_sub_field('left_box_title_2')): ?>
								<p class="text-[1rem] font-[600] text-left text-[#FF4D04] mb-[0.5rem]"><img class="w-[1.5rem] inline-block h-[1.5rem]" src="<?php echo get_template_directory_uri();?>/images/phone-call.svg" alt=""> <?php echo get_sub_field('left_box_title_2'); ?></p>
							<?php endif; ?>
							
							<?php if(get_sub_field('left_box_paragraph_2')): ?>
								<p class="text-[0.85rem] font-[400] text-left text-[#1E1E1E]"><?php echo get_sub_field('left_box_paragraph_2'); ?></p>
							<?php endif; ?>
							</div>
							<div class=" bg-white w-[100%] z-10 absolute right-0 bottom-[10%] max-w-[15rem] inline-block rounded-[0.5rem] p-[0.65rem]">
							<?php if(get_sub_field('left_box_title_3')): ?>	
								<p class="text-[1rem] font-[600] text-left text-[#FF4D04] mb-[0.5rem]"><img class="w-[1.5rem] inline-block h-[1.5rem]" src="<?php echo get_template_directory_uri();?>/images/video-call.svg" alt=""> <?php echo get_sub_field('left_box_title_3'); ?></p>
							<?php endif; ?>

							<?php if(get_sub_field('left_box_paragraph_3')): ?>	
								<p class="text-[0.85rem] font-[400] text-left text-[#1E1E1E]"><?php echo get_sub_field('left_box_paragraph_3'); ?></p>
							<?php endif; ?>
							</div>
							<?php if(get_sub_field('left_box_main_image')): ?>
								<img class="w-[100%] rounded-[2.5rem] h-auto" src="<?php echo get_sub_field('left_box_main_image')['url']; ?>" alt="">
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
				<?php endwhile; ?>
				<?php endif; ?>	
					<div class="grid-item col-span-12 md:col-span-12 lg:col-span-6">
						<div class="faq-accordian-box">
							<div class="faq-accordian">
								<?php $faq_argument = array( 'post_type' => 'faq'); $faq_query	= new WP_Query($faq_argument); ?>
								<?php while ($faq_query->have_posts()) : $faq_query->the_post();?>
								<?php $post_id = get_the_ID(); ?>
									<div class="faq-accordian-item">
										<div class="faq-accordian-title">
											<?php the_title();?>
											<span class="icons-up">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M8.46973 13.2598L11.9997 9.73977L15.5297 13.2598" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</span>
											<span class="icons-down">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M8.46973 10.7402L11.9997 14.2602L15.5297 10.7402" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</span>
										</div>
										<div class="faq-accordian-details">
											<?php echo get_the_excerpt();?>
										</div>
									</div>
								<?php endwhile; wp_reset_postdata();?>

							</div>
						</div>
					</div>
					
				</div>
		</div>
	</div>
	

	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'excited_section') : ?>
		<section class="w-full bg-white p-[1rem] lg:p-[3.75rem]">
			<div class="container !mb-14">
				<div class="grid grid-cols-12 gap-4 md:gap-8 lg:gap-10 2xl:gap-16">
				<?php if(get_sub_field('left_side_image')): ?>
					<div class="grid-item col-span-12 md:col-span-12 lg:col-span-3">
						<img class="w-full" src="<?php echo get_sub_field('left_side_image')['url']; ?>" alt="">
					</div>
				<?php endif; ?>		
					<div class="grid-item col-span-12 md:col-span-12 lg:col-span-6 content-center">
					<?php if(get_sub_field('main_title')): ?>
						<h2 class="text-[2.25rem] font-[600] text-center text-[#1E1E1E] mb-[1rem]"><?php echo get_sub_field('main_title'); ?> <span class="text-dark-orange"><?php echo get_sub_field('orange_title'); ?></span></h2>
					<?php endif; ?>
					
					<?php if(get_sub_field('small_paragraph')): ?>
						<p class="text-[1.25rem] opacity-80 font-[400] text-center text-[#4A4A4A]"><?php echo get_sub_field('small_paragraph'); ?></p>
					<?php endif; ?>	
						<ul class=" block text-[1rem] text-center font-[400] text-[#1E1E1E] my-[2rem]">
						<?php if(get_sub_field('slogan_1')): ?>
							<li class="inline-block mx-2"><img class="inline align-middle mr-1" src="<?php echo get_template_directory_uri();?>/images/Handshake.svg" alt=""> <?php echo get_sub_field('slogan_1'); ?></li>
						<?php endif; ?>	
						<?php if(get_sub_field('slogan_2')): ?>	
							<li class="inline-block mx-2"><img class="inline align-middle mr-1" src="<?php echo get_template_directory_uri();?>/images/UsersThree.svg" alt=""> <?php echo get_sub_field('slogan_2'); ?></li>
						<?php endif; ?>	
						<?php if(get_sub_field('slogan_3')): ?>	
							<li class="inline-block mx-3"><img class="inline align-middle mr-1" src="<?php echo get_template_directory_uri();?>/images/HandCoins.svg" alt=""> <?php echo get_sub_field('slogan_3'); ?></li>
						<?php endif; ?>
						</ul>
						
						<?php if(get_sub_field('button_name')): ?>
						<div class="block text-center">
							<a class="button_slide_org slide_org_right" href="<?php echo get_sub_field('button_url'); ?>">
								<?php echo get_sub_field('button_name'); ?> 🡢
							</a>
						</div>
						<?php endif; ?>
					</div>
					<?php if(get_sub_field('right_side_image')): ?>
						<div class="grid-item col-span-12 md:col-span-12 lg:col-span-3">
							<img class="w-full" src="<?php echo get_sub_field('right_side_image')['url']; ?>" alt="">
						</div>
					<?php endif; ?>
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