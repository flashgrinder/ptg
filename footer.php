    </main>
    <!-- /. MAIN -->

    <!-- Footer -->
    <footer class="footer">
        <div class="foooter__body container">
            <div class="footer__row">
                <div class="footer__logo-wrap">
                    <a href="<?php echo home_url(); ?>" class="footer__logo logo">
                        <img src="<?php echo STANDART_DIR; ?>img/logo-footer.svg" alt="" class="footer__logo-img logo__img">
                    </a>
                </div>
                <form class="footer__search-form search-form hide" role="search" method="get" id="searchform" action="./">
                    <div class="search-form__field">
                        <input class="footer__search-form-input search-form__input" type="search" value="" name="s" id="s" placeholder="Что ищем?">
                        <span class="search-form__icon">
                            <svg class="search-form__icon-glass" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.25 12.752L1.5 16.502L5.25 12.752ZM3.375 8.06445C3.375 11.6888 6.31313 14.627 9.9375 14.627C13.5619 14.627 16.5 11.6888 16.5 8.06445C16.5 4.44009 13.5619 1.50195 9.9375 1.50195C6.31313 1.50195 3.375 4.44009 3.375 8.06445Z" stroke="white" stroke-opacity="0.45" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>                                
                        </span>
                        <button class="search-form__reset hidden" type="reset">
                            <svg class="search-form__icon-reset" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 3L15 15M15 3L3 15" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="footer__columns">
                <div class="footer__column footer__column--one">
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu-1',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu-nav menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s footer__menu-list menu__list ">%3$s</ul>'
                        ]);
                    ?>
                </div>
                <div class="footer__column footer__column--two">
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu-2',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu-nav menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s footer__menu-list menu__list ">%3$s</ul>'
                        ]);
                    ?>
                </div>
                <div class="footer__column footer__column--three">
                    <address class="footer__address text text--small text--white text--w-regular">
                        Работаем по всей России
                    </address>
                </div>
                <div class="footer__column footer__column--four">
                    <div class="footer__inn text text--small text--white text--w-regular">
                        ИНН 2151**454****11
                    </div>
                </div>
            </div>
            <div class="footer__bottom-line">
                <div class="footer__copy text text--tiny text--white text--w-regular">
                    © Patent&Trademark Group <?php the_date('Y'); ?>
                </div>
                <a href="https://fcdigital.ru" class="footer__devsite">
                    <div class="footer__devsite-text text text--small text--white text--w-regular">
                        Разработка и дизайн сайта
                        <br>Fincom Digital
                    </div>
                    <div class="footer__devsite-logo">
                        <img src="<?php echo STANDART_DIR; ?>img/logo-fcdigital.svg" alt="fcdigital" class="footer__devsite-img">
                    </div>
                </a>
            </div>
        </div>
    </footer>
    <!-- /. Footer -->
    <?php wp_footer(); ?>
</body>
</html>