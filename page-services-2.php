<?php /* Template Name: Патентование */?>
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
                        Патент - документ, установленного образца, обозначающий принадлежность исключительного права патентообладателю на изобретение, полезную модель или промышленный образец.
                    </p>
                    <div class="info-block__actions">
                        <a href="#" class="info-block__btn button button--primary" data-modal="#modal-services">
                        Оставить заявку
                    </a>
                    </div>
                </div>
                <div class="info-block__pic">
                    <img src="<?php echo STANDART_DIR; ?>img/info-block/patent.svg" alt="" class="info-block__img">
                </div>
            </div>
        </div>
    </section>
    <!-- /. Info-block -->



    <!-- Text-block -->
    <section class="text-block block-padding">
        <div class="text-block__body container">
            <h2 class="text-block__heading title title--large title--dark title--w-semibold title--uppercase title--indent">
                Виды патентов
            </h2>
            <div class="text-block__content wysiwyg">
                <p>
                    <b>На территории Российской Федерации действуют 3 вида патентов:</b>
                </p>
                <ol>
                    <li>Патент на изобретение;</li>
                    <li>Патент на полезную модель;</li>
                    <li>Проведение формальной экспертизы;</li>
                    <li>Патент на промышленный образец.</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- /. Text-block -->

    <!-- Text-block -->
    <section class="text-block block-padding">
        <div class="text-block__body container">
            <h2 class="text-block__heading title title--large title--dark title--w-semibold title--uppercase title--indent">
                Патентный поиск
            </h2>
            <div class="text-block__content wysiwyg">
                <p>
                    Патентный поиск - определения патентоспособности исследуемого объекта. Это важный этап перед регистрацией. Для этого необходимо предоставить информацию по предмету поиска (объект исследования, его составные части) для проведения патентных исследований
                    и оформления отчета по их результатам (отчет ГОСТ Р 15.011). Также необходима информация: назначение, область применения и краткое описание объекта исследования; характеристика новизны разрабатываемого объекта, анализ новизны создаваемых
                    технологических решений. В качестве изобретения охраняется техническое решение в любой области, относящейся к продукту ( в частности, устройству, веществу, штамму микроорганизма, культуре клеток растений и животных) или способу
                    ( процессу осуществления действий над материальным объектом с помощью материальных средств). Изобретению предоставляется правовая охрана, если оно является новым, имеет изобретательский уровень и промышленно применимо. В качестве
                    полезной модели охраняется техническое решение, относящееся к устройству. Полезной модели предоставляется правовая охрана, если она является новой и промышленно применимой.
                </p>
            </div>
        </div>
    </section>
    <!-- /. Text-block -->

    <!-- Text-block -->
    <section class="text-block block-padding">
        <div class="text-block__body container">
            <h2 class="text-block__heading title title--large title--dark title--w-semibold title--uppercase title--indent">
                Необходимые документы
            </h2>
            <div class="text-block__content wysiwyg">
                <div class="wp-container-3 wp-block-columns">
                    <div class="wp-container-1 wp-block-column">
                        <p>Для подачи заявки на промышленный образец</p>
                        <ol>
                            <li>Описание промышленного образца;</li>
                            <li>Перечень существенных признаков промышленного образца;</li>
                            <li>Комплект изображений изделий;</li>
                            <li>Чертеж (и) общего вида изделия;</li>
                            <li>Документ об уплате патентной пошлины.</li>
                        </ol>
                    </div>
                    <div class="wp-container-2 wp-block-column">
                        <p>Для подачи заявки на изобретения, полезную модель</p>
                        <ol>
                            <li>Формула изобретения, полезной модели;</li>
                            <li>Описание изобретения, полезной модели;</li>
                            <li>Реферат изобретения, полезной модели;</li>
                            <li>Заявление на подачу заявки;</li>
                            <li>Документ, подтверждающий уплату патентной пошлины.</li>
                        </ol>
                    </div>
                </div>
                <p>
                    В качестве промышленного образца охраняется художественно-конструкторское решение изделия промышленного или кустарно-ремесленного производства, определяющее его внешний вид. Промышленному образцу предоставляется правовая охрана, если по своим существенным
                    признакам он является новым и оригинальным. К существенным признакам промышленного образца относятся признаки, определяющие эстетические и (или) эргономические особенности внешнего вида изделия, в частности форма, конфигурация,
                    орнамент и сочетание цветов.
                </p>
            </div>
        </div>
    </section>
    <!-- /. Text-block -->

    <!-- Period -->
    <section class="period block-padding">
        <div class="period__body container">
            <h2 class="period__heading title title--large title--dark title--w-semibold title--uppercase title--indent">
                Сроки действия патента:
            </h2>
            <div class="period__inner">
                <div class="period__item">
                    <h4 class="period__title text text--large text--dark text--w-semibold">
                        Промышленный образец
                    </h4>
                    <div class="period__descr-wrapp">
                        <div class="period__decor">
                            <svg class="period__svg-decor" width="148" height="134" viewBox="0 0 148 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.000343323 0.94989H18.0173L30.2053 13.2662L42.9232 26.118L85.2419 68.208H42.6859C42.2783 68.208 41.8299 68.208 41.3815 68.2492C30.4164 68.9083 21.7267 78.7196 21.5229 89.9237C21.3191 101.869 31.3467 111.673 43.1678 111.673H110.141L122.858 124.525H43.3308C24.8247 124.525 9.29417 109.819 8.84579 91.1183C8.64198 82.7152 11.4546 74.9712 16.2238 68.916C22.4197 61.0896 31.9989 56.023 42.6786 56.023H54.5813L0.000343323 0.94989Z"
                                fill="#F5F4F4" fill-opacity="0.85" />
                                <path d="M147.054 133.285H129.037L116.849 120.969L104.131 108.117L61.8127 66.0273H104.369C104.776 66.0273 105.225 66.0273 105.673 65.9861C116.638 65.3271 125.328 55.5157 125.532 44.3116C125.736 32.3661 115.708 22.5625 103.887 22.5625H36.9142L24.1963 9.71069H103.724C122.23 9.71069 137.761 24.4161 138.209 43.1171C138.413 51.5202 135.6 59.2642 130.831 65.3193C124.635 73.1457 115.056 78.2123 104.376 78.2123H92.4734L147.054 133.285Z"
                                fill="#F5F4F4" fill-opacity="0.85" />
                            </svg>
                        </div>
                        <span class="period__num text text--accent-color text--w-medium">
                            5
                        </span>
                        <div class="period__text-wrapp">
                            <div class="period__years text text--normal text--accent-color text--w-regular">
                                лет
                            </div>
                            <div class="period__text text text--normal text--gray text--w-light">
                                с даты подачи заявки
                            </div>
                        </div>
                    </div>
                </div>
                <div class="period__item">
                    <h4 class="period__title text text--large text--dark text--w-semibold">
                        Полезная модель
                    </h4>
                    <div class="period__descr-wrapp">
                        <div class="period__decor">
                            <svg class="period__svg-decor" width="123" height="125" viewBox="0 0 123 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M122.858 124.285H104.841L92.6531 111.969L79.9352 99.1174L37.6165 57.0273H80.1725C80.5801 57.0273 81.0285 57.0273 81.4769 56.9861C92.442 56.3271 101.132 46.5157 101.335 35.3116C101.539 23.3661 91.5117 13.5625 79.6906 13.5625H12.7179L0 0.710693H79.5276C98.0337 0.710693 113.564 15.4161 114.013 34.1171C114.216 42.5202 111.404 50.2642 106.635 56.3193C100.439 64.1457 90.8595 69.2123 80.1798 69.2123H68.2771L122.858 124.285Z"
                                fill="#F5F4F4" fill-opacity="0.85" />
                            </svg>
                        </div>
                        <span class="period__num text text--accent-color text--w-medium">
                            10
                        </span>
                        <div class="period__text-wrapp">
                            <div class="period__years text text--normal text--accent-color text--w-regular">
                                лет
                            </div>
                            <div class="period__text text text--normal text--gray text--w-light">
                                с даты подачи заявки
                            </div>
                        </div>
                    </div>
                </div>
                <div class="period__item">
                    <h4 class="period__title text text--large text--dark text--w-semibold">
                        Изобретение
                    </h4>
                    <div class="period__descr-wrapp">
                        <div class="period__decor">
                            <svg class="period__svg-decor" width="175" height="146" viewBox="0 0 175 146" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M-0.000198364 -2.30453H26.1244L43.7969 15.5489L62.2378 34.1785L123.6 95.1913H61.8937C61.3027 95.1913 60.6525 95.1913 60.0023 95.251C44.103 96.2064 31.503 110.429 31.2074 126.67C30.9119 143.986 45.4518 158.197 62.5924 158.197H159.703L178.144 176.827H62.8288C35.995 176.827 13.4758 155.51 12.8257 128.402C12.5301 116.221 16.6084 104.995 23.5237 96.2176C32.5078 84.8727 46.3976 77.5283 61.8832 77.5283H79.1419L-0.000198364 -2.30453Z"
                                fill="#F5F4F4" fill-opacity="0.85" />
                            </svg>
                        </div>
                        <span class="period__num text text--accent-color text--w-medium">
                            20
                        </span>
                        <div class="period__text-wrapp">
                            <div class="period__years text text--normal text--accent-color text--w-regular">
                                лет
                            </div>
                            <div class="period__text text text--normal text--gray text--w-light">
                                с даты подачи заявки
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="period__add-text wysiwyg">
                <p>
                    Процедура регистрации патента регламентирована патентным законодательством, в частности, патентным законом РФ
                </p>
            </div>
        </div>
    </section>
    <!-- /. Period -->

    <!-- Plunk -->
    <section class="plunk">
        <div class="plunk__body container">
            <div class="plunk__inner">
                <div class="plunk__text">
                    <h2 class="plunk__heading title title--big title--accent-color title--uppercase">
                        Скидка 10%
                    </h2>
                    <p class="plunk__descr text text--normal text--light-dark  text--w-light">
                        при заказе услуг через сайт в период
                        <br>с 1 июня по 31 августа
                    </p>
                    <div class="plunk__action">
                        <a href="javascript:;" class="plunk__button button button--primary" data-modal="#modal-services">
                            Получить скидку
                        </a>
                        <span class="button__act-text text text--normal text--small text--gray text--w-light">
                            Акция действует при заказе услуги "Патентование"
                        </span>
                    </div>
                </div>
                <div class="plunk__pic">
                    <img src="<?php echo STANDART_DIR; ?>img/plunk/img-2.svg" alt="" class="plunk__pictures">
                </div>
            </div>
        </div>
    </section>
    <!-- /. Plunk -->




    <!-- FAQ -->
    <section class="faq block-padding">
        <div class="faq__body container">
            <h2 class="faq__heading  title title--large title--dark title--w-medium title--indent">
                Часто задаваемые вопросы
            </h2>
            <div class="faq__accordion">

                <details class="faq__details">
                    <summary class="faq__summary">
                        <span class="faq__question text text--normal text--hight-dark text--w-light">Какой объект можно защитить патентом на изобретение?</span>
                    </summary>
                    <div class="faq__answer text text--normal text--gray text--w-light">
                        В качестве изобретений регистрируются объекты техники, относящиеся к устройству, способу или новому применению уже известного продукта.
                    </div>
                </details>
                <details class="faq__details">
                    <summary class="faq__summary">
                        <span class="faq__question text text--normal text--hight-dark text--w-light">Кто может стать владельцем патента на изобретение?</span>
                    </summary>
                    <div class="faq__answer text text--normal text--gray text--w-light">
                        Ограничений нет. Заявка может быть подана от имени физического лица, индивидуального предпринимателя, юридического лица или любой комбинации этих лиц.
                    </div>
                </details>
                <details class="faq__details">
                    <summary class="faq__summary">
                        <span class="faq__question text text--normal text--hight-dark text--w-light">Сколько времени занимает процесс рассмотрения заявки в Роспатенте?</span>
                    </summary>
                    <div class="faq__answer text text--normal text--gray text--w-light">
                        Согласно регламенту, срок рассмотрения заявки на изобретение составляет 34 месяца. На практике эксперты стремятся к сокращению этого срока и в среднем процесс занимает 6–9 месяцев. Были случаи регистрации и за 3-4 месяца без дополнительного ускорения,
                        но это, скорее, исключения из правила.
                    </div>
                </details>
            </div>
        </div>
    </section>
    <!-- /. FAQ -->
    
    <?php get_template_part('templ/popular-services'); ?>

    <?php get_template_part('templ/form-page'); ?>

<?php get_footer(); ?>