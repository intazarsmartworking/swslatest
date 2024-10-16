<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sws
 */

?>

<div class="w-full relative grid items-center footer-background pt-20">
  <div class="container mx-auto md:px-0 px-10 pt-12 pb-12">
    <div class="grid flex md:grid-cols-4 gap-6">
      <div>
        <?php if(get_field('footer_logo', 'options')): ?>
        <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
          <img src="<?php echo get_field('footer_logo', 'options')['url']; ?>" alt="<?php echo get_field('footer_logo', 'options')['alt']; ?>" class="w-64">
        </a>  
        <?php endif; ?>
        <?php if(get_field('button_name', 'options')): ?>
        <div class="header-buttons mt-16 mb-20">
        <?php
         $unlock_btn_url = get_field('button_link', 'options');
        ?>
          <a href="<?php echo esc_url( $unlock_btn_url ); ?>" class="button inline-block button-small rounded-md px-[10px] md:px-[20px] py-[10px] border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange"><?php echo get_field('button_name', 'options'); ?></a>
        </div>
        <?php endif; ?>
        
      </div>
      <div class="text-left">
        <h6 class="text-white text-xl font-medium leading-normal"> Menu </h6>
        <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'container'      => 'ul',
                'menu_class'     => 'pt-7', 
                'depth'          => 1,
                'walker'         => new Custom_Walker_Nav_Menu()
            ));
        ?>
        
      </div>
      <div>
        <h6 class="text-white text-xl font-medium leading-normal"> Our Location </h6>
        <div class="pb-7 pt-5" id="findAdress">
          
        </div>
        
      </div>
      <div>
        <h6 class="text-white text-xl font-medium leading-normal"> Contact Details </h6>
        <div class="pb-7 pt-5">
          <h6 class="text-footer-menu-color text-base font-medium leading-normal"> Email </h6>
          <p class="text-footer-menu-color text-sm leading-tight"> <?php echo get_field('email_footer', 'options'); ?> </p>
        </div>
        <div class="pb-7">
          <h6 class="text-footer-menu-color text-base font-medium leading-normal"> Phone </h6>
          <p class="text-footer-menu-color text-sm leading-tight"> <?php echo get_field('phone_footer', 'options'); ?> </p>
        </div>
      </div>
    </div>
    <div class="grid flex md:grid-cols-3 gap-4 pt-10 pb-10">
      <div>
	  	<p class="text-footer-menu-color text-sm"><?php echo get_field('copy_right_text', 'options'); ?> </p>
        
      </div>
      <div>
	  	<div>
			<div class="flex gap-4 justify-center items-center">
        <?php
         $fb_url = get_field('facebook_link', 'options');
         $tw_url = get_field('twitter_link', 'options');
         $insta_url = get_field('instagram_link', 'options');
         $linkedin_url = get_field('linkedin_link', 'options');
        ?>
        <a href="<?php echo esc_url( $linkedin_url );  ?>"><img class="w-5 h-5" src="<?php echo get_template_directory_uri();?>/images/linkedin-icon.svg"> </a>
				
				
			</div>
		</div>
	    
      </div>

	  <div>
	    <div class="flex gap-4 justify-center items-center">
      <?php
         $btn1_url = get_field('button_1_url', 'options');
         $btn2_url = get_field('button_2_url', 'options');
      ?> 
      <?php if(get_field('button_1_name', 'options')): ?> 
			  <a href="<?php echo esc_url( $btn1_url ); ?>"> <p class="text-footer-menu-color text-base font-regular leading-normal"> <?php echo get_field('button_1_name', 'options'); ?> </p> </a>
      <?php endif; ?>

      <?php if(get_field('button_2_name', 'options')): ?>
			  <a href="<?php echo esc_url( $btn2_url ); ?>"> <p class="text-footer-menu-color text-base font-regular leading-normal"> <?php echo get_field('button_2_name', 'options'); ?> </p> </a>
		  <?php endif; ?>
    </div>
      </div>
    </div>
  </div>
</div>
	
  <span class=" w-[40px] h-[40px] fixed right-[50px] bottom-[30px] bg-[#ff4d04] block rounded-full z-[999] text-center cursor-pointer text-[20px] pt-[5px] font-bold text-[#fff]" id="top-scroll">&#8593;</span>

<?php wp_footer(); ?>

</body>
</html>
