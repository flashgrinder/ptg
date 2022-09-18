<?php get_header(); ?>

    <!-- News-list -->
    <section class="news-list">
        <div class="news-list__body container">
            <div class="news-list__items">
            <?php

                $post_list = new WP_Query(array(
                    'post_type'  => 'post',
                    'post_status' => 'publish',
                    'paged'          => get_query_var('paged'),
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'suppress_filters' => true
                ));

                ?>
                <?php if( $post_list->have_posts() ) : 
                    while( $post_list->have_posts() ) : $post_list->the_post(); ?>
                    <?php if(get_query_var('paged') == 0 && $post_list->current_post == 0) : ?>
                        <article class="news-list__item news-list__item--wide">
                            <aside class="news-list__aside">
                                <div class="news-list__pic">
                                <?php
                                    $default_attr = [
                                        'class'	=> "news-list__thumb",
                                        'alt'   => get_the_title()
                                    ];
                                    
                                    echo get_the_post_thumbnail( $post->ID, 'large', $default_attr ) ?>
                                </div>
                            </aside>
                            <div class="news-list__inner">
                                <header class="news-list__header">
                                    <h2 class="news-list__title title title--large title--dark title--w-semibold title--uppercase">
                                        <a href="<?php the_permalink(); ?>" class="news-list__link">
                                            <?php the_title(); ?>
                                        </a> 
                                    </h2>
                                </header>
                                <footer class="news-list__footer">
                                    <p class="news-list__excerpt text text--normal text--light-dark text--w-light">
                                        <?php the_excerpt(); ?>
                                    </p>
                                </footer>
                            </div>
                        </article>
                    <?php else : ?>
                        <article class="news-list__item">
                            <aside class="news-list__aside">
                                <div class="news-list__pic">
                                <?php
                                    $default_attr = [
                                        'class'	=> "news-list__thumb",
                                        'alt'   => get_the_title()
                                    ];
                                    
                                    echo get_the_post_thumbnail( $post->ID, 'medium', $default_attr ) ?>
                                </div>
                            </aside>
                            <div class="news-list__inner">
                                <header class="news-list__header">
                                    <div class="news-list__meta text text--normal text--gray text--w-light">
                                        <span class="news-list__date">
                                            2 мая 2022
                                        </span>
                                        <span class="news-list__views">
                                            17384 просмотра
                                        </span>
                                    </div>
                                    <h2 class="news-list__title title title--large title--dark title--w-semibold title--uppercase">
                                        <a href="<?php the_permalink(); ?>" class="news-list__link">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                </header>
                                <footer class="news-list__footer">
                                    <p class="news-list__excerpt text text--normal text--light-dark text--w-light">
                                        <?php the_excerpt(); ?>
                                    </p>
                                </footer>
                            </div>
                        </article>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php  endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <!-- Pagination -->
            <nav class="pagination">
                <div class="pagination__inner">
                <?php   
                    echo paginate_links(
                        $args = array(
                            'format'       => '?paged=%#%',
                            'mid_size' => 1,
                            'end_size' => 1,
                            'prev_next' => false,
                            'prev_text' => false,
                            'next_text' => false
                    ));
                ?>
                </div>
            </nav>
            <!-- /. Pagination -->
        </div>
    </section>
    <!-- /. News-list -->

    <?php get_template_part('templ/form-page'); ?>

<?php get_footer(); ?>