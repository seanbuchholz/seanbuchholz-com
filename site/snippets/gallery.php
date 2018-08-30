<section class="gallery">
  <?php foreach ($page->images()->sortBy('sort', 'asc') as $image): ?>
  <figure class="gallery-item">
    <a class="gallery-item-link" href="<?= $image->url() ?>">
      <img class="gallery-item-image" src="<?= $image->url() ?>" alt="<?= $image->title() ?>">
    </a>
  </figure>
  <?php endforeach ?>
</section>