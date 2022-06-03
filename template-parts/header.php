<header class="main-header">
<div>  <?php if (get_field('tel_nr', 'options')) : ?> 
         <a class="telnr" href="tel:+48<?php the_field('tel_nr', 'options')?>">
         <i class="icon-phone-1"></i> <?php the_field('tel_nr', 'options')?> </a>  
          <?php endif; ?>  </div> 


<?php get_template_part('template-parts/nav'); ?>


</header>