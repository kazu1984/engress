<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb') ?>

<main>

  <div class="l-content l-inner">
    <div class="p-single">
      <div class="p-single__inner">

        <?php if (is_singular('post')) : ?>
          <div class="p-single__main">
          <?php else : ?>
            <div class="p-single__main p-single__main--news">
            <?php endif; ?>

            <div class="p-single__top">

              <?php if (is_singular('post')) : ?>
                <?php $category = get_the_category(); ?>
                <span class="p-single__category c-badge c-badge--single"><?php echo $category[0]->cat_name ?></span>
              <?php endif; ?>

              <h1 class="p-single__title"><?php echo get_post_title(get_the_title()); ?></h1>

              <div class="p-single__meta">
                <?php if (is_singular('post')) : ?>
                  <ul class="p-single__sns-items">
                    <li class="p-single__sns-item">
                      <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                    </li>
                    <li class="p-single__sns-item">
                      <div class="p-single__twitter">
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                      </div>
                    </li>
                  </ul>
                <?php endif; ?>

                <time class="p-single__date" datetime="<?php the_time('Y.m.j'); ?>"><?php the_time('Y-m-j'); ?></time>
              </div>

              <?php if (is_singular('post')) : ?>
                <figure class="p-single__img">
                  <img src="<?php echo get_eyecatch_with_default()[0] ?>" alt="<?php echo get_eyecatch_alt() ?>">
                </figure>
              <?php endif; ?>


              <?php if (is_singular('post')) : ?>
                <div class="p-single__content c-content">
                <?php else : ?>
                  <div class="p-single__content p-single__content--news c-content">
                  <?php endif; ?>

                  <?php the_content(); ?>
                  </div>
                </div>
                <?php if (is_singular('post')) : ?>

                  <aside class="p-single__bottom">
                    <div class="p-single__pickup p-pickup">
                      <h2 class="p-pickup__title">?????????????????????</h2>
                      <?php
                      $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post__not_in' => array($post->ID),
                        'tag_id' => 7,  // 'pickup'
                      );
                      $query = new WP_Query($args);
                      ?>
                      <?php if ($query->have_posts()) : ?>
                        <ul class="p-pickup__items">
                          <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <li class="p-pickup__item">
                              <a href="<?php the_permalink(); ?>" class="p-media-pickup c-media c-media--sp-col">
                                <div class="p-media-pickup__head c-media__head">
                                  <figure class="p-media-pickup__img c-media__img">
                                    <img src="<?php echo get_eyecatch_with_default()[0] ?>" alt="<?php echo get_eyecatch_alt() ?>">
                                  </figure>
                                  <?php $category = get_the_category(); ?>
                                  <span class="p-media-pickup__category c-media__category c-badge"><?php echo $category[0]->cat_name ?></span>
                                </div>
                                <div class="p-media-pickup__body c-media__body">
                                  <time class="p-media-pickup__date c-media__date" datetime="<?php the_time('Y.m.j'); ?>"><?php the_time('Y-m-j'); ?></time>
                                  <h3 class="p-media-pickup__title c-media__title"><?php echo get_post_title(get_the_title()); ?></h3>
                                </div>
                              </a>
                            </li>
                          <?php endwhile; ?>
                        </ul>
                      <?php endif; ?>
                      <?php wp_reset_postdata(); ?>
                    </div>
                  </aside>
                <?php endif; ?>
            </div>

            <?php if (is_singular('post')) : ?>
              <aside class="p-single__aside p-aside">
                <ul class="p-aside__items">
                  <li class="p-aside__item">
                    <?php get_template_part('template-parts/aside-related') ?>
                  </li>
                  <li class="p-aside__item">
                    <?php get_template_part('template-parts/aside-category') ?>
                  </li>
                </ul>
              </aside>
            <?php endif; ?>
            </div>

          </div>
      </div>

      <div class="l-single-cta">
        <?php get_template_part('template-parts/template-cta', null); ?>
      </div>

</main>

<?php get_footer(); ?>