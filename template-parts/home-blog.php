<div class="w-full relative px-4 lg:px-0 py-6">
	<div class="container">
		<?php if (have_rows('block')) : ?>
			<?php while (have_rows('block')) : the_row(); ?>
				<?php if (get_row_layout() == 'home_blog_heading') : ?>	
					<?php if(get_sub_field('main_heading')): ?>		
						<h2 class="text-[2.25rem] font-[700] text-center text-[#E8E8E8] mb-[0.5rem]"><?php echo get_sub_field('main_heading'); ?> </h2>
					<?php endif; ?>
					<?php if(get_sub_field('small_paragraph')): ?>	
						<p class="text-[1.25rem] opacity-80 font-[400] text-center text-[#E8E8E8] mb-[2.5rem]"> <?php echo get_sub_field('small_paragraph'); ?> </p>
					<?php endif; ?>	
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?> 
		<div class="grid grid-cols-1 md:grid-cols-3 gap-4 lg:gap-8">
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
			$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);		
			?>
				<a class="home-page-blog" href="<?php echo home_url( '/blog/' ) . basename( get_permalink() ); ?>">
				<div class="rounded">
					<?php if ($image_src): ?>
						<div class="w-full h-[13rem] overflow-hidden rounded-t-lg">
							<img class="w-[100%] rounded-lg" src="<?php echo esc_url($image_src[0]); ?>" alt="<?php echo esc_attr($image_alt); ?>">
						</div>
					<?php endif; ?>
					<div class="py-4">
						<?php
							$author_posts  = get_field('author'); 
							if( $author_posts && is_array($author_posts) ) :
								$author_post = $author_posts[0];
								
							if( $author_post ) :
							$author_name = get_the_title($author_post->ID);
							?>
						<span class="inline-block py-3 font-bold text-sm text-dark-orange"> <?php echo $author_name; ?> ● </span>
						<?php
							else :?>
						<span class="inline-block py-3 font-bold text-sm text-dark-orange"> No Author ● </span>
						<?php endif;
							else :?>
						<span class="inline-block py-3 font-bold text-sm text-dark-orange"> No Author ● </span>
						<?	endif;
							?>
						<span class="inline-block py-3 font-bold text-sm text-dark-orange"> <?php echo get_the_date('F j, Y');?> </span>
						<div class="font-[700] text-[1.5rem] mb-2 text-white whitespace-nowrap text-ellipsis w-full overflow-hidden"><?php echo wp_trim_words(get_the_title(), 7); ?> </div>
						<p class="home-blog-para text-[1rem]"> <?php echo wp_trim_words(get_the_content(), 20); ?></p>
					</div>
				</div>
				</a>
			<?php endwhile;  wp_reset_postdata();?>
		</div>
		<div class="header-buttons mt-6 mb-0 text-center">
			<a href="/blog" class="button_slide slide_right !px-6">View All</a>
		</div>
	</div>
</div>