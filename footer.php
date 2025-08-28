</main>

<a href="#recruit" class="c-floating">RECRUIT</a>
<footer class="l-footer">
    <div class="l-footer__inner">
        <div class="l-footer__contact">
            <a href="<?php echo esc_url(home_url('/contact')); ?>"
                class="c-footer-nav__link c-footer-nav__link--contact">CONTACT</a>
        </div>

        <nav class="l-footer__nav">
            <ul class="c-footer-nav">
                <li class="c-footer-nav__item">
                    <a href="<?php echo esc_url(home_url('/company')); ?>" class="c-footer-nav__link">COMPANY</a>
                </li>
                <li class="c-footer-nav__item">
                    <a href="<?php echo esc_url(home_url('/salon')); ?>" class="c-footer-nav__link">SALON</a>
                </li>
                <li class="c-footer-nav__item">
                    <a href="<?php echo esc_url(home_url('/recruit')); ?>" class="c-footer-nav__link">RECRUIT</a>
                </li>
                <li class="c-footer-nav__item">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="c-footer-nav__link">CONTACT</a>
                </li>

            </ul>
        </nav>

        <div class="l-footer__brand">
            <div class="c-footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg"
                    alt="<?php bloginfo('name'); ?>" class="c-logo-img"></div>
            <p class="c-footer-tagline">Your Beauty. Your Way. Always.</p>
            <p class="c-footer-tagline--jp">ずっと美しく、わたしらしく。</p>
        </div>

        <div class="l-footer__copyright">
            <p class="c-copyright">© 2023 sida Co., Ltd.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>