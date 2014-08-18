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