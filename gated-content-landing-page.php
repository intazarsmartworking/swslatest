<?php
/**
 * Template Name: Gated Content Landing Page
 *
 * @package sws
 */

 get_header();
?>
<section class="w-full py-16">
    <img class="bg-img absolute w-[100%] right-[0] z-0 top-[-1100px]" src="<?php echo get_template_directory_uri();?>/images/bg-left.svg" alt="">
    <div class="w-full relative z-10">
	<?php if (have_rows('gated_section')) : ?>
	<?php while (have_rows('gated_section')) : the_row(); ?>
	<?php if (get_row_layout() == 'banner_section') : ?>
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-10 gap-4 mb-10">
                    <div class="grid-item col-span-5">
					<?php if(get_sub_field('small_heading')): ?>
                        <div class="text-left small-intro !ml-0"> <?php echo get_sub_field('small_heading'); ?> </div>
					<?php endif; ?>	

					<?php if(get_sub_field('main_heading')): ?>	
                        <h1 class="text-[26px] lg:text-[56px] font-medium text-white lg:leading-tight"> <?php echo get_sub_field('main_heading'); ?> <br>
                            <span class="gradient-text"> <?php echo get_sub_field('gradient_heading'); ?> </span> <br>
                            <span class="text-dark-orange"> <?php echo get_sub_field('orange_heading'); ?> </span>
                        </h1>
					<?php endif; ?>	
                        <ul class="text-[#fff] text-[18px] mt-[40px]">
						<?php if(have_rows('list_item')): ?>
						<?php while(have_rows('list_item')): the_row(); ?>
						<?php 
						  $points = get_sub_field('points'); 
						?>
                            <li><?php echo $points;?></li>
						<?php endwhile; ?>	
						<?php endif; ?>	
                        </ul>
                    </div>
                    <div class="grid-item col-span-5">
					<?php if(get_sub_field('right_side_image')): ?>
                        <div class=" w-[100%] ml-auto max-w-[460px] bg-[#1F0C04] rounded-[30px] px-[35px] pt-[35px] border border-[#401A0A]">
                            <img class=" w-[100%] max-w-[100%] h-auto" src="<?php echo get_sub_field('right_side_image')['url']; ?>" />
                        </div>
					<?php endif; ?>	
                    </div>
            </div>
        </div>
		<?php endif; ?>
		
		<?php if (get_row_layout() == 'main_section') : ?>
        <div class="container mx-auto mt-6 md:mt-[100px]">
            <div class="grid grid-cols-1 md:grid-cols-10 gap-2 md:gap-6 p-3 md:p-[80px] bg-[#1F0C04] border border-[#401A0A] rounded-[30px]">
                    <div class="grid-item col-span-6">
                    <?php if(have_rows('text_part')): ?>
					<?php while(have_rows('text_part')): the_row(); ?>
					<?php 
					  $paragraph = get_sub_field('paragraph'); 
					?>

                    <p class="text-white text-[20px] mb-10"><?php echo $paragraph;?></p>
					
					<?php endwhile; ?>	
					<?php endif; ?>	
                    </div>
                    <div class="grid-item col-span-4">
                        <div class=" w-[100%] ml-auto max-w-[480px] bg-[#fff] rounded-[20px] p-[10px] border border-[#fff]">
                        <?php //echo do_shortcode('[contact-form-7 id="df3904d" title="Gated Form"]');?>
                            <?php 
										$form_shortcode = get_sub_field('form_shortcode');
										echo do_shortcode($form_shortcode);
										?>
                        </div>
                    </div>
            </div>
        </div>
	<?php endif; ?>		
	<?php endwhile; ?>	
	<?php endif; ?>
    </div>
</section>
<?php get_footer();?>