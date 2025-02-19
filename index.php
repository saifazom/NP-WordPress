<?php get_header(); 
   $homepage_id = 79;
?>

<main>
   <section id="hero" class="o-panel o-panel--hero u-margin-top-82">
      <div class="c-hero">
         <div class="container">
            <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
         </div>
      </div>
   </section><!-- End Hero/Slider Section -->

   <section id="product-highlights" class="o-panel o-panel--product-highlights">
      <div class="c-product-highlights">
         <div class="container">
            <div class="u-header text-center">
               <h2 class="c-product-highlights__heading u-heading"><?php the_field('ph_heading', $homepage_id); ?></h2>
            </div><!--/ PH Header -->

            <?php if( have_rows('product_highlights', $homepage_id) ): ?>
               <div class="row">
                  <?php while( have_rows('product_highlights', $homepage_id) ) : the_row(); 
                  
                     $hl_products = get_sub_field('select_product', $homepage_id);
                  ?>
                     <?php if( $hl_products ): ?>
                     <div class="col-xs-12 col-sm-6 col-lg-4">
                        <a class="c-product-highlights__box" href="<?php the_permalink($hl_products->ID); ?>">
                           <div class="c-product-highlights__img" style="background-image: url(<?php echo has_post_thumbnail($hl_products->ID) ? get_the_post_thumbnail_url($hl_products->ID) : get_template_directory_uri() . '/assets/img/img1.jpg'; ?>);">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img1.jpg" alt="Img1">
                              <h3 class="c-product-highlights__title c-product-highlights__inner-title"> <?php echo get_the_title($hl_products->ID); ?></h3>
                           </div>
                           <div class="c-product-highlights__text">
                              <h3 class="c-product-highlights__title c-product-highlights__ovarlay-title"><?php echo get_the_title($hl_products->ID); ?></h3>
                              <?php the_excerpt($hl_products->ID); ?>

                              <span class="c-product-highlights__more">Read More <i class="fa-solid fa-angles-right"></i></span>
                           </div>
                        </a>
                     </div>
                     <?php endif; ?>
                  <?php endwhile; ?>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </section><!-- End Product Highlights Section -->

   <section id="sp-brands" class="o-panel o-panel--sp-brands">
      <div class="c-sp-brands">
         <div class="container">
            <div class="u-header text-center">
               <h2 class="c-sp-brands__heading u-heading u-heading--black"><?php the_field('spb_heading', $homepage_id); ?></h2>
            </div><!--/SP Heade -->

            <?php if( have_rows('sp_brands', $homepage_id) ): ?>
               <div class="c-sp-brands__row">
                  <?php while( have_rows('sp_brands', $homepage_id) ) : the_row(); ?>
                     <div class="c-sp-brands__logo">
                        <div class="c-sp-brands__img">
                           <img src="<?php the_sub_field('spb_logo', $homepage_id); ?>" alt="">
                        </div>
                        <h3 class="c-sp-brands__title"><?php the_sub_field('spb_title'); ?></h3>
                        <p><?php the_sub_field('spb_text', $homepage_id); ?></p>
                     </div>
                  <?php endwhile; ?>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </section><!-- End SP Brands -->

   <section id="ww-company" class="o-panel o-panel--ww-company">
      <div class="c-ww-company">
         <div class="container">
            <div class="u-header text-center">
               <h2 class="c-ww-company__heading u-heading"><?php the_field('wc_heading', $homepage_id); ?></h2>
            </div><!--/ WWC Header -->

            <?php if( have_rows('company_logo', $homepage_id) ): ?>
               <div class="c-ww-company__row">
                  <?php while( have_rows('company_logo', $homepage_id) ) : the_row(); ?>
                     <div class="c-ww-company__logo">
                        <div class="c-ww-company__img">
                           <img src="<?php the_sub_field('wc_logo', $homepage_id); ?>" alt="">
                        </div>
                     </div>
                  <?php endwhile; ?>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </section><!-- End WW Company Section -->

   <section id="service" class="o-panel o-panel--service">
      <div class="c-service">
         <div class="container">
            <div class="u-header text-center">
               <h2 class="c-service__heading u-heading"><?php the_field('swp_heading', $homepage_id); ?></h2>
            </div><!--/SP Heade Section -->

            <div class="c-service__headText text-center">
               <p><?php the_field('swp_description', $homepage_id); ?></p>
            </div>

            <?php if( have_rows('services', $homepage_id) ): ?>
               <div class="row c-service__row">
                  <?php while( have_rows('services', $homepage_id) ) : the_row(); ?>
                     <div class="col-xs-12 col-sm-6 col-lg-4">
                        <div class="c-service__box">
                           <div class="c-service__img">
                              <img src="<?php the_sub_field('service_image', $homepage_id); ?>" alt="">
                           </div>
                           <h3 class="c-service__title"><?php the_sub_field('service_title', $homepage_id); ?></h3>
                           <p><?php the_sub_field('service_text', $homepage_id); ?></p>
                        </div>
                     </div>
                  <?php endwhile; ?>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </section><!-- End Services Section -->

<?php get_footer(); ?>