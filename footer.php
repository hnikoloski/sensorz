<footer id="colophon" class="site-footer">
    <div class="site-info">
        <?php
        $footerTitle = get_field('footer_title', 'option');
        $socialEmail = get_field('social_email', 'option');
        $socialTwitter = get_field('social_twitter', 'option');
        $socialInstagram = get_field('social_instagram', 'option');
        $socialYouTube = get_field('social_youtube', 'option');
        $socialFacebook = get_field('social_facebook', 'option');
        $socialLinkedin = get_field('social_linkedin', 'option');
        ?>
        <div class="col">
            <?php if ($footerTitle) : ?>
                <h2 class="footer-title fw-bolder"><?php echo $footerTitle; ?></h2>
            <?php endif; ?>
            <?php if ($socialEmail) : ?>
                <p><?php _e('Send us a message', 'sensorz'); ?></p>
                <!-- <a href="mailto:<?php echo $socialEmail; ?>"><?php echo $socialEmail; ?></a> -->

                <ul class="socials">
                    <?php if ($socialTwitter) : ?>
                        <li>
                            <a href="<?php echo $socialTwitter; ?>" target="_blank" title="<?php _e('Twitter', 'sensorz'); ?>">
                                <span class="screen-reader-text">
                                    <?php _e('Twitter', 'sensorz'); ?>
                                </span>
                                <i class="twitter"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($socialInstagram) : ?>
                        <li>
                            <a href="<?php echo $socialInstagram; ?>" target="_blank" title="<?php _e('Instagram', 'sensorz'); ?>">
                                <span class="screen-reader-text">
                                    <?php _e('Instagram', 'sensorz'); ?>
                                </span>
                                <i class="instagram"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($socialYouTube) : ?>
                        <li>
                            <a href="<?php echo $socialYouTube; ?>" target="_blank" title="<?php _e('YouTube', 'sensorz'); ?>">
                                <span class="screen-reader-text">
                                    <?php _e('YouTube', 'sensorz'); ?>
                                </span>
                                <i class="youtube"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($socialFacebook) : ?>
                        <li>
                            <a href="<?php echo $socialFacebook; ?>" target="_blank" title="<?php _e('Facebook', 'sensorz'); ?>">
                                <span class="screen-reader-text">
                                    <?php _e('Facebook', 'sensorz'); ?>
                                </span>
                                <i class="facebook"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($socialLinkedin) : ?>
                        <li>
                            <a href="<?php echo $socialLinkedin; ?>" target="_blank" title="<?php _e('LinkedIn', 'sensorz'); ?>">
                                <span class="screen-reader-text">
                                    <?php _e('LinkedIn', 'sensorz'); ?>
                                </span>
                                <i class="linkedin"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if ($socialEmail) : ?>
                        <li class="inline-icon">
                            <a href="mailto:<?php echo $socialEmail; ?>" target="_blank" title="<?php _e('Email', 'sensorz'); ?>" class="d-flex justify-content-center align-items-center">
                                <i class="email"></i> <span> <?php echo $socialEmail; ?></span>
                            </a>
                        </li>
                    <?php endif; ?>

                </ul>
        </div>
        <div class="form-wrapper">
            <?php
                $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
                $main_domain = $protocol . "://" . $_SERVER['HTTP_HOST'];
            ?>
            <form action="<?php echo $main_domain; ?>/wp-json/sensorz/v1/contact" class="send-contact-form">
                <div class="form-control">
                    <label for="name"><?php _e('Your Name', 'sensorz'); ?></label>
                    <input type="text" name="name" id="name" placeholder="<?php _e('Your Name', 'sensorz'); ?>" required>
                </div>
                <div class="form-control">
                    <label for="email"><?php _e('Email', 'sensorz'); ?></label>
                    <input type="email" name="email" id="email" placeholder="<?php _e('Email address', 'sensorz'); ?>" required>
                </div>
                <div class="form-control">
                    <label for="message"><?php _e('Message', 'sensorz'); ?></label>
                    <textarea name="message" id="message" placeholder="<?php _e('Tell us more', 'sensorz'); ?>" required></textarea>
                </div>
                <div class="form-control">
                    <button type="submit"><?php _e('Send', 'sensorz'); ?></button>
                </div>
                <div class="form-response">
                    <p></p>
                </div>
            </form>
        </div>
    <?php endif; ?>

    </div><!-- .site-info -->
    <div class="copy-bar">
        <p>
            © Copyright <span class="current-year"></span> Sensorz | All Rights Reserved
        </p>
        <?php
        $footerLogo = get_field('footer_logo', 'option');
        $siteTitle = get_bloginfo('name');
        ?>
        <?php if ($footerLogo) : ?>
            <div class="footer-logo">
                <img src="<?php echo $footerLogo; ?>" alt="<?php echo $siteTitle; ?>" />
            </div>
        <?php endif; ?>
    </div> <!-- .copy-bar -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>