<?php
/**
 * Template Name: Landing Page
 *
 * @package sws
 */

 get_header('second');
?>
<div class=" w-full relative">
  	<img class="bg-img absolute w-[150%] max-w-[initial] opacity-[0.6] left-[-20%] z-0 top-[-15%]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
  	<div class=" w-full relative z-10">
		
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="grid grid-cols-1 content-center gap-6 md:gap-32 relative z-10">
                    <div class="grid-item col-span-1">
                        <img class="h-[35px]" src="<?php echo get_template_directory_uri();?>/images/logo_white_orange.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
		<?php if (have_rows('landing_block_section')) : ?>
		<?php while (have_rows('landing_block_section')) : the_row(); ?>
		<?php if (get_row_layout() == 'banner_section') : ?>
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="grid grid-cols-1 lg:grid-cols-2 content-center gap-6 md:gap-32 relative z-10">
                        <div class="grid-item col-span-1">
						<?php if(get_sub_field('main_heading')): ?>
                            <h1 class="font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[74px]">
                                <?php echo get_sub_field('main_heading'); ?>
                                <span class="gradient-text"><?php echo get_sub_field('gradient_heading'); ?></span>
                                <span class="text-dark-orange"> <?php echo get_sub_field('orange_heading'); ?></span> 
                            </h1>
						<?php endif; ?>
						<?php if(get_sub_field('small_paragraph')): ?>
                            <p class=" text-white font-medium text-2xl pt-[10px] px-0 mb-10"><?php echo get_sub_field('small_paragraph'); ?></p>
						<?php endif; ?>	
						   <div class="block">
                                <svg style="height: 50px;" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 357 44">
                                    <defs>
                                        <style>
                                        .cls-1 {
                                            fill: #005128;
                                        }

                                        .cls-2 {
                                            fill: #0dab40;
                                        }

                                        .cls-2, .cls-3 {
                                            fill-rule: evenodd;
                                        }

                                        .cls-4, .cls-3 {
                                            fill: #fff;
                                        }

                                        .cls-5 {
                                            fill: #dcdce6;
                                        }

                                        .cls-6 {
                                            fill: #00b67a;
                                        }

                                        .cls-7 {
                                            fill: #ef4335;
                                        }

                                        .cls-8 {
                                            fill: #f7931e;
                                        }
                                        </style>
                                    </defs>
                                    <g>
                                        <g>
                                        <g>
                                            <path class="cls-4" d="M44.48,10.79h9.62v1.79h-3.78v10.1h-2.08v-10.1h-3.77v-1.79h0ZM53.69,14.07h1.78v1.66h.03c.06-.23.17-.46.33-.68.16-.22.35-.43.58-.6.23-.18.48-.33.76-.45.28-.11.56-.17.85-.17.22,0,.38,0,.46.02.08,0,.17.02.26.03v1.83c-.13-.02-.27-.04-.41-.06-.14-.02-.28-.03-.41-.03-.32,0-.62.07-.91.19-.29.13-.53.32-.74.56-.21.25-.38.55-.5.92-.13.37-.18.79-.18,1.27v4.09h-1.9v-8.6h0ZM67.45,22.68h-1.86v-1.2h-.03c-.23.44-.58.78-1.04,1.04-.46.26-.93.4-1.41.4-1.13,0-1.95-.28-2.46-.84-.5-.56-.75-1.41-.75-2.54v-5.46h1.9v5.28c0,.75.14,1.29.44,1.6.29.31.7.47,1.22.47.4,0,.73-.06,1-.18.27-.12.49-.29.65-.5.17-.2.29-.45.36-.74.07-.29.11-.59.11-.93v-4.99h1.9v8.6ZM70.68,19.91c.06.55.27.94.63,1.17.37.22.81.34,1.32.34.18,0,.38-.02.6-.04.23-.03.45-.08.64-.16.2-.07.36-.19.5-.34.12-.15.18-.34.18-.59,0-.24-.1-.44-.27-.59-.17-.16-.38-.28-.64-.38-.26-.09-.55-.18-.89-.24-.34-.07-.67-.14-1.02-.22-.35-.07-.7-.18-1.02-.29-.33-.11-.62-.26-.88-.45-.26-.18-.47-.43-.62-.72-.16-.29-.23-.65-.23-1.09,0-.47.12-.86.34-1.18.23-.32.52-.57.86-.76.35-.19.74-.33,1.17-.41.43-.08.84-.12,1.22-.12.45,0,.87.05,1.28.14.4.09.77.24,1.1.46.33.21.6.49.81.82.22.34.35.75.41,1.23h-1.98c-.09-.45-.29-.76-.62-.92-.33-.16-.7-.23-1.12-.23-.13,0-.29,0-.48.03-.18.02-.35.07-.52.12-.16.06-.29.15-.41.27-.11.12-.17.27-.17.46,0,.23.08.42.24.56.16.14.37.26.63.36.26.09.56.18.89.24s.68.14,1.03.22c.34.08.68.18,1.01.29.34.11.63.26.89.45.26.19.47.43.63.71.16.29.24.65.24,1.07,0,.51-.12.94-.35,1.3-.23.35-.54.64-.91.86-.37.22-.79.39-1.24.49-.45.1-.91.15-1.35.15-.54,0-1.05-.06-1.51-.18-.46-.13-.86-.31-1.2-.56-.34-.25-.6-.56-.8-.93-.19-.37-.29-.81-.31-1.33h1.91v-.02ZM76.94,14.07h1.43v-2.58h1.9v2.58h1.71v1.42h-1.71v4.6c0,.2,0,.37.03.52.02.14.06.27.12.37.06.1.15.18.28.23.12.05.29.08.5.08.13,0,.27,0,.4,0,.13,0,.27-.02.4-.06v1.47c-.21.02-.42.04-.61.07-.2.02-.4.03-.61.03-.51,0-.91-.05-1.21-.14-.3-.09-.54-.23-.71-.42-.18-.18-.29-.41-.35-.69-.06-.28-.1-.6-.11-.95v-5.08h-1.43v-1.43h-.02ZM83.33,14.07h1.8v1.17h.03c.27-.5.64-.86,1.12-1.07.48-.22.99-.33,1.55-.33.68,0,1.27.12,1.77.36.5.23.92.56,1.26.98.34.42.58.91.75,1.46.17.55.25,1.15.25,1.78,0,.58-.08,1.14-.23,1.68-.15.54-.38,1.02-.68,1.44-.3.42-.69.75-1.16,1s-1.02.38-1.65.38c-.28,0-.55-.03-.83-.08-.28-.05-.55-.13-.8-.24-.25-.11-.5-.25-.7-.43-.22-.18-.4-.38-.55-.6h-.03v4.3h-1.9v-11.79ZM89.96,18.38c0-.39-.05-.76-.15-1.13-.1-.37-.25-.69-.45-.97-.2-.29-.45-.51-.75-.68-.3-.17-.64-.26-1.03-.26-.8,0-1.4.28-1.8.83-.4.55-.61,1.29-.61,2.21,0,.44.05.84.16,1.21.11.37.26.69.48.96.21.27.46.48.75.63.29.16.64.23,1.02.23.44,0,.8-.09,1.1-.27.3-.18.55-.41.74-.69.19-.29.34-.6.42-.96.08-.36.12-.73.12-1.11M93.31,10.79h1.9v1.8h-1.9v-1.8ZM93.31,14.07h1.9v8.61h-1.9v-8.61ZM96.9,10.79h1.9v11.89h-1.9v-11.89ZM104.61,22.91c-.69,0-1.3-.12-1.84-.34-.54-.23-.99-.55-1.37-.94-.37-.4-.66-.88-.85-1.43-.19-.55-.29-1.17-.29-1.83s.1-1.26.29-1.81c.19-.55.48-1.03.85-1.43.37-.4.83-.71,1.37-.94.54-.23,1.15-.34,1.84-.34s1.3.12,1.84.34c.54.23.99.54,1.37.94.37.4.66.88.85,1.43.19.55.29,1.16.29,1.81s-.1,1.28-.29,1.83c-.19.55-.48,1.03-.85,1.43-.37.4-.83.71-1.37.94-.54.23-1.15.34-1.84.34M104.61,21.41c.42,0,.79-.09,1.1-.27.31-.18.56-.41.76-.7.2-.29.34-.61.45-.97.09-.36.14-.73.14-1.11s-.05-.73-.14-1.1c-.09-.37-.24-.69-.45-.97-.2-.29-.45-.51-.76-.69-.31-.18-.68-.27-1.1-.27s-.79.09-1.1.27c-.31.18-.56.41-.76.69-.2.29-.34.6-.45.97-.09.37-.14.73-.14,1.1s.05.75.14,1.11c.09.36.24.69.45.97s.45.52.76.7c.31.18.68.27,1.1.27M109.51,14.07h1.43v-2.58h1.9v2.58h1.71v1.42h-1.71v4.6c0,.2,0,.37.03.52.02.14.06.27.12.37.06.1.15.18.28.23.12.05.29.08.5.08.13,0,.27,0,.4,0,.13,0,.27-.02.4-.06v1.47c-.21.02-.42.04-.61.07-.2.02-.4.03-.61.03-.51,0-.91-.05-1.21-.14-.3-.09-.54-.23-.71-.42-.18-.18-.29-.41-.35-.69-.06-.28-.1-.6-.11-.95v-5.08h-1.43v-1.43h-.02Z"/>
                                            <polygon class="cls-6" points="42.26 10.79 33.57 10.79 30.89 2.51 28.19 10.79 19.5 10.78 26.54 15.9 23.85 24.16 30.89 19.05 37.92 24.16 35.23 15.9 42.26 10.79"/>
                                            <polygon class="cls-1" points="35.84 17.77 35.23 15.9 30.89 19.05 35.84 17.77"/>
                                        </g>
                                        <g>
                                            <path class="cls-8" d="M43.79,33.2l1.02,2.07c.07.14.2.23.35.25l2.28.33c.38.06.53.52.26.79l-1.65,1.61c-.11.11-.16.26-.13.41l.39,2.27c.07.38-.33.67-.67.49l-2.04-1.07c-.14-.07-.3-.07-.43,0l-2.04,1.07c-.34.18-.74-.11-.67-.49l.39-2.27c.03-.15-.02-.3-.13-.41l-1.65-1.61c-.28-.27-.12-.74.26-.79l2.28-.33c.15-.02.28-.12.35-.25l1.02-2.07c.17-.35.66-.35.83,0Z"/>
                                            <path class="cls-8" d="M55.62,33.2l1.02,2.07c.07.14.2.23.35.25l2.28.33c.38.06.53.52.26.79l-1.65,1.61c-.11.11-.16.26-.13.41l.39,2.27c.07.38-.33.67-.67.49l-2.04-1.07c-.14-.07-.3-.07-.43,0l-2.04,1.07c-.34.18-.74-.11-.67-.49l.39-2.27c.03-.15-.02-.3-.13-.41l-1.65-1.61c-.28-.27-.12-.74.26-.79l2.28-.33c.15-.02.28-.12.35-.25l1.02-2.07c.17-.35.66-.35.83,0Z"/>
                                            <path class="cls-8" d="M67.45,33.2l1.02,2.07c.07.14.2.23.35.25l2.28.33c.38.06.53.52.26.79l-1.65,1.61c-.11.11-.16.26-.13.41l.39,2.27c.07.38-.33.67-.67.49l-2.04-1.07c-.14-.07-.3-.07-.43,0l-2.04,1.07c-.34.18-.74-.11-.67-.49l.39-2.27c.03-.15-.02-.3-.13-.41l-1.65-1.61c-.28-.27-.12-.74.26-.79l2.28-.33c.15-.02.28-.12.35-.25l1.02-2.07c.17-.35.66-.35.83,0Z"/>
                                            <path class="cls-8" d="M79.28,33.2l1.02,2.07c.07.14.2.23.35.25l2.28.33c.38.06.53.52.26.79l-1.65,1.61c-.11.11-.16.26-.13.41l.39,2.27c.07.38-.33.67-.67.49l-2.04-1.07c-.14-.07-.3-.07-.43,0l-2.04,1.07c-.34.18-.74-.11-.67-.49l.39-2.27c.03-.15-.02-.3-.13-.41l-1.65-1.61c-.28-.27-.12-.74.26-.79l2.28-.33c.15-.02.28-.12.35-.25l1.02-2.07c.17-.35.66-.35.83,0Z"/>
                                        </g>
                                        </g>
                                        <g>
                                        <path class="cls-8" d="M91.11,33.2c-.17-.35-.66-.35-.83,0l-1.02,2.07c-.07.14-.2.23-.35.25l-2.28.33c-.38.06-.53.52-.26.79l1.65,1.61c.11.11.16.26.13.41l-.39,2.27c-.07.38.33.67.67.49l2.04-1.07c.14-.07.3-.07.43,0l.99.52v-6.08l-.79-1.6Z"/>
                                        <path class="cls-5" d="M95.02,36.65c.28-.27.12-.74-.26-.79l-2.28-.33c-.15-.02-.28-.12-.35-.25l-.23-.47v6.08l1.05.55c.34.18.74-.11.67-.49l-.39-2.27c-.03-.15.02-.3.13-.41l1.65-1.61Z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                        <g>
                                            <path class="cls-3" d="M230.82,12.27c0-.05-.04-.12-.09-.14-.11-.06-.27-.1-.61-.1-.75,0-1.41.37-1.7,1v-.76c0-.06-.05-.12-.12-.12h-1.12c-.06,0-.12.05-.12.12v5.16c0,.06.05.12.12.12h1.18c.06,0,.12-.05.12-.12v-2.32c0-1.03.72-1.55,1.65-1.55.22,0,.44.04.54.08.08.02.15-.03.15-.12v-1.26h0ZM223.29,12.02c1.66,0,2.89,1.14,2.89,2.83s-1.24,2.83-2.88,2.83-2.88-1.14-2.88-2.83c0-1.69,1.22-2.83,2.87-2.83h0ZM223.29,16.28c.81,0,1.43-.57,1.43-1.43s-.62-1.44-1.43-1.44-1.42.58-1.42,1.44c0,.86.63,1.43,1.42,1.43h0ZM216.74,12.02c1.66,0,2.88,1.14,2.88,2.83s-1.24,2.83-2.88,2.83-2.89-1.14-2.89-2.83,1.23-2.83,2.88-2.83h0ZM216.74,16.28c.81,0,1.43-.57,1.43-1.43s-.62-1.44-1.42-1.44-1.42.58-1.42,1.44c0,.87.61,1.44,1.41,1.43h0ZM212.86,10c.06,0,.12.05.12.12v7.32c0,.06-.05.12-.12.12h-1.18c-.06,0-.12-.05-.12-.12v-.64c-.4.56-1,.89-1.78.89-1.33,0-2.44-1.01-2.44-2.84s1.11-2.84,2.42-2.84c.84,0,1.44.4,1.8.92v-2.81c0-.06.05-.12.12-.12h1.17ZM210.21,16.31c.79,0,1.41-.56,1.41-1.45s-.61-1.45-1.41-1.45-1.41.58-1.41,1.45.61,1.45,1.41,1.45h0ZM206.57,15.93c0,1.23-.89,1.76-2.32,1.76-.98,0-1.83-.27-2.32-.82-.04-.05-.04-.11,0-.16l.68-.89c.05-.06.13-.06.18,0,.36.37.92.6,1.6.6.4,0,.72-.11.72-.41s-.3-.36-1.2-.55c-.79-.16-1.78-.53-1.78-1.7,0-1.1.86-1.72,2.26-1.72.93,0,1.59.28,2.05.72.05.05.05.12,0,.16l-.65.85c-.04.05-.12.06-.17.02-.31-.29-.84-.46-1.36-.46-.44,0-.68.14-.68.37,0,.27.3.33,1.24.54.94.2,1.73.56,1.73,1.69h0ZM201.13,15.93c0,1.23-.89,1.76-2.32,1.76-.99,0-1.83-.27-2.32-.82-.03-.05-.03-.11,0-.16l.68-.89c.04-.06.13-.06.18,0,.36.37.92.6,1.6.6.4,0,.72-.11.72-.41s-.3-.36-1.2-.55c-.79-.16-1.78-.53-1.78-1.7,0-1.1.86-1.72,2.26-1.72.93,0,1.59.28,2.05.72.05.04.05.12,0,.16l-.65.84c-.04.05-.12.06-.17.02-.31-.29-.84-.46-1.36-.46-.44,0-.68.14-.68.37,0,.27.3.33,1.24.54.93.2,1.72.56,1.73,1.69h0ZM193.14,12.04c1.56,0,2.35.69,2.35,2.19v3.22c0,.06-.05.12-.12.12h-1.18c-.06,0-.12-.05-.12-.12v-.61c-.27.44-.81.84-1.65.84-1.07,0-1.81-.68-1.81-1.68s.73-1.6,1.72-1.69l1.47-.13c.19-.02.27-.09.27-.22v-.09c0-.31-.3-.54-.93-.54-.51,0-1.05.15-1.28.58-.03.06-.11.07-.16.03l-.86-.62s-.06-.1-.03-.15c.37-.75,1.22-1.13,2.34-1.13h0ZM194.07,15.37v-.22l-1.32.16c-.44.06-.66.29-.66.59,0,.35.27.58.76.58.75,0,1.23-.52,1.22-1.11h0ZM189.64,10.12v7.32c0,.07-.05.12-.12.12h-1.19c-.06,0-.12-.05-.12-.12v-7.32c0-.06.05-.12.12-.12h1.19c.07,0,.12.05.12.12h0ZM186.92,12.15c.06,0,.12.05.12.12v4.92c0,1.39-.66,2.65-2.92,2.65-1.03,0-1.75-.3-2.29-.77-.04-.03-.05-.1.02-.22l.53-.9c.03-.06.12-.08.17-.02.43.38.91.58,1.52.58,1.2,0,1.57-.61,1.57-1.39v-.34c-.35.51-.95.82-1.72.82-1.43,0-2.52-.98-2.52-2.78s1.14-2.81,2.48-2.81c.82,0,1.45.4,1.75.89v-.63c0-.06.05-.12.12-.12h1.16ZM184.27,16.3c.8,0,1.39-.56,1.39-1.45s-.59-1.45-1.39-1.45-1.41.58-1.41,1.45.61,1.45,1.41,1.45h0Z"/>
                                            <path class="cls-2" d="M175.15,23.21h-13.18c0,1.83,1.47,3.31,3.3,3.31h9.88c1.82,0,3.29-1.48,3.29-3.31v-13.62c0-.06-.05-.12-.12-.12h-3.06c-.06,0-.12.05-.12.12v13.62h0ZM175.15,3.31c1.82,0,3.29,1.48,3.29,3.32h-13.18s0,13.62,0,13.62c0,.06-.05.12-.12.12h-3.06c-.06,0-.12-.05-.12-.12V6.63c0-1.83,1.47-3.32,3.3-3.32h9.9Z"/>
                                        </g>
                                        <g>
                                            <path class="cls-8" d="M173.15,33.2l1.02,2.07c.07.14.2.23.35.25l2.28.33c.38.06.53.52.26.79l-1.65,1.61c-.11.11-.16.26-.13.41l.39,2.27c.07.38-.33.67-.67.49l-2.04-1.07c-.14-.07-.3-.07-.43,0l-2.04,1.07c-.34.18-.74-.11-.67-.49l.39-2.27c.03-.15-.02-.3-.13-.41l-1.65-1.61c-.28-.27-.12-.74.26-.79l2.28-.33c.15-.02.28-.12.35-.25l1.02-2.07c.17-.35.66-.35.83,0Z"/>
                                            <path class="cls-8" d="M184.98,33.2l1.02,2.07c.07.14.2.23.35.25l2.28.33c.38.06.53.52.26.79l-1.65,1.61c-.11.11-.16.26-.13.41l.39,2.27c.07.38-.33.67-.67.49l-2.04-1.07c-.14-.07-.3-.07-.43,0l-2.04,1.07c-.34.18-.74-.11-.67-.49l.39-2.27c.03-.15-.02-.3-.13-.41l-1.65-1.61c-.28-.27-.12-.74.26-.79l2.28-.33c.15-.02.28-.12.35-.25l1.02-2.07c.17-.35.66-.35.83,0Z"/>
                                            <path class="cls-8" d="M196.81,33.2l1.02,2.07c.07.14.2.23.35.25l2.28.33c.38.06.53.52.26.79l-1.65,1.61c-.11.11-.16.26-.13.41l.39,2.27c.07.38-.33.67-.67.49l-2.04-1.07c-.14-.07-.3-.07-.43,0l-2.04,1.07c-.34.18-.74-.11-.67-.49l.39-2.27c.03-.15-.02-.3-.13-.41l-1.65-1.61c-.28-.27-.12-.74.26-.79l2.28-.33c.15-.02.28-.12.35-.25l1.02-2.07c.17-.35.66-.35.83,0Z"/>
                                            <path class="cls-8" d="M208.64,33.2l1.02,2.07c.07.14.2.23.35.25l2.28.33c.38.06.53.52.26.79l-1.65,1.61c-.11.11-.16.26-.13.41l.39,2.27c.07.38-.33.67-.67.49l-2.04-1.07c-.14-.07-.3-.07-.43,0l-2.04,1.07c-.34.18-.74-.11-.67-.49l.39-2.27c.03-.15-.02-.3-.13-.41l-1.65-1.61c-.28-.27-.12-.74.26-.79l2.28-.33c.15-.02.28-.12.35-.25l1.02-2.07c.17-.35.66-.35.83,0Z"/>
                                        </g>
                                        </g>
                                        <g>
                                        <path class="cls-8" d="M215.98,35.86c-.38.06-.53.52-.26.79l1.65,1.61c.11.11.16.26.13.41l-.39,2.27c-.07.38.33.67.67.49l.3-.16v-5.73l-2.11.31Z"/>
                                        <path class="cls-5" d="M224.38,36.65c.28-.27.12-.74-.26-.79l-2.28-.33c-.15-.02-.28-.12-.35-.25l-1.02-2.07c-.17-.35-.66-.35-.83,0l-1.02,2.07c-.07.14-.2.23-.35.25l-.18.03v5.73l1.75-.92c.14-.07.3-.07.43,0l2.04,1.07c.34.18.74-.11.67-.49l-.39-2.27c-.03-.15.02-.3.13-.41l1.65-1.61Z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                        <g>
                                            <path class="cls-4" d="M293.5,9.35h2.67v16.5h-2.67V9.35Z"/>
                                            <path class="cls-4" d="M305.47,20.63c0,2.56-2.09,2.79-2.79,2.79-1.63,0-1.86-1.51-1.86-2.32v-6.39h-2.67v6.28c0,1.51.46,2.91,1.39,3.72.81.81,1.86,1.16,3.14,1.16.93,0,2.09-.23,2.79-.93v.93h2.67v-11.16h-2.67s0,5.93,0,5.93Z"/>
                                            <path class="cls-4" d="M313.37,10.63h-2.67v4.07h-1.98v2.56h1.98v8.6h2.67v-8.6h1.98v-2.56h-1.98v-4.07Z"/>
                                            <path class="cls-4" d="M323.71,22.48c-.58.46-1.39.81-2.21.81-1.86,0-3.14-1.39-3.14-3.25s1.28-3.14,3.14-3.14c.81,0,1.63.23,2.21.81l.35.35,1.86-1.74-.46-.35c-1.05-.93-2.44-1.51-3.95-1.51-3.25,0-5.7,2.44-5.7,5.7s2.44,5.7,5.7,5.7c1.51,0,2.91-.58,3.95-1.51l.46-.35-1.86-1.86-.35.35Z"/>
                                            <path class="cls-4" d="M335.34,15.63c-.81-.81-1.63-1.16-2.91-1.16-.93,0-1.86.23-2.56.93v-6.04h-2.67v16.5h2.67v-6.16c0-2.56,1.74-2.79,2.44-2.79,1.63,0,1.51,1.51,1.51,2.32v6.51h2.67v-6.39c0-1.51-.35-2.91-1.16-3.72Z"/>
                                            <circle class="cls-7" cx="321.39" cy="20.16" r="1.86"/>
                                            <path class="cls-4" d="M289.78,21.79c-.93.93-2.32,1.51-3.84,1.51-2.91,0-5-2.32-5-5.46s2.09-5.46,5.11-5.46c1.39,0,2.79.58,3.84,1.63l.35.35,1.74-1.74-.35-.35c-1.51-1.51-3.49-2.32-5.58-2.32-4.42-.12-7.67,3.37-7.67,7.9s3.25,8.02,7.55,8.02c2.09,0,4.18-.81,5.58-2.32l.35-.35-1.74-1.74-.35.35Z"/>
                                        </g>
                                        <g>
                                            <path class="cls-8" d="M284.2,33.2l1.02,2.07c.07.14.2.23.35.25l2.28.33c.38.06.53.52.26.79l-1.65,1.61c-.11.11-.16.26-.13.41l.39,2.27c.07.38-.33.67-.67.49l-2.04-1.07c-.14-.07-.3-.07-.43,0l-2.04,1.07c-.34.18-.74-.11-.67-.49l.39-2.27c.03-.15-.02-.3-.13-.41l-1.65-1.61c-.28-.27-.12-.74.26-.79l2.28-.33c.15-.02.28-.12.35-.25l1.02-2.07c.17-.35.66-.35.83,0Z"/>
                                            <path class="cls-8" d="M296.03,33.2l1.02,2.07c.07.14.2.23.35.25l2.28.33c.38.06.53.52.26.79l-1.65,1.61c-.11.11-.16.26-.13.41l.39,2.27c.07.38-.33.67-.67.49l-2.04-1.07c-.14-.07-.3-.07-.43,0l-2.04,1.07c-.34.18-.74-.11-.67-.49l.39-2.27c.03-.15-.02-.3-.13-.41l-1.65-1.61c-.28-.27-.12-.74.26-.79l2.28-.33c.15-.02.28-.12.35-.25l1.02-2.07c.17-.35.66-.35.83,0Z"/>
                                            <path class="cls-8" d="M307.86,33.2l1.02,2.07c.07.14.2.23.35.25l2.28.33c.38.06.53.52.26.79l-1.65,1.61c-.11.11-.16.26-.13.41l.39,2.27c.07.38-.33.67-.67.49l-2.04-1.07c-.14-.07-.3-.07-.43,0l-2.04,1.07c-.34.18-.74-.11-.67-.49l.39-2.27c.03-.15-.02-.3-.13-.41l-1.65-1.61c-.28-.27-.12-.74.26-.79l2.28-.33c.15-.02.28-.12.35-.25l1.02-2.07c.17-.35.66-.35.83,0Z"/>
                                            <path class="cls-8" d="M319.69,33.2l1.02,2.07c.07.14.2.23.35.25l2.28.33c.38.06.53.52.26.79l-1.65,1.61c-.11.11-.16.26-.13.41l.39,2.27c.07.38-.33.67-.67.49l-2.04-1.07c-.14-.07-.3-.07-.43,0l-2.04,1.07c-.34.18-.74-.11-.67-.49l.39-2.27c.03-.15-.02-.3-.13-.41l-1.65-1.61c-.28-.27-.12-.74.26-.79l2.28-.33c.15-.02.28-.12.35-.25l1.02-2.07c.17-.35.66-.35.83,0Z"/>
                                        </g>
                                        </g>
                                        <g>
                                        <path class="cls-8" d="M331.52,33.2c-.17-.35-.66-.35-.83,0l-1.02,2.07c-.07.14-.2.23-.35.25l-2.28.33c-.38.06-.53.52-.26.79l1.65,1.61c.11.11.16.26.13.41l-.39,2.27c-.07.38.33.67.67.49l2.04-1.07c.14-.07.3-.07.43,0l1.09.57v-5.93l-.89-1.79Z"/>
                                        <path class="cls-5" d="M335.43,36.65c.28-.27.12-.74-.26-.79l-2.28-.33c-.15-.02-.28-.12-.35-.25l-.14-.27v5.93l.96.5c.34.18.74-.11.67-.49l-.39-2.27c-.03-.15.02-.3.13-.41l1.65-1.61Z"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="grid-item col-span-1 content-center">
                            <div class=" w-[100%] max-w-[450px] ml-auto bg-[#fff] rounded-[10px] p-[30px]">
                                <p class="text-[#000] text-[18px] mb-5">Not sure where to start? Let's have a chat</p>
                                <label class="text-[#000] text-[13px] mb-3">Full Name</label>
                                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-[#FF4D02] focus:border-[#FF4D02] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#FF4D02] dark:focus:border-[#FF4D02] h-[45px] mb-5" placeholder="Enter name">
                                <label class="text-[#000] text-[13px] mb-3">Company email</label>
                                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-[#FF4D02] focus:border-[#FF4D02] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#FF4D02] dark:focus:border-[#FF4D02] h-[45px] mb-10" placeholder="Enter email">
                                <div class="block mb-10">
                                    <a href="#" class="button inline-block align-middle button-small rounded-md px-12 py-3 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange ">BOOK A CALL</a>
                                </div>
                                <p class=" text-gray-400 text-[13px]">First developer start within days. No aggressive sales pitch.</p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
		<?php endif; ?>
         
	
	
    <?php if (get_row_layout() == 'profile_section') : ?>	
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="block">
				<?php if(get_sub_field('small_title')): ?>
                    <div class="text-center small-intro"><?php echo get_sub_field('small_title'); ?></div>
				<?php endif; ?>

				<?php if(get_sub_field('main_title')): ?>
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[60px]">
                        <?php echo get_sub_field('main_title'); ?>	<span class="text-dark-orange block"><?php echo get_sub_field('orange_title'); ?></span> 
                    </h2>
				<?php endif; ?>	
				
				<?php if(get_sub_field('paragraph')): ?>
                    <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-10"><?php echo get_sub_field('paragraph'); ?></p>
				<?php endif; ?>		
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-9 gap-4">
				
				<?php if(have_rows('vetted_box')): ?>
				<?php while(have_rows('vetted_box')): the_row(); ?>
				<?php 
				  $developer_name = get_sub_field('developer_name'); 
				  $profile = get_sub_field('profile'); 
				  $experience = get_sub_field('experience'); 
				  $avai = get_sub_field('avai'); 
				?> 
                    <div class="grid-item col-span-3">
                        <div class="custom-bg custom-border">
                            <div class="flex items-center">
							<?php $poet_image = get_sub_field('image');
								if (!empty($poet_image) && isset($poet_image['url'])):
							?>
                                <img src="<?php echo esc_url($poet_image['url']); ?>" alt="Author" class="w-16 h-16 rounded-full mr-4">
                            <?php endif; ?>	    
								<div>
                                    <span class="text-white text-2xl font-medium block"><?php echo $developer_name;?></span>
                                    <span class="text-white text-sm font-normal block"><?php echo $profile;?></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 custom-grid-bg sm:grid-cols-2 gap-4 my-7 px-4 py-3 rounded-lg">
                                <div class="flex flex-col sm:flex-row">
                                    <img src="<?php echo get_template_directory_uri();?>/images/Bag.svg" alt="Experience 1" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
                                    <div>
                                        <h3 class="text-sm font-normal pb-2 text-white">Experience</h3>
                                        <p class="text-white text-base font-medium"><?php echo $experience;?></p>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row">
                                    <img src="<?php echo get_template_directory_uri();?>/images/smallclock.svg" alt="Experience 2" class="w-8 h-8 rounded-lg mb-4 sm:mb-0 sm:mr-4">
                                    <div>
                                        <h3 class="text-sm font-normal pb-2 text-white">Available in</h3>
                                        <p class="text-white text-base font-medium"><?php echo $avai;?></p>
                                    </div>
                                </div>
                            </div>
                            <h2 class="text-sm font-medium text-white pb-5">Technologies</h2>
                            <div class="block mb-3">
                                <ul class="card-skill">
								<?php if(have_rows('technology')): ?>
								 <?php while(have_rows('technology')): the_row(); ?>
								 <?php 
								  $tech_name = get_sub_field('name'); 
								 ?>
                                    <li> <?php echo $tech_name;?> 
									<?php $tech_image = get_sub_field('image');
										if (!empty($tech_image) && isset($tech_image['url'])):
									?>
									<img src="<?php echo esc_url($tech_image['url']); ?>" alt="Technology 1" class="w-4 h-4 inline-block rounded-full">
									<?php endif; ?> 
									</li>
                                <?php endwhile; ?>	
								<?php endif; ?>
								</ul>
                            </div>
							
							<?php  
								 $interview_screening_value = get_sub_field('interview_screening');
								 $interview_screening_percent = get_sub_field('interview_screening');
								 $interview_screening_multiply = $interview_screening_percent* 10;
								 $interview_screening_color = get_sub_field('interview_screening_color');
							 ?>
                            <div class="w-full py-4">
                                <p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Coding Ability</p>
                                <div class="w-full bg-gray-200 rounded-full h-2 mb-1 dark:bg-gray-700 relative">
                                    <span class="tooltip-box" style="background:<?php echo $interview_screening_color;?>; left:calc(<?php echo $interview_screening_multiply;?>% - 16px)">
                                        <?php echo $interview_screening_value;?>								
                                        <svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
                                        <path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="<?php echo $interview_screening_color;?>"></path>
                                        </svg>
                                    </span>
                                    <div class="h-2 rounded-full dark:bg-blue-500" style="width: <?php echo $interview_screening_multiply;?>%; background:<?php echo $interview_screening_color;?>;"></div>
                                </div>
                                <p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
                            </div>
							
							<?php  
								 $technical_assignment_value = get_sub_field('technical_assignment');
								 $technical_assignment_percent = get_sub_field('technical_assignment');
								 $technical_assignment_multiply = $technical_assignment_percent* 10;
								 $technical_assignment_color = get_sub_field('technical_assignment_color');
							 ?>
                            <div class="w-full py-4">
                                <p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Problem Solving</p>
                                <div class="w-full bg-gray-200 rounded-full h-2 mb-1 dark:bg-gray-700 relative">
                                    <span class="tooltip-box" style="background:<?php echo $technical_assignment_color;?>; left:calc(<?php echo $technical_assignment_multiply;?>% - 16px)">
                                        <?php echo $technical_assignment_value;?>								
                                        <svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
                                        <path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="<?php echo $technical_assignment_color;?>"></path>
                                        </svg>
                                    </span>
                                    <div class="h-2 rounded-full dark:bg-blue-500" style="width: <?php echo $technical_assignment_multiply;?>%; background:<?php echo $technical_assignment_color;?>;"></div>
                                </div>
                                <p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
                            </div>
							
							<?php 
								 $language_proficiency_value = get_sub_field('language_proficiency');
								 $language_proficiency_percent = get_sub_field('language_proficiency');
								 $language_proficiency_multiply = $language_proficiency_percent* 10;
								 $language_proficiency_color = get_sub_field('language_proficiency_color');
							 ?>
                            <div class="w-full py-4">
                                <p class=" text-[14px] text-[#fff] font-semibold mb-[8px]">Communication Skills</p>
                                <div class="w-full bg-gray-200 rounded-full h-2 mb-1 dark:bg-gray-700 relative">
                                    <span class="tooltip-box" style="background:<?php echo $language_proficiency_color;?>; left:calc(<?php echo $language_proficiency_multiply;?>% - 16px)">
                                        <?php echo $language_proficiency_value;?>								
                                        <svg class=" absolute bottom-[-8px] left-[7px]" xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 8 5" fill="none">
                                        <path d="M3.24372 4.12713C3.6425 4.58759 4.35681 4.58759 4.75558 4.12713L7.89677 0.5H0.102539L3.24372 4.12713Z" fill="<?php echo $language_proficiency_color;?>"></path>
                                        </svg>
                                    </span>
                                    <div class="h-2 rounded-full dark:bg-blue-500" style="width: <?php echo $language_proficiency_multiply;?>%; background:<?php echo $language_proficiency_color;?>;"></div>
                                </div>
                                <p class=" text-[12px] text-[#fff] font-semibold mb-[0px]">0 <span class="float-end">10</span></p>
                            </div>
                            <div class="flex flex-wrap -mx-2 mt-4">
                                <div class="w-1/2 px-2 mb-4">
								<?php if(get_sub_field('per_hour')): ?>
                                    <p class="font-medium text-2xl text-white"><?php echo get_sub_field('per_hour'); ?></p>
								<?php endif; ?>	
                                </div>
                                <div class="w-1/2 px-2 mb-4 text-right">
                                    <a href="/contact-us/"> <button class="profile-button-custom"> Hire Now </button> </a>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?>	
				<?php endif; ?> 
                    
                    

                    
                </div>
                <div class="block text-center mt-12">
                    <a href="/contact-us/" class="button inline-block align-middle button-small rounded-[30px] px-8 py-4 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange "> FIND A PERFECT DEVELOPER</a>
                </div>

            </div>
        </section>
	<?php endif; ?> 	
	
    <?php if (get_row_layout() == 'box_section') : ?>	
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="block">
				<?php if(get_sub_field('small_title')): ?>
                    <div class="text-center small-intro"><?php echo get_sub_field('small_title'); ?></div>
				<?php endif; ?>	
				<?php if(get_sub_field('main_title')): ?>	
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[60px]">
                        <?php echo get_sub_field('main_title'); ?>
                    </h2>
				<?php endif; ?>
				
				<?php if(get_sub_field('paragraph')): ?>	
                    <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-10"><?php echo get_sub_field('paragraph'); ?></p>
                <?php endif; ?>
				</div>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-3 lg:gap-6">
				
				<?php if(have_rows('box_pattern')): ?>
				<?php while(have_rows('box_pattern')): the_row(); ?>
				<?php 
				  $heading = get_sub_field('heading'); 
				  $paragraph = get_sub_field('paragraph'); 
				  $box_color = get_sub_field('box_color'); 
				  $gap_class = get_sub_field('gap_class'); 
				?>
				
                    <div class="grid-item col-span-12 lg:<?php echo $box_color;?> p-7 rounded-[16px] content-center">
                        <div class="grid grid-cols-1 lg:grid-cols-12 <?php echo $gap_class;?>">
                            <div class="grid-item col-span-8">
                                <h5 class=" text-white text-[24px] font-semibold mb-4 leading-[30px]"><?php echo $heading;?></h5>
                                <p class=" text-white text-[16px] font-normal"><?php echo $paragraph;?></p>
                            </div>
                            <div class="grid-item col-span-4">
							<?php $image_user = get_sub_field('image');
								if (!empty($image_user) && isset($image_user['url'])):
							?>
                                <img src="<?php echo esc_url($image_user['url']); ?>">
							<?php endif; ?> 	
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?>	
				<?php endif; ?>
                    

                </div>
            </div>
        </section>
	<?php endif; ?> 

	<?php if (get_row_layout() == 'price_section') : ?>
	<section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="block">
				<?php if(get_sub_field('small_title')): ?>
                    <div class="text-center small-intro"><?php echo get_sub_field('small_title'); ?></div>
				<?php endif; ?> 
				
				<?php if(get_sub_field('main_heading')): ?>	
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[60px]">
                        <?php echo get_sub_field('main_heading'); ?><br><span class="text-dark-orange"><?php echo get_sub_field('orange_heading'); ?></span>
                    </h2>
				<?php endif; ?> 
				
				<?php if(get_sub_field('paragraph')): ?>	
                    <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-10">S<?php echo get_sub_field('paragraph'); ?></p>
				<?php endif; ?> 	
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 content-center gap-6 md:gap-32 relative z-10 footer-background px-28 py-16 border border-[#3c1201]">
                        <div class="grid-item col-span-1 relative content-center divider-line">
						<?php if(get_sub_field('price')): ?>
                            <h5 class="text-4xl text-center font-extrabold text-[35px] md:text-[140px] mb-4 text-dark-orange lg:leading-[80px]"><?php echo get_sub_field('price'); ?></h5>
						<?php endif; ?> 
						
						<?php if(get_sub_field('tagline')): ?>	
                            <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-3"><?php echo get_sub_field('tagline'); ?></p>
						<?php endif; ?> 
						
						<?php if(get_sub_field('extra_text')): ?>	
                            <p class="text-center font-normal text-[14px] text-gray-200"><?php echo get_sub_field('extra_text'); ?></p>
						<?php endif; ?> 	
                        </div>
                        <div class="grid-item col-span-1 content-center">
                            <div class="grid grid-cols-1">
							
							<?php if(have_rows('timing_section')): ?>
							<?php while(have_rows('timing_section')): the_row(); ?>
							<?php 
							  $heading = get_sub_field('heading'); 
							  $paragraph = get_sub_field('paragraph'); 
							  $box_color = get_sub_field('box_color'); 
							  $gap_class = get_sub_field('gap_class'); 
							?>
                                <div class="grid-item col-span-1 relative pl-[80px] mb-8">
                                    <div class="absolute w-[60px] h-[60px] rounded-[50%] left-0 top-[calc(50%-30px)] overflow-hidden text-center">
									<?php $image_user = get_sub_field('image');
										if (!empty($image_user) && isset($image_user['url'])):
									?>
                                        <img class="w-[100%] inline-block" src="<?php echo esc_url($image_user['url']); ?>" alt="">
									<?php endif; ?> 		
                                    </div>
                                    <h6 class="font-semibold text-[25px] text-white"><?php echo $heading;?></h6>
                                    <p class="text-white text-[16px]"><?php echo $paragraph;?></p>
                                </div>
							<?php endwhile; ?>	
							<?php endif; ?>	
                                
                            </div>
                        </div>
                </div>
				<?php if(get_sub_field('button_name')): ?>
                <div class="block text-center mt-10">
                    <a href="<?php echo get_sub_field('button_url'); ?>" class="button inline-block align-middle button-small rounded-[30px] px-12 py-4 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange "><?php echo get_sub_field('button_name'); ?></a>
                </div>
				<?php endif; ?>	
            </div>
    </section>
	<?php endif; ?> 
	<?php endwhile; ?>
	<?php endif; ?>
	
	
	<section class="w-full px-3">
            <div class=" w-[100%] max-w-[90%] mx-auto py-16">
                <div class="block">
                    <div class="text-center small-intro">Testimonial</div>
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[60px]">
                        Don’t just take<br><span class="text-dark-orange">our word for it</span>
                    </h2>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-1 content-center gap-6 md:gap-32 relative">
                        <div class="testimonial-box" id="testimonial-slider">
                            <div class="slider-item">
                                <div class="grid grid-cols-12 gap-2 lg:gap-10 p-[30px] rounded-[20px] bg-[#C282FA]">
                                    <div class="grid-item col-span-6 content-center">
                                        <img class="h-[55px] w-auto" src="<?php echo get_template_directory_uri();?>/images/tiller-logo.png" alt="">
                                    </div>
                                    <div class="grid-item col-span-6 content-center text-right">
                                        <img class="h-[25px] !inline-block " src="<?php echo get_template_directory_uri();?>/images/rating_card_img.svg" alt="">
                                    </div>
                                    <div class="grid-item col-span-12">
                                        <p class="text-[20px] text-[#050403] leading-6">We have worked with Smart Working for 2 years and have been very pleased with the quality and skills of their developers. Their UK team has continued to deliver excellent ongoing support to us. We now have 6 people working for us on a long-term basis.</p>
                                    </div>
                                    <div class="grid-item col-span-10 content-center">
                                        <div class="user-name-box">
                                            <div class="image-box">
                                                <img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/auther-img.png" alt="">
                                            </div>
                                            <h6 class="text-[#050403] text-[24px]">Mark Cadby</h6>
                                            <p class="text-[#050403] text-[16px]">CTO</p>
                                        </div>
                                    </div>
                                    <div class="grid-item col-span-2 content-center text-right">
                                        <a href=""><img class="w-[33px] h-[33px] !inline-block text-right" src="<?php echo get_template_directory_uri();?>/images/linkedin_card_logo.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="grid grid-cols-12 gap-2 lg:gap-10 p-[30px] rounded-[20px] bg-[#77BDDF]">
                                    <div class="grid-item col-span-6 content-center">
                                        <img class="h-[55px] w-auto" src="<?php echo get_template_directory_uri();?>/images/tiller-logo.png" alt="">
                                    </div>
                                    <div class="grid-item col-span-6 content-center text-right">
                                        <img class="h-[25px] !inline-block " src="<?php echo get_template_directory_uri();?>/images/rating_card_img.svg" alt="">
                                    </div>
                                    <div class="grid-item col-span-12">
                                        <p class="text-[20px] text-[#050403] leading-6">We have worked with Smart Working for 2 years and have been very pleased with the quality and skills of their developers. Their UK team has continued to deliver excellent ongoing support to us. We now have 6 people working for us on a long-term basis.</p>
                                    </div>
                                    <div class="grid-item col-span-10 content-center">
                                        <div class="user-name-box">
                                            <div class="image-box">
                                                <img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/auther-img.png" alt="">
                                            </div>
                                            <h6 class="text-[#050403] text-[24px]">Mark Cadby</h6>
                                            <p class="text-[#050403] text-[16px]">CTO</p>
                                        </div>
                                    </div>
                                    <div class="grid-item col-span-2 content-center text-right">
                                        <a href=""><img class="w-[33px] h-[33px] !inline-block text-right" src="<?php echo get_template_directory_uri();?>/images/linkedin_card_logo.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="grid grid-cols-12 gap-2 lg:gap-10 p-[30px] rounded-[20px] bg-[#ECC1A1]">
                                    <div class="grid-item col-span-6 content-center">
                                        <img class="h-[55px] w-auto" src="<?php echo get_template_directory_uri();?>/images/tiller-logo.png" alt="">
                                    </div>
                                    <div class="grid-item col-span-6 content-center text-right">
                                        <img class="h-[25px] !inline-block " src="<?php echo get_template_directory_uri();?>/images/rating_card_img.svg" alt="">
                                    </div>
                                    <div class="grid-item col-span-12">
                                        <p class="text-[20px] text-[#050403] leading-6">We have worked with Smart Working for 2 years and have been very pleased with the quality and skills of their developers. Their UK team has continued to deliver excellent ongoing support to us. We now have 6 people working for us on a long-term basis.</p>
                                    </div>
                                    <div class="grid-item col-span-10 content-center">
                                        <div class="user-name-box">
                                            <div class="image-box">
                                                <img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/auther-img.png" alt="">
                                            </div>
                                            <h6 class="text-[#050403] text-[24px]">Mark Cadby</h6>
                                            <p class="text-[#050403] text-[16px]">CTO</p>
                                        </div>
                                    </div>
                                    <div class="grid-item col-span-2 content-center text-right">
                                        <a href=""><img class="w-[33px] h-[33px] !inline-block text-right" src="<?php echo get_template_directory_uri();?>/images/linkedin_card_logo.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="grid grid-cols-12 gap-2 lg:gap-10 p-[30px] rounded-[20px] bg-[#C282FA]">
                                    <div class="grid-item col-span-6 content-center">
                                        <img class="h-[55px] w-auto" src="<?php echo get_template_directory_uri();?>/images/tiller-logo.png" alt="">
                                    </div>
                                    <div class="grid-item col-span-6 content-center text-right">
                                        <img class="h-[25px] !inline-block " src="<?php echo get_template_directory_uri();?>/images/rating_card_img.svg" alt="">
                                    </div>
                                    <div class="grid-item col-span-12">
                                        <p class="text-[20px] text-[#050403] leading-6">We have worked with Smart Working for 2 years and have been very pleased with the quality and skills of their developers. Their UK team has continued to deliver excellent ongoing support to us. We now have 6 people working for us on a long-term basis.</p>
                                    </div>
                                    <div class="grid-item col-span-10 content-center">
                                        <div class="user-name-box">
                                            <div class="image-box">
                                                <img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/auther-img.png" alt="">
                                            </div>
                                            <h6 class="text-[#050403] text-[24px]">Mark Cadby</h6>
                                            <p class="text-[#050403] text-[16px]">CTO</p>
                                        </div>
                                    </div>
                                    <div class="grid-item col-span-2 content-center text-right">
                                        <a href=""><img class="w-[33px] h-[33px] !inline-block text-right" src="<?php echo get_template_directory_uri();?>/images/linkedin_card_logo.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item">
                                <div class="grid grid-cols-12 gap-2 lg:gap-10 p-[30px] rounded-[20px] bg-[#60E3D5]">
                                    <div class="grid-item col-span-6 content-center">
                                        <img class="h-[55px] w-auto" src="<?php echo get_template_directory_uri();?>/images/tiller-logo.png" alt="">
                                    </div>
                                    <div class="grid-item col-span-6 content-center text-right">
                                        <img class="h-[25px] !inline-block " src="<?php echo get_template_directory_uri();?>/images/rating_card_img.svg" alt="">
                                    </div>
                                    <div class="grid-item col-span-12">
                                        <p class="text-[20px] text-[#050403] leading-6">We have worked with Smart Working for 2 years and have been very pleased with the quality and skills of their developers. Their UK team has continued to deliver excellent ongoing support to us. We now have 6 people working for us on a long-term basis.</p>
                                    </div>
                                    <div class="grid-item col-span-10 content-center">
                                        <div class="user-name-box">
                                            <div class="image-box">
                                                <img class="w-[100%] h-[100%]" src="<?php echo get_template_directory_uri();?>/images/auther-img.png" alt="">
                                            </div>
                                            <h6 class="text-[#050403] text-[24px]">Mark Cadby</h6>
                                            <p class="text-[#050403] text-[16px]">CTO</p>
                                        </div>
                                    </div>
                                    <div class="grid-item col-span-2 content-center text-right">
                                        <a href=""><img class="w-[33px] h-[33px] !inline-block text-right" src="<?php echo get_template_directory_uri();?>/images/linkedin_card_logo.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
    </section>
		
	<?php if (have_rows('landing_block_section')) : ?>
	<?php while (have_rows('landing_block_section')) : the_row(); ?> 
	<?php if (get_row_layout() == 'simple_step_section') : ?> 
        <section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
			
			<div class="block">
			<?php if(get_sub_field('top_heading')): ?>
				<div class="text-center small-intro"><?php echo get_sub_field('top_heading'); ?></div>
			<?php endif; ?>
			
			<?php if(get_sub_field('main_heading')): ?>	
				<h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-10 text-white  lg:leading-[60px]">
					<?php echo get_sub_field('main_heading'); ?><br><span class="text-dark-orange"><?php echo get_sub_field('orange_heading'); ?></span>
				</h2>
			<?php endif; ?>	
			</div>
			
			
			<div class=" block footer-background border border-[#3c1201] p-[30px] lg:p-[70px]">
				<div class="grid grid-cols-1 lg:grid-cols-12 lg:gap-14 mb-4">
				<?php if(have_rows('step_section')): ?>
				<?php while(have_rows('step_section')): the_row(); ?>
				<?php 
				  $heading = get_sub_field('heading'); 
				  $paragraph = get_sub_field('paragraph'); 
				?>
					<div class="grid-item col-span-12 lg:col-span-4 mb-10 lg:mb-0 content-center text-center">
						<div class="block mb-5">
							<span class="bg-[#fff] inline-block w-[50px] h-[50px] rounded-[10px] p-2 text-center">
							<?php $icon_user = get_sub_field('image');
							  if (!empty($icon_user) && isset($icon_user['url'])):
							?>
								<img class="w-[100%]" src="<?php echo esc_url($icon_user['url']); ?>" alt="">
							<?php endif; ?> 	
							</span>
						</div>
						<h6 class=" text-white text-[25px] font-semibold mb-3"><?php echo $heading;?></h6>
						<p class=" text-white text-[16px]"><?php echo $paragraph;?></p>
					</div>
				<?php endwhile; ?>	
				<?php endif; ?>	
					
				</div>
            </div>
			<?php if(get_sub_field('button_name')): ?>
            <div class="block text-center mt-10">
                <a href="<?php echo get_sub_field('button_url'); ?>" class="button inline-block align-middle button-small rounded-[30px] px-12 py-4 border-dark-orange border-2 bg-dark-orange text-white text-[16px] hover:bg-transparent hover:text-dark-orange "><?php echo get_sub_field('button_name'); ?></a>
            </div>
			<?php endif; ?>	
            </div>
        </section>
		
		<?php endif; ?> 
	
		<?php if (get_row_layout() == 'review_section') : ?> 
		<section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-16">
                <div class="block">
				<?php if(get_sub_field('top_title')): ?>
                    <div class="text-center small-intro"><?php echo get_sub_field('top_title'); ?></div>
				<?php endif; ?>	
				
				<?php if(get_sub_field('first_title')): ?>
                    <h2 class="text-4xl text-center font-medium text-[35px] md:text-[56px] mb-4 text-white  lg:leading-[60px]">
                       <span class="inline-block align-middle"><?php echo get_sub_field('first_title'); ?></span> 
					   
					  <?php $title_image = get_sub_field('title_image');
						if (!empty($title_image) && isset($title_image['url'])):
					  ?> 
					   <img class="h-[60px] w-auto inline-block align-middle" src="<?php echo esc_url($title_image['url']); ?>" alt="<?php echo esc_url($title_image['alt']); ?>">
					  <?php endif; ?>  
					   <span class="inline-block align-middle"><?php echo get_sub_field('second_title'); ?></span>
                    </h2>
				<?php endif; ?>	
				<?php if(get_sub_field('description')): ?>	
                    <p class="text-center text-white font-medium text-2xl pt-[10px] px-0 mb-10"><?php echo get_sub_field('description'); ?></p>
                <?php endif; ?>
				</div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-10">
				
				<?php if(have_rows('review_box')): ?>
				<?php while(have_rows('review_box')): the_row(); ?>
				<?php 
					$name = get_sub_field('name'); 
					$description = get_sub_field('description'); 
				?>
                    <div class="trustpilot-bg mb-5">
                        <div class="flex">
						<?php $auth_image = get_sub_field('image');
							  if (!empty($auth_image) && isset($auth_image['url'])):
						  ?>
                            <div class="pr-4">
                                <img class="mb-7 w-48" src="<?php echo esc_url($auth_image['url']); ?>" alt="<?php echo esc_url($auth_image['alt']); ?>">
                            </div>
						<?php endif; ?>	
                            <div>
                                <p class="font-bold text-base text-white"> <?php echo $name;?> </p>
								<p class="text-sm pt-5 pilot-descri"> <?php echo $description;?> </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>	
				<?php endif; ?>    
                   
                </div>
            </div>
        </section>
		<?php endif; ?>
		
		<?php if (get_row_layout() == 'cta_section') : ?>
		
		<section class="w-full px-3">
            <div class=" w-[100%] max-w-[1280px] mx-auto py-24">
                <div class=" block relative rounded-[24px] vetting-bg">
                    <img class="absolute h-[100%] w-[50%] right-[0px] top-[0px] z-1" src="<?php echo get_template_directory_uri();?>/images/bg-line-box.png">
                    <div class="grid grid-cols-1 lg:grid-cols-12 content-center gap-4 relative z-10 h-[100%]">
                        <div class="grid-item col-span-1 lg:col-span-5 content-center h-[400px] py-[32px] px-[5%]">
						<?php if(get_sub_field('heading')): ?>
                            <h1 class=" text-white font-bold text-[32px] lg:text-[40px] lg:leading-[45px]"><?php echo get_sub_field('heading'); ?></h1>
						<?php endif; ?>	
						
						<?php if(get_sub_field('paragraph')): ?>
                            <p class=" text-white text-[16px] mt-[30px] mb-[30px]"><?php echo get_sub_field('paragraph'); ?></p>
						<?php endif; ?>		
                            <div class="block text-left mt-10">
                                <span class=" inline-block relative align-middle">
                                    <span class=" text-[14px] text-[#fff] block text-start font-bold">Excellent</span>
                                </span>
                                <span class=" inline-block relative align-middle ml-[5px]">
                                    <svg role="img" viewBox="0 0 251 46" xmlns="http://www.w3.org/2000/svg" style="height: 25px;">
                                        <title id="starRating-aab4m6af90i" lang="en-US">4.6 out of 5 star rating on Trustpilot</title>
                                        <g class="tp-star">
                                            <path class="tp-star-full" fill="#dcdce6" d="M0 46.330002h46.375586V0H0z"></path>
                                            <path class="tp-star__shape" d="M39.533936 19.711433L13.230239 38.80065l3.838216-11.797827L7.02115 19.711433h12.418975l3.837417-11.798624 3.837418 11.798624h12.418975zM23.2785 31.510075l7.183595-1.509576 2.862114 8.800152L23.2785 31.510075z" fill="#FFF"></path>
                                        </g>
                                        <g class="tp-star">
                                            <path class="tp-star-full" fill="#dcdce6" d="M51.24816 46.330002h46.375587V0H51.248161z"></path>
                                            <path class="tp-star__shape" d="M74.990978 31.32991L81.150908 30 84 39l-9.660206-7.202786L64.30279 39l3.895636-11.840666L58 19.841466h12.605577L74.499595 8l3.895637 11.841466H91L74.990978 31.329909z" fill="#FFF"></path>
                                        </g>
                                        <g class="tp-star">
                                            <path class="tp-star-full" fill="#dcdce6" d="M102.532209 46.330002h46.375586V0h-46.375586z"></path>
                                            <path class="tp-star__shape" d="M142.066994 19.711433L115.763298 38.80065l3.838215-11.797827-10.047304-7.291391h12.418975l3.837418-11.798624 3.837417 11.798624h12.418975zM125.81156 31.510075l7.183595-1.509576 2.862113 8.800152-10.045708-7.290576z" fill="#FFF"></path>
                                        </g>
                                        <g class="tp-star">
                                            <path class="tp-star-full" fill="#dcdce6" d="M153.815458 46.330002h46.375586V0h-46.375586z"></path>
                                            <path class="tp-star__shape" d="M193.348355 19.711433L167.045457 38.80065l3.837417-11.797827-10.047303-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418974zM177.09292 31.510075l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
                                        </g>
                                        <g class="tp-star">
                                            <path fill="#dcdce6" d="M205.064416 46.330002h46.375587V0h-46.375587z"></path>
                                            <path fill="#00b67a" d="M205.064416 46.330002h23.187793V0h-23.187793z"></path>
                                            <path class="tp-star__shape" d="M244.597022 19.711433l-26.3029 19.089218 3.837419-11.797827-10.047304-7.291391h12.418974l3.837418-11.798624 3.837418 11.798624h12.418975zm-16.255436 11.798642l7.183595-1.509576 2.862114 8.800152-10.045709-7.290576z" fill="#FFF"></path>
                                        </g>
                                    </svg>
                                </span>
                                <span class=" inline-block relative align-middle ml-[5px]">
                                    <svg role="img" viewBox="0 0 126 31" xmlns="http://www.w3.org/2000/svg" fill="#fff" style="height: 20px; width: auto;">
                                            <title id="trustpilotLogo-r4vc8wem16l">Trustpilot</title>
                                            <path fill="#ffffff" class="tp-logo__text" d="M33.074774 11.07005H45.81806v2.364196h-5.010656v13.290316h-2.755306V13.434246h-4.988435V11.07005h.01111zm12.198892 4.319629h2.355341v2.187433h.04444c.077771-.309334.222203-.60762.433295-.894859.211092-.287239.466624-.56343.766597-.79543.299972-.243048.633276-.430858.999909-.585525.366633-.14362.744377-.220953 1.12212-.220953.288863 0 .499955.011047.611056.022095.1111.011048.222202.033143.344413.04419v2.408387c-.177762-.033143-.355523-.055238-.544395-.077333-.188872-.022096-.366633-.033143-.544395-.033143-.422184 0-.822148.08838-1.199891.254096-.377744.165714-.699936.41981-.977689.740192-.277753.331429-.499955.729144-.666606 1.21524-.166652.486097-.244422 1.03848-.244422 1.668195v5.39125h-2.510883V15.38968h.01111zm18.220567 11.334883H61.02779v-1.579813h-.04444c-.311083.574477-.766597 1.02743-1.377653 1.369908-.611055.342477-1.233221.51924-1.866497.51924-1.499864 0-2.588654-.364573-3.25526-1.104765-.666606-.740193-.999909-1.856005-.999909-3.347437V15.38968h2.510883v6.948968c0 .994288.188872 1.701337.577725 2.1101.377744.408763.922139.618668 1.610965.618668.533285 0 .96658-.077333 1.322102-.243048.355524-.165714.644386-.37562.855478-.65181.222202-.265144.377744-.596574.477735-.972194.09999-.37562.144431-.784382.144431-1.226288v-6.573349h2.510883v11.323836zm4.27739-3.634675c.07777.729144.355522 1.237336.833257 1.535623.488844.287238 1.06657.441905 1.744286.441905.233312 0 .499954-.022095.799927-.055238.299973-.033143.588836-.110476.844368-.209905.266642-.099429.477734-.254096.655496-.452954.166652-.198857.244422-.452953.233312-.773335-.01111-.320381-.133321-.585525-.355523-.784382-.222202-.209906-.499955-.364573-.844368-.497144-.344413-.121525-.733267-.232-1.17767-.320382-.444405-.088381-.888809-.18781-1.344323-.287239-.466624-.099429-.922138-.232-1.355432-.37562-.433294-.14362-.822148-.342477-1.166561-.596573-.344413-.243048-.622166-.56343-.822148-.950097-.211092-.386668-.311083-.861716-.311083-1.436194 0-.618668.155542-1.12686.455515-1.54667.299972-.41981.688826-.75124 1.14434-1.005336.466624-.254095.97769-.430858 1.544304-.541334.566615-.099429 1.11101-.154667 1.622075-.154667.588836 0 1.15545.066286 1.688736.18781.533285.121524 1.02213.320381 1.455423.60762.433294.276191.788817.640764 1.07768 1.08267.288863.441905.466624.98324.544395 1.612955h-2.621984c-.122211-.596572-.388854-1.005335-.822148-1.204193-.433294-.209905-.933248-.309334-1.488753-.309334-.177762 0-.388854.011048-.633276.04419-.244422.033144-.466624.088382-.688826.165715-.211092.077334-.388854.198858-.544395.353525-.144432.154667-.222203.353525-.222203.60762 0 .309335.111101.552383.322193.740193.211092.18781.488845.342477.833258.475048.344413.121524.733267.232 1.177671.320382.444404.088381.899918.18781 1.366542.287239.455515.099429.899919.232 1.344323.37562.444404.14362.833257.342477 1.17767.596573.344414.254095.622166.56343.833258.93905.211092.37562.322193.850668.322193 1.40305 0 .673906-.155541 1.237336-.466624 1.712385-.311083.464001-.711047.850669-1.199891 1.137907-.488845.28724-1.04435.508192-1.644295.640764-.599946.132572-1.199891.198857-1.788727.198857-.722156 0-1.388762-.077333-1.999818-.243048-.611056-.165714-1.14434-.408763-1.588745-.729144-.444404-.33143-.799927-.740192-1.05546-1.226289-.255532-.486096-.388853-1.071621-.411073-1.745528h2.533103v-.022095zm8.288135-7.700208h1.899828v-3.402675h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155542.486096.07777.132572.199981.232.366633.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.13332-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222zm8.454788 0h2.377562V16.9253h.04444c.355523-.662858.844368-1.12686 1.477644-1.414098.633276-.287239 1.310992-.430858 2.055369-.430858.899918 0 1.677625.154667 2.344231.475048.666606.309335 1.222111.740193 1.666515 1.292575.444405.552382.766597 1.193145.9888 1.92229.222202.729145.333303 1.513527.333303 2.3421 0 .762288-.099991 1.50248-.299973 2.20953-.199982.718096-.499955 1.347812-.899918 1.900194-.399964.552383-.911029.98324-1.533194 1.31467-.622166.33143-1.344323.497144-2.18869.497144-.366634 0-.733267-.033143-1.0999-.099429-.366634-.066286-.722157-.176762-1.05546-.320381-.333303-.14362-.655496-.33143-.933249-.56343-.288863-.232-.522175-.497144-.722157-.79543h-.04444v5.656393h-2.510883V15.38968zm8.77698 5.67849c0-.508193-.06666-1.005337-.199981-1.491433-.133321-.486096-.333303-.905907-.599946-1.281527-.266642-.37562-.599945-.673906-.988799-.894859-.399963-.220953-.855478-.342477-1.366542-.342477-1.05546 0-1.855387.364572-2.388672 1.093717-.533285.729144-.799928 1.701337-.799928 2.916578 0 .574478.066661 1.104764.211092 1.59086.144432.486097.344414.905908.633276 1.259432.277753.353525.611056.629716.99991.828574.388853.209905.844367.309334 1.355432.309334.577725 0 1.05546-.121524 1.455423-.353525.399964-.232.722157-.541335.97769-.905907.255531-.37562.444403-.79543.555504-1.270479.099991-.475049.155542-.961145.155542-1.458289zm4.432931-9.99812h2.510883v2.364197h-2.510883V11.07005zm0 4.31963h2.510883v11.334883h-2.510883V15.389679zm4.755124-4.31963h2.510883v15.654513h-2.510883V11.07005zm10.210184 15.963847c-.911029 0-1.722066-.154667-2.433113-.452953-.711046-.298287-1.310992-.718097-1.810946-1.237337-.488845-.530287-.866588-1.160002-1.12212-1.889147-.255533-.729144-.388854-1.535622-.388854-2.408386 0-.861716.133321-1.657147.388853-2.386291.255533-.729145.633276-1.35886 1.12212-1.889148.488845-.530287 1.0999-.93905 1.810947-1.237336.711047-.298286 1.522084-.452953 2.433113-.452953.911028 0 1.722066.154667 2.433112.452953.711047.298287 1.310992.718097 1.810947 1.237336.488844.530287.866588 1.160003 1.12212 1.889148.255532.729144.388854 1.524575.388854 2.38629 0 .872765-.133322 1.679243-.388854 2.408387-.255532.729145-.633276 1.35886-1.12212 1.889147-.488845.530287-1.0999.93905-1.810947 1.237337-.711046.298286-1.522084.452953-2.433112.452953zm0-1.977528c.555505 0 1.04435-.121524 1.455423-.353525.411074-.232.744377-.541335 1.01102-.916954.266642-.37562.455513-.806478.588835-1.281527.12221-.475049.188872-.961145.188872-1.45829 0-.486096-.066661-.961144-.188872-1.44724-.122211-.486097-.322193-.905907-.588836-1.281527-.266642-.37562-.599945-.673907-1.011019-.905907-.411074-.232-.899918-.353525-1.455423-.353525-.555505 0-1.04435.121524-1.455424.353525-.411073.232-.744376.541334-1.011019.905907-.266642.37562-.455514.79543-.588835 1.281526-.122211.486097-.188872.961145-.188872 1.447242 0 .497144.06666.98324.188872 1.458289.12221.475049.322193.905907.588835 1.281527.266643.37562.599946.684954 1.01102.916954.411073.243048.899918.353525 1.455423.353525zm6.4883-9.66669h1.899827v-3.402674h2.510883v3.402675h2.26646v1.867052h-2.26646v6.054109c0 .265143.01111.486096.03333.684954.02222.18781.07777.353524.155541.486096.077771.132572.199982.232.366634.298287.166651.066285.377743.099428.666606.099428.177762 0 .355523 0 .533285-.011047.177762-.011048.355523-.033143.533285-.077334v1.933338c-.277753.033143-.555505.055238-.811038.088381-.266642.033143-.533285.04419-.811037.04419-.666606 0-1.199891-.066285-1.599855-.18781-.399963-.121523-.722156-.309333-.944358-.552381-.233313-.243049-.377744-.541335-.466625-.905907-.07777-.364573-.133321-.784383-.144431-1.248384v-6.683825h-1.899827v-1.889147h-.02222z"></path>
                                            <path class="tp-logo__star" fill="#00B67A" d="M30.141707 11.07005H18.63164L15.076408.177071l-3.566342 10.892977L0 11.059002l9.321376 6.739063-3.566343 10.88193 9.321375-6.728016 9.310266 6.728016-3.555233-10.88193 9.310266-6.728016z"></path>
                                            <path class="tp-logo__star-notch" fill="#005128" d="M21.631369 20.26169l-.799928-2.463625-5.755033 4.153914z"></path>
                                        </svg>
                                </span>
                            </div>
                        </div>
                        <div class="grid-item col-span-1 lg:col-span-7 content-center relative">
                            <div class="absolute right-0 top-[-50px] w-[100%] h-[500px] bg-[#fff] rounded-[24px]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		
		
        
		
		<?php endif; ?> 
		<?php endwhile; ?>
		<?php endif; ?>
    </div>
</div>


<?php get_footer('second');?>