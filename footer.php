      <?php include('inc/contact-info.php'); ?>
      
      <footer id="footer" class="o-panel o-panel--footer">
         <div class="c-footer">
            <div class="container">
               <div class="row c-footer__row">
                  <div class="col-xs-12 col-sm-auto">
                     <div class="c-footer__social">
                        <?php if(get_field('facebook_link', 'options')){ ?>
                        <a href="<?php the_field('facebook_link', 'options'); ?>" target="_blank">
                           <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <?php } ?>
                        <?php if(get_field('instagram_link', 'options')){ ?>
                        <a href="<?php the_field('instagram_link', 'options'); ?>" target="_blank">
                           <i class="fa-brands fa-instagram"></i>
                        </a>
                        <?php } ?>
                        <?php if(get_field('linkedin_link', 'options')){ ?>
                        <a href="<?php the_field('linkedin_link', 'options'); ?>" target="_blank">
                           <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <?php } ?>
                        <?php if(get_field('youtube_link', 'options')){ ?>
                        <a href="<?php the_field('youtube_link', 'options'); ?>" target="_blank">
                           <i class="fa-brands fa-youtube"></i>
                        </a>
                        <?php } ?>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-auto">
                     <div class="c-footer__copyright">
                        © <?php echo date('Y'); ?> <?php the_field('copyright_text', 'options'); ?> <span>Website by <a href="https://theprolancer.com" target="_blank">The Prolancer</a></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer><!-- End Footer Section -->

      <?php wp_footer(); ?>
   </body>
</html>