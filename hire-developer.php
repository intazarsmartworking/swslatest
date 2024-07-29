<?php
/**
 * Template Name: Hire Developer
 *
 * @package sws
 */

get_header('second');
?>

<?php if (have_rows('section_block')) : ?>
	<?php while (have_rows('section_block')) : the_row(); ?>
    <?php if (get_row_layout() == 'first_section') : ?>
        <section class="bg-black flex flex-col items-center justify-center py-16">
            <div class="flex flex-col items-center justify-center mb-20">
            <?php if(get_sub_field('main_title')): ?>    
                <h1 class="text-4xl font-bold text-[56px] mb-4 text-white"><?php echo get_sub_field('main_title'); ?></h1> 
            <?php endif; ?> 

            <?php if(get_sub_field('orange_title')): ?>   
                <span class="text-dark-orange text-[56px]"><?php echo get_sub_field('orange_title'); ?></span> 
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
 
<section class="bg-black flex flex-col items-center justify-center py-16">
    <h3 class="text-center small-intro">Explore</h3>
	
    <div class="flex flex-col items-center justify-center mb-20">
      <h1 class="text-4xl  text-[56px] mb-4 text-white">Need top notch developers?</h1> 
      <span class="text-dark-orange text-[56px]">You are in the right place.</span> 
      <h3 class="text-white text-xl font-normal text-center py-6 mb-10 px-0 md:px-96"> 
        With Arc, find pre-vetted remote software developers proficient in all programming languages, framework, and technologies. Check out our popular remote developer specializing below.
      </h3>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-1 gap-4 my-16  md:mb-24 assemble-section-bg rounded-3xl relative w-full md:w-3/4">
      <div class="bg-white py-4 md:py-10 px-4 md:px-10 rounded-xl">
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
			
				<a href="<?php echo esc_url($modified_permalink); ?>">
					<div class="flex flex-col md:flex-row items-center  py-2 px-2 rounded-lg skill-border cursor-pointer">
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

</section>   


<!-- Smart Working Section -->
<?php if (have_rows('section_block')) : ?>
	<?php while (have_rows('section_block')) : the_row(); ?>
    <?php if (get_row_layout() == 'second_section') : ?>
<div class="w-full relative grid items-center pb-32 bg-black ">
    <div class="container mx-auto md:px-0 px-10">
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
  <?php endwhile; ?>
<?php endif; ?>

<!-- Curios Section  -->
<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
<?php if (get_row_layout() == 'curious_section') : ?>
			<div class="w-full relative grid items-center mt-4">
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

<!-- Assemble Team Section -->
<?php get_template_part( 'template-parts/assemble-team' );?>

<!-- Blog Section -->
<?php get_template_part( 'template-parts/home-blog' );?>

<!-- FAQ Section  -->
<div class="w-full relative grid items-center bg-black z-10">
    <div class="container mx-auto md:px-0 px-10">
	<h3 class="text-center small-intro"> FAQ's </h3>
  	<h1 class=" text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0  md:leading-tight">Common questions<br><span class="text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 text-dark-orange">and their answers </span></h1>
  	<p class="text-center text-white font-medium text-2xl pt-[10px] px-0 "> Didn't answer your question? </p>
	
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

<?php get_footer();?>