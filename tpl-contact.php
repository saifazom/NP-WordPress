<?php
/*
* Template Name: Contact Page Template
*/

 	get_header(); 
?>

<main>
    <section id="contact-hero" class="o-panel o-panel--contact-hero u-margin-top-82" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/img/nmap.jpg);">
        <div class="c-contact-hero">
            <div class="container">
                <h1 class="c-contact-hero__title"><?php the_title(); ?></h1>
            </div>
        </div>
    </section><!-- End contact Hero -->

    <section id="contact-form" class="o-panel o-panel--contact-form">
        <div class="c-contact-form">
            <div class="container">
                <?php echo do_shortcode('[gravityform id="1" title=false description=false ajax=true tabindex="70"]'); ?>
            </div>
        </div>
    </section><!-- End Inner Body -->
</main>

<?php get_footer(); ?>