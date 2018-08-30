<?php if ($image = $item->coverimage()->toFile()): ?>
  <figure>
    <img class="cover-image" src="<?= $image->url() ?>" alt="" />
  </figure>
<?php endif ?>
