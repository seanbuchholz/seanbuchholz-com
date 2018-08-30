<?php

$projects = page('projects')->children()->visible();

if (isset($limit)) {
    $projects = $projects->limit($limit);
} ?>

  <section class="showcase">
    <?php if (isset($limit)): ?>
    <h2 class="showcase-title">Featured Work</h2>
    <?php else: ?>
    <h1 class="showcase-title">Project Gallery</h1>
    <?php endif; ?>
    <?php foreach ($projects as $project): ?>
    <a class="showcase-item" href="<?= $project->url() ?>">
      <?php if ($image = $project->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(600, 600); ?>
      <img class="showcase-img" src="<?= $thumb->url() ?>" alt="Thumbnail image for <?= $project->title()->html() ?>">
      <div class="caption">
        <h3 class="caption-title"><?= $project->title()->html() ?></h3>
      </div>
      <?php endif ?>
    </a>
    <?php endforeach ?>
    <?php if (isset($limit)): ?>
    <a class="showcase-link" href="<?= page('projects')->url() ?>">See more &raquo;</a>
    <?php endif; ?>
  </section>