<!-- hero front page -->

<section class="hero hero-container">
<?php 
    $groupName = get_field('header', 6);


?>
    <div class=hero-container_inner>
        <p class="subtitle"><?php echo $groupName['title_extend']; ?> </p>
      
        <h1 class="title font-mixed">
            <?php echo $groupName['title']; ?>
        </h1>

        <div><a class="btn" href="<?php echo esc_attr($groupName['btn_url']); ?>"> <?php echo $groupName['btn_name']; ?></a>
        </div>
    </div>


    <a class="btn-icon" href="#about-me">
        <svg class="icon icon-chevron">
            <use xlink:href="<?php echo svgPath(); ?>#chevron-down"></use>
        </svg>
</a>

</section>  