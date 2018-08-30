<?php snippet('header') ?>

<main class="content" role="main">
  <?php
      if ($pagination->page() == 1):
      ?>
    <div class="intro text">
      <?= $page->text()->kirbytext() ?>
    </div>
    <?php endif ?>

    <hr />

    <section class="articles-list">
      <?php if ($articles->count()): ?>
      <?php foreach ($articles as $article): ?>

      <article class="article index">

        <section class="item-header">
          <h2 class="item-title">
                <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              </h2>

          <p class="item-date">
            <?= $article->date('F jS, Y') ?>
          </p>
        </section>

        <?php snippet('coverimage', $article) ?>

        <div class="text">
          <p>
            <?= $article->text()->kirbytext()->excerpt(50, 'words') ?>
              <a href="<?= $article->url() ?>" class="article-more">read more</a>
          </p>
        </div>

      </article>

      <hr />

      <?php endforeach ?>
      <?php else: ?>
      <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
    </section>

    <?php snippet('pagination') ?>
</main>

<?php snippet('footer') ?>