<?php get_header(); ?>

<div class="l-page-header p-page-header" data-page="blog">
  <h1 class="p-page-header__title">ブログ</h1>
</div>

<?php get_template_part('template-parts/breadcrumb') ?>

<main>

  <div class="l-content l-inner">

    <h2 class="c-section-title">新着一覧</h2>

    <?php
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'post',
      'paged' => $paged,
      'ignore_sticky_posts' => '1'
    );
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
      <ul class="l-blog-list p-blog-list">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <li class="p-blog-list__item">
            <article>
              <a href="<?php the_permalink(); ?>" class="p-media-blog c-media c-media--sp-col">
                <div class="p-media-blog__head c-media__head">
                  <figure class="p-media-blog__img c-media__img">
                    <img src="<?php echo get_eyecatch_with_default()[0] ?>" alt="<?php echo get_eyecatch_alt() ?>">
                  </figure>
                  <?php $category = get_the_category(); ?>
                  <span class="p-media-blog__category c-media__category c-badge"><?php echo $category[0]->cat_name ?></span>
                </div>
                <div class="p-media-blog__body c-media__body">
                  <time class="p-media-blog__date c-media__date" datetime="<?php the_time('Y.n.j'); ?>"><?php the_time('Y-n-j'); ?></time>
                  <h3 class="p-media-blog__title c-media__title"><?php echo get_post_title(get_the_title()); ?></h3>
                  <p class="p-media-blog__text c-media__text"><?php the_excerpt(); ?></p>
                </div>
              </a>
            </article>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php else : ?>
      <p class="p-blog-list__message">ブログ記事はありません</p>
    <?php endif; ?>

    <?php if (function_exists('wp_pagenavi')) : ?>
      <div class="l-blog-pagenavi">
        <?php wp_pagenavi(array('wrapper_class' => 'c-pagenavi', 'query' => $the_query));
        ?>
      </div>
    <?php endif; ?>

  </div>

</main>

<?php get_footer(); ?>