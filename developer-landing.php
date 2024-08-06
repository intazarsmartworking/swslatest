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


<!-- Vetted Profile Section -->

<section class="bg-black flex flex-col items-center justify-center py-16">
    <h3 class="text-center small-intro">Vetted Profiles</h3>
	
    <div class="flex flex-col items-center justify-center mb-20">
      <h1 class="text-4xl font-bold text-[56px] mb-4 text-white">Meet Our Vetted</h1> 
      <span class="text-dark-orange text-[56px]">Wordpress Developers</span> 
    </div>
	
	
	<div class="container mx-auto p-4">
        <div class="flex flex-wrap -mx-2">
            <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
                <div class="custom-bg custom-border">
				<div class="flex items-center">
					<img src="<?php echo get_template_directory_uri();?>/images/johnauthor.svg" alt="Author" class="w-16 h-16 rounded-full mr-4">
					<div>
						<span class="text-white text-2xl font-medium block">Author Name</span>
						<span class="text-white text-sm font-normal block">WordPress Developer</span>
					</div>
				</div>


				<div class="grid grid-cols-1 custom-grid-bg sm:grid-cols-2 gap-4 my-7 px-4 py-3 rounded-lg">
					<div class="flex flex-col sm:flex-row">
						<img src="<?php echo get_template_directory_uri();?>/images/Bag.svg" alt="Experience 1" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
				    <div>
					 <h3 class="text-sm font-normal pb-2 text-white">Experience</h3>
					 <p class="text-white text-base font-medium">10 Years</p>
				    </div>
                    </div>
				  <div class="flex flex-col sm:flex-row">
					<img src="<?php echo get_template_directory_uri();?>/images/smallclock.svg" alt="Experience 2" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
					  <div>
						  <h3 class="text-sm font-normal pb-2 text-white">Available in</h3>
						  <p class="text-white text-base font-medium">2 Weeks</p>
					  </div>
				  </div>
                </div>
				<h2 class="text-sm font-medium text-white pb-10">Technologies</h2>
				    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">MySQL</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/mysql.svg" alt="Technology 1" class="w-4 h-4 rounded-full">
                        </div>
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">Node.js</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/nodejs.svg" alt="Technology 2" class="w-4 h-4 rounded-full">
                        </div>
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">Python</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/python.svg" alt="Technology 3" class="w-4 h-4 rounded-full">
                        </div>
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">Angular</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/angular.svg" alt="Technology 4" class="w-4 h-4 rounded-full">
                        </div>
						            <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">React.js</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/reactjs.svg" alt="Technology 4" class="w-4 h-4 rounded-full">
                        </div>
                    </div>
					
					
					<div class="w-full p-4 mt-4">
						<img src="<?php echo get_template_directory_uri();?>/images/orange-slider.svg">
					</div>


					<div class="w-full p-4 mt-4">
						<img src="<?php echo get_template_directory_uri();?>/images/green-slider.svg">
					</div>
					
					<div class="w-full p-4 mt-4">
						<img src="<?php echo get_template_directory_uri();?>/images/blue-slider.svg">
					</div>
					
					
					<div class="flex flex-wrap -mx-2 mt-4">
                        <div class="w-full md:w-1/2 px-2 mb-4">
                            <p class="font-medium text-2xl text-white">€16/hr</p>
                        </div>
                        <div class="w-full md:w-1/2 px-2 mb-4 text-right">
                            <button class="profile-button-custom">
                                View Profile
                            </button>
                        </div>
                    </div>
					
					
              </div>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
                <div class="custom-bg custom-border">
				<div class="flex items-center">
					<img src="<?php echo get_template_directory_uri();?>/images/johnauthor.svg" alt="Author" class="w-16 h-16 rounded-full mr-4">
					<div>
						<span class="text-white text-2xl font-medium block">Author Name</span>
						<span class="text-white text-sm font-normal block">WordPress Developer</span>
					</div>
				</div>


				<div class="grid grid-cols-1 custom-grid-bg sm:grid-cols-2 gap-4 my-7 px-4 py-3 rounded-lg">
					<div class="flex flex-col sm:flex-row">
						<img src="<?php echo get_template_directory_uri();?>/images/Bag.svg" alt="Experience 1" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
				    <div>
					 <h3 class="text-sm font-normal pb-2 text-white">Experience</h3>
					 <p class="text-white text-base font-medium">10 Years</p>
				    </div>
                    </div>
				  <div class="flex flex-col sm:flex-row">
					<img src="<?php echo get_template_directory_uri();?>/images/smallclock.svg" alt="Experience 2" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
					  <div>
						  <h3 class="text-sm font-normal pb-2 text-white">Available in</h3>
						  <p class="text-white text-base font-medium">2 Weeks</p>
					  </div>
				  </div>
				</div>
				<h2 class="text-sm font-medium text-white pb-10">Technologies</h2>
				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">MySQL</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/mysql.svg" alt="Technology 1" class="w-4 h-4 rounded-full">
                        </div>
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">Node.js</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/nodejs.svg" alt="Technology 2" class="w-4 h-4 rounded-full">
                        </div>
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">Python</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/python.svg" alt="Technology 3" class="w-4 h-4 rounded-full">
                        </div>
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">Angular</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/angular.svg" alt="Technology 4" class="w-4 h-4 rounded-full">
                        </div>
						            <div class="flex items-center  tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">React.js</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/reactjs.svg" alt="Technology 4" class="w-4 h-4 rounded-full">
                        </div>
                  </div>
				  
					<div class="w-full p-4 mt-4">
						<img src="<?php echo get_template_directory_uri();?>/images/orange-slider.svg">
					</div>


					<div class="w-full p-4 mt-4">
						<img src="<?php echo get_template_directory_uri();?>/images/green-slider.svg">
					</div>
					
					<div class="w-full p-4 mt-4">
						<img src="<?php echo get_template_directory_uri();?>/images/blue-slider.svg">
					</div>
					
					<div class="flex flex-wrap -mx-2 mt-4">
                        <div class="w-full md:w-1/2 px-2 mb-4">
                            <p class="font-medium text-2xl text-white">€16/hr</p>
                        </div>
                        <div class="w-full md:w-1/2 px-2 mb-4 text-right">
                            <button class="profile-button-custom">
                                View Profile
                            </button>
                        </div>
                    </div>
				  
              </div>
            </div>
            <div class="w-full sm:w-1/2 lg:w-1/3 px-2 mb-4">
                <div class="custom-bg custom-border">
				<div class="flex items-center">
					<img src="<?php echo get_template_directory_uri();?>/images/johnauthor.svg" alt="Author" class="w-16 h-16 rounded-full mr-4">
					<div>
						<span class="text-white text-2xl font-medium block">Author Name</span>
						<span class="text-white text-sm font-normal block">WordPress Developer</span>
					</div>
				</div>


				<div class="grid grid-cols-1 custom-grid-bg sm:grid-cols-2 gap-4 my-7 px-4 py-3 rounded-lg">
					<div class="flex flex-col sm:flex-row">
						<img src="<?php echo get_template_directory_uri();?>/images/Bag.svg" alt="Experience 1" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
				    <div>
					 <h3 class="text-sm font-normal pb-2 text-white">Experience</h3>
					 <p class="text-white text-base font-medium">10 Years</p>
				    </div>
                    </div>
				  <div class="flex flex-col sm:flex-row">
					<img src="<?php echo get_template_directory_uri();?>/images/smallclock.svg" alt="Experience 2" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
					  <div>
						  <h3 class="text-sm font-normal pb-2 text-white">Available in</h3>
						  <p class="text-white text-base font-medium">2 Weeks</p>
					  </div>
				  </div>
				</div>
				<h2 class="text-sm font-medium text-white pb-10">Technologies</h2>
				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">MySQL</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/mysql.svg" alt="Technology 1" class="w-4 h-4 rounded-full">
                        </div>
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">Node.js</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/nodejs.svg" alt="Technology 2" class="w-4 h-4 rounded-full">
                        </div>
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">Python</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/python.svg" alt="Technology 3" class="w-4 h-4 rounded-full">
                        </div>
                        <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">Angular</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/angular.svg" alt="Technology 4" class="w-4 h-4 rounded-full">
                        </div>
						            <div class="flex items-center tech-item">
                            <div class="flex-1">
                                <h3 class="text-xs font-medium">React.js</h3>
                            </div>
                            <img src="<?php echo get_template_directory_uri();?>/images/reactjs.svg" alt="Technology 4" class="w-4 h-4 rounded-full">
                        </div>
                    </div>
					
					

					<div class="w-full p-4 mt-4">
						<img src="<?php echo get_template_directory_uri();?>/images/orange-slider.svg">
					</div>


					<div class="w-full p-4 mt-4">
						<img src="<?php echo get_template_directory_uri();?>/images/green-slider.svg">
					</div>
					
					<div class="w-full p-4 mt-4">
						<img src="<?php echo get_template_directory_uri();?>/images/blue-slider.svg">
					</div>
					
					<div class="flex flex-wrap -mx-2 mt-4">
                        <div class="w-full md:w-1/2 px-2 mb-4">
                            <p class="font-medium text-2xl text-white">€16/hr</p>
                        </div>
                        <div class="w-full md:w-1/2 px-2 mb-4 text-right">
                            <button class="profile-button-custom">
                                View Profile
                            </button>
                        </div>
                    </div>

              </div>
            </div>
        </div>
    </div>	
		
		
</section>

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
        
        <div class="relative mb-28">
            <div class="grid grid-cols-1 relative ">
               <div class="my-20"> 
                <svg class="w-[100%]" width="100%" height="100%" viewBox="0 0 1702 1456" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g opacity="0.7">
                  <g filter="url(#filter0_f_1322_3092)">
                  <ellipse cx="862.46" cy="728" rx="329.5" ry="258" fill="#FF4D02" fill-opacity="0.4"/>
                  </g>
                  </g>
                  <g opacity="0.3">
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="592.419" y="707.759" width="34" height="30" fill="url(#pattern0_1322_3092)"/>
                  <path d="M612.35 720.8C610.45 719.4 606.55 719.4 604.65 720.8C603.65 721.5 603.65 722.5 604.65 723.2C606.55 724.6 610.45 724.6 612.35 723.2C613.35 722.5 613.35 721.5 612.35 720.8Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="578.419" y="715.759" width="34" height="28" fill="url(#pattern1_1322_3092)"/>
                  <path d="M598.45 727.499C596.55 726.199 592.65 726.199 590.75 727.499C589.75 728.199 589.75 729.199 590.75 729.999C592.65 731.299 596.55 731.299 598.45 729.999C599.45 729.199 599.45 728.199 598.45 727.499Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1083.15 1022.6L904.05 935.7C901.25 936.5 897.55 936.3 895.15 935.2C892.35 933.8 892.35 931.6 895.15 930.2C897.95 928.8 902.55 928.8 905.35 930.2C907.85 931.4 908.15 933.2 906.45 934.5L1085.45 1021.4L1083.15 1022.6ZM903.05 934.1C904.65 933.4 904.65 932.1 903.05 931.4C901.55 930.7 899.05 930.7 897.55 931.4C896.05 932.1 896.05 933.4 897.55 934.1C899.05 934.8 901.55 934.8 903.05 934.1Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M496.95 729.7L225.85 861.1L223.55 860L493.65 729V701.1C492.45 701 491.45 700.7 490.55 700.2C487.65 698.9 487.65 696.6 490.55 695.3C493.35 693.9 497.95 693.9 500.75 695.3C503.55 696.6 503.55 698.9 500.75 700.2C499.65 700.8 498.35 701.1 496.95 701.2V729.7ZM498.45 699.1C499.95 698.4 499.95 697.2 498.45 696.4C496.85 695.7 494.35 695.7 492.85 696.4C491.35 697.2 491.35 698.4 492.85 699.1C494.35 699.9 496.85 699.9 498.45 699.1Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M395.45 720L230.25 800.1L227.95 799L392.15 719.3V691.6C390.95 691.5 389.75 691.2 388.75 690.7C385.85 689.3 385.85 687.1 388.75 685.7C391.55 684.4 396.15 684.4 398.95 685.7C401.75 687.1 401.75 689.3 398.95 690.7C397.95 691.2 396.75 691.5 395.45 691.6V720ZM396.65 689.7C398.15 688.9 398.15 687.7 396.65 687C395.05 686.2 392.55 686.2 391.05 687C389.55 687.7 389.55 688.9 391.05 689.7C392.55 690.4 395.05 690.4 396.65 689.7Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M326.65 686.6C323.85 688 319.25 688 316.45 686.6C314.05 685.4 313.65 683.6 315.45 682.3L139.05 596.7L141.45 595.5L317.75 681.1C320.55 680.3 324.25 680.5 326.65 681.6C329.55 683 329.55 685.2 326.65 686.6ZM324.35 685.5C325.85 684.7 325.85 683.5 324.35 682.8C322.85 682 320.35 682 318.75 682.8C317.25 683.5 317.25 684.7 318.75 685.5C320.35 686.2 322.85 686.2 324.35 685.5Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M982.65 891.7C979.75 893 975.15 893 972.35 891.7C969.95 890.5 969.65 888.8 971.25 887.4L918.85 862H811.15C810.85 862.6 810.25 863.2 809.35 863.6C806.45 865 801.85 865 799.05 863.6C796.25 862.3 796.25 860 799.05 858.7C801.85 857.3 806.45 857.3 809.35 858.7C810.35 859.2 810.95 859.8 811.25 860.4H920.25L973.55 886.2C976.35 885.3 980.15 885.5 982.65 886.7C985.45 888.1 985.45 890.3 982.65 891.7ZM806.95 862.5C808.45 861.8 808.45 860.6 806.95 859.8C805.45 859.1 802.95 859.1 801.45 859.8C799.85 860.6 799.85 861.8 801.45 862.5C802.95 863.3 805.45 863.3 806.95 862.5ZM980.25 890.5C981.75 889.8 981.75 888.6 980.25 887.8C978.75 887.1 976.25 887.1 974.75 887.8C973.15 888.6 973.15 889.8 974.75 890.5C976.25 891.3 978.75 891.3 980.25 890.5Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1066.15 747.6C1063.25 748.9 1058.65 748.9 1055.85 747.6C1053.05 746.2 1053.05 744 1055.85 742.6C1056.85 742.1 1058.15 741.8 1059.45 741.7V707.6L1098.25 688.8C1096.45 687.4 1096.85 685.6 1099.25 684.4C1102.05 683.1 1106.65 683.1 1109.45 684.4C1112.35 685.8 1112.35 688 1109.45 689.4C1107.05 690.6 1103.35 690.7 1100.55 689.9L1062.75 708.3V741.7C1063.95 741.8 1065.15 742.1 1066.15 742.6C1068.95 744 1068.95 746.2 1066.15 747.6ZM1101.55 688.3C1103.15 689 1105.65 689 1107.15 688.3C1108.65 687.5 1108.65 686.3 1107.15 685.6C1105.65 684.8 1103.15 684.8 1101.55 685.6C1100.05 686.3 1100.05 687.5 1101.55 688.3ZM1063.75 746.4C1065.25 745.7 1065.25 744.5 1063.75 743.7C1062.25 743 1059.75 743 1058.25 743.7C1056.65 744.5 1056.65 745.7 1058.25 746.4C1059.75 747.2 1062.25 747.2 1063.75 746.4Z" fill="white"/>
                  </g>
                  <g opacity="0.3">
                  <path d="M1203.95 794.1C1205.95 795.1 1206.55 796.4 1205.85 797.7L1346.15 865.8H1496.25L1515.05 875L1509.75 877.6L1493.05 869.5H1343.05L1200.55 800.3C1197.95 800.6 1195.15 800.3 1193.15 799.3C1190.15 797.9 1190.15 795.5 1193.15 794.1C1196.05 792.7 1200.95 792.7 1203.95 794.1Z" fill="url(#paint0_linear_1322_3092)"/>
                  <path d="M648.55 731.6C646.55 732.6 643.65 732.9 641.15 732.5L500.85 800.6V873.5L226.85 1006.1L221.55 1003.5L493.25 871.9V799.1L635.75 729.9C635.15 728.7 635.75 727.3 637.75 726.4C640.75 724.9 645.55 724.9 648.55 726.4C651.55 727.8 651.55 730.2 648.55 731.6Z" fill="url(#paint1_linear_1322_3092)"/>
                  <path d="M928.95 743C930.95 744 931.55 745.3 930.85 746.6L1019.35 789.5V806.3L1244.95 915.8C1247.55 915.5 1250.35 915.8 1252.35 916.7C1255.35 918.2 1255.35 920.5 1252.35 922C1249.35 923.4 1244.55 923.4 1241.55 922C1239.55 921 1238.95 919.6 1239.65 918.4L1011.75 807.8V791L925.55 749.2C922.95 749.5 920.15 749.2 918.15 748.2C915.15 746.8 915.15 744.4 918.15 743C921.15 741.6 925.95 741.6 928.95 743Z" fill="url(#paint2_linear_1322_3092)"/>
                  <path d="M808.05 642.8C810.05 641.9 812.85 641.6 815.45 641.9L903.85 599H938.45L1164.05 489.5C1163.35 488.2 1164.05 486.8 1166.05 485.9C1168.95 484.4 1173.85 484.4 1176.85 485.9C1179.75 487.3 1179.75 489.7 1176.85 491.1C1174.85 492.1 1171.95 492.4 1169.45 492.1L941.55 602.7H906.95L820.75 644.5C821.45 645.7 820.85 647.1 818.85 648.1C815.85 649.5 811.05 649.5 808.05 648.1C805.05 646.6 805.05 644.3 808.05 642.8Z" fill="url(#paint3_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M881.75 766C885.35 767.8 886.05 770.3 883.95 772.4L999.85 828.7V853.7L1487.45 1090.4L1482.15 1093L992.25 855.2V830.2L878.65 775C874.25 776 868.95 775.7 865.35 774C860.85 771.8 860.85 768.2 865.35 766C869.95 763.8 877.25 763.8 881.75 766ZM870.75 771.4C872.35 772.1 874.85 772.1 876.45 771.4C877.95 770.6 877.95 769.4 876.45 768.6C874.85 767.9 872.35 767.9 870.75 768.6C869.15 769.4 869.15 770.6 870.75 771.4Z" fill="url(#paint4_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M606.25 617C602.75 615.2 602.05 612.6 604.15 610.6L488.25 554.3V529.3L0.550049 292.6L5.95004 290L495.85 527.8V552.8L609.45 608C613.75 606.9 619.05 607.3 622.65 609C627.15 611.2 627.15 614.8 622.65 617C618.15 619.2 610.85 619.2 606.25 617ZM617.35 611.6C615.75 610.9 613.25 610.9 611.65 611.6C610.05 612.4 610.05 613.6 611.65 614.4C613.25 615.1 615.75 615.1 617.35 614.4C618.85 613.6 618.85 612.4 617.35 611.6Z" fill="url(#paint5_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M713.95 763.2C710.35 764.9 705.05 765.3 700.75 764.3L584.85 820.5H533.25L45.65 1057.2L40.25 1054.6L530.15 816.8H581.75L695.35 761.7C693.25 759.6 693.95 757 697.55 755.3C702.05 753.1 709.45 753.1 713.95 755.3C718.45 757.4 718.45 761 713.95 763.2ZM702.95 757.8C701.35 758.6 701.35 759.8 702.95 760.6C704.45 761.4 707.05 761.4 708.55 760.6C710.15 759.8 710.15 758.6 708.55 757.8C707.05 757.1 704.45 757.1 702.95 757.8Z" fill="url(#paint6_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M680.85 858.5C677.25 860.2 671.95 860.6 667.65 859.6L551.75 915.8H500.15L12.55 1152.5L7.15002 1149.9L497.05 912.1H548.65L662.25 857C660.25 854.9 660.95 852.3 664.45 850.6C669.05 848.4 676.35 848.4 680.85 850.6C685.35 852.7 685.35 856.3 680.85 858.5ZM669.85 853.2C668.25 853.9 668.25 855.2 669.85 855.9C671.35 856.7 673.95 856.7 675.55 855.9C677.05 855.2 677.05 853.9 675.55 853.2C673.95 852.4 671.35 852.4 669.85 853.2Z" fill="url(#paint7_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M455.35 997.3L784.55 837.8C782.45 835.8 783.15 833.2 786.75 831.4C791.25 829.2 798.55 829.2 803.05 831.4C807.65 833.6 807.65 837.2 803.05 839.4C799.55 841.1 794.15 841.5 789.85 840.4L460.75 999.9M792.05 834C790.55 834.8 790.55 836 792.05 836.8C793.65 837.5 796.15 837.5 797.75 836.8C799.35 836 799.35 834.8 797.75 834C796.15 833.3 793.65 833.3 792.05 834Z" fill="url(#paint8_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M969.65 602.7L855.95 657.9C858.05 660 857.35 662.6 853.75 664.3C849.25 666.5 841.95 666.5 837.45 664.3C832.85 662.1 832.85 658.5 837.45 656.4C840.95 654.6 846.35 654.3 850.65 655.3L966.45 599.1H1018.15L1107.55 555.6L1112.95 558.2L1021.25 602.7H969.65ZM848.45 661.7C850.05 660.9 850.05 659.7 848.45 658.9C846.85 658.2 844.35 658.2 842.75 658.9C841.25 659.7 841.25 660.9 842.75 661.7C844.35 662.5 846.85 662.5 848.45 661.7Z" fill="url(#paint9_linear_1322_3092)"/>
                  <path d="M485.15 411.7V480.7L677.95 574.3V622.6L752.25 658.6C751.35 659.7 751.85 661 753.65 661.9C756.15 663.1 760.25 663.1 762.65 661.9C765.15 660.7 765.15 658.7 762.65 657.5C760.85 656.6 758.05 656.4 755.75 656.8L683.05 621.6V573.3L490.25 479.7V410.7L361.25 348.1L357.65 349.8L485.15 411.7Z" fill="url(#paint10_linear_1322_3092)"/>
                  <path d="M827.15 792.6C828.95 793.5 829.45 794.8 828.55 795.9L1020.85 889.3H1137.15L1447.75 1040L1444.25 1041.8L1135.05 891.7H1018.75L824.95 797.7C822.65 798.1 819.95 797.9 818.05 797C815.65 795.8 815.65 793.8 818.05 792.6C820.55 791.4 824.65 791.4 827.15 792.6Z" fill="url(#paint11_linear_1322_3092)"/>
                  <path d="M1346.85 902L1206.85 834V818.4L1112.35 772.6V711L1262.85 638L1268.65 640.8L1120.65 712.7V770.9L1215.15 816.8V832.4L1352.65 899.1L1346.85 902Z" fill="url(#paint12_linear_1322_3092)"/>
                  <path d="M733.15 552.2L604.75 489.9V434.1L517.75 391.9L523.65 389L613.05 432.4V488.3L736.65 548.2H852.35L1107.75 423.9L1113.65 426.7L855.75 552.2H733.15Z" fill="url(#paint13_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M400.95 681.3C396.35 683.5 388.85 683.5 384.35 681.3C380.85 679.6 380.05 677.2 381.75 675.1L188.15 581.2L194.05 578.3L387.35 672.2C391.75 671.1 397.25 671.4 400.95 673.2C405.55 675.4 405.55 679 400.95 681.3ZM395.05 678.4C396.45 677.8 396.45 676.7 395.05 676.1C393.75 675.4 391.55 675.4 390.15 676.1C388.85 676.7 388.85 677.8 390.15 678.4C391.55 679.1 393.75 679.1 395.05 678.4Z" fill="url(#paint14_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M446.85 727L234.75 829.6L228.85 826.8L438.65 725.3V680.4L296.45 611.4C292.05 612.6 286.35 612.2 282.65 610.4C278.05 608.2 278.05 604.6 282.65 602.4C287.25 600.1 294.65 600.1 299.25 602.4C302.65 604 303.55 606.4 301.95 608.4L446.85 678.8V727ZM293.45 607.6C294.75 606.9 294.75 605.8 293.45 605.2C292.05 604.5 289.85 604.5 288.55 605.2C287.15 605.8 287.15 606.9 288.55 607.6C289.85 608.2 292.05 608.2 293.45 607.6Z" fill="url(#paint15_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1115.15 1007L1109.25 1009.9L897.45 907H794.85C794.25 907.8 793.35 908.5 792.15 909.1C787.55 911.3 780.05 911.3 775.55 909.1C770.95 906.9 770.95 903.3 775.55 901C780.05 898.8 787.55 898.8 792.15 901C793.35 901.6 794.217 902.266 794.75 903H900.85L1115.15 1007ZM786.35 906.3C787.65 905.6 787.65 904.5 786.35 903.9C784.95 903.2 782.75 903.2 781.35 903.9C780.05 904.5 780.05 905.6 781.35 906.3C782.75 906.9 784.95 906.9 786.35 906.3Z" fill="url(#paint16_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M874.45 931.8C869.85 934 862.45 934 857.85 931.8C856.45 931.2 855.55 930.4 854.95 929.6H754.45L598.65 1005.2L592.75 1002.3L751.05 925.6H855.35C855.883 924.934 856.717 924.334 857.85 923.8C862.45 921.5 869.85 921.5 874.45 923.8C879.05 926 879.05 929.6 874.45 931.8ZM868.55 929C869.95 928.3 869.95 927.3 868.55 926.6C867.25 925.9 865.05 925.9 863.65 926.6C862.35 927.3 862.35 928.3 863.65 929C865.05 929.6 867.25 929.6 868.55 929Z" fill="url(#paint17_linear_1322_3092)"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M456.15 417.8L575.15 475.5V570L647.25 605V650.8L712.05 682.2" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M789.95 810.2L853.75 841.1V870.9L1124.65 1002.4" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1169.65 464.7L926.45 583V637.1L861.35 668.7" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1271.15 655.7L1160.65 709.3V786.8L1240.95 825.8V835L1362.85 894.2" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M864.55 890.5H782.15L532.55 1011.3" stroke="white" stroke-width="0.6" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M800.65 639.3L730.35 605.1V582.1L662.45 549.1V472.9L500.95 394.5" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M891.15 683.2L1019.15 621H1077.65L1160.05 581.1" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M854.25 778.9L951.45 826.1V868.3L1221.55 999.3" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M751.75 781.5L259.35 1020.8" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M418.75 689.9V721.2L227.85 813.9" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M963.85 725.6L1057.05 770.9V813.7L1302.85 932.9" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:soft-light">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="776.567" y="659.906" width="50" height="38" fill="url(#pattern2_1322_3092)"/>
                  <path d="M808.95 682.301C804.65 684.401 797.75 684.401 793.45 682.301C789.15 680.201 789.15 676.901 793.45 674.801C797.75 672.701 804.65 672.701 808.95 674.801C813.25 676.901 813.25 680.201 808.95 682.301Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:soft-light">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="866.567" y="703.906" width="50" height="38" fill="url(#pattern3_1322_3092)"/>
                  <path d="M898.55 725.801C894.25 727.901 887.35 727.901 883.05 725.801C878.75 723.701 878.75 720.401 883.05 718.301C887.35 716.201 894.25 716.201 898.55 718.301C902.85 720.401 902.85 723.701 898.55 725.801Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:soft-light">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="688.567" y="703.906" width="50" height="38" fill="url(#pattern4_1322_3092)"/>
                  <path d="M719.85 725.6C715.65 727.6 708.65 727.6 704.35 725.6C700.05 723.5 700.05 720.1 704.35 718C708.65 716 715.65 716 719.85 718C724.15 720.1 724.15 723.5 719.85 725.6Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:soft-light">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="776.567" y="745.906" width="50" height="40" fill="url(#pattern5_1322_3092)"/>
                  <path d="M809.45 769.1C805.15 771.1 798.25 771.1 793.95 769.1C789.65 767 789.65 763.6 793.95 761.5C798.25 759.4 805.15 759.4 809.45 761.5C813.75 763.6 813.75 767 809.45 769.1Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1141.85 768.3V710.8L1266.65 650.3" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M723.25 768.1L592.65 831.5V847.4L245.65 1016.1" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M673.95 700.7L385.25 560.6V548.9L178.05 448.2" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M701.85 687.2L619.35 647.1V629.1L212.45 431.5" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M684.65 747.1L629.65 773.8" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M805.65 803L879.95 839.1V870.8L1038.15 947.5" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M777.85 617.9L811.75 601.5V583.3L1119.85 433.6" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M531.05 704.6V726.1L231.45 871.5" stroke="white" stroke-width="0.6" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M554.55 729.901L542.65 724.101C541.55 723.601 541.55 722.701 542.65 722.201L554.55 716.501C555.55 715.901 557.25 715.901 558.35 716.501L570.25 722.201C571.25 722.701 571.25 723.601 570.25 724.101L558.35 729.901C557.25 730.401 555.55 730.401 554.55 729.901Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1027.15 730.201L1015.15 724.401C1014.15 723.901 1014.15 723.101 1015.15 722.601L1027.15 716.801C1028.15 716.301 1029.85 716.301 1030.95 716.801L1042.85 722.601C1043.85 723.101 1043.85 723.901 1042.85 724.401L1030.95 730.201C1029.85 730.701 1028.15 730.701 1027.15 730.201Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1053.75 609.6L1041.85 603.9C1040.75 603.4 1040.75 602.5 1041.85 602L1053.75 596.2C1054.85 595.7 1056.55 595.7 1057.55 596.2L1069.45 602C1070.55 602.5 1070.55 603.4 1069.45 603.9L1057.55 609.6C1056.55 610.2 1054.85 610.2 1053.75 609.6Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M766.35 834.1L754.45 828.3C753.45 827.8 753.45 827 754.45 826.5L766.35 820.7C767.45 820.2 769.15 820.2 770.15 820.7L782.05 826.5C783.15 827 783.15 827.8 782.05 828.3L770.15 834.1C769.15 834.6 767.45 834.6 766.35 834.1Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M822.35 884.1L810.45 878.3C809.45 877.8 809.45 877 810.45 876.4L822.35 870.7C823.45 870.2 825.15 870.2 826.15 870.7L838.05 876.4C839.15 877 839.15 877.8 838.05 878.3L826.15 884.1C825.15 884.6 823.45 884.6 822.35 884.1Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M545.35 662.3L533.45 656.6C532.35 656.1 532.35 655.2 533.45 654.7L545.35 648.9C546.35 648.4 548.05 648.4 549.15 648.9L561.05 654.7C562.05 655.2 562.05 656.1 561.05 656.6L549.15 662.3C548.05 662.9 546.35 662.9 545.35 662.3Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M304.15 568.4L292.25 562.6C291.25 562.1 291.25 561.3 292.25 560.8L304.15 555C305.25 554.5 306.95 554.5 308.05 555L319.95 560.8C320.95 561.3 320.95 562.1 319.95 562.6L308.05 568.4C306.95 568.9 305.25 568.9 304.15 568.4Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M758.95 610.4L747.05 604.7C746.05 604.1 746.05 603.3 747.05 602.8L758.95 597C760.05 596.5 761.75 596.5 762.75 597L774.65 602.8C775.75 603.3 775.75 604.1 774.65 604.7L762.75 610.4C761.75 610.9 760.05 610.9 758.95 610.4Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M698.95 847.6L687.05 841.8C685.95 841.3 685.95 840.4 687.05 839.9L698.95 834.2C699.95 833.6 701.65 833.6 702.75 834.2L714.65 839.9C715.75 840.4 715.75 841.3 714.65 841.8L702.75 847.6C701.65 848.1 699.95 848.1 698.95 847.6Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1066.45 915.3L1054.55 909.5C1053.55 909 1053.55 908.2 1054.55 907.7L1066.45 901.9C1067.55 901.4 1069.25 901.4 1070.25 901.9L1082.25 907.7C1083.25 908.2 1083.25 909 1082.25 909.5L1070.25 915.3C1069.25 915.8 1067.55 915.8 1066.45 915.3Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1099.65 931.4L1087.75 925.6C1086.65 925.1 1086.65 924.3 1087.75 923.8L1099.65 918C1100.75 917.5 1102.45 917.5 1103.45 918L1115.35 923.8C1116.45 924.3 1116.45 925.1 1115.35 925.6L1103.45 931.4C1102.45 931.9 1100.75 931.9 1099.65 931.4Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1132.85 947.501L1120.95 941.701C1119.85 941.201 1119.85 940.401 1120.95 939.901L1132.85 934.101C1133.85 933.601 1135.55 933.601 1136.65 934.101L1148.55 939.901C1149.55 940.401 1149.55 941.201 1148.55 941.701L1136.65 947.501C1135.55 948.001 1133.85 948.001 1132.85 947.501Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M591.65 552.3L579.75 546.5C578.65 546 578.65 545.2 579.75 544.7L591.65 538.9C592.75 538.4 594.45 538.4 595.45 538.9L607.35 544.7C608.45 545.2 608.45 546 607.35 546.5L595.45 552.3C594.45 552.8 592.75 552.8 591.65 552.3Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M624.85 568.4L612.95 562.6C611.85 562.1 611.85 561.3 612.95 560.8L624.85 555C625.85 554.5 627.55 554.5 628.65 555L640.55 560.8C641.55 561.3 641.55 562.1 640.55 562.6L628.65 568.4C627.55 568.9 625.85 568.9 624.85 568.4Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M657.95 584.501L646.05 578.701C645.05 578.201 645.05 577.401 646.05 576.901L657.95 571.101C659.05 570.601 660.75 570.601 661.75 571.101L673.65 576.901C674.75 577.401 674.75 578.201 673.65 578.701L661.75 584.501C660.75 585.001 659.05 585.001 657.95 584.501Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1215.25 775.8L1203.35 770C1202.35 769.5 1202.35 768.7 1203.35 768.2L1215.25 762.4C1216.35 761.9 1218.05 761.9 1219.05 762.4L1231.05 768.2C1232.05 768.7 1232.05 769.5 1231.05 770L1219.05 775.8C1218.05 776.3 1216.35 776.3 1215.25 775.8Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1248.45 791.9L1236.55 786.1C1235.45 785.6 1235.45 784.8 1236.55 784.3L1248.45 778.5C1249.55 778 1251.25 778 1252.25 778.5L1264.15 784.3C1265.25 784.8 1265.25 785.6 1264.15 786.1L1252.25 791.9C1251.25 792.4 1249.55 792.4 1248.45 791.9Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1281.65 808.001L1269.75 802.201C1268.65 801.701 1268.65 800.901 1269.75 800.401L1281.65 794.601C1282.65 794.101 1284.35 794.101 1285.45 794.601L1297.35 800.401C1298.35 800.901 1298.35 801.701 1297.35 802.201L1285.45 808.001C1284.35 808.501 1282.65 808.501 1281.65 808.001Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1029.15 636.7L1041.05 631C1042.05 630.5 1043.75 630.5 1044.85 631L1056.75 636.7C1057.75 637.3 1057.75 638.1 1056.75 638.6L1044.85 644.4C1043.75 644.9 1042.05 644.9 1041.05 644.4L1029.15 638.6C1028.05 638.1 1028.05 637.3 1029.15 636.7Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M995.95 652.8L1007.85 647.1C1008.95 646.5 1010.65 646.5 1011.65 647.1L1023.55 652.8C1024.65 653.3 1024.65 654.2 1023.55 654.7L1011.65 660.5C1010.65 661 1008.95 661 1007.85 660.5L995.95 654.7C994.95 654.2 994.95 653.3 995.95 652.8Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M962.85 668.9L974.75 663.2C975.75 662.6 977.45 662.6 978.55 663.2L990.45 668.9C991.45 669.4 991.45 670.3 990.45 670.8L978.55 676.6C977.45 677.1 975.75 677.1 974.75 676.6L962.85 670.8C961.75 670.3 961.75 669.4 962.85 668.9Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="498.419" y="599.759" width="34" height="30" fill="url(#pattern6_1322_3092)"/>
                  <path d="M512.65 612.1C509.95 613 509.95 614.9 512.65 615.8C514.15 616.3 516.25 616.3 517.75 615.8C520.45 614.9 520.45 613 517.75 612.1C516.25 611.6 514.15 611.6 512.65 612.1Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="330.419" y="681.759" width="32" height="30" fill="url(#pattern7_1322_3092)"/>
                  <path d="M343.55 694.2C340.85 695.1 340.85 697 343.55 697.9C345.05 698.4 347.15 698.4 348.65 697.9C351.35 697 351.35 695.1 348.65 694.2C347.15 693.7 345.05 693.7 343.55 694.2Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="816.419" y="833.759" width="32" height="28" fill="url(#pattern8_1322_3092)"/>
                  <path d="M829.65 845.7C826.85 846.6 826.85 848.5 829.65 849.4C831.15 849.9 833.25 849.9 834.75 849.4C837.45 848.5 837.45 846.6 834.75 845.7C833.25 845.2 831.15 845.2 829.65 845.7Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="990.419" y="701.759" width="34" height="28" fill="url(#pattern9_1322_3092)"/>
                  <path d="M1004.05 713.5C1001.35 714.4 1001.35 716.3 1004.05 717.2C1005.55 717.7 1007.65 717.7 1009.15 717.2C1011.95 716.3 1011.95 714.4 1009.15 713.5C1007.65 713 1005.55 713 1004.05 713.5Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="974.419" y="881.759" width="34" height="28" fill="url(#pattern10_1322_3092)"/>
                  <path d="M988.05 893.7C985.25 894.6 985.25 896.5 988.05 897.4C989.55 897.9 991.65 897.9 993.15 897.4C995.85 896.5 995.85 894.6 993.15 893.7C991.65 893.2 989.55 893.2 988.05 893.7Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="942.419" y="607.759" width="34" height="28" fill="url(#pattern11_1322_3092)"/>
                  <path d="M956.25 619.6C953.55 620.5 953.55 622.4 956.25 623.3C957.85 623.8 959.85 623.8 961.35 623.3C964.15 622.4 964.15 620.5 961.35 619.6C959.85 619.1 957.85 619.1 956.25 619.6Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="780.419" y="613.759" width="34" height="28" fill="url(#pattern12_1322_3092)"/>
                  <path d="M794.85 625.6C792.05 626.5 792.05 628.4 794.85 629.3C796.35 629.8 798.45 629.8 799.95 629.3C802.65 628.4 802.65 626.5 799.95 625.6C798.45 625.1 796.35 625.1 794.85 625.6Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="1010.42" y="829.759" width="34" height="28" fill="url(#pattern13_1322_3092)"/>
                  <path d="M1024.85 842C1022.15 842.9 1022.15 844.8 1024.85 845.7C1026.35 846.2 1028.45 846.2 1029.95 845.7C1032.65 844.8 1032.65 842.9 1029.95 842C1028.45 841.5 1026.35 841.5 1024.85 842Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="1024.42" y="837.759" width="34" height="28" fill="url(#pattern14_1322_3092)"/>
                  <path d="M1038.75 848.7C1036.05 849.7 1036.05 851.6 1038.75 852.5C1040.25 853 1042.35 853 1043.85 852.5C1046.55 851.6 1046.55 849.7 1043.85 848.7C1042.35 848.2 1040.25 848.2 1038.75 848.7Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="1038.42" y="843.759" width="34" height="28" fill="url(#pattern15_1322_3092)"/>
                  <path d="M1052.65 855.5C1049.95 856.4 1049.95 858.3 1052.65 859.2C1054.15 859.7 1056.25 859.7 1057.75 859.2C1060.45 858.3 1060.45 856.4 1057.75 855.5C1056.25 855 1054.15 855 1052.65 855.5Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M433.65 550.9C435.55 551.9 435.75 553.3 434.35 554.3L593.55 631.6V647.2L684.75 691.5C686.95 690.8 689.85 690.9 691.75 691.9C693.95 692.9 693.95 694.7 691.75 695.8C689.55 696.8 685.95 696.8 683.75 695.8C681.85 694.8 681.55 693.4 682.95 692.3L590.95 647.7V632.1L432.65 555.2C430.45 555.9 427.45 555.7 425.55 554.8C423.35 553.8 423.35 552 425.55 550.9C427.85 549.9 431.45 549.9 433.65 550.9ZM685.55 694.9C686.75 695.5 688.75 695.5 689.95 694.9C691.25 694.3 691.25 693.3 689.95 692.7C688.75 692.1 686.75 692.1 685.55 692.7C684.35 693.3 684.35 694.3 685.55 694.9ZM427.35 554C428.65 554.6 430.65 554.6 431.85 554C433.05 553.4 433.05 552.4 431.85 551.8C430.65 551.2 428.65 551.2 427.35 551.8C426.15 552.4 426.15 553.4 427.35 554Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M244.85 463.2C246.75 464.1 246.95 465.5 245.55 466.6L404.75 543.8V559.4L495.95 603.7C498.15 603.1 501.05 603.2 502.95 604.1C505.15 605.2 505.15 606.9 502.95 608C500.75 609.1 497.15 609.1 494.95 608C493.05 607.1 492.75 605.7 494.15 604.6L402.15 559.9V544.3L243.85 467.5C241.65 468.1 238.65 468 236.75 467.1C234.55 466 234.55 464.3 236.75 463.2C239.05 462.1 242.65 462.1 244.85 463.2ZM496.75 607.2C497.95 607.7 499.95 607.7 501.15 607.2C502.45 606.6 502.45 605.6 501.15 605C499.95 604.4 497.95 604.4 496.75 605C495.55 605.6 495.55 606.6 496.75 607.2ZM238.55 466.2C239.85 466.8 241.85 466.8 243.05 466.2C244.25 465.6 244.25 464.7 243.05 464.1C241.85 463.5 239.85 463.5 238.55 464.1C237.35 464.7 237.35 465.6 238.55 466.2Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1172.85 834C1174.75 834.9 1174.95 836.3 1173.65 837.4L1475.65 984V1031.1H1473.15V984.5L1171.85 838.3C1169.65 838.9 1166.75 838.8 1164.75 837.9C1162.55 836.8 1162.55 835.1 1164.75 834C1167.05 832.9 1170.65 832.9 1172.85 834ZM1166.55 837C1167.85 837.6 1169.85 837.6 1171.05 837C1172.25 836.4 1172.25 835.4 1171.05 834.9C1169.85 834.3 1167.85 834.3 1166.55 834.9C1165.35 835.4 1165.35 836.4 1166.55 837Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M902.05 755.8C903.95 756.7 904.15 758.1 902.85 759.2L1550.45 1073.5L1548.65 1074.4L901.05 760C898.85 760.7 895.95 760.6 894.05 759.7C891.75 758.6 891.75 756.8 894.05 755.8C896.25 754.7 899.85 754.7 902.05 755.8ZM895.75 758.8C897.05 759.4 899.05 759.4 900.25 758.8C901.45 758.2 901.45 757.2 900.25 756.6C899.05 756 897.05 756 895.75 756.6C894.55 757.2 894.55 758.2 895.75 758.8Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1182.35 762.9C1184.25 763.8 1184.45 765.2 1183.15 766.3L1458.35 899.9V968.6L1701.45 1086.6L1699.75 1087.5L1455.85 969.1V900.4L1181.35 767.2C1179.15 767.8 1176.25 767.7 1174.35 766.8C1172.15 765.7 1172.15 764 1174.35 762.9C1176.55 761.8 1180.15 761.8 1182.35 762.9ZM1176.05 765.9C1177.35 766.5 1179.35 766.5 1180.55 765.9C1181.75 765.3 1181.75 764.4 1180.55 763.8C1179.35 763.2 1177.35 763.2 1176.05 763.8C1174.85 764.4 1174.85 765.3 1176.05 765.9Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M904.05 689.4C905.95 688.5 908.85 688.4 911.05 689L1186.25 555.5H1327.85L1571.05 437.5L1572.85 438.3L1328.95 556.7H1187.35L912.85 689.9C914.15 691 913.95 692.4 912.05 693.3C909.85 694.4 906.25 694.4 904.05 693.3C901.85 692.2 901.85 690.5 904.05 689.4ZM910.25 692.5C911.45 691.9 911.45 690.9 910.25 690.3C909.05 689.7 907.05 689.7 905.75 690.3C904.55 690.9 904.55 691.9 905.75 692.5C907.05 693 909.05 693 910.25 692.5Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M767.25 789C765.35 789.9 762.45 790 760.25 789.4L485.05 923H343.45L100.25 1041L98.4501 1040.1L342.35 921.7H483.95L758.45 788.5C757.05 787.4 757.35 786 759.25 785.1C761.45 784 765.05 784 767.25 785.1C769.45 786.2 769.45 787.9 767.25 789ZM761.05 786C759.75 786.6 759.75 787.5 761.05 788.1C762.25 788.7 764.25 788.7 765.45 788.1C766.75 787.5 766.75 786.6 765.45 786C764.25 785.4 762.25 785.4 761.05 786Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M949.15 733.2C951.05 734.2 951.35 735.6 949.95 736.7L1226.15 870.7V900.2L1458.45 1012.9L1456.65 1013.8L1223.65 900.7V871.2L948.15 737.5C945.95 738.2 943.05 738.1 941.15 737.1C938.95 736.1 938.95 734.3 941.15 733.2C943.35 732.2 946.95 732.2 949.15 733.2ZM942.95 736.3C944.15 736.9 946.15 736.9 947.35 736.3C948.55 735.7 948.55 734.7 947.35 734.1C946.15 733.5 944.15 733.5 942.95 734.1C941.65 734.7 941.65 735.7 942.95 736.3Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M629.05 722.3C627.15 721.4 626.85 720 628.25 718.9L351.95 584.8V555.4L119.75 442.7L121.55 441.8L354.55 554.9V584.3L630.05 718C632.25 717.4 635.15 717.5 637.05 718.4C639.25 719.5 639.25 721.2 637.05 722.3C634.85 723.4 631.25 723.4 629.05 722.3ZM635.25 719.3C634.05 718.7 632.05 718.7 630.85 719.3C629.55 719.9 629.55 720.9 630.85 721.5C632.05 722.1 634.05 722.1 635.25 721.5C636.45 720.9 636.45 719.9 635.25 719.3Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M388.95 491.9C390.85 492.9 391.05 494.3 389.65 495.3L527.55 562.3H603.85L777.45 646.5C779.65 645.8 782.55 646 784.45 646.9C786.65 648 786.65 649.7 784.45 650.8C782.25 651.8 778.65 651.8 776.45 650.8C774.55 649.8 774.25 648.4 775.65 647.4L602.85 563.5H526.55L387.95 496.2C385.75 496.9 382.75 496.8 380.85 495.8C378.65 494.8 378.65 493 380.85 491.9C383.05 490.9 386.65 490.9 388.95 491.9ZM778.25 649.9C779.45 650.5 781.45 650.5 782.65 649.9C783.95 649.3 783.95 648.3 782.65 647.7C781.45 647.1 779.45 647.1 778.25 647.7C776.95 648.3 776.95 649.3 778.25 649.9ZM382.65 495C383.85 495.6 385.85 495.6 387.15 495C388.35 494.4 388.35 493.4 387.15 492.8C385.85 492.2 383.85 492.2 382.65 492.8C381.45 493.4 381.45 494.4 382.65 495Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M841.05 785.4C842.95 786.3 843.25 787.7 841.85 788.8L933.35 833.2H1043.35L1439.05 1025.2L1437.25 1026.1L1042.35 834.4H932.25L840.05 789.6C837.85 790.3 834.95 790.2 833.05 789.2C830.85 788.2 830.85 786.4 833.05 785.4C835.25 784.3 838.85 784.3 841.05 785.4ZM834.85 788.4C836.05 789 838.05 789 839.25 788.4C840.55 787.8 840.55 786.8 839.25 786.2C838.05 785.6 836.05 785.6 834.85 786.2C833.55 786.8 833.55 787.8 834.85 788.4Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M793.45 801.7C791.55 802.6 788.65 802.8 786.45 802.1L729.05 830V846.9L652.25 884.2C653.65 885.2 653.35 886.7 651.45 887.6C649.25 888.7 645.65 888.7 643.45 887.6C641.25 886.5 641.25 884.8 643.45 883.7C645.35 882.8 648.25 882.6 650.45 883.3L726.55 846.4V829.4L784.65 801.2C783.25 800.2 783.55 798.7 785.45 797.8C787.65 796.7 791.25 796.7 793.45 797.8C795.65 798.9 795.65 800.6 793.45 801.7ZM645.25 884.6C643.95 885.2 643.95 886.1 645.25 886.7C646.45 887.3 648.45 887.3 649.65 886.7C650.85 886.1 650.85 885.2 649.65 884.6C648.45 884 646.45 884 645.25 884.6ZM787.25 798.7C785.95 799.3 785.95 800.2 787.25 800.8C788.45 801.4 790.45 801.4 791.65 800.8C792.95 800.2 792.95 799.3 791.65 798.7C790.45 798.1 788.45 798.1 787.25 798.7Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M624.35 780.3C622.35 781.2 619.45 781.4 617.25 780.7L559.85 808.6V825.5L483.05 862.8C484.45 863.8 484.15 865.3 482.25 866.2C480.05 867.3 476.45 867.3 474.25 866.2C472.05 865.1 472.05 863.4 474.25 862.3C476.15 861.4 479.05 861.2 481.25 861.9L557.35 825V808L615.45 779.8C614.15 778.8 614.35 777.3 616.25 776.4C618.45 775.3 622.05 775.3 624.35 776.4C626.55 777.5 626.55 779.2 624.35 780.3ZM476.05 863.2C474.85 863.8 474.85 864.7 476.05 865.3C477.25 865.9 479.25 865.9 480.55 865.3C481.75 864.7 481.75 863.8 480.55 863.2C479.25 862.6 477.25 862.6 476.05 863.2ZM618.05 777.3C616.85 777.9 616.85 778.8 618.05 779.4C619.25 780 621.25 780 622.55 779.4C623.75 778.8 623.75 777.9 622.55 777.3C621.25 776.7 619.25 776.7 618.05 777.3Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M486.15 636.9C488.05 637.8 488.25 639.2 486.85 640.3L544.25 668.2H579.25L656.05 705.4C658.25 704.8 661.15 704.9 663.05 705.8C665.25 706.9 665.25 708.6 663.05 709.7C660.85 710.8 657.25 710.8 655.05 709.7C653.15 708.8 652.85 707.4 654.25 706.3L578.15 669.4H543.25L485.15 641.2C482.95 641.8 479.95 641.7 478.05 640.8C475.85 639.7 475.85 638 478.05 636.9C480.25 635.8 483.85 635.8 486.15 636.9ZM656.85 708.8C658.05 709.4 660.05 709.4 661.25 708.8C662.45 708.2 662.45 707.3 661.25 706.7C660.05 706.1 658.05 706.1 656.85 706.7C655.55 707.3 655.55 708.2 656.85 708.8ZM479.85 639.9C481.05 640.5 483.05 640.5 484.35 639.9C485.55 639.3 485.55 638.3 484.35 637.7C483.05 637.2 481.05 637.2 479.85 637.7C478.65 638.3 478.65 639.3 479.85 639.9Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M981.15 836.7C983.05 837.6 983.35 839 981.95 840.1L1039.35 867.9H1074.25L1151.15 905.2C1153.25 904.5 1156.25 904.7 1158.15 905.6C1160.35 906.7 1160.35 908.4 1158.15 909.5C1155.95 910.5 1152.35 910.5 1150.15 909.5C1148.25 908.6 1147.95 907.1 1149.35 906.1L1073.25 869.1H1038.35L980.15 840.9C977.95 841.6 975.05 841.5 973.15 840.5C970.95 839.5 970.95 837.7 973.15 836.7C975.35 835.6 978.95 835.6 981.15 836.7ZM1151.85 908.6C1153.15 909.2 1155.15 909.2 1156.35 908.6C1157.55 908 1157.55 907 1156.35 906.4C1155.15 905.8 1153.15 905.8 1151.85 906.4C1150.65 907 1150.65 908 1151.85 908.6ZM974.95 839.7C976.15 840.3 978.15 840.3 979.45 839.7C980.65 839.1 980.65 838.1 979.45 837.5C978.15 836.9 976.15 836.9 974.95 837.5C973.75 838.1 973.75 839.1 974.95 839.7Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M909.55 872.1C911.45 873 911.75 874.4 910.35 875.5L1290.75 1060.1H1391.35V1061.3H1289.65L908.55 876.3C906.35 877 903.45 876.9 901.55 876C899.35 874.9 899.35 873.1 901.55 872.1C903.75 871 907.35 871 909.55 872.1ZM903.35 875.1C904.55 875.7 906.55 875.7 907.75 875.1C909.05 874.5 909.05 873.5 907.75 872.9C906.55 872.3 904.55 872.3 903.35 872.9C902.15 873.5 902.15 874.5 903.35 875.1Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1050.35 949.6C1052.25 950.5 1052.45 951.9 1051.15 953L1174.65 1013V1034L1259.35 1075.1C1261.55 1074.4 1264.45 1074.5 1266.35 1075.5C1268.55 1076.5 1268.55 1078.3 1266.35 1079.3C1264.15 1080.4 1260.55 1080.4 1258.35 1079.3C1256.45 1078.4 1256.15 1077 1257.55 1075.9L1172.15 1034.5V1013.5L1049.35 953.8C1047.15 954.5 1044.25 954.4 1042.35 953.5C1040.05 952.4 1040.05 950.6 1042.35 949.6C1044.55 948.5 1048.15 948.5 1050.35 949.6ZM1260.15 1078.5C1261.35 1079.1 1263.35 1079.1 1264.55 1078.5C1265.85 1077.9 1265.85 1076.9 1264.55 1076.3C1263.35 1075.7 1261.35 1075.7 1260.15 1076.3C1258.85 1076.9 1258.95 1077.9 1260.15 1078.5ZM1044.05 952.6C1045.35 953.2 1047.35 953.2 1048.55 952.6C1049.75 952 1049.75 951 1048.55 950.4C1047.35 949.8 1045.35 949.8 1044.05 950.4C1042.85 951 1042.85 952 1044.05 952.6Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M792.85 601.9C790.65 602.9 787.05 602.9 784.85 601.9C782.95 600.9 782.65 599.5 784.05 598.5L509.55 465.2H367.95L124.05 346.9L125.85 346L368.95 464H510.55L785.85 597.6C788.05 596.9 790.95 597 792.85 598C795.05 599 795.05 600.8 792.85 601.9ZM791.05 601C792.25 600.4 792.25 599.4 791.05 598.8C789.85 598.2 787.85 598.2 786.55 598.8C785.35 599.4 785.35 600.4 786.55 601C787.85 601.6 789.85 601.6 791.05 601Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M583.65 717.8C581.45 718.9 577.85 718.9 575.65 717.8C573.75 716.9 573.55 715.4 574.85 714.4L193.75 529.4V480.1H196.25V528.9L576.65 713.5C578.85 712.8 581.75 713 583.65 713.9C585.85 715 585.85 716.7 583.65 717.8ZM581.95 716.9C583.15 716.3 583.15 715.4 581.95 714.8C580.65 714.2 578.65 714.2 577.45 714.8C576.25 715.4 576.25 716.3 577.45 716.9C578.65 717.5 580.65 717.5 581.95 716.9Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M424.05 649.5C421.85 650.6 418.25 650.6 415.95 649.5C414.05 648.6 413.85 647.1 415.25 646.1L292.35 586.4H249.05L163.65 545C161.45 545.7 158.55 545.5 156.65 544.6C154.35 543.5 154.35 541.8 156.65 540.7C158.85 539.7 162.45 539.7 164.65 540.7C166.55 541.7 166.75 543.1 165.45 544.1L250.05 585.2H293.45L416.95 645.2C419.15 644.5 422.15 644.7 424.05 645.6C426.25 646.7 426.25 648.4 424.05 649.5ZM162.85 543.8C164.05 543.2 164.05 542.2 162.85 541.6C161.65 541 159.65 541 158.35 541.6C157.15 542.2 157.15 543.2 158.35 543.8C159.65 544.4 161.65 544.4 162.85 543.8ZM422.25 648.6C423.45 648 423.45 647 422.25 646.4C421.05 645.9 419.05 645.9 417.75 646.4C416.55 647 416.55 648 417.75 648.6C419.05 649.2 421.05 649.2 422.25 648.6Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M535.45 737.2C537.75 738.3 537.75 740 535.45 741.1C533.55 742 530.65 742.1 528.45 741.5L253.95 874.7V943.4L10.1501 1061.8L8.3501 1060.9L251.45 942.9V874.2L526.65 740.6C525.35 739.6 525.55 738.1 527.45 737.2C529.65 736.1 533.25 736.1 535.45 737.2ZM533.75 738.1C532.45 737.5 530.45 737.5 529.25 738.1C528.05 738.7 528.05 739.6 529.25 740.2C530.45 740.8 532.45 740.8 533.75 740.2C534.95 739.6 534.95 738.7 533.75 738.1Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M808.15 846.4C810.35 847.5 810.35 849.3 808.15 850.3C806.25 851.3 803.35 851.4 801.15 850.7L420.05 1035.7H318.35V1034.5H418.95L799.35 849.8C797.95 848.8 798.25 847.4 800.15 846.4C802.35 845.4 805.95 845.4 808.15 846.4ZM806.35 847.3C805.15 846.7 803.15 846.7 801.95 847.3C800.65 847.9 800.65 848.9 801.95 849.5C803.15 850.1 805.15 850.1 806.35 849.5C807.55 848.9 807.55 847.9 806.35 847.3Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M786.65 875.8C788.95 876.9 788.95 878.6 786.65 879.7C784.75 880.6 781.85 880.8 779.65 880.1L656.85 939.7V960.8L571.45 1002.2C572.85 1003.3 572.55 1004.7 570.65 1005.6C568.45 1006.7 564.85 1006.7 562.65 1005.6C560.45 1004.5 560.45 1002.8 562.65 1001.7C564.55 1000.8 567.45 1000.7 569.65 1001.3L654.25 960.3V939.2L777.85 879.2C776.55 878.2 776.75 876.7 778.65 875.8C780.85 874.8 784.45 874.8 786.65 875.8ZM568.85 1002.6C567.65 1002 565.65 1002 564.45 1002.6C563.15 1003.2 563.15 1004.2 564.45 1004.7C565.65 1005.3 567.65 1005.3 568.85 1004.7C570.05 1004.2 570.05 1003.2 568.85 1002.6ZM784.95 876.7C783.65 876.1 781.65 876.1 780.45 876.7C779.25 877.3 779.25 878.3 780.45 878.9C781.65 879.4 783.65 879.4 784.95 878.9C786.15 878.3 786.15 877.3 784.95 876.7Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M812.45 620.1C810.25 619 810.25 617.3 812.45 616.2C814.35 615.3 817.25 615.2 819.45 615.8L1200.55 430.9H1302.25V432.1H1201.65L821.25 616.7C822.65 617.8 822.35 619.2 820.45 620.1C818.25 621.2 814.65 621.2 812.45 620.1ZM814.25 619.2C815.45 619.8 817.45 619.8 818.65 619.2C819.95 618.6 819.95 617.7 818.65 617.1C817.45 616.5 815.45 616.5 814.25 617.1C812.95 617.7 812.95 618.6 814.25 619.2Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M833.85 590.7C831.65 589.6 831.65 587.9 833.85 586.8C835.75 585.9 838.75 585.8 840.95 586.4L963.75 526.8V505.8L1049.15 464.3C1047.75 463.3 1048.05 461.9 1049.95 460.9C1052.15 459.9 1055.75 459.9 1057.95 460.9C1060.15 462 1060.15 463.8 1057.95 464.8C1056.05 465.7 1053.15 465.9 1050.95 465.2L966.25 506.3V527.3L842.65 587.3C844.05 588.4 843.85 589.8 841.95 590.7C839.75 591.8 836.15 591.8 833.85 590.7ZM1051.75 464C1052.95 464.6 1054.95 464.6 1056.15 464C1057.45 463.4 1057.45 462.4 1056.15 461.8C1054.95 461.2 1052.95 461.2 1051.75 461.8C1050.45 462.4 1050.45 463.4 1051.75 464ZM835.65 589.9C836.95 590.5 838.95 590.5 840.15 589.9C841.35 589.3 841.35 588.3 840.15 587.7C838.95 587.1 836.95 587.1 835.65 587.7C834.45 588.3 834.45 589.3 835.65 589.9Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1116.05 681.3C1113.85 680.2 1113.85 678.4 1116.05 677.4C1117.95 676.4 1120.85 676.3 1123.05 677L1504.15 492H1605.85V493.2H1505.15L1124.85 677.9C1126.15 678.9 1125.95 680.3 1124.05 681.3C1121.85 682.3 1118.25 682.3 1116.05 681.3ZM1117.75 680.4C1119.05 681 1121.05 681 1122.25 680.4C1123.45 679.8 1123.45 678.8 1122.25 678.2C1121.05 677.6 1119.05 677.6 1117.75 678.2C1116.55 678.8 1116.55 679.8 1117.75 680.4Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1024.05 706.9C1021.85 705.8 1021.85 704.1 1024.05 703C1025.95 702.1 1028.95 702 1031.15 702.6L1153.95 643V622L1239.35 580.5C1237.95 579.5 1238.25 578 1240.15 577.1C1242.35 576 1245.95 576 1248.15 577.1C1250.35 578.2 1250.35 579.9 1248.15 581C1246.25 581.9 1243.35 582.1 1241.15 581.4L1156.45 622.5V643.5L1032.95 703.5C1034.25 704.6 1034.05 706 1032.15 706.9C1029.95 708 1026.35 708 1024.05 706.9ZM1241.95 580.1C1243.15 580.7 1245.15 580.7 1246.35 580.1C1247.65 579.5 1247.65 578.6 1246.35 578C1245.15 577.4 1243.15 577.4 1241.95 578C1240.65 578.6 1240.65 579.5 1241.95 580.1ZM1025.85 706C1027.15 706.6 1029.15 706.6 1030.35 706C1031.55 705.4 1031.55 704.5 1030.35 703.9C1029.15 703.3 1027.15 703.3 1025.85 703.9C1024.65 704.5 1024.65 705.4 1025.85 706Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1131.35 528.3C1133.55 529.4 1133.55 531.1 1131.35 532.2C1129.45 533.1 1126.45 533.2 1124.25 532.6L1001.45 592.2V613.2L878.15 673C879.55 674.1 879.35 675.5 877.45 676.5C875.25 677.5 871.65 677.5 869.35 676.5C867.15 675.4 867.15 673.6 869.35 672.6C871.25 671.6 874.25 671.5 876.45 672.2L998.95 612.7V591.7L1122.55 531.7C1121.15 530.6 1121.35 529.2 1123.25 528.3C1125.55 527.2 1129.15 527.2 1131.35 528.3ZM875.65 673.4C874.35 672.8 872.45 672.8 871.15 673.4C869.95 674 869.95 675 871.15 675.6C872.45 676.2 874.35 676.2 875.65 675.6C876.85 675 876.85 674 875.65 673.4ZM1129.55 529.2C1128.25 528.6 1126.35 528.6 1125.05 529.2C1123.85 529.8 1123.85 530.7 1125.05 531.3C1126.35 531.9 1128.25 531.9 1129.55 531.3C1130.75 530.7 1130.75 529.8 1129.55 529.2Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M584.45 733.6C586.65 734.7 586.65 736.5 584.45 737.5C582.55 738.5 579.65 738.6 577.45 737.9L454.65 797.5V818.6L369.25 860C370.55 861.1 370.35 862.5 368.45 863.4C366.25 864.5 362.65 864.5 360.45 863.4C358.25 862.4 358.25 860.6 360.45 859.5C362.35 858.6 365.25 858.5 367.45 859.2L452.05 818.1V797L575.65 737.1C574.25 736 574.55 734.6 576.45 733.6C578.65 732.6 582.25 732.6 584.45 733.6ZM366.65 860.4C365.45 859.8 363.45 859.8 362.15 860.4C360.95 861 360.95 862 362.15 862.6C363.45 863.2 365.45 863.2 366.65 862.6C367.85 862 367.85 861 366.65 860.4ZM582.65 734.5C581.45 733.9 579.45 733.9 578.25 734.5C577.05 735.1 577.05 736.1 578.25 736.7C579.45 737.3 581.45 737.3 582.65 736.7C583.95 736.1 583.95 735.1 582.65 734.5Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M632.15 892.8C634.45 893.9 634.45 895.6 632.15 896.7C630.25 897.6 627.35 897.8 625.15 897.1L502.35 956.7V977.8L416.95 1019.2C418.35 1020.3 418.05 1021.7 416.15 1022.6C413.95 1023.7 410.35 1023.7 408.15 1022.6C405.95 1021.5 405.95 1019.8 408.15 1018.7C410.05 1017.8 412.95 1017.7 415.15 1018.3L499.85 977.3V956.2L623.35 896.2C622.05 895.2 622.25 893.8 624.15 892.8C626.35 891.8 629.95 891.8 632.15 892.8ZM414.35 1019.6C413.15 1019 411.15 1019 409.95 1019.6C408.65 1020.2 408.65 1021.2 409.95 1021.8C411.15 1022.3 413.15 1022.3 414.35 1021.8C415.65 1021.2 415.65 1020.2 414.35 1019.6ZM630.45 893.7C629.15 893.1 627.15 893.1 625.95 893.7C624.75 894.3 624.75 895.3 625.95 895.9C627.15 896.5 629.15 896.5 630.45 895.9C631.65 895.3 631.65 894.3 630.45 893.7Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M744.25 777.8C742.35 778.8 739.45 778.9 737.25 778.2L613.65 838.2H570.35L485.65 879.3C487.05 880.3 486.75 881.8 484.85 882.7C482.65 883.8 479.05 883.8 476.85 882.7C474.65 881.6 474.65 879.9 476.85 878.8C478.75 877.9 481.65 877.7 483.85 878.4L569.25 837H612.65L735.45 777.3C734.05 776.3 734.35 774.9 736.25 773.9C738.45 772.9 742.05 772.9 744.25 773.9C746.45 775 746.45 776.8 744.25 777.8ZM478.65 879.7C477.45 880.3 477.45 881.2 478.65 881.8C479.85 882.4 481.85 882.4 483.05 881.8C484.35 881.2 484.35 880.3 483.05 879.7C481.85 879.1 479.85 879.1 478.65 879.7ZM738.05 774.8C736.75 775.4 736.75 776.4 738.05 777C739.25 777.6 741.25 777.6 742.45 777C743.75 776.4 743.75 775.4 742.45 774.8C741.25 774.2 739.25 774.2 738.05 774.8Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1007.15 899.3C1009.05 900.2 1009.25 901.6 1007.95 902.7L1127.35 960.7H1167.85L1516.75 1130.1L1514.95 1130.9L1166.75 961.9H1126.35L1006.15 903.6C1003.95 904.2 1001.05 904.1 999.15 903.2C996.95 902.1 996.95 900.4 999.15 899.3C1001.35 898.2 1004.95 898.2 1007.15 899.3ZM1000.95 902.3C1002.15 902.9 1004.15 902.9 1005.35 902.3C1006.55 901.7 1006.55 900.8 1005.35 900.2C1004.15 899.6 1002.15 899.6 1000.95 900.2C999.65 900.8 999.65 901.7 1000.95 902.3Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M672.55 743.3C670.65 744.2 667.65 744.5 665.25 744L337.25 903.2V996.2H332.15V902.2L661.65 742.2C660.65 741.1 661.05 739.6 663.05 738.6C665.65 737.4 669.95 737.4 672.55 738.6C675.25 739.9 675.25 742 672.55 743.3ZM665.75 739.9C664.65 740.5 664.65 741.4 665.75 742C666.85 742.5 668.75 742.5 669.95 742C671.05 741.4 671.05 740.5 669.95 739.9C668.75 739.4 666.85 739.4 665.75 739.9Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M928.45 701.2C930.45 700.2 933.35 700 935.75 700.5L1263.85 541.3V498.4H1268.85V542.3L939.35 702.2C940.45 703.4 939.95 704.8 937.95 705.8C935.35 707.1 931.05 707.1 928.45 705.8C925.85 704.5 925.85 702.5 928.45 701.2ZM935.25 704.5C936.45 704 936.45 703.1 935.25 702.5C934.15 701.9 932.25 701.9 931.15 702.5C929.95 703.1 929.95 704 931.15 704.5C932.25 705.1 934.15 705.1 935.25 704.5Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1002.05 726.9C1004.05 727.8 1004.25 729.2 1002.85 730.3L1140.25 796.9V812.6L1385.05 931.4C1387.25 930.7 1390.15 930.8 1392.05 931.8C1394.25 932.8 1394.25 934.6 1392.05 935.6C1389.85 936.7 1386.25 936.7 1384.05 935.6C1382.05 934.7 1381.85 933.3 1383.25 932.2L1137.75 813.1V797.4L1001.05 731.1C998.95 731.8 995.95 731.7 994.05 730.8C991.85 729.7 991.85 727.9 994.05 726.9C996.25 725.8 999.85 725.8 1002.05 726.9ZM1385.75 934.8C1387.05 935.4 1389.05 935.4 1390.25 934.8C1391.45 934.2 1391.45 933.2 1390.25 932.6C1389.05 932 1387.05 932 1385.75 932.6C1384.55 933.2 1384.55 934.2 1385.75 934.8ZM995.85 729.9C997.05 730.5 999.05 730.5 1000.35 729.9C1001.55 729.3 1001.55 728.3 1000.35 727.7C999.05 727.1 997.05 727.1 995.85 727.7C994.65 728.3 994.65 729.3 995.85 729.9Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1323.35 932.4L1320.95 933.6L1090.15 821.6V716.7C1088.95 716.5 1087.75 716.2 1086.85 715.8C1084.05 714.4 1084.05 712.2 1086.85 710.8C1089.65 709.4 1094.25 709.4 1097.05 710.8C1099.95 712.2 1099.95 714.4 1097.05 715.8C1096.05 716.3 1094.85 716.6 1093.45 716.7V820.9L1323.35 932.4ZM1089.25 714.6C1090.75 715.3 1093.25 715.3 1094.85 714.6C1096.35 713.8 1096.35 712.6 1094.85 711.9C1093.25 711.1 1090.75 711.1 1089.25 711.9C1087.75 712.6 1087.75 713.8 1089.25 714.6Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M829.45 533.2C826.65 534.6 822.05 534.6 819.25 533.2C816.35 531.8 816.35 529.6 819.25 528.2C821.65 527 825.35 526.9 828.15 527.7L1055.25 417.3L1057.65 418.5L830.55 528.9C832.15 530.2 831.85 532 829.45 533.2ZM827.15 532.1C828.65 531.3 828.65 530.1 827.15 529.4C825.55 528.6 823.05 528.6 821.55 529.4C820.05 530.1 820.05 531.3 821.55 532.1C823.05 532.8 825.55 532.8 827.15 532.1Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1213.35 754C1210.55 755.4 1205.95 755.4 1203.05 754C1200.25 752.6 1200.25 750.4 1203.05 749C1204.15 748.5 1205.35 748.2 1206.65 748.1V702.3L1324.55 645L1326.95 646.2L1209.95 702.9V748.1C1211.25 748.3 1212.35 748.6 1213.35 749C1216.15 750.4 1216.15 752.6 1213.35 754ZM1210.95 752.9C1212.55 752.1 1212.55 750.9 1210.95 750.2C1209.45 749.4 1206.95 749.4 1205.45 750.2C1203.95 750.9 1203.95 752.1 1205.45 752.9C1206.95 753.6 1209.45 753.6 1210.95 752.9Z" fill="white"/>
                  </g>
                  <path style="mix-blend-mode:color-dodge" d="M868.35 868.2C860.25 872.1 847.25 872.1 839.15 868.2C831.15 864.3 831.15 858 839.15 854.1C847.25 850.2 860.25 850.2 868.35 854.1C876.45 858 876.45 864.3 868.35 868.2Z" fill="url(#paint18_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="848.303" y="857.643" width="12" height="8" fill="url(#pattern16_1322_3092)"/>
                  <path d="M855.15 861.799C854.35 862.199 853.15 862.199 852.35 861.799C851.65 861.499 851.65 860.899 852.35 860.499C853.15 860.099 854.35 860.099 855.15 860.499C855.85 860.899 855.85 861.499 855.15 861.799Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M879.15 897.5C871.15 901.5 858.05 901.5 849.95 897.5C841.95 893.6 841.95 887.3 849.95 883.4C858.05 879.5 871.15 879.5 879.15 883.4C887.25 887.3 887.25 893.6 879.15 897.5Z" fill="url(#paint19_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="858.303" y="885.643" width="12" height="10" fill="url(#pattern17_1322_3092)"/>
                  <path d="M865.95 891.1C865.15 891.5 863.95 891.5 863.15 891.1C862.45 890.8 862.45 890.2 863.15 889.8C863.95 889.4 865.15 889.4 865.95 889.8C866.75 890.2 866.75 890.8 865.95 891.1Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M698.85 754C691.05 757.8 678.35 757.8 670.55 754C662.75 750.2 662.75 744 670.55 740.2C678.35 736.5 691.05 736.5 698.85 740.2C706.65 744 706.65 750.2 698.85 754Z" fill="url(#paint20_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="678.38" y="743.72" width="12" height="8" fill="url(#pattern18_1322_3092)"/>
                  <path d="M686.05 747.8C685.25 748.1 684.05 748.1 683.35 747.8C682.65 747.4 682.65 746.8 683.35 746.5C684.05 746.1 685.25 746.1 686.05 746.5C686.75 746.8 686.75 747.4 686.05 747.8Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M643.75 780.7C635.95 784.5 623.25 784.5 615.45 780.7C607.65 776.9 607.65 770.8 615.45 767C623.25 763.2 635.95 763.2 643.75 767C651.55 770.8 651.55 776.9 643.75 780.7Z" fill="url(#paint21_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="624.38" y="769.721" width="12" height="10" fill="url(#pattern19_1322_3092)"/>
                  <path d="M630.95 774.5C630.25 774.8 629.05 774.8 628.25 774.5C627.55 774.1 627.55 773.5 628.25 773.2C629.05 772.8 630.25 772.8 630.95 773.2C631.65 773.5 631.65 774.1 630.95 774.5Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M818.95 809.5C811.15 813.2 798.45 813.2 790.65 809.5C782.85 805.7 782.85 799.5 790.65 795.7C798.45 791.9 811.15 791.9 818.95 795.7C826.75 799.5 826.75 805.7 818.95 809.5Z" fill="url(#paint22_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="800.38" y="797.72" width="10" height="10" fill="url(#pattern20_1322_3092)"/>
                  <path d="M806.15 803.2C805.35 803.6 804.15 803.6 803.45 803.2C802.75 802.9 802.75 802.3 803.45 801.9C804.15 801.6 805.35 801.6 806.15 801.9C806.85 802.3 806.85 802.9 806.15 803.2Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M737.45 774.9C729.55 778.7 716.95 778.7 709.15 774.9C701.35 771.1 701.35 765 709.15 761.2C716.95 757.4 729.55 757.4 737.45 761.2C745.25 765 745.25 771.1 737.45 774.9Z" fill="url(#paint23_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="718.38" y="763.72" width="12" height="10" fill="url(#pattern21_1322_3092)"/>
                  <path d="M724.55 768.7C723.85 769.1 722.65 769.1 721.95 768.7C721.15 768.3 721.15 767.8 721.95 767.4C722.65 767.1 723.85 767.1 724.55 767.4C725.35 767.8 725.35 768.3 724.55 768.7Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M765.45 788.6C757.65 792.4 745.05 792.4 737.25 788.6C729.45 784.8 729.45 778.6 737.25 774.8C745.05 771 757.65 771 765.45 774.8C773.35 778.6 773.35 784.8 765.45 788.6Z" fill="url(#paint24_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="746.38" y="777.72" width="12" height="10" fill="url(#pattern22_1322_3092)"/>
                  <path d="M752.65 782.299C751.95 782.699 750.75 782.699 750.05 782.299C749.25 781.999 749.25 781.399 750.05 780.999C750.75 780.699 751.95 780.699 752.65 780.999C753.45 781.399 753.45 781.999 752.65 782.299Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M868.05 785.6C860.25 789.4 847.55 789.4 839.75 785.6C831.95 781.8 831.95 775.7 839.75 771.9C847.55 768.1 860.25 768.1 868.05 771.9C875.85 775.7 875.85 781.8 868.05 785.6Z" fill="url(#paint25_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="848.38" y="773.72" width="12" height="10" fill="url(#pattern23_1322_3092)"/>
                  <path d="M855.25 779.4C854.45 779.8 853.25 779.8 852.55 779.4C851.85 779.1 851.85 778.5 852.55 778.1C853.25 777.8 854.45 777.8 855.25 778.1C855.95 778.5 855.95 779.1 855.25 779.4Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M633.35 653.9C625.55 657.7 612.85 657.7 605.05 653.9C597.25 650.1 597.25 644 605.05 640.2C612.85 636.4 625.55 636.4 633.35 640.2C641.15 644 641.15 650.1 633.35 653.9Z" fill="url(#paint26_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="614.38" y="643.72" width="12" height="8" fill="url(#pattern24_1322_3092)"/>
                  <path d="M620.55 647.7C619.85 648.1 618.65 648.1 617.85 647.7C617.15 647.4 617.15 646.8 617.85 646.4C618.65 646.1 619.85 646.1 620.55 646.4C621.25 646.8 621.25 647.4 620.55 647.7Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M676.45 545.4C668.65 549.2 655.95 549.2 648.15 545.4C640.35 541.6 640.35 535.5 648.15 531.7C655.95 527.9 668.65 527.9 676.45 531.7C684.25 535.5 684.25 541.6 676.45 545.4Z" fill="url(#paint27_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="656.38" y="533.72" width="12" height="10" fill="url(#pattern25_1322_3092)"/>
                  <path d="M663.65 539.2C662.95 539.6 661.75 539.6 660.95 539.2C660.25 538.8 660.25 538.3 660.95 537.9C661.75 537.5 662.95 537.5 663.65 537.9C664.45 538.3 664.45 538.8 663.65 539.2Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M1075.75 715.1C1067.65 719 1054.55 719 1046.55 715.1C1038.45 711.1 1038.45 704.8 1046.55 700.9C1054.55 697 1067.65 697 1075.75 700.9C1083.75 704.8 1083.75 711.1 1075.75 715.1Z" fill="url(#paint28_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="1056.3" y="703.643" width="12" height="10" fill="url(#pattern26_1322_3092)"/>
                  <path d="M1062.45 708.6C1061.75 709 1060.45 709 1059.75 708.6C1058.95 708.3 1058.95 707.7 1059.75 707.3C1060.45 706.9 1061.75 706.9 1062.45 707.3C1063.25 707.7 1063.25 708.3 1062.45 708.6Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M1071.75 796.5C1063.65 800.4 1050.65 800.4 1042.55 796.5C1034.55 792.6 1034.55 786.2 1042.55 782.3C1050.65 778.4 1063.65 778.4 1071.75 782.3C1079.85 786.2 1079.85 792.6 1071.75 796.5Z" fill="url(#paint29_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="1052.3" y="785.643" width="12" height="10" fill="url(#pattern27_1322_3092)"/>
                  <path d="M1058.55 790.1C1057.75 790.5 1056.55 790.5 1055.75 790.1C1055.05 789.7 1055.05 789.1 1055.75 788.8C1056.55 788.4 1057.75 788.4 1058.55 788.8C1059.35 789.1 1059.35 789.7 1058.55 790.1Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M1156.45 775.4C1148.35 779.3 1135.35 779.3 1127.25 775.4C1119.25 771.5 1119.25 765.1 1127.25 761.2C1135.35 757.3 1148.35 757.3 1156.45 761.2C1164.55 765.1 1164.55 771.5 1156.45 775.4Z" fill="url(#paint30_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="1136.3" y="763.644" width="12" height="10" fill="url(#pattern28_1322_3092)"/>
                  <path d="M1143.25 769.001C1142.45 769.301 1141.25 769.301 1140.45 769.001C1139.75 768.601 1139.75 768.001 1140.45 767.601C1141.25 767.301 1142.45 767.301 1143.25 767.601C1143.95 768.001 1143.95 768.601 1143.25 769.001Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M978.35 732.7C970.35 736.6 957.25 736.6 949.25 732.7C941.15 728.8 941.15 722.5 949.25 718.6C957.25 714.6 970.35 714.6 978.35 718.6C986.45 722.5 986.45 728.8 978.35 732.7Z" fill="url(#paint31_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="958.303" y="721.643" width="12" height="10" fill="url(#pattern29_1322_3092)"/>
                  <path d="M965.15 726.299C964.45 726.699 963.15 726.699 962.45 726.299C961.65 725.899 961.65 725.299 962.45 724.999C963.15 724.599 964.45 724.599 965.15 724.999C965.95 725.299 965.95 725.899 965.15 726.299Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M905.85 690.2C897.75 694.1 884.65 694.1 876.65 690.2C868.55 686.3 868.55 680 876.65 676.1C884.65 672.1 897.75 672.1 905.85 676.1C913.85 680 913.85 686.3 905.85 690.2Z" fill="url(#paint32_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="886.303" y="679.643" width="12" height="8" fill="url(#pattern30_1322_3092)"/>
                  <path d="M892.55 683.799C891.85 684.199 890.55 684.199 889.85 683.799C889.05 683.399 889.05 682.799 889.85 682.499C890.55 682.099 891.85 682.099 892.55 682.499C893.35 682.799 893.35 683.399 892.55 683.799Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M876.05 675.8C867.95 679.7 854.95 679.7 846.85 675.8C838.75 671.9 838.75 665.5 846.85 661.6C854.95 657.7 867.95 657.7 876.05 661.6C884.05 665.5 884.05 671.9 876.05 675.8Z" fill="url(#paint33_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="856.303" y="663.643" width="12" height="10" fill="url(#pattern31_1322_3092)"/>
                  <path d="M862.85 669.399C862.05 669.699 860.85 669.699 860.05 669.399C859.35 668.999 859.35 668.399 860.05 667.999C860.85 667.599 862.05 667.599 862.85 667.999C863.55 668.399 863.55 668.999 862.85 669.399Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M815.05 646.2C806.95 650.1 793.85 650.1 785.85 646.2C777.75 642.3 777.75 636 785.85 632.1C793.85 628.1 806.95 628.1 815.05 632.1C823.05 636 823.05 642.3 815.05 646.2Z" fill="url(#paint34_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="794.303" y="635.643" width="12" height="8" fill="url(#pattern32_1322_3092)"/>
                  <path d="M801.75 639.799C801.05 640.199 799.75 640.199 799.05 639.799C798.25 639.399 798.25 638.799 799.05 638.499C799.75 638.099 801.05 638.099 801.75 638.499C802.55 638.799 802.55 639.399 801.75 639.799Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M792.15 624.9C784.15 628.8 771.05 628.8 762.95 624.9C754.95 621 754.95 614.6 762.95 610.7C771.05 606.8 784.15 606.8 792.15 610.7C800.25 614.6 800.25 621 792.15 624.9Z" fill="url(#paint35_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="772.303" y="613.644" width="12" height="10" fill="url(#pattern33_1322_3092)"/>
                  <path d="M778.95 618.5C778.25 618.9 776.95 618.9 776.25 618.5C775.45 618.1 775.45 617.5 776.25 617.2C776.95 616.8 778.25 616.8 778.95 617.2C779.75 617.5 779.75 618.1 778.95 618.5Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M726.65 689.3C718.65 693.2 705.55 693.2 697.45 689.3C689.45 685.4 689.45 679.1 697.45 675.2C705.55 671.2 718.65 671.2 726.65 675.2C734.75 679.1 734.75 685.4 726.65 689.3Z" fill="url(#paint36_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="706.303" y="677.644" width="12" height="10" fill="url(#pattern34_1322_3092)"/>
                  <path d="M713.45 682.901C712.75 683.301 711.45 683.301 710.75 682.901C709.95 682.501 709.95 681.901 710.75 681.601C711.45 681.201 712.75 681.201 713.45 681.601C714.25 681.901 714.25 682.501 713.45 682.901Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M966.05 840.8C958.05 844.7 944.95 844.7 936.85 840.8C928.85 836.9 928.85 830.5 936.85 826.6C944.95 822.7 958.05 822.7 966.05 826.6C974.15 830.5 974.15 836.9 966.05 840.8Z" fill="url(#paint37_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="946.303" y="829.643" width="12" height="10" fill="url(#pattern35_1322_3092)"/>
                  <path d="M952.85 834.399C952.05 834.699 950.85 834.699 950.05 834.399C949.35 833.999 949.35 833.399 950.05 832.999C950.85 832.699 952.05 832.699 952.85 832.999C953.65 833.399 953.65 833.999 952.85 834.399Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M1056.05 826.5C1033.65 837.4 997.45 837.4 975.15 826.5C952.75 815.7 952.75 798.1 975.15 787.2C997.45 776.4 1033.65 776.4 1056.05 787.2C1078.35 798.1 1078.35 815.7 1056.05 826.5Z" fill="url(#paint38_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="1001.88" y="797.219" width="28" height="20" fill="url(#pattern36_1322_3092)"/>
                  <path d="M1019.35 808.7C1017.25 809.7 1013.85 809.7 1011.75 808.7C1009.65 807.7 1009.65 806 1011.75 805C1013.85 804 1017.25 804 1019.35 805C1021.55 806 1021.55 807.7 1019.35 808.7Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M1157.35 791.4C1135.05 802.3 1098.75 802.3 1076.45 791.4C1054.15 780.6 1054.15 763 1076.45 752.1C1098.75 741.3 1135.05 741.3 1157.35 752.1C1179.65 763 1179.65 780.6 1157.35 791.4Z" fill="url(#paint39_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="1103.88" y="761.219" width="26" height="22" fill="url(#pattern37_1322_3092)"/>
                  <path d="M1120.75 773.599C1118.65 774.699 1115.15 774.699 1113.05 773.599C1110.95 772.599 1110.95 770.999 1113.05 769.899C1115.15 768.899 1118.65 768.899 1120.75 769.899C1122.85 770.999 1122.85 772.599 1120.75 773.599Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M946.25 620.5C923.95 631.4 887.75 631.4 865.35 620.5C843.05 609.7 843.05 592.1 865.35 581.2C887.75 570.4 923.95 570.4 946.25 581.2C968.65 592.1 968.65 609.7 946.25 620.5Z" fill="url(#paint40_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="891.879" y="591.219" width="28" height="20" fill="url(#pattern38_1322_3092)"/>
                  <path d="M909.65 602.7C907.55 603.7 904.15 603.7 902.05 602.7C899.95 601.7 899.95 600 902.05 599C904.15 598 907.55 598 909.65 599C911.75 600 911.75 601.7 909.65 602.7Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M624.15 838.1C601.85 848.9 565.55 848.9 543.25 838.1C520.85 827.3 520.95 809.7 543.25 798.8C565.55 788 601.85 788 624.15 798.8C646.45 809.7 646.45 827.3 624.15 838.1Z" fill="url(#paint41_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="569.879" y="807.219" width="28" height="22" fill="url(#pattern39_1322_3092)"/>
                  <path d="M587.55 820.3C585.45 821.3 581.95 821.3 579.85 820.3C577.75 819.3 577.75 817.6 579.85 816.6C581.95 815.6 585.45 815.6 587.55 816.6C589.65 817.6 589.65 819.3 587.55 820.3Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M939.55 924.8C917.15 935.7 880.95 935.7 858.65 924.8C836.25 914 836.25 896.4 858.65 885.6C880.95 874.7 917.15 874.7 939.55 885.6C961.85 896.4 961.85 914 939.55 924.8Z" fill="url(#paint42_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="885.879" y="895.219" width="26" height="20" fill="url(#pattern40_1322_3092)"/>
                  <path d="M902.85 907C900.75 908.1 897.35 908.1 895.25 907C893.15 906 893.15 904.4 895.25 903.3C897.35 902.3 900.75 902.3 902.85 903.3C904.95 904.4 904.95 906 902.85 907Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M606.95 844.5C599.15 848.3 586.45 848.3 578.65 844.5C570.85 840.7 570.85 834.6 578.65 830.8C586.45 827 599.15 827 606.95 830.8C614.75 834.6 614.75 840.7 606.95 844.5Z" fill="url(#paint43_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="588.38" y="833.72" width="10" height="10" fill="url(#pattern41_1322_3092)"/>
                  <path d="M594.15 838.3C593.35 838.6 592.15 838.6 591.45 838.3C590.75 837.9 590.75 837.3 591.45 837C592.15 836.6 593.35 836.6 594.15 837C594.85 837.3 594.85 837.9 594.15 838.3Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M545.15 711.4C537.35 715.2 524.65 715.2 516.85 711.4C509.05 707.6 509.05 701.5 516.85 697.7C524.65 693.9 537.35 693.9 545.15 697.7C552.95 701.5 552.95 707.6 545.15 711.4Z" fill="url(#paint44_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="526.38" y="699.72" width="12" height="10" fill="url(#pattern42_1322_3092)"/>
                  <path d="M532.35 705.2C531.55 705.6 530.45 705.6 529.65 705.2C528.95 704.8 528.95 704.3 529.65 703.9C530.45 703.6 531.55 703.6 532.35 703.9C533.05 704.3 533.05 704.8 532.35 705.2Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M432.85 696.8C425.05 700.6 412.45 700.6 404.65 696.8C396.85 693 396.85 686.9 404.65 683.1C412.45 679.3 425.05 679.3 432.85 683.1C440.75 686.9 440.75 693 432.85 696.8Z" fill="url(#paint45_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="414.38" y="685.72" width="10" height="10" fill="url(#pattern43_1322_3092)"/>
                  <path d="M420.05 690.6C419.35 690.9 418.15 690.9 417.45 690.6C416.65 690.2 416.65 689.6 417.45 689.3C418.15 688.9 419.35 688.9 420.05 689.3C420.85 689.6 420.85 690.2 420.05 690.6Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M688.05 707.6C680.25 711.4 667.65 711.4 659.75 707.6C651.95 703.8 651.95 697.7 659.75 693.9C667.65 690.1 680.25 690.1 688.05 693.9C695.85 697.7 695.85 703.8 688.05 707.6Z" fill="url(#paint46_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="668.38" y="695.72" width="12" height="10" fill="url(#pattern44_1322_3092)"/>
                  <path d="M675.25 701.4C674.55 701.8 673.35 701.8 672.65 701.4C671.85 701 671.85 700.5 672.65 700.1C673.35 699.7 674.55 699.7 675.25 700.1C676.05 700.5 676.05 701 675.25 701.4Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M804.05 817C796.25 820.8 783.65 820.8 775.75 817C767.95 813.2 767.95 807.1 775.75 803.3C783.65 799.5 796.25 799.5 804.05 803.3C811.85 807.1 811.85 813.2 804.05 817Z" fill="url(#paint47_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="784.38" y="805.72" width="12" height="10" fill="url(#pattern45_1322_3092)"/>
                  <path d="M791.25 810.799C790.55 811.199 789.35 811.199 788.55 810.799C787.85 810.499 787.85 809.899 788.55 809.499C789.35 809.199 790.55 809.199 791.25 809.499C792.05 809.899 792.05 810.499 791.25 810.799Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M775.65 569.8C753.35 580.6 717.15 580.6 694.75 569.8C672.45 558.9 672.45 541.4 694.75 530.5C717.15 519.7 753.35 519.7 775.65 530.5C798.05 541.4 798.05 558.9 775.65 569.8Z" fill="url(#paint48_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="721.879" y="539.22" width="26" height="22" fill="url(#pattern46_1322_3092)"/>
                  <path d="M739.05 552.001C736.95 553.001 733.55 553.001 731.45 552.001C729.25 551.001 729.25 549.301 731.45 548.301C733.55 547.301 736.95 547.301 739.05 548.301C741.15 549.301 741.15 551.001 739.05 552.001Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M555.15 657.8C532.85 668.7 496.65 668.7 474.25 657.8C451.95 647 451.95 629.4 474.25 618.6C496.65 607.7 532.85 607.7 555.15 618.6C577.55 629.4 577.55 647 555.15 657.8Z" fill="url(#paint49_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="501.879" y="627.219" width="26" height="22" fill="url(#pattern47_1322_3092)"/>
                  <path d="M518.55 640C516.45 641.1 513.05 641.1 510.95 640C508.85 639 508.85 637.4 510.95 636.3C513.05 635.3 516.45 635.3 518.55 636.3C520.65 637.4 520.65 639 518.55 640Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M532.35 548C510.05 558.9 473.75 558.9 451.45 548C429.05 537.2 429.05 519.6 451.45 508.8C473.75 497.9 510.05 497.9 532.35 508.8C554.65 519.6 554.65 537.2 532.35 548Z" fill="url(#paint50_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="477.879" y="517.219" width="28" height="22" fill="url(#pattern48_1322_3092)"/>
                  <path d="M495.75 530.299C493.55 531.299 490.15 531.299 488.05 530.299C485.95 529.199 485.95 527.599 488.05 526.599C490.15 525.499 493.55 525.499 495.75 526.599C497.85 527.599 497.85 529.199 495.75 530.299Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M483.05 745.8C460.75 756.7 424.45 756.7 402.15 745.8C379.85 735 379.85 717.4 402.15 706.6C424.45 695.7 460.75 695.7 483.05 706.6C505.35 717.4 505.35 735 483.05 745.8Z" fill="url(#paint51_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="429.879" y="715.219" width="26" height="22" fill="url(#pattern49_1322_3092)"/>
                  <path d="M446.45 728C444.35 729.1 440.85 729.1 438.75 728C436.65 727 436.65 725.4 438.75 724.3C440.85 723.3 444.35 723.3 446.45 724.3C448.55 725.4 448.55 727 446.45 728Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M538.15 819.8C515.75 830.6 479.55 830.6 457.15 819.8C434.85 808.9 434.85 791.3 457.15 780.5C479.55 769.6 515.75 769.6 538.15 780.5C560.45 791.3 560.45 808.9 538.15 819.8Z" fill="url(#paint52_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="483.879" y="789.219" width="28" height="22" fill="url(#pattern50_1322_3092)"/>
                  <path d="M501.45 802C499.35 803 495.95 803 493.85 802C491.75 801 491.75 799.3 493.85 798.3C495.95 797.3 499.35 797.3 501.45 798.3C503.55 799.3 503.55 801 501.45 802Z" fill="white"/>
                  </g>
                  <path d="M734.55 678.9C732.45 677.9 729.55 677.6 726.95 678L662.25 646.6H512.25L371.85 578.5C372.55 577.2 371.95 575.9 369.95 574.9C366.95 573.5 362.15 573.5 359.15 574.9C356.15 576.3 356.15 578.7 359.15 580.1C361.15 581.1 363.95 581.4 366.55 581.1L509.05 650.3H659.15L721.75 680.7C721.15 681.9 721.75 683.2 723.75 684.2C726.75 685.6 731.55 685.6 734.55 684.2C737.55 682.7 737.55 680.4 734.55 678.9Z" fill="url(#paint53_linear_1322_3092)"/>
                  <path d="M839.15 707.2L710.75 644.9V719.1L623.75 676.9L629.65 674L719.05 717.4V643.3L842.65 703.2H958.35L1213.75 578.9L1219.65 581.7L961.75 707.2H839.15Z" fill="url(#paint54_linear_1322_3092)"/>
                  <g opacity="0.4" filter="url(#filter1_f_1322_3092)">
                  <path d="M562.01 679.126L781.848 576.903C784.449 575.693 787.445 575.659 790.074 576.809L1024.57 679.432C1032.14 682.745 1032.65 693.288 1025.44 697.321L801.927 822.31C798.932 823.984 795.288 824.007 792.273 822.369L561.453 696.981C554.234 693.059 554.561 682.589 562.01 679.126Z" fill="url(#paint55_linear_1322_3092)"/>
                  </g>
                  <path d="M1048.95 652.099L805.75 534.399C802.35 532.799 796.85 532.799 793.45 534.399L550.25 652.099C548.55 652.899 547.65 653.999 547.65 655.099V670.399C547.65 671.399 548.55 672.499 550.25 673.299L793.45 790.999C796.85 792.699 802.35 792.699 805.75 790.999L1048.95 673.299C1050.85 672.399 1051.65 671.199 1051.45 669.999V655.199C1051.55 654.099 1050.75 652.999 1048.95 652.099Z" fill="url(#paint56_linear_1322_3092)"/>
                  <path d="M1048.95 648.099L805.75 530.399C802.35 528.799 796.85 528.799 793.45 530.399L550.25 648.099C548.55 648.899 547.65 649.999 547.65 651.099V666.399C547.65 667.399 548.55 668.499 550.25 669.299L793.45 786.999C796.85 788.699 802.35 788.699 805.75 786.999L1048.95 669.299C1050.85 668.399 1051.65 667.199 1051.45 665.999V651.199C1051.55 650.099 1050.75 648.999 1048.95 648.099Z" fill="url(#paint57_linear_1322_3092)"/>
                  <path d="M793.45 771.699L550.25 654.099C546.85 652.399 546.85 649.699 550.25 648.099L793.45 530.399C796.85 528.799 802.35 528.799 805.75 530.399L1048.95 648.099C1052.35 649.699 1052.35 652.399 1048.95 654.099L805.75 771.699C802.35 773.399 796.85 773.399 793.45 771.699Z" fill="url(#paint58_linear_1322_3092)"/>
                  <mask id="mask0_1322_3092" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="576" y="543" width="447" height="217">
                  <path d="M794.12 757.979L578.66 653.719C575.65 652.259 575.65 649.899 578.66 648.439L794.12 544.179C797.13 542.719 802.02 542.719 805.03 544.179L1020.5 648.439C1023.51 649.899 1023.51 652.259 1020.5 653.719L805.03 757.979C802.02 759.439 797.13 759.439 794.12 757.979Z" fill="white"/>
                  </mask>
                  <g mask="url(#mask0_1322_3092)">
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="698.729" y="654.846" width="18" height="16" fill="url(#pattern51_1322_3092)"/>
                  <path d="M708.45 661.399C707.55 660.699 705.55 660.699 704.65 661.399C704.15 661.699 704.15 662.199 704.65 662.599C705.55 663.299 707.55 663.299 708.45 662.599C708.95 662.199 708.95 661.699 708.45 661.399Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="690.729" y="658.846" width="20" height="16" fill="url(#pattern52_1322_3092)"/>
                  <path d="M701.55 664.699C700.65 664.099 698.65 664.099 697.75 664.699C697.25 665.099 697.25 665.599 697.75 665.999C698.65 666.599 700.65 666.599 701.55 665.999C702.05 665.599 702.05 665.099 701.55 664.699Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M651.15 665.799L516.55 730.999L515.45 730.499L649.55 665.499V651.599C648.95 651.499 648.45 651.399 647.95 651.199C646.55 650.499 646.55 649.399 647.95 648.699C649.35 647.999 651.65 647.999 653.05 648.699C654.45 649.399 654.45 650.499 653.05 651.199C652.55 651.399 651.85 651.599 651.15 651.699V665.799ZM651.85 650.599C652.65 650.199 652.65 649.599 651.85 649.199C651.15 648.899 649.85 648.899 649.15 649.199C648.35 649.599 648.35 650.199 649.15 650.599C649.85 650.899 651.15 650.899 651.85 650.599Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M600.75 660.999L518.75 700.799L517.65 700.199L599.15 660.699V646.899C598.55 646.799 597.95 646.699 597.45 646.499C596.05 645.799 596.05 644.699 597.45 643.999C598.85 643.299 601.15 643.299 602.55 643.999C603.95 644.699 603.95 645.799 602.55 646.499C602.05 646.699 601.45 646.799 600.75 646.899V660.999ZM601.35 645.899C602.15 645.599 602.15 644.999 601.35 644.599C600.55 644.199 599.35 644.199 598.55 644.599C597.85 644.999 597.85 645.599 598.55 645.899C599.35 646.299 600.55 646.299 601.35 645.899Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M892.25 746.199C890.85 746.899 888.55 746.899 887.15 746.199C885.95 745.599 885.85 744.799 886.65 744.099L860.65 731.499H807.15C807.017 731.765 806.717 732.032 806.25 732.299C804.85 732.999 802.55 732.999 801.15 732.299C799.75 731.599 799.75 730.499 801.15 729.799C802.55 729.199 804.85 729.199 806.25 729.799C806.717 730.065 807.017 730.365 807.15 730.699H861.25L887.75 743.499C889.15 743.099 891.05 743.099 892.25 743.699C893.65 744.399 893.65 745.499 892.25 746.199ZM805.05 731.699C805.85 731.399 805.85 730.799 805.05 730.399C804.25 729.999 803.05 729.999 802.25 730.399C801.55 730.799 801.55 731.399 802.25 731.699C803.05 732.099 804.25 732.099 805.05 731.699ZM891.05 745.599C891.85 745.299 891.85 744.699 891.05 744.299C890.35 743.899 889.05 743.899 888.35 744.299C887.55 744.699 887.55 745.299 888.35 745.599C889.05 745.999 890.35 745.999 891.05 745.599Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M933.75 674.699C932.25 675.399 930.05 675.399 928.65 674.699C927.25 673.999 927.25 672.899 928.65 672.199C929.15 671.999 929.75 671.799 930.35 671.799V654.799L949.65 645.499C948.75 644.799 948.95 643.899 950.15 643.299C951.55 642.699 953.85 642.699 955.25 643.299C956.65 643.999 956.65 645.099 955.25 645.799C954.05 646.399 952.15 646.499 950.85 646.099L932.05 655.199V671.799C932.65 671.799 933.25 671.999 933.75 672.199C935.15 672.899 935.15 673.999 933.75 674.699ZM951.35 645.199C952.05 645.599 953.35 645.599 954.05 645.199C954.85 644.899 954.85 644.299 954.05 643.899C953.35 643.499 952.05 643.499 951.35 643.899C950.55 644.299 950.55 644.899 951.35 645.199ZM932.55 674.099C933.35 673.799 933.35 673.199 932.55 672.799C931.75 672.399 930.55 672.399 929.75 672.799C929.05 673.199 929.05 673.799 929.75 674.099C930.55 674.499 931.75 674.499 932.55 674.099Z" fill="white"/>
                  </g>
                  <path d="M876.45 656.699C877.45 656.299 878.85 656.099 880.15 656.299L949.75 622.499V586.299L959.15 581.799L961.75 582.999L953.55 587.099V623.199L882.75 657.599C883.15 658.199 882.75 658.899 881.75 659.299C880.35 660.099 877.95 660.099 876.45 659.299C874.95 658.599 874.95 657.399 876.45 656.699Z" fill="url(#paint59_linear_1322_3092)"/>
                  <path d="M1002.15 697.799C1003.15 698.299 1003.45 698.899 1003.05 699.599L1072.75 733.399H1147.25L1156.55 737.899L1153.95 739.199L1145.65 735.199H1071.15L1000.45 700.799C999.15 700.999 997.75 700.899 996.75 700.399C995.25 699.699 995.25 698.499 996.75 697.799C998.25 697.099 1000.65 697.099 1002.15 697.799Z" fill="url(#paint60_linear_1322_3092)"/>
                  <path d="M726.45 666.799C725.45 667.199 724.05 667.399 722.75 667.199L653.05 700.999V737.199L517.05 802.999L514.45 801.699L649.35 736.399V700.299L720.05 665.899C719.75 665.299 720.05 664.599 721.05 664.199C722.55 663.399 724.95 663.399 726.45 664.199C727.85 664.899 727.85 665.999 726.45 666.799Z" fill="url(#paint61_linear_1322_3092)"/>
                  <path d="M771.05 635.599C770.05 635.199 768.65 634.999 767.35 635.199L735.25 619.599H660.75L591.05 585.799C591.45 585.199 591.05 584.499 590.15 583.999C588.65 583.299 586.25 583.299 584.75 583.999C583.25 584.699 583.25 585.899 584.75 586.599C585.75 587.099 587.15 587.199 588.45 587.099L659.15 621.399H733.65L764.75 636.499C764.45 637.099 764.75 637.799 765.75 638.199C767.25 638.999 769.65 638.999 771.05 638.199C772.55 637.499 772.55 636.399 771.05 635.599Z" fill="url(#paint62_linear_1322_3092)"/>
                  <path d="M865.65 672.399C866.65 672.899 866.95 673.599 866.55 674.199L910.45 695.499V703.799L1022.45 758.199C1023.75 757.999 1025.15 758.199 1026.15 758.699C1027.65 759.399 1027.65 760.599 1026.15 761.299C1024.65 761.999 1022.25 761.999 1020.85 761.299C1019.85 760.799 1019.55 760.099 1019.85 759.499L906.75 704.599V696.299L863.95 675.499C862.65 675.599 861.25 675.499 860.25 674.999C858.75 674.299 858.75 673.099 860.25 672.399C861.75 671.699 864.15 671.699 865.65 672.399Z" fill="url(#paint63_linear_1322_3092)"/>
                  <path d="M805.55 622.699C806.55 622.199 807.95 622.099 809.25 622.199L853.15 600.899H870.35L982.35 546.599C981.95 545.899 982.35 545.299 983.25 544.799C984.75 544.099 987.15 544.099 988.65 544.799C990.15 545.499 990.15 546.699 988.65 547.399C987.65 547.899 986.25 547.999 984.95 547.799L871.85 602.699H854.75L811.95 623.499C812.25 624.099 811.95 624.799 810.95 625.299C809.45 625.999 807.05 625.999 805.55 625.299C804.15 624.599 804.15 623.399 805.55 622.699Z" fill="url(#paint64_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M842.15 683.799C843.95 684.699 844.35 685.999 843.25 686.999L900.75 714.899V727.399L1142.85 844.899L1140.25 846.199L897.05 728.099V715.699L840.65 688.299C838.45 688.799 835.85 688.699 834.05 687.799C831.85 686.699 831.85 684.899 834.05 683.799C836.35 682.799 839.95 682.799 842.15 683.799ZM836.75 686.499C837.45 686.899 838.75 686.899 839.55 686.499C840.35 686.099 840.35 685.499 839.55 685.099C838.75 684.799 837.45 684.799 836.75 685.099C835.95 685.499 835.95 686.099 836.75 686.499Z" fill="url(#paint65_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M705.45 609.899C703.65 608.999 703.35 607.699 704.35 606.699L646.85 578.799V566.299L404.75 448.799L407.45 447.499L650.55 565.599V577.999L707.05 605.399C709.15 604.899 711.75 604.999 713.55 605.899C715.85 606.999 715.85 608.799 713.55 609.899C711.35 610.899 707.65 610.899 705.45 609.899ZM710.95 607.199C710.15 606.799 708.85 606.799 708.05 607.199C707.35 607.599 707.35 608.199 708.05 608.599C708.85 608.899 710.15 608.899 710.95 608.599C711.65 608.199 711.65 607.599 710.95 607.199Z" fill="url(#paint66_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M758.85 682.399C757.15 683.299 754.45 683.499 752.35 682.999L694.85 710.899H669.15L427.15 828.399L424.45 827.099L667.65 709.099H693.25L749.65 681.699C748.65 680.599 748.95 679.399 750.75 678.499C752.95 677.399 756.65 677.399 758.85 678.499C761.15 679.599 761.15 681.399 758.85 682.399ZM753.45 679.799C752.65 680.199 752.65 680.799 753.45 681.199C754.15 681.499 755.45 681.499 756.25 681.199C757.05 680.799 757.05 680.199 756.25 679.799C755.45 679.399 754.15 679.399 753.45 679.799Z" fill="url(#paint67_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M742.45 729.799C740.65 730.599 738.05 730.799 735.85 730.299L678.35 758.199H652.75L410.65 875.699L408.05 874.399L651.25 756.399H676.85L733.25 728.999C732.25 727.999 732.55 726.699 734.35 725.799C736.55 724.699 740.25 724.699 742.45 725.799C744.75 726.899 744.75 728.699 742.45 729.799ZM736.95 727.099C736.25 727.499 736.25 728.099 736.95 728.499C737.75 728.799 739.05 728.799 739.85 728.499C740.55 728.099 740.55 727.499 739.85 727.099C739.05 726.699 737.75 726.699 736.95 727.099Z" fill="url(#paint68_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M630.55 798.599L793.95 719.499C792.85 718.499 793.25 717.199 795.05 716.299C797.25 715.199 800.85 715.199 803.15 716.299C805.35 717.399 805.35 719.199 803.15 720.299C801.35 721.099 798.75 721.299 796.55 720.799L633.15 799.899M797.65 717.599C796.85 717.999 796.85 718.599 797.65 718.999C798.45 719.299 799.75 719.299 800.45 718.999C801.25 718.599 801.25 717.999 800.45 717.599C799.75 717.199 798.45 717.199 797.65 717.599Z" fill="url(#paint69_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M885.85 602.799L829.35 630.199C830.45 631.199 830.05 632.499 828.35 633.299C826.05 634.399 822.45 634.399 820.15 633.299C817.95 632.299 817.95 630.499 820.15 629.399C821.95 628.499 824.55 628.399 826.75 628.899L884.25 600.999H909.85L954.25 579.399L956.95 580.699L911.45 602.799H885.85ZM825.65 632.099C826.45 631.699 826.45 631.099 825.65 630.699C824.85 630.299 823.65 630.299 822.85 630.699C822.05 631.099 822.05 631.699 822.85 632.099C823.65 632.399 824.85 632.399 825.65 632.099Z" fill="url(#paint70_linear_1322_3092)"/>
                  <path d="M645.35 507.999V542.199L741.05 588.699V612.599L777.85 630.499C777.45 631.099 777.65 631.699 778.65 632.199C779.85 632.799 781.85 632.799 783.05 632.199C784.35 631.599 784.35 630.599 783.05 629.999C782.15 629.499 780.75 629.399 779.65 629.599L743.55 612.099V588.199L647.85 541.699V507.499L583.75 476.399L582.05 477.199L645.35 507.999Z" fill="url(#paint71_linear_1322_3092)"/>
                  <path d="M815.05 696.999C815.95 697.499 816.25 698.099 815.75 698.699L911.25 744.999H968.95L1123.15 819.899L1121.45 820.699L967.95 746.199H910.15L813.95 699.599C812.85 699.799 811.55 699.699 810.55 699.199C809.35 698.599 809.35 697.599 810.55 696.999C811.85 696.399 813.85 696.399 815.05 696.999Z" fill="url(#paint72_linear_1322_3092)"/>
                  <path d="M1073.05 751.299L1003.55 717.599V709.899L956.65 687.099V656.499L1031.35 620.299L1034.25 621.699L960.75 657.399V686.299L1007.65 708.999V716.799L1075.95 749.899L1073.05 751.299Z" fill="url(#paint73_linear_1322_3092)"/>
                  <path d="M768.45 577.699L704.65 546.799V519.099L661.45 498.099L664.45 496.699L708.85 518.199V545.999L770.15 575.699H827.55L954.35 513.999L957.25 515.399L829.25 577.699H768.45Z" fill="url(#paint74_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M603.45 641.799C601.25 642.899 597.55 642.899 595.25 641.799C593.55 640.899 593.15 639.699 593.95 638.699L497.85 592.099L500.75 590.699L596.75 637.199C598.95 636.699 601.65 636.899 603.45 637.799C605.75 638.899 605.75 640.699 603.45 641.799ZM600.55 640.399C601.25 639.999 601.25 639.499 600.55 639.199C599.95 638.899 598.85 638.899 598.15 639.199C597.45 639.499 597.45 639.999 598.15 640.399C598.85 640.699 599.95 640.699 600.55 640.399Z" fill="url(#paint75_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M626.35 664.499L520.95 715.399L518.05 713.999L622.25 663.599V641.399L551.65 607.099C549.45 607.699 546.65 607.499 544.75 606.599C542.55 605.499 542.55 603.699 544.75 602.599C547.05 601.499 550.75 601.499 553.05 602.599C554.75 603.399 555.15 604.599 554.35 605.599L626.35 640.499V664.499ZM550.15 605.299C550.75 604.899 550.75 604.399 550.15 604.099C549.45 603.699 548.35 603.699 547.65 604.099C547.05 604.399 547.05 604.899 547.65 605.299C548.35 605.599 549.45 605.599 550.15 605.299Z" fill="url(#paint76_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M958.05 803.499L955.15 804.899L849.95 753.799H799.05C798.783 754.199 798.317 754.566 797.65 754.899C795.45 755.999 791.75 755.999 789.45 754.899C787.15 753.799 787.15 751.999 789.45 750.899C791.75 749.799 795.45 749.799 797.65 750.899C798.25 751.166 798.717 751.466 799.05 751.799H851.65L958.05 803.499ZM794.85 753.499C795.45 753.199 795.45 752.699 794.85 752.299C794.15 751.999 793.05 751.999 792.35 752.299C791.75 752.699 791.75 753.199 792.35 753.499C793.05 753.899 794.15 753.899 794.85 753.499Z" fill="url(#paint77_linear_1322_3092)"/>
                  <g style="mix-blend-mode:overlay">
                  <path d="M630.95 510.999L689.95 539.599V586.599L725.75 603.899V626.599L757.95 642.199" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M796.65 705.799L828.25 721.099V735.899L962.75 801.199" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M985.15 534.299L864.35 592.999V619.899L832.05 635.499" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1035.45 629.099L980.65 655.699V694.199L1020.55 713.499V718.099L1081.05 747.499" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M833.65 745.599H792.75L668.85 805.599" stroke="white" stroke-width="0.4" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M801.95 620.899L767.05 603.999V592.499L733.35 576.199V538.399L653.15 499.399" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M846.85 642.699L910.35 611.899H939.45L980.35 591.999" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M828.55 690.299L876.75 713.699V734.599L1010.85 799.699" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M777.65 691.499L533.25 810.299" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M612.35 646.099V661.599L517.55 707.599" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M882.95 663.799L929.25 686.299V707.499L1051.25 766.699" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:soft-light">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="789.809" y="629.926" width="26" height="22" fill="url(#pattern53_1322_3092)"/>
                  <path d="M806.05 642.298C803.95 643.298 800.45 643.298 798.35 642.298C796.25 641.298 796.25 639.598 798.35 638.598C800.45 637.498 803.95 637.498 806.05 638.598C808.15 639.598 808.15 641.298 806.05 642.298Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:soft-light">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="833.809" y="651.926" width="28" height="22" fill="url(#pattern54_1322_3092)"/>
                  <path d="M850.55 663.899C848.45 664.899 844.95 664.899 842.85 663.899C840.75 662.899 840.75 661.199 842.85 660.099C844.95 659.099 848.45 659.099 850.55 660.099C852.65 661.199 852.65 662.899 850.55 663.899Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:soft-light">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="745.809" y="651.926" width="26" height="22" fill="url(#pattern55_1322_3092)"/>
                  <path d="M761.85 663.799C759.75 664.799 756.25 664.799 754.15 663.799C752.05 662.699 752.05 661.099 754.15 659.999C756.25 658.999 759.75 658.999 761.85 659.999C763.95 661.099 763.95 662.699 761.85 663.799Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:soft-light">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="789.809" y="673.926" width="28" height="22" fill="url(#pattern56_1322_3092)"/>
                  <path d="M806.35 685.399C804.15 686.399 800.75 686.399 798.65 685.399C796.45 684.299 796.45 682.599 798.65 681.599C800.75 680.599 804.15 680.599 806.35 681.599C808.45 682.599 808.45 684.299 806.35 685.399Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M971.35 684.999V656.399L1033.25 626.399" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M763.55 684.899L698.65 716.299V724.299L526.45 807.999" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M739.05 651.399L595.75 581.899V576.099L492.85 526.099" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M752.85 644.699L711.95 624.799V615.899L509.95 517.799" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M744.35 674.499L717.05 687.699" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M804.35 702.199L841.25 720.099V735.799L919.85 773.899" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M790.55 610.299L807.45 602.199V593.099L960.45 518.799" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M668.05 653.299V663.999L519.35 736.199" stroke="white" stroke-width="0.4" stroke-miterlimit="10" stroke-linecap="round"/>
                  </g>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="614.026" y="626.143" width="38" height="24" fill="url(#pattern57_1322_3092)"/>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M620.75 634.899C618.95 634.099 618.95 632.699 620.75 631.899C622.45 631.099 625.25 631.099 626.95 631.899C628.65 632.699 628.65 634.099 626.95 634.899C625.25 635.799 622.45 635.799 620.75 634.899ZM625.65 632.499C624.65 632.099 623.05 632.099 622.05 632.499C621.05 632.999 621.05 633.799 622.05 634.299C623.05 634.799 624.65 634.799 625.65 634.299C626.65 633.799 626.65 632.999 625.65 632.499Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M629.95 639.399C628.25 638.599 628.25 637.199 629.95 636.399C631.65 635.599 634.45 635.599 636.25 636.399C637.95 637.199 637.95 638.599 636.25 639.399C634.45 640.299 631.65 640.299 629.95 639.399ZM634.95 636.999C633.95 636.499 632.25 636.499 631.25 636.999C630.25 637.499 630.25 638.299 631.25 638.799C632.25 639.299 633.95 639.299 634.95 638.799C635.95 638.299 635.95 637.499 634.95 636.999Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M639.25 643.899C637.55 643.099 637.55 641.699 639.25 640.899C640.95 640.099 643.75 640.099 645.45 640.899C647.15 641.699 647.15 643.099 645.45 643.899C643.75 644.799 640.95 644.799 639.25 643.899ZM644.15 641.499C643.15 640.999 641.55 640.999 640.55 641.499C639.55 641.999 639.55 642.799 640.55 643.299C641.55 643.799 643.15 643.799 644.15 643.299C645.15 642.799 645.15 641.999 644.15 641.499Z" fill="white"/>
                  </g>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="768.026" y="576.143" width="38" height="24" fill="url(#pattern58_1322_3092)"/>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M774.15 585.499C772.45 584.599 772.45 583.299 774.15 582.399C775.95 581.599 778.75 581.599 780.45 582.399C782.15 583.299 782.15 584.599 780.45 585.499C778.75 586.299 775.95 586.299 774.15 585.499ZM779.15 583.099C778.15 582.599 776.45 582.599 775.45 583.099C774.55 583.599 774.55 584.299 775.45 584.799C776.45 585.299 778.15 585.299 779.15 584.799C780.15 584.299 780.15 583.599 779.15 583.099Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M783.45 589.999C781.75 589.099 781.75 587.799 783.45 586.899C785.15 586.099 787.95 586.099 789.65 586.899C791.45 587.799 791.45 589.099 789.65 589.999C787.95 590.799 785.15 590.799 783.45 589.999ZM788.35 587.599C787.35 587.099 785.75 587.099 784.75 587.599C783.75 587.999 783.75 588.799 784.75 589.299C785.75 589.799 787.35 589.799 788.35 589.299C789.35 588.799 789.35 587.999 788.35 587.599Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M792.75 594.499C791.05 593.599 791.05 592.299 792.75 591.399C794.45 590.599 797.25 590.599 798.95 591.399C800.65 592.299 800.65 593.599 798.95 594.499C797.25 595.299 794.45 595.299 792.75 594.499ZM797.65 592.099C796.65 591.599 795.05 591.599 794.05 592.099C793.05 592.499 793.05 593.299 794.05 593.799C795.05 594.299 796.65 594.299 797.65 593.799C798.65 593.299 798.65 592.499 797.65 592.099Z" fill="white"/>
                  </g>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="628.026" y="542.143" width="38" height="22" fill="url(#pattern59_1322_3092)"/>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M634.15 550.199C632.45 549.399 632.45 547.999 634.15 547.199C635.95 546.399 638.75 546.399 640.45 547.199C642.15 547.999 642.15 549.399 640.45 550.199C638.75 550.999 635.95 550.999 634.15 550.199ZM639.15 547.799C638.15 547.299 636.45 547.299 635.45 547.799C634.45 548.299 634.45 549.099 635.45 549.599C636.45 550.099 638.15 550.099 639.15 549.599C640.15 549.099 640.15 548.299 639.15 547.799Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M643.45 554.699C641.75 553.899 641.75 552.499 643.45 551.699C645.15 550.899 647.95 550.899 649.65 551.699C651.45 552.499 651.45 553.899 649.65 554.699C647.95 555.499 645.15 555.499 643.45 554.699ZM648.35 552.299C647.35 551.799 645.75 551.799 644.75 552.299C643.75 552.799 643.75 553.599 644.75 554.099C645.75 554.599 647.35 554.599 648.35 554.099C649.35 553.599 649.35 552.799 648.35 552.299Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M652.75 559.198C651.05 558.398 651.05 556.998 652.75 556.198C654.45 555.298 657.25 555.298 658.95 556.198C660.65 556.998 660.65 558.398 658.95 559.198C657.25 559.998 654.45 559.998 652.75 559.198ZM657.65 556.798C656.65 556.298 655.05 556.298 654.05 556.798C653.05 557.298 653.05 558.098 654.05 558.598C655.05 559.098 656.65 559.098 657.65 558.598C658.65 558.098 658.65 557.298 657.65 556.798Z" fill="white"/>
                  </g>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="968.026" y="698.143" width="38" height="22" fill="url(#pattern60_1322_3092)"/>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M974.75 705.799C973.05 704.999 973.05 703.599 974.75 702.799C976.45 701.899 979.25 701.899 981.05 702.799C982.75 703.599 982.75 704.999 981.05 705.799C979.25 706.599 976.45 706.599 974.75 705.799ZM979.75 703.399C978.75 702.899 977.05 702.899 976.05 703.399C975.05 703.899 975.05 704.699 976.05 705.199C977.05 705.599 978.75 705.599 979.75 705.199C980.75 704.699 980.75 703.899 979.75 703.399Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M984.05 710.299C982.35 709.499 982.35 708.099 984.05 707.299C985.75 706.399 988.55 706.399 990.25 707.299C991.95 708.099 991.95 709.499 990.25 710.299C988.55 711.099 985.75 711.099 984.05 710.299ZM988.95 707.899C987.95 707.399 986.35 707.399 985.35 707.899C984.35 708.399 984.35 709.199 985.35 709.699C986.35 710.099 987.95 710.099 988.95 709.699C989.95 709.199 989.95 708.399 988.95 707.899Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M993.35 714.799C991.55 713.999 991.55 712.599 993.35 711.799C995.05 710.899 997.85 710.899 999.55 711.799C1001.25 712.599 1001.25 713.999 999.55 714.799C997.85 715.599 995.05 715.599 993.35 714.799ZM998.25 712.399C997.25 711.899 995.65 711.899 994.65 712.399C993.65 712.899 993.65 713.699 994.65 714.199C995.65 714.599 997.25 714.599 998.25 714.199C999.25 713.699 999.25 712.899 998.25 712.399Z" fill="white"/>
                  </g>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="818.026" y="606.143" width="38" height="24" fill="url(#pattern61_1322_3092)"/>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M843.65 611.899C845.35 611.099 848.15 611.099 849.85 611.899C851.55 612.699 851.55 614.099 849.85 614.899C848.15 615.799 845.35 615.799 843.65 614.899C841.95 614.099 841.95 612.699 843.65 611.899ZM848.55 614.299C849.55 613.799 849.55 612.999 848.55 612.499C847.55 612.099 845.95 612.099 844.95 612.499C843.95 612.999 843.95 613.799 844.95 614.299C845.95 614.799 847.55 614.799 848.55 614.299Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M834.35 616.399C836.05 615.599 838.85 615.599 840.65 616.399C842.35 617.199 842.35 618.599 840.65 619.399C838.85 620.299 836.05 620.299 834.35 619.399C832.65 618.599 832.65 617.199 834.35 616.399ZM839.35 618.799C840.35 618.299 840.35 617.499 839.35 616.999C838.35 616.599 836.65 616.599 835.65 616.999C834.65 617.499 834.65 618.299 835.65 618.799C836.65 619.299 838.35 619.299 839.35 618.799Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M825.15 620.899C826.85 620.099 829.65 620.099 831.35 620.899C833.05 621.699 833.05 623.099 831.35 623.899C829.65 624.799 826.85 624.799 825.15 623.899C823.35 623.099 823.35 621.699 825.15 620.899ZM830.05 623.299C831.05 622.799 831.05 621.999 830.05 621.499C829.05 621.099 827.45 621.099 826.45 621.499C825.45 621.999 825.45 622.799 826.45 623.299C827.45 623.799 829.05 623.799 830.05 623.299Z" fill="white"/>
                  </g>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="752.026" y="694.143" width="38" height="24" fill="url(#pattern62_1322_3092)"/>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M777.05 700.399C778.85 699.499 781.65 699.499 783.35 700.399C785.05 701.199 785.05 702.599 783.35 703.399C781.65 704.199 778.85 704.199 777.05 703.399C775.35 702.599 775.35 701.199 777.05 700.399ZM782.05 702.799C783.05 702.299 783.05 701.499 782.05 700.999C781.05 700.499 779.45 700.499 778.45 700.999C777.45 701.499 777.45 702.299 778.45 702.799C779.45 703.199 781.05 703.199 782.05 702.799Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M767.85 704.899C769.55 703.999 772.35 703.999 774.05 704.899C775.75 705.699 775.75 707.099 774.05 707.899C772.35 708.699 769.55 708.699 767.85 707.899C766.15 706.999 766.15 705.699 767.85 704.899ZM772.75 707.299C773.75 706.799 773.75 705.999 772.75 705.499C771.75 704.999 770.15 704.999 769.15 705.499C768.15 705.999 768.15 706.799 769.15 707.299C770.15 707.699 771.75 707.699 772.75 707.299Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M758.55 709.399C760.25 708.499 763.05 708.499 764.85 709.399C766.55 710.199 766.55 711.499 764.85 712.399C763.05 713.199 760.25 713.199 758.55 712.399C756.85 711.499 756.85 710.199 758.55 709.399ZM763.45 711.699C764.45 711.299 764.45 710.499 763.45 709.999C762.45 709.499 760.85 709.499 759.85 709.999C758.85 710.499 758.85 711.299 759.85 711.699C760.85 712.199 762.45 712.199 763.45 711.699Z" fill="white"/>
                  </g>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="590.026" y="698.143" width="36" height="22" fill="url(#pattern63_1322_3092)"/>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M613.75 702.798C615.45 701.998 618.25 701.998 620.05 702.798C621.75 703.598 621.75 704.998 620.05 705.798C618.25 706.698 615.45 706.698 613.75 705.798C612.05 704.998 612.05 703.598 613.75 702.798ZM618.75 705.198C619.75 704.698 619.75 703.898 618.75 703.398C617.75 702.898 616.05 702.898 615.05 703.398C614.05 703.898 614.05 704.698 615.05 705.198C616.05 705.698 617.75 705.698 618.75 705.198Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M604.55 707.298C606.25 706.498 609.05 706.498 610.75 707.298C612.45 708.098 612.45 709.498 610.75 710.298C609.05 711.198 606.25 711.198 604.55 710.298C602.75 709.498 602.75 708.098 604.55 707.298ZM609.45 709.698C610.45 709.198 610.45 708.398 609.45 707.898C608.45 707.398 606.85 707.398 605.85 707.898C604.85 708.398 604.85 709.198 605.85 709.698C606.85 710.198 608.45 710.198 609.45 709.698Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M595.25 711.798C596.95 710.998 599.75 710.998 601.45 711.798C603.15 712.598 603.15 713.998 601.45 714.798C599.75 715.698 596.95 715.698 595.25 714.798C593.55 713.998 593.55 712.598 595.25 711.798ZM600.15 714.198C601.15 713.698 601.15 712.898 600.15 712.398C599.15 711.898 597.55 711.898 596.55 712.398C595.55 712.898 595.55 713.698 596.55 714.198C597.55 714.698 599.15 714.698 600.15 714.198Z" fill="white"/>
                  </g>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="972.026" y="622.143" width="38" height="24" fill="url(#pattern64_1322_3092)"/>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M997.55 627.399C999.25 626.599 1002.05 626.599 1003.75 627.399C1005.55 628.199 1005.55 629.599 1003.75 630.399C1002.05 631.299 999.25 631.299 997.55 630.399C995.85 629.599 995.85 628.199 997.55 627.399ZM1002.45 629.799C1003.45 629.299 1003.45 628.499 1002.45 627.999C1001.45 627.599 999.85 627.599 998.85 627.999C997.85 628.499 997.85 629.299 998.85 629.799C999.85 630.299 1001.45 630.299 1002.45 629.799Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M988.25 631.899C990.05 631.099 992.85 631.099 994.55 631.899C996.25 632.699 996.25 634.099 994.55 634.899C992.85 635.799 990.05 635.799 988.25 634.899C986.55 634.099 986.55 632.699 988.25 631.899ZM993.25 634.299C994.25 633.799 994.25 632.999 993.25 632.499C992.25 632.099 990.55 632.099 989.55 632.499C988.55 632.999 988.55 633.799 989.55 634.299C990.55 634.799 992.25 634.799 993.25 634.299Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M979.05 636.399C980.75 635.599 983.55 635.599 985.25 636.399C986.95 637.199 986.95 638.599 985.25 639.399C983.55 640.299 980.75 640.299 979.05 639.399C977.35 638.599 977.35 637.199 979.05 636.399ZM983.95 638.799C984.95 638.299 984.95 637.499 983.95 636.999C982.95 636.499 981.35 636.499 980.35 636.999C979.35 637.499 979.35 638.299 980.35 638.799C981.35 639.299 982.95 639.299 983.95 638.799Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M679.75 665.899L673.85 662.999C673.35 662.799 673.35 662.399 673.85 662.099L679.75 659.199C680.25 658.999 681.15 658.999 681.65 659.199L687.55 662.099C688.05 662.399 688.05 662.799 687.55 662.999L681.65 665.899C681.15 666.099 680.25 666.099 679.75 665.899Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M914.35 666.099L908.45 663.199C907.95 662.899 907.95 662.499 908.45 662.299L914.35 659.399C914.85 659.199 915.75 659.199 916.25 659.399L922.15 662.299C922.65 662.499 922.65 662.899 922.15 663.199L916.25 666.099C915.75 666.299 914.85 666.299 914.35 666.099Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M927.55 606.199L921.65 603.299C921.15 603.099 921.15 602.699 921.65 602.399L927.55 599.599C928.05 599.299 928.95 599.299 929.45 599.599L935.35 602.399C935.85 602.699 935.85 603.099 935.35 603.299L929.45 606.199C928.95 606.499 928.05 606.499 927.55 606.199Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M784.95 717.599L778.95 714.799C778.45 714.499 778.45 714.099 778.95 713.799L784.95 710.999C785.45 710.699 786.25 710.699 786.75 710.999L792.75 713.799C793.25 714.099 793.25 714.499 792.75 714.799L786.75 717.599C786.25 717.899 785.45 717.899 784.95 717.599Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M812.75 742.399L806.75 739.599C806.25 739.299 806.25 738.899 806.75 738.699L812.75 735.799C813.25 735.499 814.05 735.499 814.55 735.799L820.55 738.699C821.05 738.899 821.05 739.299 820.55 739.599L814.55 742.399C814.05 742.699 813.25 742.699 812.75 742.399Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M675.15 632.399L669.25 629.499C668.75 629.299 668.75 628.799 669.25 628.599L675.15 625.699C675.65 625.499 676.55 625.499 677.05 625.699L682.95 628.599C683.45 628.799 683.45 629.299 682.95 629.499L677.05 632.399C676.55 632.599 675.65 632.599 675.15 632.399Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M781.25 606.599L775.35 603.699C774.85 603.499 774.85 603.099 775.35 602.799L781.25 599.999C781.75 599.699 782.65 599.699 783.15 599.999L789.05 602.799C789.55 603.099 789.55 603.499 789.05 603.699L783.15 606.599C782.65 606.899 781.75 606.899 781.25 606.599Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M751.45 724.3L745.55 721.5C745.05 721.2 745.05 720.8 745.55 720.5L751.45 717.7C751.95 717.4 752.85 717.4 753.35 717.7L759.25 720.5C759.75 720.8 759.75 721.2 759.25 721.5L753.35 724.3C752.85 724.6 751.95 724.6 751.45 724.3Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M933.85 757.999L927.95 755.099C927.45 754.799 927.45 754.399 927.95 754.199L933.85 751.299C934.45 750.999 935.25 750.999 935.75 751.299L941.65 754.199C942.25 754.399 942.25 754.799 941.65 755.099L935.75 757.999C935.25 758.199 934.45 758.199 933.85 757.999Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M950.35 765.899L944.45 763.099C943.95 762.799 943.95 762.399 944.45 762.199L950.35 759.299C950.85 758.999 951.75 758.999 952.25 759.299L958.15 762.199C958.65 762.399 958.65 762.799 958.15 763.099L952.25 765.899C951.75 766.199 950.85 766.199 950.35 765.899Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M698.15 577.799L692.25 574.899C691.75 574.599 691.75 574.199 692.25 573.999L698.15 571.099C698.65 570.899 699.55 570.899 700.05 571.099L705.95 573.999C706.45 574.199 706.45 574.599 705.95 574.899L700.05 577.799C699.55 577.999 698.65 577.999 698.15 577.799Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M714.65 585.699L708.75 582.899C708.25 582.599 708.25 582.199 708.75 581.999L714.65 579.099C715.15 578.799 716.05 578.799 716.55 579.099L722.45 581.999C722.95 582.199 722.95 582.599 722.45 582.899L716.55 585.699C716.05 585.999 715.15 585.999 714.65 585.699Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M731.05 593.699L725.15 590.899C724.65 590.599 724.65 590.199 725.15 589.999L731.05 587.099C731.65 586.799 732.45 586.799 732.95 587.099L738.85 589.999C739.45 590.199 739.45 590.599 738.85 590.899L732.95 593.699C732.45 593.999 731.65 593.999 731.05 593.699Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1007.75 688.7L1001.85 685.8C1001.35 685.6 1001.35 685.2 1001.85 684.9L1007.75 682C1008.25 681.8 1009.15 681.8 1009.65 682L1015.55 684.9C1016.05 685.2 1016.05 685.6 1015.55 685.8L1009.65 688.7C1009.15 688.9 1008.25 688.9 1007.75 688.7Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M1024.25 696.7L1018.35 693.8C1017.75 693.6 1017.75 693.2 1018.35 692.9L1024.25 690C1024.75 689.8 1025.55 689.8 1026.15 690L1032.05 692.9C1032.55 693.2 1032.55 693.6 1032.05 693.8L1026.15 696.7C1025.55 696.9 1024.75 696.9 1024.25 696.7Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M915.35 619.699L921.25 616.799C921.75 616.499 922.65 616.499 923.15 616.799L929.05 619.699C929.55 619.899 929.55 620.299 929.05 620.599L923.15 623.499C922.65 623.699 921.75 623.699 921.25 623.499L915.35 620.599C914.85 620.299 914.85 619.899 915.35 619.699Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M898.85 627.699L904.75 624.799C905.35 624.499 906.15 624.499 906.65 624.799L912.55 627.699C913.15 627.899 913.15 628.299 912.55 628.599L906.65 631.399C906.15 631.699 905.35 631.699 904.75 631.399L898.85 628.599C898.35 628.299 898.35 627.899 898.85 627.699Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path d="M882.45 635.599L888.35 632.799C888.85 632.499 889.75 632.499 890.25 632.799L896.15 635.599C896.65 635.899 896.65 636.299 896.15 636.599L890.25 639.399C889.75 639.699 888.85 639.699 888.35 639.399L882.45 636.599C881.95 636.299 881.95 635.899 882.45 635.599Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="652.729" y="600.846" width="18" height="16" fill="url(#pattern65_1322_3092)"/>
                  <path d="M658.95 607.399C657.65 607.899 657.65 608.799 658.95 609.299C659.75 609.499 660.75 609.499 661.45 609.299C662.85 608.799 662.85 607.899 661.45 607.399C660.75 607.199 659.75 607.199 658.95 607.399Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="568.729" y="640.846" width="18" height="18" fill="url(#pattern66_1322_3092)"/>
                  <path d="M575.05 648.199C573.65 648.599 573.65 649.599 575.05 649.999C575.75 650.299 576.75 650.299 577.55 649.999C578.95 649.599 578.95 648.599 577.55 648.199C576.75 647.899 575.75 647.899 575.05 648.199Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="808.729" y="716.846" width="18" height="16" fill="url(#pattern67_1322_3092)"/>
                  <path d="M816.35 723.399C814.95 723.899 814.95 724.799 816.35 725.199C817.05 725.499 818.05 725.499 818.85 725.199C820.15 724.799 820.15 723.899 818.85 723.399C818.05 723.199 817.05 723.199 816.35 723.399Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="896.729" y="650.846" width="18" height="16" fill="url(#pattern68_1322_3092)"/>
                  <path d="M902.95 657.798C901.55 658.198 901.55 659.198 902.95 659.598C903.65 659.898 904.65 659.898 905.45 659.598C906.75 659.198 906.75 658.198 905.45 657.798C904.65 657.498 903.65 657.498 902.95 657.798Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="888.729" y="740.846" width="18" height="16" fill="url(#pattern69_1322_3092)"/>
                  <path d="M894.95 747.199C893.55 747.699 893.55 748.599 894.95 749.099C895.65 749.299 896.75 749.299 897.45 749.099C898.85 748.599 898.85 747.699 897.45 747.199C896.75 746.999 895.65 746.999 894.95 747.199Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="872.729" y="604.846" width="18" height="16" fill="url(#pattern70_1322_3092)"/>
                  <path d="M879.15 611.099C877.85 611.599 877.85 612.499 879.15 612.999C879.95 613.199 880.95 613.199 881.75 612.999C883.05 612.499 883.05 611.599 881.75 611.099C880.95 610.899 879.95 610.899 879.15 611.099Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="792.729" y="606.846" width="18" height="18" fill="url(#pattern71_1322_3092)"/>
                  <path d="M799.05 614.099C797.65 614.599 797.65 615.499 799.05 615.999C799.75 616.199 800.85 616.199 801.55 615.999C802.95 615.499 802.95 614.599 801.55 614.099C800.85 613.899 799.75 613.899 799.05 614.099Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="906.729" y="714.846" width="18" height="16" fill="url(#pattern72_1322_3092)"/>
                  <path d="M913.25 721.599C911.85 721.999 911.85 722.999 913.25 723.399C913.95 723.699 915.05 723.699 915.75 723.399C917.15 722.999 917.15 721.999 915.75 721.599C915.05 721.299 913.95 721.299 913.25 721.599Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="912.729" y="718.846" width="18" height="16" fill="url(#pattern73_1322_3092)"/>
                  <path d="M920.15 724.899C918.75 725.399 918.75 726.299 920.15 726.799C920.85 726.999 921.95 726.999 922.65 726.799C924.05 726.299 924.05 725.399 922.65 724.899C921.95 724.699 920.85 724.699 920.15 724.899Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="920.729" y="722.846" width="18" height="16" fill="url(#pattern74_1322_3092)"/>
                  <path d="M927.05 728.299C925.65 728.699 925.65 729.699 927.05 730.099C927.75 730.399 928.85 730.399 929.55 730.099C930.95 729.699 930.95 728.699 929.55 728.299C928.85 727.999 927.75 727.999 927.05 728.299Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M619.75 577.099C620.65 577.499 620.75 578.199 620.15 578.799L699.05 617.099V624.799L744.45 646.799C745.45 646.499 746.95 646.599 747.85 646.999C748.95 647.599 748.95 648.399 747.85 648.999C746.75 649.499 744.95 649.499 743.85 648.999C742.95 648.499 742.85 647.799 743.55 647.299L697.85 625.099V617.299L619.25 579.199C618.15 579.499 616.65 579.499 615.75 578.999C614.65 578.499 614.65 577.599 615.75 577.099C616.85 576.499 618.65 576.499 619.75 577.099ZM744.75 648.499C745.35 648.799 746.35 648.799 746.95 648.499C747.65 648.199 747.65 647.799 746.95 647.499C746.35 647.199 745.35 647.199 744.75 647.499C744.15 647.799 744.15 648.199 744.75 648.499ZM616.65 578.599C617.25 578.899 618.25 578.899 618.85 578.599C619.45 578.299 619.45 577.799 618.85 577.499C618.25 577.199 617.25 577.199 616.65 577.499C616.05 577.799 616.05 578.299 616.65 578.599Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M526.05 533.499C526.95 533.999 527.05 534.699 526.35 535.199L605.35 573.499V581.299L650.65 603.299C651.75 602.999 653.25 602.999 654.15 603.499C655.25 603.999 655.25 604.899 654.15 605.399C653.05 605.899 651.25 605.899 650.15 605.399C649.25 604.899 649.05 604.199 649.75 603.699L604.15 581.499V573.799L525.55 535.599C524.45 535.999 522.95 535.899 522.05 535.399C520.95 534.899 520.95 533.999 522.05 533.499C523.15 532.999 524.95 532.999 526.05 533.499ZM651.05 604.999C651.65 605.299 652.65 605.299 653.25 604.999C653.85 604.699 653.85 604.199 653.25 603.899C652.65 603.599 651.65 603.599 651.05 603.899C650.45 604.199 650.45 604.699 651.05 604.999ZM522.95 534.999C523.55 535.299 524.55 535.299 525.15 534.999C525.75 534.699 525.75 534.199 525.15 533.899C524.55 533.599 523.55 533.599 522.95 533.899C522.25 534.199 522.25 534.699 522.95 534.999Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M986.65 717.599C987.65 717.999 987.75 718.699 987.05 719.299L1137.05 792.099V815.399H1135.75V792.299L986.15 719.699C985.05 719.999 983.65 719.999 982.65 719.499C981.55 718.999 981.55 718.099 982.65 717.599C983.75 716.999 985.55 716.999 986.65 717.599ZM983.55 719.099C984.15 719.399 985.15 719.399 985.75 719.099C986.45 718.799 986.45 718.299 985.75 717.999C985.15 717.699 984.15 717.699 983.55 717.999C982.95 718.299 982.95 718.799 983.55 719.099Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M852.25 678.799C853.15 679.199 853.35 679.899 852.65 680.399L1174.15 836.499L1173.25 836.899L851.75 680.899C850.65 681.199 849.25 681.099 848.25 680.699C847.15 680.199 847.15 679.299 848.25 678.799C849.35 678.199 851.15 678.199 852.25 678.799ZM849.15 680.299C849.75 680.599 850.75 680.599 851.35 680.299C851.95 679.999 851.95 679.499 851.35 679.199C850.75 678.899 849.75 678.899 849.15 679.199C848.55 679.499 848.55 679.999 849.15 680.299Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M991.45 682.299C992.35 682.799 992.45 683.499 991.75 683.999L1128.45 750.299V784.399L1249.15 842.999L1248.25 843.399L1127.15 784.699V750.499L990.95 684.399C989.85 684.699 988.35 684.699 987.45 684.199C986.35 683.699 986.35 682.799 987.45 682.299C988.55 681.799 990.35 681.799 991.45 682.299ZM988.35 683.799C988.95 684.099 989.95 684.099 990.55 683.799C991.15 683.499 991.15 682.999 990.55 682.699C989.95 682.399 988.95 682.399 988.35 682.699C987.65 682.999 987.65 683.499 988.35 683.799Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M853.25 645.799C854.15 645.399 855.65 645.299 856.75 645.599L993.35 579.299H1063.65L1184.35 520.699L1185.25 521.199L1064.15 579.899H993.85L857.65 646.099C858.25 646.599 858.15 647.299 857.25 647.799C856.15 648.299 854.35 648.299 853.25 647.799C852.15 647.199 852.15 646.399 853.25 645.799ZM856.35 647.299C856.95 646.999 856.95 646.499 856.35 646.199C855.75 645.999 854.75 645.999 854.15 646.199C853.55 646.499 853.55 646.999 854.15 647.299C854.75 647.599 855.75 647.599 856.35 647.299Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M785.35 695.199C784.45 695.699 782.95 695.799 781.85 695.399L645.25 761.699H574.95L454.25 820.299L453.35 819.899L574.45 761.099H644.75L780.95 694.999C780.25 694.499 780.45 693.799 781.35 693.299C782.45 692.799 784.25 692.799 785.35 693.299C786.45 693.799 786.45 694.699 785.35 695.199ZM782.25 693.699C781.65 693.999 781.65 694.499 782.25 694.799C782.85 695.099 783.85 695.099 784.45 694.799C785.05 694.499 785.05 693.999 784.45 693.699C783.85 693.399 782.85 693.399 782.25 693.699Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M875.65 667.599C876.55 667.999 876.75 668.699 876.05 669.299L1013.15 735.799V750.399L1128.45 806.399L1127.55 806.799L1011.95 750.699V736.099L875.15 669.699C874.05 669.999 872.65 669.999 871.65 669.499C870.55 668.999 870.55 668.099 871.65 667.599C872.75 666.999 874.55 666.999 875.65 667.599ZM872.55 669.099C873.15 669.399 874.15 669.399 874.75 669.099C875.35 668.799 875.35 668.299 874.75 667.999C874.15 667.699 873.15 667.699 872.55 667.999C871.95 668.299 871.95 668.799 872.55 669.099Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M716.75 662.099C715.75 661.699 715.65 660.999 716.35 660.499L579.25 593.899V579.299L463.95 523.299L464.75 522.899L580.45 578.999V593.599L717.25 659.999C718.35 659.699 719.75 659.799 720.75 660.199C721.85 660.699 721.85 661.599 720.75 662.099C719.65 662.699 717.85 662.699 716.75 662.099ZM719.85 660.599C719.25 660.299 718.25 660.299 717.65 660.599C717.05 660.899 717.05 661.399 717.65 661.699C718.25 661.999 719.25 661.999 719.85 661.699C720.45 661.399 720.45 660.899 719.85 660.599Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M597.55 547.799C598.45 548.199 598.65 548.899 597.95 549.499L666.35 582.699H704.25L790.45 624.499C791.45 624.199 792.95 624.199 793.85 624.699C794.95 625.199 794.95 626.099 793.85 626.599C792.75 627.199 791.05 627.199 789.95 626.599C788.95 626.199 788.85 625.499 789.55 624.899L703.75 583.299H665.85L597.05 549.899C595.95 550.199 594.45 550.199 593.55 549.699C592.45 549.199 592.45 548.299 593.55 547.799C594.65 547.199 596.45 547.199 597.55 547.799ZM790.75 626.199C791.45 626.499 792.35 626.499 793.05 626.199C793.65 625.899 793.65 625.399 793.05 625.099C792.35 624.799 791.45 624.799 790.75 625.099C790.15 625.399 790.15 625.899 790.75 626.199ZM594.45 549.299C595.05 549.599 596.05 549.599 596.65 549.299C597.25 548.999 597.25 548.499 596.65 548.199C596.05 547.899 595.05 547.899 594.45 548.199C593.85 548.499 593.85 548.999 594.45 549.299Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M821.95 693.399C822.95 693.899 823.05 694.599 822.35 695.099L867.75 717.199H922.45L1118.85 812.499L1117.95 812.899L921.85 717.799H867.25L821.45 695.599C820.45 695.899 818.95 695.799 818.05 695.399C816.95 694.799 816.95 693.999 818.05 693.399C819.15 692.899 820.85 692.899 821.95 693.399ZM818.85 694.899C819.55 695.199 820.45 695.199 821.15 694.899C821.75 694.599 821.75 694.199 821.15 693.899C820.45 693.599 819.55 693.599 818.85 693.899C818.25 694.199 818.25 694.599 818.85 694.899Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M798.35 701.599C797.45 701.999 795.95 702.099 794.85 701.699L766.35 715.599V723.999L728.25 742.499C728.95 742.999 728.85 743.699 727.85 744.199C726.75 744.699 724.95 744.699 723.85 744.199C722.75 743.699 722.75 742.799 723.85 742.299C724.85 741.799 726.25 741.699 727.35 742.099L765.15 723.699V715.299L793.95 701.299C793.35 700.799 793.45 700.099 794.35 699.599C795.45 699.099 797.25 699.099 798.35 699.599C799.45 700.199 799.45 700.999 798.35 701.599ZM724.75 742.699C724.15 742.999 724.15 743.499 724.75 743.799C725.35 744.099 726.35 744.099 726.95 743.799C727.55 743.499 727.55 742.999 726.95 742.699C726.35 742.399 725.35 742.399 724.75 742.699ZM795.25 700.099C794.65 700.399 794.65 700.799 795.25 701.099C795.85 701.399 796.85 701.399 797.45 701.099C798.05 700.799 798.05 700.399 797.45 700.099C796.85 699.799 795.85 699.799 795.25 700.099Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M714.35 690.899C713.45 691.399 711.95 691.499 710.85 691.099L682.35 704.999V713.399L644.25 731.899C644.95 732.399 644.85 733.099 643.85 733.599C642.75 734.099 640.95 734.099 639.95 733.599C638.85 732.999 638.85 732.199 639.95 731.599C640.85 731.199 642.35 731.099 643.35 731.399L681.15 713.099V704.699L710.05 690.699C709.35 690.199 709.45 689.499 710.45 688.999C711.45 688.499 713.25 688.499 714.35 688.999C715.45 689.499 715.45 690.399 714.35 690.899ZM640.75 732.099C640.15 732.399 640.15 732.799 640.75 733.099C641.35 733.399 642.35 733.399 642.95 733.099C643.65 732.799 643.65 732.399 642.95 732.099C642.35 731.799 641.35 731.799 640.75 732.099ZM711.25 689.399C710.65 689.699 710.65 690.199 711.25 690.499C711.85 690.799 712.85 690.799 713.45 690.499C714.15 690.199 714.15 689.699 713.45 689.399C712.85 689.099 711.85 689.099 711.25 689.399Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M645.75 619.699C646.75 620.199 646.85 620.899 646.15 621.399L674.65 635.299H692.05L730.15 653.799C731.25 653.399 732.65 653.499 733.65 653.999C734.75 654.499 734.75 655.399 733.65 655.899C732.55 656.399 730.75 656.399 729.65 655.899C728.65 655.399 728.55 654.699 729.25 654.199L691.45 635.899H674.15L645.25 621.899C644.15 622.199 642.75 622.099 641.75 621.699C640.65 621.099 640.65 620.299 641.75 619.699C642.85 619.199 644.65 619.199 645.75 619.699ZM730.55 655.499C731.15 655.799 732.15 655.799 732.75 655.499C733.35 655.199 733.35 654.699 732.75 654.399C732.15 654.099 731.15 654.099 730.55 654.399C729.95 654.699 729.95 655.199 730.55 655.499ZM642.65 621.199C643.25 621.499 644.25 621.499 644.85 621.199C645.55 620.899 645.55 620.499 644.85 620.199C644.25 619.899 643.25 619.899 642.65 620.199C642.05 620.499 642.05 620.899 642.65 621.199Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M891.55 718.899C892.45 719.399 892.65 720.099 891.95 720.599L920.45 734.399H937.75L975.85 752.899C976.95 752.599 978.45 752.699 979.35 753.099C980.45 753.699 980.45 754.499 979.35 755.099C978.25 755.599 976.45 755.599 975.35 755.099C974.45 754.599 974.35 753.899 975.05 753.399L937.25 734.999H919.95L891.05 720.999C889.95 721.399 888.55 721.299 887.55 720.799C886.45 720.299 886.45 719.399 887.55 718.899C888.65 718.399 890.45 718.399 891.55 718.899ZM976.25 754.599C976.85 754.899 977.85 754.899 978.45 754.599C979.15 754.299 979.15 753.799 978.45 753.599C977.85 753.299 976.85 753.299 976.25 753.599C975.65 753.799 975.65 754.299 976.25 754.599ZM888.45 720.399C889.05 720.699 890.05 720.699 890.65 720.399C891.25 720.099 891.25 719.599 890.65 719.299C890.05 718.999 889.05 718.999 888.45 719.299C887.85 719.599 887.85 720.099 888.45 720.399Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M855.95 736.499C856.95 736.899 857.05 737.699 856.35 738.199L1045.25 829.799H1095.15V830.399H1044.65L855.55 738.599C854.45 738.899 852.95 738.899 852.05 738.399C850.95 737.899 850.95 736.999 852.05 736.499C853.15 735.999 854.95 735.999 855.95 736.499ZM852.95 737.999C853.55 738.299 854.55 738.299 855.15 737.999C855.75 737.699 855.75 737.199 855.15 736.899C854.55 736.599 853.55 736.599 852.95 736.899C852.25 737.199 852.25 737.699 852.95 737.999Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M798.05 602.399C796.95 602.899 795.15 602.899 794.05 602.399C793.15 601.899 792.95 601.199 793.65 600.699L657.45 534.499H587.15L466.05 475.799L466.95 475.299L587.65 533.899H657.95L794.55 600.199C795.65 599.899 797.15 599.999 798.05 600.399C799.15 600.999 799.15 601.799 798.05 602.399ZM797.15 601.899C797.75 601.599 797.75 601.099 797.15 600.799C796.55 600.599 795.55 600.599 794.95 600.799C794.35 601.099 794.35 601.599 794.95 601.899C795.55 602.199 796.55 602.199 797.15 601.899Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M694.25 659.899C693.15 660.399 691.35 660.399 690.25 659.899C689.25 659.399 689.15 658.699 689.85 658.199L500.65 566.399V541.899H501.95V566.099L690.75 657.799C691.85 657.399 693.25 657.499 694.25 657.999C695.35 658.499 695.35 659.399 694.25 659.899ZM693.35 659.499C693.95 659.199 693.95 658.699 693.35 658.399C692.75 658.099 691.75 658.099 691.15 658.399C690.55 658.699 690.55 659.199 691.15 659.499C691.75 659.799 692.75 659.799 693.35 659.499Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M614.95 625.999C613.85 626.499 612.05 626.499 610.95 625.999C610.05 625.499 609.95 624.799 610.55 624.299L549.65 594.699H528.05L485.65 574.099C484.65 574.499 483.15 574.399 482.25 573.899C481.15 573.399 481.15 572.499 482.25 571.999C483.35 571.499 485.05 571.499 486.15 571.999C487.15 572.499 487.25 573.199 486.55 573.699L528.65 594.099H550.15L611.45 623.899C612.55 623.499 614.05 623.599 614.95 624.099C616.05 624.599 616.05 625.499 614.95 625.999ZM485.35 573.499C485.95 573.199 485.95 572.699 485.35 572.399C484.75 572.099 483.75 572.099 483.05 572.399C482.45 572.699 482.45 573.199 483.05 573.499C483.75 573.799 484.75 573.799 485.35 573.499ZM614.05 625.599C614.65 625.299 614.65 624.799 614.05 624.499C613.45 624.199 612.45 624.199 611.85 624.499C611.25 624.799 611.25 625.299 611.85 625.599C612.45 625.899 613.45 625.899 614.05 625.599Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M670.25 669.499C671.35 670.099 671.35 670.899 670.25 671.499C669.35 671.899 667.85 671.999 666.85 671.699L530.55 737.799V771.899L409.45 830.699L408.65 830.199L529.35 771.699V737.499L665.95 671.199C665.25 670.699 665.35 669.999 666.35 669.499C667.45 668.999 669.25 668.999 670.25 669.499ZM669.45 669.999C668.85 669.699 667.85 669.699 667.25 669.999C666.55 670.299 666.55 670.699 667.25 670.999C667.85 671.299 668.85 671.299 669.45 670.999C670.05 670.699 670.05 670.299 669.45 669.999Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M805.65 723.799C806.75 724.299 806.75 725.199 805.65 725.699C804.75 726.199 803.25 726.199 802.15 725.899L612.95 817.699H562.45V817.099H612.45L801.25 725.499C800.55 724.899 800.75 724.199 801.65 723.799C802.75 723.199 804.55 723.199 805.65 723.799ZM804.75 724.199C804.15 723.899 803.15 723.899 802.55 724.199C801.95 724.499 801.95 724.999 802.55 725.299C803.15 725.599 804.15 725.599 804.75 725.299C805.35 724.999 805.35 724.499 804.75 724.199Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M794.95 738.399C796.05 738.899 796.05 739.799 794.95 740.299C794.05 740.699 792.55 740.799 791.55 740.499L730.55 770.099V780.499L688.15 801.099C688.85 801.599 688.65 802.299 687.75 802.799C686.65 803.299 684.85 803.299 683.75 802.799C682.65 802.199 682.65 801.399 683.75 800.799C684.75 800.399 686.15 800.299 687.25 800.699L729.25 780.299V769.799L790.65 739.999C789.95 739.499 790.05 738.799 791.05 738.399C792.15 737.799 793.85 737.799 794.95 738.399ZM686.85 801.299C686.25 800.999 685.25 800.999 684.65 801.299C684.05 801.599 684.05 802.099 684.65 802.399C685.25 802.599 686.25 802.599 686.85 802.399C687.45 802.099 687.45 801.599 686.85 801.299ZM794.15 738.799C793.45 738.499 792.55 738.499 791.85 738.799C791.25 739.099 791.25 739.599 791.85 739.899C792.55 740.199 793.45 740.199 794.15 739.899C794.75 739.599 794.75 739.099 794.15 738.799Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M807.75 611.399C806.65 610.899 806.65 609.999 807.75 609.499C808.75 608.999 810.15 608.999 811.25 609.299L1000.45 517.499H1050.95V518.099H1000.95L812.15 609.699C812.85 610.199 812.75 610.999 811.75 611.399C810.65 611.899 808.85 611.899 807.75 611.399ZM808.65 610.999C809.25 611.299 810.25 611.299 810.85 610.999C811.45 610.699 811.45 610.199 810.85 609.899C810.25 609.599 809.25 609.599 808.65 609.899C808.05 610.199 808.05 610.699 808.65 610.999Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M818.45 596.799C817.35 596.299 817.35 595.399 818.45 594.899C819.35 594.399 820.85 594.399 821.95 594.699L882.85 565.099V554.699L925.25 534.099C924.65 533.599 924.75 532.899 925.65 532.399C926.75 531.899 928.55 531.899 929.65 532.399C930.75 532.899 930.75 533.799 929.65 534.299C928.75 534.799 927.25 534.799 926.15 534.499L884.15 554.899V565.399L822.75 595.099C823.45 595.699 823.35 596.399 822.45 596.799C821.35 597.399 819.55 597.399 818.45 596.799ZM926.55 533.899C927.15 534.199 928.15 534.199 928.75 533.899C929.35 533.599 929.35 533.099 928.75 532.799C928.15 532.499 927.15 532.499 926.55 532.799C925.95 533.099 925.95 533.599 926.55 533.899ZM819.35 596.399C819.95 596.699 820.95 596.699 821.55 596.399C822.15 596.099 822.15 595.599 821.55 595.299C820.95 594.999 819.95 594.999 819.35 595.299C818.75 595.599 818.75 596.099 819.35 596.399Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M958.45 641.799C957.35 641.199 957.35 640.399 958.45 639.799C959.45 639.399 960.85 639.299 961.95 639.599L1151.15 547.799H1201.65V548.399H1151.65L962.85 640.099C963.55 640.599 963.45 641.299 962.45 641.799C961.35 642.299 959.55 642.299 958.45 641.799ZM959.35 641.299C959.95 641.599 960.95 641.599 961.55 641.299C962.15 640.999 962.15 640.599 961.55 640.299C960.95 639.999 959.95 639.999 959.35 640.299C958.75 640.599 958.75 640.999 959.35 641.299Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M912.85 654.499C911.75 653.999 911.75 653.099 912.85 652.599C913.75 652.099 915.25 651.999 916.35 652.399L977.35 622.799V612.299L1019.75 591.799C1019.05 591.199 1019.15 590.499 1020.05 590.099C1021.15 589.499 1022.95 589.499 1024.05 590.099C1025.15 590.599 1025.15 591.499 1024.05 591.999C1023.15 592.499 1021.65 592.499 1020.55 592.199L978.55 612.599V622.999L917.25 652.799C917.95 653.299 917.75 653.999 916.85 654.499C915.75 654.999 913.95 654.999 912.85 654.499ZM1020.95 591.599C1021.55 591.899 1022.55 591.899 1023.15 591.599C1023.85 591.299 1023.85 590.799 1023.15 590.499C1022.55 590.199 1021.55 590.199 1020.95 590.499C1020.35 590.799 1020.35 591.299 1020.95 591.599ZM913.75 654.099C914.35 654.399 915.35 654.399 915.95 654.099C916.55 653.799 916.55 653.299 915.95 652.999C915.35 652.699 914.35 652.699 913.75 652.999C913.15 653.299 913.15 653.799 913.75 654.099Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M966.05 565.799C967.15 566.399 967.15 567.199 966.05 567.799C965.15 568.199 963.65 568.299 962.55 567.999L901.55 597.599V607.999L840.45 637.699C841.15 638.199 840.95 638.899 840.05 639.399C838.95 639.899 837.15 639.899 836.05 639.399C834.95 638.799 834.95 637.999 836.05 637.399C836.95 636.999 838.45 636.899 839.55 637.299L900.35 607.699V597.299L961.65 567.499C961.05 566.999 961.15 566.299 962.05 565.799C963.15 565.299 964.95 565.299 966.05 565.799ZM839.15 637.899C838.55 637.599 837.55 637.599 836.95 637.899C836.35 638.199 836.35 638.699 836.95 638.999C837.55 639.199 838.55 639.199 839.15 638.999C839.75 638.699 839.75 638.199 839.15 637.899ZM965.15 566.299C964.55 565.999 963.55 565.999 962.95 566.299C962.35 566.599 962.35 566.999 962.95 567.299C963.55 567.599 964.55 567.599 965.15 567.299C965.75 566.999 965.75 566.599 965.15 566.299Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M694.65 667.799C695.75 668.299 695.75 669.199 694.65 669.699C693.65 670.199 692.25 670.199 691.15 669.899L630.15 699.499V709.899L587.75 730.499C588.45 730.999 588.35 731.699 587.35 732.199C586.25 732.699 584.45 732.699 583.35 732.199C582.25 731.699 582.25 730.799 583.35 730.299C584.35 729.799 585.75 729.699 586.85 730.099L628.85 709.699V699.199L690.25 669.499C689.55 668.899 689.65 668.199 690.65 667.799C691.75 667.199 693.55 667.199 694.65 667.799ZM586.45 730.699C585.85 730.399 584.85 730.399 584.25 730.699C583.65 730.999 583.65 731.499 584.25 731.799C584.85 732.099 585.85 732.099 586.45 731.799C587.05 731.499 587.05 730.999 586.45 730.699ZM693.75 668.199C693.15 667.899 692.15 667.899 691.55 668.199C690.95 668.499 690.95 668.999 691.55 669.299C692.15 669.599 693.15 669.599 693.75 669.299C694.35 668.999 694.35 668.499 693.75 668.199Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M718.35 746.799C719.45 747.299 719.45 748.199 718.35 748.699C717.35 749.199 715.95 749.199 714.85 748.899L653.85 778.499V788.999L611.45 809.499C612.15 810.099 612.05 810.799 611.05 811.199C609.95 811.799 608.15 811.799 607.05 811.199C605.95 810.699 605.95 809.799 607.05 809.299C608.05 808.799 609.45 808.799 610.55 809.099L652.55 788.699V778.299L713.95 748.499C713.25 747.999 713.35 747.299 714.35 746.799C715.45 746.299 717.25 746.299 718.35 746.799ZM610.15 809.699C609.55 809.399 608.55 809.399 607.95 809.699C607.35 809.999 607.35 810.499 607.95 810.799C608.55 811.099 609.55 811.099 610.15 810.799C610.75 810.499 610.75 809.999 610.15 809.699ZM717.45 747.199C716.85 746.899 715.85 746.899 715.25 747.199C714.55 747.499 714.55 747.999 715.25 748.299C715.85 748.599 716.85 748.599 717.45 748.299C718.05 747.999 718.05 747.499 717.45 747.199Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M773.95 689.699C772.95 690.199 771.55 690.199 770.45 689.899L709.05 719.699H687.55L645.55 740.099C646.25 740.599 646.15 741.299 645.15 741.799C644.05 742.299 642.25 742.299 641.15 741.799C640.05 741.199 640.05 740.399 641.15 739.799C642.15 739.399 643.55 739.299 644.65 739.599L687.05 719.099H708.55L769.55 689.499C768.85 688.899 769.05 688.199 769.95 687.799C771.05 687.199 772.85 687.199 773.95 687.799C775.05 688.299 775.05 689.199 773.95 689.699ZM642.05 740.299C641.45 740.499 641.45 740.999 642.05 741.299C642.65 741.599 643.65 741.599 644.25 741.299C644.85 740.999 644.85 740.499 644.25 740.299C643.65 739.999 642.65 739.999 642.05 740.299ZM770.85 688.199C770.25 688.499 770.25 688.999 770.85 689.299C771.45 689.599 772.45 689.599 773.05 689.299C773.65 688.999 773.65 688.499 773.05 688.199C772.45 687.899 771.45 687.899 770.85 688.199Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M904.45 749.999C905.35 750.499 905.55 751.199 904.85 751.699L964.15 780.499H984.15L1157.45 864.599L1156.55 864.999L983.65 781.099H963.65L903.95 752.099C902.85 752.499 901.35 752.399 900.45 751.899C899.35 751.399 899.35 750.499 900.45 749.999C901.55 749.499 903.35 749.499 904.45 749.999ZM901.35 751.499C901.95 751.799 902.95 751.799 903.55 751.499C904.15 751.199 904.15 750.699 903.55 750.399C902.95 750.099 901.95 750.099 901.35 750.399C900.75 750.699 900.75 751.199 901.35 751.499Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M738.35 672.499C737.35 672.999 735.95 673.099 734.75 672.899L571.85 751.899V798.099H569.35V751.399L732.95 671.999C732.45 671.399 732.65 670.699 733.65 670.299C734.95 669.599 737.05 669.599 738.35 670.299C739.65 670.899 739.65 671.899 738.35 672.499ZM734.95 670.899C734.35 671.199 734.35 671.599 734.95 671.899C735.55 672.199 736.45 672.199 737.05 671.899C737.55 671.599 737.55 671.199 737.05 670.899C736.45 670.599 735.55 670.599 734.95 670.899Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M865.35 651.699C866.35 651.199 867.75 651.099 868.95 651.299L1031.85 572.299V550.999H1034.35V572.799L870.75 652.199C871.35 652.799 871.05 653.499 870.05 653.999C868.75 654.599 866.65 654.599 865.35 653.999C864.05 653.299 864.05 652.299 865.35 651.699ZM868.75 653.299C869.35 652.999 869.35 652.599 868.75 652.299C868.15 651.999 867.25 651.999 866.65 652.299C866.15 652.599 866.15 652.999 866.65 653.299C867.25 653.599 868.15 653.599 868.75 653.299Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M901.95 664.399C902.85 664.899 902.95 665.599 902.35 666.099L970.45 699.199V706.899L1092.05 765.899C1093.15 765.599 1094.55 765.699 1095.45 766.099C1096.55 766.599 1096.55 767.499 1095.45 767.999C1094.35 768.599 1092.65 768.599 1091.55 767.999C1090.55 767.599 1090.45 766.899 1091.15 766.299L969.25 707.199V699.399L901.45 666.499C900.35 666.899 898.85 666.799 897.95 666.299C896.85 665.799 896.85 664.899 897.95 664.399C899.05 663.899 900.85 663.899 901.95 664.399ZM1092.35 767.599C1093.05 767.899 1093.95 767.899 1094.65 767.599C1095.25 767.299 1095.25 766.799 1094.65 766.499C1093.95 766.199 1093.05 766.199 1092.35 766.499C1091.75 766.799 1091.75 767.299 1092.35 767.599ZM898.85 665.899C899.45 666.199 900.45 666.199 901.05 665.899C901.65 665.599 901.65 665.099 901.05 664.799C900.45 664.499 899.45 664.499 898.85 664.799C898.25 665.099 898.25 665.599 898.85 665.899Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1061.35 766.499L1060.25 766.999L945.65 711.399V659.299C945.05 659.299 944.45 659.099 943.95 658.899C942.55 658.199 942.55 657.099 943.95 656.399C945.35 655.699 947.65 655.699 949.05 656.399C950.45 657.099 950.45 658.199 949.05 658.899C948.55 659.099 947.95 659.299 947.25 659.399V711.099L1061.35 766.499ZM945.15 658.399C945.95 658.699 947.15 658.699 947.95 658.399C948.65 657.999 948.65 657.399 947.95 656.999C947.15 656.699 945.95 656.699 945.15 656.999C944.45 657.399 944.45 657.999 945.15 658.399Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M816.25 568.299C814.85 568.899 812.55 568.899 811.15 568.299C809.75 567.599 809.75 566.499 811.15 565.799C812.35 565.199 814.25 565.099 815.55 565.599L928.35 510.799L929.45 511.299L816.75 566.099C817.55 566.799 817.45 567.699 816.25 568.299ZM815.05 567.699C815.85 567.299 815.85 566.699 815.05 566.399C814.25 565.999 813.05 565.999 812.25 566.399C811.55 566.699 811.55 567.299 812.25 567.699C813.05 568.099 814.25 568.099 815.05 567.699Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:overlay">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1006.75 677.899C1005.35 678.599 1003.15 678.599 1001.75 677.899C1000.35 677.199 1000.35 676.099 1001.75 675.399C1002.25 675.199 1002.85 674.999 1003.45 674.899V652.199L1062.05 623.799L1063.15 624.399L1005.15 652.499V674.999C1005.75 674.999 1006.35 675.199 1006.75 675.399C1008.15 676.099 1008.15 677.199 1006.75 677.899ZM1005.65 677.299C1006.35 676.899 1006.35 676.299 1005.65 675.999C1004.85 675.599 1003.65 675.599 1002.85 675.999C1002.15 676.299 1002.15 676.899 1002.85 677.299C1003.65 677.699 1004.85 677.699 1005.65 677.299Z" fill="white"/>
                  </g>
                  <path style="mix-blend-mode:color-dodge" d="M835.55 734.599C831.55 736.499 825.05 736.499 821.05 734.599C817.05 732.599 817.05 729.499 821.05 727.599C825.05 725.599 831.55 725.599 835.55 727.599C839.55 729.499 839.55 732.599 835.55 734.599Z" fill="url(#paint78_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="824.643" y="728.76" width="8" height="6" fill="url(#pattern75_1322_3092)"/>
                  <path d="M828.95 731.399C828.55 731.599 827.95 731.599 827.65 731.399C827.25 731.199 827.25 730.899 827.65 730.699C827.95 730.599 828.55 730.599 828.95 730.699C829.35 730.899 829.35 731.199 828.95 731.399Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M840.95 749.099C836.95 751.099 830.45 751.099 826.45 749.099C822.45 747.199 822.45 743.999 826.45 742.099C830.45 740.199 836.95 740.199 840.95 742.099C844.95 743.999 844.95 747.199 840.95 749.099Z" fill="url(#paint79_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="830.643" y="742.76" width="8" height="8" fill="url(#pattern76_1322_3092)"/>
                  <path d="M834.35 745.998C833.95 746.098 833.35 746.098 832.95 745.998C832.55 745.798 832.55 745.498 832.95 745.298C833.35 745.098 833.95 745.098 834.35 745.298C834.75 745.498 834.75 745.798 834.35 745.998Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M751.35 677.899C747.45 679.699 741.25 679.699 737.35 677.899C733.45 675.999 733.45 672.899 737.35 670.999C741.25 669.199 747.45 669.199 751.35 670.999C755.25 672.899 755.25 675.999 751.35 677.899Z" fill="url(#paint80_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="740.681" y="672.799" width="8" height="6" fill="url(#pattern77_1322_3092)"/>
                  <path d="M745.05 674.799C744.65 674.999 744.05 674.999 743.65 674.799C743.35 674.599 743.35 674.299 743.65 674.099C744.05 673.999 744.65 673.999 745.05 674.099C745.35 674.299 745.35 674.599 745.05 674.799Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M724.05 691.099C720.15 692.999 713.85 692.999 709.95 691.099C706.15 689.199 706.15 686.199 709.95 684.299C713.85 682.399 720.15 682.399 724.05 684.299C727.95 686.199 727.95 689.199 724.05 691.099Z" fill="url(#paint81_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="714.681" y="684.798" width="8" height="8" fill="url(#pattern78_1322_3092)"/>
                  <path d="M717.65 687.999C717.35 688.199 716.75 688.199 716.35 687.999C715.95 687.899 715.95 687.599 716.35 687.399C716.75 687.199 717.35 687.199 717.65 687.399C718.05 687.599 718.05 687.899 717.65 687.999Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M811.05 705.399C807.15 707.299 800.85 707.299 796.95 705.399C793.05 703.499 793.05 700.499 796.95 698.599C800.85 696.699 807.15 696.699 811.05 698.599C814.85 700.499 814.85 703.499 811.05 705.399Z" fill="url(#paint82_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="800.681" y="698.798" width="8" height="8" fill="url(#pattern79_1322_3092)"/>
                  <path d="M804.65 702.299C804.25 702.499 803.65 702.499 803.35 702.299C802.95 702.099 802.95 701.899 803.35 701.699C803.65 701.499 804.25 701.499 804.65 701.699C805.05 701.899 805.05 702.099 804.65 702.299Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M770.55 688.299C766.65 690.099 760.35 690.099 756.45 688.299C752.65 686.399 752.65 683.299 756.45 681.399C760.35 679.599 766.65 679.599 770.55 681.399C774.45 683.299 774.45 686.399 770.55 688.299Z" fill="url(#paint83_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="760.681" y="682.798" width="8" height="6" fill="url(#pattern80_1322_3092)"/>
                  <path d="M764.15 685.199C763.85 685.399 763.25 685.399 762.85 685.199C762.45 684.999 762.45 684.699 762.85 684.499C763.25 684.399 763.85 684.399 764.15 684.499C764.55 684.699 764.55 684.999 764.15 685.199Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M784.45 694.999C780.55 696.899 774.35 696.899 770.45 694.999C766.55 693.099 766.55 690.099 770.45 688.199C774.35 686.299 780.55 686.299 784.45 688.199C788.35 690.099 788.35 693.099 784.45 694.999Z" fill="url(#paint84_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="774.681" y="688.799" width="8" height="8" fill="url(#pattern81_1322_3092)"/>
                  <path d="M778.15 691.899C777.75 692.099 777.15 692.099 776.75 691.899C776.45 691.799 776.45 691.499 776.75 691.299C777.15 691.099 777.75 691.099 778.15 691.299C778.45 691.499 778.45 691.799 778.15 691.899Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M835.35 693.599C831.45 695.499 825.25 695.499 821.35 693.599C817.45 691.699 817.45 688.599 821.35 686.799C825.25 684.899 831.45 684.899 835.35 686.799C839.25 688.599 839.25 691.699 835.35 693.599Z" fill="url(#paint85_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="824.681" y="686.798" width="8" height="8" fill="url(#pattern82_1322_3092)"/>
                  <path d="M829.05 690.499C828.65 690.699 828.05 690.699 827.65 690.499C827.35 690.299 827.35 689.999 827.65 689.799C828.05 689.699 828.65 689.699 829.05 689.799C829.35 689.999 829.35 690.299 829.05 690.499Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M718.85 628.199C714.95 630.099 708.75 630.099 704.85 628.199C700.95 626.299 700.95 623.299 704.85 621.399C708.75 619.499 714.95 619.499 718.85 621.399C722.75 623.299 722.75 626.299 718.85 628.199Z" fill="url(#paint86_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="708.681" y="622.798" width="8" height="6" fill="url(#pattern83_1322_3092)"/>
                  <path d="M712.55 625.099C712.15 625.299 711.55 625.299 711.15 625.099C710.85 624.899 710.85 624.599 711.15 624.499C711.55 624.299 712.15 624.299 712.55 624.499C712.85 624.599 712.85 624.899 712.55 625.099Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M740.25 574.299C736.45 576.199 730.15 576.199 726.25 574.299C722.35 572.499 722.35 569.399 726.25 567.499C730.15 565.599 736.45 565.599 740.25 567.499C744.15 569.399 744.15 572.499 740.25 574.299Z" fill="url(#paint87_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="730.681" y="568.798" width="8" height="6" fill="url(#pattern84_1322_3092)"/>
                  <path d="M733.95 571.199C733.55 571.399 732.95 571.399 732.55 571.199C732.25 571.099 732.25 570.799 732.55 570.599C732.95 570.399 733.55 570.399 733.95 570.599C734.25 570.799 734.25 571.099 733.95 571.199Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M938.45 658.499C934.45 660.499 927.95 660.499 923.95 658.499C919.95 656.599 919.95 653.499 923.95 651.499C927.95 649.599 934.45 649.599 938.45 651.499C942.45 653.499 942.45 656.599 938.45 658.499Z" fill="url(#paint88_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="928.643" y="652.76" width="8" height="6" fill="url(#pattern85_1322_3092)"/>
                  <path d="M931.95 655.399C931.55 655.499 930.95 655.499 930.55 655.399C930.15 655.199 930.15 654.899 930.55 654.699C930.95 654.499 931.55 654.499 931.95 654.699C932.25 654.899 932.25 655.199 931.95 655.399Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M936.55 698.999C932.55 700.899 926.05 700.899 922.05 698.999C918.05 696.999 918.05 693.899 922.05 691.899C926.05 689.999 932.55 689.999 936.55 691.899C940.55 693.899 940.55 696.999 936.55 698.999Z" fill="url(#paint89_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="926.643" y="692.76" width="8" height="6" fill="url(#pattern86_1322_3092)"/>
                  <path d="M929.95 695.799C929.55 695.999 928.95 695.999 928.55 695.799C928.25 695.599 928.25 695.299 928.55 695.099C928.95 694.899 929.55 694.899 929.95 695.099C930.35 695.299 930.35 695.599 929.95 695.799Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M978.55 688.499C974.55 690.399 968.05 690.399 964.05 688.499C960.05 686.499 960.05 683.399 964.05 681.499C968.05 679.499 974.55 679.499 978.55 681.499C982.55 683.399 982.55 686.499 978.55 688.499Z" fill="url(#paint90_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="968.643" y="682.76" width="8" height="6" fill="url(#pattern87_1322_3092)"/>
                  <path d="M971.95 685.298C971.65 685.498 970.95 685.498 970.65 685.298C970.25 685.098 970.25 684.798 970.65 684.598C970.95 684.498 971.65 684.498 971.95 684.598C972.35 684.798 972.35 685.098 971.95 685.298Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M890.15 667.299C886.15 669.299 879.65 669.299 875.65 667.299C871.65 665.399 871.65 662.199 875.65 660.299C879.65 658.299 886.15 658.299 890.15 660.299C894.15 662.199 894.15 665.399 890.15 667.299Z" fill="url(#paint91_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="880.643" y="660.76" width="6" height="8" fill="url(#pattern88_1322_3092)"/>
                  <path d="M883.55 664.099C883.25 664.299 882.65 664.299 882.25 664.099C881.85 663.899 881.85 663.599 882.25 663.499C882.65 663.299 883.25 663.299 883.55 663.499C883.95 663.599 883.95 663.899 883.55 664.099Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M854.15 646.199C850.15 648.199 843.65 648.199 839.65 646.199C835.65 644.299 835.65 641.099 839.65 639.199C843.65 637.199 850.15 637.199 854.15 639.199C858.15 641.099 858.15 644.299 854.15 646.199Z" fill="url(#paint92_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="844.643" y="640.76" width="6" height="6" fill="url(#pattern89_1322_3092)"/>
                  <path d="M847.55 642.999C847.15 643.199 846.55 643.199 846.15 642.999C845.85 642.799 845.85 642.499 846.15 642.399C846.55 642.199 847.15 642.199 847.55 642.399C847.95 642.499 847.95 642.799 847.55 642.999Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M839.35 638.999C835.35 640.999 828.85 640.999 824.85 638.999C820.85 637.099 820.85 633.999 824.85 631.999C828.85 630.099 835.35 630.099 839.35 631.999C843.35 633.999 843.35 637.099 839.35 638.999Z" fill="url(#paint93_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="828.643" y="632.76" width="8" height="6" fill="url(#pattern90_1322_3092)"/>
                  <path d="M832.75 635.899C832.45 635.999 831.75 635.999 831.45 635.899C831.05 635.699 831.05 635.399 831.45 635.199C831.75 634.999 832.45 634.999 832.75 635.199C833.15 635.399 833.15 635.699 832.75 635.899Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M809.05 624.399C805.05 626.299 798.55 626.299 794.55 624.399C790.55 622.399 790.55 619.299 794.55 617.299C798.55 615.399 805.05 615.399 809.05 617.299C813.05 619.299 813.05 622.399 809.05 624.399Z" fill="url(#paint94_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="798.643" y="618.76" width="8" height="6" fill="url(#pattern91_1322_3092)"/>
                  <path d="M802.45 621.199C802.15 621.399 801.55 621.399 801.15 621.199C800.75 620.999 800.75 620.699 801.15 620.499C801.55 620.299 802.15 620.299 802.45 620.499C802.85 620.699 802.85 620.999 802.45 621.199Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M797.75 613.799C793.75 615.699 787.25 615.699 783.25 613.799C779.25 611.799 779.25 608.699 783.25 606.799C787.25 604.799 793.75 604.799 797.75 606.799C801.75 608.699 801.75 611.799 797.75 613.799Z" fill="url(#paint95_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="786.643" y="606.76" width="8" height="8" fill="url(#pattern92_1322_3092)"/>
                  <path d="M791.15 610.599C790.75 610.799 790.15 610.799 789.75 610.599C789.45 610.399 789.45 610.099 789.75 609.899C790.15 609.799 790.75 609.799 791.15 609.899C791.55 610.099 791.55 610.399 791.15 610.599Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M765.25 645.799C761.25 647.699 754.75 647.699 750.75 645.799C746.75 643.799 746.75 640.699 750.75 638.699C754.75 636.799 761.25 636.799 765.25 638.699C769.25 640.699 769.25 643.799 765.25 645.799Z" fill="url(#paint96_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="754.643" y="638.761" width="8" height="8" fill="url(#pattern93_1322_3092)"/>
                  <path d="M758.65 642.6C758.25 642.8 757.65 642.8 757.25 642.6C756.85 642.4 756.85 642.1 757.25 641.9C757.65 641.7 758.25 641.7 758.65 641.9C759.05 642.1 759.05 642.4 758.65 642.6Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M884.05 720.999C880.05 722.899 873.55 722.899 869.55 720.999C865.55 718.999 865.55 715.899 869.55 713.899C873.55 711.999 880.05 711.999 884.05 713.899C888.05 715.899 888.05 718.999 884.05 720.999Z" fill="url(#paint97_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="872.643" y="714.76" width="8" height="6" fill="url(#pattern94_1322_3092)"/>
                  <path d="M877.45 717.799C877.05 717.999 876.45 717.999 876.15 717.799C875.75 717.599 875.75 717.299 876.15 717.099C876.45 716.899 877.05 716.899 877.45 717.099C877.85 717.299 877.85 717.599 877.45 717.799Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M928.75 713.899C917.65 719.299 899.65 719.299 888.55 713.899C877.45 708.499 877.45 699.799 888.55 694.399C899.65 688.999 917.65 688.999 928.75 694.399C939.75 699.799 939.75 708.499 928.75 713.899Z" fill="url(#paint98_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="902.447" y="698.563" width="14" height="12" fill="url(#pattern95_1322_3092)"/>
                  <path d="M910.55 704.998C909.45 705.498 907.75 705.498 906.75 704.998C905.65 704.498 905.65 703.698 906.75 703.198C907.75 702.698 909.45 702.698 910.55 703.198C911.55 703.698 911.55 704.498 910.55 704.998Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M978.95 696.399C967.95 701.799 949.95 701.799 938.85 696.399C927.75 691.099 927.75 682.299 938.85 676.999C949.95 671.599 967.95 671.599 978.95 676.999C990.05 682.299 990.05 691.099 978.95 696.399Z" fill="url(#paint99_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="952.447" y="680.564" width="14" height="14" fill="url(#pattern96_1322_3092)"/>
                  <path d="M960.85 687.6C959.75 688.1 958.05 688.1 957.05 687.6C955.95 687.1 955.95 686.3 957.05 685.8C958.05 685.3 959.75 685.3 960.85 685.8C961.85 686.3 961.85 687.1 960.85 687.6Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M874.25 611.599C863.15 616.999 845.15 616.999 834.05 611.599C822.95 606.199 822.95 597.499 834.05 592.099C845.15 586.699 863.15 586.699 874.25 592.099C885.35 597.499 885.35 606.199 874.25 611.599Z" fill="url(#paint100_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="846.447" y="596.563" width="16" height="12" fill="url(#pattern97_1322_3092)"/>
                  <path d="M856.05 602.798C854.95 603.298 853.25 603.298 852.25 602.798C851.25 602.298 851.25 601.398 852.25 600.898C853.25 600.398 854.95 600.398 856.05 600.898C857.05 601.398 857.05 602.298 856.05 602.798Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M714.35 719.599C703.25 724.999 685.25 724.999 674.15 719.599C663.05 714.199 663.05 705.499 674.15 700.099C685.25 694.699 703.25 694.699 714.35 700.099C725.35 705.499 725.35 714.199 714.35 719.599Z" fill="url(#paint101_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="686.447" y="704.563" width="16" height="12" fill="url(#pattern98_1322_3092)"/>
                  <path d="M696.15 710.798C695.05 711.298 693.35 711.298 692.35 710.798C691.25 710.298 691.25 709.498 692.35 708.998C693.35 708.498 695.05 708.498 696.15 708.998C697.15 709.498 697.15 710.298 696.15 710.798Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M870.85 762.699C859.75 768.099 841.75 768.099 830.75 762.699C819.65 757.299 819.65 748.599 830.75 743.199C841.75 737.799 859.75 737.799 870.85 743.199C881.95 748.599 881.95 757.299 870.85 762.699Z" fill="url(#paint102_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="844.447" y="746.564" width="14" height="14" fill="url(#pattern99_1322_3092)"/>
                  <path d="M852.65 753.799C851.65 754.399 849.95 754.399 848.85 753.799C847.85 753.299 847.85 752.499 848.85 751.999C849.95 751.499 851.65 751.499 852.65 751.999C853.75 752.499 853.75 753.299 852.65 753.799Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M705.75 722.799C701.85 724.699 695.55 724.699 691.75 722.799C687.85 720.899 687.85 717.899 691.75 715.999C695.55 714.099 701.85 714.099 705.75 715.999C709.65 717.899 709.65 720.899 705.75 722.799Z" fill="url(#paint103_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="694.681" y="716.798" width="8" height="6" fill="url(#pattern100_1322_3092)"/>
                  <path d="M699.35 719.699C699.05 719.899 698.45 719.899 698.05 719.699C697.75 719.499 697.75 719.199 698.05 719.099C698.45 718.899 699.05 718.899 699.35 719.099C699.75 719.199 699.75 719.499 699.35 719.699Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M675.05 656.699C671.25 658.599 664.95 658.599 661.05 656.699C657.15 654.899 657.15 651.799 661.05 649.899C664.95 647.999 671.25 647.999 675.05 649.899C678.95 651.799 678.95 654.899 675.05 656.699Z" fill="url(#paint104_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="664.681" y="650.798" width="8" height="6" fill="url(#pattern101_1322_3092)"/>
                  <path d="M668.75 653.699C668.35 653.799 667.75 653.799 667.45 653.699C667.05 653.499 667.05 653.199 667.45 652.999C667.75 652.799 668.35 652.799 668.75 652.999C669.05 653.199 669.05 653.499 668.75 653.699Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M619.35 649.499C615.45 651.399 609.25 651.399 605.35 649.499C601.45 647.599 601.45 644.499 605.35 642.699C609.25 640.799 615.45 640.799 619.35 642.699C623.25 644.499 623.25 647.599 619.35 649.499Z" fill="url(#paint105_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="608.681" y="642.799" width="8" height="8" fill="url(#pattern102_1322_3092)"/>
                  <path d="M613.05 646.4C612.65 646.6 612.05 646.6 611.65 646.4C611.35 646.2 611.35 645.9 611.65 645.7C612.05 645.6 612.65 645.6 613.05 645.7C613.35 645.9 613.35 646.2 613.05 646.4Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M746.05 654.799C742.15 656.699 735.85 656.699 732.05 654.799C728.15 652.999 728.15 649.899 732.05 647.999C735.85 646.199 742.15 646.199 746.05 647.999C749.95 649.899 749.95 652.999 746.05 654.799Z" fill="url(#paint106_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="736.681" y="648.799" width="8" height="6" fill="url(#pattern103_1322_3092)"/>
                  <path d="M739.65 651.8C739.35 651.9 738.75 651.9 738.35 651.8C737.95 651.6 737.95 651.3 738.35 651.1C738.75 650.9 739.35 650.9 739.65 651.1C740.05 651.3 740.05 651.6 739.65 651.8Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M803.65 709.199C799.75 710.999 793.45 710.999 789.55 709.199C785.75 707.299 785.75 704.199 789.55 702.399C793.45 700.499 799.75 700.499 803.65 702.399C807.55 704.199 807.55 707.299 803.65 709.199Z" fill="url(#paint107_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="792.681" y="702.798" width="8" height="8" fill="url(#pattern104_1322_3092)"/>
                  <path d="M797.25 706.099C796.95 706.299 796.35 706.299 795.95 706.099C795.55 705.899 795.55 705.599 795.95 705.399C796.35 705.299 796.95 705.299 797.25 705.399C797.65 705.599 797.65 705.899 797.25 706.099Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M789.55 586.399C778.45 591.799 760.45 591.799 749.35 586.399C738.25 580.999 738.25 572.299 749.35 566.899C760.45 561.499 778.45 561.499 789.55 566.899C800.65 572.299 800.65 580.999 789.55 586.399Z" fill="url(#paint108_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="762.447" y="570.563" width="16" height="12" fill="url(#pattern105_1322_3092)"/>
                  <path d="M771.35 577.599C770.25 578.099 768.55 578.099 767.55 577.599C766.55 577.099 766.55 576.299 767.55 575.799C768.55 575.299 770.25 575.299 771.35 575.799C772.35 576.299 772.35 577.099 771.35 577.599Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M680.05 630.099C668.95 635.499 651.05 635.499 639.95 630.099C628.85 624.799 628.85 615.999 639.95 610.599C651.05 605.299 668.95 605.299 680.05 610.599C691.15 615.999 691.15 624.799 680.05 630.099Z" fill="url(#paint109_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="652.447" y="614.564" width="16" height="12" fill="url(#pattern106_1322_3092)"/>
                  <path d="M661.85 621.299C660.85 621.799 659.15 621.799 658.15 621.299C657.05 620.799 657.05 619.999 658.15 619.499C659.15 618.999 660.85 618.999 661.85 619.499C662.95 619.999 662.95 620.799 661.85 621.299Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M668.75 575.599C657.65 580.999 639.65 580.999 628.55 575.599C617.45 570.199 617.45 561.499 628.55 556.099C639.65 550.799 657.65 550.799 668.75 556.099C679.85 561.499 679.85 570.199 668.75 575.599Z" fill="url(#paint110_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="642.447" y="560.564" width="14" height="12" fill="url(#pattern107_1322_3092)"/>
                  <path d="M650.55 566.799C649.55 567.299 647.85 567.299 646.75 566.799C645.75 566.299 645.75 565.499 646.75 564.999C647.85 564.499 649.55 564.499 650.55 564.999C651.55 565.499 651.55 566.299 650.55 566.799Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M644.25 673.799C633.15 679.199 615.15 679.199 604.15 673.799C593.05 668.399 593.05 659.699 604.15 654.299C615.15 648.899 633.15 648.899 644.25 654.299C655.35 659.699 655.35 668.399 644.25 673.799Z" fill="url(#paint111_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="616.447" y="658.564" width="16" height="12" fill="url(#pattern108_1322_3092)"/>
                  <path d="M626.05 664.999C625.05 665.499 623.35 665.499 622.25 664.999C621.25 664.499 621.25 663.699 622.25 663.199C623.35 662.599 625.05 662.599 626.05 663.199C627.15 663.699 627.15 664.499 626.05 664.999Z" fill="white"/>
                  <path style="mix-blend-mode:color-dodge" d="M671.55 710.499C660.55 715.899 642.55 715.899 631.45 710.499C620.35 705.099 620.35 696.399 631.45 690.999C642.55 685.599 660.55 685.599 671.55 690.999C682.65 696.399 682.65 705.099 671.55 710.499Z" fill="url(#paint112_radial_1322_3092)"/>
                  <rect style="mix-blend-mode:screen" opacity="0.7" x="644.447" y="694.564" width="16" height="14" fill="url(#pattern109_1322_3092)"/>
                  <path d="M653.45 701.699C652.35 702.199 650.65 702.199 649.65 701.699C648.55 701.199 648.55 700.399 649.65 699.899C650.65 699.299 652.35 699.299 653.45 699.899C654.45 700.399 654.45 701.199 653.45 701.699Z" fill="white"/>
                  </g>
                  <g style="mix-blend-mode:color-dodge">
                  <path d="M794.15 757.999L578.65 653.699C575.65 652.299 575.65 649.899 578.65 648.399L794.15 544.199C797.15 542.699 802.05 542.699 805.05 544.199L1020.45 648.399C1023.55 649.899 1023.55 652.299 1020.45 653.699L805.05 757.999C802.05 759.399 797.15 759.399 794.15 757.999Z" stroke="#FFC0A5" stroke-width="0.9" stroke-miterlimit="10"/>
                  </g>
                  <path d="M799.55 767.399C799.05 767.399 798.65 767.299 798.35 767.099C797.95 766.899 797.75 766.699 797.75 766.499C797.75 766.299 797.95 765.999 798.35 765.899C798.95 765.599 800.15 765.599 800.85 765.899C801.15 765.999 801.35 766.299 801.35 766.499C801.35 766.699 801.15 766.899 800.85 767.099C800.55 767.299 800.05 767.399 799.55 767.399Z" fill="#FFC0A5"/>
                  <path d="M788.35 762.298C787.65 761.998 787.65 761.398 788.35 761.098C789.05 760.698 790.15 760.698 790.85 761.098C791.55 761.398 791.55 761.998 790.85 762.298C790.55 762.498 790.05 762.598 789.65 762.598C789.15 762.598 788.75 762.498 788.35 762.298ZM778.45 757.498C777.75 757.198 777.75 756.598 778.45 756.298C779.15 755.898 780.25 755.898 780.95 756.298C781.65 756.598 781.65 757.198 780.95 757.498C780.65 757.598 780.15 757.698 779.65 757.698C779.25 757.698 778.75 757.598 778.45 757.498ZM768.45 752.698C767.85 752.298 767.85 751.798 768.45 751.498C769.15 751.098 770.35 751.098 771.05 751.498C771.75 751.798 771.75 752.298 771.05 752.698C770.65 752.798 770.25 752.898 769.75 752.898C769.25 752.898 768.85 752.798 768.45 752.698ZM758.55 747.898C757.85 747.498 757.85 746.998 758.55 746.698C759.25 746.298 760.35 746.298 761.05 746.698C761.75 746.998 761.75 747.498 761.05 747.898C760.75 747.998 760.25 748.098 759.85 748.098C759.35 748.098 758.95 747.998 758.55 747.898ZM748.65 743.098C747.95 742.698 747.95 742.198 748.65 741.798C749.35 741.498 750.45 741.498 751.15 741.798C751.85 742.198 751.85 742.698 751.15 743.098C750.75 743.198 750.35 743.298 749.85 743.298C749.45 743.298 748.95 743.198 748.65 743.098ZM738.65 738.298C737.95 737.898 737.95 737.398 738.65 736.998C739.35 736.698 740.55 736.698 741.25 736.998C741.95 737.398 741.95 737.898 741.25 738.298C740.85 738.398 740.45 738.498 739.95 738.498C739.45 738.498 739.05 738.398 738.65 738.298ZM728.75 733.398C728.05 733.098 728.05 732.598 728.75 732.198C729.45 731.898 730.55 731.898 731.25 732.198C731.95 732.598 731.95 733.098 731.25 733.398C730.95 733.598 730.45 733.698 730.05 733.698C729.55 733.698 729.05 733.598 728.75 733.398ZM718.85 728.598C718.15 728.298 718.15 727.798 718.85 727.398C719.45 727.098 720.65 727.098 721.35 727.398C722.05 727.798 722.05 728.298 721.35 728.598C720.95 728.798 720.55 728.898 720.05 728.898C719.65 728.898 719.15 728.798 718.85 728.598ZM708.85 723.798C708.15 723.498 708.15 722.898 708.85 722.598C709.55 722.298 710.75 722.298 711.35 722.598C712.05 722.898 712.05 723.498 711.35 723.798C711.05 723.998 710.55 724.098 710.15 724.098C709.65 724.098 709.25 723.998 708.85 723.798ZM698.95 718.998C698.25 718.698 698.25 718.098 698.95 717.798C699.65 717.498 700.75 717.498 701.45 717.798C702.15 718.098 702.15 718.698 701.45 718.998C701.15 719.198 700.65 719.298 700.15 719.298C699.75 719.298 699.25 719.198 698.95 718.998ZM689.05 714.198C688.25 713.898 688.25 713.298 689.05 712.998C689.65 712.698 690.85 712.698 691.55 712.998C692.25 713.298 692.25 713.898 691.55 714.198C691.15 714.398 690.75 714.498 690.25 714.498C689.85 714.498 689.35 714.398 689.05 714.198ZM679.05 709.398C678.35 709.098 678.35 708.498 679.05 708.198C679.75 707.798 680.85 707.798 681.55 708.198C682.25 708.498 682.25 709.098 681.55 709.398C681.25 709.598 680.75 709.598 680.35 709.598C679.85 709.598 679.45 709.598 679.05 709.398ZM669.15 704.598C668.45 704.198 668.45 703.698 669.15 703.398C669.85 702.998 670.95 702.998 671.65 703.398C672.35 703.698 672.35 704.198 671.65 704.598C671.25 704.798 670.85 704.798 670.35 704.798C669.95 704.798 669.45 704.798 669.15 704.598ZM659.15 699.798C658.45 699.398 658.45 698.898 659.15 698.598C659.85 698.198 661.05 698.198 661.65 698.598C662.35 698.898 662.35 699.398 661.65 699.798C661.35 699.898 660.85 699.998 660.45 699.998C659.95 699.998 659.55 699.898 659.15 699.798ZM649.25 694.998C648.55 694.598 648.55 694.098 649.25 693.698C649.95 693.398 651.05 693.398 651.75 693.698C652.45 694.098 652.45 694.598 651.75 694.998C651.45 695.098 650.95 695.198 650.55 695.198C650.05 695.198 649.55 695.098 649.25 694.998ZM639.35 690.198C638.65 689.798 638.65 689.298 639.35 688.898C639.95 688.598 641.15 688.598 641.85 688.898C642.55 689.298 642.55 689.798 641.85 690.198C641.45 690.298 641.05 690.398 640.55 690.398C640.15 690.398 639.65 690.298 639.35 690.198ZM629.35 685.298C628.65 684.998 628.65 684.498 629.35 684.098C630.05 683.798 631.15 683.798 631.85 684.098C632.55 684.498 632.55 684.998 631.85 685.298C631.55 685.498 631.05 685.598 630.65 685.598C630.15 685.598 629.75 685.498 629.35 685.298ZM619.45 680.498C618.75 680.198 618.75 679.698 619.45 679.298C620.15 678.998 621.25 678.998 621.95 679.298C622.65 679.698 622.65 680.198 621.95 680.498C621.55 680.698 621.15 680.798 620.65 680.798C620.25 680.798 619.75 680.698 619.45 680.498ZM609.45 675.698C608.75 675.398 608.75 674.798 609.45 674.498C610.15 674.198 611.35 674.198 611.95 674.498C612.65 674.798 612.65 675.398 611.95 675.698C611.65 675.898 611.15 675.998 610.75 675.998C610.25 675.998 609.85 675.898 609.45 675.698ZM599.55 670.898C598.85 670.598 598.85 669.998 599.55 669.698C600.25 669.398 601.35 669.398 602.05 669.698C602.75 669.998 602.75 670.598 602.05 670.898C601.75 671.098 601.25 671.198 600.85 671.198C600.35 671.198 599.85 671.098 599.55 670.898ZM589.65 666.098C588.95 665.798 588.95 665.198 589.65 664.898C590.35 664.598 591.45 664.598 592.15 664.898C592.85 665.198 592.85 665.798 592.15 666.098C591.75 666.298 591.35 666.398 590.85 666.398C590.45 666.398 589.95 666.298 589.65 666.098ZM579.65 661.298C578.95 660.998 578.95 660.398 579.65 660.098C580.35 659.798 581.45 659.798 582.15 660.098C582.85 660.398 582.85 660.998 582.15 661.298C581.85 661.498 581.35 661.598 580.95 661.598C580.45 661.598 580.05 661.498 579.65 661.298ZM569.75 656.498C569.05 656.198 569.05 655.598 569.75 655.298C570.45 654.898 571.55 654.898 572.25 655.298C572.95 655.598 572.95 656.198 572.25 656.498C571.85 656.698 571.45 656.698 570.95 656.698C570.55 656.698 570.05 656.698 569.75 656.498Z" fill="#FFC0A5"/>
                  <path d="M561.05 651.898C560.55 651.898 560.15 651.798 559.75 651.698C559.45 651.498 559.25 651.298 559.25 651.098C559.25 650.898 559.45 650.598 559.75 650.498C560.45 650.098 561.65 650.098 562.35 650.498C562.683 650.632 562.85 650.832 562.85 651.098C562.85 651.298 562.65 651.498 562.35 651.698C561.95 651.798 561.55 651.898 561.05 651.898Z" fill="#FFC0A5"/>
                  <path d="M569.75 646.899C569.05 646.499 569.05 645.999 569.75 645.699C570.45 645.299 571.55 645.299 572.25 645.699C572.95 645.999 572.95 646.499 572.25 646.899C571.95 646.999 571.45 647.099 570.95 647.099C570.55 647.099 570.05 646.999 569.75 646.899ZM579.65 642.099C578.95 641.699 578.95 641.199 579.65 640.899C580.35 640.499 581.45 640.499 582.15 640.899C582.85 641.199 582.85 641.699 582.15 642.099C581.85 642.199 581.35 642.299 580.95 642.299C580.45 642.299 580.05 642.199 579.65 642.099ZM589.65 637.299C588.95 636.899 588.95 636.399 589.65 635.999C590.35 635.699 591.45 635.699 592.15 635.999C592.85 636.399 592.85 636.899 592.15 637.299C591.75 637.399 591.35 637.499 590.85 637.499C590.45 637.499 589.95 637.399 589.65 637.299ZM599.55 632.399C598.85 632.099 598.85 631.599 599.55 631.199C600.25 630.899 601.35 630.899 602.05 631.199C602.75 631.599 602.75 632.099 602.05 632.399C601.75 632.599 601.25 632.699 600.85 632.699C600.35 632.699 599.85 632.599 599.55 632.399ZM609.45 627.599C608.75 627.299 608.75 626.799 609.45 626.399C610.15 626.099 611.35 626.099 611.95 626.399C612.65 626.799 612.65 627.299 611.95 627.599C611.65 627.799 611.15 627.899 610.75 627.899C610.25 627.899 609.85 627.799 609.45 627.599ZM619.45 622.799C618.75 622.499 618.75 621.899 619.45 621.599C620.15 621.299 621.25 621.299 621.95 621.599C622.65 621.899 622.65 622.499 621.95 622.799C621.55 622.999 621.15 623.099 620.65 623.099C620.25 623.099 619.75 622.999 619.45 622.799ZM629.35 617.999C628.65 617.699 628.65 617.099 629.35 616.799C630.05 616.499 631.15 616.499 631.85 616.799C632.55 617.099 632.55 617.699 631.85 617.999C631.55 618.199 631.05 618.299 630.65 618.299C630.15 618.299 629.75 618.199 629.35 617.999ZM639.35 613.199C638.65 612.899 638.65 612.299 639.35 611.999C639.95 611.699 641.15 611.699 641.85 611.999C642.55 612.299 642.55 612.899 641.85 613.199C641.45 613.399 641.05 613.499 640.55 613.499C640.15 613.499 639.65 613.399 639.35 613.199ZM649.25 608.399C648.55 608.099 648.55 607.499 649.25 607.199C649.95 606.799 651.05 606.799 651.75 607.199C652.45 607.499 652.45 608.099 651.75 608.399C651.45 608.599 650.95 608.699 650.55 608.699C650.05 608.699 649.55 608.599 649.25 608.399ZM659.15 603.599C658.45 603.299 658.45 602.699 659.15 602.399C659.85 601.999 661.05 601.999 661.65 602.399C662.35 602.699 662.35 603.299 661.65 603.599C661.35 603.799 660.85 603.899 660.45 603.899C659.95 603.899 659.55 603.799 659.15 603.599ZM669.15 598.799C668.45 598.399 668.45 597.899 669.15 597.599C669.85 597.199 670.95 597.199 671.65 597.599C672.35 597.899 672.35 598.399 671.65 598.799C671.25 598.999 670.85 598.999 670.35 598.999C669.95 598.999 669.45 598.999 669.15 598.799ZM679.05 593.999C678.35 593.599 678.35 593.099 679.05 592.799C679.75 592.399 680.85 592.399 681.55 592.799C682.25 593.099 682.25 593.599 681.55 593.999C681.25 594.099 680.75 594.199 680.35 594.199C679.85 594.199 679.45 594.099 679.05 593.999ZM688.95 589.199C688.25 588.799 688.25 588.299 688.95 587.999C689.65 587.599 690.85 587.599 691.55 587.999C692.25 588.299 692.25 588.799 691.55 589.199C691.15 589.299 690.75 589.399 690.25 589.399C689.85 589.399 689.35 589.299 688.95 589.199ZM698.95 584.399C698.25 583.999 698.25 583.499 698.95 583.099C699.65 582.799 700.75 582.799 701.45 583.099C702.15 583.499 702.15 583.999 701.45 584.399C701.15 584.499 700.65 584.599 700.15 584.599C699.75 584.599 699.25 584.499 698.95 584.399ZM708.85 579.599C708.15 579.199 708.15 578.699 708.85 578.299C709.55 577.999 710.75 577.999 711.35 578.299C712.05 578.699 712.05 579.199 711.35 579.599C711.05 579.699 710.55 579.799 710.15 579.799C709.65 579.799 709.25 579.699 708.85 579.599ZM718.85 574.699C718.15 574.399 718.15 573.899 718.85 573.499C719.55 573.199 720.65 573.199 721.35 573.499C722.05 573.899 722.05 574.399 721.35 574.699C720.95 574.899 720.55 574.999 720.05 574.999C719.65 574.999 719.15 574.899 718.85 574.699ZM728.75 569.899C728.05 569.599 728.05 569.099 728.75 568.699C729.45 568.399 730.55 568.399 731.25 568.699C731.95 569.099 731.95 569.599 731.25 569.899C730.95 570.099 730.45 570.199 730.05 570.199C729.55 570.199 729.05 570.099 728.75 569.899ZM738.65 565.099C737.95 564.799 737.95 564.199 738.65 563.899C739.35 563.599 740.55 563.599 741.25 563.899C741.95 564.199 741.95 564.799 741.25 565.099C740.85 565.299 740.35 565.399 739.95 565.399C739.45 565.399 739.05 565.299 738.65 565.099ZM748.65 560.299C747.95 559.999 747.95 559.399 748.65 559.099C749.35 558.799 750.45 558.799 751.15 559.099C751.85 559.399 751.85 559.999 751.15 560.299C750.75 560.499 750.35 560.599 749.85 560.599C749.45 560.599 748.95 560.499 748.65 560.299ZM758.55 555.499C757.85 555.199 757.85 554.599 758.55 554.299C759.25 553.899 760.35 553.899 761.05 554.299C761.75 554.599 761.75 555.199 761.05 555.499C760.75 555.699 760.25 555.799 759.85 555.799C759.35 555.799 758.95 555.699 758.55 555.499ZM768.45 550.699C767.85 550.399 767.85 549.799 768.45 549.499C769.15 549.099 770.35 549.099 771.05 549.499C771.75 549.799 771.75 550.399 771.05 550.699C770.65 550.899 770.25 550.899 769.75 550.899C769.25 550.899 768.85 550.899 768.45 550.699ZM778.45 545.899C777.75 545.499 777.75 544.999 778.45 544.699C779.15 544.299 780.25 544.299 780.95 544.699C781.65 544.999 781.65 545.499 780.95 545.899C780.65 546.099 780.15 546.099 779.65 546.099C779.25 546.099 778.75 546.099 778.45 545.899ZM788.35 541.099C787.65 540.699 787.65 540.199 788.35 539.899C789.05 539.499 790.15 539.499 790.85 539.899C791.55 540.199 791.55 540.699 790.85 541.099C790.55 541.199 790.05 541.299 789.65 541.299C789.15 541.299 788.75 541.199 788.35 541.099Z" fill="#FFC0A5"/>
                  <path d="M799.55 536.498C799.15 536.498 798.65 536.398 798.35 536.298C797.95 536.098 797.75 535.898 797.75 535.698C797.75 535.398 797.95 535.198 798.35 534.998C798.95 534.698 800.15 534.698 800.85 534.998C801.15 535.198 801.35 535.398 801.35 535.698C801.35 535.898 801.15 536.098 800.85 536.298C800.55 536.398 800.05 536.498 799.55 536.498Z" fill="#FFC0A5"/>
                  <path d="M1026.95 646.899C1026.25 646.499 1026.25 645.999 1026.95 645.699C1027.55 645.299 1028.75 645.299 1029.45 645.699C1030.15 645.999 1030.15 646.499 1029.45 646.899C1029.05 646.999 1028.65 647.099 1028.15 647.099C1027.75 647.099 1027.25 646.999 1026.95 646.899ZM1016.95 642.099C1016.25 641.699 1016.25 641.199 1016.95 640.899C1017.65 640.499 1018.75 640.499 1019.45 640.899C1020.15 641.199 1020.15 641.699 1019.45 642.099C1019.15 642.199 1018.65 642.299 1018.25 642.299C1017.75 642.299 1017.35 642.199 1016.95 642.099ZM1007.05 637.299C1006.35 636.899 1006.35 636.399 1007.05 635.999C1007.75 635.699 1008.85 635.699 1009.55 635.999C1010.25 636.399 1010.25 636.899 1009.55 637.299C1009.15 637.399 1008.75 637.499 1008.25 637.499C1007.85 637.499 1007.35 637.399 1007.05 637.299ZM997.05 632.399C996.35 632.099 996.35 631.599 997.05 631.199C997.75 630.899 998.95 630.899 999.55 631.199C1000.25 631.599 1000.25 632.099 999.55 632.399C999.25 632.599 998.75 632.699 998.35 632.699C997.85 632.699 997.45 632.599 997.05 632.399ZM987.15 627.599C986.45 627.299 986.45 626.799 987.15 626.399C987.85 626.099 988.95 626.099 989.65 626.399C990.35 626.799 990.35 627.299 989.65 627.599C989.35 627.799 988.85 627.899 988.45 627.899C987.95 627.899 987.45 627.799 987.15 627.599ZM977.25 622.799C976.55 622.499 976.55 621.899 977.25 621.599C977.85 621.299 979.05 621.299 979.75 621.599C980.45 621.899 980.45 622.499 979.75 622.799C979.35 622.999 978.95 623.099 978.45 623.099C978.05 623.099 977.55 622.999 977.25 622.799ZM967.25 617.999C966.55 617.699 966.55 617.099 967.25 616.799C967.95 616.499 969.05 616.499 969.75 616.799C970.45 617.099 970.45 617.699 969.75 617.999C969.45 618.199 968.95 618.299 968.55 618.299C968.05 618.299 967.65 618.199 967.25 617.999ZM957.35 613.199C956.65 612.899 956.65 612.299 957.35 611.999C958.05 611.699 959.15 611.699 959.85 611.999C960.55 612.299 960.55 612.899 959.85 613.199C959.45 613.399 959.05 613.499 958.55 613.499C958.15 613.499 957.65 613.399 957.35 613.199ZM947.35 608.399C946.65 608.099 946.65 607.499 947.35 607.199C948.05 606.799 949.25 606.799 949.95 607.199C950.65 607.499 950.65 608.099 949.95 608.399C949.55 608.599 949.05 608.699 948.65 608.699C948.15 608.699 947.75 608.599 947.35 608.399ZM937.45 603.599C936.75 603.299 936.75 602.699 937.45 602.399C938.15 601.999 939.25 601.999 939.95 602.399C940.65 602.699 940.65 603.299 939.95 603.599C939.65 603.799 939.15 603.899 938.75 603.899C938.25 603.899 937.75 603.799 937.45 603.599ZM927.55 598.799C926.85 598.399 926.85 597.899 927.55 597.599C928.25 597.199 929.35 597.199 930.05 597.599C930.75 597.899 930.75 598.399 930.05 598.799C929.65 598.999 929.25 598.999 928.75 598.999C928.35 598.999 927.85 598.999 927.55 598.799ZM917.55 593.999C916.85 593.599 916.85 593.099 917.55 592.799C918.25 592.399 919.45 592.399 920.15 592.799C920.75 593.099 920.75 593.599 920.15 593.999C919.75 594.099 919.25 594.199 918.85 594.199C918.35 594.199 917.95 594.099 917.55 593.999ZM907.65 589.199C906.95 588.799 906.95 588.299 907.65 587.999C908.35 587.599 909.45 587.599 910.15 587.999C910.85 588.299 910.85 588.799 910.15 589.199C909.85 589.299 909.35 589.399 908.95 589.399C908.45 589.399 907.95 589.299 907.65 589.199ZM897.65 584.399C896.95 583.999 896.95 583.499 897.65 583.099C898.45 582.799 899.55 582.799 900.25 583.099C900.95 583.499 900.95 583.999 900.25 584.399C899.85 584.499 899.45 584.599 898.95 584.599C898.55 584.599 898.05 584.499 897.65 584.399ZM887.75 579.599C887.05 579.199 887.05 578.699 887.75 578.299C888.45 577.999 889.55 577.999 890.25 578.299C890.95 578.699 890.95 579.199 890.25 579.599C889.95 579.699 889.45 579.799 889.05 579.799C888.55 579.799 888.15 579.699 887.75 579.599ZM877.85 574.699C877.15 574.399 877.15 573.899 877.85 573.499C878.55 573.199 879.65 573.199 880.35 573.499C881.05 573.899 881.05 574.399 880.35 574.699C879.95 574.899 879.55 574.999 879.05 574.999C878.65 574.999 878.15 574.899 877.85 574.699ZM867.85 569.899C867.15 569.599 867.15 569.099 867.85 568.699C868.55 568.399 869.75 568.399 870.45 568.699C871.05 569.099 871.05 569.599 870.45 569.899C870.05 570.099 869.65 570.199 869.15 570.199C868.65 570.199 868.25 570.099 867.85 569.899ZM857.95 565.099C857.25 564.799 857.25 564.199 857.95 563.899C858.65 563.599 859.75 563.599 860.45 563.899C861.15 564.199 861.15 564.799 860.45 565.099C860.15 565.299 859.65 565.399 859.25 565.399C858.75 565.399 858.25 565.299 857.95 565.099ZM848.05 560.299C847.35 559.999 847.35 559.399 848.05 559.099C848.75 558.799 849.85 558.799 850.55 559.099C851.25 559.399 851.25 559.999 850.55 560.299C850.15 560.499 849.75 560.599 849.25 560.599C848.85 560.599 848.35 560.499 848.05 560.299ZM838.05 555.499C837.35 555.199 837.35 554.599 838.05 554.299C838.75 553.999 839.85 553.999 840.55 554.299C841.25 554.599 841.25 555.199 840.55 555.499C840.25 555.699 839.75 555.799 839.35 555.799C838.85 555.799 838.45 555.699 838.05 555.499ZM828.15 550.699C827.45 550.399 827.45 549.799 828.15 549.499C828.85 549.099 829.95 549.099 830.65 549.499C831.35 549.799 831.35 550.399 830.65 550.699C830.25 550.899 829.85 550.899 829.35 550.899C828.95 550.899 828.45 550.899 828.15 550.699ZM818.15 545.899C817.55 545.499 817.55 544.999 818.15 544.699C818.85 544.299 820.05 544.299 820.75 544.699C821.35 544.999 821.35 545.499 820.75 545.899C820.35 546.099 819.95 546.099 819.45 546.099C818.95 546.099 818.55 546.099 818.15 545.899ZM808.25 541.099C807.55 540.699 807.55 540.199 808.25 539.899C808.95 539.499 810.05 539.499 810.75 539.899C811.45 540.199 811.45 540.699 810.75 541.099C810.45 541.199 809.95 541.299 809.55 541.299C809.05 541.299 808.65 541.199 808.25 541.099Z" fill="#FFC0A5"/>
                  <path d="M1038.05 651.898C1037.65 651.898 1037.15 651.798 1036.85 651.698C1036.55 651.498 1036.35 651.298 1036.35 651.098C1036.35 650.898 1036.55 650.598 1036.85 650.498C1037.55 650.098 1038.75 650.098 1039.35 650.498C1039.65 650.598 1039.85 650.898 1039.85 651.098C1039.85 651.298 1039.65 651.498 1039.35 651.698C1039.05 651.798 1038.55 651.898 1038.05 651.898Z" fill="#FFC0A5"/>
                  <path d="M808.25 762.298C807.55 761.998 807.55 761.398 808.25 761.098C808.95 760.698 810.05 760.698 810.75 761.098C811.45 761.398 811.45 761.998 810.75 762.298C810.45 762.498 809.95 762.598 809.55 762.598C809.05 762.598 808.65 762.498 808.25 762.298ZM818.15 757.498C817.55 757.198 817.55 756.598 818.15 756.298C818.85 755.898 820.05 755.898 820.75 756.298C821.35 756.598 821.35 757.198 820.75 757.498C820.35 757.698 819.95 757.698 819.45 757.698C818.95 757.698 818.55 757.698 818.15 757.498ZM828.15 752.698C827.45 752.298 827.45 751.798 828.15 751.498C828.85 751.098 829.95 751.098 830.65 751.498C831.35 751.798 831.35 752.298 830.65 752.698C830.25 752.798 829.85 752.898 829.35 752.898C828.95 752.898 828.45 752.798 828.15 752.698ZM838.05 747.898C837.35 747.498 837.35 746.998 838.05 746.698C838.75 746.298 839.85 746.298 840.55 746.698C841.25 746.998 841.25 747.498 840.55 747.898C840.25 747.998 839.75 748.098 839.35 748.098C838.85 748.098 838.45 747.998 838.05 747.898ZM848.05 743.098C847.35 742.698 847.35 742.198 848.05 741.798C848.75 741.498 849.85 741.498 850.55 741.798C851.25 742.198 851.25 742.698 850.55 743.098C850.15 743.198 849.75 743.298 849.25 743.298C848.85 743.298 848.35 743.198 848.05 743.098ZM857.95 738.298C857.25 737.898 857.25 737.398 857.95 736.998C858.65 736.698 859.75 736.698 860.45 736.998C861.15 737.398 861.15 737.898 860.45 738.298C860.15 738.398 859.65 738.498 859.25 738.498C858.75 738.498 858.25 738.398 857.95 738.298ZM867.85 733.398C867.25 733.098 867.25 732.598 867.85 732.198C868.55 731.898 869.75 731.898 870.45 732.198C871.05 732.598 871.05 733.098 870.45 733.398C870.05 733.598 869.65 733.698 869.15 733.698C868.65 733.698 868.25 733.598 867.85 733.398ZM877.85 728.598C877.15 728.298 877.15 727.798 877.85 727.398C878.55 727.098 879.65 727.098 880.35 727.398C881.05 727.798 881.05 728.298 880.35 728.598C879.95 728.798 879.55 728.898 879.05 728.898C878.65 728.898 878.15 728.798 877.85 728.598ZM887.75 723.798C887.05 723.498 887.05 722.898 887.75 722.598C888.45 722.298 889.55 722.298 890.25 722.598C890.95 722.898 890.95 723.498 890.25 723.798C889.95 723.998 889.45 724.098 889.05 724.098C888.55 724.098 888.15 723.998 887.75 723.798ZM897.65 718.998C896.95 718.698 896.95 718.098 897.65 717.798C898.35 717.498 899.55 717.498 900.25 717.798C900.95 718.098 900.95 718.698 900.25 718.998C899.85 719.198 899.45 719.298 898.95 719.298C898.55 719.298 898.05 719.198 897.65 718.998ZM907.65 714.198C906.95 713.898 906.95 713.298 907.65 712.998C908.35 712.598 909.45 712.598 910.15 712.998C910.85 713.298 910.85 713.898 910.15 714.198C909.85 714.398 909.35 714.498 908.85 714.498C908.45 714.498 907.95 714.398 907.65 714.198ZM917.55 709.398C916.85 709.098 916.85 708.498 917.55 708.198C918.25 707.798 919.45 707.798 920.15 708.198C920.75 708.498 920.75 709.098 920.15 709.398C919.75 709.598 919.35 709.598 918.85 709.598C918.35 709.598 917.95 709.598 917.55 709.398ZM927.55 704.598C926.85 704.198 926.85 703.698 927.55 703.398C928.25 702.998 929.35 702.998 930.05 703.398C930.75 703.698 930.75 704.198 930.05 704.598C929.65 704.798 929.25 704.798 928.75 704.798C928.35 704.798 927.85 704.798 927.55 704.598ZM937.45 699.798C936.75 699.398 936.75 698.898 937.45 698.598C938.15 698.198 939.25 698.198 939.95 698.598C940.65 698.898 940.65 699.398 939.95 699.798C939.65 699.898 939.15 699.998 938.75 699.998C938.25 699.998 937.75 699.898 937.45 699.798ZM947.35 694.998C946.65 694.598 946.65 694.098 947.35 693.698C948.05 693.398 949.25 693.398 949.95 693.698C950.65 694.098 950.65 694.598 949.95 694.998C949.55 695.098 949.15 695.198 948.65 695.198C948.15 695.198 947.75 695.098 947.35 694.998ZM957.35 690.198C956.65 689.798 956.65 689.298 957.35 688.898C958.05 688.598 959.15 688.598 959.85 688.898C960.55 689.298 960.55 689.798 959.85 690.198C959.45 690.298 959.05 690.398 958.55 690.398C958.15 690.398 957.65 690.298 957.35 690.198ZM967.25 685.298C966.55 684.998 966.55 684.498 967.25 684.098C967.95 683.798 969.05 683.798 969.75 684.098C970.45 684.498 970.45 684.998 969.75 685.298C969.45 685.498 968.95 685.598 968.55 685.598C968.05 685.598 967.65 685.498 967.25 685.298ZM977.25 680.498C976.55 680.198 976.55 679.698 977.25 679.298C977.85 678.998 979.05 678.998 979.75 679.298C980.45 679.698 980.45 680.198 979.75 680.498C979.35 680.698 978.95 680.798 978.45 680.798C978.05 680.798 977.55 680.698 977.25 680.498ZM987.15 675.698C986.45 675.398 986.45 674.798 987.15 674.498C987.85 674.198 988.95 674.198 989.65 674.498C990.35 674.798 990.35 675.398 989.65 675.698C989.35 675.898 988.85 675.998 988.45 675.998C987.95 675.998 987.45 675.898 987.15 675.698ZM997.05 670.898C996.35 670.598 996.35 669.998 997.05 669.698C997.75 669.398 998.95 669.398 999.55 669.698C1000.25 669.998 1000.25 670.598 999.55 670.898C999.25 671.098 998.75 671.198 998.35 671.198C997.85 671.198 997.45 671.098 997.05 670.898ZM1007.05 666.098C1006.35 665.798 1006.35 665.198 1007.05 664.898C1007.75 664.598 1008.85 664.598 1009.55 664.898C1010.25 665.198 1010.25 665.798 1009.55 666.098C1009.15 666.298 1008.75 666.398 1008.25 666.398C1007.85 666.398 1007.35 666.298 1007.05 666.098ZM1016.95 661.298C1016.25 660.998 1016.25 660.398 1016.95 660.098C1017.65 659.798 1018.75 659.798 1019.45 660.098C1020.15 660.398 1020.15 660.998 1019.45 661.298C1019.15 661.498 1018.65 661.598 1018.25 661.598C1017.75 661.598 1017.35 661.498 1016.95 661.298ZM1026.95 656.498C1026.25 656.198 1026.25 655.598 1026.95 655.298C1027.55 654.898 1028.75 654.898 1029.45 655.298C1030.15 655.598 1030.15 656.198 1029.45 656.498C1029.05 656.698 1028.65 656.698 1028.15 656.698C1027.75 656.698 1027.25 656.698 1026.95 656.498Z" fill="#FFC0A5"/>
                  <g opacity="0.4" filter="url(#filter2_f_1322_3092)">
                  <path d="M627.024 639.125L788.911 563.9C791.511 562.692 794.505 562.658 797.132 563.807L970.051 639.431C977.624 642.743 978.138 653.291 970.922 657.323L806.309 749.313C803.315 750.986 799.673 751.008 796.659 749.372L626.467 656.982C619.245 653.062 619.572 642.588 627.024 639.125Z" fill="url(#paint113_linear_1322_3092)"/>
                  </g>
                  <path style="mix-blend-mode:screen" d="M1033.75 660.998C1035.65 664.998 987.35 692.598 925.85 722.598C864.25 752.598 812.85 773.598 810.85 769.598C808.95 765.598 857.25 738.098 918.75 708.098C980.25 678.098 1031.75 656.998 1033.75 660.998Z" fill="url(#paint114_radial_1322_3092)"/>
                  <g opacity="0.4" filter="url(#filter3_f_1322_3092)">
                  <path d="M660.671 630.918L788.294 571.885C790.886 570.686 793.866 570.652 796.484 571.792L933.003 631.226C940.597 634.532 941.111 645.107 933.873 649.133L804.081 721.335C801.096 722.995 797.47 723.017 794.465 721.393L660.115 648.792C652.871 644.877 653.197 634.375 660.671 630.918Z" fill="url(#paint115_linear_1322_3092)"/>
                  </g>
                  <path d="M795.596 714.259L657.03 647.081C655.057 646.29 655.057 644.71 657.03 643.722L795.596 576.741C797.372 575.753 800.53 575.753 802.504 576.741L941.07 643.722C943.044 644.71 943.044 646.29 941.07 647.081L802.504 714.259C800.53 715.247 797.372 715.247 795.596 714.259Z" fill="#B83E0A"/>
                  <circle cx="372.55" cy="508" r="40" fill="url(#paint116_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M372.738 509.113C378.355 509.113 382.926 504.546 382.926 498.936C382.926 493.325 378.355 488.759 372.738 488.759C367.121 488.759 362.55 493.325 362.55 498.936C362.55 504.546 367.121 509.113 372.738 509.113Z" fill="white"/>
                  <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M372.832 513.376C366.273 513.376 357.55 514.093 357.55 520.288C357.55 527.24 369.052 527.24 372.832 527.24C379.39 527.24 388.111 526.523 388.111 520.329C388.111 513.376 376.612 513.376 372.832 513.376Z" fill="white"/>
                  <rect x="346.542" y="556" width="52.0167" height="29.6067" rx="14.8033" fill="#FF4D02"/>
                  <path d="M364.301 574.804V571.435L361.272 565.663H362.839L364.993 570.077L367.135 565.663H368.689L365.685 571.435V574.804H364.301ZM371.662 574.96C371.043 574.96 370.486 574.821 369.99 574.543C369.503 574.255 369.115 573.859 368.828 573.354C368.541 572.841 368.397 572.244 368.397 571.565C368.397 570.886 368.541 570.295 368.828 569.79C369.124 569.276 369.52 568.88 370.016 568.601C370.512 568.314 371.065 568.17 371.675 568.17C372.293 568.17 372.845 568.314 373.333 568.601C373.829 568.88 374.221 569.276 374.508 569.79C374.804 570.295 374.952 570.886 374.952 571.565C374.952 572.244 374.804 572.841 374.508 573.354C374.221 573.859 373.829 574.255 373.333 574.543C372.837 574.821 372.28 574.96 371.662 574.96ZM371.662 573.772C371.992 573.772 372.297 573.689 372.576 573.524C372.863 573.359 373.093 573.115 373.268 572.793C373.442 572.462 373.529 572.053 373.529 571.565C373.529 571.078 373.442 570.673 373.268 570.351C373.102 570.02 372.876 569.772 372.589 569.607C372.31 569.441 372.005 569.359 371.675 569.359C371.344 569.359 371.035 569.441 370.747 569.607C370.469 569.772 370.243 570.02 370.068 570.351C369.894 570.673 369.807 571.078 369.807 571.565C369.807 572.053 369.894 572.462 370.068 572.793C370.243 573.115 370.469 573.359 370.747 573.524C371.026 573.689 371.331 573.772 371.662 573.772ZM378.838 574.96C378.055 574.96 377.437 574.717 376.984 574.229C376.54 573.742 376.318 573.015 376.318 572.049V568.327H377.702V571.905C377.702 573.158 378.216 573.785 379.243 573.785C379.757 573.785 380.179 573.602 380.51 573.237C380.84 572.871 381.006 572.349 381.006 571.67V568.327H382.39V574.804H381.163L381.058 573.668C380.858 574.068 380.562 574.386 380.17 574.621C379.787 574.847 379.343 574.96 378.838 574.96Z" fill="white"/>
                  <circle cx="1201.65" cy="529" r="40" fill="url(#paint117_linear_1322_3092)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1201.84 530.113C1207.46 530.113 1212.03 525.546 1212.03 519.936C1212.03 514.325 1207.46 509.759 1201.84 509.759C1196.22 509.759 1191.65 514.325 1191.65 519.936C1191.65 525.546 1196.22 530.113 1201.84 530.113Z" fill="white"/>
                  <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M1201.93 534.376C1195.37 534.376 1186.65 535.093 1186.65 541.288C1186.65 548.24 1198.15 548.24 1201.93 548.24C1208.49 548.24 1217.21 547.523 1217.21 541.329C1217.21 534.376 1205.71 534.376 1201.93 534.376Z" fill="white"/>
                  <rect x="1134.55" y="577" width="134.202" height="29.0273" rx="14.5137" fill="#FF4D02"/>
                  <path d="M1152.22 595.514V587.496H1149.52V586.373H1156.29V587.496H1153.6V595.514H1152.22ZM1159.39 595.67C1158.77 595.67 1158.22 595.531 1157.72 595.253C1157.23 594.965 1156.85 594.569 1156.56 594.064C1156.27 593.551 1156.13 592.954 1156.13 592.275C1156.13 591.596 1156.27 591.004 1156.56 590.5C1156.86 589.986 1157.25 589.59 1157.75 589.311C1158.24 589.024 1158.8 588.88 1159.41 588.88C1160.02 588.88 1160.58 589.024 1161.06 589.311C1161.56 589.59 1161.95 589.986 1162.24 590.5C1162.54 591.004 1162.68 591.596 1162.68 592.275C1162.68 592.954 1162.54 593.551 1162.24 594.064C1161.95 594.569 1161.56 594.965 1161.06 595.253C1160.57 595.531 1160.01 595.67 1159.39 595.67ZM1159.39 594.482C1159.72 594.482 1160.03 594.399 1160.31 594.234C1160.59 594.069 1160.82 593.825 1161 593.503C1161.17 593.172 1161.26 592.763 1161.26 592.275C1161.26 591.788 1161.17 591.383 1161 591.061C1160.83 590.73 1160.61 590.482 1160.32 590.317C1160.04 590.151 1159.74 590.069 1159.41 590.069C1159.08 590.069 1158.77 590.151 1158.48 590.317C1158.2 590.482 1157.97 590.73 1157.8 591.061C1157.63 591.383 1157.54 591.788 1157.54 592.275C1157.54 592.763 1157.63 593.172 1157.8 593.503C1157.97 593.825 1158.2 594.069 1158.48 594.234C1158.76 594.399 1159.06 594.482 1159.39 594.482ZM1164.18 598.386V589.037H1165.42L1165.56 590.043C1165.77 589.738 1166.06 589.468 1166.43 589.233C1166.79 588.998 1167.26 588.88 1167.84 588.88C1168.46 588.88 1169.02 589.028 1169.49 589.324C1169.97 589.62 1170.35 590.025 1170.62 590.539C1170.9 591.052 1171.04 591.636 1171.04 592.288C1171.04 592.941 1170.9 593.525 1170.62 594.038C1170.35 594.543 1169.97 594.943 1169.49 595.239C1169.02 595.527 1168.46 595.67 1167.82 595.67C1167.32 595.67 1166.87 595.57 1166.48 595.37C1166.1 595.17 1165.79 594.887 1165.56 594.521V598.386H1164.18ZM1167.59 594.469C1168.18 594.469 1168.67 594.269 1169.05 593.868C1169.43 593.459 1169.63 592.928 1169.63 592.275C1169.63 591.849 1169.54 591.47 1169.36 591.139C1169.19 590.809 1168.95 590.552 1168.65 590.369C1168.34 590.178 1167.99 590.082 1167.59 590.082C1167 590.082 1166.51 590.286 1166.13 590.695C1165.75 591.105 1165.56 591.631 1165.56 592.275C1165.56 592.928 1165.75 593.459 1166.13 593.868C1166.51 594.269 1167 594.469 1167.59 594.469ZM1176.81 595.514V587.94L1175.34 588.28V587.261L1177.36 586.373H1178.25V595.514H1176.81ZM1181.87 590.735C1181.46 590.735 1181.09 590.643 1180.76 590.46C1180.44 590.278 1180.18 590.021 1179.99 589.69C1179.8 589.351 1179.7 588.946 1179.7 588.476C1179.7 588.014 1179.8 587.618 1179.99 587.287C1180.18 586.948 1180.44 586.687 1180.77 586.504C1181.1 586.321 1181.47 586.23 1181.88 586.23C1182.28 586.23 1182.65 586.321 1182.97 586.504C1183.3 586.687 1183.56 586.948 1183.75 587.287C1183.94 587.618 1184.04 588.014 1184.04 588.476C1184.04 588.946 1183.94 589.351 1183.75 589.69C1183.56 590.021 1183.3 590.278 1182.97 590.46C1182.65 590.643 1182.28 590.735 1181.87 590.735ZM1181.22 595.514L1186.45 586.373H1187.81L1182.59 595.514H1181.22ZM1181.87 589.742C1182.15 589.742 1182.39 589.638 1182.59 589.429C1182.8 589.211 1182.9 588.894 1182.9 588.476C1182.9 588.058 1182.8 587.744 1182.6 587.536C1182.4 587.318 1182.16 587.209 1181.87 587.209C1181.59 587.209 1181.35 587.318 1181.14 587.536C1180.93 587.744 1180.83 588.058 1180.83 588.476C1180.83 588.894 1180.93 589.211 1181.13 589.429C1181.34 589.638 1181.58 589.742 1181.87 589.742ZM1187.24 595.67C1186.83 595.67 1186.46 595.579 1186.13 595.396C1185.81 595.213 1185.55 594.957 1185.36 594.626C1185.17 594.286 1185.07 593.881 1185.07 593.411C1185.07 592.95 1185.17 592.55 1185.36 592.21C1185.55 591.871 1185.81 591.609 1186.14 591.427C1186.47 591.244 1186.84 591.152 1187.25 591.152C1187.65 591.152 1188.01 591.244 1188.33 591.427C1188.66 591.609 1188.93 591.871 1189.12 592.21C1189.31 592.55 1189.4 592.95 1189.4 593.411C1189.4 593.881 1189.31 594.286 1189.12 594.626C1188.93 594.957 1188.66 595.213 1188.33 595.396C1188.01 595.579 1187.65 595.67 1187.24 595.67ZM1187.24 594.665C1187.52 594.665 1187.76 594.56 1187.96 594.352C1188.16 594.143 1188.27 593.829 1188.27 593.411C1188.27 592.994 1188.17 592.68 1187.97 592.471C1187.77 592.254 1187.52 592.145 1187.24 592.145C1186.96 592.145 1186.72 592.254 1186.51 592.471C1186.3 592.68 1186.19 592.994 1186.19 593.411C1186.19 593.829 1186.29 594.143 1186.49 594.352C1186.7 594.56 1186.95 594.665 1187.24 594.665ZM1197.12 595.67C1196.49 595.67 1195.92 595.531 1195.43 595.253C1194.94 594.965 1194.56 594.569 1194.28 594.064C1194 593.559 1193.86 592.972 1193.86 592.302C1193.86 591.623 1193.99 591.026 1194.26 590.513C1194.54 589.999 1194.93 589.599 1195.41 589.311C1195.91 589.024 1196.48 588.88 1197.14 588.88C1197.77 588.88 1198.33 589.024 1198.8 589.311C1199.27 589.59 1199.63 589.964 1199.89 590.434C1200.15 590.904 1200.28 591.422 1200.28 591.988C1200.28 592.075 1200.28 592.171 1200.27 592.275C1200.27 592.371 1200.27 592.48 1200.26 592.602H1195.22C1195.26 593.229 1195.47 593.707 1195.83 594.038C1196.21 594.36 1196.64 594.521 1197.12 594.521C1197.52 594.521 1197.84 594.434 1198.1 594.26C1198.37 594.077 1198.57 593.834 1198.7 593.529H1200.09C1199.91 594.138 1199.57 594.648 1199.04 595.057C1198.53 595.466 1197.89 595.67 1197.12 595.67ZM1197.12 590.016C1196.66 590.016 1196.25 590.156 1195.9 590.434C1195.54 590.704 1195.32 591.113 1195.24 591.662H1198.9C1198.87 591.157 1198.7 590.756 1198.36 590.46C1198.03 590.164 1197.62 590.016 1197.12 590.016ZM1201.72 595.514V589.037H1202.95L1203.05 590.173C1203.25 589.773 1203.54 589.459 1203.93 589.233C1204.32 588.998 1204.77 588.88 1205.27 588.88C1206.06 588.88 1206.67 589.124 1207.11 589.612C1207.57 590.099 1207.79 590.826 1207.79 591.792V595.514H1206.42V591.936C1206.42 590.682 1205.91 590.056 1204.88 590.056C1204.37 590.056 1203.94 590.238 1203.6 590.604C1203.27 590.97 1203.1 591.492 1203.1 592.171V595.514H1201.72ZM1212.07 593.529C1211.73 593.529 1211.42 593.49 1211.13 593.411L1210.57 593.96C1210.67 594.021 1210.78 594.073 1210.92 594.117C1211.06 594.16 1211.26 594.199 1211.51 594.234C1211.76 594.269 1212.11 594.304 1212.54 594.338C1213.4 594.417 1214.03 594.626 1214.41 594.965C1214.79 595.296 1214.98 595.74 1214.98 596.297C1214.98 596.68 1214.88 597.041 1214.67 597.381C1214.47 597.729 1214.15 598.008 1213.72 598.217C1213.29 598.434 1212.74 598.543 1212.07 598.543C1211.17 598.543 1210.43 598.369 1209.87 598.021C1209.31 597.681 1209.03 597.163 1209.03 596.467C1209.03 596.197 1209.1 595.927 1209.24 595.657C1209.39 595.396 1209.62 595.148 1209.93 594.913C1209.75 594.835 1209.59 594.752 1209.45 594.665C1209.32 594.569 1209.2 594.473 1209.1 594.378V594.064L1210.22 592.915C1209.71 592.48 1209.46 591.91 1209.46 591.205C1209.46 590.778 1209.56 590.391 1209.76 590.043C1209.97 589.686 1210.27 589.403 1210.66 589.194C1211.05 588.985 1211.52 588.88 1212.07 588.88C1212.44 588.88 1212.78 588.933 1213.09 589.037H1215.51V589.951L1214.36 590.016C1214.57 590.373 1214.67 590.769 1214.67 591.205C1214.67 591.64 1214.57 592.032 1214.36 592.38C1214.16 592.728 1213.86 593.007 1213.47 593.216C1213.09 593.424 1212.62 593.529 1212.07 593.529ZM1212.07 592.445C1212.47 592.445 1212.8 592.341 1213.04 592.132C1213.29 591.914 1213.42 591.609 1213.42 591.218C1213.42 590.817 1213.29 590.513 1213.04 590.304C1212.8 590.095 1212.47 589.99 1212.07 589.99C1211.66 589.99 1211.33 590.095 1211.08 590.304C1210.84 590.513 1210.72 590.817 1210.72 591.218C1210.72 591.609 1210.84 591.914 1211.08 592.132C1211.33 592.341 1211.66 592.445 1212.07 592.445ZM1210.34 596.336C1210.34 596.711 1210.5 596.989 1210.83 597.172C1211.16 597.363 1211.58 597.459 1212.07 597.459C1212.55 597.459 1212.94 597.355 1213.24 597.146C1213.53 596.946 1213.68 596.676 1213.68 596.336C1213.68 596.084 1213.58 595.866 1213.38 595.683C1213.18 595.509 1212.8 595.401 1212.24 595.357C1211.82 595.331 1211.45 595.292 1211.13 595.239C1210.83 595.405 1210.62 595.583 1210.51 595.775C1210.39 595.966 1210.34 596.153 1210.34 596.336ZM1217.53 587.81C1217.26 587.81 1217.05 587.731 1216.87 587.575C1216.71 587.409 1216.62 587.205 1216.62 586.961C1216.62 586.717 1216.71 586.517 1216.87 586.36C1217.05 586.195 1217.26 586.112 1217.53 586.112C1217.79 586.112 1218 586.195 1218.16 586.36C1218.34 586.517 1218.43 586.717 1218.43 586.961C1218.43 587.205 1218.34 587.409 1218.16 587.575C1218 587.731 1217.79 587.81 1217.53 587.81ZM1216.83 595.514V589.037H1218.22V595.514H1216.83ZM1220.04 595.514V589.037H1221.27L1221.38 590.173C1221.58 589.773 1221.87 589.459 1222.25 589.233C1222.64 588.998 1223.09 588.88 1223.6 588.88C1224.38 588.88 1224.99 589.124 1225.44 589.612C1225.89 590.099 1226.12 590.826 1226.12 591.792V595.514H1224.74V591.936C1224.74 590.682 1224.23 590.056 1223.2 590.056C1222.69 590.056 1222.26 590.238 1221.92 590.604C1221.59 590.97 1221.43 591.492 1221.43 592.171V595.514H1220.04ZM1230.78 595.67C1230.14 595.67 1229.57 595.531 1229.08 595.253C1228.59 594.965 1228.21 594.569 1227.93 594.064C1227.65 593.559 1227.51 592.972 1227.51 592.302C1227.51 591.623 1227.65 591.026 1227.92 590.513C1228.19 589.999 1228.58 589.599 1229.06 589.311C1229.56 589.024 1230.14 588.88 1230.79 588.88C1231.42 588.88 1231.98 589.024 1232.45 589.311C1232.92 589.59 1233.28 589.964 1233.54 590.434C1233.8 590.904 1233.94 591.422 1233.94 591.988C1233.94 592.075 1233.93 592.171 1233.92 592.275C1233.92 592.371 1233.92 592.48 1233.91 592.602H1228.87C1228.91 593.229 1229.12 593.707 1229.48 594.038C1229.86 594.36 1230.29 594.521 1230.78 594.521C1231.17 594.521 1231.49 594.434 1231.75 594.26C1232.02 594.077 1232.22 593.834 1232.36 593.529H1233.74C1233.57 594.138 1233.22 594.648 1232.69 595.057C1232.18 595.466 1231.54 595.67 1230.78 595.67ZM1230.78 590.016C1230.31 590.016 1229.91 590.156 1229.55 590.434C1229.19 590.704 1228.97 591.113 1228.9 591.662H1232.55C1232.53 591.157 1232.35 590.756 1232.02 590.46C1231.69 590.164 1231.27 590.016 1230.78 590.016ZM1238.4 595.67C1237.77 595.67 1237.2 595.531 1236.7 595.253C1236.22 594.965 1235.83 594.569 1235.55 594.064C1235.28 593.559 1235.14 592.972 1235.14 592.302C1235.14 591.623 1235.27 591.026 1235.54 590.513C1235.82 589.999 1236.2 589.599 1236.69 589.311C1237.19 589.024 1237.76 588.88 1238.41 588.88C1239.05 588.88 1239.6 589.024 1240.07 589.311C1240.54 589.59 1240.91 589.964 1241.17 590.434C1241.43 590.904 1241.56 591.422 1241.56 591.988C1241.56 592.075 1241.56 592.171 1241.55 592.275C1241.55 592.371 1241.54 592.48 1241.53 592.602H1236.49C1236.54 593.229 1236.74 593.707 1237.11 594.038C1237.48 594.36 1237.91 594.521 1238.4 594.521C1238.79 594.521 1239.12 594.434 1239.38 594.26C1239.65 594.077 1239.85 593.834 1239.98 593.529H1241.36C1241.19 594.138 1240.84 594.648 1240.32 595.057C1239.81 595.466 1239.17 595.67 1238.4 595.67ZM1238.4 590.016C1237.94 590.016 1237.53 590.156 1237.17 590.434C1236.82 590.704 1236.6 591.113 1236.52 591.662H1240.18C1240.15 591.157 1239.97 590.756 1239.64 590.46C1239.31 590.164 1238.9 590.016 1238.4 590.016ZM1243 595.514V589.037H1244.24L1244.35 590.265C1244.58 589.838 1244.89 589.503 1245.3 589.259C1245.7 589.007 1246.2 588.88 1246.77 588.88V590.33H1246.39C1246.01 590.33 1245.67 590.395 1245.36 590.526C1245.06 590.648 1244.82 590.861 1244.64 591.166C1244.47 591.461 1244.38 591.875 1244.38 592.406V595.514H1243ZM1250.54 595.67C1249.72 595.67 1249.05 595.47 1248.52 595.07C1247.99 594.669 1247.68 594.138 1247.6 593.477H1249C1249.07 593.773 1249.24 594.029 1249.5 594.247C1249.76 594.456 1250.1 594.56 1250.53 594.56C1250.95 594.56 1251.25 594.473 1251.44 594.299C1251.64 594.125 1251.73 593.925 1251.73 593.699C1251.73 593.368 1251.6 593.146 1251.33 593.033C1251.06 592.911 1250.7 592.802 1250.23 592.706C1249.86 592.628 1249.5 592.524 1249.13 592.393C1248.78 592.262 1248.48 592.08 1248.23 591.845C1248 591.601 1247.88 591.274 1247.88 590.865C1247.88 590.299 1248.1 589.829 1248.53 589.455C1248.97 589.072 1249.58 588.88 1250.36 588.88C1251.08 588.88 1251.67 589.055 1252.11 589.403C1252.56 589.751 1252.83 590.243 1252.91 590.878H1251.57C1251.53 590.6 1251.4 590.382 1251.18 590.225C1250.97 590.069 1250.69 589.99 1250.33 589.99C1249.99 589.99 1249.72 590.064 1249.52 590.212C1249.33 590.352 1249.24 590.534 1249.24 590.761C1249.24 590.987 1249.37 591.166 1249.63 591.296C1249.9 591.427 1250.25 591.544 1250.69 591.649C1251.12 591.744 1251.52 591.858 1251.89 591.988C1252.26 592.11 1252.56 592.293 1252.79 592.537C1253.01 592.78 1253.13 593.137 1253.13 593.607C1253.14 594.199 1252.91 594.691 1252.44 595.083C1251.97 595.474 1251.34 595.67 1250.54 595.67Z" fill="white"/>
                  <mask id="mask1_1322_3092" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="756" y="625" width="37" height="36">
                  <rect x="756.55" y="625" width="36" height="36" fill="url(#pattern110_1322_3092)"/>
                  </mask>
                  <g mask="url(#mask1_1322_3092)">
                  <rect x="756.55" y="625" width="36" height="36" fill="white"/>
                  </g>
                  <mask id="mask2_1322_3092" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="796" y="625" width="56" height="36">
                  <rect x="796.15" y="625" width="55.8" height="36" fill="url(#pattern111_1322_3092)"/>
                  </mask>
                  <g mask="url(#mask2_1322_3092)">
                  <rect x="796.15" y="625" width="55.8" height="36" fill="white"/>
                  </g>
                  <defs>
                  <filter id="filter0_f_1322_3092" x="62.9602" y="0" width="1599" height="1456" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="235" result="effect1_foregroundBlur_1322_3092"/>
                  </filter>
                  <pattern id="pattern0_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image0_1322_3092" transform="scale(0.0588235 0.0666667)"/>
                  </pattern>
                  <pattern id="pattern1_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image1_1322_3092" transform="scale(0.0588235 0.0714286)"/>
                  </pattern>
                  <pattern id="pattern2_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image2_1322_3092" transform="scale(0.04 0.0526316)"/>
                  </pattern>
                  <pattern id="pattern3_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image3_1322_3092" transform="scale(0.04 0.0526316)"/>
                  </pattern>
                  <pattern id="pattern4_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image4_1322_3092" transform="scale(0.04 0.0526316)"/>
                  </pattern>
                  <pattern id="pattern5_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image5_1322_3092" transform="scale(0.04 0.05)"/>
                  </pattern>
                  <pattern id="pattern6_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image6_1322_3092" transform="scale(0.0588235 0.0666667)"/>
                  </pattern>
                  <pattern id="pattern7_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image7_1322_3092" transform="scale(0.0625 0.0666667)"/>
                  </pattern>
                  <pattern id="pattern8_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image8_1322_3092" transform="scale(0.0625 0.0714286)"/>
                  </pattern>
                  <pattern id="pattern9_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image9_1322_3092" transform="scale(0.0588235 0.0714286)"/>
                  </pattern>
                  <pattern id="pattern10_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image9_1322_3092" transform="scale(0.0588235 0.0714286)"/>
                  </pattern>
                  <pattern id="pattern11_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image10_1322_3092" transform="scale(0.0588235 0.0714286)"/>
                  </pattern>
                  <pattern id="pattern12_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image11_1322_3092" transform="scale(0.0588235 0.0714286)"/>
                  </pattern>
                  <pattern id="pattern13_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image12_1322_3092" transform="scale(0.0588235 0.0714286)"/>
                  </pattern>
                  <pattern id="pattern14_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image13_1322_3092" transform="scale(0.0588235 0.0714286)"/>
                  </pattern>
                  <pattern id="pattern15_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image10_1322_3092" transform="scale(0.0588235 0.0714286)"/>
                  </pattern>
                  <pattern id="pattern16_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image14_1322_3092" transform="scale(0.166667 0.25)"/>
                  </pattern>
                  <pattern id="pattern17_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image15_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern18_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image16_1322_3092" transform="scale(0.166667 0.25)"/>
                  </pattern>
                  <pattern id="pattern19_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image17_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern20_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image18_1322_3092" transform="scale(0.2)"/>
                  </pattern>
                  <pattern id="pattern21_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image17_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern22_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image17_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern23_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image19_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern24_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image20_1322_3092" transform="scale(0.166667 0.25)"/>
                  </pattern>
                  <pattern id="pattern25_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image19_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern26_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image21_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern27_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image21_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern28_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image22_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern29_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image22_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern30_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image23_1322_3092" transform="scale(0.166667 0.25)"/>
                  </pattern>
                  <pattern id="pattern31_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image24_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern32_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image14_1322_3092" transform="scale(0.166667 0.25)"/>
                  </pattern>
                  <pattern id="pattern33_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image21_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern34_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image22_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern35_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image21_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern36_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image25_1322_3092" transform="scale(0.0714286 0.1)"/>
                  </pattern>
                  <pattern id="pattern37_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image26_1322_3092" transform="scale(0.0769231 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern38_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image27_1322_3092" transform="scale(0.0714286 0.1)"/>
                  </pattern>
                  <pattern id="pattern39_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image28_1322_3092" transform="scale(0.0714286 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern40_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image29_1322_3092" transform="scale(0.0769231 0.1)"/>
                  </pattern>
                  <pattern id="pattern41_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image30_1322_3092" transform="scale(0.2)"/>
                  </pattern>
                  <pattern id="pattern42_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image31_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern43_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image30_1322_3092" transform="scale(0.2)"/>
                  </pattern>
                  <pattern id="pattern44_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image19_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern45_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image32_1322_3092" transform="scale(0.166667 0.2)"/>
                  </pattern>
                  <pattern id="pattern46_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image33_1322_3092" transform="scale(0.0769231 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern47_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image34_1322_3092" transform="scale(0.0769231 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern48_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image28_1322_3092" transform="scale(0.0714286 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern49_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image35_1322_3092" transform="scale(0.0769231 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern50_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image28_1322_3092" transform="scale(0.0714286 0.0909091)"/>
                  </pattern>
                  <filter id="filter1_f_1322_3092" x="535.226" y="554.971" width="516.331" height="289.611" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="10.5" result="effect1_foregroundBlur_1322_3092"/>
                  </filter>
                  <pattern id="pattern51_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image36_1322_3092" transform="scale(0.111111 0.125)"/>
                  </pattern>
                  <pattern id="pattern52_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image37_1322_3092" transform="scale(0.1 0.125)"/>
                  </pattern>
                  <pattern id="pattern53_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image38_1322_3092" transform="scale(0.0769231 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern54_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image39_1322_3092" transform="scale(0.0714286 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern55_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image40_1322_3092" transform="scale(0.0769231 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern56_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image41_1322_3092" transform="scale(0.0714286 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern57_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image42_1322_3092" transform="scale(0.0526316 0.0833333)"/>
                  </pattern>
                  <pattern id="pattern58_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image43_1322_3092" transform="scale(0.0526316 0.0833333)"/>
                  </pattern>
                  <pattern id="pattern59_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image44_1322_3092" transform="scale(0.0526316 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern60_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image45_1322_3092" transform="scale(0.0526316 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern61_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image46_1322_3092" transform="scale(0.0526316 0.0833333)"/>
                  </pattern>
                  <pattern id="pattern62_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image47_1322_3092" transform="scale(0.0526316 0.0833333)"/>
                  </pattern>
                  <pattern id="pattern63_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image48_1322_3092" transform="scale(0.0555556 0.0909091)"/>
                  </pattern>
                  <pattern id="pattern64_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image49_1322_3092" transform="scale(0.0526316 0.0833333)"/>
                  </pattern>
                  <pattern id="pattern65_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image50_1322_3092" transform="scale(0.111111 0.125)"/>
                  </pattern>
                  <pattern id="pattern66_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image51_1322_3092" transform="scale(0.111111)"/>
                  </pattern>
                  <pattern id="pattern67_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image52_1322_3092" transform="scale(0.111111 0.125)"/>
                  </pattern>
                  <pattern id="pattern68_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image50_1322_3092" transform="scale(0.111111 0.125)"/>
                  </pattern>
                  <pattern id="pattern69_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image50_1322_3092" transform="scale(0.111111 0.125)"/>
                  </pattern>
                  <pattern id="pattern70_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image50_1322_3092" transform="scale(0.111111 0.125)"/>
                  </pattern>
                  <pattern id="pattern71_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image51_1322_3092" transform="scale(0.111111)"/>
                  </pattern>
                  <pattern id="pattern72_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image50_1322_3092" transform="scale(0.111111 0.125)"/>
                  </pattern>
                  <pattern id="pattern73_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image53_1322_3092" transform="scale(0.111111 0.125)"/>
                  </pattern>
                  <pattern id="pattern74_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image54_1322_3092" transform="scale(0.111111 0.125)"/>
                  </pattern>
                  <pattern id="pattern75_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image55_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern76_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image56_1322_3092" transform="scale(0.25)"/>
                  </pattern>
                  <pattern id="pattern77_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image57_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern78_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image58_1322_3092" transform="scale(0.25)"/>
                  </pattern>
                  <pattern id="pattern79_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image59_1322_3092" transform="scale(0.25)"/>
                  </pattern>
                  <pattern id="pattern80_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image60_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern81_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image59_1322_3092" transform="scale(0.25)"/>
                  </pattern>
                  <pattern id="pattern82_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image61_1322_3092" transform="scale(0.25)"/>
                  </pattern>
                  <pattern id="pattern83_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image60_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern84_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image62_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern85_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image63_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern86_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image64_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern87_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image63_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern88_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image65_1322_3092" transform="scale(0.333333 0.25)"/>
                  </pattern>
                  <pattern id="pattern89_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image66_1322_3092" transform="scale(0.333333)"/>
                  </pattern>
                  <pattern id="pattern90_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image67_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern91_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image68_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern92_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image69_1322_3092" transform="scale(0.25)"/>
                  </pattern>
                  <pattern id="pattern93_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image56_1322_3092" transform="scale(0.25)"/>
                  </pattern>
                  <pattern id="pattern94_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image67_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern95_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image70_1322_3092" transform="scale(0.142857 0.166667)"/>
                  </pattern>
                  <pattern id="pattern96_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image71_1322_3092" transform="scale(0.142857)"/>
                  </pattern>
                  <pattern id="pattern97_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image72_1322_3092" transform="scale(0.125 0.166667)"/>
                  </pattern>
                  <pattern id="pattern98_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image72_1322_3092" transform="scale(0.125 0.166667)"/>
                  </pattern>
                  <pattern id="pattern99_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image71_1322_3092" transform="scale(0.142857)"/>
                  </pattern>
                  <pattern id="pattern100_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image73_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern101_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image73_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern102_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image61_1322_3092" transform="scale(0.25)"/>
                  </pattern>
                  <pattern id="pattern103_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image74_1322_3092" transform="scale(0.25 0.333333)"/>
                  </pattern>
                  <pattern id="pattern104_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image61_1322_3092" transform="scale(0.25)"/>
                  </pattern>
                  <pattern id="pattern105_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image72_1322_3092" transform="scale(0.125 0.166667)"/>
                  </pattern>
                  <pattern id="pattern106_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image72_1322_3092" transform="scale(0.125 0.166667)"/>
                  </pattern>
                  <pattern id="pattern107_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image70_1322_3092" transform="scale(0.142857 0.166667)"/>
                  </pattern>
                  <pattern id="pattern108_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image72_1322_3092" transform="scale(0.125 0.166667)"/>
                  </pattern>
                  <pattern id="pattern109_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image75_1322_3092" transform="scale(0.125 0.142857)"/>
                  </pattern>
                  <filter id="filter2_f_1322_3092" x="607.238" y="548.969" width="382.806" height="215.615" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="7" result="effect1_foregroundBlur_1322_3092"/>
                  </filter>
                  <filter id="filter3_f_1322_3092" x="647.869" y="563.961" width="298.143" height="165.635" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="3.5" result="effect1_foregroundBlur_1322_3092"/>
                  </filter>
                  <pattern id="pattern110_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image76_1322_3092" transform="translate(0 -0.15) scale(0.0341463)"/>
                  </pattern>
                  <pattern id="pattern111_1322_3092" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image76_1322_3092" transform="matrix(0.0220299 0 0 0.0341463 -3.0181 -0.15)"/>
                  </pattern>
                  <linearGradient id="paint0_linear_1322_3092" x1="1190.88" y1="793.017" x2="1515.09" y2="793.017" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_1322_3092" x1="733.981" y1="906.317" x2="298.458" y2="1117.38" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint2_linear_1322_3092" x1="915.919" y1="741.918" x2="1254.59" y2="741.918" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint3_linear_1322_3092" x1="817.999" y1="560.657" x2="1034.65" y2="441.753" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint4_linear_1322_3092" x1="862.004" y1="764.377" x2="1487.46" y2="764.377" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint5_linear_1322_3092" x1="525.299" y1="766.821" x2="48.0322" y2="529.697" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint6_linear_1322_3092" x1="784.388" y1="885.344" x2="414.689" y2="1073.55" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint7_linear_1322_3092" x1="746.197" y1="990.772" x2="375.883" y2="1170.91" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint8_linear_1322_3092" x1="842.606" y1="915.899" x2="574.987" y2="1047.69" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint9_linear_1322_3092" x1="850.532" y1="606.196" x2="1042.7" y2="510.112" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint10_linear_1322_3092" x1="671.26" y1="776.939" x2="283.745" y2="586.195" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint11_linear_1322_3092" x1="816.229" y1="791.701" x2="1447.8" y2="791.701" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint12_linear_1322_3092" x1="1114.88" y1="637.996" x2="1266.15" y2="637.996" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint13_linear_1322_3092" x1="793.344" y1="567" x2="793.344" y2="434" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint14_linear_1322_3092" x1="375.438" y1="736.033" x2="190.709" y2="642.141" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint15_linear_1322_3092" x1="556.106" y1="777.861" x2="279.974" y2="923.555" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint16_linear_1322_3092" x1="841.433" y1="834.878" x2="1083.96" y2="965.233" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03" stop-opacity="0.878431"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint17_linear_1322_3092" x1="869.647" y1="927.25" x2="675.508" y2="1051.04" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <radialGradient id="paint18_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(853.752 861.156) rotate(25.8889) scale(16.2198)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint19_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(864.573 890.466) rotate(25.8904) scale(16.2189 16.2189)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint20_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(684.674 747.113) rotate(25.8919) scale(15.7211 15.7211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint21_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(629.616 773.836) rotate(25.8919) scale(15.7211 15.7211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint22_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(804.795 802.59) rotate(25.8919) scale(15.7211 15.7211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint23_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(723.261 768.06) rotate(25.8886) scale(15.7207 15.7207)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint24_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(751.356 781.696) rotate(25.8886) scale(15.7207 15.7206)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint25_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(853.888 778.763) rotate(25.8886) scale(15.7206 15.7206)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint26_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(619.208 647.066) rotate(25.8919) scale(15.7211 15.7211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint27_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(662.332 538.554) rotate(25.8918) scale(15.7211 15.7211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint28_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1061.11 707.969) rotate(25.8904) scale(16.2189 16.2188)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint29_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1057.17 789.42) rotate(25.8905) scale(16.2189 16.2189)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint30_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1141.85 768.291) rotate(25.8904) scale(16.2189 16.2189)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint31_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(963.802 725.642) rotate(25.8904) scale(16.2189 16.2189)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint32_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(891.214 683.134) rotate(25.8889) scale(16.2198)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint33_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(861.446 668.687) rotate(25.8904) scale(16.2189 16.2189)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint34_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(800.411 639.136) rotate(25.8904) scale(16.2189 16.2189)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint35_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(777.588 617.82) rotate(25.8904) scale(16.2189 16.2189)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint36_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(712.084 682.233) rotate(25.8904) scale(16.2189 16.2189)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint37_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(951.468 833.703) rotate(25.8905) scale(16.2189 16.2189)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint38_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1015.58 806.874) rotate(25.8898) scale(44.966 44.966)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint39_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1116.9 771.783) rotate(25.8898) scale(44.966 44.966)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint40_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(905.839 600.874) rotate(25.8903) scale(44.965 44.9651)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint41_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(583.694 818.468) rotate(25.8898) scale(44.966 44.966)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint42_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(899.076 905.19) rotate(25.8903) scale(44.9651 44.9651)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint43_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(592.771 837.625) rotate(25.8919) scale(15.7211 15.7211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint44_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(531.002 704.559) rotate(25.8919) scale(15.7211 15.7211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint45_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(418.755 689.924) rotate(25.8919) scale(15.7211 15.7211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint46_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(673.937 700.748) rotate(25.8918) scale(15.7211 15.7211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint47_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(789.934 810.17) rotate(25.8919) scale(15.7211 15.7211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint48_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(735.215 550.142) rotate(25.8898) scale(44.966 44.966)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint49_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(514.742 638.198) rotate(25.8903) scale(44.9651 44.9651)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint50_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(491.891 528.403) rotate(25.8898) scale(44.966 44.966)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint51_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(442.598 726.193) rotate(25.8898) scale(44.966 44.966)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint52_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(497.649 800.124) rotate(25.8898) scale(44.966 44.966)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <linearGradient id="paint53_linear_1322_3092" x1="356.919" y1="573.816" x2="736.758" y2="573.816" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint54_linear_1322_3092" x1="899.344" y1="722" x2="899.344" y2="589" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FF4E03" stop-opacity="0"/>
                  <stop offset="0.989" stop-color="#FF4E03"/>
                  </linearGradient>
                  <linearGradient id="paint55_linear_1322_3092" x1="793.829" y1="604.605" x2="793.5" y2="825" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FF4E03" stop-opacity="0"/>
                  <stop offset="0.4" stop-color="#FF7439"/>
                  <stop offset="1" stop-color="#FF4E03"/>
                  </linearGradient>
                  <linearGradient id="paint56_linear_1322_3092" x1="706.928" y1="373.932" x2="1088.35" y2="755.357" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FEAF8E"/>
                  <stop offset="1" stop-color="#FF4E03"/>
                  </linearGradient>
                  <linearGradient id="paint57_linear_1322_3092" x1="706.928" y1="369.932" x2="1088.35" y2="751.357" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF7E47"/>
                  </linearGradient>
                  <linearGradient id="paint58_linear_1322_3092" x1="547.139" y1="529.184" x2="1050.29" y2="529.184" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FF4E03"/>
                  <stop offset="0.091" stop-color="#FF9365"/>
                  <stop offset="0.226" stop-color="#D96432"/>
                  <stop offset="0.521" stop-color="#FF7941"/>
                  <stop offset="0.833" stop-color="#FFBA9D"/>
                  <stop offset="1" stop-color="#AD3401"/>
                  </linearGradient>
                  <linearGradient id="paint59_linear_1322_3092" x1="850.852" y1="597.876" x2="939.742" y2="553.681" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint60_linear_1322_3092" x1="995.643" y1="697.243" x2="1156.59" y2="697.243" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint61_linear_1322_3092" x1="768.829" y1="753.487" x2="552.631" y2="858.264" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint62_linear_1322_3092" x1="583.636" y1="583.464" x2="772.194" y2="583.464" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint63_linear_1322_3092" x1="859.146" y1="671.877" x2="1027.27" y2="671.877" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint64_linear_1322_3092" x1="810.537" y1="581.896" x2="918.086" y2="522.873" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint65_linear_1322_3092" x1="832.382" y1="683.026" x2="1142.87" y2="683.026" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint66_linear_1322_3092" x1="665.236" y1="684.239" x2="428.316" y2="566.522" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint67_linear_1322_3092" x1="793.852" y1="743.076" x2="610.323" y2="836.494" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint68_linear_1322_3092" x1="774.894" y1="795.412" x2="591.067" y2="884.839" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint69_linear_1322_3092" x1="822.752" y1="758.244" x2="689.899" y2="823.661" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint70_linear_1322_3092" x1="826.687" y1="604.502" x2="922.084" y2="556.808" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint71_linear_1322_3092" x1="737.694" y1="689.262" x2="545.326" y2="594.573" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint72_linear_1322_3092" x1="809.658" y1="696.59" x2="1123.18" y2="696.59" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint73_linear_1322_3092" x1="957.914" y1="620.288" x2="1033.01" y2="620.288" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint74_linear_1322_3092" x1="798.298" y1="585.045" x2="798.298" y2="519.022" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint75_linear_1322_3092" x1="590.843" y1="668.955" x2="499.14" y2="622.348" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint76_linear_1322_3092" x1="680.529" y1="689.719" x2="543.453" y2="762.045" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint77_linear_1322_3092" x1="822.17" y1="718.024" x2="942.563" y2="782.735" gradientUnits="userSpaceOnUse">
                  <stop offset="0.011" stop-color="#FF4E03"/>
                  <stop offset="1" stop-color="#FF4E03" stop-opacity="0"/>
                  </linearGradient>
                  <radialGradient id="paint78_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(828.285 731.069) rotate(25.8935) scale(8.05129)">
                  <stop offset="0.005" stop-color="#FF4E03"/>
                  <stop offset="0.989" stop-color="#FF4E03" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint79_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(833.657 745.619) rotate(25.8935) scale(8.05129)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint80_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(744.353 674.456) rotate(25.892) scale(7.80442 7.80443)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint81_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(717.021 687.721) rotate(25.892) scale(7.80441)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint82_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(803.982 701.995) rotate(25.8921) scale(7.80442 7.80445)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint83_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(763.507 684.854) rotate(25.8919) scale(7.8044 7.80439)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint84_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(777.454 691.623) rotate(25.892) scale(7.80441 7.80441)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint85_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(828.353 690.167) rotate(25.892) scale(7.80441 7.80441)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint86_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(711.854 624.791) rotate(25.892) scale(7.80442 7.80443)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint87_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(733.261 570.924) rotate(25.892) scale(7.80441 7.80441)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint88_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(931.221 655.024) rotate(25.8935) scale(8.05129)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint89_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(929.263 695.458) rotate(25.8935) scale(8.05129 8.05128)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint90_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(971.303 684.969) rotate(25.8935) scale(8.05129)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint91_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(882.916 663.797) rotate(25.8935) scale(8.05129)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint92_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(846.882 642.696) rotate(25.8935) scale(8.05129)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint93_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(832.105 635.524) rotate(25.8935) scale(8.05129)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint94_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(801.806 620.855) rotate(25.8935) scale(8.05129 8.0513)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint95_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(790.477 610.273) rotate(25.8935) scale(8.05129)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint96_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(757.959 642.248) rotate(25.8935) scale(8.05129 8.05128)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint97_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(876.793 717.441) rotate(25.8935) scale(8.05129 8.05128)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint98_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(908.619 704.122) rotate(25.8889) scale(22.3211 22.3211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint99_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(958.917 686.702) rotate(25.8889) scale(22.3211 22.3211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint100_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(854.142 601.861) rotate(25.8889) scale(22.3211 22.3211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint101_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(694.224 709.877) rotate(25.8889) scale(22.3211 22.3211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint102_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(850.785 752.927) rotate(25.8889) scale(22.3211 22.3211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint103_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(698.73 719.388) rotate(25.892) scale(7.80441 7.80441)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint104_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(668.067 653.331) rotate(25.892) scale(7.80442 7.80443)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint105_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(612.346 646.066) rotate(25.892) scale(7.80441 7.80441)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint106_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(739.023 651.439) rotate(25.8919) scale(7.80441 7.80441)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint107_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(796.605 705.758) rotate(25.892) scale(7.80441)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint108_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(769.442 576.676) rotate(25.8889) scale(22.3211 22.3211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint109_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(659.996 620.389) rotate(25.8889) scale(22.3211 22.3211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint110_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(648.652 565.885) rotate(25.8889) scale(22.3211 22.3211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint111_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(624.182 664.071) rotate(25.8889) scale(22.3211 22.3211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="paint112_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(651.51 700.771) rotate(25.8889) scale(22.3211 22.3211)">
                  <stop offset="0.005" stop-color="white"/>
                  <stop offset="0.989" stop-color="#1E120D" stop-opacity="0"/>
                  </radialGradient>
                  <linearGradient id="paint113_linear_1322_3092" x1="799" y1="584.5" x2="798.75" y2="752" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FF4E03" stop-opacity="0"/>
                  <stop offset="0.4" stop-color="#FF7439"/>
                  <stop offset="1" stop-color="#FF4E03"/>
                  </linearGradient>
                  <radialGradient id="paint114_radial_1322_3092" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(922.292 715.327) rotate(-25.9822) scale(123.928 123.928)">
                  <stop stop-color="white"/>
                  <stop offset="0.906" stop-color="white" stop-opacity="0"/>
                  </radialGradient>
                  <linearGradient id="paint115_linear_1322_3092" x1="797.254" y1="588.237" x2="797.052" y2="724" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FF4E03" stop-opacity="0"/>
                  <stop offset="0.4" stop-color="#FF7439"/>
                  <stop offset="1" stop-color="#FF4E03"/>
                  </linearGradient>
                  <linearGradient id="paint116_linear_1322_3092" x1="357.841" y1="418.82" x2="453.639" y2="468.08" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#AC3A09"/>
                  <stop offset="1" stop-color="#963004"/>
                  </linearGradient>
                  <linearGradient id="paint117_linear_1322_3092" x1="1186.94" y1="439.82" x2="1282.74" y2="489.08" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#AC3A09"/>
                  <stop offset="1" stop-color="#963004"/>
                  </linearGradient>
                  <image id="image0_1322_3092" width="17" height="15" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAPCAMAAAA1b9QjAAAAAXNSR0IB2cksfwAAAEJQTFRF/////wD//wD//wD/vwD/2wD/0QD/2AD/3wD/0gD/4gD/1wD/gAD/1QD/3QD/3AD/2QD/1wD/2wD/2gD/2AD/2QD/QxO0CgAAABZ0Uk5TAAECAwQHCw0IERogAgYPHS85FSlCUGts6wIAAABPSURBVHicY2RAB4wI6j+SCCMQMPwHApgIIxMTWOTfv/8QEUYmVqia3yAhoAgPI1zX/y9gESY2LqjIt1//cIhg6sI0GdN2LC7E4gtsPkUCANssOBCMvW57AAAAAElFTkSuQmCC"/>
                  <image id="image1_1322_3092" width="17" height="14" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAOCAMAAAD+MweGAAAAAXNSR0IB2cksfwAAAFFQTFRF/////wD//wD//wD/vwD/2wD/6AD/2wD/4wD/1QD/3AD/2wD/gAD/0wD/2gD/2QD/qgD/5gD/2QD/1AD/2wD/2gD/1QD/3QD/2AD/3AD/2QD/5IvrcgAAABt0Uk5TAAECAwQHCw4JEh0jAiM3QwMKGzVUZgweO15zqr2a2QAAAFZJREFUeJxtz9EKgDAIBVAvk3oJ+v/PDHopDOfMFjUvCOMgTkEeWOn7JFhILY+ghFx6CwqHSCOT5WB2EZn3JljR5+imLlOXM+TfM85J/hr3SXZO7vqkAoxnQQ+TpHKqAAAAAElFTkSuQmCC"/>
                  <image id="image2_1322_3092" width="25" height="19" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAATCAMAAABSrFY3AAAAAXNSR0IB2cksfwAAAcVQTFRF/////wD/gAD//wD/AAD/qgD//wD/1QD/vwD/xgD/zAD//wD/zAD/2wD/1wD/3AD/1QD/0wD/3QD/0QD/2wD/vwD/zwD/1gD/2gD/2wD/1gD/1QD/2QD/2wD/3AD/3AD/2wD/1QD/4wD/0QD/1QD/3AD/2QD/2gD/1wD/2wD/2gD/2gD/2gD/2AD/2AD/0gD/2AD/2AD/2gD/2AD/2gD/2AD/2gD/2QD/2AD/2gD/2AD/2wD/3gD/5gD/2gD/2AD/1wD/2AD/2QD/2QD/2gD/2QD/2QD/2gD/2AD/2QD/0gD/6gD/3QD/1wD/2QD/2AD/2QD/2gD/2gD/2gD/2gD/2QD/2AD/2QD/2QD/0wD/4wD/2AD/1wD/2QD/2QD/2gD/2QD/2QD/2QD/2QD/2gD/2AD/2AD/1wD/1wD/1QD/tgD/2AD/1wD/2AD/1wD/2gD/2AD/2QD/2QD/2QD/2QD/1wD/2QD/1gD/qgD/1QD/2QD/2QD/2QD/2AD/2wD/2QD/2QD/2QD/2QD/2wD/3AD/1wD/2wD/2QD/1gD/2gD/2QD/2QD/2QD/2AD/1wD/2AD/2QD/2QD/1wD/0wD/3wD/2QD/0QD/8LMI+QAAAJd0Uk5TAAECAgEDBAYICQUDCg4TFhgXDwsHBBAZIisyNjYyLCQcDAkhMUFQWmBbUkU3Jw0RIWh7iY+Qin9vWUIqFwowTo2ks7q6tamWXDwiDB46XYO9zNPUz8Sxk0kpEjtfhae/ztXW0si2mHNMKgcaU3WUqri+vLSjZ0MlBhI9WHGElJSNgGtPMyY4SlhgZGVfVkc0FCg5HQgbFidk+bQAAAEXSURBVHicY2TABRgRDEZGhv//GZj/oMiw/GNmZATLMDP++PcfIcPIwsQKlmH8y8LI+OkvWA4kwyjyhZcRDt4JP/sDkgLKMHKJvxFlhOgBgVfiN//8BcswC0oz/vnFzYgEzn37D5LhNrqlzviTAyr4WoyR8cSP7yAZRhEzkMgnfqjUQwVGxrW/YDL8jChgacx0qGl6m/yhzmJk3O/EyLjDs/M/xAWpy6KB4tu9TlqAFcxh/PIGLMMoonGpDGLMfyYgsdBz9nuIqxmYODhr97hO/lG227VL6X3as5Wf3/yHhg6TcP0s72kcIVrX1tQ/vnSS8c1/eIgyMgl9YmSUZGB4/v8/3ztIkDIiRwIQAOPhP1r84I45DAAAbm1eFLKN4RMAAAAASUVORK5CYII="/>
                  <image id="image3_1322_3092" width="25" height="19" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAATCAMAAABSrFY3AAAAAXNSR0IB2cksfwAAARFQTFRF/////wD/gAD//wD/vwD/1QD/vwD/xgD/4wD/3wD//wD/qgD/2AD/1QD/3AD/1gD/2AD/1wD/2wD/zAD/0QD/2QD/3QD/2QD/1QD/2QD/2wD/1wD/2wD/1QD/2AD/3gD/2wD/5gD/1wD/2QD/1gD/2gD/2QD/2AD/1wD/2wD/2gD/1wD/2wD/zAD/1gD/1gD/1wD/1wD/2AD/2gD/2QD/2AD/2AD/2AD/2QD/2AD/2wD/2AD//wD/1wD/2AD/2AD/2QD/2gD/2AD/2QD/2AD/2QD/2QD/2gD/2AD/1wD/2gD/3QD/1gD/2QD/2gD/2gD/2QD/2QD/2QD/2QD/2AD/2QD/2QD/2AD/2QD/0wD/4wD/VUABZAAAAFt0Uk5TAAECAgQGCAkJCAQDDRIWGRoTDgULFB4oMTY4OTIrIRcHCiZKWGBkYVpOPi0cDyU+WXKEj5SVkYh4YkcuAzNUdpWrub6/urCdgj8iDx88iKrC0NbX08i0cEkpEneHQJEAAACYSURBVHicY2TABRjhNCOI+f8/w38UGUYmRhBg+M/0h5Xx23+EDBMTKzNE5j8z4zfuD//+Q2WYBBmh4B9IwWe+1yBtQBlGZtm3Ij85QHqgCm78+wuWAUooMiKDK6waR/+DZGyevtdFEr+rwsh44h1IhpGZw4HxljpM4pU4kFj9B78MbtPwuAC3q3H7FE/o4AlRPLGAL+YwAQASykwU1vzfOQAAAABJRU5ErkJggg=="/>
                  <image id="image4_1322_3092" width="25" height="19" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAATCAMAAABSrFY3AAAAAXNSR0IB2cksfwAAARFQTFRF/////wD/gAD//wD/qgD//wD/1QD/3wD/xgD/4wD/vwD/vwD/zAD/2wD/1wD/3AD/1gD/2AD/1QD/2AD/2wD/3gD/2AD/1QD/2wD/2QD/1wD/2wD/1QD/2QD/3QD/2QD/0QD/zAD/2wD/1wD/2gD/2wD/1wD/2AD/2QD/2gD/1gD/2QD/1wD/5gD//wD/2AD/2wD/2AD/2QD/2AD/2AD/2AD/2QD/2gD/2AD/1wD/1wD/1gD/1gD/3QD/2gD/1wD/2AD/2gD/2QD/2QD/2AD/2QD/2AD/2gD/2QD/2AD/2AD/1wD/4wD/0wD/2QD/2AD/2QD/2QD/2AD/2QD/2QD/2QD/2QD/2gD/2gD/2QD/1gD/ndVEcAAAAFt0Uk5TAAECAgMEBggJCQgEBQ4TFhkaEg0HFyErMjY5ODEoHhQLDxwtPk5aYWRgWEomCgMuR2J4iJGVlI+Eclk+JQ8iP4KdsLq/vrmrlXZUMxIpSXC0yNPX1tDCqog8H7ShL+oAAACcSURBVHicY2TABRjhNCOI+f8/w38UGUZmRhBg+M/0h/XHv/9wGUYmzr8sEJn/zIxfWL7/g8owMgv85ADrYfwH1vvm2z+IDDOzNEQcZBfje6HHcve+/QfbrPvpgzwjMrjG9P4vWIbbkJHxlTiSzDEZxktgGVY3IA9mEyPjeSPGnT+AxuGVwW0aThfgdjUen+IOHTwhii8W8MUcJgAAKwJMFMGNxv4AAAAASUVORK5CYII="/>
                  <image id="image5_1322_3092" width="25" height="20" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAUCAMAAABPqWaPAAAAAXNSR0IB2cksfwAAAa1QTFRF/////wD/gAD//wD/vwD/1QD/vwD/xgD/4wD/2wD/6gD/1QD/0QD/1gD/2AD/2QD/3AD/2AD/3wD/0wD/2AD/2gD/2QD/1wD/1wD/1QD/2QD/1QD/1wD/5gD/zAD/2AD/2AD/1wD/2AD/1wD/2QD/1wD/2gD/2QD/2QD/2gD/1gD/zgD/zAD//wD/1QD/2wD/2QD/2QD/2QD/1wD/2QD/2gD/2AD/2gD/2AD/2AD/zwD/0gD/1wD/2gD/2AD/2AD/2AD/2AD/2AD/2AD/2QD/2QD/2QD/2AD/2AD/2gD/1wD/tgD/1QD/1wD/2AD/2QD/2AD/2AD/2QD/2QD/2gD/2QD/2QD/2QD/1wD/qgD/1QD/2gD/1wD/1wD/2AD/2QD/2QD/2AD/2QD/2QD/2AD/2QD/2AD/2wD/1QD/3QD/2wD/2wD/2AD/2AD/2QD/2AD/2QD/2AD/2QD/1wD/2gD/0QD/2AD/2AD/2QD/2AD/2AD/2QD/2AD/1wD/1gD/0QD/zAD/1wD/2wD/1wD/2AD/2AD/2AD/1wD/3AD/2wD/3gD/2wD/1gD/0gD//wD/qItdaQAAAI90Uk5TAAECAgQGCAkJBwwSFhkaGxYNCB0nMDY5OjEoHhMKBSE0R1ZgZGZgV0k3JRUKAwwcUGuAjpSWj4JvVRARJkRoiqW2vsC+t6iQcEwtBytNdZu5zNXXzbyhfjMDKktzmbfK1NfLup56VDEYDyM/YoOfsbuyh2dFCy5IeIiRk4l6SxwPP05aYWNPQB0OFzI4IgTZIc5NAAABAElEQVR4nGNkwAUYCcowMjCCmf//M/xHlmFkYgQBkAQQ/PsPl2FkZgXLMP7/z/ybjfHTv39QGUZmFmYOmAyYfvwfIsPMxiQC1QMxlZHxyn+QDCOzFuNHAYTMfXbp038gMixmjKjgENvHv2AZr4sGjEimnTbb+jtwOUSPuB2yDBAs+A3RI+sNlbikx/hUhpFxGdPbXxAZHY8ZmYxfeSB6lke9lJjE+/g/xNVM1eulzWH+eS+06TxQC8SnERsaGKfq2neXdZUedPz7vyFgxX9Y6DBJv2qc/OUv439mntzFn56CAw4a1owRpuW8Xxn/c3/uPL3iP2r8QKIBEQlExBwmAACBYl4VtsH6JAAAAABJRU5ErkJggg=="/>
                  <image id="image6_1322_3092" width="17" height="15" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAPCAMAAAA1b9QjAAAAAXNSR0IB2cksfwAAAJZQTFRF/////wD//wD//wD/vwD//wD/2wD/6AD/zAD/3wD/xgD/4QD/2wD/1gD/2QD/gAD/1QD/1wD/2QD/2gD/2gD/3gD/2QD/2wD/1wD/2AD/4wD/1gD/1wD/2AD/2wD/2gD/2QD/2gD/2wD/2QD/2gD/1QD/2AD/3AD/2QD/2QD/6gD/3AD/3QD/2gD/zAD/3wD/2AD/AAD/Sj952wAAADJ0Uk5TAAECAwQEBwsPEAkRHCUoAgYgNUVLFy9OZ3AJGTNVcHsUKUZfaAwaLD1DDBYeIgUIDQHbFBokAAAAh0lEQVR4nGNkQAeMSNR/BJMRBP6DAFSEkZkJIvLv73+wCCMTO0zNz3//QSL8jD85ICI/2P9/BIkwcXDD1Hz98Q8sIoEw+QVYhP+7FEzkGSdYFyOLAkzkwR+wyQxMfFIQkWef/kHdw6jD+I37K9f/K///w3wBVAL0BNjJMH8xGF4wOI/iUyQAABcoRxApEo+oAAAAAElFTkSuQmCC"/>
                  <image id="image7_1322_3092" width="16" height="15" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAPCAMAAADarb8dAAAAAXNSR0IB2cksfwAAAJNQTFRF/////wD//wD//wD/vwD/zAD/2wD/6AD/3QD/0gD/xgD/4QD/0wD/1wD/1QD/gAD/1QD/3wD/1wD/3QD/1wD/2QD/3gD/2QD/2wD/2wD/2QD/4wD/1gD/1wD/2AD/2gD/2QD/2QD/2gD/2wD/2QD/2gD//wD/1QD/2AD/1wD/2wD/2gD/2AD/3AD/3wD/3wD/6gD/QKspZQAAADF0Uk5TAAECAwQFBwsPEQkRHSYrAgYQIDVHURcvT2p5CRkzVnWGFClHZHQEDBotQEsNFiAIDPIBASUAAAB/SURBVHicXY8xC4NQDIRzz6EKRediFweh9P//liI4uLR0thRaB981vmoI3pCEj7uQQHaCq9xGLBIuSgBZWEGcqQDhYI4pElLBRThCQn408P5GBSfneCqoPrWBR6ERtM7R61IJ5RkYpCHvr5juQHZFJxfeZvJ/tEXsi9To3nL6AeD7RxAegjwkAAAAAElFTkSuQmCC"/>
                  <image id="image8_1322_3092" width="16" height="14" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAOCAMAAAAR8Wy4AAAAAXNSR0IB2cksfwAAAJNQTFRF/////wD//wD//wD/vwD/zAD/3wD/6gD/3QD/1QD/2AD/3AD/3wD/1wD//wD/1QD/2AD/1wD/2wD/2gD/gAD/2wD/2QD/2gD/2wD/2QD/2gD/4wD/1gD/1wD/2AD/2gD/2QD/xgD/3gD/2QD/2wD/2wD/2QD/3wD/1wD/3QD/1wD/2QD/4QD/0wD/1QD/6AD/0gD/c81XAQAAADF0Uk5TAAECAwQFCAwPBg0WICYEDBotQEsCBxQpR2R0CRkzVnWGCRcvT2p5ECA1R1ERHSsLEZi32CMAAAB+SURBVHicTc69DoMwDARgXxgYEEMlljLwM9H3f5oy0TLAgsSAGDoQ96BR6pMSWZ8S6yBXwKNxEjCizA+AJMBBIrg0vvh4AnJE0E0hBQzoAnF3A7Mn1AbehGKvIowZv8BVGV6tDI3uo9ezR3Ir+4c8u2k9rh5idoTq4db/aPIF1CRHD7pFkrsAAAAASUVORK5CYII="/>
                  <image id="image9_1322_3092" width="17" height="14" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAOCAMAAAD+MweGAAAAAXNSR0IB2cksfwAAAJNQTFRF/////wD//wD//wD/vwD/zAD/3wD/6gD/3QD/1QD/2AD/3AD/3wD/1wD//wD/1QD/2AD/1wD/2wD/2gD/gAD/2wD/2QD/2gD/2wD/2QD/2gD/4wD/1gD/1wD/2AD/2gD/2QD/xgD/3gD/2QD/2wD/2wD/2QD/3wD/1wD/3QD/1wD/2QD/4QD/0wD/1QD/6AD/0gD/c81XAQAAADF0Uk5TAAECAwQFCAwPBg0WICYEDBotQEsCBxQpR2R0CRkzVnWGCRcvT2p5ECA1R1ERHSsLEZi32CMAAACASURBVHicTc8xDoMwDAVQ/2RgQAxILGWgZYL7n6ZMbRnaBYmhYmAgxqZp8JcSWU+JZYOOQA6fJUFCLIkC+CibmojL0ps1qKBAEv6ySAUjPIm4i5FPULkaealUS5NkzPUXXJPj2dLjxssY+JjHl/XQ0717z9tvHjJ9/lvEm01tswMEyEcPdVunBgAAAABJRU5ErkJggg=="/>
                  <image id="image10_1322_3092" width="17" height="14" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAOCAMAAAD+MweGAAAAAXNSR0IB2cksfwAAAL1QTFRF/////wD//wD//wD/vwD/2wD/6AD/2wD/6gD/3wD/zAD/4wD/1QD/3AD/3AD/3QD/1wD/3AD/2AD/1QD/gAD/0wD/2wD/1wD/3AD/2wD/1wD/2AD/1QD//wD/qgD/5gD/2QD/2QD/2wD/2QD/2gD/2wD/1wD/2gD/2QD/3QD/1QD/2gD/2QD/2QD/2QD/1wD/1gD/2QD/2gD/2AD/2QD/3gD/xgD/2wD/2gD/3wD/2QD/1gD/2wD/4QD/3QD/W179pQAAAD90Uk5TAAECAwQHCw4MCAUJEh0kJSAWDQYCIzhGSD8tGgwEAwobNVVrb2JHKRQePGB5gHMzGWxoTy8XCUdMECglHBEPsJzAdwAAAIRJREFUeJxjZAADRiD+j2AyMAIBw38ggIkwMoNEgPgHSIwRJMDOCAXv/4FFRD6yc8KEnvwHijDKMsLBXf43YJF/vGDuF17G29//wdXw/2UBUWf+wc1RZLzP9V7zFuMbuF1M2kAVP8/++w9zj7jSb9YT/////Y/kZsnnUEczInnmP4KJAgCzyiwPJXcirgAAAABJRU5ErkJggg=="/>
                  <image id="image11_1322_3092" width="17" height="14" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAOCAMAAAD+MweGAAAAAXNSR0IB2cksfwAAAJZQTFRF////AAD//wD//wD//wD/zAD/3wD/1QD/2AD/1QD/6gD/3AD/3QD/2gD//wD/2AD/3AD/2QD/2QD/gAD/2wD/2QD/2gD/2wD/2QD/2gD/4wD/1gD/1wD/2AD/2wD/2gD/xgD/3gD/2QD/2wD/1wD/2AD/3wD/1wD/2QD/2gD/2gD/4QD/2wD/1gD/2QD/vwD/6AD/zAD/1oOjmwAAADJ0Uk5TAAEBAgMFCAwNBgwWHiIEGiw9QwIHFClGX2gJGTNVcHsJFy9OZ3AQIDVFSxEcJSgECw+FAW3AAAAAh0lEQVR4nE3PMQ+CQAwFYF5J1Igbg4MwOBv//w8xzg7g4OAmRk3o89pygQ695ksveUURBZDT5F2QXlKzCJKkHaqZSblCCH+ji+y+m5DP+qUmNZB3yKdJuZ/lMbq0s3Qu9bvN0m39l0hThQy9auQ53xsMFfvDZcpjkU+34zVCxxWFWNPFXcv6Ax/CRw/xfwQjAAAAAElFTkSuQmCC"/>
                  <image id="image12_1322_3092" width="17" height="14" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAOCAMAAAD+MweGAAAAAXNSR0IB2cksfwAAAE5QTFRF/////wD//wD//wD/vwD//wD/2wD/0QD/2wD/3QD/3wD/0gD/2QD/0wD/3QD/gAD/1QD/1QD/2gD/2QD/2AD/2wD/1QD/3QD/2AD/2QD/9wG+YAAAABp0Uk5TAAECAwQEBwsODwgRGyMlAgYeMD1CFSpDVl1O7eu8AAAAUElEQVR4nGNkQAeMSNR/BJMRBP6DAFSEkYkZIvL333+wCCMTO0zNT6AQUISf8ScHROQH+/+PIBEmDm6Ymq8//mEXwdSFaTKm7VhciMUXKAAApy9CD2L97TUAAAAASUVORK5CYII="/>
                  <image id="image13_1322_3092" width="17" height="14" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAOCAMAAAD+MweGAAAAAXNSR0IB2cksfwAAAGBQTFRF/////wD//wD//wD/vwD//wD/2wD/1QD/3QD/3wD/4wD/1QD/3AD/1wD/2gD/gAD/0wD/2wD/2AD/2AD/qgD/5gD/2QD/2QD/2AD/2gD/2AD/3QD/2QD/2gD/2gD/2QD/IudUaQAAACB0Uk5TAAECAwQEBwwPEAkSHSYpAiM4SE4DChs1Vm53HjxhfIaAasIAAAAAWklEQVR4nGNkAANGEPEfwWQEgf8gABVhZGaCiPz7+x8swsjMBlPzCygEFOH/zsoKEfn9m/MjUIRRmBFhzv+3/0Ein0VgIm94ISLoajDNwWIXpnuwuBmLv1AAABxGTA/8ULYhAAAAAElFTkSuQmCC"/>
                  <image id="image14_1322_3092" width="6" height="4" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAEAgMAAADQaqbQAAAAAXNSR0IB2cksfwAAAAxQTFRF////////////////9aUOcwAAAAR0Uk5TAAoopUXlGoEAAAARSURBVHicY5RSY9QPBCEpNQAI/AGFolDtxQAAAABJRU5ErkJggg=="/>
                  <image id="image15_1322_3092" width="6" height="5" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAFBAMAAACUdoDVAAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TAAooHn1hfcPTAAAAF0lEQVR4nGNkYGBgZFR8x8js+AZMA/kAHq0DVqB3edcAAAAASUVORK5CYII="/>
                  <image id="image16_1322_3092" width="6" height="4" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAEBAMAAABfKlNwAAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TAAknKKeXjoG/AAAAE0lEQVR4nGNkVHzHyOz4BoyBbAAgjASF4XvC2QAAAABJRU5ErkJggg=="/>
                  <image id="image17_1322_3092" width="6" height="5" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAFBAMAAACUdoDVAAAAAXNSR0IB2cksfwAAABVQTFRF////////////////////////////Z0iB0QAAAAd0Uk5TCScxACinzu3Q2fIAAAAWSURBVHicY2RUeMToqnAPjEFsYwYGADSFBMVC8yC1AAAAAElFTkSuQmCC"/>
                  <image id="image18_1322_3092" width="5" height="5" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFBAMAAAB/QTvWAAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TAAknHn+WmkosAAAAF0lEQVR4nGNkYGBgFOK/z2jCvxdMA/kAHC0DBnD1eS4AAAAASUVORK5CYII="/>
                  <image id="image19_1322_3092" width="6" height="5" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAFBAMAAACUdoDVAAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TAAknHn+WmkosAAAAF0lEQVR4nGNkYGBgZFR8x8js+AZMA/kAHq0DVqB3edcAAAAASUVORK5CYII="/>
                  <image id="image20_1322_3092" width="6" height="4" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAEBAMAAABfKlNwAAAAAXNSR0IB2cksfwAAABVQTFRF////////////////////////////Z0iB0QAAAAd0Uk5TCScxAB5/nXa1D4kAAAAWSURBVHicY2RUeMToqnCPEUQbMzAAAB9QA4HIEdpHAAAAAElFTkSuQmCC"/>
                  <image id="image21_1322_3092" width="6" height="5" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAFBAMAAACUdoDVAAAAAXNSR0IB2cksfwAAABJQTFRF////////////////////////uuV0AgAAAAZ0Uk5TCigyAKXNUguGuQAAABZJREFUeJxjZFR4xCjisB+MQWxjBgYAL+EEZbuAC34AAAAASUVORK5CYII="/>
                  <image id="image22_1322_3092" width="6" height="5" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAFAgMAAAAbNnV1AAAAAXNSR0IB2cksfwAAAAxQTFRF////////////////9aUOcwAAAAR0Uk5TAAoopUXlGoEAAAATSURBVHicY5RSY9QPBCEgg4EBAA2OAYZKPC7FAAAAAElFTkSuQmCC"/>
                  <image id="image23_1322_3092" width="6" height="4" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAEBAMAAABfKlNwAAAAAXNSR0IB2cksfwAAABJQTFRF////////////////////////uuV0AgAAAAZ0Uk5TCigyAKXNUguGuQAAABNJREFUeJxjZFR4xCjisB+MgWwAHoAEMQcSu/8AAAAASUVORK5CYII="/>
                  <image id="image24_1322_3092" width="6" height="5" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAFBAMAAACUdoDVAAAAAXNSR0IB2cksfwAAABVQTFRF////////////////////////////Z0iB0QAAAAd0Uk5TAAooMh59m7SYXtwAAAAXSURBVHicY2RgYGAUUrjH6KpwG0wD+QAf4gNm7b/whwAAAABJRU5ErkJggg=="/>
                  <image id="image25_1322_3092" width="14" height="10" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAKCAMAAACzB5/1AAAAAXNSR0IB2cksfwAAALFQTFRF////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////novtRQAAADt0Uk5TAAEDBAkRFxkYEgocOEtRTT4kDnKZp6CEUyMVRY/F2dGxdzYQAj2DvNLJpG8zDyVVhZiLZ0AIRz8qCwUGmCOlAAAAaUlEQVR4nD3OoQ6AMAwE0N4mGhRZgkAgUSj+/xsIFrMvwJCpBcFKy4BT95ImVxARACIRsUrkHJ6cRZTwXIl0KZ3n1ymLssefqOThU1aiGSu2adFj8q10AVhLKTYExxKOGXt8du0Pe8PaDW0hHAu2boUuAAAAAElFTkSuQmCC"/>
                  <image id="image26_1322_3092" width="13" height="11" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAALCAMAAACTbPdTAAAAAXNSR0IB2cksfwAAAHVQTFRF////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////qjnRfAAAACd0Uk5TAAEDBAkRFxkaCBs3SlJUAg8yaZGjpxA2danDyQojgp2lDiQ+TRIYbL8V9AAAAGFJREFUeJxVjrEKg0AQRO+dhVqpVZCA/v9nGRCx0i5a5MbdQLi4TDGPKd4S/g8LeJNkFKMh1pUSVPxIBw2ZRFNmOuHJ3jltrWZCMdi0Pmx6fQjEvmYa9V6SXPUVui5w++UC5a8wLA5MRCcAAAAASUVORK5CYII="/>
                  <image id="image27_1322_3092" width="14" height="10" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAKCAMAAACzB5/1AAAAAXNSR0IB2cksfwAAAJxQTFRF////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////RWkLIgAAADR0Uk5TAAEDBAkRFxkcOEtScpmop5hxNxVFj8XZ1r6LQxI9g7zTy6l2CiVVhYxoQR0OJEc/KgsFAvQAr6kAAABqSURBVHicLY6xCoAwDERzTRdHB0HcxMn//w5XwR8QnBQc7NAmJqUZjnuESw5EBMBUVc0SheBsJGIIjg1zUVDgyKjzFjHs0SbdjlOjM/sWi9lrNDk8S7ziscAu9TIhzOnrBmCrf72Ht3D3A1L1JgsF6uk0AAAAAElFTkSuQmCC"/>
                  <image id="image28_1322_3092" width="14" height="11" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAALCAMAAAB4W0xQAAAAAXNSR0IB2cksfwAAAD9QTFRF////////////////////////////////////////////////////////////////////////////////////NZumWwAAABV0Uk5TAAEDBAkRFxkcOEtSN3CWpRVDiLbIPguPIAAAAERJREFUeJxjZEABjCDMCCL///8P5jIxgfhA3r9/QC4jMwuU++fvf0YGJmZ2KPfn339ALh8jlPv/0z8MWTS9aCaj24sMACsxLgw7zQW0AAAAAElFTkSuQmCC"/>
                  <image id="image29_1322_3092" width="13" height="10" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAKCAMAAABYMCT2AAAAAXNSR0IB2cksfwAAAJlQTFRF////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////SLD2LwAAADN0Uk5TAAEDBAoSGBkOJD5NUiNThKCooYVUAhA2d7HS3da4fDgPM2+kytoIHEBnjZ8JFypMBQsT3vsSqQAAAFxJREFUeJw9zTEKgDAQRNH5BguxTiG22nj/wwiWNrmACAZdY6JONQ+WHSQBkpmlJqokEuwy5OpP8QTXULIlef7shm9LK2J8ELqQL1VNcKzDkr9IvoeouSy883n9BjBlLDdn9CglAAAAAElFTkSuQmCC"/>
                  <image id="image30_1322_3092" width="5" height="5" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFBAMAAAB/QTvWAAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TCScAKKfncWumAAAAFklEQVR4nGNk5BdgNOG/C8YgthLDPwAeRAOmlUswgwAAAABJRU5ErkJggg=="/>
                  <image id="image31_1322_3092" width="6" height="5" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAFBAMAAACUdoDVAAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TAAknHn+WmkosAAAAF0lEQVR4nGNkYGBgFOK/z2jCvxdMA/kAHC0DBnD1eS4AAAAASUVORK5CYII="/>
                  <image id="image32_1322_3092" width="6" height="5" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAFBAMAAACUdoDVAAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TAAknKKeXjoG/AAAAFklEQVR4nGNkVHzHyOz4BoxBbAYGBgAypASGJXcwRAAAAABJRU5ErkJggg=="/>
                  <image id="image33_1322_3092" width="13" height="11" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAALCAMAAACTbPdTAAAAAXNSR0IB2cksfwAAAD9QTFRF////////////////////////////////////////////////////////////////////////////////////NZumWwAAABV0Uk5TAAEDBAkRFxkcOEtSN3CWpRVDiLbIPguPIAAAAD9JREFUeJxdzUEKACAIBEDXgm79/53dgtJa8FAuKAyiQt6ABXZ3p1TJCzMISg2tDdHSQpPqCPnIs3/vv5n+PTm65ykUzewJqAAAAABJRU5ErkJggg=="/>
                  <image id="image34_1322_3092" width="13" height="11" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAALCAMAAACTbPdTAAAAAXNSR0IB2cksfwAAAEtQTFRF////////////////////////////////////////////////////////////////////////////////////////////////////slWHAAAAABl0Uk5TAAEDBAoSGBkOIz1NUggeS32bpAspYZy+yHH0t2UAAABASURBVHicY2RABowgzAgk////D+IxMgF5jEDO/3//GRmY2GC8X/8YGXkYYbz/XxgZhRC8d2hyqPrQzES1DxkAANQ7MA/9oURzAAAAAElFTkSuQmCC"/>
                  <image id="image35_1322_3092" width="13" height="11" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAALCAMAAACTbPdTAAAAAXNSR0IB2cksfwAAAD9QTFRF////////////////////////////////////////////////////////////////////////////////////NZumWwAAABV0Uk5TAAEDBAkRFxkcOEtSN3CWpRVDiLbIPguPIAAAAEJJREFUeJxdzUEKACAIBMDWgm79/53dgnIz8GCKCMOiosSCNWwUkk8ijwZVC2pz7UNI7a51FDLg4tSU/Xv/zfQv1gVE1S4MlnV5JgAAAABJRU5ErkJggg=="/>
                  <image id="image36_1322_3092" width="9" height="8" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAIBAMAAADZ48iGAAAAAXNSR0IB2cksfwAAACdQTFRF/////wD/vwD/4wD/1QD//wD/4QD/1QD/2QD/1QD/3gD/2wD/2wD/Z3doewAAAA10Uk5TAAEECQwDESs2Bh9OYi9ubl8AAAAmSURBVHicY2QAAUYhpX/3PjCGKf27tYFxltK/awVQNkQcogZMAgCN7w8JmFwQVAAAAABJRU5ErkJggg=="/>
                  <image id="image37_1322_3092" width="10" height="8" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAIBAMAAAAy1HOFAAAAAXNSR0IB2cksfwAAACRQTFRF/////wD/vwD/4wD/1QD/2wD/2AD/3AD/xgD/2gD/2QD/2AD/Y4HQ6QAAAAx0Uk5TAAEECQwVNEEJMHmYWiww8AAAACRJREFUeJxjZFRSuHefkSlE4c46Ro5JCvcyoCREBCLLAAIQEgBeTwwJP4r0ogAAAABJRU5ErkJggg=="/>
                  <image id="image38_1322_3092" width="13" height="11" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAALCAMAAACTbPdTAAAAAXNSR0IB2cksfwAAAJ9QTFRF/////wD/qgD/2wD/2AD/gAD/4wD/1gD/2wD/1QD/4AD/2QD/2gD/2gD/1wD/2gD/2AD/6gD/1wD/2gD/2QD/2QD/2QD/2AD/2AD/2gD/2wD/2QD/2QD/2AD/2QD/2AD/2AD/2QD/2gD/0gD//wD/1wD/2gD/2AD/2gD/2gD/2QD/2AD/0QD/3wD/3AD/2gD/2AD/3AD/1gD/1wD/2QD/L10vWgAAADV0Uk5TAAEDBw0CEiU4Bhk9ZolnPhoMM3Wuz9CyfDcONn++3ODMlUQRAiBTiqasoHcLIDtLT0kZExRXOM9nAAAAY0lEQVR4nEWOOwqAQBBDExfB0kIQW/X+h7GxUSy101LxM8b19yCQEMIMISjZYyhg4krh4Xzag1VF5DtpmY2M+dIrufSLDRnkt51MHUo/5JDV2gFll2asknFb/WGiAFrY/cbPCXbMHwz8n+riAAAAAElFTkSuQmCC"/>
                  <image id="image39_1322_3092" width="14" height="11" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAALCAMAAAB4W0xQAAAAAXNSR0IB2cksfwAAAI1QTFRF/////wD//wD/2wD/2wD/4wD/qgD/0QD/3wD/3AD/2QD/1gD/2QD/3QD/gAD/1wD/2AD/2AD/2QD/2QD/2AD/2gD/4AD/1QD/2AD/2gD/2gD/2AD/2AD/2QD/2QD/2QD/2gD/1wD/6gD/2QD/2AD/2AD/2QD/2QD/2QD/2AD/2gD/2gD/2AD/1wD/2QD/FTfWEwAAAC90Uk5TAAECBw4SAwsgO0pLPSUCIFSLpqeRZxkGDTeDxeHk1K51Mwzi596+fzaKU0tPExQsrxw1AAAAZUlEQVR4nE2OsQqAMBBDLxVBtLPubv7/x7jp5KCTSEGh0Nhei5gs9yBcAhFBNKP1FANEZOWZ0NRQPaG7BDA2493iIDDg01qwUTp35rCxrsfmAvOrEVxIH0rRBM5k0F6dUXYk/OkFBEYjDL37wBsAAAAASUVORK5CYII="/>
                  <image id="image40_1322_3092" width="13" height="11" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAALCAMAAACTbPdTAAAAAXNSR0IB2cksfwAAADlQTFRF/////wD//wD/2wD/2wD/4wD/0QD/3wD/3AD/2QD/1wD/2AD/2AD/2QD/2AD/2gD/2gD/2AD/2AD/MzeSeAAAABN0Uk5TAAECBw4SCyA7SiBUi6YNN4PF4bS00/EAAABCSURBVHicY2RgYGAEwv9ACGIxMDEyAnn///8D8ZhYoLw//xgYGZnYobyf//4zMvIyQnn/P2PwUFSimoJmA5rtSAAAkdwuDFwq8+8AAAAASUVORK5CYII="/>
                  <image id="image41_1322_3092" width="14" height="11" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAALCAMAAAB4W0xQAAAAAXNSR0IB2cksfwAAAKtQTFRF/////wD//wD/2wD/2wD/1wD/2QD/4wD/1QD/gAD/0QD/3wD/3AD/2gD/2AD/3AD/2gD/1gD/1wD/2gD/2AD/2QD/2QD/2QD/2QD/1QD/2AD/2QD/2QD/2QD/2QD/2QD/2QD/2gD/2gD/0gD/6gD/1wD/2gD/2QD/2gD/2QD/2QD/2AD/4AD/2QD/2gD/2AD/2QD/2gD/2AD/2AD/3QD/2QD/2wD/qgD/4QD/POqoagAAADl0Uk5TAAECBw4TFBIGAgsgO0tPSTcZIFOKp62heDcNNn++3eTSmUURDDN1rtPeyDsZPWeQoIpVISU8RgMRJca2iAAAAGpJREFUeJxFjr0KgDAMhHOloE6O4qyrm/j+D9DB1UlnncUfaGLTKt5BuI8bLiAiBJMEayQDlbc4FE2OpOMSAkz54uYVa3yaOWCT8lpNsc3atxw5IBW37YB9kZPjEAaH3olw2tWTn/GLhL8e0gQgDNRI6S8AAAAASUVORK5CYII="/>
                  <image id="image42_1322_3092" width="19" height="12" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAMCAMAAAC3DnawAAAAAXNSR0IB2cksfwAAAFdQTFRF////AP//AKr/AL//AL//AMn/AMr/AMr/AMn/AMT/AMr/AMn/AMr/AMf/AL//AMn/AMr/AMf/AMj/AMb/AMn/AMn/AMn/AMn/AMr/AMf/ALb/AMn/AMP/oHdCEQAAAB10Uk5TAAEDBBAvPpG9Pbrzu0AIvqBfQT9enby5jzIHji8ldCvwAAAAaklEQVR4nGWNOw6AMAxD4xbBQDtz/8shMdOOTUj/lcgUPT3bIAJAIkLjQLCFJVmYsUYZJ16Y3dXTfBwF1TuU4e0Ftc8ZRJf5k12U3UtfCadwyC5qg7peVPYbbkab0p0s08K6TDM75bbxuw+H8zUNYMTFcwAAAABJRU5ErkJggg=="/>
                  <image id="image43_1322_3092" width="19" height="12" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAMCAMAAAC3DnawAAAAAXNSR0IB2cksfwAAAE5QTFRF////AP//AKr/AL//AL//AMn/AMr/AMP/AMn/AMn/AMr/AMf/ALb/AMr/AMn/AMn/AMj/ANX/AMX/AMz/AMb/AMn/AMn/AMr/AMn/AMT/C+KnaAAAABp0Uk5TAAEDBBAvPi+OuY8yB7qdXkEGPjI/kr2R8z0pk8VJAAAAbUlEQVR4nGWOSw6AIAxEGfxEFDfe/4QuXGjUhWItrQESCQv6MrwpzP+AL2CIqGSohAUqmG2YcfZMWWU1syNl9W/PmZuCX0WsHU6eHTYRQ9OxZ4wLYAkPPi2Prr0Gs/s5IK9lq4nKXBJkXxbEshdg4TQNIG9IsAAAAABJRU5ErkJggg=="/>
                  <image id="image44_1322_3092" width="19" height="11" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAALCAMAAACqC0YIAAAAAXNSR0IB2cksfwAAAFRQTFRF////AP//AKr/AL//AL//AMn/AMr/AMr/AMn/AMn/AMf/ALb/AMT/AMr/AMn/AMr/AMn/AMn/AMn/AMr/AMX/AMb/AMz/AMr/AMn/AMn/AMP/ANX/izOYrAAAABx0Uk5TAAEDBBAvPpG9kjIHPbrz9MpsQsA+PzKPuY4vBgJ2cMEAAABnSURBVHicTY0xDoAwDANjMgCiAwMD/38dYmIA0aUJTYraerKsSw5EAEhVqQYE9i1ptw08wNhYWRDP8NyVLdyS26OSpPsX1DK+0WVw7+Q14HIZCm3uVdhkh+BX5W0/N+23CrfbBtvjD0dSNQwZ7c3tAAAAAElFTkSuQmCC"/>
                  <image id="image45_1322_3092" width="19" height="11" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAALCAMAAACqC0YIAAAAAXNSR0IB2cksfwAAAFRQTFRF////AP//AKr/AL//AL//AMn/AMr/AMP/AMn/AMn/ANX/AMr/AMX/AMz/AMb/AMn/AMn/AMf/ALb/AMr/AMn/AMr/AMn/AMn/AMn/AMr/AMr/AMT/5q5SFwAAABx0Uk5TAAEDBBAvPi+OuQaPPjI/kr0yB7rz9MpsQpHAPdwA6ecAAABqSURBVHicTY5LCoAwDEQzKcXPpiDe/3wuRHCjVIixqW3pbAKPl0lABIBUlVpAcJmJdoy9MfGxyYUxEJtcdodcyjjNxX8jPEaBw1z8tezWe07zmnZ5C7OCRS3jJqj3gaDJ6LzqUtdX3fzjB+h2NQyNFpJyAAAAAElFTkSuQmCC"/>
                  <image id="image46_1322_3092" width="19" height="12" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAMCAMAAAC3DnawAAAAAXNSR0IB2cksfwAAAFpQTFRF////AP//AKr/AL//AL//AMn/AMr/AMr/AMn/AL//AMf/AMr/AMn/AMr/AMT/AMj/AMf/AMr/AMn/ANX/AMn/AMn/AMn/AMn/AMz/AMX/AMr/AMf/ALb/AMP/+iYvsgAAAB50Uk5TAAEDBBAvPpG9CEC787o9QV+gvgaOuZ1eMj6PMgcvOs7HuAAAAGtJREFUeJxljksKgDAMRDMtFbpRcev9z+ZOVNAWpEabiik4y5fMB6QCQMxMqJAVlrhixpqHXemC+prsBfYE9fmHHe9fPvdbh+gRQ8mT6AE4yQFT6TVjADnmWTolqDBe20W2FfbN0qE6v2Y/3ZaLNQ0agPJAAAAAAElFTkSuQmCC"/>
                  <image id="image47_1322_3092" width="19" height="12" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAMCAMAAAC3DnawAAAAAXNSR0IB2cksfwAAAFdQTFRF////AP//AKr/AL//AL//AMn/AMr/ALb/AMf/AMr/AMn/AMn/AMP/AMb/AMj/AMn/AMn/AMr/AMn/AMr/AMn/AMn/AMr/AMf/AMT/AMn/AMr/AMf/AL//nmyTHgAAAB10Uk5TAAEDBBAvPgcyj7mOLz9BXp26vJG9vqBfPfO7QAjYknCBAAAAaElEQVR4nGWPsQ6AIAxEOTGRyc3//zx3B5VEqD2q2MQOpLy8lgPhX/A9EETEM8TGiuBTRh7AXtGVSRHyw7SlknSVnDZLJ9HRu1z2xhBnkkMyHcsSl5w4v7YcxugF2Up1mXss/483fq8bGiY0DaKaEBAAAAAASUVORK5CYII="/>
                  <image id="image48_1322_3092" width="18" height="11" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAALCAMAAABFyS02AAAAAXNSR0IB2cksfwAAAGBQTFRF////AP//AKr/AL//AL//AMn/AMr/ALb/AMf/AMr/AMn/AMn/AMP/AMj/AMn/AMn/AMr/ANX/AMr/AMr/AMn/AMn/AMr/AMf/AMj/AMf/AMr/AMn/AMf/AL//AMr/AMT/qPmp9AAAACB0Uk5TAAEDBBAvPgcyj7mOL0FenboGMJG9vqBfM02780AIlD0Fc+qMAAAAZklEQVR4nEWOwQrAIAxDGx0IG3jYef//aTsOtoPgQDuNrOb4miaBmACIqgom8URFYY6lu4BUYY7Q0DtQP0ZQKfORETujHU7GOx8haw5J9Cl1pBz31rsvthHR1dDDTaP9nzMH2mjTB7yYNAyPAnIfAAAAAElFTkSuQmCC"/>
                  <image id="image49_1322_3092" width="19" height="12" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAAMCAMAAAC3DnawAAAAAXNSR0IB2cksfwAAAFRQTFRF////AP//AKr/AL//AL//AMn/AMr/ALb/AMf/AMn/AMn/AMr/AMn/AMn/AMn/AMr/AMn/AMr/AMT/AMr/AMX/AMz/AMb/AMP/AMn/AMn/AMr/ANX/ngnsvwAAABx0Uk5TAAEDBBAvPgcykr2RQmzK9PO6PcA+Mj8vjrmPBlj+UIkAAABoSURBVHicZY6xCoAwEEMbWwoO4qT//3kuDsVBKNbT5opXMMvBI5cEzgTAiYhDhzxZEZgnVB9yuWGeCCqVxgYfZXzv2Xz1JUxFqrLmMXrGwc5Le4eF0UjsZLgy2deN25R9s2yoze/ZTw+fgjcNWsQwkAAAAABJRU5ErkJggg=="/>
                  <image id="image50_1322_3092" width="9" height="8" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAIBAMAAADZ48iGAAAAAXNSR0IB2cksfwAAABVQTFRF/////wD/vwD/xgD/2wD/2gD/2wD/0QkuggAAAAd0Uk5TAAEECRUwcIMe9uMAAAAlSURBVHicY2QAAUZGJf57HxiZnPnPPGBkDuY/fQFKQkQgsmCVABM1DAn0ekWqAAAAAElFTkSuQmCC"/>
                  <image id="image51_1322_3092" width="9" height="9" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJBAMAAAASvxsjAAAAAXNSR0IB2cksfwAAABVQTFRF/////wD/vwD/xgD/2wD/2gD/2wD/0QkuggAAAAd0Uk5TAAEECRUwcIMe9uMAAAAnSURBVHicY2QAAUZGJf57HxiZnPnPPGBkDuY/fQFKQkQgshCVYBIAW3EMCopXxHsAAAAASUVORK5CYII="/>
                  <image id="image52_1322_3092" width="9" height="8" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAIBAMAAADZ48iGAAAAAXNSR0IB2cksfwAAACRQTFRF/////wD/vwD/4wD/1QD/2wD/2AD/3AD/xgD/2gD/2QD/2AD/Y4HQ6QAAAAx0Uk5TAAEECQwVNEEJMHmYWiww8AAAACVJREFUeJxjZAABRkYlhXv3GZlCFO6sY+SYpHAvA0pCRCCyYJUAFk8MCTSIhHUAAAAASUVORK5CYII="/>
                  <image id="image53_1322_3092" width="9" height="8" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAIBAMAAADZ48iGAAAAAXNSR0IB2cksfwAAAB5QTFRF/////wD/vwD/xgD//wD/4QD/2QD/1QD/3gD/2QD/M+fkBgAAAAp0Uk5TAAEECQMRKAYfSQ1Mh1cAAAAlSURBVHicY2QAAUZGJf57HxhZgvhvH2Bkb+K/MQHKhohD1IBJAAR5CgmVt3aVAAAAAElFTkSuQmCC"/>
                  <image id="image54_1322_3092" width="9" height="8" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAIBAMAAADZ48iGAAAAAXNSR0IB2cksfwAAABVQTFRF/////wD/vwD/xgD/2wD/2gD/2wD/0QkuggAAAAd0Uk5TAAEECRUwcIMe9uMAAAAkSURBVHicY2RU4r/3gZHJmf/MA0bmYP7TF6AkRAQiywACEBIAWzUMCaGrsn8AAAAASUVORK5CYII="/>
                  <image id="image55_1322_3092" width="4" height="3" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADBAMAAABG2rP1AAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TC/TqAAr4Hwo4AAAAEUlEQVR4nGNk5GdkkmM04QcAAYUAd3L7+m4AAAAASUVORK5CYII="/>
                  <image id="image56_1322_3092" width="4" height="4" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAEAgMAAADUn3btAAAAAXNSR0IB2cksfwAAAAlQTFRF////////////jkrl/gAAAAN0Uk5TAArV9iAKDwAAABBJREFUeJxjFGBMYRRgZAAAArAAiQJ++NsAAAAASUVORK5CYII="/>
                  <image id="image57_1322_3092" width="4" height="3" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADAgMAAADJmkZVAAAAAXNSR0IB2cksfwAAAAlQTFRF////////////jkrl/gAAAAN0Uk5TCe0AHndy8AAAAA5JREFUeJxjFGFsYlwFAAKmAUQkeGjsAAAAAElFTkSuQmCC"/>
                  <image id="image58_1322_3092" width="4" height="4" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAEBAMAAABb34NNAAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TCQDt5QhDk6ioAAAAEklEQVR4nGNkEGRUlmMEkoIMAAMkAHkzQ/mRAAAAAElFTkSuQmCC"/>
                  <image id="image59_1322_3092" width="4" height="4" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAEAgMAAADUn3btAAAAAXNSR0IB2cksfwAAAAlQTFRF////////////jkrl/gAAAAN0Uk5TAAjcvcrQKQAAABBJREFUeJxjFGBMYRRgZAAAArAAiQJ++NsAAAAASUVORK5CYII="/>
                  <image id="image60_1322_3092" width="4" height="3" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADBAMAAABG2rP1AAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TCe0A5QjGvHK+AAAAEUlEQVR4nGNkZGRk/s+o8g8ABXsCKrnau0kAAAAASUVORK5CYII="/>
                  <image id="image61_1322_3092" width="4" height="4" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAEAgMAAADUn3btAAAAAXNSR0IB2cksfwAAAAxQTFRF////////////////9aUOcwAAAAR0Uk5TAAkI5aT7weoAAAAQSURBVHicYxRh3McowsgAAASaAOv34cnFAAAAAElFTkSuQmCC"/>
                  <image id="image62_1322_3092" width="4" height="3" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADBAMAAABG2rP1AAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5T//YJAO16aC0MAAAAEUlEQVR4nGNkVGIU4WdUEgQAAgYAfeEBaVoAAAAASUVORK5CYII="/>
                  <image id="image63_1322_3092" width="4" height="3" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADBAMAAABG2rP1AAAAAXNSR0IB2cksfwAAABJQTFRF////////////////////////uuV0AgAAAAZ0Uk5T//QLAOoKpJMvuQAAABFJREFUeJxjZFRiFOFnVOUDAAIJAH1WgRqIAAAAAElFTkSuQmCC"/>
                  <image id="image64_1322_3092" width="4" height="3" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADBAMAAABG2rP1AAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TCwoA6d9D1lAkAAAAEUlEQVR4nGNkVGQ0ucfIqAgABakBWr7N0NgAAAAASUVORK5CYII="/>
                  <image id="image65_1322_3092" width="3" height="4" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAEBAMAAAC5A5g0AAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TCwoA6d9D1lAkAAAAE0lEQVR4nGNklGc0ucMIJJX+AQAK0gJ1cu1kyQAAAABJRU5ErkJggg=="/>
                  <image id="image66_1322_3092" width="3" height="3" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAADBAMAAACkBqiMAAAAAXNSR0IB2cksfwAAABJQTFRF////////////////////////uuV0AgAAAAZ0Uk5T//QL6goAvk1gPQAAABFJREFUeJxjZJRnFOZlVNEBAAIDAJTaShWbAAAAAElFTkSuQmCC"/>
                  <image id="image67_1322_3092" width="4" height="3" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADAgMAAADJmkZVAAAAAXNSR0IB2cksfwAAAAlQTFRF////////////jkrl/gAAAAN0Uk5TAArfFvXjEQAAAA5JREFUeJxjFGHMZBQBAAHFAJVaLZMbAAAAAElFTkSuQmCC"/>
                  <image id="image68_1322_3092" width="4" height="3" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADBAMAAABG2rP1AAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TC+kA3wr4uQncAAAAEUlEQVR4nGNkZGRk/s+o8g8ABXsCKrnau0kAAAAASUVORK5CYII="/>
                  <image id="image69_1322_3092" width="4" height="4" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAEAgMAAADUn3btAAAAAXNSR0IB2cksfwAAAAlQTFRF////////////jkrl/gAAAAN0Uk5TAArfFvXjEQAAABBJREFUeJxjFGHMZBRhZAAAAvEAljjpoPMAAAAASUVORK5CYII="/>
                  <image id="image70_1322_3092" width="7" height="6" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAGBAMAAAD9IJlFAAAAAXNSR0IB2cksfwAAABVQTFRF////////////////////////////Z0iB0QAAAAd0Uk5TAAIOLTqVv4vQMtUAAAAdSURBVHicY2QQ/P+Bkcno3zlGYee/eyEEmAuSAACswQwnWGTVuQAAAABJRU5ErkJggg=="/>
                  <image id="image71_1322_3092" width="7" height="7" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAHBAMAAAA2fErgAAAAAXNSR0IB2cksfwAAABVQTFRF////////////////////////////Z0iB0QAAAAd0Uk5TAAIOLTqVv4vQMtUAAAAfSURBVHicY2QQ/P+Bkcno3zlGYee/eyEEmAuWYAACAOmJDChTRB/lAAAAAElFTkSuQmCC"/>
                  <image id="image72_1322_3092" width="8" height="6" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAGBAMAAAAMK8LIAAAAAXNSR0IB2cksfwAAABVQTFRF////////////////////////////Z0iB0QAAAAd0Uk5TAAIOLTqVv4vQMtUAAAAdSURBVHicY2QQ/P+Bkcno3zlGYee/eyEEmAuSAACswQwnWGTVuQAAAABJRU5ErkJggg=="/>
                  <image id="image73_1322_3092" width="4" height="3" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADAgMAAADJmkZVAAAAAXNSR0IB2cksfwAAAAxQTFRF////////////////9aUOcwAAAAR0Uk5TAAkI5aT7weoAAAAOSURBVHicYxRh3McoAgACxADq6LUl+QAAAABJRU5ErkJggg=="/>
                  <image id="image74_1322_3092" width="4" height="3" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAADBAMAAABG2rP1AAAAAXNSR0IB2cksfwAAAA9QTFRF////////////////////kXdTFQAAAAV0Uk5TCQDt5QhDk6ioAAAAEUlEQVR4nGNkEGRUlmNkEAQAAcoAZ4kJmmEAAAAASUVORK5CYII="/>
                  <image id="image75_1322_3092" width="8" height="7" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAHBAMAAADHdxFtAAAAAXNSR0IB2cksfwAAABVQTFRF////////////////////////////Z0iB0QAAAAd0Uk5TAAIOLTqVv4vQMtUAAAAfSURBVHicY2QQ/P+Bkcno3zlGYee/eyEEmAuWYAACAOmJDChTRB/lAAAAAElFTkSuQmCC"/>
                  <image id="image76_1322_3092" width="334" height="41" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAU4AAAApCAYAAABa1cA/AAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAABTqADAAQAAAABAAAAKQAAAAB8BRn7AAAUzElEQVR4Ae2dCZRWxZWA3+umm80oGh0RR8ElGEnUROOoKAOy6Bg3NDZuUWOiQU/UmKDpoWmkUZo+6kjMGTwJesaocY8KInHfM6POkRiNinEZBBdAUaIosjT9v/nu3++9v15Vvf7Xbrqh7jlF1b1161bVrapbt6pe/3ieA6cBpwGnAacBpwGnAacBpwGnAacBpwGnAacBpwGnAacBpwGnAaeBnqsBv+c23bXcaWDL0kBTU9MQ3/fPCIKgOuz5VsT3QX+uMzQxY8aMnTdu3HgDsvtF8qn/hmnTpt0W4Vtq3GtL7bjrt9NAD9TAhRjNX2rtbgPvFMPZ1tZ2MLKPUuuj/i/BneFUldKennK85wXnkz6C3aViHmkQeK96XmaM57WsNOt0lK7TQMPjDCvj0A6My4eeVzPE85o2RjQ9nj59+gksmJ/rdPAf4e0ssdBTSciajKxzYNhdY1pVVVV14mWXXfaMRu8QRd5E5P1OZ6qurh46derUt3V6D8cjT1Ptho2m5pecRq822RWzCSU3rBsUrMq14cLenjdlHqaS4B9ZSaMpdSB3H8+r3i9Xn0ttIg3sr9bLuOzseWsHqTQ9zVz4GNpISzhJ5+0Ix8gdz2KcCY9uNKXYdplM5i4M8YCOZOh5yPuxTgP/fDM0mpZuOtKm0oBiOLf+LYsIb9OB00BSA3iB/wPl0yQ1ix1toaWSMHLnpWa2Z+yIkT43D0+cPXPmzB1A/iUm5BIP5JIuVYYG1lnKfmWhbXGk0HA27obRPHuL673rcDEaWGBhHoGHuLWFbpDgk4eMcUaGRsC41mmkVLS1tfXfUjLvT6E7chEa6N+//xOwH66F+iJEbLas4eNQBuV0xdVFsHqz1eTm37H5dPEsrZvVeIjyeHCXRjdQ+OSe1HZnpvMe2NzcvOOUKVM+0jN0HHnf12ngGwg2I29hdaSONHDppZeuIf/pjni21LzQcPqDbQrg4YAjT+ZG7iY/s+UXR8tgNGe+VFiZxt14oNoFY65cJRRWMj9XW0B/lnnejAIeDiYfRxsSd4L55ascVfLayUIOOPLULOYBRu4KiwF2sym7MgaE6kKMTihbXj6bF7Yjk79J2YG5SjPhmOco5B/seY27q5Qw/T56+j9J4308smaNrKMkhMYrr+GE78RkySx2O//uTfiumocneSr4tSotJX2khf4I3q3tiOldffXV/deuXTuUu9RtLOUKIYlRXoJ85k9xQBnxzIcSxPMuGGpra19taGiwXZMULMPGSHv6QGfcDXiWvExEvfzyyw9EX/0jnPgl8lnL6XD33XdXv/nmm0N4lef+3CtpDfNQuHLAgAHvXHTRRevTazJzmGc+G+8/8xmV2DTLXDfLqBTqDejvcmiL6Wfqg2koOOBhKOlxYjRRTg2X/00yWboApkhHp2FkJvh+EA4UNq7iIOMYeEEwRRbXXPp9BcbhDXs1/jV4Snva8wqhqu1vpc6GJZS6iceYqzzv12vTJTRth729mradxBUKC669zen8Zg518Rj3Nv2qeh19KpM3Oc5Skj5i+NS2tstjEsqC3V4w8T6YSA+RPEpwBfLei8+aNavv6tWrxytlouQc6j6EehKGk0zmXceGkwV9KBN820iQEs9T0tkkj1InU8dFGP7hel4pOHpYSblbCDNId+hUkH8KfJcQDiAUDRs2bLiHQgVfXxRRwfXwnqHxS18GE7KGkbYPR8dyv63CnSCysRkA/+4Qpy1atEjGr5/BUASBer1Vq1ZlkPkUc+Qavh2VuZcKct+NrqYx1qfBZJsXqWXVDKk3hPXUvYD0TGLD4VMWVMQfx3gbXWU0Gw6n1r/LPStKUne3uDGVTlBXH8KpGJVFeHUnp8jvSD8pRdLJ9E0+YG7yvL4MhBhHG0zewfNaX4Dvx+1G08ZTEK3W876FmNJ2/PYafDbUHCDs/hwWp7ZhYtk8l5gBo3lsjOQSqyj3LAbtjhwpTg2X43qMWRJMcN2AC5dY/4ThpI7fUYcs9ooYTakEYIy8SYQ3rrjiit2EYAMW8S+gS/9KMpqhzBqb7HJo8nUD5XWjKRvomegrazRD+TbvWDxnAyg3FuIbhDMJZRlNRbisvzGM34PIx8GxA3lDMZqvk/szQslGU5Muc/8HhBeR/yMtL1pUvulueAXdR+nySsB/0ZdCd4khK6FwpYrc5Hm/GlQpYfnkMEG/iUd5nZ3Pn4suvmHP27TUXr16zU9pwTEp9IgsE1AHvFy2j6am94hk0qvgc1yvUwmW9PcttD8jb1VEJy3e3sQI74R4IMdRMcoGYJyOZsHPMjI2MUE8M9r1e0sz5C+CHrDQ85LQsxhT8YzZrDsNGqlnVIp0qXuHlLxyyWK8b6DuxMmzVyh1jSnd515NFJLYgUy2sin9zsJQdFanC2qdGO0g6HUuzNOTBfynmGR43iUD+vUPsG0KGM9TgqC+3vOuFMMRQuNoPOBDI6zUmDYznv5HjF0bVxKP4ojJ7pkF6h0ZpaOYa5kX4LHdJcmRNAYebJYzgRZC+F5MbE8cTdSo0bLonDlzapYvX27zOGWyR8CVifetCAljMbazNVoWpQ3bk/iunkffEt4m+RfoPAr+V9Kqd6VkGUkfygGE/kYOn0PRnoMJ6DAHjEFDDisr9U5ZpbXCeGZ/gKR7ZYu5wxbvuCRA76fT321KKlxcoUmwP60W4cpmJKcPrqWsIFcPr1hz7EQ55eDUGCB28nyC1J+F0HAGH7DQIlo2ZrH3C4LWxzyv4aFERlGIT8NrbmEBx16AWTwYo9ctPAzE89BvJ7xmlokomQUMWmIyB0GGBVedUl/bVtz5nUjfzo4kKPFBSjpMNp9j0oqlNIkeZ9vrrB6FNPQTQSAGKAEYNS5dgl9DvJXrlpcTmQUhzUeqbKznDDpLDra38eSkAVdLJNMUnc/Y6IbzOxiOQYRlSW7PW7FihXiGcqpQQcbnaYUghlM3vCNbWlq2nTx58j8Uvih5XJRQY9p1b4SH96q2K4RX4RlPWxdHvIXE8NfS90nUMVPnhz4CWmw44R0Abrsa+Bv0FsJ8eLr8e0jq/Cl1J+YDuDyA1IUv6CSLB3TCGrbCS1DFUBc8b9FlDfLGUUYcGdGjCiPJgyV3QgYfpTIo6YnDhg37rwkTJrQptLxJDPF+GGKxeTtpzIeoeGg4q55hcar0bJrlxcfFPqF0wGhcyR3ijchvYuHjBRkwVKdgLO6A9zSdbuINMugatDGBW5ZpRBVdgBf2Mn37jUokvZuGVwiVBdJ0Hno4ijoHJoX6eyTxYD9zEwmuQxeXJPk2HcakFcN5uaUFx0C7XqfDy0ZmwD0sYjaEdiAtL7VLwQZHNGJ//fr1dcSGTGi2Y/oryIi9d+5VZTyrCQngTzHr+KuiooymCED2BqIW4sOIE/XTx92FR4F9lXSUzPBCPpYX8pURoStj2r0r9c2y1DmNPDFw5YDtaulh5B5VotDHMGA3Y8B0p+lrXIF8HZmfRHLRvWE/yPstddvmTVQsNeaPPWQe/RIGbFACdlGxqnZkxrsYK9kZKg4YC3Zq7zwEMzj125gVJD3G9vzMnSZfoZRe5g5gFM08bpA8WztMrtIo2UX3lKUsHrAK/nYq1p72nzBpm44iE4vabRuT4S0zAWV+jddbi/G9R6eBi9epw0k6IZRpLEhkJsrzWcnX9LLgH2A037TQiyFxCjMg4RnRlm0NDub/JjSaW9OeuwiJ0xn4f3OvKR5wuaDN46y428oRyjx7nfIf6jLY+HQbIn1LAPp/JEEoHnnSUiTRx9DjFLbV5wbB1vLSLLt8xYHODOIeUTynqZrwWg0H9ZeYtEIphXz76X9qSgv6mTSV0rA/x3xjkFSOjtM2+dFnV1FJ87MwvuH8JMrtRvF9tOUCrT1j5T5z4sSJrRGdMR+HR6AbsFXQjM0AQ3cfHsbFUdkwHo2h3IrwZUSHbwR8xlhR17yIJ4wt88r7WOMpGqWej2i/Xi7RR/J76wzgneVpDkc/TZb6ItLOJMRDHhQRwvj9mpoaPv3LHXu1/GJQQ9eMk5wgyoVVCJD2x4Bu9TVYE2fmEqtzyZJSUq8OfVWCYjj/cz0ZE4Jg8jEYrhMI+3K83gfF2iaBKqOIdCCvnJrhlFnoazKq4sWnZRSABvERMJ25lr4WUkUdR72h6CO4DD1gOI0Fk15F5XIs1xGVE16ipPsppxvOftxnjoYe7/ZMctsxfS7r3BgjPAx5EZcNTY5iEchfJslG/vuIgNEUI6DD0tATjunw6ZMqziszYbS9QHmdNXkOoX4JxcAKmI+YwmNfMYU64LXpRK42yoV1ugDGVdejMc7MO4Omy+kI52404FvUjlg8xXBGfC0LSEnIgrm5RjkdxU3sQBseZNKPUbnA9wyCSzgu/MeaHB0f14A2C81gSiEU4nGmFDXIQ2+mdaebht1g3NIIT9Jh2dUTuz8Tlk0mZzhJG4aTOfBH6Gkgx+1z1MzQ+MaGkzyb4bxXLePSeTUgV1WL83IVzhBe+SUK2GgJhlIQPNkybEMpNdrLdErnuEpntwmutVfZ55/s9O5Gbdyr3Wh2t3Zt+vaEHqPtawtOKu0AzyhS24VoFH2BIXwsQvQYo3qfTgMfh6ythE4sx81vS1oFFpN+TFezXdrUwA8hyeONxXEymbs5xfB2mUe6V1pUF+rq6gyZuoBOVFyVHAds0MdG7H60DJ8nJTc3Fv0Svt441POuWlZ8exv4JMn/WfHlum2J+bSMz5gSsDN/SbM3DzBvQDW8TWj3slhTJ+XAgQMf55tP3ZOV+7PxhFvR37GMAckEfCrH/AQFBGMqf3NskHVCsTj1c33TreB5WvNoBy2S9h5B0L+OORxaC+FSQk+GLyyN72ehVZTUiYbTdg0gbZcf2egRYHkZ9W8pzWh2q/7Knal2oV5T9D123759H+AHM9qQlTAkGCs5rovhPImgQ0fHdE8eljCsf6LQqVpBMcK3YrRsx/Q0b9N2x6Z7wFo1+VGMt/zljc5YyIW5XqZS+HPorCmPsKmwzIZH37gvgf4E4eE85btztuGgMT6yUcg8KgnEY82n0k46qmfbq+9wYSeqZbH1ALDdvXrre0DD8zTRV+6XI9bM0ChVaFxfXy87/TM6vxg3vsGTx4qBWt4XO+20U+oxXeG1Hdflg3U5ro9V+KKkjd/DgP8jYlDiXZCzvYIXnaR/+1kKfWahdSsSnx1dSIOetTTqD+XqxCKzK0l/t1R2Pn0aL7/SZMnLS2KMk0dNS4nQ46zfFcfhLPJLqsguN7hYP+q287V+bOHvjiTLa3awd+kN9RMPKaXLKbdksIxxGZCU4v+7501+gZObvGoXDOzM8jH8aK3AKIwWnrkBc9VPlYzckMCf/j1k+/k6shcS9CPYlyyQB1NkvQddXEN1EUj6OsqcSjDO8SlyYjJlDgM5IybkEm/nkt0zFXpRcrWyiKCepmQjuYMwjtDjgO86n+D3AvR2y4lqLi/jnzFmr+iZ+XA+ss/HEh2ne03Ev2rIy10mAyecd/nTvs/LFNNFxeU3LdU1B+b7P+RPFr9BA54k2I6CKW3Leq/Hp2R2NfllKhymVkrrDguCKgxqw/9CVw0KXlsthiL3HaVajkk7j989vFalhek9dRq6u0en2fDw5+seIO9YLX8vDRf0IQstS2LBrCM8B8KddAImgE0g72/ENq80wRwiVcT7E/rbMqHJfOj2QJ9XYBTkvxdeoDV2LHkXE2xjqbF2L1T+oIF230mrTrG0TByEkRZ62aTQ44wMaNny8gm4LR9D98n3bUcAMZ4H0UYJFQDf2CorIDSPiKwBO01nwnjWsjWM0OlBsG4gtHd0uuCNjY1LmbSvktzHlq/Qvijyl3fEyOqGUxEXJ+fFKUuCsboGI6Ebzohz3yhRZrwQHeCt9wxgHP5Ee2fT2gu0Fl8J/XHCaxq9J6Dn0sgdCYd3VWNlJwXM2+52euX+ZQK/yJuEvOL1EHjrRbTyYSc3dlUny7eIb57LWMy3ZJRKkt0+H9yYj0HLF8OZ92QiD1RauQSKkZgL4boEsbLIR3jd4sH2NJhEg3UDycaZ/eqhT0/rDMb+S8Z6DO2uI8hmupjQqU5JaDg7z/NhkbYSrufIN4oj31d0SAfLXWL2F1t0Pgtua3dNq4VRI31lU6rWjj/C44+g7c9rhSuIGn+HrrVBqvIL6E+xTXr7RPrVSFiev2Qvm67iYtxJ/gbkg5hgJuSucYZJTqewEGSeXJzOkc2ZFD5QdciGLPGsTidU0itcibxrevfuLZ9ecf1kgGUcC53ThiyVYBsLW11qGSONTuSa6QeEtVrmUPBZCs0m20azzVEbnyK6oKRNho0mJ0F5CZcfjzmBsAd//dObGgbzWdpwYvFEiw02WxU3Ojyqb5zD52nroFbqcQhR/jKuyzjG9eZy1moww0YE5+PZqX8yxqRseStuYYeJzE94APtOjqXqfeoq4PHpKj7EbjibckNyZYOFuXSUmiGLYjg2ZjRe+cEE2ZUrBP7r2JOnk8Kqfs7P4o3K0eRn+WrlLq7CIJuC10yYSd+GME4sGPmFH1+OOypwB9i8RCXo6fBOUsZvGJNX/hsMP+IB/xT8NiZy0Z41ZW4iLELWEYRwntJC319PeJhvN/8a1ZMvRs7t8NxO3I+FtBePV4ORsQtt+3q+spIPrxiYD4iXUPZd5CzLU+5R8usJ8WMW9d6fp0zebLzb2dT/Ge2O1mmGH5e+OW9BCwN9eItwHFmHadkrFPw5+vwr6ovvdm39gIc1HMRrGPxz2lnw+Cj1JZLUVY8c8SQj+ISN6jXGPsJT4/Dn5N6DQULRgG469LzjSV60ZFfAacBpwGlgM9RA+P8X6Q7Y5xjTAVF3q6KEi50GnAacBpwG+Pmf1lbdCxe1JE5NznC6meI04DTgNBBqgD/eOJBrB9uDojw4xRDfHcUUl3AacBpwGuhBGuAILfe8Z1aiydyppon5i5rhPE5VGy7tNOA00BM1sEcnN1pe8m9Q63Aep6oNl3YacBpwGkhqQP53uHP4TvQdlew8TlUbLu004DTQEzVg+7613H7It67z+STqIIym8cmX8zjLVa8r7zTgNLCpNTCdBvxrOY3Aq2zjUWg58VLipfyS17uF/ChNOXW6sk4DTgNOA1uUBv4ftKQ6bsHj1AsAAAAASUVORK5CYII="/>
                  </defs>
                  </svg>

                <!-- <img class="mb-3" src="<?php echo get_template_directory_uri();?>/images/metwo.svg" alt="" />  -->
              </div>
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


<!-- Calculate Section -->

<div class="w-full relative calculate-sec grid items-center  pt-16 md:pt-20">
    <div class="container mx-auto md:px-0 px-10 text-center  items-center ">
      <img src="<?php echo get_template_directory_uri();?>/images/wordpress-logo.svg" class="pb-8 mx-auto">
      <h3 class="text-5xl font-bold text-dark-black px-96 pb-10"> Calculate the cost of your Wordpress Developer </h3>

      <div class="header-buttons mt-6">
        <a href="https://smartworking.io/" class="button button-small  px-8 py-4 font-bold rounded  text-white text-lg get-started-banner-home">Pricing</a>
      </div>


      <div class="bg-white cal-bg mt-20">
        <h3 class="text-dark-black font-bold text-5xl pb-5"> $16 - $24? </h3>
        <h3 class="text-dark-black font-medium text-xl"> Per Developer, Per hour </h3>
      </div>

    </div>
</div>    

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