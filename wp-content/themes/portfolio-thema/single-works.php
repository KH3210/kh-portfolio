<?php get_header(); ?>

<main class="p-work-detail u-wrapper">
    <div class="container">

        <div class="p-work-detail__back">
            <a href="<?php echo esc_url(home_url('/#works')); ?>">← Works一覧</a>
        </div>

        <?php
        $detail_image = get_field('works_detail_image');
        ?>

        <?php
        //詳細用画像があれば表示
        if ($detail_image) : ?>
            <div class="p-work-detail__mv c-fade-in">
                <img src="<?php echo esc_url($detail_image['url']); ?>"
                    alt="<?php echo esc_attr($detail_image['alt']); ?>">
            </div>

        <?php
        ////詳細用画像がなければアイキャッチを表示
        elseif (has_post_thumbnail()) : ?>
            <div class="p-work-detail__mv p-work-detail__mv--banner c-fade-in">
                <?php the_post_thumbnail('full'); ?>
            </div>
        <?php endif; ?>

        <div class="p-work-detail__header">
            <h1 class="p-work-detail__title">
                <?php the_title(); ?></h1>

            <?php //サブタイトルが空の場合なにもしない
            $subtitle = get_field('subtitle');
            if ($subtitle) :
            ?>
                <p class="p-work-detail__subtitle">
                    <?php echo esc_html($subtitle); ?>
                </p>
            <?php endif; ?>
        </div>

        <div class="p-work-detail__content">

            <dl class="p-work-detail__list">
                <dt class="c-heading">使用ツール</dt>
                <dd><?php
                    // カスタムフィールド「tools」を取得して表示
                    echo esc_html(get_field('tools')); ?></dd>

                <dt class="c-heading">制作期間</dt>
                <dd><?php
                    // カスタムフィールド「period」を取得して表示
                    echo esc_html(get_field('period')); ?>
                </dd>
            </dl>

            <div class="p-work-detail__content-text">
                <?php the_content(); ?>
            </div>

            <?php
            $point = get_field('point');
            if ($point) :
            ?>
                <div class="p-work-detail__item">
                    <h2 class="c-heading">意識したこと</h2>
                    <p><?php echo nl2br(esc_html($point)); ?></p>
                </div>
            <?php endif; ?>

            <?php
            // カスタムフィールドのURLを取得
            $github_url = get_field('github_url');
            $demo_url = get_field('demo_url');
            ?>

            <?php
            if ($github_url) : // URLが入力されている場合のみ表示 
            ?>
                <dl class="p-work-detail__list p-work-detail__list--link">
                    <dt class="c-heading">GitHub</dt>
                    <dd>
                        <!-- esc_url()でURLをエスケープして安全に出力 -->
                        <a href="<?php echo esc_url($github_url); ?>" target="_blank" rel="noopener noreferrer">GitHubを見る</a>
                    </dd>
                </dl>
                <?php endif; ?>

                <?php if ($demo_url) : ?>
                <dl class="p-work-detail__list p-work-detail__list--link">
                    <dt class="c-heading">Site</dt>
                    <dd>
                        <a href="<?php echo esc_url($demo_url); ?>" target="_blank" rel="noopener noreferrer">
                            サイトを見る
                        </a>
                    </dd>
                </dl>
            <?php endif; ?>
        </div>

        <div class="p-work-detail__pager">

            <?php //works_category内の投稿のみリンク
            $prev = get_previous_post(false, '', 'works_category');
            $next = get_next_post(false, '', 'works_category');
            ?>
            <!-- 次の投稿へのリンク -->
            <div class="p-work-detail__next">
                <?php if ($next) : ?>
                    <a href="<?php echo get_permalink($next->ID); ?>">← BACK</a>
                <?php endif; ?>
            </div>

            <!-- Works一覧セクションへ戻るリンク -->
            <a href="<?php echo esc_url(home_url('/#works')); ?>" class="p-work-detail__number">
                一覧へ
            </a>

            <div class="p-work-detail__prev">
                <!-- 前の投稿へのリンク -->
                <?php if ($prev) : ?>
                    <a href="<?php echo get_permalink($prev->ID); ?>">NEXT →</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>