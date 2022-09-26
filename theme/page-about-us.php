<?php
/**
 * The template for displaying About Us page
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
<section class="relative hero-about top-0 h-96 bg-green-dark flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="max-w-lg mx-auto px-4">
        <div class="flex flex-col gap-6 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug">About Our School</h2>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 02   ABOUT US SECTION
---------------------------------->
<section class="py-20 px-4">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">
        <!------------ COLUMN 1 ------------>
        <div class="flex flex-col justify-center gap-5 lg:px-8">
            <!------ TITLE ------>
            <h2 class="capitalize font-bold text-3xl py-2">About us</h2>
            <!------ PARAGRAPH 1------>
            <p class="text-base text-gray-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto debitis sapiente ducimus, ad quos consequatur repellat unde rerum laborum, soluta illo aut. Incidunt, ipsa! Temporibus amet atque magni velit laboriosam.
            </p>
            <!------ PARAGRAPH 2------>
            <p class="text-base text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, amet dolor error totam quidem ullam. Officia eveniet alias, nostrum deserunt at sunt explicabo saepe, ducimus doloribus nihil ad? Quibusdam, ad?
            </p>
            <!------ PARAGRAPH 3------>
            <p class="text-base text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium deserunt aut omnis quas, exercitationem maiores unde fugit perspiciatis blanditiis mollitia porro, dolores excepturi id repellendus facere nihil dolore, minus sunt suscipit voluptatum inventore ipsum recusandae? Ipsum ducimus eligendi modi beatae odio consequatur adipisci suscipit ab.
            </p>
            <!------ PARAGRAPH 4------>
            <p class="text-base text-gray-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur quasi soluta aperiam eveniet, ad neque voluptatibus tempora blanditiis aliquid doloribus? 
            </p>
            <!------ PARAGRAPH 5------>
            <p class="text-base text-gray-700">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, accusamus.
            </p>
        </div>
        <!------------ COLUMN 2 ------------>
        <div class="flex items-start justify-center h-full">
            <!--------- IMAGE --------->
            <div class="rounded-md bg-green-dark h-5/6 w-3/5 flex justify-center items-center ">
                <img src="<?php wp_upload_dir(); ?>/wp-content/themes/ar-rahman-school/images/logo_ARAHMAN_2.png" class="w-4/5 h-auto" alt="">
            </div>
        </div>
    </div>
</section>
<!----------------------------------------------- 
/// 03   MISSION | VISION | CORE VALUES SECTION
------------------------------------------------->
<section class="service-one">
    <!------------ MISSION & VISION------------>
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 py-20 gap-y-12">
        <!------------ MISSION ------------>
        <div class="flex flex-col justify-center gap-3 px-4 md:px-8">
            <h2 class="capitalize font-bold text-3xl py-2">Our Vision</h2>
            <!------ PARAGRAPH ------>
            <p class="lg:w-5/6 my-4 text-base capitalize text-gray-700">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia sunt veritatis maiores ducimus sit dicta qui dolores? Eius maxime tempore similique. Sequi ipsum expedita ratione. Dignissimos, nesciunt voluptate. Reiciendis itaque fuga dolore cum. Voluptas ratione animi quo repudiandae recusandae, ipsam saepe quasi ex dolore. Voluptatem aliquid eius neque!
            </p>
        </div>
        <!------------ VISION ------------>
        <div class="flex flex-col justify-center gap-3 px-4 md:px-8">
            <h2 class="capitalize font-bold text-3xl py-2">Our Mission</h2>
            <!------ PARAGRAPH ------>
            <p class="lg:w-5/6 my-4 text-base capitalize text-gray-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut blanditiis nulla vero, reiciendis explicabo sequi iste beatae velit excepturi repellendus reprehenderit animi necessitatibus numquam adipisci minus quisquam voluptatem eligendi maiores ipsam? Minus, quisquam ex excepturi consectetur, architecto explicabo, veniam nihil praesentium aperiam quis nulla cum alias dicta. Hic, quas rem!
            </p>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 04   OUR PRINCIPAL SECTION
---------------------------------->
<section class="team">
    <div class="flex flex-col items-center gap-6 max-w-6xl py-20 mx-auto px-4">
        <!------------ TITLE ------------>
        <div class="max-w-2xl mx-auto">
            <h3 class="font-semibold text-3xl md:text-4xl capitalize text-center">our principal officers</h3>
        </div>
        <!------------ TEAM CARDS ------------>
        <?php $query_args = array(
        'post_type' => 'teams',
        'order' => 'ASC',
        );
        
        $query = new WP_Query( $query_args ); ?>
        <div class=" w-full lg:w-4/5 grid sm:grid-cols-2 lg:grid-cols-3 gap-10 py-10">
            <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php require get_template_directory() . '/inc/template-team.php'; ?>
            <?php endwhile; else: endif; ?>
        </div>
    </div>
</section>



<!-- GET FOOTER CONTENT -->
<?php get_footer(); ?>