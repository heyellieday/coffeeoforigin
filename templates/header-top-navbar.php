<header class="banner navbar" ng-app="app" role="banner">
  <?php if( is_front_page() ) { ?>
  <div class="headerHome">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand tk-sarina" href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri();; ?>/assets/img/logoespacio.png"></a>
      </div>

      <nav class="pull-right collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
    <div class="row">
      <div class="container">
        <div class="col-sm-12">
          <div class="welcomeText" ng-controller="PageCtrl">
            <p>click</p>
            <h1>{{page.title}}</h1>
            <div ng-bind-html="page.content"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="headerHomeOverlay">
  </div>
  <div class="headerHomeBackground">
  </div>
   <?php } else { ?>
   <div class="headerNonHome">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand tk-sarina" href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoespacio.png"></a>
      </div>

      <nav class="pull-right collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
    </div>

  </div>
    <?php } ?>
</header>
