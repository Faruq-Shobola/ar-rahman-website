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
<section class="hero-2 top-0 h-96 bg-green-dark flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="max-w-4xl mx-auto px-4">
        <div class="flex flex-col gap-6 text-center text-white">
                <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug">
                    <?php the_title();?>
                </h2>
            </div>
        </div>
</section>
<!-------------------------------- 
/// 02   BLOG CONTENT SECTION
---------------------------------->
<section class="py-24 flex flex-col gap-10">
    
    <!-------------------------------
    IMAGE SECTION START 
    ------------------------------->
    <?php if(has_post_thumbnail()):?>
        <section class="feature py-4 px-4">
            <div class="max-w-6xl mx-auto flex flex-col items-center justify-center">
                <div class="w-full lg:w-5/6 flex flex-col rounded-md overflow-hidden">
                    <img
                        class="object-cover w-full h-72 rounded-md"
                        src="<?php the_post_thumbnail_url();?>"
                        alt="<?php the_title();?>"
                    />
                </div>
            </div>

        </section>
    <?php endif;?>
    <!-------------------------------
        IMAGE SECTION END 
    ------------------------------->

    <!-------------------------------
        ARTICLE SECTION START 
    ------------------------------->
    <section class="pt-6 px-4">
        <div class="max-w-6xl mx-auto flex justify-center">
            <div class="w-full lg:w-5/6 grid grid-cols-1 md:grid-cols-11 gap-x-14 gap-y-10">
                <!---------------------------
                    ARTICLE START 
                ---------------------------->
                <div class="md:col-span-7 flex flex-col gap-7">
                    <div class="flex flex-col gap-4">
                        <!----------- DATE POSTED ------------>
                        <div class="">
                            <h5 class="text-base font-medium text-gray-500 flex gap-4">
                                <?php echo get_the_date( 'jS F, Y' );?>
                            </h5>
                        </div>
                    <!----------- SUB HEADING------------->
                        <article class="flex flex-col">
                            <!------ CONTENT ------>
                            <?php the_content(); ?>
                        </article> 
                        
                    </div>
                </div>
                <!---------------------------
                    ARTICLE END 
                ---------------------------->

                <!---------------------------
                    RELATED ARTICLE START 
                ---------------------------->
                <div class="md:col-span-4">
                    <div class="serach">

                    </div>
                    <div class="related-blog flex flex-col gap-8">
                        <!----------- HEADING ------------->
                        <div class="sub-heading ">
                            <h4 class="text-xl font-semibold text-wine capitalize">
                                related topics
                            </h4>
                        </div>
                        <!----------- RELATED BLOG ------------->
                        <div class="w-full flex flex-col gap-8">
                            <?php $related = get_posts( 
                                array( 
                                    'category__in' => wp_get_post_categories($post->ID), 
                                    'numberposts' => 5, 
                                    'orderby' => 'rand',
                                    'post__not_in' => array($post->ID) ) ); 
                                    if( $related ) 
                                        foreach( $related as $post ) { setup_postdata($post); 
                            ?>
                                <div class="w-full grid grid-cols-1 md:grid-cols-5 gap-3 h-64 md:h-28">
                                    <?php if(has_post_thumbnail()):?>
                                        <div class="md:col-span-2 rounded-md overflow-hidden">
                                            <img
                                            class="object-cover h-full w-full"
                                            src="<?php the_post_thumbnail_url();?>"
                                            alt="<?php the_title();?>"
                                            />
                                        </div>
                                    <?php endif;?>

                                    <div class="md:col-span-3 flex flex-col gap-2 md:gap-0">
                                        <a class="text-sm font-medium">
                                            <?php the_title();?>
                                        </a>
                                
                                        <p class="text-sm text-gray mt-4">
                                            <?php echo get_the_date( 'jS F, Y' );?>
                                        </p>
                                    </div>
                                </div>
                            <?php } wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
                <!---------------------------
                    RELATED ARTICLE START 
                ---------------------------->
            </div>
        </div>

    </section>
    <!-------------------------------
        ARTICLE SECTION END 
    ------------------------------->


</section>

<?php
get_footer();
