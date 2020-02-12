<?php
/*
    Template Name: videos Page

 */

get_header(); ?>

<!--about section-->
    <section id="about">

        <section id="voce">
            <div class="dark-overlay">
                <div class="row">
                    <div class="col text-left text-white">
                        <div class="py-3 p-5 ml-5 mr-5">
                            <h1 class="display-4">Trabalhe conosco</h1>
                            <h5> Quer fazer parte da Nossa equipe e construir sua carreira com a gente?</h5>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <hr class="style1">
        <br>

        <!--about section-->
        <section id="about">
            <div class="container">
                <div class="row">
                                <?php
                                while (have_posts()) : the_post();

                                get_template_part('template-parts/page/content', 'page');
 
                // If comments are open or we have at least one comment, load up the comment template.
                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif;

                                endwhile; // End of the loop.
                                ?>

                </div>
            </div>

<?php get_footer(); ?>

