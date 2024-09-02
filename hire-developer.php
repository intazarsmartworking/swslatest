<?php
/**
 * Template Name: Hire Developer
 *
 * @package sws
 */

 get_header();
?>

<div class=" w-full relative">
  	<img class="bg-img absolute w-[150%] max-w-[initial] opacity-[0.6] left-[-20%] z-0 top-[-12%]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  	<div class=" w-full relative z-10">

		<?php if (have_rows('section_block')) : ?>
			<?php while (have_rows('section_block')) : the_row(); ?>
			<?php if (get_row_layout() == 'first_section') : ?>
				<section class="flex flex-col items-center justify-center py-16">
					<div class="flex flex-col items-center justify-center mb-20">
					<?php if(get_sub_field('main_title')): ?>    
						<h1 class="text-[35px] md:text-4xl text-center font-bold lg:text-[56px] mb-4 text-white"><?php echo get_sub_field('main_title'); ?></h1> 
					<?php endif; ?> 

					<?php if(get_sub_field('orange_title')): ?>   
						<span class="text-dark-orange text-[35px] md:text-4xl text-center font-bold lg:text-[56px]"><?php echo get_sub_field('orange_title'); ?></span> 
					<?php endif; ?> 

					<?php if(get_sub_field('small_paragraph')): ?>      
						<h3 class="text-white text-xl font-normal text-center py-6 mb-10 px-0 "> <?php echo get_sub_field('small_paragraph'); ?> </h3>
					<?php endif; ?> 

					<?php if(get_sub_field('button_name')): ?> 
					<?php $bb_url =  get_sub_field('button_url'); ?>
					<div class="header-buttons mb-20">
						<a href="<?php echo esc_url( $bb_url ); ?>" class="button button-small  px-8 py-4 font-bold rounded-xl  text-white text-lg get-started-banner-home"><?php echo get_sub_field('button_name'); ?></a>
					</div>
					<?php endif; ?> 
					
					<?php $mainimg = get_sub_field('main_image');
						if (!empty($mainimg) && isset($mainimg['url'])):
					?>
					<img src="<?php echo esc_url($mainimg['url']); ?>">
					<?php endif; ?>
					</div>

				</section>   
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<!-- Explore Section -->
		
		<section class=" w-full py-16">
			<div class="mx-auto w-[100%] max-w-[1280px]">
					<h3 class="text-center small-intro">Explore</h3>
					<div class="flex flex-col items-center justify-center">
						<h1 class="text-[35px] text-center  lg:text-[56px] mb-4 text-white">Need top notch developers?</h1> 
						<span class="text-dark-orange  text-[35px] text-center  lg:text-[56px]">You are in the right place.</span> 
						<h3 class="text-white text-xl font-normal text-center py-6 mb-10 px-0 lg:max-w-[60%] "> 
							With Smart Working, find pre-vetted remote software developers proficient in all programming languages, framework, and technologies. Check out our popular remote developer specializing below.
						</h3>
					</div>


					<div class="grid grid-cols-1 md:grid-cols-1 gap-4 my-8  md:mb-3 assemble-section-bg rounded-3xl relative">
					<img class=" w-[100%] max-w-[320px] absolute right-[-12%] top-[-30%]" src="<?php echo get_template_directory_uri();?>/images/squr-roted.png">
					<div class="bg-white py-4 md:py-10 px-4 md:px-10 rounded-xl relative z-10">
						<h3 class="text-dark-black text-xl font-bold text-center pb-10"> Find and hire software engineers by skills </h3>
						

						<div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center pr-5">
						
							

							<?php 
								$hire_args = array( 'post_type' => 'hire');
								$hire_query	= new WP_Query($hire_args);
								
							?>
							<?php while ($hire_query->have_posts()) : $hire_query->the_post();?>
							<?php 
								$hire_image_id = get_post_thumbnail_id();
								$hire_image_src = wp_get_attachment_image_src($hire_image_id, 'full');
								$permalink = get_permalink();
								$modified_permalink = rtrim($permalink, '/') . '-developer/';
							?>
							
								<a href="<?php echo get_permalink(); ?>">
									<div class="flex flex-col md:flex-row items-center min-h-[55px] content-center  py-2 px-2 rounded-lg skill-border cursor-pointer">
										<div class="w-full flex justify-center md:justify-end md:w-auto">
											<img src="<?php echo esc_url($hire_image_src[0]) ;?>">
										</div>
										<div class="w-full flex justify-center md:justify-start md:w-auto pl-2">
											<h4 class="text-xs font-bold text-dark-black"> <?php the_title();?> </h4>
										</div>
									</div>
								</a>
							<?php endwhile; wp_reset_postdata();?>
						</div>
						
					</div>
					<div class="header-buttons my-5 text-center">
								<a href="https://smartworking.io/" class="button button-small  px-8 py-4 font-bold rounded-xl  text-white text-lg get-started-banner-home">Hire Developers</a>
						</div>
					</div>	
			</div>	

		</section>   


		<!-- Smart Working Section -->
		<?php if (have_rows('section_block')) : ?>
			<?php while (have_rows('section_block')) : the_row(); ?>
			<?php if (get_row_layout() == 'second_section') : ?>
			<div class="w-full relative grid items-center pb-32">
				<div class="mx-auto w-[100%] max-w-[1280px] md:px-0 px-10">
					<?php if(get_sub_field('small_title')): ?>	
						<h3 class="text-center small-intro"> <?php echo get_sub_field('small_title'); ?> </h3>
					<?php endif; ?>

					<?php if(get_sub_field('main_title')): ?>
						<h1 class=" text-2xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium flex flex-col text-center px-0 md:leading-tight"> <span class="text-white"><?php echo get_sub_field('main_title'); ?></span><span class="text-dark-orange"><?php echo get_sub_field('orange_title'); ?></span> </h1>
					<?php endif; ?>
					<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-28">

					<?php if(have_rows('box_section')): ?>
						<?php while(have_rows('box_section')): the_row(); ?>
						<?php 
							$title_name = get_sub_field('title'); 
							$subtitle_name = get_sub_field('small_text'); 
						?>    


						<div class="europe-box rounded-3xl mb-5">
							<div class="flex">
								<div class="px-6 py-6">
									<img src="<?php echo get_sub_field('icon')['url']; ?>"  class="mb-12">
									<div class="mt-12">
										<h3 class="text-white text-xl font-bold leading-tight mb-3"> <?php echo $title_name;?> </h3>
										<span class="text-white text-base"> <?php echo $subtitle_name;?> </span>
									</div>
								</div>

							</div>
						</div>

							<?php endwhile; ?>	
						<?php endif; ?> 

						
					</div>
				</div>
			</div>
			<?php endif; ?>

		<?php if (get_row_layout() == 'expect_section') : ?>
		<section class="smart-hire py-[4rem]">
			<div class="mx-auto w-[100%] max-w-[1280px]">

				
				<div class="grid grid-cols-1 lg:grid-cols-10 content-center mb-[6rem] relative">
					<img class=" w-[100%] max-w-[320px] absolute left-[-12%] top-[-6%]" src="<?php echo get_template_directory_uri();?>/images/circule-bg.png">
					<?php $hire_dev_main_img = get_sub_field('left_side_image');
						if (!empty($hire_dev_main_img) && isset($hire_dev_main_img['url'])):
					?>
					<div class="grid-item col-span-5 relative">
						<img class=" w-[100%] max-w-[100%] rounded-[20px]" src="<?php echo esc_url($hire_dev_main_img['url']); ?>" alt="<?php echo esc_attr($hire_dev_main_img['alt']); ?>">
					</div>
					<?php endif; ?>
					<div class="grid-item col-span-5 relative lg:pl-[40px]">
					<?php if(get_sub_field('heading')): ?>
						<h1 class="text-[25px] font-bold lg:text-[48px] mb-4 text-white"><?php echo get_sub_field('heading'); ?></h1>
					<?php endif; ?>	
					
					<?php if(have_rows('list_part')): ?>
					<?php while(have_rows('list_part')): the_row(); ?>
						<div class=" border-l-[5px] border-[rgba(239,80,12,0.30)] pl-4 mb-[40px]">
							<p class="text-[22px] font-semibold lg:text-[24px] mb-4 text-white"><?php echo get_sub_field('heading'); ?></p>
							<p class="text-[18px] lg:text-[18px] mb-4 text-white"> <?php echo get_sub_field('paragraph'); ?> </p>
						</div>
					<?php endwhile; ?>	
					<?php endif; ?> 	
						
					</div>
				</div>
			</div>
		</section>

			<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>


		<!-- Curios Section  -->
		<?php if (have_rows('block')) : ?>
		<?php while (have_rows('block')) : the_row(); ?>
		<?php if (get_row_layout() == 'curious_section') : ?>

			<section class="calculator-box w-[100%] mt-[50px] lg:mb-[50px]">
				<div class="inner-box grid grid-cols-1 lg:grid-cols-10 content-center rounded-[60px] max-w-[90%] min-h-[350px] mx-auto px-[10%]">
						<div class="grid-item col-span-5 py-[10%] lg:py-[100px]">
							<div class="block mb-5">
									<?php if(get_sub_field('small_title')): ?>
										<span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " ><?php echo get_sub_field('small_title'); ?></span>
									
									<?php endif; ?>
								
							</div>
							<?php if(get_sub_field('main_heading')): ?>	
								<h1 class="text-[26px] lg:text-[36px] text-[#ffff] lg:leading-[30px] font-medium mb-4"><?php echo get_sub_field('main_heading'); ?></h1>
							<?php endif; ?>
							<p class="text-white text-[15px] mb-[30px] lg:text-[24px] font-medium"><?php echo get_sub_field('subheading'); ?></p>
							<?php if(get_sub_field('button_name')): ?>
								<?php $calc_url =  get_sub_field('button_url'); ?>
								<p>
									<a href="<?php echo esc_url( $calc_url ); ?>" class="w-[300px] inline-block text-white text-[16px] font-bold h-[50px] py-3 text-center rounded-[12px] get-started-banner-home"><?php echo get_sub_field('button_name'); ?></a>
								</p>
							<?php endif; ?>
						</div>
						<div class="grid-item col-span-5 relative py-[10%] lg:py-[100px]">
								
								<div class="max-w-md relative z-10 rounded-3xl min-h-[300px] bg-white overflow-hidden shadow-lg mx-auto">
									<div class="px-6 py-4">
									<?php if(get_sub_field('hourly_rate_title')): ?>
										<div class="block">
											<p class="text-[24px] text-[#64748b]"><?php echo get_sub_field('hourly_rate_title'); ?></p>
										</div>
									<?php endif; ?>

									<?php if(get_sub_field('amount')): ?> 
										<div class="block">
											<p class="text-[54px] font-[500] "><?php echo get_sub_field('amount'); ?></p>
										</div>
									<?php endif; ?>	
										<div class="block w-100 mt-3 h-[110px] border-b border-gray-400">
											<div class="sliderwrap">
												<input class="home-range-slider" id="range" type="range" max="100" value="60">
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
													<span id="price-value" class="text-[24px] font-[500] text-black">$ </span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php $curious_img = get_sub_field('main_image');
									if (!empty($curious_img) && isset($curious_img['url'])):
								?>
								<img class="calculater-bg absolute left-0 bottom-0 w-[100%] z-[0]" src="<?php echo esc_url($curious_img['url']); ?>">

								<?php endif; ?>
							
						</div>
				</div>
			</section>

		<?php endif; ?>

		<?php get_template_part( 'template-parts/client-testimonial' );?>

		<?php endwhile; ?>
		<?php endif; ?>


		<?php get_template_part( 'template-parts/assemble-team' );?>
		<?php get_template_part( 'template-parts/home-blog' );?>

		<!-- FAQ Section  -->
		<div class="w-full relative grid items-center z-10 lg:pt-[100px]">
			<div class="container mx-auto md:px-0 px-10">
			<h3 class="text-center small-intro"> FAQ's </h3>
			<h1 class=" text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0  md:leading-tight">Common questions<br><span class="text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 text-dark-orange">and their answers </span></h1>
			<p class="text-center text-white font-medium text-2xl pt-[10px] px-0 "> Didn't answer your question? </p>
			
				<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-14">
					<?php 
						$faq_argument = array( 'post_type' => 'faq');
						$faq_query	= new WP_Query($faq_argument);
					?>
					<?php while ($faq_query->have_posts()) : $faq_query->the_post();?>
					<?php $post_id = get_the_ID(); ?>

					<div>
					<div class="accordian-sec-bg mb-5">
						<button class="w-full text-left py-1 px-4  focus:outline-none flex justify-between items-center" onclick="toggleAccordion(<?php echo $post_id; ?>)">
							<span id="accordion-label-<?php echo $post_id; ?>" class="text-xl pt-6 pb-6 font-medium text-white"><?php the_title();?></span>
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


		<!-- Ready To Hire  -->
		<?php if (have_rows('block')) : ?>
		<?php while (have_rows('block')) : the_row(); ?>
			<?php if (get_row_layout() == 'hire_developer_section') : ?>
				<div class="w-full relative grid items-center set-margin">
					<div class="container mx-auto md:px-0 px-10 ready-hire-bg">
						<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
							
								<div class="pl-7 pr-7 md:pl-48 md:pr-12 justify-self-center self-center">
								<?php if(get_sub_field('main_title')): ?>
								<h1 class="text-left text-white text-3xl md:text-5xl lg:text-[72px] 3xl:text-58 font-medium  bg-title-text  md:leading-tight mt-20 mb-9"><?php echo get_sub_field('main_title'); ?></h1>
								<?php endif; ?>	

								<?php if(get_sub_field('subheading')): ?>	
								<span class="text-center md:text-left text-white text-base"> <?php echo get_sub_field('subheading'); ?> </span>
								<?php endif; ?> 

								<?php if(get_sub_field('button_name')): ?>
								<?php $hire_dev_btn_url =  get_sub_field('button_url'); ?>
									<div class="header-buttons mt-16 mb-10 text-center md:text-left">
										<a href="<?php echo esc_url( $hire_dev_btn_url ); ?>" class="button button-small  px-8 py-4 font-bold rounded-xl text-dark-orange text-lg bg-white"><?php echo get_sub_field('button_name'); ?></a>
									</div>
								<?php endif; ?>	
								</div>
								<?php $hire_dev_main_img = get_sub_field('background_image');
								if (!empty($hire_dev_main_img) && isset($hire_dev_main_img['url'])):
								?>
									<div class="px-6 py-10 flex justify-self-center">
										<img src="<?php echo esc_url($hire_dev_main_img['url']); ?>" alt="<?php echo esc_attr($hire_dev_main_img['alt']); ?>" class="w-auto">
									</div>
								<?php endif; ?>
							
						</div>
					</div>
				</div>
			<?php endif; ?>		
			<?php endwhile; ?>
		<?php endif; ?>	
	</div>
</div>

<?php get_footer();?>