<?php /* Template Name: Home Page */ get_header(); ?>


    <section id="hero" style="background-image:url(<?php the_field('home_header_background_img'); ?>);background-position: center 0;">
    <div class="inner">
        <div class="wrap">
            <div class="ctaArea" style="display:block;">
                <h1><?php the_field('home_header_title'); ?></h1>
                <?php the_field('home_header_content'); ?>
          
                <a href="<?php the_field('home_header_link_anchor'); ?>" class="btn btn-large btn-green"><?php the_field('home_header_link_text'); ?></a>
            </div>
            <div class="kalender-nimekiri">
                <h3 class="titleArea"><?php the_field('home_header_right_block_title'); ?></h3>
                <ul>
                <?php query_posts("showposts=3&cat=78"); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <li>
                        <?php 
                            $date = get_field('start_date');
                            $y = substr($date, 0, 4);
                            $m = substr($date, 4, 2);
                            $d = substr($date, 6, 2);
                            $time = strtotime("{$d}-{$m}-{$y}");
                        ?>

                        <div class="date"><?php echo date('j', $time); ?><span><?php echo date('n.Y', $time) ?></span></div>
                        <div class="desc">
                            <p class="tase"><strong> <?php the_field('course_category'); ?></strong></p>
                            <p><strong><?php the_title(); ?></strong><br>
                                <?php the_field('subtitle_course'); ?></p>
                            <a href="<?php the_permalink(); ?>" class="eModal-1 btn btn-block btn-green">Зарегистрироваться на курсы</a>
                        </div>
                    </li>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                </ul>
                <a href="http://keeltekoolinterl.eu/kursy.htm" class="btn btn-large btn-red">СМОТРЕТЬ ВСЕ КУРСЫ</a>
            </div><!-- kalender-nimekiri -->
        </div>
    </div>
</section>
</header>

        </div><!-- sliderHolder -->
    </div>
</section>
<!-- end #kliendid-meist -->    <!-- begin #registreeri -->
<!--     <section id="registreeri" class="bg-gray padding-90">
    <div class="wrap sep"></div>
    <div class="wrap">
        <div class="box box-orange">
            <h1><?php the_field('home_bottom_title'); ?></h1>
            <?php the_field('home_bottom_content'); ?>
            <a href="<?php the_field('home_bottom_anchor_link'); ?>" class="btn btn-large btn-green"><?php the_field('home_bottom_anchor_text'); ?></a>
        </div>
    </div>
</section> -->
    <!-- end #registreeri -->

<?php get_footer(); ?>