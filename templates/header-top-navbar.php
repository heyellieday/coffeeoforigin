<header ng-controller="PageCtrl" class="banner navbar" role="banner">
  <div class="headerHome">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand tk-sarina" href="<?php echo home_url(); ?>/"><img class="headerLogo" src="<?php echo get_template_directory_uri();; ?>/assets/img/logo-coo.png"> <span class="brandText">Coffee of Origin</span></a>
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
        </div>
      </div>
    </div>
  </div>
  <div class="headerHomeOverlay">
  </div>
  <div class="headerHomeBackground" style="background-image: url(<?php echo get_template_directory_uri();; ?>/assets/img/{{currentPage}}.jpg)">
  </div>
<div id="slideout">
    <div class="openSlideout slideopen_in"><div class="openContent">{{page.title}}</div></div>
    <div id="slideout_inner" class="slideout_in">
        <div class="content">
              <h1>{{page.title}}</h1>
              <div ng-bind-html="page.content"></div>
        </div>
    </div>
    <div class="bestCoffee slideout_in">
    <h4 class="bestCoffeeText">Is this the best coffee you've ever tasted?</h4>
    <h4><a href="shop">Find out</a></h4>
    </div>
</div>
</header>
