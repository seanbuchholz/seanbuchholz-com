<article class="card">
  <header class="card-header">
    <h3 class="card-title"><?= $item->title()->html() ?></h3>
  </header>
  <section class="card-body">
    <?= $item->description()->kirbytext() ?>
  </section>
  <footer class="card-footer">
    <div class="card-price">
      <span class="item-price">$<?= $item->price()->html() ?></span>
      <?php if ($item->priceper()->isNotEmpty()): ?>
        <span class="priceper">per <?= $item->priceper()->html() ?></span>
      <?php endif; ?>
    </div>
  </footer>
</article>
