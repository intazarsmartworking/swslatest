<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sws
 */

get_header();
?>
	<!-- <main id="primary" class="site-main">

		<?php 
		/*
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'sws' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'sws' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; */
		?>

	</main> -->


<section class="w-[100%] min-h-[600px] py-[4rem] lg:py-[5rem]" onload="callFunction()">
    <div class="w-[100%] max-w-[1280px] mx-auto px-[20px] lg:px-[0px]">
		<div class="max-w-[600px] relative mx-auto text-center">
			<h1 class="text-[#FF4D02] text-[16px] font-bold ">Published 20 Jan 2022</h1>
			<h1 class="text-white text-[25px] lg:text-[48px] font-bold mb-0">Our ideas and insights</h1>
			<div class="w-[100%] mt-10">
				<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#F9F5FF] text-[#6941C6]">Design</span>
				<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#EEF4FF] text-[#3538CD]">Research</span>
				<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] bg-[#FDF2FA] text-[#C11574]">Design</span>
			</div>
			
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-10 bg-white rounded-[30px] overflow-hidden mt-[120px]">
            <div class="grid-item col-span-10">
				<img class="w-[100%]" src="<?php echo get_template_directory_uri();?>/images/blog-full-img.png">
            </div>
        </div>

		<div class="w-full relative block" id="sticky-details" >
			<div class="max-w-[100%] w-full mx-auto">
				<div class="show-more-box mt-[60px]">
					<div class="grid grid-cols-1 lg:grid-cols-10 gap-5 mt-5">
						<div class="grid-item col-span-2 content-start" id="fix-side-box">
							<div class="stickysidenav">
								<p class="text-[20px] text-white font-medium !mb-2">In this article</p>
								<p class="text-[14px] text-white font-medium ">12 min read</p>
								<ul class="scroll-menu">
									<li><a class=" cursor-pointer" data-location="target1"><span>1.</span> Introduction</a></li>
									<li><a class=" cursor-pointer" data-location="target2"><span>2.</span> Software and tools</a></li>
									<li><a class=" cursor-pointer" data-location="target3"><span>3.</span> Other resources</a></li>
									<li><a class=" cursor-pointer" data-location="target4"><span>4.</span> Conclusion</a></li>
								</ul>
							</div>
						</div>
						<div class="grid-item col-span-6 content-start">
							<p class="text-[20px] text-white font-medium ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper mattis lorem non. Ultrices praesent amet ipsum justo massa. Eu dolor aliquet risus gravida nunc at feugiat consequat purus. Non massa enim vitae duis mattis. Vel in ultricies vel fringilla.</p>
							<div class="scroll-section" id="target1">
								<h1 class="text-[24px] text-white font-semibold">Introduction</h1>
								<p class="text-[18px] text-white font-normal">Mi tincidunt elit, id quisque ligula ac diam, amet. Vel etiam suspendisse morbi eleifend faucibus eget vestibulum felis. Dictum quis montes, sit sit. Tellus aliquam enim urna, etiam. Mauris posuere vulputate arcu amet, vitae nisi, tellus tincidunt. At feugiat sapien varius id.
								Eget quis mi enim, leo lacinia pharetra, semper. Eget in volutpat mollis at volutpat lectus velit, sed auctor. Porttitor fames arcu quis fusce
								augue enim. Quis at habitant diam at. Suscipit tristique risus, at donec. In turpis vel et quam imperdiet. Ipsum molestie aliquet sodales 
								id est ac volutpat. </p>
								<img class="w-[100%] rounded-[20px] " src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
								<div class="blockquote border-l-4 border-[#FF4D02] pl-[20px] italic mt-6 text-[24px] text-white font-normal">
									“In a world older and more complete than ours they move finished and complete, gifted with extensions of the senses we have lost or never attained, living by voices we shall never hear.”
								</div>
								<p class="text-[16px] text-[#AAA] font-normal mt-3">— Olivia Rhye, Product Designer</p>
								<p class="text-[18px] text-white font-normal">Dolor enim eu tortor urna sed duis nulla. Aliquam vestibulum, nulla odio nisl vitae. In aliquet pellentesque aenean hac vestibulum turpis mi bibendum diam. Tempor integer aliquam in vitae malesuada fringilla.</p>
								<p class="text-[18px] text-white font-normal">Elit nisi in eleifend sed nisi. Pulvinar at orci, proin imperdiet commodo consectetur convallis risus. Sed condimentum enim dignissim adipiscing faucibus consequat, urna. Viverra purus et erat auctor aliquam. Risus, volutpat vulputate posuere purus sit congue convallis aliquet. Arcu id augue ut feugiat donec porttitor neque. Mauris, neque ultricies eu vestibulum, bibendum quam lorem id. Dolor lacus, eget nunc lectus in tellus, pharetra, porttitor.</p>
								<p class="text-[18px] text-white font-normal">Ipsum sit mattis nulla quam nulla. Gravida id gravida ac enim mauris id. Non pellentesque congue eget consectetur turpis. Sapien, dictum molestie sem tempor. Diam elit, orci, tincidunt aenean tempus. Quis velit eget ut tortor tellus. Sed vel, congue felis elit erat nam nibh orci.</p>
								<!-- <table class="table-fixed w-[100%] text-[18px] text-left text-white font-normal">
									<thead>
										<tr>
											<th>Column 1</th>
											<th>Column 2</th>
											<th>Column 3</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>label</td>
											<td>label</td>
											<td>label</td>
										</tr>
										<tr>
											<td>label</td>
											<td>label</td>
											<td>label</td>
										</tr>
										<tr>
											<td>label</td>
											<td>label</td>
											<td>label</td>
										</tr>
									</tbody>
								</table> -->

								<table class="border-collapse table-auto w-full text-sm border-1 border-[#353535]">
									<thead class="bg-[#000]">
										<tr>
										<th class="border-b border-[#353535] font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Song</th>
										<th class="border-b border-[#353535] font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Artist</th>
										<th class="border-b border-[#353535] font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Year</th>
										</tr>
									</thead>
									<tbody class=" dark:bg-slate-800">
										<tr>
										<td class="border-b border-[#353535] p-4 pl-8 text-slate-500 dark:text-slate-400">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
										<td class="border-b border-[#353535] p-4 text-slate-500 dark:text-slate-400">Malcolm Lockyer</td>
										<td class="border-b border-[#353535] p-4 pr-8 text-slate-500 dark:text-slate-400">1961</td>
										</tr>
										<tr>
										<td class="border-b border-[#353535] p-4 pl-8 text-slate-500 dark:text-slate-400">Witchy Woman</td>
										<td class="border-b border-[#353535] p-4 text-slate-500 dark:text-slate-400">The Eagles</td>
										<td class="border-b border-[#353535] p-4 pr-8 text-slate-500 dark:text-slate-400">1972</td>
										</tr>
										<tr>
										<td class="border-b border-[#353535] p-4 pl-8 text-slate-500 dark:text-slate-400">Shining Star</td>
										<td class="border-b border-[#353535] p-4 text-slate-500 dark:text-slate-400">Earth, Wind, and Fire</td>
										<td class="border-b border-[#353535] p-4 pr-8 text-slate-500 dark:text-slate-400">1975</td>
										</tr>
									</tbody>
								</table>
							
							
							</div>
							<div class="scroll-section" id="target2">

								<h1 class="text-[24px] text-white font-semibold">Software and tools</h1>
								<p class="text-[18px] text-white font-normal">Pharetra morbi libero id aliquam elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. 
									Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi mattis id in ac pellentesque ac. Pharetra morbi libero id aliquam 
									elit massa integer tellus. Quis felis aliquam ullamcorper porttitor. Pulvinar ullamcorper sit dictumst ut eget a, elementum eu. Maecenas est morbi 
									mattis id in ac pellentesque ac.</p>
								
							</div>
							<div class="scroll-section" id="target3">

								<h1 class="text-[24px] text-white font-semibold">Other resources</h1>
								<p class="text-[18px] text-white font-normal">Sagittis et eu at elementum, quis in. Proin praesent volutpat egestas sociis sit lorem nunc nunc sit. Eget diam curabitur mi ac. Auctor rutrum lacus malesuada massa ornare et. Vulputate consectetur ac ultrices at diam dui eget fringilla tincidunt. Arcu sit dignissim massa erat cursus vulputate gravida id. Sed quis auctor vulputate hac elementum gravida cursus dis.
									
								</p>
								<ul class="mb-6 text-[18px] text-white font-normal">
									<li>1. Lectus id duis vitae porttitor enim gravida morbi.</li>
									<li>2. Eu turpis posuere semper feugiat volutpat elit, ultrices suspendisse. Auctor vel in vitae placerat.</li>
									<li>3. Suspendisse maecenas ac donec scelerisque diam sed est duis purus.</li>
								<ul>

								<img class="w-[100%] rounded-[20px] mt-[30px]" src="<?php echo get_template_directory_uri();?>/images/blog-detail-1.png">

								<p>
								Lectus leo massa amet posuere. Malesuada mattgradientis non convallis quisque. Libero sit et imperdiet bibendum quisque dictum vestibulum in non. Pretium ultricies tempor non est diam. Enim ut enim amet amet integer cursus. Sit ac commodo pretium sed etiam turpis suspendisse at.
								Tristique odio senectus nam posuere ornare leo metus, ultricies. Blandit duis ultricies vulputate morbi feugiat cras placerat elit. Aliquam tellus lorem sed ac. Montes, sed mattis pellentesque suscipit accumsan. Cursus viverra aenean magna risus elementum faucibus molestie pellentesque. Arcu ultricies sed mauris vestibulum.
								</p>
							</div>
							<div class="scroll-section min-h-[500px]" id="target4">

								<div class="gradient-bg rounded-[20px] p-5">
									<p class="text-[18px] text-white font-normal">Morbi sed imperdiet in ipsum, adipiscing elit dui lectus. Tellus id scelerisque est ultricies ultricies. Duis est sit sed leo nisl, blandit elit sagittis. Quisque tristique consequat quam sed. Nisl at scelerisque amet nulla purus habitasse.</p>
									<p class="text-[18px] text-white font-normal">Nunc sed faucibus bibendum feugiat sed interdum. Ipsum egestas condimentum mi massa. In tincidunt pharetra consectetur sed duis facilisis metus. Etiam egestas in nec sed et. Quis lobortis at sit dictum eget nibh tortor commodo cursus.</p>
									<p class="text-[18px] text-white font-normal">Odio felis sagittis, morbi feugiat tortor vitae feugiat fusce aliquet. Nam elementum urna nisi aliquet erat dolor enim. Ornare id morbi eget ipsum. Aliquam senectus neque ut id eget consectetur dictum. Donec posuere pharetra odio consequat scelerisque et, nunc tortor.</p>
									<p class="text-[18px] text-white font-normal">Nulla adipiscing erat a erat. Condimentum lorem posuere gravida enim posuere cursus diam.</p>
								</div>
							
							
							</div>

							<div class="blog-bio py-[10px] border-t border-[#eaecf04d] mt-10 pt-[24px]">
								<div class="grid grid-cols-1 lg:grid-cols-10">
									<div class="grid-item col-span-5">
										<div class="flex flex-row">
											<div class="basis">
												<div class=" w-[50px] h-[50px] rounded-[50%] overflow-hidden ">
													<img class="w-[100%] rounded-full " src="<?php echo get_template_directory_uri();?>/images/auther-img.png">
												</div>
											</div>
											<div class="basis pl-3">
												<p class="text-[18px] text-white font-normal !mb-0">Olivia Rhye</p>
												<p class="text-[16px] text-[#AAA] font-normal">Product Designer, Untitled</p>
											</div>
										</div>
									</div>
									<div class="grid-item col-span-5 text-end">
										<span class=" inline-block p-[10px] rounded-[8px] border bottom-[#fff] text-[#fff] text-[16px] align-top mr-3">
											<img class="inline-block " src="<?php echo get_template_directory_uri();?>/images/link-icon.png"> Copy link
										</span>
										<span class=" inline-block p-[10px]  rounded-[8px] border bottom-[#fff] align-top mr-3">
											<img class="w-[100%] rounded-full " src="<?php echo get_template_directory_uri();?>/images/twit-icon.png">
										</span>
										<span class=" inline-block p-[10px]  rounded-[8px] border bottom-[#fff] align-top mr-3">
											<img class="w-[100%] rounded-full " src="<?php echo get_template_directory_uri();?>/images/fb-icon.png">
										</span>
										<span class=" inline-block p-[10px]  rounded-[8px] border bottom-[#fff] align-top mr-3">
											<img class="w-[100%] rounded-full " src="<?php echo get_template_directory_uri();?>/images/linkin-icon.png">
										</span>
									</div>
								</div>
								<div class="w-full">
									<p class="text-[18px] text-white font-normal">Lectus leo massa amet posuere. Malesuada mattis non convallis quisque. Libero sit et imperdiet bibendum quisque dictum vestibulum in non.</p>
								</div>
							</div>
						</div>
						<div class="grid-item col-span-2 content-start">
							<div class=" bg-transparent rounded-[10px] min-h-[300px] p-3 stickysidenav">
								<!-- <h1  class="text-[22px] lg:text-[24px] text-[#fff] text-center font-medium mt-[25%]">Hire diverloer</h1>
								<a class="bg-[#fff] inline-block w-[100%] py-4 text-center text-[18px] px-2 rounded-[14px] text-[#FF4D02] mt-[25%]">Pricing 
								<svg class="inline-block ml-[35px] " xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M4.38461 12.0058H15.7745C14.6474 10.8779 13.9292 9.34187 13.9292 7.70433V6.78125H15.7754V7.70433C15.7754 9.95571 17.8265 12.0058 20.0769 12.0058H21V13.852H20.0769C17.8265 13.852 15.7754 15.9021 15.7754 18.1535V19.0766H13.9292V18.1535C13.9292 16.516 14.6474 14.98 15.7745 13.852H4.38461V12.0058Z" fill="#FF4D02"/>
								</svg>
								</a> -->
							<div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class=" w-full mt-[80px]">
			<div class="grid grid-cols-1 lg:grid-cols-10 rounded-[30px] mt-[120px]">
				<div class="grid-item col-span-5">
					<h1 class="text-white text-[25px] lg:text-[48px] font-bold mb-0">Related Blogs</h1>
				</div>
				<div class="grid-item col-span-5 text-end ">
					<span class=" inline-block p-[10px] w-[50px] rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle mr-3" id="prev-blog">
						<
					</span>
					<span class=" inline-block p-[10px] w-[50px] rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle" id="next-blog">
						>
					</span>
				</div>
			</div>
			<div class=" w-full mt-5">
				<div class="relatedBlogs">
						<div class="slide-item !bg-transparent">
							<div class="block">
								<div class="mb-6">
									<img class="w-[100%] max-h-[200px] rounded-[12px]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
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
						<div class="slide-item !bg-transparent">
							<div class="block">
								<div class="mb-6">
									<img class="w-[100%] max-h-[200px] rounded-[12px]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
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
						<div class="slide-item !bg-transparent">
							<div class="block">
								<div class="mb-6">
									<img class="w-[100%] max-h-[200px] rounded-[12px]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
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
						<div class="slide-item !bg-transparent">
							<div class="block">
								<div class="mb-6">
									<img class="w-[100%] max-h-[200px] rounded-[12px]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
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
						<div class="slide-item !bg-transparent">
							<div class="block">
								<div class="mb-6">
									<img class="w-[100%] max-h-[200px] rounded-[12px]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
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
						<div class="slide-item !bg-transparent">
							<div class="block">
								<div class="mb-6">
									<img class="w-[100%] max-h-[200px] rounded-[12px]" src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
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
						<div class="slide-item !bg-transparent ">
							<div class="block">
								<div class="mb-6">
									<img class="w-[100%] max-h-[200px] rounded-[12px] " src="<?php echo get_template_directory_uri();?>/images/blog-1.png">
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
			</div>
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
<script type="text/javascript">

	jQuery(window).bind("load", function() {
		callFunction()
	});
</script>
<?php
get_footer();
