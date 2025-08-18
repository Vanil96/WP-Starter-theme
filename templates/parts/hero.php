<!-- hero front page -->

<section class="hero hero-container">
    <?php 
    $groupName = get_field('header', 6);


?>
    <div class="hero-container_inner">
        <h1 class="subtitle fadeInFromTop"><?php echo $groupName['title_extend']; ?> </h1>

        <h2 class="title font-mixed fadeInFromTop">
            <?php echo $groupName['title']; ?>
        </h2>

        <div class="popInText hidden"><a class="btn" href="<?php echo esc_attr($groupName['btn_url']); ?>">
                <?php echo $groupName['btn_name']; ?></a>
        </div>
    </div>


    <a class="btn-icon popInText" href="#about-me">
        <svg class="icon icon-chevron">
            <use xlink:href="<?php echo svgPath(); ?>#chevron-down"></use>
        </svg>
    </a>

</section>