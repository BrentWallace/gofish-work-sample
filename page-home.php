<?php
$fields = get_fields();
$jumbotron = $fields['jumbotron'];
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
  </main>
<!-- #main -->

<?php
get_footer();
