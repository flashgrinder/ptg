<?php /* Template Name: Контентная страница */?>
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
                        <?php the_excerpt(); ?>
                    </p>
                    <div class="info-block__actions">
                        <a href="#" class="info-block__btn button button--secondary" data-modal="#modal">
                            Связаться с нами
                        </a>
                    </div>
                </div>
                <div class="info-block__pic">
                    <?php
                        $default_attr = [
                            'class'	=> "info-block__img",
                            'alt'   => get_the_title()
                        ];
                                    
                        echo get_the_post_thumbnail( $post->ID, 'full', $default_attr ); 
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Info-block -->

    <!-- Page-content -->
    <section class="page-content block-padding">
        <div class="page-content__body container">
            <div class="page-content__wysiwyg wysiwyg">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    <!-- /. Page-content -->

    <?php get_template_part('templ/form-page'); ?>

<?php get_footer(); ?>