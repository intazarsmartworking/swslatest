<?php if (have_rows('block')) : ?>
<?php while (have_rows('block')) : the_row(); ?>
<?php if (get_row_layout() == 'ai_vetted_section') : ?>	
	<div class="block mb-[2.5rem]">
	 <?php if(get_sub_field('main_heading')): ?>	
		<h2 class="text-[2.25rem] font-[700] text-center text-[#1E1E1E] mb-[0.5rem]"><?php echo get_sub_field('main_heading'); ?></h2>
	 <?php endif; ?>

	<?php if(get_sub_field('subheading')): ?>	
		<p class="text-[1.25rem] font-[400] text-center text-[#4B4B4B] mb-[0.5rem]"><?php echo get_sub_field('subheading'); ?></p>
	<?php endif; ?>
	</div>
<?php endif; ?>	
<?php endwhile; ?>
<?php endif; ?> 
<!-- <div class="block">
	<?php display_ai_vetted_profile_categories_new_design();?>
</div> -->
<div class="block">

<?php
// Step 1: Get categories (you can filter for custom taxonomy if needed)
$categories = get_categories(array(
    'taxonomy' => 'vettedcategory', // Change this if you have a custom taxonomy
    'orderby' => 'name',
    'order' => 'ASC',
));

// Step 2: Display the category tabs
if ($categories): ?>
    <div class="tabs">
        <ul class="filter-tab tab-titles">
				<li class="tab-title" data-category-id="all">
					<svg class="filter-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
						<path d="M20.5 14C21.6046 14 22.5 13.1046 22.5 12C22.5 10.8954 21.6046 10 20.5 10C19.3954 10 18.5 10.8954 18.5 12C18.5 13.1046 19.3954 14 20.5 14Z" fill="#4B4B4B" stroke="#4B4B4B" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M20.5 6C21.6046 6 22.5 5.10457 22.5 4C22.5 2.89543 21.6046 2 20.5 2C19.3954 2 18.5 2.89543 18.5 4C18.5 5.10457 19.3954 6 20.5 6Z" stroke="#4B4B4B" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M20.5 22C21.6046 22 22.5 21.1046 22.5 20C22.5 18.8954 21.6046 18 20.5 18C19.3954 18 18.5 18.8954 18.5 20C18.5 21.1046 19.3954 22 20.5 22Z" stroke="#4B4B4B" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M4.5 14C5.60457 14 6.5 13.1046 6.5 12C6.5 10.8954 5.60457 10 4.5 10C3.39543 10 2.5 10.8954 2.5 12C2.5 13.1046 3.39543 14 4.5 14Z" stroke="#4B4B4B" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M6.5 12H18.5" stroke="#4B4B4B" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M18.5 4H14.5C12.5 4 11.5 5 11.5 7V17C11.5 19 12.5 20 14.5 20H18.5" stroke="#4B4B4B" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
                    All
                </li>
            <?php foreach ($categories as $category): ?>
				<?php 
					$term_id = $category->term_id;
					$taxonomy_image = get_field('vetted_category_image', 'vettedcategory_' . $term_id);
					$taxonomy_image_url = !empty($taxonomy_image) ? esc_url($taxonomy_image['url']) : ''; 
				?>
                <li class="tab-title" data-category-id="<?php echo esc_attr($category->term_id); ?>">
					<?php if(esc_html($taxonomy_image_url)): ?>	
						<object type="image/svg+xml" class="filter-icon" data="<?php echo esc_html($taxonomy_image_url); ?>" alt="<?php echo esc_html($category->name); ?>"></object>
					<?php endif; ?>
                    <?php echo esc_html($category->description); ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="tab-box-content mt-10">
			<!-- "All" Tab Content -->
            <div class="tab-panel" data-category-id="all">
				<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 gap-4">
					<?php
					// Get all posts from the custom post type (no category filtering for "All" tab)
					$args = array(
						'post_type' => 'ai-vetted-profile', // Custom post type
						'posts_per_page' => 4, // Adjust as needed
					);

					$query = new WP_Query($args);
					if ($query->have_posts()):
						while ($query->have_posts()): $query->the_post();
							?>
							<?php 
								$designation = get_field('profile');
								$city = get_field('city');
								$country = get_field('country');
								$total_experience = get_field('total_experience');
								$dev_image_id = get_post_thumbnail_id();
								$dev_image_src = wp_get_attachment_image_src($dev_image_id, 'full');
							?>
							<div class="col-span-12 sm:col-span-6 md:col-span-3 lg:col-span-3">
								<div class="hero-slider-item">
									<div class="hero-card vetted-tech-card relative">
										<div class="vetted-hover-box">
											<!-- Profile Title -->
											<p class="text-[1.5rem] font-[600] text-[#F34D05] mb-3">
												<svg class="inline-flex align-middle mr-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
													<circle cx="10" cy="10" r="4" fill="#31BF31"/>
												</svg>
												<?php echo get_the_title(); ?>
											</p>

											<!-- Designation -->
											<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2">
												<img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri(); ?>/images/icon-profile.svg">
												<?php echo esc_html($designation); ?>
											</p>

											<!-- Location (City and Country) -->
											<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2">
												<img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri(); ?>/images/icon-location.svg">
												<?php echo esc_html($city); ?>, <?php echo esc_html($country); ?>
											</p>

											<!-- Total Years of Experience -->
											<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-5">
												<img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri(); ?>/images/icons-star.svg" alt="">
												<?php echo esc_html($total_experience); ?> years experience
											</p>

											<!-- Expertise Section -->
											<p class="text-[1rem] font-[400] text-[#787878] mb-2">Expertise</p>
											<div class="grid grid-cols-10 gap-2 text-[0.875rem] font-[400] text-[#1E1E1E] mb-[1.5rem]">
												<?php if (have_rows('skills')): ?>
													<?php while (have_rows('skills')): the_row(); ?>
														<div class="col-span-7"><?php echo esc_html(get_sub_field('skill')); ?></div>
														<div class="col-span-3"><?php echo esc_html(get_sub_field('experience')); ?></div>
													<?php endwhile; ?>
												<?php endif; ?>
											</div>

											<!-- Call to Action (Book a Call) -->
											<div class="absolute bottom-[1.68rem]">
												<p class="text-[0.875rem] font-[400] text-[#000] mb-2">
													<?php echo get_the_title(); ?> is available for hire
												</p>
												<div class="block">
													<a class="button_slide_org slide_org_right" href="/contact-us">Book A Call</a>
												</div>
											</div>
										</div>

										<!-- Background Image -->
										<img class="w-[100%] h-[100%]" src="<?php echo esc_url($dev_image_src[0]); ?>">

										<!-- Hero Card Overlay -->
										<div class="hero-card-overlay">
											<div class="hero-card-details">
												<p class="hero-profile !mb-[0px]">
													<?php echo get_the_title(); ?> • <span class="opacity-60"><?php echo esc_html($city); ?></span>
												</p>
												<p class="hero-name !mb-[8px]"><?php echo esc_html($designation); ?></p>
												<div class="hero-skills">
													<?php if (have_rows('skills')): ?>
														<?php $skill_count = 0; ?>
														<?php while (have_rows('skills')): the_row(); ?>
															<?php if ($skill_count < 3): ?>
																<div class="item vetted"><?php echo esc_html(get_sub_field('skill')); ?></div>
																<?php $skill_count++; ?>
															<?php else: ?>
																<?php break; ?>
															<?php endif; ?>
														<?php endwhile; ?>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						<?php endwhile;
					else:
						echo '<p>No posts found.</p>';
					endif;
					wp_reset_postdata();
					?>
				</div>
			</div>
            <?php foreach ($categories as $index => $category): ?>
                <div class="tab-panel" data-category-id="<?php echo esc_attr($category->term_id); ?>">
					<div class="grid grid-cols-12 sm:grid-cols-12 lg:grid-cols-12 gap-4">
						<?php
						// Step 3: Get posts for the current category and custom post type
						$args = array(
							'post_type' => 'ai-vetted-profile', // Custom post type
							'posts_per_page' => 4, // Adjust as needed
							'tax_query' => array(
								array(
									'taxonomy' => 'vettedcategory', // Custom taxonomy
									'field' => 'id', // Term ID
									'terms' => $category->term_id, // Get posts for the specific category
									'operator' => 'IN', // Ensure matching posts
								),
							),
						);
						$query = new WP_Query($args);
						if ($query->have_posts()):
							while ($query->have_posts()): $query->the_post();
								?>
								<?php 
									$designation = get_field('profile');
									$city = get_field('city');
									$country = get_field('country');
									$total_experience = get_field('total_experience');
									$dev_image_id = get_post_thumbnail_id();
									$dev_image_src = wp_get_attachment_image_src($dev_image_id, 'full');
								?>
								<div class="col-span-12 sm:col-span-6 md:col-span-3 lg:col-span-3">
									<div class="hero-slider-item h-[100%]">
										<div class="hero-card vetted-tech-card relative">
											<div class="vetted-hover-box">
												<!-- Profile Title -->
												<p class="text-[1.5rem] font-[600] text-[#F34D05] mb-3">
													<svg class="inline-flex align-middle mr-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
														<circle cx="10" cy="10" r="4" fill="#31BF31"/>
													</svg>
													<?php echo get_the_title(); ?>
												</p>
	
												<!-- Designation -->
												<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2">
													<img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri(); ?>/images/icon-profile.svg">
													<?php echo esc_html($designation); ?>
												</p>
	
												<!-- Location (City and Country) -->
												<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-2">
													<img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri(); ?>/images/icon-location.svg">
													<?php echo esc_html($city); ?>, <?php echo esc_html($country); ?>
												</p>
	
												<!-- Total Years of Experience -->
												<p class="text-[1rem] font-[400] text-[#1E1E1E] mb-5">
													<img class="w-[1.25rem] h-[1.25rem] !inline" src="<?php echo get_template_directory_uri(); ?>/images/icons-star.svg" alt="">
													<?php echo esc_html($total_experience); ?> years experience
												</p>
	
												<!-- Expertise Section -->
												<p class="text-[1rem] font-[400] text-[#787878] mb-2">Expertise</p>
												<div class="grid grid-cols-10 gap-2 text-[0.875rem] font-[400] text-[#1E1E1E] mb-[1.5rem]">
													<?php if (have_rows('skills')): ?>
														<?php while (have_rows('skills')): the_row(); ?>
															<div class="col-span-7"><?php echo esc_html(get_sub_field('skill')); ?></div>
															<div class="col-span-3"><?php echo esc_html(get_sub_field('experience')); ?></div>
														<?php endwhile; ?>
													<?php endif; ?>
												</div>
	
												<!-- Call to Action (Book a Call) -->
												<div class="absolute bottom-[1.68rem]">
													<p class="text-[0.875rem] font-[400] text-[#000] mb-2">
														<?php echo get_the_title(); ?> is available for hire
													</p>
													<div class="block">
														<a class="button_slide_org slide_org_right" href="/contact-us">Book A Call</a>
													</div>
												</div>
											</div>
	
											<!-- Background Image -->
											<img class="w-[100%] h-[100%]" src="<?php echo esc_url($dev_image_src[0]); ?>">
	
											<!-- Hero Card Overlay -->
											<div class="hero-card-overlay">
												<div class="hero-card-details">
													<p class="hero-profile !mb-[0px]">
														<?php echo get_the_title(); ?> • <span class="opacity-60"><?php echo esc_html($city); ?></span>
													</p>
													<p class="hero-name !mb-[8px]"><?php echo esc_html($designation); ?></p>
													<div class="hero-skills">
														<?php if (have_rows('skills')): ?>
															<?php $skill_count = 0; ?>
															<?php while (have_rows('skills')): the_row(); ?>
																<?php if ($skill_count < 3): ?>
																	<div class="item vetted"><?php echo esc_html(get_sub_field('skill')); ?></div>
																	<?php $skill_count++; ?>
																<?php else: ?>
																	<?php break; ?>
																<?php endif; ?>
															<?php endwhile; ?>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
	
							<?php endwhile;
						else:
							echo '<p>No posts found.</p>';
						endif;
						wp_reset_postdata();
						?>
                	</div>
				</div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>



	<!-- <div class="hero-slider-box mt-10">
		<div class="vetted-tech-experts">	
		</div>
	</div> -->
</div>