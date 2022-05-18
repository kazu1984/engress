<div class="p-related">
  <h2 class="p-related__title c-aside-title">関連記事</h2>
  <?php
  $categories = get_the_category($post->ID);
  $category_id = array();
  foreach ($categories as $category) :
    array_push($category_id, $category->cat_ID);
  endforeach;
  $args = array(
    'post_type' => 'post',
    'post__not_in' => array($post->ID),
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'category__in' => $category_id,
  );
  $wp_query = new WP_Query($args);
  ?>
  <?php if ($wp_query->have_posts()) : ?>
    <ul class="p-related__items">
      <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <li class="p-related__item">
          <a href="<?php the_permalink(); ?>" class="p-media-related c-media">
            <div class="p-media-related__head c-media__head">
              <figure class="p-media-related__img c-media__img">
                <img src="<?php echo get_eyecatch_with_default()[0] ?>" alt="<?php echo get_eyecatch_alt() ?>">
              </figure>
            </div>
            <div class="p-media-related__body c-media__body">
              <h3 class="p-media-related__title c-media__title"><?php echo get_post_title(get_the_title()); ?></h3>
            </div>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php else : ?>
    <p class="p-related__message">関連記事はありません</p>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</div>