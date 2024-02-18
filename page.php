<?php get_header();
?>

<!-- Breadcumb Start-->
<?php get_template_part('template-parts/partials/content', 'breadcumb'); ?>
<!-- Breadcumb End-->

<section class="custom-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h4><?php the_title(); ?></h4>
                <?php the_content() ?>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <?php if (is_active_sidebar('main_sidebar')) {
                        dynamic_sidebar('main_sidebar');
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>