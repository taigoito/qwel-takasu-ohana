<?php get_header();
  /**
   * Main
   * フロントページでは、main直下に各セクションが入る
   */
  ?>
  <main id="main" class="main">
    <?php
    /**
     * フロントページでは .section を使う (sass/objects/projects/_sections.scss)
     * 特殊な処理は .--hero, .--access などで対応
     */
    // セクション毎のテンプレート読み込み
    $sections = \Takasuohana::get_sections();
    foreach ($sections as $section => $type) {
      // 表示の有無をチェック
      $relational_id = \Takasuohana::get_data($section, 'relational_id');
      if ($relational_id) get_template_part('section-parts/' . $section);
    }
    ?>
  </main><!-- #main -->
<?php get_footer();
