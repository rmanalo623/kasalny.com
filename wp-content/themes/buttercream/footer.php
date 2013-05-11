<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Buttercream
 * @since Buttercream 1.0
 */

?>
		<?php buttercream_content_nav( 'nav-below' ); ?>
	</div><!-- #main -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php _e( 'Copyright' , 'buttercream' ) ?> <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>		
		</div><!-- .site-info -->
	</footer><!-- .site-footer .site-footer -->
	<?php
	$menu = has_nav_menu( 'headermenu' );
   		if ( isset( $menu ) && $menu ) { ?>
   <div class="navbar">
	<nav role="navigation" class="site-navigation main-navigation">
		<h1 class="assistive-text"><?php _e( 'Menu', 'buttercream' ); ?></h1>
		<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'buttercream' ); ?>"><?php _e( 'Skip to content', 'buttercream' ); ?></a></div>
     	<?php wp_nav_menu( array( 'container_id' => 'header-menu', 'theme_location' => 'headermenu' ) ); ?>
     	<div class="searchbar">
	  		<?php get_search_form(); ?>
	  	</div>
	</nav>
</div>
<?php
  	}
?>
</div><!-- #page .hfeed .site -->
<?php wp_footer(); ?>

</body>
</html>