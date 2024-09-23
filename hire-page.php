<?php
/**
 * Template Name: Hire Page
 *
 * @package sws
 */

 get_header();
?>
<div class=" w-full relative">
  	<img class="bg-img absolute w-[150%] max-w-[initial] opacity-[0.6] left-[-20%] z-0 top-[-15%]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  	<div class=" w-full relative z-10">
	
	<?php if (have_rows('hire_role_section')) : ?>
	<?php while (have_rows('hire_role_section')) : the_row(); ?>
	<?php if (get_row_layout() == 'banner_section') : ?>
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 py-0 md:py-14 gap-3">
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
        <section class="w-full px-3">
            <div class="w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="block">
                    <div class="text-center small-intro">Process</div>
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white lg:leading-[60px]">Our Matching<br><span class="text-dark-orange block">Progress</span></h2>
                    <!-- <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-10">No hidden costs, timezone aligned and able to hire in one week.</p> -->
                </div>
            </div>
        </section>
        <section class="calculator-box w-[100%] py-16">
            <div class="inner-box grid grid-cols-1 lg:grid-cols-10 content-center rounded-[60px] max-w-[90%] min-h-[350px] mx-auto px-4 md:px-[10%]">
                <div class="grid-item col-span-5 py-[10%] lg:py-[100px] content-center">
                    <div class="block mb-5">
                        <span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem]">Calculator</span>
                    </div>

                    <h3 class="text-[26px] lg:text-[36px] text-[#ffff] lg:leading-[30px] font-medium mb-4">Curious About <span class="text-dark-orange"> Cost? </span></h3>
                    <p class="text-white text-[15px] mb-[30px] lg:text-[24px] font-medium">Find out the cost of your next remote hire</p>
                    <p>
                        <a
                            href="/pricing"
                            class="w-[100%] max-w-[300px] text-center button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange"
                        >
                            Click to calculate now
                        </a>
                    </p>
                </div>
                <div class="grid-item col-span-5 relative py-[10%] lg:py-[100px]">
                    <div class="max-w-md relative z-10 rounded-3xl min-h-[300px] bg-white overflow-hidden shadow-lg mx-auto">
                        <div class="px-6 py-4">
                            <div class="block">
                                <p class="text-[24px] text-[#64748b]">Hourly rate</p>
                            </div>

                            <div class="block">
                                <p class="text-[54px] font-[500]">£20/hr</p>
                            </div>

                            <div class="block w-100 mt-3 h-[110px] border-b border-gray-400">
                                <div class="sliderwrap">
                                    <input class="home-range-slider" id="range" type="range" max="100" value="60" />
                                </div>
                            </div>
                            <div class="block pt-5">
                                <div class="flex">
                                    <div class="grow">
                                        <span class="text-[18px] font-[400] text-gray-500">Amount saved per month</span>
                                    </div>

                                    <div class="grow text-end">
                                        <span id="price-value" class="text-[24px] font-[500] text-black">£ 3550</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="calculater-bg absolute left-0 bottom-0 w-[100%] z-[0]" src="https://smartworking.io/wp-content/uploads/2024/06/calcbg.svg">
                </div>
            </div>
        </section>


    </div>
</div>


<?php get_footer();?>