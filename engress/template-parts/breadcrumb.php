<?php if (is_single() || is_page('thanks')) { ?>
  <div class="l-breadcrumb p-breadcrumb">
  <?php  } else { ?>
    <div class="p-breadcrumb">
    <?php } ?>
    <div class="l-inner p-breadcrumb__inner">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div>
    </div>