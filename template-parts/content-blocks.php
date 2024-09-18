<?php
   /**
    * Template part for displaying posts
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package innago
    */
   
   ?>
<!-- home banner start -->
<div class=" w-full relative">
  <img class="bg-img absolute w-[100%] right-[-35%] z-0 top-[-5%]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  <img class="bg-img absolute w-[100%] right-[0] z-0 top-[66%]" src="<?php echo get_template_directory_uri();?>/images/bg-left.svg" alt="">
  <div class=" w-full relative z-10">

	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'home_header') : ?>
	<div class="container mx-auto py-16">
	<div class="grid lg:flex lg:justify-between gap-10 lg:gap-15 items-center">
		<div class="w-full">
			<div class="grid gap-8 relative pr-5">
				<?php if(get_sub_field('title')): ?>
				<h1 class="text-3xl sm:text-4xl lg:text-7xl 3xl:text-58 font-medium text-white lg:leading-tight"> <?php echo get_sub_field('title'); ?> </h1>
				<?php endif; ?>
				<?php if(get_sub_field('description')): ?>
				<p class="flex text-white font-normal text-xl"><?php echo get_sub_field('description'); ?></p>
				<?php endif; ?>
				<?php if(get_sub_field('button_name')): ?>
				<?php $home_banner_url =  get_sub_field('button_url'); ?>
				<div class="header-buttons mt-6">
				<a href="<?php echo esc_url( $home_banner_url ); ?>" class="button inline-block button-small rounded-md px-[10px] md:px-[30px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[20px] hover:bg-transparent hover:text-dark-orange "><?php echo get_sub_field('button_name'); ?></a>
				</div>
				<?php endif; ?>
				<?php if(get_sub_field('app_star_icon')): ?>
				<div class="get-app mt-8">
				<img src="<?php echo get_sub_field('app_star_icon')['url']; ?>" alt="<?php echo get_sub_field('app_star_icon')['alt']; ?>">
				</div>
				<?php endif; ?>	
			</div>
		</div>
		<?php if(get_sub_field('image')): ?>
		<div class="w-full relative">
			<img class="w-full my-12" src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>">
		</div>
		<?php endif; ?>
	</div>
	</div>
	<?php endif; ?>

	<!-- home banner close -->
	<!-- Future Remote -->
	<?php if (get_row_layout() == 'future_hiring') : ?>
	<div class="w-full relative  grid items-center py-16" >
	<div class="px-0 md:px-10">
	    <?php if(get_sub_field('main_heading')): ?>
		<h2 class="flex flex-col items-center justify-center text-center md:leading-tight mb-20"> <span class="text-2xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium  text-white"> <?php echo get_sub_field('main_heading'); ?> </span> </h2>
		<?php endif; ?>
		<div class="container mx-auto p-4">
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
			<?php if(have_rows('block_part')): ?>
			<?php while(have_rows('block_part')): the_row(); ?>
				<div class="p-4">
				<p class="text-4xl font-bold text-dark-orange" data-target="<?php echo get_sub_field('data_target'); ?>"><?php echo get_sub_field('heading'); ?></p>
				<hr class="my-4 borderdown">
				<p class="text-2xl font-medium text-white"><?php echo get_sub_field('second_heading'); ?></p>
				</div>
			<?php endwhile; ?>	
			<?php endif; ?> 	
			</div>
		</div>
	</div>
	</div>
	<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>	
	
	<!-- Europe Leading Section  -->
	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'europe_leading_box') : ?>
	<div class="w-full relative grid items-center py-16">
	<div class="container mx-auto md:px-0 px-10">
		<?php if(get_sub_field('short_title')): ?>
		<h4 class="text-center small-intro"> <?php echo get_sub_field('short_title'); ?> </h4>
		<?php endif; ?> 
		<?php if(get_sub_field('main_heading')): ?>	
		<h2 class=" text-2xl text-white sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium flex flex-col text-center px-0 md:leading-tight"> <?php echo get_sub_field('main_heading'); ?>  </h2>
		<?php endif; ?>
		<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-5 md:mt-28">
			<?php if(have_rows('box_item')): ?>
			<?php while(have_rows('box_item')): the_row(); ?>
			<?php 
				$title_name = get_sub_field('title'); 
				$subtitle_name = get_sub_field('short_description'); 
				?>
			<div class="europe-box rounded-3xl mb-5 min-h-[250px]">
				<div class="flex">
				<div class="w-[100%] max-w-[70%] px-6 py-6">
					<div class="icons-box">
						<svg height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
							<rect rx="8" ry="8" class="line" height="100%" width="100%" stroke-linejoin="round"/>
						</svg>
						<img src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['url']; ?>" class="mb-12 icons-img">
					</div>
					<div class="mt-12">
						<h5 class="text-white text-xl font-bold leading-tight mb-3"> <?php echo $title_name;?> </h5>
						<p class="text-white text-base"> <?php echo $subtitle_name;?> </p>
					</div>
				</div>
				<div class="ml-auto absolute right-0 bottom-0 ">
					<img class=" max-h-[120px] lg:max-h-[240px] w-auto" src="<?php echo get_sub_field('main_image')['url']; ?>" alt="<?php echo get_sub_field('main_image')['url']; ?>">
				</div>
				</div>
			</div>
			<?php endwhile; ?>	
			<?php endif; ?> 
		</div>
	</div>
	</div>
	<?php endif; ?>
	
	<!-- How It Works Section -->
	<?php get_template_part( 'template-parts/client-how-it-works' );?>	
	<?php endwhile; ?>
	<?php endif; ?>
	<!-- Curios Section  -->
	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'curious_section') : ?>
	<section class="calculator-box w-[100%] py-16">
	<div class="inner-box grid grid-cols-1 lg:grid-cols-10 content-center rounded-[60px] max-w-[90%] min-h-[350px] mx-auto px-4 md:px-[10%]">
		<div class="grid-item col-span-5 py-[10%] lg:py-[100px] content-center">
			<div class="block mb-5">
				<?php if(get_sub_field('small_title')): ?>
				<span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " ><?php echo get_sub_field('small_title'); ?></span>
				<?php endif; ?>
			</div>
			<?php if(get_sub_field('main_heading')): ?>	
			<h3 class="text-[26px] lg:text-[36px] text-[#ffff] lg:leading-[30px] font-medium mb-4"><?php echo get_sub_field('main_heading'); ?></h3>
			<?php endif; ?>
			<p class="text-white text-[15px] mb-[30px] lg:text-[24px] font-medium"><?php echo get_sub_field('subheading'); ?></p>
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
							<span id="price-value" class="text-[24px] font-[500] text-black">£ </span>
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
	<?php get_template_part( 'template-parts/ai-vetted-profile' );?>
	<?php get_template_part( 'template-parts/assemble-team' );?>
	<?php get_template_part( 'template-parts/trustpilot-review' );?>
	<?php get_template_part( 'template-parts/home-blog' );?>
	<!-- FAQ Section  -->
	<div class="w-full relative grid items-center z-10 py-16">
	<div class="container mx-auto md:px-0 px-10 ">
	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'home_faq_heading') : ?>
		
	<?php if(get_sub_field('small_heading')): ?>		
		<h4 class="text-center small-intro"> <?php echo get_sub_field('small_heading'); ?> </h4>
	<?php endif; ?>	

	<?php if(get_sub_field('main_heading')): ?>		
		<h2 class="text-[30px] sm:text-3xl lg:text-[56px] mb-10 font-medium text-white text-center px-0  md:leading-tight"><?php echo get_sub_field('main_heading'); ?><br><span class="text-dark-orange"><?php echo get_sub_field('orange_heading'); ?> </span></h2>
	<?php endif; ?>

	<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?> 	
		<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
			<?php 
				$faq_argument = array( 'post_type' => 'faq');
				$faq_query	= new WP_Query($faq_argument);
				?>
			<?php while ($faq_query->have_posts()) : $faq_query->the_post();?>
			<?php $post_id = get_the_ID(); ?>
			<div>
				<div class="accordian-sec-bg mb-5">
				<button class="w-full text-left py-1 px-4  focus:outline-none flex justify-between items-center" onclick="toggleAccordion(<?php echo $post_id; ?>)">
					<span id="accordion-label-<?php echo $post_id; ?>" class="text-[18px] md:text-xl pt-6 pb-6 font-medium text-white"><?php the_title();?></span>
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
	<div class="w-full relative grid items-center px-3  py-16">
	<div class="container mx-auto md:px-0 px-10 ready-hire-bg">
		<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
			<div class="pl-7 pr-7 md:pl-48 md:pr-12 content-center">
				<?php if(get_sub_field('main_title')): ?>
				<h2 class="text-left text-white text-[35px] md:text-5xl lg:text-[45px] font-medium  bg-title-text  md:leading-tight  md:mb-2"><?php echo get_sub_field('main_title'); ?></h2>
				<?php endif; ?>	
				<?php if(get_sub_field('subheading')): ?>	
				<p class="text-center text-[20px] md:text-left text-white"> <?php echo get_sub_field('subheading'); ?> </p>
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
			<div class="px-6 py-10 lg:pr-[20%] content-center text-right">
				<img src="<?php echo esc_url($hire_dev_main_img['url']); ?>" alt="<?php echo esc_attr($hire_dev_main_img['alt']); ?>" class="w-[100%] inline-block max-w-[450px]">
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



<script type="text/javascript">
   jQuery(window).bind("load", function() {
   	homePageAnimation()
   });
</script>