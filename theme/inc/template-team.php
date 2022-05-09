<div class="flex flex-col items-center justify-center gap-6">
    <div class="w-64 h-64 overflow-hidden rounded-full">
        <!------------ IMAGE ------------>
        <?php if(has_post_thumbnail()):?>
            <img 
                src="<?php the_post_thumbnail_url();?>" 
                class="object-cover w-full h-full object-top hover:scale-105 transition transition-all duration-200 ease-in-out"
                alt="<?php the_title();?>"
            >
        <?php endif;?>
    </div>
    <!------------ DESCRIPTION ------------>
    <div class="description text-center">
        <!------------ NAME ------------>
        <h4 class="capitalize font-bold text-xl"><?php the_title();?></h4>
        <!------------ POSITION ------------>
        <p class="capitalize text-base mt-2 text-orange-500"><?php the_content();?></p>
    </div>
</div>