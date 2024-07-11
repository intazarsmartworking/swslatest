<?php
/**
 * Template Name: Pricing Page
 *
 * @package sws
 */

get_header('second');
?>


<div class="w-full relative  grid items-center pb-28 pt-24" style="background-image: url('<?php echo get_template_directory_uri();?>/images/Homepage.png');">
  <div class="container md:px-0 px-10">
  
  <div class="flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold text-[56px] mb-4 text-white">Flexible pricing,</h1> 
        <span class="text-dark-orange text-[56px]">without the small print</span> 

        <p class="mb-12 text-lg w-max  rounded-full p-3 text-white ">Hire developers from as low as €16/hr</p>
  </div>

  
	  
   <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-16  md:mb-24 assemble-section-bg rounded-3xl relative">
      <img src="<?php echo get_template_directory_uri();?>/images/connect-skill.svg" class="join-skill">
      <div class="bg-white py-4 md:py-10 px-4 md:px-10 rounded-xl">
        <h3 class="text-dark-black text-xl font-bold"> Role </h3>
        <div class="flex items-center border-2 border-gray-300 rounded-lg p-2 bg-white my-5">
            <svg class="w-6 h-6 text-gray-500 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m2.35-6.65A7 7 0 1114 4a7 7 0 015 2.35 7 7 0 010 9.9z"></path>
            </svg>
            <input id="searchInput" type="text" class="flex-grow px-2 py-1 text-gray-700 focus:outline-none focus:ring-0 border-none" placeholder="Search skills" oninput="filterSkills()">
            
        </div>

        <div id="skillsContainer" class="grid grid-cols-2 md:grid-cols-6 gap-4 text-center overflow-y-scroll  custom-scrollbar pr-5">
            <div class=" flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/android.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> Android </h4>
                <svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/angular.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> Angular </h4>
                <svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/aws.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> AWS </h4>
                <svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/azure.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> Azure </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/devops.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> DevOps </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/django.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> Django </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/docker.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> Docker </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/ios.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> iOS </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/java.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> Java </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/kubernetes.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> Kubernetes </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/laravel.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> Laravel </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/mongodb.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> MongoDB </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/mysql.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> MySQL </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/nodejs.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> Node JS </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/django.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> Django </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/docker.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> Docker </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/ios.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> iOS </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                <img src="<?php echo get_template_directory_uri();?>/images/java.svg" class="pb-4">
                <h4 class="text-xs font-normal text-dark-black"> Java </h4>
				<svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                </svg>
            </div>

           

            
        </div>

      </div>
	  <div class="bg-white mb:pb-5 md:pt-10 px-4 md:px-10 pt-5 pb-3 rounded-xl">
        <img src="<?php echo get_template_directory_uri();?>/images/smartworking-black.svg" class="mx-auto">

        <div class="rounded-2xl px-6 pt-6 pb-3 border-pattern my-7">
            <h3 class="text-dark-orange font-bold text-2xl"> Share your requirements </h3>

        <form method="post">

        <input type="text" id="skillsInput"  name="skills"  readonly
        class="mt-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-dark-black focus:border-dark-black  sm:text-sm">

            <input type="text"  name="fullname" placeholder="Full Name" 
            class="mt-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-dark-black focus:border-dark-black  sm:text-sm">


            <input type="email"  name="email-address" placeholder="Email Address" 
            class="mt-4 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-dark-black focus:border-dark-black  sm:text-sm">
            
            <button type="submit" class="w-full bg-dark-orange text-white mt-4 py-2 px-4 rounded-md hover:bg-dark-black focus:outline-none focus:bg-dark-black transition duration-200">Submit Now</button>
        </form>

        <h4 class="text-center text-dark-black text-sm font-semibold py-6"> Our recruitment specialist will be in touch soon! </h4>
        </div>
		
		
		<div class="rounded-2xl px-6 pt-6 pb-3 border-pattern my-7">
         <div class="flex">
		  <div class="pr-4">
			<img class="mb-7 w-48" src="<?php echo get_template_directory_uri();?>/images/formtestimonial.svg" alt="">
		  </div>
		  <div>
			<p class="text-xs font-normal text-dark-black pb-3"> Ahamd Ekstrom Bothman </p>
			<p class="text-base text-dark-black"> <b> SmartWorking brings all of our teams together into one place </b> so that they can stay on track, collaborate and communicate. </p>
			</div>
		 </div>
        

        
        </div>

      </div>
    </div>	
  </div>
