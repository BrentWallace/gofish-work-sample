<?php
$fields = get_fields();
$jumbotron = $fields['jumbotron'];
$clients_block = $fields['clients_block'];
$services_block = $fields['services_block'];
$awards_block = $fields['awards_block'];
$about_us_block = $fields['about_us_block'];
$contact_us_block = $fields['contact_us_block'];
get_header();
?>

<!-- main -->
<main id="primary" class="site-main">
  <!-- Jumbotron -->
  <section class="jumbotron jumbotron-fluid" id="home-hero" style="background-image:url('<?php echo $jumbotron['jumbotron_background']; ?>');">
    <div class="container-fluid">
      <div class="row py-4">
        <div class="d-none d-md-block col-6 bg-light my-4 p-4">
          <?php echo $jumbotron['jumbotron_content']; ?>
        </div>
        <div class="d-block d-md-none col bg-light my-4 p-4">
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
        if ($services_block['services']) :
          foreach ($services_block['services'] as $post) :
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

  <!-- Awards Section -->
  <section class="container">
    <div class="row py-4">
      <div class="col text-center">
        <p class="display-4"><?php echo $awards_block['awards_header']; ?></p>
        <?php echo $awards_block['awards_content']; ?>
      </div>
    </div>
    <div class="row py-4">
      <?php
      if ($awards_block['awards']) :
        foreach ($awards_block['awards'] as $post) :
          setup_postdata($post); ?>
          <div class="col-lg-3 col-md-6 col-sm-12 text-center">
            <img src="<?php the_field('award_icon'); ?>" alt="<?php the_title(); ?>" class="img-fluid my-4">
            <p class="h4 h4-serif mx-4"><?php the_title(); ?></p>
            <p class="text-gofish"><?php the_content(); ?></p>
          </div>
      <?php endforeach;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </section>
  <!-- End Awards Section -->

  <!-- About Us Section -->
  <section class="container-fluid" style="background-color:#e8f0f8;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12">
          <div class="p-4">
            <?php echo $about_us_block['about_us_content']; ?>
          </div>
          <img src="<?php echo $about_us_block['left_image']; ?>" alt="Image 1" class="img-fluid w-100 py-3">
        </div>
        <div class="col-lg-4 col-md-12">
          <img src="<?php echo $about_us_block['center_image']; ?>" alt="Image 2" class="img-fluid w-100 h-100 py-3">
        </div>
        <div class="col-lg-3 col-md-12">
          <img src="<?php echo $about_us_block['upper_right_image']; ?>" alt="" class="img-fluid w-100 h-50 py-3">
          <img src="<?php echo $about_us_block['lower_right_image']; ?>" alt="" class="img-fluid w-100 h-50 py-3">
        </div>
      </div>
    </div>
  </section>
  <!-- End About Us Section -->

  <!-- Contact Section -->
  <section class="container">
    <div class="row py-4">
      <div class="col-md-6">
        <?php echo $contact_us_block['contact_us_content']; ?>
      </div>
      <div class="col-md-6">
        <?php echo do_shortcode('[contact-form-7 id="86" title="Contact form 1"]'); ?>
      </div>
    </div>
    <hr />
  </section>
  <!-- End Contact Section -->

</main>
<!-- #main -->

<?php
get_footer();
