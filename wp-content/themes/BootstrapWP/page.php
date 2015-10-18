<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="container">

    <div class="page-header">
      <h1><?php the_title(); ?></h1>
    </div>
      
    <?php the_content(); ?>

  <?php endwhile; else: ?>

    <div class="page-header">
      <h1>Oh no!</h1>
    </div>

    <p> Sorry, the page you are looking for could not be found! </p>

  <?php endif; ?>

</div>
    

<?php get_footer(); ?>