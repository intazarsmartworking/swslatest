<?php
/**
 * Template Name: Blog
 *
 * @package sws
 */

get_header('second');
?>
 <!-- <div class="w-full relative grid pb-36 pt-24">
 <div class="container mx-auto md:px-0 px-10 py-20">
	 <div class="grid lg:flex">
		<div class="w-full text-left">
			<div class="grid gap-8 relative">
				<h1 class="text-3xl sm:text-4xl lg:text-3xl 3xl:text-58 font-medium text-white leading-tight">Trending <span class="text-dark-orange">Posts</span></h1>
				<p class="text-white lg:text-xl font-medium">Lorem Ipsum is simply dummy text of the printing and <br> typesetting industry.</p>
				  
			</div>
		</div>
	  </div>
 </div>
 
 <div class="container mx-auto md:px-0 px-10 pt-2 overflow-hidden">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
		<?php
			$blog_args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 3,
			);
			$blog_posts = new WP_Query($blog_args);	
			while ($blog_posts->have_posts()) :
			$blog_posts->the_post();
			$image_id = get_post_thumbnail_id();
			$image_src = wp_get_attachment_image_src($image_id, 'full'); 
		?>	
	   <div class="relative overflow-hidden group">
         <a href="<?php the_permalink(); ?>" class="absolute inset-0 z-10"></a>
		 <div class="rounded  shadow-lg bg-cover bg-center bg-no-repeat bg-dark-orange height-blog transition duration-300 transform group-hover:scale-105" style="background-image: url('<?php echo esc_url($image_src[0]); ?>');"></div> 
		 <div class="absolute bottom-0 left-0 right-0 px-6 py-4  bg-gradient-to-t from-black to-transparent">
            
                <div class="font-semibold text-white text-xl mb-2"><?php the_title();?></div>
                <p class="text-white text-base hidden group-hover:block duration-300 pt-5 pb-5">
			        <?php echo get_the_excerpt();?>
			    </p>
                <div class="flex items-center text-sm font-semibold text-white">
                    <span class="text-white mr-2">By <?php echo get_the_author();?></span>
                    
                    <span class="text-white"><?php echo get_the_date('F j, Y');?></span>
                </div>
            
            
                
         </div> 
         <div class="absolute inset-0 bg-dark-orange bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300"></div>
        </div>
	   <?php endwhile;  wp_reset_postdata();?>
    </div>  
	

 </div>

 </div>

			<div class="w-full mb-20 relative bg-cover bg-center grid items-center" style="background-image: url('http://localhost/sws/wp-content/uploads/2024/05/bg_image.png')">
				 <div class="container mx-auto px-10">
					<div class="grid lg:flex lg:justify-between gap-14">
						<div class="relative items-end">
						   <img class="mx-auto stay-update-img" src="<?php echo get_template_directory_uri();?>/images/stay-update.png" alt="image">
						</div>
				 
						<div class="w-full py-20 pr-36">
							<div class="grid gap-8 relative z-10">
							<h1 class="text-3xl sm:text-4xl lg:text-4xl 3xl:text-58 font-bold text-white leading-tight"> Stay <span class="text-dark-orange"> Updated! </span></h1>
								<p class="text-white lg:text-2xl font-semibold">Weekly delivery of expert insights on business, tech, and innovation.</p>
								

								<input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-96 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  placeholder="Your email address">
          

								<div class="header-buttons">
									<a href="" class="button button-small bg-dark-orange px-8 py-2 font-semibold rounded-md text-white">Subscribe Here</a>
								</div>   
							</div>
						</div>
					</div>
				 </div>
			</div>


