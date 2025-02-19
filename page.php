<?php get_header(); ?>
<main>
    <section id="inner-hero" class="o-panel o-panel--inner-hero  u-margin-top-82">
        <div class="container">
            <div class="c-inner-hero">
                <h1 class="c-inner-hero__title"><?php the_title(); ?></h1>
            </div>
        </div>
    </section><!-- End Inner Hero -->

    <section id="inner-body" class="o-panel o-panel--inner-body">
        <div class="c-inner-body py-5">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </div>
    </section><!-- End Inner Body -->
</main>
<?php get_footer(); ?>