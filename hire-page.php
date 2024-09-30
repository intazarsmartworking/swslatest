<?php
/**
 * Template Name: Hire Page
 *
 * @package sws
 */

 get_header();
?>
<div class=" w-full relative">
  	<img class="bg-img absolute w-[100%] right-[0px] z-0 top-[-149px]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-right-color.svg" alt="">
  	<div class=" w-full relative z-10">
	
	<?php if (have_rows('hire_role_section')) : ?>
	<?php while (have_rows('hire_role_section')) : the_row(); ?>
	<?php if (get_row_layout() == 'banner_section') : ?>
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <div class="col-span-2 md:col-span-1 content-center">
					<?php if(get_sub_field('main_heading')): ?>
                        <h1 class="font-medium text-[35px] md:text-[72px] mb-4 text-white  lg:leading-[78px]">
                                <?php echo get_sub_field('main_heading'); ?> <br><span class="text-dark-orange"> <?php echo get_sub_field('orange_heading'); ?> </span> 
                        </h1>
					<?php endif; ?>	
					<?php if(get_sub_field('paragraph')): ?>
                        <p class=" text-white font-medium text-[20px] pt-[10px] px-0 mb-16"><?php echo get_sub_field('paragraph'); ?></p>
                    <?php endif; ?>	    
						<div class="block">
						<?php if(get_sub_field('button_name_1')): ?>
                            <a href="<?php echo get_sub_field('button_url_1'); ?>" class="button inline-block align-middle button-small rounded-[10px] px-12 py-4 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange mr-4 "><?php echo get_sub_field('button_name_1'); ?></a>
                        <?php endif; ?>	
						
						<?php if(get_sub_field('button_name_2')): ?>
							<a href="<?php echo get_sub_field('button_url_2'); ?>" class="button mobile-m-0 inline-block button-small rounded-[10px] px-[10px] md:px-[20px] py-4 border-little-orange border-2 text-[16px] text-white radial-gradient-login mr-0 lg:mr-[20px] hover:bg-dark-orange"><?php echo get_sub_field('button_name_2'); ?></a>
                        <?php endif; ?>	
						</div>
                    </div>
					<?php if(get_sub_field('right_side_image')): ?>
                    <div class="col-span-2 md:col-span-1 content-center text-right">
                        <img class="w-[100%] max-w-[550px] inline-block" src="<?php echo get_sub_field('right_side_image')['url']; ?>" alt="<?php echo get_sub_field('right_side_image')['alt']; ?>">
                    </div>
					<?php endif; ?>
                </div>
            </div>
        </section>
	<?php endif; ?>
	<?php if (get_row_layout() == 'vetted_profile') : ?>
        <section class="w-full px-3">
            <div class="w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="block">
				<?php if(get_sub_field('small_title')): ?>
                    <div class="text-center small-intro"><?php echo get_sub_field('small_title'); ?></div>
				<?php endif; ?>
				
				<?php if(get_sub_field('main_title')): ?>
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white lg:leading-[60px]"><?php echo get_sub_field('main_title'); ?><span class="text-dark-orange block"><?php echo get_sub_field('orange_title'); ?></span></h2>
				<?php endif; ?>
				
				<?php if(get_sub_field('paragraph')): ?>
                    <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-10"><?php echo get_sub_field('paragraph'); ?></p>
                <?php endif; ?>
				</div>
                <div class="block w-[100%]">
                    <div class="slider-main-box" id="vetted-profiles-slider">
					
					<?php if(have_rows('vetted_box')): ?>
					<?php while(have_rows('vetted_box')): the_row(); ?>
					<?php 
					  $developer_name = get_sub_field('developer_name'); 
					  $profile = get_sub_field('profile'); 
					  $experience = get_sub_field('experience'); 
					  $avai = get_sub_field('avai'); 
					?> 
                        <div class="slider-itme">
                            <div class="custom-bg custom-border">
                                <div class="flex items-center">
									<?php $poet_image = get_sub_field('image');
										if (!empty($poet_image) && isset($poet_image['url'])):
									?>
										<img src="<?php echo esc_url($poet_image['url']); ?>" alt="Author" class="w-16 h-16 rounded-full mr-4">
									<?php endif; ?>	    
									<div>
										<span class="text-white text-2xl font-medium block"><?php echo $developer_name;?></span>
										<span class="text-white text-sm font-normal block"><?php echo $profile;?></span>
									</div>
								</div>

                                <div class="grid grid-cols-1 custom-grid-bg sm:grid-cols-2 gap-4 my-7 px-4 py-3 rounded-lg">
                                <div class="flex flex-col sm:flex-row">
                                    <img src="<?php echo get_template_directory_uri();?>/images/Bag.svg" alt="Experience 1" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
                                    <div>
                                        <h3 class="text-sm font-normal pb-2 text-white">Experience</h3>
                                        <p class="text-white text-base font-medium"><?php echo $experience;?></p>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row">
                                    
                                </div>
								</div>
                                <h2 class="text-sm font-medium text-white pb-5">Technologies</h2>
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-3">
								<?php if(have_rows('technology')): ?>
								 <?php while(have_rows('technology')): the_row(); ?>
								 <?php 
								  $tech_name = get_sub_field('name'); 
								 ?>
                                    <div class="flex items-center tech-item">
                                        <div class="flex-1">
                                            <h3 class="text-xs font-medium"><?php echo $tech_name;?></h3>
                                        </div>
                                        <?php $tech_image = get_sub_field('image');
											if (!empty($tech_image) && isset($tech_image['url'])):
										?>
											<img src="<?php echo esc_url($tech_image['url']); ?>" alt="Technology 1" class="w-4 h-4 inline-block rounded-full">
										<?php endif; ?> 
                                    </div>
								<?php endwhile; ?>	
								<?php endif; ?>
                                </div>

                                <?php  
								 $interview_screening_value = get_sub_field('interview_screening');
								 $interview_screening_percent = get_sub_field('interview_screening');
								 $interview_screening_multiply = $interview_screening_percent* 10;
								 $interview_screening_color = get_sub_field('interview_screening_color');
								?>
								<div class="w-full py-4">
									<p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Coding Ability</p>
									<div class="w-full bg-gray-200 rounded-full h-2 mb-1 dark:bg-gray-700 relative">
										<span class="tooltip-box" style="background:<?php echo $interview_screening_color;?>; left:calc(<?php echo $interview_screening_multiply;?>% - 16px)">
											<?php echo $interview_screening_value;?>								
											<svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
											<path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="<?php echo $interview_screening_color;?>"></path>
											</svg>
										</span>
										<div class="h-2 rounded-full dark:bg-blue-500" style="width: <?php echo $interview_screening_multiply;?>%; background:<?php echo $interview_screening_color;?>;"></div>
									</div>
									<p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
								</div>

                                <?php  
								 $technical_assignment_value = get_sub_field('technical_assignment');
								 $technical_assignment_percent = get_sub_field('technical_assignment');
								 $technical_assignment_multiply = $technical_assignment_percent* 10;
								 $technical_assignment_color = get_sub_field('technical_assignment_color');
								?>
								<div class="w-full py-4">
									<p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Problem Solving</p>
									<div class="w-full bg-gray-200 rounded-full h-2 mb-1 dark:bg-gray-700 relative">
										<span class="tooltip-box" style="background:<?php echo $technical_assignment_color;?>; left:calc(<?php echo $technical_assignment_multiply;?>% - 16px)">
											<?php echo $technical_assignment_value;?>								
											<svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
											<path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="<?php echo $technical_assignment_color;?>"></path>
											</svg>
										</span>
										<div class="h-2 rounded-full dark:bg-blue-500" style="width: <?php echo $technical_assignment_multiply;?>%; background:<?php echo $technical_assignment_color;?>;"></div>
									</div>
									<p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
								</div>

                                <?php 
								 $language_proficiency_value = get_sub_field('language_proficiency');
								 $language_proficiency_percent = get_sub_field('language_proficiency');
								 $language_proficiency_multiply = $language_proficiency_percent* 10;
								 $language_proficiency_color = get_sub_field('language_proficiency_color');
								?>
								<div class="w-full py-4">
									<p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Communication Skills</p>
									<div class="w-full bg-gray-200 rounded-full h-2 mb-1 dark:bg-gray-700 relative">
										<span class="tooltip-box" style="background:<?php echo $language_proficiency_color;?>; left:calc(<?php echo $language_proficiency_multiply;?>% - 16px)">
											<?php echo $language_proficiency_value;?>								
											<svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
											<path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="<?php echo $language_proficiency_color;?>"></path>
											</svg>
										</span>
										<div class="h-2 rounded-full dark:bg-blue-500" style="width: <?php echo $language_proficiency_multiply;?>%; background:<?php echo $language_proficiency_color;?>;"></div>
									</div>
									<p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
								</div>

                                <div class="flex flex-wrap -mx-2 mt-4">
									<div class="w-1/2 px-2 mb-4">
									<?php if(get_sub_field('per_hour')): ?>
										<p class="font-medium text-2xl text-white"><?php echo get_sub_field('per_hour'); ?></p>
									<?php endif; ?>	
									</div>
									<?php if(get_sub_field('button_name')): ?>
									<div class="w-1/2 px-2 mb-4 text-right">
										<a href="<?php echo get_sub_field('button_url'); ?>"> <button class="profile-button-custom hover:bg-dark-orange"> <?php echo get_sub_field('button_name'); ?> </button> </a>
									</div>
									<?php endif; ?>
								</div>
                            </div>
                        </div>
                    <?php endwhile; ?>	
					<?php endif; ?>     
                        
                        
                    </div>
                </div>
                <div class="block text-center mt-10">
                    <span class="inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle mr-3" id="prev-slide">
                        &lt;
                    </span>
                    <span class="inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle" id="next-slide">
                        &gt;
                    </span>
                </div>


            </div>
        </section>
	<?php endif; ?>		
	<?php endwhile; ?>	
	<?php endif; ?>	
        <section class="w-full px-3">
            <div class="w-[100%] max-w-[1280px] mx-auto py-16">
			<?php if (have_rows('hire_role_section')) : ?>
			<?php while (have_rows('hire_role_section')) : the_row(); ?>
			<?php if (get_row_layout() == 'explore_section') : ?>
                <div class="block">
				<?php if(get_sub_field('top_title')): ?>
                    <div class="text-center small-intro"><?php echo get_sub_field('top_title'); ?></div>
				<?php endif; ?>	
				<?php if(get_sub_field('main_heading')): ?>	
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white lg:leading-[60px]"><?php echo get_sub_field('main_heading'); ?> <span class="text-dark-orange block"><?php echo get_sub_field('orange_heading'); ?></span></h2>
                <?php endif; ?>
				</div>
			<?php endif; ?>		
			<?php endwhile; ?>	
			<?php endif; ?>	
                <div class="relative z-10 footer-background !rounded-[24px] p-[32px] border border-[#3c1201]">
                    <div class="block bg-[#fff] p-[40px] rounded-[24px] mb-10">
                        <p class=" text-[#050403] font-bold text-[20px] px-0 mb-5 text-center">Find and hire software developers by role / expertise</p>
                        <?php if (have_rows('hire_role_section')) : ?>
						<?php while (have_rows('hire_role_section')) : the_row(); ?>
						<?php
						 
							 $selected_role_id  = get_sub_field('select_role_category');
							 if ( $selected_role_id  ) {
								 $args = array(
									'post_type' => 'hire',
									'tax_query' => array(
										array(
											'taxonomy' => 'rolecategory',
											'field'    => 'term_id', 
											'terms'    => $selected_role_id, 
										),
									),
								);
								$query = new WP_Query( $args );
								if ( $query->have_posts() ) {
						?>
							<div class="block">
								<ul class="skill-list">
								<?php
								while ( $query->have_posts() ) {
									$query->the_post();
									
								$hire_image_id = get_post_thumbnail_id();
								$hire_image_src = wp_get_attachment_image_src($hire_image_id, 'full');
								$permalink = get_permalink();
								$modified_permalink = rtrim($permalink, '/') . '-developer/';	
								?>
									<li>
									<a href="<?php echo get_permalink(); ?>">
									<img class=" absolute top-[12px] left-[15px] w-[23px]" src="<?php echo esc_url($hire_image_src[0]) ;?>" alt="<?php the_title();?>"> <?php the_title();?></li>
									</a>
								<?php }?>	
								</ul>
							</div>
							
							<?php } else  { echo 'No Developers found for this role'; }
									wp_reset_postdata(); 
						 } else { echo '';}?>
						<?php endwhile; ?>		
						<?php endif; ?>		
						
                    </div>
					<?php if (have_rows('hire_role_section')) : ?>
					<?php while (have_rows('hire_role_section')) : the_row(); ?>
					<?php if (get_row_layout() == 'explore_section') : ?>
					<?php if(get_sub_field('button_name')): ?>	
                    <div class="block text-center">
                        <a href="<?php echo get_sub_field('button_url'); ?>" class="button inline-block align-middle button-small rounded-[10px] px-12 py-4 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange"><?php echo get_sub_field('button_name'); ?></a>
                    </div>
					<?php endif; ?>		
					<?php endif; ?>		
					<?php endwhile; ?>	
					<?php endif; ?>
                </div>
            </div>
        </section>
		
		<?php if (have_rows('hire_role_section')) : ?>
		<?php while (have_rows('hire_role_section')) : the_row(); ?>
		<?php if (get_row_layout() == 'process_section') : ?>
        <section class="w-full px-3">
            <div class="block py-16">
			<?php if(get_sub_field('small_title')): ?>  
                <div class="text-center small-intro"><?php echo get_sub_field('small_title'); ?></div>
			<?php endif; ?>

			<?php if(get_sub_field('main_heading')): ?>	
                <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white lg:leading-[60px]"><?php echo get_sub_field('main_heading'); ?><br><span class="text-dark-orange block"><?php echo get_sub_field('orange_heading'); ?></span></h2>
            <?php endif; ?>
			</div>
        </section>
        <section class="w-full px-3" id="pinContainerHire">
		
			<?php if(have_rows('process_section')): ?>
			<?php while(have_rows('process_section')): the_row(); ?>
			<?php 
				$small_title = get_sub_field('small_title'); 
				$main_title = get_sub_field('main_title'); 
				$paragraph = get_sub_field('paragraph');
				$row_index = get_row_index();				
			?> 
                <div class="w-full absolute left-0 top-0 bg-[#0F0F0F] slide-point-<?php echo $row_index; ?>">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 max-w-[1280px] mx-auto relative">
						<img class=" absolute left-[-50px] top-0" src="<?php echo get_template_directory_uri();?>/images/bar-<?php echo $row_index; ?>.svg" alt="">
                        <div class="col-span-2 md:col-span-1 content-center pr-0 md:pr-64">
                            <div class="block text-[16px] text-[#D0511B] font-semibold mb-5">
							<?php if(get_sub_field('icon')): ?>
							<img class="w-[24px] h-[24px] align-top inline-block mr-2" src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['alt']; ?>">
							<?php endif; ?>
							<span class="inline-block align-top"><?php echo $small_title;?></span></div>
                            <h5 class="text-white text-[30px] md:text-[40px] mb-7 "><?php echo $main_title;?></h5>
                            <p class="text-white text-[16px]"><?php echo $paragraph;?></p>
                            
                        </div>
                        <div class="col-span-2 md:col-span-1 content-center text-right">
						<?php if(get_sub_field('right_image')): ?>
                            <img class="w-[100%] max-w-[550px] rounded-[12px] inline-block" src="<?php echo get_sub_field('right_image')['url']; ?>" alt="<?php echo get_sub_field('right_image')['alt']; ?>">
                        <?php endif; ?>
						</div>
                    </div>
                </div>   
            <?php endwhile; ?>	
			<?php endif; ?>    
                

        </section>
		<?php endif; ?>

		
		
		<?php if (get_row_layout() == 'calculator_section') : ?>
        <section class="calculator-box w-[100%] py-16">
            <div class="inner-box grid grid-cols-1 lg:grid-cols-10 content-center rounded-[60px] max-w-[90%] min-h-[350px] mx-auto px-4 md:px-[10%]">
                <div class="grid-item col-span-5 py-[10%] lg:py-[100px] content-center">
				<?php if(get_sub_field('box_top_heading')): ?>  
                    <div class="block mb-5">
                        <span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem]"><?php echo get_sub_field('box_top_heading'); ?></span>
                    </div>
				<?php endif; ?> 	
				<?php if(get_sub_field('box_main_heading')): ?>  
                    <h3 class="text-[26px] lg:text-[36px] text-[#ffff] lg:leading-[30px] font-medium mb-4"><?php echo get_sub_field('box_main_heading'); ?> <span class="text-dark-orange"> <?php echo get_sub_field('box_orange_heading'); ?> </span></h3>
				<?php endif; ?> 	
				<?php if(get_sub_field('box_paragraph')): ?>  	
                    <p class="text-white text-[15px] mb-[30px] lg:text-[24px] font-medium"><?php echo get_sub_field('box_paragraph'); ?></p>
				<?php endif; ?> 	
				<?php if(get_sub_field('button_name')): ?>
				<?php $calc_url =  get_sub_field('button_url'); ?>
				<p>
					<a href="<?php echo esc_url( $calc_url ); ?>" class="w-[100%] max-w-[300px] text-center button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange"><?php echo get_sub_field('button_name'); ?></a>
				</p>
				<?php endif; ?>
                </div>
                <div class="grid-item col-span-5 relative py-[10%] lg:py-[100px]">
                    <div class="max-w-md relative z-10 rounded-3xl min-h-[300px] bg-white overflow-hidden shadow-lg mx-auto">
                        <div class="px-6 py-4">
                            <div class="block">
								<p class="text-[24px] text-[#64748b]"><?php echo get_sub_field('hourly_rate_title'); ?></p>
							</div>
							
							<?php if(get_sub_field('amount')): ?> 
							<div class="block">
								<p class="text-[54px] font-[500] "><?php echo get_sub_field('amount'); ?></p>
							</div>
							<?php endif; ?>	

                            <div class="block w-100 mt-3 h-[110px] border-b border-gray-400">
                                <div class="sliderwrap">
                                    <input class="home-range-slider" id="range" type="range" max="100" value="60" />
                                </div>
                            </div>
                            <div class="block pt-5">
                                <div class="flex">
									<?php if(get_sub_field('amount_save_title')): ?>
									<div class="grow">
										<span class="text-[18px] font-[400] text-gray-500 "><?php echo get_sub_field('amount_save_title'); ?></span>
									</div>
									<?php endif; ?>	
									<div class="grow text-end">
										<span id="price-value" class="text-[24px] font-[500] text-black">£ </span>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                    <img class="calculater-bg absolute left-0 bottom-0 w-[100%] z-[0]" src="https://smartworking.io/wp-content/uploads/2024/06/calcbg.svg">
                </div>
            </div>
        </section>
		<?php endif; ?>		
		
		<?php if (get_row_layout() == 'after_calculator_section') : ?>	
        <section class="w-full px-3">
            <div class="w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="grid grid-cols-12 md:grid-cols-12 gap-3">
                    <div class="col-span-12 md:col-span-7">
					<?php if(get_sub_field('main_heading')): ?>
                        <h5 class="font-medium text-[25px] md:text-[48px] text-white md:leading-[55px] mb-5"><?php echo get_sub_field('main_heading'); ?></h5>
					<?php endif; ?>	
					
					<?php if(get_sub_field('paragraph')): ?>	
                        <p class=" text-white text-[16px] md:text-[20px]"><?php echo get_sub_field('paragraph'); ?></p>
                     <?php endif; ?>	  
                    </div>
                    <div class="col-span-12 md:col-span-5 text-right">
					<?php if(get_sub_field('right_image')): ?>
                        <div class="w-[100%] max-w-[450px] p-3 bg-[#1F0C04] border border-[#401A0A] relative dot-color-bg rounded-[12px] ml-auto">
                            <img class="w-[100%] inline-block relative z-10" src="<?php echo get_sub_field('right_image')['url']; ?>" alt="<?php echo get_sub_field('right_image')['alt']; ?>">
                        </div>
                    <?php endif; ?>    
                    </div>
                </div>
				<?php if(have_rows('content_section')): ?>
				<?php while(have_rows('content_section')): the_row(); ?>
				<?php 
					$heading = get_sub_field('heading'); 
					$paragraph = get_sub_field('paragraph');	
				?>
                <div class="grid grid-cols-12 md:grid-cols-12 py-14 border-t border-[#2D1004] gap-3 mt-14">
                    <div class="col-span-12 md:col-span-6">
                        <h5 class="font-medium text-[25px] md:text-[32px] text-dark-orange md:leading-[32px] mb-5 "><?php echo $heading;?></h5>
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <p class=" text-white text-[16px] md:text-[20px]"><?php echo $paragraph;?></p>
                    </div>
                </div>
                <?php endwhile; ?>	
				<?php endif; ?>
			</div>
        </section>
		<?php endif; ?>		
		

        <?php if (get_row_layout() == 'testimonial_section') : ?>
			<div class="my-0 mx-auto flex flex-col justify-center testimonial-section items-center py-16">
				<?php if(get_sub_field('small_heading')): ?>
					<div class ="container mx-auto md:px-0 px-10">
						<h3 class="text-white text-[12px] lg:text-[16px] text-center flex items-center justify-center small-intro mt-48"><?php echo get_sub_field('small_heading'); ?></h3>
					</div>
				<?php endif; ?>
				
				<?php if(get_sub_field('main_heading')): ?>
					<div class="flex flex-col items-center justify-center">
						<h2 class="text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-[58px] font-medium text-white text-center px-0  md:leading-tight"><?php echo get_sub_field('main_heading'); ?></h2>
					</div>
				<?php endif; ?>
				<div class="w-full flex relative min-h-[520px] md:min-h-[620px] pr-3 lg:pr-0 pt-5 lg:pt-16 pb-2 md:pb-16 overflow-hidden">
				<div class="flex w-0 lg:w-1/12">&nbsp;</div>
				<div class="slider-wrapper w-full min-h-[400px] lg:min-h-[500px] pt-[30px] relative card-container overflow-visible">
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


				
						<div class="bg-[<?php echo esc_attr($background); ?>] slider-item w-100 lg:w-[600px] h-[450px] rounded-3xl absolute card-placement card" style="background:<?php echo esc_attr($background); ?>;" >
							<div class="p-4 lg:p-10 flex flex-col ">
								<div class="flex justify-between items-center mb-6">
									<img class=" h-[55px]" src="<?php echo get_sub_field('logo')['url']; ?>">
									<img src="<?php echo get_sub_field('rating')['url']; ?>">
								</div>
								<p class="text-[20px] text-[#050403] leading-6"> <?php echo $testimonial;?> </p>

								<div class=" absolute bottom-[20px] left-0 w-[100%] flex justify-between items-center px-[2.5rem]">
									<div class="flex items-center">
										<img class=" w-[70px] rounded-full mr-5" src="<?php echo get_sub_field('author_pic')['url']; ?>">
										<div>
											<p class="text-[#050403] text-[24px]"> <?php echo esc_attr($author_name);?> </p>
											<p class="text-[#050403] text-[16px]"> <?php echo esc_attr($author_designation);?> </p>
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
			</div>
			<div>
				<div class="buttons flex gap-3">
					<button class="text-white p-3 rounded-[10px] border border-[#464444] " id="prevButton">&#8592;</button>
					<button class="text-white p-3 rounded-[10px] border border-[#464444]" id="nextButton">&#8594;</button>
				</div>
			</div>

			</div>			
		<?php endif; ?>	
		<?php endwhile; ?>	
		<?php endif; ?>
		
        <?php get_template_part( 'template-parts/home-blog' );?>

        <?php if (have_rows('hire_role_section')) : ?>
		<?php while (have_rows('hire_role_section')) : the_row(); ?>
		<?php if (get_row_layout() == 'faq_section') : ?>
		<div class="w-full relative grid items-center z-10 py-16 lg:pt-[100px]">
			<div class="container mx-auto md:px-0 px-10">
			<?php if(get_sub_field('small_title')): ?>
			<h3 class="text-center small-intro"> <?php echo get_sub_field('small_title'); ?> </h3>
			<?php endif; ?>
			
			<?php if(get_sub_field('main_title')): ?>
			<h1 class=" text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0  md:leading-tight"><?php echo get_sub_field('main_title'); ?><br><span class="text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 text-dark-orange"><?php echo get_sub_field('orange_title'); ?> </span></h1>
			<?php endif; ?>
			
				<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-14">
					<?php if(have_rows('faq')): ?>
					<?php while(have_rows('faq')): the_row(); ?>
					<?php 
					  $question = get_sub_field('question'); 
					  $answer = get_sub_field('answer'); 
					  $row_index = get_row_index();
					  
					?> 

					<div>
					<div class="accordian-sec-bg mb-5">
						<button class="w-full text-left py-1 px-4  focus:outline-none flex justify-between items-center" onclick="toggleAccordion(<?php echo $row_index; ?>)">
							<span id="accordion-label-<?php echo $row_index; ?>" class="text-xl pt-6 pb-6 font-medium text-white"><?php echo $question;?></span>
							<svg id="arrow-down-<?php echo $row_index; ?>" class="h-4 w-4 text-gray-500 rounded-full" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M6 9l4 4 4-4"></path>
							</svg>
							<svg id="arrow-up-<?php echo $row_index; ?>" class="h-4 w-4 hidden text-gray-500 rounded-full" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M6 9l4-4 4 4"></path>
							</svg>
						</button>
						<div id="accordion-section-<?php echo $row_index; ?>" class="overflow-hidden transition-max-height duration-300 rounded-xl" style="max-height:0;">
						<p class="p-4 text-base text-white"><?php echo  $answer;?></p>
						</div>
					</div>
					</div>
					<?php endwhile; ?>	
					<?php endif; ?> 
				</div>

			</div>
		</div>
		<?php endif; ?>
		
		<?php if (get_row_layout() == 'cta_section') : ?>
        
		
			<section class="w-full py-24">
            <div class=" w-[100%] container !p-0 mx-auto">
                <div class=" block relative rounded-[24px] vetting-bg">
                    <img class="absolute h-[100%] w-[50%] right-[0px] top-[0px] z-1" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png">
                    <div class="grid grid-cols-1 lg:grid-cols-12 content-center gap-4 relative z-10 h-[100%]">
                        <div class="grid-item col-span-1 lg:col-span-4 content-center min-h-[500px] py-[32px] pl-[30px] lg:pl-[150px]">
						<?php if(get_sub_field('heading')): ?>
                            <h1 class=" text-white font-bold text-[32px] lg:text-[40px] lg:leading-[45px]"><?php echo get_sub_field('heading'); ?></h1>
						<?php endif; ?>	
						
						<?php if(get_sub_field('paragraph')): ?>
                            <p class=" text-white text-[16px] mt-[30px] mb-[30px]"><?php echo get_sub_field('paragraph'); ?></p>
						<?php endif; ?>		
                           
                        </div>
                        <div class="grid-item col-span-1 lg:col-span-8 content-center relative">
						<?php if(get_sub_field('calender')): ?>
                            <div class="absolute right-0 top-[-100px] w-[100%] min-h-[500px] overflow-hidden rounded-[24px]">
							    <?php echo get_sub_field('calender'); ?>
							</div>
						<?php endif; ?>	
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		
		
		
		<?php endif; ?>
        
		
		<?php if (get_row_layout() == 'hire_offshore') : ?>
        <div class="w-full relative grid items-center py-16">
		<div class="container mx-auto">
          <div class="d-block">
		  <?php if(get_sub_field('top_title')): ?>
            <h3 class="text-center small-intro"> <?php echo get_sub_field('top_title'); ?> </h3>
		  <?php endif; ?>  

			<?php if(get_sub_field('main_title')): ?>
            <h1 class=" text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0  md:leading-tight"><?php echo get_sub_field('main_title'); ?><br><span class="text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 text-dark-orange">
            <?php echo get_sub_field('orange_title'); ?></span></h1>
			<?php endif; ?>  
          </div>

          <div class="grid grid-cols-1 lg:grid-cols-10 gap-5 content-center mt-5">
              <div class="grid-item col-span-8 content-center">
				<?php if(get_sub_field('title')): ?>
                  <h1 class="text-[22px] lg:text-[36px] text-[#fff] font-medium"> <?php echo get_sub_field('title'); ?> </h1>
				<?php endif; ?> 

				<?php if(get_sub_field('paragraph')): ?>	
                  <p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[20px] text-[#ffffff] font-normal ">
                    <?php echo get_sub_field('paragraph'); ?>
                  </p>
				<?php endif; ?>   
                  <p class="text-[15px] mt-2 lg:mt-[24px] lg:text-[20px] text-[#FF4F04] font-normal "> 
                    <svg id="change-icons" class=" inline-block change-icons  mr-3" xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29" fill="none">
                    	<path fill-rule="evenodd" clip-rule="evenodd" d="M15.0769 23.1698V9.88162C16.3929 11.1965 18.1849 12.0344 20.0953 12.0344H21.1722V9.88054H20.0953C17.4687 9.88054 15.0769 7.48762 15.0769 4.86208V3.78516H12.923V4.86208C12.923 7.48762 10.5312 9.88054 7.90458 9.88054H6.82766V12.0344H7.90458C9.81504 12.0344 11.607 11.1965 12.923 9.88162L12.923 23.1698H15.0769Z" fill="#FF4F04"/>
                    </svg>
					<span class="cursor-pointer " id="show-more">Show more</span></p>
              </div>
               <?php $right_image = get_sub_field('right_image');
					if (!empty($right_image) && isset($right_image['url'])):
				?>
					<div class="grid-item col-span-2 content-center text-end pt-5">				
						<img class="img-3 inline w-[214px]" src="<?php echo esc_url($right_image['url']); ?>">
					</div>	
				<?php endif; ?>
          </div>
        </div>
		</div>
		</div>
		</div>
		
		<div class="w-full relative" id="sticky-details">
		<div class="container mx-auto">
          <div class="show-more-box pt-[0px]">
            <div class="grid grid-cols-1 lg:grid-cols-10 gap-5 mt-5">
              <div class="grid-item col-span-2 content-start" id="fix-side-box">
                <div class="stickysidenav">
                  <ul class="scroll-menu">
				  
				  <?php if(have_rows('table_content')): ?>
				  <?php $section_count = 1; ?>
					<?php while(have_rows('table_content')): the_row(); ?>
					<?php 
					  $main_title = get_sub_field('main_title'); 
					  $unique_id = 'target' . $section_count;
					?>
                    <li><a class=" cursor-pointer" data-location="<?php echo $unique_id; ?>"> <?php echo $main_title;?> </a></li>
                    
					
					<?php $section_count++;?>
					<?php endwhile; ?>	
					<?php endif; ?>
                  </ul>
                </div>
              </div>
              <div class="grid-item col-span-6 content-start">
                
				
				<?php if(have_rows('table_content')): ?>
				  <?php $section_count = 1; ?>
					<?php while(have_rows('table_content')): the_row(); ?>
					<?php 
					  $main_title = get_sub_field('main_title'); 
					  $unique_id = 'target' . $section_count;
					?>
				<div class="scroll-section" id="<?php echo $unique_id; ?>">
                  <h3 class="text-[36px] text-white font-semibold"><?php echo $main_title;?></h3>
                  <?php if(have_rows('description')): ?>
				  <?php while(have_rows('description')): the_row(); ?>
				  
					<?php echo get_sub_field('main_description') ;?>
					
                  <?php endwhile; ?>	
				  <?php endif; ?>
				  
				</div>
				<?php $section_count++;?>
				<?php endwhile; ?>	
				<?php endif; ?>
                
                
                
                
              </div>
			  <?php if(get_sub_field('right_cta_heading')): ?>
              <div class="grid-item col-span-2 content-start">
                <div class="bg-[#FF4D02] rounded-[10px] min-h-[100px] p-5 stickysidenav">
                    <h3 class="text-[22px] lg:text-[24px] text-[#fff] font-medium"><?php echo get_sub_field('right_cta_heading'); ?></h3>
					<?php if(get_sub_field('right_cta_button_name')): ?>
                    <a href="<?php echo get_sub_field('right_cta_button_link'); ?>" class="bg-[#fff] inline-block py-4 text-center text-[18px] px-5 rounded-[14px] border text-[#FF4D02] mt-[30px]"><?php echo get_sub_field('right_cta_button_name'); ?> 
                      <svg class="inline-block ml-[35px] " xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38461 12.0058H15.7745C14.6474 10.8779 13.9292 9.34187 13.9292 7.70433V6.78125H15.7754V7.70433C15.7754 9.95571 17.8265 12.0058 20.0769 12.0058H21V13.852H20.0769C17.8265 13.852 15.7754 15.9021 15.7754 18.1535V19.0766H13.9292V18.1535C13.9292 16.516 14.6474 14.98 15.7745 13.852H4.38461V12.0058Z" fill="#FF4D02"/>
                      </svg>
                    </a>
					<?php endif; ?>
                </div>
              </div>
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
</div>
</div>

<script type="text/javascript">

	jQuery(window).bind("load", function() {
		callFunction()
	});
</script>

<?php get_footer();?>