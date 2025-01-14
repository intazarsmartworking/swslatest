<?php if (get_row_layout() == 'testimonial_section') : ?>
	<div class="w-full testimonial-section p-[1rem] lg:py-[3.75rem]">
	    
		
		<?php if(get_sub_field('main_heading')): ?>
			<div class="block">
				<h2 class="text-[2.25rem] font-[700] text-center text-[#E8E8E8] mb-5"><?php echo get_sub_field('main_heading'); ?></h2>
				<p class="text-[1.5rem] font-[700] text-center text-[#E8E8E8] mb-3">Excellent &nbsp;<img class="inline h-[0.95rem] align-middle mb-1 " src="<?php echo get_template_directory_uri();?>/images/rating_card_img.svg" alt=""></p>
				<p class="text-[1rem] font-[400] text-center text-[#E8E8E8]"><span class="font-[700]">Rated 4.7/5</span> based on reviews on &nbsp;<img class="inline h-[1.5rem] align-text-bottom" src="<?php echo get_template_directory_uri();?>/images/trustpilot.svg" alt=""></p>
			</div>
		<?php endif; ?>
		<div class="w-full mt-10">
			<div class="container">
				<ul class="testimonial-tab">
					<li class="active" data-id="testimonial1"><img class="inline h-[1.5rem] align-middle mb-1 " src="<?php echo get_template_directory_uri();?>/images/star-tab.svg" alt="">&nbsp; Client words</li>
					<li data-id="reviews1"><img class="inline h-[1.5rem] align-middle mb-1 " src="<?php echo get_template_directory_uri();?>/images/heart-tab.svg" alt="">&nbsp; Reviews</li>
				</ul>
			</div>
		</div>
		<div class="w-full mt-2 testimonial-content active" id="testimonial1">
			<div class="container relative overflow-hidden min-h-[26rem] pt-8">
				<div class="slider-wrapper w-full min-h-[25rem] relative card-container overflow-visible">
					<div class="slider-overlay">
						<?php if(have_rows('testimonial_card')): ?>
							<?php while(have_rows('testimonial_card')): the_row(); ?>
							<?php 
								$testimonial = get_sub_field('testimonial'); 
								$author_name = get_sub_field('name'); 
								$author_designation = get_sub_field('designation'); 
								$background = get_sub_field('background_color'); 
								$linkedin = get_sub_field('linkedin');
							?>


					
							<div class="bg-[<?php echo esc_attr($background); ?>] slider-item w-[24.375rem] lg:w-[24.375rem] h-[24.375rem] rounded-xl absolute card-placement card" style="background:<?php echo esc_attr($background); ?>;" >
								<div class="p-7 flex flex-col">
									<div class="flex justify-between mb-6">
										<div class="content-center"><img class="h-[2.5rem]" src="<?php echo get_sub_field('logo')['url']; ?>"></div>
										<div class="content-center"><img class="h-[0.96rem]" src="<?php echo get_sub_field('rating')['url']; ?>"></div>
									</div>
									<p class="text-[0.95rem] text-[#1E1E1E] font-[400]"> <?php echo $testimonial;?> </p>

									<div class=" absolute bottom-[20px] left-0 w-[100%] flex justify-between items-center px-7">
										<div class="flex items-center">
											<img class="w-[6.5rem] h-[6.5rem] rounded-full mr-5" src="<?php echo get_sub_field('author_pic')['url']; ?>">
											<div class="content-center">
												<p class="text-[#1E1E1E] text-[1.125rem]"> <?php echo esc_attr($author_name);?></p>
												<p class="text-[#4B4B4B] text-[0.875remx]"> <?php echo esc_attr($author_designation);?> </p>
											</div>
										</div>

									</div>
								</div>
							</div>
							<?php endwhile; ?>	
						<?php endif; ?> 
						
					</div>
				</div>
				<div class="buttons flex justify-center gap-3 mt-8">
					<button class="text-white p-[0px] disabled:opacity-[0.3]" disabled id="nextButton">
						<svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43" fill="none">
							<path d="M21.9474 39C12.2581 39 4.40349 31.165 4.40349 21.5C4.40349 11.835 12.2581 4 21.9474 4C31.6366 4 39.4912 11.835 39.4912 21.5C39.4912 31.165 31.6366 39 21.9474 39Z" stroke="white" stroke-width="2.63158" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M24.1572 27.6773L17.9818 21.4998L24.1572 15.3223" stroke="white" stroke-width="2.63158" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</button>
					<button class="text-white p-[0px] disabled:opacity-[0.3]" id="prevButton" >
						<svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43" fill="none">
							<path d="M21.0517 39C30.7409 39 38.5955 31.165 38.5955 21.5C38.5955 11.835 30.7409 4 21.0517 4C11.3625 4 3.50781 11.835 3.50781 21.5C3.50781 31.165 11.3625 39 21.0517 39Z" stroke="white" stroke-width="2.63158" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M18.8428 27.6775L25.0182 21.5L18.8428 15.3225" stroke="white" stroke-width="2.63158" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</button>
				</div>
			</div>
		</div>
		<div class="w-full mt-2 testimonial-content" id="reviews1">
			<div class="container relative overflow-hidden min-h-[26rem] pt-8">
					<div class="slider-wrapper w-full min-h-[25rem] relative card-container overflow-visible">
						<div class="slider-overlay">
						<?php if(have_rows('testimonial_review')): ?>
							<?php while(have_rows('testimonial_review')): the_row(); ?>
							<?php 
								$testimonial = get_sub_field('testimonial'); 
								$author_name = get_sub_field('name'); 
								$review_count = get_sub_field('review_count'); 
								$date_and_time = get_sub_field('date_and_time');
								$background = get_sub_field('background_color'); 
								$title = get_sub_field('title'); 
							?>


					
							<div class="bg-[<?php echo esc_attr($background); ?>] slider-item2 w-[24.375rem] lg:w-[24.375rem] h-[24.375rem] rounded-xl absolute card-placement card" style="background:<?php echo esc_attr($background); ?>;" >
								<div class="p-7 flex flex-col">
									<div class="flex justify-between mb-6">
										<div><img class="h-[0.96rem]" src="<?php echo get_sub_field('rating')['url']; ?>"></div>
										<div>
											<!-- <p class="text-[#4B4B4B] text-[0.875remx]"> <?php echo esc_attr($date_and_time);?> </p> -->
										</div>
									</div>
									<p class="text-[1rem] text-[#1E1E1E] font-[500] mb-3"> <?php echo $title;?> </p>
									
									<p class="text-[0.875rem] text-[#1E1E1E] font-[400]"> <?php echo $testimonial;?> </p>

									<div class=" absolute bottom-[20px] left-0 w-[100%] px-7">
										<div class="flex justify-between items-center">
											<div class="flex items-center ">
												<!-- <img class="w-[6.5rem] h-[6.5rem] rounded-full mr-5" src="<?php echo get_sub_field('author_pic')['url']; ?>"> -->
												<div>
													<p class="text-[#1E1E1E] text-[1.125rem]"> <?php echo esc_attr($author_name);?></p>
													<p class="text-[#4B4B4B] text-[0.875remx]"> <?php echo esc_attr($date_and_time);?></p>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
							<?php endwhile; ?>	
						<?php endif; ?> 
						
					</div>
				</div>
				<div class="buttons flex justify-center gap-3 mt-8">
					<button class="text-white p-[0px] disabled:opacity-[0.3]" disabled id="nextButton2">
						<svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43" fill="none">
							<path d="M21.9474 39C12.2581 39 4.40349 31.165 4.40349 21.5C4.40349 11.835 12.2581 4 21.9474 4C31.6366 4 39.4912 11.835 39.4912 21.5C39.4912 31.165 31.6366 39 21.9474 39Z" stroke="white" stroke-width="2.63158" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M24.1572 27.6773L17.9818 21.4998L24.1572 15.3223" stroke="white" stroke-width="2.63158" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</button>
					<button class="text-white p-[0px] disabled:opacity-[0.3]" id="prevButton2" >
						<svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43" fill="none">
							<path d="M21.0517 39C30.7409 39 38.5955 31.165 38.5955 21.5C38.5955 11.835 30.7409 4 21.0517 4C11.3625 4 3.50781 11.835 3.50781 21.5C3.50781 31.165 11.3625 39 21.0517 39Z" stroke="white" stroke-width="2.63158" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M18.8428 27.6775L25.0182 21.5L18.8428 15.3225" stroke="white" stroke-width="2.63158" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</button>
				</div>
			</div>
		</div>

	</div>
<?php endif; ?>	
