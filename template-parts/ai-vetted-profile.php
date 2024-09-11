<div class="w-full relative grid items-center py-16">
	<div class="container mx-auto md:px-0 px-10">
	<?php if (have_rows('block')) : ?>
	<?php while (have_rows('block')) : the_row(); ?>
	<?php if (get_row_layout() == 'ai_vetted_section') : ?>	
	<?php if(get_sub_field('small_title')): ?>	
	  <h4 class="text-center small-intro"> <?php echo get_sub_field('small_title'); ?> </h4>
	<?php endif; ?> 
	  
	<?php if(get_sub_field('main_heading')): ?>	  
	  <h2 class=" text-[35px] sm:text-[40px] lg:text-[56px] 3xl:text-58 font-medium text-white text-center px-0 md:px-96 md:leading-tight"><?php echo get_sub_field('main_heading'); ?></h2>
	<?php endif; ?> 

	<?php if(get_sub_field('subheading')): ?>	
	  <p class="text-center text-white font-medium text-[16px] md:text-2xl pt-[10px]"> <?php echo get_sub_field('subheading'); ?> </p>
	<?php endif; ?> 

	<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>  
	  <div class="grid grid-cols-1 lg:grid-cols-10 mt-10">
		<div class="grid-item col-span-2 px-6">
			<?php display_ai_vetted_profile_categories();?>
		</div>
		<div class="grid-item col-span-8 p-3 border rounded-lg border-[#a962444d]">
			<div class="slide-show max-w-[100%] mt-3">

				<div class="your-class" id="vetted-profile">
					<a href="/contact-us/" class="grid-item col-span-3 rounded-[12px] block developer-sec-pic">
						<img src="<?php echo get_template_directory_uri();?>/images/Liselotte-M-1.png" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl">Liselotte M</p>
							<p class="text-white text-center mb-5 text-sm">Senior WordPress Developer</p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
									<li>WordPress</li>
									<li>PHP</li>
								</ul>
							</div>
						</div>
					</a>
					<a href="/contact-us/" class="grid-item col-span-3 block rounded-[12px] developer-sec-pic">
						<img src="<?php echo get_template_directory_uri();?>/images/Gabriel-T-1.png" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl">Liselotte M</p>
							<p class="text-white text-center mb-5 text-sm">Senior WordPress Developer</p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
									<li>WordPress</li>
									<li>PHP</li>
								</ul>
							</div>
						</div>
					</a>
					<a href="/contact-us/" class="grid-item col-span-3 block rounded-[12px] developer-sec-pic">
						<img src="<?php echo get_template_directory_uri();?>/images/Matteo-F-1.png" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl">Liselotte M</p>
							<p class="text-white text-center mb-5 text-sm">Senior WordPress Developer</p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
									<li>WordPress</li>
									<li>PHP</li>
								</ul>
							</div>
						</div>
					</a>
					<a href="/contact-us/" class="grid-item col-span-3 block rounded-[12px] developer-sec-pic">
						<img src="<?php echo get_template_directory_uri();?>/images/Henry-R-1.png" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl">Liselotte M</p>
							<p class="text-white text-center mb-5 text-sm">Senior WordPress Developer</p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
									<li>WordPress</li>
									<li>PHP</li>
								</ul>
							</div>
						</div>
					</a>
					<a href="/contact-us/" class="grid-item col-span-3 rounded-[12px] block developer-sec-pic">
						<img src="<?php echo get_template_directory_uri();?>/images/Liselotte-M-1.png" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl">Liselotte M</p>
							<p class="text-white text-center mb-5 text-sm">Senior WordPress Developer</p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
									<li>WordPress</li>
									<li>PHP</li>
								</ul>
							</div>
						</div>
					</a>
					<a href="/contact-us/" class="grid-item col-span-3 block rounded-[12px] developer-sec-pic">
						<img src="<?php echo get_template_directory_uri();?>/images/Gabriel-T-1.png" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl">Liselotte M</p>
							<p class="text-white text-center mb-5 text-sm">Senior WordPress Developer</p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
									<li>WordPress</li>
									<li>PHP</li>
								</ul>
							</div>
						</div>
					</a>
					<a href="/contact-us/" class="grid-item col-span-3 block rounded-[12px] developer-sec-pic">
						<img src="<?php echo get_template_directory_uri();?>/images/Matteo-F-1.png" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl">Liselotte M</p>
							<p class="text-white text-center mb-5 text-sm">Senior WordPress Developer</p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
									<li>WordPress</li>
									<li>PHP</li>
								</ul>
							</div>
						</div>
					</a>
					<a href="/contact-us/" class="grid-item col-span-3 block rounded-[12px] developer-sec-pic">
						<img src="<?php echo get_template_directory_uri();?>/images/Henry-R-1.png" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl">Liselotte M</p>
							<p class="text-white text-center mb-5 text-sm">Senior WordPress Developer</p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
									<li>WordPress</li>
									<li>PHP</li>
								</ul>
							</div>
						</div>
					</a>
					<a href="/contact-us/" class="grid-item col-span-3 rounded-[12px] block developer-sec-pic">
						<img src="<?php echo get_template_directory_uri();?>/images/Liselotte-M-1.png" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl">Liselotte M</p>
							<p class="text-white text-center mb-5 text-sm">Senior WordPress Developer</p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
									<li>WordPress</li>
									<li>PHP</li>
								</ul>
							</div>
						</div>
					</a>
					<a href="/contact-us/" class="grid-item col-span-3 block rounded-[12px] developer-sec-pic">
						<img src="<?php echo get_template_directory_uri();?>/images/Gabriel-T-1.png" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl">Liselotte M</p>
							<p class="text-white text-center mb-5 text-sm">Senior WordPress Developer</p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
									<li>WordPress</li>
									<li>PHP</li>
								</ul>
							</div>
						</div>
					</a>
					<a href="/contact-us/" class="grid-item col-span-3 block rounded-[12px] developer-sec-pic">
						<img src="<?php echo get_template_directory_uri();?>/images/Matteo-F-1.png" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl">Liselotte M</p>
							<p class="text-white text-center mb-5 text-sm">Senior WordPress Developer</p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
									<li>WordPress</li>
									<li>PHP</li>
								</ul>
							</div>
						</div>
					</a>
					<a href="/contact-us/" class="grid-item col-span-3 block rounded-[12px] developer-sec-pic">
						<img src="<?php echo get_template_directory_uri();?>/images/Henry-R-1.png" class="rounded-xl">
						<div class="short-bio">
							<p class="text-white pb-2 text-center text-xl">Liselotte M</p>
							<p class="text-white text-center mb-5 text-sm">Senior WordPress Developer</p>
							<div class="block pb-3">
								<ul class="skill-card-itme">
									<li>WordPress</li>
									<li>PHP</li>
								</ul>
							</div>
						</div>
					</a>
				</div>


						<!-- <div class="dev-section">
						Posts will be loaded here via AJAX 
						</div> -->
			</div>
			 
		</div>
	  </div>
	</div>
</div>