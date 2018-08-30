<nav role="navigation">
  <ul class="nav-list">
    <?php foreach ($pages->visible() as $item): ?>
    <li class="nav-item<?= r($item->isOpen(), ' is-active') ?>">
      <a class="nav-link" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>