</div>

<!-- Our Add-ons  -->

<div class="container mx-auto md:px-0 px-10 pt-2 overflow-hidden mb-96">

    <div class="mb-20 mt-10">
        <h3 class="text-center small-intro"> Add-ons </h3>
        <h1 class=" text-3xl sm:text-4xl lg:text-5xl 3xl:text-58 font-medium gradient-text text-center px-0 md:px-96 md:leading-tight">Our Add-Ons </h1>
    </div>
    
    <div class="gradient-paragraph rounded-3xl p-3 text-white mb-7">
       <div class="flex justify-between items-center">
       <div class="flex items-center">
          <img  src="<?php echo get_template_directory_uri();?>/images/mini-laptop.svg" alt="">
          <h4 class="text-2xl font-bold pl-7 flex-grow"> Devices (Laptop, Mouse, Headphones, Internet, & so on) </h4>
       </div>   
          <h3 class="text-3xl pr-5"> $45/m </h3>
       </div>
    </div>

    <div class="gradient-paragraph rounded-3xl p-3 text-white mb-7">
       <div class="flex justify-between items-center">
       <div class="flex items-center">
          <img  src="<?php echo get_template_directory_uri();?>/images/mini-laptop.svg" alt="">
          <h4 class="text-2xl font-bold pl-7 flex-grow"> Devices (Laptop, Mouse, Headphones, Internet, & so on) </h4>
       </div>   
          <h3 class="text-3xl pr-5"> $45/m </h3>
       </div>
    </div>

    <div class="gradient-paragraph rounded-3xl p-3 text-white mb-7">
       <div class="flex justify-between items-center">
       <div class="flex items-center">
          <img  src="<?php echo get_template_directory_uri();?>/images/mini-laptop.svg" alt="">
          <h4 class="text-2xl font-bold pl-7 flex-grow"> Devices (Laptop, Mouse, Headphones, Internet, & so on) </h4>
       </div>   
          <h3 class="text-3xl pr-5"> $45/m </h3>
       </div>
    </div>

    <div class="gradient-paragraph rounded-3xl p-3 text-white mb-7">
       <div class="flex justify-between items-center">
       <div class="flex items-center">
          <img  src="<?php echo get_template_directory_uri();?>/images/mini-laptop.svg" alt="">
          <h4 class="text-2xl font-bold pl-7 flex-grow"> Devices (Laptop, Mouse, Headphones, Internet, & so on) </h4>
       </div>   
          <h3 class="text-3xl pr-5"> $45/m </h3>
       </div>
    </div>

    <div class="gradient-paragraph rounded-3xl p-3 text-white mb-7">
       <div class="flex justify-between items-center">
       <div class="flex items-center">
          <img  src="<?php echo get_template_directory_uri();?>/images/mini-laptop.svg" alt="">
          <h4 class="text-2xl font-bold pl-7 flex-grow"> Devices (Laptop, Mouse, Headphones, Internet, & so on) </h4>
       </div>   
          <h3 class="text-3xl pr-5"> $45/m </h3>
       </div>
    </div>

    

</div>


<!-- Support Section -->

