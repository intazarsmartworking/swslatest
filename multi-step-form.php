<?php
/**
 * Template Name: Multi Step Form
 *
 * @package sws
 */

 get_header('second');
?>

<section class="w-full p-0 bg-[#050403]">
	<div class="mx-auto w-[100%]">
        <div class="grid grid-cols-1 h-[100%] min-h-[100vh] relative">
            <div class="grid-item col-span-5 content-center h-[100%] relative">
                <?php echo do_shortcode('[contact-form-7 id="300e693" title="Multi Step"]');?>
            </div>
        </div>
    </div>
</section>




<?php get_footer('second');?>