<?php /* Template Name: Registration Page */ get_header(); ?>
    <section id="hero">
        <div class="inner">
            <div class="wrap">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
</header>

<section id="middleArea" class="bg-gray padding-30 with-sidebar right-sidebar">
    <div class="wrap clearfix">
        <!-- begin .contentArea -->
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="contentArea">
	<!--             <div class="titleArea">
	    <h3>Быстрая шкала оценки языкового уровня</h3>
	</div> -->
            <?php the_content(); ?>
        </div>
        <?php endwhile; else: // If 404 page error ?>
            <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
        <?php endif; ?>
        <!-- end .contentArea -->
        <!-- begin .sidebarArea -->
        <div class="sidebarArea">
            <?php get_template_part('sidebar-calendar'); ?>
        </div>            
        <!-- end .sidebarArea -->
 
    </div>
</section>


<?php get_footer(); ?>