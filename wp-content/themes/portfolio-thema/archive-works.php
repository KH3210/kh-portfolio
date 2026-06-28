<?php get_header(); ?>

<main class="p-works-page l-section u-wrapper">
    <div class="container">

        <h1 class="c-section-title">WORKS</h1>

        <ul class="p-works__list">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <li class="p-works__item">
                        <a href="<?php the_permalink(); //詳細ページURL ?>" class="c-card c-card--works">

                            <div class="c-card__img-wrap">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full'); ?>
                                <?php endif; ?>
                            </div>

                            <h3 class="c-card__title"><?php the_title(); ?></h3>

                            <p class="c-card__text">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'works_category');
                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        echo esc_html($term->name) . ' ';
                                    }
                                }
                                ?>
                            </p>

                        </a>
                    </li>

                <?php endwhile; ?>
            <?php endif; ?>

        </ul>

        <div class="p-works__pager">
            <?php the_posts_pagination(); ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>