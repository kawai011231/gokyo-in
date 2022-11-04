<?php get_header(); ?>
<main>
      <div class="l-container">
        <p class="top_text top_text_ja">
          キャッチコピーが入ります
        </p>
        <div class="subpage_top_wrap">
          <div class="subpage_top_img_box">
            <h1 class="subpage_top_title section_title subpage_ov_title "># 御蕎印プロジェクト</h1>
            <div class="subpage_top_img ov_shadow">
              <img src="<?= get_template_directory_uri(); ?>/img/ov_overview.png" alt="">
            </div>
          </div>
          <div class="subpage_top_text_box ov_shadow">
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          </div>

        </div>
        <div class="ex_charm_wrap">
          <div class="ex_charm_head">
            <div class="ov_charm_title">
              人<span class="ex_charm_title_small">と</span>人、<br>
              街<span class="ex_charm_title_small">と</span>人、<br>
              越前そば<span class="ex_charm_title_small">と</span>人<span class="ex_charm_title_small">を</span><br>
              繋げたい。</div>
          </div>
          <div class="sub_overview_card ov_overview_card">
            <p class="sub_overview_card_text_small">
              テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              テキストが入ります。
            </p>
            <img src="<?= get_template_directory_uri(); ?>/img/overview_img2.png" alt="御朱印の写真" class="overview_card_img" />
            <p class="sub_overview_card_text_large">
              福井の蕎麦の名店を巡って、御蕎印を集めよう！
            </p>
          </div>
        </div>
        <?php the_content(); ?>
  </div>
  </main>
<?php get_footer(); ?>