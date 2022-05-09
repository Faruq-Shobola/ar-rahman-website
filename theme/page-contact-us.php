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
<section class="relative hero-contact top-0 h-96 bg-green-dark flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="max-w-lg mx-auto px-4">
        <div class="flex flex-col gap-6 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug">contact us</h2>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 02   CONTACT SECTION
---------------------------------->
<section class="py-24 flex flex-col gap-10">

    <section class="feature py-4 px-4">
        <div class="max-w-4xl mx-auto flex flex-col items-center justify-center gap-14">
            <div class="address grid md:grid-cols-2 gap-10">
                <!-- location -->
                <div class="flex gap-3 items-center">
                    <div class="self-start flex gap-4">
                        <span class="flex justify-center items-center h-10 w-10 border border-green-dark rounded-full">
                            <i class="fas fa-map-marker-alt text-green-dark"></i>
                        </span>
                    </div>
                    <div class="flex flex-col gap-3 list-none">
                        <?php if(is_active_sidebar('address')):?>
                            <?php dynamic_sidebar('address');?>
                        <?php endif;?>
                    </div>
                </div>
                <!--telephone and email -->
                <div class="flex flex-col gap-3">
                     <!-- telephone -->
                     <div class="flex gap-4 items-center">
                        <div class="items-center">
                            <span class="flex justify-center items-center h-10 w-10 border border-green-dark rounded-full">
                                <i class="fas fa-phone rotate-90 text-green-dark"></i>
                            </span>
                        </div>
                        <div class="list-none flex flex-wrap gap-2">
                            <?php if(is_active_sidebar('phone-number')):?>
                                <?php dynamic_sidebar('phone-number');?>
                            <?php endif;?>
                        </div>
                    </div>
                    <!-- mail -->
                    <div class="flex gap-4 items-center">
                        <div class="items-center">
                            <span class="flex justify-center items-center h-10 w-10 border border-green-dark rounded-full">
                                <i class="fas fa-envelope text-green-dark"></i>
                            </span>
                        </div>
                        <div class="list-none flex flex-col gap-1">
                            <?php if(is_active_sidebar('mail')):?>
                                <?php dynamic_sidebar('mail');?>
                            <?php endif;?>
                        </div>

                    </div>
                   
                </div>
            </div>
            <div class="w-full sm:4/5 md:w-4/5">
                <?php the_content() ?>
            </div>
        </div>
    </section>
    
</section>


<!-- GET FOOTER CONTENT -->
<?php get_footer();?>