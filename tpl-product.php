<?php
/*
* Template Name: Product Page Template
*/

 	get_header();
?>

<main>
    <section id="product-hero" class="o-panel o-panel--product-hero u-margin-top-82" style="background-image: url(<?php echo get_field('banner_image') ? the_field('banner_image') : get_template_directory_uri() . '/assets/img/img1.jpg'; ?>);">
        <div class="c-product-hero">
            <div class="container">
                <h1 class="c-product-hero__title"><?php the_title(); ?></h1>
            </div>
        </div>
    </section><!-- End Inner Hero -->

    <section id="product-highlights" class="o-panel o-panel--product-highlights">
      <div class="c-product-highlights">
         <div class="container">
            <div class="row">
               <?php
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => -1,  
                        // 'tax_query'      => array(
                        //     array(
                        //         'taxonomy' => 'product-category', 
                        //         'field'    => 'slug', 
                        //         'terms'    => $cat_slug
                        //     )
                        // )
                    );
                    
                    $loop = new WP_Query($args);

                    // print_r($loop);
                ?>
                <?php if ($loop->have_posts()) : ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        <div class="col-xs-12 col-sm-6 col-lg-4">
                            <a class="c-product-highlights__box" href="<?php the_permalink(); ?>">
                                <div class="c-product-highlights__img" style="background-image: url(<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/img/img1.jpg'; ?>);">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img1.jpg" alt="Img1">
                                    <h3 class="c-product-highlights__title c-product-highlights__inner-title"> <?php the_title(); ?></h3>
                                </div>
                                <div class="c-product-highlights__text">
                                    <h3 class="c-product-highlights__title c-product-highlights__ovarlay-title"><?php the_title(); ?></h3>
                                    <?php the_excerpt(); ?>

                                    <span class="c-product-highlights__more">Read More <i class="fa-solid fa-angles-right"></i></span>
                                </div>
                            </a>
                        </div>
                        <?php endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No products found!</p>';
                endif; ?>
            </div>
         </div>
      </div>
   </section><!-- End Product Section -->
</main>

<?php get_footer(); ?>