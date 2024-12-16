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
  <div class=" w-full relative z-10 pt-[2.5rem]">

	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'home_header') : ?>
	<div class="container mx-auto">
		<div class="w-full">
			<div class="heding-box">
				<div class="block mb-5">
				<?php if(get_sub_field('title')): ?>
					<h1 class="words-wrapper text-[2.25rem] font-[700] text-[rgba(255,255,255,0.70)]">
						<?php echo get_sub_field('title'); ?>
						<span class="words">
							<span class="current" data-color="#f34d05">Software</span>
							<span class="next" data-color="#f34d05">Fullstack</span>
							<span data-color="#f34d05">Frontend</span>
							<span data-color="#f34d05">Backend</span>
							<span data-color="#f34d05">Android</span>
						</span>
					</h1>
				<?php endif; ?>
				<?php if(get_sub_field('short_description')): ?>
					<h1 class=" text-[2.25rem] font-[700] text-[rgba(255,255,255,0.70)] text-center mb-[0.5rem]"><?php echo get_sub_field('short_description'); ?></h1>
				<?php endif; ?>	
				
				<?php if(get_sub_field('small_paragraph')): ?>
					<p class=" text-[1.25rem] text-[rgba(255,255,255,0.80)] text-center"><?php echo get_sub_field('small_paragraph'); ?></p>
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
	<div class="w-full bg-[rgba(30,30,30,0.40)] mt-7">
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

	<!-- home banner close -->
	<!-- Future Remote -->
	<?php if (get_row_layout() == 'future_hiring') : ?>
	<div class="w-full relative py-10" >
		<div class="container relative bg-[#1E1E1E] px-[0px] sm:px-[1rem] md:px-[5rem] py-[2.125rem]  rounded-[1.25rem] min-h-[290px]">
			<img class="bg-img absolute h-[100%] w-auto right-[-0] z-0 top-[0px]" src="<?php echo get_template_directory_uri();?>/images/future-bg.svg" alt="">
			<div class="relative z-10 block">
				<?php if(get_sub_field('main_heading')): ?>
					<h2 class="text-[2.25rem] font-[600] text-center text-[#E8E8E8] mb-[2.5rem]"><?php echo get_sub_field('main_heading'); ?></h2>
				<?php endif; ?>
				<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 gap-4">
				<?php if(have_rows('block_part')): ?>
				<?php while(have_rows('block_part')): the_row(); ?>
					<div class="col-span-12 sm:col-span-3 lg:col-span-3 text-center border-box-bar">
						<p class="text-[#E8E8E8] text-[2.5rem] font-[500] "><?php echo get_sub_field('data_target'); ?></p>
						<p class="text-[#E8E8E8] text-[1rem] font-[400] "><?php echo get_sub_field('second_heading'); ?></p>
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
		<div class="w-full relative">
			<div class="container">
				<div class="block">
					<h2 class="text-[2.25rem] font-[600] text-center text-[#E8E8E8] mb-[0.5rem]">Case <span class="text-dark-orange">Studies</span></h2>
				</div>
				<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12">
					<div class="col-span-4 lg:col-span-4 content-center case-tab active" data-id="tab-1">
						<img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/keyloop-logo.svg" alt="">
					</div>
					<div class="col-span-4 lg:col-span-4 content-center case-tab" data-id="tab-2">
						<img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/stickey-logo.svg" alt="">
					</div>
					<div class="col-span-4 lg:col-span-4 content-center case-tab" data-id="tab-3">
						<img class="h-[2rem] w-auto inline-block" src="<?php echo get_template_directory_uri();?>/images/tiller-logo.svg" alt="">
					</div>
				</div>
				<div class="tab-container">
					<div class="tab-content active" id="tab-1" style="background-image: url('<?php echo get_template_directory_uri();?>/images/tab-bg-1.jpg');">
						<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 min-h-[32rem] p-3 gap-4">
							<div class="col-span-12 sm:col-span-8 md:col-span-8 lg:col-span-8 content-end">
								<div class="block max-w-[47rem]">
									<p class=" text-[2rem] text-[#F34D05] font-[600] mb-[1rem]">Seamless and Easy Integration</p>
									<p class=" text-[1rem] text-[#E8E8E8] mb-[2rem]"><img class="h-[2rem] w-[2rem] inline-block align-text-bottom" src="<?php echo get_template_directory_uri();?>/images/quat-symble.svg" alt=""> The developers at Smart Working have provided work the same hours as our team, attend all meetings, and are always available for communication. Their seamless integration into our workflows has made them feel like a natural extension of our in-house team, without any of the challenges we expected from remote hiring.</p>
									<p class=" text-[1rem] text-[#fff] font-[600]">Cameron Wade</p>
									<p class=" text-[0.875rem] text-[#A5A5A5] font-[500]">Cameron Wade</p>
								</div>
							</div>
							<div class="col-span-12 sm:col-span-4 md:col-span-4 lg:col-span-4 content-end">
								<div class="max-w-[100%] sm:max-w-[16.5rem] px-[1.8rem] py-2 border-l-4 border-[#F34D05] ml-auto mb-[2.5rem]">
									<p class="text-[1rem] text-[#E8E8E8]">Build the team to</p>
									<div class="flex">
										<div><p class="text-[#FDDBCD] text-[3.25rem] font-[600] leading-[3rem]">6</p></div>
										<div class="pl-2"><p class="text-[1rem] text-[#E8E8E8]">developers<br>within 12 months</p></div>
									</div>
								</div>
								<div class="max-w-[100%] sm:max-w-[16.5rem] px-[1.8rem] py-2 border-l-4 border-[#F34D05] ml-auto mb-[2.5rem]">
									<p class="text-[#FDDBCD] text-[3.25rem] font-[600] leading-[3rem]">100%</p>
									<p class="text-[1rem] text-[#E8E8E8]">of the developers still with the client after 1 year</p>
								</div>
								<div class="max-w-[100%] sm:max-w-[16.5rem] px-[1.8rem] py-2 border-l-4 border-[#F34D05] ml-auto">
									<p class="text-[1rem] text-[#E8E8E8]">The first developer was onboarded in just</p>
									<div class="flex">
										<div><p class="text-[#FDDBCD] text-[3.25rem] font-[600] leading-[3rem]">6</p></div>
										<div class="pl-2"><p class="text-[1rem] text-[#E8E8E8]">days</p></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" id="tab-2" style="background-image: url('<?php echo get_template_directory_uri();?>/images/tab-bg-2.jpg');">
						<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 min-h-[32rem] p-3 gap-4">
							<div class="col-span-12 sm:col-span-8 md:col-span-8 lg:col-span-8 content-end">
								<div class="block max-w-[47rem]">
									<p class=" text-[2rem] text-[#F34D05] font-[600] mb-[1rem]">Reliable and trustworthy way to scale your team</p>
									<p class=" text-[1rem] text-[#E8E8E8] mb-[2rem]">
										<img class="h-[2rem] w-[2rem] inline-block align-text-bottom" src="<?php echo get_template_directory_uri();?>/images/quat-symble.svg" alt=""> 
										Hiring remote developers felt like a risk at first, but Smart Working’s process removed all our concerns. The support from their UK team made us feel secure every step of the way. We’ve been using Smart Working for over two years now, and their process has always been safe and dependable.</p>
									<p class=" text-[1rem] text-[#fff] font-[600]">Mark Cadby</p>
									<p class=" text-[0.875rem] text-[#A5A5A5] font-[500]">Chief Technical Officer</p>
								</div>
							</div>
							<div class="col-span-12 sm:col-span-4 md:col-span-4 lg:col-span-4 content-end">
								<div class="max-w-[100%] sm:max-w-[16.5rem] px-[1.8rem] py-2 border-l-4 border-[#F34D05] ml-auto mb-[2.5rem]">
									<p class="text-[1rem] text-[#E8E8E8]">Delivered a vetted <br>shortlist in under</p>
									<div class="flex">
										<div><p class="text-[#FDDBCD] text-[3.25rem] font-[600] leading-[3rem]">5</p></div>
										<div class="pl-2"><p class="text-[1rem] text-[#E8E8E8]">days</p></div>
									</div>
								</div>
								<div class="max-w-[100%] sm:max-w-[16.5rem] px-[1.8rem] py-2 border-l-4 border-[#F34D05] ml-auto mb-[2.5rem]">
									<p class="text-[#FDDBCD] text-[3.25rem] font-[600] leading-[3rem]">100%</p>
									<p class="text-[1rem] text-[#E8E8E8]">of the developers undergo and verification checks prior to employment</p>
								</div>
								<div class="max-w-[100%] sm:max-w-[16.5rem] px-[1.8rem] py-2 border-l-4 border-[#F34D05] ml-auto">
									<p class="text-[1rem] text-[#E8E8E8]">The entire dev team <br>came to visit the</p>
									<div class="flex">
										<div><p class="text-[#FDDBCD] text-[3.25rem] font-[600] leading-[3rem]">UK</p></div>
										<div class="pl-2">
											<!-- <p class="text-[1rem] text-[#E8E8E8]">days</p> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" id="tab-3" style="background-image: url('<?php echo get_template_directory_uri();?>/images/tab-bg-3.jpg');">
						<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 min-h-[32rem] p-3 gap-4">
							<div class="col-span-12 sm:col-span-8 md:col-span-8 lg:col-span-8 content-end">
								<div class="block max-w-[47rem]">
									<p class=" text-[2rem] text-[#F34D05] font-[600] mb-[1rem]">Constant and ongoing support</p>
									<p class=" text-[1rem] text-[#E8E8E8] mb-[2rem]">
										<img class="h-[2rem] w-[2rem] inline-block align-text-bottom" src="<?php echo get_template_directory_uri();?>/images/quat-symble.svg" alt=""> 
										Smart Working doesn’t just stop at hiring—they’ve provided continuous support and training to ensure long-term success. Their team’s feedback calls, management and training of our staff has been incredibly useful and made the relationship a huge success.
									</p>
									<p class=" text-[1rem] text-[#fff] font-[600]">Edward Genochio</p>
									<p class=" text-[0.875rem] text-[#A5A5A5] font-[500]">Chief Technical Officer</p>
								</div>
							</div>
							<div class="col-span-12 sm:col-span-4 md:col-span-4 lg:col-span-4 content-end">
								<div class="max-w-[100%] sm:max-w-[16.5rem] px-[1.8rem] py-2 border-l-4 border-[#F34D05] ml-auto mb-[2.5rem]">
									<div class="flex">
										<div><p class="text-[#FDDBCD] text-[3.25rem] font-[600] leading-[3rem]">14</p></div>
										<div class="pl-2"><p class="text-[1rem] text-[#E8E8E8]">days<br>scheduled</p></div>
									</div>
									<p class="text-[1rem] text-[#E8E8E8]">feedback call with UK <br>based Account Manager</p>
								</div>
								<div class="max-w-[100%] sm:max-w-[16.5rem] px-[1.8rem] py-2 border-l-4 border-[#F34D05] ml-auto mb-[2.5rem]">
									<p class="text-[#FDDBCD] text-[3.25rem] font-[600] leading-[3rem]">98%</p>
									<p class="text-[1rem] text-[#E8E8E8]">developer performance <br>score from client feedback</p>
								</div>
								<div class="max-w-[100%] sm:max-w-[16.5rem] px-[1.8rem] py-2 border-l-4 border-[#F34D05] ml-auto">
									<p class="text-[1rem] text-[#E8E8E8]">Expanded developer <br>team to 5 within</p>
									<div class="flex">
										<div><p class="text-[#FDDBCD] text-[3.25rem] font-[600] leading-[3rem]">10</p></div>
										<div class="pl-2">
											<p class="text-[1rem] text-[#E8E8E8]">months</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	<?php endif; ?>
	
	<!-- How It Works Section -->
	
	 
	 <!-- <div class=" w-full relative">
		<div class="w-full relative z-10">
			<?php //get_template_part( 'template-parts/client-how-it-works' );?>
		</div>
	 </div> -->
		
	<?php endwhile; ?>
	<?php endif; ?>

	<div class=" w-full relative bg-white p-[1rem] lg:p-[2.5rem]">
		<div class="w-full relative z-10">
			<div class="container">
				<div class="block mb-[2.5rem]">
					<h2 class="text-[2.25rem] font-[600] text-center text-[#1E1E1E] mb-[0.5rem]">How It <span class="text-dark-orange">Works</span></h2>
				</div>
				<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 lg:gap-16">
					<div class="col-span-12 sm:col-span-6 lg:col-span-6">
						<div class="progressBarContainer">
							<div class="item how-its-work-items">
								<div class="how-its-work-title"><span>Step 1.</span> Matching process</div>
								<div class="how-its-work-dicription mt-4">
									<ul class="list-disc">
										<li>We will take your technical specification and find the perfect developer. All of the candidates will have a minimum of five years experience and will have worked with UK or US companies.</li>
										<li>Within 7 working days, you’ll receive a shortlist of the top three candidates who have undergone:
											<ul class="list-disc">
												<li>Three interviews (communication, logic/cultural fit and technical)</li>
												<li>Technical testing</li>
												<li>Background Screening</li>
											</ul>
										</li>
									</ul>
								</div>
								<span data-slick-index="0" class="sliderProgressBar"></span>
							</div>
							<div class="item how-its-work-items">
								<div class="how-its-work-title"><span>Step 2.</span> Meet the Candidates</div>
								<div class="how-its-work-dicription mt-4">
									<ul class="list-disc list-disc-[#F34D05]">
										<li>Once you’ve chosen the candidates you’re interested in, we’ll take care of arranging interviews for you.</li>
										<li>This is your chance to get to know the candidates and make sure they’re the perfect fit for your team and your goals.</li>
										<li>Only when your chosen developer officially joins your team will you incur cost.</li>
									</ul>
								</div>
								<span data-slick-index="1" class="sliderProgressBar"></span>
							</div>
							<div class="item how-its-work-items">
								<div class="how-its-work-title"><span>Step 3.</span> Onboarding</div>
								<div class="how-its-work-dicription mt-4">
									<ul class="list-disc">
										<li>Once you’ve selected your developer, we handle all the details to ensure as smooth and easy start. </li>
										<li><strong>Productivity Software:</strong> We provide tools that increase productivity and ensure daily tasks are completed.</li>
										<li><strong>HR & Payroll Management:</strong> All admin, including payroll and compliance, is fully managed by us. You’ll receive a single, easy-to-understand monthly invoice, leaving you to focus on what matters.</li>
										<li><strong>Transparent Pricing:</strong> Our all-inclusive rates (starting at ~£20/hour) cover everything from the developer’s salary to IT and HR support, offering a 40% annual cost saving compared to traditional hiring</li>
									</ul>
								</div>
								<span data-slick-index="2" class="sliderProgressBar"></span>
							</div>
							<div class="item how-its-work-items">
								<div class="how-its-work-title"><span>Step 4.</span> Long term success</div>
								<div class="how-its-work-dicription mt-4">
									<p class="mb-3">At Smart Working, our commitment goes well beyond sourcing, vetting and onboarding</p>
									<ul class="list-disc">
										<li><strong>Ongoing Support:</strong> Our UK-based Account Managers and Customer Success Team are always available to ensure you receive continuous value.</li>
										<li><strong>Feedback and Management:</strong> A scheduled weekly feedback call to gather feedback and ensure support. Our Customer success team will be in daily contact to manage and support your developers.</li>
										<li><strong>Exceptional Retention Rates:</strong> Our 96% retention rate is a testament to the 
										quality of our developers and the satisfaction of our clients.</li>
										<li><strong>Flexible Terms:</strong> We offer transparent, no-minimum contract lengths with a straightforward notice period:
											<ul class="list-disc">
												<li><strong>Month 1:</strong> 7 days’ notice</li>
												<li><strong>Month 2:</strong> 14 days’ notice</li>
												<li><strong>Month 3+:</strong> 30 days’ notice, transitioning to 60 days after month 3</li>
											</ul>
										</li>
										
									</ul>
								</div>
								<span data-slick-index="3" class="sliderProgressBar"></span>
							</div>
						</div>
						
					</div>
					<div class="col-span-12 sm:col-span-6 lg:col-span-6">
						<div class="slider-hiw single-item">
							<div><img class="w-[100%] max-w-[600px] h-auto" src="<?php echo get_template_directory_uri();?>/images/hiw-slide-1.jpg" alt=""></div>
							<div><img class="w-[100%] max-w-[600px] h-auto" src="<?php echo get_template_directory_uri();?>/images/hiw-slide-2.jpg" alt=""></div>
							<div><img class="w-[100%] max-w-[600px] h-auto" src="<?php echo get_template_directory_uri();?>/images/hiw-slide-3.jpg" alt=""></div>
							<div><img class="w-[100%] max-w-[600px] h-auto" src="<?php echo get_template_directory_uri();?>/images/hiw-slide-4.jpg" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class=" w-full relative bg-white p-[1rem] lg:p-[2.5rem]">
		<div class="container">
				<div class="block mb-[2.5rem]">
					<h2 class="text-[2.25rem] font-[600] text-center text-[#1E1E1E] mb-[0.5rem]">Take a look at our <span class="text-dark-orange">Vetted Tech Experts</span></h2>
					<p class="text-[1.25rem] font-[400] text-center text-[#4B4B4B] mb-[0.5rem]">Flexible terms. Fully vetted. Remote hiring made safe.</p>
				</div>
				<div class="block">
					<ul class="filter-tab">
						<li>
							<svg class="filter-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
								<path d="M20.5 14C21.6046 14 22.5 13.1046 22.5 12C22.5 10.8954 21.6046 10 20.5 10C19.3954 10 18.5 10.8954 18.5 12C18.5 13.1046 19.3954 14 20.5 14Z" fill="#4B4B4B" stroke="#4B4B4B" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M20.5 6C21.6046 6 22.5 5.10457 22.5 4C22.5 2.89543 21.6046 2 20.5 2C19.3954 2 18.5 2.89543 18.5 4C18.5 5.10457 19.3954 6 20.5 6Z" stroke="#4B4B4B" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M20.5 22C21.6046 22 22.5 21.1046 22.5 20C22.5 18.8954 21.6046 18 20.5 18C19.3954 18 18.5 18.8954 18.5 20C18.5 21.1046 19.3954 22 20.5 22Z" stroke="#4B4B4B" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M4.5 14C5.60457 14 6.5 13.1046 6.5 12C6.5 10.8954 5.60457 10 4.5 10C3.39543 10 2.5 10.8954 2.5 12C2.5 13.1046 3.39543 14 4.5 14Z" stroke="#4B4B4B" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M6.5 12H18.5" stroke="#4B4B4B" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M18.5 4H14.5C12.5 4 11.5 5 11.5 7V17C11.5 19 12.5 20 14.5 20H18.5" stroke="#4B4B4B" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							All
						</li>
						<li class="active">
							<svg class="filter-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
								<path d="M12.5 12C12.5001 12.1125 12.4748 12.2236 12.4261 12.325C12.3775 12.4264 12.3066 12.5156 12.2188 12.5859L8.46875 15.5859C8.3918 15.6475 8.30349 15.6933 8.20884 15.7207C8.11419 15.7481 8.01507 15.7567 7.91714 15.7458C7.8192 15.7349 7.72436 15.7048 7.63805 15.6573C7.55173 15.6098 7.47562 15.5457 7.41406 15.4688C7.35251 15.3918 7.30671 15.3035 7.27928 15.2088C7.25186 15.1142 7.24334 15.0151 7.25422 14.9171C7.26511 14.8192 7.29517 14.7244 7.3427 14.638C7.39023 14.5517 7.4543 14.4756 7.53125 14.4141L10.5491 12L7.53125 9.58594C7.4543 9.52438 7.39023 9.44827 7.3427 9.36195C7.29517 9.27564 7.26511 9.1808 7.25422 9.08286C7.24334 8.98493 7.25186 8.88581 7.27928 8.79116C7.30671 8.69651 7.35251 8.6082 7.41406 8.53125C7.47562 8.4543 7.55173 8.39023 7.63805 8.3427C7.72436 8.29517 7.8192 8.26511 7.91714 8.25422C8.01507 8.24334 8.11419 8.25186 8.20884 8.27928C8.30349 8.30671 8.3918 8.35251 8.46875 8.41406L12.2188 11.4141C12.3066 11.4844 12.3775 11.5736 12.4261 11.675C12.4748 11.7764 12.5001 11.8875 12.5 12ZM17 14.25H13.25C13.0511 14.25 12.8603 14.329 12.7197 14.4697C12.579 14.6103 12.5 14.8011 12.5 15C12.5 15.1989 12.579 15.3897 12.7197 15.5303C12.8603 15.671 13.0511 15.75 13.25 15.75H17C17.1989 15.75 17.3897 15.671 17.5303 15.5303C17.671 15.3897 17.75 15.1989 17.75 15C17.75 14.8011 17.671 14.6103 17.5303 14.4697C17.3897 14.329 17.1989 14.25 17 14.25ZM22.25 5.25V18.75C22.25 19.1478 22.092 19.5294 21.8107 19.8107C21.5294 20.092 21.1478 20.25 20.75 20.25H4.25C3.85218 20.25 3.47064 20.092 3.18934 19.8107C2.90804 19.5294 2.75 19.1478 2.75 18.75V5.25C2.75 4.85218 2.90804 4.47064 3.18934 4.18934C3.47064 3.90804 3.85218 3.75 4.25 3.75H20.75C21.1478 3.75 21.5294 3.90804 21.8107 4.18934C22.092 4.47064 22.25 4.85218 22.25 5.25ZM20.75 18.75V5.25H4.25V18.75H20.75Z" fill="#4B4B4B"/>
							</svg>
							Backend
						</li>
						<li>
							<svg class="filter-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
								<path d="M2.75 11.25V15.75C2.75 15.9489 2.67098 16.1397 2.53033 16.2803C2.38968 16.421 2.19891 16.5 2 16.5C1.80109 16.5 1.61032 16.421 1.46967 16.2803C1.32902 16.1397 1.25 15.9489 1.25 15.75V11.25C1.25 11.0511 1.32902 10.8603 1.46967 10.7197C1.61032 10.579 1.80109 10.5 2 10.5C2.19891 10.5 2.38968 10.579 2.53033 10.7197C2.67098 10.8603 2.75 11.0511 2.75 11.25ZM5 8.25C4.80109 8.25 4.61032 8.32902 4.46967 8.46967C4.32902 8.61032 4.25 8.80109 4.25 9V18C4.25 18.1989 4.32902 18.3897 4.46967 18.5303C4.61032 18.671 4.80109 18.75 5 18.75C5.19891 18.75 5.38968 18.671 5.53033 18.5303C5.67098 18.3897 5.75 18.1989 5.75 18V9C5.75 8.80109 5.67098 8.61032 5.53033 8.46967C5.38968 8.32902 5.19891 8.25 5 8.25ZM8 7.5C7.80109 7.5 7.61032 7.57902 7.46967 7.71967C7.32902 7.86032 7.25 8.05109 7.25 8.25V18C7.25 18.1989 7.32902 18.3897 7.46967 18.5303C7.61032 18.671 7.80109 18.75 8 18.75C8.19891 18.75 8.38968 18.671 8.53033 18.5303C8.67098 18.3897 8.75 18.1989 8.75 18V8.25C8.75 8.05109 8.67098 7.86032 8.53033 7.71967C8.38968 7.57902 8.19891 7.5 8 7.5ZM11 4.5C10.8011 4.5 10.6103 4.57902 10.4697 4.71967C10.329 4.86032 10.25 5.05109 10.25 5.25V18C10.25 18.1989 10.329 18.3897 10.4697 18.5303C10.6103 18.671 10.8011 18.75 11 18.75C11.1989 18.75 11.3897 18.671 11.5303 18.5303C11.671 18.3897 11.75 18.1989 11.75 18V5.25C11.75 5.05109 11.671 4.86032 11.5303 4.71967C11.3897 4.57902 11.1989 4.5 11 4.5ZM21.3913 9.96937C21.0895 8.22803 20.1825 6.64918 18.8302 5.51132C17.4779 4.37345 15.7673 3.74967 14 3.75C13.8011 3.75 13.6103 3.82902 13.4697 3.96967C13.329 4.11032 13.25 4.30109 13.25 4.5C13.25 4.69891 13.329 4.88968 13.4697 5.03033C13.6103 5.17098 13.8011 5.25 14 5.25C15.4879 5.24475 16.9242 5.79457 18.0282 6.79198C19.1323 7.78939 19.8246 9.1627 19.97 10.6434C19.9872 10.803 20.0551 10.9529 20.1638 11.071C20.2724 11.1892 20.4161 11.2693 20.5737 11.2997C21.3125 11.4356 21.9733 11.8437 22.4257 12.4433C22.8781 13.0429 23.0891 13.7904 23.017 14.5381C22.9449 15.2858 22.595 15.9792 22.0364 16.4813C21.4777 16.9834 20.7511 17.2577 20 17.25H14C13.8011 17.25 13.6103 17.329 13.4697 17.4697C13.329 17.6103 13.25 17.8011 13.25 18C13.25 18.1989 13.329 18.3897 13.4697 18.5303C13.6103 18.671 13.8011 18.75 14 18.75H20C21.072 18.7508 22.1091 18.3689 22.9245 17.673C23.7399 16.9771 24.2802 16.013 24.4479 14.9542C24.6157 13.8954 24.3999 12.8115 23.8396 11.8977C23.2792 10.9838 22.411 10.3 21.3913 9.96937Z" fill="#4B4B4B"/>
							</svg>
							Cloud
						</li>
						<li>
							<svg class="filter-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
								<path d="M6.85997 8.68221L2.87841 12L6.85997 15.3178C6.9174 15.3649 6.96494 15.4229 6.99985 15.4884C7.03477 15.5539 7.05636 15.6257 7.0634 15.6996C7.07043 15.7735 7.06276 15.8481 7.04083 15.919C7.0189 15.99 6.98315 16.0559 6.93563 16.1129C6.88811 16.17 6.82976 16.217 6.76396 16.2514C6.69816 16.2858 6.6262 16.3068 6.55223 16.3133C6.47827 16.3197 6.40376 16.3115 6.333 16.289C6.26224 16.2665 6.19664 16.2302 6.13997 16.1822L1.63997 12.4322C1.5766 12.3794 1.52562 12.3133 1.49063 12.2387C1.45564 12.164 1.4375 12.0825 1.4375 12C1.4375 11.9175 1.45564 11.8361 1.49063 11.7614C1.52562 11.6867 1.5766 11.6206 1.63997 11.5678L6.13997 7.81783C6.25476 7.72377 6.40206 7.67887 6.5498 7.69293C6.69754 7.70699 6.83374 7.77886 6.92872 7.89289C7.0237 8.00692 7.06977 8.15386 7.0569 8.30171C7.04402 8.44955 6.97324 8.58632 6.85997 8.68221ZM23.36 11.5678L18.86 7.81783C18.8033 7.76986 18.7377 7.73358 18.6669 7.71108C18.5962 7.68859 18.5217 7.68032 18.4477 7.68676C18.3737 7.69321 18.3018 7.71423 18.236 7.74862C18.1702 7.78301 18.1118 7.83008 18.0643 7.88713C18.0168 7.94418 17.981 8.01007 17.9591 8.08101C17.9372 8.15194 17.9295 8.22651 17.9365 8.30043C17.9436 8.37434 17.9652 8.44613 18.0001 8.51166C18.035 8.57718 18.0825 8.63515 18.14 8.68221L22.1215 12L18.14 15.3178C18.0825 15.3649 18.035 15.4229 18.0001 15.4884C17.9652 15.5539 17.9436 15.6257 17.9365 15.6996C17.9295 15.7735 17.9372 15.8481 17.9591 15.919C17.981 15.99 18.0168 16.0559 18.0643 16.1129C18.1118 16.17 18.1702 16.217 18.236 16.2514C18.3018 16.2858 18.3737 16.3068 18.4477 16.3133C18.5217 16.3197 18.5962 16.3115 18.6669 16.289C18.7377 16.2665 18.8033 16.2302 18.86 16.1822L23.36 12.4322C23.4233 12.3794 23.4743 12.3133 23.5093 12.2387C23.5443 12.164 23.5624 12.0825 23.5624 12C23.5624 11.9175 23.5443 11.8361 23.5093 11.7614C23.4743 11.6867 23.4233 11.6206 23.36 11.5678ZM15.6922 3.22408C15.6226 3.19888 15.5488 3.18764 15.4749 3.19101C15.401 3.19439 15.3284 3.21231 15.2615 3.24374C15.1945 3.27518 15.1344 3.31952 15.0846 3.37422C15.0348 3.42892 14.9963 3.49291 14.9712 3.56252L8.97122 20.0625C8.92191 20.2028 8.93012 20.3568 8.99406 20.4911C9.05801 20.6253 9.17248 20.7287 9.31247 20.7788C9.37267 20.8003 9.43603 20.8117 9.49997 20.8125C9.61546 20.8125 9.72816 20.777 9.82275 20.7108C9.91735 20.6445 9.98926 20.5507 10.0287 20.4422L16.0287 3.94221C16.054 3.87277 16.0653 3.79904 16.062 3.72523C16.0588 3.65142 16.041 3.57897 16.0098 3.51202C15.9785 3.44507 15.9344 3.38493 15.8799 3.33505C15.8254 3.28516 15.7616 3.2465 15.6922 3.22127V3.22408Z" fill="#4B4B4B"/>
							</svg>
							Front End
						</li>
						<li>
							<svg class="filter-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
								<path d="M5.96899 9.53055L2.96899 6.53055C2.89926 6.4609 2.84394 6.37818 2.80619 6.28713C2.76845 6.19609 2.74902 6.09849 2.74902 5.99993C2.74902 5.90137 2.76845 5.80377 2.80619 5.71272C2.84394 5.62168 2.89926 5.53896 2.96899 5.4693L5.96899 2.4693C6.10972 2.32857 6.30059 2.24951 6.49961 2.24951C6.69864 2.24951 6.88951 2.32857 7.03024 2.4693C7.17097 2.61003 7.25003 2.80091 7.25003 2.99993C7.25003 3.19895 7.17097 3.38982 7.03024 3.53055L4.55993 5.99993L7.03024 8.4693C7.17097 8.61003 7.25003 8.80091 7.25003 8.99993C7.25003 9.19895 7.17097 9.38982 7.03024 9.53055C6.88951 9.67128 6.69864 9.75035 6.49961 9.75035C6.30059 9.75035 6.10972 9.67128 5.96899 9.53055ZM9.71899 9.53055C9.78864 9.60029 9.87136 9.65561 9.96241 9.69335C10.0535 9.73109 10.1511 9.75052 10.2496 9.75052C10.3482 9.75052 10.4458 9.73109 10.5368 9.69335C10.6279 9.65561 10.7106 9.60029 10.7802 9.53055L13.7802 6.53055C13.85 6.4609 13.9053 6.37818 13.943 6.28713C13.9808 6.19609 14.0002 6.09849 14.0002 5.99993C14.0002 5.90137 13.9808 5.80377 13.943 5.71272C13.9053 5.62168 13.85 5.53896 13.7802 5.4693L10.7802 2.4693C10.6395 2.32857 10.4486 2.24951 10.2496 2.24951C10.0506 2.24951 9.85972 2.32857 9.71899 2.4693C9.57826 2.61003 9.4992 2.80091 9.4992 2.99993C9.4992 3.19895 9.57826 3.38982 9.71899 3.53055L12.1893 5.99993L9.71899 8.4693C9.64926 8.53896 9.59394 8.62168 9.55619 8.71272C9.51845 8.80377 9.49902 8.90137 9.49902 8.99993C9.49902 9.09849 9.51845 9.19609 9.55619 9.28713C9.59394 9.37818 9.64926 9.4609 9.71899 9.53055ZM19.2496 3.74993H16.9996C16.8007 3.74993 16.6099 3.82895 16.4693 3.9696C16.3286 4.11025 16.2496 4.30102 16.2496 4.49993C16.2496 4.69884 16.3286 4.88961 16.4693 5.03026C16.6099 5.17091 16.8007 5.24993 16.9996 5.24993H19.2496V18.7499H5.74961V12.7499C5.74961 12.551 5.6706 12.3603 5.52994 12.2196C5.38929 12.0789 5.19853 11.9999 4.99961 11.9999C4.8007 11.9999 4.60994 12.0789 4.46928 12.2196C4.32863 12.3603 4.24961 12.551 4.24961 12.7499V18.7499C4.24961 19.1478 4.40765 19.5293 4.68895 19.8106C4.97026 20.0919 5.35179 20.2499 5.74961 20.2499H19.2496C19.6474 20.2499 20.029 20.0919 20.3103 19.8106C20.5916 19.5293 20.7496 19.1478 20.7496 18.7499V5.24993C20.7496 4.8521 20.5916 4.47057 20.3103 4.18927C20.029 3.90796 19.6474 3.74993 19.2496 3.74993Z" fill="#4B4B4B"/>
							</svg>
							Full Stack
						</li>
						<li>
							<svg class="filter-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M4.75 4C4.75 2.48122 5.98122 1.25 7.5 1.25H17.5C19.0188 1.25 20.25 2.48122 20.25 4V20C20.25 21.5188 19.0188 22.75 17.5 22.75H7.5C5.98122 22.75 4.75 21.5188 4.75 20V4ZM7.5 2.75C6.80964 2.75 6.25 3.30964 6.25 4V20C6.25 20.6904 6.80964 21.25 7.5 21.25H17.5C18.1904 21.25 18.75 20.6904 18.75 20V4C18.75 3.30964 18.1904 2.75 17.5 2.75H7.5Z" fill="#4B4B4B"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10.75 19C10.75 18.5858 11.0858 18.25 11.5 18.25H13.5C13.9142 18.25 14.25 18.5858 14.25 19C14.25 19.4142 13.9142 19.75 13.5 19.75H11.5C11.0858 19.75 10.75 19.4142 10.75 19Z" fill="#4B4B4B"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16.2115 2.23718L15.4394 4.55338C15.4394 4.55339 15.4394 4.55337 15.4394 4.55338C15.2012 5.26798 14.5325 5.75 13.7792 5.75H11.2208C10.4675 5.75 9.79877 5.26801 9.56057 4.5534C9.56057 4.5534 9.56057 4.5534 9.56057 4.5534L8.78849 2.23717L10.2115 1.76283L10.9836 4.07906C11.0176 4.18113 11.1131 4.25 11.2208 4.25H13.7792C13.8869 4.25 13.9824 4.18114 14.0164 4.07908L14.7885 1.76282L16.2115 2.23718Z" fill="#4B4B4B"/>
							</svg>
							Mobile
						</li>
						<li>
							<svg class="filter-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
								<path d="M20 3.75H5C4.40326 3.75 3.83097 3.98705 3.40901 4.40901C2.98705 4.83097 2.75 5.40326 2.75 6V16.5C2.75 17.0967 2.98705 17.669 3.40901 18.091C3.83097 18.5129 4.40326 18.75 5 18.75H11.75V20.25H9.5C9.30109 20.25 9.11032 20.329 8.96967 20.4697C8.82902 20.6103 8.75 20.8011 8.75 21C8.75 21.1989 8.82902 21.3897 8.96967 21.5303C9.11032 21.671 9.30109 21.75 9.5 21.75H15.5C15.6989 21.75 15.8897 21.671 16.0303 21.5303C16.171 21.3897 16.25 21.1989 16.25 21C16.25 20.8011 16.171 20.6103 16.0303 20.4697C15.8897 20.329 15.6989 20.25 15.5 20.25H13.25V18.75H20C20.5967 18.75 21.169 18.5129 21.591 18.091C22.0129 17.669 22.25 17.0967 22.25 16.5V6C22.25 5.40326 22.0129 4.83097 21.591 4.40901C21.169 3.98705 20.5967 3.75 20 3.75ZM5 5.25H20C20.1989 5.25 20.3897 5.32902 20.5303 5.46967C20.671 5.61032 20.75 5.80109 20.75 6V13.5H4.25V6C4.25 5.80109 4.32902 5.61032 4.46967 5.46967C4.61032 5.32902 4.80109 5.25 5 5.25ZM20 17.25H5C4.80109 17.25 4.61032 17.171 4.46967 17.0303C4.32902 16.8897 4.25 16.6989 4.25 16.5V15H20.75V16.5C20.75 16.6989 20.671 16.8897 20.5303 17.0303C20.3897 17.171 20.1989 17.25 20 17.25Z" fill="#4B4B4B"/>
							</svg>
							Web
						</li>
					</ul>
				</div>
				<div class="block">
					<div class="hero-slider-box mt-10">
						<div class="vetted-tech-experts">
							<div class="hero-slider-item">
								<div class="hero-card vetted-tech-card relative">
									<div class="vetted-hover-box">
										<p class="text-[1.5rem] font-[600] text-[#F34D05] mb-3">Jenny R.</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icon-profile.svg" alt=""> AWS Cloud Engineer</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icon-location.svg" alt=""> Hyderabad, India</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-3"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icons-star.svg" alt=""> 5 years experience</p>
										<p class="text-[1rem] font-[400] text-[#787878] mb-2">Expertise</p>
										<div class="grid grid-cols-10 gap-2 text-[0.875rem] font-[400] text-[#1E1E1E] mb-[1.5rem]">
											<div class="col-span-7">Production design</div>
											<div class="col-span-3">8 years</div>
											<div class="col-span-7">Visual Design</div>
											<div class="col-span-3">6 years</div>
											<div class="col-span-7">App UI/UX</div>
											<div class="col-span-3">2 years</div>
											<div class="col-span-7">Web App Design</div>
											<div class="col-span-3">4 years</div>
											<div class="col-span-7">Adobe Illustration</div>
											<div class="col-span-3">3 years</div>
										</div>
										<p class="text-[0.875rem] font-[400] text-[#787878] mb-2">Jenny is available for hire</p>
										<div class="block">
											<a class="button_slide slide_right !text-[0.875rem] !text-[#4B4B4B] hover:!text-[#fff] !font-[500]" href="/contact-us">
												View Profile 🡢
											</a>
										</div>
									</div>
									<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/veted-pro.png" alt="">
									<div class="hero-card-overlay">
										<div class="hero-card-details">
											<p class="hero-profile !mb-[0px]">Jenny R. • <span class="opacity-60">Hyderabad</span></p>
											<p class="hero-name !mb-[8px]">AWS Cloud Engineer</p>
											<div class="hero-skills">
												<div class="item vetted">Data Engineering</div>
												<div class="item vetted">Python</div>
												<div class="item vetted">AWS</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hero-slider-item">
								<div class="hero-card vetted-tech-card relative">
									<div class="vetted-hover-box">
										<p class="text-[1.5rem] font-[600] text-[#F34D05] mb-3">Jenny R.</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icon-profile.svg" alt=""> AWS Cloud Engineer</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icon-location.svg" alt=""> Hyderabad, India</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-3"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icons-star.svg" alt=""> 5 years experience</p>
										<p class="text-[1rem] font-[400] text-[#787878] mb-2">Expertise</p>
										<div class="grid grid-cols-10 gap-2 text-[0.875rem] font-[400] text-[#1E1E1E] mb-[1.5rem]">
											<div class="col-span-7">Production design</div>
											<div class="col-span-3">8 years</div>
											<div class="col-span-7">Visual Design</div>
											<div class="col-span-3">6 years</div>
											<div class="col-span-7">App UI/UX</div>
											<div class="col-span-3">2 years</div>
											<div class="col-span-7">Web App Design</div>
											<div class="col-span-3">4 years</div>
											<div class="col-span-7">Adobe Illustration</div>
											<div class="col-span-3">3 years</div>
										</div>
										<p class="text-[0.875rem] font-[400] text-[#787878] mb-2">Jenny is available for hire</p>
										<div class="block">
											<a class="button_slide slide_right !text-[0.875rem] !text-[#4B4B4B] hover:!text-[#fff] !font-[500]" href="/contact-us">
												View Profile 🡢
											</a>
										</div>
									</div>
									<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/veted-pro.png" alt="">
									<div class="hero-card-overlay">
										<div class="hero-card-details">
											<p class="hero-profile !mb-[0px]">Jenny R. • <span class="opacity-60">Hyderabad</span></p>
											<p class="hero-name !mb-[8px]">AWS Cloud Engineer</p>
											<div class="hero-skills">
												<div class="item vetted">Data Engineering</div>
												<div class="item vetted">Python</div>
												<div class="item vetted">AWS</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hero-slider-item">
								<div class="hero-card vetted-tech-card relative">
									<div class="vetted-hover-box">
										<p class="text-[1.5rem] font-[600] text-[#F34D05] mb-3">Jenny R.</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icon-profile.svg" alt=""> AWS Cloud Engineer</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icon-location.svg" alt=""> Hyderabad, India</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-3"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icons-star.svg" alt=""> 5 years experience</p>
										<p class="text-[1rem] font-[400] text-[#787878] mb-2">Expertise</p>
										<div class="grid grid-cols-10 gap-2 text-[0.875rem] font-[400] text-[#1E1E1E] mb-[1.5rem]">
											<div class="col-span-7">Production design</div>
											<div class="col-span-3">8 years</div>
											<div class="col-span-7">Visual Design</div>
											<div class="col-span-3">6 years</div>
											<div class="col-span-7">App UI/UX</div>
											<div class="col-span-3">2 years</div>
											<div class="col-span-7">Web App Design</div>
											<div class="col-span-3">4 years</div>
											<div class="col-span-7">Adobe Illustration</div>
											<div class="col-span-3">3 years</div>
										</div>
										<p class="text-[0.875rem] font-[400] text-[#787878] mb-2">Jenny is available for hire</p>
										<div class="block">
											<a class="button_slide slide_right !text-[0.875rem] !text-[#4B4B4B] hover:!text-[#fff] !font-[500]" href="/contact-us">
												View Profile 🡢
											</a>
										</div>
									</div>
									<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/veted-pro.png" alt="">
									<div class="hero-card-overlay">
										<div class="hero-card-details">
											<p class="hero-profile !mb-[0px]">Jenny R. • <span class="opacity-60">Hyderabad</span></p>
											<p class="hero-name !mb-[8px]">AWS Cloud Engineer</p>
											<div class="hero-skills">
												<div class="item vetted">Data Engineering</div>
												<div class="item vetted">Python</div>
												<div class="item vetted">AWS</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hero-slider-item">
								<div class="hero-card vetted-tech-card relative">
									<div class="vetted-hover-box">
										<p class="text-[1.5rem] font-[600] text-[#F34D05] mb-3">Jenny R.</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icon-profile.svg" alt=""> AWS Cloud Engineer</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icon-location.svg" alt=""> Hyderabad, India</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-3"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icons-star.svg" alt=""> 5 years experience</p>
										<p class="text-[1rem] font-[400] text-[#787878] mb-2">Expertise</p>
										<div class="grid grid-cols-10 gap-2 text-[0.875rem] font-[400] text-[#1E1E1E] mb-[1.5rem]">
											<div class="col-span-7">Production design</div>
											<div class="col-span-3">8 years</div>
											<div class="col-span-7">Visual Design</div>
											<div class="col-span-3">6 years</div>
											<div class="col-span-7">App UI/UX</div>
											<div class="col-span-3">2 years</div>
											<div class="col-span-7">Web App Design</div>
											<div class="col-span-3">4 years</div>
											<div class="col-span-7">Adobe Illustration</div>
											<div class="col-span-3">3 years</div>
										</div>
										<p class="text-[0.875rem] font-[400] text-[#787878] mb-2">Jenny is available for hire</p>
										<div class="block">
											<a class="button_slide slide_right !text-[0.875rem] !text-[#4B4B4B] hover:!text-[#fff] !font-[500]" href="/contact-us">
												View Profile 🡢
											</a>
										</div>
									</div>
									<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/veted-pro.png" alt="">
									<div class="hero-card-overlay">
										<div class="hero-card-details">
											<p class="hero-profile !mb-[0px]">Jenny R. • <span class="opacity-60">Hyderabad</span></p>
											<p class="hero-name !mb-[8px]">AWS Cloud Engineer</p>
											<div class="hero-skills">
												<div class="item vetted">Data Engineering</div>
												<div class="item vetted">Python</div>
												<div class="item vetted">AWS</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hero-slider-item">
								<div class="hero-card vetted-tech-card relative">
									<div class="vetted-hover-box">
										<p class="text-[1.5rem] font-[600] text-[#F34D05] mb-3">Jenny R.</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icon-profile.svg" alt=""> AWS Cloud Engineer</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icon-location.svg" alt=""> Hyderabad, India</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-3"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icons-star.svg" alt=""> 5 years experience</p>
										<p class="text-[1rem] font-[400] text-[#787878] mb-2">Expertise</p>
										<div class="grid grid-cols-10 gap-2 text-[0.875rem] font-[400] text-[#1E1E1E] mb-[1.5rem]">
											<div class="col-span-7">Production design</div>
											<div class="col-span-3">8 years</div>
											<div class="col-span-7">Visual Design</div>
											<div class="col-span-3">6 years</div>
											<div class="col-span-7">App UI/UX</div>
											<div class="col-span-3">2 years</div>
											<div class="col-span-7">Web App Design</div>
											<div class="col-span-3">4 years</div>
											<div class="col-span-7">Adobe Illustration</div>
											<div class="col-span-3">3 years</div>
										</div>
										<p class="text-[0.875rem] font-[400] text-[#787878] mb-2">Jenny is available for hire</p>
										<div class="block">
											<a class="button_slide slide_right !text-[0.875rem] !text-[#4B4B4B] hover:!text-[#fff] !font-[500]" href="/contact-us">
												View Profile 🡢
											</a>
										</div>
									</div>
									<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/veted-pro.png" alt="">
									<div class="hero-card-overlay">
										<div class="hero-card-details">
											<p class="hero-profile !mb-[0px]">Jenny R. • <span class="opacity-60">Hyderabad</span></p>
											<p class="hero-name !mb-[8px]">AWS Cloud Engineer</p>
											<div class="hero-skills">
												<div class="item vetted">Data Engineering</div>
												<div class="item vetted">Python</div>
												<div class="item vetted">AWS</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="hero-slider-item">
								<div class="hero-card vetted-tech-card relative">
									<div class="vetted-hover-box">
										<p class="text-[1.5rem] font-[600] text-[#F34D05] mb-3">Jenny R.</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icon-profile.svg" alt=""> AWS Cloud Engineer</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icon-location.svg" alt=""> Hyderabad, India</p>
										<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-3"><img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri();?>/images/icons-star.svg" alt=""> 5 years experience</p>
										<p class="text-[1rem] font-[400] text-[#787878] mb-2">Expertise</p>
										<div class="grid grid-cols-10 gap-2 text-[0.875rem] font-[400] text-[#1E1E1E] mb-[1.5rem]">
											<div class="col-span-7">Production design</div>
											<div class="col-span-3">8 years</div>
											<div class="col-span-7">Visual Design</div>
											<div class="col-span-3">6 years</div>
											<div class="col-span-7">App UI/UX</div>
											<div class="col-span-3">2 years</div>
											<div class="col-span-7">Web App Design</div>
											<div class="col-span-3">4 years</div>
											<div class="col-span-7">Adobe Illustration</div>
											<div class="col-span-3">3 years</div>
										</div>
										<p class="text-[0.875rem] font-[400] text-[#787878] mb-2">Jenny is available for hire</p>
										<div class="block">
											<a class="button_slide slide_right !text-[0.875rem] !text-[#4B4B4B] hover:!text-[#fff] !font-[500]" href="/contact-us">
												View Profile 🡢
											</a>
										</div>
									</div>
									<img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/veted-pro.png" alt="">
									<div class="hero-card-overlay">
										<div class="hero-card-details">
											<p class="hero-profile !mb-[0px]">Jenny R. • <span class="opacity-60">Hyderabad</span></p>
											<p class="hero-name !mb-[8px]">AWS Cloud Engineer</p>
											<div class="hero-skills">
												<div class="item vetted">Data Engineering</div>
												<div class="item vetted">Python</div>
												<div class="item vetted">AWS</div>
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

	<!-- <div class=" w-full relative">
		<div class="container">
			<div class="grid grid-rows-12 grid-flow-col gap-4">
				<div class="col-span-3 row-span-8 bg-white ">1</div>
				<div class="col-span-3 row-span-4 bg-white ">2</div>
				<div class="col-span-3 row-span-4  bg-white ">3</div>
				<div class="col-span-3 row-span-4 bg-white ">4</div>
				<div class="col-span-3 bg-white ">1</div>
				<div class="col-span-3 bg-white ">1</div>
				<div class="col-span-3 bg-white ">1</div>
			</div>
		</div>
	</div> -->





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