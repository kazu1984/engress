<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb') ?>

<main>

  <div class="l-content l-inner">
    <div class="p-single">
      <div class="p-single__top">
        <div class="p-single__post">
          <?php $category = get_the_category(); ?>
          <span class="p-single__category c-badge c-badge--single"><?php echo $category[0]->cat_name ?></span>
          <h1 class="p-single__title"><?php echo get_post_title(get_the_title()); ?></h1>
          <div class="p-single__meta">
            <time class="p-single__date" datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y-n-j'); ?></time>
          </div>
          <figure class="p-single__img">
            <img src="<?php echo get_eyecatch_with_default()[0] ?>" alt="<?php echo get_eyecatch_alt() ?>">
          </figure>
          <div class="p-single__content c-content">
            <?php the_content(); ?>
          </div>
        </div>
        <aside class="p-single__aside"></aside>
      </div>
      <div class="p-single__bottom">おすすめ記事を表示する</div>
    </div>
  </div>

</main>

<?php get_footer(); ?>