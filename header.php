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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/explanation.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/blog.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/store.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/overview.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/single.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/top.css" />
    <title>御蕎印プロジェクト</title>
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="toppage_wrap">
      <header>
        <div class="header_spacer"></div>
        <div id="hidden-header">
          <img class="header_noren" src="<?= get_template_directory_uri(); ?>/img/noren_white.png" />
            <a href="https://gokyoin.com/"><img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="" class="header_logo" />
          <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="" class="header_logo" />
          </a>
        </div>
        <input type="checkbox" id="menu_check" />
          <label
            id="js-menuTrigger"
            class="js-openTrigger"
            for="menu_check"
          ></label>
        <nav class="header_nav" id="js-nav">
          <ul class="header_list">
            <li><a href="https://gokyoin.com/" class="header_link">TOP</a></li>
            <li><a href="https://gokyoin.com/overview" class="header_link">御蕎印プロジェクト</a></li>
            <li><a href="https://gokyoin.com/explanation" class="header_link">越前おろしそばとは</a></li>
            <li><a href="https://gokyoin.com/#cource" class="header_link">モデルコース</a></li>
            <li><a href="https://gokyoin.com/store" class="header_link">御蕎印参加店舗紹介</a></li>
            <li><a href="https://gokyoin.com/blog" class="header_link">越前おろしそばブログ</a></li>
            <li><a href="https://gokyoin.myshopify.com" target=”_blank” class="header_link">御蕎印帳通販</a></li>
          </ul>
        </nav>
      </header>
      <div id="fixed-header" class="fixed-header">
        fixed-header
      </div>