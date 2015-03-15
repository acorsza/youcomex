<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php echo base_url(); ?>assets/img/miami.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h2><?php echo lang("banner1_title"); ?></h2>
              <p><?php echo lang("banner_caption"); ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>assets/img/nyc.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h2><?php echo lang("banner2_title"); ?></h2>
              <p><?php echo lang("banner_caption"); ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>assets/img/dubai.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h2><?php echo lang("banner3_title"); ?></h2>
              <p><?php echo lang("banner_caption"); ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>assets/img/mall.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h2><?php echo lang("banner4_title"); ?></h2>
              <p><?php echo lang("banner_caption"); ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>assets/img/shanghai.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h2><?php echo lang("banner5_title"); ?></h2>
              <p><?php echo lang("banner_caption"); ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php echo base_url(); ?>assets/img/sp.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h2><?php echo lang("banner6_title"); ?></h2>
              <p><?php echo lang("banner_caption"); ?></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row rowhome">
        <div class="col-lg-4 box">
          <img src="<?php echo base_url(); ?>assets/img/logo_g.png">
          <h2><?php echo lang("box1_title"); ?></h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 box">
          <img src="<?php echo base_url(); ?>assets/img/logo_g.png">
          <h2><?php echo lang("box2_title"); ?></h2>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 box">
          <img src="<?php echo base_url(); ?>assets/img/logo_g.png">
          <h2><?php echo lang("box3_title"); ?></h2>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
      <div class="row featurette">
        <div class="col-md-7 justify">
          <h2 class="featurette-heading"><?php echo lang("home_about_title_a"); ?><br /><span class="text-muted"><?php echo lang("home_about_title_b"); ?></span></h2>
          <blockquote><p class="lead"><?php echo lang("home_about_text"); ?></p></blockquote>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="<?php echo base_url(); ?>assets/img/about.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">