<?php get_header('second'); ?>


<?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
	
?>

<?php if (have_rows('hire_block_section')) : ?>
	<?php while (have_rows('hire_block_section')) : the_row(); ?>
    <?php if (get_row_layout() == 'banner_section') : ?>

<div class="w-full   md:flex" style="background-image: url('https://stage.smartworking.io/wp-content/themes/sws/images/Homepage.png');">
<div class="container mx-auto mt-5">
<div class="grid lg:flex lg:justify-between gap-10 lg:gap-15 items-center mt-9 mb-0 md:mb-24 relative">
  <div class="absolute top-0 left-0">
    <button class="flex items-center justify-center"><img class="mr-3" src="<?php echo get_template_directory_uri();?>/images/back_arrow.svg" alt="back" >
     <span class="text-white">Services</span></button>
  </div>
  <div class="w-full ">
    <div class="grid gap-8 relative pr-5">

      <?php if(get_sub_field('main_title')): ?>
        <h1 class="text-3xl sm:text-4xl lg:text-7xl 3xl:text-58 font-medium text-white lg:leading-tight"> <?php echo get_sub_field('main_title'); ?> &nbsp; <br> 
	  <span class="text-dark-orange"> <?php echo get_sub_field('orange_title'); ?> </span> </h1>
      <?php endif; ?> 

      <?php if(get_sub_field('main_paragraph')): ?>
      <p class="flex text-white font-normal text-xl"><?php echo get_sub_field('main_paragraph'); ?></p>
      <?php endif; ?> 

      <div class="header-buttons mt-6">
        <input type="email" placeholder="Enter email address" class="custom-input text-white focus:outline-none mr-3">
        <a href="https://smartworking.io/" class="button button-small  px-8 py-5 font-bold rounded-xl text-white text-lg get-started-banner-home">Hire Now</a>
      </div>
      
    </div>
  </div>
  <?php $main_image = get_sub_field('main_image');
	if (!empty($main_image) && isset($main_image['url'])):
  ?>
    <div class="w-full relative">
        <img class="w-full my-12" src="<?php echo esc_url($main_image['url']); ?>" alt="">
    </div>
  <?php endif; ?>
</div>
</div>
</div>
<?php endif; ?>



<!-- Vetted Profile Section -->

<?php if (get_row_layout() == 'vetted_profile') : ?>
<section class="bg-black flex flex-col items-center justify-center py-16">
	<?php if(get_sub_field('top_title')): ?>
		<h3 class="text-center small-intro"><?php echo get_sub_field('top_title'); ?></h3>
	<?php endif; ?> 
	
    <div class="flex flex-col items-center justify-center mb-20">
	<?php if(get_sub_field('main_title')): ?>
      <h1 class="text-4xl font-bold text-[56px] mb-4 text-white"><?php echo get_sub_field('main_title'); ?></h1> 
      <span class="text-dark-orange text-[56px]"><?php echo get_sub_field('orange_title'); ?></span> 
	<?php endif; ?>  
    </div>
	
	
	<div class="container mx-auto p-4">
        <div class="flex flex-wrap -mx-2">
		
			<?php if(have_rows('vetted_box')): ?>
			<?php while(have_rows('vetted_box')): the_row(); ?>
			<?php 
			  $developer_name = get_sub_field('developer_name'); 
			  $profile = get_sub_field('profile'); 
              $experience = get_sub_field('experience'); 
              $avai = get_sub_field('avai'); 
			?> 
		
            <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
                <div class="custom-bg custom-border">
				<div class="flex items-center">
					<img src="<?php echo get_template_directory_uri();?>/images/johnauthor.svg" alt="Author" class="w-16 h-16 rounded-full mr-4">
					<div>
						<span class="text-white text-2xl font-medium block"><?php echo $developer_name;?></span>
						<span class="text-white text-sm font-normal block"><?php echo $profile;?></span>
					</div>
				</div>


				<div class="grid grid-cols-1 custom-grid-bg sm:grid-cols-2 gap-4 my-7 px-4 py-3 rounded-lg">
					<div class="flex flex-col sm:flex-row">
						<img src="<?php echo get_sub_field('image')['url']; ?>" alt="Experience 1" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
				    <div>
					 <h3 class="text-sm font-normal pb-2 text-white">Experience</h3>
					 <p class="text-white text-base font-medium"><?php echo $experience;?></p>
				    </div>
                    </div>
				  <div class="flex flex-col sm:flex-row">
					<img src="<?php echo get_template_directory_uri();?>/images/smallclock.svg" alt="Experience 2" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
					  <div>
						  <h3 class="text-sm font-normal pb-2 text-white">Available in</h3>
						  <p class="text-white text-base font-medium"><?php echo $avai;?></p>
					  </div>
				  </div>
                </div>
				<h2 class="text-sm font-medium text-white pb-10">Technologies</h2>
				    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
					 <?php if(have_rows('technology')): ?>
					 <?php while(have_rows('technology')): the_row(); ?>
					 <?php 
					  $tech_name = get_sub_field('name'); 
					 ?>
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium"><?php echo $tech_name;?></h3>
                            </div>
                            <img src="<?php echo get_sub_field('image')['url']; ?>" alt="Technology 1" class="w-4 h-4 rounded-full">
                        </div>
						
						<?php endwhile; ?>	
					<?php endif; ?> 	
                           
                    </div>
					
					 <?php if(have_rows('rate')): ?>
					 <?php while(have_rows('rate')): the_row(); ?>
					
					<div class="w-full p-4 mt-4">
						<img src="<?php echo get_sub_field('image')['url']; ?>">
					</div>

						<?php endwhile; ?>	
					<?php endif; ?>
					
					
					
					<div class="flex flex-wrap -mx-2 mt-4">
						<?php if(get_sub_field('per_hour')): ?>
							<div class="w-full md:w-1/2 px-2 mb-4">
								<p class="font-medium text-2xl text-white"><?php echo get_sub_field('per_hour'); ?></p>
							</div>
						<?php endif; ?>
                        <div class="w-full md:w-1/2 px-2 mb-4 text-right">
                            <button class="profile-button-custom">
                                View Profile
                            </button>
                        </div>
                    </div>
					
					
              </div>
            </div>
			
				<?php endwhile; ?>	
            <?php endif; ?>  
            
            
        </div>
    </div>	
		
		
