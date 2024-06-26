<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innago
 */

?>

<!-- Trusted By Organization -->
<?php if (have_rows('block')) : ?>
  <?php while (have_rows('block')) : the_row(); ?>
    <?php if (get_row_layout() == 'trusted_organization') : ?>
	<div class="w-full relative  grid items-center pt-24 bg-section-trusted" style="background-image: url('<?php echo get_template_directory_uri();?>/images/Homepage.png');">
	  <div class="px-10">
	    <?php if(get_sub_field('main_title')): ?>
			<h1 class=" text-3xl sm:text-3xl lg:text-3xl 3xl:text-58 font-medium text-white text-center md:leading-tight"> <?php echo get_sub_field('main_title'); ?> </h1>
		<?php endif; ?>
		 <div class="grid grid-cols-2 md:grid-cols-9 gap-4 mt-9">
		  <?php if(have_rows('organization_name')): ?>
			<?php while(have_rows('organization_name')): the_row(); ?>
				<div class="bg-trust-box py-3 px-2 rounded-xl">
					<img src="<?php echo get_sub_field('organization_image')['url']; ?>" alt="<?php echo get_sub_field('organization_image')['url']; ?>" class="mb-5 md:mb-32">
				</div>
			  <?php endwhile; ?>	
			<?php endif; ?> 
		</div> 
	  </div>
	</div>
	<?php endif; ?>
  

<!-- Europe Leading Section  -->
<?php if (get_row_layout() == 'europe_leading_box') : ?>
		<div class="w-full relative bg-dark-black grid items-center pb-28 pt-16 md:pt-36">
			<div class="container mx-auto md:px-0 px-10">
			<?php if(get_sub_field('short_title')): ?>
				<h3 class="text-center small-intro"> <?php echo get_sub_field('short_title'); ?> </h3>
			<?php endif; ?> 

			<?php if(get_sub_field('short_title')): ?>	
				<h1 class=" text-3xl sm:text-4xl lg:text-4xl 3xl:text-58 font-medium text-white text-center px-0 md:px-96 md:leading-tight"> <?php echo get_sub_field('main_heading'); ?> </h1>
			<?php endif; ?>
				<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-28">

				<?php if(have_rows('box_item')): ?>
					<?php while(have_rows('box_item')): the_row(); ?>
					<?php 
						$title_name = get_sub_field('title'); 
						$subtitle_name = get_sub_field('short_description'); 
					?>
						<div class="europe-box rounded-3xl mb-5">
							  <div class="flex">
								<div class="px-6 py-6">
									<img src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['url']; ?>" class="mb-12">
									<div class="mt-12">
										<h3 class="text-white text-xl font-bold leading-tight mb-3"> <?php echo $title_name;?> </h3>
										<span class="text-white text-base"> <?php echo $subtitle_name;?> </span>
									</div>
								</div>
								
								<div class="ml-auto">
								  <img src="<?php echo get_sub_field('main_image')['url']; ?>" alt="<?php echo get_sub_field('main_image')['url']; ?>">
								</div>
							  </div>	
						</div>
					<?php endwhile; ?>	
				<?php endif; ?> 
				</div>

			</div>
		</div>
	<?php endif; ?>


<!-- Curios Section  -->
<?php if (get_row_layout() == 'curious_section') : ?>
			<div class="w-full relative bg-dark-black grid items-center pb-28">
				<div class="container mx-auto md:px-0 px-10 curious-bg">
					<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
						
							<div class="pl-7 pr-7 md:pl-48 md:pr-12">
							<?php if(get_sub_field('small_title')): ?>
							  <h3 class="text-center md:text-left calculator-intro mt-20"> <?php echo get_sub_field('small_title'); ?> </h3>
							<?php endif; ?>

							<?php if(get_sub_field('main_heading')): ?>	
							  <h1 class="text-center md:text-left text-3xl sm:text-4xl lg:text-4xl 3xl:text-58 font-medium text-white  md:leading-tight"><?php echo get_sub_field('main_heading'); ?></h1>
							<?php endif; ?> 
							 <span class="text-center md:text-left text-white text-base"> <?php echo get_sub_field('subheading'); ?> </span>
					  
					        <?php if(get_sub_field('button_name')): ?>
							<?php $calc_url =  get_sub_field('button_url'); ?>
								<div class="header-buttons mt-16 mb-10 text-center md:text-left">
								  <a href="<?php echo esc_url( $calc_url ); ?>" class="button button-small  px-8 py-4 font-bold rounded-xl text-white text-lg get-started-banner-home"><?php echo get_sub_field('button_name'); ?></a>
								</div>
							<?php endif; ?>
							
							</div>
						
						<?php $curious_img = get_sub_field('main_image');
							if (!empty($curious_img) && isset($curious_img['url'])):
						?>
							<div class="px-6">
								<img src="<?php echo esc_url($curious_img['url']); ?>" alt="<?php echo esc_url($curious_img['url']); ?>">
							</div>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
<?php endif; ?>	
<?php endwhile; ?>
<?php endif; ?>
<!-- AI Vetted Section -->

<?php get_template_part( 'template-parts/ai-vetted-profile' );?>
<?php get_template_part( 'template-parts/assemble-team' );?>
<?php get_template_part( 'template-parts/trustpilot-review' );?>
<?php get_template_part( 'template-parts/home-blog' );?>




<!-- FAQ Section  -->
<div class="w-full relative bg-dark-black grid items-center pb-28 pt-16 md:pt-36">
    <div class="container mx-auto md:px-0 px-10">
        <h3 class="text-center small-intro"> FAQ's </h3>
        <h1 class=" text-3xl sm:text-4xl lg:text-4xl 3xl:text-58 font-medium text-white text-center px-0 md:px-96 md:leading-tight">Common questions <br><span class="text-dark-orange"> and their answers </span></h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-28">
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
		<div class="w-full relative bg-dark-black grid items-center pb-28">
			<div class="container mx-auto md:px-0 px-10 ready-hire-bg">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
					
						<div class="pl-7 pr-7 md:pl-48 md:pr-12 justify-self-center self-center">
						 <?php if(get_sub_field('main_title')): ?>
						  <h1 class="text-center md:text-left text-3xl sm:text-4xl lg:text-4xl 3xl:text-58 font-medium text-white  md:leading-tight mt-20 mb-9"><?php echo get_sub_field('main_title'); ?></h1>
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