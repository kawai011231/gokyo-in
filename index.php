<?php get_header(); ?>
<main>
        <div class="l-container">
          <p class="top_text top_text_ja">
          キャッチコピーが入ります
        </p>
          <div class="subpage_top_wrap">
          <div class="subpage_top_img_box">
            <h1 class="subpage_top_title section_title subpage_blog_title "># 越前おろしそばブログ</h1>
            <div class="subpage_top_img blog_shadow">
              <img src="<?= get_template_directory_uri(); ?>/img/ov_overview.png" alt="">
            </div>
          </div>
          <div class="subpage_top_text_box blog_shadow">
            <p>御蕎印に関することはもちろん、越前おろしそばに関すること、福井県に関すること、などを発信していきます！おろしそばや福井をあまり知らない方が驚くような情報も随時発信していきます！</p>
          </div>

        </div>
          <div class="filter" id="js-filter">
            <ul class="filter-cond blog_filter_cond">
              <li>
                <input class="blog_input" type="checkbox" value="蕎麦" id="input1" />
                <label id="label1" for="input1">蕎麦</label>
              </li>
              <li>
                <input class="blog_input" type="checkbox" value="こんにちは" id="input2" />
                <label id="label2" for="input2">こんにちは</label>
              </li>
              <li>
                <input class="blog_input" type="checkbox" value="おはようございます" id="input3" />
                <label id="label3" for="input3">おはようございます</label>
              </li>
              <li>
                <input class="blog_input" type="checkbox" value="いただきます" id="input4" />
                <label id="label4" for="input4">いただきます</label>
              </li>
              <li>
                <input class="blog_input" type="checkbox" value="いただきます" id="input5" />
                <label id="label5" for="input5">いただきます</label>
              </li>
              <li>
                <input class="blog_input" type="checkbox" value="いただきます" id="input6" />
                <label id="label6" for="input6">いただきます</label>
              </li>
              <!-- /.filter-cond -->
            </ul>
            <ul class="blog_card_list">
            <?php $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 10 ) ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="blog_card_element">
                  <a href="<?php the_permalink(); ?>">
                    <h3 class="blog_card_title">
                    <?php the_title(); ?>
                    </h3>
                  </a>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full'); ?>
                  </a>
                    <div class="blog_category"><?php the_category(); ?></div>
                  <a href="<?php the_permalink(); ?>">
                    <p class="blog_text">
                    <?php
if ( mb_strlen( $post->post_content, 'UTF-8' ) > 100 ) {
  $content = mb_substr( strip_tags( $post->post_content ), 0, 100, 'UTF-8' );
  echo $content . '…';
} else {
  echo strip_tags( $post->post_content );
}
?>
                    </p>
                  </a>
                  <a href="<?php the_permalink(); ?>">
                    <div class="blog_bun">
                      <img src="<?= get_template_directory_uri(); ?>/img/arrow.png" alt="" />
                    </div>
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