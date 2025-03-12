<section id="navbar">
<header class="main-header">
    <div class="page-logo">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo(); }  ?>

        <div class="caption">
            <a href=""> <span class="large">
                    Patrycja <br> Kościelniak
                </span> <br>
                <span class="small"> psycholog </span>
            </a>
        </div>


    </div>
    <div class="main-header-nav-container">

        <?php get_template_part('templates/parts/nav'); ?>

        <div class="social-wrapper links-line-hover">
            <div class="row social-icons gap-3 m-0">
                <div><a href="">
                        <svg class="icon icon-chevron">
                            <use xlink:href="<?php echo svgPath(); ?>#instagram"></use>
                        </svg>
                    </a></div>
                <div><a href="">
                        <svg class="icon icon-chevron">
                            <use xlink:href="<?php echo svgPath(); ?>#linkedin"></use>
                        </svg>
                    </a></div>
            </div>
        </div>
    </div>
    <button type="button" id="mb-menu-toggler"> </button>
</header>
</section>