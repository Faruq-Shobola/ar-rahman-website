<?php
/**
 * The template for displaying Home page
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
<section class="hero bg-green-dark text-white px-4 relative">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 py-10">
        <!------------ COLUMN 1 ------------>
        <div class="flex flex-col justify-center gap-3 py-20 w-">
            <h2 class="flex flex-col text-4xl md:text-6xl text-capitalize font-bold">
            An Islamic <br>School for all Children
            </h2>
            <!------ Paragraph ------>
            <p class="md:w-5/6 my-4 text-base capitalize">A Montessori cum Islamic curriculum based educational institute in the heart of Lagos. AT AR-RAHMAN Montessori Schools, we re-shape education.
            </p>
            <!------ Button ------>
            <div class="btn flex gap-4">
                <a href="<?php wp_upload_dir();?>/contact-us" class="border border-yellow hover:border-yellow  bg-yellow  hover:bg-green-dark text-white hover:text-yellow w-40 py-3 text-center rounded-full font-semibold capitalize">contact us</a>
                <a href="<?php wp_upload_dir();?>/programs" class="border border-white text-white hover:bg-white hover:text-green-dark w-40 py-3 text-center rounded-full font-semibold capitalize">our programs</a>
                
            </div>
        </div>
        <!------------ COLUMN 2 ------------>
        <div class="hidden md:flex items-center justify-center h-full">
            <div class="img_container overflow-hidden w-8/12 h-4/5 bg-green-dark  flex justify-center items-center">
                <img src="<?php wp_upload_dir(); ?>/wp-content/themes/ar-rahman-school/images/1641804112511.jpg" class="w-full h-full object-cover" alt="">
            </div>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 02   ABOUT SECTION
---------------------------------->
<section class="py-20 px-4">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">
        <!------------ COLUMN 1 ------------>
        <div class="flex justify-end">
            <div class="w-full lg:w-4/5 flex flex-col gap-5">
                <!------------ ABOUT ------------>   
                <div class="flex flex-col justify-center gap-3">
                    <!------ TITLE ------>
                    <h2 class="capitalize font-bold text-3xl py-2">About us</h2>
                    <!------ PARAGRAPH 1------>
                    <p class="text-base text-gray-700">
                        We are an Islamic Based Institute for Muslim students.
                        We impart knowledge into our pupils and children in line with the acceptable global educational standard.
                    </p>
                    
                </div>
                <!------------ VISION ------------>
                <div class="flex flex-col justify-center gap-3">
                    <h2 class="capitalize font-bold text-3xl py-2">Our Mission</h2>
                    <!------ PARAGRAPH ------>
                    <p class="lg:w-5/6  text-base capitalize text-gray-700">
                        To be the Leading Islamic Educational Institute in Nigeria and Africa, 
                        delivering quality education to better the society.
                    </p>
                </div>
                <!------------ MISSION ------------>
                <div class="flex flex-col justify-center gap-3">
                    <h2 class="capitalize font-bold text-3xl py-2">Our Vision</h2>
                    <!------ PARAGRAPH ------>
                    <p class="lg:w-5/6 text-base capitalize text-gray-700">
                    We are driven by our passion to impart quality education in our students. 
                    To build and guide them in the Islamic path to achieve their individual dreams.
    
                    </p>
                </div>
                <div class="self-start">
                    <a href="<?php wp_upload_dir();?>/about-us" class="inline-flex border border-green-dark hover:border-green-dark items-center text-center px-6 py-2  hover:bg-green-dark text-green-dark hover:text-white font-medium rounded-full">view more</a>
    
                </div>
            </div>
        </div>
        <!------------ COLUMN 2 ------------>
        <div class="about-image flex items-start justify-center md:h-full">
            <!--------- IMAGE --------->
            <div class="rounded-md bg-green-dark h-4/5 xs:h-full w-3/5 flex justify-center items-center ">
                <img src="<?php wp_upload_dir(); ?>/wp-content/themes/ar-rahman-school/images/logo_ARAHMAN_2.png" class="w-4/5 h-auto" alt="">
            </div>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 03   FACILITIES SECTION
---------------------------------->
<section class="py-20 px-4">
    <div class="max-w-6xl mx-auto flex flex-col gap-14">
        <!------ HEADING ------>
        <div class="flex justify-center items-center">
            <h2 class="flex flex-col text-3xl md:text-4xl capitalize font-bold">
                our school facilities
            </h2>
        </div>
        <!------ FACILITIES ------>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="w-full h-80 facility-library rounded-lg flex justify-center items-center">
                <h4 class="text-3xl font-medium text-white capitalize">library</h4>
            </div>
            <div class="w-full h-80 facility-laboratory rounded-lg flex justify-center items-center">
                <h4 class="text-3xl font-medium text-white capitalize">laboratory</h4>
            </div>
            <div class="w-full h-80 facility-school bus rounded-lg flex justify-center items-center">
                <h4 class="text-3xl font-medium text-white capitalize">school bus</h4>
            </div>
            <div class="w-full h-80 facility-cafeteria rounded-lg flex justify-center items-center">
                <h4 class="text-3xl font-medium text-white capitalize">cafeteria</h4>
            </div>
            <div class="w-full h-80 facility-play-ground rounded-lg flex justify-center items-center">
                <h4 class="text-3xl font-medium text-white capitalize">play ground</h4>
            </div>
            <div class="w-full h-80 facility-mosque rounded-lg flex justify-center items-center">
                <h4 class="text-3xl font-medium text-white capitalize">mosque</h4>
            </div>
        </div>
    </div>
</section>

<!-------------------------------- 
/// 04   NEWS SECTION
---------------------------------->
<section class="py-20 px-4">
    <div class="max-w-6xl mx-auto flex flex-col gap-14">
        <!------ HEADING ------>
        <div class="flex justify-center items-center">
            <h2 class="flex flex-col text-3xl md:text-4xl capitalize font-bold">
                school news update
            </h2>
        </div>
        <!-------------- BLOGS -------------->
        <?php $query_args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'order' => 'ASC',
        );
        
        $query = new WP_Query( $query_args ); ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
            <!-------------- BLOG 1 -------------->
            <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="w-full bg-white">
                    <div class=" rounded-lg overflow-hidden">
                        <?php if(has_post_thumbnail()):?>
                            <img
                                class="object-cover w-full h-72"
                                src="<?php the_post_thumbnail_url();?>"
                                alt="<?php the_title();?>"
                                />
                            <?php endif;?>
                            
                    </div>

                    <div class="px-2 py-7 flex flex-col">
                        <h5 class="text-base font-medium text-gray-500"><?php echo get_the_date( 'jS F, Y' );?></h5>
                        <h3 class="mt-4 text-xl font-medium">
                            <?php the_title();?>
                        </h3>
                    
                        <p class="mt-4 text-base text-gray"> <?php the_excerpt();?> </p>
                        <p class="mt-6 flex items-center justify-between">
                            <a href="<?php the_permalink();?>" class="text-wine text-sm font-semibold cursor-pointer">Continue reading</a>
                        </p>
                    </div>
                </div>   
            <?php endwhile; else: endif; ?>

        </div>
        <!-------------- BUTTON -------------->
        <div class="btn flex justify-center">
            <a href="<?php wp_upload_dir();?>/news" class="inline-flex border border-green-dark hover:border-green-dark items-center px-6 py-2  hover:bg-green-dark text-green-dark hover:text-white font-medium rounded-full">view more</a>
        </div>
    </div>
</section>

<!-------------------------------- 
/// 05   TOUR AND EVENTS SECTION
---------------------------------->
<section class="py-20 px-4">
    <div class="max-w-6xl mx-auto">
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-7 gap-14">
            <!---------------------------------  
                SCHELDUE TOUR SECTION
            --------------------------------->
            <div class="md:col-span-3 flex flex-col h-96 justify-center gap-12 px-8 py-8 rounded-lg bg-green-light">
                    <!-------------- HEADING -------------->
                <div class="heading text-left">
                    <h2 class="text-4xl font-bold capitalize">schedule tour</h2>
                </div>
                <!-------------- INFO -------------->
                <div class="flex flex-col gap-4">
                    <!-------------- LOCATION -------------->
                    <div class="flex gap-3 items-center">
                        <div class="">
                            <span class="flex justify-center items-center h-10 w-10 bg-green-dark rounded-full">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </span>
                        </div>
                        <div class="">
                                <p class="text-base">4 CMD Road, Shangisha, Magodo</p>
                        </div>
                    </div>
                    <!-------------- TIME -------------->
                    <div class="flex gap-3 items-center">
                        <div class="">
                            <span class="flex justify-center items-center h-10 w-10 bg-green-dark rounded-full">
                                <i class="fas fa-clock text-white"></i>
                            </span>
                        </div>
                        <div class="">
                            <p class="text-base">08:00AM - 03:00PM (Mondays - Fridays)</p>
                        </div>
                    </div>
                </div>
                <!-------------- BUTTON -------------->
                <div class="btn flex justify-end">
                    <a href="<?php wp_upload_dir();?>/schedule-a-tour" class="inline-flex border border-yellow hover:border-yellow  bg-yellow  hover:bg-green-light text-white hover:text-yellow font-medium items-center px-6 py-2 rounded-full">schedule tour</a>
                </div>
            </div>
    
            <!---------------------------------  
                UP COMING EVENTS SECTION 
            --------------------------------->
            <div class="md:col-span-4 flex justify-center">
                <div class="w-full lg:w-4/5">
                    <div class="flex flex-col gap-12">
                        <!-------------- HEADING -------------->
                        <div class="heading text-left">
                            <h2 class="text-4xl font-bold capitalize">upcoming Events</h2>
                        </div>
                        <!-------------- EVENTS -------------->
                        <?php $query_args = array(
                            'post_type' => 'events',
                            'posts_per_page' => 2,
                            'order' => 'ASC',
                            );
                            
                            $query = new WP_Query( $query_args ); ?>
                            <!--  -->
                            <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="flex flex-col gap-2">
                                    <!-------------- HEADING ------------->
                                    <div class="flex flex-col gap-2">
                                        <a href="<?php the_permalink();?>" class="text-3xl font-semibold capitalize"><?php the_title();?></a>

                                        <h5 class="capitalize text-base font-medium"><?php the_field('date'); ?></h5>
                                    </div>
                                    <!-------------- TIME ------------->
                                    <?php
                                    $time = get_field('time');
                                    if( $time ): ?>
                                        <div class="flex gap-3 items-center">
                                            <div class="">
                                                <span class="flex justify-center items-center h-5 w-5 bg-yellow rounded-full">
                                                    <i class="fas fa-clock text-white text-xs"></i>
                                                </span>
                                            </div>
                                            <div class="">
                                                <h5 class="capitalize text-sm"><?php echo esc_attr($time['from']); ?> - <?php echo esc_attr($time['till']); ?></h5>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <!-------------- LOCATION -------------->
                                    <div class="flex gap-3 items-center">
                                        <div class="">
                                            <span class="flex justify-center items-center h-5 w-5 bg-yellow rounded-full">
                                                <i class="fas fa-map-marker-alt text-white text-xs"></i>
                                            </span>
                                        </div>
                                        <div class="">
                                            <h5 class="capitalize text-sm"><?php the_field('venue'); ?></h5>
                                        </div>
                                    </div>
                                </div>   
                             <?php endwhile; else: endif; ?>

                        <!-------------- BUTTON -------------->
                        <div class="btn flex justify-start">
                            <a href="<?php wp_upload_dir();?>/events" class="inline-flex border border-green-dark hover:border-green-dark items-center px-6 py-2  hover:bg-green-dark text-green-dark hover:text-white font-medium rounded-full">more events</a>
                        </div>

                    </div>
                </div>
                
            </div>
                        

        </div>
    </div>
</section>




<!-- GET FOOTER CONTENT -->
<?php get_footer();?>