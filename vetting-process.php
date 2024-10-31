<?php
/**
 * Template Name: Vetting Process Page
 *
 * @package sws
 */

 get_header();
?>

<!-- <div id="wrapper">
  <div id="circle"></div>
</div> -->
<div class=" w-full relative">
  	<img class="bg-img absolute w-[100%] max-w-[initial] opacity-[1] left-[0] z-0 top-[-8%]" src="<?php echo get_template_directory_uri();?>/images/vetting-process-bg.svg" alt="">
  	<div class=" w-full relative z-10">

        <div class="w-full h-[100%]" id="boll-scroll">
            <?php if (have_rows('vetting_process')) : ?>
            <?php while (have_rows('vetting_process')) : the_row(); ?>
                <?php if (get_row_layout() == 'top_section') : ?>
                    <section class="w-[100%] md:min-h-[300px] py-[3rem] lg:py-[4rem] bg-vp">
                        <div class="max-w-[600px] relative mx-auto text-center">
                        <?php if(get_sub_field('main_title')): ?>
                            <h1 class="text-white text-[25px] lg:text-[56px] font-medium mb-0"> <?php echo get_sub_field('main_title'); ?> </h1>
                        <?php endif; ?>	
                        
                        <?php if(get_sub_field('orange_title')): ?>
                            <h5 class="text-[#FF4D02] text-[25px] lg:text-[56px] font-medium "> <?php echo get_sub_field('orange_title'); ?> </h5>
                        <?php endif; ?>
                        
                            <?php if(get_sub_field('paragraph')): ?>
                            <p class="text-white text-[15px] lg:text-[24px] font-medium"> <?php echo get_sub_field('paragraph'); ?> </p>
                            <?php endif; ?>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>	

            <section class="w-[100%] relative vetting-step-section">
                <div class="w-[100%] relative z-10 vetting-step-section-inner max-w-[1375px] mx-auto p-3 lg:px-[60px] lg:py-[80px]">
                <?php if (have_rows('vetting_process')) : ?>
                    <?php while (have_rows('vetting_process')) : the_row(); ?>
                    <?php if (get_row_layout() == 'step_section') : ?>
                    
                    <?php if(have_rows('step_part')): ?>
                    <?php while(have_rows('step_part')): the_row(); ?>
                    <?php 
                        $step_tagline = get_sub_field('step_tagline'); 
                        $main_title = get_sub_field('main_title'); 
                        $class_name = get_sub_field('class_name'); 
                        
                        $row_index = get_row_index();
                        $is_odd = $row_index % 2 !== 0;

                        if ($is_odd) {
                            $first_column_class = 'lg:pr-[60px]';
                            $second_column_class = 'content-end';
                            $img_inline_class = 'inline-block';
                        } else {
                            $first_column_class = 'content-start';
                            $second_column_class = 'lg:pl-[60px]';
                            $img_inline_class = 'inline-block flip-img';
                        }
                    ?> 
                    
                    <div class="grid grid-cols-1 lg:grid-cols-10">
                        <div class="grid-item col-span-5 <?php echo $is_odd ? $first_column_class : $second_column_class; ?>">
                        <?php if ($is_odd): ?>
                            <div class="block mb-5"><span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " ><?php echo $step_tagline;?></span></div>
                            <h5 class="text-[26px] lg:text-[36px] text-[#FF4D02] font-medium mb-4"><?php echo $main_title;?></h5>
                            <ul class="section-dicription">
                            <?php if(have_rows('list_item')): ?>
                            <?php while(have_rows('list_item')): the_row(); ?>
                            <?php 
                                $item = get_sub_field('item'); 
                            ?>
                                <li> <?php echo $item;?> </li>
                            <?php endwhile; ?>	
                            <?php endif; ?> 	
                            </ul>
                        <?php else: ?>	
                            <div class="w-[100%] ml-auto content-center text-center h-[400px] rounded-[12px] border border-[#401A0A] bg-[#1F0C04]">
                                <img class=" inline-block" src="<?php echo get_sub_field('main_image')['url']; ?>">
                            </div>
                        <?php endif; ?>	
                        </div>
                        
                        <div class="grid-item col-span-5 content-start lg:pl-[60px] pt-5 md:pt-0">
                            <?php if ($is_odd): ?>
                                <div class="w-[100%] ml-auto content-center text-center h-[400px] rounded-[12px] border border-[#401A0A] bg-[#1F0C04]">
                                    <img class="inline-block" src="<?php echo get_sub_field('main_image')['url']; ?>">
                                </div>
                            <?php else: ?>
                                <div class="block mb-5">
                                    <span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem]">
                                        <?php echo $step_tagline; ?>
                                    </span>
                                </div>
                                <h5 class="text-[26px] lg:text-[36px] text-[#FF4D02] font-medium mb-4"><?php echo $main_title; ?></h5>
                                <ul class="section-dicription">
                                    <?php if(have_rows('list_item')): ?>
                                        <?php while(have_rows('list_item')): the_row(); ?>
                                            <li><?php echo get_sub_field('item'); ?></li>
                                        <?php endwhile; ?>
                                    <?php endif; ?> 
                                </ul>
                            <?php endif; ?>
                        </div>
                        
                    </div>

                    <div class="path-box w-[100%] h-[190px] text-center">
                        <div class="vetting-path <?php echo $img_inline_class;?>" style="mask-image: url('<?php echo get_template_directory_uri();?>/images/path-line.png')">
                            <div class="vetting_img"></div>
                        </div>
                    </div>
                    
                    <?php endwhile; ?>	
                    <?php endif; ?> 
                    
                    

                    <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    

                    <div class="block w-[100%] text-center">
                        <div class="mx-auto w-[100%] max-w-[250px] mb-7 relative">
                            <div class="w-[100%] absolute z-2 left-[1rem] top-[38px]">
                                <div class="w-[50px] h-[50px] inline-block rounded-full border border-[#fff] overflow-hidden">
                                    <img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/2023-1.png">
                                </div>
                                <div class="w-[50px] h-[50px] inline-block rounded-full border border-[#fff] relative left-[-20px] overflow-hidden">
                                    <img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/2023-2.png">
                                </div>
                                <div class="w-[50px] h-[50px] inline-block rounded-full text-white text-[13px] text-center pt-[14px] bg-[#000] border border-[#fff] relative left-[-40px] overflow-hidden">
                                    50+
                                </div>
                            </div>
                            <img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/vetting-bottom.svg">
                        </div>

                        <a class="w-[300px] button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange " href="/find-a-developer/">HIRE TOP 1% ENGINEERS</a>
                    </div>



                </div>
                <img class="absolute right-[9%] bottom-[100px] w-[300px] z-0 rotate-[-30deg]" src="<?php echo get_template_directory_uri();?>/images/sqr-circule.png">
            </section>

        <!-- Curios Section  -->
        <?php if (have_rows('block')) : ?>
            <?php while (have_rows('block')) : the_row(); ?>
        <?php if (get_row_layout() == 'curious_section') : ?>

            <section class="calculator-box w-[100%] mt-[50px]">
                <div class="inner-box grid grid-cols-1 lg:grid-cols-10 content-center rounded-[60px] max-w-[90%] min-h-[350px] mx-auto px-[10%]">
                        <div class="grid-item col-span-5 py-[10%] lg:py-[100px]">
                            <div class="block mb-5">
                                    <?php if(get_sub_field('small_title')): ?>
                                        <span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " ><?php echo get_sub_field('small_title'); ?></span>
                                    
                                    <?php endif; ?>
                                
                            </div>
                            <?php if(get_sub_field('main_heading')): ?>	
                                <h5 class="text-[26px] lg:text-[36px] text-[#ffff] lg:leading-[30px] font-medium mb-4"><?php echo get_sub_field('main_heading'); ?></h5>
                            <?php endif; ?>
                            <p class="text-white text-[15px] mb-[30px] lg:text-[24px] font-medium"><?php echo get_sub_field('subheading'); ?></p>
                            <?php if(get_sub_field('button_name')): ?>
                                <?php $calc_url =  get_sub_field('button_url'); ?>
                                <p class="mt-6">
                                    <a href="<?php echo esc_url( $calc_url ); ?>" class="w-[300px] text-center button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange "><?php echo get_sub_field('button_name'); ?></a>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="grid-item col-span-5 content-end relative py-[10%] lg:py-[100px]">
							<div class=" w-[100%] max-w-[450px] min-h-[400px] bg-[#ff4d04] p-[15px] md:p-[30px] rounded-[40px] relative overflow-hidden ml-auto">
								<p class="text-[30px] font-semibold text-[#fff]"> <?php echo get_sub_field('hourly_rate_title'); ?></p>
								<p class="text-[50px] font-bold text-[#fff]"><?php echo get_sub_field('amount'); ?></p>
								<p class="text-[50px] font-bold text-[#fff] leading-[40px]"><span class="text-[20px] inline-block align-bottom leading-[25px]">to</span><?php echo get_sub_field('amount_save_title'); ?>  <span class="text-[20px] inline-block align-bottom leading-[25px]"> £/yearly</span></p>
								<p class="text-[20px] text-[#fff] mt-[20px]"><?php echo get_sub_field('equivalent_text'); ?></p>
								<div class="w-[100%] absolute h-[110px] bg-[rgba(255,255,255,0.4)] left-0 bottom-0 p-[20px] md:px-[30px]">
									<p class="text-[20px] text-[#fff]"><?php echo get_sub_field('save_text'); ?></p>
									<p class="text-[13px] text-[#fff]"><?php echo get_sub_field('expense_include'); ?></p>
								</div>
							</div>
						</div>
                </div>
            </section>

        <?php endif; ?> 
        <?php endwhile; ?>
        <?php endif; ?>  

        <?php if (have_rows('vetting_process')) : ?>
        <?php while (have_rows('vetting_process')) : the_row(); ?>
        <?php if (get_row_layout() == 'client_section') : ?>
            <section class="w-[100%] min-h-[600px] py-[4rem] lg:py-[10rem]">
                <div class="max-w-[600px] relative mx-auto text-center">
                <?php if(get_sub_field('top_title')): ?>
                <div class="block mb-5"><span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " ><?php echo get_sub_field('top_title'); ?></span></div>
                <?php endif; ?>

                <?php if(get_sub_field('main_title')): ?>
                <h5 class="text-white text-[25px] lg:text-[56px] font-medium mb-0"><?php echo get_sub_field('main_title'); ?></h5>
                <?php endif; ?>
                
                <?php if(get_sub_field('orange_title')): ?>
                <h5 class="text-[#FF4D02] text-[25px] lg:text-[56px] font-medium "><?php echo get_sub_field('orange_title'); ?></h5>
                <?php endif; ?>
                
                </div>
                <div class="w-[100%] px-[15px] md:px-[10%] mt-[50px]">
                    <div class="logo-slider">
                    <?php if(have_rows('clients')): ?>
                    <?php while(have_rows('clients')): the_row(); ?>
                        <div class="slide-item"><img src="<?php echo get_sub_field('client_image')['url']; ?>" /> </div>
                    <?php endwhile; ?>	
                    <?php endif; ?> 	
                    </div>
                </div>
            </section>
        <?php endif; ?>


        <?php if (get_row_layout() == 'cta_section') : ?>
            <section class="w-[100%] px-[5%] mb-[60px]">
                <div class="relative grid grid-cols-1 lg:grid-cols-2 content-center gap-0 rounded-[24px] vetting-bg py-[32px] px-[10%]">
                    <img class="absolute h-[100%] w-[50%] right-[0px] top-[0px]" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png" />
                    <div class="pt-[60px]">
                    <?php if(get_sub_field('heading')): ?>
                        <h5 class=" text-white text-[32px] lg:text-[45px] lg:leading-[45px]"><?php echo get_sub_field('heading'); ?> </h5>
                    <?php endif; ?>
                    
                    <?php if(get_sub_field('description')): ?>
                        <p class=" text-white text-[16px] lg:text-[24px] lg:mt-[30px] mb-[30px]"> <?php echo get_sub_field('description'); ?> </p>
                    <?php endif; ?>    
                    
                    <?php if(get_sub_field('button_name')): ?>
                    <?php $hire_dev_btn_url =  get_sub_field('button_url'); ?> 
                        <a href="<?php echo esc_url( $hire_dev_btn_url ); ?>" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] text-dark-orange text-lg bg-white hover:bg-black hover:text-white"> <?php echo get_sub_field('button_name'); ?> </a>
                    <?php endif; ?>		
                    </div>
                    
                    <?php $hire_dev_main_img = get_sub_field('right_image');
                        if (!empty($hire_dev_main_img) && isset($hire_dev_main_img['url'])):
                    ?>
                    <div class="text-end pt-[40px] lg:pt-[0px]">
                        <img class="inline-block w-[100%] max-w-[500px]" src="<?php echo esc_url($hire_dev_main_img['url']); ?>" alt="<?php echo esc_attr($hire_dev_main_img['alt']); ?>" />
                    </div>
                    <?php endif; ?>
                    
                </div>
            </section>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>

        </div>

    </div>
</div>



<script type="text/javascript">
    jQuery(window).bind("load", function() {
		loadAnimation()
	});
</script>

<?php get_footer();?>