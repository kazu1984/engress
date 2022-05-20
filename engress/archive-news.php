<?php get_header(); ?>

<div class="l-page-header p-page-header" data-page="news">
  <h1 class="p-page-header__title">お知らせ</h1>
</div>

<?php get_template_part('template-parts/breadcrumb') ?>

<main>

  <div class="l-content l-inner">

    <h2 class="c-section-title">お知らせ一覧</h2>

    <?php if (have_posts()) : ?>
      <ul class="l-news-list p-news-list">
        <?php while (have_posts()) : the_post(); ?>
          <li class="p-news-list__item">
            <article>
              <a href="#" class="p-news-list__link">
                <time class="p-news-list__date" datetime="<?php the_time('Y.m.j'); ?>"><?php the_time('Y-m-j'); ?></time>
                <h3 class="p-news-list__title"><?php echo get_post_title(get_the_title()); ?></h3>
              </a>
            </article>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
    </ul>

    <?php if (function_exists('wp_pagenavi')) : ?>
      <div class="l-blog-pagenavi">
        <?php wp_pagenavi(array('wrapper_class' => 'c-pagenavi'));
        ?>
      </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

  </div>

</main>

<?php get_footer(); ?>