<?php snippet('header') ?>

<main class="content" role="main">

  <section>
    <h1><?= $page->intro()->html() ?></h1>
    <hr>
      <?= $page->text()->kirbytext() ?>

  </section>
  <hr>
</main>

<?php snippet('footer') ?>