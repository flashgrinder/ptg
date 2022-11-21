<?php /* Template Name: Шаблон: Услуга */?>
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
                        <? the_excerpt(); ?>
                    </p>
                    <div class="info-block__actions">
                        <a href="javascript:;" class="info-block__btn button button--primary" data-modal="#modal-services">
                            Оставить заявку
                        </a>
                    </div>
                </div>
                <div class="info-block__pic">
                    <?php
                        $default_attr = [
                            'class'	=> "info-block__img"
                        ];
                                    
                        echo get_the_post_thumbnail( $post->ID, 'full', $default_attr ); 
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Info-block -->

    <?php if( have_rows('service-blocks')): ?>
        <?php while( have_rows('service-blocks')) : the_row(); ?>
        
            <?php if( get_row_layout() == 'service-block_editor' ): ?>
                <!-- Text-block -->
                <section class="text-block block-padding">
                    <div class="text-block__body container">
                        <div class="text-block__content wysiwyg">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </section>
                <!-- /. Text-block -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_accordion' ): ?>
                <!-- FAQ -->
                <section class="faq block-padding">
                    <div class="faq__body container">
                        <h2 class="faq__heading  title title--large title--dark title--w-medium title--indent">
                            <?php echo get_sub_field('accordion-block_title'); ?>
                        </h2>
                        <?php if( have_rows('accordion') ): ?>
                            <div class="faq__accordion">
                            <?php while( have_rows('accordion') ): the_row(); 
                                        
                                    $accordion_title = get_sub_field('accordion_title');
                                    $accordion_descr = get_sub_field('accordion_descr');
                                
                                ?>
                                <details class="faq__details">
                                    <summary class="faq__summary">
                                        <span class="faq__question text text--normal text--hight-dark text--w-light">
                                            <?php echo $accordion_title; ?>
                                        </span>
                                    </summary>
                                    <div class="faq__answer text text--normal text--gray text--w-light">
                                        <?php echo $accordion_descr; ?>
                                    </div>
                                </details>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
                <!-- /. FAQ -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_text-list' ): ?>
                <!-- Text-block -->
                <section class="text-block block-padding">
                    <div class="text-block__body container">
                        <h2 class="text-block__heading title title--large title--dark title--w-semibold title--uppercase title--indent">
                            <?php echo get_sub_field('text-list-block_title'); ?>
                        </h2>
                        <div class="text-block__content wysiwyg">
                            <?php echo get_sub_field('text-list-block_editor'); ?>
                        </div>
                        <div class="text-block__item-icons">
                        <?php if( have_rows('text-list_col') ): ?>
                            <?php while( have_rows('text-list_col') ): the_row(); ?>
                            <div class="text-block__column-icons">
                                <?php if( have_rows('text-list') ): ?>
                                    <?php while( have_rows('text-list') ): the_row(); 
                                    
                                        $text_list_icon = get_sub_field('text-list_icon');
                                        $text_list_name = get_sub_field('text-list_name');
                                        
                                    ?>
                                        <div class="text-block__item-icon text text--normal text--light-dark text--w-light">
                                            <?php if( !empty( $text_list_icon ) ): ?>
                                                <img src="<?php echo esc_url($text_list_icon['url']); ?>" alt="<?php echo esc_attr($text_list_icon['alt']); ?>" class="text-block__icon">
                                            <?php endif; ?>
                                            <?php echo $text_list_name; ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </section>
                <!-- /. Text-block -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_steps' ): ?>
                <!-- Steps -->
                <section class="steps block-padding">
                    <div class="steps__body container">
                        <h2 class="steps__heading title title--large title--dark title--w-semibold title--uppercase title--indent">
                            <?php echo get_sub_field('steps-block_title'); ?>
                        </h2>
                        <div class="steps__inner">
                            <div class="steps__left-column">
                            <?php if( have_rows('steps') ): ?>
                                <?php while( have_rows('steps') ): the_row(); 
                                
                                    $steps_time = get_sub_field('steps_time');
                                    $steps_title = get_sub_field('steps_title');
                                    $steps_color = get_sub_field('steps_color');

                                ?>
                                    <div class="steps__item" style="background: <?php echo $steps_color; ?>">
                                        <div class="steps__header">
                                            <span class="steps__num text text--pre-big text--accent-color text--w-semibold">
                                                0<?php echo get_row_index(); ?>
                                            </span>
                                            <span class="steps__days text text--normal text--gray text--w-light">
                                                <?php echo $steps_time; ?>
                                            </span>
                                        </div>
                                        <h4 class="steps__title text text--normal text--dark text--w-medium">
                                            <?php echo $steps_title; ?>
                                        </h4>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                            <div class="steps__right-column">
                                <div class="steps__content wysiwyg">
                                    <?php echo get_sub_field('steps-block_editor'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /. Steps -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_stages' ): ?>
                <!-- Stages -->
                <section class="stages block-padding">
                    <div class="stages__body container">
                        <h2 class="stage__heading title title--large title--dark title--w-semibold title--uppercase title--indent">
                            <?php echo get_sub_field('service-block_stages_title'); ?>
                        </h2>
                        <div class="stages__inner">
                            <div class="stages__row stages__row--one">
                            <?php if( have_rows('stages') ): ?>
                                <?php while( have_rows('stages') ): the_row(); 
                                
                                    $stages_time = get_sub_field('stages_time');
                                    $stages_title = get_sub_field('stages_title');
                                    $stages_color = get_sub_field('stages_color');

                                ?>
                                    <div class="stages__item" style="background: <?php echo $stages_color; ?>">
                                        <div class="stages__header">
                                            <div class="stages__num text text--pre-big text--accent-color text--w-semibold">
                                                0<?php echo get_row_index(); ?>
                                            </div>
                                            <? if ( !empty($stages_time) ) : ?>
                                                <span class="stages__days text text--normal text--gray text--w-light">
                                                    <?php echo $stages_time; ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <h4 class="stages__title text text--normal text--dark text--w-medium">
                                            <?php echo $stages_title; ?>
                                        </h4>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /. Stages -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_period' ): ?>
                <!-- Period -->
                <section class="period block-padding">
                    <div class="period__body container">
                        <h2 class="period__heading title title--large title--dark title--w-semibold title--uppercase title--indent">
                            <?php echo get_sub_field('service-block_period_title'); ?>
                        </h2>
                        <?php $period_col = get_sub_field('period_col'); ?>
                        <div class="period__inner <?php echo $period_col; ?>">
                        <?php if( have_rows('period') ): ?>
                            <?php while( have_rows('period') ): the_row(); 
                            
                                $period_title = get_sub_field('period_title');
                                $period_time = get_sub_field('period_time');
                                $period_time_left = get_sub_field('period_time_left');
                                $period_text = get_sub_field('period_text');
                                $period_icon = get_sub_field('period_icon');

                            ?>
                                <div class="period__item">
                                    <? if ( !empty($period_title) ) : ?>
                                        <h4 class="period__title text text--large text--dark text--w-semibold">
                                            <?php echo $period_title; ?>
                                        </h4>
                                    <?php endif; ?>
                                    <div class="period__descr-wrapp">
                                        <div class="period__decor">
                                            <?php if( !empty( $period_icon ) ): ?>
                                                <img src="<?php echo esc_url($period_icon['url']); ?>" alt="<?php echo esc_attr($period_icon['alt']); ?>" class="period__svg-decor">
                                            <?php endif; ?>
                                        </div>
                                        <? if ( !empty($period_time) ) : ?>
                                            <span class="period__num text text--accent-color text--w-medium">
                                                <?php echo $period_time; ?>
                                            </span>
                                        <?php endif; ?>
                                        <div class="period__text-wrapp">
                                            <? if ( !empty($period_time_left) ) : ?>
                                                <div class="period__years text text--normal text--accent-color text--w-regular">
                                                    <?php echo $period_time_left; ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="period__text text text--normal text--gray text--w-light">
                                                <?php echo $period_text; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                        <?php $service_block_period_editor = get_sub_field('service_block_period_editor'); ?>
                        <? if ( !empty($service_block_period_editor) ) : ?>
                            <div class="period__add-text wysiwyg">
                                <?php echo $service_block_period_editor; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
                <!-- /. Period -->
            <?php endif; ?>

            <?php if( get_row_layout() == 'service-block_plunk' ): ?>
                <!-- Plunk -->
                <section class="plunk">
                    <div class="plunk__body container">
                        <div class="plunk__inner">
                            <?php 
                                $plunk_title = get_sub_field('plunk_title');
                                $plunk_subtitle = get_sub_field('plunk_subtitle');
                                $plunk_descr = get_sub_field('plunk_descr');
                                $plunk_btn_name = get_sub_field('plunk_btn_name');
                                $plunk_btn_left_text = get_sub_field('plunk_btn_left_text');
                                $plunk_img = get_sub_field('plunk_img');
                            ?>
                            <div class="plunk__text">
                                <h2 class="plunk__heading title title--big title--accent-color title--uppercase">
                                    <?php echo $plunk_title; ?>
                                </h2>
                                <?php if ( !empty($plunk_descr) ) : ?>
                                    <div class="plunk__descr wysiwyg">
                                        <?php echo $plunk_descr; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ( !empty($plunk_subtitle) ) : ?>
                                    <p class="plunk__descr text text--normal text--light-dark  text--w-light">
                                        <?php echo $plunk_subtitle; ?>
                                    </p>
                                <?php endif; ?>
                                <div class="plunk__action">
                                    <a href="javascript:;" class="plunk__button button button--primary" data-modal="#modal-services">
                                        <?php echo $plunk_btn_name; ?>
                                    </a>
                                    <?php if ( !empty($plunk_btn_left_text) ) : ?>
                                        <span class="button__act-text text text--normal text--small text--gray text--w-light">
                                            <?php echo $plunk_btn_left_text; ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if ( !empty($plunk_img) ) : ?>
                                <div class="plunk__pic">
                                    <img src="<?php echo esc_url($plunk_img['url']); ?>" alt="<?php echo esc_attr($plunk_img['alt']); ?>" class="plunk__pictures">
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
                <!-- /. Plunk -->
            <?php endif; ?>

        <?php endwhile ?>
    <?php endif ?>

    <?php get_template_part('templ/popular-services'); ?>

    <?php get_template_part('templ/form-page'); ?>

<?php get_footer(); ?>