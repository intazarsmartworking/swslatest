<?php if (have_rows('block')) : ?>
<?php while (have_rows('block')) : the_row(); ?>
<?php if (get_row_layout() == 'review_section') : ?>
<div class="w-full relative grid items-center pb-28">
    <div class="container mx-auto md:px-0 px-10">
	
        <?php if(get_sub_field('top_title')): ?>
        <h3 class="text-center small-intro"> <?php echo get_sub_field('top_title'); ?> </h3>
		<?php endif; ?>
		
		<?php if(get_sub_field('first_title')): ?>
        <div class="text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-[58px] font-medium text-white">
		 <span class="mr-[10px]"><?php echo get_sub_field('first_title'); ?></span>
		 <?php $title_image = get_sub_field('title_image');
		  if (!empty($title_image) && isset($title_image['url'])):
		 ?>
		 
		 <img  src="<?php echo esc_url($title_image['url']); ?>" alt="<?php echo esc_url($title_image['alt']); ?>"/> 
		 <?php endif; ?>
		 <span class="ml-[10px]"><?php echo get_sub_field('second_title'); ?></span> 
		</div>
		<?php endif; ?>
		
		<?php if(get_sub_field('description')): ?>
        <h3 class="text-white text-2xl font-normal text-center py-6 px-0 "> <?php echo get_sub_field('description'); ?> </h3>
		<?php endif; ?>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-14">
		
		<?php if(have_rows('review_box')): ?>
		<?php while(have_rows('review_box')): the_row(); ?>
		<?php 
			$name = get_sub_field('name'); 
			$description = get_sub_field('description'); 
		?>
        <div class="trustpilot-bg mb-5">
		  <div class="flex">
		  
			  <?php $auth_image = get_sub_field('image');
				  if (!empty($auth_image) && isset($auth_image['url'])):
			  ?>	
			  <div class="pr-4">
				<img class="mb-7 w-48" src="<?php echo esc_url($auth_image['url']); ?>" alt="<?php echo esc_url($auth_image['alt']); ?>">
			  </div>
			  <?php endif; ?>
			  <div>
				<p class="font-bold text-base text-white"> <?php echo $name;?> </p>
				<p class="text-sm pt-5 pilot-descri"> <?php echo $description;?> </p>
			  </div>
		 </div>
		</div>
		<?php endwhile; ?>	
		<?php endif; ?> 

		
		</div>
		
		<?php if(get_sub_field('button_name')): ?>
		<div class="header-buttons mt-12 text-center">
		  <a href="<?php echo get_sub_field('button_link'); ?>" class="button button-small  px-8 py-4 font-bold rounded-xl text-white text-lg get-started-banner-home"><?php echo get_sub_field('button_name'); ?></a>
		</div>
		<?php endif; ?> 

    </div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>