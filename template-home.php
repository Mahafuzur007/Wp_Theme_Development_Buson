<?php
get_header();

/**
 * Template Name: Home Page
 */
?>

<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <?php
            $args = array(
                "post_type" => "slider",
                "posts_per_page" => 3,
            );
            $query = new WP_Query($args);
            while ($query->have_posts()) {
                $query->the_post();

                $slider_subtitle = get_field('slider_subtitle');
                $slider_button_text = get_field('slider_button_text');
                $slider_button_url = get_field('slider_button_url');
            ?>
                <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 mx-auto">
                                <div class="hero__caption">
                                    <?php
                                    if ($slider_subtitle) {
                                    ?>
                                        <p><?php echo get_field('slider_subtitle'); ?></p>
                                    <?php
                                    }
                                    ?>
                                    <h1><?php the_title(); ?></h1>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn">
                                        <?php
                                        if ($slider_button_text) {
                                        ?>
                                            <a href="<?php echo get_field('slider_button_url'); ?>" class="btn hero-btn"><?php echo get_field('slider_button_text'); ?></a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- We Trusted Start-->

    <div class="we-trusted-area trusted-padding">
        <div class="container">
            <div class="row d-flex align-items-end">
                <div class="col-xl-7 col-lg-7">
                    <?php
                    $about_image = get_field("about_image", "option");
                    $about_title = get_field("about_title", "option");
                    $about_description = get_field("about_description", "option");
                    $about_button_url = get_field("about_button_url", "option");
                    $about_button_text = get_field("about_button_text", "option");
                    ?>
                    <div class="trusted-img">
                        <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['title']; ?>">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="trusted-caption">
                        <h2><?php echo $about_title; ?></h2>
                        <p><?php echo $about_description; ?></p>
                        <a href="<?php echo $about_button_url; ?>" class="btn trusted-btn"><?php echo $about_button_text; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- We Trusted End-->

    <!-- services Area Start-->
    <?php get_template_part('template-parts/partials/content', 'service'); ?>
    <!-- services Area End-->

    <!-- Request Back Start -->
    <div class="request-back-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <?php
                $args = array(
                    'post_type' => 'cta',
                    'posts_per_page' => 1,
                );
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();

                    $cta_button_text = get_field('cta_button_text');
                ?>
                    <div class="col-xl-8 mx-auto text-center">
                        <div class="request-content">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <?php
                            if ($cta_button_text) {
                            ?>
                                <a href="<?php echo get_field('cta_button_url'); ?>" class="btn trusted-btn"><?php echo get_field('cta_button_text'); ?></a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <!-- Request Back End -->

    <!-- Completed Cases Start -->
    <div class="completed-cases section-padding3">
        <div class="container">
            <div class="row">
                <!-- slider Heading -->
                <?php
                $args = array(
                    'post_type' => 'case',
                    'posts_per_page' => 6,
                );
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();
                ?>
                    <div class="col-xl-4 col-lg-4 col-md-8">
                        <div class="single-cases-info mb-30">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <a href="<?php echo get_field('case_button_url'); ?>" class="border-btn border-btn2"><?php echo get_field('case_button_text'); ?></a>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>
                <!-- OwL -->
                <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                    <div class=" completed-active owl-carousel">
                        <?php
                        $args = array(
                            'post_type' => 'case-card',
                            'posts_per_page' => 4,
                        );
                        $query = new WP_Query($args);
                        while ($query->have_posts()) {
                            // var_dump($query->the_post());
                            $query->the_post();
                        ?>
                            <div class="single-cases-img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <!-- img hover caption -->
                                <div class="single-cases-cap">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <?php the_excerpt(); ?>
                                    <span><?php echo get_field('tag'); ?></span>
                                </div>
                            </div>
                        <?php
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Completed Cases end -->

    <!-- Team-profile Start -->
    <div class="team-profile team-padding">
        <div class="container">
            <!-- section tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <h2> <?php echo esc_html__('Teams', 'buson'); ?> </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'team',
                    'post_per_page' => 4,
                );
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();
                ?>
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-profile mb-30">
                            <!-- Front -->
                            <div class="single-profile-front">
                                <div class="profile-img">
                                    <img src="<?php the_post_thumbnail_url(); ?> " alt="">
                                </div>
                                <div class="profile-caption">
                                    <h4><?php the_title(); ?> <span><?php the_content(); ?></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <!-- Team-profile End-->

    <!-- Testimonial Start -->
    <?php get_template_part('template-parts/partials/content', 'testimonial'); ?>
    <!-- Testimonial End -->

    <?php get_template_part('template-parts/partials/content', 'blog'); ?>
</main>
<?php
get_footer();
?>