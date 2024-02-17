<?php
get_header();

/**
 * Template Name: Services Page
 */
?>

<main>

    <!-- Breadcumb Start-->
    <?php get_template_part('template-parts/partials/content', 'breadcumb'); ?>
    <!-- Breadcumb End-->

    <!-- services Area Start-->
    <?php get_template_part('template-parts/partials/content', 'service'); ?>

    <!-- services Area End-->


    <!-- Recent Area Start -->
    <?php get_template_part('template-parts/partials/content', 'blog'); ?>
    <!-- Recent Area End-->

</main>
<?php
get_footer();
?>