<div class="w-full relative bg-white grid mb-24">
 <div class="container mx-auto md:px-0 px-10 pb-20">
	 <div class="grid lg:flex">
		<div class="w-full text-left">
			<div class="grid gap-8 relative">
				<h1 class="text-3xl sm:text-4xl lg:text-3xl 3xl:text-58 font-bold text-dark-black leading-tight"> Most <span class="text-dark-orange"> Popular </span></h1>
				<p class="text-dark-black lg:text-xl font-semibold">Lorem Ipsum is simply dummy text of the printing <br> and typesetting industry.</p>
				  
			</div>
		</div>
	  </div>
 </div>
 
 <div class="container mx-auto md:px-0 px-10 pt-2 overflow-hidden">
 
    <div class="slick-slider-most-blog">
		<?php
			$blog_args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 6,
			);
			$blog_posts = new WP_Query($blog_args);	
			while ($blog_posts->have_posts()) :
			$blog_posts->the_post();
			$image_id = get_post_thumbnail_id();
			$image_src = wp_get_attachment_image_src($image_id, 'full'); 
		?>	
	   <div class="rounded bg-white mr-5 border-2 border-slate-200 hover:shadow-lg hover:border-0 transition-shadow duration-300">
		  <img class="w-full" src="<?php echo esc_url($image_src[0]); ?>">
		  <div class="px-6 py-4">
			<div class="font-bold text-xl mb-2"><?php the_title();?></div>
			<p class="text-gray-700 text-base">
			  <?php echo get_the_excerpt();?>
			</p>
		  </div>
		  <div class="px-6 py-4">
			<span class="inline-block py-1 text-sm font-semibold text-gray-700">By <?php echo get_the_author();?> ● </span>
			<span class="inline-block py-1 text-sm font-semibold text-gray-700"> <?php echo get_the_date('F j, Y');?> </span>
		  </div>
	   </div>
	   <?php endwhile;  wp_reset_postdata();?>
    </div>  


    <div class="blog-prev-arrow">
      <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
    </div>

    <div class="blog-next-arrow">
    <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
    </div>	

 </div>
 </div>
 





 <div class="w-full relative bg-faq-bg grid">
 <div class="container mx-auto md:px-0 px-10 py-20">
	 <div class="grid lg:flex">
		<div class="w-full text-left">
			<div class="grid gap-8 relative">
				<h1 class="text-3xl sm:text-4xl lg:text-3xl 3xl:text-58 font-bold text-dark-black leading-tight">All <span class="text-dark-orange">Blogs</span></h1>
				<p class="text-dark-black lg:text-xl font-semibold pb-10">Lorem Ipsum is simply dummy text of the printing and <br> typesetting industry.</p>
				  
			</div>
		</div>
	  </div>

	  <div class="grid grid-cols-2 lg:flex gap-10">
		 <div class="col-span-2">
		 
		 <?php
			$blog_all = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			);
			$blog_postsall = new WP_Query($blog_all);	
			while ($blog_postsall->have_posts()) :
			$blog_postsall->the_post();
			$image_id_new = get_post_thumbnail_id();
			$image_src_new = wp_get_attachment_image_src($image_id_new, 'full'); 
		 ?>
		 <div class="flex bg-white border-2 border-gray-300 mt-4 mb-4">
          <img class="" src="<?php echo esc_url($image_src_new[0]); ?>">
		  <div class="pl-3 pr-40">
			<h4 class="text-light-black text-lg font-semibold pt-10"> <?php the_title();?> </h4>
			<h5 class="text-light-black text-sm font-regular"> <?php echo get_the_excerpt();?> </h5>
			<span class="inline-block py-1 text-sm font-regular text-light-black pt-5 pb-5"><?php echo get_the_author();?> ● </span>
			<span class="inline-block py-1 text-sm font-regular text-light-black"> <?php echo get_the_date('F j, Y');?> </span>
		  </div>
		 </div>
		 
		 <?php endwhile;  wp_reset_postdata();?>
		 
		 </div>

		 <div>
			<div class="bg-dark-black text-center rounded-xl mt-4 pb-14">
			  <p class="text-white lg:text-xl font-regular pt-10 pb-10"> Ready To Hire A Developer? </p>
			  <p class="text-white lg:text-sm font-regular pb-10"> It is quick and easy with Smart Working </p>
			  <a href="https://smartworking.io/" class="button button-small bg-dark-orange py-2 px-8 font-semibold rounded-md text-white" target=""> Let’s Connect </a>
			</div>
			
			<div class="bg-dark-orange text-center rounded-xl mt-8 pb-14">
			  <p class="text-white lg:text-xl font-regular pt-10 pb-10"> Ready To Hire A Developer? </p>
			  <p class="text-white lg:text-sm font-regular pb-10"> It is quick and easy with Smart Working </p>
			  <a href="https://smartworking.io/" class="button button-small bg-white py-2 px-8 font-semibold rounded-md text-dark-orange" target=""> Let’s Connect </a>
			</div>
			
		 </div>
	  </div>

 </div>
</div> -->

