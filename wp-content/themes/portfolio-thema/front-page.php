<?php get_header(); ?>

<main class="main">
    <section class="hero l-section">
        <div class="container">
            <div class="hero__inner c-fade-in">
                <h1 class="hero__title">Hashiba K.</h1>
                <p class="hero__text">Web Designer / Front-end</p>
            </div>

            <!-- 背景アニメ -->
            <svg class="ripple-bg" viewBox="0 0 100 100" preserveAspectRatio="none">

                <!-- 水滴 -->
                <circle cx="50" cy="20" r="0.3" class="drop">
                    <animate attributeName="cy" values="40;70" dur="3s" repeatCount="indefinite" />
                    <animate attributeName="opacity" values="1;1;0" keyTimes="0;0.8;1" dur="3s"
                        repeatCount="indefinite" />
                </circle>

                <!-- ripple 1 -->
                <ellipse cx="50" cy="70" rx="0" ry="0">
                    <animate attributeName="rx" from="0" to="45" dur="6s" begin="3s" repeatCount="indefinite" />
                    <animate attributeName="ry" from="0" to="18" dur="6s" begin="3s" repeatCount="indefinite" />
                    <animate attributeName="opacity" from="0.4" to="0" dur="6s" begin="3s"
                        repeatCount="indefinite" />
                </ellipse>

                <!-- ripple 2 -->
                <ellipse cx="50" cy="70" rx="0" ry="0">
                    <animate attributeName="rx" from="0" to="45" dur="6s" begin="6s" repeatCount="indefinite" />
                    <animate attributeName="ry" from="0" to="18" dur="6s" begin="6s" repeatCount="indefinite" />
                    <animate attributeName="opacity" from="0.4" to="0" dur="6s" begin="6s"
                        repeatCount="indefinite" />
                </ellipse>

                <!-- ripple 3 -->
                <ellipse cx="50" cy="70" rx="0" ry="0">
                    <animate attributeName="rx" from="0" to="45" dur="6s" begin="9s" repeatCount="indefinite" />
                    <animate attributeName="ry" from="0" to="18" dur="6s" begin="9s" repeatCount="indefinite" />
                    <animate attributeName="opacity" from="0.4" to="0" dur="6s" begin="9s"
                        repeatCount="indefinite" />
                </ellipse>
            </svg>
        </div>
    </section>

    <section id="service" class="p-service l-section u-wrapper">
        <div class="container">
            <h2 class="c-section-title">SERVICE</h2>

            <ul class="p-service__list c-fade-in">
                <li class="p-service__item">
                    <div class="c-card--service">
                        <div class="c-card__icon-wrap">
                            <svg class="c-card__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m18 16 4-4-4-4"/>
                                    <path d="m6 8-4 4 4 4"/>
                                    <path d="m14.5 4-5 16"/>
                                </svg>
                        </div>
                        <h3 class="c-card__title-service">Webサイト制作</h3>
                        <p class="c-card__text">デザインをもとに、HTML/CSS/JavaScriptでWebサイトを制作します。</p>
                    </div>
                </li>
                <li class="p-service__item">
                    <div class="c-card--service">
                        <div class="c-card__icon-wrap">
                            <svg class="c-card__icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                    <path d="M21.469 6.825c.84 1.537 1.318 3.3 1.318 5.175 0 3.979-2.156 7.456-5.363 9.325l3.295-9.527c.615-1.54.82-2.771.82-3.864 0-.405-.026-.78-.07-1.11m-7.981.105c.647-.03 1.232-.105 1.232-.105.582-.075.514-.93-.067-.899 0 0-1.755.135-2.88.135-1.064 0-2.85-.15-2.85-.15-.585-.03-.661.855-.075.885 0 0 .54.061 1.125.09l1.68 4.605-2.37 7.08L5.354 6.9c.649-.03 1.234-.1 1.234-.1.585-.075.516-.93-.065-.896 0 0-1.746.138-2.874.138-.2 0-.438-.008-.69-.015C4.911 3.15 8.235 1.215 12 1.215c2.809 0 5.365 1.072 7.286 2.833-.046-.003-.091-.009-.141-.009-1.06 0-1.812.923-1.812 1.914 0 .89.513 1.643 1.06 2.531.411.72.89 1.643.89 2.977 0 .915-.354 1.994-.821 3.479l-1.075 3.585-3.9-11.61.001.014zM12 22.784c-1.059 0-2.081-.153-3.048-.437l3.237-9.406 3.315 9.087c.024.053.05.101.078.149-1.12.393-2.325.609-3.582.609M1.211 12c0-1.564.336-3.05.935-4.39L7.29 21.709C3.694 19.96 1.212 16.271 1.211 12M12 0C5.385 0 0 5.385 0 12s5.385 12 12 12 12-5.385 12-12S18.615 0 12 0"/>
                                </svg>
                        </div>
                        <h3 class="c-card__title-service">WordPress構築</h3>
                        <p class="c-card__text">既存サイトのWordPress化や、更新しやすいオリジナルテーマでのサイト構築に対応します。</p>
                    </div>
                </li>
                <li class="p-service__item">
                    <div class="c-card--service">
                        <div class="c-card__icon-wrap">
                            <svg class="c-card__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="18" height="7" x="3" y="3" rx="1"/>
                                    <rect width="9" height="7" x="3" y="14" rx="1"/>
                                    <rect width="5" height="7" x="16" y="14" rx="1"/>
                                </svg>
                        </div>
                        <h3 class="c-card__title-service">LP・バナー制作</h3>
                        <p class="c-card__text">商品やサービスの魅力を伝えるランディングページやバナーを制作します。</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section id="works" class="p-works l-section scroll-area">
        <div class="container">
            <h2 class="c-section-title">WORKS</h2>

            <div class="scroll-inner">
                <ul class="p-works__list c-fade-in">

                    <?php
                    $args = [
                        'post_type' => 'works',
                        'posts_per_page' => -1
                    ];
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>

                            <li class="p-works__item">
                                <a href="<?php the_permalink(); ?>" class="c-card c-card--works">

                                    <div class="c-card__img-wrap <?php if (get_field('is_banner')) echo 'is-banner'; ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/works/novatech.png" alt="架空のコーポレートサイトのサムネイル">
                                        <?php endif; ?>
                                    </div>

                                    <h3 class="c-card__title"><?php the_title(); ?></h3>
                                    <p class="c-card__text">
                                        <?php if (get_field('description')) : ?>
                                            <?php echo get_field('description'); ?><br>
                                        <?php endif; ?>

                                        <?php if (get_field('tech')) : ?>
                                            <?php echo get_field('tech'); ?>
                                        <?php endif; ?>
                                    </p>

                                    <span class="c-btn-more">
                                        <span class="c-btn-more__inner">
                                            <span class="c-btn-more__text">More</span>
                                        </span>
                                    </span>
                                </a>
                            </li>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </ul>

                <div class="scroll-dots">
                    <button class="dot is-active" aria-label="スライド1へ"></button>
                    <button class="dot" aria-label="スライド2へ"></button>
                    <button class="dot" aria-label="スライド3へ"></button>
                </div>
            </div>
        </div>
        <div class="p-works__nav">
            <button class="nav-btn prev" aria-label="前のスライドへ"></button>
            <button class="nav-btn next" aria-label="次のスライドへ"></button>
        </div>
    </section>

    <section id="flow" class="p-flow l-section">
        <div class="container">
            <h2 class="c-section-title">FLOW</h2>

            <ul class="p-flow__list">
                <li class="p-flow__item">
                    <div class="p-flow__step-number">01</div>

                    <h3 class="p-flow__title">相談</h3>
                    <p class="p-flow__text">ご要望やご予算をヒアリング</p>
                </li>
                <li class="p-flow__item">
                    <div class="p-flow__step-number">02</div>

                    <h3 class="p-flow__title">見積もり</h3>
                    <p class="p-flow__text">お見積りとスケジュール提示</p>
                </li>
                <li class="p-flow__item">
                    <div class="p-flow__step-number">03</div>

                    <h3 class="p-flow__title">制作</h3>
                    <p class="p-flow__text">デザイン・コーディングを実施</p>
                </li>
                <li class="p-flow__item">
                    <div class="p-flow__step-number">04</div>

                    <h3 class="p-flow__title">確認・修正</h3>
                    <p class="p-flow__text">お客様のフィードバックに対応</p>
                </li>
                <li class="p-flow__item">
                    <div class="p-flow__step-number">05</div>

                    <h3 class="p-flow__title">納品</h3>
                    <p class="p-flow__text">サイト公開・運用サポート</p>
                </li>
            </ul>
        </div>
    </section>

    <section id="about" class="p-about l-section">
        <div class="container">
            <h2 class="c-section-title">ABOUT</h2>

            <div class="p-about__inner">
                <div class="p-about__image">
                    <?php $about_image = get_field('about_image'); ?>
                    <?php if ($about_image) : ?>
                        <img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>">
                    <?php endif; ?>
                </div>

                <div class="p-about__content">
                    <?php $about_text = get_field('about_text'); ?>
                    <?php if ($about_text) : ?>
                        <p class="p-about__text">
                            <?php echo nl2br(esc_html($about_text)); ?>
                        </p>
                    <?php endif; ?>

                    <div class="p-about__skills">
                        <h3 class="p-about__skills-title">【Skills】</h3>

                        <?php $about_skills = get_field('about_skills'); ?>
                        <?php if ($about_skills) : ?>
                            <p class="p-about__skills-list">
                                <?php echo esc_html($about_skills); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="p-contact">
        <div class="p-contact__bg">
            <video class="p-contact__video" autoplay muted loop playsinline preload="none">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/img/ripple.mp4" type="video/mp4">
            </video>
        </div>

        <div class="p-contact__inner">
            <div class="container">
                <h2 class="c-section-title">CONTACT</h2>

                <?php echo do_shortcode('[contact-form-7 id="8cc8aef" title="コンタクトフォーム 1"]'); ?>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>