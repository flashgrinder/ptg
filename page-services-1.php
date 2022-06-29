<?php /* Template Name: Регистрация товарных знаков */?>
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
                        Регистрация товарного знака (ТЗ) - официальная государственная процедура, которая дает каждому предпринимателю исключительное право на интеллектуальную собственность. Свидетельство выдается на 10 лет с правом продления. Товарный знак как нематериальный актив можно продать, сдать в аренду, получить под него кредит в банке. Зарегистрированный ТЗ дает право презентовать себя на крупных торговых площадках, участвовать в тендерах и госзакупках, продавать свой продукт в федеральных сетях, а также масштабировать свой бизнес, создавая франшизу.
                    </p>
                    <div class="info-block__actions">
                        <a href="javascript:;" class="info-block__btn button button--primary" data-modal="#modal-services">
                            Оставить заявку
                        </a>
                    </div>
                </div>
                <div class="info-block__pic">
                    <img src="<?php echo STANDART_DIR; ?>img/info-block/register-mark.svg" alt="" class="info-block__img">
                </div>
            </div>
        </div>
    </section>
    <!-- /. Info-block -->

    <!-- Text-block -->
    <section class="text-block block-padding">
        <div class="text-block__body container">
            <div class="text-block__content wysiwyg">
                <?php the_content(); ?>
                <p>
                    Товарный знак является широко распространенным средством, позволяющим привлечь внимание к товару, его производителю или продавцу. Регистрация товарного знака дает возможность сформировать легко узнаваемый бренд и использовать его в целях успешного продвижения
                    на рынке аналогичных товаров, а также позволяет защитить бизнес от недобросовестных участников рынка.
                </p>
                <p>
                    Когда компания зарегистрировала товарный знак, нужно внимательно следить, чтобы не было нарушений со стороны конкурентов. Мониторингом может заниматься владелец знака самостоятельно, либо передать эту задачу на аутсорсинг. Специалисты компании Patent
                    Trademark group помогут отследить потенциальных нарушителей и помогут с подачей претензии и взысканием убытков.
                </p>
            </div>
        </div>
    </section>
    <!-- /. Text-block -->

    <!-- Text-block -->
    <section class="text-block block-padding">
        <div class="text-block__body container">
            <h2 class="text-block__heading title title--large title--dark title--w-semibold title--uppercase title--indent">
                Виды товарного знака
            </h2>
            <div class="text-block__content wysiwyg">
                <p>
                    Товарный знак как актив можно продать, сдать в аренду, получить под него кредит в банке. Зарегистрированный ТЗ даёт право презентовать себя на крупных торговых площадках, участвовать в тендерах и госзакупках, продавать свой продукт в федеральных сетях,
                    а также масштабировать свой бизнес, создавая франшизу.
                </p>
            </div>
            <div class="text-block__item-icons">
                <div class="text-block__column-icons">
                    <div class="text-block__item-icon text text--normal text--light-dark text--w-light">
                        <img src="<?php echo STANDART_DIR; ?>img/text-block/text-block-icon-1.svg" alt="" class="text-block__icon">Словестные
                    </div>
                    <div class="text-block__item-icon text text--normal text--light-dark text--w-light">
                        <img src="<?php echo STANDART_DIR; ?>img/text-block/text-block-icon-2.svg" alt="" class="text-block__icon">Изобразительные
                    </div>
                </div>
                <div class="text-block__column-icons">
                    <div class="text-block__item-icon text text--normal text--light-dark text--w-light">
                        <img src="<?php echo STANDART_DIR; ?>img/text-block/text-block-icon-3.svg" alt="" class="text-block__icon">Комбинированные
                    </div>
                    <div class="text-block__item-icon text text--normal text--light-dark text--w-light">
                        <img src="<?php echo STANDART_DIR; ?>img/text-block/text-block-icon-4.svg" alt="" class="text-block__icon">Объемные
                    </div>
                </div>
                <div class="text-block__column-icons">
                    <div class="text-block__item-icon text text--normal text--light-dark text--w-light">
                        <img src="<?php echo STANDART_DIR; ?>img/text-block/text-block-icon-5.svg" alt="" class="text-block__icon">Звуковые
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Text-block -->

    <!-- Steps -->
    <section class="steps block-padding">
        <div class="steps__body container">
            <h2 class="steps__heading title title--large title--dark title--w-semibold title--uppercase title--indent">
                Три шага к регистрации товарного знака
            </h2>
            <div class="steps__inner">
                <div class="steps__left-column">
                    <div class="steps__item">
                        <div class="steps__header">
                            <span class="steps__num text text--pre-big text--accent-color text--w-semibold">
                                01
                            </span>
                            <span class="steps__days text text--normal text--gray text--w-light">
                                4-5 дней
                            </span>
                        </div>
                        <h4 class="steps__title text text--normal text--dark text--w-medium">
                            Предварительная экспертиза товарного знака
                        </h4>
                    </div>
                    <div class="steps__item">
                        <div class="steps__header">
                            <span class="steps__num text text--pre-big text--accent-color text--w-semibold">
                                02
                            </span>
                            <span class="steps__days text text--normal text--gray text--w-light">
                                12-14 дней
                            </span>
                        </div>
                        <h4 class="steps__title text text--normal text--dark text--w-medium">
                            Взаимодействие с регистрирующим органом (Роспатентом)
                        </h4>
                    </div>
                    <div class="steps__item">
                        <div class="steps__header">
                            <span class="steps__num text text--pre-big text--accent-color text--w-semibold">
                                03
                            </span>
                            <span class="steps__days text text--normal text--gray text--w-light">
                                7-8 месяцев
                            </span>
                        </div>
                        <h4 class="steps__title text text--normal text--dark text--w-medium">
                            Получение свидетельства
                        </h4>
                    </div>
                </div>
                <div class="steps__right-column">
                    <div class="steps__content wysiwyg">
                        <p>
                            Важно помнить, что риск потерять деньги и время возникает еще до первого этапа, когда вы только задумались о создании товарного знака. Поэтому если у вас еще его нет, то самое время обратиться к нам.
                            <br>Дизайнеры и неймеры компании Patent Trademark group при разработке учитывают не только ваши пожелания, но и консультируются с юристами и патентными поверенными, что сводит риски отказа в регистрации к нулю. Если же у вас
                            есть готовый товарный знак, но первичный аудит показывает, что он НЕ патентопригодный, наши специалисты помогут доработать его, сохранив основную идею.
                        </p>
                        <p>
                            Регистрация товарных знаков предусматривает необходимость заявителя взаимодействовать с Роспатентом после подачи заявки. Эксперты ФИПС зачастую направляют предварительные уведомления, которые требуют отработки и ответов в установленные сроки, в противном
                            случае будет получен отказ в регистрации. Специалисты Patent Trademark group берут всю работу на себя, включая подготовку обоснования необходимости регистрации.
                        </p>
                        <p>
                            <b>Помните, ваш зарегистрированный товарный знак имеет значение!</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Steps -->

    <!-- Banner -->
    <section class="banner">
        <div class="banner__body container">
            <div class="banner__inner">
                <div class="banner__text">
                    <h2 class="banner__heading title title--big title--accent-color title--uppercase">
                        Скидка 25%
                    </h2>
                    <p class="banner__descr text text--normal text--light-dark  text--w-light">
                        на разработку патентнопригодного товарного знака!
                    </p>
                    <div class="banner__action">
                        <a href="javascript:;" class="banner__button button button--primary" data-modal="#modal-services">
                            Получить скидку
                        </a>
                        <span class="button__act-text text text--normal text--small text--gray text--w-light">
                            Акция действует при заказе услуги "регистрация ТЗ по ключ"
                        </span>
                    </div>
                </div>
                <div class="banner__pic">
                    <img src="<?php echo STANDART_DIR; ?>img/banner/img-1.png" alt="" class="banner__pictures">
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
                        <span class="faq__question text text--normal text--hight-dark text--w-light">Что может быть зарегистрировано в качестве товарного знака?</span>
                    </summary>
                    <div class="faq__answer text text--normal text--gray text--w-light">
                        Можно зарегистрировать любое обозначение, используемое предпринимателями для индивидуализации своих товаров и услуг. Это может быть слово, группа слов, изображение, объемный элемент, звук.
                    </div>
                </details>
                <details class="faq__details">
                    <summary class="faq__summary">
                        <span class="faq__question text text--normal text--hight-dark text--w-light">Кто может быть владельцем товарного знака?</span>
                    </summary>
                    <div class="faq__answer text text--normal text--gray text--w-light">
                        Заявка на регистрацию товарного знака может быть подана от имени индивидуального предпринимателя, ООО, общественной организации и любого другого юридического лица, а также зарегистрировать ТЗ с июня 2022 года могут и самозанятые.
                    </div>
                </details>
                <details class="faq__details">
                    <summary class="faq__summary">
                        <span class="faq__question text text--normal text--hight-dark text--w-light">Сколько действует товарный знак?</span>
                    </summary>
                    <div class="faq__answer text text--normal text--gray text--w-light">
                        Срок действия товарного знака 10 лет. По истечении этого срока действие товарного знака можно продлить еще на 10 лет неограниченное число раз при условии оплаты соответствующей пошлины.
                    </div>
                </details>
                <details class="faq__details">
                    <summary class="faq__summary">
                        <span class="faq__question text text--normal text--hight-dark text--w-light">Что может быть зарегистрировано в качестве международного товарного знака?</span>
                    </summary>
                    <div class="faq__answer text text--normal text--gray text--w-light">
                        Основные правила те же, что и для регистрации товарного знака в РФ. Обозначение может быть словесным, графическим, комбинированным, объемным, звуковым.
                    </div>
                </details>
                <details class="faq__details">
                    <summary class="faq__summary">
                        <span class="faq__question text text--normal text--hight-dark text--w-light">На каком языке необходимо оформлять документы для международной регистрации товарного знака?
                    </span>
                    </summary>
                    <div class="faq__answer text text--normal text--gray text--w-light">
                        Заявку можно оформить по выбору — либо на английском, либо на французском языке.
                    </div>
                </details>
            </div>
        </div>
    </section>
    <!-- /. FAQ -->
    
    <?php get_template_part('templ/popular-services'); ?>

    <?php get_template_part('templ/form-page'); ?>

<?php get_footer(); ?>