<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

global $post;

?>
	<?php if(have_posts()): ?>
	<main>
		<section id="single-hero" class="o-panel o-panel--single-hero u-margin-top-82" style="background-image: url(<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/img/img1.jpg'; ?>);">
			<div class="c-single-hero">
				<div class="container">
					<div class="c-single-hero__text">
						<a class="c-single-hero__backLink" href="<?php bloginfo('url'); ?>/product"><i class="fa-solid fa-circle-chevron-left"></i> Product</a>

						<h1 class="c-single-hero__title"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</section><!-- End Inner Hero -->

		<section id="inner-content" class="o-panel o-panel--inner-content">
			<div class="c-inner-content">
				<div class="container">
					<div class="c-inner-content__text">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php endif; ?>
<?php get_footer(); ?>


