<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=“robots” content=“noindex”>
  <meta name="format-detection" content="telephone=no">

  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description') ?>">
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/common/icon.jpg' ?>">

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <div class="l-container">

    <header class="l-header p-header">
      <div class="p-header__inner">
        <div class="p-header__menu">
          <div class="p-header__logo">
            <a href="<?php echo esc_url(home_url()) ?>">
              <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/common/logo02.png' ?>" alt="engressのロゴ">
            </a>
          </div>
          <nav class="p-header__nav">
            <ul class="p-header__items">
              <li class="p-header__item">
                <a href="<?php echo esc_url(home_url()) ?>" class="c-menu-link c-menu-link--header">ホーム</a>
              </li>
              <li class="p-header__item">
                <a href="#" class="c-menu-link c-menu-link--header">お知らせ</a>
              </li>
              <li class="p-header__item">
                <a href="#" class="c-menu-link c-menu-link--header">ブログ</a>
              </li>
              <li class="p-header__item">
                <a href="#" class="c-menu-link c-menu-link--header">コース・料金</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="p-header__info">
          <div class="p-header__tel-info">
            <p class="p-header__time">平日08:00~20:00</p>
            <div class="p-header__tel">
              <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/common/tel01.png' ?>" alt="電話マーク">
              <p class="p-header__number">0123-456-7890</p>
            </div>
          </div>
          <div class="p-header__buttons">
            <div class="p-header__request c-button-wrapper">
              <a href="#" class="c-button c-slide-anime"><span>資料請求</span></a>
            </div>
            <div class="p-header__contact c-button-wrapper">
              <a href="#" class="c-button c-button--blue c-slide-anime"><span>お問い合わせ</span></a>
            </div>
          </div>
        </div>
        <button type="button" class="p-header__hamburger c-hamburger js-hamburger" aria-controls="p-drawer" aria-expanded="false">
          <span class="c-hamburger__line">
            <span class="u-visually-hidden">
              メニューを開閉する
            </span>
          </span>
        </button>
      </div>
      <div class="p-header__drawer p-drawer js-drawer" aria-hidden="true" data-click="false">
        <ul class="p-drawer__items">
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">ホーム</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">お知らせ</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">ブログ</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo esc_url(home_url()) ?>" class="p-drawer__link">コース・料金コース・料金コース・料金</a>
          </li>
          <li class="p-drawer__item p-drawer__item--button">
            <a href="#" class="c-button">資料請求</a>
          </li>
          <li class="p-drawer__item p-drawer__item--button">
            <a href="#" class="c-button c-button--blue">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </header>