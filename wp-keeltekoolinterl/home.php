<?php /* Template Name: Home Page */ get_header(); ?>


    <section id="hero" style="background-image:url(<?php the_field('home_header_background_img'); ?>);background-position: center 0;">
    <div class="inner">
        <div class="wrap">
            <div class="ctaArea" style="display:block;">
                <h1><?php the_field('home_header_title'); ?></h1>
                <?php the_field('home_header_content'); ?>
          
                <a href="<?php the_field('home_header_link_anchor'); ?>" class="btn btn-large btn-green"><?php the_field('home_header_link_text'); ?></a>
            </div>
            <?php get_template_part('sidebar-calendar'); ?>
        </div>
    </div>
</section>
</header>

        </div><!-- sliderHolder -->
    </div>
</section>
<!-- end #kliendid-meist -->    <!-- begin #registreeri -->
    <section id="registreeri" class="bg-gray padding-90">
        <div class="wrap sep"></div>
        <div class="wrap">
            <div class="box box-orange">
                <h1><?php the_field('home_bottom_title'); ?></h1>
                <?php the_field('home_bottom_content'); ?>
                <a href="<?php the_field('home_bottom_anchor_link'); ?>" class="btn btn-large btn-green"><?php the_field('home_bottom_anchor_text'); ?></a>
            </div>
        </div>
    </section>
    <!-- end #registreeri -->

<?php get_footer(); ?>