<div class="container mx-auto md:px-0 px-10 pt-2 overflow-hidden" style="margin-top:100px;">

        <h3 class="text-center small-intro"> Support </h3>
        
        <div class="flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold text-[56px] mb-4 text-white">How should we interact and take</h1> 
        <span class="text-dark-orange text-[56px] pb-16">our partnership forward?</span> 

        
  </div>
  
   <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
     
   <div class="rounded mr-5">
		<img class="w-full" src="http://smartworking.local/wp-content/uploads/2024/05/blogimg1.svg" alt="">
        <div class="py-4 bg-white partnership">
            <div class="text-2xl text-[#050403] leading-9">If you have questions, schedule a 30-minute call & talk to our consultant.</div>
            <div class="header-buttons mt-6">
                <a href="https://smartworking.io/" class="button button-small  px-8 py-4 font-bold rounded-xl text-white text-lg get-started-banner-home">Get Started</a>
            </div>
        </div>
                
    </div>
			
	<div class="rounded mr-5">
		<img class="w-full" src="http://smartworking.local/wp-content/uploads/2024/05/blogimg1.svg" alt="">
        <div class="py-4 bg-white partnership">
            <div class="text-2xl text-[#050403] leading-9">If you have questions, schedule a 30-minute call & talk to our consultant.</div>
            <div class="header-buttons mt-6">
                <a href="https://smartworking.io/" class="button button-small  px-8 py-4 font-bold rounded-xl text-white text-lg get-started-banner-home">Get Started</a>
            </div>
        </div>
                
    </div>
    
    <div class="rounded mr-5">
		<img class="w-full" src="http://smartworking.local/wp-content/uploads/2024/05/blogimg1.svg" alt="">
        <div class="py-4 bg-white partnership">
            <div class="text-2xl text-[#050403] leading-9">If you have questions, schedule a 30-minute call & talk to our consultant.</div>
            <div class="header-buttons mt-6">
                <a href="https://smartworking.io/" class="button button-small  px-8 py-4 font-bold rounded-xl text-white text-lg get-started-banner-home">Get Started</a>
            </div>
        </div>
                
    </div>
		  
	   
    </div> 

    
  
</div>


<!-- Testimonial Section -->
<?php if (have_rows('block')) : ?>
    <?php while (have_rows('block')) : the_row(); ?>

    <?php get_template_part( 'template-parts/client-testimonial' );?>

<?php endwhile; ?>
<?php endif; ?>


<!-- Blog Section -->
<div class="mt-24">
<?php get_template_part( 'template-parts/home-blog' );?>
</div>

<!-- FAQ Section  -->
<div class="w-full relative bg-dark-black grid items-center pb-28 pt-16 md:pt-36">
    <div class="container mx-auto md:px-0 px-10">


        <div class="flex flex-col items-center justify-center">
            <h1 class="text-4xl font-bold text-[56px] mb-4 text-white">Common questions</h1> 
            <span class="text-dark-orange text-[56px]">and their answers</span> 

            <p class="mb-12 text-lg w-max  rounded-full p-3 text-white ">Didn’t answer your question</p>
        </div>

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

<!-- CTA Section -->

<div class="w-full  relative bg-dark-black grid items-center pb-28">
  <div class="container mx-auto md:px-0 px-10 flex items-center ready-hire-bg h-96">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="pl-7 pr-7 md:pl-48 md:pr-12 justify-self-center self-center mb-10 pt-40 ">
        <h1 class="text-center md:text-left text-3xl md:text-5xl lg:text-[72px] 3xl:text-58 font-medium text-white  md:leading-tight mb-4">Ready to Hire
		a Developer?</h1>
        <span class="text-center md:text-left md:text-[24px] lg:text-[24px] text-white text-base"> It is quick and easy with Smart Working </span>
        
        <div class="header-buttons mt-16 mb-10 text-center md:text-left pb-20">
			<a href="https://smartworking.io/" class="button button-small  px-8 py-4 font-bold rounded-xl text-dark-orange text-lg bg-white">Schedule a Call</a>
		</div>

      </div>
      <div class="px-6 py-10 flex justify-self-center min-w-[538px]">
      <img src="http://smartworking.local/wp-content/uploads/2024/06/hire-dev-1.svg" alt="" class="w-auto">
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>