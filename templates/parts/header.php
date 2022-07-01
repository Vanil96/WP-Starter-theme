<header class="main-header">
<div>  <?php if (function_exists('get_field')) : if (get_field('tel_nr', 'options')) : ?> 
         <a class="telnr" href="tel:+48<?php the_field('tel_nr', 'options')?>">
         <i class="icon-phone-1"></i> <?php the_field('tel_nr', 'options')?> </a>  
          <?php endif;  endif;?>  </div> 


<?php get_template_part('templates/parts/nav'); ?>

<?php //echo get_contact(); ?>

</header>