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
<section class="relative hero-prospectus top-0 h-96 bg-green-dark flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="max-w-2xl mx-auto px-4">
        <div class="flex flex-col gap-6 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug">request a prospectus</h2>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 02   BLOG ARCHIVE SECTION
---------------------------------->
<section class="py-20">
    <div class="max-w-5xl md:max-w-3xl lg:max-w-5xl mx-auto relative flex flex-col-reverse lg:grid lg:grid-cols-9 gap-8">
        <div class="lg:col-span-5 bg-gray-100 px-8 py-14 flex flex-col gap-8">
            
                <!------------ HEADING ------------>
                <div class="">
                    <h4 class="font-semibold text-2xl">
                        Submit your details in the form provided below to get a guide on our academic curriculum and requirements
                    </h4>
                </div>
                <!------------ FORM ------------>
                <div class="">
                   <?php the_content(); ?>

                </div>
        
        </div>
        <div class="lg:sticky lg:top-5 flex lg:col-span-4 h-52 px-8">
            <div class="flex flex-col px-4 py-6 justify-center w-full text-center md:w-full gap-2 bg-green-light">
                <a href="<?php wp_upload_dir();?>/admission-process" class="capitalize font-medium py-3 px-6">admission process</a>
                <a href="<?php wp_upload_dir();?>/request-a-prospectus" class="capitalize font-medium py-3 px-6 text-white bg-green-dark rounded-md w-full">Request a prospectus</a>
                <a href="<?php wp_upload_dir();?>/fill-admission-form" class="capitalize font-medium py-3 px-6">Fill Admission Form</a>
            </div>
        </div>
       
    </div>
</section>

<!-- GET FOOTER CONTENT -->
<?php get_footer();?>