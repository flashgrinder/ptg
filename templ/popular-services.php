<!-- Popular-services -->
<section class="popular-services block-padding">
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
        <?php

            $post_id = $wp_query->get_queried_object_id();

            $args = array(
                'post__not_in' => [$post_id],
                'post_type' => 'page',
                'posts_per_page' => 3,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'suppress_filters' => true,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cats_page',
                        'field'    => 'slug',
                        'terms'    => 'uslugi'
                    )
                )
            );

            $wp_query = new WP_Query( $args );

            if( have_posts() ) : 
                while( have_posts() ) : 
                    the_post();
            ?>
                <article class="popular-services__item">
                    <h3 class="popular-services__title">
                        <a href="<?php the_permalink(); ?>" class="popular-services__link link">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <p class="popular-services__excerpt text text--normal text--light-dark text--w-light">
                        <?php the_excerpt(); ?>
                    </p>
                </article>
                <?php endwhile; ?>
            <?php endif;?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<!-- /. Popular-services -->