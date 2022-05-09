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
            <p class="text-base text-gray-700">Duromedia was formed in 2016 by Founder, Mr. AbdulHad Durodola. 
                He believes when passionate people and like minds work together and well empowered, amazing things happen.
            </p>
            <!------ PARAGRAPH 2------>
            <p class="text-base text-gray-700">In these few years, Duromedia has made its mark in Nigeria as well
                as getting international recognition for excellence. The company has also made serious impact on people, small- and large-scale
                businesses. 
            </p>
            <!------ PARAGRAPH 3------>
            <p class="text-base text-gray-700">The DuroMedia Team which consists of Rahmat Bello, Ahmed Olusesi, Gbemi Adeosun, Yusuf AbdulLateef, 
                Sumaiyah Ajani, Olatunji Olayemi, Temidayo Badmus, Faruq Shobola and Faizol Shobola is a very versatile team with large efforts and commitments on 
                every project. 
            </p>
            <!------ PARAGRAPH 4------>
            <p class="text-base text-gray-700">We believe that working closely with each other and in direct contact
                with our clients will lead to better understanding project needs, and delivering better results. 
            </p>
            <!------ PARAGRAPH 5------>
            <p class="text-base text-gray-700">Outside of our client work, we also have our pet charity project, The
                Flowing Charity, TFC. The TFC project focuses on imparting Digital Skills in Nigerian youths.
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
            <p class="lg:w-5/6 my-4 text-base capitalize text-gray-700">Duromedia was formed in 2016 by Founder, Mr. AbdulHad Durodola. He believes when passionate
                people and like minds work together and well empowered, amazing things happen.In these few years, Duromedia has made its mark in Nigeria as
                well as getting international recognition for excellence. The company has also made serious impact on people, small- and large-scale
                businesses.
            </p>
        </div>
        <!------------ VISION ------------>
        <div class="flex flex-col justify-center gap-3 px-4 md:px-8">
            <h2 class="capitalize font-bold text-3xl py-2">Our Mission</h2>
            <!------ PARAGRAPH ------>
            <p class="lg:w-5/6 my-4 text-base capitalize text-gray-700">Duromedia was formed in 2016 by Founder, Mr. AbdulHad Durodola. He believes when passionate
                people and like minds work together and well empowered, amazing things happen.In these few years, Duromedia has made its mark in Nigeria as
                well as getting international recognition for excellence. The company has also made serious impact on people, small- and large-scale
                businesses.
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