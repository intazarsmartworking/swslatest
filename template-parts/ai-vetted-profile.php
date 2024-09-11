<div class="w-full relative grid items-center py-16">
	<div class="container mx-auto md:px-0 px-10">
	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'ai_vetted_section') : ?>	
	<?php if(get_sub_field('small_title')): ?>	
	  <h4 class="text-center small-intro"> <?php echo get_sub_field('small_title'); ?> </h4>
	<?php endif; ?> 
	  
	<?php if(get_sub_field('main_heading')): ?>	  
	  <h2 class=" text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0 md:px-96 md:leading-tight"><?php echo get_sub_field('main_heading'); ?></h2>
	<?php endif; ?> 

	<?php if(get_sub_field('subheading')): ?>	
	  <p class="text-center text-white font-medium text-[16px] md:text-2xl pt-[10px]"> <?php echo get_sub_field('subheading'); ?> </p>
	<?php endif; ?> 

	<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>  
	  <div class="grid md:flex md:flex-wrap items-start mt-10">
		<div class="md:w-[25%] px-6">
			<?php display_ai_vetted_profile_categories();?>
		</div>
		<div class="md:w-[75%] p-3 border rounded-lg border-[#a962444d]">

			
	

			<div class="slide-show grid grid-cols-1 max-w-[100%]" >
						<div class="dev-section">
						<!-- Posts will be loaded here via AJAX -->	
						</div> 
			</div>
			 
		</div>
	  </div>
	</div>
</div>