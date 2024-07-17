<?php
/**
 * Template Name: Developer Landing Page
 *
 * @package sws
 */

get_header('second');
?>

<div class="w-full   md:flex" style="background-image: url('https://stage.smartworking.io/wp-content/themes/sws/images/Homepage.png');">
<div class="container mx-auto mt-5">
<div class="grid lg:flex lg:justify-between gap-10 lg:gap-15 items-center mt-9 mb-0 md:mb-24 relative">
  <div class="absolute top-0 left-0">
    <button class="flex items-center justify-center"><img class="mr-3" src="<?php echo get_template_directory_uri();?>/images/back_arrow.svg" alt="back" >
     <span class="text-white">Services</span></button>
  </div>
  <div class="w-full ">
    <div class="grid gap-8 relative pr-5">
      <h1 class="text-3xl sm:text-4xl lg:text-7xl 3xl:text-58 font-medium text-white lg:leading-tight"> Hire remote &nbsp; <br> 
	  <span class="text-dark-orange"> developers </span> </h1>
      <p class="flex text-white font-normal text-xl">No hidden cost, Fully integrated services, Timezone-aligned, Hire within a week</p>
      <div class="header-buttons mt-6">
        <input type="email" placeholder="Enter email address" class="custom-input text-white focus:outline-none mr-3">
        <a href="https://smartworking.io/" class="button button-small  px-8 py-5 font-bold rounded-xl text-white text-lg get-started-banner-home">Hire Now</a>
      </div>
      
    </div>
  </div>
  <div class="w-full relative">
    <img class="w-full my-12" src="<?php echo get_template_directory_uri();?>/images/landing-banner.svg" alt="">
  </div>
</div>
</div>
</div>


<!-- Top 1% Section -->

<section class="bg-black flex flex-col items-center justify-center py-16">
<h3 class="text-center small-intro">Top 1%</h3>
      <div class="flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold text-[56px] mb-4 text-white">How We Find Top</h1> 
          <span class="text-dark-orange text-[56px]">1% Wordpress Developers For You</span> 
      </div>
        <p class="mb-12 text-lg w-max gradient-paragraph rounded-full p-3 text-white">Hire developers from as low as €16/hr</p>
        
        <div class="flex justify-center space-x-8 relative mb-28">
            <!-- Step 1 -->
             <div class="flex flex-col  items-center justify-center relative top-10">
               <h2 class="text-2xl gradient-text-dev-landing self-start font-bold mb-4">Step 1</h2>
               <div class="bg-gray-800 min-w-[405px] gradient-bg p-4 min-h-[550px] rounded-lg w-80">
               <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/step1_icon.svg" alt="" />
                   <h3 class="text-[24px] font-semibold mb-2 text-white">Outline your Tech Requirements</h3>
                   <p class="mb-4 text-[16px] text-white">Each candidate undergoes AI vetted, interviews, technical testing, written assessments and screening to ensure the perfect fit.</p>
                   <img class="pl-14"  src="<?php echo get_template_directory_uri();?>/images/benefits_card_avatar.svg" alt="">
               </div>
             </div>
            <!-- Step 2 -->
             <div class="flex flex-col  items-center justify-center relative top-36">
               <h2 class="text-2xl gradient-text-dev-landing self-start font-bold mb-4">Step 2</h2>
               <div class="bg-gray-800 min-w-[405px] gradient-bg p-4 min-h-[550px] rounded-lg w-80">
                  <img class="mb-3"  src="<?php echo get_template_directory_uri();?>/images/step2_icon.svg" alt="" />
                   <h3 class="text-[24px] font-semibold mb-4 text-white">Interview all the Candidates</h3>
                   <p class="mb-4 text-[16px] text-white">Each candidate undergoes AI vetted, interviews, technical testing, written assessments and screening to ensure the perfect fit.</p>
                   <img class="pl-14"  src="<?php echo get_template_directory_uri();?>/images/benefits_card_avatar.svg" alt="">
               </div>
             </div>
            <!-- Step 3 -->
             <div class="flex flex-col  items-center justify-center relative top-3">
               <h2 class="text-2xl gradient-text-dev-landing self-start font-bold mb-4">Step 3</h2>
               <div class="bg-gray-800 min-w-[405px] gradient-bg p-4 min-h-[550px] rounded-lg w-80">
               <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/step3_icon.svg" alt="" />
                   <h3 class="text-[24px] font-semibold mb-2 text-white">Efficient Onboarding</h3>
                   <p class="mb-4 text-[16px] text-white">Each candidate undergoes AI vetted, interviews, technical testing, written assessments and screening to ensure the perfect fit.</p>
                   <img class="pl-14"  src="<?php echo get_template_directory_uri();?>/images/benefits_card_avatar.svg" alt="">
               </div>
             </div>
             </div>
        </div>

        <div class="mt-12">
            <button class="bg-dark-orange text-white px-6 py-3 rounded-lg text-lg">Hire Now</button>
        </div>
    </section>


