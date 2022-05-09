<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package duromedia
 */

get_header();
?>

	<!-------------------------------- 
/// 01   HERO SECTION
---------------------------------->
<section class="relative hero-archive-event top-0 h-96 bg-green-dark flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="max-w-4xl mx-auto px-4">
        <div class="flex flex-col gap-6 text-center text-white">
                <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug">
                    events
                </h2>
            </div>
        </div>
</section>
<!-------------------------------- 
/// 02   EVENT CONTENT SECTION
---------------------------------->
<section class="py-20">

    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col gap-8">
            <!------------ EVENT CARDS ------------>
            <div class="grid gap-12 px-4">

                <?php 
                    /**
                     * Get blogs from template-blog
                     */
                    require get_template_directory() . '/inc/template-events.php'; 
                    ?>
                
            </div>
            <!------------ BUTTON ------------>
            <div class="flex justify-center items-center">
                <?php the_posts_pagination(); ?>
            </div>
        </div>
        
    </div>

</section>

<?php
get_footer();
