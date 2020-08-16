<?php
$fields = get_fields();
$jumbotron = $fields['jumbotron'];
$clients_block = $fields['clients_block'];
$services_block = $fields['services_block'];
get_header();
?>

<!-- main -->
<main id="primary" class="site-main">
  <!-- Jumbotron -->
  <section class="jumbotron jumbotron-fluid" id="home-hero" style="background-image:url('<?php echo $jumbotron['jumbotron_background']; ?>');">
    <div class="container-fluid">
      <div class="row py-4">
        <div class="col-6 bg-light my-4 p-4">
          <?php echo $jumbotron['jumbotron_content']; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- End Jubmotron -->

  <!-- Client Showcase -->
  <section class="container-fluid">
    <div class="row my-4">
      <div class="col-md-12 col-lg-2 py-4 text-center">
        <p class="font-weight-bold"><?php echo $clients_block['left_text'] ?></p>
      </div>
      <div class="col text-center">
        <?php echo $clients_block['logos']; ?>
      </div>
      <div class="col-md-12 col-lg-2 py-4 text-center">
        <p class="font-weight-bold"><?php echo $clients_block['right_text']; ?></p>
      </div>
    </div>
  </section>
  <!-- End Client Showcase -->

  <!-- Services Section -->
  <section>
    <div class="container">
      <div class="row my-4">
        <div class="col">
          <h2 class="display-4 text-center"><?php echo $services_block['services_header']; ?></h2>
          <?php echo $services_block['services_text']; ?>
        </div>
      </div>
    </div>
    <!-- Services Post Loop -->
    <div class="container-fluid">
      <div class="row">
        <?php
        $posts = get_posts(array(
          'post_type' => 'services',
          'posts_per_page' => '-1',
        ));
        if ($posts) :
          foreach ($posts as $post) :
            setup_postdata($post); ?>
            <div class="col-md-3 text-center p-4">
              <img src="<?php the_field('service_icon'); ?>" alt="<?php the_title(); ?>" class="img-fluid my-4">
              <p class="h4"><?php the_title(); ?></p>
              <p><?php the_content(); ?></p>
              <a href="<?php the_permalink(); ?>">Learn More &rarr;</a>
            </div>
        <?php endforeach;
          wp_reset_postdata();
        endif;
        ?>
        <div class="col-md-3 text-center p-4">
          <p class="h2 m-4 pt-4">See What Else We Can Do</p>
          <button class="btn btn-gofish-outline">More Services</button>
        </div>
      </div>
    </div>
    <!-- End Services Post Loop -->
  </section>
  <!-- End Services Section -->

</main>
<!-- #main -->

<?php
get_footer();
