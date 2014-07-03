<footer class="content-info" role="contentinfo">
  <div class="footerCallToAction">
  	<div class="container ctaText">

	  	<h2>A great community awaits.</h2>
      <h3><a>Join</a></h3>
	 </div>
  </div>
  <div class="mainFooter">
  	<div class="container">
  		<a class="footerLogo tk-sarina" href="join"><img src="<?php echo get_template_directory_uri();; ?>/assets/img/logoespacio.png"></a>

	    <nav class="collapse navbar-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
	</div>
  </div>
</footer>

<?php wp_footer(); ?>
