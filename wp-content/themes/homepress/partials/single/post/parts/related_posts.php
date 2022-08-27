<?php

$tags = wp_get_post_terms( get_the_id(), 'post_tag', ['fields' => 'ids'] );

$args = [
    'post__not_in'        => array( get_the_id() ),
    'posts_per_page'      => 3,
    'ignore_sticky_posts' => 1,
    'orderby'             => 'rand',
    'tax_query' => [
        [
            'taxonomy' => 'post_tag',
            'terms'    => $tags
        ]
    ]
];

$q = new wp_query( $args );

if ( $q->have_posts() ) : ?>
    <div class="col-md-12 col-sm single-post__related archive-post-style_2">

        <div class="archive-post__content">

            <div class="container">

                <h3><?php esc_html_e( 'Related Posts', 'homepress' ); ?></h3>

                <div class="row">

                    <?php while ($q->have_posts()) : $q->the_post(); ?>

                        <div class="col-lg-4 col-md-4 col-sm-12 archive-post_content">

                            <?php get_template_part('partials/post/parts/featured_image' ); ?>

                            <div class="content-info posted_default">

                                <div class="content-info-date">

                                    <?php get_template_part('partials/post/parts/posted_on_default' ); ?>

                                </div>

                                <div class="content-info-content">

                                    <?php get_template_part('partials/post/parts/title' ); ?>

                                    <?php get_template_part('partials/post/parts/excerpt' ); ?>

                                </div>

                            </div>

                        </div>

                    <?php endwhile; ?>

                </div>

            </div>

        </div>
    </div>

    <?php

    wp_reset_postdata();

endif;