<?php if (have_rows('block')) : ?>
<?php while (have_rows('block')) : the_row(); ?>
<?php if (get_row_layout() == 'why_hire_smartworking') : ?>
    <?php if(get_sub_field('main_title')): ?>
	<div class="block mb-[2.5rem]">
		<h2 class="text-[2.25rem] font-[600] text-center text-[#E8E8E8] mb-[0.5rem]"><?php echo get_sub_field('main_title'); ?> <span class="text-dark-orange"><?php echo get_sub_field('orange_title'); ?></span></h2>
	</div>
	<?php endif; ?>	
	<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 gap-4">
		<div class="col-span-12 sm:col-span-6 lg:col-span-6">
			<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 gap-4">
				<div class="col-span-12 min-h-[27.4rem] sm:col-span-6 lg:col-span-6 bg-[#60E3D5] rounded-[0.67rem] p-8">
					<?php if(get_sub_field('first_box_image')): ?>
						<div class="block">
							<img class="w-[7.5rem] h-[7.5rem]" src="<?php echo get_sub_field('first_box_image')['url']; ?>" alt="">
						</div>
					<?php endif; ?>
					<?php if(get_sub_field('first_box_title')): ?>
						<p class=" text-[#1E1E1E] text-[3.25rem] font-[600] leading-[3.25rem] mb-[0.75rem]"><?php echo get_sub_field('first_box_title'); ?></p>
					<?php endif; ?>	
					
					<?php if(get_sub_field('first_box_paragraph')): ?>
						<p class=" text-[#1E1E1E] text-[1rem] font-[400]"><?php echo get_sub_field('first_box_paragraph'); ?></p>
				    <?php endif; ?>	
				</div>
				<div class="col-span-12 sm:col-span-6 relative lg:col-span-6">
					<img class="absolute right-0 top-0 h-[100%] w-[100%]" src="<?php echo get_template_directory_uri();?>/images/why-box-bg.png" alt="">
					<div class=" text-center min-h-[16.5rem] bg-[rgba(255,255,255,0.12)] mb-4 relative z-10 rounded-[0.67rem] p-8">
						<?php if(get_sub_field('second_box_image')): ?>
							<div class="w-[100%] absolute left-0 bottom-0 text-center">
								<img class="max-w-[100%] h-[15rem] inline" src="<?php echo get_sub_field('second_box_image')['url']; ?>" alt="">
							</div>
						<?php endif; ?>	
					</div>
					<div class=" min-h-[6.5rem] bg-[#AAD464] rounded-[0.67rem] p-8">
					<?php if(get_sub_field('second_box_title')): ?>
						<p class=" text-[#1E1E1E] text-[1.5rem] font-[600]"><?php echo get_sub_field('second_box_title'); ?></p>
					<?php endif; ?>	
					<?php if(get_sub_field('second_box_paragraph')): ?>	
						<p class=" text-[#1E1E1E] text-[1rem] font-[400]"><?php echo get_sub_field('second_box_paragraph'); ?></p>
					<?php endif; ?>
					</div>
				</div>
				<div class="col-span-12 sm:col-span-12 min-h-[12.7rem] lg:col-span-12 bg-[#C282FA] rounded-[0.67rem] p-8">
				<?php if(get_sub_field('third_box_title')): ?>
					<p class=" text-[#1E1E1E] text-[2rem] font-[600]"><?php echo get_sub_field('third_box_title'); ?></p>
				<?php endif; ?>	
				<?php if(get_sub_field('third_box_paragraph')): ?>	
					<p class=" text-[#1E1E1E] text-[1rem] font-[400]"><?php echo get_sub_field('third_box_paragraph'); ?></p>
				<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="col-span-12 sm:col-span-6 lg:col-span-6">
			<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 gap-4">
				<div class="col-span-12 min-h-[14.5rem] sm:col-span-6 lg:col-span-7 bg-[#77BDDF] rounded-[0.67rem] p-8">
				<?php if(get_sub_field('fourth_box_title')): ?>	
					<p class=" text-[#1E1E1E] text-[3.25rem] font-[600] leading-[3.25rem] mb-[0.75rem]"><?php echo get_sub_field('fourth_box_title'); ?>
					<?php if(get_sub_field('fourth_box_small_title')): ?>	
						<span class=" text-[#1E1E1E] text-[1.75rem] font-[600]"><?php echo get_sub_field('fourth_box_small_title'); ?></span>
					<?php endif; ?>	
					</p>
				<?php endif; ?>	
				
				<?php if(get_sub_field('fourth_box_paragraph')): ?>	
					<p class=" text-[#1E1E1E] text-[1rem] font-[400]"><?php echo get_sub_field('fourth_box_paragraph'); ?></p>
				<?php endif; ?>
				</div>
				<div class="col-span-12 sm:col-span-6 lg:col-span-5 bg-[#ECC1A1] rounded-[0.67rem] p-8">
				<?php if(get_sub_field('fifth_box_title')): ?>
					<p class=" text-[#1E1E1E] text-[2.5rem] font-[600] leading-[3.25rem] mb-[0.75rem]"><?php echo get_sub_field('fifth_box_title'); ?></p>
				<?php endif; ?>	
				<?php if(get_sub_field('fifth_box_small_title')): ?>	
					<p class=" text-[#1E1E1E] text-[1.75rem] font-[600]"><?php echo get_sub_field('fifth_box_small_title'); ?></p>
				<?php endif; ?>	
				<?php if(get_sub_field('fifth_box_paragraph')): ?>	
					<p class=" text-[#1E1E1E] text-[1rem] font-[400]"><?php echo get_sub_field('fifth_box_paragraph'); ?></p>
				<?php endif; ?>
				</div>
				<div class="col-span-12 relative sm:col-span-12 min-h-[28.3rem] 2xl:min-h-[22.3rem] lg:col-span-6 bg-[#EF995E] rounded-[0.67rem] p-8">
					<?php if(get_sub_field('seven_box_title')): ?>
						<p class=" text-[#1E1E1E] text-[2.5rem] font-[600] leading-[3.25rem] mb-[0.75rem]"><?php echo get_sub_field('seven_box_title'); ?></p>
					<?php endif; ?>
					<?php if(get_sub_field('seven_box_paragraph')): ?>
					<p class=" text-[#1E1E1E] text-[1rem] font-[400]">
						<?php echo get_sub_field('seven_box_paragraph'); ?>
					</p> 
					<?php endif; ?>
					<?php if(get_sub_field('seven_box_image')): ?>
						<div class="block text-center absolute left-0 bottom-8 w-[100%] px-8">
							<img class="max-w-[28rem] w-[100%] inline" src="<?php echo get_sub_field('seven_box_image')['url']; ?>" alt="">
						</div>
					<?php endif; ?>
				</div>
				<div class="col-span-12 sm:col-span-12 min-h-[28.3rem] 2xl:min-h-[25.3rem] relative lg:col-span-6 bg-[rgba(255,255,255,0.12)] rounded-[0.67rem] p-8">
					<img class="absolute right-0 top-0 h-[100%] w-[100%]" src="<?php echo get_template_directory_uri();?>/images/why-box-bg.png" alt="">
					<div class=" relative z-10">
						<div class="block">
							<?php if(get_sub_field('six_box_title')): ?>
								<p class=" text-[#E8E8E8] text-[1.5rem] font-[600] mb-[0.75rem]"><?php echo get_sub_field('six_box_title'); ?></p>
							<?php endif; ?>
							<?php if(get_sub_field('six_box_paragraph')): ?>	
								<p class=" text-[#E8E8E8] text-[1rem] font-[400]"><?php echo get_sub_field('six_box_paragraph'); ?></p>
							<?php endif; ?>
						</div>
						<?php if(get_sub_field('six_box_image')): ?>
							<div class="block text-center mt-6">
								<img class="max-w-[28rem] w-[100%] inline" src="<?php echo get_sub_field('six_box_image')['url']; ?>" alt="">
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>		
		</div>
	</div>
<?php endif; ?>	
<?php endwhile; ?>
<?php endif; ?>