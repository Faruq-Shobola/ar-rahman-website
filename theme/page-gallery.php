<?php
/**
 * The template for displaying About Us page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package duromedia
 */

get_header();
?>
<!-------------------------------- 
/// 01   HERO SECTION
---------------------------------->
<section class="relative hero-gallery top-0 h-96 bg-green-dark flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="max-w-lg mx-auto px-4">
        <div class="flex flex-col gap-6 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug">our gallery</h2>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 02   ABOUT US SECTION
---------------------------------->
<section class="">
    <div class="max-w-6xl mx-auto py-20 px-4 lg:px-8">
        <!------------  ------------>
        <div class="grid">
            <?php the_content(); ?>
        
        </div>
    </div>
</section>

<!-- GET FOOTER CONTENT -->
<?php get_footer(); ?>