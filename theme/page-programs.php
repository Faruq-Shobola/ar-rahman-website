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
<section class="relative hero-programme top-0 h-96 bg-green-dark flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="max-w-lg mx-auto px-4">
        <div class="flex flex-col gap-6 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug">our programs</h2>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 02   BLOG ARCHIVE SECTION
---------------------------------->
<section class="py-20">
    <div class="max-w-6xl mx-auto ">
        <div class="max-w-5xl mx-auto relative flex flex-col-reverse lg:grid lg:grid-cols-9 gap-8">
            <div class="lg:col-span-6 px-8 py-14 flex flex-col gap-20">
                <!-------- PRE-SCHOOL -------->
                <div id="pre-school" class="flex flex-col gap-4">
                    <!-- IMAGE -->
                    <div class="img overflow-hidden rounded-md">
                        <img src="<?php wp_upload_dir(); ?>/wp-content/themes/ar-rahman-school/images/1642718753758.jpg" alt="" class="h-72 md:h-96 w-full">
                    </div>
                    <!-- HEADING -->
                    <div class="content">
                        <h3 class="text-3xl font-semibold">Reception - Nursery Classes</h3>
                        <h5 class="text-lg font-medium mt-2">Subjects:</h5>
                    </div>
                    <!-- SUBJECTS -->
                    <div class="">
                        <ul role="list" class="marker:text-green-dark text-base">
                            <li class="">Language and Communication Skill </li>
                            <li class="">Numeracy </li>
                            <li class="">Sensorial Education </li>
                            <li class="">Practical Life Exercises </li>
                            <li class="">Cultural Subjects</li>
                            <li class="">Arabic & Quran Study</li>
                            <li class="">Social Norms</li>
                        </ul>
                    </div>
                </div>
                <!-------- ELEMENTARY CLASSES -------->
                <div id="elementary-classes" class="flex flex-col gap-4">
                    <!-- IMAGE -->
                    <div class="img overflow-hidden rounded-md">
                        <img src="<?php wp_upload_dir(); ?>/wp-content/themes/ar-rahman-school/images/1642718766509.jpg" alt="" class="h-72 md:h-96 w-full">
                    </div>
                    <!-- HEADING -->
                    <div class="content">
                        <h3 class="text-3xl font-semibold">Elementary Classes</h3>
                        <h5 class="text-lg font-medium mt-2">(5years – 10years) Basic 1 to 6 Subjects:</h5>
                    </div>
                    <!-- SUBJECTS -->
                    <div class="">
                        <ul role="list" class="marker:text-green-dark text-base">
                            <li class="">Language and Communication Skill </li>
                            <li class="">Numeracy </li>
                            <li class="">Sensorial Education </li>
                            <li class="">Practical Life Exercises </li>
                            <li class="">Cultural Subjects</li>
                            <li class="">Arabic & Quran Study</li>
                            <li class="">Social Norms</li>
                            <li class="">English Reading & Understanding</li>
                            <li class="">Deen (Adab, Tahdhib, Hadith, IRS)</li>
                            <li class="">Qur’an</li>
                            <li class="">Mathematics (Numeracy, Geometry & Mental)</li>
                            <li class="">Chess & Scrabble </li>
                            <li class="">Information and Computer Technology</li>
                            <li class="">History / Geography</li>
                            <li class="">Nature Study</li>
                            <li class="">Languages (Arabic, French & Yoruba)</li>
                            <li class="">Creative Arts</li>
                            <li class="">Science</li>
                            <li class="">Social Studies</li>
                            <li class="">Home Economics</li>
                        </ul>
                    </div>
                </div>
                <!-------- COLLEGE (JUNIOR) -------->
                <div id="college-junior" class="flex flex-col gap-4">
                    <!-- IMAGE -->
                    <div class="img overflow-hidden rounded-md">
                        <img src="<?php wp_upload_dir(); ?>/wp-content/themes/ar-rahman-school/images/1642718746977.jpg" alt="" class="h-72 md:h-96 w-full">
                    </div>
                    <!-- HEADING -->
                    <div class="content">
                        <h3 class="text-3xl font-semibold">College (Junior)</h3>
                    </div>
                    <!-- SUBJECTS -->
                    <div class="">
                        <ul role="list" class="marker:text-green-dark text-base">
                            <li class="">Maths  </li>
                            <li class="">English </li>
                            <li class="">Basic Science </li>
                            <li class="">PHE</li>
                            <li class="">Social Studies </li>
                            <li class="">B. Tech</li>
                            <li class="">Social Norms</li>
                            <li class="">Languages (Arabic, Yoruba & French)</li>
                            <li class="">Lit. Eng</li>
                            <li class="">Qur’an</li>
                            <li class="">CCA</li>
                            <li class="">Civic Education</li>
                            <li class="">Computer </li>
                            <li class="">Home Economics</li>
                        </ul>
                    </div>
                </div>
                <!-------- COLLEGE (SENIOR) -------->
                <div id="college-senior" class="flex flex-col gap-4">
                    <!-- IMAGE -->
                    <div class="img overflow-hidden rounded-md">
                        <img src="<?php wp_upload_dir(); ?>/wp-content/themes/ar-rahman-school/images/1642718713483.jpg" alt="" class="h-72 md:h-96 w-full">
                    </div>
                    <!-- HEADING -->
                    <div class="content">
                        <h3 class="text-3xl font-semibold">College (Senior)</h3>
                    </div>
                    <!-- SUBJECTS -->
                    <div class="">
                        <ul role="list" class="marker:text-green-dark text-base">
                            <li class="">Maths  </li>
                            <li class="">English </li>
                            <li class=""> Physics</li>
                            <li class="">Biology</li>
                            <li class="">Marketing </li>
                            <li class="">F. Maths</li>
                            <li class="">Lit. Eng</li>
                            <li class="">IRS</li>
                            <li class="">Qur’an</li>
                            <li class="">Arabic </li>
                            <li class="">Chemistry</li>
                            <li class="">Govt. </li>
                            <li class="">Civic Education</li>
                            <li class="">Yoruba </li>
                            <li class="">Economics</li>
                        </ul>
                    </div>
                </div>
                <!-------- SCHOOL ACTIVITIES -------->
                 <div id="school-activities" class="flex flex-col gap-4">
                    <!-- IMAGE -->
                    <div class="img overflow-hidden rounded-md">
                        <img src="<?php wp_upload_dir(); ?>/wp-content/themes/ar-rahman-school/images/1642718861842.jpg" alt="" class="h-72 md:h-96 w-full">
                    </div>
                    <!-- HEADING -->
                    <div class="content">
                        <h3 class="text-3xl font-semibold">School Activities</h3>
                    </div>
                    <!-- SUBJECTS -->
                    <div class="">
                        <table class="marker:text-green-dark text-base w-full ">
                                                        <tr class="">
                                <td class="">Work experience</td>
                                <td class="font-semibold">3rd Term</td>
                            </tr>
                            <tr class="">
                                <td class="">Open Day</td>
                                <td class="font-semibold">Mid Term</td>
                            </tr>
                            <tr class="">
                                <td class="">Inter-House Sport</td>
                                <td class="font-semibold">Biennial</td>
                            </tr>
                            <tr class="">
                                <td class="">Montessori Expo</td>
                                <td class="font-semibold">Biennial</td>
                            </tr>
                            <tr class="">
                                <td class="">Excursion</td>
                                <td class="font-semibold">2nd Term</td>
                            </tr>
                            <tr class="">
                                <td class="">Intra / Inter Schl. Competition </td>
                                <td class="font-semibold">Termly</td>
                            </tr>
                            <tr class="">
                                <td class="">Cultural Day</td>
                                <td class="font-semibold">Last school Day in September</td>
                            </tr>
                            <tr class="">
                                <td class="">Children Day</td>
                                <td class="font-semibold">27th Oct</td>
                            </tr>
                            <tr class="">
                                <td class="">STEM Exhibition</td>
                                <td class="font-semibold">Biennial</td>
                            </tr>
                            <tr class="">
                                <td class="">Fathers’ Day</td>
                                <td class="font-semibold">June</td>
                            </tr>
                            <tr class="">
                                <td class="">Mothers’ Day</td>
                                <td class="font-semibold">May</td>
                            </tr>
                            <tr class="">
                                <td class="">Seerah Day</td>
                                <td class="font-semibold">Rabiu Awwal</td>
                            </tr>
                            <tr class="">
                                <td class="">Arafah Day</td>
                                <td class="font-semibold">9th Dhul Hijjah</td>
                            </tr>
                            <tr class="">
                                <td class="">Munasaqoh </td>
                                <td class="font-semibold">Termly</td>
                            </tr>
                            <tr class="">
                                <td class="">Debate / Speltrng Bee</td>
                                <td class="font-semibold">Monthly</td>
                            </tr>
                            <tr class="">
                                <td class="">World Teachers’ Day</td>
                                <td class="font-semibold">October</td>
                            </tr>
                            <tr class="">
                                <td class="">Read Aloud Day</td>
                                <td class="font-semibold">3rd Term</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-------- CLUBS -------->
                <div id="clubs" class="flex flex-col gap-4">
                    <!-- IMAGE -->
                    <div class="img overflow-hidden rounded-md">
                        <img src="<?php wp_upload_dir(); ?>/wp-content/themes/ar-rahman-school/images/1642718685782.jpg" alt="" class="h-72 md:h-96 w-full">
                    </div>
                    <!-- HEADING -->
                    <div class="content">
                        <h3 class="text-3xl font-semibold">Clubs</h3>
                    </div>
                    <!-- SUBJECTS -->
                    <div class="">
                        <ul role="list" class="marker:text-green-dark text-base">
                            <li class="">Chess & Scrabbles</li>
                            <li class="">Taekwando</li>
                            <li class="">Science</li>
                            <li class="">Press Club</li>
                            <li class="">Maths</li>
                            <li class="">MSSN</li>
                            <li class="">Literary & Debate</li>
                            <li class="">STEM</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="lg:sticky lg:top-5 flex lg:col-span-3 h-96 px-8">
                <div class="flex flex-col px-4 py-6 justify-center w-full sm:w-3/5 lg:w-full gap-2 bg-green-light">
                    <a href="#pre-school" class="capitalize font-medium py-3 px-6 programme-menu">pre-school</a>
                    <a href="#elementary-classes" class="capitalize font-medium py-3 px-6 programme-menu">elementary classes </a>
                    <a href="#college-junior" class="capitalize font-medium py-3 px-6 programme-menu">college (junior)</a>
                    <a href="#college-senior" class="capitalize font-medium py-3 px-6 programme-menu">college (senior)</a>
                    <a href="#school-activities" class="capitalize font-medium py-3 px-6 programme-menu">school activties</a>
                    <a href="#clubs" class="capitalize font-medium py-3 px-6 programme-menu">clubs</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GET FOOTER CONTENT -->
<?php get_footer();?>