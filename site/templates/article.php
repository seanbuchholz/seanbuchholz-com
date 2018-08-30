<?php snippet('header') ?>

  <main class="blog content" role="main">

    <article class="post">
      <header class="item-header">
        <h1 class="item-title"><?= $page->title()->html() ?></h1>
        <div class="item-date">
          <?= $page->date('F jS, Y') ?>
        </div>
      </header>
      <hr>
      <?php snippet('coverimage', $page) ?>

      <div class="post-copy">
        <?= $page->text()->kirbytext() ?>
      </div>

    </article>

    <?php snippet('prevnext', ['flip' => true]) ?>
    <hr>
  </main>

<?php snippet('footer') ?>