<header class="navbar navbar-static-top" role="banner">
	<p>by</p><img class="logo" src="<?php echo get_home_url() . "/wp-content/themes/pixelvinevideo/assets/img/logogray.png" ?>">
	<nav class="main-nav header_flex_child" role="navigation">
		<?php if (has_nav_menu('primary_navigation')) : wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav')); endif; ?>
	</nav>
	<aside><p>marketing redefined.</p></aside>
	<a target=_blank href="http://www.pixelvinecreative.com"></a>
</header>