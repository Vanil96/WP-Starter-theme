<?php
/**
 * Template Name: Price list template
 */
defined( 'ABSPATH' ) || exit;
get_header(); 
?>


<section class="wrapper" id="page-wrapper">
    <div class="wrapper_inner" id="content" tabindex="-1">

        <?php get_template_part('templates/parts/left-sidebar'); ?>

        <main class="site-main" role="main">
            <section class="main_inner">

                <section class="page-header container container-w">
                    <h1 class="subtitle">Cennik</h1>
                    <h2 class="page-title"> <?php echo the_field('page-title');?>
                    </h2>

                </section>


                <section class="container section-padding container-sm pt-0">

                    <?php
                    if (have_rows('price-list')): ?>
                    <div class="price-list_container table-container">
                        <table id="offer-list" class="custom-table">
                            <tr>
                                <th>Usługa</th>
                                <th>Cennik</th>
                                <th>Czas trwania</th>

                            </tr>
                            <?php while (have_rows('price-list')): the_row(); 
                    $visible = get_sub_field('visible');
                    if ($visible): ?>

                            <tr>
                                <td>
                                    <h3 class="text-sm lg:text-md"><?php the_sub_field('name'); ?></h3>
                                </td>
                                <td><?php the_sub_field('price'); ?></td>
                                <td><?php the_sub_field('time'); ?></td>
                            </tr>

                            <?php endif; endwhile; ?>

                        </table>
                    </div>
                    <?php endif; ?>
                </section>


                <section class="container section-padding container-sm mb-10 pt-0 text-center">
                    <p class="text-md mb-4" style="max-width:840px; margin:auto;">Jeśli masz pytania dotyczące powyższego cennika lub chcesz umówić się na wizytę w moim gabinecie
                        psychologicznym w Rzeszowie – zapraszam do kontaktu. Chętnie odpowiem i pomogę dobrać odpowiednią
                        formę wsparcia.</p>

                    <a class="btn" href="/kontakt">Przejdź do kontaktu</a>
                </section>

            </section> <!-- /main_inner -->
        </main>

        <?php get_template_part('templates/parts/right-sidebar'); ?>

    </div> <!-- /wrapper_inner -->
</section> <!-- /wrapper -->

<?php get_footer(); ?>