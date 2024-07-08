<?php if (get_row_layout() == 'testimonial_section') : ?>
	<div class="pt-[80px] my-0 mx-auto flex flex-col justify-center items-center">
	    <?php if(get_sub_field('small_heading')): ?>
			<div class ="container mx-auto md:px-0 px-10">
				<p class="text-white text-[16px] text-center flex items-center justify-center small-intro"><?php echo get_sub_field('small_heading'); ?></p>
			</div>
		<?php endif; ?>
		
		<?php if(get_sub_field('main_heading')): ?>
			<div class="flex flex-col items-center justify-center">
				<?php echo get_sub_field('main_heading'); ?>
			</div>
		<?php endif; ?>
		<div class="w-full flex relative min-h-[700px] pt-16 overflow-hidden">
		<div class="flex w-1/12">&nbsp;</div>
		<div class="flex w-full relative card-container">
		
		    <?php if(have_rows('testimonial_card')): ?>
			<?php while(have_rows('testimonial_card')): the_row(); ?>
			<?php 
				$testimonial = get_sub_field('testimonial'); 
				$author_name = get_sub_field('name'); 
				$author_designation = get_sub_field('designation'); 
				$degree = get_sub_field('degree'); 
				$direction = get_sub_field('direction'); 
				$background = get_sub_field('background_color'); 
			?>
		
				<div class="bg-[<?php echo esc_attr($background); ?>] w-[600px] h-[600px] rounded-3xl absolute card-placement card" style="--deg:<?php echo esc_attr($degree);?>; --left:<?php echo esc_attr($direction);?>">
					<div class="p-10 flex flex-col ">
						<div class="flex justify-between items-center mb-6">
							<img src="<?php echo get_sub_field('logo')['url']; ?>">
							<img src="<?php echo get_sub_field('rating')['url']; ?>">
						</div>
						<p class="text-2xl text-[#050403] leading-9"> <?php echo $testimonial;?> </p>
						<div class="flex justify-between items-center mt-36">
							<div class="flex items-center">
								<img class="mr-5" src="<?php echo get_sub_field('author_pic')['url']; ?>">
								<div>
									<p class="text-[#050403] text-[24px]"> <?php echo esc_attr($author_name);?> </p>
									<p class="text-[#050403] text-[16px]"> <?php echo esc_attr($author_designation);?> </p>
								</div>
							</div>
							<img src="<?php echo get_template_directory_uri();?>/images/linkedin_card_logo.svg" />
						</div>
					</div>
				</div>
				<?php endwhile; ?>	
			<?php endif; ?> 
			
		</div>
	</div>
	<div>
		<div class="buttons flex gap-3">
			<button class="text-white p-3 rounded-2xl border border-main-gray" id="prevButton">&#8592;</button>
			<button class="text-white p-3 rounded-2xl border border-main-gray" id="nextButton">&#8594;</button>
		</div>
	</div>

	</div>
<?php endif; ?>	
