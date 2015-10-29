
    <?php get_header(); ?>

    <?php $image_string = get_template_directory_uri() . '/img/index_jumbotron.jpg'; ?> 

    <div class="jumbotron" style="background-image: url(' <?php echo $image_string; ?> ');">
      <div class="container" >

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; endif; ?>

      </div>
    </div>

    <div class="supporting-content">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <?php if ( is_active_sidebar('front-page-left') ) {
                dynamic_sidebar('front-page-left');
              }
            ?>
          </div>
          <div class="col-md-4">
            <?php if ( is_active_sidebar('front-page-middle') ) {
                dynamic_sidebar('front-page-middle');
              }
            ?>
          </div>
          <div class="col-md-4">
            <?php if ( is_active_sidebar('front-page-right') ) {
                dynamic_sidebar('front-page-right');
              }
            ?>
          </div>
        </div> 
      </div>
    </div>

    <?php get_footer(); ?>
