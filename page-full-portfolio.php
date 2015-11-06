<?php /* Template Name: Full Page, No Sidebar, Portfolio */ get_header();  ?>

<main>


	<section class="about" id="about">
		<div class="container">
			
		</div><!-- container -->
	</section><!-- about -->

	<section class="skillsBorder">
		<div class="container">
			
		</div><!-- container -->
	</section><!-- skillsBorder -->

	<section class="skills" id="skills">
		<div class="container">
			
		</div><!-- container -->
	</section><!-- skills -->

	<section class="projectsBorder">
		<div class="container">
			
		</div><!-- container -->
	</section><!-- projectBorder -->

	<section class="projects" id="projects">
		<div class="container">
			<?php $showPortfolio = new WP_Query( array( 'posts_per_page' => 8, 'post_type'=>'portfolio', 'order' => 'ASC' ) ); ?>

			<?php if ( $showPortfolio->have_posts() ) : ?>
				<?php $counter = 0; ?>
				<?php while ( $showPortfolio->have_posts() ) { $showPortfolio->the_post(); ?>
					<?php $counter++; ?>

					<div class="project">
						<div class="projectLeft">
							<h4>0<?php echo $counter; ?></h4>
							<h3><?php the_title(); ?></h3>
							<p><?php the_content(); ?></p>
						</div>
						<div class="projectRight">
							<?php echo get_the_post_thumbnail( $post->ID, 'medium'); ?>
						</div>
					</div>
				<?php } ?>
				<?php wp_reset_postdata(); ?>
			<?php else:  ?>
			<?php endif; ?>

		</div><!-- container -->
	</section><!-- projects -->

	<section class="contactBorder">
		<div class="container">
			
		</div><!-- continer -->
	</section><!-- contactBorder -->
	
	<section class="contact" id="contact">
		<div class="container">
			 <div class="triangleYellow"></div>
		</div><!-- container -->
	</section><!-- contact -->

</main>

<?php get_footer(); ?>


			