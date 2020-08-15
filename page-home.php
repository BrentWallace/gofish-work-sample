<?php
$fields = get_fields();
$jumbotron = $fields['jumbotron'];
$clients_block = $fields['clients_block'];
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

</main>
<!-- #main -->

<?php
get_footer();
