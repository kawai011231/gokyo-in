<?php get_header(); ?>
<main>
        <div class="l-container">
          <div class="subpage_top_wrap">
            <div class="subpage_top_img_box">
              <h1 class="subpage_top_title section_title subpage_ex_title">
                # 越前そばとは
              </h1>
              <div class="subpage_top_img ex_shadow">
                <img src="<?= get_template_directory_uri(); ?>/img/ex_overview.png" alt="" />
              </div>
            </div>
            <div class="subpage_top_text_box ex_shadow">
              <p>
                そばが美味しい都道府県ランキングで2年連続第一位に輝いた福井県。その福井県を代表する郷土料理でもある「越前おろしそば」。<br>
                大根おろしがセットになったぶっかけスタイルで食す「越前おろしそば」とは一体何なのか？！その美味しさの秘密とは？
              </p>
            </div>
          </div>
          <div class="ex_charm_wrap">
            <div class="ex_charm_head">
              <div class="explanation_flag_wrap">
                <div class="explanation_flag">
                    <img
                      src="<?= get_template_directory_uri(); ?>/img/crown.png"
                      alt=""
                      class="explanation_flag_crown"
                    />
                    <p class="explanation_flag_heading">そばが美味しい都道府県　2年連続</p>
                    <p class="explanation_flag_number">NO.<span>1</span></p>
                  </div>
                  <div class="explanation_flag">
                    <img
                      src="<?= get_template_directory_uri(); ?>/img/crown.png"
                      alt=""
                      class="explanation_flag_crown"
                    />
                    <p class="explanation_flag_heading">地元ならではのおいしい食べ物が多かった都道府県</p>
                    <p class="explanation_flag_number">NO.<span>1</span></p>
                  </div>
                  <div class="explanation_flag">
                    <img
                      src="<?= get_template_directory_uri(); ?>/img/crown.png"
                      alt=""
                      class="explanation_flag_crown"
                    />
                    <p class="explanation_flag_heading">蕎麦鑑定士が選ぶ日本一おいしいそば産地大賞</p>
                    <p class="explanation_flag_number">NO.<span>1</span></p>
                  </div>
              </div>
              <div class="ex_charm_title">
                越前おろしそば<span class="ex_charm_title_small">の</span><br />
                魅力<span class="ex_charm_title_small">に</span>迫る。
              </div>
            </div>
            <div class="sub_overview_card ex_overview_card">
              <p class="sub_overview_card_text_small">
                越前おろしそばが日本一美味しい理由。<br>
                それはおろしそばのルーツや製法に、他のお蕎麦とは違う秘密があります。<br>
                香り高く、寒い冬でも変わらないぶっかけスタイルで食される、越前おろしそばの美味しさの秘密をご紹介します。
              </p>
              <img
                src="<?= get_template_directory_uri(); ?>/img/overview_img2.png"
                alt="御朱印の写真"
                class="overview_card_img"
              />
              <p class="sub_overview_card_text_large">
                越前おろしそばの美味しさの秘密を知ったら、その魅力を舌で、肌で、感じる旅に出よう！
              </p>
            </div>
          </div>
          <div class="ex_how_btn_wrap">
            <ul class="ex_how_btn_box">
              <li>
                <a href="https://gokyoin.com/explanation#history"><img src="<?= get_template_directory_uri(); ?>/img/ex_history_button.png" alt="" /></a>
              </li>
              <li>
                <a href="https://gokyoin.com/explanation/#method"><img src="<?= get_template_directory_uri(); ?>/img/ex_method_button.png" alt="" /></a>
              </li>
              <li>
                <a href="https://gokyoin.com/explanation#secret"><img src="<?= get_template_directory_uri(); ?>/img/ex_secret_button.png" alt="" /></a>
              </li>
            </ul>
          </div>
          <div class="ex_how_wrap">
            <div class="ex_history" id="history">
              <div class="ex_how_img_box">
                <div class="ex_how_noren">
                  <img src="<?= get_template_directory_uri(); ?>/img/ex_noren.png" alt="" />
                </div>
                <div class="ex_how_back"></div>
                <div class="noren_text">
                  戦国時代から始まる<br />越前おろしそば
                </div>
                <img src="<?= get_template_directory_uri(); ?>/img/footer_img.png" alt="" />
              </div>
              <div class="ex_how_title history_title">越前そばの歴史を知る</div>
              <div class="ex_history_timeline">
                <ul class="cbp_tmtimeline">
                  <li>
                    <time class="cbp_tmtime" datetime="2013-04-10 18:30">
                      <span>710年</span>
                    </time>
                    <div class="cbp_tmicon cbp_tmicon-phone"></div>
                    <div class="cbp_tmlabel">
                      <h2>そばの起源</h2>
                      <div class="cbp_text_box">
                        <div class="cbp_img">
                          <img src="<?= get_template_directory_uri(); ?>/img/ex_history.png" alt="" />
                        </div>
                        <p>
                          日本でそばが食用とされたのは、奈良時代と推定されています。救荒作物として栽培され、滋賀県の伊吹山付近から木曽、甲斐などの山国に普及しました。そして後に、信州が産地として知られるようになりました。
                        </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <time class="cbp_tmtime" datetime="2013-04-10 18:30">
                      <span>1473年</span>
                    </time>
                    <div class="cbp_tmicon cbp_tmicon-phone"></div>
                    <div class="cbp_tmlabel">
                      <h2>越前そばの始まり</h2>
                      <div class="cbp_text_box">
                        <div class="cbp_img">
                          <img src="<?= get_template_directory_uri(); ?>/img/ex_history.png" alt="" />
                        </div>
                        <p>
                          越前国を治めていた朝倉孝景(たかかげ)が一乗谷に築城した頃に、そば栽培を奨励したのが始まりと伝えられています。越前国は当時から全国でも有数の米どころで、主食となる米は豊富にありました。
                        </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <time class="cbp_tmtime" datetime="2013-04-10 18:30">
                      <span>1601年</span>
                    </time>
                    <div class="cbp_tmicon cbp_tmicon-phone"></div>
                    <div class="cbp_tmlabel">
                      <h2>越前おろしそばの由来</h2>
                      <div class="cbp_text_box">
                        <div class="cbp_img">
                          <img src="<?= get_template_directory_uri(); ?>/img/ex_history.png" alt="" />
                        </div>
                        <p>
                          今の「越前おろしそば」のスタイルが生まれたのは400年以上前、福井藩家老であった本多富正が、京都・伏見からそば職人の金子 権左衛門(ごんざえもん)を連れてきたのが始まりとされています。また、金子 権左衛門の助言を受け、健康面でもプラスになるよう、大根おろしと一緒に食べるそばを考案したのが「越前おろしそば」の由来とされています。
                        </p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <time class="cbp_tmtime" datetime="2013-04-10 18:30">
                      <span>1947年</span>
                    </time>
                    <div class="cbp_tmicon cbp_tmicon-phone"></div>
                    <div class="cbp_tmlabel">
                      <h2>名前の由来</h2>
                      <div class="cbp_text_box">
                        <div class="cbp_img">
                          <img src="<?= get_template_directory_uri(); ?>/img/ex_history.png" alt="" />
                        </div>
                        <p>
                          「越前そば」という名前が全国に広まったのは昭和になってから。昭和22年10月に昭和天皇が福井に来られた際、2杯ものおろしそばを召し上がられ、その後皇居に戻られた後も、「越前のそばは大変おいしかった」と懐かしがられたという逸話から、「越前そば」という名前が全国的に知られるようになりました。
                        </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="ex_method" id="method">
              <div class="ex_how_img_box">
                <div class="ex_how_noren">
                  <img src="<?= get_template_directory_uri(); ?>/img/ex_noren2.png" alt="" />
                </div>
                <div class="ex_how_back"></div>
                <div class="noren_text">
                  特徴的な製法が生み出す<br />越前おろしそばの美味しさの秘密
                </div>
                <img src="<?= get_template_directory_uri(); ?>/img/footer_img.png" alt="" />
              </div>
              <div class="ex_how_title method_title">越前そばの製法を知る</div>
              <div class="method_text_box">
                <div class="method_text_item">
                  <div class="method_text_text">
                    <div class="method_head">
                      <img src="<?= get_template_directory_uri(); ?>/img/ex_headline.png" alt="" />
                    </div>
                    <div class="method_text">
                      <p>
                        越前おろしそばは「挽きぐるみ」という粉を使用しています。挽きぐるみとは玄そば(殻のついたままのそばの実)の殻をむき、甘皮ごとすべて挽いてそば粉にする方法です。
                      </p>
                    </div>
                  </div>
                  <div class="method_img_box">
                    <div class="method_img">
                      <img src="<?= get_template_directory_uri(); ?>/img/explanation_img.png" alt="" />
                    </div>
                  </div>
                </div>
                <div class="border-box">
                  <div class="ex_border"></div>
                  <div class="ex_border"></div>
                </div>
                <div class="method_text_item">
                  <div class="method_text_text">
                    <div class="method_head">
                      <img src="<?= get_template_directory_uri(); ?>/img/ex_headline.png" alt="" />
                    </div>
                    <div class="method_text">
                      <p>
                        石臼挽きとは上下２つの石臼を使ってそばの実を粉にする方法です。
                      </p>
                    </div>
                  </div>
                  <div class="method_img_box">
                    <div class="method_img">
                      <img src="<?= get_template_directory_uri(); ?>/img/explanation_img.png" alt="" />
                    </div>
                  </div>
                </div>
                <div class="border-box">
                  <div class="ex_border"></div>
                  <div class="ex_border"></div>
                </div>
                <div class="method_text_item">
                  <div class="method_text_text">
                    <div class="method_head">
                      <img src="<?= get_template_directory_uri(); ?>/img/ex_headline.png" alt="" />
                    </div>
                    <div class="method_text">
                      <p>
                        そばを打つ時小麦粉を使用するのですが、越前おろしそばでは強力粉をつなぎに使用します。
                      </p>
                    </div>
                  </div>
                  <div class="method_img_box">
                    <div class="method_img">
                      <img src="<?= get_template_directory_uri(); ?>/img/explanation_img.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ex_secret" id="secret">
              <div class="ex_how_img_box">
                <div class="ex_how_noren">
                  <img src="<?= get_template_directory_uri(); ?>/img/ex_noren3.png" alt="" />
                </div>
                <div class="ex_how_back"></div>
                <div class="noren_text">
                  美味しさの秘密は、<br />その特徴的な食べ方にも
                </div>
                <img src="<?= get_template_directory_uri(); ?>/img/footer_img.png" alt="" />
              </div>
              <div class="ex_how_title secret_title">
                越前そばの味の秘密を知る
              </div>
              <div class="ex_secret_text_box">
                <div class="ex_secret_text">
                  越前おろしそばの美味しさ解説
                </div>
                <div class="ex_secret_img">
                  <img src="<?= get_template_directory_uri(); ?>/img/detail_btn_img.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
<?php get_footer(); ?>