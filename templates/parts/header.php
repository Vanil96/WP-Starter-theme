<header class="main-header">
<div class="page-logo"> 
<?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo(); }  ?> 
    </div> 
    <div class="main-header-nav-container">

<?php get_template_part('templates/parts/nav'); ?>
<nav class="social-menu">
<?php
 wp_nav_menu(
 array(
            'theme_location' => 'social_menu',
            'menu' => 'Top Navigation',
            'container' => 'ul',
            'menu_class' => 'social-nav',
        )
    );
?>
</nav>
<div>
<a class="btn" href=""> Napisz do mnie </a>    
</div>
</div>
<button type="button" id="mb-menu-toggler">  </button> 
</header>