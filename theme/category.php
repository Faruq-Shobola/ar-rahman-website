<?php
/**
 * The template for displaying Blog page
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
<section class="relative hero-2 top-0 h-96 bg-green-dark flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="max-w-lg mx-auto px-4">
        <div class="flex flex-col gap-6 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug"><?php echo single_cat_title();?></h2>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 02   BLOG ARCHIVE SECTION
---------------------------------->
<section class="py-20">
    <div class="max-w-6xl mx-auto grid md:grid-cols-7 gap-8">
        <div class="md:col-span-5 flex flex-col gap-12">
            <!------------ BLOG CARDS ------------>
            <div class="grid gap-12 px-4">
                <?php 
                    /**
                     * Get blogs from template-blog
                    */
                    require get_template_directory() . '/inc/template-blog.php'; 
                ?>
            </div>
            <!------------ BUTTON ------------>
            <div class="flex justify-center items-center">
                <?php the_posts_pagination(); ?>
            </div>
        </div>
        <div class="md:col-span-2 flex flex-col px-8">

            <h2 class="capitalize font-bold text-3xl py-2 text-green-dark">Related post</h2>

            <div class="flex flex-col gap-5 text-lg list-none">
                <?php if(is_active_sidebar('blog-sidebar')):?>
                    <?php dynamic_sidebar('blog-sidebar');?>
                <?php endif;?>
            </div>
        </div>
       
    </div>
</section>


<!-- GET FOOTER CONTENT -->
<?php get_footer();?>



<!-- ----------  BLOG CATEGORIES ----------
<div class="mx-auto flex flex-wrap justify-evenly items-center text-base lg:text-xl gap-5">
    <?php 
        $categories = get_the_category();
        foreach($categories as $cat): 
    ?>
        <a href="<?php echo get_category_link( $cat->term_id);?>" class="font-semibold">
            <?php echo $cat->name;?>
        </a>
    <?php endforeach;?>
</div> -->