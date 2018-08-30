<?php snippet('header') ?>

  <main class="content" role="main">

      <header class="item-header">
        <h1 class="item-title"><?= $page->title()->html() ?></h1>
        <div class="item-date">
          <?= $page->year() ?>
        </div>

      </header>
      <hr>
      <?= $page->text()->kirbytext() ?>

      <?php snippet('gallery') ?>



    <?php snippet('prevnext') ?>
    <hr>
  </main>
<?php snippet('footer') ?>