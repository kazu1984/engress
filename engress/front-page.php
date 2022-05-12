<?php get_header(); ?>

<main>

  <section class="l-mv p-mv">
    <div class="l-inner p-mv__inner">
      <h1 class="p-mv__title">TOEFL対策はEngress</h1>
      <p class="p-mv__text">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
      <div class="p-mv__button c-button-wrapper">
        <a href="#" class="c-button c-button--large c-slide-anime"><span>資料請求</span></a>
      </div>
      <div class="p-mv__link">
        <a href="#" class="c-link">お問い合わせ</a>
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
            <a href="#" class="c-button c-button--transparent c-slide-anime"><span>料金を見てみる</span></a>
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
            <h3 class="p-flow__title">学習プランの提供</h3>
            <p class="p-flow__text">目標達成のために最適な学習プランをご提案致します。</p>
          </div>
        </li>
        <li class="p-flow__item">
          <span class="p-flow__number">04</span>
          <div class="p-flow__contents">
            <h3 class="p-flow__title">入会</h3>
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

  <div class="l-top-cta">
    <?php get_template_part('template-parts/template-cta', null); ?>
  </div>

</main>

<?php get_footer(); ?>