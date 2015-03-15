<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img class="logo" src="<?php echo base_url(); ?>assets/img/logo.png">
              </a>
            </div>
            <div class="navbar-collapse collapse pull-right">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url(); ?>home/about"><?php echo lang("sobre"); ?></a></li>
                <li><a href="<?php echo base_url(); ?>franquias"><?php echo lang("franquias"); ?></a></li>
                <li><a href="<?php echo base_url(); ?>noticias"><?php echo lang("noticias"); ?></a></li>
                <li><a href="<?php echo base_url(); ?>home/contato"><?php echo lang("contato"); ?></a></li>
                
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Language switch -->

    <div class="language">
            <li class="dropdown">
                  <a href="#" class="btn dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url(); ?>assets/img/pt-br.png"><?php echo lang("select_language"); ?><span class="caret"></span></a>
                  <ul class="dropdown-menu lang-switch" role="menu">
                    <li><a href="#"><img src="<?php echo base_url(); ?>assets/img/en-uk.png"><?php echo lang("change_language"); ?></a></li>
                  </ul>
                </li>
            </div>