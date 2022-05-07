<?php wp_footer(); ?>

<footer class="l-footer p-footer">
  <div class="p-footer__body">
    <div class="l-inner p-footer__inner">
      <ul class="p-footer__items">
        <li class="p-footer__item">
          <a href="#" class="p-footer__link c-underline">ホーム</a>
        </li>
        <li class="p-footer__item">
          <a href="#" class="p-footer__link c-underline">お知らせ</a>
        </li>
        <li class="p-footer__item">
          <a href="#" class="p-footer__link c-underline">ブログ</a>
        </li>
        <li class="p-footer__item">
          <a href="#" class="p-footer__link c-underline">コース・料金</a>
        </li>
      </ul>
      <div class="p-footer__contact">
        <div class="p-footer__logo">
          <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/common/logo02.png' ?>" alt="engressのロゴ">
        </div>
        <div class="p-footer__tel">
          <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/common/tel02.png' ?>" alt="電話マーク">
          <p class="p-footer__number">0123-456-7890</p>
        </div>
        <p class="p-footer__time">平日08:00~20:00</p>
      </div>
    </div>
  </div>
  <div class="p-footer__bottom">
    <div class="l-inner">
      <p class="p-footer__copyright">&copy; 2020 Engress.</p>
    </div>
  </div>
</footer>

</body>

</html>