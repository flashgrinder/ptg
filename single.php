<?php get_header(); ?>
    <?php the_post(); ?>
    <!-- News -->
    <section class="news">
        <div class="news__body container">
            <article class="news__article">
                <header class="news__header">
                    <div class="news__pic">
                    <?php
                        $default_attr = [
                            'class'	=> "news__img",
                            'alt'   => get_the_title()
                        ];
                        
                        echo get_the_post_thumbnail( $post->ID, 'full', $default_attr ) ?>
                    </div>
                    <h1 class="news__title title title--large title--dark title--w-semibold title--uppercase title--indent">
                        <?php the_title(); ?>
                    </h1>
                </header>
                <div class="news__content wysiwyg">
                    <?php the_content(); ?>
                </div>
                <footer class="news__footer">
                    <div class="news__action">
                        <a href="javascript:;" class="news__button button button--primary-icon" onclick="history.go(-1); return false;">
                            <span class="button__icon button__icon--left">
                                <svg class="button__icon-svg" width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 1L1.70711 5.29289C1.31658 5.68342 1.31658 6.31658 1.70711 6.70711L6 11" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span> 
                            К списку новостей
                        </a>
                    </div>
                </footer>
            </article>
        </div>
    </section>
    <!-- /. News -->

    <?php get_template_part('templ/form-page'); ?>

<?php get_footer(); ?>