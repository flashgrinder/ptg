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
                        Команда Patent Trademark group - это патентные поверенные, юристы, судебные адвокаты, дипломированные оценщики интеллектуальной собственности, аналитики в области интеллектуальных прав.
                    </p>
                    <div class="info-block__actions">
                        <a href="#" class="info-block__btn button button--primary" data-modal="#modal">
                            Получить консультацию
                        </a>
                    </div>
                </div>
                <div class="info-block__pic">
                    <img src="<?php echo STANDART_DIR; ?>img/info-block/front-page.svg" alt="" class="info-block__img">
                </div>
            </div>
        </div>
    </section>
    <!-- /. Info-block -->
    <!-- Experts -->
    <section class="experts block-padding">
        <div class="experts__body container">
            <p class="experts__descr text text--normal text--light-dark text--w-light">
                Мы помогаем нашим доверителям в патентовании изобретений, полезных моделей и промышленных образцов. Регистрируем товарные знаки в России и других странах. Отстаиваем интересы доверителей в спорах по интеллектуальной собственности в Палате по патентным
                спорам, судах и госорганах, а также помогаем решить спор без суда, когда это возможно.
            </p>
            <div class="experts__items">
                <article class="experts__item">
                    <div class="experts__photo">
                        <img src="<?php echo STANDART_DIR; ?>img/experts/experts-img-1.jpg" alt="" class="experts__img">
                    </div>
                    <div class="experts__inner">
                        <h3 class="experts__name text text--normal text--dark text--w-medium">
                            Павел Береснев
                        </h3>
                        <p class="experts__info text text--normal text--light-dark text--w-light">
                            Патентный поверенный РФ № 2251, юрист, дипломированный оценщик интеллектуальной собственности, судебный эксперт.
                            <br>
                            <br>Окончил Пензенский Государственный Университет по специальности юрист; направление: гражданское право и гражданский процесс. Общий стаж работы 18 лет, из них 9 лет занимается в области интеллектуальной собственности (товарные знаки, авторские права, патенты).
                        </p>
                    </div>
                </article>
                <article class="experts__item">
                    <div class="experts__photo">
                        <img src="<?php echo STANDART_DIR; ?>img/experts/experts-img-2.jpg" alt="" class="experts__img">
                    </div>
                    <div class="experts__inner">
                        <h3 class="experts__name text text--normal text--dark text--w-medium">
                            Оксана Береснева
                        </h3>
                        <p class="experts__info text text--normal text--light-dark text--w-light">
                            Патентный поверенный РФ № 1493, эксперт Роспатента высшей категории, аналитик в области интеллектуальных прав.
                            <br>
                            <br>Окончила Российскую Государственную Академию Интеллектуальной собственности, прошла обучение по курсу «Правовая охрана и защита кинематографических произведений» в Российской государственной академии интеллектуальной собственности.
                            Общий стаж работы в сфере интеллектуальной собственности более 24 лет.
                        </p>
                    </div>
                </article>
                <article class="experts__item">
                    <div class="experts__photo">
                        <img src="<?php echo STANDART_DIR; ?>img/experts/experts-img-3.jpg" alt="" class="experts__img">
                    </div>
                    <div class="experts__inner">
                        <h3 class="experts__name text text--normal text--dark text--w-medium">
                            Антон Ищенко
                        </h3>
                        <p class="experts__info text text--normal text--light-dark text--w-light">
                            Партнер, руководитель практики регулирования в сфере IP.
                            <br>
                            <br>Кандидат экономических наук, генеральный директор Всероссийского общества изобретателей и рационализаторов (ВОИР), член коллегии Федеральной службы по интеллектуальной собственности (Роспатент), член Совета
                            по вопросам интеллектуальной собственности при Председателе Совета Федерации ФС РФ, член научно-технического совета Федерального института промышленной собственности (ФИПС), член экспертной группы «Интеллектуальная собственность»
                            по экспертному сопровождению разработки и реализации плана мероприятий («дорожной карты») «Трансформация делового климата», автор и соавтор более 60 федеральных законопроектов, общественный уполномоченный по вопросам изобретательства
                            и интеллектуальной собственности в городе Москве.
                        </p>
                    </div>
                </article>
                <article class="experts__item">
                    <div class="experts__photo">
                        <img src="<?php echo STANDART_DIR; ?>img/experts/experts-img-4.jpg" alt="" class="experts__img">
                    </div>
                    <div class="experts__inner">
                        <h3 class="experts__name text text--normal text--dark text--w-medium">
                            Владислав Миронов
                        </h3>
                        <p class="experts__info text text--normal text--light-dark text--w-light">
                            Партнер, руководитель практики регулирования в сфере IP.
                            <br>
                            <br>Кандидат юридических наук, доцент кафедры финансового, банковского и таможенного права СГЮА, стаж работы в консалтинге более 15 лет, реализация успешных проектов в сфере защиты интересов налогоплательщиков в рамках налоговых
                            споров, разработка стратегий налогового планирования, в том числе с участием иностранных инвесторов и нерезидентов.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- /. Experts -->
    <!-- Popular-services -->
    <section id="services" class="popular-services block-padding">
        <div class="popular-services__body container">
            <div class="popular-services__decor">
                <svg class="popular-services__logo-decor" width="455" height="516" viewBox="0 0 455 516" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M455 515.876H379.568L328.541 464.51L275.295 410.911L98.1188 235.371H276.288C277.995 235.371 279.872 235.371 281.749 235.199C327.657 232.451 364.038 191.532 364.891 144.804C365.745 94.9844 323.762 54.0978 274.271 54.0978H-6.12409L-59.3701 0.498535H273.588C351.068 0.498535 416.089 61.8285 417.967 139.822C418.82 174.868 407.044 207.165 387.077 232.418C361.137 265.059 321.032 286.189 276.319 286.189H226.486L455 515.876Z"
                    fill="#F5F4F4" />
                </svg>
            </div>
            <h2 class="popular-services__heading title title--large title--dark title--w-semibold title--uppercase title--indent">
                Популярные услуги
            </h2>
            <div class="popular-services__items">
                <article class="popular-services__item">
                    <h3 class="popular-services__title">
                        <a href="#" class="popular-services__link link">
                            Регистрация товарных знаков
                        </a>
                    </h3>
                    <p class="popular-services__excerpt text text--normal text--light-dark text--w-light">
                        Особо важная процедура, для любого предпринимателя. Зарегистрировать товарный знак – значит обезопасить свой бизнес от неожиданных юридических проблем и финансовых потерь.
                    </p>
                </article>
                <article class="popular-services__item">
                    <h3 class="popular-services__title">
                        <a href="#" class="popular-services__link link">
                            Защита авторских прав
                        </a>
                    </h3>
                    <p class="popular-services__excerpt text text--normal text--light-dark text--w-light">
                        Комплекс мер, направленный на защиту интеллектуальной собственности. Вы развиваете свой талант, мы обеспечиваем безопасность вашего “творчества”.
                    </p>
                </article>
                <article class="popular-services__item">
                    <h3 class="popular-services__title">
                        <a href="#" class="popular-services__link link">
                            Регистрация ЭВМ и IP
                        </a>
                    </h3>
                    <p class="popular-services__excerpt text text--normal text--light-dark text--w-light">
                        Зарегистрировать программы для ЭВМ и базы данных – значит предоставить правовую защиту объектам авторского права. Это дает бизнесу и стартапам монополию на свои разработки. После внесения в реестр ПО Роспатента и получения патента никто не сможет использовать
                        ваши идеи.
                    </p>
                </article>
                <article class="popular-services__item">
                    <h3 class="popular-services__title">
                        <a href="#" class="popular-services__link link">
                            Представление интересов в суде, палате по патентным спорам, СИП
                        </a>
                    </h3>
                    <p class="popular-services__excerpt text text--normal text--light-dark text--w-light">
                        Важно не только получить права на интеллектуальную собственность, но и уметь их защитить! Специалисты компании Patent Trademark group отстоят ваши интересы во всех инстанциях, а опыт сотрудников поможет справиться с решением сложных споров.
                    </p>
                </article>
                <article class="popular-services__item">
                    <h3 class="popular-services__title">
                        <a href="#" class="popular-services__link link">
                            Патентование
                        </a>
                    </h3>
                    <p class="popular-services__excerpt text text--normal text--light-dark text--w-light">
                        Получение монопольного права на использование своей разработки, благодаря приобретению патента. Мы помогаем сохранить эксклюзивные права на интеллектуальную собственность.
                    </p>
                </article>
            </div>
        </div>
    </section>
    <!-- /. Popular-services -->

    <?php get_template_part('templ/popular-services'); ?>

    <?php get_template_part('templ/form-page'); ?>

<?php get_footer(); ?>