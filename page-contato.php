<?php
/*
    Template Name: contato Page

 */

?>

<?php wp_footer(); ?>

<?php if (has_post_thumbnail()) { ?>


<?php 
} else { ?>


<?php 
} ?>



                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; //end of the loop ?>
                