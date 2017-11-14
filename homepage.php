<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content">
	
		    <main id="main" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div class="landing">
						<div class="landing-caption text-center">
							<h3><?php the_field('name'); ?></h3>
							<h1><?php the_field('profession'); ?></h1>
							<button class="button">LET'S GET TO WORK</button>
						</div>
					</div>

					<div class="more-info text-center">
						<div class="row">
							<h1>Some Branding</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>

					<div class="about text-center">
						<h1>ABOUT</h1>
					</div>

					<div class="contact text-center">
						<h1>CONTACT</h1>
						<p>+639360613776</p>
					</div>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
