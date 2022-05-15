<?php get_header(); ?>

<div class="l-page-header p-page-header" data-page="contact">
  <h1 class="p-page-header__title">お問い合わせ・資料請求</h1>
</div>

<?php get_template_part('template-parts/breadcrumb') ?>

<main>
  <div class="l-contact p-contact">
    <div class="l-inner">
      <p class="p-contact__text">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
      <div class="p-contact__form p-form">
        <?php echo do_shortcode('[mwform_formkey key="40"]'); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>