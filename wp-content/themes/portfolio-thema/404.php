<?php get_header(); ?>

<main class="l-main p-404">
  <div class="p-404__inner container">

    <div class="p-404__content c-fade-in">

      <p class="p-404__sub">404 ERROR</p>

      <h1 class="p-404__title">
        Not Found
      </h1>

      <p class="p-404__text">
        お探しのページは見つかりませんでした。<br>
        ページが移動または削除された可能性があります。
      </p>

      <div class="p-404__buttons">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn">
          TOPへ戻る
        </a>

        <a href="<?php echo esc_url(home_url('/#works')); ?>" class="c-btn c-btn--line">
          WORKSを見る
        </a>
      </div>

    </div>

  </div>

  <!-- 背景装飾 -->
  <div class="p-404__bg"></div>

</main>

<?php get_footer(); ?>