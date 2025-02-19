<section id="contact-info" class="o-panel o-panel--contact-info">
    <div class="c-contact-info">
        <div class="container">
            <div class="row c-contact-info__row">
                <div class="col-sm-12 col-md-3 c-contact-info__col">
                    <a href="tel:<?php the_field('phone_number', 'options'); ?>" class="c-contact-info__box">
                    <div class="c-contact-info__link">
                        <span><i class="fa-solid fa-phone-volume"></i></span>
                        <div><?php the_field('phone_number', 'options'); ?></div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-4 c-contact-info__col">
                    <a href="mailto:<?php the_field('email_address', 'options'); ?>" class="c-contact-info__box">
                    <div class="c-contact-info__link">
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <div><?php the_field('email_address', 'options'); ?></div>
                    </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-5 c-contact-info__col">
                    <a href="<?php the_field('map_link', 'options'); ?>" target="_blank" class="c-contact-info__box">
                    <div class="c-contact-info__link">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <div><?php the_field('address', 'options'); ?></div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->