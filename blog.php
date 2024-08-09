<?php
/**
 * Template Name: Blog
 *
 * @package sws
 */

 get_header();
?>


<section class="w-[100%] min-h-[600px] py-[4rem] lg:py-[10rem]">
    <div class="w-[100%] max-w-[1280px] mx-auto px-[20px] lg:px-[0px]">
		<div class="max-w-[600px] relative mx-auto text-center">
			<div class="block mb-5"><span class="steps-box text-white text-[1rem] inline-block px-[1.25rem] py-[0.8rem] border border-[#EE500C] rounded-[3.5rem] " >BLOGS</span></div>
			<h1 class="text-white text-[25px] lg:text-[56px] font-medium mb-0">Our ideas and insights</h1>
			<h1 class="text-[#FF4D02] text-[25px] lg:text-[56px] font-medium ">on Hire Developers</h1>
		</div>

		
		<?php
		$args = array(
			'posts_per_page' => 1,
			'post_status'    => 'publish', 
		);
		$latest_post_query = new WP_Query($args);
		$latest_post_id = null;
		if ($latest_post_query->have_posts()) :
			while ($latest_post_query->have_posts()) : $latest_post_query->the_post();
			$latest_post_id = get_the_ID();
			$image_id = get_post_thumbnail_id();
			$image_src = wp_get_attachment_image_src($image_id, 'full');
		?>
		
		<div class="grid grid-cols-1 lg:grid-cols-10 bg-white rounded-[30px] overflow-hidden mt-[120px]">
            <div class="grid-item col-span-6">
				<a href="<?php the_permalink(); ?>"> <img class="w-[100%]" src="<?php echo esc_url($image_src[0]); ?>" alt="<?php the_title(); ?>"> </a>
            </div>
            <div class="grid-item col-span-4 p-[40px]">
                <p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • <?php echo get_the_date('F j, Y');?></p>
				<a href="<?php the_permalink(); ?>"> <p class="text-[24px] text-[#050403] font-bold mb-4" ><?php the_title(); ?></p> </a>
				<a href="<?php the_permalink(); ?>"> <p class="text-[16px] text-[#050403] mb-4" > <?php echo wp_trim_words(get_the_content(), 40); ?> </p> </a>
				<div class="w-[100%] min-h-[100px] mt-10">
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
				<div class="d-block">
					<a href="<?php the_permalink(); ?>" class="inline-block px-[30px] py-[10px] mr-3 text-[14px] rounded-[30px] border border-[#050403] text-[#050403] hover:bg-[#050403] hover:text-[#ffffff]" >Read more</a>
				</div>
            </div>
        </div>
		
		
		<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>

		<div class="grid grid-cols-1 lg:grid-cols-10 gap-5 items-center mt-[100px]">
            <div class="grid-item col-span-6">
				<h1 class="text-white text-[25px] lg:text-[56px] font-medium mb-0">Get the latest</h1>
            </div>
            <!--<div class="grid-item col-span-2">
				<input type="text" placeholder="Search" class="form-input w-[100%] h-[50px] text-white border-[#632A0B] bg-[#632A0B] rounded-[12px]">
			</div>
			<div class="grid-item col-span-2">
				<select class="form-select w-[100%] h-[50px] border-[#632A0B] text-white bg-[#632A0B] rounded-[10px] ">
					<option>option 1</option>
					<option>option 2</option>
					<option>option 3</option>
					<option>option 4</option>
				</select>
			</div> -->
        </div>

		
		
		<?php
		$all_posts_args = array(
			'posts_per_page' => 6,
			'post__not_in'   => array($latest_post_id),
			'post_status'    => 'publish',
		);
		$all_posts_query = new WP_Query($all_posts_args);
		?>
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 blog-box mt-[65px]" id="post-container">
		  <?php if ($all_posts_query->have_posts()) : ?>
           <?php while ($all_posts_query->have_posts()) : $all_posts_query->the_post(); ?>
		   <?php $image_id = get_post_thumbnail_id();
			$image_src = wp_get_attachment_image_src($image_id, 'full');
		   ?>
		
			<div class="blog-item rounded-[20px] overflow-hidden">
				<div class="block">
					<div class="mb-6">
					<a href="<?php the_permalink(); ?>"> <img class="w-[100%]" src="<?php echo esc_url($image_src[0]); ?>" alt="<?php the_title(); ?>"> </a>
					</div>
					<p class="text-[14px] text-[#FF4D02] font-bold mb-4" >Olivia Rhye • <?php echo get_the_date('F j, Y'); ?></p>
					<a href="<?php the_permalink(); ?>"> <p class="text-[24px] text-[#ffffff] font-bold mb-4" > <?php the_title(); ?> </p> </a>
					<a href="<?php the_permalink(); ?>"> <p class="text-[16px] text-[#ffffff] mb-4" > <?php echo wp_trim_words(get_the_content(), 40); ?> </p> </a>
					<div class="w-[100%] min-h-[100px] mt-10">
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
			</div>
			
		<?php endwhile; ?>
		<?php else : ?>
			<p>No posts found.</p>
		<?php endif; ?>
			
		</div>

		<!-- <div class="w-[100%] text-center pt-[50px]">
			<a href="#" class="inline-block px-[30px] py-[10px] mr-3 text-[14px] rounded-[30px] border border-[#ffffff] text-[#ffffff] hover:bg-[#FF4D02] hover:border-[#FF4D02]" >Read more</a>
		</div> -->
        
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