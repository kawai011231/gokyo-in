<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/explanation.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/blog.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/store.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/overview.css">
    <title>御蕎印プロジェクト</title>
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="toppage_wrap">
      <header>
        <div class="header_spacer"></div>
        <img class="header_noren" src="<?= get_template_directory_uri(); ?>/img/noren_white.png" />
        <input type="checkbox" id="menu_check" />
        <label
          id="js-menuTrigger"
          class="js-openTrigger"
          for="menu_check"
        ></label>
        <nav class="header_nav" id="js-nav">
          <ul class="header_list">
            <li><a href="https://gokyoin.com/" class="header_link">TOP</a></li>
            <li><a href="https://gokyoin.com/overview" class="header_link">御蕎印プロジェクトとは</a></li>
            <li><a href="https://gokyoin.com/explanation" class="header_link">越前そばとは</a></li>
            <li><a href="https://gokyoin.com/store" class="header_link">越前そば名店紹介</a></li>
            <li><a href="https://gokyoin.com/#cource" class="header_link">モデルコース</a></li>
            <li><a href="https://gokyoin.com/blog" class="header_link">越前そば名店ブログ</a></li>
            <li><a href="https://gokyoin.com/store" class="header_link">御蕎印帳通販</a></li>
          </ul>
        </nav>
        <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="" class="header_logo" />
      </header>