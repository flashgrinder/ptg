<?php /* Template Name: Эксперты */?>
<?php get_header(); ?>

    <!-- Info-block -->
    <section class="info-block">
        <div class="info-block__body container">
            <div class="info-block__inner">
                <div class="info-block__text">
                    <h1 class="info-block__heading title title--big title--dark title--w-medium title--uppercase title--indent">
                        <?php the_title(); ?>
                    </h1>
                    <p class="info-block__descr text text--normal text--light-dark text--w-light">
                        Patent Trademark group - агентство, которое работает со своими клиентами онлайн. Но также вы можете посетить наш офис.
                    </p>
                    <div class="info-block__actions">
                        <a href="#" class="info-block__btn button button--primary" data-modal="#modal-services">
                            Как проехать?
                        </a>
                        <a href="#" class="info-block__btn button button--secondary" data-modal="#modal">
                            Перезвоните мне
                        </a>
                    </div>
                </div>
                <div class="info-block__pic">
                    <img src="<?php echo STANDART_DIR; ?>img/info-block/logo-contacts.svg" alt="" class="info-block__img">
                </div>
            </div>
        </div>
    </section>
    <!-- /. Info-block -->
    <!-- Contacts -->
    <section class="contacts block-padding">
        <div class="contacts__body container">
            <div class="contacts__map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A388d90221f5829577df8e51fc9f839c6271cbafcc3a63decb457bd34d6bc5521&amp;width=100%25&amp;height=255&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
            <div class="contacts__info">
                <div class="contacts__item-info">
                    <h4 class="contacts__title text text--normal text--light-dark text--w-light">
                        Адрес:
                    </h4>
                    <p class="contacts__text text text--normal text--dark text--w-medium">
                        Москва, Варшавское шоссе, дом 34
                    </p>
                </div>
                <div class="contacts__item-info">
                    <h4 class="contacts__title text text--normal text--light-dark text--w-light">
                        Телефон:
                    </h4>
                    <a href="tel:+78005004602" class="contacts__text text text--normal text--dark text--w-medium">
                        +7 (800) 500 46 02
                    </a>
                </div>
                <div class="contacts__item-info">
                    <h4 class="contacts__title text text--normal text--light-dark text--w-light">
                        E-mail:
                    </h4>
                    <a href="mailto:manager@patentgroup.ru" class="contacts__text text text--normal text--dark text--w-medium">
                        manager@patentgroup.ru
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Contacts -->

    <?php get_template_part('templ/form-page'); ?>

<?php get_footer(); ?>