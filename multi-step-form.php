<?php
/**
 * Template Name: Multi Step Form
 *
 * @package sws
 */

 get_header('second');
?>

<section class="w-full p-0">
        <div class="grid grid-cols-10 h-[100%] min-h-[100vh] relative">
            <div class="grid-item col-span-5 content-center h-[100%] relative">
                <div class="">
                    <img class="bg-img absolute w-[100%] right-[0] z-0 top-[0]" src="<?php echo get_template_directory_uri();?>/images/bg-gradint-color.svg" alt="">
                    <div class=" relative max-w-[550px] ml-auto z-10 p-10 h-[100%] rounded-md">
                        <div class="block mb-8 mt-5">
                            <a> 
                                <img class="w-[100%] max-w-[250px]" src="<?php echo get_template_directory_uri();?>/images/LogoSVG.svg" alt="<?php echo esc_attr($image['alt']); ?>">
                            </a>
                        </div>
                        <h1 class="text-[25px] font-medium lg:text-[40px] mb-4 text-white">Find your perfect match</h1>
                        <p class="text-[18px] lg:text-[18px] mb-8 text-[#A6A6A6]">Answer 6 short questions to help us understand your needs.</p>
                        <div class=" mt-[10rem]">
                            <ul class="hiw-bullat-point text-white">
                                <li class="!text-white !text-[16px] !mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="bullet-point" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                        <path d="M4.99021 7.18998C4.99021 5.97527 5.97443 4.99106 7.18913 4.99009H8.18988C8.77049 4.99009 9.32679 4.75959 9.73914 4.35112L10.4384 3.65089C11.2952 2.78922 12.6879 2.78533 13.5496 3.64117L13.5505 3.64214L13.5593 3.64992L14.2595 4.35015C14.6709 4.75959 15.2282 4.98911 15.8088 4.98911H16.8115C18.0262 4.98911 19.0114 5.9743 19.0114 7.18901V8.18878C19.0114 8.77036 19.2409 9.32666 19.6503 9.73902L20.3506 10.4392C21.2122 11.2961 21.2171 12.6887 20.3613 13.5504L19.6513 14.2604C19.2419 14.6718 19.0124 15.229 19.0124 15.8087V16.8123C19.0104 18.027 18.0252 19.0093 16.8115 19.0083H15.8068C15.2262 19.0083 14.669 19.2388 14.2576 19.6483L13.5574 20.3475C12.7025 21.2102 11.3098 21.216 10.4481 20.3611L10.4452 20.3592L9.7372 19.6512C9.32581 19.2417 8.76855 19.0122 8.18794 19.0113H7.18913C5.97443 19.0113 4.99021 18.027 4.99021 16.8123V15.8067C4.99021 15.2261 4.75972 14.6698 4.35028 14.2584L3.65102 13.5582C2.78837 12.7033 2.78254 11.3126 3.63643 10.4499C3.63643 10.4499 3.63935 10.448 3.64032 10.4461L4.34833 9.73707C4.75777 9.32569 4.98827 8.76842 4.98827 8.18684V7.18998" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.00391 12.1222L10.9811 14.1023L15.0541 10.0273" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Gain access to 5000+ experts
                                </li>
                                <li class="!text-white !text-[16px] !mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="bullet-point" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                        <path d="M4.99021 7.18998C4.99021 5.97527 5.97443 4.99106 7.18913 4.99009H8.18988C8.77049 4.99009 9.32679 4.75959 9.73914 4.35112L10.4384 3.65089C11.2952 2.78922 12.6879 2.78533 13.5496 3.64117L13.5505 3.64214L13.5593 3.64992L14.2595 4.35015C14.6709 4.75959 15.2282 4.98911 15.8088 4.98911H16.8115C18.0262 4.98911 19.0114 5.9743 19.0114 7.18901V8.18878C19.0114 8.77036 19.2409 9.32666 19.6503 9.73902L20.3506 10.4392C21.2122 11.2961 21.2171 12.6887 20.3613 13.5504L19.6513 14.2604C19.2419 14.6718 19.0124 15.229 19.0124 15.8087V16.8123C19.0104 18.027 18.0252 19.0093 16.8115 19.0083H15.8068C15.2262 19.0083 14.669 19.2388 14.2576 19.6483L13.5574 20.3475C12.7025 21.2102 11.3098 21.216 10.4481 20.3611L10.4452 20.3592L9.7372 19.6512C9.32581 19.2417 8.76855 19.0122 8.18794 19.0113H7.18913C5.97443 19.0113 4.99021 18.027 4.99021 16.8123V15.8067C4.99021 15.2261 4.75972 14.6698 4.35028 14.2584L3.65102 13.5582C2.78837 12.7033 2.78254 11.3126 3.63643 10.4499C3.63643 10.4499 3.63935 10.448 3.64032 10.4461L4.34833 9.73707C4.75777 9.32569 4.98827 8.76842 4.98827 8.18684V7.18998" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.00391 12.1222L10.9811 14.1023L15.0541 10.0273" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Get matched with a developer in 2 days
                                </li>
                                <li class="!text-white !text-[16px] !mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="bullet-point" width="18" height="18" viewBox="0 0 24 24" fill="none">
                                        <path d="M4.99021 7.18998C4.99021 5.97527 5.97443 4.99106 7.18913 4.99009H8.18988C8.77049 4.99009 9.32679 4.75959 9.73914 4.35112L10.4384 3.65089C11.2952 2.78922 12.6879 2.78533 13.5496 3.64117L13.5505 3.64214L13.5593 3.64992L14.2595 4.35015C14.6709 4.75959 15.2282 4.98911 15.8088 4.98911H16.8115C18.0262 4.98911 19.0114 5.9743 19.0114 7.18901V8.18878C19.0114 8.77036 19.2409 9.32666 19.6503 9.73902L20.3506 10.4392C21.2122 11.2961 21.2171 12.6887 20.3613 13.5504L19.6513 14.2604C19.2419 14.6718 19.0124 15.229 19.0124 15.8087V16.8123C19.0104 18.027 18.0252 19.0093 16.8115 19.0083H15.8068C15.2262 19.0083 14.669 19.2388 14.2576 19.6483L13.5574 20.3475C12.7025 21.2102 11.3098 21.216 10.4481 20.3611L10.4452 20.3592L9.7372 19.6512C9.32581 19.2417 8.76855 19.0122 8.18794 19.0113H7.18913C5.97443 19.0113 4.99021 18.027 4.99021 16.8123V15.8067C4.99021 15.2261 4.75972 14.6698 4.35028 14.2584L3.65102 13.5582C2.78837 12.7033 2.78254 11.3126 3.63643 10.4499C3.63643 10.4499 3.63935 10.448 3.64032 10.4461L4.34833 9.73707C4.75777 9.32569 4.98827 8.76842 4.98827 8.18684V7.18998" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M9.00391 12.1222L10.9811 14.1023L15.0541 10.0273" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Hire quickly and easily with 94% match success
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-item col-span-5 content-center h-[100%] relative bg-white">
                <div class=" max-w-[550px] w-[100%] p-10 relative">
                    <?php // echo do_shortcode('[contact-form-7 id="300e693" title="Multi Step"]');?>

                    <form action="" method="POST">
                        <div class="step-box">
                            <p class="text-[20px] leading-[20px] font-medium lg:text-[30px] lg:leading-[30px] mb-4 text-black">Choose the skills you're after</p>
                            <p class="text-[16px] font-medium lg:text-[16px] mb-4 text-black">You can either search for a skill or select from the popular skills below.</p>
                            <div class="block mb-10">
                                <label class="block" for="search-skill">Search skill</label>
                                <div class="search-skill">
                                    <input type="search" id="search-skill" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF4D02] focus:border-[#FF4D02] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#FF4D02] dark:focus:border-[#FF4D02]" placeholder="Search skills">
                                </div>
                            </div>
                            <div class="block mb-14">
                                <p class="text-[16px] font-medium lg:text-[16px] mb-4 text-black"><span class="count-skill">0</span> skill selected</p>
                                 <div class="skill-scroll-box overflow-y-auto thin-scroll-bar">   
                                    <ul class="chip-skill">
                                        <?php 
                                        $args_skills = array(
                                            'post_type' => 'skills',
                                            'posts_per_page' => -1,
                                            'order' => 'ASC',
                                            'orderby' => 'title',
                                        );
                                        $query_skills = new WP_Query($args_skills);
                                        while ($query_skills->have_posts()) : $query_skills->the_post();
                                        $mid_level_dollar_price = get_field('mid_level_dollar_price');
                                        $senior_level_dollar_price = get_field('senior_level_dollar_price');
                                        $mid_level_pound_price = get_field('mid_level_pound_price');
                                        $senior_level_pound_price = get_field('senior_level_pound_price');
                                        $skill_image_id = get_post_thumbnail_id();
                                        $skill_image_src = wp_get_attachment_image_src($skill_image_id, 'full');

                                        ?>
                                        <li>
                                            <span class="block absolute left-[8px] top-[10px] text-center pro-name"> <img class="inline-block w-[22px] h-[22px] rounded-[2px]" src="<?php echo esc_url($skill_image_src[0]); ?>" alt="<?php the_title(); ?>">  </span>
                                            <span class="block pro-name"> <?php the_title(); ?></span>
                                        </li>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>  
                                    </ul>
                                </div>
                                <input type="hidden" id="selected_skill" name="selected_skill" />
                            </div>
                            <div class="flex justify-end w-full">
                                <button type="button" disabled class="next-step text-white bg-[#FF4D02] disabled:bg-[#ff4e0279] disabled:cursor-not-allowed hover:bg-[#ff4e02dc] focus:ring-4 focus:ring-[#ff4e02a2] font-medium rounded-lg text-sm px-8 py-3 dark:bg-[#FF4D02] dark:hover:bg-[#FF4D02] focus:outline-none dark:focus:bg-[#FF4D02]">Next</button>
                            </div>
                        </div>

                        <div class="step-box">
                            <p class="text-[20px] leading-[20px] font-medium lg:text-[30px] lg:leading-[30px] mb-4 text-black">How long will the engagement last?</p>
                            <div class="block mb-14">
                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
                                    <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                        <input checked id="bordered-radio-1" type="radio" value="More than 6 months" name="working_time" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">More than 6 months</label>
                                    </div>
                                    <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                        <input id="bordered-radio-2" type="radio" value="3 to 6 months" name="working_time" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-radio-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">3 to 6 months</label>
                                    </div>
                                    <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                        <input id="bordered-radio-3" type="radio" value="3 to 6 months" name="working_time" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-radio-3" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1 to 3 months</label>
                                    </div>
                                    <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                        <input id="bordered-radio-4" type="radio" value="1 to 4 weeks" name="working_time" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-radio-4" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">1 to 4 weeks</label>
                                    </div>
                                    <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                                        <input id="bordered-radio-5" type="radio" value="I’m not really sure" name="working_time" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="bordered-radio-5" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I’m not really sure</label>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between w-full">
                                <button type="button" class="previous-step text-white bg-[#FF4D02] hover:bg-[#ff4e02dc] focus:ring-4 focus:ring-[#ff4e02a2] font-medium rounded-lg text-sm px-8 py-3 dark:bg-[#FF4D02] dark:hover:bg-[#FF4D02] focus:outline-none dark:focus:bg-[#FF4D02]">Previous</button>
                                <button type="button" class="next-step disabled:bg-[#ff4e0279] disabled:cursor-not-allowed text-white bg-[#FF4D02] hover:bg-[#ff4e02dc] focus:ring-4 focus:ring-[#ff4e02a2] font-medium rounded-lg text-sm px-8 py-3 dark:bg-[#FF4D02] dark:hover:bg-[#FF4D02] focus:outline-none dark:focus:bg-[#FF4D02]">Next</button>
                            </div>
                        </div>

                        <div class="step-box">
                            <p class="text-[20px] leading-[20px] font-medium lg:text-[30px] lg:leading-[30px] mb-4 text-black">We'd like to get in touch and hear about your needs</p>
                            <div class="block mb-6">
                                <label class="block" for="text-name">Name:</label>
                                <input type="text" name="name" id="text-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF4D02] focus:border-[#FF4D02] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#FF4D02] dark:focus:border-[#FF4D02]" required>
                            </div>
                            <div class="block mb-6">
                                <label class="block" for="email">Email:</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF4D02] focus:border-[#FF4D02] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#FF4D02] dark:focus:border-[#FF4D02]" required>
                                <div id="error-box" class="error-mes mt-2 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400" role="alert">
                                    Please use your company email address or apply as a developer
                                </div>
                            </div>
                            
                            <div class="block mb-14">
                                <label class="block" for="phone">Phone number:</label>
                                <input type="tel" id="phone" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#FF4D02] focus:border-[#FF4D02] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#FF4D02] dark:focus:border-[#FF4D02]" required>
                            </div>
                            <div class="flex justify-between w-full">
                                <button type="button" class="previous-step text-white bg-[#FF4D02] hover:bg-[#ff4e02dc] focus:ring-4 focus:ring-[#ff4e02a2] font-medium rounded-lg text-sm px-8 py-3 dark:bg-[#FF4D02] dark:hover:bg-[#FF4D02] focus:outline-none dark:focus:bg-[#FF4D02]">Previous</button>
                                <!-- <button type="button" class="next-step">Next</button> -->
                                <input id="submit-form" class="text-white bg-[#FF4D02] disabled:bg-[#ff4e0279] disabled:cursor-not-allowed hover:bg-[#ff4e02dc] focus:ring-4 focus:ring-[#ff4e02a2] font-medium rounded-lg text-sm px-8 py-3 dark:bg-[#FF4D02] dark:hover:bg-[#FF4D02] focus:outline-none dark:focus:bg-[#FF4D02]" type="submit" name="submit_form" value="Submit">
                            </div>
                        </div>
                    </form>
                   

                </div>
                
            </div>
        </div>
</section>




<?php get_footer('second');?>