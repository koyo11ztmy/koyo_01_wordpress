<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta property='og:type' content='website'>
  <meta property='og:title' content='PON DESIGN'>
  <meta property='og:url' content='https://pon-design.netlify.app/'>
  <meta property='og:description'
    content='PON DESIGNは、新規サイト制作や運用、アプリ開発に強いWeb制作会社です。サイト作りはお客様の夢を叶えること。だからこそ成果を出すサイトを全力でお作りします。'>
  <meta property="og:image" content="https://pon-design.netlify.app/img/ogp.png">
  <meta name="description"
    content="PON DESIGNは、新規サイト制作や運用、アプリ開発に強いWeb制作会社です。サイト作りはお客様の夢を叶えること。だからこそ成果を出すサイトを全力でお作りします。" />
  <title><?php titles(); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/41b1f8d62e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" media="all" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icon-192x192.png">
  <link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-180x180.png">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <?php wp_head(); ?>
</head>
<body>
  <header class="l-header">
    <div class="l-header__logo">
      <h1 class="logo">
        <a href="." class="logo__link"><img class="logo__img" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="PON DESIGN"></a>
      </h1>
    </div>
    <div class="l-header__nav">
      <nav class="p-global-nav">
        <ul class="p-global-nav__list">
          <li class="p-global-nav__item"><a class='p-global-nav__link' href='/news.'>news</a></li>
          <li class="p-global-nav__item"><a class='p-global-nav__link' href='/service.'>service</a></li>
          <li class="p-global-nav__item"><a class='p-global-nav__link' href='/works.'>works</a></li>
          <li class="p-global-nav__item"><a class='p-global-nav__link' href='/company.'>company</a></li>
          <li class="p-global-nav__item"><a class='p-global-nav__link' href='/recruit.'>recruit</a></li>
          <li class="p-global-nav__item"><a class='p-global-nav__link' href='/contact.'>contact</a></li>
        </ul>
      </nav>
    </div>
    <button type="button" class="c-btn-menu js-btn-menu">
      <span class="c-btn-menu__line"></span>
    </button>
  </header>