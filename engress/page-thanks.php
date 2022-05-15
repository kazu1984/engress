<?php get_header(); ?>

<div class="l-thanks-breadcrumb">
  <?php get_template_part('template-parts/breadcrumb') ?>
</div>

<main>
  <div class="l-inner">
    <?php echo do_shortcode('[mwform_formkey key="40"]'); ?>
    <div class="l-thanks p-thanks">
      <p class="p-thanks__text">お問い合わせいただきありがとうございます<br>
          内容を確認した後、担当者よりご連絡いたします</p>
      <div class="p-thanks__link">
        <a href="<?php echo esc_url(home_url()) ?>" class="c-link c-link--blue">ホームへ戻る</a>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>