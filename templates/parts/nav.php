<nav class="main-nav">
    <div class="page-logo"> 
<?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo(); }  ?> 
    </div>

<?php
 wp_nav_menu(
 array(
            'theme_location' => 'main_menu',
            'menu' => 'Top Navigation',
            'container' => 'ul',
            'menu_class' => 'main-nav',
            'menu_id' => 'main-nav'
        )
    );
?>
  </nav>