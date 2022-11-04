<?php get_header(); ?> 
<main>
        <div class="l-container">
          <p class="top_text top_text_ja">
          キャッチコピーが入ります
        </p>
          <div class="subpage_top_wrap">
          <div class="subpage_top_img_box">
            <h1 class="subpage_top_title section_title subpage_store_title "># 御蕎印参加店舗紹介</h1>
            <div class="subpage_top_img store_shadow">
              <img src="<?= get_template_directory_uri(); ?>/img/ov_overview.png" alt="">
            </div>
          </div>
          <div class="subpage_top_text_box store_shadow">
            <p>御蕎印に参加している店舗をご紹介します。ここでは各店舗の御蕎印デザインもご紹介しますので、是非あなたの気になる店舗を見つけてください。また既にお気に入りの店舗がある方はその店舗がどんなデザインなのか是非ご確認ください。<br>
            尚、参加店舗は順次増えていく予定です（お知らせやブログにて発表予定）。その度に集める楽しさ、巡る奥深さが増していきます。
          </p>
          </div>
        </div>
        <div class="store-categorymap-wrap">
          <img src="<?= get_template_directory_uri(); ?>/img/store-categorymap.png" alt="" class="store-categorymap">
        </div>
          <div class="filter" id="js-filter">
            <div class="check_wrap">
              <ul class="filter-cond store_filter_cond">
                <li>
                  <span><label for="input1">あわら市</label></span>
                  <input type="checkbox" value="あわら市" id="input1" />
                  <label class="store_label" id="label1" for="input1" class="check_label"> </label>
                </li>
                <li>
                  <span><label for="input2">坂井市</label></span>
                  <input type="checkbox" value="坂井市" id="input2" />
                  <label class="store_label" id="label2" for="input2"> </label>
                </li>
                <li>
                  <span><label for="input3">永平寺町</label></span>
                  <input type="checkbox" value="永平寺町" id="input3" />
                  <label class="store_label" id="label3" for="input3"></label>
                </li>
                <li>
                  <span><label for="input4">勝山市</label></span>
                  <input type="checkbox" value="勝山市" id="input4" />
                  <label class="store_label" id="label4" for="input4"></label>
                </li>
                <li>
                  <span><label for="input5">福井市</label></span>
                  <input type="checkbox" value="福井市" id="input5" />
                  <label class="store_label" id="label5" for="input5"> </label>
                </li>
                <li>
                  <span><label for="input6">大野市</label></span>
                  <input type="checkbox" value="大野市" id="input6" />
                  <label class="store_label" id="label6" for="input6"> </label>
                </li>
                <li>
                  <span><label for="input7">鯖江市</label></span>
                  <input type="checkbox" value="鯖江市" id="input7" />
                  <label class="store_label" id="label7" for="input7"> </label>
                </li>
                <li>
                  <span><label for="input8">越前町</label></span>
                  <input type="checkbox" value="越前町" id="input8" />
                  <label class="store_label" id="label8" for="input8"> </label>
                </li>
                <li>
                  <span><label for="input9">越前市</label></span>
                  <input type="checkbox" value="越前市" id="input9" />
                  <label class="store_label" id="label9" for="input9"> </label>
                </li>
                <li>
                  <span><label for="input10">池田町</label></span>
                  <input type="checkbox" value="池田町" id="input10" />
                  <label class="store_label" id="label10" for="input10"> </label>
                </li>
                <li>
                  <span><label for="input11">南越前町</label></span>
                  <input type="checkbox" value="南越前町" id="input11" />
                  <label class="store_label" id="label11" for="input11"> </label>
                </li>
                <li>
                  <span><label for="input12">敦賀市</label></span>
                  <input type="checkbox" value="敦賀市" id="input12" />
                  <label class="store_label" id="label12" for="input12"> </label>
                </li>
                <li>
                  <span><label for="input13">美浜町</label></span>
                  <input type="checkbox" value="美浜町" id="input13" />
                  <label class="store_label" id="label13" for="input13"> </label>
                </li>
                <li>
                  <span><label for="input14">若狭町</label></span>
                  <input type="checkbox" value="若狭町" id="input14" />
                  <label class="store_label" id="label14" for="input14"> </label>
                </li>
                <li>
                  <span><label for="input15">小浜市</label></span>
                  <input type="checkbox" value="小浜市" id="input15" />
                  <label class="store_label" id="label15" for="input15"> </label>
                </li>
                <li>
                  <span><label for="input16">おおい町</label></span>
                  <input type="checkbox" value="おおい町" id="input16" />
                  <label class="store_label" id="label16" for="input16"> </label>
                </li>
                <li>
                  <span><label for="input17">高浜市</label></span>
                  <input type="checkbox" value="高浜市" id="input17" />
                  <label class="store_label" id="label17" for="input17"> </label>
                </li>
              </ul>
              <ul class="filter-cond store_filter_cond">
                <li>
                  <span><label for="input18">十割そば</label></span>
                  <input type="checkbox" value="十割そば" id="input18" />
                  <label class="store_label" id="label18" for="input18"> </label>
                </li>
                <li>
                  <span><label for="input19">二八そば</label></span>
                  <input type="checkbox" value="二八そば" id="input19" />
                  <label class="store_label" id="label19" for="input19"> </label>
                </li>
                <li>
                  <span><label for="input20">更科そば</label></span>
                  <input type="checkbox" value="更科そば" id="input20" />
                  <label class="store_label" id="label20" for="input20"> </label>
                </li>
                <li>
                  <span><label for="input21">いなかそば</label></span>
                  <input type="checkbox" value="いなかそば" id="input21" />
                  <label class="store_label" id="label21" for="input21"> </label>
                </li>
                <li>
                  <span><label for="input22">変わりそば</label></span>
                  <input type="checkbox" value="変わりそば" id="input22" />
                  <label class="store_label" id="label22" for="input22"> </label>
                </li>
                <li>
                  <span><label for="input23">茶そば</label></span>
                  <input type="checkbox" value="茶そば" id="input23" />
                  <label class="store_label" id="label23" for="input23"> </label>
                </li>
                <li>
                  <span><label for="input24">寒ざらしそば</label></span>
                  <input type="checkbox" value="寒ざらしそば" id="input24" />
                  <label class="store_label" id="label24" for="input24"> </label>
                </li>
                <li>
                  <span><label for="input25">韃靼そば</label></span>
                  <input type="checkbox" value="韃靼そば" id="input25" />
                  <label class="store_label" id="label25" for="input25"> </label>
                </li>
                <!-- /.filter-cond -->
              </ul>
            </div>
            <ul class="store_list">
              <?php $the_query = new WP_Query( array( 'post_type' => 'shop', 'posts_per_page' => 21 ) ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php
  $cat = get_the_category();
  $cat = $cat[0];
?>
                <li class="store_element" data-filter-key="<?php echo $cat->name; ?>">
                  <a href="<?php the_permalink(); ?>" class="store_link">
                    <div class="shop_name_wrap">
                      <h3 class="shop_name"><?php the_title(); ?></h3>
                      <p class="shop_text">
                      <?php
if ( mb_strlen( $post->post_content, 'UTF-8' ) > 20 ) {
  $content = mb_substr( strip_tags( $post->post_content ), 0, 20, 'UTF-8' );
  echo $content . '…';
} else {
  echo strip_tags( $post->post_content );
}
?>
                      </p>
                      <ul class="shop_tag_list">
  <?php
    // カテゴリーをリンクで繰り返し表示
    $categories = get_the_category();
    foreach( $categories as $cat ):
  ?>
  <li class="shop_tag"><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></li>
  <?php endforeach;?>
</ul>
                    </div>
                    <?php the_post_thumbnail('full'); ?>
                    <img
                      src="<?= get_template_directory_uri(); ?>/img/store_detail_btn_img.png"
                      alt=""
                      class="store_detail_btn_img"
                    />
                  </a>
                </li>
                <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php endif; ?>
              </ul>
          </div>
        </div>
      </main>
<?php get_footer(); ?>