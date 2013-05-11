<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Buttercream
 * @since Buttercream 1.0
 */

get_header(); ?>

		<div id="primary" class="site-content">
			<div id="content" role="main">

				<div id="home-slider">
					<img src="http://placekitten.com/600/300" />
				</div>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->
<?php get_footer(); ?>