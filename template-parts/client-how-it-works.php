<?php if (get_row_layout() == 'how_it_works') : ?>
<section class="relative py-16 bg-black">
    <?php if(get_sub_field('small_title')): ?>
		<h3 class="text-center small-intro"> <?php echo get_sub_field('small_title'); ?> </h3>
	<?php endif; ?>
	
	<?php if(get_sub_field('first_title')): ?>
    <h1 class="text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 text-center font-bold text-white mb-3"><?php echo get_sub_field('first_title'); ?></h1>
    <p class="text-center text-5xl pt-[10px] sm:text-3xl lg:text-[56px] 3xl:text-58 text-dark-orange mb-3"><?php echo get_sub_field('second_title'); ?></p>
	<?php endif; ?>
	
	<?php if(get_sub_field('small_paragraph')): ?>
    <p class="text-center text-2xl pt-[10px] text-white"><?php echo get_sub_field('small_paragraph'); ?></p>
	<?php endif; ?>
    
    <div class="mt-12 w-full flex  overflow-hidden min-h-[1950px] how-it-works-section">
        <div class="w-[5%]">&nbsp;</div>
        <div class="w-full flex relative ">
		
			<?php if(have_rows('box_content')): ?>
			<?php while(have_rows('box_content')): the_row(); ?>
			<?php 
				$small_title = get_sub_field('small_title'); 
				$first_position = get_sub_field('first_position'); 
				$background_color = get_sub_field('background_color'); 
			?>
		
            <div class="how-it-works-card w-full absolute <?php echo esc_attr($first_position); ?> h-[800px] rounded-l-[44px] flex bg-[<?php echo esc_attr($background_color); ?>]">
                <div class="relative flex justify-between items-center w-1/6">
                        <p class="absolute bottom-14 left-0 flex howItWorkHeading gap-2">
                            <span class="text-[24px] font-extrabold"><?php echo esc_attr($small_title); ?></span>
                        </p>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="relative">
                            <img src="<?php echo get_sub_field('images')['url']; ?>">
							
							<?php if(have_rows('left_description')): ?>
							<?php while(have_rows('left_description')): the_row(); ?>
							<?php 
								$profile = get_sub_field('profile'); 
								$day = get_sub_field('day'); 
								$type = get_sub_field('type'); 
								$date_info = get_sub_field('date_info'); 
								$position = get_sub_field('position'); 
								$bg_color = get_sub_field('bg_color'); 
							?>
							
                            <div class="min-h-[150px] p-4 flex-col min-w-[280px] absolute <?php echo esc_attr($position); ?> rounded-3xl bg-[<?php echo esc_attr($bg_color); ?>]">
                                <div class="flex mb-2 justify-between items-center">
                                    <div class="flex items-center">
                                        <span class="bg-[#C4654B] w-[40px] h-[40px] rounded-full mr-3"></span>
                                        <p class="text-[24px] font-bold"><?php echo esc_attr($profile); ?></p>
                                    </div>
                                    <p><?php echo esc_attr($day); ?></p>
                                </div>
                                <div class="mb-2">
                                    <p><?php echo esc_attr($type); ?></p>
                                </div>
                                <div class="bg-[#DD572C] py-2 px-5 rounded-full w-max">
                                    <p class="text-white"><?php echo esc_attr($date_info); ?></p>
                                </div>
                            </div>
							
							<?php endwhile; ?>	
						<?php endif; ?> 
                            
                        </div>
                    </div>
                    <div class="flex flex-col justify-center items-center ml-[120px] max-w-[417px]">
                        <h3 class="text-[40px] text-bold"><?php echo get_sub_field('right_side_heading'); ?></h3>
                        <ul>
						
							<?php if(have_rows('main_points')): ?>
							<?php while(have_rows('main_points')): the_row(); ?>
							<?php 
								$points = get_sub_field('points'); 
							?>	
                            <li class="text-[20px] flex leading-9">
                                <img src="<?php echo get_template_directory_uri();?>/images/bullet_point_symbol.svg" class="mr-3" /><?php echo esc_attr($points); ?>
                            </li>
							
								<?php endwhile; ?>	
							<?php endif; ?> 
                            
                        </ul>
                    </div>
                </div>
           
				<?php endwhile; ?>	
			<?php endif; ?> 
            
            
        </div>
    </div>
</section>
<?php endif; ?>	