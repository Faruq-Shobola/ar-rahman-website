<?php
/**
 * The template for displaying Contact Us page
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
<section class="relative hero-tour top-0 h-96 bg-green-dark flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="max-w-lg mx-auto px-4">
        <div class="flex flex-col gap-6 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug">scheldue a tour</h2>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 02   CONTACT SECTION
---------------------------------->
<section class="py-24 flex flex-col gap-10">

    <section class="feature py-4 px-4">
        <div class="max-w-4xl mx-auto flex flex-col items-center justify-center gap-14">
            <!------------ HEADING ------------>
            <div class="">
                <h4 class="font-semibold text-2xl">
                    We provide an opportunity to place a request and visit Our School and view our working facilities and dedicated team of educators
                </h4>
            </div>
            <div class="w-full md:w-4/5 flex flex-col gap-10">
                <h4 class="font-semibold text-2xl capitalize">
                    schedule Details
                </h4>
                <?php the_content() ?>
            </div>
        </div>
    </section>
    
</section>


<!-- GET FOOTER CONTENT -->
<?php get_footer();?>