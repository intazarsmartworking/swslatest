<?php if (have_rows('block')) : ?>
<?php while (have_rows('block')) : the_row(); ?>
<?php if (get_row_layout() == 'ai_vetted_section') : ?>	
	<div class="block mb-[2.5rem]">
	 <?php if(get_sub_field('main_heading')): ?>	
		<h2 class="text-[2.25rem] font-[700] text-center text-[#1E1E1E] mb-[0.5rem]"><?php echo get_sub_field('main_heading'); ?></h2>
	 <?php endif; ?>

	<?php if(get_sub_field('subheading')): ?>	
		<p class="text-[1.25rem] font-[400] text-center text-[#4B4B4B] mb-[0.5rem]"><?php echo get_sub_field('subheading'); ?></p>
	<?php endif; ?>
	</div>
<?php endif; ?>	
<?php endwhile; ?>
<?php endif; ?> 
<div class="block">
	<?php display_ai_vetted_profile_categories_new_design();?>
</div>
<div class="block">
	<div class="hero-slider-box mt-10">
		<div class="vetted-tech-experts">
		  <!-- Posts will be loaded here via AJAX -->		
		</div>
	</div>
</div>