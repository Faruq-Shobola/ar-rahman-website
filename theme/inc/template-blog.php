<!------------ BLOG CARDS ------------>
<?php if( have_posts() ): while( have_posts() ): the_post();?>
    <div class="flex flex-col lg:flex-row gap-8 w-full">
        <!------------ IMAGE ------------>
        <div class="overflow-hidden rounded-md h-64 lg:w-2/5">
            <?php if(has_post_thumbnail()):?>
                <img
                    src="<?php the_post_thumbnail_url();?>"
                    class="h-full w-full object-cover"
                    alt="<?php the_title();?>"
                >
            <?php endif;?>
        </div>
        <!------------ BLOG CONTENT ------------>
        <div class="px-2 flex flex-col gap-2 lg:w-3/5">
            <h3 class="text-2xl md:text-3xl capitalize font-bold" title=""><?php the_title();?></h3>
            <time class="capitalize font-semibold text-sm text-gray-400" datetime="">Published on <span><?php echo get_the_date( 'jS F, Y' );?></span></time>
            <div class="flex flex-wrap justify-start items-center gap-4">
                <?php 
                    $categories = get_the_category();
                    foreach($categories as $cat): 
                ?>
                    <a href="<?php echo get_category_link( $cat->term_id);?>" class="capitalize font-semibold text-sm text-green-dark -mt-1">
                        <?php echo $cat->name;?>
                    </a>
                <?php endforeach;?>
            </div>
            <p class="text-sm"><?php the_excerpt();?></p>
            <!------------ BUTTON ------------>
            <div class="flex pb-2">
                <a href="<?php the_permalink();?>" class="text-green-dark w-40 underline font-semibold capitalize">continue reading...</a>
            </div>
        </div>
    </div>
<?php endwhile; else: endif; ?>
