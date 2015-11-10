<?php /* Template Name: Full Page, No Sidebar, Portfolio */ get_header();  ?>

<main>
	<div class="wrapper"><section class="aboutBorder"></section><!-- skillsBorder --></div><!-- wrappper -->
	
	<section class="about" id="about">
		<div class="container">
			<h2>About</h2>
				<p>-Front end web developer | Toronto, Ontario</p>
				<p>-Terrible at self promotion | Adept at self deprecation</p>
				<p>-Fluent in sarcasm | Versed in dry wit</p>
				<p>-Lover of cheese pizza | Drinker of delicious beer</p>
				<p>-Coffee crusader | Ice cream explorer | Taco aficionado</p>
				<p>-Equal parts super and duper</p>
				<p>-References available upon request</p>
		</div><!-- container -->
	</section><!-- about -->

	<div class="wrapper"><section class="skillsBorder"></section><!-- skillsBorder --></div><!-- wrappper -->

	<section class="skills" id="skills">
		<div class="container">
			<h2>Skills</h2>
			<p>-HTML5 | CSS3 | Sass</p>
			<p>-JavaScript | jQuery | Angular | APIs</p>
			<p>-Git | Github | Gulp</p>
			<p>-WordPress | Sublime Text</p>
			<p>-Accessibility | Responsive Design</p>
		</div><!-- container -->
	</section><!-- skills -->

	<div class="wrapper"><section class="projectsBorder"></section><!-- projectBorder --></div><!-- wrappper -->

	<section class="projects" id="projects">
		<div class="container">
			<h2>Projects</h2>
			<?php $showPortfolio = new WP_Query( array( 'posts_per_page' => 8, 'post_type'=>'portfolio', 'order' => 'ASC' ) ); ?>

			<?php if ( $showPortfolio->have_posts() ) : ?>
				<?php $counter = 0; ?>
				<?php while ( $showPortfolio->have_posts() ) { $showPortfolio->the_post(); ?>
					<?php $counter++; ?>
					
					<div class="projectTop">
						<h4>0<?php echo $counter; ?></h4>
					</div>
					<div class="project">
						<div class="projectLeft">
							<h3><?php echo get_field('short_description'); ?></h3>
							<p><?php the_content(); ?></p>
							<div class="projectBottom">
								<?php while( has_sub_field('technical_components') ): ?>	
									<h5>--<?php echo get_sub_field('technical_component'); ?>--</h5>
								<?php endwhile; ?>	
							</div>
						</div>
						<div class="projectRight">
							<?php while( has_sub_field('images') ): ?>
								<div class="image">
									<?php $image = get_sub_field('image'); ?>
									<?php $url = get_sub_field('url'); ?>
									<a href="<?php echo $url ?>" target="_blank"><img src="<?php echo $image['sizes']['large'] ?>"></a>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				<?php } ?>
				<?php wp_reset_postdata(); ?>
			<?php else:  ?>
			<?php endif; ?>

		</div><!-- container -->
	</section><!-- projects -->

	<div class="wrapper"><section class="contactBorder"></section><!-- contactBorder --></div><!-- wrappper -->
	
	<section class="contact" id="contact">
		<div class="container">
			<div class="contactLeft">
				<h2>Contact</h2>
				<?php echo do_shortcode('[contact-form-7 id="65" title="Contact Form"]'); ?>	
			</div>
			<div class="contactRight">
				<div class="triangleYellow"></div>
			</div>
			
		</div><!-- container -->
	</section><!-- contact -->
</main>

<?php get_footer(); ?>


			