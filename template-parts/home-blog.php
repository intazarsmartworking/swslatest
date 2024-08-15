<div class="w-full relative grid items-center">
	<div class="container mx-auto md:px-0 px-10">
		<div class=" mx-auto md:px-0 px-10 pt-2">

				<h3 class="text-center small-intro"> Latest Posts </h3>
				<h1 class=" text-3xl sm:text-4xl lg:text-5xl 3xl:text-58 font-medium gradient-text text-center px-0  md:leading-tight">Our  Blogs </h1>
				<h3 class="text-white text-xl font-normal text-center py-6 mb-10 px-0 "> Interviews, tips, guides, industry best practices, and news. </h3>
		
		<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
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
				$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);		
			?>
		
					<a href="">
						<div class="rounded mr-5">
						<?php if ($image_src): ?>
							<img class="w-[100%] rounded-lg h-[250px] " src="<?php echo esc_url($image_src[0]); ?>" alt="<?php echo esc_attr($image_alt); ?>">
						<?php endif; ?>
						<div class="py-4">
							<span class="inline-block py-3 font-bold text-sm text-dark-orange"> <?php echo get_the_author();?> ● </span>
							<span class="inline-block py-3 font-bold text-sm text-dark-orange"> <?php echo get_the_date('F j, Y');?> </span>
							<div class="font-bold text-2xl mb-2 text-white"><?php echo wp_trim_words(get_the_title(), 3); ?> </div>
							<p class="home-blog-para text-base"> <?php echo wp_trim_words(get_the_content(), 30); ?></p>
						</div>
						<div class="py-4">
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
						<span class=" inline-block px-[30px] mb-1 py-[8px] mr-1 text-[14px] italic rounded-[30px] <?php echo $class; ?>"><?php echo $category->name; ?></span>
						<?php
						endforeach;
						endif;
						?>
						</div>
					</div>
				</a>
			<?php endwhile;  wp_reset_postdata();?>
			
			</div> 

			<div class="header-buttons mt-12 mb-12 text-center">
			<a href="https://smartworking.io/" class="button button-small  px-8 py-4 font-bold rounded-xl text-white text-lg get-started-banner-home">View all</a>
			</div>
		
		</div>
	</div>
</div>