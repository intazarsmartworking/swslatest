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

<div class="w-full relative bg-dark-black grid items-center">
  <div class="container mx-auto md:px-0 px-10 pt-12 pb-12">
    <div class="grid flex md:grid-cols-4 gap-6">
      <div>
        <img src="<?php echo get_template_directory_uri();?>/images/logo-gray.svg');?>" alt="" class="w-40">
        <div class="header-buttons mt-16 mb-20">
          <a href="https://smartworking.io/" class="button button-small  px-8 py-4 font-bold rounded-xl text-white text-lg get-started-banner-home">Unlock Your Free Search</a>
        </div>
        
      </div>
      <div class="text-left md:text-center">
        <h3 class="text-white text-xl font-medium leading-normal"> Menu </h3>
        <ul class="pt-7">
          <li class="mb-2  text-sm leading-10">
            <a href="" class="text-footer-menu-color"> Home </a>
          </li>
          <li class="mb-2  text-sm leading-10">
            <a href="" class="text-footer-menu-color"> Services </a>
          </li>
          <li class="mb-2  text-sm leading-10">
            <a href="" class="text-footer-menu-color"> About us </a>
          </li>
          <li class="mb-2  text-sm leading-10">
            <a href="" class="text-footer-menu-color"> Candidates </a>
          </li>
          <li class="mb-2  text-sm leading-10">
            <a href="" class="text-footer-menu-color"> Testimonials </a>
          </li>
          <li class="mb-2  text-sm leading-10">
            <a href="" class="text-footer-menu-color"> Contact us </a>
          </li>
        </ul>
      </div>
      <div>
        <h3 class="text-white text-xl font-medium leading-normal"> Our Locations </h3>
        <div class="pb-7 pt-5">
          <h4 class="text-footer-menu-color text-base font-medium leading-normal"> United Kingdiom </h4>
          <p class="text-footer-menu-color text-sm leading-normal"> The Plaza, 535 King’s Rd, London <br> SW10 0SZ </p>
        </div>
        <div class="pb-7">
          <h4 class="text-footer-menu-color text-base font-medium leading-normal"> India </h4>
          <p class="text-footer-menu-color text-sm leading-normal"> C Block Community Centre, Plot No. 6, Upper Ground Floor, Delhi, 110058 </p>
        </div>
      </div>
      <div>
        <h3 class="text-white text-xl font-medium leading-normal"> Contact Details </h3>
        <div class="pb-7 pt-5">
          <h4 class="text-footer-menu-color text-base font-medium leading-normal"> Email </h4>
          <p class="text-footer-menu-color text-sm leading-tight"> info@smartworking.io <br> Oli@smartworking.io </p>
        </div>
        <div class="pb-7">
          <h4 class="text-footer-menu-color text-base font-medium leading-normal"> Phone </h4>
          <p class="text-footer-menu-color text-sm leading-tight"> 0 1344 636399 (UK) <br> +1 929 362 6005 (US) <br> +49 1573 5995642 (DE) </p>
        </div>
      </div>
    </div>
    <div class="grid flex md:grid-cols-3 gap-4 pt-10 pb-10">
      <div>
	  	<p class="text-footer-menu-color text-sm">© 2024 All rights reserved by Smart Working. </p>
        
      </div>
      <div>
	  	<div>
			<div class="flex gap-4 justify-center items-center">
				<img class="w-5 h-5" src="<?php echo get_template_directory_uri();?>/images/fb-icon.svg');?>" alt="">
				<img class="w-5 h-5" src="<?php echo get_template_directory_uri();?>/images/twitter-icon.svg');?>" alt="">
				<img class="w-5 h-5" src="<?php echo get_template_directory_uri();?>/images/instagram-icon.svg');?>" alt="">
				<img class="w-5 h-5" src="<?php echo get_template_directory_uri();?>/images/linkedin-icon.svg');?>" alt="">
			</div>
		</div>
	    
      </div>

	  <div>
	    <div class="flex gap-4 justify-center items-center">
			<a href=""> <p class="text-footer-menu-color text-base font-regular leading-normal"> Privacy Policy </p> </a>
			<a href=""> <p class="text-footer-menu-color text-base font-regular leading-normal"> Terms of Use </p> </a>
		</div>
      </div>
    </div>
  </div>
</div>
	

<?php wp_footer(); ?>

</body>
</html>
