<?php snippet('header') ?>
<?php $image = $page->image(); ?>
  <main class="content" role="main">

    <section class="about">
      <h1 class="about-title"><?= $page->intro()->html() ?></h1>

      <?php if ($image): ?>
        <img class="headshot" src="<?= $image->url() ?>" alt="">
      <?php endif; ?>
      <div class="about-copy">
        <?= $page->text()->kirbytext() ?>
      </div>
    </section>
    <hr>
  </main>
<?php snippet('footer') ?>