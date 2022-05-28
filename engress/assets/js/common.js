jQuery(function ($) {
  //------------------------------------------
  // 横スクロール発見用
  // 提出時は消去
  //------------------------------------------
  var w = $(window).innerWidth();
  console.log("画面幅は..." + w);
  $("*").each(function (index, element) {
    // $(element).attr("style", "outline:1px solid red");
    if (w < $(element).innerWidth()) {
      console.log(element);
    }
  });
  // -----------------------------------------
  // -----------------------------------------
  // -----------------------------------------
  // -----------------------------------------

  /**
   * スクロールヒントの表示
   */
  if ($(".js-scrollable").length) {
    new ScrollHint(".js-scrollable", {
      i18n: {
        scrollable: "スクロールします",
        scrollHintIconAppendClass: "scroll-hint-icon-white",
      },
    });
  }

  /**
   * ハンバーガーメニュー クリック時
   */
  $(".js-hamburger").click(function () {
    $("body").toggleClass("fixed");

    if ($(this).attr("aria-expanded") == "false") {
      $(this).attr("aria-expanded", true);
      $(".js-drawer").attr("aria-hidden", false);
      $(".js-drawer").attr("data-click", true);
    } else {
      $(this).attr("aria-expanded", false);
      $(".js-drawer").attr("aria-hidden", true);
      $(".js-drawer").attr("data-click", false);
    }
  });

  /**
   * アコーディオン クリック時
   */
  $(window).on("load", function () {
    $(".js_answer").each(function (index, element) {
      const height = element.scrollHeight;
      element.style.setProperty("--max-height", height + "px");
    });
  });
  $(".js_accordion").on("click", function () {
    $(this).toggleClass("is_active");
    $(this).next().toggleClass("is_open");
  });

  /**
   * スムーススクロール
   */
  $(document).on("click", 'a[href*="#"]', function () {
    let time = 400;
    let header = $("header").innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $("html,body").animate({ scrollTop: targetY }, time, "swing");
    return false;
  });
});