<section class="w-[100%] min-h-[600px] py-[4rem] lg:py-[10rem]">
    <div class="w-[100%] max-w-[1280px] mx-auto px-[20px] lg:px-[0px]">
		<div class="max-w-[600px] relative mx-auto text-center">
			<div class="block mb-5"><span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " >BLOGS</span></div>
			<h1 class="text-white text-[25px] lg:text-[56px] font-medium mb-0">Our ideas and insights</h1>
			<h1 class="text-[#FF4D02] text-[25px] lg:text-[56px] font-medium ">on Hire Developers</h1>
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-10 bg-white rounded-[30px] overflow-hidden mt-[120px]">
            <div class="grid-item col-span-6">
				<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-head.png">
            </div>
            <div class="grid-item col-span-4 p-[40px]">
                <p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
				<p class="text-[24px] text-[#050403] font-bold mb-4" >UX review presentations</p>
				<p class="text-[16px] text-[#050403] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
				<div class="w-[100%] min-h-[100px] mt-10">
					<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
					<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
					<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
				</div>
				<div class="d-block">
					<a href="#" class="inline-block px-[30px] py-[10px] mr-3 text-[14px] rounded-[30px] border border-[#050403] text-[#050403] hover:bg-[#050403] hover:text-[#ffffff]" >Read more</a>
				</div>
            </div>
        </div>

		<div class="grid grid-cols-1 lg:grid-cols-10 gap-5 items-center mt-[100px]">
            <div class="grid-item col-span-6">
				<h1 class="text-white text-[25px] lg:text-[56px] font-medium mb-0">Get the latest</h1>
            </div>
            <div class="grid-item col-span-2">
				<input type="text" placeholder="Search" class="form-input w-[100%] h-[50px] text-white border-[#632A0B] bg-[#632A0B] rounded-[12px]" />
			</div>
			<div class="grid-item col-span-2">
				<select class="form-select w-[100%] h-[50px] border-[#632A0B] text-white bg-[#632A0B] rounded-[10px] ">
					<option>option 1</option>
					<option>option 2</option>
					<option>option 3</option>
					<option>option 4</option>
				</select>
			</div>
        </div>


		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 blog-box mt-[65px]">
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
						<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
					<p class="text-[24px] text-[#ffffff] font-bold mb-4" >UX review presentations</p>
					<p class="text-[16px] text-[#ffffff] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
					<div class="w-[100%] mt-10">
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
					</div>
				</div>
			</div>
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
						<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
					<p class="text-[24px] text-[#ffffff] font-bold mb-4" >UX review presentations</p>
					<p class="text-[16px] text-[#ffffff] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
					<div class="w-[100%] mt-10">
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
					</div>
				</div>
			</div>
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
						<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
					<p class="text-[24px] text-[#ffffff] font-bold mb-4" >UX review presentations</p>
					<p class="text-[16px] text-[#ffffff] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
					<div class="w-[100%]  mt-10">
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
					</div>
				</div>
			</div>
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
						<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
					<p class="text-[24px] text-[#ffffff] font-bold mb-4" >UX review presentations</p>
					<p class="text-[16px] text-[#ffffff] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
					<div class="w-[100%] mt-10">
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
					</div>
				</div>
			</div>
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
						<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
					<p class="text-[24px] text-[#ffffff] font-bold mb-4" >UX review presentations</p>
					<p class="text-[16px] text-[#ffffff] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
					<div class="w-[100%] mt-10">
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
					</div>
				</div>
			</div>
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
						<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
					<p class="text-[24px] text-[#ffffff] font-bold mb-4" >UX review presentations</p>
					<p class="text-[16px] text-[#ffffff] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
					<div class="w-[100%] mt-10">
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
					</div>
				</div>
			</div>
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
						<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
					<p class="text-[24px] text-[#ffffff] font-bold mb-4" >UX review presentations</p>
					<p class="text-[16px] text-[#ffffff] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
					<div class="w-[100%] mt-10">
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
					</div>
				</div>
			</div>
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
						<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
					<p class="text-[24px] text-[#ffffff] font-bold mb-4" >UX review presentations</p>
					<p class="text-[16px] text-[#ffffff] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
					<div class="w-[100%] mt-10">
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
					</div>
				</div>
			</div>
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
						<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
					<p class="text-[24px] text-[#ffffff] font-bold mb-4" >UX review presentations</p>
					<p class="text-[16px] text-[#ffffff] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
					<div class="w-[100%] mt-10">
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
					</div>
				</div>
			</div>
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
						<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
					<p class="text-[24px] text-[#ffffff] font-bold mb-4" >UX review presentations</p>
					<p class="text-[16px] text-[#ffffff] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
					<div class="w-[100%] mt-10">
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
					</div>
				</div>
			</div>
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
						<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
					<p class="text-[24px] text-[#ffffff] font-bold mb-4" >UX review presentations</p>
					<p class="text-[16px] text-[#ffffff] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
					<div class="w-[100%] mt-10">
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
					</div>
				</div>
			</div>
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
						<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • 20 Jan 2022</p>
					<p class="text-[24px] text-[#ffffff] font-bold mb-4" >UX review presentations</p>
					<p class="text-[16px] text-[#ffffff] mb-4" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
					<div class="w-[100%] mt-10">
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
						<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
					</div>
				</div>
			</div>
			

		</div>

		<div class="w-[100%] text-center pt-[50px]">
			<a href="#" class="inline-block px-[30px] py-[10px] mr-3 text-[14px] rounded-[30px] border border-[#ffffff] text-[#ffffff] hover:bg-[#FF4D02] hover:border-[#FF4D02]" >Read more</a>
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

<?php get_footer();?>