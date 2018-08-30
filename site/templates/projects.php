<?php snippet('header') ?>

<main class="content" role="main">
  <header class="page-header">
    <?= $page->text()->kirbytext() ?>
  </header>
  <hr />

  <?php snippet('showcase') ?>

</main>

<?php snippet('footer') ?>