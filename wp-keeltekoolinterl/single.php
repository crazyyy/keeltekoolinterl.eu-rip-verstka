<?php get_header(); ?>
	


<section id="middleArea" class="bg-gray padding-30 no-white">
        <div class="wrap clearfix">
            <!-- begin .contentArea -->
            <div class="contentArea">
   

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
		
			<!-- post thumbnail // chek if thumbail exits -->
			<?php if ( has_post_thumbnail()) :?>
				<a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); // Fullsize image for the single post ?></a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<h1 class="single-title inner-title"><?php the_title(); ?></h1>
			
			<!-- post details -->
			<span class="date"><?php the_time('d F Y'); ?> <?php the_time('H:i'); ?></span>

			<a href="#" class="eModal-1">Кнопка регистрации</a>
			<!-- /post details -->
			
			<!-- Dispaly dynamic content RU: Вывод контента записей -->
			<?php the_content(); ?>
			
			<?php the_tags( __( 'Tags: ', 'wpeasy' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			
			<p><?php _e( 'Categorised in: ', 'wpeasy' ); the_category(', '); // Separated by commas ?></p>
			
			<p><?php _e( 'This post was written by ', 'wpeasy' ); the_author(); ?></p>
			
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			
			<?php comments_template(); ?>
			
		
			<?php endwhile; else: ?>
				<h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
			<?php endif; ?>	
		</article>
		<!-- /article -->



            </div>
            <!-- end .contentArea -->
        </div>
    </section>

<?php get_footer(); ?>