<?php get_header(); ?>

<main>

  <div class="l-404 p-404">
    <div class="l-inner">
      <p class="p-404__title">404 <span> Not Found...</span></p>
      <p class="p-404__text">お探しのページは見つかりませんでした。</p>
      <div class="p-404__button c-button-wrapper">
        <a href="<?php echo esc_url(home_url()) ?>" class="c-button c-button--blue c-slide-anime"><span>TOPへ戻る</span></a>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>