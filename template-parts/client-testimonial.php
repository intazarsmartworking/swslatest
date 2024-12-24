<?php if (get_row_layout() == 'testimonial_section') : ?>
	<div class="w-full testimonial-section">
	    <!-- <?php if(get_sub_field('small_heading')): ?>
			<div class ="container mx-auto md:px-0 px-10">
				<h3 class="text-white text-[12px] lg:text-[16px] text-center flex items-center justify-center small-intro mt-48"><?php echo get_sub_field('small_heading'); ?></h3>
			</div>
		<?php endif; ?> -->
		
		<?php if(get_sub_field('main_heading')): ?>
			<div class="block mt-[5rem]">
				<h2 class="text-[2.25rem] font-[600] text-center text-[#E8E8E8] mb-[1.25rem]"><?php echo get_sub_field('main_heading'); ?></h2>
				<p class="text-[1.5rem] font-[600] text-center text-[#E8E8E8] mb-[1rem]">Excellent &nbsp;<img class="inline h-[1.5rem] align-middle mb-1 " src="<?php echo get_template_directory_uri();?>/images/rating_card_img.svg" alt=""></p>
				<p class="text-[1rem] font-[600] text-center text-[#E8E8E8]">Rated 4.7/5 based on 272,822 reviews on &nbsp;<img class="inline h-[1.5rem] align-text-bottom" src="<?php echo get_template_directory_uri();?>/images/trustpilot.svg" alt=""></p>
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
			<div class="container relative overflow-hidden min-h-[26rem] py-8">
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
									<div class="block mb-6">
										<div class="mb-3"><img class="h-[2.5rem]" src="<?php echo get_sub_field('logo')['url']; ?>"></div>
										<div><img class="h-[0.95rem]" src="<?php echo get_sub_field('rating')['url']; ?>"></div>
									</div>
									<p class="text-[0.95rem] text-[#1E1E1E] font-[400]"> <?php echo $testimonial;?> </p>

									<div class=" absolute bottom-[20px] left-0 w-[100%] flex justify-between items-center px-7">
										<div class="flex items-center">
											<img class="w-[4.5rem] h-[4.5rem] rounded-full mr-5" src="<?php echo get_sub_field('author_pic')['url']; ?>">
											<div>
												<p class="text-[#1E1E1E] text-[1.125rem]"> <?php echo esc_attr($author_name);?></p>
												<p class="text-[#4B4B4B] text-[0.875remx]"> <?php echo esc_attr($author_designation);?> </p>
											</div>
										</div>

										<!-- <a href="<?php echo $linkedin;?>" target="_blank"> <img src="<?php echo get_template_directory_uri();?>/images/linkedin_card_logo.svg" /> </a> -->
									</div>
								</div>
							</div>
							<?php endwhile; ?>	
						<?php endif; ?> 
						
					</div>
				</div>
				<div class="buttons flex justify-center gap-3 mt-3">
					<button class="text-white w-[3rem] py-[0.2rem] text-[1.5rem] font-[700] rounded-[0.36rem] border border-[#464444] disabled:opacity-[0.3]" disabled id="nextButton">&#8592;</button>
					<button class="text-white w-[3rem] py-[0.2rem] text-[1.5rem] font-[700] rounded-[0.36rem] border border-[#464444] disabled:opacity-[0.3]" id="prevButton" >&#8594;</button>
				</div>
			</div>
		</div>
		<div class="w-full mt-2 testimonial-content" id="reviews1">
			<div class="container relative overflow-hidden min-h-[26rem] py-8">
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


					
							<div class="bg-[<?php echo esc_attr($background); ?>] slider-item2 w-[24.375rem] lg:w-[24.375rem] h-[24.375rem] rounded-xl absolute card-placement card" style="background:<?php echo esc_attr($background); ?>;" >
								<div class="p-7 flex flex-col">
									<div class="block mb-6">
										<div class="mb-3"><img class="h-[2.5rem]" src="<?php echo get_sub_field('logo')['url']; ?>"></div>
										<div><img class="h-[0.95rem]" src="<?php echo get_sub_field('rating')['url']; ?>"></div>
									</div>
									<p class="text-[0.95rem] text-[#1E1E1E] font-[400]"> <?php echo $testimonial;?> </p>

									<div class=" absolute bottom-[20px] left-0 w-[100%] flex justify-between items-center px-7">
										<div class="flex items-center">
											<img class="w-[4.5rem] h-[4.5rem] rounded-full mr-5" src="<?php echo get_sub_field('author_pic')['url']; ?>">
											<div>
												<p class="text-[#1E1E1E] text-[1.125rem]"> <?php echo esc_attr($author_name);?></p>
												<p class="text-[#4B4B4B] text-[0.875remx]"> <?php echo esc_attr($author_designation);?> </p>
											</div>
										</div>

										<!-- <a href="<?php echo $linkedin;?>" target="_blank"> <img src="<?php echo get_template_directory_uri();?>/images/linkedin_card_logo.svg" /> </a> -->
									</div>
								</div>
							</div>
							<?php endwhile; ?>	
						<?php endif; ?> 
						
					</div>
				</div>
				<div class="buttons flex justify-center gap-3 mt-3">
					<button class="text-white w-[3rem] py-[0.2rem] text-[1.5rem] font-[700] rounded-[0.36rem] border border-[#464444] disabled:opacity-[0.3]" disabled id="nextButton2">&#8592;</button>
					<button class="text-white w-[3rem] py-[0.2rem] text-[1.5rem] font-[700] rounded-[0.36rem] border border-[#464444] disabled:opacity-[0.3]" id="prevButton2" >&#8594;</button>
				</div>
			</div>
		</div>

	</div>
<?php endif; ?>	
