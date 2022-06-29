<?php /* Template Name: Регистрация программ ЭВМ и IP */?>
<?php get_header(); ?>

    <?php the_post(); ?>
    <!-- Info-block -->
    <section class="info-block">
        <div class="info-block__body container">
            <div class="info-block__inner">
                <div class="info-block__text">
                    <h1 class="info-block__heading title title--big title--dark title--w-medium title--uppercase title--indent">
                        <?php the_title(); ?>
                    </h1>
                    <p class="info-block__descr text text--normal text--light-dark text--w-light">
                        Программы для ЭВМ и базы данных регистрируются в Роспатенте, в результате выдается свидетельство о государственной регистрации. Роспатент принимает на депонирование исходные коды программы (листинг, декомпиляция) и ее краткое описание.
                    </p>
                    <div class="info-block__actions">
                        <a href="#" class="info-block__btn button button--primary" data-modal="#modal-services">
                            Оставить заявку
                        </a>
                    </div>
                </div>
                <div class="info-block__pic">
                    <img src="<?php echo STANDART_DIR; ?>img/info-block/evm-programm.svg" alt="" class="info-block__img">
                </div>
            </div>
        </div>
    </section>
    <!-- /. Info-block -->

    <!-- Text-block -->
    <section class="text-block block-padding">
        <div class="text-block__body container">
            <div class="text-block__content wysiwyg">
                <p>
                    Гражданский кодекс Российской Федерации предусматривает возможность государственной регистрации программы для ЭВМ по желанию правообладателя. Исключительное право на программу может принадлежать как автору, так и иным гражданам и юридическим лицам. Обладатель
                    исключительного права может использовать программу для ЭВМ любым не противоречащим законодательству способом, может распоряжаться программой по своему усмотрению, а также запрещать использование программы другим лицам, причем отсутствие
                    запрета не является разрешением. Срок регистрации программы ЭВМ – 2 месяца с момента подачи документов на регистрацию. Авторское право действует в течение всей жизни автора и в последующие 70 лет после его смерти.
                </p>
            </div>
        </div>
    </section>
    <!-- /. Text-block -->

    <!-- Period -->
    <section class="period block-padding">
        <div class="period__body container">
            <h2 class="period__heading title title--large title--dark title--w-semibold title--uppercase title--indent">
                Ценность регистрации программы для ЭВМ
            </h2>
            <div class="period__inner period__inner--copyright">
                <div class="period__item period__item--copyright">
                    <div class="period__descr-wrapp">
                        <div class="period__decor">
                            <svg class="period__svg-decor" width="148" height="134" viewBox="0 0 148 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.000343323 0.94989H18.0173L30.2053 13.2662L42.9232 26.118L85.2419 68.208H42.6859C42.2783 68.208 41.8299 68.208 41.3815 68.2492C30.4164 68.9083 21.7267 78.7196 21.5229 89.9237C21.3191 101.869 31.3467 111.673 43.1678 111.673H110.141L122.858 124.525H43.3308C24.8247 124.525 9.29417 109.819 8.84579 91.1183C8.64198 82.7152 11.4546 74.9712 16.2238 68.916C22.4197 61.0896 31.9989 56.023 42.6786 56.023H54.5813L0.000343323 0.94989Z"
                                fill="#F5F4F4" fill-opacity="0.85" />
                                <path d="M147.054 133.285H129.037L116.849 120.969L104.131 108.117L61.8127 66.0273H104.369C104.776 66.0273 105.225 66.0273 105.673 65.9861C116.638 65.3271 125.328 55.5157 125.532 44.3116C125.736 32.3661 115.708 22.5625 103.887 22.5625H36.9142L24.1963 9.71069H103.724C122.23 9.71069 137.761 24.4161 138.209 43.1171C138.413 51.5202 135.6 59.2642 130.831 65.3193C124.635 73.1457 115.056 78.2123 104.376 78.2123H92.4734L147.054 133.285Z"
                                fill="#F5F4F4" fill-opacity="0.85" />
                            </svg>
                        </div>
                        <div class="period__text-wrapp">
                            <div class="period__text text text--normal text--gray text--w-light">
                                Защита авторского права
                            </div>
                        </div>
                    </div>
                </div>
                <div class="period__item period__item--copyright">
                    <div class="period__descr-wrapp">
                        <div class="period__decor">
                            <svg class="period__svg-decor" width="123" height="125" viewBox="0 0 123 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M122.858 124.285H104.841L92.6531 111.969L79.9352 99.1174L37.6165 57.0273H80.1725C80.5801 57.0273 81.0285 57.0273 81.4769 56.9861C92.442 56.3271 101.132 46.5157 101.335 35.3116C101.539 23.3661 91.5117 13.5625 79.6906 13.5625H12.7179L0 0.710693H79.5276C98.0337 0.710693 113.564 15.4161 114.013 34.1171C114.216 42.5202 111.404 50.2642 106.635 56.3193C100.439 64.1457 90.8595 69.2123 80.1798 69.2123H68.2771L122.858 124.285Z"
                                fill="#F5F4F4" fill-opacity="0.85" />
                            </svg>
                        </div>
                        <div class="period__text-wrapp">
                            <div class="period__text text text--normal text--gray text--w-light">
                                Получение дохода от передачи прав и распространения программы
                            </div>
                        </div>
                    </div>
                </div>
                <div class="period__item period__item--copyright">
                    <div class="period__descr-wrapp">
                        <div class="period__decor">
                            <svg class="period__svg-decor" width="115" height="146" viewBox="0 0 115 146" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.00050354 -0.248367H21.1826L35.5117 14.3136L50.4638 29.5088L100.217 79.2734H50.1848C49.7056 79.2734 49.1784 79.2734 48.6512 79.3221C35.7599 80.1013 25.5436 91.7016 25.304 104.949C25.0644 119.072 36.8535 130.664 50.7513 130.664H129.489L144.441 145.859H50.943C29.1858 145.859 10.927 128.472 10.3999 106.361C10.1602 96.4258 13.4669 87.2697 19.074 80.1105C26.3583 70.8571 37.6203 64.8667 50.1762 64.8667H64.1698L0.00050354 -0.248367Z"
                                fill="#F5F4F4" fill-opacity="0.85" />
                            </svg>
                        </div>
                        <div class="period__text-wrapp">
                            <div class="period__text text text--normal text--gray text--w-light">
                                Приобретение нематериального актива
                            </div>
                        </div>
                    </div>
                </div>
                <div class="period__item period__item--copyright">
                    <div class="period__descr-wrapp">
                        <div class="period__decor">
                            <svg class="period__svg-decor" width="148" height="134" viewBox="0 0 148 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.000343323 0.94989H18.0173L30.2053 13.2662L42.9232 26.118L85.2419 68.208H42.6859C42.2783 68.208 41.8299 68.208 41.3815 68.2492C30.4164 68.9083 21.7267 78.7196 21.5229 89.9237C21.3191 101.869 31.3467 111.673 43.1678 111.673H110.141L122.858 124.525H43.3308C24.8247 124.525 9.29417 109.819 8.84579 91.1183C8.64198 82.7152 11.4546 74.9712 16.2238 68.916C22.4197 61.0896 31.9989 56.023 42.6786 56.023H54.5813L0.000343323 0.94989Z"
                                fill="#F5F4F4" fill-opacity="0.85" />
                                <path d="M147.054 133.285H129.037L116.849 120.969L104.131 108.117L61.8127 66.0273H104.369C104.776 66.0273 105.225 66.0273 105.673 65.9861C116.638 65.3271 125.328 55.5157 125.532 44.3116C125.736 32.3661 115.708 22.5625 103.887 22.5625H36.9142L24.1963 9.71069H103.724C122.23 9.71069 137.761 24.4161 138.209 43.1171C138.413 51.5202 135.6 59.2642 130.831 65.3193C124.635 73.1457 115.056 78.2123 104.376 78.2123H92.4734L147.054 133.285Z"
                                fill="#F5F4F4" fill-opacity="0.85" />
                            </svg>
                        </div>
                        <div class="period__text-wrapp">
                            <div class="period__text text text--normal text--gray text--w-light">
                                Возможность принимать участие в тендерах и осуществлять поставки ПО в рамках госзаказа
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="period__add-text wysiwyg">
                <p>
                    Свидетельство (патент) на программу гарантирует ее дополнительную юридическую охрану. Зарегистрированный же код программы для ЭВМ в Роспатенте служит доказательством его принадлежности конкретному создателю (автору). Свидетельство о государственной регистрации
                    компьютерной программы будет являться доказательством в случае возникновения спора: при выявлении плагиата и контрафакта.
                </p>
                <p>
                    Документы, необходимые для государственной регистрации программного обеспечения и базы данных в ФИПС:
                </p>
                <ol>
                    <li>Заявление о государственной регистрации программы для ЭВМ или базы данных, которое заполняется на лицевой и оборотной стороне;</li>
                    <li>Дополнение к заявлению на государственную регистрацию программы для ЭВМ или базы данных – также две стороны;</li>
                    <li>Согласие на обработку персональных данных;</li>
                    <li>Согласие на указание сведений об авторе;</li>
                    <li>Ходатайство о предоставлении льготы по уплате государственной пошлины;</li>
                    <li>Код ПО – целиком или только часть;</li>
                    <li>Квитанция об оплате госпошлины.</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- /. Period -->

    <!-- Banner -->
    <section class="banner">
        <div class="banner__body container">
            <div class="banner__inner">
                <div class="banner__text">
                    <h2 class="banner__heading title title--big title--accent-color title--uppercase">
                        Скидка 10%
                    </h2>
                    <p class="banner__descr text text--normal text--light-dark  text--w-light">
                        при заказе услуг через сайт в период
                        <br>с 1 июня по 31 августа
                    </p>
                    <div class="banner__action">
                        <a href="javascript:;" class="banner__button button button--primary" data-modal="#modal-services">
                            Получить скидку
                        </a>
                        <span class="button__act-text text text--normal text--small text--gray text--w-light">
                            Акция действует при заказе услуги "Регистрация ПО ЭВМ и IP"
                        </span>
                    </div>
                </div>
                <div class="banner__pic">
                    <img src="<?php echo STANDART_DIR; ?>img/banner/img-2.svg" alt="" class="banner__img">
                </div>
            </div>
        </div>
    </section>
    <!-- /. Banner -->

    <!-- FAQ -->
    <section class="faq block-padding">
        <div class="faq__body container">
            <h2 class="faq__heading  title title--large title--dark title--w-medium title--indent">
                Часто задаваемые вопросы
            </h2>
            <div class="faq__accordion">
                <details class="faq__details">
                    <summary class="faq__summary">
                        <span class="faq__question text text--normal text--hight-dark text--w-light">Обязательна ли регистрация программы?</span>
                    </summary>
                    <div class="faq__answer text text--normal text--gray text--w-light">
                        Обязательного требования к регистрации программы для ЭВМ в Роспатенте нет, однако регистрация является дополнительной мерой ее защиты. Свидетельство о регистрации программы дает определенному лицу исключительное право на интеллектуальную собственность.
                    </div>
                </details>
                <details class="faq__details">
                    <summary class="faq__summary">
                        <span class="faq__question text text--normal text--hight-dark text--w-light">Кто может быть правообладателем программы для ЭВМ?</span>
                    </summary>
                    <div class="faq__answer text text--normal text--gray text--w-light">
                        Правообладателем может быть как физическое, так и юридическое лицо, однако физическому лицу необходимо будет получить статус ИП. Правообладатель будет обладать исключительными правами на программу для ЭВМ, включая распространение, частичное или полное
                        воспроизведение, а также модифицирование программы.
                    </div>
                </details>
                <details class="faq__details">
                    <summary class="faq__summary">
                        <span class="faq__question text text--normal text--hight-dark text--w-light">На какую территорию распространяется защита?</span>
                    </summary>
                    <div class="faq__answer text text--normal text--gray text--w-light">
                        Действие авторского права имеет территориальный принцип. Так, после регистрации программы правовая охрана распространяется не только в России, но и в странах-участниках Бернской конвенции.
                    </div>
                </details>
            </div>
        </div>
    </section>
    <!-- /. FAQ -->

    <?php get_template_part('templ/popular-services'); ?>

    <?php get_template_part('templ/form-page'); ?>

<?php get_footer(); ?>