<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<!-- TITLE -->
        <h2><?php the_title(); ?></h2>

<!-- CLIENT NAME -->
        <p class="client"><?php the_field('client_name'); ?></p>

<!-- SHORT DESCRIPTION -->
        <div class="shortDescription">
          <p><?php the_field('short_description'); ?></p>
        </div>

<!-- DESCRIPTION -->
        <p class="description"><?php the_content(); ?></p>

<!-- IMAGE -->
        <div class="images">
          <?php while( has_sub_field('images') ): ?>

            <div class="image">
              <p><?php the_sub_field('caption'); ?></p>

              <? $image = get_sub_field('image'); ?>
              
              <!-- <pre><?php //print_r($image);?></pre> -->
              <!-- <img src="<?php //echo $image['sizes']['thumbnail'] ?>"> -->
              <img src="<?php echo $image['sizes']['medium'] ?>">
              <!-- <img src="<?php //echo $image['sizes']['large'] ?>"> -->
              <!-- <img src="<?php //echo $image['sizes']['post-thumbnail'] ?>"> -->
              <!-- <img src="<?php //echo $image['sizes']['square'] ?>"> -->

            </div>

          <?php endwhile; ?>
        </div>

      <?php endwhile; // end of the loop. ?>
    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>