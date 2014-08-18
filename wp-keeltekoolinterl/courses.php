<?php /* Template Name: Courses Page */ get_header(); ?>
    <section id="hero">
        <div class="inner">
            <div class="wrap">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
</header>

<section id="middleArea" class="bg-gray padding-30 no-white">
    <div class="wrap clearfix">
        <!-- begin .contentArea -->
        <div class="contentArea">
            <?php if( have_rows('course_block') ): ?>
            <ul id="list-kursused" class="block-grid three-up">

                
      
<?php while( have_rows('course_block') ): the_row();    ?>
<li>


                    <div class="inner">
                        <h3>
                            <?php the_sub_field('block_title'); ?>
                        </h3>
                        <ul class="square-list">

                            <?php if(get_sub_field('course_num_1')) { echo '<li class="first"><a href="' . get_sub_field('course_link_1') . '" class="eModal-1">' . get_sub_field('course_num_1') . '</a>'; } ?>

                            <?php if(get_sub_field('course_num_2')) { echo '<li><a href="' . get_sub_field('course_link_2') . '" class="eModal-1">' . get_sub_field('course_num_2') . '</a>'; } ?>

                            <?php if(get_sub_field('course_num_3')) { echo '<li><a href="' . get_sub_field('course_link_3') . '" class="eModal-1">' . get_sub_field('course_num_3') . '</a>'; } ?>

                            <?php if(get_sub_field('course_num_4')) { echo '<li><a href="' . get_sub_field('course_link_4') . '" class="eModal-1">' . get_sub_field('course_num_4') . '</a>'; } ?>

                            <?php if(get_sub_field('course_num_5')) { echo '<li><a href="' . get_sub_field('course_link_5') . '" class="eModal-1">' . get_sub_field('course_num_5') . '</a>'; } ?>


                        </ul>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div><!-- end .contentArea -->
    </div>
</section>


<?php get_footer(); ?>