</section>
<?php endif; ?> 


<!-- Top Section -->

<?php if (get_row_layout() == 'top_find_section') : ?>
<section class="bg-black flex flex-col items-center justify-center py-16">
<?php if(get_sub_field('top_title')): ?>  
  <h3 class="text-center small-intro"><?php echo get_sub_field('top_title'); ?></h3>
<?php endif; ?>
      <div class="flex flex-col items-center justify-center">
        <?php if(get_sub_field('main_title')): ?> 
          <h1 class="text-4xl font-bold text-[56px] mb-4 text-white"><?php echo get_sub_field('main_title'); ?></h1> 
          <span class="text-dark-orange text-[56px]"><?php echo get_sub_field('orange_title'); ?></span> 
        <?php endif; ?>  
      </div>

      <?php if(get_sub_field('small_paragraph')): ?> 
        <p class="mb-12 text-lg w-max gradient-paragraph rounded-full p-3 text-white"><?php echo get_sub_field('small_paragraph'); ?></p>
      <?php endif; ?>   
        <div class="flex justify-center space-x-8 relative mb-28">


        <?php if(have_rows('step_section')): ?>
					<?php while(have_rows('step_section')): the_row(); ?>
					<?php 
						$step_title = get_sub_field('step_title'); 
						$title = get_sub_field('title'); 
            $position = get_sub_field('position'); 
					?>  
             <div class="flex flex-col  items-center justify-center relative <?php echo $position;?>">
               <h2 class="text-2xl gradient-text-dev-landing self-start font-bold mb-4"><?php echo $step_title;?></h2>
               <div class="bg-gray-800 min-w-[405px] gradient-bg p-4 min-h-[550px] rounded-lg w-80">
               <img class="mb-3" src="<?php echo get_sub_field('icon')['url']; ?>" alt="" />
                   <h3 class="text-[24px] font-semibold mb-2 text-white"><?php echo $title;?></h3>
                   <p class="mb-4 text-[16px] text-white"><?php echo get_sub_field('small_paragraph'); ?></p>
                   <img class="pl-14"  src="<?php echo get_sub_field('image')['url']; ?>" alt="">
               </div>
             </div>
            
              <?php endwhile; ?>	
            <?php endif; ?>  
           
             </div>

        <div class="mt-12">
            <button class="bg-dark-orange text-white px-6 py-3 rounded-lg text-lg">Hire Now</button>
        </div>
    </section>


    <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>   

 

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

<?php
    endwhile;
  else :
  ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php
  endif;
  ?>

<?php get_footer();?>