<!-- Benefit Section -->

<section class="bg-black flex flex-col items-center justify-center py-16 w-full">
<h3 class="text-center small-intro">Benefits</h3>
      <div class="flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold text-[56px] mb-4 text-white">Benefits of Hiring Wordpress</h1> 
          <span class="text-dark-orange text-[56px]">Developer from SmartWorking</span> 
      </div>
        
        <div class="flex justify-center  space-x-8 relative mb-28">
            <div class="flex flex-col  items-center justify-center relative ">
               <div class="my-20"> <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/metwo.svg" alt="" /> </div>
             </div>
        </div>
		
		<div class="container mx-auto md:px-0 px-10">
		<div class="grid grid-cols-1 md:grid-cols-2 gap-4 justify-center relative mb-28">
			<div>
			  <div class="flex flex-col justify-center items-center text-center align-middle relative orangepart px-40 py-48">
				<img class="mb-3 w-28" src="<?php echo get_template_directory_uri();?>/images/tree.svg" alt="" />
				<h2 class="text-2xl text-white font-bold mb-4 text-center">Hiring with Smart working</h2>
			  </div>
				
			 <div class="flex flex-col justify-center items-center text-center align-middle relative greenpart px-40 py-6">
               <div class="justify-center items-center text-center align-middle">
				 <span class="inline-block align-middle"> <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/badge.svg" alt="" /> </span>
				 <span class="text-2xl text-white font-bold mb-4 inline-block">96% Retention</span>
               </div>
			 </div>
			</div>
			
			
			<div>
				<div class="flex flex-col justify-center relative firozipart px-10 py-5">
				<div class="grid items-center grid-cols-9 gap-0">
				  <div class="col-span-1"> 
					<img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/user.svg" alt="" /> 
				  </div>
					<div class="col-span-5 pl-2">
					<h4 class="text-2xl text-white font-bold mb-2">Hire engineer in 49h</h4>
					<h5 class="text-sm text-white font-normal">A Dedicated Team To Help Get The Best Out Of Your Developers</h5>
					</div>
				</div>
				   
				</div>
				
				<div class="flex flex-col justify-center relative lightorangepart px-10 py-5">
				<div class="grid items-center grid-cols-9 gap-0">
				  <div class="col-span-1"> 
					<img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/cpu.svg" alt="" /> 
				  </div>
					<div class="col-span-5 pl-2">
					<h4 class="text-2xl text-white font-bold mb-2">Hire engineer in 9h</h4>
					<h5 class="text-sm text-white font-normal">A Dedicated Team To Help Get The Best Out Of Your Developers</h5>
					</div>
				</div>
				   
				</div>
				
				<div class="flex flex-col justify-center relative brownpart px-10 py-5">
				<div class="grid items-center grid-cols-9 gap-0">
				  <div class="col-span-1"> 
					<img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/CircleClock.svg" alt="" /> 
				  </div>
					<div class="col-span-5 pl-2">
					<h4 class="text-2xl text-white font-bold mb-2">Hire engineer in 19h</h4>
					<h5 class="text-sm text-white font-normal">A Dedicated Team To Help Get The Best Out Of Your Developers</h5>
					</div>
				</div>
				   
				</div>
				
				<div class="flex flex-col justify-center relative darkfirozipart px-10 py-5">
				<div class="grid items-center grid-cols-9 gap-0">
				  <div class="col-span-1"> 
					<img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/days-warranty.svg" alt="" /> 
				  </div>
					<div class="col-span-5 pl-2">
					<h4 class="text-2xl text-white font-bold mb-2">Hire engineer in 20h</h4>
					<h5 class="text-sm text-white font-normal">A Dedicated Team To Help Get The Best Out Of Your Developers</h5>
					</div>
				</div>
				   
				</div>
				
				<div class="flex flex-col justify-center relative violetpart px-10 py-5">
				<div class="grid items-center grid-cols-9 gap-0">
				  <div class="col-span-1"> 
					<img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/eurocircle.svg" alt="" /> 
				  </div>
					<div class="col-span-5 pl-2">
					<h4 class="text-2xl text-white font-bold mb-2">Hire engineer in 5h</h4>
					<h5 class="text-sm text-white font-normal">A Dedicated Team To Help Get The Best Out Of Your Developers</h5>
					</div>
				</div>
				   
				</div>
			</div>
            
        </div>
		</div>
        
