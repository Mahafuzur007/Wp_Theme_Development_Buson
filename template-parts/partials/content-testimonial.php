<div class="testimonial-area fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9 col-md-9">
                <div class="h1-testimonial-active">
                    <?php
                    $args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => 6
                    );
                    $query = new WP_Query($args);
                    while ($query->have_posts()) {
                        $query->the_post();
                    ?>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial pt-65">
                            <!-- Testimonial tittle -->
                            <div class="testimonial-icon mb-45">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="ani-btn " alt="">
                            </div>
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption text-center">
                                <?php the_content(); ?>
                                <!-- Rattion -->
                                <div class="testimonial-ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="rattiong-caption">
                                    <span><?php the_title(); ?><span> - <?php echo get_field('company_name'); ?></span> </span>
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
    </div>
</div>