<div class="container mx-auto md:px-0 px-10 pt-2 overflow-hidden">

        <h3 class="text-center small-intro"> Latest Posts </h3>
        <h1 class=" text-3xl sm:text-4xl lg:text-5xl 3xl:text-58 font-medium gradient-text text-center px-0 md:px-96 md:leading-tight">Our  Blogs </h1>
        <h3 class="text-white text-xl font-normal text-center py-6 mb-10"> Interviews, tips, guides, industry best practices, and news. </h3>
  
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
				    <img class="w-full" src="<?php echo esc_url($image_src[0]); ?>" alt="<?php echo esc_attr($image_alt); ?>">
				  <?php endif; ?>
				  <div class="py-4">
					<span class="inline-block py-3 font-bold text-sm text-dark-orange"> <?php echo get_the_author();?> ● </span>
					<span class="inline-block py-3 font-bold text-sm text-dark-orange"> <?php echo get_the_date('F j, Y');?> </span>
					<div class="font-bold text-2xl mb-2 text-white"><?php the_title();?></div>
					<p class="home-blog-para text-base"> <?php echo get_the_excerpt();?></p>
				  </div>
				  <div class="py-4">
					<?php
                        $post_tags = get_the_tags();
                        if ($post_tags) {
                            foreach($post_tags as $tag) {
                                echo '<span class="tagsection">' . $tag->name . '</span>';
                            }
                        } else {
                            echo '<span class="tagsection">No tags</span>';
                        }
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