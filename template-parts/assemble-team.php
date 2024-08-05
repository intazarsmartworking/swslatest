<div class="w-full relative  grid items-center set-margin" style="background-image: url('<?php echo get_template_directory_uri();?>/images/Homepage.png');">
  <div class="container md:px-0 px-10">
  <h3 class="text-center small-intro"> Make Team </h3>
  <h1 class=" text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0  md:leading-tight">Let's Assemble<br><span class="text-5xl sm:text-3xl lg:text-[56px] 3xl:text-58 text-dark-orange"> Your Team </span></h1>
  <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 "> Our goal is pair fantastic talent with perfect opportunities for mutual success. </p>
	  
    <div class="assemble-section-animation my-16  md:mb-24">
        <div class="video_border-wrap">
            <div class="video_border-gradient"></div>
            <div class="video_border-gradient"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 assemble-section-bg rounded-3xl relative px-0">
                <!-- <svg class="svg" height="100%" width="100%" xmlns="http://www.w3.org/2000/svg">
                    <rect rx="24" ry="24" class="line" height="100%"  width="100%" stroke-linejoin="round"/>
                </svg> -->
            <img src="<?php echo get_template_directory_uri();?>/images/connect-skill.svg" class="join-skill">
            <div class="bg-white py-4 md:py-10 px-4 md:px-10 rounded-xl">
                <h3 class="text-dark-black text-xl font-bold"> Choose the language that will empower your dream team! </h3>
                <div class="flex items-center border-2 border-gray-300 rounded-lg p-2 bg-white my-5">
                    <svg class="w-6 h-6 text-gray-500 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m2.35-6.65A7 7 0 1114 4a7 7 0 015 2.35 7 7 0 010 9.9z"></path>
                    </svg>
                    <input id="searchInput" type="text" class="flex-grow px-2 py-1 text-gray-700 focus:outline-none focus:ring-0 border-none" placeholder="Search..." oninput="filterSkills()">
                    
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
                        <img src="<?php echo get_template_directory_uri();?>/images/php.svg" class="pb-4">
                        <h4 class="text-xs font-normal text-dark-black"> PHP </h4>
                        <svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                        <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div class=" flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                        <img src="<?php echo get_template_directory_uri();?>/images/powerbi.svg" class="pb-4">
                        <h4 class="text-xs font-normal text-dark-black"> Power BI </h4>
                        <svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                        <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                        <img src="<?php echo get_template_directory_uri();?>/images/python.svg" class="pb-4">
                        <h4 class="text-xs font-normal text-dark-black"> Python </h4>
                        <svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                        <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>

                    <div class="flex flex-col items-center justify-center py-2 px-2 rounded-lg skill-border cursor-pointer" onclick="toggleSkill(this)">
                        <img src="<?php echo get_template_directory_uri();?>/images/reactjs.svg" class="pb-4">
                        <h4 class="text-xs font-normal text-dark-black"> React </h4>
                        <svg class="hidden w-4 h-4 mt-1 text-red-600 fill-current cursor-pointer cross-icon-position" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" onclick="deselectSkill(event)">
                        <path fill-rule="evenodd" d="M15.293 4.293a1 1 0 00-1.414 0L10 8.586 6.707 5.293a1 1 0 00-1.414 1.414L8.586 10l-3.293 3.293a1 1 0 001.414 1.414L10 11.414l3.293 3.293a1 1 0 001.414-1.414L11.414 10l3.293-3.293a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>

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
</div>
