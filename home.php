<?php get_header(); ?>

<?php get_template_part('template-part', 'topnav'); ?>

  <div class="jumbotron ala-header hidden-print" id="ala-jumbotron">
    <div class="container">
      <div class="col-lg-6 col-md-8 col-sm-12 promotional">The <strong>Atlas of Living Australia</strong> is a collaborative, national project that aggregates biodiversity data from multiple sources and makes it freely available and usable online</div>
    </div>
  </div>
<?php // theloop - but only for the alert
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    if( get_post_meta($post->ID, 'ALACustomAlertMessage', true) ) { ?>
    <!-- Promotional alert -->
  <div class="alert alert-promotional alert-dismissible" role="alert">
    <div class="container">
      <div class="row-fluid">
        <div class="col-md-12">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close" title="Close"><span aria-hidden="true">&times;</span></button>
          <p><?php echo get_post_meta($post->ID, 'ALACustomAlertMessage', true); ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- End promotional alert -->
<?php } ?>
<?php endwhile; ?>
<?php endif; ?>

  <!-- Container -->
  <div class="container" id="main">

    <div class="col-md-8 col-md-offset-2 hidden">
      <h1 class="heading-large margin-bottom-quarter-1">Atlas of Living Australia</h1>
      <h2 class="promotional">
        The Atlas of Living Australia is a collaborative, national project that aggregates biodiversity data from multiple sources and makes it freely available and usable online
      </h2>
    </div>

    <!-- Main stats -->
    <div class="col-md-12">
      <div class="main-stats row">
        <div class="main-stats col-lg-3 col-md-3 col-sm-6">
          <h4>Occurrence Records</h4>
          <div class="stat-number" id="allRecords">
            68,000,000
          </div>
        </div>

        <div class="main-stats col-lg-3 col-md-3 col-sm-6">
          <h4>Species</h4>
          <div class="stat-number" id="allSpecies">
            472,000
          </div>
        </div>

        <div class="main-stats col-lg-3 col-md-3 col-sm-6">
          <h4>Data downloads</h4>
          <div class="stat-number" id="allDownloads">
            914,000
          </div>
        </div>

        <div class="main-stats col-lg-3 col-md-3 col-sm-6">
          <h4>Registered users</h4>
          <div class="stat-number" id="allUsers">
            34,000
          </div>
        </div>
      </div><!-- End main stats -->
    </div>


    <!-- Main col -->
    <div class="col-md-12">
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="panel panel-default">
          <a href="https://lists.ala.org.au/iconic-species"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/homepage-channel-image-koala.jpg"></a>
          <div class="panel-body">
            <h3><a href="https://lists.ala.org.au/iconic-species">Australian species</a></h3>
            <p class="help-block">
              Search for Australian flora and fauna species by common, scientific name or search by category.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="panel panel-default">
          <a href="http://regions.ala.org.au/"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/homepage-channel-image-lionfish.jpg"></a>
          <div class="panel-body">
            <h3><a href="http://regions.ala.org.au/">Species by location</a></h3>
            <p class="help-block">
              Use the Atlas of Living Australia to browse species by pre-defined region or by location to find species nearby.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="panel panel-default">
          <a href="https://biocache.ala.org.au/search"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/homepage-channel-image-rainbow-lorikeet.jpg"></a>
          <div class="panel-body">
            <h3><a href="https://biocache.ala.org.au/search">Occurrence records</a></h3>
            <p class="help-block">
              Use the Atlas to Explore species occurrence records using the Spatial Portal or Search Records for species occurrences.
            </p>
          </div>
        </div>
      </div>
      <!-- End Col -->
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="panel panel-default">
          <a href="/get-involved/"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ala-info-hub-get-involved-icon.jpg"></a>
          <div class="panel-body">
            <h3><a href="/get-involved/">Contribute to the ALA</a></h3>
            <p class="help-block">
              Learn about the ALA and discover the many different ways in which we can help you achieve your goals.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="panel panel-default">
          <a href="/blogs-news/">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ala-info-hub-how-you-can-icon.jpg">
          </a>
          <div class="panel-body">
            <h3><a href="/blogs-news/">Browse ALA news</a></h3>
            <p class="help-block">
              Learn about the ALA and discover the many different ways in which we can help you achieve your goals.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="panel panel-default">
          <a href="/atlas-information-hub/">
            <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ala-info-hub-education-icon.jpg">
          </a>
          <div class="panel-body">
            <h3><a href="/atlas-information-hub/">ALA knowledge base</a></h3>
            <p class="help-block">
              Did you see something? Photograph something? Contribute your sighting to the Atlas of Living Australia. Log your sighting at our Record a Sighting page.
            </p>
          </div>
        </div>
      </div>
      <!-- End Col -->
    </div><!-- End main col -->

  </div><!-- end content container -->

<?php get_footer(); ?>
