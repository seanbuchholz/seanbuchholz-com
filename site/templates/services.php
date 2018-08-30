<?php snippet('header') ?>

<main class="content" role="main">

  <p>
    <?= $page->intro()->kirbytext() ?>
  </p>
  <hr>


  <section class="items webdesign">
    <h2 class="items-category">Website Design & Services</h2>
    <?php foreach ($page->children()->visible() as $item): ?>
    <?php if ($item->category() == 'webdesign' || $item->category() == 'services'): ?>
    <?php snippet('card', ['item' => $item]) ?>
    <?php endif; ?>
    <?php endforeach; ?>
  </section>

  <section class="items branding">
    <h2 class="items-category">Branding</h2>
    <?php foreach ($page->children()->visible() as $item): ?>
    <?php if ($item->category() == 'branding'): ?>
    <?php snippet('card', ['item' => $item]) ?>
    <?php endif; ?>
    <?php endforeach; ?>
  </section>

  <section class="items packages">
    <h2 class="items-category">Packages</h2>
    <?php foreach ($page->children()->visible() as $item): ?>
    <?php if ($item->category() == 'package'): ?>
    <?php snippet('card', ['item' => $item]) ?>
    <?php endif; ?>
    <?php endforeach; ?>
  </section>

</main>

<?php snippet('footer') ?>