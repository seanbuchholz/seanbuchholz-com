<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>" prefix="og: http://ogp.me/ns#">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="author" href="humans.txt" />

  <title>
    <?= $site->title()->html() ?> | <?= $page->title()->html() ?>
  </title>


  <?php snippet('seo.metadata') ?>
  <?php snippet('seo.opengraph') ?>
  <meta property="fb:app_id" content="212344236278303">

  <script async src="https://use.fontawesome.com/e9d49cd4b8.js"></script>
  <?= css('https://fonts.googleapis.com/css?family=Lato|Raleway') ?>
  <?= css('assets/css/normalize.min.css') ?>
  <?= css('assets/css/skeleton.min.css') ?>
  <?= css('assets/css/main.min.css') ?>
  <?php snippet('h-analytics') ?>
</head>

<body>
  <?php snippet('fb-sdk') ?>

  <header class="content banner" role="banner">
    <?php if ($image = $site->image('logo.svg')): ?>
    <a href="/" class="logo">
      <img src="<?= $image->url() ?>" alt="Sean Buchholz Web Design">
    </a>
    <?php endif ?>

    <?php snippet('menu') ?>

  </header>