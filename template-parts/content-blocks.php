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
	<div class="w-full relative z-10 pt-[2.5rem]">
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
							<strong class="title-orange">Developers</strong>
						</h1>
					<?php endif; ?>
					<!-- <?php if(get_sub_field('short_description')): ?>
						<h1 class=" text-[2.25rem] font-[700] text-[rgba(255,255,255,0.70)] text-center mb-[0.5rem]"><?php echo get_sub_field('short_description'); ?></h1>
					<?php endif; ?>	 -->
					
					<?php if(get_sub_field('small_paragraph')): ?>
						<p class=" text-[1rem] text-[#E8E8E8] opacity-80 text-center"><?php echo get_sub_field('small_paragraph'); ?></p>
					<?php endif; ?>
					</div>
					<?php if(get_sub_field('button_name')): ?>
					<div class="block text-center mb-8">
						
						<a class="button_slide slide_right px-[1.5rem]" href="<?php echo get_sub_field('button_url'); ?>">
							<?php echo get_sub_field('button_name'); ?>
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
		<div class="w-full relative five-item-box mt-9">
			<div class="container relative pt-3">
				<img class="absolute left-0 top-0 h-[0.125rem] w-[100%]" src="<?php echo get_template_directory_uri();?>/images/bar-bg.png" alt="">
				<div class="w-full py-3">
					<div class="grid grid-cols-10 gap-6">
					<?php if(have_rows('after_banner_card_section')): ?>
					<?php while(have_rows('after_banner_card_section')): the_row(); ?>
					<?php 
						$small_text = get_sub_field('small_text'); 
					?>
						<div class="col-span-10 sm:col-span-5 md:col-span-[4] lg:col-span-2">
							<div class="hero-feature">
								<img class="absolute w-[1.11rem] h-[1.11rem] left-[0] top-[13px]" src="<?php echo get_sub_field('icon')['url']; ?>" alt="">
								<?php echo $small_text;?>
							</div>
						</div>
					<?php endwhile; ?>	
					<?php endif; ?>	
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>

	<!-- home banner close -->
	<!-- Future Remote -->
	<?php if (get_row_layout() == 'future_hiring') : ?>
	<div class="w-full relative py-[3.75rem]" >
		<div class="container relative bg-[#1E1E1E] px-[0px] sm:px-[1rem] md:px-[3rem] py-[2.125rem]  rounded-[1.25rem] min-h-[290px]">
			<img class="bg-img absolute h-[100%] w-auto right-[-0] z-0 top-[0px]" src="<?php echo get_template_directory_uri();?>/images/future-bg.svg" alt="">
			<div class="relative z-10 block">
				<?php if(get_sub_field('main_heading')): ?>
					<h2 class="text-[2.25rem] font-[700] text-center text-[#ffffff] mb-[2.5rem]"><?php echo get_sub_field('main_heading'); ?></h2>
				<?php endif; ?>
				<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 gap-4">
					<?php if(have_rows('block_part')): ?>
					<?php while(have_rows('block_part')): the_row(); ?>
						<div class="col-span-12 sm:col-span-4 lg:col-span-4 text-center border-box-bar">
							<p class="text-[#E8E8E8] text-[2.5rem] font-[800] "><?php echo get_sub_field('data_target'); ?></p>
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
				<h2 class="text-[2.25rem] font-[700] text-center text-[#ffffff] mb-[1.5rem]">Case <span class="title-orange">Studies</span></h2>
			</div>
			<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12">
				<div class="col-span-4 lg:col-span-4 content-center case-tab active" data-id="tab-1">
					Remote hiring made safe and reliable
					<!-- <img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/keyloop-logo.svg" alt=""> -->
				</div>
				<div class="col-span-4 lg:col-span-4 content-center case-tab" data-id="tab-2">
					Excellent and Ongoing Support
					<!-- <img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/stickey-logo.svg" alt=""> -->
				</div>
				<div class="col-span-4 lg:col-span-4 content-center case-tab" data-id="tab-3">
					High quality and effective solution
					<!-- <img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/tiller-logo.svg" alt=""> -->
				</div>
			</div>
			<div class="tab-container">
				<div class="tab-content active" id="tab-1" style="background-image: url('<?php echo get_template_directory_uri();?>/images/case-study-checking-1.jpg');">
					<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 min-h-[34rem] gap-4">
						<div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 content-end">
							<div class="block max-w-[47rem]">
								<p class=" text-[2rem] text-[#F34D05] font-[600] mb-[1rem]">
									<img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/keyloop-logo.svg" alt="">
								</p>
								<p><img class="h-[2rem] w-[1.05rem] inline-block align-text-bottom" src="<?php echo get_template_directory_uri();?>/images/quat-symble.svg" alt=""> </p>
								<p class=" text-[1rem] text-[#E8E8E8] mb-[2rem]">Smart Working have always delivered strong shortlists of vetted candidates in very tight timescales. We have now built a team of 10 with them and the turnover of our developers has been extremely low. We’d strongly recommend using them.</p>
								<p class=" text-[1rem] text-[#fff] font-[500]">- Cameron Wade &#9679; <span class="text-[#F2F2F2] text-[0.875rem]">Chief Marketing Officer</span></p>
							</div>
						</div>
						<div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 content-end">
							<div class="max-w-[100%] sm:max-w-[20rem] rounded-[0.25rem] lg:max-w-[20rem] p-[2rem] bg-[#FFFFFF] backdrop-blur-[10px] ml-auto mb-4">
								<p class="text-[1rem] text-[#171717]">Compared with UK hiring, this is an approximate annual saving of</p>
								<p class="text-[#171717] text-[3.25rem] font-[600] leading-[3rem]">£400,000</p>
							</div>
							<div class="flex space-x-4">
								<div class="max-w-[100%] sm:max-w-[16.5rem] w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[#FFFFFF] backdrop-blur-[10px] ml-auto">
									<p class="text-[1rem] text-[#171717]">Build the team to</p>
									<div class="flex">
										<div><p class="text-[#171717] text-[3.25rem] font-[600] leading-[3rem]">10</p></div>
										<div class="pl-2"><p class="text-[1rem] text-[#171717]">developers<br>within 12 months</p></div>
									</div>
								</div>
								<div class="max-w-[100%] sm:max-w-[16.5rem] w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[#FFFFFF] backdrop-blur-[10px] ml-auto">
									<p class="text-[#171717] text-[3.25rem] font-[600] leading-[3rem]">96%</p>
									<p class="text-[1rem] text-[#171717]">retention rate maintained within the first 12 months</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content" id="tab-2" style="background-image: url('<?php echo get_template_directory_uri();?>/images/case-study-image-2.jpg');">
					<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 min-h-[34rem] gap-4">
						<div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 content-end">
							<div class="block max-w-[47rem]">
								<p class=" text-[2rem] text-[#F34D05] font-[600] mb-[1rem]">
									<img class="h-[3rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/stickey-logo.svg" alt="">
								</p>
								<p><img class="h-[2rem] w-[1.05rem] inline-block align-text-bottom" src="<?php echo get_template_directory_uri();?>/images/quat-symble.svg" alt=""> </p>
								<p class=" text-[1rem] text-[#E8E8E8] mb-[2rem]">We have worked with Smart Working for 2 years and have been very pleased with the quality and skills of their developers. Their UK team has continued to deliver excellent ongoing support to us. We now have 6 people working for us on a long-term basis.</p>
								<p class=" text-[1rem] text-[#fff] font-[500]">- Cameron Wade &#9679; <span class="text-[#F2F2F2] text-[0.875rem]">Head of Value Propositions</span></p>
							</div>
						</div>
						<div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 content-end">
							<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[#FFFFFF] backdrop-blur-[10px] ml-auto mb-4">
								<p class="text-[1rem] text-[#171717]">Build the team to</p>
								<div class="flex">
									<div><p class="text-[#171717] text-[3.25rem] font-[600] leading-[3rem]">06</p></div>
									<div class="pl-2"><p class="text-[1rem] text-[#171717]">engineers<br>within 24 months</p></div>
								</div>
							</div>
							<div class="flex space-x-4">
								<div class="max-w-[100%] sm:max-w-[16.5rem] w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[#FFFFFF] backdrop-blur-[10px] ml-auto">
									<p class="text-[1rem] text-[#171717]">Fully vetted candidates were submitted in less than</p>
									<div class="flex">
										<div><p class="text-[#171717] text-[3.25rem] font-[600] leading-[3rem]">10</p></div>
										<div class="pl-2"><p class="text-[1rem] text-[#171717]">working<br>days</p></div>
									</div>
								</div>
								<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[#FFFFFF] backdrop-blur-[10px] ml-auto">
									<p class="text-[#171717] text-[3.25rem] font-[600] leading-[3rem]">100%</p>
									<p class="text-[1rem] text-[#171717]">of our developers undergo screening and verification checks prior to employment</p>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content" id="tab-3" style="background-image: url('<?php echo get_template_directory_uri();?>/images/case-study-image-31.jpg');">
					<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 min-h-[34rem] gap-4">
						<div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 content-end">
							<div class="block max-w-[47rem]">
								<p class=" text-[2rem] text-[#F34D05] font-[600] mb-[1rem]">
									<img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/keyloop-logo.svg" alt="">
								</p>
								<p><img class="h-[2rem] w-[1.05rem] inline-block align-text-bottom" src="<?php echo get_template_directory_uri();?>/images/quat-symble.svg" alt=""> </p>
								<p class=" text-[1rem] text-[#fff] mb-[2rem]">They are a breath of fresh air, they do what they promise and deliver what they say.</p>
								<p class=" text-[1rem] text-[#fff] font-[500]">- Edward Genochio &#9679; <span class="text-[#F2F2F2] text-[0.875rem]">Chief Executive Officer</span></p>
							</div>
						</div>
						<div class="col-span-12 sm:col-span-6 md:col-span-6 lg:col-span-6 content-end">
							<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[#FFFFFF] backdrop-blur-[10px] ml-auto mb-4">
								<p class="text-[#171717] text-[3.25rem] font-[600] leading-[3rem]">3 Rounds</p>
								<p class="text-[1rem] text-[#171717] mt-1">of technical assessments prior to client interviews</p>
								
							</div>
							<div class="flex space-x-4">
								<div class="max-w-[100%] sm:max-w-[16.5rem] w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[#FFFFFF] backdrop-blur-[10px] ml-auto">
									<p class="text-[1rem] text-[#171717]">Constant</p>
									<p class="text-[#171717] text-[3.25rem] font-[600] leading-[3rem]">Support</p>
									<p class="text-[1rem] text-[#171717]">from our Account Manager and Customer success team</p>
									
								</div>
								<div class="max-w-[100%] sm:max-w-[16.5rem] rounded-[0.25rem] lg:max-w-[16.5rem] p-[2rem] bg-[#FFFFFF] backdrop-blur-[10px] ml-auto">
									<p class="text-[1rem] text-[#171717]">Reduced hiring timelines by</p>
									<p class="text-[#171717] text-[3.25rem] font-[600] leading-[3rem]">50%</p>
									<p class="text-[1rem] text-[#171717]">compared to traditional recruitment methods</p>
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
							<h2 class="text-[2.25rem] font-[700] text-center text-[#1E1E1E] mb-[0.5rem]"><?php echo get_sub_field('small_title'); ?> <span class="title-orange"><?php echo get_sub_field('second_title'); ?></span></h2>
						</div>
					<?php endif; ?>	
						<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 lg:gap-16">
							<div class="col-span-12 sm:col-span-6 lg:col-span-6">
								<div class="progressBarContainer">
									<?php if(have_rows('box_content')): ?>
									<?php while(have_rows('box_content')): the_row(); ?>
									<?php 
										$title = get_sub_field('title'); 
										$row_index = (get_row_index() - 1); 
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
											<span data-slick-index='<?php echo $row_index; ?>' class="sliderProgressBar"></span>
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
				<p class="text-[2.25rem] font-[700] text-center text-[#ffffff] mb-[0.5rem]"><?php echo get_sub_field('main_heading'); ?></p>
				<?php endif; ?>
				<p class="text-[1.25rem] opacity-80 font-[400] text-center text-[#E8E8E8] mb-[0.5rem]"><?php echo get_sub_field('subheading'); ?></p>
			</div>
			<div class="relative min-h-[350px]">
				<div class="grid grid-cols-1 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 xl:gap-7 2xl:gap-10">
					<div class="grid-item md:col-span-12 lg:col-span-5 xl:col-span-5 content-center">
						<div class="w-[100%] xl:max-w-[500px]">
							<p class="text-[1.5rem] font-[600] text-[#fff] mb-16">Start building your team today</p>

							<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 gap-8">
								<div class="col-span-12 sm:col-span-6 lg:col-span-6">
									<p class="block mb-2 text-sm font-medium text-white dark:text-white">Experience</p>
									<div class="relative select-input">
										<img class="absolute h-[1.5rem] w-[1.5rem]" src="<?php echo get_template_directory_uri();?>/images/exprience-dev.svg" alt="">
										<select id="experienceDev" class=" bg-[#1f1f1f] border h-[2.5rem] rounded-[0.5rem] border-[#414141] text-[#fff] text-[0.875rem] focus:ring-[#1f1f1f] focus:border-[#414141] block w-full dark:bg-[#1f1f1f] dark:border-[#414141] dark:placeholder-gray-400 dark:text-[#000] dark:focus:ring-[#1f1f1f] dark:focus:border-[#414141]">
											<option value="midLevel">Mid level (4-6 years)</option>
											<option value="senior" selected>Senior level (6+ years)</option>
										</select>
									</div>
								</div>
								<div class="col-span-12 sm:col-span-6 lg:col-span-6">
									<p class="block mb-2 text-sm font-medium text-white dark:text-white">Roles</p>
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
									<p class="block mb-2 text-sm font-medium text-white dark:text-white">I’m based in</p>
									<div class="relative select-input">
										<img class="absolute h-[1.5rem] w-[1.5rem] countryImage" src="<?php echo get_template_directory_uri();?>/images/flag-uk.svg" alt="">
										<select id="countriesList" class=" bg-[#1f1f1f] border h-[2.5rem] rounded-[0.5rem] border-[#414141] text-[#fff] text-[0.875rem] focus:ring-[#1f1f1f] focus:border-[#414141] block w-full dark:bg-[#1f1f1f] dark:border-[#414141] dark:placeholder-gray-400 dark:text-[#000] dark:focus:ring-[#1f1f1f] dark:focus:border-[#414141]">
											<option value="uk" selected>United Kingdom</option>
											<option value="us">United States</option>
											<option value="eu">Europe</option>
											<option value="au">Australia</option>
											<option value="ca">Canada</option>
										</select>
									</div>
								</div>
								
								<div class="col-span-12 sm:col-span-6 lg:col-span-6">
									<p class="block mb-2 text-sm font-medium text-white dark:text-white">Number of developers</p>
									<div class="relative select-input md:max-w-[7.75rem]">
										<button type="button" class="btn-count left-2 disabled:opacity-[0.3]" id="decrement-button" disabled>
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
					<div class="grid-item md:col-span-12 lg:col-span-7 xl:col-span-7 content-center">
						<div class="grid grid-cols-1 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-7">
							<div class="grid-item md:col-span-6 lg:col-span-6 xl:col-span-6 content-center">
								<div class="w-[100%] min-h-[26.25rem] bg-[#FFF] p-[1.5rem] rounded-[2rem] relative overflow-hidden ml-auto">
									<img class=" absolute right-0 bottom-[110px]" src="<?php echo get_template_directory_uri();?>/images/logo-icons.svg" alt="">
									<div class="relative h-[100%] text-center">
										<p class="text-[1.5rem] font-[700] text-[#1E1E1E] mt-4"> Hiring with <span class="text-dark-orange">Us</span></p>
										<p class="text-[3rem] font-[700] text-[#1E1E1E] my-6"><span class="currency-symbols">£</span><span class="smartHourPrice">0</span>/hour</p>
										<!-- <p class="text-[3rem] font-[700] text-[#1E1E1E] leading-[40px]"><span class="text-[20px] inline-block align-bottom leading-[25px]">to &nbsp;</span> <span class="currency-symbols">£</span><span class="smartToPrice">0</span>  <span class="text-[20px] inline-block align-bottom leading-[25px]"> /month</span></p> -->
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-3">Equivalent to</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E]"><span class="smartMonthPrice text-[1.5rem] font-[700]">0</span> <span class="currency-symbols">£</span>/month</p>
										
									</div>
									<div class="w-[100%] absolute h-[110px] bg-[#FCFCFC] border-t border-[#EEE] left-0 bottom-0 p-[20px] md:px-[30px]">
										<p class="text-[0.875rem] font-[500] text-center text-[#1E1E1E]"><img class="inline-flex" src="<?php echo get_template_directory_uri();?>/images/hand-coins.svg" alt=""> Take advantage of our vetted talent, with <span class="font-[600]">savings of up to 50%</span></p>
									</div>
								</div>
								<p class="text-[0.75rem] font-[400] text-center text-[#F5F5F5] mt-[0.89rem]">&nbsp;</p>
							</div>
							<div class="grid-item md:col-span-6 lg:col-span-6 xl:col-span-6 content-center">
								<div class="w-[100%] min-h-[26.25rem] bg-[rgba(255,255,255,0.08)] border border-[rgba(238,238,238,0.40)] p-[1.5rem] rounded-[2rem] relative overflow-hidden ml-auto">
									<img class="absolute countryImage w-[24rem] h-[24rem] opacity-[0.08] right-[-65px] bottom-[15px]" src="<?php echo get_template_directory_uri();?>/images/flag-uk.svg" alt="">
									<div class="relative h-[100%] text-center">
										<p class="text-[1.5rem] font-[400] text-[#FFF] mt-4">Hiring in <span class="select-country font-[700]">United Kingdom</span></p>
										<p class="text-[3rem] font-[700] text-[#FFF] my-6"><span class="currency-symbols">£</span><span class="otherHourPrice">0</span>/hour</p>
										<!-- <p class="text-[3rem] font-[700] text-[#FFF] leading-[40px]"><span class="text-[20px] inline-block align-bottom leading-[25px]">to &nbsp;</span> <span class="currency-symbols">£</span><span class="otherToPrice">0</span> <span class="text-[20px] inline-block align-bottom leading-[25px]"> /month </span></p> -->
										<p class="text-[1rem] font-[400] text-[#FFF] mb-3">Equivalent to</p>
										<p class="text-[1rem] font-[400] text-[#FFF]"><span class="otherMonthPrice text-[1.5rem] font-[700]">0</span> <span class="currency-symbols">£</span>/month</p>
									</div>
									<div class="w-[100%] absolute h-[110px] bg-[#202020] border-t border-[#000]  left-0 bottom-0 p-[20px] md:px-[30px]">
										<p class="text-[0.875rem] font-[500] text-center text-[#FFF]"><img class="inline-flex" src="<?php echo get_template_directory_uri();?>/images/TrendUp.svg" alt=""> <span class="font-[600]">Over a 50% annual increase in cost,</span> information is location specific *</p>
									</div>
								</div>
								<p class="text-[0.75rem] font-[400] text-center text-[#F5F5F5] mt-[0.89rem]">
									* All this information is provided by 
									<svg class="inline-flex" xmlns="http://www.w3.org/2000/svg" width="64" height="13" viewBox="0 0 64 13" fill="none">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M63.417 3.10212C63.417 3.0323 63.3674 2.95241 63.3075 2.92243C63.1678 2.84257 62.9581 2.79281 62.5291 2.79281C61.5609 2.79281 60.7128 3.27175 60.3436 4.08009V3.10212C60.3436 3.02223 60.2739 2.95241 60.1842 2.95241H58.7469C58.667 2.95241 58.5973 3.01234 58.5973 3.10212V9.72825C58.5973 9.80798 58.667 9.87782 58.7568 9.87782L60.2739 9.87796C60.3535 9.87796 60.4235 9.80798 60.4235 9.72825V6.74457C60.4235 5.41727 61.3515 4.75864 62.5389 4.75864C62.8184 4.75864 63.0978 4.8084 63.2375 4.85845C63.3374 4.88843 63.4272 4.81844 63.4272 4.70874V3.09209L63.417 3.10212ZM53.7573 2.78278C55.8829 2.78278 57.4698 4.24972 57.4698 6.41506C57.4698 8.57061 55.8829 10.0475 53.7675 10.0475C51.6517 10.0475 50.0751 8.58064 50.0751 6.41506C50.0652 4.24972 51.6418 2.78278 53.7573 2.78278ZM53.7573 8.25138C54.7951 8.25138 55.5936 7.52279 55.5936 6.41506C55.5936 5.30744 54.7951 4.56909 53.7573 4.56909C52.7296 4.56909 51.9311 5.30744 51.9311 6.41506C51.9413 7.52279 52.7395 8.25138 53.7573 8.25138ZM45.355 2.78278C47.4806 2.78278 49.0573 4.24972 49.0573 6.41506C49.0573 8.57061 47.4708 10.0475 45.3649 10.0475C43.2396 10.0475 41.6527 8.58064 41.6527 6.41506C41.6527 4.24972 43.2294 2.78278 45.355 2.78278ZM45.355 8.25138C46.3928 8.25138 47.191 7.52279 47.191 6.41506C47.191 5.30744 46.3928 4.56909 45.3649 4.56909C44.3372 4.56909 43.5387 5.30744 43.5387 6.41506C43.5289 7.53282 44.327 8.26131 45.355 8.25138ZM40.3756 0.188126C40.4555 0.188126 40.5252 0.248059 40.5252 0.337836V9.72825C40.5252 9.80798 40.4653 9.87782 40.3756 9.87782L38.8584 9.87796C38.7785 9.87796 38.7089 9.80798 38.7089 9.72825V8.91001C38.2 9.62845 37.4215 10.0575 36.4238 10.0575C34.7172 10.0575 33.2903 8.7603 33.2903 6.4152C33.2903 4.0702 34.7172 2.77286 36.3939 2.77286C37.4715 2.77286 38.2401 3.28178 38.7089 3.95034V0.337976C38.7089 0.258089 38.7785 0.178237 38.8686 0.178237L40.3756 0.188126ZM36.9626 8.28123C37.9804 8.28123 38.769 7.5628 38.769 6.42509C38.769 5.27759 37.9804 4.56909 36.9626 4.56909C35.9346 4.56909 35.1565 5.30744 35.1565 6.42509C35.1565 7.55277 35.9346 8.28123 36.9626 8.28123ZM32.2924 7.79222C32.2924 9.36903 31.1548 10.0475 29.3186 10.0475C28.0613 10.0475 26.9636 9.69829 26.3449 8.99979C26.2949 8.93986 26.2949 8.85997 26.3449 8.80018L27.2129 7.65258C27.2729 7.57269 27.3826 7.57269 27.4425 7.64255C27.9015 8.12163 28.6199 8.41102 29.4982 8.41102C30.0072 8.41102 30.4262 8.2712 30.4262 7.882C30.4262 7.50287 30.047 7.42298 28.8896 7.1736C27.8716 6.96396 26.6042 6.49491 26.6042 4.9881C26.6042 3.58106 27.712 2.78278 29.5082 2.78278C30.6956 2.78278 31.544 3.14199 32.1427 3.71085C32.2026 3.77064 32.2026 3.86042 32.1527 3.92049L31.3243 5.00816C31.2745 5.07798 31.1747 5.08791 31.1049 5.038C30.7057 4.66887 30.0271 4.44919 29.3585 4.44919C28.7996 4.44919 28.4803 4.62889 28.4803 4.92831C28.4803 5.2776 28.8596 5.35734 30.077 5.61689C31.2844 5.87629 32.2924 6.33531 32.2924 7.79222ZM25.307 7.79222C25.307 9.36903 24.1694 10.0475 22.3332 10.0475C21.0659 10.0475 19.9784 9.69829 19.3495 8.99979C19.3096 8.93986 19.3096 8.85997 19.3495 8.80018L20.2277 7.66247C20.2775 7.58272 20.3974 7.58272 20.4572 7.65258C20.9163 8.13152 21.6347 8.42091 22.5129 8.42091C23.0218 8.42091 23.441 8.28122 23.441 7.89203C23.441 7.5129 23.0618 7.43301 21.9042 7.18353C20.8863 6.97399 19.619 6.50494 19.619 4.99799C19.619 3.59098 20.7166 2.79281 22.5229 2.79281C23.7103 2.79281 24.5588 3.15202 25.1573 3.72088C25.2173 3.77064 25.2173 3.87045 25.1674 3.93024L24.3391 5.00816C24.2893 5.07798 24.1795 5.08791 24.1195 5.038C23.7205 4.66887 23.0417 4.44919 22.3732 4.44919C21.8143 4.44919 21.4951 4.62889 21.4951 4.92831C21.4951 5.2776 21.8742 5.35734 23.0918 5.61689C24.2893 5.87629 25.297 6.33531 25.307 7.79222ZM15.0585 2.8027C17.0644 2.8027 18.0722 3.6909 18.0722 5.61689V9.74819C18.0722 9.82806 18.0023 9.89789 17.9125 9.89789H16.3957C16.316 9.89789 16.2461 9.83809 16.2461 9.74819V8.95978C15.8968 9.51875 15.2084 10.0376 14.1305 10.0376C12.7633 10.0376 11.8054 9.15939 11.8054 7.882C11.8054 6.6247 12.7435 5.82639 14.0108 5.70666L15.8968 5.5369C16.1462 5.50705 16.2461 5.42716 16.2461 5.25768V5.14784C16.2461 4.74861 15.8668 4.45922 15.0486 4.45922C14.39 4.45922 13.7014 4.64881 13.4021 5.20777C13.3621 5.28752 13.2623 5.29755 13.1925 5.24765L12.0948 4.44919C12.0348 4.40932 12.0149 4.31958 12.0549 4.25964C12.5338 3.2917 13.6215 2.81273 15.0585 2.81273V2.8027ZM16.2461 7.08372V6.80436L14.5496 7.014C13.9908 7.09375 13.7014 7.38311 13.7014 7.77244C13.7014 8.22143 14.0506 8.51079 14.6792 8.51079C15.6373 8.51079 16.256 7.84212 16.2461 7.08372ZM10.5679 0.337836V9.72825C10.5679 9.81802 10.498 9.88786 10.4183 9.88786H8.89138C8.81167 9.88786 8.73178 9.81802 8.73178 9.72825V0.337836C8.73178 0.258089 8.80164 0.188267 8.88149 0.188267L10.4083 0.188126C10.498 0.188126 10.5679 0.258089 10.5679 0.337836ZM7.07526 2.94252C7.155 2.94252 7.235 3.01234 7.235 3.10212V9.4188C7.235 11.2051 6.38667 12.8218 3.49274 12.8218C2.16559 12.8218 1.24742 12.4425 0.548926 11.8338C0.499023 11.7939 0.488986 11.704 0.578893 11.5544L1.25745 10.3968C1.29746 10.317 1.40716 10.297 1.477 10.3668C2.02578 10.8558 2.64454 11.1152 3.42291 11.1152C4.95971 11.1152 5.43865 10.3269 5.43865 9.32902V8.88995C4.98952 9.53854 4.22119 9.94766 3.23333 9.94766C1.39712 9.94766 0 8.69034 0 6.38522C0 4.06992 1.46696 2.78264 3.18329 2.78264C4.24115 2.78264 5.03957 3.2917 5.42876 3.92035V3.11201C5.42876 3.03216 5.49859 2.95241 5.58836 2.95241L7.07526 2.94252ZM3.67243 8.27119C4.70017 8.27119 5.45857 7.55277 5.45857 6.41506C5.45857 5.26756 4.70017 4.55903 3.67243 4.55903C2.63451 4.55903 1.86618 5.29755 1.86618 6.41506C1.86618 7.53282 2.6444 8.27119 3.67243 8.27119Z" fill="white"/>
									</svg>
								</p>
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
	<!-- <div class="">
		<?php //get_template_part( 'template-parts/ai-vetted-profile' );?>
	</div> -->
	
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
						<h2 class="text-[2.25rem] font-[700] text-center text-[#ffffff] mb-[0.5rem]"><?php echo get_sub_field('main_heading'); ?></h2>
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
							<div class=" bg-white w-[100%] z-10 absolute left-0 top-[10%] max-w-[15rem] inline-block rounded-[0.5rem] px-[0.8rem] py-[0.63rem]">
							<?php if(get_sub_field('left_box_title_1')): ?>	
								<p class="text-[1rem] font-[600] text-left text-[#FF4D04] mb-[0.5rem]"><img class="w-[1.5rem] inline-block h-[1.5rem]" src="<?php echo get_template_directory_uri();?>/images/messages.svg" alt=""> <?php echo get_sub_field('left_box_title_1'); ?></p>
							<?php endif; ?>
							
							<?php if(get_sub_field('left_box_paragraph_1')): ?>
								<p class="text-[0.85rem] font-[400] text-left text-[#1E1E1E]"><?php echo get_sub_field('left_box_paragraph_1'); ?></p>
							<?php endif; ?>
							</div>
							<div class=" bg-white w-[100%] z-10 absolute right-0 top-[15%] max-w-[15rem] inline-block rounded-[0.5rem] px-[0.8rem] py-[0.63rem]">
							<?php if(get_sub_field('left_box_title_2')): ?>
								<p class="text-[1rem] font-[600] text-left text-[#FF4D04] mb-[0.5rem]"><img class="w-[1.5rem] inline-block h-[1.5rem]" src="<?php echo get_template_directory_uri();?>/images/phone-svg.svg" alt=""> <?php echo get_sub_field('left_box_title_2'); ?></p>
							<?php endif; ?>
							
							<?php if(get_sub_field('left_box_paragraph_2')): ?>
								<p class="text-[0.85rem] font-[400] text-left text-[#1E1E1E]"><?php echo get_sub_field('left_box_paragraph_2'); ?></p>
							<?php endif; ?>
							</div>
							<div class=" bg-white w-[100%] z-10 absolute right-0 bottom-[10%] max-w-[15rem] inline-block rounded-[0.5rem] px-[0.8rem] py-[0.63rem]">
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
						<h2 class="text-[2.25rem] font-[700] text-center text-[#1E1E1E] mb-[1rem]"><?php echo get_sub_field('main_title'); ?> <span class="title-orange"><?php echo get_sub_field('orange_title'); ?></span></h2>
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
								<?php echo get_sub_field('button_name'); ?>
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