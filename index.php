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
 * @package Independent_Publisher_2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<!-- PHP using logic "OR" operator to check if current user is logged in	 -->					
		<?php if ( current_user_can('editor') || current_user_can('administrator') || current_user_can('member') ) {?>

		
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php endif; ?>			


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
		
		<?php } else { echo "<strong>You have failed me for the last time! <br>You must LOGIN to the dark side.</strong>
			<br><img src=../wp-content/uploads/2017/09/darth_vader_rogue_one.jpg <br> <p>Add some styling to the login form below and delete Darth Vader when done</p> <br>";
			 wp_login_form();
		}?>

<!-- PHP using logic "OR" operator to check if current user is logged in END	 -->	
		
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

