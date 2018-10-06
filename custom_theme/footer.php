
<footer id="site-footer">
	<div class="container">
    <span class="site-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <?php bloginfo( 'name' ); ?>
      </a>
    </span>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>">
			<?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?>
		</a>
	</div>
</footer>
<?php wp_footer(); ?>
