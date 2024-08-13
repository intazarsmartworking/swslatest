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



<section class="w-[100%] min-h-[600px] py-[4rem] lg:py-[5rem]" onload="callFunction()">
    <div class="w-[100%] max-w-[1280px] mx-auto px-[20px] lg:px-[0px]">
	
		<?php
		  if ( have_posts() ) :
			while ( have_posts() ) : the_post();
			$image_id = get_post_thumbnail_id();
			$image_src = wp_get_attachment_image_src($image_id, 'full');
		?>
	
		<div class="max-w-[900px] relative mx-auto text-center">
			<h1 class="text-[#FF4D02] text-[16px] font-bold ">Published <?php echo get_the_date('F j, Y');?></h1>
			<h1 class="text-white text-[25px] lg:text-[48px] font-bold mb-0"><?php the_title();?></h1>
			<div class="w-[100%] mt-10">
			
			<?php
			$categories = get_the_category();
			if ($categories) :
				foreach ($categories  as $category) :
					$class = '';
					switch ($category->name) {
						case 'Offshore Developer':
							$class = 'bg-[#F9F5FF] text-[#6941C6]';
							break;
						case 'Backend Developer':
							$class = 'bg-[#EEF4FF] text-[#3538CD]';
							break;
						case 'Full Stack Developer':
							$class = 'bg-[#FDF2FA] text-[#C11574]';
							break;	
						default:
							$class = 'bg-[#EEF4FF] text-[#3538CD]';
							break;
					}
			?>
			
				<span class=" inline-block px-[30px] py-[8px] mr-3 text-[14px] italic rounded-[30px] <?php echo $class; ?>"> <?php echo $category->name; ?> </span>
				<?php
				endforeach;
				endif;
				?>
			</div>
			
		</div>

		<div class="grid grid-cols-1 lg:grid-cols-10 bg-white rounded-[30px] overflow-hidden mt-[50px]">
            <div class="grid-item col-span-10">
				<img class="w-[100%] max-h-[600px]" src="<?php echo esc_url($image_src[0]); ?>">
            </div>
        </div>
		
		
		 <?php
			endwhile;
		  else :
		  ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		  <?php
		  endif;
		  ?>

		<div class="w-full relative block" id="sticky-details" >
			<div class="max-w-[100%] w-full mx-auto">
				<div class="show-more-box mt-[60px]"  id="single-box-content">
				
				<?php
				  if ( have_posts() ) :
					while ( have_posts() ) : the_post();
				?>
				
				
				
					<div class="grid grid-cols-1 lg:grid-cols-10 gap-5 mt-5">
						<div class="grid-item col-span-2 text-white content-start" id="fix-side-box">
							<div class="stickysidenav">
								<p class="text-[20px] text-white font-medium !mb-2">In this article</p>
								<?php if(have_rows('table_content')): ?>
								<?php 
								  $section_count = 1; 
								  while(have_rows('table_content')): the_row(); 
									$title_name = get_sub_field('main_title');
									$unique_id = 'target' . $section_count; 
								?>
								<ul class="scroll-menu">
									<li><a class=" cursor-pointer" data-location="<?php echo $unique_id; ?>"><span> <?php echo $section_count;?>.</span> <?php echo $title_name;?> </a></li>
								<?php $section_count++; endwhile; ?>	
								<?php endif; ?>	
								</ul>
							</div>
						</div>
						<div class="grid-item col-span-6 text-white content-start ">
							<p class="text-[20px] text-white font-medium "> <?php echo  get_the_content();?> </p>
							
							<?php if(have_rows('table_content')): ?>
							<?php $section_count = 1; ?>
							<?php while(have_rows('table_content')): the_row(); ?>
							<?php 
							  $main_title = get_sub_field('main_title'); 
							  $unique_id = 'target' . $section_count;
							  $table_content_img = get_sub_field('image');
							?>
							<div class="scroll-section" id="<?php echo $unique_id; ?>">
								<h1 class="text-[24px] text-white font-semibold"><?php echo $main_title;?></h1>
								<?php if(have_rows('main_description')): ?>
								<?php while(have_rows('main_description')): the_row(); ?>
								<?php echo get_sub_field('description') ;?>
								<?php endwhile; ?>	
								<?php endif; ?>
								
								<?php if (!empty($table_content_img) && isset($table_content_img['url'])):?>
									<img class="w-[100%] rounded-[20px] " src="<?php echo esc_url($table_content_img['url']); ?>" alt="<?php echo esc_url($table_content_img['alt']); ?>">
							    <?php endif; ?>
							
							</div>
							<?php $section_count++; endwhile; ?>	
							<?php endif; ?>	
							
							

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
						<div class="grid-item col-span-2 text-white content-start">
							<div class=" bg-transparent rounded-[10px] min-h-[300px] p-3 stickysidenav">
								
							<div>
						</div>
					</div>
				</div>
			</div>
			
			
			 <?php
				endwhile;
			  else :
			  ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			  <?php
			  endif;
			  ?>
			
			
		</div>

		<div class=" w-full mt-[80px]">
			<div class="grid grid-cols-1 lg:grid-cols-10 rounded-[30px] mt-[120px]">
				<div class="grid-item col-span-5">
					<h1 class="text-white text-[25px] lg:text-[48px] font-bold mb-0">Related Blogs</h1>
				</div>
				<div class="grid-item col-span-5 text-end ">
					<span class=" inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle mr-3" id="prev-blog">
						<
					</span>
					<span class=" inline-block p-[10px] w-[50px] cursor-pointer rounded-[8px] border border-[#302f2f] text-[#AAA] text-center text-[16px] align-middle" id="next-blog">
						>
					</span>
				</div>
			</div>
			<div class=" w-full mt-5">
				<div class="relatedBlogs">
				
					<?php
					$blog_args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'posts_per_page' => 10,
					);
					$blog_posts = new WP_Query($blog_args);	
					while ($blog_posts->have_posts()) :
					$blog_posts->the_post();
					$image_id = get_post_thumbnail_id();
					$image_src = wp_get_attachment_image_src($image_id, 'full'); 
					?>
						<div class="slide-item !bg-transparent">
							<div class="block text-white">
								<div class="mb-6">
								<a href="<?php the_permalink(); ?>"><img class="w-[100%] h-[250px] rounded-lg" src="<?php echo esc_url($image_src[0]); ?>"> </a>
								</div>
								<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • <?php echo get_the_date('F j, Y');?></p>
								<a href="<?php the_permalink(); ?>"><p class="text-[24px] text-[#ffffff] font-bold mb-4" ><?php the_title();?></p></a>
								<a href="<?php the_permalink(); ?>"><p class="text-[16px] text-[#ffffff] mb-4" ><?php echo wp_trim_words(get_the_content(), 40); ?></p></a>
								<div class="w-[100%] mt-10">
								<?php
									$categories = get_the_category();
									if ($categories) :
										foreach ($categories  as $category) :
											$class = '';
											switch ($category->name) {
												case 'Offshore Developer':
													$class = 'bg-[#F9F5FF] text-[#6941C6]';
													break;
												case 'Backend Developer':
													$class = 'bg-[#EEF4FF] text-[#3538CD]';
													break;
												case 'Full Stack Developer':
													$class = 'bg-[#FDF2FA] text-[#C11574]';
													break;	
												default:
													$class = 'bg-[#EEF4FF] text-[#3538CD]';
													break;
											}
									?>
									<span class=" inline-block px-[30px] mb-2 py-[8px] mr-3 text-[14px] italic rounded-[30px] <?php echo $class; ?>"><?php echo $category->name; ?></span>
									<?php
									endforeach;
									endif;
									?>
								</div>
							</div>
						</div>
					<?php endwhile;  wp_reset_postdata();?>
						
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
