
    <?php get_header(); ?>

    <div class="jumbotron" style="background-image: url(img/{{jumbotron_image}})">
      <div class="container" >
        <h1><?php the_title(); ?></h1>
        <p>{{jumbotron_p}}</p>
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
