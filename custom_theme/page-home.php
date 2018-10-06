<?php 
/**
 * Template Name: Home Page
 * 
 * 
 * @package CustomTheme
 * @since Custom Theme 1.0
 */

 ?>
<?php get_header(); ?>
<div class="jumbotron gradient-bg margin-neg-20">
        <div class="container text-center">
            <h1>Welcome To Our Custom Site</h1>
        </div>
    </div>
 <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <?php if (have_posts()) :?>
            <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                        
                    <?php endwhile; ?>
                
            <?php endif; ?>
        </div> 
    </div>
 </div>
 <?php get_footer(); ?>