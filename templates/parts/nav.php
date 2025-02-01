<nav class="main-nav">
    <div class="main-nav_inner">

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
  