<?php get_header(); ?>

<main>

  <section class="l-mv p-mv">
    <div class="l-inner p-mv__inner">
      <h1 class="p-mv__title">TOEFL対策はEngress</h1>
      <p class="p-mv__text">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
      <div class="p-mv__button c-button-wrapper">
        <a href="<?php echo esc_url(home_url('contact')) ?>" class="c-button c-button--large c-slide-anime"><span>資料請求</span></a>
      </div>
      <div class="p-mv__link">
        <a href="<?php echo esc_url(home_url('contact')) ?>" class="c-link">お問い合わせ</a>
      </div>
    </div>
  </section>

  <section class="p-copy">
    <div class="l-inner p-copy__inner">
      <h2 class="c-section-title c-section-title--white">TOEFL学習でこんな悩みありませんか？</h2>
      <ul class="p-copy__worries">
        <li class="p-copy__worry">勉強の習慣が<br class="u-br-pc">身についていない</li>
        <li class="p-copy__worry">勉強しているはず<br class="u-br-pc">なのに点数が伸びない</li>
        <li class="p-copy__worry">正しい勉強方法が<br class="u-br-pc">わからない</li>
      </ul>
      <div class="p-copy__box">
        <div class="p-copy__box-inner">
          <h3 class="p-copy__box-title">Engressは<br><span>TOEFLに特化したスクール</span>です</h3>
          <p class="p-copy__box-text">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br class="u-br-pc">TOEFLの苦手分野を克服します。</p>
        </div>
      </div>
    </div>
  </section>

  <section class="l-feature p-feature">
    <div class="l-inner">
      <h2 class="c-section-title">TOEFL対策に特化した<span>Engress3つの強み</span></h2>
      <ul class="p-feature__items">
        <li class="p-feature__item">
          <div class="p-feature__content">
            <span class="p-feature__label">特長 1</span>
            <h3 class="p-feature__title">TOEFLに最適化された<br class="u-br-pc">無駄のないカリキュラム</h3>
            <p class="p-feature__text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
          </div>
          <figure class="p-feature__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/top/feature01.jpg" alt="engressの特徴画像">
          </figure>
        </li>
        <li class="p-feature__item">
          <div class="p-feature__content">
            <span class="p-feature__label">特長 2</span>
            <h3 class="p-feature__title">日本人指導歴10年以上の<br class="u-br-pc">経験豊富な講師陣</h3>
            <p class="p-feature__text">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
          </div>
          <figure class="p-feature__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/top/feature02.jpg" alt="engressの特徴画像">
          </figure>
        </li>
        <li class="p-feature__item">
          <div class="p-feature__content">
            <span class="p-feature__label">特長 3</span>
            <h3 class="p-feature__title">平均3ヶ月でTOEFL iBT20点アップ</h3>
            <p class="p-feature__text">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
          </div>
          <figure class="p-feature__img">
            <!-- <img src="https://placehold.jp/3d4070/ffffff/550x1500.png" alt=""> -->
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/top/feature03.jpg" alt="engressの特徴画像">
          </figure>
        </li>
      </ul>
    </div>
  </section>

  <div class="l-price p-price">
    <div class="l-inner p-price__inner">
      <div class="p-price__bg">
        <div class="p-price__content">
          <h3 class="p-price__title">Engressの料金プランは<span>こちら</span></h3>
          <div class="p-price__button c-button-wrapper">
            <a href="<?php echo esc_url(home_url('plan')) ?>" class="c-button c-button--transparent c-slide-anime"><span>料金を見てみる</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="l-case p-case">
    <div class="l-inner">
      <h2 class="c-section-title c-section-title--white">TOEFL成功事例</h2>
      <?php
      $id = get_page_by_path('case')->ID;
      $field_cnt = 5;
      ?>
      <ul class="p-case__items">
        <?php for ($i = 1; $i <= count(get_fields($id)) / $field_cnt; $i++) { ?>
          <li class="p-case__item">
            <h3 class="p-case__title"><?php the_field('title' . $i, $id); ?></h3>
            <div class="p-case__img">
              <img src="<?php the_field('image' . $i, $id); ?>" alt="成功事例者の顔写真">
            </div>
            <div class="p-case__job-name">
              <span class="p-case__job"><?php the_field('job' . $i, $id); ?></span>
              <span class="p-case__name"><?php the_field('name' . $i, $id); ?></span>
            </div>
            <p class="p-case__result"><?php the_field('result' . $i, $id); ?></p>
          </li>
        <?php } ?>
      </ul>
    </div>
  </section>

  <section class="l-flow p-flow">
    <div class="l-inner">
      <h2 class="c-section-title">ご利用の流れ</h2>
      <ul class="p-flow__items">
        <li class="p-flow__item">
          <span class="p-flow__number">01</span>
          <div class="p-flow__contents">
            <h3 class="p-flow__title">お問い合わせ</h3>
            <p class="p-flow__text">まずはフォームまたはお電話からお申し込みください。</p>
          </div>
        </li>
        <li class="p-flow__item">
          <span class="p-flow__number">02</span>
          <div class="p-flow__contents">
            <h3 class="p-flow__title">ヒアリング</h3>
            <p class="p-flow__text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
          </div>
        </li>
        <li class="p-flow__item">
          <span class="p-flow__number">03</span>
          <div class="p-flow__contents">
            <h3 class="p-flow__title">学習プランのご提供</h3>
            <p class="p-flow__text">目標達成のために最適な学習プランをご提案致します。</p>
          </div>
        </li>
        <li class="p-flow__item">
          <span class="p-flow__number">04</span>
          <div class="p-flow__contents">
            <h3 class="p-flow__title">ご入会</h3>
            <p class="p-flow__text">お申込み完了後、レッスンがスタートします。</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="l-question p-question">
    <div class="l-inner">
      <h2 class="c-section-title">よくある質問</h2>
      <ul class="p-question__items">
        <li class="p-question__item">
          <h3 class="p-question__title js_accordion">Engressはサラリーマンでも学習を続けられるでしょうか？</h3>
          <p class="p-question__answer js_answer">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
        </li>
        <li class="p-question__item">
          <h3 class="p-question__title js_accordion">教材はオリジナルのものを使用しているのでしょうか？</h3>
          <p class="p-question__answer js_answer">はい。engressでは独自の教材をご用意させて頂いております。</p>
        </li>
        <li class="p-question__item">
          <h3 class="p-question__title js_accordion">講師に日本人はいますか？</h3>
          <p class="p-question__answer js_answer">はい。日本人も複数人おります。</p>
        </li>
        <li class="p-question__item">
          <h3 class="p-question__title js_accordion">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h3>
          <p class="p-question__answer js_answer">申し訳ございません。TOEFL以外のサポートは現在行っていません。申し訳ございません。TOEFL以外のサポートは現在行っていません。申し訳ございません。TOEFL</p>
        </li>
      </ul>
    </div>
  </section>


  <div class="l-post p-post">
    <div class="l-inner p-post__inner">
      <section class="p-post__single">
        <h2 class="c-section-title c-section-title--small u-text-left-pc">ブログ</h2>
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'ignore_sticky_posts' => '1'
        );
        $query = new WP_Query($args);
        ?>

        <?php if (have_posts()) : ?>
          <ul class="p-post__items">
            <?php while (have_posts()) : the_post(); ?>
              <li class="p-post__item">
                <a href="<?php the_permalink(); ?>" class="p-media-top c-media">
                  <div class="p-media-top__head c-media__head">
                    <figure class="p-media-top__img c-media__img">
                      <img src="<?php echo get_eyecatch_with_default()[0] ?>" alt="<?php echo get_eyecatch_alt() ?>">
                    </figure>
                    <?php $category = get_the_category(); ?>
                    <span class="p-media-top__category c-media__category c-badge"><?php echo $category[0]->cat_name ?></span>
                  </div>
                  <div class="p-media-top__body c-media__body">
                    <h3 class="p-media-top__title c-media__title"><?php echo get_post_title(get_the_title()); ?></h3>
                    <time class="p-media-top__date c-media__date" datetime="<?php the_time('Y.m.j'); ?>"><?php the_time('Y-m-j'); ?></time>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <p class="p-post__message">ブログ記事はありません</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      </section>
      <section class="p-post__info">
        <h2 class="c-section-title c-section-title--small u-text-left-pc">お知らせ</h2>
        <?php
        $args = array(
          'post_type' => 'news',
          'posts_per_page' => 3,
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()) : ?>
          <ul class="p-post__items">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
              <li class="p-post__item">
                <a href="<?php the_permalink(); ?>" class="p-news-top">
                  <time class="p-news-top__date" datetime="<?php the_time('Y-m-j'); ?>"><?php the_time('Y-m-j'); ?></time>
                  <h3 class="p-news-top__title"><?php echo get_post_title(get_the_title()); ?></h3>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php else : ?>
          <p class="p-post__message">お知らせはありません</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </section>
    </div>
  </div>

  <div class="l-top-cta">
    <?php get_template_part('template-parts/template-cta', null); ?>
  </div>

</main>

<?php get_footer(); ?>