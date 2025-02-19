<?php
/**********************************************************************
* The Prolancer Wordpress Theme
*
* File name:
*      index.php
* Brief:
*      Default file for all pages if appropriate template doesn't found.
* Author:
*      The Prolancer
* Author URI:
*      http://theprolancer.com
* Contact:
*      info@theprolancer.com
***********************************************************************/
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <?php
        # Enable the code below if you want to output conditional
        # class for IE 6 - IE 8
        # echo r1()->printHtmlIeConditionals(); data-scrollbar
    ?>

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>
      <?php //wp_title('|', true, 'right'); ?>
      <?php bloginfo('name'); ?> <?php wp_title('|', true, 'left'); ?>
</title>

   <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script>
   <![endif]-->

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <div class="d-sm-block d-md-none">
      <div id="s-primary-menu" class="s-primary-menu">
         <?php
            $defaults = array(
            'theme_location'  => 'primary_nav',
            'menu'            => '',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
            );

            wp_nav_menu( $defaults );
         ?>
      </div>
   </div>

   <header id="header" class="o-panel o-panel--heaher">
      <div class="c-header">
         <div class="container c-header__container">
            <div class="row justify-content-between align-items-center c-header__row">
               <div class="col-auto">
                  <a class="c-header__logo" href="<?php bloginfo('url'); ?>">
                     <img src="<?php the_field('site_logo', 'options') ?>" alt="Site Logo">
                  </a>
               </div><!--/ Logo -->

               <div class="s-primary-menu__col col-auto text-end">
                  <button class="s-primary-menu-btn d-sm-inline-block d-md-none" type="button">
                     <span class="s-primary-menu-btn__bar1"></span>
                     <span class="s-primary-menu-btn__bar2"></span>
                     <span class="s-primary-menu-btn__bar3"></span>
                  </button>
                  
                  <div class="s-primary-menu d-sm-none d-md-block">
                     <?php
                        $defaults = array(
                        'theme_location'  => 'primary_nav',
                        'menu'            => '',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => '',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                        );

                        wp_nav_menu( $defaults );
                     ?>
                  </div>
               </div><!--/ Main Menu -->
            </div>
         </div>
      </div>
   </header><!-- End Header Section -->