<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package duromedia
 */

?>

    <section class="footer py-20 px-4 bg-green-light mt-auto">
        <footer class="max-w-6xl mx-auto flex flex-col justify-center gap-20">
            <!-------------- DETAILS -------------->
            <div class="grid md:grid-cols-6 gap-10">
                 <!-------------- COLUMN 1 -------------->
                    <div class="md:col-span-2 flex flex-col gap-6 list-none">
                        <?php if(is_active_sidebar('footer-sidebar-1')):?>
                            <?php dynamic_sidebar('footer-sidebar-1');?>
                        <?php endif;?>
                    </div>
                <!-------------- COLUMN 2 -------------->
                    <div class="flex flex-col gap-3 list-none">
                        <?php if(is_active_sidebar('footer-sidebar-2')):?>
                            <?php dynamic_sidebar('footer-sidebar-2');?>
                        <?php endif;?>
                    </div>
                <!-------------- COLUMN 3 -------------->
                    <div class="flex flex-col gap-3 list-none">
                        <?php if(is_active_sidebar('footer-sidebar-3')):?>
                            <?php dynamic_sidebar('footer-sidebar-3');?>
                        <?php endif;?>
                    </div>
                <!-------------- COLUMN 4 -------------->
                    <div class="md:col-span-2 relative flex flex-col items-start gap-4">
                        <!-- location -->
                        <div class="flex gap-4 items-center">
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
                        <!-------------- BACK TO TOP -------------->
                        <a id="button" class="z-10 text-center fixed bottom-12 right-10 bg-green-dark shadow-sm shadow-green-light flex items-center justify-center h-12 w-12 rounded-full">
                            <i class="fas fa-angle-double-up text-2xl text-white hover:cursor-pointer hover:text-yellow active:text-yellow"></i>
                        </a>
                                    
                    </div>
            </div>  
            
                
            </footer>
    </section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
