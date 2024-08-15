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


<div class="w-full h-[100%]" id="boll-scroll">
    <?php if (have_rows('vetting_process')) : ?>
    <?php while (have_rows('vetting_process')) : the_row(); ?>
        <?php if (get_row_layout() == 'top_section') : ?>
            <section class="w-[100%] md:min-h-[300px] py-[3rem] lg:py-[4rem] bg-vp"  style="background-image: url('<?php echo get_template_directory_uri();?>/images/bg-vp.png');">
                <div class="max-w-[600px] relative mx-auto text-center">
                <?php if(get_sub_field('main_title')): ?>
                    <h1 class="text-white text-[25px] lg:text-[56px] font-medium mb-0"> <?php echo get_sub_field('main_title'); ?> </h1>
                <?php endif; ?>	
                
                <?php if(get_sub_field('orange_title')): ?>
                    <h1 class="text-[#FF4D02] text-[25px] lg:text-[56px] font-medium "> <?php echo get_sub_field('orange_title'); ?> </h1>
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
        <!-- <div class="w-[20px] left-[50%] top-0 h-[100%] absolute bg-red-300 " id="track">
            <img id="element" class="w-[30px] bg-[#fff]" src="<?php echo get_template_directory_uri();?>/images/sqr-circule.png">
            
        </div> -->
            <?php if (have_rows('vetting_process')) : ?>
            <?php while (have_rows('vetting_process')) : the_row(); ?>
            <?php if (get_row_layout() == 'step_section') : ?>
            
            <?php if(have_rows('step_part')): ?>
            <?php while(have_rows('step_part')): the_row(); ?>
            <?php 
                $step_tagline = get_sub_field('step_tagline'); 
                $main_title = get_sub_field('main_title'); 
                $class_name = get_sub_field('class_name'); 
                
                // Determine if the row index is odd or even
                $row_index = get_row_index();
                $is_odd = $row_index % 2 !== 0;

                // Define classes based on the row index
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
                    <h1 class="text-[26px] lg:text-[36px] text-[#FF4D02] font-medium mb-4"><?php echo $main_title;?></h1>
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
                
                <div class="grid-item col-span-5 content-start lg:pl-[60px]">
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
                        <h1 class="text-[26px] lg:text-[36px] text-[#FF4D02] font-medium mb-4"><?php echo $main_title; ?></h1>
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
                <!-- <svg class="<?php echo $img_inline_class;?>" xmlns="http://www.w3.org/2000/svg" width="577" height="190" viewBox="0 0 577 190" fill="none">
                    <path d="M576 0V55C576 77.0914 558.091 95 536 95H41C18.9086 95 1 112.909 1 135V190" stroke="url(#paint0_linear_1535_1839)"/>
                    <defs>
                        <linearGradient id="paint0_linear_1535_1839" x1="0.999996" y1="190" x2="576" y2="3.70274e-06" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#D0511B" stop-opacity="0.1"/>
                        <stop offset="0.296676" stop-color="#D0511B"/>
                        <stop offset="0.701861" stop-color="#D0511B"/>
                        <stop offset="1" stop-color="#D0511B" stop-opacity="0.1"/>
                        </linearGradient>
                    </defs>
                    
                </svg> -->
                <!-- <img  src="<?php echo get_template_directory_uri();?>/images/path-line.png"> -->
            </div>
            
            <?php endwhile; ?>	
            <?php endif; ?> 
            
            

            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            

            <div class="block w-[100%] text-center">
                <a class="w-[300px] inline-block text-white text-[16px] font-bold h-[50px] py-3 text-center rounded-[12px] get-started-banner-home" href="">Get Started</a>
            </div>



        </div>
        <img class="absolute right-[9%] bottom-[100px] w-[300px] z-0 rotate-[-30deg]" src="<?php echo get_template_directory_uri();?>/images/sqr-circule.png">
    </section>

   


    <section class="calculator-box w-[100%] mt-[50px]">
        <div class="inner-box grid grid-cols-1 lg:grid-cols-10 rounded-[60px] max-w-[90%] min-h-[350px] mx-auto px-[10%]">
                <div class="grid-item col-span-5 py-[10%]">
                    <div class="block mb-5"><span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " >Calculator</span></div>
                    <h1 class="text-[26px] lg:text-[36px] text-[#ffff] lg:leading-[30px] font-medium mb-4">Curious About</h1>
                    <h1 class="text-[26px] lg:text-[36px] text-[#FF4D02] lg:leading-[30px] font-medium mb-4">Cost?</h1>
                    <p class="text-white text-[15px] mb-[30px] lg:text-[24px] font-medium">Find out the price of your next remote hire here.</p>
                    <p><a class="w-[300px] inline-block text-white text-[16px] font-bold h-[50px] py-3 text-center rounded-[12px] get-started-banner-home">Click to calculate now</a></p>
                </div>
                <div class="grid-item col-span-5 relative py-[10%]">
                        
                        <div class="max-w-md relative z-10 rounded-3xl min-h-[300px] bg-white overflow-hidden shadow-lg mx-auto">
                            <div class="px-6 py-4">
                                <div class="block">
                                    <p class="text-[24px] text-[#64748b]">Hourly rate</p>
                                </div>
                                <div class="block">
                                    <p class="text-[54px] font-[500] ">$20/hr</p>
                                </div>
                                <div class="block w-100 mt-3 h-[110px] border-b border-gray-400">
                                    <div class="sliderwrap">
                                        <label class="vote">
                                            <div class="progress" id="progress" style="width: 37%;"></div>
                                            <input class="range" id="range" type="range" max="100" value="60">
                                        </label>
                                    </div>
                                </div>
                                <div class="block pt-5">
                                    <div class="flex">
                                        <div class="grow">
                                            <span class="text-[18px] font-[400] text-gray-500 ">Amount save</span>
                                        </div>
                                        <div class="grow text-end">
                                            <span id="price-value" class="text-[24px] font-[500] text-black">$ 740</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img class="calculater-bg absolute left-0 bottom-0 w-[100%] z-[0]" src="<?php echo get_template_directory_uri();?>/images/calculater-bg.png">
                    
                </div>
        </div>
    </section>


    <section class="w-[100%] min-h-[600px] py-[4rem] lg:py-[10rem]">
        <div class="max-w-[600px] relative mx-auto text-center">
        <div class="block mb-5"><span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " >Clients</span></div>
            <h1 class="text-white text-[25px] lg:text-[56px] font-medium mb-0">Trusted by</h1>
            <h1 class="text-[#FF4D02] text-[25px] lg:text-[56px] font-medium ">100+ of Organizations</h1>
        </div>
        <div class="w-[100%] px-[15px] md:px-[10%] mt-[50px]">
            <div class="logo-slider">
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
                <div class="slide-item"><img src="<?php echo get_template_directory_uri();?>/images/cleint-logg.png" /> </div>
            </div>
        </div>
    </section>



    <section class="w-[100%] px-[5%] mb-[60px]">
        <div class="relative grid grid-cols-1 lg:grid-cols-2 content-center gap-0 rounded-[24px] vetting-bg py-[32px] px-[10%]">
            <img class="absolute h-[100%] w-[50%] right-[0px] top-[0px]" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png" />
            <div class="pt-[60px]">
                <h1 class=" text-white text-[32px] lg:text-[62px] lg:leading-[62px]">Check Our Vetting Process Now</h1>
                <p class=" text-white text-[16px] lg:text-[24px] lg:mt-[30px] mb-[30px]"> How we make sure which candidate would be able to add values to your projects?</p>
                
                <a class="w-[150px] h-[40px] bg-white rounded-[10px] px-[15px] py-[8px] text-[18px] text-[#FF4D02] "> Check Now </a>
            </div>
            
            <div class="text-end pt-[40px] lg:pt-[0px]">
                <img class="inline-block w-[100%] max-w-[500px]" src="<?php echo get_template_directory_uri();?>/images/about-bottom-img.png" />
            </div>
            
        </div>
    </section>


</div>



<script type="text/javascript">
    jQuery(window).bind("load", function() {
		loadAnimation()
	});
</script>

<?php get_footer();?>