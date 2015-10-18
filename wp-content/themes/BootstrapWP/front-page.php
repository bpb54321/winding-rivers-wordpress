
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
          <div class="col-md-6">
            <h2 style="text-align: center;">Vision</h2>
              <p>
                We are a cooperative residential community embodying shared values of social justice, affordability, diversity, and ecological living.
              </p>
          </div>
          <div class="col-md-6">
            <h2 style="text-align: center;">Mission</h2>
            <p>
              Our mission is to foster lives of connection and well-being for 12-20 diverse households in the St. Louis metropolitan area through living in an ecologically sustainable way, sharing our time and resources with each other, and building strong, healthy relationships within our group and with the surrounding community.
            </p>
          </div>
        </div> 
      </div>
    </div>

    <?php get_footer(); ?>
