<?php if (get_row_layout() == 'how_it_works') : ?>
<div class=" w-full relative bg-white p-[1rem] lg:p-[2.5rem]">
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