<!------------ EVENT CARDS ------------>
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
        <!------------ EVENT CONTENT ------------>
        <div class="px-2 flex flex-col gap-2 lg:w-3/5">
            <!-------------- HEADING ------------->
            <div class="flex flex-col gap-2">
                <h3 class="text-2xl md:text-3xl capitalize font-bold"><?php the_title();?></h3>
                <h5 class="text-base font-medium">Date: <?php the_field('date'); ?></h5>
            </div>
            <!-------------- TIME ------------->
            <?php
            $time = get_field('time');
            if( $time ): ?>
                <div class="flex gap-3 items-center">
                    <div class="">
                        <span class="flex justify-center items-center h-5 w-5 bg-green-dark rounded-full">
                            <i class="fas fa-clock text-white text-xs"></i>
                        </span>
                    </div>
                    <div class="">
                        <h5 class="text-sm capitalize"><?php echo esc_attr($time['from']); ?> - <?php echo esc_attr($time['till']); ?></h5>
                    </div>
                </div>
            <?php endif; ?>
            <!-------------- LOCATION -------------->
            <div class="flex gap-3 items-center">
                <div class="">
                    <span class="flex justify-center items-center h-5 w-5 bg-green-dark rounded-full">
                        <i class="fas fa-map-marker-alt text-white text-xs"></i>
                    </span>
                </div>
                <div class="">
                    <h5 class="text-sm capitalize"><?php the_field('venue'); ?></h5>
                </div>
            </div>
            <p class="text-sm"><?php the_excerpt();?></p>
            <!------------ BUTTON ------------>
            <div class="flex pb-2">
                <a href="<?php the_permalink();?>" class="text-green-dark w-40 underline font-semibold capitalize">continue reading...</a>
            </div>
        </div>
    </div>
    <?php endwhile; else: endif; ?>
