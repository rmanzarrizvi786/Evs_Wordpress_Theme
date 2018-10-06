<?php
/**
 * Template Name: Slim Page
 *
 *
 * @package CustomTheme
 * @since Custom Theme 1.0
 */
?>
<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6-offset-3">
                <?php if(have_posts()) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    
                    <h1 class="text-center"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    
                <?php endwhile; ?>
                
            <?php endif; ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>