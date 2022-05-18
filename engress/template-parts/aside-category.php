<div class="p-category">
  <h2 class="p-category__title c-aside-title">カテゴリー</h2>
  <?php
  $args = array(
    'parent' => 0,
    'orderby' => 'term_order',
    'order' => 'ASC'
  );
  $categories = get_categories($args);
  ?>
  <ul class="p-category__items">
    <?php foreach ($categories as $category) : ?>
      <li class="p-category__item">
        <a href="<?php echo get_category_link($category->term_id); ?>">・<?php echo $category->name; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>