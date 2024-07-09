<?php
/**
 * Template Name: About Page
 *
 * @package sws
 */

get_header('second');
?>
<div class="bg-black bg-center" style="background-image: url('<?php echo get_template_directory_uri();?>/images/about_bg.png');">
    <div class="container flex gap-28">
        <div class=" w-2 bg-orange-950 mt-52"></div>
        <div class="w-full bg-center flex gap flex-col mt-52">
            <div class="w-[57%] mb-[100px]">
                <h1 class="text-dark-orange text-[56px]">20 Years ago</h1>
                <p class="text-white text-[28px]">For more than 20 years our founder worked with international developers but never imagined anything like the COVID pandemic would come up with huge losses.</p>
            </div>
            <div class="w-[57%] mb-[300px]">
                <h1 class="text-dark-orange text-[56px]">What losses are we talking about?</h1>
                <p class="text-white text-[28px]">Losses that the IT industry made during the pandemic by paying high salaries to their local employees who were not ever performing satisfactorily compared to many international developers. <br/><br/>Here enters an Idea into our Smart Working founder Julian Rowse’s brain. </p>
            </div>
            <div class="w-[57%] mb-[100px]">
                <h1 class="text-dark-orange text-[56px]">2020</h1>
                <p class="text-white text-[28px]">2020 brought many challenges in the IT industry. While it impacted growth, Julian, who has spent over 20 years working with international developers, focused on and analysed the problems closely as an experienced professional. He worked closely with his connections globally and convinced 100s of international developers to work with him remotely and delivered success to 10 european businesses.</p>
            </div>
            <div class="bg-[#1F0C04] border border-[#30160a] rounded-xl w-full flex p-24 relative -left-48 z-10 ">
                <p class="w-[65%] text-[28px] text-white">We were founded by Julian Rowse in 2020 <span class="opacity-50">after the pandemic normalised remote working for so many businesses. Julian has spent</span> over 20 years working with international developers. <span class="opacity-50">He had a great understanding of the level of skill in the labour force and wanted to give</span> many businesses the opportunity to work with exceptionally talented people, who will come at a real cost saving compared to hiring locally.</p>
                <img class="w-[416px] absolute right-12 -bottom-16" src="<?php echo get_template_directory_uri();?>/images/about_us_card_img.svg" />
            </div>
        </div>
        </div>
    </div>
</div>

<?php get_footer();?>