<nav class="main-nav">
    <div class="container main-nav_inner">
    <div class="page-logo"> 
<?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo(); }  ?> 
    </div>

<?php
 wp_nav_menu(
 array(
            'theme_location' => 'primary_menu',
            'menu' => 'Top Navigation',
            'container' => 'ul',
            'menu_class' => 'primary-nav',
            'menu_id' => 'primary-nav'
        )
    );
?>
</div>
  </nav>
  