</section>

<!-- Client Section -->

<div class="w-full relative  grid items-center pt-24 bg-section-trusted bg-dark-black">
  <div class="px-10">
    <h3 class="text-center small-intro"> Clients </h3>
    <h1 class="flex flex-col items-center justify-center text-center md:leading-tight"> <span class="text-2xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium  text-white">Trusted By</span><span class="text-2xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium text-dark-orange mt-[24px]">100+ of Organizations</span> </h1>
    <div class="grid grid-cols-2 md:grid-cols-7 gap-4 mt-9 mb-14">
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/trust1.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/trust1.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/firstfence.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/firstfence.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/barley.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/barley.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/trident.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/trident.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/gab.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/gab.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/conpic.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/conpic.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/another.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/another.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/silver.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/silver.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/rebel.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/rebel.svg" class="mb-5 md:mb-5">
      </div>
	  <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/trust1.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/trust1.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/firstfence.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/firstfence.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/barley.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/barley.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/trident.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/trident.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/gab.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/gab.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/conpic.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/conpic.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/another.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/another.svg" class="mb-5 md:mb-5">
      </div>
	  <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/trust1.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/trust1.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/firstfence.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/firstfence.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/barley.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/barley.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/trident.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/trident.svg" class="mb-5 md:mb-5">
      </div>
      <div class="bg-trust-box py-3 px-2 rounded-xl">
        <img src="https://stage.smartworking.io/wp-content/uploads/2024/06/gab.svg" alt="https://stage.smartworking.io/wp-content/uploads/2024/06/gab.svg" class="mb-5 md:mb-5">
      </div>
    </div>
  </div>
</div>


<?php get_template_part( 'template-parts/home-blog' );?>

<!-- FAQ Section  -->
<div class="w-full relative bg-dark-black grid items-center pb-28 pt-16 md:pt-36">
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


<div class="w-full  relative bg-dark-black grid items-center pb-28">
  <div class="container mx-auto md:px-0 px-10 flex items-center ready-hire-bg h-96">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="pl-7 pr-7 md:pl-48 md:pr-12 justify-self-center self-center mb-10">
        <h1 class="text-center md:text-left text-3xl md:text-5xl lg:text-[72px] 3xl:text-58 font-medium text-white  md:leading-tight mb-4">Ready to Hire
		a Developer?</h1>
        <span class="text-center md:text-left md:text-[24px] lg:text-[24px] text-white text-base"> It is quick and easy with Smart Working </span>
        
      </div>
      <div class="px-6 py-10 flex justify-self-center min-w-[538px]">
        <div class="bg-white rounded-3xl px-6 py-6 w-full">
			<div class="rounded-2xl border-pattern px-6 py-6 w-full">
				<h4 class="text-dark-orange text-2xl font-bold leading-9"> Share your requirements </h4>
				<form method="post">
					<input type="text"  name="skills"  class="mt-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-dark-black focus:border-dark-black  sm:text-sm" fdprocessedid="w0z9xl">
					<input type="text" name="fullname" placeholder="Full Name" class="mt-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-dark-black focus:border-dark-black  sm:text-sm" fdprocessedid="3p8zek">
					<input type="email" name="email-address" placeholder="Email Address" class="mt-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-dark-black focus:border-dark-black  sm:text-sm" fdprocessedid="qmz9kh">
					<button type="submit" class="w-full flex items-center justify-center bg-dark-orange text-white mt-4 py-2 px-4 rounded-md hover:bg-dark-black focus:outline-none focus:bg-dark-black transition duration-200" fdprocessedid="ytbjb">Submit Now <img class="ml-4"  src="<?php echo get_template_directory_uri();?>/images/forward_arrow.svg" alt=""></button>
				</form>
				<h4 class="text-center text-dark-black text-sm font-semibold py-6"> Our recruitment specialist will be in touch soon! </h4>
			</div>
       </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>