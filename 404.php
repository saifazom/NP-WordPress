<?php
/**********************************************************************
* The Prolancer Wordpress Theme   
* 
* File name:  404.php
* Brief:      404 Page
* Author:     The Prolancer
* Author URI: http://theprolancer.com
* Contact:    info@theprolancer.com
***********************************************************************/  
?>

<?php get_header(); ?>

<div id="404" class="o-panel o-panel--404 u-margin-top-82">
    <div class="c-404">
        <div class="container">
            <div class="c-404__text">
                <h1 class="c-404__title">4<i class="fa-regular fa-face-frown"></i>4</h1>
                <h2 class="c-404__sub-title">Oops! Something went wrong.</h2>

                <p>Sorry, we can’t find the page you’re looking for. </p>

                <a class="u-button" href="<?php bloginfo('url'); ?>"><i class="fa-solid fa-angles-left"></i> Back Home</a>
            </div>
        </div>
    </div>
</div><!-- End 404 Panel -->

<?php get_footer(); ?>
